<?php
/**
 * Internationalisation file for extension EmailPage.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Nad
 */
$messages['en'] = array(
	'e-mailpage'          => "E-mail page",
	'ea-desc'             => "Send rendered HTML page to an e-mail address or list of addresses using [http://phpmailer.sourceforge.net phpmailer]",
	'ea-heading'          => 'E-mailing the page "[[$1]]"',
	'ea-group-info'       => "Additionally you can send the page to the members of a group",
	'ea-pagesend'         => 'Page "$1" sent from $2',
	'ea-nopage'           => "No page was specified for sending, please use the e-mail link from the sidebar or page actions.",
	'ea-norecipients'     => "No valid e-mail addresses found!",
	'ea-listrecipients'   => 'Listing {{PLURAL:$1|recipient|$1 recipients}}',
	'ea-error'            => "'''Error sending [[$1]]:''' ''$2''",
	'ea-denied'           => "Permission denied",
	'ea-sent'             => "Page [[$1]] sent successfully to '''$2''' {{PLURAL:$2|recipient|recipients}} by [[User:$3|$3]].",
	'ea-compose'          => "Compose content",
	'ea-show'             => "View recipient list",
	'ea-from'             => 'From:',
	'ea-to'               => 'To:',
	'ea-to-info'          => "E-mail addresses can be separated with one or more semicolon, comma, asterisk or newline characters",
	'ea-cc'               => 'CC:',
	'ea-send'             => "Send",
	'ea-subject'          => 'Subject:',
	'ea-message'          => 'Message:',
	'ea-message-info'     => "Prepend content with optional wikitext message",
	'ea-style'            => 'Style:',
	'ea-selectcss'        => "You can select a stylesheet",
	'ea-data'             => "Data",
	'ea-selectrecord'     => "These templates can be used to fill in fields in the message content",
	'ea-allusers'         => "All users"
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jon Harald Søby
 * @author Whym
 */
$messages['qqq'] = array(
	'e-mailpage' => 'The first heading text shown in a sending form of Special:EmailPage.',
	'ea-denied' => '{{Identical|Permission denied}}',
	'ea-from' => '{{Identical|From}}',
	'ea-to' => '{{Identical|To}}',
	'ea-send' => '{{Identical|Send}}',
	'ea-subject' => '{{Identical|Subject}}',
	'ea-message' => '{{Identical|Message}}',
	'ea-data' => '{{Identical|Data}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'e-mailpage' => 'E-posbladsy',
	'ea-denied' => 'Toestemming geweier',
	'ea-compose' => 'Stel inhoud saam',
	'ea-show' => 'Wys lys van ontvangers',
	'ea-from' => 'Van:',
	'ea-to' => 'Aan:',
	'ea-cc' => 'CC:',
	'ea-send' => 'Stuur',
	'ea-subject' => 'Onderwerp:',
	'ea-message' => 'Boodskap:',
	'ea-style' => 'Styl:',
	'ea-selectcss' => 'U kan \'n "stylesheet" kies',
	'ea-data' => 'Data',
	'ea-allusers' => 'Alle gebruikers',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'e-mailpage' => 'إرسال رسالة للمستخدم',
	'ea-desc' => 'يرسل صفحة ناتجة ب HTML لعنوان بريد إلكتروني أو قائمة عناوين باستخدام [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== مراسلة الصفحة [[$1]] ===',
	'ea-pagesend' => 'الصفحة "$1" أُرسلت من $2',
	'ea-nopage' => 'من فضلك حدد صفحة للإرسال، على سبيل المثال "[[Special:e-mailpage/{{MediaWiki:Mainpage-url}}]]".',
	'ea-norecipients' => 'لم يتم إيجاد عناوين بريد إلكتروني صحيحة!',
	'ea-listrecipients' => '=== {{PLURAL:$1|متلقي|$1 متلقي}} ===',
	'ea-error' => "'''خطأ في إرسال [[$1]]:''' ''$2''",
	'ea-denied' => 'السماح مرفوض',
	'ea-sent' => "الصفحة [[$1]] تم إرسالها بنجاح إلى '''$2''' {{PLURAL:$2|متلق|متلق}} بواسطة [[User:$3|$3]].",
	'ea-compose' => 'كتابة المحتوى',
	'ea-show' => 'عرض المتلقين',
	'ea-send' => 'إرسال!',
	'ea-subject' => 'أدخل سطر عنوان للبريد الإلكتروني',
	'ea-message' => 'إرسال المحتوى برسالة اختيارية (نص ويكي)',
	'ea-selectcss' => 'اختر شريحة CSS',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'e-mailpage' => 'إرسال رسالة للمستخدم',
	'ea-desc' => 'يرسل صفحة ناتجة ب HTML لعنوان بريد إلكترونى أو قائمة عناوين باستخدام [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== مراسلة الصفحة [[$1]] ===',
	'ea-pagesend' => 'الصفحة "$1" أُرسلت من $2',
	'ea-nopage' => 'من فضلك حدد صفحة للإرسال، على سبيل المثال "[[Special:e-mailpage/{{MediaWiki:Mainpage-url}}]]".',
	'ea-norecipients' => 'لم يتم إيجاد عناوين بريد إلكترونى صحيحة!',
	'ea-listrecipients' => '=== {{PLURAL:$1|متلقي|$1 متلقي}} ===',
	'ea-error' => "'''خطأ في إرسال [[$1]]:''' ''$2''",
	'ea-denied' => 'السماح مرفوض',
	'ea-sent' => "الصفحة [[$1]] تم إرسالها بنجاح إلى '''$2''' {{PLURAL:$2|متلق|متلق}} بواسطة [[User:$3|$3]].",
	'ea-compose' => 'كتابة المحتوى',
	'ea-show' => 'عرض المتلقين',
	'ea-send' => 'إرسال!',
	'ea-subject' => 'أدخل سطر عنوان للبريد الإلكتروني',
	'ea-message' => 'إرسال المحتوى برسالة اختيارية (نص ويكى)',
	'ea-selectcss' => 'اختر شريحة CSS',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'e-mailpage' => 'Даслаць старонку па электроннай пошце',
	'ea-desc' => 'Дасылае HTML-старонку на адрас электроннай пошты ці групу адрасоў, з выкарыстаньнем [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => 'Адпраўка старонкі «[[$1]]» па электроннай пошце',
	'ea-group-info' => 'Дадаткова Вы можаце даслаць старонку сябрам групы',
	'ea-pagesend' => 'Старонка «$1» дасланая з $2',
	'ea-nopage' => 'Ня выбраныя старонкі для адпраўкі. Калі ласка, выкарыстоўвайце спасылку на электронную пошту ў бакавой панэлі ці ў дзеяньнях старонкі.',
	'ea-norecipients' => 'Ня знойдзеныя слушныя адрасы электроннай пошты!',
	'ea-listrecipients' => '{{PLURAL:$1|Атрымальнік|Атрымальнікі}}',
	'ea-error' => "'''Памылка адпраўкі [[$1]]:''' ''$2''",
	'ea-denied' => 'Доступ забаронены',
	'ea-sent' => "Старонка [[$1]] дасланая пасьпяхова '''$2''' {{PLURAL:$2|атрымальніку|атрымальнікам|атрымальнікам}} ад [[User:$3|$3]].",
	'ea-compose' => 'Стварэньне зьместу',
	'ea-show' => 'Паказаць сьпіс атрымальнікаў',
	'ea-from' => 'Ад:',
	'ea-to' => 'Да:',
	'ea-to-info' => 'Адрасы электроннай пошты могуць падзяляцца адной ці болей кропкай з коскай, коскай, зоркай ці сымбалем пачатку новага радку',
	'ea-cc' => 'Копія:',
	'ea-send' => 'Даслаць',
	'ea-subject' => 'Тэма:',
	'ea-message' => 'Паведамленьне:',
	'ea-message-info' => 'Далучыць зьмест з магчымым паведамленьнем у вікі-фармаце',
	'ea-style' => 'Стыль:',
	'ea-selectcss' => 'Вы можаце выбраць табліцу стыляў',
	'ea-data' => 'Зьвесткі',
	'ea-selectrecord' => 'Гэтыя шаблёны могуць выкарыстоўвацца для запаўненьня палёў ў зьмесьце паведамленьня',
	'ea-allusers' => 'Усе ўдзельнікі',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'ea-nopage' => 'Необходимо е да се посочи страница, която да бъде изпратена, напр. [[Special:e-mailpage/Начална страница]].',
	'ea-norecipients' => 'Не бяха намерени валидни адреси за е-поща!',
	'ea-listrecipients' => '=== Списък на $1 {{PLURAL:$1|получател|получателя}} ===',
	'ea-error' => "'''Грешка при изпращане на [[$1]]:''' ''$2''",
	'ea-show' => 'Показване на получателите',
	'ea-send' => 'Изпращане!',
	'ea-selectcss' => 'Избиране на CSS стил',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'e-mailpage' => 'Kas ar bajenn dre bostel',
	'ea-desc' => "Kas a ra ur bajenn doare HTML d'ur chomlec'h postel pe d'ur roll chomlec'hioù en ur ober gant [http://phpmailer.sourceforge.net phpmailer]",
	'ea-heading' => 'Kas ar bajenn dre bostel "[[$1]]"',
	'ea-group-info' => 'Gallout a rit kas ar bajenn da izili ur strollad ivez',
	'ea-pagesend' => 'Pajenn "$1" kaset adalek $2',
	'ea-nopage' => "N'eus bet spisaet pajenn ebet da vezañ kaset, grit gant al liamm postel er varrenn-gostez pe obererezhioù ar bajenn.",
	'ea-norecipients' => "N'eus bet kavet chomlec'h postel reizh ebet !",
	'ea-listrecipients' => 'O rollañ {{PLURAL:$1|resever|$1 resever}}',
	'ea-error' => "'''Fazi en ur gas [[$1]]:''' ''$2''",
	'ea-denied' => "Aotre nac'het",
	'ea-sent' => "Kaset eo bet ar bajenn [[$1]] ervat da '''$2''' {{PLURAL:$2|resever|resever}} gant [[User:$3|$3]].",
	'ea-compose' => 'Sevel ar pennad-skrid',
	'ea-show' => 'Gwelet roll ar reseverien',
	'ea-from' => 'Digant :',
	'ea-to' => 'Da :',
	'ea-to-info' => "Gallout a ra ar chomlec'hioù postel bezañ dispartiet dre ur pik-skej pe meur a hini, ur skej, ur steredennig pe arouezennoù linenn nevez",
	'ea-cc' => 'CC :',
	'ea-send' => 'Kas',
	'ea-subject' => 'Danvez :',
	'ea-message' => 'Postel :',
	'ea-message-info' => 'Lakaat ur gemennadenn diret e wikistestenn a-raok danvez ar postel',
	'ea-style' => 'Stil :',
	'ea-selectcss' => 'Dibabit ur follenn stil CSS',
	'ea-data' => 'Roadennoù',
	'ea-selectrecord' => "Ober gant ar patromoù-mañ a c'haller da leuniañ maeziennoù e diabarzh ar postel",
	'ea-allusers' => 'An holl implijerien',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'e-mailpage' => 'Stranica za e-mail',
	'ea-desc' => 'Omogućava slanje HTML stranice na adresu e-maila ili spisak adresa koristeći [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => 'E-mailom šaljem stranicu "[[$1]]"',
	'ea-group-info' => 'Dodatno možete poslati stranicu članovima grupe',
	'ea-pagesend' => 'Stranica "$1" poslana od $2',
	'ea-nopage' => 'Nije određena stranica za slanje, molimo koristite e-mail link iz menija sa strane ili akcije stranice.',
	'ea-norecipients' => 'Nisu pronađene valjane e-mail adrese!',
	'ea-listrecipients' => 'Prikazujem {{PLURAL:$1|primaoca|$1 primaoca}}',
	'ea-error' => "'''Greška pri slanju [[$1]]:''' ''$2''",
	'ea-denied' => 'Pristup onemogućen',
	'ea-sent' => "Stranica [[$1]] uspješno poslana na '''$2''' {{PLURAL:$2|primaoca|primaoca|primaoce}} od strane [[User:$3|$3]].",
	'ea-compose' => 'Unesi sadržaj',
	'ea-show' => 'Vidi spisak primaoca',
	'ea-from' => 'Od:',
	'ea-to' => 'Za:',
	'ea-to-info' => 'E-mail adrese mogu biti odvojene sa dvije tačke ili više njih, zarezom, zvijezdicom ili znakom za novi red',
	'ea-cc' => 'CC:',
	'ea-send' => 'Pošalji',
	'ea-subject' => 'Tema:',
	'ea-message' => 'Poruka:',
	'ea-message-info' => 'Spoji sadržaj sa opcionalnom porukom u wikitekstu',
	'ea-style' => 'Stil:',
	'ea-selectcss' => 'Možete odabrati CSS-stylesheet',
	'ea-data' => 'Podatak',
	'ea-selectrecord' => 'Ovi šabloni se mogu koristiti za ispunjavanje polja u sadržaju poruke',
	'ea-allusers' => 'Svi korisnici',
);

/** German (Deutsch)
 * @author Church of emacs
 * @author Kghbln
 * @author Leithian
 * @author kghbln
 */
$messages['de'] = array(
	'e-mailpage' => 'Per E-Mail versenden',
	'ea-desc' => 'Ermöglicht das Versenden von HTML-Seiten an E-Mail-Adressen oder E-Mail-Adresslisten mit [http://phpmailer.worxware.com/ PHPMailer]',
	'ea-heading' => '=== E-Mail-Versand von Seite „[[$1]]“ ===',
	'ea-group-info' => 'Zusätzlich kann die Seite an die Mitglieder einer Benutzergruppe gesandt werden',
	'ea-pagesend' => 'Seite „$1“ (aus $2)',
	'ea-nopage' => 'Zum Versenden wurde keine Seite angegeben. Bitte den Link „Per E-Mail versenden“ in der Seitenleiste unter Werkzeuge oder den entsprechenden Reiter oben in der Menüleiste verwenden.',
	'ea-norecipients' => 'Es sind keine E-Mail-Adressen zum Versenden vorhanden!',
	'ea-listrecipients' => '=== {{PLURAL:$1|Empfänger|$1 Empfänger}} ===',
	'ea-error' => "'''Fehler beim Versenden von Seite „[[$1]]“:''' $2",
	'ea-denied' => 'E-Mail-Versand konnte aufgrund fehlender Berechtigung nicht durchgeführt werden.',
	'ea-sent' => "Seite „[[$1]]“ wurde erfolgreich von [[User:$3|$3]] an '''$2''' {{PLURAL:$2|Empfänger|Empfänger}} versandt.",
	'ea-compose' => 'Nachricht verfassen',
	'ea-show' => 'Empfänger anzeigen',
	'ea-from' => 'Von:',
	'ea-to' => 'An:',
	'ea-to-info' => 'E-Mail-Adressen können mit einem Semikolon, Komma, Sternchen oder einem Zeichen für eine neue Zeile („\\n“) voneinander getrennt werden',
	'ea-cc' => 'CC:',
	'ea-send' => 'Senden',
	'ea-subject' => 'Betreff:',
	'ea-message' => 'Nachricht:',
	'ea-message-info' => 'Dem Inhalt der Seite eine Nachricht voranstellen (optional, Eingabe in Wikitext erforderlich):',
	'ea-style' => 'Stil:',
	'ea-selectcss' => 'Stylesheet auswählen:',
	'ea-data' => 'Daten',
	'ea-selectrecord' => 'Diese Vorlagen können genutzt werden, um in der Nachricht vorhandene Felder zu vervollständigen:',
	'ea-allusers' => 'Alle Benutzer',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'e-mailpage' => 'Retpoŝtigi paĝon',
	'ea-heading' => '=== Retpoŝtigante paĝon [[$1]] ===',
	'ea-pagesend' => 'Paĝo "$1" sendita de $2',
	'ea-nopage' => 'Bonvolu enigi paĝon por retsendi, ekz-e [[Special:e-mailpage/Main Page]].',
	'ea-norecipients' => 'Neniaj validaj retadresoj trovitaj!',
	'ea-listrecipients' => '=== Listo de $1 {{PLURAL:$1|ricevonto|ricevontoj}} ===',
	'ea-error' => "'''Eraro sendante [[$1]]:''' ''$2''",
	'ea-denied' => 'Malpermesite',
	'ea-sent' => "Paĝo [[$1]] sendita sukcese al '''$2''' {{PLURAL:$2|ricevonto|ricevontoj}} de [[User:$3|$3]].",
	'ea-compose' => 'Skribu enhavon',
	'ea-send' => 'Sendi!',
	'ea-selectcss' => 'Selekti CSS-tiparŝablono',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'ea-from' => 'از:',
	'ea-to' => 'به:',
);

/** French (Français)
 * @author Grondin
 * @author Peter17
 */
$messages['fr'] = array(
	'e-mailpage' => 'Envoyer l’article par courriel',
	'ea-desc' => 'Envoie le rendu d’une page HTML à une adresse électronique où à une liste d’adresses en utilisant [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => '=== Envoi de la page [[$1]] par courrier électronique ===',
	'ea-group-info' => 'De plus, vous pouvez envoyer la page aux membres d’un groupe',
	'ea-pagesend' => 'Page « $1 » envoyée depuis $2',
	'ea-nopage' => 'Aucune page à envoyer n’a été spécifiée. Veuillez utiliser le lien d’envoi de la barre latérale ou les actions de la page.',
	'ea-norecipients' => 'Aucune adresse courriel de trouvée !',
	'ea-listrecipients' => '=== Liste de $1 {{PLURAL:$1|destinataire|destinataires}} ===',
	'ea-error' => "'''Erreur de l’envoi de [[$1]] :''' ''$2''",
	'ea-denied' => 'Permission refusée',
	'ea-sent' => "L'article [[$1]] a été envoyé avec succès à '''$2''' {{PLURAL:$2|destinataire|destinataires}} par [[User:$3|$3]].",
	'ea-compose' => 'Composer le contenu',
	'ea-show' => 'Visionner les destinataires',
	'ea-from' => 'De :',
	'ea-to' => 'À :',
	'ea-to-info' => 'Les adresses électroniques peuvent être séparées par un ou plusieurs point virgule, virgule, astérisque ou caractère de nouvelle ligne',
	'ea-cc' => 'Copie :',
	'ea-send' => 'Envoyer !',
	'ea-subject' => 'Objet :',
	'ea-message' => 'Message :',
	'ea-message-info' => 'Faire précéder le contenu d’un message facultatif en wikitexte',
	'ea-style' => 'Style :',
	'ea-selectcss' => 'Vous pouvez sélectionner une feuille de style',
	'ea-data' => 'Données',
	'ea-selectrecord' => 'Ces modèles peuvent être utilisés pour remplir les champs dans le contenu du message',
	'ea-allusers' => 'Tous les utilisateurs',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'e-mailpage' => 'Enviar a páxina por correo electrónico',
	'ea-desc' => 'Enviar páxinas HTML renderizadas a un enderezo de correo electrónico (ou a varios correos) usando [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== Enviando a páxina "[[$1]]" ===',
	'ea-pagesend' => 'A páxina "$1" foi enviada desde $2',
	'ea-nopage' => 'Non especificou ningunha páxina para enviar; empregue a ligazón da caixa lateral para esta operación.',
	'ea-norecipients' => 'Non foi atopado ningún enderezo de correo electrónico válido!',
	'ea-listrecipients' => '{{PLURAL:$1|Nome do destinatario|Lista dos $1 destinatarios}}',
	'ea-error' => "'''Erro no envío de \"[[\$1]]\":''' ''\$2''",
	'ea-denied' => 'Permiso denegado',
	'ea-sent' => 'A páxina "[[$1]]" foi enviada con éxito a \'\'\'$2\'\'\' {{PLURAL:$2|destinatario|destinatarios}} por [[User:$3|$3]].',
	'ea-compose' => 'Compoñer o contido',
	'ea-show' => 'Amosar os destinatarios',
	'ea-from' => 'De:',
	'ea-to' => 'Para:',
	'ea-cc' => 'Copia:',
	'ea-send' => 'Enviar!',
	'ea-subject' => 'Asunto:',
	'ea-message' => 'Mensaxe:',
	'ea-style' => 'Estilo:',
	'ea-selectcss' => 'Pode seleccionar unha folla de estilo',
	'ea-data' => 'Datos',
	'ea-allusers' => 'Todos os usuarios',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'e-mailpage' => 'Syte per E-Mail verschicke',
	'ea-desc' => 'Macht s Verschicke vu HTML-Syten an E-Mail-Adrässe oder E-Mail-Adrässlischte mit [http://phpmailer.worxware.com/ PHPMailer] megli',
	'ea-heading' => 'D Syte „[[$1]]“ per Mail verschicke',
	'ea-group-info' => 'Zuesätzli cha d Syte an d Mitglider vun ere Benutzergruppe gschickt wäre',
	'ea-pagesend' => 'Syte „$1“ (us $2)',
	'ea-nopage' => 'Zum Verschicke isch kei Syte aagee wore. Bitte dr Link „Syte per E-Mail verschicke“ in dr Syteleischte oder dr Ryter obe in dr Menüleischte verwände.',
	'ea-norecipients' => 'S git kei E-Mail-Adrässe zum Verschicke!',
	'ea-listrecipients' => 'Lischt mit {{PLURAL:$1|Empfänger|$1 Empfänger}}',
	'ea-error' => "'''Fähler bim Verschicke vu dr Syte „[[$1]]“:''' $2",
	'ea-denied' => 'Zuegriff verweigeret',
	'ea-sent' => "D Syte „[[$1]]“ isch erfolgryych vu [[User:$3|$3]] an '''$2''' {{PLURAL:$2|Empfänger|Empfänger}} verschickt wore.",
	'ea-compose' => 'Nochricht verfasse',
	'ea-show' => 'Empfänger aazeige',
	'ea-from' => 'Vu:',
	'ea-to' => 'An:',
	'ea-to-info' => 'E-Mail-Adrässe chenne mit eme Semikolon, Komma, Stärnli oder eme Zeiche fir e neji Zyyle („\\n“) vunenander drännt wäre',
	'ea-cc' => 'CC:',
	'ea-send' => 'Abschicke',
	'ea-subject' => 'Beträff:',
	'ea-message' => 'Nochricht:',
	'ea-message-info' => 'Vor dr Inhalt e optionali Wikitext-Nochricht stelle',
	'ea-style' => 'Stil:',
	'ea-selectcss' => 'Du chasch e Stylesheet uuswehle:',
	'ea-data' => 'Date',
	'ea-selectrecord' => 'Die Vorlage chenne brucht wäre go Fälder in dr Nochricht uusfille:',
	'ea-allusers' => 'Alli Benutzer',
);

/** Hebrew (עברית)
 * @author YaronSh
 */
$messages['he'] = array(
	'e-mailpage' => 'דף דוא״ל',
	'ea-desc' => 'שליחת עמוד HTML מעובד לכתובת דוא״ל או לרשימה של כתובות באמצעות [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => 'הדף "[[$1]]" נשלח בדוא״ל',
	'ea-group-info' => 'בנוסף באפשרות לשלוח דף לחברים בקבוצה מסוימת',
	'ea-pagesend' => 'הדף "$1" נשלח מהמקור $2',
	'ea-nopage' => 'לא צוין דף לשליחה, נא להשתמש בקישור הדוא״ל שבסרגל הצד או בפעולות הדף.',
	'ea-norecipients' => 'לא נמצאו כתובות דוא״ל תקניות!',
	'ea-listrecipients' => '{{PLURAL:$1|נמען אחד מופיע|$1 נמענים מופיעים}}',
	'ea-error' => "'''שגיאה בשליחת [[$1]]:''' ''$2''",
	'ea-denied' => 'ההרשאה נדחתה',
	'ea-sent' => "הדף [[$1]] נשלח בהצלחה ל'''$2''' {{PLURAL:$2|נמען אחד|מספר נמענים}} על ידי [[User:$3|$3]].",
	'ea-compose' => 'חיבור תוכן',
	'ea-show' => 'צפייה ברשימת הנמענים',
	'ea-from' => 'מאת:',
	'ea-to' => 'מען:',
	'ea-to-info' => 'ניתן להפריד את כתובות הדוא״ל באמצעות התווים: נקודה פסיק, פסיק, כוכבית או שורה חדשה',
	'ea-cc' => 'עותק:',
	'ea-send' => 'שליחה',
	'ea-subject' => 'נושא:',
	'ea-message' => 'הודעה:',
	'ea-message-info' => 'צירוף תוכן עם הודעת ויקיטקסט (לא בהכרח)',
	'ea-style' => 'סגנון:',
	'ea-selectcss' => 'ניתן לבחור בגיליון סגנון (CSS)',
	'ea-data' => 'נתונים',
	'ea-selectrecord' => 'ניתן להשתמש בתבניות אלה כדי למלא את כל השדות בתוכן ההודעה',
	'ea-allusers' => 'כל המשתמשים',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'e-mailpage' => 'E-mejlowa strona',
	'ea-desc' => 'Rysowanu HTML-stronu na e-mejlowu adresu abo lisćinu adresow z pomocu [http://phpmailer.sourceforge.net phpmailer] pósłać',
	'ea-heading' => 'Strona "[[$1]]" so e-mejluje',
	'ea-group-info' => 'Přidatnje móžeš stronu na čłonow skupiny pósłać',
	'ea-pagesend' => 'Stronu "$1" wot $2 pósłana',
	'ea-nopage' => 'Žana strona za słanje podata, prošu wužij e-mejlowy wotkaz z bóčnicy abo akcije strony.',
	'ea-norecipients' => 'Žane płaćiwe e-mejlowe adresy namakane!',
	'ea-listrecipients' => '{{PLURAL:$1|přijimowar so nalistuje|$1 přijimowarjej so nalistujetaj|$1 přijimowarjo so nalistuja|$1 přijimowarjow so nalistuje}}',
	'ea-error' => "'''Zmylk při słanju [[$1]]:''' ''$2''",
	'ea-denied' => 'Dowolnosć zapowědźena',
	'ea-sent' => "Strona [[$1]] bu wot [[User:$3|$3]] wuspěšnje  na '''$2''' {{PLURAL:$2|přijimowarja|přijimowarjow|přijimowarjow|přijimowarjow}} pósłana.",
	'ea-compose' => 'Wobsah spisać',
	'ea-show' => 'Lisćinu přijimowarjow pokazać',
	'ea-from' => 'Wot:',
	'ea-to' => 'Komu:',
	'ea-to-info' => 'E-mejlowe adresy hodźa so přez semikolon, komu, asterisk abo linkowe łamanje wotdźělić',
	'ea-cc' => 'Kopija:',
	'ea-send' => 'Pósłać',
	'ea-subject' => 'Tema:',
	'ea-message' => 'Powěsć:',
	'ea-message-info' => 'Wobsah z opcionalnej powěsću we wikiteksće započeć',
	'ea-style' => 'Stil:',
	'ea-selectcss' => 'Móžeš stilowu předłohu wubrać',
	'ea-data' => 'Daty',
	'ea-selectrecord' => 'Tute předłohi hodźa so wužiwać, zo bychu pola w powěsći wupjelnili',
	'ea-allusers' => 'Wšitcy wužiwarjo',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'e-mailpage' => 'Inviar pagina per e-mail',
	'ea-desc' => 'Inviar le rendition HTML de un pagina a un adresse de e-mail o a un lista de adresses con [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== Invio del pagina [[$1]] per e-mail ===',
	'ea-group-info' => 'In addition, tu pote inviar le pagina al membros de un gruppo',
	'ea-pagesend' => 'Pagina "$1" inviate ab $2',
	'ea-nopage' => 'Nulle pagina a inviar esseva specificate, per favor usa le ligamine de e-mail ab le barra lateral o actiones de pagina.',
	'ea-norecipients' => 'Nulle adresses de e-mail valide trovate!',
	'ea-listrecipients' => '=== {{PLURAL:$1|Destinatario|$1 destinatarios}} ===',
	'ea-error' => "'''Error durante le invio de [[$1]]:''' ''$2''",
	'ea-denied' => 'Permission refusate',
	'ea-sent' => "Le pagina [[$1]] ha essite inviate con successo a '''$2''' {{PLURAL:$2|destinatario|destinatarios}} per [[User:$3|$3]].",
	'ea-compose' => 'Componer contento',
	'ea-show' => 'Monstrar destinatarios',
	'ea-from' => 'Expeditor:',
	'ea-to' => 'Destinatario:',
	'ea-to-info' => 'Le adresses de e-mail pote esser separate per un o plus characteres de puncto e virgula, comma, asterisco o nove linea',
	'ea-cc' => 'CC:',
	'ea-send' => 'Inviar!',
	'ea-subject' => 'Subjecto:',
	'ea-message' => 'Message:',
	'ea-message-info' => 'Anteponer al contento un message optional in wikitexto',
	'ea-style' => 'Stilo:',
	'ea-selectcss' => 'Tu pote seliger un folio de stilo',
	'ea-data' => 'Datos',
	'ea-selectrecord' => 'Iste patronos pote esser usate pro completar campos in le contento del message',
	'ea-allusers' => 'Tote le usatores',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'e-mailpage' => 'Surel halaman',
	'ea-desc' => 'Kirim halaman HTML ke suatu alamat surel atau daftar alamat menggunakan [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => 'Kirimkan halaman "[[$1]]"',
	'ea-group-info' => 'Selain itu Anda dapat mengirim halaman ke anggota kelompok',
	'ea-pagesend' => 'Halaman "$1" dikirim dari $2',
	'ea-nopage' => 'Halaman yang akan dikirim belum ditentukan. Silakan gunakan surel halaman dari bilah sisi atau tindakan halaman.',
	'ea-norecipients' => 'Alamat surel yang sah tidak ditemukan!',
	'ea-listrecipients' => 'Daftar {{PLURAL:$1|penerima|$1 penerima}}',
	'ea-error' => "'''Kesalahan sewaktu mengirim [[$1]]:''' ''$2''",
	'ea-denied' => 'Izin ditolak',
	'ea-sent' => "Halaman [[$1]] berhasil dikirim ke '''$2''' {{PLURAL:$2|penerima|penerima}} oleh [[User:$3|$3]].",
	'ea-compose' => 'Tulis isi',
	'ea-show' => 'Lihat daftar penerima',
	'ea-from' => 'Dari:',
	'ea-to' => 'Untuk:',
	'ea-to-info' => 'Alamat surel dapat dipisahkan dengan satu atau lebih titik koma, koma, bintang, atau baris baru',
	'ea-cc' => 'Tembusan:',
	'ea-send' => 'Kirim',
	'ea-subject' => 'Perihal:',
	'ea-message' => 'Pesan:',
	'ea-message-info' => 'Tambahkan isi dengan pesan teks wiki opsional',
	'ea-style' => 'Gaya:',
	'ea-selectcss' => 'Anda dapat memilih lembar gaya',
	'ea-data' => 'Data',
	'ea-selectrecord' => 'Template ini dapat digunakan untuk mengisi kolom isi pesan',
	'ea-allusers' => 'Semua pengguna',
);

/** Japanese (日本語)
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'e-mailpage' => '電子メールでページを送信',
	'ea-desc' => '特定の電子メールアドレス、あるいは[http://phpmailer.sourceforge.net phpmailer]を使ってアドレスの一覧宛に、HTML描画されたページを送信',
	'ea-heading' => 'ページ「[[$1]]」を電子メールで送信',
	'ea-group-info' => 'さらに、グループのメンバーにページを送信できます',
	'ea-pagesend' => '$2から送信されたページ「$1」',
	'ea-nopage' => '送信するページが指定されませんでした。サイドバー内の電子メールのリンクを使用するか、ページ操作を行なってください。',
	'ea-norecipients' => '有効な電子メールアドレスが見つかりません！',
	'ea-listrecipients' => '{{PLURAL:$1|$1人の受信者}}の一覧',
	'ea-error' => "'''[[$1]]の送信のエラー：'''$2",
	'ea-denied' => '許可されていません',
	'ea-sent' => "[[User:$3|$3]]によって、ページ[[$1]]が'''$2'''人の受信者へ正しく送信されました。",
	'ea-compose' => '内容の作成',
	'ea-show' => '受信者一覧を表示',
	'ea-from' => '差出人：',
	'ea-to' => '宛先：',
	'ea-to-info' => '電子メールアドレスは1つ以上のセミコロン、カンマ、アスタリスクや改行文字で区切ることができます。',
	'ea-cc' => 'CC：',
	'ea-send' => '送信',
	'ea-subject' => '件名：',
	'ea-message' => '本文：',
	'ea-message-info' => '追加のウィキテキストのメッセージを本文の先頭に追加',
	'ea-style' => 'スタイル：',
	'ea-selectcss' => 'スタイルシートを選択できます',
	'ea-data' => '日付',
	'ea-selectrecord' => 'これらのテンプレートをメッセージの内容を入力するために使用することができます',
	'ea-allusers' => 'すべての利用者',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 */
$messages['km'] = array(
	'e-mailpage' => 'ទំព័រអ៊ីមែល',
	'ea-pagesend' => 'ទំព័រ"$1"ត្រូវបានបញ្ជូនពី$2',
	'ea-send' => 'ផ្ញើ!',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'e-mailpage' => 'Säit per Mail schécken',
	'ea-heading' => '=== Säit [[$1]] peer E-Mail verschécken ===',
	'ea-pagesend' => 'D\'Säit "$1" gouf verschéckt vum $2',
	'ea-norecipients' => 'Keng gëlteg E-Mailadress fonnt',
	'ea-error' => "'''Feeler beim Verschécke vun der Säit [[$1]]:''' ''$2''",
	'ea-denied' => 'Rechter refuséiert',
	'ea-show' => 'Adressate weisen',
	'ea-from' => 'Vum:',
	'ea-to' => 'Fir:',
	'ea-cc' => 'Kopie:',
	'ea-send' => 'Schécken!',
	'ea-subject' => 'Sujet:',
	'ea-message' => 'Message:',
	'ea-style' => 'Style:',
	'ea-selectcss' => "Dir kënnt een ''CSS Stylesheet'' eraussichen",
	'ea-allusers' => 'All Benotzer',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'e-mailpage' => 'Страница за е-пошта',
	'ea-desc' => 'Испраќање на снимена HTML-страница на е-поштенска адреса или список на адреси со [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => 'Испраќање на страницата „[[$1]]“',
	'ea-group-info' => 'Покрај ова, страницата можете да ја испратите и на членови на група',
	'ea-pagesend' => 'Страницата „$1“ е испратена од $2',
	'ea-nopage' => 'Не наведовте страница за испраќање. Послужете се со врската за е-пошта во страничната лента или функциите на страницата.',
	'ea-norecipients' => 'Не пронајдов важечки е-поштенски адреси!',
	'ea-listrecipients' => 'Наведувам {{PLURAL:$1|примач|$1 примачи}}',
	'ea-error' => "'''Грешка при испраќањето на [[$1]]:''' ''$2''",
	'ea-denied' => 'Дозволата е одбиена',
	'ea-sent' => "Страницата [[$1]] е успешно испратена на '''$2''' {{PLURAL:$2|примач|примачи}} од [[User:$3|$3]].",
	'ea-compose' => 'Состави содржина',
	'ea-show' => 'Прикажи примачи',
	'ea-from' => 'Од:',
	'ea-to' => 'За:',
	'ea-to-info' => 'Е-поштенските адреси се одделуваат со една (или повеќе) точка-запирка, запирки, ѕвездички или знаци за нов ред',
	'ea-cc' => 'Примерок и за:',
	'ea-send' => 'Испрати',
	'ea-subject' => 'Наслов:',
	'ea-message' => 'Порака:',
	'ea-message-info' => 'Вметни дополнителна порака од викитекст на почетокот (незадолжително)',
	'ea-style' => 'Стил:',
	'ea-selectcss' => 'Можете да одберете стилска страница',
	'ea-data' => 'Податоци',
	'ea-selectrecord' => 'Овие шаблони служат за пополнување на полиња во содржината на пораката',
	'ea-allusers' => 'Сите корисници',
);

/** Malayalam (മലയാളം)
 * @author Shijualex
 */
$messages['ml'] = array(
	'e-mailpage' => 'ഇമെയില്‍ താള്‍',
	'ea-heading' => '=== [[$1]] എന്ന താള്‍ ഇമെയില്‍ ചെയ്യുന്നു ===',
	'ea-pagesend' => '$2 സം‌രംഭത്തില്‍ നിന്നു "$1" എന്ന താള്‍ അയച്ചു',
	'ea-nopage' => 'അയക്കുവാന്‍ വേണ്ടി ഒരു താള്‍ തിരഞ്ഞെടുക്കുക. ഉദാ: [[Special:e-mailpage/Main Page]]',
	'ea-norecipients' => 'സാധുവായ ഇമെയില്‍ വിലാസങ്ങള്‍ കണ്ടില്ല!',
	'ea-listrecipients' => '=== $1 {{PLURAL:$1|സ്വീകര്‍ത്താവിന്റെ|സ്വീകര്‍ത്താക്കളുടെ}} പട്ടിക ===',
	'ea-error' => "'''[[$1]] അയക്കുന്നതില്‍ പിഴവ്:''' ''$2''",
	'ea-denied' => 'അനുവാദം നിഷേധിച്ചിരിക്കുന്നു',
	'ea-sent' => "[[User:$3|$3]] എന്ന ഉപയോക്താവ് [[$1]] എന്ന താള്‍ വിജയകരമായി '''$2''' {{PLURAL:$2|സ്വീകര്‍ത്താവിനു|സ്വീകര്‍ത്താക്കള്‍ക്ക്}} അയച്ചിരിക്കുന്നു.",
	'ea-compose' => 'ഉള്ളടക്കം ചേര്‍ക്കുക',
	'ea-show' => 'സ്വീകര്‍ത്താക്കളെ പ്രദര്‍ശിപ്പിക്കുക',
	'ea-send' => 'അയക്കൂ!',
	'ea-subject' => 'ഇമെയിലിനു ഒരു വിഷയം/ശീര്‍ഷകം ചേര്‍ക്കുക',
);

/** Marathi (मराठी)
 * @author Kaustubh
 */
$messages['mr'] = array(
	'e-mailpage' => 'पान इ-मेल करा',
	'ea-desc' => ' [http://phpmailer.sourceforge.net पीएचपी मेलर] चा वापर करून एखादे पान एखाद्या इ-मेल पत्त्यावर किंवा इ-मेल पत्त्यांच्या यादीवर पाठवा.',
	'ea-heading' => '=== [[$1]] पान इ-मेल करीत आहे ===',
	'ea-pagesend' => '$2 ने "$1" पान पाठविले',
	'ea-nopage' => 'कृपया पाठविण्यासाठी एक पान निवडा, उदाहरणासाठी [[Special:e-mailpage/Main Page]].',
	'ea-norecipients' => 'योग्य इ-मेल पत्ता सापडला नाही!',
	'ea-listrecipients' => '=== $1 {{PLURAL:$1|सदस्याची|सदस्यांची}}यादी ===',
	'ea-error' => "'''पाठविण्यामध्ये त्रुटी [[$1]]:''' ''$2''",
	'ea-denied' => 'परवानगी नाकारली',
	'ea-sent' => "[[User:$3|$3]] ने [[$1]] पान '''$2''' {{PLURAL:$2|सदस्याला|सदस्यांना}} पाठविले.",
	'ea-compose' => 'मजकूर लिहा',
	'ea-show' => 'निवडलेले सदस्य दाखवा',
	'ea-send' => 'पाठवा!',
	'ea-subject' => 'इ-मेल चा विषय लिहा',
	'ea-message' => 'मजकूरा आधी वैकल्पिक संदेश लिहा (विकिसंज्ञा)',
	'ea-selectcss' => 'सीएसएस स्टाइलशीट पाठवा',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'e-mailpage' => 'E-mail zāzanilli',
	'ea-heading' => '=== E-mailhua in zāzanilli $1 ===',
	'ea-send' => 'Ticquihuāz',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'ea-fromgroup' => 'Vun Grupp:',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'e-mailpage' => 'Pagina e-mailen',
	'ea-desc' => 'Stuur een gerenderde pagina naar een e-mailadres of een lijst van adressen met behulp van [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== Pagina [[$1]] e-mailen ===',
	'ea-group-info' => 'Daarnaast kun u de pagina naar leden van een groep sturen',
	'ea-pagesend' => 'Pagina "$1" is vanuit $2 verstuurd',
	'ea-nopage' => 'Geef een pagina op om te versturen, bijvoorbeeld [[Special:e-mailpage/Hoofdpagina]].',
	'ea-norecipients' => 'Er is geen geldig e-mailadres opgegeven!',
	'ea-listrecipients' => '=== Lijst met $1 {{PLURAL:$1|ontvanger|ontvangers}} ===',
	'ea-error' => "'''Fout bij het versturen van [[$1]]:''' ''$2''",
	'ea-denied' => 'U hebt geen rechten om deze handeling uit te voeren',
	'ea-sent' => "Pagina [[$1]] is verstuurd naar '''$2''' {{PLURAL:$2|ontvanger|ontvangers}} door [[User:$3|$3]].",
	'ea-compose' => 'Inhoud samenstellen',
	'ea-show' => 'Ontvangers weergeven',
	'ea-from' => 'Van:',
	'ea-to' => 'Aan:',
	'ea-to-info' => "E-mailadressen kunnen gescheiden worden door een of meer puntkomma's, komma's sterretjes of regeleinden",
	'ea-cc' => 'CC:',
	'ea-send' => 'Versturen',
	'ea-subject' => 'Onderwerp:',
	'ea-message' => 'Bericht:',
	'ea-message-info' => 'Voor inhoud optionele wikitekst toevoegen',
	'ea-style' => 'Stijl:',
	'ea-selectcss' => 'U kunt een stylesheet selecteren',
	'ea-data' => 'Gegevens',
	'ea-selectrecord' => 'Deze sjablonen kunnen gebruikt worden om velden te vullen in de berichtinhoud',
	'ea-allusers' => 'Alle gebruikers',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'e-mailpage' => 'Send side som e-post',
	'ea-desc' => 'Send HTML-side til en eller flere e-postadresser ved hjelp av [http://phpmailer.sourceforge.net/ phpmailer].',
	'ea-heading' => '=== Send siden [[$1]] som e-post ===',
	'ea-group-info' => 'I tillegg kan du sende siden til medlemmene av en gruppe',
	'ea-pagesend' => 'Siden «$1» sendt fra $2',
	'ea-nopage' => 'Oppgi en side du vil sende, for eksempel [[Special:e-mailpage/{{MediaWiki:Mainpage-url}}]].',
	'ea-norecipients' => 'Ingen gyldige e-postadresser funnet.',
	'ea-listrecipients' => '=== Liste over $1 {{PLURAL:$1|mottaker|mottakere}} ===',
	'ea-error' => "'''Feil under sending av [[$1]]:''' ''$2''",
	'ea-denied' => 'Ingen adgang',
	'ea-sent' => "Siden [[$1]] ble sendt til '''$2''' {{PLURAL:$2|mottaker|mottakere}} av [[User:$3|$3]].",
	'ea-compose' => 'Skriv inn innhold',
	'ea-show' => 'Vis mottakere',
	'ea-from' => 'Fra:',
	'ea-to' => 'Til:',
	'ea-to-info' => 'E-postadresser kan skilles med et eller flere semikolon, komma, stjerne eller linjeskift',
	'ea-cc' => 'CC:',
	'ea-send' => 'Send',
	'ea-subject' => 'Emne:',
	'ea-message' => 'Melding:',
	'ea-selectcss' => 'Du kan velge et stilark',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'e-mailpage' => 'Mandar l’article per corrièr electronic',
	'ea-desc' => 'Manda lo rendut d’una pagina HTML a una adreça electronica o a una tièra d’adreças en utilizant [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => '=== Mandadís de la pagina [[$1]] per corrièr electronic ===',
	'ea-pagesend' => 'Pagina « $1 » mandada dempuèi $2',
	'ea-nopage' => 'Especificatz una pagina de mandar, per exemple [[Special:e-mailpage/Acuèlh]]',
	'ea-norecipients' => "Cap d'adreça de corrièr electronic pas trobada !",
	'ea-listrecipients' => '=== Tièra de $1 {{PLURAL:$1|destinatari|destinataris}} ===',
	'ea-error' => "'''Error del mandadís de [[$1]] :''' ''$2''",
	'ea-denied' => 'Permission refusada',
	'ea-sent' => "L'article [[$1]] es estat mandat amb succès a '''$2''' {{PLURAL:$2|destinatari|destinataris}} per [[User:$3|$3]].",
	'ea-compose' => 'Compausar lo contengut',
	'ea-show' => 'Visionar los destinataris',
	'ea-send' => 'Mandar !',
	'ea-subject' => 'Entrar una linha « objècte » pel corrièr electronic',
	'ea-message' => 'Apondre lo contengut al començament amb un messatge facultatiu (tèxt wiki)',
	'ea-selectcss' => "Seleccionar un fuèlh d'estil CSS",
);

/** Polish (Polski)
 * @author Maikking
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'e-mailpage' => 'Strona e‐maila',
	'ea-desc' => 'Wyślij stronę HTML na adres e-mail lub grupę adresów za pomocą [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== Wysłanie na e-mail strony [[$1]] ===',
	'ea-group-info' => 'Dodatkowo możesz wysłać stronę do członków grupy',
	'ea-pagesend' => 'Strona "$1" wysłana z $2',
	'ea-nopage' => 'Wybierz stronę do wysłania, przykładowo [[Special:e-mailpage/{{MediaWiki:Mainpage-url}}]].',
	'ea-norecipients' => 'Nie znaleziono prawidłowego adresu e-mail.',
	'ea-listrecipients' => '=== {{PLURAL:$1|Odbiorca|$1 odbiorców}} ===',
	'ea-error' => "'''Błąd podczas wysyłania [[$1]]:''' ''$2''",
	'ea-denied' => 'Odmowa dostępu',
	'ea-sent' => "Strona [[$1]] została wysłana do '''$2''' {{PLURAL:$2|odbiorcy|odbiorców}} przez [[User:$3|$3]].",
	'ea-compose' => 'Tworzenie zawartości',
	'ea-show' => 'Pokaż odbiorców',
	'ea-from' => 'Od',
	'ea-to' => 'Do',
	'ea-to-info' => 'Adresy e‐mail mogą być rozdzielane jednym lub więcej średnikiem, przecinkiem, gwiazdką lub znakiem rozpoczęcia nowej linii',
	'ea-cc' => 'CC',
	'ea-send' => 'Wyślij',
	'ea-subject' => 'Temat',
	'ea-message' => 'Wiadomość',
	'ea-message-info' => 'Poprzedź zawartość opcjonalnym komunikatem zapisanym z użyciem formatowania wiki',
	'ea-style' => 'Styl',
	'ea-selectcss' => 'Możesz określić arkusz stylów',
	'ea-data' => 'Dane',
	'ea-selectrecord' => 'Szablony te mogą zostać wykorzystywane do wypełnienia pól w treści wiadomości',
	'ea-allusers' => 'Wszyscy użytkownicy',
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'e-mailpage' => 'Enviar páginas por correio electrónico',
	'ea-desc' => 'Enviar uma página na sua composição final em HTML, para um endereço electrónico ou para uma lista de endereços, usando o [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => 'A enviar a página "[[$1]]"',
	'ea-group-info' => 'Adicionalmente, pode enviar a página para os membros de um grupo',
	'ea-pagesend' => 'Página "$1" enviada da $2',
	'ea-nopage' => 'Não foi especificada nenhuma página para envio; use o link de envio disponível na barra lateral or nas operações da página, por favor.',
	'ea-norecipients' => 'Não foi encontrado nenhum endereço de correio electrónico válido!',
	'ea-listrecipients' => 'A listar {{PLURAL:$1|o destinatário|$1 destinatários}}',
	'ea-error' => "'''Erro no envio de [[$1]]:''' ''$2''",
	'ea-denied' => 'Permissão negada',
	'ea-sent' => "A página [[$1]] foi enviada para '''$2''' {{PLURAL:$2|destinatário|destinatários}} por [[User:$3|$3]].",
	'ea-compose' => 'Compor a mensagem',
	'ea-show' => 'Ver a lista de destinatários',
	'ea-from' => 'De:',
	'ea-to' => 'Para:',
	'ea-to-info' => 'Os endereços podem ser separados com uma ou várias vírgulas, pontos e vírgula, asteriscos ou novas linhas',
	'ea-cc' => 'CC:',
	'ea-send' => 'Enviar',
	'ea-subject' => 'Assunto:',
	'ea-message' => 'Mensagem',
	'ea-message-info' => 'Anteceda o conteúdo com uma mensagem opcional em texto wiki',
	'ea-style' => 'Estilo:',
	'ea-selectcss' => 'Pode seleccionar uma folha de estilos',
	'ea-data' => 'Dados',
	'ea-selectrecord' => 'Estes modelos podem ser usados para preencher os campos no conteúdo da mensagem',
	'ea-allusers' => 'Todos os utilizadores',
);

/** Romanian (Română)
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'ea-fromgroup' => 'Din grupul:',
	'ea-send' => 'Trimite!',
);

/** Russian (Русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'e-mailpage' => 'Отправить страницу',
	'ea-desc' => 'Отправка HTML-страниц на адрес электронной почты (или список адресов) с помощью [http://phpmailer.sourceforge.net phpmailer]',
	'ea-heading' => 'Оправка по электронной почте страницы «[[$1]]»',
	'ea-group-info' => 'Вы также можете отправить страницу членам группы',
	'ea-pagesend' => 'Страница «$1» отправлена из $2',
	'ea-nopage' => 'Не указана страница для отправки. Пожалуйста, воспользуйтесь ссылкой отправки на боковой панели или странице действий.',
	'ea-norecipients' => 'Не обнаружено корректного адреса электронной почты!',
	'ea-listrecipients' => 'Перечень из {{PLURAL:$1|$1 получателя|$1 получателей|$1 получателей}}',
	'ea-error' => "'''Ошибки отправки [[$1]].''' ''$2''",
	'ea-denied' => 'Доступ запрещён',
	'ea-sent' => "Страница [[$1]] успешно отправлена '''$2''' {{PLURAL:$2|получателю|получателям|получателям}} участником [[User:$3|$3]].",
	'ea-compose' => 'Составление текста',
	'ea-show' => 'Просмотр списка получателей',
	'ea-from' => 'От:',
	'ea-to' => 'Кому:',
	'ea-to-info' => 'Адреса электронной почты могут быть разделены точкой с запятой, запятой, звёздочкой или символом новой строки',
	'ea-cc' => 'Копия:',
	'ea-send' => 'Отправить',
	'ea-subject' => 'Тема:',
	'ea-message' => 'Сообщение:',
	'ea-message-info' => 'Присоединение содержания с возможным сообщением с викитекстом',
	'ea-style' => 'Стиль:',
	'ea-selectcss' => 'Вы можете выбрать стиль',
	'ea-data' => 'Данные',
	'ea-selectrecord' => 'Эти шаблоны могут использоваться для заполнения полей в содержимом письма',
	'ea-allusers' => 'Все участники',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'e-mailpage' => 'Poslať stránku emailom',
	'ea-desc' => 'Poslať stránku vo formáte HTML na emailovú adresu alebo zoznam adries pomocou [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== Poslanie stránky [[$1]] emailom ===',
	'ea-pagesend' => 'Článok „$1” poslaný z $2',
	'ea-nopage' => 'Prosím, uveďte stránku, ktorú chcete poslať, napr. [[Special:e-mailpage/Hlavná stránka]].',
	'ea-norecipients' => 'Nebola nájdená platná emailová adresa!',
	'ea-listrecipients' => '=== Zoznam $1 {{PLURAL:$1|príjemcu|príjemcov}} ===',
	'ea-error' => "'''Chyba pri odosielaní [[$1]]:''' ''$2''",
	'ea-denied' => 'Nemáte potrebné oprávnenie',
	'ea-sent' => "[[User:$3|$3]] úspešne poslal stránku [[$1]] '''$2''' {{PLURAL:$2|používateľovi|používateľom}}.",
	'ea-compose' => 'Napísať obsah správy',
	'ea-show' => 'Zobraziť príjemcov',
	'ea-send' => 'Poslať!',
	'ea-subject' => 'Zadajte predmet emailu',
	'ea-message' => 'Pred obsah pridať (nepovinne) správu (wikitext)',
	'ea-selectcss' => 'Vyberte CSS štýl',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'ea-send' => 'Kintun!',
);

/** Swedish (Svenska)
 * @author Fader
 * @author Jon Harald Søby
 * @author M.M.S.
 */
$messages['sv'] = array(
	'e-mailpage' => 'E-posta sida',
	'ea-desc' => 'Skicka en renderad HTML-sida till en e-postadress eller en lista över adresser som använder [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== E-posta sidan [[$1]] ===',
	'ea-pagesend' => 'Artikeln "$1" skickades från $2',
	'ea-nopage' => 'Var god ange en sida att skicka, för exempel [[Special:e-mailpage/{{MediaWiki:Mainpage-url}}]].',
	'ea-norecipients' => 'Inga giltiga e-postadresser hittades!',
	'ea-listrecipients' => '=== Lista över $1 {{PLURAL:$1|mottagare|mottagare}} ===',
	'ea-error' => "'''Fel under sändande av [[$1]]:''' ''$2''",
	'ea-denied' => 'Åtkomst nekas',
	'ea-sent' => "Sidan [[$1]] har skickats till '''$2''' {{PLURAL:$2|mottagare|mottagare}} av [[User:$3|$3]].",
	'ea-compose' => 'Komponera innehåll',
	'ea-show' => 'Visa mottagare',
	'ea-from' => 'Från:',
	'ea-to' => 'Till:',
	'ea-send' => 'Skicka!',
	'ea-subject' => 'Ange ett ämne för e-brevet',
	'ea-message' => 'Fyll innehållet med ett valfritt meddelande (wikitext)',
	'ea-selectcss' => 'Ange en CSS-stilmall',
);

/** Telugu (తెలుగు)
 * @author Veeven
 * @author వైజాసత్య
 */
$messages['te'] = array(
	'ea-denied' => 'అనుమతిని నిరాకరించాం',
	'ea-send' => 'పంపించు!',
);

/** Ukrainian (Українська)
 * @author Тест
 */
$messages['uk'] = array(
	'ea-data' => 'Дані',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'e-mailpage' => 'Trang thư điện tử',
	'ea-desc' => 'Gửi trang HTML giản lược đến một địa chỉ hoặc danh sách các địa chỉ thư điện tử dùng [http://phpmailer.sourceforge.net phpmailer].',
	'ea-heading' => '=== Gửi trang [[$1]] ===',
	'ea-nopage' => 'Không định rõ trang để gửi. Xin hãy sử dụng liên kết thư điện tử trong thanh bên hoặc phần tác vụ trang.',
	'ea-norecipients' => 'Không tìm thấy địa chỉ thư điện tử hợp lệ!',
	'ea-listrecipients' => '=== Danh sách $1 {{PLURAL:$1|người nhận|người nhận}} ===',
	'ea-error' => "'''Lỗi khi gửi [[$1]]:''' ''$2''",
	'ea-sent' => "Trang [[$1]] đã được [[User:$3|$3]] gửi thành công đến '''$2''' {{PLURAL:$2|người nhận|người nhận}}.",
	'ea-compose' => 'Soạn nội dung',
	'ea-show' => 'Hiển thị người nhận',
	'ea-from' => 'Từ:',
	'ea-to' => 'Đến:',
	'ea-cc' => 'Đồng gửi:',
	'ea-send' => 'Gửi!',
	'ea-subject' => 'Tiêu đề:',
	'ea-message' => 'Thông điệp',
	'ea-message-info' => 'Gắn nội dung với thông điệp mã wiki tùy chọn',
	'ea-style' => 'Kiểu:',
	'ea-selectcss' => 'Có thể chọn tập tin định kiểu',
	'ea-data' => 'Dữ liệu',
);

