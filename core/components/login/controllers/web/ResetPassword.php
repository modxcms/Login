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
 * Resets the user's password after a successful identity verification
 *
 * @package login
 * @subpackage controllers
 */
class LoginResetPasswordController extends LoginController {
    /** @var modUser $user */
    public $user;
    /** @var string $username */
    protected $username = '';
    /** @var string $password */
    protected $password = '';

    protected $errors = array ();

    public function initialize() {
        $this->setDefaultProperties(array(
            'tpl' => 'lgnResetPassTpl',
            'tplType' => 'modChunk',
            'changePasswordTpl' => 'lgnResetPassChangePassTpl',
            'changePasswordTplType' => 'modChunk',
            'changePasswordSubmitVar' => 'logcp-submit',
            'fieldConfirmNewPassword' => 'password_new_confirm',
            'fieldNewPassword' => 'password_new',
            'errTpl' => 'lgnErrTpl',
            'placeholderPrefix' => 'logcp.',
            'loginResourceId' => 1,
            'debug' => false,
            'autoLogin' => false,
            'forceChangePassword' => false,
            'expiredTpl' => 'lgnExpiredTpl',
        ));
        $this->modx->lexicon->load('login:profile');
        $this->modx->lexicon->load('login:register');
        $this->modx->lexicon->load('login:changepassword');
    }

    /**
     * Process the controller
     * @return string
     */
    public function process() {
        $this->getUser();
        if (empty($this->user)) return $this->modx->getChunk($this->getProperty('expiredTpl'));
        if (!$this->verifyIdentity()) return $this->modx->getChunk($this->getProperty('expiredTpl'));

        if ($this->getProperty('forceChangePassword') == true) {
            if (!empty($_POST) && isset($_POST[$this->getProperty('submitVar','logcp-submit')])) {
                $changed = $this->handleChangePasswordForm();
                if ($changed !== true) {
                    return $changed;
                }
            } else {
                return $this->showChangePasswordForm();
            }
        }

        if (!$this->changePassword()) return '';

        $this->eraseCache();

        if ($this->getProperty('autoLogin') == true) {
            $this->autoLogin();
        }

        $this->fireEvents();
        return $this->getResponse();
    }

    public function getUser() {
        /* get user from query params */
        $this->username = $this->login->base64url_decode($_REQUEST['lu']);
        $this->password = $this->login->base64url_decode($_REQUEST['lp']);
        if (empty($this->username) || empty($this->password)) {
            return null;
        }
        /* validate we have correct user */
        $this->user = $this->modx->getObject('modUser',array('username' => $this->username));
        return $this->user;
    }

    /**
     * Validate password to prevent middleman attacks
     * @return boolean
     */
    public function verifyIdentity() {
        $cacheKey = 'login/resetpassword/'.md5($this->user->get('id').':'.$this->user->get('username'));
        $cachePass = $this->modx->cacheManager->get($cacheKey);
        $verified = $cachePass == $this->password;

        return $verified;
    }

    /**
     * Erase the cached user data
     * @return void
     */
    public function eraseCache() {
        $cacheKey = 'login/resetpassword/'.md5($this->user->get('id').':'.$this->user->get('username'));
        $this->modx->cacheManager->delete($cacheKey);
    }

    /**
     * Change the User's password to the new one
     * @return bool
     */
    public function changePassword() {
        $saved = true;
        /* change password */
        $version = $this->modx->getVersionData();
        if (version_compare($version['full_version'],'2.1.0-rc1') >= 0) {
            $this->user->set('password',$this->password);
        } else {
            $this->user->set('password',md5($this->password));
        }
        if (!$this->getProperty('debug',false,'isset')) {
            $saved = $this->user->save();
        }
        return $saved;
    }

    /**
     * Fire change password events
     * @return void
     */
    public function fireEvents() {
        $this->modx->invokeEvent('OnWebChangePassword', array (
            'userid' => $this->user->get('id'),
            'username' => $this->user->get('username'),
            'userpassword' => $this->password,
            'user' => &$this->user,
            'newpassword' => $this->password,
        ));
        $this->modx->invokeEvent('OnUserChangePassword', array (
            'userid' => $this->user->get('id'),
            'username' => $this->user->get('username'),
            'userpassword' => $this->password,
            'user' => &$this->user,
            'newpassword' => $this->password,
        ));
    }

    /**
     * Return the response chunk
     * @return string
     */
    public function getResponse() {
        $placeholders = array(
            'username' => $this->user->get('username'),
            'loginUrl' => $this->modx->makeUrl($this->getProperty('loginResourceId',1)),
        );
        return $this->login->getChunk($this->getProperty('tpl'),$placeholders,$this->getProperty('tplType','modChunk'));
    }

    public function showChangePasswordForm() {
        return $this->login->getChunk($this->getProperty('changePasswordTpl'),null,$this->getProperty('changePasswordTplType','modChunk'));
    }

    /**
     * Validate the form with FormIt-style validation
     * @return array
     */
    public function validate() {
        $this->loadValidator();
        $fields = $this->validator->validateFields($this->dictionary,$this->getProperty('validate',''));
        foreach ($fields as $k => $v) {
            $fields[$k] = str_replace(array('[',']'),array('&#91;','&#93;'),$v);
        }
        $this->dictionary->fromArray($fields);

        return $this->validator->getErrors();
    }

    /**
     * Remove the submitVar from the fields array
     * @return void
     */
    public function removeSubmitVar() {
        $submitVar = $this->getProperty('changePasswordSubmitVar','logcp-submit');
        if (!empty($submitVar)) {
            $this->dictionary->remove($submitVar);
        }
    }

    public function handleChangePasswordForm() {
        $this->loadDictionary();
        $this->errors = $this->validate();
        if (!empty($this->errors)) {
            $placeholderPrefix = rtrim($this->getProperty('placeholderPrefix', 'logcp.'), '.');
            $this->modx->toPlaceholders($this->errors, $placeholderPrefix . '.error');
            $this->modx->toPlaceholders($this->dictionary->toArray(), $placeholderPrefix);

            return $this->showChangePasswordForm();
        }

        $this->validatePasswordLength();
        $this->confirmMatchedPasswords();

        if (!empty($this->errors)) {
            $errorMsg = $this->prepareFailureMessage();
            $this->modx->setPlaceholder($this->getProperty('placeholderPrefix').'error_message',$errorMsg);

            return $this->showChangePasswordForm();
        }

        $this->password = $this->dictionary->get('password_new');


        return true;
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
        $fieldConfirmNewPassword = $this->getProperty('fieldConfirmNewPassword','password_new_confirm');
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

    public function autoLogin() {
        if ($this->user == null) { return false; }

        $contexts = $this->getProperty('authenticateContexts', $this->modx->context->get('key'));

        $c = array(
            'login_context' => $this->modx->context->key,
            'add_contexts' => $contexts,
            'username' => $this->user->username,
            'password' => $this->password,
            'returnUrl' => '',
        );
        $this->modx->runProcessor('security/login',$c);

        return true;
    }
}
return 'LoginResetPasswordController';