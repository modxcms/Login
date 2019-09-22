<?php
/**
 * Login
 *
 * Copyright 2010 by Shaun McCormick <shaun+login@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * Handles changing of user's password via a form
 *
 * @package login
 * @subpackage controllers
 */
class LoginChangePasswordController extends LoginController {
    /** @var modUserProfile $profile */
    public $profile;
    /** @var array $errors */
    public $errors = array();

    public function initialize() {
        $this->modx->lexicon->load('login:register');
        $this->modx->lexicon->load('login:changepassword');
        $this->setDefaultProperties(array(
            'fieldConfirmNewPassword' => 'password_new_confirm',
            'fieldNewPassword' => 'password_new',
            'fieldOldPassword' => 'password_old',
            'placeholderPrefix' => 'logcp.',
            'preHooks' => '',
            'redirectToLogin' => true,
            'reloadOnSuccess' => true,
            'reloadOnSuccessVar' => 'logcp-success',
            'submitVar' => 'logcp-submit',
            'successMessage' => $this->modx->lexicon('login.password_changed'),
            'validate' => '',
            'validateOldPassword' => true,
            'errTpl' => 'lgnErrTpl',
        ));
    }

    /**
     * Process the controller
     * @return string
     */
    public function process() {
        if (!$this->verifyAuthentication()) return '';

        $this->getProfile();
        if (empty($this->profile)) return '';

        /* if a submission has occurred */
        if (!empty($_POST) && isset($_POST[$this->getProperty('submitVar','logcp-submit')])) {
            $this->handlePost();
        }
        return '';
    }

    /**
     * Get the Profile of the active User
     * @return modUserProfile
     */
    public function getProfile() {
        $this->profile = $this->modx->user->getOne('Profile');
        if (empty($this->profile)) {
            $this->modx->log(modX::LOG_LEVEL_ERROR,'Could not find profile for user: '.$this->modx->user->get('username'));
        } else {
            $placeholders = array_merge($this->profile->toArray(),array(
                'username' => $this->modx->user->get('username'),
                'id' => $this->modx->user->get('id'),
            ));
            $placeholderPrefix = rtrim($this->getProperty('placeholderPrefix', 'logcp.'), '.');
            $this->modx->toPlaceholders($placeholders, $placeholderPrefix);
        }
        return $this->profile;
    }

    /**
     * See if the user has permission to change their password. If not, redirect.
     * @return boolean
     */
    public function verifyAuthentication() {
        $verified = true;
        /* verify authenticated status */
        if (!$this->modx->user->hasSessionContext($this->modx->context->get('key'))) {
            if ($this->getProperty('redirectToLogin',true,'isset')) {
                $this->modx->sendUnauthorizedPage();
            }
            $verified = false;
        }
        return $verified;
    }

    /**
     * Remove the submitVar from the fields array
     * @return void
     */
    public function removeSubmitVar() {
        $submitVar = $this->getProperty('submitVar','logcp-submit');
        if (!empty($submitVar)) {
            $this->dictionary->remove($submitVar);
        }
    }

    /**
     * Validate the form with FormIt-style validation
     * @return array
     */
    public function validate() {
        $this->loadValidator();
        $fields = $this->validator->validateFields($this->dictionary,$this->getProperty('validate',''));
        
        $passwordFields = array(
            'fieldConfirmNewPassword' => $this->getProperty('fieldConfirmNewPassword','password_new_confirm'),
            'fieldNewPassword' => $this->getProperty('fieldNewPassword','password_new'),
            'fieldOldPassword' => $this->getProperty('fieldOldPassword','password_old'),
        );

        foreach ($fields as $k => $v) {
            if(!in_array($k,$passwordFields)) {
                $fields[$k] = str_replace(array('[', ']'), array('&#91;', '&#93;'), $v);
            }
        }
        
        $this->dictionary->fromArray($fields);

        return $this->validator->getErrors();
    }

    /**
     * Handle the form submission, properly sanitizing and validating the data, then processing the password change
     * @return string
     */
    public function handlePost() {
        $this->loadDictionary();
        $this->removeSubmitVar();

        $this->errors = $this->validate();
        if (empty($this->errors)) {
            if ($this->loadPreHooks()) {
                $this->validateOldPassword();
                $this->validatePasswordLength();
                $this->confirmMatchedPasswords();
                if (empty($this->errors)) {
                    $this->changePassword();
                } else {
                    $errorMsg = $this->prepareFailureMessage();
                    $placeholderPrefix = rtrim($this->getProperty('placeholderPrefix', 'logcp.'), '.');
                    $this->modx->toPlaceholder('error_message', $errorMsg, $placeholderPrefix);
                }
            }
        }
        $this->setToPlaceholders();
        return '';
    }

    /**
     * Actually attempt to change the password
     *
     * @return boolean
     */
    public function changePassword() {
        $fieldNewPassword = $this->getProperty('fieldNewPassword');
        $fieldOldPassword = $this->getProperty('fieldOldPassword');
        $validateOldPassword = $this->getProperty('validateOldPassword',true,'isset');
        $newPassword = $this->dictionary->get($fieldNewPassword);
        $oldPassword = $this->dictionary->get($fieldOldPassword);

        /* attempt to change the password */
        $success = $this->modx->user->changePassword($newPassword,$oldPassword,$validateOldPassword);
        if (!$success) {
            /* for some reason it failed (possibly a plugin) so send error message */
            $this->errors[$fieldNewPassword] = $this->modx->lexicon('login.password_err_change');
        } else {
            $this->loadPostHooks();

            if (!$this->reloadOnSuccess()) {
                $this->setSuccessMessagePlaceholder();
            }
        }
        return $success;
    }

    /**
     * Set fields and errors to placeholders for a form reload
     * 
     * @return void
     */
    public function setToPlaceholders() {
        $placeholderPrefix = rtrim($this->getProperty('placeholderPrefix', 'logcp.'), '.');
        $errorPrefix = ($placeholderPrefix) ? $placeholderPrefix . '.error' : 'error';

        $fields = $this->dictionary->toArray();
        $fields = $this->escapePlaceholders($fields);

        $this->modx->toPlaceholders($this->errors, $errorPrefix);
        $this->modx->toPlaceholders($fields, $placeholderPrefix);
    }

    /**
     * Load any pre-password-change preHooks that can stop the event propagation
     * @return boolean
     */
    public function loadPreHooks() {
        $passed = true;
        $this->loadHooks('preHooks');
        $preHooks = $this->getProperty('preHooks','');
        if (!empty($preHooks)) {
            $this->preHooks->loadMultiple($preHooks,$this->dictionary->toArray(),array(
                'user' => &$this->modx->user,
                'submitVar' => $this->getProperty('submitVar'),
                'reloadOnSuccess' => $this->getProperty('reloadOnSuccess'),
                'fieldOldPassword' => $this->getProperty('fieldOldPassword'),
                'fieldNewPassword' => $this->getProperty('fieldNewPassword'),
                'fieldConfirmNewPassword' => $this->getProperty('fieldConfirmNewPassword'),
            ));
            $values = $this->preHooks->getValues();
            if (!empty($values)) {
                $this->dictionary->fromArray($values);
            }
        }
        /* process preHooks */
        if ($this->preHooks->hasErrors()) {
            $placeholderPrefix = rtrim($this->getProperty('placeholderPrefix', 'logcp.'), '.');
            $errorPrefix = ($placeholderPrefix) ? $placeholderPrefix . '.error' : 'error';
            $this->modx->toPlaceholders($this->preHooks->getErrors(), $errorPrefix);
            $this->modx->toPlaceholder('error_message', $this->preHooks->getErrorMessage(), $placeholderPrefix);
            $passed = false;
        }
        return $passed;
    }

    /**
     * If wanted, ensure the old password is validated against the current user's old password
     * @return boolean
     */
    public function validateOldPassword() {
        $validated = true;
        /* if changing the password */
        if ($this->getProperty('validateOldPassword',true,'isset')) {
            $fields = $this->dictionary->toArray();
            $fieldOldPassword = $this->getProperty('fieldOldPassword','password_old');
            
            $version = $this->modx->getVersionData();
            if (version_compare($version['full_version'],'2.1.0','>=')) {
                if (empty($fields[$fieldOldPassword]) || !$this->modx->user->passwordMatches($fields[$fieldOldPassword])) {
                    $this->errors[$fieldOldPassword] = $this->modx->lexicon('login.password_invalid_old');
                    $validated = false;
                }
            } else {
                if (empty($fields[$fieldOldPassword]) || md5($fields[$fieldOldPassword]) != $this->modx->user->get('password')) {
                    $this->errors[$fieldOldPassword] = $this->modx->lexicon('login.password_invalid_old');
                    $validated = false;
                }
            }
        }
        return $validated;
    }

    /**
     * Ensure the new password is at least the minimum length as specified in System Settings
     * 
     * @return boolean
     */
    public function validatePasswordLength() {
        $validated = true;
        $fieldNewPassword = $this->getProperty('fieldNewPassword','password_new');
        $newPassword = $this->dictionary->get($fieldNewPassword);

        $minLength = $this->modx->getOption('password_min_length',null,8);
        if (empty($newPassword) || strlen($newPassword) < $minLength) {
            $this->errors[$fieldNewPassword] = $this->modx->lexicon('login.password_too_short',array('length' => $minLength));
            $validated = false;
        }
        return $validated;
    }

    /**
     * If set, confirm that the confirmation password matches the new password
     * @return boolean
     */
    public function confirmMatchedPasswords() {
        $validated = true;
        $fieldConfirmNewPassword = $this->getProperty('fieldConfirmNewPassword');
        /* if using confirm, ensure they match */
        if (!empty($fieldConfirmNewPassword)) {
            $confirmNewPassword = $this->dictionary->get($fieldConfirmNewPassword);
            $fieldNewPassword = $this->getProperty('fieldNewPassword','password_new');
            $newPassword = $this->dictionary->get($fieldNewPassword);
            if (empty($confirmNewPassword) || $newPassword != $confirmNewPassword) {
                $this->errors[$fieldConfirmNewPassword] = $this->modx->lexicon('login.password_no_match');
                $validated = false;
            }
        }
        return $validated;
    }

    /**
     * Do any post-password-changing hooks
     * @return void
     */
    public function loadPostHooks() {
        $postHooks = $this->getProperty('postHooks','');
        if (!empty($postHooks)) {
            $placeholderPrefix = rtrim($this->getProperty('placeholderPrefix', 'logcp.'), '.');
            $errorPrefix = ($placeholderPrefix) ? $placeholderPrefix . '.error' : 'error';
            $this->loadHooks('postHooks');
            $fields['changepassword.user'] = &$this->modx->user;
            $fields['changepassword.profile'] =& $this->profile;
            $fields['changepassword.fieldOldPassword'] = $this->getProperty('fieldOldPassword');
            $fields['changepassword.fieldNewPassword'] = $this->getProperty('fieldNewPassword');
            $fields['changepassword.fieldConfirmNewPassword'] = $this->getProperty('fieldConfirmNewPassword');
            $this->postHooks->loadMultiple($postHooks,$this->dictionary->toArray());

            /* process post hooks errors */
            if ($this->postHooks->hasErrors()) {
                $this->modx->toPlaceholders($this->postHooks->getErrors(), $errorPrefix);

                $errorMsg = $this->postHooks->getErrorMessage();
                $this->modx->toPlaceholder('error_message', $errorMsg, $placeholderPrefix);
            }
        }
    }

    /**
     * If desired, reload this page on success
     * @return mixed
     */
    public function reloadOnSuccess() {
        $reloadOnSuccess = $this->getProperty('reloadOnSuccess',true,'isset');
        if ($reloadOnSuccess) {
            /* if reloading the page after success */
            $url = $this->modx->makeUrl($this->modx->resource->get('id'),'',array(
                $this->getProperty('reloadOnSuccessVar') => 1,
            ),'full');
            $this->modx->sendRedirect($url);
        }
        return $reloadOnSuccess;
    }

    /**
     * Set a success message placeholder
     * @return void
     */
    public function setSuccessMessagePlaceholder() {
        $placeholderPrefix = rtrim($this->getProperty('placeholderPrefix', 'logcp.'), '.');
        $this->modx->toPlaceholder('passwordChanged', true, $placeholderPrefix);
        $successMessage = $this->getProperty('successMessage');
        if (!empty($successMessage)) {
            $this->modx->toPlaceholder('successMessage', $successMessage, $placeholderPrefix);
        }
    }

    /**
     * @param string $defaultErrorMessage
     * @return string
     */
    public function prepareFailureMessage($defaultErrorMessage = '') {
        $errorOutput = '';
        $errTpl = $this->getProperty('errTpl');
        $errors = $this->errors;
        if (!empty($errors)) {
            foreach ($errors as $error) {
                $errorOutput .= $this->modx->getChunk($errTpl,  array('msg' => $error));
            }
        } else {
            $errorOutput = $this->modx->getChunk($errTpl, array('msg' => $defaultErrorMessage));
        }
        return $errorOutput;
    }
}
return 'LoginChangePasswordController';
