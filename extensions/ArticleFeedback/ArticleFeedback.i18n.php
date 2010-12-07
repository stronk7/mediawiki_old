<?php
$messages = array();

/** English
 * @author Nimish Gautam
 * @author Sam Reed
 * @author Brandon Harris
 * @author Trevor Parscal
 */
$messages['en'] = array(
	'articlefeedback' => 'Article feedback',
	'articlefeedback-desc' => 'Article feedback',
	/* Alpha Messages */
	'articlefeedback-alpha-yourfeedback' => 'Your feedback',
	'articlefeedback-alpha-pleaserate' => 'Please take a moment to rate this page below.',
	'articlefeedback-alpha-submit' => 'Submit',
	'articlefeedback-alpha-rating-wellsourced' => 'Well-sourced:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Complete:',
	'articlefeedback-alpha-rating-readability' => 'Readable:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Do you feel this page has sufficient citations and that those citations come from trustworthy sources?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Do you feel that this page shows a fair representation of all perspectives on the issue?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Do you feel that this page covers the essential topic areas that it should?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Do you feel that this page is well-organized and well written?',
	'articlefeedback-alpha-articlerating' => 'Page rating',
	'articlefeedback-alpha-error' => 'An error has occurred.
Please try again later.',
	'articlefeedback-alpha-thanks' => 'Thanks! Your ratings have been saved.',
	'articlefeedback-alpha-featurefeedback' => 'Give us <span class="feedbacklink">feedback</span> about this feature.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|rating|ratings}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "This page has been ''revised'' since you last reviewed it.
You may wish to rate it again.",
	'articlefeedback-alpha-results-show' => '(Results hidden. <span class="showlink">Show</span> them.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Hide results</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Please let us know why you rated this page today (check all that apply):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'I wanted to contribute to the overall rating of the page',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'I hope that my rating would positively affect the development of the page',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'I wanted to contribute to {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'I like sharing my opinion',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => "I didn't provide ratings today, but wanted to give feedback on the feature",
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Other',
	'articlefeedback-alpha-survey-question-useful' => 'Do you believe the ratings provided are useful and clear?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Why?',
	'articlefeedback-alpha-survey-question-expert' => 'Do you consider yourself an expert in the field this page covers?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Can you describe your expertise?',
	'articlefeedback-alpha-survey-question-comments' => 'Do you have any additional comments?',
	'articlefeedback-alpha-survey-submit' => 'Submit',
	'articlefeedback-alpha-survey-title' => 'Please answer a few questions',
	'articlefeedback-alpha-survey-thanks' => 'Thanks for filling out the survey.',
	/* Beta Messages */
	'articlefeedback-beta-form-tab-label' => 'Provide feedback',
	'articlefeedback-beta-form-panel-title' => 'Your feedback',
	'articlefeedback-beta-form-panel-instructions' => 'Please take a moment to rate this page.',
	'articlefeedback-beta-form-panel-notice' => 'Your ratings will expire over time.',
	'articlefeedback-beta-form-panel-submit' => 'Submit feedback',
	'articlefeedback-beta-report-tab-label' => 'Show results',
	'articlefeedback-beta-report-panel-title' => 'Feedback results',
	'articlefeedback-beta-report-panel-description' => 'Current average ratings.',
	'articlefeedback-beta-field-wellsourced-label' => 'Well-sourced',
	'articlefeedback-beta-field-wellsourced-tip' => 'Do you feel this page has sufficient citations and that those citations come from trustworthy sources?',
	'articlefeedback-beta-field-complete-label' => 'Complete',
	'articlefeedback-beta-field-complete-tip' => 'Do you feel that this page covers the essential topic areas that it should?',
	'articlefeedback-beta-field-neutral-label' => 'Neutral',
	'articlefeedback-beta-field-neutral-tip' => 'Do you feel that this page shows a fair representation of all perspectives on the issue?',
	'articlefeedback-beta-field-readable-label' => 'Readable',
	'articlefeedback-beta-field-readable-tip' => 'Do you feel that this page is well-organized and well written?',
);

/** Message documentation (Message documentation)
 * @author Brandon Harris
 * @author EugeneZelenko
 * @author Raymond
 * @author Sam Reed
 */
$messages['qqq'] = array(
	'articlefeedback' => 'The title of the feature. It is about reader feedback.
	
Please visit http://prototype.wikimedia.org/articleassess/Main_Page for a prototype installation.',
	'articlefeedback-desc' => '{{desc}}',
	'articlefeedback-alpha-yourfeedback' => 'This is a box or section header.  It indicates that the contents of the box are personal to the user.',
	'articlefeedback-alpha-pleaserate' => 'This is a call to action for the user to provide their ratings about the page.',
	'articlefeedback-alpha-submit' => '{{Identical|Submit}}',
	'articlefeedback-alpha-rating-wellsourced' => 'This is a rating metric label. The metric is for measuring how researched the article is.',
	'articlefeedback-alpha-rating-neutrality' => "This is a rating metric label. The metric is for measuring an article's NPOV.",
	'articlefeedback-alpha-rating-completeness' => 'This is a rating metric label. The metric is for measuring how comprehensive the article is.',
	'articlefeedback-alpha-rating-readability' => 'This is a rating metric label. The metric is for measuring how well written the article is.',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'This is a tool tip that is designed to explain what the "well-sourced" metric means.',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'This is a tool tip that is designed to explain what the "neutrality" metric means.',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'This is a tool tip that is designed to explain what the "completeness" metric means.',
	'articlefeedback-alpha-rating-readability-tooltip' => 'This is a tool tip that is designed to explain what the "readability" metric means.',
	'articlefeedback-alpha-articlerating' => 'This is a box or section header. It indicates that the contents of the box are the average ratings for the article.',
	'articlefeedback-alpha-error' => 'A generic error message to display on any error.',
	'articlefeedback-alpha-thanks' => 'The message to display when the user has successfully submitted a rating.',
	'articlefeedback-alpha-featurefeedback' => 'This is a call to action link for users to provide feedback about the feature.  It takes them to a survey.',
	'articlefeedback-alpha-noratings' => 'This indicates the number of ratings that the article has received.
Note that PLURAL does not currently work in this message but defaults to the zero; it will work properly in the near future, so keep the calls in.',
	'articlefeedback-alpha-stalemessage-norevisioncount' => 'This is a message shown to the user when their ratings are "stale" and does NOT include the number of revisions. This is an ambiguous reason, and allows for us to have complicated staleness patterns. This is the preferred message.',
	'articlefeedback-alpha-results-show' => 'This is an explanatory control that, when clicked, will display hidden aggregate ratings.
The span tag gets rewritten in JavaScript to become a link.',
	'articlefeedback-alpha-results-hide' => 'This is a control that, when clicked, will hide the aggregate ratings.
The span tag gets rewritten in JavaScript to become a link.',
	'articlefeedback-alpha-survey-question-whyrated' => 'This is a question in the survey with checkboxes for the answers. The user can check multiple answers.',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'This is a possible answer for the "Why did you rate this article today?" survey question. The user can check this to fill out an answer that wasn\'t provided as a checkbox.
{{Identical|Other}}',
	'articlefeedback-alpha-survey-question-useful' => 'This is a question in the survey with "yes" and "no" (prefswitch-survey-true and prefswitch-survey-false) as possible answers.',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'This question appears when the user checks "no" for the "Do you believe the ratings provided are useful and clear?" question. The user can enter their answer in a text box.',
	'articlefeedback-alpha-survey-question-expert' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'This question appears when the user checks "no" for the "Do you consider yourself an expert?" question. The user can enter their answer in a text box.',
	'articlefeedback-alpha-survey-question-comments' => 'This is a question in the survey with a text box that the user can enter their answer in.',
	'articlefeedback-alpha-survey-submit' => 'This is the caption for the button that submits the survey.
{{Identical|Submit}}',
	'articlefeedback-alpha-survey-title' => 'This text appears in the title bar of the survey dialog.',
	'articlefeedback-alpha-survey-thanks' => 'This text appears when the user has successfully submitted the survey.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'articlefeedback' => 'Bladsybeoordeling',
	'articlefeedback-alpha-yourfeedback' => 'U terugvoer',
	'articlefeedback-alpha-submit' => 'Dien in',
	'articlefeedback-alpha-rating-wellsourced' => 'Goed van bronne voorsien:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutraal:',
	'articlefeedback-alpha-rating-completeness' => 'Volledig:',
	'articlefeedback-alpha-rating-readability' => 'Leesbaar:',
	'articlefeedback-alpha-articlerating' => 'Artikel gradering',
	'articlefeedback-alpha-error' => "'n Fout het voorgekom. 
Probeer asseblief later weer.",
	'articlefeedback-alpha-thanks' => 'Dankie! U graderings is gestoor.',
	'articlefeedback-alpha-featurefeedback' => 'Gee ons <span class="feedbacklink">terugvoer</span> oor hierdie funksie.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|beoordeling|beoordelings}})',
	'articlefeedback-alpha-results-show' => '(Resultate versteek. <span class="showlink">Wys</span> hulle.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Versteek resultate</span>)',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Ek wil bydrae tot {{site name}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Ek hou daarvan om my mening te deel',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Ander',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Hoekom?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Kan u u ondervinding beskryf?',
	'articlefeedback-alpha-survey-question-comments' => 'Het u enige addisionele kommentaar?',
	'articlefeedback-alpha-survey-submit' => 'Dien in',
	'articlefeedback-alpha-survey-title' => "Antwoord asseblief 'n paar vrae",
	'articlefeedback-alpha-survey-thanks' => 'Dankie dat u die opname ingevul het.',
);

/** Arabic (العربية)
 * @author Mido
 */
$messages['ar'] = array(
	'articlefeedback' => 'ملاحظات على المقال',
	'articlefeedback-desc' => 'ملاحظات على المقال',
	'articlefeedback-alpha-yourfeedback' => 'ملاحظاتك',
	'articlefeedback-alpha-pleaserate' => 'لطفا، تفضل بتقييم الصفحة أدناه.',
	'articlefeedback-alpha-submit' => 'أرسل',
	'articlefeedback-alpha-rating-wellsourced' => 'جودة المصادرة:',
	'articlefeedback-alpha-rating-neutrality' => 'الحياد:',
	'articlefeedback-alpha-rating-completeness' => 'الكمال:',
	'articlefeedback-alpha-rating-readability' => 'المقروئية:',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'articlefeedback-alpha-submit' => 'ܫܕܪ',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'ܐܚܪܢܐ',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'ܠܡܢܐ?',
	'articlefeedback-alpha-survey-submit' => 'ܫܕܪ',
);

/** Bashkir (Башҡорт)
 * @author Assele
 */
$messages['ba'] = array(
	'articlefeedback' => 'Мәҡәләне баһалау',
	'articlefeedback-desc' => 'Мәҡәләне баһалау (һынау өсөн)',
	'articlefeedback-alpha-yourfeedback' => 'Һеҙҙең баһаламағыҙ',
	'articlefeedback-alpha-pleaserate' => 'Зинһар, был мәҡәләне баһалар өсөн бер генә минут ваҡытығыҙҙы бүлегеҙ.',
	'articlefeedback-alpha-submit' => 'Ебәрергә',
	'articlefeedback-alpha-rating-wellsourced' => 'Сығанаҡтар:',
	'articlefeedback-alpha-rating-neutrality' => 'Битарафлыҡ:',
	'articlefeedback-alpha-rating-completeness' => 'Тулылыҡ:',
	'articlefeedback-alpha-rating-readability' => 'Уҡымлылыҡ:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Һеҙ был биттә етәрлек сығанаҡтар бар һәм сығанаҡтар ышаныслы, тип һанайһығыҙмы?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Һеҙ был бит ҡағылған һорау буйынса бөтә фекерҙәрҙе лә ғәҙел сағылдыра, тип һанайһығыҙмы?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Һеҙ был бит төп һорауҙарҙы етәрлек кимәлдә аса, тип һанайһығыҙмы?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Һеҙ был бит яҡшы ойошторолған һәм яҡшы яҙылған, тип һанайһығыҙмы?',
	'articlefeedback-alpha-articlerating' => 'Бит баһаһы',
	'articlefeedback-alpha-error' => 'Хата килеп сыҡты.
Зинһар, һуңынан ҡабатлап ҡарағыҙ.',
	'articlefeedback-alpha-thanks' => 'Рәхмәт! Һеҙҙең баһағыҙ һаҡланды.',
	'articlefeedback-alpha-featurefeedback' => 'Был мөмкинлек тураһында <span class="feedbacklink">үҙ фекерегеҙҙе</span> беҙгә ебәрегеҙ.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|баһа}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Был бит һеҙ ҡарап сыҡҡандан һуң ''мөхәррирләнгән''.
Һеҙ уны яңынан баһалай алаһығыҙ.",
	'articlefeedback-alpha-results-show' => '(Һөҙөмтәләр йәшерелгән. <span class="showlink">Күрһәтергә</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Һөҙөмтәләрҙе йәшерергә</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Зинһар, ниңә һеҙ бөгөн был биткә баһа биреүегеҙҙе беҙгә белгертегеҙ (бөтә тап килгән яуаптарҙы билдәләгеҙ):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Минең был биттең дөйөм баһаһына өлөш индергем килде.',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Минең баһам был биттең үҫешенә ыңғай йоғонто яһар, тип өмөт итәм.',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Минең {{SITENAME}} проектына өлөш индергем килде.',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Мин үҙ фекерем менән бүлешергә ярятам',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Бин бөгөн баһа ҡуйманым, әммә был мөмкинлек тураһында үҙ фекеремде ҡалдырырға теләйем',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Башҡа',
	'articlefeedback-alpha-survey-question-useful' => 'Ҡуйылған баһалар файҙалы һәм аңлайышлы, тип иҫәпләйһегеҙме?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Ниңә?',
	'articlefeedback-alpha-survey-question-expert' => 'Һеҙ үҙегеҙҙе был бит ҡағылған өлкәлә белгес тип иҫәпләйһегеҙме?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Һеҙ үҙегеҙҙең баһағыҙҙы тасуирлай алаһығыҙмы?',
	'articlefeedback-alpha-survey-question-comments' => 'Һеҙҙең берәй төрлө өҫтәмә иҫкәрмәләрегеҙ бармы?',
	'articlefeedback-alpha-survey-submit' => 'Ебәрергә',
	'articlefeedback-alpha-survey-title' => 'Зинһар, бер нисә һорауға яуап бирегеҙ',
	'articlefeedback-alpha-survey-thanks' => 'Һорауҙарға яуап биреүегеҙ өсөн рәхмәт.',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'articlefeedback' => 'Адзнака артыкулаў',
	'articlefeedback-desc' => 'Адзнака артыкулаў (пачатковая вэрсія)',
	'articlefeedback-alpha-yourfeedback' => 'Ваш водгук',
	'articlefeedback-alpha-pleaserate' => 'Калі ласка, знайдзіце час, каб адзначыць старонку ўнізе.',
	'articlefeedback-alpha-submit' => 'Даслаць',
	'articlefeedback-alpha-rating-wellsourced' => 'Спасылкі на крыніцы:',
	'articlefeedback-alpha-rating-neutrality' => 'Нэўтральнасьць:',
	'articlefeedback-alpha-rating-completeness' => 'Скончанасьць:',
	'articlefeedback-alpha-rating-readability' => 'Лёгкасьць чытаньня:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Вы лічыце, што гэты артыкул мае дастаткова цытатаў, і яны спасылаюцца на крыніцы, якія заслугоўваюць даверу?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Вы лічыце, што на гэтай старонцы адлюстраваныя усе пункты гледжаньня на пытаньне?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Вы лічыце, што гэтая старонка раскрывае асноўныя пытаньні тэмы як сьлед?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Вы лічыце, што гэтая старонка добра арганізаваная і добра напісаная?',
	'articlefeedback-alpha-articlerating' => 'Адзнака старонкі',
	'articlefeedback-alpha-error' => 'Узьнікла памылка.
Калі ласка, паспрабуйце потым.',
	'articlefeedback-alpha-thanks' => 'Дзякуй! Вашая адзнака была захаваная.',
	'articlefeedback-alpha-featurefeedback' => 'Паведаміце нам <span class="feedbacklink">Вашае меркаваньне</span> пра гэтую магчымасьць.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|адзнака|адзнакі|адзнакаў}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Гэтая старонка была ''рэдагаваная'' пасьля Вашага апошняга рэцэнзаваная.
Верагодна, Вы жадаеце адзначыць яе яшчэ раз.",
	'articlefeedback-alpha-results-show' => '(Вынікі схаваныя. <span class="showlink">Паказаць</span> іх.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Схаваць вынікі</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Калі ласка, паведаміце нам, чаму Вы адзначылі сёньня гэтую старонку (пазначце ўсе падыходзячыя варыянты):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Я жадаю зрабіць унёсак у агульную адзнаку старонкі',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Я спадзяюся, што мая адзнака пазытыўна паўплывае на разьвіцьцё старонкі',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Я жадаю садзейнічаць разьвіцьцю {{GRAMMAR:родны|{{SITENAME}}}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Я жадаю падзяліцца маім пунктам гледжаньня',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Я не адзначыў сёньня, але хацеў даць водгук пра гэтую магчымасьць',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Іншае',
	'articlefeedback-alpha-survey-question-useful' => 'Вы верыце, што пададзеныя адзнакі карысныя і зразумелыя?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Чаму?',
	'articlefeedback-alpha-survey-question-expert' => 'Вы лічыце сябе экспэртам у галіне, якая датычыцца тэма гэтай старонцы?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Вы можаце апісаць узровень Вашых ведаў?',
	'articlefeedback-alpha-survey-question-comments' => 'Вы маеце якія-небудзь дадатковыя камэнтары?',
	'articlefeedback-alpha-survey-submit' => 'Даслаць',
	'articlefeedback-alpha-survey-title' => 'Калі ласка, адкажыце на некалькі пытаньняў',
	'articlefeedback-alpha-survey-thanks' => 'Дзякуй за адказы на пытаньні.',
	'articlefeedback-beta-form-tab-label' => 'Даць водгук',
	'articlefeedback-beta-form-panel-title' => 'Ваш водгук',
	'articlefeedback-beta-form-panel-instructions' => 'Калі ласка, знайдзіце час, каб адзначыць гэтую старонку.',
	'articlefeedback-beta-form-panel-notice' => 'Вашая адзнака скончыцца праз некаторы час.',
	'articlefeedback-beta-form-panel-submit' => 'Даслаць водгук',
	'articlefeedback-beta-report-tab-label' => 'Паказаць вынікі',
	'articlefeedback-beta-report-panel-title' => 'Вынікі водгуку',
	'articlefeedback-beta-field-wellsourced-label' => 'Са спасылкамі на крыніцы',
	'articlefeedback-beta-field-wellsourced-tip' => 'Вы лічыце, што гэтая старонка мае дастаткова цытатаў, і яны паходзяць з крыніц вартых даверу?',
	'articlefeedback-beta-field-complete-label' => 'Скончанасьць',
	'articlefeedback-beta-field-complete-tip' => 'Вы лічыце, што гэтая старонка раскрывае асноўныя пытаньні тэмы як сьлед?',
	'articlefeedback-beta-field-neutral-label' => 'Нэўтральнасьць',
	'articlefeedback-beta-field-neutral-tip' => 'Вы лічыце, што на гэтай старонцы адлюстраваныя усе пункты гледжаньня на пытаньне?',
	'articlefeedback-beta-field-readable-label' => 'Лёгкасьць чытаньня',
	'articlefeedback-beta-field-readable-tip' => 'Вы лічыце, што гэтая старонка добра арганізаваная і добра напісаная?',
);

/** Bulgarian (Български)
 * @author Turin
 */
$messages['bg'] = array(
	'articlefeedback-alpha-submit' => 'Изпращане',
	'articlefeedback-alpha-articlerating' => 'Оценка на страницата',
	'articlefeedback-alpha-error' => 'Възникна грешка. 
Опитайте по-късно.',
	'articlefeedback-alpha-thanks' => 'Благодарим ви! Вашите оценки са записани.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|оценка|оценки}})',
	'articlefeedback-alpha-results-show' => '(Резултатите се скрити. <span class="showlink">Показване</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Скриване на резултатите</span>)',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Исках да допринеса за общата оценка на страницата',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Надявам се, че оценката ми ще се отрази положително върху развитието на страницата',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Исках да допринеса за {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Харесва ми да споделям мнението си',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Друго',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Защо?',
	'articlefeedback-alpha-survey-question-comments' => 'Имате ли някакви допълнителни коментари?',
	'articlefeedback-alpha-survey-submit' => 'Изпращане',
	'articlefeedback-alpha-survey-title' => 'Моля, отговорете на няколко въпроса',
	'articlefeedback-alpha-survey-thanks' => 'Благодарим ви, че попълнихте въпросника!',
);

/** Breton (Brezhoneg)
 * @author Fulup
 * @author Gwendal
 * @author Y-M D
 */
$messages['br'] = array(
	'articlefeedback' => 'Priziadenn pennadoù',
	'articlefeedback-desc' => 'Priziadenn pennadoù (stumm stur)',
	'articlefeedback-alpha-yourfeedback' => 'Ho soñjoù',
	'articlefeedback-alpha-pleaserate' => 'Trugarez da gemer amzer evit priziañ ar bajenn amañ dindan.',
	'articlefeedback-alpha-submit' => 'Kas',
	'articlefeedback-alpha-rating-wellsourced' => 'Titouret mat :',
	'articlefeedback-alpha-rating-neutrality' => 'Diberzh :',
	'articlefeedback-alpha-rating-completeness' => 'Graet :',
	'articlefeedback-alpha-rating-readability' => 'Lennus :',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => "Hag-eñ e soñjoc'h emañ ar bajenn-mañ gant trawalc'h a arroudennoù ? Ha diwar mammennoù sirius e teuont ?",
	'articlefeedback-alpha-rating-neutrality-tooltip' => "Hag-eñ e soñjoc'h e pled ar bajenn-mañ d'un doare reizh ha gant ur sav-gwel ar sujed ?",
	'articlefeedback-alpha-rating-completeness-tooltip' => "Hag-eñ e soñjoc'h he deus ar bajenn-mañ goloet temoù pouezusañ ar sujed ?",
	'articlefeedback-alpha-rating-readability-tooltip' => "Hag-eñ e soñjoc'h emañ ar bajenn-mañ aozet mat ha skrivet mat ?",
	'articlefeedback-alpha-articlerating' => 'Priziadenn ar bajenn',
	'articlefeedback-alpha-error' => "Ur fazi zo bet.
Klaskit en-dro diwezhatoc'h.",
	'articlefeedback-alpha-thanks' => 'Trugarez ! Ho priziadenn zo bet enrollet.',
	'articlefeedback-alpha-featurefeedback' => 'Roit deomp ho <span class="feedbacklink">soñjoù</span> diwar-benn an arc\'hweladur-mañ.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|briziadenn|priziadenn}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Ar bajenn-mañ a zo bet ''adwelet'' abaoe ho priziadenn.
Priziañ anezhi en-dro ho pefe c'hoant marteze.",
	'articlefeedback-alpha-results-show' => '(Disoc\'hoù kuzhet. <span class="showlink">Diskouez</span> anezho.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Kuzhat an disoc\'hoù</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => "Roit deomp an abeg d'ar perak ho peus priziet ar bajenn-mañ hiziv (kevaskit an abegoù gwirion) :",
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => "C'hoant em boa reiñ sikour evit priziañ d'un doare hollek ar bajenn",
	'articlefeedback-alpha-survey-answer-whyrated-development' => "Spi am eus e servijo d'un doare pozitivel ma friziadenn evit dioreiñ ar bajenn",
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => "C'hoant em boa kenober da {{SITENAME}}",
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Plijout a ra din reiñ ma ali',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => "N'am eus ket priziet ar bajenn hiziv, reiñ ma soñj diwar-benn an arc'hweladur an hini eo",
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'All',
	'articlefeedback-alpha-survey-question-useful' => "Hag-eñ e soñjoc'h ez eo ar briziadennoù roet talvoudus ha sklaer ?",
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Perak ?',
	'articlefeedback-alpha-survey-question-expert' => "Hag-eñ e soñjoc'h emaoc'h arbennigour war an dachenn pledet er bajenn ?",
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Gallout a rit diskrivañ ho prizacherezh ?',
	'articlefeedback-alpha-survey-question-comments' => 'Evezhiadennoù all ho pefe ?',
	'articlefeedback-alpha-survey-submit' => 'Kas',
	'articlefeedback-alpha-survey-title' => "Trugarez da respont d'un nebeut goulennoù",
	'articlefeedback-alpha-survey-thanks' => 'Trugarez da vezañ leuniet ar goulennaoueg.',
	'articlefeedback-beta-form-tab-label' => 'Kas evezhiadennoù',
	'articlefeedback-beta-form-panel-title' => 'Ho soñj',
	'articlefeedback-beta-form-panel-instructions' => 'Trugarez da gemer un tamm amzer da briziañ ar bajenn-mañ.',
	'articlefeedback-beta-form-panel-notice' => "Gant an amzer ez aio da get hoc'h evezhiadennoù.",
	'articlefeedback-beta-form-panel-submit' => 'Kas an evezhiadenn',
	'articlefeedback-beta-report-tab-label' => "Diskouez an disoc'hoù",
	'articlefeedback-beta-report-panel-title' => "Disoc'hoù an evezhiadenn",
	'articlefeedback-beta-field-wellsourced-label' => 'Titouret mat',
	'articlefeedback-beta-field-wellsourced-tip' => "Ha soñjal a ra deoc'h ez eus arroudennoù a-walc'h er bajenn-mañ ? Ha diwar mammennoù sirius e teuont ?",
	'articlefeedback-beta-field-complete-label' => 'Graet',
	'articlefeedback-beta-field-complete-tip' => "Ha soñjal a ra deoc'h e vez graet mat tro temoù pennañ ar sujed ?",
	'articlefeedback-beta-field-neutral-label' => 'Neptu',
	'articlefeedback-beta-field-neutral-tip' => "Ha soñjal a ra deoc'h e vez kavet displeget er bajenn-mañ, en un doare reizh a-walc'h, holl tuioù ar sujed ?",
	'articlefeedback-beta-field-readable-label' => 'Lennus',
	'articlefeedback-beta-field-readable-tip' => "Ha soñjal a ra deoc'h eo skrivet brav ha frammet mat ar bajenn-mañ ?",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'articlefeedback' => 'Ocjenjivanje članaka',
	'articlefeedback-desc' => 'Ocjenjivanje članaka (probna verzija)',
	'articlefeedback-alpha-yourfeedback' => 'Vaše povratne informacije',
	'articlefeedback-alpha-pleaserate' => 'Molimo odvojite trenutak vremena da ispod ocijenite ovu stranicu.',
	'articlefeedback-alpha-submit' => 'Pošalji',
	'articlefeedback-alpha-rating-wellsourced' => 'Dobro referencirano:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutralnost:',
	'articlefeedback-alpha-rating-completeness' => 'Završenost:',
	'articlefeedback-alpha-rating-readability' => 'Čitljivost:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Da li smatrate da ova stranica ima dovoljno izvora i da su oni iz provjerljivih izvora?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Da li smatrate da ova stranica prikazuje neutralni prikaz iz svih perspektiva o temi?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Da li mislite da ova stranica pokriva osnovna područja teme koja bi trebala?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Da li mislite da je ova stranica dobro organizirana i dobro napisana?',
	'articlefeedback-alpha-articlerating' => 'Rejting stranice',
	'articlefeedback-alpha-error' => 'Desila se greška.
Molimo pokušajte kasnije.',
	'articlefeedback-alpha-thanks' => 'Hvala! Vaše ocjene su sačuvane.',
	'articlefeedback-alpha-featurefeedback' => 'Dajte nam <span class="feedbacklink">povratne podatke</span> o ovoj mogućnosti.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|ocjena|ocjene|ocjena}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Ova stranica je ''provjerena'' od kako ste je posljednji put pregledali.
Da li je želite ocijeniti ponovo.",
	'articlefeedback-alpha-results-show' => '(Rezultati sakriveni. <span class="showlink">Prikaži</span> ih.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Sakrij rezultate</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Molimo recite nam zašto se ocijenili danas ovu stranicu (označite sve koje se može primijeniti):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Želio sam da pridonesem sveukupnoj ocjeni stranice',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Nadam se da će moja ocjena imati pozitivan odjek na uređivanje stranice',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Želim da pridonosim na projektu {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Volim dijeliti svoje mišljenje',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Nisam dao ocjene danas, ali sam želio da dadnem povratne podatke o mogućnostima',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Ostalo',
	'articlefeedback-alpha-survey-question-useful' => 'Da li vjerujete da su date ocjene korisne i jasne?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Zašto?',
	'articlefeedback-alpha-survey-question-expert' => 'Da li Vi sebe smatrate ekspertom u oblasti o kojoj ovaj članak piše?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Možete li opisati svoju eksperizu?',
	'articlefeedback-alpha-survey-question-comments' => 'Da li imate dodatnih komentara?',
	'articlefeedback-alpha-survey-submit' => 'Pošalji',
	'articlefeedback-alpha-survey-title' => 'Molimo odgovorite na nekoliko pitanja',
	'articlefeedback-alpha-survey-thanks' => 'Hvala vam na popunjavanju ankete.',
	'articlefeedback-beta-form-tab-label' => 'Pošaljite povratne informacije',
	'articlefeedback-beta-form-panel-title' => 'Vaše povratne informacije',
	'articlefeedback-beta-form-panel-instructions' => 'Molimo odvojite trenutak vremena da ocijenite ovu stranicu.',
	'articlefeedback-beta-form-panel-notice' => 'Vaša ocjena će isteći nakon određenog vremena.',
	'articlefeedback-beta-form-panel-submit' => 'Pošalji povratne informacije',
	'articlefeedback-beta-report-tab-label' => 'Pokaži rezultate',
	'articlefeedback-beta-report-panel-title' => 'Rezultati povratnih informacija',
	'articlefeedback-beta-field-wellsourced-label' => 'Dobro referencirano',
	'articlefeedback-beta-field-wellsourced-tip' => 'Da li smatrate da ova stranica ima dovoljno izvora i da su oni iz provjerljivih izvora?',
	'articlefeedback-beta-field-complete-label' => 'Završeno',
	'articlefeedback-beta-field-complete-tip' => 'Da li mislite da ova stranica pokriva osnovna područja teme koja bi trebala?',
	'articlefeedback-beta-field-neutral-label' => 'Neutralno',
	'articlefeedback-beta-field-neutral-tip' => 'Da li smatrate da ova stranica prikazuje neutralni prikaz iz svih perspektiva o temi?',
	'articlefeedback-beta-field-readable-label' => 'Čitljivo',
	'articlefeedback-beta-field-readable-tip' => 'Da li mislite da je ova stranica dobro organizirana i dobro napisana?',
);

/** Catalan (Català)
 * @author Solde
 */
$messages['ca'] = array(
	'articlefeedback-alpha-submit' => 'Enviar',
	'articlefeedback-alpha-rating-neutrality' => 'Neutre:',
	'articlefeedback-alpha-rating-completeness' => 'Completar:',
	'articlefeedback-alpha-rating-readability' => 'Llegible:',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Altres',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Per què?',
	'articlefeedback-alpha-survey-question-expert' => 'Et consideres un expert en el camp que aquesta pàgina cobreix?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Pots descriure la teva experiència?',
	'articlefeedback-alpha-survey-question-comments' => 'Tens algun comentari addicional?',
	'articlefeedback-alpha-survey-submit' => 'Trametre',
	'articlefeedback-alpha-survey-title' => 'Si us plau, contesti algunes preguntes',
	'articlefeedback-alpha-survey-thanks' => "Gràcies per omplir l'enquesta.",
);

/** Czech (Česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'articlefeedback' => 'Hodnocení článku',
	'articlefeedback-desc' => 'Hodnocení článků (pilotní verze)',
	'articlefeedback-alpha-yourfeedback' => 'Váš názor',
	'articlefeedback-alpha-pleaserate' => 'Věnujte prosím chvilku ohodnocení této stránky.',
	'articlefeedback-alpha-submit' => 'Odeslat',
	'articlefeedback-alpha-rating-wellsourced' => 'Podloženost:',
	'articlefeedback-alpha-rating-neutrality' => 'Nezaujatost:',
	'articlefeedback-alpha-rating-completeness' => 'Úplnost:',
	'articlefeedback-alpha-rating-readability' => 'Čitelnost:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Máte pocit, že tato stránka dostatečně odkazuje na zdroje a použité zdroje jsou důvěryhodné?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Máte pocit, že tato stránka spravedlivě pokrývá všechny pohledy na dané téma?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Máte pocit, že tato stránka pokrývá všechny důležité části tématu?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Máte pocit, že tato stránka je správně organizována a dobře napsána?',
	'articlefeedback-alpha-articlerating' => 'Hodnocení stránky',
	'articlefeedback-alpha-error' => 'Došlo k chybě.
Zkuste to prosím později.',
	'articlefeedback-alpha-thanks' => 'Děkujeme! Vaše hodnocení bylo uloženo.',
	'articlefeedback-alpha-featurefeedback' => 'Sdělte nám svůj <span class="feedbacklink">názor</span> na tuto funkci.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|hodnocení|hodnocení}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Od chvíle, co jste stránku {{GENDER:|hodnotil|hodnotila|hodnotili}}, byla ''upravena''.
Možná ji budete chtít ohodnotit znovu.",
	'articlefeedback-alpha-results-show' => '(Výsledky jsou skryty. <span class="showlink">Zobrazit</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Skrýt výsledky</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Proč jste dnes hodnotili tuto stránku (zaškrtněte všechny platné možnosti)?',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Chtěl jsem ovlivnit výsledné ohodnocení stránky',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Doufám, že mé hodnocení pozitivně ovlivní budoucí vývoj stránky',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Chtěl jsem pomoci {{grammar:3sg|{{SITENAME}}}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Rád sděluji svůj názor',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Dnes jsem nehodnotil, ale chtěl jsem poskytnout svůj názor na tuto funkci',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Jiný důvod',
	'articlefeedback-alpha-survey-question-useful' => 'Myslíte si, že poskytovaná hodnocení jsou užitečná a pochopitelná?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Proč?',
	'articlefeedback-alpha-survey-question-expert' => 'Považujete se za odborníka na téma, o kterém tato stránka pojednává?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Můžete popsat svou odbornost?',
	'articlefeedback-alpha-survey-question-comments' => 'Máte nějaké další komentáře?',
	'articlefeedback-alpha-survey-submit' => 'Odeslat',
	'articlefeedback-alpha-survey-title' => 'Odpovězte prosím na několik otázek',
	'articlefeedback-alpha-survey-thanks' => 'Děkujeme za vyplnění průzkumu.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'articlefeedback' => 'Artikeleinschätzung',
	'articlefeedback-desc' => 'Ermöglicht die Einschätzung von Artikeln (Pilotversion)',
	'articlefeedback-alpha-yourfeedback' => 'Deine Einschätzung',
	'articlefeedback-alpha-pleaserate' => 'Bitte nimm dir kurz Zeit, diesen Artikel einzuschätzen.',
	'articlefeedback-alpha-submit' => 'Speichern',
	'articlefeedback-alpha-rating-wellsourced' => 'Gut belegt:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Vollständig:',
	'articlefeedback-alpha-rating-readability' => 'Verständlich:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Hast du den Eindruck, dass dieser Artikel über genügend Quellenangaben verfügt und diese zudem aus vertrauenswürdigen Quellen stammen?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Hast du den Eindruck, dass dieser Artikel eine ausgewogene Darstellung aller mit dessen Inhalt verbundenen Aspekte enthält?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Hast du den Eindruck, dass dieser Artikel alle wichtigen Aspekte enthält, die mit dessen Inhalt zusammenhängen?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Hast du den Eindruck, dass dieser Artikel gut strukturiert sowie geschrieben wurde?',
	'articlefeedback-alpha-articlerating' => 'Einschätzung des Artikels',
	'articlefeedback-alpha-error' => 'Ein Fehler ist aufgetreten.
Bitte versuche es später erneut.',
	'articlefeedback-alpha-thanks' => 'Vielen Dank! Deine Einschätzung wurde gespeichert.',
	'articlefeedback-alpha-featurefeedback' => 'Gib uns bitte eine <span class="feedbacklink">Rückmeldung</span> zu dieser Möglichkeit der Einschätzung eines Artikels.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|Einschätzung|Einschätzungen}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Dieser Artikel wurde seit deiner letzten Einschätzung ''bearbeitet''.
Vielleicht möchtest du ihn erneut einschätzen.",
	'articlefeedback-alpha-results-show' => '(Ergebnisse sind ausgeblendet. <span class="showlink">Einblenden</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Ergebnisse ausblenden</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Bitte lasse uns wissen, warum du diesen Artikel heute eingeschätzt hast (Zutreffendes bitte ankreuzen):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Ich wollte mich an der Einschätzung des Artikels beteiligen',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Ich hoffe, dass meine Einschätzung die künftige Entwicklung des Artikels positiv beeinflusst',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Ich wollte mich an {{SITENAME}} beteiligen',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Ich teile meine Einschätzung gerne mit',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Ich habe heute keine Einschätzung vorgenommen, wollte allerdings eine Rückmeldung zu dieser Funktion zur Einschätzung des Artikels geben',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Anderes',
	'articlefeedback-alpha-survey-question-useful' => 'Glaubst du, dass die abgegebenen Einschätzungen nützlich und verständlich sind?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Warum?',
	'articlefeedback-alpha-survey-question-expert' => 'Hältst du dich für kompetent auf dem Gebiet, mit dem sich der Inhalt dieses Artikels beschäftigt?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Kannst du deine Sachkenntnisse beschreiben?',
	'articlefeedback-alpha-survey-question-comments' => 'Hast du noch weitere Anmerkungen?',
	'articlefeedback-alpha-survey-submit' => 'Speichern',
	'articlefeedback-alpha-survey-title' => 'Bitte beantworte uns ein paar Fragen',
	'articlefeedback-alpha-survey-thanks' => 'Vielen Dank für deine Rückmeldung.',
	'articlefeedback-beta-form-tab-label' => 'Einschätzung abgeben',
	'articlefeedback-beta-form-panel-title' => 'Deine Einschätzung',
	'articlefeedback-beta-form-panel-instructions' => 'Bitte nimm dir kurz Zeit, diesen Artikel einzuschätzen.',
	'articlefeedback-beta-form-panel-notice' => 'Deine Einschätzungen werden nach einer Weile verfallen.',
	'articlefeedback-beta-form-panel-submit' => 'Einschätzung übermitteln',
	'articlefeedback-beta-report-tab-label' => 'Ergebnisse anzeigen',
	'articlefeedback-beta-report-panel-title' => 'Ergebnisse der Einschätzungen',
	'articlefeedback-beta-field-wellsourced-label' => 'Gut belegt',
	'articlefeedback-beta-field-wellsourced-tip' => 'Hast du den Eindruck, dass dieser Artikel über genügend Quellenangaben verfügt und diese zudem aus vertrauenswürdigen Quellen stammen?',
	'articlefeedback-beta-field-complete-label' => 'Vollständig',
	'articlefeedback-beta-field-complete-tip' => 'Hast du den Eindruck, dass dieser Artikel alle wichtigen Aspekte enthält, die mit dessen Inhalt zusammenhängen?',
	'articlefeedback-beta-field-neutral-label' => 'Neutral',
	'articlefeedback-beta-field-neutral-tip' => 'Hast du den Eindruck, dass dieser Artikel eine ausgewogene Darstellung aller mit dessen Inhalt verbundenen Aspekte enthält?',
	'articlefeedback-beta-field-readable-label' => 'Verständlich',
	'articlefeedback-beta-field-readable-tip' => 'Hast du den Eindruck, dass dieser Artikel gut strukturiert sowie geschrieben wurde?',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author Catrope
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'articlefeedback-alpha-yourfeedback' => 'Ihre Einschätzung',
	'articlefeedback-alpha-pleaserate' => 'Bitte nehmen Sie sich kurz Zeit, diesen Artikel einzuschätzen.',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Haben Sie den Eindruck, dass dieser Artikel über genügend Quellenangaben verfügt und diese zudem aus vertrauenswürdigen Quellen stammen?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Haben Sie den Eindruck, dass dieser Artikel eine ausgewogene Darstellung aller mit dessen Inhalt verbundenen Aspekte enthält?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Haben Sie den Eindruck, dass dieser Artikel alle wichtigen Aspekte enthält, die mit dessen Inhalt zusammenhängen?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Haben Sie den Eindruck, dass dieser Artikel gut strukturiert sowie geschrieben wurde?',
	'articlefeedback-alpha-error' => 'Ein Fehler ist aufgetreten.
Bitte versuchen Sie es später erneut.',
	'articlefeedback-alpha-thanks' => 'Vielen Dank! Ihre Einschätzung wurde gespeichert.',
	'articlefeedback-alpha-featurefeedback' => 'Geben Sie uns bitte eine <span class="feedbacklink">Rückmeldung</span> zu dieser Möglichkeit der Einschätzung eines Artikels.',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Dieser Artikel wurde seit Ihrer letzten Einschätzung ''bearbeitet''.
Vielleicht möchten Sie ihn erneut einschätzen.",
	'articlefeedback-alpha-survey-question-whyrated' => 'Bitte lassen Sie uns wissen, warum Sie diesen Artikel heute eingeschätzt haben (Zutreffendes bitte ankreuzen):',
	'articlefeedback-alpha-survey-question-useful' => 'Glauben Sie, dass die abgegebenen Einschätzungen nützlich und verständlich sind?',
	'articlefeedback-alpha-survey-question-expert' => 'Halten Sie sich für kompetent auf dem Gebiet, mit dem sich der Inhalt dieses Artikels beschäftigt?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Können Sie Ihre Sachkenntnisse beschreiben?',
	'articlefeedback-alpha-survey-question-comments' => 'Haben Sie noch weitere Anmerkungen?',
	'articlefeedback-alpha-survey-title' => 'Bitte beantworten Sie uns ein paar Fragen',
	'articlefeedback-alpha-survey-thanks' => 'Vielen Dank für Ihre Rückmeldung.',
);

/** Greek (Ελληνικά)
 * @author Glavkos
 */
$messages['el'] = array(
	'articlefeedback' => 'Αξιολόγηση Άρθρου',
	'articlefeedback-desc' => 'Αξιολόγηση Άρθρου (πιλοτική έκδοση)',
	'articlefeedback-alpha-yourfeedback' => 'Η ανατροφοδότησή σας',
	'articlefeedback-alpha-submit' => 'Υποβολή',
	'articlefeedback-alpha-rating-wellsourced' => 'Καλά Τεκμηριωμένο',
	'articlefeedback-alpha-rating-neutrality' => 'Ουδέτερο:',
	'articlefeedback-alpha-rating-completeness' => 'Ολοκλήρωση:',
	'articlefeedback-alpha-rating-readability' => 'Αναγνώσιμο:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Αισθάνεστε ότι αυτή η σελίδα έχει επαρκείς παραπομπές και ότι αυτές οι παραπομπές προέρχονται από αξιόπιστες πηγές;',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Πιστεύετε ότι αυτή η σελίδα εμφανίζει μια δίκαιη εκπροσώπηση όλων των απόψεων σχετικά με το θέμα;',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Πιστεύετε ότι αυτή η σελίδα καλύπτει  στις βασικές θεματικές περιοχές που θα έπρεπε;',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Πιστεύετε ότι αυτή η σελίδα είναι καλά οργανωμένη και καλογραμμένη;',
	'articlefeedback-alpha-articlerating' => 'βαθμολόγηση Σελίδας',
	'articlefeedback-alpha-error' => 'Παρουσιάστηκε ένα σφάλμα.
Παρακαλώ δοκιμάστε ξανά αργότερα.',
	'articlefeedback-alpha-thanks' => 'Ευχαριστώ! Οι βαθμολογήσεις  σας έχουν αποθηκευτεί.',
	'articlefeedback-alpha-featurefeedback' => 'Δώστε μας<span class="feedbacklink">ανατροφοδότηση</span> σχετικά με αυτό το χαρακτηριστικό.',
);

/** Esperanto (Esperanto)
 * @author Eliovir
 * @author Yekrats
 */
$messages['eo'] = array(
	'articlefeedback' => 'Takso de artikolo',
	'articlefeedback-desc' => 'Artikola takso (testa versio)',
	'articlefeedback-alpha-yourfeedback' => 'Via komento',
	'articlefeedback-alpha-pleaserate' => 'Bonvolu atendi momenton por aprezi ĉi tiun suban.',
	'articlefeedback-alpha-submit' => 'Enigi',
	'articlefeedback-alpha-rating-wellsourced' => 'Bone dokumentita:',
	'articlefeedback-alpha-rating-neutrality' => 'Neŭtrala:',
	'articlefeedback-alpha-rating-completeness' => 'Kompleta:',
	'articlefeedback-alpha-rating-readability' => 'Legebla:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Ĉu vi opinias ke ĉi tiu paĝo havas sufiĉajn citaĵojn kaj ties citaĵoj estas el fidindaj fontoj?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Ĉu vi opinias ke ĉi tiu paĝo donas justan prezenton de ĉiuj perspektivoj de la temo?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Ĉu vi opinias ke ĉi tiu paĝo traktas la esencajn traktendajn tempunktojn?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Ĉu vi opinias ke ĉi tiu paĝo estas bone organizita kaj bone verkita?',
	'articlefeedback-alpha-articlerating' => 'Taksado de paĝo',
	'articlefeedback-alpha-error' => 'Eraro okazis.
Bonvolu reprovi poste.',
	'articlefeedback-alpha-thanks' => 'Dankon! Viaj taksoj estis konservitaj.',
	'articlefeedback-alpha-featurefeedback' => 'Doni al ni <span class="feedbacklink">komentojn</span> pri ĉi tiu ilo.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|takso|taksoj}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Ĉi tiu paĝo estis ''revizita'' ekde vi laste revizis ĝin.
Vi eble volus taksi ĝin denove.",
	'articlefeedback-alpha-results-show' => '(Rezultoj kaŝitaj. <span class="showlink">Montri</span> ilin.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Kaŝi rezultojn</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Bonvolu informigi nin  kial vi taksis ĉi tiun paĝon hodiaŭ (marku ĉion taŭgan):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Mi volis kontribui al la suma taksado de la paĝo',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Mi esperas ke mia takso pozitive influus la disvolvadon de la paĝo',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Mi volis kontribui al {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Plaĉas al mi doni mian opinion.',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Mi ne provizas taksojn hodiaŭ, se volis doni komentojn pri la ilo',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Alia',
	'articlefeedback-alpha-survey-question-useful' => 'Ĉu vi konsideras ke la taksoj provizitaj estas utilaj kaj klara?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Kial?',
	'articlefeedback-alpha-survey-question-expert' => 'Ĉu vi konsideras ke vi mem estas spertulo en la fako kiu tiun paĝo temas?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Bonvolu priskribi vian fako-sperton',
	'articlefeedback-alpha-survey-question-comments' => 'Ĉu vi havas iujn suplementajn komentojn?',
	'articlefeedback-alpha-survey-submit' => 'Enigi',
	'articlefeedback-alpha-survey-title' => 'Bonvolu respondi al kelkaj demandoj',
	'articlefeedback-alpha-survey-thanks' => 'Dankon pro plenumante la enketon.',
);

/** Spanish (Español)
 * @author Locos epraix
 * @author Translationista
 */
$messages['es'] = array(
	'articlefeedback' => 'Evaluación del artículo',
	'articlefeedback-desc' => 'Evaluación del artículo (versión de pruebas)',
	'articlefeedback-alpha-yourfeedback' => 'Tus comentarios',
	'articlefeedback-alpha-pleaserate' => 'Por favor, dedica unos segundos a evaluar esta página.',
	'articlefeedback-alpha-submit' => 'Enviar',
	'articlefeedback-alpha-rating-wellsourced' => 'Bien documentado:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutro:',
	'articlefeedback-alpha-rating-completeness' => 'Completo:',
	'articlefeedback-alpha-rating-readability' => 'Legible:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => '¿Consideras que esta página tiene suficientes citas y que estas provienen de fuentes fiables?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => '¿Consideras que esta página muestra una arepresentación justa de todas las perspectivas posibles en este tema?',
	'articlefeedback-alpha-rating-completeness-tooltip' => '¿Consideras que esta página aborda los temas esenciales del área que debería?',
	'articlefeedback-alpha-rating-readability-tooltip' => '¿Consideras que esta página está bien estructurada y bien escrita?',
	'articlefeedback-alpha-articlerating' => 'Valoración de página',
	'articlefeedback-alpha-error' => 'Ha ocurrido un error. 
 Por favor, inténtalo de nuevo más tarde.',
	'articlefeedback-alpha-thanks' => '¡Gracias! Tu evaluación se ha guardado.',
	'articlefeedback-alpha-featurefeedback' => 'Quisiéramos tus <span class="feedbacklink">comentarios</span> acerca de esta función.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|evaluación|evaluaciones}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Esta página ha sido ''revisada'' desde la última vez que la valoraste.
Quizá quisieras valorarla de nuevo.",
	'articlefeedback-alpha-results-show' => '(Resultados escondido. <span class="showlink">Mostrarlos</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Esconder resultados</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Por favor, dinos por qué has valorado esta página hoy (marca todas las opciones que correspondan):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Quería contribuir a la calificación global de la página',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Espero que mi calificación afecte positivamante el desarrollo de la página',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Quería contribuir a {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Me gusta compartir mi opinión',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Hoy no evalué ninguna página. Sólo quise dejar mis comentarios sobre la funcionalidad.',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Otro',
	'articlefeedback-alpha-survey-question-useful' => '¿Crees las valoraciones proporcionadas son útiles y claras?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => '¿Por qué?',
	'articlefeedback-alpha-survey-question-expert' => '¿Te consideras un experto en el campo del que trata esta página?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => '¿Puedes describir tu nivel de especialización?',
	'articlefeedback-alpha-survey-question-comments' => '¿Tienes algún comentario adicional?',
	'articlefeedback-alpha-survey-submit' => 'Enviar',
	'articlefeedback-alpha-survey-title' => 'Por favor, contesta algunas preguntas',
	'articlefeedback-alpha-survey-thanks' => 'Gracias por completar la encuesta.',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'articlefeedback' => 'Artikli hindamine',
	'articlefeedback-desc' => 'Artikli hindamine (prooviversioon)',
	'articlefeedback-alpha-yourfeedback' => 'Sinu tagasiside',
	'articlefeedback-alpha-pleaserate' => 'Palun leia mõni hetk allpool oleva lehekülje hindamiseks.',
	'articlefeedback-alpha-submit' => 'Saada',
	'articlefeedback-alpha-rating-wellsourced' => 'Viidatus:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutraalne:',
	'articlefeedback-alpha-rating-completeness' => 'Täielikkus:',
	'articlefeedback-alpha-rating-readability' => 'Loetavus:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Kas leheküljel on piisavalt viiteid ja kas need pärinevad usalduväärsetest allikatest.',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Kas kõik antud küsimuse tahud on leheküljel võrdselt esindatud?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Kas see lehekülg annab teemast piisava ülevaate?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Kas see lehekülg on hästi üles ehitatud ja kirjutatud?',
	'articlefeedback-alpha-articlerating' => 'Lehekülje hinnang',
	'articlefeedback-alpha-error' => 'Ilmnes tõrge. 
Palun proovi hiljem uuesti.',
	'articlefeedback-alpha-thanks' => 'Aitäh! Sinu hinnangud on salvestatud.',
	'articlefeedback-alpha-featurefeedback' => 'Anna meile <span class="feedbacklink">tagasisidet</span> selle hindamismeetodi kohta.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|hindamine|hindamist}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Seda lehekülge on pärast sinu viimast ülevaatamist ''muudetud''.
Võib-olla soovid seda uuesti hinnata.",
	'articlefeedback-alpha-results-show' => '(Tulemused on peidetud. <span class="showlink">Näita</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Peida tulemused</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Miks seda lehekülge täna hindasid (vali kõik sobivad):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Tahtsin leheküljele üldist hinnangut anda',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Loodan, et minu hinnang aitab lehekülje arendamisele kaasa',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Tahtsin {{GRAMMAR:inessive|{{SITENAME}}}} kaastööd teha',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Mulle meeldib oma arvamust jagada',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Ma ei hinnanud täna seda lehekülge, vaid tahtsin tagasisidet anda',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Muu',
	'articlefeedback-alpha-survey-question-useful' => 'Kas pead antud hinnanguid kasulikuks ja selgeks?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Miks?',
	'articlefeedback-alpha-survey-question-expert' => 'Kas pead ennast sellel leheküljel käsitletud teema asjatundjaks?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Kas saad kirjeldada, milles sinu asjatundlikkus väljendub?',
	'articlefeedback-alpha-survey-question-comments' => 'Kas sul on lisamärkusi?',
	'articlefeedback-alpha-survey-submit' => 'Saada',
	'articlefeedback-alpha-survey-title' => 'Palun vasta mõnele küsimusele.',
	'articlefeedback-alpha-survey-thanks' => 'Aitäh küsitlusele vastamast!',
);

/** Persian (فارسی)
 * @author Huji
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'articlefeedback' => 'ارزیابی مقاله‌ها',
	'articlefeedback-desc' => 'ارزیابی مقاله‌ها (نسخهٔ آزمایشی)',
	'articlefeedback-alpha-yourfeedback' => 'نظر شما',
	'articlefeedback-alpha-pleaserate' => 'لطفاً لحظه‌ای از وقت خود را صرف نمره دادن به این صفحه از طریق بخش زیری کنید',
	'articlefeedback-alpha-submit' => 'ارسال',
	'articlefeedback-alpha-rating-wellsourced' => 'دارای منابع خوب:',
	'articlefeedback-alpha-rating-neutrality' => 'بی‌طرف:',
	'articlefeedback-alpha-rating-completeness' => 'کامل:',
	'articlefeedback-alpha-rating-readability' => 'خوانا:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'به نظر شما این صفحه دارای ارجاعات کافی به منابع قابل اعتماد هست؟',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'به نظر شما این صفحه دیدگاه‌های مختلف در مورد موضوعش را به طور متناسبی ارائه می‌دهد؟',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'به نظر شما عنوان‌های اساسی که باید پوشش دهد را شامل می‌شود؟',
	'articlefeedback-alpha-rating-readability-tooltip' => 'به نظر شما این صفحه به‌خوبی ساختاربندی شده و به‌خوبی نوشته شده‌است؟',
	'articlefeedback-alpha-articlerating' => 'نمرهٔ مقاله',
	'articlefeedback-alpha-error' => 'خطایی رخ داده‌است.
لطفاً بعداً دوباره تلاش کنید.',
	'articlefeedback-alpha-thanks' => 'متشکریم! نمرهٔ شما ذخیره شد.',
	'articlefeedback-alpha-featurefeedback' => 'در مورد این قابلیت به ما <span class="feedbacklink">نظر بدهید</span>.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|نمره|نمره}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "این صفحه از آخرین باری که آن را بازبینی کردید ''تغییر کرده‌است''.
می‌توانید دوباره به آن نمره دهید.",
	'articlefeedback-alpha-results-show' => '(نتایج مخفی است. <span class="showlink">نمایش نتایج</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">نهفتن نتایج</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'لطفاً به ما اطلاع دهید که چرا شما امروز به این صفحه نمره دادید (تمام موارد مرتبط را انتخاب کنید):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'می‌خواستم در نمره کلی صفحه مشارکت کنم',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'امیدوارم که نمره‌ای که دادم اثر مثبتی روی پیشرفت صفحه داشته باشد',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'می‌خواستم به {{SITENAME}} کمک کنم',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'علاقه دارم نظر خودم را به اشتراک بگذارم',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'امروز نمره‌ای ندادم، اما می‌خواهم راجع به این ویژگی نظر بدهم',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'غیره',
	'articlefeedback-alpha-survey-question-useful' => 'آیا فکر می‌کنید نمره‌های ارائه شده مفید و واضح هستند؟',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'چرا؟',
	'articlefeedback-alpha-survey-question-expert' => 'آیا خودتان را در زمینه موضوع این صفحه متخصص می‌دانید؟',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'آیا می‌توانید تخصص خود را توضیح دهید؟',
	'articlefeedback-alpha-survey-question-comments' => 'آیا هر گونه نظر اضافی دارید؟',
	'articlefeedback-alpha-survey-submit' => 'ارسال',
	'articlefeedback-alpha-survey-title' => 'لطفاً به چند پرسش پاسخ دهید',
	'articlefeedback-alpha-survey-thanks' => 'از این که نظرسنجی را تکمیل کردید متشکریم.',
	'articlefeedback-beta-report-tab-label' => 'نمایش نتایج',
	'articlefeedback-beta-field-complete-label' => 'کامل کردن',
	'articlefeedback-beta-field-neutral-label' => 'بی‌طرف',
	'articlefeedback-beta-field-readable-label' => 'قابل خواندن',
);

/** Finnish (Suomi)
 * @author Nike
 * @author Olli
 */
$messages['fi'] = array(
	'articlefeedback' => 'Artikkelin arviointi',
	'articlefeedback-desc' => 'Artikkelin arviointi (kokeiluversio)',
	'articlefeedback-alpha-yourfeedback' => 'Omat palautteet',
	'articlefeedback-alpha-pleaserate' => 'Käyttäisitkö hetken alla olevan sivun arviointiin.',
	'articlefeedback-alpha-submit' => 'Lähetä',
	'articlefeedback-alpha-rating-wellsourced' => 'Hyvin lähteistetty:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutraali:',
	'articlefeedback-alpha-rating-completeness' => 'Täydellinen:',
	'articlefeedback-alpha-rating-readability' => 'Luettavuus:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Onko tällä sivulla mielestäsi hyvät lainaukset ja ovatko ne peräisin luotettavista lähteistä?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Käsitteleekö artikkeli mielestäsi asiaa reilusti kaikista mahdollisista näkökulmista?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Sisältääkö sivu mielestäsi kaikki olennaiset alueet kyseessä olevasta aiheesta?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Onko artikkeli mielestäsi hyvin järjestetty ja hyvin kirjoitettu?',
	'articlefeedback-alpha-articlerating' => 'Sivun arvostelu',
	'articlefeedback-alpha-error' => 'Tapahtui virhe.
Ole hyvä ja yritä myöhemmin uudelleen.',
	'articlefeedback-alpha-thanks' => 'Kiitos! Arvostelusi tallennettiin.',
	'articlefeedback-alpha-featurefeedback' => 'Anna meille <span class="feedbacklink">palautetta</span> tästä ominaisuudesta.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|arvio|arviota}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Tätä sivua on ''muutettu'' viimeisimmän arvostelusi jälkeen.
Haluaisit ehkä arvostella sen uudelleen.",
	'articlefeedback-alpha-results-show' => '(Tulokset on piilotettu. <span class="showlink">Näytä</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Piilota tulokset</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Kerro meille, miksi arvostelit tämän sivun tänään (lisää merkki kaikkiin, jotka pitävät paikkaansa):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Haluan vaikuttaa sivun kokonaisarvosanaan',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Toivon, että arvosteluni vaikuttaisi positiivisesti sivun kehitykseen',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Haluan osallistua {{SITENAME}}-sivuston kehitykseen',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Pidän mielipiteeni kertomisesta',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'En antanut arvosteluja tänään, mutta halusin antaa palautetta arvosteluominaisuudesta',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Muu',
	'articlefeedback-alpha-survey-question-useful' => 'Ovatko annetut arvostelut mielestäsi hyödyllisiä ja todellisia?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Miksi?',
	'articlefeedback-alpha-survey-question-expert' => 'Oletko mielestäsi asiantuntija asiassa, jota käsitellään tällä sivulla?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Voitko kuvailla asiantuntemustasi?',
	'articlefeedback-alpha-survey-question-comments' => 'Onko sinulla muita kommentteja?',
	'articlefeedback-alpha-survey-submit' => 'Lähetä',
	'articlefeedback-alpha-survey-title' => 'Vastaathan muutamiin kysymyksiin',
	'articlefeedback-alpha-survey-thanks' => 'Kiitos kyselyn täyttämisestä.',
);

/** French (Français)
 * @author Crochet.david
 * @author Peter17
 */
$messages['fr'] = array(
	'articlefeedback' => 'Évaluation d’article',
	'articlefeedback-desc' => 'Évaluation d’article (version pilote)',
	'articlefeedback-alpha-yourfeedback' => 'Votre retour',
	'articlefeedback-alpha-pleaserate' => 'Veuillez prendre un moment pour évaluer cette page ci-dessous.',
	'articlefeedback-alpha-submit' => 'Soumettre',
	'articlefeedback-alpha-rating-wellsourced' => 'Bien sourcé :',
	'articlefeedback-alpha-rating-neutrality' => 'Neutre :',
	'articlefeedback-alpha-rating-completeness' => 'Complet :',
	'articlefeedback-alpha-rating-readability' => 'Lisible :',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Pensez-vous que cette page a suffisamment de citations et que celles-ci proviennent de sources dignes de confiance.',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Pensez-vous que cette page fournit une présentation équitable de toutes les perspectives du sujet traité ?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Pensez-vous que cette page couvre les thèmes essentiels du sujet ?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Pensez-vous que cette page soit bien organisée et bien écrite ?',
	'articlefeedback-alpha-articlerating' => 'Évaluation de la page',
	'articlefeedback-alpha-error' => 'Une erreur est survenue.
Veuillez ré-essayer plus tard.',
	'articlefeedback-alpha-thanks' => 'Merci ! Votre évaluation a été enregistrée.',
	'articlefeedback-alpha-featurefeedback' => 'Donnez-nous vos <span class="feedbacklink">commentaires</span> sur cette fonctionnalité.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|évaluation|évaluations}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => 'Cette page a été révisée depuis que vous l’avez évaluée.
Vous pourriez vouloir l’évaluer à nouveau.',
	'articlefeedback-alpha-results-show' => '(Résultats masqués. <span class="showlink">Les afficher.</span>)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Masquer les résultats</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Veuillez nous indiquer pourquoi vous avez évalué cette page aujourd’hui (cochez tout ce qui s’applique) :',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Je voulais contribuer à l’évaluation globale de la page',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'J’espère que mon évaluation aura une incidence positive sur le développement de la page',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Je voulais contribuer à {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'J’aime partager mon opinion',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Je n’ai pas évalué la page, mais je voulais donner un retour sur cette fonctionnalité',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Autre',
	'articlefeedback-alpha-survey-question-useful' => 'Pensez-vous que les évaluations fournies soient utiles et claires ?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Pourquoi ?',
	'articlefeedback-alpha-survey-question-expert' => 'Vous considérez-vous comme un expert dans le domaine couvert par cette page ?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Pouvez-vous décrire votre expertise ?',
	'articlefeedback-alpha-survey-question-comments' => 'Avez-vous d’autres commentaires ?',
	'articlefeedback-alpha-survey-submit' => 'Soumettre',
	'articlefeedback-alpha-survey-title' => 'Veuillez répondre à quelques questions',
	'articlefeedback-alpha-survey-thanks' => 'Merci d’avoir rempli le questionnaire.',
	'articlefeedback-beta-form-tab-label' => 'Fournir un retour',
	'articlefeedback-beta-form-panel-title' => 'Votre retour',
	'articlefeedback-beta-form-panel-instructions' => 'Veuillez prendre un moment pour évaluer cette page.',
	'articlefeedback-beta-form-panel-notice' => 'Vos évaluations expireront au fil du temps.',
	'articlefeedback-beta-form-panel-submit' => 'Envoyer le retour',
	'articlefeedback-beta-report-tab-label' => 'Afficher les résultats',
	'articlefeedback-beta-report-panel-title' => 'Résultats du retour',
	'articlefeedback-beta-field-wellsourced-label' => 'Bien sourcé',
	'articlefeedback-beta-field-wellsourced-tip' => 'Pensez-vous que cette page a suffisamment de citations et que celles-ci proviennent de sources dignes de confiance.',
	'articlefeedback-beta-field-complete-label' => 'Complet',
	'articlefeedback-beta-field-complete-tip' => 'Pensez-vous que cette page couvre les thèmes essentiels du sujet ?',
	'articlefeedback-beta-field-neutral-label' => 'Neutre',
	'articlefeedback-beta-field-neutral-tip' => 'Pensez-vous que cette page fournit une présentation équitable de toutes les perspectives du sujet traité ?',
	'articlefeedback-beta-field-readable-label' => 'Lisible',
	'articlefeedback-beta-field-readable-tip' => 'Pensez-vous que cette page soit bien organisée et bien écrite ?',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'articlefeedback' => 'Èstimacion d’articllo',
	'articlefeedback-desc' => 'Èstimacion d’articllo (vèrsion pilote)',
	'articlefeedback-alpha-yourfeedback' => 'Voutron avis',
	'articlefeedback-alpha-submit' => 'Sometre',
	'articlefeedback-alpha-rating-wellsourced' => 'Bien fondâ :',
	'articlefeedback-alpha-rating-neutrality' => 'Netro :',
	'articlefeedback-alpha-rating-completeness' => 'Complèt :',
	'articlefeedback-alpha-rating-readability' => 'Liésiblo :',
	'articlefeedback-alpha-articlerating' => 'Èstimacion de la pâge',
	'articlefeedback-alpha-featurefeedback' => 'Balyéd-nos voutron <span class="feedbacklink">avis</span> sur cela fonccionalitât.',
	'articlefeedback-alpha-noratings' => '$1 ($2 èstimacion{{PLURAL:$2||s}})',
	'articlefeedback-alpha-results-show' => '(Rèsultats cachiês. Los <span class="showlink">fâre vêre</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Cachiér los rèsultats</span>)',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Ôtra',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Porquè ?',
	'articlefeedback-alpha-survey-submit' => 'Sometre',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'articlefeedback-alpha-articlerating' => 'Judizi de pagjine',
	'articlefeedback-alpha-survey-submit' => 'Invie',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'articlefeedback' => 'Avaliación do artigo',
	'articlefeedback-desc' => 'Versión piloto da avaliación dos artigos',
	'articlefeedback-alpha-yourfeedback' => 'Os seus comentarios',
	'articlefeedback-alpha-pleaserate' => 'Por favor, tome uns intres para avaliar esta páxina.',
	'articlefeedback-alpha-submit' => 'Enviar',
	'articlefeedback-alpha-rating-wellsourced' => 'Ben documentado:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Completo:',
	'articlefeedback-alpha-rating-readability' => 'Lexible:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Cre que esta páxina ten citas suficientes e que estas son de fontes fiables?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Cre que esta páxina mostra unha representación xusta de todas as perspectivas do tema?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Cre que esta páxina aborda as áreas esenciais do tema que debería?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Cre que esta páxina está ben organizada e escrita?',
	'articlefeedback-alpha-articlerating' => 'Avaliación do artigo',
	'articlefeedback-alpha-error' => 'Houbo un erro.
Inténteo de novo máis tarde.',
	'articlefeedback-alpha-thanks' => 'Grazas! Gardáronse as súas valoracións.',
	'articlefeedback-alpha-featurefeedback' => 'Déanos <span class="feedbacklink">a súa opinión</span> sobre esta característica.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|avaliación|avaliacións}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Alguén fixo unha ''revisión'' da páxina desde a súa última visita.
Quizais queira avaliala novamente.",
	'articlefeedback-alpha-results-show' => '(Resultados agochados. <span class="showlink">Mostralos</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Agochar os resultados</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Díganos por que valorou esta páxina (marque todas as opcións que cumpran):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Quería colaborar na valoración da páxina',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Agardo que a miña valoración afecte positivamente ao desenvolvemento da páxina',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Quería colaborar con {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Gústame dar a miña opinión',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Non dei ningunha valoración, só quería deixar os meus comentarios sobre a característica',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Outra',
	'articlefeedback-alpha-survey-question-useful' => 'Cre que as valoracións dadas son útiles e claras?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Por que?',
	'articlefeedback-alpha-survey-question-expert' => 'Considérase un experto no campo que abrangue esta páxina?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Pode describir a súa experiencia?',
	'articlefeedback-alpha-survey-question-comments' => 'Ten algún comentario adicional?',
	'articlefeedback-alpha-survey-submit' => 'Enviar',
	'articlefeedback-alpha-survey-title' => 'Responda algunhas preguntas',
	'articlefeedback-alpha-survey-thanks' => 'Grazas por encher a enquisa.',
	'articlefeedback-beta-form-tab-label' => 'Deixar un comentario',
	'articlefeedback-beta-form-panel-title' => 'Os seus comentarios',
	'articlefeedback-beta-form-panel-instructions' => 'Por favor, tome uns intres para avaliar esta páxina.',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'articlefeedback' => 'Artikelyyschetzig',
	'articlefeedback-desc' => 'Macht d Yyschetzig vu Artikel megli (Pilotversion)',
	'articlefeedback-alpha-yourfeedback' => 'Dyy Yyschetzig',
	'articlefeedback-alpha-pleaserate' => 'Bitte nimm Dir churz Zyt un tue dää Artikel yyschetze.',
	'articlefeedback-alpha-submit' => 'Ibertrage',
	'articlefeedback-alpha-rating-wellsourced' => 'Guet beleit:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Vollständig:',
	'articlefeedback-alpha-rating-readability' => 'Verständli:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Hesch Du dr Yydruck, ass es in däm Artikel gnue Quällenaagabe het un ass mer däne Quälle cha tröue?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Hesch Du dr Yydruck, ass dää Artikel e uusgwogeni Darstellig isch vu allne Aschpäkt, wu mit däm Thema verbunde sin?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Hesch Du dr Yydruck, ass in däm Artikel aali Aschpäkt ufgfiert sin, wu mit däm Thema zämmehange?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Hesch Du dr Yydruck, ass dää Artikel guet strukturiert un gschribe isch?',
	'articlefeedback-alpha-articlerating' => 'Yyschetzig vum Artikel',
	'articlefeedback-alpha-error' => 'E Fähler isch ufträtte.
Bitte versuech s nomol.',
	'articlefeedback-alpha-thanks' => 'Dankschen! Dyy Yyschetzig isch gspycheret wore.',
	'articlefeedback-alpha-featurefeedback' => 'Gib s bitte ne <span class="feedbacklink">Ruckmäldig</span> zue däre Funktion.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|Yyschetzig|Yyschetzige}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Dää Artikel isch syt Dyyre letschte Yyschetzig ''bearbeitet'' wore.
Villicht witt e nomol yyschetze.",
	'articlefeedback-alpha-results-show' => '(Ergebnis sin uusbländet. <span class="showlink">Yyblände</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Ergebnis uusblände</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Bitte loss es is wisse, wurum Du dää Artikel hite yygschetzt hesch (bitte aachryzle, was zuetrifft):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Ich haa welle mitmache bi dr Yyschetzig vu däm Artikel',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Ich hoffe, ass myy Yyschetzig e positive Yyfluss het uf di chimftig Entwicklig vum Artikel',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Ich haa welle mitmache bi {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Ich tue gärn myy Meinig teile',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Ich haa hite kei Yyschetzig vorgnuu, haa aber e Ruckmäldig zue däre Funktion welle gee',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Anderi',
	'articlefeedback-alpha-survey-question-useful' => 'Glaubsch, ass d Yyschetzige, wu abgee wore sin, nitzli un verständli sin?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Wurum?',
	'articlefeedback-alpha-survey-question-expert' => 'Haltesch Du di fir kompetänt uf em Biet vum Syteinhalt?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Chasch Du dyy Sachchänntnis bschryybe?',
	'articlefeedback-alpha-survey-question-comments' => 'Hesch no meh Aamerkige?',
	'articlefeedback-alpha-survey-submit' => 'Ibertrage',
	'articlefeedback-alpha-survey-title' => 'Bitte gib Antworte uf e paar Froge',
	'articlefeedback-alpha-survey-thanks' => 'Dankschen fir Dyy Ruckmäldig.',
);

/** Hebrew (עברית)
 * @author YaronSh
 */
$messages['he'] = array(
	'articlefeedback' => 'הערכת ערך',
	'articlefeedback-desc' => 'הערכת ערך (גרסה ניסיונית)',
	'articlefeedback-alpha-yourfeedback' => 'המשוב שלך',
	'articlefeedback-alpha-pleaserate' => 'נא להשקיע דקה בדירוג הדף שלהלן.',
	'articlefeedback-alpha-submit' => 'שליחה',
	'articlefeedback-alpha-rating-wellsourced' => 'עם מקורות תקינים:',
	'articlefeedback-alpha-rating-neutrality' => 'ניטרלי:',
	'articlefeedback-alpha-rating-completeness' => 'שלם:',
	'articlefeedback-alpha-rating-readability' => 'קריא:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'האם לדעתך לדף זה יש די ציטוטים והאם ציטוטים אלה מגיעים ממקורות מהימנים?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'האם לדעתך דף זה מייצג באופן הוגן את כל ההיבטים בנושא?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'האם לדעתך דף זה מכסה את התחומים החיוניים לנושא כפי שהוא אמור?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'האם לדעתך דף זה מסודר היטב וכתוב כראוי?',
	'articlefeedback-alpha-articlerating' => 'דירוג הדף',
	'articlefeedback-alpha-error' => 'אירעה שגיאה. 
נא לנסות שוב מאוחר יותר.',
	'articlefeedback-alpha-thanks' => 'תודה רבה! הדירוגים שלך נשמרו.',
	'articlefeedback-alpha-featurefeedback' => 'הוספת <span class="feedbacklink">משוב</span> על תכונה זו.',
	'articlefeedback-alpha-noratings' => '$1 ({{PLURAL:$2|דירוג אחד|$2 דירוגים}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "דף זה ''נסקר'' מאחר שסקרת אותו לאחרונה.
יתכן שיהיה ברצונך לסקור אותו שוב.",
	'articlefeedback-alpha-results-show' => '(התוצאות מוסתרות. <span class="showlink">הצגתן</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">הסתרת התוצאות</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'נא ליידע אותנו מדובר דירגת דף זה היום (יש לסמן את כל העונים לשאלה):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'ברצוני לתרום לדירוג הכללי של הדף',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'כולי תקווה שהדירוג שלי ישפיע לטובה על פיתוח הדף',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'ברצוני לתרום ל{{grammar:תחילית|{{SITENAME}}}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'מוצא חן בעיני לשתף את דעתי ברבים',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'לא סיפקתי אף דירוגים היום, אך ברצוני לתת משוב על תכונה',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'אחר',
	'articlefeedback-alpha-survey-question-useful' => 'האם קיבלת את התחושה שהדירוגים שסיפקת שימושיים וברורים?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'מדוע?',
	'articlefeedback-alpha-survey-question-expert' => 'האם יש לך מומחיות בתחום שדף זה מכסה?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'האם באפשרותך לתאר את תחום ההתמחות שלך?',
	'articlefeedback-alpha-survey-question-comments' => 'האם יש לך הערות נוספות?',
	'articlefeedback-alpha-survey-submit' => 'שליחה',
	'articlefeedback-alpha-survey-title' => 'נא לענות על מספר שאלות',
	'articlefeedback-alpha-survey-thanks' => 'תודה לך על מילוי הסקר.',
);

/** Croatian (Hrvatski)
 * @author Herr Mlinka
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'articlefeedback' => 'Ocjenjivanje članaka',
	'articlefeedback-desc' => 'Ocjenjivanje članaka (probna inačica)',
	'articlefeedback-alpha-yourfeedback' => 'Vaše povratne informacije',
	'articlefeedback-alpha-pleaserate' => 'Molimo vas odvojite trenutak vremena kako bi ocijenili stranicu u nastavku.',
	'articlefeedback-alpha-submit' => 'Pošalji',
	'articlefeedback-alpha-rating-wellsourced' => 'Dobro potkrijepljeno izvorima:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutralnost:',
	'articlefeedback-alpha-rating-completeness' => 'Zaokruženost (pokrivanja teme):',
	'articlefeedback-alpha-rating-readability' => 'Čitljivost:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Mislite li da ova stranica ima dovoljno citata koji imaju pouzdane izvore?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Mislite li da ova stranica prikazuje temu neutralno iz svih perspektiva?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Mislite li da ova stranica pokriva osnovna područja teme koja bi trebala biti pokrivena?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Mislite li da je ova stranica dobro organizirana i dobro napisana?',
	'articlefeedback-alpha-articlerating' => 'Ocjena stranice',
	'articlefeedback-alpha-error' => 'Došlo je do pogreške. 
Molimo, pokušajte ponovno kasnije.',
	'articlefeedback-alpha-thanks' => 'Hvala! Vaše ocjene su sačuvane.',
	'articlefeedback-alpha-featurefeedback' => 'Dajte nam <span class="feedbacklink">povratne informacije</span> o mogućnosti ocjenjivanja članaka.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|ocjena|ocjene|ocjena}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Ova stranica je ''uređivana'' nakon vašeg ocjenjivanja.
Možda ju želite ocijeniti ponovo.",
	'articlefeedback-alpha-results-show' => '(Rezultati su skriveni. <span class="showlink">Pokažite</span> ih.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Sakrij rezultate</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Molimo recite nam zašto ste ocijenili danas ovu stranicu (označite sve što se može primijeniti):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Želio sam pridonijeti sveukupnoj ocjeni stranice',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Nadam se da će moja ocjena imati pozitivno uticati na razvoj stranice',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Želim pridonijeti projektu {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Volim dijeliti svoje mišljenje',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Nisam dao ocjene danas, ali sam želio dati mišljenje o dogradnji',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Ostalo',
	'articlefeedback-alpha-survey-question-useful' => 'Jesu li dane ocjene korisne i jasne?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Zašto?',
	'articlefeedback-alpha-survey-question-expert' => 'Smatrate li se stručnjakom za područje koje obrađuje ova stranica?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Možete li opisati svoju stručnost?',
	'articlefeedback-alpha-survey-question-comments' => 'Imate li neki dodatni komentar?',
	'articlefeedback-alpha-survey-submit' => 'Pošalji',
	'articlefeedback-alpha-survey-title' => 'Molimo odgovorite na nekoliko pitanja',
	'articlefeedback-alpha-survey-thanks' => 'Hvala vam na popunjavanju ankete.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'articlefeedback' => 'Pohódnoćenje nastawkow',
	'articlefeedback-desc' => 'Pohódnoćenje nastawkow (pilotowa wersija)',
	'articlefeedback-alpha-yourfeedback' => 'Twój posudk',
	'articlefeedback-alpha-pleaserate' => 'Prošu bjer sej trochu časa, zo by slědowacu stronu pohódnoćił.',
	'articlefeedback-alpha-submit' => 'Wotpósłać',
	'articlefeedback-alpha-rating-wellsourced' => 'Derje dokładźeny:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutralny:',
	'articlefeedback-alpha-rating-completeness' => 'Dospołny:',
	'articlefeedback-alpha-rating-readability' => 'Čitajomny:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Měniš, zo tuta strona ma dosć citatow a zo te citaty sz z dowěryhódnych žórłow?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Měniš, zo tuta strona pokazuje wurunane předstajenje wšěch perspektiwow tutoho problema?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Měniš, zo tuta strona wšě bytostne temowe pola wobsahuje, kotrež měła wobsahować?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Měniš, zo tuta strona je derje zorganizowana a derje napisana?',
	'articlefeedback-alpha-articlerating' => 'Pohódnoćenje strony',
	'articlefeedback-alpha-error' => 'Zmylk je wustupił.
Prošu spytaj pozdźišo hišće raz.',
	'articlefeedback-alpha-thanks' => 'Wulki dźak! Twoje pohódnoćenja su so składowali.',
	'articlefeedback-alpha-featurefeedback' => 'Prošu pósćel nam <span class="feedbacklink">pohódnoćenje</span> wo tutej funkciji.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|pohódnoćenje|pohódnoćeni|pohódnoćenja|pohódnoćenjow}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Tuta strona bu ''wobdźěłana'', wot toho zo sy ju posledni raz posudźił.
Snano chceš ju znowa posudźić.",
	'articlefeedback-alpha-results-show' => '(Wuslědki schowane. <span class="showlink">Pokazać</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Wuslědki schować</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Prošu zdźěl nam, čehodla sy tutu stronu dźensa posudźił (trjechace prošu nakřižować):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Chcych so na cyłkownym pohódnoćenju strony wobdźělić',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Nadźijam so, zo moje pohódnoćene by wuwiće strony pozitiwnje wobwliwowało',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Chcych k {{SITENAME}} přinošować',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Bych rady moje měnjenje dźělił',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Dźensa njejsym žane pohódnoćenja přewjedł, ale chcych swoje měnjenje wo tutej funkciji wuprajić.',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Druhe',
	'articlefeedback-alpha-survey-question-useful' => 'Wěriš, zo podate pohódnoćenja su wužite a jasne?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Čehodla?',
	'articlefeedback-alpha-survey-question-expert' => 'Maš so za ekspertu na polu, kotrež tuta strona wobjednawa?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Móžeš swój wěcywustojnosć wopisać?',
	'articlefeedback-alpha-survey-question-comments' => 'Maš hišće dalše komentary?',
	'articlefeedback-alpha-survey-submit' => 'Wotpósłać',
	'articlefeedback-alpha-survey-title' => 'Prošu wotmołw na někotre prašenja',
	'articlefeedback-alpha-survey-thanks' => 'Dźakujemy so za twój posudk.',
);

/** Hungarian (Magyar)
 * @author Dani
 * @author Misibacsi
 */
$messages['hu'] = array(
	'articlefeedback' => 'Szócikk értékelése',
	'articlefeedback-desc' => 'Cikk értékelése (kísérleti változat)',
	'articlefeedback-alpha-yourfeedback' => 'Visszajelzés',
	'articlefeedback-alpha-pleaserate' => 'Kérjük, szánj rá egy kis időt, hogy értékeld ezt az alábbi oldalt.',
	'articlefeedback-alpha-submit' => 'Küldés',
	'articlefeedback-alpha-rating-wellsourced' => 'forrásokkal megfelelően alátámasztott',
	'articlefeedback-alpha-rating-neutrality' => 'Semleges:',
	'articlefeedback-alpha-rating-completeness' => 'Teljes:',
	'articlefeedback-alpha-rating-readability' => 'Olvashatóság:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Úgy érzed, ez az oldal a megfelelő hivatkozásokkal van ellátva és ezek megbízható forrásból származnak?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Úgy érzed, ez az oldal méltányosan bemutatja a témát minden szempontból?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Úgy érzed, hogy ez az oldal tartalmaz minden lényeges témát ami ide tartozik?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Úgy érzed, hogy ez az oldal jól szervezett és jól meg van írva?',
	'articlefeedback-alpha-articlerating' => 'A lap értékelése',
	'articlefeedback-alpha-error' => 'Hiba történt. 
Kérjük, próbálkozz később.',
	'articlefeedback-alpha-thanks' => 'Köszönjük! Értékelésedet eltároltuk.',
	'articlefeedback-alpha-featurefeedback' => 'Írj nekünk <span class="feedbacklink">visszajelzést</span> erről a funkcióról.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL: $2 | értékelés | értékelés}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => 'Ezt az oldalt módosították, amióta utoljára értékelted. Érdemes lenne újból átnézni.',
	'articlefeedback-alpha-results-show' => '(Az eredmények rejtve vannak. <span class="showlink">Mutasd</span> őket.)',
	'articlefeedback-alpha-results-hide' => '<span class="hidelink">(Eredmények elrejtése)</span>',
	'articlefeedback-alpha-survey-question-whyrated' => 'Kérjük, mondd el nekünk, miért értékelted ezt az oldalt (jelöld meg a megfelelőket):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Azt akartam, hogy hozzájáruljak az oldal összesített értékeléséhez',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Remélem, hogy az értékelésem pozitívan befolyásolja az oldal fejlődését',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Azt akartam, hogy hozzájáruljak ehhez: {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Szerettem volna megosztani a véleményemet',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Ma még nem adtam értékelést, de szerettem volna visszajelzést adni erről a funkcióról',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Egyéb',
	'articlefeedback-alpha-survey-question-useful' => 'Hiszel abban, hogy az értékelések hasznosak és világosak?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Miért?',
	'articlefeedback-alpha-survey-question-expert' => 'Szakértőnek tartod magad abban a témában, amiről ez az oldal szól?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Le tudnád írni a szakértelmedet?',
	'articlefeedback-alpha-survey-question-comments' => 'Van még további észrevételed?',
	'articlefeedback-alpha-survey-submit' => 'Értékelés küldése',
	'articlefeedback-alpha-survey-title' => 'Kérjük, válaszolj néhány kérdésre',
	'articlefeedback-alpha-survey-thanks' => 'Köszönjük a kérdőív kitöltését!',
);

/** Interlingua (Interlingua)
 * @author Catrope
 * @author McDutchie
 */
$messages['ia'] = array(
	'articlefeedback' => 'Evalutation de articulos',
	'articlefeedback-desc' => 'Evalutation de articulos (version pilota)',
	'articlefeedback-alpha-yourfeedback' => 'Tu opinion',
	'articlefeedback-alpha-pleaserate' => 'Per favor prende un momento pro evalutar iste pagina hic infra.',
	'articlefeedback-alpha-submit' => 'Submitter',
	'articlefeedback-alpha-rating-wellsourced' => 'Ben referentiate:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Complete:',
	'articlefeedback-alpha-rating-readability' => 'Legibile:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Pensa tu que iste articulo ha sufficiente citationes e que iste citationes refere a fontes digne de fide?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Pensa tu que iste articulo monstra un representation juste de tote le perspectivas super le question?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Pensa tu que iste articulo coperi le themas essential que illo deberea coperir?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Pensa tu que iste articulo es ben organisate e ben scribite?',
	'articlefeedback-alpha-articlerating' => 'Evalutation del articulo',
	'articlefeedback-alpha-error' => 'Un error ha occurrite.
Per favor reproba plus tarde.',
	'articlefeedback-alpha-thanks' => 'Gratias! Tu evalutation ha essite salveguardate.',
	'articlefeedback-alpha-featurefeedback' => 'Da nos <span class="feedbacklink">tu opinion</span> super iste functionalitate.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|evalutation|evalutationes}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Iste articulo ha essite ''re-elaborate'' post tu ultime evalutation.
Es recommendate que tu lo re-evaluta.",
	'articlefeedback-alpha-results-show' => '(Resultatos celate. <span class="showlink">Revelar</span> los.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Celar resultatos</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Per favor dice nos proque tu ha evalutate iste pagina hodie (marca tote le optiones applicabile):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Io voleva contribuer al evalutation general del pagina',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Io spera que mi evalutation ha un effecto positive sur le disveloppamento del pagina',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Io voleva contribuer a {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Me place condivider mi opinion',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Io non dava un evalutation hodie, ma io voleva dar mi opinion super le functionalitate',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Altere',
	'articlefeedback-alpha-survey-question-useful' => 'Crede tu que le evalutationes providite es utile e clar?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Proque?',
	'articlefeedback-alpha-survey-question-expert' => 'Esque tu te considera un experto in le campo que iste pagina coperi?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Pote tu describer tu expertise?',
	'articlefeedback-alpha-survey-question-comments' => 'Ha tu additional commentos?',
	'articlefeedback-alpha-survey-submit' => 'Submitter',
	'articlefeedback-alpha-survey-title' => 'Per favor responde a alcun questiones',
	'articlefeedback-alpha-survey-thanks' => 'Gratias pro completar le questionario.',
	'articlefeedback-beta-form-tab-label' => 'Retornar opiniones',
	'articlefeedback-beta-form-panel-title' => 'Tu opinion',
	'articlefeedback-beta-form-panel-instructions' => 'Per favor prende un momento pro evalutar iste pagina.',
	'articlefeedback-beta-form-panel-notice' => 'Le evalutationes expirara in le curso del tempore.',
	'articlefeedback-beta-form-panel-submit' => 'Submitter opinion',
	'articlefeedback-beta-report-tab-label' => 'Monstrar resultatos',
	'articlefeedback-beta-report-panel-title' => 'Opiniones retornate',
	'articlefeedback-beta-field-wellsourced-label' => 'Ben referentiate',
	'articlefeedback-beta-field-wellsourced-tip' => 'Pensa tu que iste pagina ha sufficiente citationes e que iste citationes refere a fontes digne de fide?',
	'articlefeedback-beta-field-complete-label' => 'Complete',
	'articlefeedback-beta-field-complete-tip' => 'Pensa tu que iste pagina coperi le themas essential que illo deberea coperir?',
	'articlefeedback-beta-field-neutral-label' => 'Neutral',
	'articlefeedback-beta-field-neutral-tip' => 'Pensa tu que iste pagina monstra un representation juste de tote le perspectivas super le question?',
	'articlefeedback-beta-field-readable-label' => 'Legibile',
	'articlefeedback-beta-field-readable-tip' => 'Pensa tu que iste pagina es ben organisate e ben scribite?',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 * @author IvanLanin
 */
$messages['id'] = array(
	'articlefeedback' => 'Penilaian artikel',
	'articlefeedback-desc' => 'Penilaian artikel (versi percobaan)',
	'articlefeedback-alpha-yourfeedback' => 'Umpan balik Anda',
	'articlefeedback-alpha-pleaserate' => 'Mohon luangkan waktu untuk menilai halaman di bawah.',
	'articlefeedback-alpha-submit' => 'Kirim',
	'articlefeedback-alpha-rating-wellsourced' => 'Sumber terpercaya:',
	'articlefeedback-alpha-rating-neutrality' => 'Netral:',
	'articlefeedback-alpha-rating-completeness' => 'Selesai:',
	'articlefeedback-alpha-rating-readability' => 'Dapat dibaca:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Apakah Anda merasa bahwa halaman ini memiliki cukup kutipan dan bahwa kutipan tersebut berasal dari sumber tepercaya?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Apakah Anda merasa bahwa halaman ini menunjukkan representasi yang adil dari semua perspektif tentang masalah ini?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Apakah Anda merasa bahwa halaman ini mencakup wilayah topik penting yang seharusnya?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Apakah Anda merasa bahwa halaman ini teratur dan ditulis dengan baik?',
	'articlefeedback-alpha-articlerating' => 'Peringkat halaman',
	'articlefeedback-alpha-error' => 'Kesalahan terjadi.
Silakan coba lagi.',
	'articlefeedback-alpha-thanks' => 'Terima kasih! Penilaian Anda telah disimpan.',
	'articlefeedback-alpha-featurefeedback' => 'Beri kami <span class="feedbacklink">umpan balik</span> tentang fitur ini.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|penilaian|penilaian}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Halaman ini telah ''direvisi'' sejak terakhir ditinjau Anda.
Anda mungkin ingin menilainya lagi.",
	'articlefeedback-alpha-results-show' => '(Hasil disembunyikan. <span class="showlink">Tampilkan</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Sembunyikan hasil</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Harap beritahu kami mengapa Anda menilai halaman ini hari ini (centang semua yang benar):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Saya ingin berkontribusi untuk peringkat keseluruhan halaman',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Saya harap penilaian saya akan memberi dampak positif terhadap pengembangan halaman ini',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Saya ingin berkontribusi ke {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Saya ingin berbagi pendapat',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Saya tidak memberikan penilaian hari ini, tetapi ingin memberikan umpan balik pada fitur tersebut',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Lainnya',
	'articlefeedback-alpha-survey-question-useful' => 'Apakah Anda yakin bahwa peringkat yang diberikan berguna dan jelas?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Mengapa?',
	'articlefeedback-alpha-survey-question-expert' => 'Apakah Anda menganggap diri ahli di bidang yang dicakup halaman ini?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Dapatkah Anda menjelaskan keahlian Anda?',
	'articlefeedback-alpha-survey-question-comments' => 'Apakah Anda memiliki komentar tambahan?',
	'articlefeedback-alpha-survey-submit' => 'Kirim',
	'articlefeedback-alpha-survey-title' => 'Silakan jawab beberapa pertanyaan',
	'articlefeedback-alpha-survey-thanks' => 'Terima kasih telah mengisi survei ini.',
	'articlefeedback-beta-form-tab-label' => 'Berikan umpan balik',
	'articlefeedback-beta-form-panel-title' => 'Umpan balik Anda',
	'articlefeedback-beta-form-panel-instructions' => 'Harap luangkan waktu untuk menilai halaman ini.',
	'articlefeedback-beta-form-panel-notice' => 'Penilaian Anda akan kedaluwarsa seiring dengan waktu.',
	'articlefeedback-beta-form-panel-submit' => 'Kirim umpan balik',
	'articlefeedback-beta-report-tab-label' => 'Tampilkan hasil',
	'articlefeedback-beta-report-panel-title' => 'Hasil umpan balik',
	'articlefeedback-beta-field-wellsourced-label' => 'Data sumber bagus',
	'articlefeedback-beta-field-wellsourced-tip' => 'Apakah Anda merasa bahwa halaman ini memiliki cukup kutipan dan bahwa kutipan tersebut berasal dari sumber tepercaya?',
	'articlefeedback-beta-field-complete-label' => 'Lengkap',
	'articlefeedback-beta-field-complete-tip' => 'Apakah Anda merasa bahwa halaman ini mencakup wilayah topik penting yang seharusnya?',
	'articlefeedback-beta-field-neutral-label' => 'Netral',
	'articlefeedback-beta-field-neutral-tip' => 'Apakah Anda merasa bahwa halaman ini menunjukkan representasi yang adil dari semua perspektif tentang masalah ini?',
	'articlefeedback-beta-field-readable-label' => 'Mudah dibaca',
	'articlefeedback-beta-field-readable-tip' => 'Apakah Anda merasa bahwa halaman ini disusun dan ditulis dengan baik?',
);

/** Italian (Italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'articlefeedback' => 'Valutazione pagina',
	'articlefeedback-desc' => 'Valutazione pagina (versione pilota)',
	'articlefeedback-alpha-yourfeedback' => 'La tua opinione',
	'articlefeedback-alpha-pleaserate' => "Per favore, concedici un po' del tuo tempo per valutare questa pagina qui sotto.",
	'articlefeedback-alpha-submit' => 'Invia',
	'articlefeedback-alpha-rating-wellsourced' => 'Ben documentata:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutrale:',
	'articlefeedback-alpha-rating-completeness' => 'Completa:',
	'articlefeedback-alpha-rating-readability' => 'Leggibile:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Ritieni che questa pagina abbia citazioni sufficienti e che queste citazioni provengano da fonti attendibili?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Ritieni che questa pagina mostri una rappresentazione equa di tutti i punti di vista sul tema?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Ritieni che questa pagina copra le aree tematiche essenziali che dovrebbe?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Ritieni che questa pagina sia ben organizzata e ben scritta?',
	'articlefeedback-alpha-articlerating' => 'Giudizio pagina',
	'articlefeedback-alpha-error' => 'Si è verificato un errore. 
Si prega di riprovare più tardi.',
	'articlefeedback-alpha-thanks' => 'Grazie! Il tuo voto è stato salvato.',
	'articlefeedback-alpha-featurefeedback' => 'Inviaci i tuoi <span class="feedbacklink">commenti</span> su questa funzionalità.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|voto|voti}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Questa pagina è stata ''modificata'' dal tuo ultimo giudizio.
Probabilmente vuoi valutarla di nuovo.",
	'articlefeedback-alpha-results-show' => '(Risultati nascosti. <span class="showlink">Mostrali</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Nascondi risultati</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Esprimi il motivo per cui oggi hai valutato questa pagina (puoi selezionare più opzioni):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Ho voluto contribuire alla valutazione complessiva della pagina',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Spero che il mio giudizio influenzi positivamente lo sviluppo della pagina',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Ho voluto contribuire a {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Mi piace condividere la mia opinione',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Non ho fornito valutazioni oggi, ma ho voluto lasciare un feedback sulla funzionalità',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Altro',
	'articlefeedback-alpha-survey-question-useful' => 'Pensi che le valutazioni fornite siano utili e chiare?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Perché?',
	'articlefeedback-alpha-survey-question-expert' => 'Ti consideri un esperto nel settore a cui appartiene il tema di questa pagina?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Ci puoi descrivere le tue competenze?',
	'articlefeedback-alpha-survey-question-comments' => 'Hai altri commenti?',
	'articlefeedback-alpha-survey-submit' => 'Invia',
	'articlefeedback-alpha-survey-title' => 'Per favore, rispondi ad alcune domande',
	'articlefeedback-alpha-survey-thanks' => 'Grazie per aver compilato il questionario.',
);

/** Japanese (日本語)
 * @author Marine-Blue
 * @author Yanajin66
 * @author 青子守歌
 */
$messages['ja'] = array(
	'articlefeedback' => '記事の評価',
	'articlefeedback-desc' => '記事の評価',
	'articlefeedback-alpha-yourfeedback' => 'あなたの感想',
	'articlefeedback-alpha-pleaserate' => 'このページの評価を算出していますので、少しお待ちください。',
	'articlefeedback-alpha-submit' => '送信',
	'articlefeedback-alpha-rating-wellsourced' => '出典がよく示されている：',
	'articlefeedback-alpha-rating-neutrality' => '中立的：',
	'articlefeedback-alpha-rating-completeness' => '完成度：',
	'articlefeedback-alpha-rating-readability' => '読みやすさ：',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'このページは、十分な出典を含んでいて、それらの出典は信憑性のある情報源によるものだと思いますか？',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'このページは、ある問題に対する全ての観点を平等に説明していると思いますか？',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'この記事は、不可欠な話題を、説明していると思いますか？',
	'articlefeedback-alpha-rating-readability-tooltip' => 'この記事は、良く整理され、良く書かれていると思いますか？',
	'articlefeedback-alpha-articlerating' => 'ページの評価',
	'articlefeedback-alpha-error' => 'エラーが発生しました。
後でもう一度試みてください。',
	'articlefeedback-alpha-thanks' => 'ありがとうございます！評価は保存されました。',
	'articlefeedback-alpha-featurefeedback' => 'この機能について<span class="feedbacklink">評価</span>をお願いします。',
	'articlefeedback-alpha-noratings' => '$1（$2の{{PLURAL:$2|評価}}）',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "このページは、最後に評価してから、''修正''されました。
もう一度、評価してはいかがでしょうか。",
	'articlefeedback-alpha-results-show' => '（結果は隠されています。<span class="showlink">表示</span>する。）',
	'articlefeedback-alpha-results-hide' => '（<span class="hidelink">結果を隠す</span>）',
	'articlefeedback-alpha-survey-question-whyrated' => '今日、なぜこのページを評価したか教えてください（該当するものすべてにチェックを入れてください）：',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'ページの総合的評価を投稿したかった',
	'articlefeedback-alpha-survey-answer-whyrated-development' => '自分の評価が、このページの成長に良い影響を与えることを望んでいる',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => '{{SITENAME}}に貢献したい',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => '意見を共有したい',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => '今日は評価しなかったが、この機能に関するフィードバックをしたかった。',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'その他',
	'articlefeedback-alpha-survey-question-useful' => 'これらの評価は、分かりやすく、役に立つものだと思いますか？',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'なぜですか？',
	'articlefeedback-alpha-survey-question-expert' => '自分が、このページが扱う領域の専門家だと思いますか？',
	'articlefeedback-alpha-survey-question-expert-iftrue' => '専門知識を述べることができますか？',
	'articlefeedback-alpha-survey-question-comments' => '他に追加すべきコメントがありますか？',
	'articlefeedback-alpha-survey-submit' => '送信',
	'articlefeedback-alpha-survey-title' => '質問に少しお答えください',
	'articlefeedback-alpha-survey-thanks' => '調査に記入していただき、ありがとうございます。',
	'articlefeedback-beta-form-tab-label' => 'フィードバックを提供',
	'articlefeedback-beta-form-panel-title' => 'フィードバック',
	'articlefeedback-beta-form-panel-instructions' => 'このページの評価を算出していますので、少しお待ちください。',
	'articlefeedback-beta-form-panel-notice' => '評価は、時間が経過すると反映されなくなります。',
	'articlefeedback-beta-form-panel-submit' => 'フィードバックを送信',
	'articlefeedback-beta-report-tab-label' => '結果を表示',
	'articlefeedback-beta-report-panel-title' => 'フィードバック結果',
	'articlefeedback-beta-field-wellsourced-label' => '出典がよく示されている',
	'articlefeedback-beta-field-wellsourced-tip' => 'このページは、十分な出典があり、それらの出典は信頼できる情報源によるものですか？',
	'articlefeedback-beta-field-complete-label' => '完成度',
	'articlefeedback-beta-field-complete-tip' => 'この記事は、不可欠な話題を、説明していると思いますか？',
	'articlefeedback-beta-field-neutral-label' => '中立性',
	'articlefeedback-beta-field-neutral-tip' => 'このページは、ある問題に対する全ての観点を平等に説明していると思いますか？',
	'articlefeedback-beta-field-readable-label' => '読みやすさ',
	'articlefeedback-beta-field-readable-tip' => 'この記事は、良く整理され、良く書かれていると思いますか？',
);

/** Korean (한국어)
 * @author Kwj2772
 */
$messages['ko'] = array(
	'articlefeedback' => '문서 평가',
	'articlefeedback-desc' => '문서 평가 (파일럿 버전)',
	'articlefeedback-alpha-yourfeedback' => '피드백',
	'articlefeedback-alpha-pleaserate' => '이 문서를 평가하는 데 잠시 시간을 내 주십시오.',
	'articlefeedback-alpha-submit' => '제출',
	'articlefeedback-alpha-rating-wellsourced' => '출처가 잘 제시됨:',
	'articlefeedback-alpha-rating-neutrality' => '중립성:',
	'articlefeedback-alpha-rating-completeness' => '완성도:',
	'articlefeedback-alpha-rating-readability' => '가독성:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => '이 문서가 출처를 충분히 제시하고 있고 그 출처가 신뢰할 수 있다고 생각하십니까?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => '이 문서가 대상에 대해 중립적인 관점에서 쓰여 있다고 생각하십니까?',
	'articlefeedback-alpha-rating-completeness-tooltip' => '당신은 이 문서가 다루어야 할 중요한 주제에 대해 잘 다루고 있다고 생각하십니까?',
	'articlefeedback-alpha-rating-readability-tooltip' => '당신은 이 문서의 구성이 잘 짜여져 있고 글이 잘 쓰여있다고 생각하십니까?',
	'articlefeedback-alpha-articlerating' => '문서 평가',
	'articlefeedback-alpha-error' => '오류가 발생했습니다.
잠시 후에 대시 시도하십시오.',
	'articlefeedback-alpha-thanks' => '감사합니다! 당신이 평가한 내용이 저장되었습니다.',
	'articlefeedback-alpha-featurefeedback' => '이 기능에 대한 <span class="feedbacklink">피드백</span>을 남겨주세요.',
	'articlefeedback-alpha-noratings' => '$1 ($2{{PLURAL:$2|명이 평가}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => '이 문서는 당신이 평가한 이후 내용이 바뀌었습니다.
다시 평가하실 수 있습니다.',
	'articlefeedback-alpha-results-show' => '(결과가 숨겨져 있습니다. <span class="showlink">결과 보기</span>)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">결과 숨기기</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => '오늘 이 문서를 왜 평가했는지 알려주십시오 (해당되는 모든 항목에 체크해주세요):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => '이 문서에 대한 전체적인 평가에 기여하고 싶어서',
	'articlefeedback-alpha-survey-answer-whyrated-development' => '내가 한 평가가 문서 발전에 긍정적인 영향을 줄 수 있다고 생각해서',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => '{{SITENAME}}에 기여하고 싶어서',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => '내 의견을 공유하고 싶어서',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => '오늘 평가를 하지는 않았지만 이 기능에 대해 피드백을 남기고 싶어서',
	'articlefeedback-alpha-survey-answer-whyrated-other' => '기타',
	'articlefeedback-alpha-survey-question-useful' => '당신은 평가한 것이 유용하고 명확할 것이라 생각하십니까?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => '왜 그렇게 생각하십니까?',
	'articlefeedback-alpha-survey-question-expert' => '당신은 이 문서가 다루고 있는 분야에 대해 전문가라고 생각하십니까?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => '당신의 전문 지식에 대해 설명해주실 수 있습니까?',
	'articlefeedback-alpha-survey-question-comments' => '다른 의견이 있으십니까?',
	'articlefeedback-alpha-survey-submit' => '제출',
	'articlefeedback-alpha-survey-title' => '몇 가지 질문에 답해 주시기 바랍니다.',
	'articlefeedback-alpha-survey-thanks' => '설문에 응해 주셔서 감사합니다.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Catrope
 * @author Robby
 */
$messages['lb'] = array(
	'articlefeedback' => 'Artikelaschätzung',
	'articlefeedback-desc' => 'Artikelaschätzung Pilotversioun',
	'articlefeedback-alpha-yourfeedback' => 'Äre Feedback',
	'articlefeedback-alpha-pleaserate' => 'Huelt Iech w.e.g. een Ament fir déi Säit hei drënner ze bewäerten.',
	'articlefeedback-alpha-submit' => 'Späicheren',
	'articlefeedback-alpha-rating-wellsourced' => 'Gudd dokumentéiert:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Komplett:',
	'articlefeedback-alpha-rating-readability' => 'Verständlech:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Hutt Dir den Androck datt dës Säit genuch Zitater huet an datt dës Zitater aus vertrauenswierdege Quelle kommen?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Hutt Dir den Androck datt dës Säit eng ausgeglache Presentatioun vun alle Perspektive vun dësem Thema weist?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Hutt dir den Androck datt dës Säit déi wesentlech Aspekter vun dësem Sujet behandelt déi solle beliicht ginn?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Hutt Dir den Androck datt dës Säit gutt organiséiert a gutt geschriwwen ass?',
	'articlefeedback-alpha-articlerating' => 'Bewäertung vum Artikel',
	'articlefeedback-alpha-error' => 'Et ass e Feeler geschitt.
Probéiert w.e.g. méi spéit nach emol.',
	'articlefeedback-alpha-thanks' => 'Merci! Är Bewäertung gouf gespäichert.',
	'articlefeedback-alpha-featurefeedback' => 'Gitt eis Äre <span class="feedbacklink">Feedback</span> vun dëser Fonctioun.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|Bewäertung|Bewäertungen}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Dësen Artikel gouf zënter datt Dir e fir d'lescht nogekuckt hutt ''verännert''.
Et kéint sinn datt dir en nei bewäerte wëllt.",
	'articlefeedback-alpha-results-show' => '(D\'Resultater si verstopp. Resultater <span class="showlink">weisen</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Resultater verstoppen</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Sot eis w.e.g. firwat datt Dir dës säit bewäert hutt (klickt alles u wat zoutrëfft):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Ech wollt zur allgemenger Bewäertung vun der Säit bedroen',
	'articlefeedback-alpha-survey-answer-whyrated-development' => "Ech hoffen datt meng Bewäertung d'Entwécklung vun der Säit positiv beaflosst",
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Ech wollt mech un {{SITENAME}} bedeelegen',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Ech deele meng Meenung gäre mat',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Ech hunn haut keng Bewäertung ofginn, awer ech wollt mäi Feedback zu dëser Fonctionalitéit ginn',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Anerer',
	'articlefeedback-alpha-survey-question-useful' => "Mengt Dir datt d'Bewäertungen hei nëtzlech a kloer sinn?",
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Firwat?',
	'articlefeedback-alpha-survey-question-expert' => 'Betruecht Dir Iech selwer als Expert am Gebitt dat op dëser Säit behandelt gëtt?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Kënnt Dir Äert Wësse beschreiwen?',
	'articlefeedback-alpha-survey-question-comments' => 'Hutt Dir nach aner Bemierkungen?',
	'articlefeedback-alpha-survey-submit' => 'Späicheren',
	'articlefeedback-alpha-survey-title' => 'Beäntwert w.e.g. e puer Froen',
	'articlefeedback-alpha-survey-thanks' => 'Merci datt Dir eis Ëmfro ausgefëllt hutt.',
	'articlefeedback-beta-form-tab-label' => 'Feedback ofgin',
	'articlefeedback-beta-form-panel-title' => 'Äre Feedback',
	'articlefeedback-beta-form-panel-instructions' => 'Huelt Iech w.e.g. een Ament fir d¨s Säit ze bewäerten.',
	'articlefeedback-beta-form-panel-notice' => 'Är Bewäertunge lafe mat der Zäit of.',
	'articlefeedback-beta-form-panel-submit' => 'Feedback iwwerdroen',
	'articlefeedback-beta-report-tab-label' => 'Resultater weisen',
	'articlefeedback-beta-report-panel-title' => 'Resultater vum Fedback',
	'articlefeedback-beta-field-wellsourced-label' => 'Gutt dokumentéiert',
	'articlefeedback-beta-field-wellsourced-tip' => 'Hutt Dir den Androck datt dës Säit genuch Zitater huet an datt dës Zitater aus vertrauenswierdege Quelle kommen?',
	'articlefeedback-beta-field-complete-label' => 'Komplett',
	'articlefeedback-beta-field-complete-tip' => 'Hutt dir den Androck datt dës Säit déi wesentlech Aspekter vun dësem Sujet behandelt déi solle beliicht ginn?',
	'articlefeedback-beta-field-neutral-label' => 'Neutral',
	'articlefeedback-beta-field-neutral-tip' => 'Hutt Dir den Androck datt dës Säit eng ausgeglache Presentatioun vun alle Perspektive vun dësem Thema weist?',
	'articlefeedback-beta-field-readable-label' => 'Liesbar',
	'articlefeedback-beta-field-readable-tip' => 'Hutt Dir den Androck datt dës Säit gutt organiséiert a gutt geschriwwen ass?',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'articlefeedback' => 'Paginabeoordeiling',
	'articlefeedback-desc' => 'Paginabeoordeiling (tesversie)',
	'articlefeedback-alpha-yourfeedback' => 'Diene feedback',
	'articlefeedback-alpha-pleaserate' => "Gaef e.t.b. 'n beoordeiling van dees pagina.",
	'articlefeedback-alpha-submit' => 'Slaon óp',
	'articlefeedback-alpha-rating-wellsourced' => 'Good van brónne veurzeen:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutraal:',
	'articlefeedback-alpha-rating-completeness' => 'Compleet:',
	'articlefeedback-alpha-rating-readability' => 'Laesber:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Vinjs se det dees pagina zat brónne haet en det de brónne betroewber zeen?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => "Vinjs se det dees pagina 'n ieërlike waergaaf is van alle invalsheuk veur dit óngerwerp?",
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Vinjs se det dees pagina de essentie van dit óngerwerp bestriek?',
	'articlefeedback-alpha-rating-readability-tooltip' => "Vinjs se det dees pagina 'ne krekten ópboew haet en good is gesjreve?",
	'articlefeedback-alpha-articlerating' => 'Paginawaardering',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Anges',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Wróm?',
);

/** Latvian (Latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'articlefeedback-alpha-yourfeedback' => 'Tavas atsauksmes',
	'articlefeedback-alpha-pleaserate' => 'Lūdzu, velti laiku, lai novērtētu šo lapu.',
	'articlefeedback-alpha-submit' => 'Iesniegt',
	'articlefeedback-alpha-rating-wellsourced' => 'Korektas atsauces:',
	'articlefeedback-alpha-rating-neutrality' => 'Neitralitāte:',
	'articlefeedback-alpha-rating-completeness' => 'Pilnīgums:',
	'articlefeedback-alpha-rating-readability' => 'Lasāmība:',
	'articlefeedback-alpha-articlerating' => 'Lapas vērtējums',
	'articlefeedback-alpha-error' => 'Notika kļūda. 
Lūdzu, mēģini vēlreiz vēlāk.',
	'articlefeedback-alpha-thanks' => 'Paldies! Tavs vērtējums ir saglabāts.',
	'articlefeedback-alpha-results-show' => '(Rezultāti paslēpti. <span class="showlink">Parādīt</span> tos.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Paslēpt rezultātus</span>)',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Man patīk dalīties ar viedokli',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Cits',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Kāpēc?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Vai tu vari aprakstīt savu specializāciju?',
	'articlefeedback-alpha-survey-question-comments' => 'Vai tev ir kādi papildus komentāri?',
	'articlefeedback-alpha-survey-submit' => 'Iesniegt',
	'articlefeedback-alpha-survey-title' => 'Lūdzu, atbildi uz dažiem jautājumiem',
	'articlefeedback-alpha-survey-thanks' => 'Paldies par piedalīšanos aptaujā.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'articlefeedback' => 'Оценување на статија',
	'articlefeedback-desc' => 'Пилотна верзија на Оценување на статија',
	'articlefeedback-alpha-yourfeedback' => 'Ваше мислење',
	'articlefeedback-alpha-pleaserate' => 'Одвојте момент за да ја оцените страницава подолу',
	'articlefeedback-alpha-submit' => 'Поднеси',
	'articlefeedback-alpha-rating-wellsourced' => 'Доволно извори:',
	'articlefeedback-alpha-rating-neutrality' => 'Неутрална:',
	'articlefeedback-alpha-rating-completeness' => 'Исцрпна:',
	'articlefeedback-alpha-rating-readability' => 'Читлива:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Дали сметате дека статијава има доволно наводи и дека се преземени од доверливи извори?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Дали сметате дека статијава на праведен начин ги застапува сите гледишта на оваа проблематика?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Дали сметате дека статијава ги обработува најважните основни теми што треба да се обработат?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Дали сметате дека статијава е добро организирана и убаво напишана?',
	'articlefeedback-alpha-articlerating' => 'Оценки за статијата',
	'articlefeedback-alpha-error' => 'Се појави грешка.
Обидете се подоцна.',
	'articlefeedback-alpha-thanks' => 'Ви благодариме! Вашите оценки се зачувани.',
	'articlefeedback-alpha-featurefeedback' => 'Дајте ваше <span class="feedbacklink">мислење</span> за оваа функција.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|оценка|оценки}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Статијава е ''преработена'' од последниот преглеед наваму.
Ви предлагаме да ја преоцените.",
	'articlefeedback-alpha-results-show' => '(Резултатите се скриени. <span class="showlink">Прикажи</span> ги.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Сокриј резултати</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Кажете ни зошто ја оценивте страницава денес (штиклирајте ги сите релевантни одговори)',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Сакав да придонесам кон севкупната оцена на страницата',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Се надевам дека мојата оценка ќе влијае позитивно на развојот на страницата',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Сакав да придонесам кон {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Сакам да го искажувам моето мислење',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Не оценував денес, туку сакав да искажам мое мислење за функцијата',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Друго',
	'articlefeedback-alpha-survey-question-useful' => 'Дали сметате дека дадените оценки се полезни и јасни?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Зошто?',
	'articlefeedback-alpha-survey-question-expert' => 'Дали се сметате за стручњак во тематиката што се обработува на страницава?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Можете ли да ги опишете вашите стручни познавања?',
	'articlefeedback-alpha-survey-question-comments' => 'Имате некои други забелешки?',
	'articlefeedback-alpha-survey-submit' => 'Поднеси',
	'articlefeedback-alpha-survey-title' => 'Ве молиме одговорете на неколку прашања',
	'articlefeedback-alpha-survey-thanks' => 'Ви благодариме што ја пополнивте анкетата.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'articlefeedback' => 'ലേഖനത്തിന്റെ മൂല്യനിർണ്ണയം',
	'articlefeedback-desc' => 'ലേഖനത്തിന്റെ മൂല്യനിർണ്ണയം (പ്രാരംഭ പതിപ്പ്)',
	'articlefeedback-alpha-yourfeedback' => 'താങ്കളുടെ അഭിപ്രായങ്ങൾ',
	'articlefeedback-alpha-pleaserate' => 'താഴെ ഈ താളിന്റെ മൂല്യനിർണ്ണയം നടത്താൻ ഒരു നിമിഷം ചിലവാക്കുക.',
	'articlefeedback-alpha-submit' => 'സമർപ്പിക്കുക',
	'articlefeedback-alpha-rating-wellsourced' => 'സ്രോതസ്സധിഷ്ഠിതം:',
	'articlefeedback-alpha-rating-neutrality' => 'നിഷ്പക്ഷം:',
	'articlefeedback-alpha-rating-completeness' => 'സമ്പൂർണ്ണം:',
	'articlefeedback-alpha-rating-readability' => 'വായനായോഗ്യം:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'ഈ താളിൽ വിശ്വസനീയങ്ങളായ സ്രോതസ്സുകളെ ആശ്രയിക്കുന്ന ആവശ്യമായത്ര അവലംബങ്ങൾ ഉണ്ടെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'ഈ താളിൽ വിഷയത്തിന്റെ എല്ലാ വശത്തിനും അർഹമായ പ്രാതിനിധ്യം ലഭിച്ചതായി താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'ഈ താൾ അത് ഉൾക്കൊള്ളേണ്ട എല്ലാ മേഖലകളും ഉൾക്കൊള്ളുന്നതായി താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'ഈ താൾ നന്നായി ക്രമീകരിക്കപ്പെട്ടതും നന്നായി എഴുതപ്പെട്ടതുമാണെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-alpha-articlerating' => 'താളിന്റെ നിലവാരം',
	'articlefeedback-alpha-error' => 'എന്തോ പിഴവുണ്ടായിരിക്കുന്നു.
ദയവായി വീണ്ടും ശ്രമിക്കുക.',
	'articlefeedback-alpha-thanks' => 'നന്ദി! താങ്കൾ നടത്തിയ മൂല്യനിർണ്ണയം സേവ് ചെയ്തിരിക്കുന്നു.',
	'articlefeedback-alpha-featurefeedback' => 'ഈ സൗകര്യത്തെക്കുറിച്ചുള്ള <span class="feedbacklink">അഭിപ്രായങ്ങൾ</span> അറിയിക്കുക.',
	'articlefeedback-alpha-noratings' => '$1 ({{PLURAL:$2|ഒരു നിലവാരമിടൽ|$2 നിലവാരമിടലുകൾ}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "താങ്കൾ നിലവാരമിട്ട ശേഷം ഈ താൾ ''മെച്ചപ്പെടുത്തിയിരിക്കുന്നു''
ആവശ്യമെങ്കിൽ താങ്കൾക്ക് വീണ്ടും നിലവാരമിടാവുന്നതാണ്.",
	'articlefeedback-alpha-results-show' => '(ഫലങ്ങൾ ദൃശ്യമല്ല. അവ <span class="showlink">പ്രദർശിപ്പിക്കുക</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">ഫലങ്ങൾ മറയ്ക്കുക</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'ഈ താളിന് താങ്കൾ ഇന്ന് നിലവാരമിട്ടതെന്തുകൊണ്ടാണെന്ന് ദയവായി പറയാമോ (ബാധകമാകുന്ന എല്ലാം തിരഞ്ഞെടുക്കുക):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'താളിന്റെ ആകെ നിലവാരം നിർണ്ണയിക്കാൻ ഞാനാഗ്രഹിക്കുന്നു',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'ഞാനിട്ട നിലവാരം താളിന്റെ വികസനത്തിൽ ക്രിയാത്മകമായ ഫലങ്ങൾ സൃഷ്ടിക്കുമെന്ന് കരുതുന്നു',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'ഞാൻ {{SITENAME}} സംരംഭത്തിൽ സംഭാവന ചെയ്യാൻ ആഗ്രഹിക്കുന്നു',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'എന്റെ അഭിപ്രായം പങ്ക് വെയ്ക്കുന്നതിൽ സന്തോഷമേയുള്ളു',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'ഞാനിന്ന് നിലവാരനിർണ്ണയം നടത്തിയിട്ടില്ല, പക്ഷേ ഈ സൗകര്യം സംബന്ധിച്ച അഭിപ്രായം അറിയിക്കാൻ ആഗ്രഹിക്കുന്നു',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'മറ്റുള്ളവ',
	'articlefeedback-alpha-survey-question-useful' => 'നൽകിയിരിക്കുന്ന നിലവാരം ഉപകാരപ്രദവും വ്യക്തവുമാണെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'എന്തുകൊണ്ട്?',
	'articlefeedback-alpha-survey-question-expert' => 'ഈ താളിലെ വിഷയത്തിൽ താങ്കൾ വിദഗ്ദ്ധനാണെന്ന് താങ്കൾ സ്വയം കരുതുന്നുണ്ടോ?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'താങ്കളുടെ വൈദഗ്ദ്ധ്യം വിവരിക്കാമോ?',
	'articlefeedback-alpha-survey-question-comments' => 'താങ്കൾക്ക് മറ്റെന്തെങ്കിലും അഭിപ്രായങ്ങൾ പങ്ക് വെയ്ക്കാനുണ്ടോ?',
	'articlefeedback-alpha-survey-submit' => 'സമർപ്പിക്കുക',
	'articlefeedback-alpha-survey-title' => 'ദയവായി ഏതാനം ചോദ്യങ്ങൾക്ക് ഉത്തരം നൽകുക',
	'articlefeedback-alpha-survey-thanks' => 'സർവേ പൂരിപ്പിച്ചതിനു നന്ദി',
	'articlefeedback-beta-form-tab-label' => 'അഭിപ്രായങ്ങൾ അറിയിക്കുക',
	'articlefeedback-beta-form-panel-title' => 'താങ്കളുടെ അഭിപ്രായം',
	'articlefeedback-beta-form-panel-instructions' => 'താഴെ ഈ താളിന്റെ മൂല്യനിർണ്ണയം നടത്താൻ ഒരു നിമിഷം ചിലവാക്കുക.',
	'articlefeedback-beta-form-panel-notice' => 'താങ്കളിട്ട നിലവാരം പിന്നീടൊരിക്കൽ ഇല്ലാതാകുന്നതാണ്.',
	'articlefeedback-beta-form-panel-submit' => 'അഭിപ്രായം സമർപ്പിക്കുക',
	'articlefeedback-beta-report-tab-label' => 'ഫലങ്ങൾ പ്രദർശിപ്പിക്കുക',
	'articlefeedback-beta-report-panel-title' => 'അഭിപ്രായങ്ങൾ',
	'articlefeedback-beta-field-wellsourced-label' => 'സ്രോതസ്സധിഷ്ഠിതം',
	'articlefeedback-beta-field-wellsourced-tip' => 'ഈ താളിൽ വിശ്വസനീയങ്ങളായ സ്രോതസ്സുകളെ ആശ്രയിക്കുന്ന ആവശ്യമായത്ര അവലംബങ്ങൾ ഉണ്ടെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-beta-field-complete-label' => 'സമ്പൂർണ്ണം',
	'articlefeedback-beta-field-complete-tip' => 'ഈ താൾ അത് ഉൾക്കൊള്ളേണ്ട എല്ലാ മേഖലകളും ഉൾക്കൊള്ളുന്നതായി താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-beta-field-neutral-label' => 'നിഷ്പക്ഷം',
	'articlefeedback-beta-field-neutral-tip' => 'ഈ താളിൽ വിഷയത്തിന്റെ എല്ലാ വശത്തിനും അർഹമായ പ്രാതിനിധ്യം ലഭിച്ചതായി താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-beta-field-readable-label' => 'വായനായോഗ്യം',
	'articlefeedback-beta-field-readable-tip' => 'ഈ താൾ നന്നായി ക്രമീകരിക്കപ്പെട്ടതും നന്നായി എഴുതപ്പെട്ടതുമാണെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'articlefeedback-alpha-submit' => 'Явуулах',
	'articlefeedback-alpha-survey-submit' => 'Явуулах',
);

/** Malay (Bahasa Melayu)
 * @author Aviator
 */
$messages['ms'] = array(
	'articlefeedback' => 'Pentaksiran rencana',
	'articlefeedback-desc' => 'Pentaksiran rencana (versi percubaan)',
	'articlefeedback-alpha-yourfeedback' => 'Maklum balas anda',
	'articlefeedback-alpha-pleaserate' => 'Sila luangkan masa untuk menilai laman ini di bawah.',
	'articlefeedback-alpha-submit' => 'Serah',
	'articlefeedback-alpha-rating-wellsourced' => 'Bersumber:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Lengkap:',
	'articlefeedback-alpha-rating-readability' => 'Mudah dibaca:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Adakah laman ini mempunyai pemetikan-pemetikan yang cukup dan diambil daripada sumber-sumber yang boleh dipercayai?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Adakah laman ini teratur dan ditulis dengan baik?',
	'articlefeedback-alpha-articlerating' => 'Penilaian laman',
	'articlefeedback-alpha-error' => 'Berlaku ralat. Sila cuba lagi lain kali.',
	'articlefeedback-alpha-thanks' => 'Terima kasih! Penilaian anda telah disimpan.',
	'articlefeedback-alpha-featurefeedback' => 'Beri kami <span class="feedbacklink">maklum balas</span> mengenai ciri ini.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|penilaian|penilaian}})',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Лия',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Мезекс?',
	'articlefeedback-alpha-survey-submit' => 'Максомс',
);

/** Dutch (Nederlands)
 * @author Catrope
 * @author Siebrand
 */
$messages['nl'] = array(
	'articlefeedback' => 'Paginabeoordeling',
	'articlefeedback-desc' => 'Paginabeoordeling (testversie)',
	'articlefeedback-alpha-yourfeedback' => 'Uw terugkoppeling',
	'articlefeedback-alpha-pleaserate' => 'Geef alstublieft een beoordeling van deze pagina.',
	'articlefeedback-alpha-submit' => 'Opslaan',
	'articlefeedback-alpha-rating-wellsourced' => 'Goed van bronnen voorzien:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutraal:',
	'articlefeedback-alpha-rating-completeness' => 'Compleet:',
	'articlefeedback-alpha-rating-readability' => 'Leesbaar:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Vindt u dat deze pagina voldoende bronvermeldingen heeft en dat de bronvermeldingen betrouwbaar zijn?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Vindt u dat deze pagina een eerlijke weergave is van alle invalshoeken voor dit onderwerp?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Vindt u dat deze pagina de essentie van dit onderwerp bestrijkt?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Vindt u dat deze pagina een correcte opbouw heeft een goed is geschreven?',
	'articlefeedback-alpha-articlerating' => 'Paginawaardering',
	'articlefeedback-alpha-error' => 'Er is een fout opgetreden. 
Probeer het later opnieuw.',
	'articlefeedback-alpha-thanks' => 'Bedankt!
Uw beoordeling is opgeslagen.',
	'articlefeedback-alpha-featurefeedback' => 'Geef ons <span class="feedbacklink">terugkoppeling</span> over deze functie.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|beoordeling|beoordelingen}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Deze pagina is ''aangepast'' sinds uw beoordeling.
Wilt u de pagina opnieuw beoordelen?",
	'articlefeedback-alpha-results-show' => '(<span class="showlink">resultaten weergeven</span>)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">resultaten verbergen</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Laat ons weten waarom u deze pagina vandaag hebt beoordeeld (kies alle redenen die van toepassing zijn):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Ik wil bijdragen aan de beoordelingen van de pagina',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Ik hoop dat mijn beoordeling een positief effect heeft op de ontwikkeling van de pagina',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Ik wilde bijdragen aan {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Ik vind het fijn om mijn mening te delen',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => "Ik heb vandaag geen pagina's beoordeeld, maar in de toekomst wil ik wel terugkoppeling geven",
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Anders',
	'articlefeedback-alpha-survey-question-useful' => 'Vindt u dat de beoordelingen bruikbaar en duidelijk zijn?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Waarom?',
	'articlefeedback-alpha-survey-question-expert' => 'Vindt u zichzelf een expert in de materie waarover deze pagina gaat?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Kunt u uw expertise beschrijven?',
	'articlefeedback-alpha-survey-question-comments' => 'Hebt u nog opmerkingen?',
	'articlefeedback-alpha-survey-submit' => 'Opslaan',
	'articlefeedback-alpha-survey-title' => 'Beantwoord alstublieft een paar vragen',
	'articlefeedback-alpha-survey-thanks' => 'Bedankt voor het beantwoorden van de vragen.',
	'articlefeedback-beta-form-tab-label' => 'Terugkoppeling geven',
	'articlefeedback-beta-form-panel-title' => 'Uw terugkoppeling',
	'articlefeedback-beta-form-panel-instructions' => 'Geef alstublieft een beoordeling van deze pagina.',
	'articlefeedback-beta-form-panel-notice' => 'Uw beoordeling vervalt na verloop van tijd.',
	'articlefeedback-beta-form-panel-submit' => 'Terugkoppeling opslaan',
	'articlefeedback-beta-report-tab-label' => 'Resultaten weergeven',
	'articlefeedback-beta-report-panel-title' => 'Terugkoppelingsresultaten',
	'articlefeedback-beta-field-wellsourced-label' => 'Goed van bronnen voorzien',
	'articlefeedback-beta-field-wellsourced-tip' => 'Vindt u dat deze pagina voldoende bronvermeldingen heeft en dat de bronvermeldingen betrouwbaar zijn?',
	'articlefeedback-beta-field-complete-label' => 'Afgerond',
	'articlefeedback-beta-field-complete-tip' => 'Vindt u dat deze pagina de essentie van dit onderwerp bestrijkt?',
	'articlefeedback-beta-field-neutral-label' => 'Neutraal',
	'articlefeedback-beta-field-neutral-tip' => 'Vindt u dat deze pagina een eerlijke weergave is van alle invalshoeken voor dit onderwerp?',
	'articlefeedback-beta-field-readable-label' => 'Leesbaar',
	'articlefeedback-beta-field-readable-tip' => 'Vindt u dat deze pagina een correcte opbouw heeft een goed is geschreven?',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Nghtwlkr
 */
$messages['nn'] = array(
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Kvifor?',
	'articlefeedback-alpha-survey-submit' => 'Send',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'articlefeedback' => 'Artikkelvurdering',
	'articlefeedback-desc' => 'Artikkelvurdering (pilotversjon)',
	'articlefeedback-alpha-yourfeedback' => 'Din tilbakemelding',
	'articlefeedback-alpha-pleaserate' => 'Vennligst ta deg tid til å vurdere denne siden nedenfor.',
	'articlefeedback-alpha-submit' => 'Send',
	'articlefeedback-alpha-rating-wellsourced' => 'Gode kildehenvisninger:',
	'articlefeedback-alpha-rating-neutrality' => 'Nøytral:',
	'articlefeedback-alpha-rating-completeness' => 'Komplett:',
	'articlefeedback-alpha-rating-readability' => 'Lesbar:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Føler du at denne siden har tilstrekkelig med siteringer og at disse siteringene kommer fra pålitelige kilder?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Føler du at denne siden viser en rettferdig representasjon av alle perspektiv på problemet?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Føler du at denne siden dekker de grunnleggende emneområdene som det burde?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Føler du at denne siden er godt organisert og godt skrevet?',
	'articlefeedback-alpha-articlerating' => 'Sidevurdering',
	'articlefeedback-alpha-error' => 'En feil har oppstått.
Prøv igjen senere.',
	'articlefeedback-alpha-thanks' => 'Takk! Din vurdering har blitt lagret.',
	'articlefeedback-alpha-featurefeedback' => 'Gi oss <span class="feedbacklink">tilbakemelding</span> på denne funksjonen.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|vurdering|vurderinger}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Denne siden har blitt ''revidert'' siden du siste vurderte den.
Du vil kanskje vurdere den på nytt.",
	'articlefeedback-alpha-results-show' => '(Resultat skjult. <span class="showlink">Vis</span> dem.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Skjul resultat</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Gi oss beskjed om hvorfor du vurderte denne siden idag (huk av alle som passer):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Jeg ønsket å bidra til den generelle vurderingen av denne siden',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Jeg håper at min vurdering vil påvirke utviklingen av siden positivt',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Jeg ønsket å bidra til {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Jeg liker å dele min mening',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Jeg ga ingen vurderinger idag, men ønsket å gi tilbakemelding på denne funksjonen',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Annet',
	'articlefeedback-alpha-survey-question-useful' => 'Tror du at vurderingene som blir gitt er nyttige og klare?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Hvorfor?',
	'articlefeedback-alpha-survey-question-expert' => 'Anser du degselv for å være en ekspert på feltet som denne siden dekker?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Kan du beskrive din ekspertise?',
	'articlefeedback-alpha-survey-question-comments' => 'Har du noen ytterligere kommentarer?',
	'articlefeedback-alpha-survey-submit' => 'Send',
	'articlefeedback-alpha-survey-title' => 'Svar på noen få spørsmål',
	'articlefeedback-alpha-survey-thanks' => 'Takk for at du fylte ut undersøkelsen.',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'articlefeedback' => 'Ocena artykułu',
	'articlefeedback-desc' => 'Ocena artykułu (wersja pilotażowa)',
	'articlefeedback-alpha-yourfeedback' => 'Twoja opinia',
	'articlefeedback-alpha-pleaserate' => 'Poświeć chwilę, aby ocenić poniższą stronę.',
	'articlefeedback-alpha-submit' => 'Zapisz',
	'articlefeedback-alpha-rating-wellsourced' => 'Dobre źródła',
	'articlefeedback-alpha-rating-neutrality' => 'Neutralny punkt widzenia',
	'articlefeedback-alpha-rating-completeness' => 'Wyczerpanie tematu',
	'articlefeedback-alpha-rating-readability' => 'Zrozumiałość',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Czy uważasz, że strona ma wystarczającą liczbę odnośników i że odnoszą się one do wiarygodnych źródeł?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Czy uważasz, że strona prezentuje wszystkie punkty widzenia na to zagadnienie?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Czy uważasz, że strona porusza wszystkie istotne aspekty, które powinna?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Czy uważasz, że strona jest poprawnie sformatowana oraz zrozumiale napisana?',
	'articlefeedback-alpha-articlerating' => 'Ocena strony',
	'articlefeedback-alpha-error' => 'Wystąpił błąd. 
Spróbuj ponownie później.',
	'articlefeedback-alpha-thanks' => 'Wystawiona przez Ciebie ocena została zapisana.',
	'articlefeedback-alpha-featurefeedback' => '<span class="feedbacklink">Napisz do autorów</span> co myślisz o tym rozszerzeniu.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|ocena|oceny|ocen}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Strona została ''zmieniona'' od czasu, gdy ją oceniałeś.
Możesz ocenić ją ponownie.",
	'articlefeedback-alpha-results-show' => '(Wyniki ukryte. <span class="showlink">Pokaż</span> je.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Ukryj wyniki</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Dlaczego oceniłeś dziś tę stronę (zaznacz wszystkie pasujące):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Chciałem mieć wpływ na ogólną ocenę strony',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Mam nadzieję, że moja ocena pozytywnie wpłynie na rozwój strony',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Chciałem mieć swój wkład w rozwój {{GRAMMAR:D.lp|{{SITENAME}}}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Lubię dzielić się swoją opinią',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Nie oceniałem dziś, ale chcę podzielić się swoją opinią na temat tego rozszerzenia',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Inny powód',
	'articlefeedback-alpha-survey-question-useful' => 'Czy uważasz, że taka metoda oceniania jest użyteczna i czytelna?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Dlaczego?',
	'articlefeedback-alpha-survey-question-expert' => 'Czy uważasz się za eksperta w tematyce, którą porusza ta strona?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Czy możesz opisać swój poziom wiedzy?',
	'articlefeedback-alpha-survey-question-comments' => 'Czy masz jakieś dodatkowe uwagi?',
	'articlefeedback-alpha-survey-submit' => 'Zapisz',
	'articlefeedback-alpha-survey-title' => 'Proszę udzielić odpowiedzi na kilka pytań',
	'articlefeedback-alpha-survey-thanks' => 'Dziękujemy za wypełnienie ankiety.',
	'articlefeedback-beta-form-tab-label' => 'Przesyłanie opinii',
	'articlefeedback-beta-form-panel-title' => 'Twoja opinia',
	'articlefeedback-beta-form-panel-instructions' => 'Poświeć chwilę, aby ocenić tę stronę.',
	'articlefeedback-beta-form-panel-notice' => 'Twoja ocena wygaśnie z upływem czasu.',
	'articlefeedback-beta-form-panel-submit' => 'Prześlij opinię',
	'articlefeedback-beta-report-tab-label' => 'Wyświetl wyniki',
	'articlefeedback-beta-report-panel-title' => 'Zebrane opinie',
	'articlefeedback-beta-field-wellsourced-label' => 'Dodane dobre źródła',
	'articlefeedback-beta-field-wellsourced-tip' => 'Czy uważasz, że strona ma wystarczającą liczbę odnośników i że odnoszą się one do wiarygodnych źródeł?',
	'articlefeedback-beta-field-complete-label' => 'Wyczerpanie tematu',
	'articlefeedback-beta-field-complete-tip' => 'Czy uważasz, że strona porusza wszystkie istotne aspekty, które powinna?',
	'articlefeedback-beta-field-neutral-label' => 'Neutralny punkt widzenia',
	'articlefeedback-beta-field-neutral-tip' => 'Czy uważasz, że strona prezentuje wszystkie punkty widzenia na to zagadnienie?',
	'articlefeedback-beta-field-readable-label' => 'Zrozumiałość',
	'articlefeedback-beta-field-readable-tip' => 'Czy uważasz, że strona jest właściwie sformatowana oraz zrozumiale napisana?',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'articlefeedback' => "Valutassion ëd j'artìcoj",
	'articlefeedback-desc' => "Version pilòta dla valutassion ëd j'artìcoj",
	'articlefeedback-alpha-yourfeedback' => 'Sò coment',
	'articlefeedback-alpha-pleaserate' => "Për piasì, ch'a dédica un moment për valuté la pàgina sì-sota.",
	'articlefeedback-alpha-submit' => 'Spediss',
	'articlefeedback-alpha-rating-wellsourced' => 'Con dle bon-e sorgiss:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Completa:',
	'articlefeedback-alpha-rating-readability' => 'Lesìbil:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => "Pens-lo che st'artìcol a l'abia a basta ëd citassion e che ste citassion a rivo da 'd sorgiss fidà?",
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Pens-lo che sta pàgina a smon-a na giusta rapresentassion ëd tuti ij pont ëd vista dla chestion?',
	'articlefeedback-alpha-rating-completeness-tooltip' => "Pens-lo che sta pàgina a coata ij tema essensiaj ëd l'argoment com a dovrìa?",
	'articlefeedback-alpha-rating-readability-tooltip' => 'Pens-lo che sta pàgina a sia bin organisà e bin scrivùa?',
	'articlefeedback-alpha-articlerating' => 'Valutassion ëd la pàgina',
	'articlefeedback-alpha-error' => "A l'é capitaje n'eror.
Për piasì, ch'a preuva torna pi tard.",
	'articlefeedback-alpha-thanks' => 'Mersì! Toe valutassion a son ëstàite salvà.',
	'articlefeedback-alpha-featurefeedback' => 'Ch\'an manda dij <span class="feedbacklink">coment</span> a propòsit ëd costa fonsionalità.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|valutassion|valutassion}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Sta pàgina a l'é stàita ''revisionà'' da quand ch'a l'ha revisionala chiel.
A podrìa vorèj valutela torna.",
	'articlefeedback-alpha-results-show' => '(Arzultà stërmà. <span class="showlink">Smonje</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Stërmé j\'arzultà</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => "Për piasì, ch'an fasa savèj përchè a l'ha valutà costa pàgina ancheuj (ch'a marca tut lòn ch'a-i intra):",
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'I vorìa contribuì a la valutassion global ëd la pàgina',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'I spero che mia valutassion a peussa toché positivament ël dësvlup ëd la pàgina',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'I veui contribuì a {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Am pias condivide mia opinion',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => "I l'heu pa dàit ëd valutassion ancheuj, ma i vorìa dé un coment an sla fonsionalità",
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Àutr',
	'articlefeedback-alpha-survey-question-useful' => 'Chërdës-to che le valutassion dàite a sio ùtij e ciàire?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Përchè?',
	'articlefeedback-alpha-survey-question-expert' => "As consìdera chiel midem n'espert ant ël camp che sta pàgina a coata?",
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Peuss-to descrive toa esperiensa?',
	'articlefeedback-alpha-survey-question-comments' => "Ha-lo d'àutri coment?",
	'articlefeedback-alpha-survey-submit' => 'Spediss',
	'articlefeedback-alpha-survey-title' => "Për piasì, ch'a risponda a chèich chestion",
	'articlefeedback-alpha-survey-thanks' => "Mersì d'avèj compilà ël questionari.",
);

/** Portuguese (Português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author Waldir
 */
$messages['pt'] = array(
	'articlefeedback' => 'Avaliação do artigo',
	'articlefeedback-desc' => 'Avaliação do artigo (versão de testes)',
	'articlefeedback-alpha-yourfeedback' => 'Os seus comentários',
	'articlefeedback-alpha-pleaserate' => 'Dedique um momento a avaliar esta página abaixo, por favor.',
	'articlefeedback-alpha-submit' => 'Enviar',
	'articlefeedback-alpha-rating-wellsourced' => 'Bem referenciado:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutro:',
	'articlefeedback-alpha-rating-completeness' => 'Completo:',
	'articlefeedback-alpha-rating-readability' => 'Fácil de ler:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Considera que esta página tem citações suficientes e que essas citações provêm de fontes fiáveis?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Acha que esta página representa, de forma equilibrada, todos os pontos de vista sobre o assunto?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Considera que esta página aborda os temas essenciais que deviam ser cobertos?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Acha que esta página está bem organizada e bem escrita?',
	'articlefeedback-alpha-articlerating' => 'Avaliação da página',
	'articlefeedback-alpha-error' => 'Ocorreu um erro. 
Tente novamente mais tarde, por favor.',
	'articlefeedback-alpha-thanks' => 'Obrigado! As suas avaliações foram gravadas.',
	'articlefeedback-alpha-featurefeedback' => 'Envie-nos os seus <span class="feedbacklink">comentários</span> sobre esta funcionalidade.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|avaliação|avaliações}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Esta página foi ''alterada'' desde a sua última revisão. 
Talvez queira voltar a avaliá-la.",
	'articlefeedback-alpha-results-show' => '(Resultados ocultados. <span class="showlink">Mostrá-los</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Ocultar os resultados</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Diga-nos porque é que classificou esta página hoje (marque todas as opções verdadeiras):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Queria contribuir para a classificação global da página',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Espero que a minha classificação afecte positivamente o desenvolvimento da página',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Queria colaborar com a {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Gosto de dar a minha opinião',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Hoje não classifiquei páginas, mas queria deixar o meu comentário sobre a funcionalidade',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Outra',
	'articlefeedback-alpha-survey-question-useful' => 'Acredita que as classificações dadas são úteis e claras?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Porquê?',
	'articlefeedback-alpha-survey-question-expert' => 'Considera-se um perito na área descrita nesta página?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Pode descrever a sua experiência?',
	'articlefeedback-alpha-survey-question-comments' => 'Tem mais comentários?',
	'articlefeedback-alpha-survey-submit' => 'Enviar',
	'articlefeedback-alpha-survey-title' => 'Por favor, responda a algumas perguntas',
	'articlefeedback-alpha-survey-thanks' => 'Obrigado por preencher o inquérito.',
	'articlefeedback-beta-form-tab-label' => 'Deixar comentário',
	'articlefeedback-beta-form-panel-title' => 'Os seus comentários',
	'articlefeedback-beta-form-panel-instructions' => 'Dedique um momento a avaliar esta página abaixo, por favor.',
	'articlefeedback-beta-form-panel-notice' => 'As suas classificações irão expirar ao longo do tempo.',
	'articlefeedback-beta-form-panel-submit' => 'Enviar comentários',
	'articlefeedback-beta-report-tab-label' => 'Mostrar resultados',
	'articlefeedback-beta-report-panel-title' => 'Resultados dos comentários',
	'articlefeedback-beta-field-wellsourced-label' => 'Bem referenciada',
	'articlefeedback-beta-field-wellsourced-tip' => 'Considera que esta página tem citações suficientes e que essas citações provêm de fontes fiáveis?',
	'articlefeedback-beta-field-complete-label' => 'Completa',
	'articlefeedback-beta-field-complete-tip' => 'Considera que esta página aborda os temas essenciais que deviam ser cobertos?',
	'articlefeedback-beta-field-neutral-label' => 'Neutra',
	'articlefeedback-beta-field-neutral-tip' => 'Acha que esta página representa, de forma equilibrada, todos os pontos de vista sobre o assunto?',
	'articlefeedback-beta-field-readable-label' => 'Fácil de ler',
	'articlefeedback-beta-field-readable-tip' => 'Acha que esta página está bem organizada e bem escrita?',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'articlefeedback' => 'Avaliação do artigo',
	'articlefeedback-desc' => 'Avaliação do artigo (versão de testes)',
	'articlefeedback-alpha-yourfeedback' => 'Os seus comentários',
	'articlefeedback-alpha-pleaserate' => 'Dedique um momento para avaliar esta página abaixo, por favor.',
	'articlefeedback-alpha-submit' => 'Enviar',
	'articlefeedback-alpha-rating-wellsourced' => 'Bem referenciado:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutro:',
	'articlefeedback-alpha-rating-completeness' => 'Completo:',
	'articlefeedback-alpha-rating-readability' => 'Fácil de ler:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Você considera que esta página tem citações suficientes e que essas citações provêm de fontes fiáveis?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Você acha que esta página representa, de forma equilibrada, todos os pontos de vista sobre o assunto?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Você considera que esta página aborda os temas essenciais que deviam ser cobertos?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Você acha que esta página está bem organizada e bem escrita?',
	'articlefeedback-alpha-articlerating' => 'Avaliação da página',
	'articlefeedback-alpha-error' => 'Ocorreu um erro. 
Por favor, tente novamente mais tarde.',
	'articlefeedback-alpha-thanks' => 'Obrigado! As suas avaliações foram salvas.',
	'articlefeedback-alpha-featurefeedback' => 'Envie-nos os seus <span class="feedbacklink">comentários</span> sobre esta funcionalidade.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|avaliação|avaliações}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Esta página foi ''alterada'' desde a sua última revisão. 
Talvez queira voltar a avaliá-la.",
	'articlefeedback-alpha-results-show' => '(Resultados ocultados. <span class="showlink">Mostrá-los</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Ocultar os resultados</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Diga-nos porque é que classificou esta página hoje, por favor (marque todas as opções as quais se aplicam):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Eu queria contribuir para a classificação global da página',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Eu espero que a minha classificação afete positivamente o desenvolvimento da página',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Eu queria colaborar com a {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Eu gosto de dar a minha opinião',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Hoje não classifiquei páginas, mas queria deixar o meu comentário sobre a funcionalidade',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Outra',
	'articlefeedback-alpha-survey-question-useful' => 'Você acredita que as classificações dadas são úteis e claras?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Por quê?',
	'articlefeedback-alpha-survey-question-expert' => "Você se considera um ''expert'' na área descrita nesta página?",
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Você pode descrever a sua experiência?',
	'articlefeedback-alpha-survey-question-comments' => 'Você tem mais algum comentário?',
	'articlefeedback-alpha-survey-submit' => 'Enviar',
	'articlefeedback-alpha-survey-title' => 'Por favor, responda a algumas perguntas',
	'articlefeedback-alpha-survey-thanks' => 'Obrigado por preencher o questionário.',
	'articlefeedback-beta-form-tab-label' => 'Deixar comentário',
	'articlefeedback-beta-form-panel-title' => 'Os seus comentários',
	'articlefeedback-beta-form-panel-instructions' => 'Dedique um momento a avaliar esta página abaixo, por favor.',
	'articlefeedback-beta-form-panel-notice' => 'As suas classificações irão expirar ao longo do tempo.',
	'articlefeedback-beta-form-panel-submit' => 'Enviar comentários',
	'articlefeedback-beta-report-tab-label' => 'Mostrar resultados',
	'articlefeedback-beta-report-panel-title' => 'Resultados dos comentários',
	'articlefeedback-beta-field-wellsourced-label' => 'Bem referenciada',
	'articlefeedback-beta-field-wellsourced-tip' => 'Você considera que esta página tem citações suficientes e que essas citações provêm de fontes fiáveis?',
	'articlefeedback-beta-field-complete-label' => 'Completa',
	'articlefeedback-beta-field-complete-tip' => 'Você considera que esta página aborda os temas essenciais que deviam ser cobertos?',
	'articlefeedback-beta-field-neutral-label' => 'Neutra',
	'articlefeedback-beta-field-neutral-tip' => 'Você acha que esta página representa, de forma equilibrada, todos os pontos de vista sobre o assunto?',
	'articlefeedback-beta-field-readable-label' => 'Fácil de ler',
	'articlefeedback-beta-field-readable-tip' => 'Acha que esta página está bem organizada e bem escrita?',
);

/** Romanian (Română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 * @author Strainu
 */
$messages['ro'] = array(
	'articlefeedback' => 'Evaluare articol',
	'articlefeedback-desc' => 'Evaluare articol (versiunea pilot)',
	'articlefeedback-alpha-yourfeedback' => 'Reacția dumneavoastră',
	'articlefeedback-alpha-pleaserate' => 'Vă rugăm să acordați un moment evaluării acestei pagini, mai jos.',
	'articlefeedback-alpha-submit' => 'Trimite',
	'articlefeedback-alpha-rating-wellsourced' => 'Bine referențiat:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutru:',
	'articlefeedback-alpha-rating-completeness' => 'Complet:',
	'articlefeedback-alpha-rating-readability' => 'Citeț:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Considerați că această pagină are suficiente citate/note și acestea provin din surse de încredere?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Considerați că această pagină conține o reprezentare echitabilă a tuturor perspectivelor privitoare la subiect?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Considerați că această pagină abordează subiectele esențiale care ar trebui acoperite?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Considerați că această pagină este bine organizată și bine scrisă?',
	'articlefeedback-alpha-articlerating' => 'Evaluarea paginii',
	'articlefeedback-alpha-error' => 'A apărut o eroare.
Vă rugăm să încercați din nou mai târziu.',
	'articlefeedback-alpha-thanks' => 'Vă mulțumim! Evaluările dumneavoastră au fost salvate.',
	'articlefeedback-alpha-featurefeedback' => 'Oferiți-ne <span class="feedbacklink">reacții</span> la această funcție.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|evaluare|evaluări}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Această pagină a fost ''revizuită'' de la ultima dumneavoastră examinare.
Poate doriți să o reevaluați.",
	'articlefeedback-alpha-results-show' => '(Rezultate ascunse. <span class="showlink">Arată-le</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Ascunde rezultatele</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Vă rugăm să ne spuneți de ce ați evaluat această pagină astăzi (bifați tot ce se aplică):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Am vrut să contribui la evaluarea paginii',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Sper ca evaluarea mea să afecteze pozitiv dezvoltarea paginii',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Am vrut să contribui la {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Îmi place să îmi împărtășesc opinia',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Nu am furnizat evaluări astăzi, însă am dorit să ofer reacții pe viitor',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Altul',
	'articlefeedback-alpha-survey-question-useful' => 'Considerați că evaluările furnizate sunt folositoare și clare?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'De ce?',
	'articlefeedback-alpha-survey-question-expert' => 'Vă considerați un expert în domeniul pe care îl acoperă această pagină?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Ne puteți descrie expertiza dumneavoastră?',
	'articlefeedback-alpha-survey-question-comments' => 'Aveți comentarii suplimentare?',
	'articlefeedback-alpha-survey-submit' => 'Trimite',
	'articlefeedback-alpha-survey-title' => 'Vă rugăm să răspundeți la câteva întrebări',
	'articlefeedback-alpha-survey-thanks' => 'Vă mulțumim pentru completarea sondajului.',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'articlefeedback' => 'Artichele de valutazione',
	'articlefeedback-desc' => 'Artichele de valutazione (versiune guidate)',
	'articlefeedback-alpha-yourfeedback' => "'U giudizie tune",
	'articlefeedback-alpha-submit' => 'Conferme',
	'articlefeedback-alpha-rating-wellsourced' => 'Belle probbie:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutrale:',
	'articlefeedback-alpha-rating-completeness' => 'Comblete:',
	'articlefeedback-alpha-rating-readability' => 'Leggibbele:',
	'articlefeedback-alpha-articlerating' => "Pundegge d'a pàgene",
	'articlefeedback-alpha-error' => "S'è verifecate 'nu errore.
Se preghe de pruvà cchiù nnande.",
	'articlefeedback-alpha-thanks' => "Grazie! 'A valutaziona toje ha state reggistrate.",
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Scunne le resultate</span>)',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => "Ije amm'a condrebbuì a {{SITENAME}}",
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => "Me chiace dìcere 'u penziere mèje",
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Otre',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Purcé?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Puè descrivere le esperienze tue?',
	'articlefeedback-alpha-survey-question-comments' => 'Tìne otre commende?',
	'articlefeedback-alpha-survey-submit' => 'Conferme',
	'articlefeedback-alpha-survey-title' => 'Se preghe de responnere a quacche dumanne',
	'articlefeedback-alpha-survey-thanks' => "Grazzie pè avè combilate 'u sondagge.",
);

/** Russian (Русский)
 * @author Assele
 * @author Catrope
 * @author MaxSem
 * @author Александр Сигачёв
 * @author Сrower
 */
$messages['ru'] = array(
	'articlefeedback' => 'Оценка статьи',
	'articlefeedback-desc' => 'Оценка статьи (экспериментальный вариант)',
	'articlefeedback-alpha-yourfeedback' => 'Ваш отзыв',
	'articlefeedback-alpha-pleaserate' => 'Пожалуйста, уделите минуту, чтобы оценить данную статью.',
	'articlefeedback-alpha-submit' => 'Отправить',
	'articlefeedback-alpha-rating-wellsourced' => 'Источники:',
	'articlefeedback-alpha-rating-neutrality' => 'Нейтральность:',
	'articlefeedback-alpha-rating-completeness' => 'Полнота:',
	'articlefeedback-alpha-rating-readability' => 'Читаемость:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Считаете ли вы, что на этой странице достаточно ссылок на источники, что источники являются достоверными?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Считаете ли вы, что эта страница объективно отражает все точки зрения по данной теме?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Считаете ли вы, что эта страница в достаточной мере раскрывает основные вопросы темы?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Считаете ли вы, что эта страница хорошо организована и хорошо написана?',
	'articlefeedback-alpha-articlerating' => 'Рейтинг страницы',
	'articlefeedback-alpha-error' => 'Произошла ошибка. 
Пожалуйста, повторите попытку позже.',
	'articlefeedback-alpha-thanks' => 'Спасибо! Ваши оценки сохранены.',
	'articlefeedback-alpha-featurefeedback' => 'Сообщите <span class="feedbacklink">ваше мнение</span> об этой функции.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|оценка|оценки|оценок}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => 'Эта страница редактировалась после Вашего просмотра. 
Вы можете оценить её еще раз.',
	'articlefeedback-alpha-results-show' => '(Результаты скрыты. <span class="showlink">Показать</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Скрыть результаты</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Пожалуйста, дайте нам знать, почему вы сегодня дали оценку этой странице (отметьте все подходящие варианты):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Я хотел повлиять на итоговый рейтинг этой страницы',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Я надеюсь, что моя оценка положительно повлияет на развитие этой страницы',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Я хочу содействовать развитию {{GRAMMAR:genitive|{{SITENAME}}}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Мне нравится делиться своим мнением',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Я не поставил сегодня оценку, но хочу оставить отзыв о данной функции',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Иное',
	'articlefeedback-alpha-survey-question-useful' => 'Считаете ли вы, что проставленные оценки являются полезными и понятными?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Почему?',
	'articlefeedback-alpha-survey-question-expert' => 'Считаете ли вы себя специалистом в области, к которой относится тема этой страницы?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Вы не могли бы высказать экспертную оценку?',
	'articlefeedback-alpha-survey-question-comments' => 'Есть ли у вас какие-либо дополнительные замечания?',
	'articlefeedback-alpha-survey-submit' => 'Отправить',
	'articlefeedback-alpha-survey-title' => 'Пожалуйста, ответьте на несколько вопросов',
	'articlefeedback-alpha-survey-thanks' => 'Спасибо за участие в опросе.',
	'articlefeedback-beta-form-tab-label' => 'Обратная связь',
	'articlefeedback-beta-form-panel-title' => 'Ваш отзыв',
);

/** Rusyn (Русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'articlefeedback' => 'Оцінка статї',
	'articlefeedback-desc' => 'Оцінка статї (експеріменталный варіант)',
	'articlefeedback-alpha-yourfeedback' => 'Ваш назор',
	'articlefeedback-alpha-pleaserate' => 'Просиме, найдьте собі час про оцінку той статї.',
	'articlefeedback-alpha-submit' => 'Одослати',
	'articlefeedback-alpha-rating-wellsourced' => 'Жрідла:',
	'articlefeedback-alpha-rating-neutrality' => 'Невтралность:',
	'articlefeedback-alpha-rating-completeness' => 'Комплетность:',
	'articlefeedback-alpha-rating-readability' => 'Чітательность:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Маєте чутя, же тота сторінка достаточно одказує на жрідла і хоснованы жрідла суть способны довірованя?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Маєте чутя, же тота сторінка справедливо покрывать вшыткы погляды на даны темы?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Маєте чутя, же тота сторінка покрывать вшыткы важны части темы?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Маєте чутя, же тота сторінка є правилно орґанізована о добрі написана?',
	'articlefeedback-alpha-articlerating' => 'Рейтінґ сторінкы',
	'articlefeedback-alpha-error' => 'Дішло ку хыбі.
Просиме, спробуйте то пізнїше.',
	'articlefeedback-alpha-thanks' => 'Дякуєме! Вашы оцінкы были уложены.',
	'articlefeedback-alpha-featurefeedback' => 'Сдїляйте нам свій <span class="feedbacklink">назор</span> на тоту функцію.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|оцінка|оцінкы|оцінок}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Од коли сьте сторінку {{GENDER:|оцінив|оцінила|оцінили}}, была ''управлена''.
Може єй будете хотїти оцінити знову.",
	'articlefeedback-alpha-results-show' => '(Резултаты схованы. <span class="showlink">Указати</span> їх.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Сховати резултаты</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Чом сьте днесь оцінили тоту сторінку (зачаркните вшыткы платны можности):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Хотїв єм овпливнити цалкову оцінку сторінкы',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Сподїваю ся, же мій рейтінґ буде позітівно впливати на вывой сторінкы',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Хотїв єм помочі {{grammar:3sg|{{SITENAME}}}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Люблю здїляти свій назор',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Днесь єм не оцінёвав, але хотїв єм додати свій назор на тоту функцію',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Інше',
	'articlefeedback-alpha-survey-question-useful' => 'Думаєте собі, же доданы оцінкы суть хосновны і зрозумітельны?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Чом?',
	'articlefeedback-alpha-survey-question-expert' => 'Поважуєте себе за шпеціалісти на область, о котрій тота сторінка їднає?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Можете описати свою шпеціалізацію?',
	'articlefeedback-alpha-survey-question-comments' => 'Маєте даякы додаточны коментарї?',
	'articlefeedback-alpha-survey-submit' => 'Одослати',
	'articlefeedback-alpha-survey-title' => 'Просиме, одповіджте на пару вопросів',
	'articlefeedback-alpha-survey-thanks' => 'Дякуєме за выповнїня звідованя.',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'articlefeedback' => 'Ыстатыйаны сыаналааһын',
	'articlefeedback-desc' => 'Ыстатыйаны сыаналааһын (тургутуллар барыла)',
	'articlefeedback-alpha-yourfeedback' => 'Эн санааҥ',
	'articlefeedback-alpha-pleaserate' => 'Бука диэн, сынньана таарыйа, бу ыстатыйаны сыаналаа эрэ',
	'articlefeedback-alpha-submit' => 'Ыытарга',
	'articlefeedback-alpha-rating-wellsourced' => 'Источниктар:',
	'articlefeedback-alpha-rating-neutrality' => 'Тэҥ сыһыан:',
	'articlefeedback-alpha-rating-completeness' => 'Толорута:',
	'articlefeedback-alpha-rating-readability' => 'Ааҕыллыыта:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Бу сирэйгэ баар билии источниктара төһө толору бэриллибиттэрий уонна онтуктара төһө бигэлэрий?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Бу сирэй бу тиэмэҕэ баар туох баар санаалары барыларын тэҥҥэ биэрбит дуо?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Бу тиэмэ сүрүн суолталара ыстатыйаҕа толору арыллыбыттар дуо?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Бу сирэй сөпкө аттарыллан, бэркэ суруллубут дии саныыгын дуо?',
	'articlefeedback-alpha-articlerating' => 'Сирэйи сыаналааһын',
	'articlefeedback-alpha-error' => 'Алҕас таҕыста.
Бука диэн хойутуу хос боруобалаар.',
	'articlefeedback-alpha-thanks' => 'Махтал! Сыанабылыҥ бигэргэтилиннэ.',
	'articlefeedback-alpha-featurefeedback' => 'Бу туһунан <span class="feedbacklink">бэйэҥ санааҕын</span> эт эрэ.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|сыанабыл|ахсааннаах сыанабыл}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => 'Бу сирэй эн көрбүтүҥ кэннэ уларытыллыбыт.
Өссө биирдэ сыаналыаххын сөп.',
	'articlefeedback-alpha-results-show' => '(Түмүктэрэ кистэммиттэр. <span class="showlink">Көрдөр</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Түмүктэрин кистээ</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Бука диэн эт эрэ, тоҕо бүгүн бу сирэйи сыаналаатыҥ (туох баар сөп түбэһэр барыллары бэлиэтээ):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Бу сирэй түмүк рейтинин уларытаары',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Сыанам бу сирэй тупсарыгар көмөлөһүө диэн санааттан',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => '{{GRAMMAR:genitive|{{SITENAME}}}} сайдыытыгар көмөлөһүөхпүн баҕарабын',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Бэйэм санаабын дьоҥҥо биллэрэрбин сөбүлүүбүн',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Бүгүн сыана бирбэтим, ол эрээри бу функция туһунан суруйуохпун баҕарабын',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Атын',
	'articlefeedback-alpha-survey-question-useful' => 'Баар сыанабыллар туһаланы аҕалыахтара дуо, өйдөнөллөр дуо?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Тоҕо?',
	'articlefeedback-alpha-survey-question-expert' => 'Бу сирэй тиэмэтигэр бэйэҕин специалист быһыытынан ааҕынаҕын дуо?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Эксперт быһыытынан сыана биэрэр кыахтааххын дуо?',
	'articlefeedback-alpha-survey-question-comments' => 'Ханнык эмит эбии этиилээххин дуо?',
	'articlefeedback-alpha-survey-submit' => 'Ыытарга',
	'articlefeedback-alpha-survey-title' => 'Бука диэн аҕыйах ыйытыыга хоруйдаа эрэ',
	'articlefeedback-alpha-survey-thanks' => 'Ыйытыыларга хоруйдаабыккар махтанабыт.',
);

/** Sicilian (Sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Àutru',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Picchì?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => "Po' diri soccu ti firi a fari?",
	'articlefeedback-alpha-survey-question-comments' => 'Vò diri autri cosi?',
	'articlefeedback-alpha-survey-title' => "Arrispunni a 'na pocu di dumanni",
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'articlefeedback' => 'Hodnotenie článku',
	'articlefeedback-desc' => 'Hodnotenie článku (pilotná verzia)',
	'articlefeedback-alpha-yourfeedback' => 'Vaše komentáre',
	'articlefeedback-alpha-pleaserate' => 'Prosím, venujte chvíľku ohodnoteniu tejto stránky dolu.',
	'articlefeedback-alpha-submit' => 'Odoslať',
	'articlefeedback-alpha-rating-wellsourced' => 'Dobré zdroje:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutralita:',
	'articlefeedback-alpha-rating-completeness' => 'Úplnosť:',
	'articlefeedback-alpha-rating-readability' => 'Čitateľnosť:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Máte pocit, že táto stránka má dostatok citácií a že tieto citácie pochádzajú z dôveryhodných zdrojov?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Máte pocit, že táto stránka férovo prezentuje všetky perspektívy na danú tému?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Máte pocit, že táto stránka pokrýva všetky dôležité témy, ktoré by mala?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Máte pocit, že táto stránka je dobre zorganizovaná a napísaná dobrým štýlom?',
	'articlefeedback-alpha-articlerating' => 'Hodnotenie stránky',
	'articlefeedback-alpha-error' => 'Vyskytla sa chyba.
Prosím, skúste to neskôr.',
	'articlefeedback-alpha-thanks' => 'Ďakujeme! Vaše hodnotenie bolo uložené.',
	'articlefeedback-alpha-featurefeedback' => 'Pošlite nám <span class="feedbacklink">vaše komentáre</span> k tejto službe.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|hodnotenie|hodnotenia|hodnotení}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Táto stránka bola ''revidovaná'' odvtedy, čo ste ju naposledy skontrolovali.
Možno ju budete chcieť znova ohodnotiť.",
	'articlefeedback-alpha-results-show' => '(Výsledky skryté. <span class="showlink">Zobraziť ich</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Skryť výsledky</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Prosím, dajte nám vedieť prečo ste dnes ohodnotili túto stránku (zaškrtnite všetky možnosti, ktoré považujete za pravdivé):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Chcel som prispieť k celkovému ohodnoteniu stránky',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Dúfam, že moje hodnotenie pozitívne ovplyvní vývoj stránky',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Chcel som prispieť do {{GRAMMAR:genitív|{{SITENAME}}}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Rád sa delím o svoj názor',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Dnes som neposkytol hodnotenie, ale chcel som okomentovať túto možnosť',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Iné',
	'articlefeedback-alpha-survey-question-useful' => 'Veríte, že poskytnuté hodnotenia sú užitočné a jasné?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Prečo?',
	'articlefeedback-alpha-survey-question-expert' => 'Považujete sa za experta v oblasti, ktorú pokrýva táto stránka?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Môžete popísať svoju expertízu?',
	'articlefeedback-alpha-survey-question-comments' => 'Máte nejaké ďalšie komentáre?',
	'articlefeedback-alpha-survey-submit' => 'Odoslať',
	'articlefeedback-alpha-survey-title' => 'Prosím, zodpovedajte niekoľko otázok',
	'articlefeedback-alpha-survey-thanks' => 'Ďakujeme za vyplnenie dotazníka.',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'articlefeedback' => 'Ocenjevanje člankov',
	'articlefeedback-desc' => 'Ocenjevanje člankov (pilotska različica)',
	'articlefeedback-alpha-yourfeedback' => 'Vaša povratna informacija',
	'articlefeedback-alpha-pleaserate' => 'Prosimo, vzemite si trenutek in spodaj ocenite to stran.',
	'articlefeedback-alpha-submit' => 'Pošlji',
	'articlefeedback-alpha-rating-wellsourced' => 'Dobro dokumentirano:',
	'articlefeedback-alpha-rating-neutrality' => 'Nevtralnost:',
	'articlefeedback-alpha-rating-completeness' => 'Celovitost:',
	'articlefeedback-alpha-rating-readability' => 'Bralnost:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Menite, da ima ta stran dovolj navedkov in da ta navajanja prihajajo iz zanesljivih virov?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Menite, da ta stran prikazuje pravično zastopanost vseh pogledov na obravnavano temo?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Menite, da ta stran zajema temeljna tematska področja, ki bi jih naj?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Menite, da je ta stran dobro organizirana in dobro napisana?',
	'articlefeedback-alpha-articlerating' => 'Ocena strani',
	'articlefeedback-alpha-error' => 'Prišlo je do napake.
Prosimo, poskusite znova pozneje.',
	'articlefeedback-alpha-thanks' => 'Hvala! Vaša ocena je bila zabeležena.',
	'articlefeedback-alpha-featurefeedback' => 'Podajte nam <span class="feedbacklink">povratno informacijo</span> o tej funkciji.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|ocena|oceni|ocene|ocen}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Stran je bila ''pregledana'' odkar ste jo nazadnje ocenili.
Morda jo želite ponovno oceniti.",
	'articlefeedback-alpha-results-show' => '(Rezultati so skriti. <span class="showlink">Prikaži</span> jih.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Skrij rezultate</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Prosimo, povejte nam, zakaj ste danes ocenili to stran (izberite vse, kar ustreza):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Želel sem prispevati splošni oceni strani',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Upam, da bo moja ocena dobro vplivala na razvoj strani',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Želel sem prispevati k projektu {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Rad delim svoje mnenje',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Danes nisem podal ocene, ampak sem želel podati povratno informacijo o funkciji',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Drugo',
	'articlefeedback-alpha-survey-question-useful' => 'Ali verjamete, da so posredovane ocene uporabne in jasne?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Zakaj?',
	'articlefeedback-alpha-survey-question-expert' => 'Menite, da ste strokovnjak na področju, ki ga pokriva članek?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Lahko pojasnite svoje izvedensko mnenje?',
	'articlefeedback-alpha-survey-question-comments' => 'Imate kakšne dodatne pripombe?',
	'articlefeedback-alpha-survey-submit' => 'Pošlji',
	'articlefeedback-alpha-survey-title' => 'Prosimo, odgovorite na nekaj vprašanj',
	'articlefeedback-alpha-survey-thanks' => 'Zahvaljujemo se vam za izpolnitev vprašalnika.',
	'articlefeedback-beta-form-tab-label' => 'Nudite povratno informacijo',
	'articlefeedback-beta-form-panel-title' => 'Vaša povratna informacija',
	'articlefeedback-beta-form-panel-instructions' => 'Prosimo, vzemite si trenutek in ocenite to stran.',
	'articlefeedback-beta-form-panel-notice' => 'Vaše ocene bodo čez nekaj časa potekle.',
	'articlefeedback-beta-form-panel-submit' => 'Pošlji povratno informacijo',
	'articlefeedback-beta-report-tab-label' => 'Prikaži rezultate',
	'articlefeedback-beta-report-panel-title' => 'Rezultati povratnih informacij',
	'articlefeedback-beta-field-wellsourced-label' => 'Dobro dokumentirano',
	'articlefeedback-beta-field-wellsourced-tip' => 'Menite, da ima ta stran dovolj navedkov in da ta navajanja prihajajo iz zanesljivih virov?',
	'articlefeedback-beta-field-complete-label' => 'Celovito',
	'articlefeedback-beta-field-complete-tip' => 'Menite, da ta stran zajema temeljna tematska področja, ki bi jih naj?',
	'articlefeedback-beta-field-neutral-label' => 'Nevtralno',
	'articlefeedback-beta-field-neutral-tip' => 'Menite, da ta stran prikazuje pravično zastopanost vseh pogledov na obravnavano temo?',
	'articlefeedback-beta-field-readable-label' => 'Berljivo',
	'articlefeedback-beta-field-readable-tip' => 'Menite, da je ta stran dobro organizirana in dobro napisana?',
);

/** Swedish (Svenska)
 * @author Ainali
 * @author Fluff
 */
$messages['sv'] = array(
	'articlefeedback' => 'Artikelbedömning',
	'articlefeedback-desc' => 'Artikelbedömning (pilotversion)',
	'articlefeedback-alpha-yourfeedback' => 'Din feedback',
	'articlefeedback-alpha-pleaserate' => 'Ta en stund för att betygsätta denna sida nedan.',
	'articlefeedback-alpha-submit' => 'Skicka in',
	'articlefeedback-alpha-rating-wellsourced' => 'Bra källbelagd',
	'articlefeedback-alpha-rating-neutrality' => 'Neutral:',
	'articlefeedback-alpha-rating-completeness' => 'Komplett:',
	'articlefeedback-alpha-rating-readability' => 'Läsbar:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Tycker du att denna sida har tillräckligt med källhänvisningar och att dessa hänvisningar kommer från pålitliga källor?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Tycker du att den här sidan visar en rättvis representation av alla perspektiv på frågan?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Tycker du att den här sidan täcker de väsentliga ämnesområden som det borde?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Tycker du att den här sidan är välorganiserad och välskriven?',
	'articlefeedback-alpha-articlerating' => 'Sidbetyg',
	'articlefeedback-alpha-error' => 'Ett fel har uppstått. 
 Försök igen senare.',
	'articlefeedback-alpha-thanks' => 'Tack! Ditt betyg har sparats.',
	'articlefeedback-alpha-featurefeedback' => 'Ge oss <span class="feedbacklink">feedback</span> om den här funktionen.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|rating|ratings}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Den här sidan har ''ändrats'' sedan du senast granskade den. 
 Du kanske vill att betygsätta den igen.",
	'articlefeedback-alpha-results-show' => '(Resultat dolda. <span class="showlink">Visa</span> dem.)',
	'articlefeedback-alpha-results-hide' => '<span class="hidelink">(Dölj resultat)</span>',
	'articlefeedback-alpha-survey-question-whyrated' => 'Låt oss gärna veta varför du bedömt denna sida i dag (markera alla som gäller):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Jag ville bidra till den övergripande bedömningen av sidan',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Jag hoppas att min bedömning skulle påverka utvecklingen av sidan positivt',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Jag ville bidra till {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Jag gillar att ge min åsikt',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Jag har inte gjort en bedömning idag, men ville ge feedback på funktionen',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Annat',
	'articlefeedback-alpha-survey-question-useful' => 'Tror du att bedömningarna är användbara och tydliga?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Varför?',
	'articlefeedback-alpha-survey-question-expert' => 'Anser du dig själv vara en expert på området den här sidan behandlar?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Kan du beskriva dina kunskaper?',
	'articlefeedback-alpha-survey-question-comments' => 'Har du några ytterligare kommentarer?',
	'articlefeedback-alpha-survey-submit' => 'Skicka in',
	'articlefeedback-alpha-survey-title' => 'Svara på några få frågor',
	'articlefeedback-alpha-survey-thanks' => 'Tack för att du fyllde i enkäten.',
);

/** Tamil (தமிழ்)
 * @author TRYPPN
 */
$messages['ta'] = array(
	'articlefeedback-alpha-yourfeedback' => 'தங்களின் பின்னூட்டக்கருத்துக்கள்',
	'articlefeedback-alpha-submit' => 'சமர்ப்பி',
	'articlefeedback-alpha-rating-neutrality' => 'நடுநிலையானது:',
	'articlefeedback-alpha-rating-completeness' => 'முழுதும்:',
	'articlefeedback-alpha-rating-readability' => 'படிக்கக்கூடியது:',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'இந்த தளத்திற்கு நான் பங்களிக்க வேண்டும் {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'நான் என்னுடைய கருத்துக்களை மற்றவர்களுடன் பகிர்ந்துகொள்ள விரும்புகிறேன்',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'மற்றவை',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'ஏன் ?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'தங்களது திறமைகளை கொஞ்சம் விவரித்துக்கூற முடியுமா ?',
	'articlefeedback-alpha-survey-question-comments' => 'தாங்கள் மேலும் அதிகமான கருத்துக்களை கூற விரும்புகிறீர்களா ?',
	'articlefeedback-alpha-survey-submit' => 'சமர்ப்பி',
	'articlefeedback-alpha-survey-title' => 'தயவு செய்து ஒரு சில கேள்விகளுக்கு பதில் அளியுங்கள்',
	'articlefeedback-alpha-survey-thanks' => 'ஆய்வுக்கான படிவத்தை பூர்த்தி செய்தமைக்கு நன்றி.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'articlefeedback' => 'వ్యాసపు మూల్యాంకన',
	'articlefeedback-alpha-yourfeedback' => 'మీ ప్రతిస్పందన',
	'articlefeedback-alpha-pleaserate' => 'ఈ పుటని మూల్యాంకన చేయడానికి ఒక క్షణం వెచ్చించండి.',
	'articlefeedback-alpha-submit' => 'దాఖలుచెయ్యి',
	'articlefeedback-alpha-rating-neutrality' => 'తటస్థం:',
	'articlefeedback-alpha-rating-completeness' => 'సంపూర్ణత:',
	'articlefeedback-alpha-rating-readability' => 'పఠనీయం:',
	'articlefeedback-alpha-articlerating' => 'పుట మూల్యాంకన',
	'articlefeedback-alpha-error' => 'ఏదో పొరపాటు జరిగింది.
దయచేసి కాసేపాగి మళ్ళీ ప్రయత్నించండి.',
	'articlefeedback-alpha-thanks' => 'కృతజ్ఞతలు! మీ మూల్యాంకన భద్రమయ్యింది.',
	'articlefeedback-alpha-featurefeedback' => 'ఈ సౌలభ్యంపై <span class="feedbacklink">ప్రతిస్పందన</span>ని మాకు తెలియజేయండి.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|మూల్యాంకన|మూల్యాంకనలు}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "మీరు చివరిసారి సమీక్షించిన తర్వాత ఈ పుటని ''సవరించారు''.
మీరు దీన్ని మళ్ళీ మూల్యాంకన చేయవచ్చు.",
	'articlefeedback-alpha-results-show' => '(ఫలితాలు దాగివున్నాయి. వాటిని <span class="showlink">చూపించు</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">ఫలితాలను దాచు</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'ఈ పుటని ఈరోజు మీరు ఎందుకు మూల్యాంకన చేసారో మాకు దయచేసి తెలియజేయండి (వర్తించే వాటినన్నీ ఎంచుకోండి):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'నేను ఈ పుట యొక్క స్థూల మూల్యాంకనకి తోడ్పాలనుకున్నాను',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'నా మూల్యాంకన ఈ పుట యొక్క అభివృద్ధికి సానుకూలంగా ప్రభావితం చేస్తుందని ఆశిస్తున్నాను',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'నేను {{SITENAME}}కి తోడ్పడాలనుకున్నాను',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'నా అభిప్రాయాన్ని పంచుకోవడం నాకిష్టం',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'నేను ఈ రోజు మాల్యాంకన చేయలేదు, కానీ ఈ సౌలభ్యంపై నా ప్రతిస్పందనని తెలియజేయాలనుకున్నాను',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'ఇతర',
	'articlefeedback-alpha-survey-question-useful' => 'ఈ మూల్యాంకనలు ఉపయోగకరంగా మరియు స్పష్టంగా ఉన్నాయని మీరు నమ్ముతున్నారా?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'ఎందుకు?',
	'articlefeedback-alpha-survey-question-expert' => 'ఈ పుట విషయపు రంగంలో మిమ్మల్ని మీరు నిపుణులుగా పరిగణిస్తారా?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'మీ ప్రావీణ్యతని వివరించగలరా?',
	'articlefeedback-alpha-survey-question-comments' => 'అదనపు వ్యాఖ్యలు ఏమైనా ఉన్నాయా?',
	'articlefeedback-alpha-survey-submit' => 'దాఖలుచెయ్యి',
	'articlefeedback-alpha-survey-title' => 'దయచేసి కొన్ని ప్రశ్నలకి సమాధానమివ్వండి',
	'articlefeedback-alpha-survey-thanks' => 'ఈ సర్వేని పూరించినందుకు కృతజ్ఞతలు.',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'articlefeedback' => 'Makala berlen baha',
	'articlefeedback-desc' => 'Makala berlen baha (synag warianty)',
	'articlefeedback-alpha-yourfeedback' => 'Seslenmäňiz',
	'articlefeedback-alpha-pleaserate' => 'Bu sahypany derejelendirmek üçin biraz egleniň.',
	'articlefeedback-alpha-submit' => 'Tabşyr',
	'articlefeedback-alpha-rating-wellsourced' => 'Çeşmeler:',
	'articlefeedback-alpha-rating-neutrality' => 'Bitarap:',
	'articlefeedback-alpha-rating-completeness' => 'Doly:',
	'articlefeedback-alpha-rating-readability' => 'Okap bolýar:',
	'articlefeedback-alpha-articlerating' => 'Sahypa derejelendirmesi',
	'articlefeedback-alpha-error' => 'Bir säwlik ýüze çykdy.',
	'articlefeedback-alpha-thanks' => 'Sag boluň! Derejelendirmeleriňiz ýazdyryldy.',
	'articlefeedback-alpha-featurefeedback' => 'Bu funksiýa hakda bize <span class="feedbacklink">seslenme</span> iberiň.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|derejelendirme|derejelendirme}})',
	'articlefeedback-alpha-results-show' => '(Netijeler gizlenilgi. Olary <span class="showlink">görkez</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Netijeleri gizle</span>)',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Men sahypanyň umumy derejesine goşant goşmak isledim.',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => '{{SITENAME}} saýtyna goşant goşmak isledim.',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Öz pikirimi paýlaşmagy halaýaryn.',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Başga',
	'articlefeedback-alpha-survey-question-useful' => 'Berlen derejeleriň peýdalydygyna we düşnüklidigine ynanýarsyňyzmy?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Näme üçin?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Öz ekspert bahaňyzy suratlandyryp bilersiňizmi?',
	'articlefeedback-alpha-survey-question-comments' => 'Goşmaça bellikleriňiz barmy?',
	'articlefeedback-alpha-survey-submit' => 'Tabşyr',
	'articlefeedback-alpha-survey-title' => 'Käbir soraglara jogap beriň',
	'articlefeedback-alpha-survey-thanks' => 'Soragnamany dolduranyňyz üçin sag boluň.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'articlefeedback' => 'Pagsusuri ng lathalain',
	'articlefeedback-desc' => 'Pagsusuri ng lathalain (paunang bersyon)',
	'articlefeedback-alpha-yourfeedback' => 'Ang iyong puna',
	'articlefeedback-alpha-pleaserate' => 'Mangyaring maglaan ng isang sanali upang antasan ang pahinang nasa ibaba.',
	'articlefeedback-alpha-submit' => 'Ipadala',
	'articlefeedback-alpha-rating-wellsourced' => 'Sapat at tumpak ang mga pinagkunan',
	'articlefeedback-alpha-rating-neutrality' => 'Walang pinapanigan:',
	'articlefeedback-alpha-rating-completeness' => 'Kumpleto:',
	'articlefeedback-alpha-rating-readability' => 'Nababasa:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Sa tingin mo ba ang pahinang ito ay may sapat ng mga pagbanggit at ang mga pagbanggit na ito ay nagbuhat sa mapagkakatiwalaang mga pinagkunan?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Sa tingin mo ba ang pahinang ito ay nagpapakita ng isang patas na kinatawan ng lahat ng mga pananaw hinggil sa paksa?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Sa tingin mo ba ang pahinang ito ay sumasaklaw sa nararapat na mahahalagang mga lugar ng paksa?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Sa tingin mo ba ang pahinang ito ay talagang maayos at mabuti ang pagkakasulat?',
	'articlefeedback-alpha-articlerating' => 'Pagkakaantas ng pahina',
	'articlefeedback-alpha-error' => 'Naganap ang isang kamalian.
Subukan uli mamaya.',
	'articlefeedback-alpha-thanks' => 'Salamat! Nasagip na ang iyong mga pag-aantas.',
	'articlefeedback-alpha-featurefeedback' => 'Bigyan kami ng <span class="feedbacklink">puna</span> hinggil sa tampok na ito.',
	'articlefeedback-alpha-noratings' => ' $1 ($2 {{PLURAL:$2|pag-aantas|mga pag-aantas}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "''Nabago'' ang pahinang ito magmula noong huli mong pagsuri nito.
Maaari mo itong antasang muli.",
	'articlefeedback-alpha-results-show' => '(Nakatago ang mga resulta. <span class="showlink">Ipakita</span> ang mga ito.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Itago ang mga resulta</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Mangyari sabihin sa amin kung bakit mo inantasan ng ganito ang pahinang ito ngayon (lagyan ng tsek ang lahat ng maaari):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Nais kong umambag sa pangkalahatang kaantasan ng pahina',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Umaasa ako na ang aking pag-aantas ay positibong makakaapekto sa pagpapaunlad ng pahina',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Nais kong makapag-ambag sa {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Nais ko ang pagpapamahagi ng aking opinyon',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Hindi ako nagbigay ng pag-aantas ngayon, subalit nais kong magbigay ng puna sa hinaharap',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Iba pa',
	'articlefeedback-alpha-survey-question-useful' => 'Naniniwala ka ba na ang mga pag-aantas na ibinigay ay magagamit at malinaw?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Bakit?',
	'articlefeedback-alpha-survey-question-expert' => 'Itinuturing mo ba ang sarili mo bilang isang dalubhasa sa larangang sakop ng pahinang ito?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Maaari mo bang ilarawan ang iyong kadalubhasaan?',
	'articlefeedback-alpha-survey-question-comments' => 'Mayroon ka pa bang karagdagang mga puna?',
	'articlefeedback-alpha-survey-submit' => 'Ipasa',
	'articlefeedback-alpha-survey-title' => 'Pakisagot ang ilang mga katanungan',
	'articlefeedback-alpha-survey-thanks' => 'Salamat sa pagsagot sa mga pagtatanong.',
);

/** Turkish (Türkçe)
 * @author CnkALTDS
 * @author Emperyan
 * @author Joseph
 * @author Karduelis
 */
$messages['tr'] = array(
	'articlefeedback' => 'Madde değerlendirmesi',
	'articlefeedback-desc' => 'Madde Geridönütleri',
	'articlefeedback-alpha-yourfeedback' => 'Geribildiriminiz',
	'articlefeedback-alpha-pleaserate' => 'Bu sayfayı aşağıda değerlendirmek için lütfen biraz vaktinizi ayırınız.',
	'articlefeedback-alpha-submit' => 'Gönder',
	'articlefeedback-alpha-rating-wellsourced' => 'İyi-Kaynaklı:',
	'articlefeedback-alpha-rating-neutrality' => 'Tarafsız:',
	'articlefeedback-alpha-rating-completeness' => 'Tam:',
	'articlefeedback-alpha-rating-readability' => 'Okunabilir:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Bu sayfanın yeterli atıf içerdiğini ve bu atıfların güvenilir kaynaklardan geldiğini düşünüyor musunuz?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Bu sayfanın konu hakkında tüm açılardan adil bir sunum gösterdiğini düşünüyor musunuz?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Bu sayfanın kapsaması gereken asıl konu alanlarını kapsadığını düşünüyor musunuz?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Bu sayfanın iyi-organize edilmiş ve iyi yazılmış olduğunu  düşünüyor musunuz?',
	'articlefeedback-alpha-articlerating' => 'Sayfa derecelendirmesi',
	'articlefeedback-alpha-error' => 'Bir hata oluştu.
Lütfen daha sonra yeniden deneyin.',
	'articlefeedback-alpha-thanks' => 'Teşekkürler! Deeğerlendirmeniz kaydedildi.',
	'articlefeedback-alpha-featurefeedback' => 'Bu özellik hakkında <span class="feedbacklink">geridönüt</span> verin.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|değerlendirme|değerlendirme}})',
	'articlefeedback-alpha-results-show' => '(Sonuçlar gizlendi. Sonuçları <span class="showlink">göster</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Sonuçları gizle</span>)',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Fikirlerimi paylaşmayı seviyorum',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Diğer',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Neden?',
	'articlefeedback-alpha-survey-submit' => 'Gönder',
	'articlefeedback-alpha-survey-title' => 'Lütfen birkaç soruya yanıt verin',
	'articlefeedback-alpha-survey-thanks' => 'Anketi doldurduğunuz için teşekkür ederiz.',
);

/** Ukrainian (Українська)
 * @author Arturyatsko
 */
$messages['uk'] = array(
	'articlefeedback' => 'Оцінка статті',
	'articlefeedback-desc' => 'Оцінка статті (експериментальний варіант)',
	'articlefeedback-alpha-yourfeedback' => 'Ваші відгуки',
	'articlefeedback-alpha-pleaserate' => 'Будь ласка, знайдіть час, щоб оцінити цю статтю.',
	'articlefeedback-alpha-submit' => 'Відправити',
	'articlefeedback-alpha-rating-wellsourced' => 'Джерела:',
	'articlefeedback-alpha-rating-neutrality' => 'Нейтральність:',
	'articlefeedback-alpha-rating-completeness' => 'Готовність:',
	'articlefeedback-alpha-rating-readability' => 'Легкість читання:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Чи вважаєте Ви, що сторінка має достатньо посилань на джерела та що джерела надійні?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => "Чи вважаєте ви, що ця сторінка об'єктивно розкриває всі точки зору з цього питання?",
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Чи вважаєте ви, що ця сторінка охоплює основні сфери теми?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Чи вважаєте ви, що ця сторінка є добре організованою і добре написано?',
	'articlefeedback-alpha-articlerating' => 'Рейтинг сторінки',
	'articlefeedback-alpha-error' => 'Сталася помилка. 
 Будь ласка, повторіть спробу пізніше.',
	'articlefeedback-alpha-thanks' => 'Спасибі! Ваші оцінки були збережені.',
	'articlefeedback-alpha-featurefeedback' => '<span class="feedbacklink">Поділіться</span> своєю думкою про цю функцію.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|оцінка|оцінки|оцінок}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => 'Ця сторінка була змінена після Вашого останнього перегляду.
Ви можете оцінити її ще раз.',
	'articlefeedback-alpha-results-show' => '(Результати приховані. <span class="showlink">Показати</span> їх.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Приховати результати</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Будь ласка, розкажіть нам, чому Ви оцінили цю сторінку сьогодні (позначте все, що відповідає):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Я хотів внести свій внесок у загальний рейтинг сторінки',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Я сподіваюся, що мій рейтинг буде позитивно впливати на розвиток сторінки',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Я хотів внести свій внесок у {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Мені подобається ділитися своєю думкою',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Я не оцінив сторінку сьогодні, але хочу залишити відгук про цю функцію',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Інше',
	'articlefeedback-alpha-survey-question-useful' => 'Чи вважаєте Ви поставлені оцінки корисними та зрозумілими?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Чому?',
	'articlefeedback-alpha-survey-question-expert' => 'Чи вважаєте ви себе спеціалістом в області, що охоплює ця сторінка?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Чи можете Ви описати свій досвід?',
	'articlefeedback-alpha-survey-question-comments' => 'Чи є у Вас якісь додаткові коментарі?',
	'articlefeedback-alpha-survey-submit' => 'Відправити',
	'articlefeedback-alpha-survey-title' => 'Будь ласка, дайте відповідь на кілька питань',
	'articlefeedback-alpha-survey-thanks' => 'Дякуємо за заповнення опитування.',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'articlefeedback' => 'Valutassion pagina',
	'articlefeedback-desc' => 'Valutassion pagina (version de prova)',
	'articlefeedback-alpha-yourfeedback' => 'La to opinion',
	'articlefeedback-alpha-pleaserate' => 'Par piaser, spendi du minuti par valutar sta pagina.',
	'articlefeedback-alpha-submit' => 'Manda',
	'articlefeedback-alpha-rating-wellsourced' => 'Ben fornìa de fonti:',
	'articlefeedback-alpha-rating-neutrality' => 'Neutrale:',
	'articlefeedback-alpha-rating-completeness' => 'Conpleta:',
	'articlefeedback-alpha-rating-readability' => 'Legibile:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Te pare che sta pagina la gabia citassion in bisogno e che le vegna da fonti atendibili?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Te pare che sta pagina la mostra na rapresentassion equa de tuti i punti de vista sul tema?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Te pare che sta pagina la cuerza i temi essensiali che la dovarìa?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Te pare che sta pagina la sia ben organizà e ben scrita?',
	'articlefeedback-alpha-articlerating' => 'Valutassion de la pagina',
	'articlefeedback-alpha-error' => 'Xe capità un eror.
Par piaser, proa pi tardi.',
	'articlefeedback-alpha-thanks' => 'Grassie! El to voto el xe stà salvà.',
	'articlefeedback-alpha-featurefeedback' => 'Dane i to <span class="feedbacklink">comenti</span> su sta funsionalità.',
	'articlefeedback-alpha-noratings' => '$1 ($2 {{PLURAL:$2|voto|voti}})',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Sta pagina la xe stà ''canbià'' dal to ultimo giudissio.
Magari te voli valutarla da novo.",
	'articlefeedback-alpha-results-show' => '(Risultati sconti. <span class="showlink">Mòstreli</span>.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Scondi risultati</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Dine el motivo par cui te ghè valutà sta pagina (te poli selessionar più opzioni):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Voléa contribuir a la valutassion conplessiva de la pagina',
	'articlefeedback-alpha-survey-answer-whyrated-development' => "Spero che el me giudissio l'influensa positivamente el svilupo de sta pagina",
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Go vossù contribuire a {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Me piase condivìdar la me opinion',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'No go dato valutassion uncuò, ma go volù lassar un comento su la funsionalità',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Altro',
	'articlefeedback-alpha-survey-question-useful' => 'Pensito che le valutassion fornìe le sia utili e ciare?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Parché?',
	'articlefeedback-alpha-survey-question-expert' => 'Te ritiento un esperto nel canpo de cui sta pagina la parla?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Podaressito descrìvare le to conpetense?',
	'articlefeedback-alpha-survey-question-comments' => 'Gheto altre robe da dir?',
	'articlefeedback-alpha-survey-submit' => 'Manda',
	'articlefeedback-alpha-survey-title' => 'Par piaser, rispondi a qualche domanda',
	'articlefeedback-alpha-survey-thanks' => 'Grassie de aver conpilà el questionario.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'articlefeedback' => 'Đánh giá bài',
	'articlefeedback-desc' => 'Đánh giá bài (phiên bản thử nghiệm)',
	'articlefeedback-alpha-yourfeedback' => 'Phản hồi của bạn',
	'articlefeedback-alpha-pleaserate' => 'Xin hãy dành một chút thì giờ để đánh giá trang này ở dưới:',
	'articlefeedback-alpha-submit' => 'Đánh giá',
	'articlefeedback-alpha-rating-wellsourced' => 'Đầy đủ nguồn:',
	'articlefeedback-alpha-rating-neutrality' => 'Trung lập:',
	'articlefeedback-alpha-rating-completeness' => 'Đầy đủ:',
	'articlefeedback-alpha-rating-readability' => 'Dễ đọc:',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => 'Bạn có cảm thấy rằng bày này chú thích nguồn gốc đầy đủ và đáng tin các nguồn?',
	'articlefeedback-alpha-rating-neutrality-tooltip' => 'Bạn có cảm thấy rằng bài này đại diện công bằng cho tất cả các quan điểm về các vấn đề?',
	'articlefeedback-alpha-rating-completeness-tooltip' => 'Bạn có cảm thấy rằng bài này bao gồm các đề tài cần thiết?',
	'articlefeedback-alpha-rating-readability-tooltip' => 'Bạn có cảm thấy rằng bài này được sắp xếp đàng hoàng có văn bản hay?',
	'articlefeedback-alpha-articlerating' => 'Đánh giá bài',
	'articlefeedback-alpha-error' => 'Đã gặp lỗi.
Xin hãy thử lại sau.',
	'articlefeedback-alpha-thanks' => 'Cám ơn! Đánh giá của bạn đã được lưu.',
	'articlefeedback-alpha-featurefeedback' => 'Hãy <span class="feedbacklink">phản hồi</span> về tính năng này.',
	'articlefeedback-alpha-noratings' => '$1 ($2 đánh giá)',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "Bài này đã được ''chỉnh sửa'' sau lần cuối bạn xem xét nó.
Bạn có thể muốn đánh giá nó một lần nữa.",
	'articlefeedback-alpha-results-show' => '(Các kết quả được ẩn. <span class="showlink">Hiện</span> kết quả.)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">Ẩn kết quả</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => 'Xin hãy cho chúng tôi biết lý do tại sao bạn đánh giá trang này hôm nay (kiểm tra các hộp thích hợp):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => 'Tôi muốn có ảnh hưởng đến đánh giá tổng cộng của trang',
	'articlefeedback-alpha-survey-answer-whyrated-development' => 'Tôi hy vọng rằng đánh giá của tôi sẽ có ảnh hưởng tích cực đến sự phát triển của trang',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => 'Tôi muốn đóng góp vào {{SITENAME}}',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => 'Tôi thích đưa ý kiến của tôi',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => 'Tôi không đánh giá hôm nay, nhưng vẫn muốn phản hồi về tính năng',
	'articlefeedback-alpha-survey-answer-whyrated-other' => 'Khác',
	'articlefeedback-alpha-survey-question-useful' => 'Bạn có tin rằng các đánh giá được cung cấp là hữu ích và dễ hiểu?',
	'articlefeedback-alpha-survey-question-useful-iffalse' => 'Tạo sao?',
	'articlefeedback-alpha-survey-question-expert' => 'Bạn có coi mình là chuyên gia trong lĩnh vực của trang này không?',
	'articlefeedback-alpha-survey-question-expert-iftrue' => 'Làm sao giải thích chuyên môn của bạn?',
	'articlefeedback-alpha-survey-question-comments' => 'Bạn có ý kiến bổ sung?',
	'articlefeedback-alpha-survey-submit' => 'Gửi',
	'articlefeedback-alpha-survey-title' => 'Xin vui lòng trả lời một số câu hỏi',
	'articlefeedback-alpha-survey-thanks' => 'Cám ơn bạn đã điền khảo sát.',
	'articlefeedback-beta-form-tab-label' => 'Phản hồi',
	'articlefeedback-beta-form-panel-title' => 'Phản hồi của bạn',
	'articlefeedback-beta-form-panel-instructions' => 'Xin hãy dành một chút thì giờ để đánh giá trang này.',
	'articlefeedback-beta-form-panel-notice' => 'Các đánh giá của bạn sẽ hết hạn sau một thời gian.',
	'articlefeedback-beta-form-panel-submit' => 'Gửi phản hồi',
	'articlefeedback-beta-report-tab-label' => 'Xem kết quả',
	'articlefeedback-beta-report-panel-title' => 'Kết quả phản hồi',
	'articlefeedback-beta-field-wellsourced-label' => 'Đầy đủ nguồn',
	'articlefeedback-beta-field-wellsourced-tip' => 'Bạn có cảm thấy rằng bày này chú thích nguồn gốc đầy đủ và đáng tin các nguồn?',
	'articlefeedback-beta-field-complete-label' => 'Đầy đủ',
	'articlefeedback-beta-field-complete-tip' => 'Bạn có cảm thấy rằng bài này bao gồm các đề tài cần thiết?',
	'articlefeedback-beta-field-neutral-label' => 'Trung lập',
	'articlefeedback-beta-field-neutral-tip' => 'Bạn có cảm thấy rằng bài này đại diện công bằng cho tất cả các quan điểm về các vấn đề?',
	'articlefeedback-beta-field-readable-label' => 'Dễ đọc',
	'articlefeedback-beta-field-readable-tip' => 'Bạn có cảm thấy rằng bài này được sắp xếp đàng hoàng có văn bản hay?',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'articlefeedback-alpha-rating-completeness' => 'Parí:',
	'articlefeedback-alpha-error' => 'Àsìṣe kan ti ṣẹlẹ̀.
Ẹ jọ̀wọ́ ẹ gbìyànjú lẹ́ẹ̀kansíi láìpẹ́.',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Chenxiaoqino
 * @author Jimmy xu wrk
 */
$messages['zh-hans'] = array(
	'articlefeedback' => '条目评级',
	'articlefeedback-desc' => '条目评级（测试版）',
	'articlefeedback-alpha-yourfeedback' => '您的反馈',
	'articlefeedback-alpha-pleaserate' => '请花点时间给这个条目打分',
	'articlefeedback-alpha-submit' => '提交',
	'articlefeedback-alpha-rating-wellsourced' => '有良好来源：',
	'articlefeedback-alpha-rating-neutrality' => '中立性：',
	'articlefeedback-alpha-rating-completeness' => '完整度：',
	'articlefeedback-alpha-rating-readability' => '可读性：',
	'articlefeedback-alpha-rating-wellsourced-tooltip' => '您认为这个页面有充足的脚注并且这些脚注都是来自可信的来源的吗？',
	'articlefeedback-alpha-rating-neutrality-tooltip' => '您认为这个页面公平地展现了此问题的所有方面吗？',
	'articlefeedback-alpha-rating-completeness-tooltip' => '您认为这个页面写到了所有它应该涉及的方面吗？',
	'articlefeedback-alpha-rating-readability-tooltip' => '您认为这个页面组织得很好吗？',
	'articlefeedback-alpha-articlerating' => '页面评分',
	'articlefeedback-alpha-error' => '发生了一个错误。
请稍后重试。',
	'articlefeedback-alpha-thanks' => '谢谢！您的评级已经保存。',
	'articlefeedback-alpha-featurefeedback' => '请给我们关于此功能的<span class="feedbacklink">反馈</span>',
	'articlefeedback-alpha-noratings' => '$1（$2 个评分）',
	'articlefeedback-alpha-stalemessage-norevisioncount' => "此页面在你上次访问之后已被''修订''，你可以重新对其评分。",
	'articlefeedback-alpha-results-show' => '(结果已隐藏。<span class="showlink">点击此处已显示</span>。)',
	'articlefeedback-alpha-results-hide' => '(<span class="hidelink">隐藏结果</span>)',
	'articlefeedback-alpha-survey-question-whyrated' => '请告诉我们今天你为何评价了此页面(选择所有符合的):',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-rating' => '我想对网页的总体评价作贡献',
	'articlefeedback-alpha-survey-answer-whyrated-development' => '我希望我的评价能给此网页带来正面的影响',
	'articlefeedback-alpha-survey-answer-whyrated-contribute-wiki' => '我想对{{SITENAME}}做出贡献',
	'articlefeedback-alpha-survey-answer-whyrated-sharing-opinion' => '我愿意共享我的观点',
	'articlefeedback-alpha-survey-answer-whyrated-didntrate' => '我今天没有进行评价，但我希望对特性进行反馈。',
	'articlefeedback-alpha-survey-answer-whyrated-other' => '其他',
	'articlefeedback-alpha-survey-question-useful' => '你认为提供的评价有用并清晰吗？',
	'articlefeedback-alpha-survey-question-useful-iffalse' => '为什么？',
	'articlefeedback-alpha-survey-question-expert' => '你认为你在本页面覆盖的领域中是专家吗？',
	'articlefeedback-alpha-survey-question-expert-iftrue' => '你能描述一下你的专长吗？',
	'articlefeedback-alpha-survey-question-comments' => '你还有什么想说的吗？',
	'articlefeedback-alpha-survey-submit' => '提交',
	'articlefeedback-alpha-survey-title' => '请回答几个问题',
	'articlefeedback-alpha-survey-thanks' => '谢谢您回答问卷。',
);

