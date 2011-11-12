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
	// Message in config asking if user wants to purge the user page
	'onlinestatusbar-purge' => 'Purge user page everytime when you login or logout',
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
	'onlinestatusbar-purge' => 'Option to purge user page everytime they login so that magic word is updated',
	'prefs-onlinestatus' => 'Section for config, located in preferences - misc',
	'onlinestatusbar-hide' => 'Ask user if they want to hide status bar this is useful when they are using custom template but need to check if they are online',
	'onlinestatusbar-status-online' => 'Status for users who mark themselves as active',
	'onlinestatusbar-status-busy' => 'Status for users who mark themselves as busy',
	'onlinestatusbar-status-away' => 'Status for users who mark themselves as away',
	'onlinestatusbar-status-offline' => 'Status for users who are offline',
	'onlinestatusbar-status-hidden' => 'Status for users who mark themselves as hidden (used on preferences only)',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'onlinestatusbar-line' => '$1 zo bremañ $2 $3',
	'onlinestatusbar-status-online' => 'Kevreet',
	'onlinestatusbar-status-busy' => 'Soulgarget',
	'onlinestatusbar-status-away' => 'Er-maez',
	'onlinestatusbar-status-offline' => 'Ezvezant',
	'onlinestatusbar-status-hidden' => 'Kuzhet',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'onlinestatusbar-desc' => 'Ermöglicht, abhängig von der Benutzereinstellung, die Anzeige des Onlinestatus eines Benutzers auf dessen Benutzerseite',
	'onlinestatusbar-line' => '$1 ist gerade $3 $2',
	'onlinestatusbar-used' => 'Möchtest du, dass andere Benutzer deinen Onlinestatus sehen?',
	'onlinestatusbar-status' => 'Welchen Status möchtest du standardmäßig nutzen:',
	'onlinestatusbar-purge' => 'Den Cache der Benutzerseite jedes Mal leeren, wenn du dich an- oder abmeldest',
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
	'onlinestatusbar-purge' => 'Den Cache der Benutzerseite jedes Mal leeren, wenn Sie sich an- oder abmelden',
	'onlinestatusbar-hide' => "Möchten Sie die Statusleiste ausblenden, um stattdessen lediglich das ''Magic Word'' zu nutzen? (Für Fortgeschrittene)",
);

/** French (Français)
 * @author DavidL
 * @author Gomoko
 */
$messages['fr'] = array(
	'onlinestatusbar-desc' => "Barre d'état montrant si un utilisateur est en ligne, basé sur les préférences, sur leur page utilisateur",
	'onlinestatusbar-line' => '$1 est maintenant $2 $3',
	'onlinestatusbar-used' => 'Voulez-vous permettre que les autres voient si vous êtes en ligne ?',
	'onlinestatusbar-status' => 'Quel est le statut par défaut que vous souhaitez utiliser :',
	'onlinestatusbar-purge' => 'Vider la page utilisateur chaque vous que vous vous connectez ou vous déconnectez',
	'prefs-onlinestatus' => 'État en ligne',
	'onlinestatusbar-hide' => "Voulez-vous masquer la barre d'état afin d'utiliser le mot magique seulement ? (Pour les utilisateurs avancés)",
	'onlinestatusbar-status-online' => 'Présent',
	'onlinestatusbar-status-busy' => 'Occupé',
	'onlinestatusbar-status-away' => 'Parti',
	'onlinestatusbar-status-offline' => 'Absent',
	'onlinestatusbar-status-hidden' => 'Caché',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'onlinestatusbar-line' => '$1 est ora $2 $3',
	'prefs-onlinestatus' => 'Ètat en legne',
	'onlinestatusbar-status-online' => 'Present',
	'onlinestatusbar-status-busy' => 'Ocupo',
	'onlinestatusbar-status-away' => 'Viâ',
	'onlinestatusbar-status-offline' => 'Absent',
	'onlinestatusbar-status-hidden' => 'Cachiê',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'onlinestatusbar-desc' => 'Barra de estado que mostra na páxina de usuario se un usuario está conectado',
	'onlinestatusbar-line' => '$1 está $2 $3 nestes intres',
	'onlinestatusbar-used' => 'Quere deixar que os outros poidan ver se está conectado?',
	'onlinestatusbar-status' => 'Cal é o estado por defecto que quere usar:',
	'onlinestatusbar-purge' => 'Purgar a páxina de usuario cada vez que se identifique ou saia do sistema',
	'prefs-onlinestatus' => 'Conectado',
	'onlinestatusbar-hide' => 'Quere agochar a barra de estado para usar unicamente a palabra máxica? (Para usuarios avanzados)',
	'onlinestatusbar-status-online' => 'Conectado',
	'onlinestatusbar-status-busy' => 'Ocupado',
	'onlinestatusbar-status-away' => 'Non dispoñible',
	'onlinestatusbar-status-offline' => 'Desconectado',
	'onlinestatusbar-status-hidden' => 'Agochado',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'onlinestatusbar-desc' => 'שורת מצב שמציגה בדף המשתמש אם המשתמש מקוון, בהתאם להעדפות',
	'onlinestatusbar-line' => '$1 $2 $3 עכשיו',
	'onlinestatusbar-used' => 'לאפשר לאחרים לראות שאתם מחוברים?',
	'onlinestatusbar-status' => 'מהו המצב שתרצו להיות פה לפי בררת המחדל:',
	'onlinestatusbar-purge' => 'לנקות את המטמון של דף המשתמש בכל פעם שאתם נכנסים או יוצאים',
	'prefs-onlinestatus' => 'מצב ההימצאות באתר',
	'onlinestatusbar-hide' => 'האם להסתיר את שורת המצב כדי להשתמש רק במילת הקסם? (למשתמשים מתקדמים)',
	'onlinestatusbar-status-online' => 'באתר',
	'onlinestatusbar-status-busy' => 'עסוק',
	'onlinestatusbar-status-away' => 'לא ליד מחשב',
	'onlinestatusbar-status-offline' => 'לא באתר',
	'onlinestatusbar-status-hidden' => 'מוסתר',
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

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'onlinestatusbar-desc' => 'Barra de stato que monstra si un usator es in linea, dependente de su preferentias, in su pagina de usator',
	'onlinestatusbar-line' => '$1 es ora $2 $3',
	'onlinestatusbar-used' => 'Vole tu permitter que alteres vide si tu es in linea?',
	'onlinestatusbar-status' => 'Qual es le stato predefinite que tu vole usar:',
	'onlinestatusbar-purge' => 'Purgar le pagina de usator cata vice que tu aperi o claude session',
	'prefs-onlinestatus' => 'Stato in linea',
	'onlinestatusbar-hide' => 'Vole tu celar le barra de stato pro usar solmente le parola magic? (Pro usatores avantiate)',
	'onlinestatusbar-status-online' => 'In linea',
	'onlinestatusbar-status-busy' => 'Occupate',
	'onlinestatusbar-status-away' => 'Absente',
	'onlinestatusbar-status-offline' => 'Foras de linea',
	'onlinestatusbar-status-hidden' => 'Celate',
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
	'onlinestatusbar-purge' => 'Пречисти го кешот на корисничката страница секојпат кога ќе се најавам или одјавам',
	'prefs-onlinestatus' => 'Вклученост',
	'onlinestatusbar-hide' => 'Дали би сакале да го скриете статусникот за да го користите само волшебниот збор (за напредни корисници)',
	'onlinestatusbar-status-online' => 'Вклучен',
	'onlinestatusbar-status-busy' => 'Зафатен',
	'onlinestatusbar-status-away' => 'Отсутен',
	'onlinestatusbar-status-offline' => 'Исклучен',
	'onlinestatusbar-status-hidden' => 'Скриен',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'onlinestatusbar-desc' => 'Statusbalk die weergeeft of een gebruiker online is, op basis van voorkeuren, op zijn/haar gebruikerspagina',
	'onlinestatusbar-line' => '$1 is nu $2 $3',
	'onlinestatusbar-used' => 'Wilt u andere gebruikers laten zien dat u online bent?',
	'onlinestatusbar-status' => 'Welke standaard status wilt u gebruiken:',
	'onlinestatusbar-purge' => 'Uw gebruikerspagina bij aanmelden en afmelden uit de cache verwijderen',
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

