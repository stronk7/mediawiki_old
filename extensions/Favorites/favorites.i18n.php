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
	'favoritelistedit-numitems' => 'Ihre Favoritenliste enthält {{PLURAL:$1|einen Eintrag|$1 Einträge}}.',
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

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'favorites-desc' => 'Eng Lescht mat Favoriten uleeën',
	'favoritethis' => 'Dës Säit bäi meng Favoriten derbäisetzen',
	'prefs-favoritelist' => 'Favoriten',
	'prefs-advancedfavoritelist' => 'Méi Optiounen',
	'favoritelist' => 'Meng Favoriten',
	'favoritelistfor' => "(fir '''$1''')",
	'nofavoritelist' => 'Är Lëscht vun de Favoriten ass eidel.',
	'favoritenologin' => 'Net ageloggt',
	'favorite' => "Op d'Lëscht vun de Favoriten derbäisetzen",
	'favoriteing' => 'Späicheren...',
	'unfavoriteing' => 'Erofhuelen...',
	'tooltip-ca-favorite' => "Setzt dës Säit op d'Lëscht vun Äre Favoriten derbäi",
	'favoritelistall2' => 'all',
	'favoritelistedit-noitems' => 'De Lëscht vun Äre Favoriten ass eidel.',
	'favoritelistedit-normal-title' => 'Lëscht vun de Favoriten änneren',
	'favoritelistedit-normal-legend' => 'Säite vun der Lëscht vun de Favoriten erofhuelen',
	'favoritelistedit-normal-explain' => 'D\'Säite vun der Lëscht vun Äre Favorite stinn hei drënner.
Fir eng Säit ewechzehuelen, klickt op d\'Haischen niewendrun a klickt duerno op "{{int:Favoritelistedit-normal-submit}}".
Dir kënnt och [[Special:Favoritelist/raw|déi net-formatéiert Lëscht änneren]].',
	'favoritelistedit-normal-submit' => 'Säiten erofhuelen',
	'favoritelistedit-raw-titles' => 'Säiten:',
	'favoritelistedit-raw-submit' => 'Lëscht vun de Favoriten aktualiséieren',
	'favoritelistedit-raw-done' => "D'Lëscht vun Äre Favorite gouf aktualiséiert.",
	'favoritelisttools-view' => 'Favorite weisen',
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

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'prefs-favoritelist' => 'Favorieten',
	'favoritelist' => 'Mijn favorieten',
	'myfavoritelist' => 'Mijn favorieten',
	'favoritelistfor' => "(voor '''$1''')",
	'favoritenologin' => 'Niet aangemeld',
	'favoritelistall2' => 'alle',
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

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'favorites-desc' => 'Criar uma lista de páginas preferidas',
	'favoritethis' => 'Adicionar esta página às preferidas',
	'prefs-favoritelist' => 'Preferidas',
	'prefs-favoritelist-token' => 'Chave das preferidas:',
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

