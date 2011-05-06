<?php

/**
 * Internationalization file for the Ratings extension.
 *
 * @since 0.1
 *
 * @file Ratings.i18n.php
 * @ingroup Ratings
 *
 * @licence GNU GPL v3 or later
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

$messages = array();

/** English
 * @author Jeroen De Dauw
 */
$messages['en'] = array(
	'ratings-desc' => 'Allows users to rate different "properties" of pages',

	// Rating stars
	'ratings-starsratings-desc' => 'Displays a simple star rating control allowing the user to rate a certain property of a page.
The current vote of the user will be displayed initially when he already voted.',
	'ratings-par-page' => 'The page the rating applies to.',
	'ratings-par-tag' => 'The rating tag. The tag indicates what "property" of the page gets rated.',
	'ratings-par-showdisabled' => 'Show ratings when the user can not vote (in read-only mode).',
	'ratings-par-incsummary' => 'Show a summary of the current votes above the rating element?',

	// Vote summary
	'ratings-votesummary-desc' => 'Displays a short summary of the votes for the specified page and property pair.',
	'ratings-current-score' => 'Current user rating: $1 ($2 {{PLURAL:$2|rating|ratings}})',
	'ratings-no-votes-yet' => 'No one has rated this yet.',
);

/** Message documentation (Message documentation)
 * @author Jeroen De Dauw
 */
$messages['qqq'] = array(
	'ratings-desc' => '{{desc}}',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'ratings-desc' => 'Дазваляе ўдзельнікам ацэньваць розныя «ўласьцівасьці» старонкі',
	'ratings-starsratings-desc' => 'Паказвае простае кіраваньне адзнакамі з дапамогай зорак, які дазваляе ўдзельнікам адзначаць некаторыя ўласьцівасьці старонкі.
Цяперашняя адзнака будзе паказаная адразу, калі ўдзельнік прагаласуе.',
	'ratings-par-page' => 'Старонка, якая адзначаецца.',
	'ratings-par-tag' => 'Тэг адзнакі. Ён паказвае, што «ўласьцівасьць» старонкі была адзначаная.',
	'ratings-par-showdisabled' => 'Паказваць адзнакі, калі ўдзельнік ня можа галасаваць (толькі для чытаньня)',
	'ratings-par-incsummary' => 'Паказваць справаздачу цяперашніх галасоў над элемэнтам адзначэньня?',
	'ratings-votesummary-desc' => 'Паказвае справаздачу цяперашніх галасоў для пазначанай старонкі і ўласьцівасьці.',
	'ratings-current-score' => 'Цяперашняя адзнака ўдзельнікаў: $1 ($2 {{PLURAL:2|адзнака|адзнакі|адзнак}})',
	'ratings-no-votes-yet' => 'Ніхто яшчэ не адзначаў.',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'ratings-desc' => 'Talvezout a ra d\'an implijerien da briziañ "perzhioù" disheñvel eus ar pajennoù',
	'ratings-par-page' => 'Ar bajenn emeur o priziañ.',
	'ratings-current-score' => 'Priziadenn an implijer a-vremañ : $1 ($2 {{PLURAL:$2|briziadenn|priziadenn}})',
	'ratings-no-votes-yet' => "N'eo ket bet priziet gant den evit c'hoazh.",
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'ratings-desc' => 'Ermöglicht es Benutzern einzelne Inhalte einer Seite unabhängig voneinander bewerten zu können',
	'ratings-starsratings-desc' => 'Zeigt ein einfaches Bewertungssteuerelement (Sterne) mit dem ein Benutzer bestimmte Inhalte einer Seite bewerten kann.
Die aktuelle Bewertung eines Benutzers wird angezeigt, sofern er bereits eine vorgenommen hat.',
	'ratings-par-page' => 'Die Seite auf die sich die Bewertung bezieht.',
	'ratings-par-tag' => 'Das Bewertungselement. Das Element gibt an, welcher Inhalt einer Seite bewertet wird.',
	'ratings-par-showdisabled' => 'Zeigt die Bewertungen an, sofern der Benutzer nicht selbst bewerten kann (im schreibgeschützten Modus).',
	'ratings-par-incsummary' => 'Soll eine Zusammenfassung der aktuellen Bewertungen über dem zu bewertenden Element angezeigt werden?',
	'ratings-votesummary-desc' => 'Zeigt eine kurze Zusammenfassung der Bewertungen für die angegebene Seite und den dort bewerteten Bereich.',
	'ratings-current-score' => 'Aktuelle Benutzerbewertung: $1 ($2 {{PLURAL:$2|Bewertung|Bewertungen}})',
	'ratings-no-votes-yet' => 'Bislang wurde dies von niemanden bewertet.',
);

/** French (Français)
 * @author IAlex
 */
$messages['fr'] = array(
	'ratings-desc' => 'Permet aux utilisateurs de classer différentes « propriétés » des pages',
	'ratings-starsratings-desc' => "Affiche un simple contrôle de classement en étoile permettant à l'utilisateur de classer une certaine propriété d'une page.
Le vote actuel de l'utilisateur s'affichera initialement lorsqu'il a déjà voté.",
	'ratings-par-page' => "La page sur laquelle le classement s'applique.",
	'ratings-par-tag' => 'La balise de classement. Cette balise indique quelle « propriété » de la page sera classée.',
	'ratings-par-showdisabled' => "Afficher les classements lorsque l'utilisateur ne peut pas voter (en mode lecture seule).",
	'ratings-par-incsummary' => "Afficher un résumé des classements actuels au-dessus de l'élément à classer ?",
	'ratings-votesummary-desc' => 'Affiche un bref résumé des classements pour la page et de la paire de propriétés spécifiées.',
	'ratings-current-score' => 'Classement actuel des utilisateurs : $1 ($2 {{PLURAL:$2|classement|classements}})',
	'ratings-no-votes-yet' => "Personne n'a encore classé ceci.",
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'ratings-desc' => 'אפשרות לדרג "מאפיינים" שונים של דפים',
	'ratings-starsratings-desc' => 'הצגה של רכיב פשוט שמאפשר למשתמש לדרג בכוכבים מאפיין מסוים בדף.
ההצבעה הנוכחית של המשתמש תוצג בתחילה אחרי שהוא יצביע.',
	'ratings-par-page' => 'הדף שאליו מתייחס הדירוג.',
	'ratings-par-tag' => 'תג הדירוג. התג מציין איזה "מאפיין" של הדף מדורג.',
	'ratings-par-showdisabled' => 'להציג דירוגים כאשר המשתמש לא יכול להצביע (מצב קריאה בלבד).',
	'ratings-par-incsummary' => 'להציג סיכום של ההצבעות הנוכחיות מעל רכיב הדירוג?',
	'ratings-votesummary-desc' => 'הצגת סיכום קצר של הצבעות לדף המוגדר וזוגות של מאפיינים.',
	'ratings-current-score' => 'דירוג משתמשים נוכחי: $1‏ ({{PLURAL:$2|דירוג אחד|$2 דירוגים}})',
	'ratings-no-votes-yet' => 'איש לא דירג את זה עדיין.',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'ratings-desc' => 'Permitter al usatores de evalutar diverse "proprietates" de paginas',
	'ratings-starsratings-desc' => 'Presenta un icone de stella con que le usator pote valutar un certe proprietate de un pagina.
Le voto actual del usator essera monstrate initialmente si ille ha jam votate.',
	'ratings-par-page' => 'Le pagina al qual le evalutation pertine.',
	'ratings-par-tag' => 'Le etiquetta de evalutation. Le etiquetta specifica le "proprietate" del pagina que es evalutate.',
	'ratings-par-showdisabled' => 'Monstrar le evalutationes si le usator non pote votar (in modo de lectura sol).',
	'ratings-par-incsummary' => 'Monstrar un summario del votos actual supra le elemento de evalutation?',
	'ratings-votesummary-desc' => 'Presenta un curte summario del votos pro le pagina e par de proprietates specificate.',
	'ratings-current-score' => 'Evalutation actual del usator: $1 ($2 {{PLURAL:$2|evalutation|evalutationes}})',
	'ratings-no-votes-yet' => 'Nemo ha ancora evalutate isto.',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'ratings-desc' => 'Memungkinkan pengguna untuk memberi nilai terhadap berbagai "properti" halaman',
	'ratings-starsratings-desc' => 'Menampilkan alat pemeringkat bintang sederhana yang memungkinkan pengguna untuk menilai properti tertentu dari sebuah halaman.
Suara pengguna saat ini akan ditampilkan ketika ia sudah memilih.',
	'ratings-par-page' => 'Halaman yang diberi peringkat.',
	'ratings-par-tag' => 'Tag peringkat. Tag tersebut menunjukkan "properti" halaman apa yang diberi peringkat.',
	'ratings-par-showdisabled' => 'Tunjukkan peringkat ketika pengguna tidak dapat memberi suara (pada mode baca-saja).',
	'ratings-par-incsummary' => 'Tunjukkan ringkasan pilihan saat ini di atas elemen peringkat?',
	'ratings-votesummary-desc' => 'Menampilkan ringkasan pendek pilihan untuk pasangan halaman dan properti tertentu.',
	'ratings-current-score' => 'Peringkat pengguna sekarang: $1 ($2 {{PLURAL:$2|peringkat|peringkat}})',
	'ratings-no-votes-yet' => 'Belum ada yang memberi peringkat.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'ratings-desc' => 'Määd et müjjelesch, dat Metmaacher för ongerscheidlijje Eijeschaffte vun de Sigge Note jävve künne.',
	'ratings-starsratings-desc' => 'Zeisch Note eijfach met Shtäänsche aan un määd_et müjjelesch, dat ene Metmaacher för beshtemmpte Eijescahfte vun an Sigg Note verdeile kann. Wann hä ald ein verdeilt hät, kritt ene Mtmaacher aam Aanfang singe aktoälle Note_Shtand för di Sigg aanjezeisch.',
	'ratings-par-page' => 'De Sigg, woh en Note för jejovve weed.',
	'ratings-par-tag' => 'De Eijeschaff, för wat aan dä Sigg en Note jejovve weed.',
	'ratings-par-showdisabled' => 'Donn de Note aanzeije, wann der Metmaacher kein Note jävve kann, sönders nur lässe.',
	'ratings-par-incsummary' => 'Donn en Zosammefaßong vun de Note bovve övver däm Käßje zom Note verdeile aanzeije.',
	'ratings-votesummary-desc' => 'Zeisch en koote Zosammefassong vun de Note för de aanjejovve Sigg un de zwai Eijeschafte.',
	'ratings-current-score' => 'De Metmaacher han {{PLURAL:$2|ein|$2|noch kein}} Note jejovve, zosamme jenumme kohm dobei $1 eruß.',
	'ratings-no-votes-yet' => 'Doför hät noch Keiner Note jejovve.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'ratings-desc' => 'Erméiglecht et Benotzer fir verschidden "Eegeschaften" vu Säiten ze bewäerten',
	'ratings-par-page' => "D'Säit op déi sech d'Bewäertung bezitt.",
	'ratings-par-showdisabled' => 'Bewäertunge weisen wann de Benotzer net mat ofstëmme kann (Read-Only Modus)',
	'ratings-current-score' => 'Aktuell Benotzerbewäertung: $1 ($2 {{PLURAL:$2|Bewäertung|Bewäertungen}})',
	'ratings-no-votes-yet' => 'Et huet nach keen dëst bewäert.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'ratings-desc' => 'Им овозможува на корисниците да оценуваат разни „својства“ на страниците',
	'ratings-starsratings-desc' => 'Прикажува проста можност за доделување на ѕвездички за оценување на одредено својство на страницата.
Ако корисникот веќе еднаш гласал, тогаш ќе се прикажува тековната оценка (глас).',
	'ratings-par-page' => 'На која страница се однесува оценкава.',
	'ratings-par-tag' => 'Ознака за оценка. Ознаката покажува кое „својство“ на страницата се оценува.',
	'ratings-par-showdisabled' => 'Прикажувај оценки кога корисникот не може да гласа (во режим „само читање“).',
	'ratings-par-incsummary' => 'Да прикажувам опис на тековните гласови над елементот за оценка?',
	'ratings-votesummary-desc' => 'Прикажува краток опис на оценките (гласовите) за наведената страница и својство.',
	'ratings-current-score' => 'Тековна корисничка оценка: $1 ($2 {{PLURAL:$2|оценка|оценки}})',
	'ratings-no-votes-yet' => 'Сè уште никој го нема оценето ова.',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'ratings-desc' => "Maakt het voor gebruikers mogelijk verschillende eigenschappen van pagina's te waarderen",
	'ratings-starsratings-desc' => 'Geeft een eenvoudig besturingselement met sterren weer waarin gebruikers een eigenschap van een pagina kunnen waarderen.
De huidige waardering van gebruikers wordt weergegeven als er al gewaardeerd is.',
	'ratings-par-page' => 'De pagina waar de waardering op van toepassing is.',
	'ratings-par-tag' => 'Het waarderingslabel. Het label geeft aan welke "eigenschap" van de pagina wordt gewaardeerd.',
	'ratings-par-showdisabled' => 'Waarderingen weergeven als de gebruiker niet kan waarderen (bij alleen-lezen).',
	'ratings-par-incsummary' => 'Een samenvatting weergeven van de huidige waarderingen boven het waarderingselement?',
	'ratings-votesummary-desc' => 'Geeft een korte samenvatting van de stemmen voor de opgegeven pagina en eigenschapspaar weer.',
	'ratings-current-score' => 'Huidige gebruikerswaardering: $1 ($2 {{PLURAL:$2|waardering|waarderingen}})',
	'ratings-no-votes-yet' => 'Dit onderdeel is nog door niemand gewaardeerd.',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'ratings-desc' => 'A përmëtt a j\'utent ëd valuté "propietà" diferente dle pagine',
	'ratings-starsratings-desc' => "A mosta un control ëd valutassion sempi dë stèile an përmëttend a l'utent ëd valuté na serta propietà ëd na pagina.
Ël vot corent ëd l'utent a sarà visualisà inissialment quand ch'a l'ha già votà.",
	'ratings-par-page' => "La pagina ch'a l'é valutà.",
	'ratings-par-tag' => 'La tichëtta ëd valutassion. La tichëtta a indica che "propietà" dla pagina a l\'é valutà.',
	'ratings-par-showdisabled' => "Mosta valutassion quand l'utent a peul pa voté (mach an letura).",
	'ratings-par-incsummary' => "Mosté un somari dij vot corent sota l'element an valutassion?",
	'ratings-votesummary-desc' => 'A mosta un curt somari dij vot për la pagina specificà e le cobie ëd propietà.',
	'ratings-current-score' => "Valutassion corenta dl'utent: $1 ($2 {{PLURAL:$2|valutassion|valutassion}})",
	'ratings-no-votes-yet' => "Pa gnun a l'ha anco' valutà son-sì.",
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'ratings-no-votes-yet' => 'దీన్నింకా ఎవరూ మూల్యాంకన చెయ్యలేదు.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'ratings-desc' => 'Nagpapahintulot sa mga tagagamit na antasan ang iba\'t ibang mga "pag-aari" ng mga pahina',
	'ratings-par-page' => 'Ang pahinang malalapatan ng kaantasan.',
	'ratings-par-tag' => 'Ang tatak ng antas. Nagpapahiwatig ang tatak ng kung anong "pag-aari" ng pahina ang aantasan.',
	'ratings-par-showdisabled' => 'Ipakita ang mga antas kapag hindi makakaboto ang tagagamit (nasa pamamaraang mababasa lamang).',
	'ratings-par-incsummary' => 'Magpakita ng isang buod ng pangkasalukuyang mga boto na nasa itaas ng sangkap na antas?',
	'ratings-current-score' => 'Pangkasalukuyang antas ng tagagamit: $1 ($2 {{PLURAL:$2|antas|mga antas}})',
	'ratings-no-votes-yet' => 'Wala pang isang nag-aantas nito.',
);

