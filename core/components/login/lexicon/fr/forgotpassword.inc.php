<?php
/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modxcms.com> and Shaun McCormick
 * <shaun@modxcms.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
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
 * Forgot Password lexicon for Login
 *
 * @package login
 * @subpackage lexicon
 */
$_lang['login.email'] = 'Adresse email';
$_lang['login.forgot_password'] = 'Mot de passe oublié';
$_lang['login.forgot_password_email_subject'] = 'Email de récupération de mot de passe';
$_lang['login.forgot_password_email_text'] = 'Bonjour [[+username]] <p>,</p>
<p>pour activer votre nouveau mot de passe, veuillez cliquer sur le lien suivant :</p>
<p><a href="[[+confirmUrl]]">[[+confirmUrl]]</a></p>
<p>si l’opération réussit, vous pouvez utiliser ce mot de passe pour vous connecter :</p>
<p><strong>mot de passe :</strong> [[+password]]</p>
<p>si vous n’a pas demandé ce message, veuillez l’ignorer. </p>
<p>Merci,<br />
<em>[[++site_name]] l’Administration du Site</em></p>';
$_lang['login.or_forgot_username'] = 'Oublié votre identifiant ?';
$_lang['login.reset_password'] = 'Réinitialiser le mot de passe';
$_lang['login.username'] = 'Identifiant';
$_lang['login.user_err_nf_email'] = 'Si l’utilisateur ou le courrier électronique existe, vous recevrez un courriel sous peu.';
$_lang['login.user_err_nf_username'] = 'Si l’utilisateur ou le courrier électronique existe, vous recevrez un courriel sous peu.';
