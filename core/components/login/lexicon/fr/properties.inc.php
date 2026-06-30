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
$_lang['prop_forgotpassword.emailtpl_desc'] = 'La tpl de confirmation de message e-mail .';
$_lang['prop_forgotpassword.emailtpltype_desc'] = 'Le type de tpl fourni pour la propriété emailTpl . Par défaut un Chunck.';
$_lang['prop_forgotpassword.senttpl_desc'] = 'La tpl message à montrer quand un email a été correctement envoyé.';
$_lang['prop_forgotpassword.senttpltype_desc'] = 'Le type de tpl fourni pour la propriété emailTpl . Par défaut un Chunck.';
$_lang['prop_forgotpassword.tpl_desc'] = 'Le tpl de formulaire mot de passe oublié.';
$_lang['prop_forgotpassword.tpltype_desc'] = 'Le type de tpl fourni pour la propriété emailTpl . Par défaut un Chunck.';
$_lang['prop_forgotpassword.errtpl_desc'] = 'Le tpl d’emballage des messages d’erreur.';
$_lang['prop_forgotpassword.errtpltype_desc'] = 'Le type de tpl à utiliser comme errTpl.';
$_lang['prop_forgotpassword.emailsubject_desc'] = 'La ligne sujet du courriel de mot de passe oublié.';
$_lang['prop_forgotpassword.emailtplalt_desc'] = '(Facultatif) Texte brut alternatif pour le tpl du message e-mail de confirmation .';
$_lang['prop_forgotpassword.resetresourceid_desc'] = 'La ressource qui dirige les utilisateurs vers l’e-mail de confirmation qui contient l’appel du snippet ResetPassword.';
/* Login snippet */
$_lang['prop_login.actionkey_desc'] = 'La variable REQUEST qui indique l’action a prendre.';
$_lang['prop_login.loginkey_desc'] = 'La clé d’action de connexion.';
$_lang['prop_login.logoutkey_desc'] = 'La clé d’action de déconnexion.';
$_lang['prop_login.loginviaemail_desc'] = 'Autorise la connexion par nom d’utilisateur ou par adresse email.';
$_lang['prop_login.tpltype_desc'] = 'Le type des tpls fournis pour la connexion et la déconnexion.';
$_lang['prop_login.logintpl_desc'] = 'Le tpl formulaire de connexion.';
$_lang['prop_login.logouttpl_desc'] = 'Le tpl de déconnexion.';
$_lang['prop_login.prehooks_desc'] = 'Ce que les scripts à lancer, le cas échéant, avant que l’utilisateur se connecte ou se déconnecte. Cela peut être une liste de hooks séparée par des virgules, et si la première instance échoue, les suivantes ne se déclencheront pas. Un hook peut également être le nom d’un snippet qui exécutera ce snippet.';
$_lang['prop_login.posthooks_desc'] = 'Quels scripts lancer, le cas échéant, que l’utilisateur se soit connecté ou se déconnecté. Cela peut être une liste de hooks séparée par des virgules, et si la première instance échoue, les suivantes ne se déclencheront pas. Un hook peut également être le nom d’un snippet qui exécutera ce snippet.';
$_lang['prop_login.errtpl_desc'] = 'Le tpl d’erreur.';
$_lang['prop_login.errtpltype_desc'] = 'Le ptl de type d’erreur.';
$_lang['prop_login.loginresourceid_desc'] = 'La ressource vers laquelle diriger les utilisateurs sur connexion réussie. 0 va rediriger sur elle-même.';
$_lang['prop_login.loginresourceparams_desc'] = 'Un objet de paramètres JSON à ajouter à l’URL de redirection de connexion. Ex : {"test":123}';
$_lang['prop_login.logoutresourceid_desc'] = 'La ressource vers laquelle diriger les utilisateurs sur déconnexion réussie. 0 va rediriger sur elle-même.';
$_lang['prop_login.logoutresourceparams_desc'] = 'Un objet de paramètres JSON à ajouter à l’URL de redirection de déconnexion. Ex : {"test":123}';
$_lang['prop_login.loginmsg_desc'] = 'Message d’étiquette facultatif pour l’action de connexion. Si vide, prends la valeur de la chaîne du lexique pour Login.';
$_lang['prop_login.logoutmsg_desc'] = 'Message d’étiquette facultatif pour l’action de déconnexion. Si vide, prends la valeur de la chaîne du lexique pour Login.';
$_lang['prop_login.redirecttoprior_desc'] = 'Si vrai, redirige vers la page de référence (HTTP_REFERER) sur connexion réussie.';
$_lang['prop_login.redirecttoonfailedauth_desc'] = 'Si définie sur une valeur différente de zéro, redirige l’utilisateur vers cette page si leur tentative de connexion échoue.';
$_lang['prop_login.remembermekey_desc'] = 'Optionnel. Le nom du champ de la bascule Se rappeler de moi pour préserver l’état de la connexion. Par défaut, `rememberme`.';
$_lang['prop_login.contexts_desc'] = '(Expérimental) Une liste séparée par des virgules des contextes sur lesquels vous connecter. Par défaut, le contexte courant, si pas défini explicitement.';
$_lang['prop_login.toplaceholder_desc'] = 'Si défini, envoie le résultat du snippet de connexion à un placeholder de ce nom plutôt que d’envoyer directement le contenu de retour.';
/* Profile snippet */
$_lang['prop_profile.prefix_desc'] = 'Une chaîne qui préfixe tous les placeholders pour les champs qui seront définis par cet extrait de code.';
$_lang['prop_profile.user_desc'] = 'En option. Soit un ID ou nom d’utilisateur. Si défini, utilisera cet utilisateur plutôt que celui actuellement connecté.';
$_lang['prop_profile.useextended_desc'] = 'Définir ou non des champs supplémentaires dans le formulaire pour le champ étendu de profils. Cela peut être utile pour le stockage de champs utilisateur supplémentaires.';
/* Register snippet */
$_lang['prop_register.submitvar_desc'] = 'La variable à vérifier pour charger la Registre de la fonctionnalité. Si vide ou à la valeur false, Register traitera le formulaire pour toutes les requêtes POST.';
$_lang['prop_register.usergroups_desc'] = 'Optionnel. Une liste séparée par des virgules des noms de groupe d’utilisateurs ou d’ID à ajouter à l’utilisateur nouvellement enregistré.';
$_lang['prop_register.usergroupsfield_desc'] = 'Le nom du champ à utiliser pour spécifier le(s) groupe(s) d’utilisateurs auquel ajouter automatiquement le nouvel utilisateur. Utilisé uniquement si cette valeur n’est pas vide.';
$_lang['prop_register.submittedresourceid_desc'] = 'Si défini, redirigera vers la ressource spécifiée après que l’utilisateur ai soumis le formulaire d’inscription.';
$_lang['prop_register.usernamefield_desc'] = 'Le nom du champ à utiliser pour le nom du nouvel utilisateur.';
$_lang['prop_register.passwordfield_desc'] = 'Le nom du champ à utiliser pour le mot de passe du nouvel utilisateur.';
$_lang['prop_register.emailfield_desc'] = 'Le nom du champ à utiliser pour l’email du nouvel utilisateur.';
$_lang['prop_register.successMsg_desc'] = 'Optionnel. Si non redirigé par le paramètre submittedResourceId, affichera ce message.';
$_lang['prop_register.persistparams_desc'] = 'Optionnel. Un objet de paramètres JSON qui persistera à travers le processus d’enregistrement. Utile lorsque vous utilisez la redirection sur ConfirmRegister pour rediriger vers une autre page (par exemple, pour les paniers d’achats).';
$_lang['prop_register.prehooks_desc'] = 'Quels scripts lancer, le cas échéant, avant que le formulaire soit validé. Peut être une liste de hooks séparée par des virgules, et si la première instance échoue, les suivantes ne se déclencheront pas. Un hook peut également être le nom d’un snippet qui exécutera ce snippet.';
$_lang['prop_register.posthooks_desc'] = 'Quels scripts lancer, le cas échéant, après que le que l’utilisateur soit enregistré. Peut être une liste de hooks séparée par des virgules, et si la première instance échoue, les suivantes ne se déclencheront pas. Un hook peut également être le nom d’un snippet qui exécutera ce snippet.';
$_lang['prop_register.useextended_desc'] = 'Définir ou non des champs supplémentaires dans le formulaire pour le champ étendu de profils. Cela peut être utile pour le stockage de champs utilisateur supplémentaires.';
$_lang['prop_register.excludeextended_desc'] = 'Une liste séparée par des virgules des champs à ne pas définir comme champs étendus.';
$_lang['prop_register.activation_desc'] = 'Exige ou non l’activation pour une inscription correcte. Si true, les utilisateurs ne seront pas indiqués actifs jusqu’à ce qu’ils aient activé leur compte. La valeur par défaut est true. Fonctionne uniquement si le formulaire d’inscription passe un champ d’email.';
$_lang['prop_register.activationttl_desc'] = 'Nombre de minutes avant l’expiration de l’e-mail d’activation. Par défaut, 3 heures.';
$_lang['prop_register.activationresourceid_desc'] = 'L’ID de ressource où se trouve le snippet ConfirmRegister pour l’activation.';
$_lang['prop_register.activationemail_desc'] = 'Si défini, l’e-mail d’activation sera envoyé à cette adresse au lieu de l’adresse de l’utilisateur nouvellement enregistré.';
$_lang['prop_register.activationemailsubject_desc'] = 'L’objet de l’e-mail d’activation.';
$_lang['prop_register.activationemailtpltype_desc'] = 'Le type des tpls fournis pour l’email d’activation.';
$_lang['prop_register.activationemailtpl_desc'] = 'Le tpl de courriel d’activation.';
$_lang['prop_register.activationemailtplalt_desc'] = '(Facultatif) alternantive en texte brut pour le tpl de courriel d’activation.';
$_lang['prop_register.moderatedresourceid_desc'] = 'Si un prehook a défini l’utilisateur comme en modération, enverra cette ressource à la place de submittedResourceId. Laisser vide pour contourner.';
$_lang['prop_register.placeholderprefix_desc'] = 'Le préfixe à utiliser pour tous les placeholders définis par ce snippet.';
$_lang['prop_register.recaptchaHeight_desc'] = 'Si `recaptcha` est défini comme preHook, sélectionnera la hauteur du gadget reCaptcha.';
$_lang['prop_register.recaptchaTheme_desc'] = 'Si `recaptcha` est défini comme preHook, sélectionnera une théme pour le gadget reCaptcha.';
$_lang['prop_register.recaptchaWidth_desc'] = 'Si `recaptcha` est défini comme preHook, sélectionnera la largeur du gadget reCaptcha.';
$_lang['prop_register.mathminrange_desc'] = 'Si `math` est défini comme preHook, le rang minimum de chaque nombre de l’équation.';
$_lang['prop_register.mathmaxrange_desc'] = 'Si `math` est défini comme preHook, le rang maximum de chaque nombre de l’équation.';
$_lang['prop_register.mathfield_desc'] = 'Si `math` est défini comme un preHook, le nom du champ d’entrée pour la réponse.';
$_lang['prop_register.mathop1field_desc'] = 'Si `math` est défini comme un preHook, le nom du champ pour le premier nombre de l’équation.';
$_lang['prop_register.mathop2field_desc'] = 'Si `math` est défini comme un preHook, le nom du champ pour le deuxième nombre de l’équation.';
$_lang['prop_register.mathoperatorfield_desc'] = 'Si `math` est défini comme un preHook, le nom du champ pour l’opérateur de l’équation.';
$_lang['prop_register.validatepassword_desc'] = 'Valider ou non le mot de passe envoyé lors de votre inscription. Il est recommandé de le laisser à Oui sauf si vous générez votre propre mot de passe dans un hook.';
$_lang['prop_register.generatepassword_desc'] = 'Si la valeur est Oui, Register génère un mot de passe aléatoire pour l’utilisateur, écrase n’importe quel mot de passe passé. Utile pour la génération automatique de mots de passe.';
$_lang['prop_register.trimpassword_desc'] = 'Si définie à Oui, Register va supprimer les blancs du le mot de passe soumis.';
$_lang['prop_register.ensurePasswordStrength_desc'] = 'Si valeur à Oui, Register s’assurera que l’utilisateur saisit un mot de passe assez fort. Les mots de passe forts sont des mots de passe contenant plusieurs mots ou des caractères non alphabétiques .';
$_lang['prop_register.passwordWordSeparator_desc'] = 'Si ensurePasswordStrength est défini à Oui, sera le séparateur entre les mots pour déterminer le nombre de mots dans un mot de passe fourni.';
$_lang['prop_register.minimumStrongPasswordWordCount_desc'] = 'Si ensurePasswordStrength est défini à Oui, si un mot de passe fourni a ce nombre de mots, alors il sera considéré comme un mot de passe fort.';
$_lang['prop_register.maximumPossibleStrongerPasswords_desc'] = 'Si ensurePasswordStrength est défini à Oui, alors c’est le nombre maximal des suggestions que Register peut trouver pour considérer le mot de passe comme « fort ». Mettre un nombre plus élevé rends la vérification plus clémente ; inférieur, plus rigoureuse.';
$_lang['prop_register.ensurePasswordStrengthSuggestions_desc'] = 'Si ensurePasswordStrength est défini sur Oui, et que le mot de passe a échoué au test de complexité, Register fournira plusieurs suggestions pour le mot de passe de l’utilisateur .';
$_lang['prop_register.allowedfields_desc'] = 'Si défini, limitera les champs autorisés à être définis dans la liste séparée par des virgules de l’utilisateur nouvellement créé. Limite également les champs étendus.';
$_lang['prop_register.removeexpiredregistrations_desc'] = 'Si true, supprimera les utilisateurs enregistrés qui ont une demande d’activation expirée, inutilisée ou jamais été activée. Il est recommandé de le laisser activé pour éviter le spam.';
$_lang['prop_register.preservefieldsafterregister_desc'] = 'Si true, les données des champs de l’enregistrement seront sauvegardés après inscription réussie. Pour réinitialiser les données de champs, définir la valeur à false.';
$_lang['prop_register.redirectUnsetDefaultParam_desc'] = 'Si true, les paramètres par défaut seront retirés des URL redirigées.';
$_lang['opt_register.chunk'] = 'Chunk';
$_lang['opt_register.file'] = 'Fichier';
$_lang['opt_register.inline'] = 'En-ligne';
$_lang['opt_register.embedded'] = 'Intégré';
$_lang['opt_register.blackglass'] = 'Verre noir';
$_lang['opt_register.clean'] = 'Epuré';
$_lang['opt_register.red'] = 'Rouge';
$_lang['opt_register.white'] = 'Blanc';
$_lang['opt_register.asc'] = 'Croissant';
$_lang['opt_register.desc'] = 'Décroissant';
/* ConfirmRegister snippet */
$_lang['prop_confirmregister.redirectto_desc'] = 'Optionnel. Après une confirmation réussie, redirige vers cette ressource.';
$_lang['prop_confirmregister.redirectparams_desc'] = 'Optionnel. Un objet JSON de paramètres à passer lors de la redirection à l’aide de redirectTo.';
$_lang['prop_confirmregister.redirectUnsetDefaultParam_desc'] = 'Si true, les paramètres par défaut seront retirés des URL redirigées.';
$_lang['prop_confirmregister.authenticate_desc'] = 'Authentifie et connecte l’utilisateur au contexte actuel après la confirmation d’inscription. La valeur par défaut est true.';
$_lang['prop_confirmregister.authenticatecontexts_desc'] = 'En option. Une liste séparée par des virgules de contextes à authentifier. Par défaut, le contexte actuel.';
$_lang['prop_confirmregister.errorpage_desc'] = 'Optionnel. Si défini, redirige l’utilisateur vers une page d’erreur personnalisée s’ils essaient d’accéder à la page de confirmation d’enregistrement avec une erreur de validation.';
$_lang['prop_confirmregister.activepage_desc'] = 'Optionnel. Si défini, redirige l’utilisateur vers une page d’erreur active s’ils essaient d’accéder à la page de confirmation d’enregistrement avec un compte activé.';
/* ResetPassword snippet */
$_lang['prop_resetpassword.tpl_desc'] = 'Le tpl de message de réinitialisation du mot de passe .';
$_lang['prop_resetpassword.tpltype_desc'] = 'Le type de tpl fourni. Par défaut un Chunck.';
$_lang['prop_resetpassword.loginresourceid_desc'] = 'La ressource pour diriger les utilisateurs en cas de succès de confirmation.';
/* UpdateProfile snippet */
$_lang['prop_updateprofile.allowedextendedfields_desc'] = 'Optionnel. Si défini, limitera les champs qui sont mis à jour dans les champs Étendus aux noms des champs d’une liste séparée par des virgules.';
$_lang['prop_updateprofile.allowedfields_desc'] = 'Optionnel. Si défini, limitera les champs qui sont mis à jour aux noms de champs d’une liste séparée par des virgules.';
$_lang['prop_updateprofile.emailfield_desc'] = 'Le nom du champ email dans le formulaire.';
$_lang['prop_updateprofile.excludeextended_desc'] = 'Une liste séparée par des virgules de champs à ne pas définir comme champs étendus.';
$_lang['prop_updateprofile.placeholderprefix_desc'] = 'Le préfixe à utiliser pour tous les placeholders définis par ce snippet.';
$_lang['prop_updateprofile.posthooks_desc'] = 'Quels scripts lancer, le cas échéant, après que le que l’utilisateur soit enregistré. Peut être une liste de hooks séparée par des virgules, et si la première instance échoue, les suivantes ne se déclencheront pas. Un hook peut également être le nom d’un snippet qui exécutera ce snippet.';
$_lang['prop_updateprofile.prehooks_desc'] = 'Quels scripts lancer, le cas échéant, avant que le formulaire soit validé. Peut être une liste de hooks séparée par des virgules, et si la première instance échoue, les suivantes ne se déclencheront pas. Un hook peut également être le nom d’un snippet qui exécutera ce snippet.';
$_lang['prop_updateprofile.redirecttologin_desc'] = 'Si un utilisateur n’est pas connecté et accède à cette ressource, le rediriger vers la Page non autorisée.';
$_lang['prop_updateprofile.reloadonsuccess_desc'] = 'Si true, la page redirige vers elle-même avec un paramètre GET afin d’éviter les double-publications (postbacks). Si la valeur est false, fixera simplement un placeholder de succès.';
$_lang['prop_updateprofile.submitvar_desc'] = 'La variable à vérifier pour charger la fonctionnalité UpdateProfile . Si vide ou à la valeur false, UpdateProfile traitera le formulaire pour toutes les requêtes POST.';
$_lang['prop_updateprofile.syncusername_desc'] = 'Si défini a un nom de colonne dans le Profil, UpdateProfile tentera de synchroniser le nom d’utilisateur à ce champ après sauvegarde réussie.';
$_lang['prop_updateprofile.useextended_desc'] = 'Définir ou non des champs supplémentaires dans le formulaire pour le champ étendus de profils. Cela peut être utile pour le stockage de champs utilisateur supplémentaires.';
$_lang['prop_updateprofile.user_desc'] = 'Optionnel. Si défini, chargera l’utilisateur avec l’ID ou le nom spécifié à la place de l’utilisateur actif.';
/* ChangePassword snippet */
$_lang['prop_changepassword.submitvar_desc'] = 'La variable à vérifier pour charger la fonctionnalité ChangePassword . Si vide ou à la valeur false, ChangePassword traitera le formulaire pour toutes les requêtes POST.';
$_lang['prop_changepassword.fieldoldpassword_desc'] = 'Le nom de champs de l’ancien mot de passe.';
$_lang['prop_changepassword.fieldnewpassword_desc'] = 'Le nom de champ du nouveau mot de passe.';
$_lang['prop_changepassword.fieldconfirmnewpassword_desc'] = 'Optionnel. Si défini, le nom de champ du champ Confirmer mot de passe, sera vérifié avec le nouveau champ de mot de passe lors de la soumission.';
$_lang['prop_changepassword.prehooks_desc'] = 'Quels scripts lancer, le cas échéant, avant que le formulaire soit validé mais avant enregistrement. Peut être une liste de hooks séparé par des virgules, et si la première instance échoue, les suivantes ne se déclencheront pas. Un hook peut également être le nom d’un snippet qui exécutera ce snippet.';
$_lang['prop_changepassword.posthooks_desc'] = 'Quels scripts lancer, le cas échéant, après que le que l’utilisateur soit enregistré. Peut être une liste de hooks séparée par des virgules, et si la première instance échoue, les suivantes ne se déclencheront pas. Un hook peut également être le nom d’un snippet qui exécutera ce snippet.';
$_lang['prop_changepassword.redirecttologin_desc'] = 'Si un utilisateur n’est pas connecté et accède à cette ressource, le rediriger vers la Page non autorisée.';
$_lang['prop_changepassword.reloadonsuccess_desc'] = 'Si true, la page redirige vers elle-même avec un paramètre GET afin d’éviter les double-publications (postbacks). Si la valeur est false, fixera simplement un placeholder de succès.';
$_lang['prop_changepassword.successmessage_desc'] = 'Si reloadOnSuccess est défini à false, retourne ce message dans le placeholder [prefix].successMessage.';
$_lang['prop_changepassword.placeholderprefix_desc'] = 'Le préfixe à utiliser pour tous les placeholders définis par ce snippet.';
/* isLoggedIn snippet */
$_lang['prop_isloggedin.contexts_desc'] = 'Une liste séparée par des virgules des contextes pour vérifier le statu d’authentification. Si non défini, le contexte actuel.';
$_lang['prop_isloggedin.redirectto_desc'] = 'L’ID d’une ressource vers laquelle rediriger l’utilisateur non connecté. Par défaut unauthorized_page.';
$_lang['prop_isloggedin.redirectparams_desc'] = 'Si vous utilisez redirectTo, un objet JSON de paramètres de requête à envoyer avec la redirection.';
/* ActiveUsers snippet */
$_lang['prop_activeusers.tpl'] = 'Le Chunck à utiliser pour retourner chaque utilisateur actif.';
$_lang['prop_activeusers.tplType'] = 'Le type de tpl fourni. Par défaut un Chunck.';
$_lang['prop_activeusers.sortBy'] = 'Le champ sur lequel trier les utilisateurs.';
$_lang['prop_activeusers.sortDir'] = 'L’ordre de tri pour les utilisateurs.';
$_lang['prop_activeusers.limit'] = 'Le nombre d’utilisateurs pour limiter l’affichage.';
$_lang['prop_activeusers.offset'] = 'L’index de début du nombre limité d’utilisateurs à afficher.';
$_lang['prop_activeusers.classKey'] = 'La clé de classe à utiliser pour récuperer les utilisateurs. Par défaut, modUser. Vous pouvez définir un nom de classe qui étend modUser, si vous le souhaitez.';
$_lang['prop_activeusers.placeholderprefix_desc'] = 'Le préfixe à utiliser pour tous les placeholders définis par ce snippet.';
$_lang['prop_activeusers.toplaceholder_desc'] = 'Si défini, envoie le résultat du snippet de connexion à un placeholder de ce nom plutôt que d’envoyer directement le contenu en retour.';
