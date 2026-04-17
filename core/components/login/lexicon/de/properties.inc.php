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
 * Properties lexicon for Login
 *
 * @package login
 * @subpackage lexicon
 */
/* ForgotPassword snippet */
$_lang['prop_forgotpassword.emailtpl_desc'] = 'Das Template für die Bestätigungsemail.';
$_lang['prop_forgotpassword.emailtpltype_desc'] = 'Templatetyp, der für die emailTpl-Eigenschaft benutzt wird. Der Standardwert ist Chunk.';
$_lang['prop_forgotpassword.senttpl_desc'] = 'Das Template für die Bildschirmnachricht, dass eine E-Mail erfolgreich verschickt worden ist.';
$_lang['prop_forgotpassword.senttpltype_desc'] = 'Der Templatetyp, der für die sendTpl-Eigenschaft benutzt wird. Der Standardwert ist Chunk.';
$_lang['prop_forgotpassword.tpl_desc'] = 'Das Passwort-vergessen Template.';
$_lang['prop_forgotpassword.tpltype_desc'] = 'Der Templatetyp, der für die tpl-Eigenschaft benutzt wird. Der Standardwert ist Chunk.';
$_lang['prop_forgotpassword.errtpl_desc'] = 'Das Template innerhalb dem die Fehlermeldungen ausgegeben werden.';
$_lang['prop_forgotpassword.errtpltype_desc'] = 'Der Templatetyp, der für die errTpl-Eigenschaft benutzt wird. Der Standardwert ist Chunk.';
$_lang['prop_forgotpassword.emailsubject_desc'] = 'Der Betreff für die Passwort-vergessen E-Mail.';
$_lang['prop_forgotpassword.emailtplalt_desc'] = '(Optional) Das Template für die Nur-Text-Alternative der Bestätigungmail.';
$_lang['prop_forgotpassword.resetresourceid_desc'] = 'Die Ressourcen-Id zu der Benutzer aus der Aktivierungsmail gleitet werden und in welcher der ResetPassword Snippet Aufruf steht.';
/* Login snippet */
$_lang['prop_login.actionkey_desc'] = 'Die REQUEST Variable die angibt, welche Aktion ausgeführt werden soll.';
$_lang['prop_login.loginkey_desc'] = 'Der Login-Aktion-Schlüssel.';
$_lang['prop_login.logoutkey_desc'] = 'Der Logout-Aktion-Schlüssel.';
$_lang['prop_login.loginviaemail_desc'] = 'Anmeldung mittels Benutzername oder E-Mail Adresse ermöglichen.';
$_lang['prop_login.tpltype_desc'] = 'Der Templatetyp, der für die Login und Logout Formulare benutzt wird. Der Standardwert ist Chunk.';
$_lang['prop_login.logintpl_desc'] = 'Das Logintemplate.';
$_lang['prop_login.logouttpl_desc'] = 'Das Logouttemplate.';
$_lang['prop_login.prehooks_desc'] = 'Skripte, die vor einem Benutzerlogin/-logout ausgeführt werden sollen. Es kann eine kommaseparierte Liste von Hooks angegeben werden. Sollte ein Hook nicht validieren, werden keine weitere ausgeführt. Ein Hook kann ein Snippetname oder ein Dateiname im Format `[[++assets_path]]hooks/my.hook.php` sein.';
$_lang['prop_login.posthooks_desc'] = 'Skripte, die nach einem Benutzerlogin/-logout ausgeführt werden sollen. Es kann eine kommaseparierte Liste von Hooks angegeben werden. Sollte ein Hook nicht validieren, werden keine weitere Hooks ausgeführt. Ein Hook kann ein Snippetname oder ein Dateiname im Format `[[++assets_path]]hooks/my.hook.php` sein.';
$_lang['prop_login.errtpl_desc'] = 'Das Fehlertemplate.';
$_lang['prop_login.errtpltype_desc'] = 'Der Templatetyp, der für die Fehlermeldungen benutzt wird. Standard ist Chunk.';
$_lang['prop_login.loginresourceid_desc'] = 'Eine Ressourcen-Id, zu der Benutzer nach einem erfolgreichen Login weitergeleitet werden. 0 leitet auf die gleiche Seite zurück.';
$_lang['prop_login.loginresourceparams_desc'] = 'Ein JSON Objekt von Parametern, die bei einem Login Redirekt an die URL angehängt werden, z.B.: {"test":123}';
$_lang['prop_login.logoutresourceid_desc'] = 'Ressourcen-Id zu der nach einem erfolgreichen Logout geleitet wird. 0 leitet auf die gleiche Seite zurück.';
$_lang['prop_login.logoutresourceparams_desc'] = 'Ein JSON Objekt von Parametern, die an die URL der Logout Weiterleitung angehängt werden, z.B.: {"test":123}';
$_lang['prop_login.loginmsg_desc'] = '(Optional) Nachricht für die Login Aktion. Falls leer, wird der Standardeintrag im Lexicon ausgegeben.';
$_lang['prop_login.logoutmsg_desc'] = '(Optional) Nachricht für die Logout Aktion. Falls leer, wird der Standardeintrag im Lexicon ausgegeben.';
$_lang['prop_login.redirecttoprior_desc'] = 'Wenn diese Einstellung aktiv ist, wird der Benutzer nach erfolgreichem Login zur Referrer-Seite weitergeleitet (HTTP_REFERER).';
$_lang['prop_login.redirecttoonfailedauth_desc'] = 'Eine Ressourcen-Id, zu der Benutzer nach einem nicht erfolgreichen Login weitergeleitet werden. 0 leitet auf die gleiche Seite zurück.';
$_lang['prop_login.remembermekey_desc'] = '(Optional) Dieses Feld kann genutzt werden, um den Login Status zu merken. Standard ist `rememberme`.';
$_lang['prop_login.contexts_desc'] = '(Experimentell) Eine kommaseparierte Liste von Kontexten, in die der Benutzer eingeloggt wird. Standardwert ist der aktuelle Kontext.';
$_lang['prop_login.toplaceholder_desc'] = 'Wenn diese Einstellung aktiv ist, wird die Ausgabe des Snippets an einen Platzhalter dieses Namens übergeben, statt die Inhalte direkt auszugeben.';
/* Profile snippet */
$_lang['prop_profile.prefix_desc'] = 'Das Prefix, das für alle Platzhalter des Snippets genutzt werden soll.';
$_lang['prop_profile.user_desc'] = '(Optional). Entweder eine Benutzer-Id oder ein Benutzername. Falls gesetzt, wird dieser Wert genutzt statt der des aktuell eingeloggten Benutzers.';
$_lang['prop_profile.useextended_desc'] = 'Wenn diese Einstellung aktiv ist, werden zusätzliche Felder als erweiterte Benutzerfelder benutzt.';
/* Register snippet */
$_lang['prop_register.submitvar_desc'] = 'Die Prüfvariable für die Register Snippet Funktionalität. Falls nicht gesetzt oder leer, wird Register alle POST-Inhalte des Formulars auswerten.';
$_lang['prop_register.usergroups_desc'] = '(Optional) Eine kommaseparierte Liste von Benutzergruppen-Namen oder -Ids um neu registrierte Benutzer zu diesen Benutzergruppen hinzuzufügen.';
$_lang['prop_register.usergroupsfield_desc'] = 'Der Name des Feldes, mit dem die Benutzergruppen angegeben werden, denen neue Benutzer automatisch zugewiesen werden.';
$_lang['prop_register.usergroupsfielddisallow_desc'] = 'Optional. Eine durch Kommas getrennte Liste von Namen oder IDs von Benutzergruppen, denen der neu registrierte Benutzer nicht hinzugefügt werden darf. Wird nur verwendet, wenn dieser Wert nicht leer ist.';
$_lang['prop_register.usergroupsfieldallow_desc'] = 'Optional. Eine durch Kommas getrennte Liste von Namen oder IDs von Benutzergruppen, denen der neu registrierte Benutzer hinzugefügt werden kann. Wird nur verwendet, wenn dieser Wert nicht leer ist.';
$_lang['prop_register.submittedresourceid_desc'] = 'Wenn diese Einstellung aktiv ist, wird der Benutzer zu dieser Ressource-Id nach dem Absenden des Registrierungsformulars weitergeleitet.';
$_lang['prop_register.usernamefield_desc'] = 'Der Name des Feldes für den Benutzernamen des registrierten Benutzers.';
$_lang['prop_register.passwordfield_desc'] = 'Der Name des Feldes für das Passwort des neuen Benutzers.';
$_lang['prop_register.emailfield_desc'] = 'Der Name des Feldes für die E-Mail Adresse des neuen Benutzers.';
$_lang['prop_register.successMsg_desc'] = 'Optional. Wenn die Umleitung nicht über den Parameter submittedResourceId erfolgt, wird stattdessen diese Meldung angezeigt.';
$_lang['prop_register.persistparams_desc'] = '(Optional) Ein JSON Objekt mit Parametern, die über den Registrierungsprozess hinaus gespeichert werden sollen. Dies ist nützlich, wenn Sie die ConfirmRegister-Weiterleitung benutzen um auf eine andere Seite zu weiterzuleiten (z.B. Einkaufswägen).';
$_lang['prop_register.prehooks_desc'] = 'Skripte, die vor einer Validation ausgeführt werden sollen. Es kann eine kommaseparierte Liste von Hooks angegeben werden. Sollte ein Hook nicht validieren, werden keine weitere ausgeführt. Ein Hook kann ein Snippetname oder ein Dateiname im Format `[[++assets_path]]hooks/my.hook.php` sein.';
$_lang['prop_register.posthooks_desc'] = 'Skripte, die nach der Registrierung des Nutzers ausgeführt werden sollen. Es kann eine kommaseparierte Liste von Hooks angegeben werden. Sollte ein Hook nicht validieren, werden keine weitere ausgeführt. Ein Hook kann ein Snippetname oder ein Dateiname im Format `[[++assets_path]]hooks/my.hook.php` sein.';
$_lang['prop_register.useextended_desc'] = 'Wenn diese Einstellung aktiv ist, werden zusätzliche Felder als erweiterte Benutzerfelder benutzt.';
$_lang['prop_register.excludeextended_desc'] = 'Eine kommaseparierte Liste mit Feldnamen, die nicht als erweiterte Felder gespeichert werden.';
$_lang['prop_register.activation_desc'] = 'Legt fest, ob eine Aktivierung für die Registrierung benötigt wird oder nicht. Falls ja, wird der Benutzer nicht als aktiv gekennzeichnet, bis er seinen Account aktiviert hat. Standard ist ja. Funktioniert nur, wenn der Registrierungprozess ein E-Mail-Feld übergibt.';
$_lang['prop_register.activationttl_desc'] = 'Zeit in Minuten, nach der die Aktivierungsmail ungültig wird. Standard ist 3 Stunden.';
$_lang['prop_register.activationresourceid_desc'] = 'Die Ressourcen-Id, auf der das ConfirmRegister Snippet für die Aktivierung aufgerufen wird.';
$_lang['prop_register.activationemail_desc'] = 'Wenn diese Einstellung aktiv ist, wird die Aktivierungsmail an diese E-Mail Adresse gesendet, statt an die des neu registrierten Benutzers.';
$_lang['prop_register.activationemailsubject_desc'] = 'Der Betreff der Aktivierungsmail.';
$_lang['prop_register.activationemailtpltype_desc'] = 'Der Templatetyp, der für die Aktivierungsmail benutzt wird. Standard ist Chunk.';
$_lang['prop_register.activationemailtpl_desc'] = 'Das Aktivierungsmail Template.';
$_lang['prop_register.activationemailtplalt_desc'] = '(Optional) Das Template für die Nur-Text-Alternative der Aktivierungsmail.';
$_lang['prop_register.moderatedresourceid_desc'] = 'Wenn ein prehook den Benutzer als zu moderieren kennzeichnet, wird er auf diese Ressourcen-Id statt zur submittedResourceId weitergeleitet. Lassen Sie dieses Feld leer, um die Funktion nicht zu nutzen.';
$_lang['prop_register.placeholderprefix_desc'] = 'Das Prefix, das für alle Platzhalter des Snippets genutzt werden soll.';
$_lang['prop_register.recaptchaHeight_desc'] = 'Falls `recaptcha` als preHook gesetzt ist, setzt dies die Höhe des reCaptcha Widgets.';
$_lang['prop_register.recaptchaTheme_desc'] = 'Falls `recaptcha` als preHook gesetzt ist, setzt dies das Thema des reCaptcha Widgets.';
$_lang['prop_register.recaptchaWidth_desc'] = 'Falls `recaptcha` als preHook gesetzt ist, setzt dies die Breite des reCaptcha Widgets.';
$_lang['prop_register.mathminrange_desc'] = 'Falls `math` als preHook gesetzt ist, gibt dieser Wert die minimalen Zahlenstellen für jede Nummer der Gleichung an.';
$_lang['prop_register.mathmaxrange_desc'] = 'Falls `math` als preHook gesetzt ist, gibt dieser Wert welche die maximalen Zahlenstellen für jede Nummer der Gleichung an.';
$_lang['prop_register.mathfield_desc'] = 'Falls `math` als preHook gesetzt ist, gibt dieser Wert den Namen des Antwort Feldes an.';
$_lang['prop_register.mathop1field_desc'] = 'Falls `math` als preHook gesetzt ist, gibt dieser Wert den Namen des Feldes für die erste Zahl der Gleichung an.';
$_lang['prop_register.mathop2field_desc'] = 'Falls `math` als preHook gesetzt ist, gibt dieser Wert den Namen des Feldes für die zweite Zahl der Gleichung an.';
$_lang['prop_register.mathoperatorfield_desc'] = 'Falls `math` als preHook gesetzt ist, gibt dieser Wert den Namen des Feldes für den Operator der Gleichung an.';
$_lang['prop_register.validatepassword_desc'] = 'Wenn diese Einstellung aktiv ist, muss das gesendete Passwort bei der Registrierung bestätigt werden. Es wird empfohlen, dieses Feld aktiv zu lassen. Es sei denn, es wird in einem Hook ein eigenes Passwort generiert.';
$_lang['prop_register.generatepassword_desc'] = 'Wenn diese Einstellung aktiv ist, generiert Register ein zufälliges Passwort für den Benutzer und überschreibt jedes übergebene Passwort. Nützlich für die automatische Generierung von Passwörtern.';
$_lang['prop_register.trimpassword_desc'] = 'Wenn diese Einstellung aktiv ist, entfernt Register beim übermittelten Passwort überflüssigen Leerraum.';
$_lang['prop_register.ensurePasswordStrength_desc'] = 'Wenn diese Einstellung aktiv ist, stellt Register sicher, dass der Benutzer ein starkes und sicheres Passwort eingibt. Sichere Passwärter bestehen aus mehreren Wörtern oder enthalten nicht-alphabetische Zeichen.';
$_lang['prop_register.passwordWordSeparator_desc'] = 'Wenn ensurePasswordStrength aktiv ist, bestimmt diese Einstellung das Trennzeichen zwischen den Wörtern, um festzustellen wie viele Wörter das eingegebene Passwort enthält.';
$_lang['prop_register.minimumStrongPasswordWordCount_desc'] = 'Wenn ensurePasswordStrength aktiv ist, wird ein eingegebenes Passwort mit dieser Anzahl an Worten als ein starkes Passwort behandelt.';
$_lang['prop_register.maximumPossibleStrongerPasswords_desc'] = 'Wenn ensurePasswordStrength aktiv ist, dann gibt die Einstellung die maximale Anzahl von Vorschlägen an, die Register benutzt, um das angegebene Kennwort als „stark“ zu betrachten. Wenn Sie diese Zahl erhöhen, wird der Überprüfung nachsichtiger. Kleinere Werte machen die Überprüfung stärker.';
$_lang['prop_register.ensurePasswordStrengthSuggestions_desc'] = 'Wenn ensurePasswordStrength aktiv ist und die Überprüfung der Passwortstärke fehlschlägt, schlägt Register dem Benutzer eine in der Einstellung angegebene Anzahl von sicheren Passwörtern vor.';
$_lang['prop_register.allowedfields_desc'] = 'Wenn diese Einstellung aktiv ist, wird die Speicherung der Benutzerfelder auf die Feldnamen in der kommaseparierten Liste eingeschränkt. Gilt ebenso für erweiterte Benutzerfelder.';
$_lang['prop_register.removeexpiredregistrations_desc'] = 'Wenn diese Einstellung aktiv ist, werden registrierte Benutzer entfernt, die sich bis zum Ablauf der Aktivierungszeit nicht aktiviert haben. Es wird empfohlen, diese Einstellung aktiv zu lassen.';
$_lang['prop_register.preservefieldsafterregister_desc'] = 'Wenn diese Einstellung aktiv ist, werden Daten der Registrierung nach erfolgreicher Registrierung gespeichert. Deaktivieren Sie diese Einstellung um die Daten zurückzusetzen.';
$_lang['prop_register.redirectUnsetDefaultParam_desc'] = 'Wenn diese Einstellung aktiv ist, werden die Standardparameter bei den Weiterleitungs-URLs entfernt.';
$_lang['opt_register.chunk'] = 'Chunk';
$_lang['opt_register.file'] = 'Datei';
$_lang['opt_register.inline'] = 'Inline';
$_lang['opt_register.embedded'] = 'Eingebettet';
$_lang['opt_register.blackglass'] = 'Schwarzes Glas';
$_lang['opt_register.clean'] = 'Klar';
$_lang['opt_register.red'] = 'Rot';
$_lang['opt_register.white'] = 'Weiss';
$_lang['opt_register.asc'] = 'Aufsteigend';
$_lang['opt_register.desc'] = 'Absteigend';
/* ConfirmRegister snippet */
$_lang['prop_confirmregister.redirectto_desc'] = '(Optional) Nach einer erfolgreichen Aktivierung wird auf die angegebene Ressourcen-Id weitergeleitet.';
$_lang['prop_confirmregister.redirectparams_desc'] = '(Optional) Ein JSON Objekt mit Parametern, die bei der Weiterleitung mittels redirectTo übergeben werden.';
$_lang['prop_confirmregister.redirectUnsetDefaultParam_desc'] = 'Wenn diese Einstellung aktiv ist, werden die Standardparameter bei den Weiterleitungs-URLs entfernt.';
$_lang['prop_confirmregister.authenticate_desc'] = 'Authentifiziere und logge den Benutzer automatisch nach der Registrierung in den aktuellen Kontext ein. Standard ist aktiv.';
$_lang['prop_confirmregister.authenticatecontexts_desc'] = '(Optional) Eine kommaseparierte Liste von Kontexten, für die der Benutzer authentifiziert werden soll. Standard ist der aktuelle Kontext.';
$_lang['prop_confirmregister.errorpage_desc'] = '(Optional) Wenn diese Einstellung aktiv ist, wird der Benutzer zu dieser benutzerdefinierten Fehlerseite weitergeleitet, falls er versucht, die Bestätigungsseite mit einem Validierungsfehler aufzurufen.';
$_lang['prop_confirmregister.activepage_desc'] = '(Optional) Wenn diese Einstellung aktiv ist, wird der Nutzer zu dieser benutzerdefinierten Fehlerseite weitergeleitet, falls er versucht, die Bestätigungsseite mit einem aktivierten Benutzerkonto erneut aufzurufen.';
/* ResetPassword snippet */
$_lang['prop_resetpassword.tpl_desc'] = 'Das Passwort-vergessen-Nachricht Template.';
$_lang['prop_resetpassword.tpltype_desc'] = 'Der Templatetyp, der für die tpl-Eigenschaft benutzt wird. Standard ist Chunk.';
$_lang['prop_resetpassword.loginresourceid_desc'] = 'Die Ressourcen-Id, zu der Nutzer nach einer erfolgreichen Bestätigung weitergeleitet werden.';
/* UpdateProfile snippet */
$_lang['prop_updateprofile.allowedextendedfields_desc'] = '(Optional) Wenn diese Einstellung aktiv ist, werden Änderungen der erweiterten Benutzerdaten auf die Feldnamen in der kommaseparierten Liste eingeschränkt.';
$_lang['prop_updateprofile.allowedfields_desc'] = '(Optional) Wenn diese Einstellung aktiv ist, werden Änderungen der Benutzerdaten auf die Feldnamen in der kommaseparierten Liste eingeschränkt.';
$_lang['prop_updateprofile.emailfield_desc'] = 'Der Feldname für das E-Mail Feld im Formular.';
$_lang['prop_updateprofile.excludeextended_desc'] = 'Eine kommaseparierte Liste von Feldern, die nicht in den erweiterten Felder gespeichert werden.';
$_lang['prop_updateprofile.placeholderprefix_desc'] = 'Das Prefix, das für alle Platzhalter des Snippets genutzt werden soll.';
$_lang['prop_updateprofile.posthooks_desc'] = 'Skripte, die nach der Validierung des Formulars ausgeführt werden sollen. Es kann eine kommaseparierte Liste von Hooks angegeben werden. Sollte ein Hook nicht validieren, werden keine weitere ausgeführt. Ein Hook kann ein Snippetname oder ein Dateiname im Format `[[++assets_path]]hooks/my.hook.php` sein.';
$_lang['prop_updateprofile.prehooks_desc'] = 'Skripte, die vor der Validierung des Formulars ausgeführt werden sollen. Es kann eine kommaseparierte Liste von Hooks angegeben werden. Sollte ein Hook nicht validieren, werden keine weitere ausgeführt. Ein Hook kann ein Snippetname oder ein Dateiname im Format `[[++assets_path]]hooks/my.hook.php` sein.';
$_lang['prop_updateprofile.redirecttologin_desc'] = 'Leitet einen nicht eingeloggten Benutzer auf die Seite für unautorisierte Zugriffe weiter.';
$_lang['prop_updateprofile.reloadonsuccess_desc'] = 'Wenn diese Einstellung aktiv ist, leitet die Seite an sich selbst mit einem GET-Parameter zurück, um Doppelsendungen zu vermeiden. Sonst wird lediglich ein Erfolg-Platzhalter angezeigt.';
$_lang['prop_updateprofile.submitvar_desc'] = 'Die Prüfvariable für die UpdateProfile Snippet Funktionalität. Falls nicht gesetzt oder leer, wird UpdateProfile alle POST-Inhalte des Formulars auswerten.';
$_lang['prop_updateprofile.syncusername_desc'] = 'Wenn diese Einstellung auf einen Spaltennamen im Profil gesetzt ist, versucht UpdateProfile, den Benutzernamen mit diesem Feld nach erfolgreichem Speichern zu synchronisieren.';
$_lang['prop_updateprofile.useextended_desc'] = 'Wenn diese Einstellung aktiv ist, werden zusätzliche Felder als erweiterte Benutzerfelder benutzt.';
$_lang['prop_updateprofile.user_desc'] = '(Optional) Entweder eine Benutzer-Id oder ein Benutzername. Falls gesetzt, wird dieser Wert genutzt um den Benutzerdaten zu laden anstatt die Daten des aktuell eingeloggten Benutzers.';
/* ChangePassword snippet */
$_lang['prop_changepassword.submitvar_desc'] = 'Die Prüfvariable für die ChangePassword Snippet Funktionalität. Falls nicht gesetzt oder leer, wird ChangePassword alle POST-Inhalte des Formulars auswerten.';
$_lang['prop_changepassword.fieldoldpassword_desc'] = 'Der Feldname für das alte Passwort.';
$_lang['prop_changepassword.fieldnewpassword_desc'] = 'Der Feldname für das neue Passwort.';
$_lang['prop_changepassword.fieldconfirmnewpassword_desc'] = '(Optional). Name des Feldes für die Überprüfung des neuen Passworts.';
$_lang['prop_changepassword.prehooks_desc'] = 'Skripte, die nach der Validierung, aber noch vor dem Speichern des Formulars ausgeführt werden sollen. Es kann eine kommaseparierte Liste von Hooks angegeben werden. Sollte ein Hook nicht validieren, werden keine weitere ausgeführt. Ein Hook kann ein Snippetname oder ein Dateiname im Format `[[++assets_path]]hooks/my.hook.php` sein.';
$_lang['prop_changepassword.posthooks_desc'] = 'Skripte, die nach der Registrierung eines Benutzers ausgeführt werden sollen. Es kann eine kommaseparierte Liste von Hooks angegeben werden. Sollte ein Hook nicht validieren, werden keine weitere ausgeführt. Ein Hook kann ein Snippetname oder ein Dateiname im Format `[[++assets_path]]hooks/my.hook.php` sein.';
$_lang['prop_changepassword.redirecttologin_desc'] = 'Leitet einen nicht eingeloggten Benutzer auf die Seite für unautorisierte Zugriffe weiter.';
$_lang['prop_changepassword.reloadonsuccess_desc'] = 'Wenn diese Einstellung aktiv ist, leitet die Seite an sich selbst mit einem GET-Parameter zurück, um Doppelsendungen zu vermeiden. Sonst wird lediglich ein Erfolg-Platzhalter angezeigt.';
$_lang['prop_changepassword.successmessage_desc'] = 'Falls redirectTo inaktiv ist, wird diese Nachricht im successMessage Platzhalter ausgegeben.';
$_lang['prop_changepassword.placeholderprefix_desc'] = 'Das Prefix, das für alle Platzhalter des Snippets genutzt werden soll.';
/* isLoggedIn snippet */
$_lang['prop_isloggedin.contexts_desc'] = 'Eine kommaseparierte Liste von Kontexten, für die der Authentifizierungsstatus geprüft werden soll. Standard ist der aktuelle Kontext.';
$_lang['prop_isloggedin.redirectto_desc'] = 'Die Ressourcen-Id, auf die weitergeleitet wird, wenn der Benutzer nicht eingeloggt ist. Standard ist die unauthorized_page.';
$_lang['prop_isloggedin.redirectparams_desc'] = 'Falls redirectTo genutzt wird, kann ein JSON Objekt eines REQUEST Parameters mit der Weiterleitung übergeben werden.';
/* ActiveUsers snippet */
$_lang['prop_activeusers.tpl'] = 'Der Chunk, der benutzt wird, um einen einzelnen aktiven Benutzer auszugeben.';
$_lang['prop_activeusers.tplType'] = 'Der Templatetyp, der für die tpl-Eigenschaft benutzt wird. Der Standardwert ist Chunk.';
$_lang['prop_activeusers.sortBy'] = 'Sortierungsfeld der angezeigten Benutzer.';
$_lang['prop_activeusers.sortDir'] = 'Sortierungsrichtung der angezeigten Benutzer.';
$_lang['prop_activeusers.limit'] = 'Maximale Anzahl der angezeigten Benutzer.';
$_lang['prop_activeusers.offset'] = 'Übersprungene Anzahl der angezeigten Benutzer.';
$_lang['prop_activeusers.classKey'] = 'Die benutzte Klasse für geladene Benutzer. Der Standardwert ist modUser. Sie können hier einen Klassennamen benutzen, der modUser erweitert.';
$_lang['prop_activeusers.placeholderprefix_desc'] = 'Das Prefix, das für alle Platzhalter des Snippets genutzt werden soll.';
$_lang['prop_activeusers.toplaceholder_desc'] = 'Wenn diese Einstellung aktiv ist, wird die Ausgabe des Snippets an einen Platzhalter dieses Namens übergeben, statt die Inhalte direkt auszugeben.';
