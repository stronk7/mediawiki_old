<?php

$messages = array();

$messages['en'] = array(
	'notificator' => 'Notificator',
	'notificator-desc' => 'Notifies someone by e-mail about changes to a page when a button on that page gets clicked.',
	'notificator-db-table-does-not-exist' => 'Database table "notificator" does not exist. The update.php maintenance script needs to be run before the Notificator extension can be used.',
	'notificator-e-mail-address' => 'e-mail address',
	'notificator-notify' => 'Notify',
	'notificator-notify-address-or-name' => 'Notify $1',
	'notificator-revs-not-from-same-title' => 'Revision IDs are not from the same title/page',
	'notificator-return-to' => 'Return to',
	'notificator-special-page-accessed-directly' => 'This special page cannot be accessed directly. It is intended to be used through a Notificator button.',
	'notificator-e-mail-address-invalid' => 'The provided e-mail address is invalid.',
	'notificator-notification-not-sent' => 'Notification not sent.',
	'notificator-change-tag' => 'change',
	'notificator-new-tag' => 'new',
	'notificator-notification-text-changes' => '$1 wants to notify you about the following changes to $2:',
	'notificator-notification-text-new' => '$1 wants to notify you about $2.',
	'notificator-following-e-mail-sent-to' => 'The following e-mail has been sent to $1:',
	'notificator-subject' => 'Subject:',
	'notificator-error-sending-e-mail' => 'There was an error when sending the notification e-mail to $1.',
	'notificator-error-parameter-missing' => 'Error: Missing parameter.',
	'notificator-notified-already' => '$1 has been notified about this page or page change before.',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 */
$messages['qqq'] = array(
	'notificator' => 'Name',
	'notificator-desc' => '{{desc}}',
	'notificator-db-table-does-not-exist' => 'Error message',
	'notificator-e-mail-address' => 'Hint in text entry field
{{Identical|E-mail address}}',
	'notificator-notify' => 'Button label',
	'notificator-notify-address-or-name' => 'Button label',
	'notificator-revs-not-from-same-title' => 'Error message (unlikely to show up)',
	'notificator-return-to' => 'Link at the bottom of the special page',
	'notificator-special-page-accessed-directly' => 'Error message',
	'notificator-e-mail-address-invalid' => 'Error message',
	'notificator-notification-not-sent' => 'Message on special page',
	'notificator-change-tag' => 'Tag that goes into the e-mail subject (should be as short as possible)
{{Identical|Change}}',
	'notificator-new-tag' => 'Tag that goes into the e-mail subject (should be as short as possible)
{{Identical|New}}',
	'notificator-notification-text-changes' => 'Message on special page',
	'notificator-notification-text-new' => 'Message on special page',
	'notificator-following-e-mail-sent-to' => 'Message on special page',
	'notificator-subject' => 'Clarifies that the following text is an e-mail subject
{{Identical|Subject}}',
	'notificator-error-sending-e-mail' => 'Error message',
	'notificator-error-parameter-missing' => 'Error message (unlikely to show up)',
	'notificator-notified-already' => 'Message on special page',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'notificator' => 'Kennisgewer',
	'notificator-desc' => "Stel iemand per e-pos in kennis oor veranderinge aan 'n bladsy as 'n knoppie op die bladsy gedruk word.",
	'notificator-db-table-does-not-exist' => 'Die tabel "notificator" bestaan ​​nie in die databasis nie. Die update.php onderhoud-skrip moet geloop word alvorens die Notificator uitbreiding gebruik kan word.',
	'notificator-e-mail-address' => 'E-posadres',
	'notificator-notify' => 'In kennis stel',
	'notificator-notify-address-or-name' => 'Stel $1 in kennis',
	'notificator-revs-not-from-same-title' => "Wysigings vir ID's is nie van dieselfde titel/page nie",
	'notificator-return-to' => 'Keer terug na',
	'notificator-special-page-accessed-directly' => "Die spesiale bladsy kan nie direk aangevra word. Dit is bedoel om gebruik te word deur 'n kennisgewing-knoppie.",
	'notificator-e-mail-address-invalid' => 'Die verskafde e-posadres is ongeldig.',
	'notificator-notification-not-sent' => 'Kennisgewing is nie gestuur nie.',
	'notificator-change-tag' => 'verandering',
	'notificator-new-tag' => 'nuut',
	'notificator-notification-text-changes' => '$1 wil u in kennis stel van die volgende wysigings aan $2:',
	'notificator-notification-text-new' => '$1 wil u in kennis van $2.',
	'notificator-following-e-mail-sent-to' => 'Die volgende e-pos is aan $1 gestuur:',
	'notificator-subject' => 'Onderwerp:',
	'notificator-error-sending-e-mail' => "Daar was 'n fout met die stuur van die kennisgewing per e-pos aan $1.",
	'notificator-error-parameter-missing' => 'Fout: Vermiste parameter.',
	'notificator-notified-already' => '$1 is reeds in kennis gestel oor hierdie bladsy of veranderinge.',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'notificator' => 'Паведамленьні',
	'notificator-desc' => 'Паведамляе ўдзельнікаў пра зьмены на старонках па націску кнопкі праз электронную пошту.',
	'notificator-db-table-does-not-exist' => 'Табліца «notificator» не існуе ў базе зьвестак. Перад выкарыстаньнем пашырэньня патрэбна запусьціць скрыпт update.php.',
	'notificator-e-mail-address' => 'адрас электроннай пошты',
	'notificator-notify' => 'Паведамляць',
	'notificator-notify-address-or-name' => 'Паведамляць $1',
	'notificator-revs-not-from-same-title' => 'Ідэнтыфікатары вэрсіяй адпавядаюць розным старонкам',
	'notificator-return-to' => 'Вярнуцца да',
	'notificator-special-page-accessed-directly' => 'Гэтая спэцыяльная старонка не выкарыстоўваецца напрамую. Пераход да яе ажыцьцяўляецца пасьля націсканьня кнопкі.',
	'notificator-e-mail-address-invalid' => 'Пададзены няслушны адрас электроннай пошты.',
	'notificator-notification-not-sent' => 'Паведамленьне не дасланае.',
	'notificator-change-tag' => 'зьмена',
	'notificator-new-tag' => 'новае',
	'notificator-notification-text-changes' => '$1 паведамляе Вам пра наступныя зьмены на $2:',
	'notificator-notification-text-new' => '$1 паведамляе Вам пра $2.',
	'notificator-following-e-mail-sent-to' => 'Наступны ліст быў дасланы на $1:',
	'notificator-subject' => 'Тэма:',
	'notificator-error-sending-e-mail' => 'Адбылася памылка падчас адпраўкі ліста да $1.',
	'notificator-error-parameter-missing' => 'Памылка: бракуе парамэтру.',
	'notificator-notified-already' => '$1 ужо паведамілі пра зьмены на старонцы ці саму старонку.',
);

/** Breton (Brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'notificator-change-tag' => 'kemmañ',
	'notificator-new-tag' => 'nevez',
	'notificator-subject' => 'Danvez :',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'notificator' => 'Notificator',
	'notificator-desc' => 'Sendet Benachrichtigungen über Seitenänderungen per E-Mail, sofern eine auf der Seite vorhandene Schaltfläche angeklickt wird',
	'notificator-db-table-does-not-exist' => 'Die Datenbanktabelle „notificator“ ist nicht vorhanden. Das Wartungsskript update.php muss ausgeführt werden, bevor die Softwareerweiterung Notificator verwendet werden kann.',
	'notificator-e-mail-address' => 'E-Mail-Adresse',
	'notificator-notify' => 'Benachrichtigen',
	'notificator-notify-address-or-name' => '$1 benachrichtigen',
	'notificator-revs-not-from-same-title' => 'Die Versionskennungen gehören nicht zum selben Titel/ zur selben Seite',
	'notificator-return-to' => 'Zurück zu',
	'notificator-special-page-accessed-directly' => 'Auf diese Spezialseite kann nicht direkt zugegriffen werden. Sie kann nur über eine von der Softwareerweiterung „Notificator“ bereitgestellt Schaltfläche genutzt werden.',
	'notificator-e-mail-address-invalid' => 'Die angegebene E-Mail-Adresse ist ungültig.',
	'notificator-notification-not-sent' => 'Die Benachrichtigung wurde nicht versendet.',
	'notificator-change-tag' => 'Änderung',
	'notificator-new-tag' => 'Neu',
	'notificator-notification-text-changes' => '$1 möchte auf die folgenden Änderungen an $2 hinweisen:',
	'notificator-notification-text-new' => '$1 möchte auf $2 hinweisen.',
	'notificator-following-e-mail-sent-to' => 'Die folgende E-Mail wurde an $1 gesendet:',
	'notificator-subject' => 'Betreff:',
	'notificator-error-sending-e-mail' => 'Beim Versenden der Benachrichtigungs-E-Mail an $1 ist ein Fehler aufgetreten.',
	'notificator-error-parameter-missing' => 'Fehler: Fehlender Parameter.',
	'notificator-notified-already' => '$1 wurde bereits zu dieser Seite oder Seitenänderung benachrichtigt.',
);

/** Spanish (Español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'notificator' => 'Notificador',
	'notificator-desc' => 'Notifica a alguien por correo electrónico sobre cambios en una página cuando se hace clic en un botón de esa página',
	'notificator-db-table-does-not-exist' => 'La tabla «notificator» de la base de datos no existe. El script de mantenimiento update.php debe ejecutarse antes de poder utilizar la extensión Notificator.',
	'notificator-e-mail-address' => 'dirección de correo electrónico',
	'notificator-notify' => 'Notificar',
	'notificator-notify-address-or-name' => 'Notificar a $1',
	'notificator-revs-not-from-same-title' => 'Los ID de revisiones no pertenecen al mismo título/página',
	'notificator-return-to' => 'Volver a',
	'notificator-special-page-accessed-directly' => 'No se puede acceder a esta página especial directamente. Está destinada a ser utilizada a través de un botón de Notificador.',
	'notificator-e-mail-address-invalid' => 'La dirección de correo electrónico proporcionada no es válida.',
	'notificator-notification-not-sent' => 'Notificación no enviada.',
	'notificator-change-tag' => 'cambio',
	'notificator-new-tag' => 'nuevo',
	'notificator-notification-text-changes' => '$1 quiere informarle acerca de los siguientes cambios en $2:',
	'notificator-notification-text-new' => '$1 quiere informarle sobre $2.',
	'notificator-following-e-mail-sent-to' => 'Se ha enviado el correo electrónico siguiente a $1:',
	'notificator-subject' => 'Asunto:',
	'notificator-error-sending-e-mail' => 'Hubo un error al enviar el correo electrónico de notificación a $1.',
	'notificator-error-parameter-missing' => 'Error: Falta un parámetro.',
	'notificator-notified-already' => '$1 ha sido notificado sobre esta página o cambio de página antes.',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'notificator-e-mail-address' => 'adrèce èlèctronica',
	'notificator-return-to' => 'Tornar a',
	'notificator-change-tag' => 'changement',
	'notificator-new-tag' => 'novél',
	'notificator-subject' => 'Sujèt :',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'notificator' => 'Notificador',
	'notificator-desc' => 'Envía unha notificación por correo electrónico sobre os cambios feitos nunha páxina cando se preme nun botón desa páxina.',
	'notificator-db-table-does-not-exist' => 'O "notificator" da táboa da base de datos non existe. Cómpre executar a escritura de mantemento update.php antes de poder empregar a extensión de notificación.',
	'notificator-e-mail-address' => 'enderezo de correo electrónico',
	'notificator-notify' => 'Notificar',
	'notificator-notify-address-or-name' => 'Notificar a $1',
	'notificator-revs-not-from-same-title' => 'Os identificadores de revisión non son do mesmo título ou páxina',
	'notificator-return-to' => 'Volver a',
	'notificator-special-page-accessed-directly' => 'Non se pode acceder directamente a esta páxina especial. Cómpre empregala a través dun botón de notificación.',
	'notificator-e-mail-address-invalid' => 'O enderezo de correo electrónico proporcionado non é válido.',
	'notificator-notification-not-sent' => 'Non se enviou a notificación.',
	'notificator-change-tag' => 'cambio',
	'notificator-new-tag' => 'novo',
	'notificator-notification-text-changes' => '$1 quere notificarlle sobre os seguintes cambios feitos en $2:',
	'notificator-notification-text-new' => '$1 quere notificarlle sobre $2:',
	'notificator-following-e-mail-sent-to' => 'O seguinte correo electrónico enviouse a $1:',
	'notificator-subject' => 'Asunto:',
	'notificator-error-sending-e-mail' => 'Houbo un erro ao enviar a notificación por correo electrónico a $1.',
	'notificator-error-parameter-missing' => 'Erro: Falta o parámetro.',
	'notificator-notified-already' => '$1 xa fora notificado antes sobre esta páxina ou cambio na páxina.',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'notificator' => 'Notificator',
	'notificator-desc' => 'Notifica qualcuno per e-mail super le modificationes in un pagina si on clicca super un button in iste pagina.',
	'notificator-db-table-does-not-exist' => 'Le tabella de base de datos "notificator" non existe. Le script de mantenentia "update.php" debe esser executate ante de poter usar le extension Notificator.',
	'notificator-e-mail-address' => 'adresse de e-mail',
	'notificator-notify' => 'Notificar',
	'notificator-notify-address-or-name' => 'Notificar $1',
	'notificator-revs-not-from-same-title' => 'Le IDs de version non pertine al mesme titulo/pagina',
	'notificator-return-to' => 'Retornar a',
	'notificator-special-page-accessed-directly' => 'Non es possibile acceder directemente a iste pagina special. Iste pagina pote solmente esser usate via un button de Notificator.',
	'notificator-e-mail-address-invalid' => 'Le adresse de e-mail fornite es invalide.',
	'notificator-notification-not-sent' => 'Notification non inviate.',
	'notificator-change-tag' => 'cambiar',
	'notificator-new-tag' => 'nove',
	'notificator-notification-text-changes' => '$1 vole notificar te del sequente modificationes in $2:',
	'notificator-notification-text-new' => '$1 vole notificar te super $2.',
	'notificator-following-e-mail-sent-to' => 'Le sequente e-mail ha essite inviate a $1:',
	'notificator-subject' => 'Subjecto:',
	'notificator-error-sending-e-mail' => 'Un error occurreva durante le invio del e-mail de notification a $1.',
	'notificator-error-parameter-missing' => 'Error: Parametro mancante.',
	'notificator-notified-already' => '$1 ha jam essite notificate super iste pagina o cambiamento.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'notificator' => 'Notificator',
	'notificator-e-mail-address' => 'E-Mailadress',
	'notificator-notify' => 'Informéieren',
	'notificator-notify-address-or-name' => '$1 informéieren',
	'notificator-return-to' => 'Zréck op',
	'notificator-notification-not-sent' => "D'Informatioun gouf net geschéckt.",
	'notificator-change-tag' => 'Ännerung',
	'notificator-new-tag' => 'nei',
	'notificator-following-e-mail-sent-to' => 'Dës Mail gouf un den $1 geschéckt:',
	'notificator-subject' => 'Sujet:',
	'notificator-error-parameter-missing' => 'Feeler: Parameter feelt.',
	'notificator-notified-already' => "$1 gouf schonn iwwer dës Säit oder d'Ännerung vun dëser Säit informéiert.",
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'notificator' => 'Известувач',
	'notificator-desc' => 'Испраќа известувања по е-пошта за измени во страници, ако корисникот стисне на такво копче на дадена страница.',
	'notificator-db-table-does-not-exist' => 'Во базата не постои табела наречена „notificator“. За да можете да го користите додатокот „Известувач“, најпрвин ќе треба да ја пуштите скриптата за одржување „update.php“.',
	'notificator-e-mail-address' => 'е-пошта',
	'notificator-notify' => 'Извести',
	'notificator-notify-address-or-name' => 'Извести го $1',
	'notificator-revs-not-from-same-title' => 'Назнаките на ревизиите не се од ист наслов/страница',
	'notificator-return-to' => 'Назад на',
	'notificator-special-page-accessed-directly' => 'До оваа специјална страница не може да се дојде директно. Наменета е да се користи преку копчето за Известувач.',
	'notificator-e-mail-address-invalid' => 'Наведената е-пошта е неважечка.',
	'notificator-notification-not-sent' => 'Известувањето не е испратено.',
	'notificator-change-tag' => 'измена',
	'notificator-new-tag' => 'ново',
	'notificator-notification-text-changes' => '$1 сака да ве извести за следниве измени $2:',
	'notificator-notification-text-new' => '$1 сака да ве извести за $2.',
	'notificator-following-e-mail-sent-to' => 'На $1 ја пративте следнава порака:',
	'notificator-subject' => 'Наслов:',
	'notificator-error-sending-e-mail' => 'Се појави грешка испраќајќи го известувањетоа на $1.',
	'notificator-error-parameter-missing' => 'Грешка: Недостасува параметар.',
	'notificator-notified-already' => 'Корисникот $1 е известен за оваа страница или претходните измени на страницата.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'notificator-e-mail-address' => 'alamat e-mel',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 */
$messages['nl'] = array(
	'notificator' => 'Kennisgeving',
	'notificator-desc' => 'Brengt iemand per e-mail op de hoogte over wijzigingen aan een pagina wanneer op een knop op die pagina geklikt wordt.',
	'notificator-db-table-does-not-exist' => 'Databasetabel "notificator" bestaat niet. Het "update.php"-onderhoudsscript moet worden uitgevoerd voordat de uitbreiding "Kennisgeving" kan worden gebruikt.',
	'notificator-e-mail-address' => 'e-mailadres',
	'notificator-notify' => 'Op de hoogte brengen',
	'notificator-notify-address-or-name' => '$1 op de hoogte brengen',
	'notificator-revs-not-from-same-title' => 'Versienummers zijn niet van dezelfde titel/pagina',
	'notificator-return-to' => 'Terugkeren naar',
	'notificator-special-page-accessed-directly' => 'Deze speciale pagina kan niet direct worden benaderd. Het is bedoeld om te worden gebruikt via een Kennisgeving-knop.',
	'notificator-e-mail-address-invalid' => 'Het opgegeven e-mailadres is ongeldig.',
	'notificator-notification-not-sent' => 'Kennisgeving niet verzonden.',
	'notificator-change-tag' => 'wijzigen',
	'notificator-new-tag' => 'nieuw',
	'notificator-notification-text-changes' => '$1 wil u op de hoogte brengen over de volgende wijzigingen aan $2:',
	'notificator-notification-text-new' => '$1 wil u op de hoogte brengen over $2.',
	'notificator-following-e-mail-sent-to' => 'De volgende e-mail is verzonden naar $1:',
	'notificator-subject' => 'Onderwerp:',
	'notificator-error-sending-e-mail' => 'Er is een fout opgetreden bij het verzenden van de kennisgevingse-mail naar $1.',
	'notificator-error-parameter-missing' => 'Fout: Ontbrekende parameter.',
	'notificator-notified-already' => '$1 is reeds op de hoogte gebracht over deze pagina of paginawijziging.',
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'notificator' => 'Notificador',
	'notificator-desc' => 'Envia, por correio electrónico, uma notificação de que uma página foi alterada, quando um botão dessa página é clicado.',
	'notificator-db-table-does-not-exist' => 'Não existe uma tabela "notificator" na base de dados. Para poder usar a extensão Notificador, tem de executar o ficheiro de comandos de manutenção update.php.',
	'notificator-e-mail-address' => 'endereço de correio electrónico',
	'notificator-notify' => 'Notificar',
	'notificator-notify-address-or-name' => 'Notificar $1',
	'notificator-revs-not-from-same-title' => 'As identificações das revisões não pertencem à mesma página ou título de página',
	'notificator-return-to' => 'Voltar a',
	'notificator-special-page-accessed-directly' => 'Não pode aceder directamente a esta página especial. Ela é utilizada através de um botão Notificador.',
	'notificator-e-mail-address-invalid' => 'O endereço de correio electrónico fornecido é inválido.',
	'notificator-notification-not-sent' => 'A notificação não foi enviada.',
	'notificator-change-tag' => 'alterada',
	'notificator-new-tag' => 'nova',
	'notificator-notification-text-changes' => 'A $1 pretende notificar as seguintes alterações a $2:',
	'notificator-notification-text-new' => 'A $1 pretende fazer uma notificação acerca de $2.',
	'notificator-following-e-mail-sent-to' => 'A seguinte mensagem foi enviada por correio electrónico para $1:',
	'notificator-subject' => 'Assunto:',
	'notificator-error-sending-e-mail' => 'Ocorreu um erro ao enviar a notificação por correio electrónico a $1.',
	'notificator-error-parameter-missing' => 'Erro: Parâmetro em falta.',
	'notificator-notified-already' => '$1 já foi notificado acerca desta página ou da alteração desta página.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'notificator-e-mail-address' => 'ఈ-మెయిలు చిరునామా',
	'notificator-subject' => 'విషయం:',
);

