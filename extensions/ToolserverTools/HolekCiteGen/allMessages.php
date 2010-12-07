<?php
/**
 * Internationalisation file for Cite book template generator.
 *
 * @addtogroup Languages
 * @copyright © 2009 Michał Połtyn
 * @source http://translatewiki.net/w/i.php?title=Special%3ATranslate&task=export-to-file&group=ext-citebook-gen
 * @license GNU General Public Licence 2.0 or later
 */

$rtlLanguages = array('ar','arc','dv','fa','he','kk','ks','mzn','ps','sd','ug','ur','ydd','yi');

$messages = array();



/** English (English)
 * @author Holek
 * @author Wpedzich
 */
$messages['en'] = array(
	'ts-citegen-Title' => 'Citation template generator',
	
	// Button
	'ts-citegen-Send' => 'Generate',
	
	// Input
	'ts-citegen-Input-title' => 'Input',
	'ts-citegen-Input-text' => 'This is a citation template generator. Using it, you can quickly fill in the citation templates in various language editions of Wikipedia. Please fill in the data (%s) in the fields below, and the script will try to complete the templates. Remember, it does not matter which fields you put the input data into. The script will automatically match the correct template to the input given.',
	'ts-citegen-Option-append-author-link' => 'Append the author wiki links into the template',
	'ts-citegen-Option-append-newlines' => 'Append new lines after each parameter',
	'ts-citegen-Option-add-references' => 'Add <ref> tags around citation templates',
	'ts-citegen-Option-add-list' => 'Create a wikilist of citation templates',
	
	// Output
	'ts-citegen-Output-title' => 'Result',
	'ts-citegen-Output-select-disclaimer' => 'Choosing a template language does not guarantee that the specific template is available in your language. This field lists available languages of every supported template, i.e. it may display French because only {{Cite book}} is supported.',
	'ts-citegen-Wrong-input' => '%s: not identified as correct input.',
	
	// Settings
	'ts-citegen-Parsers' => 'Parsers',
	'ts-citegen-Skins' => 'Output',
	'ts-citegen-Skin-skins' => 'Skins',
	'ts-citegen-Skin-outputformat' => 'Output format',
	
	'ts-citegen-Template-lang' => 'Template language',
	
	// Sources
	'ts-citegen-Sources-title' => 'Sources',
	'ts-citegen-Sources-text' => 'Below the list of used sources is available.',
	
	// Sidebar-related messages
	'ts-citegen-Sidebar-title' => 'Citation generator',
	
	'ts-citegen-Sidebar-add-Firefox' => 'Add to the sidebar',
	'ts-citegen-Sidebar-add-Opera' => 'Add to the Hotlist',
	'ts-citegen-Sidebar-add-IE-Mac' => 'Add to the Page Holder',
	'ts-citegen-Sidebar-add-IE-Mac-details' => 'Once the page has loaded, open your Page Holder, click \'Add\' then use the Page Holder Favorites button to store it as a Page Holder Favorite.',
	
	// Portlet messages
	'ts-citegen-Tools' => 'Tools',
	'ts-citegen-Other-languages' => 'Other languages',
	
	'ts-citegen-Save-it' => 'Current query',
	
	// Error messages
	'ts-citegen-Errors-title' => 'Errors',
	'ts-citegen-Unavailable-SQL' => 'Error: Toolserver database is unavailable. MySQL returned: %s',
	'ts-citegen-base-disabled' => 'Error: %s database is unavailable'
	

);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Holek
 */
$messages['qqq'] = array(
	'ts-citegen-Title' => 'Generator title',
	'ts-citegen-Send' => 'Send button',
	'ts-citegen-Input-title' => 'Input secton',
	'ts-citegen-Input-text' => 'Input section description',
	'ts-citegen-Option-append-author-link' => 'Appends the author wiki links into the template',
	'ts-citegen-Option-append-newlines' => 'Appends new lines after each parameter',
	'ts-citegen-Option-add-references' => 'Adds <ref> tags around citation templates',
	'ts-citegen-Option-add-list' => 'Creates a wikilist of citation templates',
	'ts-citegen-Output-title' => 'Output section',
	'ts-citegen-Output-select-disclaimer' => 'Disclaimer about output templates',
	'ts-citegen-Wrong-input' => '"%s" is an unidentified input.',
	'ts-citegen-Parsers' => 'Parsers',
	'ts-citegen-Skins' => 'Output',
	'ts-citegen-Skin-skins' => 'Skins',
	'ts-citegen-Skin-outputformat' => 'Output format',
	'ts-citegen-Template-lang' => 'Template language',
	'ts-citegen-Sources-title' => 'Sources section title
{{Identical|Source}}',
	'ts-citegen-Sources-text' => 'An explanation test for sources section',
	'ts-citegen-Sidebar-title' => 'Shortened title used for mini-generator',
	'ts-citegen-Sidebar-add-Firefox' => "Caption of generator addition to Firefox's sidebar",
	'ts-citegen-Sidebar-add-Opera' => "Caption of generator addition to Opera's Hotlist",
	'ts-citegen-Sidebar-add-IE-Mac' => "Caption of generator addition to Mac IE's Page Holder. Page Holder is a Macintosh IE version of Firefox's Sidebar and Opera's Hotlist.",
	'ts-citegen-Sidebar-add-IE-Mac-details' => "Details on generator addition to Mac IE's Page Holder",
	'ts-citegen-Tools' => 'Tools portlet section
{{Identical|Tools}}',
	'ts-citegen-Other-languages' => 'Other languages section
{{Identical|Otherlanguages}}',
	'ts-citegen-Save-it' => 'Link to itself/current query',
	'ts-citegen-Errors-title' => 'Errors section title
{{Identical|Error}}',
	'ts-citegen-Unavailable-SQL' => 'Error message: Toolserver database is unavailable. %s is an error message',
	'ts-citegen-base-disabled' => 'Error message: A book database is unavailable. <tt>%s</tt> is the name of the database',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'ts-citegen-Title' => 'Генэратар шаблёнаў цытаваньня',
	'ts-citegen-Send' => 'Стварыць',
	'ts-citegen-Input-title' => 'Зьвесткі',
	'ts-citegen-Input-text' => 'Гэта генэратар шаблёнаў цытаваньня. Стварэньне шаблёнаў для цытатаў і крыніцаў у разьдзелах Вікіпэдыі зь яго дапамогай паскараецца. Калі ласка, пазначце зьвесткі (%s) у палях ніжэй, каб скрыпт мог стварыць шаблён. Памятайце, што няма розьніцы, у якое поле якія зьвесткі ўносіць — скрыпт сам распазнае тыпы зьвестак і сфармуе шаблён неабходным чынам.',
	'ts-citegen-Option-append-author-link' => 'Дадаць спасылкі на артыкулы пра адпаведных аўтараў',
	'ts-citegen-Option-append-newlines' => 'Пераходзіць на новы радок пасьля кожнага парамэтру',
	'ts-citegen-Option-add-references' => 'Зьмясьціць шаблён у тэг <ref />',
	'ts-citegen-Option-add-list' => 'Стварыць вікісьпіс шаблёнаў цытаваньня',
	'ts-citegen-Output-title' => 'Вынік',
	'ts-citegen-Output-select-disclaimer' => 'Памятайце, што, калі вы выбіраеце мову шаблёну, гэта не азначае, што пэўны шаблён даступны на вашай мове. Гэтае поле зьмяшчае даступныя мовы для кожнага падтрымліваемага шаблёну. Гэтак, тут можна зьмяшчацца француская мова, бо падтрымліваецца толькі {{cite book}}.',
	'ts-citegen-Wrong-input' => '%s: тып зьвестак не распазнаны.',
	'ts-citegen-Parsers' => 'Парсэры',
	'ts-citegen-Skins' => 'Форма адлюстраваньня',
	'ts-citegen-Skin-skins' => 'Афармленьне',
	'ts-citegen-Skin-outputformat' => 'Для ботаў',
	'ts-citegen-Template-lang' => 'Мова шаблёну',
	'ts-citegen-Sources-title' => 'Крыніцы',
	'ts-citegen-Sources-text' => 'Ніжэй пададзены сьпіс выкарыстаных крыніцаў.',
	'ts-citegen-Sidebar-title' => 'Генэратар цытаваньняў',
	'ts-citegen-Sidebar-add-Firefox' => 'Дадаць да бакавой панэлі',
	'ts-citegen-Sidebar-add-Opera' => 'Дадаць да панэлі Opera',
	'ts-citegen-Sidebar-add-IE-Mac' => 'Дадаць да Page Holder',
	'ts-citegen-Sidebar-add-IE-Mac-details' => "Як толькі старонка загрузіцца, адкрыйце Page Holder, націсьніце 'Add' і выкарыстоўвайце кнопку Page Holder Favorites лля захаваньня старонкі.",
	'ts-citegen-Tools' => 'Інструмэнты',
	'ts-citegen-Other-languages' => 'На іншых мовах',
	'ts-citegen-Save-it' => 'Цяперашні запыт',
	'ts-citegen-Errors-title' => 'Памылкі',
	'ts-citegen-Unavailable-SQL' => 'Памылка: база зьвестак Toolserver недаступная. адказ MySQL: %s',
	'ts-citegen-base-disabled' => 'Памылка: база зьвестак %s недаступная',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'ts-citegen-Tools' => 'Ostilhoù',
	'ts-citegen-Other-languages' => 'Yezhoù all',
	'ts-citegen-Save-it' => 'Reked red',
	'ts-citegen-Errors-title' => 'Fazioù',
	'ts-citegen-Unavailable-SQL' => "Fazi : N'haller ket tizhout diaz roadennoù ar servijer ostilhoù. Kemenn MySQL : %s",
	'ts-citegen-base-disabled' => "Fa zi : N'haller ket tizhout diaz roadennoù %s.",
);

/** German (Deutsch)
 * @author Holek
 * @author Kghbln
 */
$messages['de'] = array(
	'ts-citegen-Title' => 'Vorlagengenerator für Quellennachweise',
	'ts-citegen-Send' => 'Generieren',
	'ts-citegen-Input-title' => 'Angaben',
	'ts-citegen-Input-text' => 'Dies ist ein Vorlagengenerator für Quellennachweise. Mit ihm kannst du die entsprechende Vorlage in den unterschiedlichen Sprachausgaben der Wikipedia zur Nutzung als Einzelnachweis oder Literaturangabe schnell erstellen. Gebe die vorhandenen Daten (%s) in die untenstehenden Felder ein. Das Skript wird dann versuchen mit ihnen die Vorlage zu erstellen. Bei der Angabe der Daten ist es unerheblich welches Feld für welche Angabe genutzt wird. Die richtige Zuordnung zu den einzelnen Parametern der Vorlage wird vom Skript übernommen.',
	'ts-citegen-Option-append-author-link' => 'Der Vorlage Wikilinks zum Autor beifügen',
	'ts-citegen-Option-append-newlines' => 'Nach jedem Parameter eine neue Zeile beginnen',
	'ts-citegen-Option-add-references' => 'Ergänze die Vorlage um „<ref>“-Elemente',
	'ts-citegen-Option-add-list' => 'Erstelle die Vorlagen in Form einer Wikiliste',
	'ts-citegen-Output-title' => 'Ergebnis',
	'ts-citegen-Output-select-disclaimer' => 'Die Auswahl einer Sprache für die Vorlage garantiert nicht das Vorhandensein einer entsprechenden Vorlage in der jeweiligen Sprache. Dieses Auswahlmenü gibt die Sprachen an für die eine Vorlage verfügbar ist. Französisch kann beispielsweise deshalb angezeigt werden, weil lediglich die Vorlage „Cite book“ unterstützt wird.',
	'ts-citegen-Wrong-input' => '%s: Die Angabe wurde nicht als richtige Eingabe erkannt.',
	'ts-citegen-Parsers' => 'Parser',
	'ts-citegen-Skins' => 'Ausgabe',
	'ts-citegen-Skin-skins' => 'Benutzeroberflächen',
	'ts-citegen-Skin-outputformat' => 'Ausgabeformat',
	'ts-citegen-Template-lang' => 'Sprache der Vorlage',
	'ts-citegen-Sources-title' => 'Quellen',
	'ts-citegen-Sources-text' => 'Unterhalb ist die Liste der verwenden Quellen verfügbar.',
	'ts-citegen-Sidebar-title' => 'Quellennachweisgenerator',
	'ts-citegen-Sidebar-add-Firefox' => 'Zu den Lesezeichen hinzufügen',
	'ts-citegen-Sidebar-add-Opera' => 'Zu den Lesezeichen hinzufügen',
	'ts-citegen-Sidebar-add-IE-Mac' => 'Zu den Favoriten hinzufügen',
	'ts-citegen-Sidebar-add-IE-Mac-details' => 'Sobald die Seite geladen wurde, öffne bitte die Favoritenleiste, klicke danach auf „Hinzufügen“ und nutze anschließend den Favoritenknopf, um sie als Favorit zu speichern.',
	'ts-citegen-Tools' => 'Werkzeuge',
	'ts-citegen-Other-languages' => 'Andere Sprachen',
	'ts-citegen-Save-it' => 'Aktuelle Abfrage',
	'ts-citegen-Errors-title' => 'Fehler',
	'ts-citegen-Unavailable-SQL' => 'Fehler: Die Datenbank des Toolservers ist nicht verfügbar. MySQL erzeugte: %s',
	'ts-citegen-base-disabled' => 'Fehler: %s-Datenbank ist nicht verfügbar',
);

/** British English (British English)
 * @author Holek
 */
$messages['en-gb'] = array(
	'ts-citegen-Sidebar-add-IE-Mac-details' => "Once the page has loaded, open your Page Holder, click 'Add' then use the Page Holder Favourites button to store it as a Page Holder Favourite.",
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'ts-citegen-Title' => 'Generator citatowych předłohow',
	'ts-citegen-Send' => 'Wupłodźić',
	'ts-citegen-Input-title' => 'Zapodaće',
	'ts-citegen-Option-append-author-link' => 'Awtorowe wikiwotkazy do předłohi připowěsnyć',
	'ts-citegen-Option-append-newlines' => 'Za kóždym parametrom nowe linki připowěsnyć',
	'ts-citegen-Option-add-references' => 'Taflički <ref> wokoło citowanskich předłohow přidać',
	'ts-citegen-Option-add-list' => 'Wikilisćinu citowacych předłohow wutworić',
	'ts-citegen-Output-title' => 'Wuslědk',
	'ts-citegen-Wrong-input' => '%s: njeidentifikowany jako korektne zapodaće.',
	'ts-citegen-Parsers' => 'Parsery',
	'ts-citegen-Skins' => 'Wudaće',
	'ts-citegen-Skin-skins' => 'Šaty',
	'ts-citegen-Skin-outputformat' => 'Wudatny format',
	'ts-citegen-Template-lang' => 'Rěč předłohi',
	'ts-citegen-Sources-title' => 'Žórła',
	'ts-citegen-Sources-text' => 'Deleka je lisćina wužitych žórłow k dispoziciji steji.',
	'ts-citegen-Sidebar-title' => 'Generator citatow',
	'ts-citegen-Sidebar-add-Firefox' => 'K bóčnicy přidać',
	'ts-citegen-Sidebar-add-Opera' => 'Hotlistej Opery přidać',
	'ts-citegen-Sidebar-add-IE-Mac' => 'Page Holderej přidać',
	'ts-citegen-Tools' => 'Nastroje',
	'ts-citegen-Other-languages' => 'Druhe rěče',
	'ts-citegen-Save-it' => 'Aktualne naprašowanje',
	'ts-citegen-Errors-title' => 'Zmylki',
	'ts-citegen-Unavailable-SQL' => 'Zmylk: Datowa banka Toolserver k dispoziciji njesteji. MySQL wozjewi: %s',
	'ts-citegen-base-disabled' => 'Zmylk: Datowa banka %s njesteji k dispoziciji',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'ts-citegen-Title' => 'Pembuat templat kutipan',
	'ts-citegen-Send' => 'Buat',
	'ts-citegen-Input-title' => 'Masukan',
	'ts-citegen-Input-text' => 'Ini adalah pembuat templat kutipan. Anda dapat dengan cepat mengisi templat kutipan dalam berbagai edisi bahasa Wikipedia dengan menggunakannya. Silakan isi data (%s) pada kolom-kolom di bawah ini dan skrip akan mencoba untuk menyelesaikan templat. Ingat, bidang apa pun yang Anda pilih untuk memasukkan data bukan masalah. Secara otomatis skrip akan mencocokkan templat yang tepat untuk masukan yang diberikan.',
	'ts-citegen-Option-append-author-link' => 'Tambahkan pranala penulis ke dalam templat',
	'ts-citegen-Option-append-newlines' => 'Tambahkan baris baru setelah setiap parameter',
	'ts-citegen-Option-add-references' => 'Tambahkan tag <ref> di sekitar templat kutipan',
	'ts-citegen-Option-add-list' => 'Buat daftar wiki tempat kutipan',
	'ts-citegen-Output-title' => 'Hasil',
	'ts-citegen-Output-select-disclaimer' => 'Ingat bahwa memilih bahasa templat tidak menjamin bahwa templat tertentu tersedia dalam bahasa Anda. Bidang ini mencantumkan daftar bahasa yang tersedia dari setiap template yang didukung, yaitu dapat menampilkan Perancis, karena hanya {{Cite book}} yang didukung.',
	'ts-citegen-Wrong-input' => '%s: tidak dikenali sebagai masukan yang benar.',
	'ts-citegen-Parsers' => 'Parser',
	'ts-citegen-Skins' => 'Keluaran',
	'ts-citegen-Skin-skins' => 'Kulit',
	'ts-citegen-Skin-outputformat' => 'Format keluaran',
	'ts-citegen-Template-lang' => 'Bahasa templat',
	'ts-citegen-Sources-title' => 'Sumber',
	'ts-citegen-Sources-text' => 'Berikut adalah daftar sumber',
	'ts-citegen-Sidebar-title' => 'Pembuat kutipan',
	'ts-citegen-Sidebar-add-Firefox' => 'Tambahkan ke bilah sisi',
	'ts-citegen-Sidebar-add-Opera' => 'Tambahkan ke Hotlist',
	'ts-citegen-Sidebar-add-IE-Mac' => 'Tambahkan ke Page Holder',
	'ts-citegen-Sidebar-add-IE-Mac-details' => "Setelah halaman dimuat, buka Page Holder Anda, klik 'Tambah', kemudian gunakan tombol Favorit Page Holder untuk menyimpannya sebagai Favorit Page Holder.",
	'ts-citegen-Tools' => 'Peralatan',
	'ts-citegen-Other-languages' => 'Bahasa lain',
	'ts-citegen-Save-it' => 'Kueri saat ini',
	'ts-citegen-Errors-title' => 'Galat',
	'ts-citegen-Unavailable-SQL' => 'Galat: Basis data Toolserver tidak tersedia. Tanggapan MySQL: %s',
	'ts-citegen-base-disabled' => 'Galat: Basis data %s tidak tersedia',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'ts-citegen-Template-lang' => 'Sprooch vun der Schabloun',
	'ts-citegen-Other-languages' => 'Aner Sproochen',
	'ts-citegen-Errors-title' => 'Feeler',
	'ts-citegen-base-disabled' => 'Feeler: %s Datebank ass net disponibel.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'ts-citegen-Title' => 'Создавач на шаблони за цитирање',
	'ts-citegen-Send' => 'Создај',
	'ts-citegen-Input-title' => 'Внос',
	'ts-citegen-Input-text' => 'Ова е создавач на шаблони за цитати. Овозможува брзо пополнување на шаблоните за цитирање на разни јазични изданија на Википедија. Пополнете ги податоците (%s) во долунаведените полиња, а самата скрипта ќе се обиде да ги доврши шаблоните. Запомнете: не е важно во кои полиња ги внесувате податоците. Самата скрипта ќе го изнајде точниот шаблон за внесеното.',
	'ts-citegen-Option-append-author-link' => 'Додај викиврски за авторот во шаблонот',
	'ts-citegen-Option-append-newlines' => 'Додај нови редови по секој параметар',
	'ts-citegen-Option-add-references' => 'Додај ознаки <ref> околу шаблоните за цитирање',
	'ts-citegen-Option-add-list' => 'Создај викисписок на шаблони за цитирање',
	'ts-citegen-Output-title' => 'Исход',
	'ts-citegen-Output-select-disclaimer' => 'Запомнете: изборот на јазик на шаблонот не ви гарантира дека тој шаблон е достапен на вашиот јазик. Ова поле ги наведува достапните јазици за секој поддржан шаблон. (т.е. може да прикаже француски бидејќи е поддржан само {{Cite book}}.)',
	'ts-citegen-Wrong-input' => '%s: не е утврден како исправен внос.',
	'ts-citegen-Parsers' => 'Парсери',
	'ts-citegen-Skins' => 'Извод',
	'ts-citegen-Skin-skins' => 'Рува',
	'ts-citegen-Skin-outputformat' => 'Формат на изводот',
	'ts-citegen-Template-lang' => 'Јазик на шаблонот',
	'ts-citegen-Sources-title' => 'Извори',
	'ts-citegen-Sources-text' => 'Подолу има список на користени извори.',
	'ts-citegen-Sidebar-title' => 'Создавач на цитати',
	'ts-citegen-Sidebar-add-Firefox' => 'Додај во страничната лента',
	'ts-citegen-Sidebar-add-Opera' => 'Додај во Hotlist',
	'ts-citegen-Sidebar-add-IE-Mac' => 'Додај во Page Holder',
	'ts-citegen-Sidebar-add-IE-Mac-details' => 'Откако ќе се вчита страницата, отворете го вашиот Page Holder, сиснете на „Додај“, и потоа со копчето за Page Holder Favorites зачувајте ја како таква.',
	'ts-citegen-Tools' => 'Алатки',
	'ts-citegen-Other-languages' => 'Други јазици',
	'ts-citegen-Save-it' => 'Тековно барање',
	'ts-citegen-Errors-title' => 'Грешки',
	'ts-citegen-Unavailable-SQL' => 'Грешка: Базата на Toolserver е недостапна. MySQL даде: %s',
	'ts-citegen-base-disabled' => 'Грешка: Базата на %s е недостапна',
);

/** Polish (Polski)
 * @author Holek
 */
$messages['pl'] = array(
	'ts-citegen-Title' => 'Generator szablonów cytowania',
	'ts-citegen-Send' => 'Generuj',
	'ts-citegen-Input-title' => 'Dane wejściowe',
	'ts-citegen-Input-text' => 'To jest generator szablonów cytowania. Za pomocą tego narzędzia możesz szybko uzupełnić różne szablony cytowania dostępne w różnych edycjach językowych Wikipedii. Wpisz w polach poniżej odpowiednie dane (%s), a skrypt postara się wypełnić odpowiednie szablony według danych wejściowych. Pamiętaj, że nie ma znaczenia, w których polach, co wpiszesz. Skrypt automatycznie dopasowuje szablony do wprowadzonych danych.',
	'ts-citegen-Option-append-author-link' => 'Dołączaj linki do artykułów o odpowiednich autorach',
	'ts-citegen-Option-append-newlines' => 'Umieszczaj nowe linie po każdym parametrze',
	'ts-citegen-Option-add-references' => 'Umieść szablony pomiędzy tagami <ref></ref>',
	'ts-citegen-Option-add-list' => 'Dodaj wikilistę do szablonów cytowania',
	'ts-citegen-Output-title' => 'Rezultat',
	'ts-citegen-Output-select-disclaimer' => 'Wybierając konkretny język skrypt nie gwarantuje, że wszystkie szablony są gotowe do użytku w danym języku. To pole wyświetla listę języków z każdego obsługiwanego szablonu. Na przykład może być w nim dostępny język francuski, ponieważ skrypt obsługuje jedynie francuski odpowiednik {{Cytuj książkę}}.',
	'ts-citegen-Wrong-input' => '%s: nie zidentyfikowano.',
	'ts-citegen-Parsers' => 'Bazy',
	'ts-citegen-Skins' => 'Forma prezentacji',
	'ts-citegen-Skin-skins' => 'Skórki',
	'ts-citegen-Skin-outputformat' => 'Dla botów',
	'ts-citegen-Template-lang' => 'Język szablonu',
	'ts-citegen-Sources-title' => 'Źródła',
	'ts-citegen-Sources-text' => 'Poniżej podane są strony, z których korzystano przy pobieraniu informacji o książkach.',
	'ts-citegen-Sidebar-title' => 'Generator cytowań',
	'ts-citegen-Sidebar-add-Firefox' => 'Dodaj do panelu bocznego',
	'ts-citegen-Sidebar-add-Opera' => 'Dodaj do panelu Opery',
	'ts-citegen-Sidebar-add-IE-Mac' => 'Dodaj do Page Holdera',
	'ts-citegen-Sidebar-add-IE-Mac-details' => 'Gdy strona zostanie załadowana, otwórz Page Holder, naciśnij "Dodaj" i użyj przycisku Ulubionych Page Holdera, aby zapisać generator w panelu.',
	'ts-citegen-Tools' => 'Narzędzia',
	'ts-citegen-Other-languages' => 'W innych językach',
	'ts-citegen-Save-it' => 'Samowywołanie (zapisz tę stronę)',
	'ts-citegen-Errors-title' => 'Błędy',
	'ts-citegen-Unavailable-SQL' => 'Błąd: Dostęp do bazy danych niemożliwy. MySQL zwróciło: %s',
	'ts-citegen-base-disabled' => 'Błąd: Baza %s jest niedostępna',
);

/** Portuguese (Português)
 * @author Giro720
 */
$messages['pt'] = array(
	'ts-citegen-Title' => 'Gerador de predefinição de citação',
);

