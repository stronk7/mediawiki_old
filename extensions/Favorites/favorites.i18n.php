<?php
/**
 * Internationalisation for Favorites
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English (en)
 * @author Jeremy Lemley
 */
$messages['en'] = array(
'favorites-desc' => 'Creating a favorites list',

# Edit pages
'favoritethis'                        => 'Favorite this page',

# Preferences page
'prefs-favoritelist'               => 'Favorites',
'prefs-favoritelist-token'         => 'Favorites token:',
'prefs-advancedfavoritelist'       => 'Advanced options',

# Favoritelist
'favoritelist'            => 'My favorites',
'myfavoritelist'          => 'My favorites',
'favoritelistfor'         => "(for '''$1''')",
'nofavoritelist'          => 'You have no items in your favorites.',
'favoritelistanontext'    => 'Please $1 to view or edit items in your favorites.',
'favoritenologin'         => 'Not logged in',
'favoritenologintext'     => 'You must be [[Special:UserLogin|logged in]] to modify your favorites.',
'addedfavorite'           => 'Added to favorites',
'addedfavoritetext'       => 'The page "[[:$1]]" has been added to your [[Special:Favoritelist|favorites]].',
'removedfavorite'         => 'Removed from favorites',
'removedfavoritetext'     => 'The page "[[:$1]]" has been removed from [[Special:Favoritelist|your favorites]].',
'favorite'                => 'Favorite',
'favoritethispage'        => 'Favorite this page',
'unfavorite'              => 'Unfavorite',
'unfavoritethispage'      => 'Stop favoriteing',
'favoritelist-options'    => 'Favorites options',

# Displayed when you click the "favorite" button and it is in the process of favoriteing
'favoriteing'   => 'Favoriteing...',
'unfavoriteing' => 'Unfavoriteing...',

# Keyboard access keys for power users
'accesskey-pt-favoritelist'            => 'l', # do not translate or duplicate this message to other languages
'accesskey-ca-favorite'                => 'w', # do not translate or duplicate this message to other languages
'accesskey-ca-unfavorite'              => 'w', # do not translate or duplicate this message to other languages
'accesskey-favorite'                   => 'w', # do not translate or duplicate this message to other languages

# Tooltip help for the actions
'tooltip-pt-favoritelist'            => 'The list of pages you are monitoring for changes',
'tooltip-ca-favorite'                => 'Add this page to your favorites',
'tooltip-ca-unfavorite'              => 'Remove this page from your favorites',
'tooltip-favorite'                   => 'Add this page to your favorites',

# 'all' in various places, this might be different for inflected languages
'favoritelistall2'    => 'all',

# Favoritelist editor
'favoritelistedit-numitems'       => 'Your favorites contain {{PLURAL:$1|1 title|$1 titles}}.',
'favoritelistedit-noitems'        => 'Your favorites contain no titles.',
'favoritelistedit-normal-title'   => 'Edit favorites',
'favoritelistedit-normal-legend'  => 'Remove titles from favorites',
'favoritelistedit-normal-explain' => 'Titles in your favorites are shown below.
To remove a title, check the box next to it, and click "{{int:Favoritelistedit-normal-submit}}".
You can also [[Special:Favoritelist/raw|edit the raw list]].',
'favoritelistedit-normal-submit'  => 'Remove titles',
'favoritelistedit-normal-done'    => '{{PLURAL:$1|1 title was|$1 titles were}} removed from your favorites:',
'favoritelistedit-raw-title'      => 'Edit raw favorites list',
'favoritelistedit-raw-legend'     => 'Edit raw favorites list',
'favoritelistedit-raw-explain'    => 'Titles in your favorites are shown below, and can be edited by adding to and removing from the list;
one title per line.
When finished, click "{{int:Favoritelistedit-raw-submit}}".
You can also [[Special:Favoritelist/edit|use the standard editor]].',
'favoritelistedit-raw-titles'     => 'Titles:',
'favoritelistedit-raw-submit'     => 'Update favorites',
'favoritelistedit-raw-done'       => 'Your favorites have been updated.',
'favoritelistedit-raw-added'      => '{{PLURAL:$1|1 title was|$1 titles were}} added:',
'favoritelistedit-raw-removed'    => '{{PLURAL:$1|1 title was|$1 titles were}} removed:',

# Favoritelist editing tools
'favoritelisttools-view' => 'View Favorites',
'favoritelisttools-edit' => 'View and edit favorites',
'favoritelisttools-raw'  => 'Edit raw favorites',

);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Hamilton Abreu
 * @author Kghbln
 */
$messages['qqq'] = array(
	'prefs-favoritelist' => '{{Identical|Favorite}}',
	'prefs-favoritelist-token' => "This message is basically the same as {{msg-mw|Prefs-watchlist-token}}. A token is a piece of information in this context that is used to prove one's identity electronically[http://en.wikipedia.org/wiki/Security_token]. Have a look at the Watchlist tab in [[Special:Preferences]]. There is a token there for accessing your watchlist RSS feed without having to log in (you are using your token to identify yourself).",
	'favoritelistanontext' => '$1 is substituted by {{msg|loginreqlink}}',
	'favorite' => '{{Identical|Favorite}}',
	'favoritelistall2' => '{{Identical|All}}',
	'favoritelistedit-raw-titles' => '{{Identical|Title}}',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'favorites-desc' => 'Стварэньне сьпісу ўлюблёных',
	'favoritethis' => 'Зрабіць гэтую старонку ўлюблёнай',
	'prefs-favoritelist' => 'Улюблёныя',
	'prefs-favoritelist-token' => 'Ключ улюблёных:',
	'prefs-advancedfavoritelist' => 'Дадатковыя налады',
	'favoritelist' => 'Мае ўлюблёныя',
	'myfavoritelist' => 'Мае ўлюблёныя',
	'favoritelistfor' => "(для '''$1''')",
	'nofavoritelist' => 'Ваш сьпіс улюблёных пусты.',
	'favoritelistanontext' => 'Вам патрэбна $1, каб праглядаць альбо рэдагаваць сьпіс улюблёных.',
	'favoritenologin' => 'Вы не ўвайшлі ў сыстэму',
	'favoritenologintext' => 'Вам неабходна [[Special:UserLogin|ўвайсьці ў сыстэму]], каб зьмяніць Ваш сьпіс улюблёных.',
	'addedfavorite' => 'Дададзеныя ва ўлюблёныя',
	'addedfavoritetext' => 'Старонка «[[:$1]]» была дададзеная ў Ваш [[Special:Favoritelist|сьпіс улюблёных]].',
	'removedfavorite' => 'Выдаленыя з улюблёных',
	'removedfavoritetext' => 'Старонка «[[:$1]]» была выдаленая з [[Special:Favoritelist|Вашага сьпісу ўлюблёных]].',
	'favorite' => 'Улюблёныя',
	'favoritethispage' => 'Зрабіць гэтую старонку ўлюблёнай',
	'unfavorite' => 'Выдаліць з улюблёных',
	'unfavoritethispage' => 'Спыніць даданьне да ўлюблёных',
	'favoritelist-options' => 'Налады сьпісу ўлюблёных',
	'favoriteing' => 'Даданьне да сьпісу ўлюблёных…',
	'unfavoriteing' => 'Выдаленьне са сьпісу ўлюблёных…',
	'tooltip-pt-favoritelist' => 'Сьпіс старонак, за зьменамі якіх Вы назіраеце',
	'tooltip-ca-favorite' => 'Дадаць гэтую старонку ва ўлюблёныя',
	'tooltip-ca-unfavorite' => 'Выдаліць гэтую старонку з улюблёных',
	'tooltip-favorite' => 'Дадаць гэтую старонку ва ўлюблёныя',
	'favoritelistall2' => 'усе',
	'favoritelistedit-numitems' => 'Сьпіс Вашых улюблёных утрымлівае $1 {{PLURAL:$1|назву|назвы|назваў}}.',
	'favoritelistedit-noitems' => 'Сьпіс Вашых улюблёных не ўтрымлівае назваў.',
	'favoritelistedit-normal-title' => 'Рэдагаваць сьпіс улюблёных',
	'favoritelistedit-normal-legend' => 'Выдаліць назвы з улюблёных',
	'favoritelistedit-normal-explain' => 'Ніжэй пададзеныя назвы з Вашага сьпісу ўлюблёных.
Для выдаленьня назвы са сьпісу пазначце адпаведныя пазыцыі і націсьніце кнопку «{{int:Favoritelistedit-normal-submit}}».
Таксама Вы можаце [[Special:Favoritelist/raw|рэдагаваць нефарматаваны сьпіс]].',
	'favoritelistedit-normal-submit' => 'Выдаліць назвы',
	'favoritelistedit-normal-done' => '$1 {{PLURAL:$1|назва была выдаленая|назвы былі выдаленыя|назваў былі выдаленыя}} з Вашага сьпісу ўлюблёных:',
	'favoritelistedit-raw-title' => 'Рэдагаваць нефарматаваны сьпіс улюблёных',
	'favoritelistedit-raw-legend' => 'Рэдагаваць нефарматаваны сьпіс улюблёных',
	'favoritelistedit-raw-explain' => 'Ніжэй пададзены сьпіс назваў з Вашага сьпісу ўлюблёных, і Вы можаце яго рэдагаваць, дадаючы і выдаляючы іх;
адна назва ў радку.
Пасьля заканчэньня рэдагаваньня, націсьніце «{{int:Favoritelistedit-raw-submit}}».
Таксама Вы можаце [[Special:Favoritelist/edit|выкарыстаць стандартны інтэрфэйс рэдагаваньня]].',
	'favoritelistedit-raw-titles' => 'Назвы:',
	'favoritelistedit-raw-submit' => 'Абнавіць сьпіс улюблёных',
	'favoritelistedit-raw-done' => 'Ваш сьпіс улюблёных быў абноўлены.',
	'favoritelistedit-raw-added' => '$1 {{PLURAL:$1|назва была дададзеная|назвы былі дададзеныя|назваў былі дададзеныя}}:',
	'favoritelistedit-raw-removed' => '$1 {{PLURAL:$1|назва была выдаленая|назвы былі выдаленыя|назваў былі выдаленыя}}:',
	'favoritelisttools-view' => 'Паказаць сьпіс улюблёных',
	'favoritelisttools-edit' => 'Прагляд і рэдагаваньне сьпісу ўлюблёных',
	'favoritelisttools-raw' => 'Рэдагаваць нефарматаваны сьпіс улюблёных',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'favorites-desc' => 'Ermöglicht das Erstellen von Favoritenlisten',
	'favoritethis' => 'Diese Seite auf die Favoritenliste setzen',
	'prefs-favoritelist' => 'Favoriten',
	'prefs-favoritelist-token' => 'Favoriten-Token:',
	'prefs-advancedfavoritelist' => 'Erweiterte Optionen',
	'favoritelist' => 'Meine Favoriten',
	'myfavoritelist' => 'Meine Favoriten',
	'favoritelistfor' => "(für '''$1''')",
	'nofavoritelist' => 'Es befinden sich keine Einträge auf deiner Favoritenliste.',
	'favoritelistanontext' => 'Du musst dich $1, um deine Favoritenliste sehen oder Einträge auf ihr bearbeiten zu können.',
	'favoritenologin' => 'Nicht angemeldet',
	'favoritenologintext' => 'Du musst [[Special:UserLogin|angemeldet]] sein, um deine Favoritenliste bearbeiten zu können.',
	'addedfavorite' => 'Zur Favoritenliste hinzugefügt',
	'addedfavoritetext' => 'Die Seite „[[:$1]]“ wurde zu deiner [[Special:Favoritelist|Favoritenliste]] hinzugefügt.',
	'removedfavorite' => 'Von der Favoritenliste entfernt',
	'removedfavoritetext' => 'Die Seite „[[:$1]]“ wurde von deiner [[Special:Favoritelist|Favoritenliste]] entfernt.',
	'favorite' => 'Zur Favoritenliste hinzufügen',
	'favoritethispage' => 'Diese Seite zur Favoritenliste hinzufügen',
	'unfavorite' => 'Von der Favoritenliste entfernen',
	'unfavoritethispage' => 'Diese Seite von der Favoritenliste entfernen',
	'favoritelist-options' => 'Optionen zu Favoriten',
	'favoriteing' => 'Speichere …',
	'unfavoriteing' => 'Entferne …',
	'tooltip-pt-favoritelist' => 'Die Liste der Seiten, die sich auf deiner Favoritenliste befinden',
	'tooltip-ca-favorite' => 'Füge diese Seite zu deiner Favoritenliste hinzu',
	'tooltip-ca-unfavorite' => 'Entferne diese Seite von deiner Favoritenliste',
	'tooltip-favorite' => 'Füge diese Seite zu deiner Favoritenliste hinzu',
	'favoritelistall2' => 'alle',
	'favoritelistedit-numitems' => 'Deine Favoritenliste enthält {{PLURAL:$1|einen Eintrag |$1 Einträge}}.',
	'favoritelistedit-noitems' => 'Deine Favoritenliste enthält keine Einträge.',
	'favoritelistedit-normal-title' => 'Favoritenliste bearbeiten',
	'favoritelistedit-normal-legend' => 'Einträge aus der Favoritenliste entfernen',
	'favoritelistedit-normal-explain' => 'Dies sind die Einträge deiner Favoritenliste.
Um Einträge zu entfernen, markiere die Kästchen neben den Einträgen und klicke am Ende der Seite auf „{{int:Favoritelistedit-normal-submit}}“.
Du kannst deine Beobachtungsliste auch im [[Special:Favoritelist/raw|Listenformat bearbeiten]].',
	'favoritelistedit-normal-submit' => 'Einträge entfernen',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} von deiner Favoritenliste entfernt:',
	'favoritelistedit-raw-title' => 'im Listenformat bearbeiten',
	'favoritelistedit-raw-legend' => 'Favoritenliste im Listenformat bearbeiten',
	'favoritelistedit-raw-explain' => 'Dies sind die Einträge deiner Favoritenliste im Listenformat. Die Einträge können zeilenweise gelöscht oder hinzugefügt werden.
Pro Zeile ist ein Eintrag erlaubt.
Sobald du fertig bist, klicke auf „{{int:Favoritelistedit-raw-submit}}“.
Du kannst auch die [[Special:Favoritelist/edit|Standardseite]] zum Bearbeiten benutzen.',
	'favoritelistedit-raw-titles' => 'Einträge:',
	'favoritelistedit-raw-submit' => 'Favoritenliste aktualisieren',
	'favoritelistedit-raw-done' => 'Deine Favoritenliste wurde aktualisiert.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} hinzugefügt:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} entfernt:',
	'favoritelisttools-view' => 'Favoritenliste ansehen',
	'favoritelisttools-edit' => 'Favoritenliste ansehen und bearbeiten',
	'favoritelisttools-raw' => 'Favoritenliste im Listenformat bearbeiten',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'nofavoritelist' => 'Es befinden sich keine Einträge auf Ihrer Favoritenliste.',
	'favoritelistanontext' => 'Sie müssen sich $1, um Ihre Favoritenliste sehen oder Einträge auf ihr bearbeiten zu können.',
	'favoritenologintext' => 'Sie müssen [[Special:UserLogin|angemeldet]] sein, um Ihre Favoritenliste bearbeiten zu können.',
	'addedfavoritetext' => 'Die Seite „[[:$1]]“ wurde zu Ihrer [[Special:Favoritelist|Favoritenliste]] hinzugefügt.',
	'removedfavoritetext' => 'Die Seite „[[:$1]]“ wurde von Ihrer [[Special:Favoritelist|Favoritenliste]] entfernt.',
	'tooltip-pt-favoritelist' => 'Die Liste der Seiten, die sich auf Ihrer Favoritenliste befinden',
	'tooltip-ca-favorite' => 'Fügen Sie diese Seite zu Ihrer Favoritenliste hinzu',
	'tooltip-ca-unfavorite' => 'Entfernen Sie diese Seite von Ihrer Favoritenliste',
	'tooltip-favorite' => 'Fügen Sie diese Seite zu Ihrer Favoritenliste hinzu',
	'favoritelistedit-numitems' => 'Ihre Favoritenliste enthält {{PLURAL:$1|einen Eintrag|$1 Einträge}}. Die Diskussionsseiten wurden dabei nicht mitgezählt.',
	'favoritelistedit-noitems' => 'Ihre Favoritenliste enthält keine Einträge.',
	'favoritelistedit-normal-explain' => 'Dies sind die Einträge Ihrer Favoritenliste.
Um Einträge zu entfernen, markieren Sie die Kästchen neben den Einträgen und klicken Sie am Ende der Seite auf „{{int:Favoritelistedit-normal-submit}}“.
Sie können Ihre Favoritenliste auch im [[Special:Favoritelist/raw|Listenformat bearbeiten]].',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} von Ihrer Favoritenliste entfernt:',
	'favoritelistedit-raw-explain' => 'Dies sind die Einträge Ihrer Favoritenliste im Listenformat. Die Einträge können zeilenweise gelöscht oder hinzugefügt werden.
Pro Zeile ist ein Eintrag erlaubt.
Sobald Sie fertig sind, klicken Sie auf „{{int:Favoritelistedit-raw-submit}}“.
Sie können auch die [[Special:Favoritelist/edit|Standardseite]] zum Bearbeiten benutzen.',
	'favoritelistedit-raw-done' => 'Ihre Favoritenliste wurde aktualisiert.',
);

/** Spanish (Español)
 * @author Dferg
 * @author Mor
 */
$messages['es'] = array(
	'favorites-desc' => 'Creando una lista de favoritos',
	'favoritethis' => 'Marcar esta página como favorita',
	'prefs-favoritelist' => 'Favoritos',
	'prefs-advancedfavoritelist' => 'Opciones avanzadas',
	'favoritelistfor' => "(para '''$1''')",
	'addedfavorite' => 'Añadido a favoritos',
	'removedfavorite' => 'Quitar de Favoritos',
	'favoritelist-options' => 'Opciones de Favoritos',
	'tooltip-ca-favorite' => 'Añadir esta página a tus favoritos',
	'tooltip-ca-unfavorite' => 'Eliminar esta página de tus favoritos',
	'favoritelistedit-normal-title' => 'Editar favoritos',
);

/** French (Français)
 * @author Hashar
 */
$messages['fr'] = array(
	'favorites-desc' => 'Créer une liste de favoris',
	'favoritethis' => 'Ajouter cette page aux favorits',
	'prefs-favoritelist' => 'Favoris',
	'prefs-favoritelist-token' => 'Jeton des favorits :',
	'prefs-advancedfavoritelist' => 'Options avancées',
	'favoritelist' => 'Mes favoris',
	'myfavoritelist' => 'Mes favoris',
	'favoritelistfor' => '(pour « $1 »)',
	'nofavoritelist' => "Vous n'avez aucune page en favoris.",
	'favoritenologin' => 'Non connecté',
	'addedfavorite' => 'Ajouté aux favoris',
	'favorite' => 'Favoris',
	'favoritelist-options' => 'Options Favoris',
	'tooltip-pt-favoritelist' => 'La liste des pages dont vous suivez les modifications',
	'tooltip-ca-favorite' => 'Ajouter cette page à vos favoris',
	'favoritelistall2' => 'tous',
	'favoritelistedit-normal-title' => 'Modifier favoris',
	'favoritelistedit-normal-submit' => 'Retirer les titres',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|un titre a était retiré|$1 titres ont été retirées}} de vos favoris :',
	'favoritelistedit-raw-titles' => 'Titres :',
	'favoritelistedit-raw-submit' => 'Mise à jour favoris',
	'favoritelistedit-raw-done' => 'Vos favoris ont été mis à jour.',
	'favoritelisttools-view' => 'Voir Favoris',
	'favoritelisttools-edit' => 'Voir et modifier les favoris',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'prefs-advancedfavoritelist' => 'Chouèx avanciês',
	'favoritelistfor' => "(de '''$1''')",
	'favoritenologin' => 'Pas branchiê',
	'favoritelistedit-normal-submit' => 'Enlevar los titros',
	'favoritelistedit-raw-titles' => 'Titros :',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'prefs-advancedfavoritelist' => 'Opcións avanzadas',
	'favoritelist' => 'Os meus favoritos',
	'myfavoritelist' => 'Os meus favoritos',
	'favoritelistfor' => "(de '''$1''')",
	'favoritelistedit-raw-titles' => 'Títulos:',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'favorites-desc' => 'Crear un lista de favorites',
	'favoritethis' => 'Favorir iste pagina',
	'prefs-favoritelist' => 'Favorites',
	'prefs-favoritelist-token' => 'Indicio de favorites:',
	'prefs-advancedfavoritelist' => 'Optiones avantiate',
	'favoritelist' => 'Mi favorites',
	'myfavoritelist' => 'Mi favorites',
	'favoritelistfor' => "(de '''$1''')",
	'nofavoritelist' => 'Tu non ha elementos favorite.',
	'favoritelistanontext' => 'Per favor $1 pro vider o modificar elementos favorite.',
	'favoritenologin' => 'Non identificate',
	'favoritenologintext' => 'Es necessari [[Special:UserLogin|aperir un session]] pro modificar tu favorites.',
	'addedfavorite' => 'Addite al favorites',
	'addedfavoritetext' => 'Le pagina "[[:$1]]" ha essite addite a tu [[Special:Favoritelist|favorites]].',
	'removedfavorite' => 'Removite del favorites',
	'removedfavoritetext' => 'Le pagina "[[:$1]]" ha essite removite de tu [[Special:Favoritelist|your favorites]].',
	'favorite' => 'Favorite',
	'favoritethispage' => 'Favorir iste pagina',
	'unfavorite' => 'Disfavorir',
	'unfavoritethispage' => 'Cessar de favorir',
	'favoritelist-options' => 'Optiones de favorites',
	'favoriteing' => 'Favorir…',
	'unfavoriteing' => 'Disfavorir…',
	'tooltip-pt-favoritelist' => 'Le lista de paginas del quales tu seque le modificationes',
	'tooltip-ca-favorite' => 'Adder iste pagina a tu favorites',
	'tooltip-ca-unfavorite' => 'Remover iste pagina de tu favorites',
	'tooltip-favorite' => 'Adder iste pagina a tu favorites',
	'favoritelistall2' => 'totes',
	'favoritelistedit-numitems' => 'Tu lista de favorites contine {{PLURAL:$1|1 titulo|$1 titulos}}.',
	'favoritelistedit-noitems' => 'Tu non ha titulos favorite.',
	'favoritelistedit-normal-title' => 'Modificar favorites',
	'favoritelistedit-normal-legend' => 'Remover titulos del favorites',
	'favoritelistedit-normal-explain' => 'Le titulos in tu lista de favorites es monstrate hic infra.
Pro eliminar un titulo, marca le quadrato correspondente, e clicca "{{int:Watchlistedit-normal-submit}}".
Tu pote etiam [[Special:Favoritelist/raw|modificar le lista in forma crude]].',
	'favoritelistedit-normal-submit' => 'Remover titulos',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite removite de tu lista de favorites:',
	'favoritelistedit-raw-title' => 'Modificar lista de favorites in forma crude',
	'favoritelistedit-raw-legend' => 'Modificar lista de favorites in forma crude',
	'favoritelistedit-raw-explain' => 'Le titulos in tu lista de favorites es monstrate hic infra, e pote esser modificate per adder e eliminar entratas del lista;
un titulo per linea.
Quando tu ha finite, clicca super "{{int:Favoritelistedit-raw-submit}}".
Tu pote etiam [[Special:Favoritelist/edit|usar le editor standard]].',
	'favoritelistedit-raw-titles' => 'Titulos:',
	'favoritelistedit-raw-submit' => 'Actualisar favorites',
	'favoritelistedit-raw-done' => 'Tu lista de favorites ha essite actualisate.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite addite:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite removite:',
	'favoritelisttools-view' => 'Vider favorites',
	'favoritelisttools-edit' => 'Vider e modificar favorites',
	'favoritelisttools-raw' => 'Modificar lista de favorites in forma crude',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'favorites-desc' => 'Eng Lescht mat Favoriten uleeën',
	'favoritethis' => 'Dës Säit bäi meng Favoriten derbäisetzen',
	'prefs-favoritelist' => 'Favoriten',
	'prefs-favoritelist-token' => 'Favoriten-Token:',
	'prefs-advancedfavoritelist' => 'Méi Optiounen',
	'favoritelist' => 'Meng Favoriten',
	'myfavoritelist' => 'Meng Favoriten',
	'favoritelistfor' => "(fir '''$1''')",
	'nofavoritelist' => 'Är Lëscht vun de Favoriten ass eidel.',
	'favoritelistanontext' => "Dir musst Iech $1 fir d'Lëscht vun Äre Favoriten ze gesinn oder z'änneren.",
	'favoritenologin' => 'Net ageloggt',
	'favoritenologintext' => "Dir musst [[Special:UserLogin|ageloggt sinn]], fir Är Favoriten z'änneren.",
	'addedfavorite' => "Bäi d'Favoriten derbäigesat",
	'addedfavoritetext' => 'D\'Säit "[[:$1]]" gouf bäi Är [[Special:Favoritelist|Favoriten]] derbäigesat.',
	'removedfavorite' => 'Vun der Lëscht vun de Favoriten erofgeholl',
	'removedfavoritetext' => 'D\'Säit "[[:$1]]" gouf vun [[Special:Favoritelist|ärer Lëscht vun de Favoriten]] erofgeholl.',
	'favorite' => "Op d'Lëscht vun de Favoriten derbäisetzen",
	'favoritethispage' => 'Dës Säit bäi meng Favoriten derbäisetzen',
	'unfavorite' => 'Vun der Lëscht vun de Favoriten erofhuelen',
	'unfavoritethispage' => 'Dës Säit vu menge Favoriten ewechhuelen',
	'favoritelist-options' => 'Optioune vun de Favoriten',
	'favoriteing' => 'Späicheren...',
	'unfavoriteing' => 'Erofhuelen...',
	'tooltip-pt-favoritelist' => 'Lëscht vu Säiten, bei deenen Dir op Ännerungen oppasst',
	'tooltip-ca-favorite' => "Setzt dës Säit op d'Lëscht vun Äre Favoriten derbäi",
	'tooltip-ca-unfavorite' => 'Dës Säit vun der Lëscht vun Äre Favoriten erofhuelen?',
	'tooltip-favorite' => "Dës Säit op d'Lëscht vun Äre Favoriten derbäisetzen",
	'favoritelistall2' => 'all',
	'favoritelistedit-numitems' => 'An der Lëscht vun Äre {{PLURAL:$1|Favoriten ass 1 Titel|Favorite sinn $1 Titelen}}.',
	'favoritelistedit-noitems' => 'De Lëscht vun Äre Favoriten ass eidel.',
	'favoritelistedit-normal-title' => 'Lëscht vun de Favoriten änneren',
	'favoritelistedit-normal-legend' => 'Säite vun der Lëscht vun de Favoriten erofhuelen',
	'favoritelistedit-normal-explain' => 'D\'Säite vun der Lëscht vun Äre Favorite stinn hei drënner.
Fir eng Säit ewechzehuelen, klickt op d\'Haischen niewendrun a klickt duerno op "{{int:Favoritelistedit-normal-submit}}".
Dir kënnt och [[Special:Favoritelist/raw|déi net-formatéiert Lëscht änneren]].',
	'favoritelistedit-normal-submit' => 'Säiten erofhuelen',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufe}} vun der Lëscht vun Äre Favoriten erofgeholl:',
	'favoritelistedit-raw-title' => 'Net-formatéiert Favoritelëscht änneren',
	'favoritelistedit-raw-legend' => 'Net-formatéiert Favoritelëscht änneren',
	'favoritelistedit-raw-titles' => 'Säiten:',
	'favoritelistedit-raw-submit' => 'Lëscht vun de Favoriten aktualiséieren',
	'favoritelistedit-raw-done' => "D'Lëscht vun Äre Favorite gouf aktualiséiert.",
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufen}} derbäigesat:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufen}} ewechgeholl:',
	'favoritelisttools-view' => 'Favorite weisen',
	'favoritelisttools-edit' => 'Lëscht vun de Favorite weisen an änneren',
	'favoritelisttools-raw' => 'Lëscht vun de Favoriten net-formatéiert änneren',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'favorites-desc' => 'Создај список на бендисани',
	'favoritethis' => 'Бендисај ја станицава',
	'prefs-favoritelist' => 'Бендисани',
	'prefs-favoritelist-token' => 'Жетон за бендисани:',
	'prefs-advancedfavoritelist' => 'Напредни поставки',
	'favoritelist' => 'Мои бендисани',
	'myfavoritelist' => 'Мои бендисани',
	'favoritelistfor' => "(за '''$1''')",
	'nofavoritelist' => 'Немате бендисани.',
	'favoritelistanontext' => '$1 за да ги погледате или уредите бендисаните.',
	'favoritenologin' => 'Не сте најавени',
	'favoritenologintext' => 'Мора да сте [[Special:UserLogin|најавени]] за да можете да ги менувате бендисаните.',
	'addedfavorite' => 'Додадено во бендисаните',
	'addedfavoritetext' => 'Страницата „[[:$1]]“ е додадена во [[Special:Favoritelist|бендисаните]].',
	'removedfavorite' => 'Отстрането од бендисаните',
	'removedfavoritetext' => 'Страницата „[[:$1]]“ е отстранета од [[Special:Favoritelist|бендисаните]].',
	'favorite' => 'Бендисај',
	'favoritethispage' => 'Бендисај ја страницава',
	'unfavorite' => 'Одбендисај',
	'unfavoritethispage' => 'Одбендисај ја страницава',
	'favoritelist-options' => 'Поставки за бендисани',
	'favoriteing' => 'Бендисувам...',
	'unfavoriteing' => 'Одбендисувам...',
	'tooltip-pt-favoritelist' => 'Список на страници кои сте избрале да ги набљудувате',
	'tooltip-ca-favorite' => 'Додај ја страницава во бендисаните',
	'tooltip-ca-unfavorite' => 'Отстрани ја страницава од бендисаните',
	'tooltip-favorite' => 'Додај ја страницава во бендисаните',
	'favoritelistall2' => 'сите',
	'favoritelistedit-numitems' => 'Во бендисаните има {{PLURAL:$1|1 наслов|$1 наслови}}.',
	'favoritelistedit-noitems' => 'Немате наслови во бендисаните.',
	'favoritelistedit-normal-title' => 'Уреди бендисани',
	'favoritelistedit-normal-legend' => 'Отстрани наслови од бендисаните',
	'favoritelistedit-normal-explain' => 'Насловите во вашиот список на набљудувања се прикажани подолу.
За да избришете наслов, штиклирајте го квадратчето лево од насловот, и стиснете на „{{int:Favoritelistedit-normal-submit}}“.
Можете да го [[Special:Favoritelist/raw|уредите сировниот список]].',
	'favoritelistedit-normal-submit' => 'Отстрани наслови',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 наслов|$1 наслови}} се отстранети од бендисаните:',
	'favoritelistedit-raw-title' => 'Уреди сиров список на бендисани',
	'favoritelistedit-raw-legend' => 'Уреди сиров список на бендисани',
	'favoritelistedit-raw-explain' => 'Насловите во бендисаните се прикажани подолу, и можат да се уредуваат со додавање или бришење на ставки од списокот;
по еден наслов во секој ред.
Кога ќе завршите, стиснете на „{{int:Favoritelistedit-raw-submit}}“.
Можете и да го [[Special:Favoritelist/edit|употребите обичниот уредувач]].',
	'favoritelistedit-raw-titles' => 'Наслови:',
	'favoritelistedit-raw-submit' => 'Поднови бендисани',
	'favoritelistedit-raw-done' => 'Бендисаните се подновени.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Додаден е 1 наслов|Додадени се $1 наслови}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Отстранет е 1 наслов|Отстранети се $1 наслови}}:',
	'favoritelisttools-view' => 'Погледај „Бендисани“',
	'favoritelisttools-edit' => 'Погледај и уреди „Бендисани“',
	'favoritelisttools-raw' => 'Уреди сирови бендисани',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'favorites-desc' => 'പ്രിയങ്കരങ്ങളായ താളുകളുടെ പട്ടിക സൃഷ്ടിക്കുന്നു',
	'favoritethis' => 'ഈ താൾ പ്രിയങ്കരമാക്കുക',
	'prefs-favoritelist' => 'പ്രിയങ്കരങ്ങൾ',
	'prefs-favoritelist-token' => 'പ്രിയങ്കരമാക്കിയതിന്റെ ചീട്ട്:',
	'prefs-advancedfavoritelist' => 'വിപുലമായ ഉപാധികൾ',
	'favoritelist' => 'എനിക്കു പ്രിയങ്കരമായവ',
	'myfavoritelist' => 'എനിക്കു പ്രിയങ്കരമായവ',
	'favoritelistfor' => "('''$1''' എന്നതിന്)",
	'nofavoritelist' => 'താങ്കളുടെ പ്രിയങ്കരങ്ങളിൽ ഇനങ്ങളൊന്നുമില്ല.',
	'favoritelistanontext' => 'താങ്കളുടെ പ്രിയങ്കരങ്ങൾ കാണുവാനോ തിരുത്തുവാനോ $1 ചെയ്യുക.',
	'favoritenologin' => 'പ്രവേശിച്ചിട്ടില്ല',
	'favoritenologintext' => 'താങ്കളുടെ പ്രിയങ്കരങ്ങൾ തിരുത്തുവാൻ താങ്കൾ [[Special:UserLogin|ലോഗിൻ]] ചെയ്തിരിക്കണം.',
	'addedfavorite' => 'പ്രിയങ്കരങ്ങളിലേയ്ക്ക് ചേർത്തു',
	'addedfavoritetext' => '"[[:$1]]" എന്ന ഈ താൾ താങ്കളുടെ [[Special:Favoritelist|പ്രിയങ്കരങ്ങളിലേയ്ക്ക്]] ചേർത്തു.',
	'removedfavorite' => 'പ്രിയങ്കരങ്ങളിൽ നിന്ന് നീക്കം ചെയ്തു',
	'removedfavoritetext' => '[[Special:Favoritelist|താങ്കളുടെ പ്രിയങ്കരങ്ങളിൽ]] നിന്നും "[[:$1]]" എന്ന താൾ നീക്കം ചെയ്തിരിക്കുന്നു.',
	'favorite' => 'പ്രിയങ്കരം',
	'favoritethispage' => 'ഈ താൾ പ്രിയങ്കരമാക്കുക',
	'unfavorite' => 'പ്രിയങ്കരമല്ലാതാക്കുക',
	'unfavoritethispage' => 'പ്രിയങ്കരമാക്കൽ അവസാനിപ്പിക്കുക',
	'favoritelist-options' => 'പ്രിയങ്കരമാക്കലിന്റെ ഐച്ഛികങ്ങൾ',
	'favoriteing' => 'പ്രിയങ്കരമാക്കുന്നു...',
	'unfavoriteing' => 'പ്രിയങ്കരമല്ലാതാക്കുന്നു...',
	'tooltip-pt-favoritelist' => 'താങ്കൾ മാറ്റങ്ങൾ ശ്രദ്ധിക്കുന്ന താളുകളുടെ പട്ടിക',
	'tooltip-ca-favorite' => 'ഈ താൾ താങ്കളുടെ പ്രിയങ്കരങ്ങളിലേയ്ക്ക് ചേർക്കുക',
	'tooltip-ca-unfavorite' => 'ഈ താൾ താങ്കളുടെ പ്രിയങ്കരങ്ങളിൽ നിന്ന് നീക്കം ചെയ്യുക',
	'tooltip-favorite' => 'ഈ താൾ താങ്കളുടെ പ്രിയങ്കരങ്ങളിലേയ്ക്ക് ചേർക്കുക',
	'favoritelistall2' => 'എല്ലാം',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'favorites-desc' => 'Maakt het mogelijk om favorietenlijst aanmaken',
	'favoritethis' => 'Pagina in favorietenlijst opnemen',
	'prefs-favoritelist' => 'Favorieten',
	'prefs-favoritelist-token' => 'Favorietensleutel:',
	'prefs-advancedfavoritelist' => 'Gevorderde instellingen',
	'favoritelist' => 'Mijn favorieten',
	'myfavoritelist' => 'Mijn favorieten',
	'favoritelistfor' => "(voor '''$1''')",
	'nofavoritelist' => "U hebt geen pagina's in uw favorietenlijst opgenomen.",
	'favoritelistanontext' => 'Om uw favorieten te bekijken of te bewerken moet u zich $1.',
	'favoritenologin' => 'Niet aangemeld',
	'favoritenologintext' => '[[Special:UserLogin|Meld u aan]] om uw favorietenlijst te bewerken.',
	'addedfavorite' => 'Toegevoegd aan favorieten',
	'addedfavoritetext' => 'De pagina "[[:$1]]" is toegevoegd aan uw [[Special:Favoritelist|favorieten]].',
	'removedfavorite' => 'Verwijderd uit favorieten',
	'removedfavoritetext' => 'De pagina "[[:$1]]" is toegevoegd uit uw [[Special:Favoritelist|favorieten]] verwijderd.',
	'favorite' => 'Naar favorieten',
	'favoritethispage' => 'Pagina in favorietenlijst opnemen',
	'unfavorite' => 'Uit favorieten',
	'unfavoritethispage' => 'Pagina uit favorietenlijst verwijderen',
	'favoritelist-options' => 'Instellingen voor favorietenlijst',
	'favoriteing' => 'In favorietenlijst plaatsen...',
	'unfavoriteing' => 'Uit favorietenlijst aan het verwijderen...',
	'tooltip-pt-favoritelist' => "De lijst met pagina's waarvan u de wijzigingen volgt.",
	'tooltip-ca-favorite' => 'Deze pagina toevoegen aan uw favorieten',
	'tooltip-ca-unfavorite' => 'Deze pagina uit uw favorieten verwijderen',
	'tooltip-favorite' => 'Deze pagina toevoegen aan uw favorieten',
	'favoritelistall2' => 'alle',
	'favoritelistedit-numitems' => "Uw favorietenlijst bevat {{PLURAL:$1|1 pagina|$1 pagina's}}.",
	'favoritelistedit-noitems' => "Er zijn geen pagina's opgenomen in uw favorietenlijst.",
	'favoritelistedit-normal-title' => 'Favorieten bewerken',
	'favoritelistedit-normal-legend' => "Pagina's uit favorietenlijst verwijderen",
	'favoritelistedit-normal-explain' => 'Hieronder worden de pagina’s in uw favorietenlijst weergegeven.
Klik op het vierkantje ernaast en daarna op "{{int:Favoritelistedit-normal-submit}}" om een pagina te verwijderen.
U kunt ook de [[Special:Favoritelist/raw|ruwe lijst bewerken]].',
	'favoritelistedit-normal-submit' => "Pagina's verwijderen",
	'favoritelistedit-normal-done' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} verwijderd uit uw favorieten:',
	'favoritelistedit-raw-title' => 'Ruwe favorietenlijst bewerken',
	'favoritelistedit-raw-legend' => 'Ruwe favorietenlijst bewerken',
	'favoritelistedit-raw-explain' => 'Hieronder staan pagina’s uit uw favorietenlijst.
U kunt de lijst bewerken door pagina’s te verwijderen en toe te voegen.
Eén pagina per regel.
Als u klaar bent, klik dan op "{{int:Favoritelistedit-raw-submit}}".
U kunt ook [[Special:Favoritelist/edit|het standaard bewerkingsscherm gebruiken]].',
	'favoritelistedit-raw-titles' => 'Pagina’s:',
	'favoritelistedit-raw-submit' => 'Favorieten bijwerken',
	'favoritelistedit-raw-done' => 'Uw favorieten zijn bijgewerkt.',
	'favoritelistedit-raw-added' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} toegevoegd:',
	'favoritelistedit-raw-removed' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} verwijderd:',
	'favoritelisttools-view' => 'Favorieten bekijken',
	'favoritelisttools-edit' => 'Favorieten bekijken en bewerken',
	'favoritelisttools-raw' => 'Ruwe favorietenlijst bewerken',
);

/** ‪Nederlands (informeel)‬ (‪Nederlands (informeel)‬)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'favoritelistanontext' => 'Om je favorieten te bekijken of te bewerken moet je je $1.',
);

/** Polish (Polski)
 * @author Woytecr
 */
$messages['pl'] = array(
	'favorites-desc' => 'Tworzenie listy ulubionych',
	'favoritethis' => 'Dodaj tę stronę do ulubionych',
	'prefs-favoritelist' => 'Ulubione',
	'prefs-favoritelist-token' => 'Klucz listy ulubionych',
	'prefs-advancedfavoritelist' => 'Opcje zaawansowane',
	'favoritelist' => 'Moje ulubione',
	'myfavoritelist' => 'Moje ulubione',
	'favoritelistfor' => "(dla '''$1''')",
	'nofavoritelist' => 'Nie masz żadnych pozycji na swojej liście ulubionych.',
	'favoritelistanontext' => 'Prosimy $1 aby zobaczyć lub edytować pozycje twojej listy ulubionych.',
	'favoritenologin' => 'Nie zalogowany',
	'favoritenologintext' => 'Musisz być [[Special:UserLogin|zalogowany]] aby modyfikować swoją listę ulubionych.',
	'addedfavorite' => 'Dodano do ulubionych',
	'addedfavoritetext' => 'Strona "[[:$1]]" została dodana do twoich [[Special:Favoritelist|ulubionych]].',
	'removedfavorite' => 'Usunięto z ulubionych',
	'removedfavoritetext' => 'Strona "[[:$1]]" została usunięta z twojej listy [[Special:Favoritelist|ulubionych]].',
	'favorite' => 'Ulubiony',
	'favoritethispage' => 'Dodaj tę stronę do ulubionych',
	'unfavorite' => 'Usuń z ulubionych',
	'unfavoritethispage' => 'Zatrzymaj dodawanie do ulubionych',
	'favoritelist-options' => 'Opcje Ulubionych',
	'favoriteing' => 'Dodawanie do ulubionych...',
	'unfavoriteing' => 'Usuwanie z ulubionych...',
	'tooltip-pt-favoritelist' => 'Lista stron obserwowanych przez Ciebie',
	'tooltip-ca-favorite' => 'Dodaj tę stronę do ulubionych',
	'tooltip-ca-unfavorite' => 'Usuń tę stronę z ulubionych',
	'tooltip-favorite' => 'Dodaj tę stronę do ulubionych',
	'favoritelistall2' => 'wszystkie',
	'favoritelistedit-numitems' => 'Twoje ulubione zawierają {{PLURAL:$1|1 tytuł|$1 tytuły}}.',
	'favoritelistedit-noitems' => 'Twoje ulubione nie zawierają tytułów.',
	'favoritelistedit-normal-title' => 'Edycja ulubionych',
	'favoritelistedit-normal-legend' => 'Usuń tytuły z ulubionych',
	'favoritelistedit-normal-explain' => 'Tytuły na twojej liście ulubionych pokazane są poniżej.
Aby usunąć tytuły, zaznacz pole obok nich i kliknij "{{int:Favoritelistedit-normal-submit}}".
Możesz też [[Special:Favoritelist/raw|edytować tekstową listę]].',
	'favoritelistedit-normal-submit' => 'Usuń tytuły',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 tytuł został usunięty|$1 tytuły zostały usunięte}} z twojej listy ulubionych:',
	'favoritelistedit-raw-title' => 'Edycja tekstowa listy ulubionych',
	'favoritelistedit-raw-legend' => 'Edycja tekstowa listy ulubionych',
	'favoritelistedit-raw-explain' => 'Tytuły na twojej liście ulubionych pokazane są poniżej i mogą być edytowane poprzez dodawanie lub usuwanie z listy;
jedna linia zawiera jeden tytuł.
Jeżeli skończysz, kliknij "{{int:Favoritelistedit-raw-submit}}".
Możesz też [[Special:Favoritelist/edit|użyć standardowego edytora]].',
	'favoritelistedit-raw-titles' => 'Tytuły:',
	'favoritelistedit-raw-submit' => 'Aktualizuj ulubione',
	'favoritelistedit-raw-done' => 'Twoje ulubione zostały zaktualizowane.',
	'favoritelistedit-raw-added' => 'Dodano {{PLURAL:$1|1 tytuł|$1 tytułów}}:',
	'favoritelistedit-raw-removed' => 'Usunięto {{PLURAL:$1|1 tytuł|$1 tytuły}}:',
	'favoritelisttools-view' => 'Wyświetl ulubione',
	'favoritelisttools-edit' => 'Przeglądanie i edycja ulubionych',
	'favoritelisttools-raw' => 'Edycja tekstowa listy ulubionych',
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'favorites-desc' => 'Criar uma lista de páginas preferidas',
	'favoritethis' => 'Adicionar esta página às preferidas',
	'prefs-favoritelist' => 'Preferidas',
	'prefs-favoritelist-token' => 'Senha secreta da lista de páginas preferidas:',
	'prefs-advancedfavoritelist' => 'Opções avançadas',
	'favoritelist' => 'Preferidas',
	'myfavoritelist' => 'Preferidas',
	'favoritelistfor' => "(de '''$1''')",
	'nofavoritelist' => 'A lista de páginas preferidas está vazia.',
	'favoritelistanontext' => '$1 para ver ou editar a lista de páginas preferidas.',
	'favoritenologin' => 'Não está autenticado',
	'favoritenologintext' => 'Precisa de estar [[Special:UserLogin|autenticado]] para modificar a sua lista de páginas preferidas.',
	'addedfavorite' => 'Adicionada às preferidas',
	'addedfavoritetext' => 'A página "[[:$1]]" foi adicionada à sua lista de [[Special:Favoritelist|páginas preferidas]].',
	'removedfavorite' => 'Removida das preferidas',
	'removedfavoritetext' => 'A página "[[:$1]]" foi removida da sua lista de [[Special:Favoritelist|páginas preferidas]].',
	'favorite' => 'Preferida',
	'favoritethispage' => 'Adicionar esta página às preferidas',
	'unfavorite' => 'Remover esta página das preferidas',
	'unfavoritethispage' => 'Remover das preferidas',
	'favoritelist-options' => 'Opções das páginas preferidas',
	'favoriteing' => 'A adicionar às preferidas...',
	'unfavoriteing' => 'A remover das preferidas...',
	'tooltip-pt-favoritelist' => 'A lista das páginas cujas mudanças está a monitorizar',
	'tooltip-ca-favorite' => 'Adicionar esta página às suas páginas preferidas',
	'tooltip-ca-unfavorite' => 'Remover esta página das páginas preferidas',
	'tooltip-favorite' => 'Adicionar esta página às suas preferidas',
	'favoritelistall2' => 'todas',
	'favoritelistedit-numitems' => 'A sua lista de páginas preferidas contém {{PLURAL:$1|uma página|$1 páginas}}.',
	'favoritelistedit-noitems' => 'A sua lista de página preferidas está vazia.',
	'favoritelistedit-normal-title' => 'Editar a lista de preferidas',
	'favoritelistedit-normal-legend' => 'Remover páginas das preferidas',
	'favoritelistedit-normal-explain' => 'As suas páginas preferidas são listadas abaixo.
Para remover uma página, marque a caixa de selecção correspondente e clique o botão "{{int:Favoritelistedit-normal-submit}}".
Também pode [[Special:Favoritelist/raw|editar a lista em forma de texto]].',
	'favoritelistedit-normal-submit' => 'Remover páginas',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Foi removida uma página|Foram removidas $1 páginas}} da sua lista de páginas preferidas:',
	'favoritelistedit-raw-title' => 'Editar a lista de preferidas em forma de texto',
	'favoritelistedit-raw-legend' => 'Editar a lista de preferidas em forma de texto',
	'favoritelistedit-raw-explain' => 'A lista de páginas preferidas é apresentada abaixo e pode editá-la, adicionando ou removendo páginas;
uma página por linha.
Quando terminar, clique "{{int:Favoritelistedit-raw-submit}}".
Também pode [[Special:Favoritelist/edit|editar a lista da maneira convencional]].',
	'favoritelistedit-raw-titles' => 'Páginas:',
	'favoritelistedit-raw-submit' => 'Actualizar as preferidas',
	'favoritelistedit-raw-done' => 'A sua lista de páginas preferidas foi actualizada.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Foi adicionada uma página|Foram adicionadas $1 páginas}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Foi removida uma página|Foram removidas $1 páginas}}:',
	'favoritelisttools-view' => 'Ver Páginas Preferidas',
	'favoritelisttools-edit' => 'Ver e editar a lista de páginas preferidas',
	'favoritelisttools-raw' => 'Editar a lista de preferidas em forma de texto',
);

