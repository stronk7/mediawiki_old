<?php
/**
 * Internationalisation file for Online status bar extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/**
 * English
 * @author Petr Bena
 * @author John Du Hart
 */
$messages['en'] = array(
	// Description 
	'onlinestatusbar-desc' => 'Status bar which shows whether a user is online, based on preferences, on their user page',
	// Status bar text line (User is now Offline) etc.
	'onlinestatusbar-line' => '$1 is now $2 $3',
	// Message in config asking user if they want to enable it
	'onlinestatusbar-used' => 'Do you want to let others see if you are online?',
	// Message in config asking what status they want to use
	'onlinestatusbar-status' => 'What is the default status you wish to use:',
	// Section for config
	'prefs-onlinestatus' => 'Online status',
	// Message in config
	'onlinestatusbar-hide' => 'Do you want to hide the status bar in order to use just the magic word? (For advanced users)',

	'onlinestatusbar-status-online' => 'On-line',
	'onlinestatusbar-status-busy' => 'Busy',
	'onlinestatusbar-status-away' => 'Away',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-hidden' => 'Hidden',
);

/** Message documentation (Message documentation)
 * @author John Du Hart
 * @author Petr Bena
 */
$messages['qqq'] = array(
	'onlinestatusbar-desc' => '{{desc}}',
	'onlinestatusbar-line' => 'Status bar text line (User is now Offline), parameters:
* $1 is user
* $2 is a picture of status (small icon in color of status)
* $3 a status, it will appear in title bar of their user space pages',
	'onlinestatusbar-used' => 'Message in config asking user if they want to enable it, checkbox',
	'onlinestatusbar-status' => 'Message in config asking what status they want to use, option box',
	'prefs-onlinestatus' => 'Section for config, located in preferences - misc',
	'onlinestatusbar-hide' => 'Ask user if they want to hide status bar this is useful when they are using custom template but need to check if they are online',
	'onlinestatusbar-status-online' => 'Status for users who mark themselves as active',
	'onlinestatusbar-status-busy' => 'Status for users who mark themselves as busy',
	'onlinestatusbar-status-away' => 'Status for users who mark themselves as away',
	'onlinestatusbar-status-offline' => 'Status for users who are offline',
	'onlinestatusbar-status-hidden' => 'Status for users who mark themselves as hidden (used on preferences only)',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'onlinestatusbar-desc' => 'Ermöglicht, abhängig von der Benutzereinstellung, die Anzeige des Onlinestatus eines Benutzers auf dessen Benutzerseite',
	'onlinestatusbar-line' => '$1 ist gerade $3 $2',
	'onlinestatusbar-used' => 'Möchtest du, dass andere Benutzer deinen Onlinestatus sehen?',
	'onlinestatusbar-status' => 'Welchen Status möchtest du standardmäßig nutzen:',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-hide' => "Möchtest du die Statusleiste ausblenden, um stattdessen lediglich das ''Magic Word'' zu nutzen? (Für Fortgeschrittene)",
	'onlinestatusbar-status-online' => 'Online',
	'onlinestatusbar-status-busy' => 'Beschäftigt',
	'onlinestatusbar-status-away' => 'Abwesend',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-hidden' => 'Versteckt',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'onlinestatusbar-used' => 'Möchten Sie, dass andere Benutzer Ihren Onlinestatus sehen?',
	'onlinestatusbar-status' => 'Welchen Status möchten Sie standardmäßig nutzen:',
	'onlinestatusbar-hide' => "Möchten Sie die Statusleiste ausblenden, um stattdessen lediglich das ''Magic Word'' zu nutzen? (Für Fortgeschrittene)",
);

/** French (Français)
 * @author DavidL
 */
$messages['fr'] = array(
	'onlinestatusbar-desc' => "Barre d'état montrant si un utilisateur est en ligne, basé sur les préférences, sur leur page utilisateur",
	'onlinestatusbar-line' => '$1 est maintenant $2 $3',
	'onlinestatusbar-used' => 'Voulez-vous permettre que les autres voient si vous êtes en ligne ?',
	'onlinestatusbar-status' => 'Quel est le statut par défaut que vous souhaitez utiliser :',
	'prefs-onlinestatus' => 'État en ligne',
	'onlinestatusbar-hide' => "Voulez-vous masquer la barre d'état afin d'utiliser le mot magique seulement ? (Pour les utilisateurs avancés)",
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'onlinestatusbar-desc' => 'Barra de estado que mostra na páxina de usuario se un usuario está conectado',
	'onlinestatusbar-line' => '$1 está $2 $3 nestes intres',
	'onlinestatusbar-used' => 'Quere deixar que os outros poidan ver se está conectado?',
	'onlinestatusbar-status' => 'Cal é o estado por defecto que quere usar:',
	'prefs-onlinestatus' => 'Conectado',
	'onlinestatusbar-hide' => 'Quere agochar a barra de estado para usar unicamente a palabra máxica? (Para usuarios avanzados)',
	'onlinestatusbar-status-online' => 'Conectado',
	'onlinestatusbar-status-busy' => 'Ocupado',
	'onlinestatusbar-status-away' => 'Non dispoñible',
	'onlinestatusbar-status-offline' => 'Desconectado',
	'onlinestatusbar-status-hidden' => 'Agochado',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'onlinestatusbar-line' => '$1 je nětko $3 $2',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-status-online' => 'Online',
	'onlinestatusbar-status-busy' => 'Ma dźěło',
	'onlinestatusbar-status-away' => 'Preč',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-hidden' => 'Schowany',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'onlinestatusbar-line' => '$1 ass elo $2 $3',
	'onlinestatusbar-used' => 'Wëllt dir datt Anerer kënne gesinn op Dir online sidd?',
	'onlinestatusbar-status-busy' => 'Beschäftegt',
	'onlinestatusbar-status-away' => 'Net do',
	'onlinestatusbar-status-hidden' => 'Verstoppt',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'onlinestatusbar-desc' => 'Статусник што прикажува дали корисникот е на линија, зависно од нагодувањата на корисничката страница',
	'onlinestatusbar-line' => '$1 сега е $2 $3',
	'onlinestatusbar-used' => 'Дали сакате другите да знаат кога сте на линија?',
	'onlinestatusbar-status' => 'Вашиот статус по основно:',
	'prefs-onlinestatus' => 'Вклученост',
	'onlinestatusbar-hide' => 'Дали би сакале да го скриете статусникот за да го користите само волшебниот збор (за напредни корисници)',
	'onlinestatusbar-status-online' => 'Вклучен',
	'onlinestatusbar-status-busy' => 'Зафатен',
	'onlinestatusbar-status-away' => 'Отсутен',
	'onlinestatusbar-status-offline' => 'Исклучен',
	'onlinestatusbar-status-hidden' => 'Скриен',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'onlinestatusbar-line' => '$1 is nu $2 $3',
	'onlinestatusbar-used' => 'Wilt u andere gebruikers laten zien dat u online bent?',
	'onlinestatusbar-status' => 'Welke standaard status wilt u gebruiken:',
	'prefs-onlinestatus' => 'Onlinestatus',
	'onlinestatusbar-hide' => 'Wilt u de statusbalk verbergen en alleen het magische woord gebruiken (voor gevorderde gebruikers)?',
	'onlinestatusbar-status-online' => 'Online',
	'onlinestatusbar-status-busy' => 'Druk',
	'onlinestatusbar-status-away' => 'Weg',
	'onlinestatusbar-status-offline' => 'Offline',
	'onlinestatusbar-status-hidden' => 'Verborgen',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'onlinestatusbar-used' => 'మీరు ఆన్‌లైనులో ఉన్నట్టు ఇతరులుకు చూపించాలా?',
);

