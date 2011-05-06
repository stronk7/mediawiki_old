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
	/* ArticleFeedback survey */
	'articlefeedback-survey-question-origin' => 'What page were you on when you started this survey?',
	'articlefeedback-survey-question-whyrated' => 'Please let us know why you rated this page today (check all that apply):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'I wanted to contribute to the overall rating of the page',
	'articlefeedback-survey-answer-whyrated-development' => 'I hope that my rating would positively affect the development of the page',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'I wanted to contribute to {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'I like sharing my opinion',
	'articlefeedback-survey-answer-whyrated-didntrate' => "I didn't provide ratings today, but wanted to give feedback on the feature",
	'articlefeedback-survey-answer-whyrated-other' => 'Other',
	'articlefeedback-survey-question-useful' => 'Do you believe the ratings provided are useful and clear?',
	'articlefeedback-survey-question-useful-iffalse' => 'Why?',
	'articlefeedback-survey-question-comments' => 'Do you have any additional comments?',
	'articlefeedback-survey-submit' => 'Submit',
	'articlefeedback-survey-title' => 'Please answer a few questions',
	'articlefeedback-survey-thanks' => 'Thanks for filling out the survey.',
	/* ext.articleFeedback and jquery.articleFeedback */
	'articlefeedback-error' => 'An error has occured. Please try again later.',
	'articlefeedback-form-switch-label' => 'Rate this page',
	'articlefeedback-form-panel-title' => 'Rate this page',
	'articlefeedback-form-panel-instructions' => 'Please take a moment to rate this page.',
	'articlefeedback-form-panel-clear' => 'Remove this rating',
	'articlefeedback-form-panel-expertise' => 'I am highly knowledgeable about this topic (optional)',
	'articlefeedback-form-panel-expertise-studies' => 'I have a relevant college/university degree',
	'articlefeedback-form-panel-expertise-profession' => 'It is part of my profession',
	'articlefeedback-form-panel-expertise-hobby' => 'It is a deep personal passion',
	'articlefeedback-form-panel-expertise-other' => 'The source of my knowledge is not listed here',
	'articlefeedback-form-panel-helpimprove' => 'I would like to help improve Wikipedia, send me an e-mail (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'We will send you a confirmation e-mail. We will not share your address with anyone. $1',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'email@example.org', // Optional
	'articlefeedback-form-panel-helpimprove-privacy' => 'Privacy policy',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Privacy policy',
	'articlefeedback-form-panel-submit' => 'Submit ratings',
	'articlefeedback-form-panel-success' => 'Saved successfully',
	'articlefeedback-form-panel-expiry-title' => 'Your ratings have expired',
	'articlefeedback-form-panel-expiry-message' => 'Please reevaluate this page and submit new ratings.',
	'articlefeedback-report-switch-label' => 'View page ratings',
	'articlefeedback-report-panel-title' => 'Page ratings',
	'articlefeedback-report-panel-description' => 'Current average ratings.',
	'articlefeedback-report-empty' => 'No ratings',
	'articlefeedback-report-ratings' => '$1 ratings',
	'articlefeedback-field-trustworthy-label' => 'Trustworthy',
	'articlefeedback-field-trustworthy-tip' => 'Do you feel this page has sufficient citations and that those citations come from trustworthy sources?',
	'articlefeedback-field-complete-label' => 'Complete',
	'articlefeedback-field-complete-tip' => 'Do you feel that this page covers the essential topic areas that it should?',
	'articlefeedback-field-objective-label' => 'Objective',
	'articlefeedback-field-objective-tip' => 'Do you feel that this page shows a fair representation of all perspectives on the issue?',
	'articlefeedback-field-wellwritten-label' => 'Well-written',
	'articlefeedback-field-wellwritten-tip' => 'Do you feel that this page is well-organized and well-written?',
	'articlefeedback-pitch-reject' => 'Maybe later',
	'articlefeedback-pitch-or' => 'or',
	'articlefeedback-pitch-thanks' => 'Thanks! Your ratings have been saved.',
	'articlefeedback-pitch-survey-message' => 'Please take a moment to complete a short survey.',
	'articlefeedback-pitch-survey-body' => '',
	'articlefeedback-pitch-survey-accept' => 'Start survey',
	'articlefeedback-pitch-join-message' => 'Did you want to create an account?',
	'articlefeedback-pitch-join-body' => 'An account will help you track your edits, get involved in discussions, and be a part of the community.',
	'articlefeedback-pitch-join-accept' => 'Create an account',
	'articlefeedback-pitch-join-login' => 'Log in',
	'articlefeedback-pitch-edit-message' => 'Did you know that you can edit this page?',
	'articlefeedback-pitch-edit-body' => '',
	'articlefeedback-pitch-edit-accept' => 'Edit this page',
	'articlefeedback-survey-message-success' => 'Thanks for filling out the survey.',
	'articlefeedback-survey-message-error' => 'An error has occurred.
Please try again later.',
	/* Special:ArticleFeedback */
	'articleFeedback-table-caption-dailyhighsandlows' => 'Today\'s highs and lows',
	'articleFeedback-table-caption-dailyhighs' => 'Today\'s highs',
	'articleFeedback-table-caption-dailylows' => 'Today\'s lows',
	'articleFeedback-table-caption-weeklymostchanged' => 'This week\'s most changed',
	'articleFeedback-table-caption-recentlows' => 'Recent lows',
	'articleFeedback-table-heading-page' => 'Page',
	'articleFeedback-table-heading-average' => 'Average',
	/* EmailCapture */
	'articlefeedback-emailcapture-response-body' => 'Hello!

Thank you for expressing interest in helping to improve {{SITENAME}}.

Please take a moment to confirm your e-mail by clicking on the link below: 

$1

You may also visit:

$2

And enter the following confirmation code:

$3

We will be in touch shortly with how you can help improve {{SITENAME}}.

If you did not initiate this request, please ignore this e-mail and we will not send you anything else.

Best wishes, and thank you,
The {{SITENAME}} team',
);

/** Message documentation (Message documentation)
 * @author Brandon Harris
 * @author EugeneZelenko
 * @author Krinkle
 * @author Minh Nguyen
 * @author Purodha
 * @author Raymond
 * @author Sam Reed
 */
$messages['qqq'] = array(
	'articlefeedback' => 'The title of the feature. It is about reader feedback.
	
Please visit http://prototype.wikimedia.org/articleassess/Main_Page for a prototype installation.',
	'articlefeedback-desc' => '{{desc}}',
	'articlefeedback-survey-question-whyrated' => 'This is a question in the survey with checkboxes for the answers. The user can check multiple answers.',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-survey-answer-whyrated-development' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'This is a possible answer for the "Why did you rate this article today?" survey question.',
	'articlefeedback-survey-answer-whyrated-other' => 'This is a possible answer for the "Why did you rate this article today?" survey question. The user can check this to fill out an answer that wasn\'t provided as a checkbox.
{{Identical|Other}}',
	'articlefeedback-survey-question-useful' => 'This is a question in the survey with "yes" and "no" (prefswitch-survey-true and prefswitch-survey-false) as possible answers.',
	'articlefeedback-survey-question-useful-iffalse' => 'This question appears when the user checks "no" for the "Do you believe the ratings provided are useful and clear?" question. The user can enter their answer in a text box.',
	'articlefeedback-survey-question-comments' => 'This is a question in the survey with a text box that the user can enter their answer in.',
	'articlefeedback-survey-submit' => 'This is the caption for the button that submits the survey.
{{Identical|Submit}}',
	'articlefeedback-survey-title' => 'This text appears in the title bar of the survey dialog.',
	'articlefeedback-survey-thanks' => 'This text appears when the user has successfully submitted the survey.',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => '{{Optional}}',
	'articlefeedback-form-panel-helpimprove-privacy' => '{{Identical|Privacy}}',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Do not translate "Project:"
{{Identical|Privacypage}}',
	'articlefeedback-pitch-or' => '{{Identical|Or}}',
	'articlefeedback-pitch-join-body' => 'Based on {{msg-mw|Articlefeedback-pitch-join-message}}.',
	'articlefeedback-pitch-join-login' => '{{Identical|Log in}}',
	'articleFeedback-table-heading-page' => '{{Identical|Page}}',
	'articleFeedback-table-heading-average' => '{{Identical|Average}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'articlefeedback' => 'Bladsybeoordeling',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Ek wil bydrae tot {{site name}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Ek hou daarvan om my mening te deel',
	'articlefeedback-survey-answer-whyrated-other' => 'Ander',
	'articlefeedback-survey-question-useful-iffalse' => 'Hoekom?',
	'articlefeedback-survey-question-comments' => 'Het u enige addisionele kommentaar?',
	'articlefeedback-survey-submit' => 'Dien in',
	'articlefeedback-survey-title' => "Antwoord asseblief 'n paar vrae",
	'articlefeedback-survey-thanks' => 'Dankie dat u die opname ingevul het.',
	'articlefeedback-form-switch-label' => 'Verskaf terugvoer',
	'articlefeedback-form-panel-title' => 'U terugvoer',
	'articlefeedback-form-panel-instructions' => "Neem asseblief 'n oomblik om vir hierdie bladsy te stem.",
	'articlefeedback-form-panel-submit' => 'Stuur terugvoer',
	'articlefeedback-report-switch-label' => 'Wys resultate',
	'articlefeedback-pitch-reject' => 'Nee dankie',
);

/** Arabic (العربية)
 * @author Ciphers
 * @author Mido
 * @author OsamaK
 */
$messages['ar'] = array(
	'articlefeedback' => 'ملاحظات على المقال',
	'articlefeedback-desc' => 'ملاحظات على المقال',
	'articlefeedback-survey-question-whyrated' => 'الرجاء إخبارنا لماذا قمت بتقييم هذه الصفحة اليوم (ضع علامة أمام كل ما ينطبق):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'أردت أن أساهم في التقييم الكلي للصفحة',
	'articlefeedback-survey-answer-whyrated-development' => 'آمل أن التصويت الذي أدلي به سيؤثر إيجابا على تطوير الصفحة',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => ' أردت أن أساهم في {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'أود مشاركة رأيي',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'لم أقدم أي تقييمات اليوم، لكني أردت إعطاء ملاحظات عن هذه الأداة',
	'articlefeedback-survey-answer-whyrated-other' => 'ܐܚܪܢܐ',
	'articlefeedback-survey-question-useful' => 'هل تعتقد أن التقييم المقدم مفيد وواضح؟',
	'articlefeedback-survey-question-useful-iffalse' => 'ܠܡܢܐ?',
	'articlefeedback-survey-question-comments' => 'هل لديك أي تعليقات إضافية؟',
	'articlefeedback-survey-submit' => 'أرسل',
	'articlefeedback-survey-title' => 'الرجاء الإجابة على بعض الأسئلة',
	'articlefeedback-survey-thanks' => 'شكرا لملء الاستبيان.',
	'articlefeedback-form-switch-label' => 'تقديم استبيان',
	'articlefeedback-form-panel-title' => 'ملاحظاتك',
	'articlefeedback-form-panel-instructions' => 'الرجاء قضاء بعض وقت لتقييم هذه الصفحة.',
	'articlefeedback-form-panel-clear' => 'أزل هذا التقييم',
	'articlefeedback-form-panel-helpimprove-privacy' => 'سياسة الخصوصية',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:سياسة الخصوصية',
	'articlefeedback-form-panel-submit' => 'أرسل التقييمات',
	'articlefeedback-form-panel-success' => 'حُفظ بنجاح',
	'articlefeedback-report-switch-label' => 'عرض النتائج',
	'articlefeedback-report-panel-title' => 'نتائج الملاحظات',
	'articlefeedback-report-panel-description' => 'متوسط التقييمات الحالية.',
	'articlefeedback-report-empty' => 'لا توجد تقييمات',
	'articlefeedback-report-ratings' => 'تقييمات $1',
	'articlefeedback-field-trustworthy-label' => 'جدير بالثقة',
	'articlefeedback-field-trustworthy-tip' => 'هل تظن أن لهذه الصفحة استشهادات كافية وأن تلك الاستشهادات تأتي من مصادر جديرة بالثقة؟',
	'articlefeedback-field-complete-label' => 'مكتمل',
	'articlefeedback-field-complete-tip' => 'هل تشعر بأن هذه الصفحة تغطي مجالات الموضوع الأساسية كما ينبغي؟',
	'articlefeedback-field-objective-label' => 'غير متحيز',
	'articlefeedback-field-objective-tip' => 'هل تشعر أن تظهر هذه الصفحة هي تمثيل عادل لجميع وجهات النظر حول هذ الموضوع؟',
	'articlefeedback-field-wellwritten-label' => 'مكتوبة بشكل جيد',
	'articlefeedback-field-wellwritten-tip' => 'هل تشعر بأن هذه الصفحة منظمة تنظيماً جيدا ومكتوبة بشكل جيد؟',
	'articlefeedback-pitch-reject' => 'لا، شكراً',
	'articlefeedback-pitch-survey-accept' => 'بدء الاستقصاء',
	'articlefeedback-pitch-join-message' => 'أتريد إنشاء حساب؟',
	'articlefeedback-pitch-join-accept' => 'أنشئ حسابا',
	'articlefeedback-pitch-join-login' => 'لُج',
	'articlefeedback-pitch-edit-accept' => 'بدء التحرير',
);

/** Aramaic (ܐܪܡܝܐ) */
$messages['arc'] = array(
	'articlefeedback-survey-answer-whyrated-other' => 'ܐܚܪܢܐ',
	'articlefeedback-survey-question-useful-iffalse' => 'ܠܡܢܐ?',
	'articlefeedback-survey-submit' => 'ܫܕܪ',
);

/** Azerbaijani (Azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'articlefeedback-survey-question-useful-iffalse' => 'Niyə?',
	'articlefeedback-survey-submit' => 'Yolla',
	'articleFeedback-table-heading-page' => 'Səhifə',
);

/** Bashkir (Башҡортса)
 * @author Assele
 */
$messages['ba'] = array(
	'articlefeedback' => 'Мәҡәләне баһалау',
	'articlefeedback-desc' => 'Мәҡәләне баһалау (һынау өсөн)',
	'articlefeedback-survey-question-whyrated' => 'Зинһар, ниңә һеҙ бөгөн был биткә баһа биреүегеҙҙе беҙгә белгертегеҙ (бөтә тап килгән яуаптарҙы билдәләгеҙ):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Минең был биттең дөйөм баһаһына өлөш индергем килде.',
	'articlefeedback-survey-answer-whyrated-development' => 'Минең баһам был биттең үҫешенә ыңғай йоғонто яһар, тип өмөт итәм.',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Минең {{SITENAME}} проектына өлөш индергем килде.',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Мин үҙ фекерем менән бүлешергә ярятам',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Бин бөгөн баһа ҡуйманым, әммә был мөмкинлек тураһында үҙ фекеремде ҡалдырырға теләйем',
	'articlefeedback-survey-answer-whyrated-other' => 'Башҡа',
	'articlefeedback-survey-question-useful' => 'Ҡуйылған баһалар файҙалы һәм аңлайышлы, тип иҫәпләйһегеҙме?',
	'articlefeedback-survey-question-useful-iffalse' => 'Ниңә?',
	'articlefeedback-survey-question-comments' => 'Һеҙҙең берәй төрлө өҫтәмә иҫкәрмәләрегеҙ бармы?',
	'articlefeedback-survey-submit' => 'Ебәрергә',
	'articlefeedback-survey-title' => 'Зинһар, бер нисә һорауға яуап бирегеҙ',
	'articlefeedback-survey-thanks' => 'Һорауҙарға яуап биреүегеҙ өсөн рәхмәт.',
	'articlefeedback-error' => 'Хата килеп сыҡты. Зинһар, һуңыраҡ яңынан ҡабатлап ҡарағыҙ.',
	'articlefeedback-form-switch-label' => 'Был битте баһалау',
	'articlefeedback-form-panel-title' => 'Был битте баһалау',
	'articlefeedback-form-panel-instructions' => 'Зинһар, был битте баһалар өсөн ваҡытығыҙҙы бүлегеҙ.',
	'articlefeedback-form-panel-clear' => 'Был баһаламаны юйырға',
	'articlefeedback-form-panel-expertise' => 'Мин был һорау менән яҡшы танышмын',
	'articlefeedback-form-panel-expertise-studies' => 'Мин был һорау буйынса юғары белем алғанмын',
	'articlefeedback-form-panel-expertise-profession' => 'Был — минең һөнәремдең өлөшө',
	'articlefeedback-form-panel-expertise-hobby' => 'Был — минең оло шәхси мауығыуым',
	'articlefeedback-form-panel-expertise-other' => 'Минең белемем сығанағы бында күрһәтелмәгән',
	'articlefeedback-form-panel-submit' => 'Баһаламаны ебәрергә',
	'articlefeedback-form-panel-success' => 'Уңышлы һаҡланды',
	'articlefeedback-form-panel-expiry-title' => 'Һеҙҙең баһаламаларығыҙ иҫкергән',
	'articlefeedback-form-panel-expiry-message' => 'Зинһар, был битте ҡабаттан ҡарап сығығыҙ һәм яңы баһалама ебәрегеҙ.',
	'articlefeedback-report-switch-label' => 'Биттең баһаламаларын күрһәтергә',
	'articlefeedback-report-panel-title' => 'Биттең баһаламалары',
	'articlefeedback-report-panel-description' => 'Ағымдағы уртаса баһалар.',
	'articlefeedback-report-empty' => 'Баһаламалар юҡ',
	'articlefeedback-report-ratings' => '$1 баһалама',
	'articlefeedback-field-trustworthy-label' => 'Дөрөҫлөк',
	'articlefeedback-field-trustworthy-tip' => 'Һеҙ был биттә етәрлек сығанаҡтар бар һәм сығанаҡтар ышаныслы, тип һанайһығыҙмы?',
	'articlefeedback-field-complete-label' => 'Тулылыҡ',
	'articlefeedback-field-complete-tip' => 'Һеҙ был бит төп һорауҙарҙы етәрлек кимәлдә аса, тип һанайһығыҙмы?',
	'articlefeedback-field-objective-label' => 'Битарафлыҡ',
	'articlefeedback-field-objective-tip' => 'Һеҙ был бит ҡағылған һорау буйынса бөтә фекерҙәрҙе лә ғәҙел сағылдыра, тип һанайһығыҙмы?',
	'articlefeedback-field-wellwritten-label' => 'Уҡымлылыҡ',
	'articlefeedback-field-wellwritten-tip' => 'Һеҙ был бит яҡшы ойошторолған һәм яҡшы яҙылған, тип һанайһығыҙмы?',
	'articlefeedback-pitch-reject' => 'Бәлки, һуңғараҡ',
	'articlefeedback-pitch-or' => 'йәки',
	'articlefeedback-pitch-thanks' => 'Рәхмәт! Һеҙҙең баһаламағыҙ һаҡланды.',
	'articlefeedback-pitch-survey-message' => 'Зинһар, ҡыҫҡа баһалама үткәреү өсөн бер аҙ ваҡыт бүлегеҙ.',
	'articlefeedback-pitch-survey-accept' => 'Башларға',
	'articlefeedback-pitch-join-message' => 'Иҫәп яҙмаһын булдырырға теләр инегеҙме?',
	'articlefeedback-pitch-join-body' => 'Иҫәп яҙмаһы һеҙгә үҙгәртеүҙәрегеҙҙе күҙәтергә, фекер алышыуҙарҙа ҡатнашырға һәм берләшмәнең өлөшө булып торорға ярҙам итәсәк.',
	'articlefeedback-pitch-join-accept' => 'Иҫәп яҙмаһын булдырырға',
	'articlefeedback-pitch-join-login' => 'Танылыу',
	'articlefeedback-pitch-edit-message' => 'Һеҙ был битте мөхәррирләп була икәнен беләһегеҙме?',
	'articlefeedback-pitch-edit-accept' => 'Был битте үҙгәртергә',
	'articlefeedback-survey-message-success' => 'Һорауҙарға яуап биреүегеҙ өсөн рәхмәт.',
	'articlefeedback-survey-message-error' => 'Хата килеп сыҡты. Зинһар, һуңыраҡ яңынан ҡабатлап ҡарағыҙ.',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'articlefeedback' => 'Адзнака артыкулаў',
	'articlefeedback-desc' => 'Адзнака артыкулаў (пачатковая вэрсія)',
	'articlefeedback-survey-question-origin' => 'На якой старонцы Вы знаходзіліся, калі пачалося апытаньне?',
	'articlefeedback-survey-question-whyrated' => 'Калі ласка, паведаміце нам, чаму Вы адзначылі сёньня гэтую старонку (пазначце ўсе падыходзячыя варыянты):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Я жадаю зрабіць унёсак у агульную адзнаку старонкі',
	'articlefeedback-survey-answer-whyrated-development' => 'Я спадзяюся, што мая адзнака пазытыўна паўплывае на разьвіцьцё старонкі',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Я жадаю садзейнічаць разьвіцьцю {{GRAMMAR:родны|{{SITENAME}}}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Я жадаю падзяліцца маім пунктам гледжаньня',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Я не адзначыў сёньня, але хацеў даць водгук пра гэтую магчымасьць',
	'articlefeedback-survey-answer-whyrated-other' => 'Іншае',
	'articlefeedback-survey-question-useful' => 'Вы верыце, што пададзеныя адзнакі карысныя і зразумелыя?',
	'articlefeedback-survey-question-useful-iffalse' => 'Чаму?',
	'articlefeedback-survey-question-comments' => 'Вы маеце якія-небудзь дадатковыя камэнтары?',
	'articlefeedback-survey-submit' => 'Даслаць',
	'articlefeedback-survey-title' => 'Калі ласка, адкажыце на некалькі пытаньняў',
	'articlefeedback-survey-thanks' => 'Дзякуй за адказы на пытаньні.',
	'articlefeedback-error' => 'Узьнікла памылка. Калі ласка, паспрабуйце потым',
	'articlefeedback-form-switch-label' => 'Адзначце гэтую старонку',
	'articlefeedback-form-panel-title' => 'Адзначце гэтую старонку',
	'articlefeedback-form-panel-instructions' => 'Калі ласка, знайдзіце час, каб адзначыць гэтую старонку.',
	'articlefeedback-form-panel-clear' => 'Выдаліць гэтую адзнаку',
	'articlefeedback-form-panel-expertise' => 'Я маю значныя веды па гэтай тэме (па жаданьні)',
	'articlefeedback-form-panel-expertise-studies' => 'Я маю адпаведную ступень вышэйшай адукацыі',
	'articlefeedback-form-panel-expertise-profession' => 'Гэта частка маёй прафэсіі',
	'articlefeedback-form-panel-expertise-hobby' => 'Гэта мая асабістая жарсьць',
	'articlefeedback-form-panel-expertise-other' => 'Крыніцы маіх ведаў няма ў гэтым сьпісе',
	'articlefeedback-form-panel-helpimprove' => 'Я жадаю дапамагчы палепшыць {{GRAMMAR:вінавальны|{{SITENAME}}}}, дашліце мне ліст (па жаданьні)',
	'articlefeedback-form-panel-helpimprove-note' => 'Вам будзе дасланы ліст з пацьверджаньнем. Ваш адрас ня будзе разгалошаны. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Правілы адносна прыватнасьці',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Правілы адносна прыватнасьці',
	'articlefeedback-form-panel-submit' => 'Даслаць адзнакі',
	'articlefeedback-form-panel-success' => 'Пасьпяхова захаваны',
	'articlefeedback-form-panel-expiry-title' => 'Вашыя адзнакі састарэлі',
	'articlefeedback-form-panel-expiry-message' => 'Калі ласка, адзначце зноў гэтую старонку і дашліце новыя адзнакі.',
	'articlefeedback-report-switch-label' => 'Паказаць адзнакі старонкі',
	'articlefeedback-report-panel-title' => 'Адзнакі старонкі',
	'articlefeedback-report-panel-description' => 'Цяперашнія сярэднія адзнакі.',
	'articlefeedback-report-empty' => 'Адзнакаў няма',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|адзнака|адзнакі|адзнакаў}}',
	'articlefeedback-field-trustworthy-label' => 'Надзейны',
	'articlefeedback-field-trustworthy-tip' => 'Вы лічыце, што гэтая старонка мае дастаткова цытатаў, і яны паходзяць з крыніц вартых даверу?',
	'articlefeedback-field-complete-label' => 'Скончанасьць',
	'articlefeedback-field-complete-tip' => 'Вы лічыце, што гэтая старонка раскрывае асноўныя пытаньні тэмы як сьлед?',
	'articlefeedback-field-objective-label' => "Аб'ектыўны",
	'articlefeedback-field-objective-tip' => 'Вы лічыце, што на гэтай старонцы адлюстраваныя усе пункты гледжаньня на пытаньне?',
	'articlefeedback-field-wellwritten-label' => 'Добра напісаны',
	'articlefeedback-field-wellwritten-tip' => 'Вы лічыце, што гэтая старонка добра арганізаваная і добра напісаная?',
	'articlefeedback-pitch-reject' => 'Можа потым',
	'articlefeedback-pitch-or' => 'ці',
	'articlefeedback-pitch-thanks' => 'Дзякуй! Вашая адзнака была захаваная.',
	'articlefeedback-pitch-survey-message' => 'Калі ласка, знайдзіце час каб прыняць удзел у невялікім апытаньні.',
	'articlefeedback-pitch-survey-accept' => 'Пачаць апытаньне',
	'articlefeedback-pitch-join-message' => 'Вы жадаеце стварыць рахунак?',
	'articlefeedback-pitch-join-body' => 'Рахунак дапаможа Вам сачыць за Вашымі рэдагаваньнямі, удзельнічаць у абмеркаваньнях і быць часткай супольнасьці.',
	'articlefeedback-pitch-join-accept' => 'Стварыць рахунак',
	'articlefeedback-pitch-join-login' => 'Увайсьці ў сыстэму',
	'articlefeedback-pitch-edit-message' => 'Вы ведалі, што можаце рэдагаваць гэтую старонку?',
	'articlefeedback-pitch-edit-accept' => 'Рэдагаваць гэтую старонку',
	'articlefeedback-survey-message-success' => 'Дзякуй за адказы на гэтае апытаньне.',
	'articlefeedback-survey-message-error' => 'Узьнікла памылка.
Калі ласка, паспрабуйце потым.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Сёньняшнія ўзьлёты і падзеньні',
	'articleFeedback-table-caption-weeklymostchanged' => 'Найбольш зьмененыя на гэтым тыдні',
	'articleFeedback-table-caption-recentlows' => 'Апошнія падзеньні',
	'articleFeedback-table-heading-page' => 'Старонка',
	'articleFeedback-table-heading-average' => 'Сярэдняе',
	'articlefeedback-emailcapture-response-body' => 'Вітаем!

Дзякуй, за дапамогу ў паляпшэньні {{GRAMMAR:родны|{{SITENAME}}}}.

Калі ласка, знайдзіце час каб пацьвердзіць Ваш адрас электроннай пошты. Перайдзіце па спасылцы пададзенай ніжэй: 

$1

Таксама, Вы можаце наведаць:

$2

І увесьці наступны код пацьверджаньня:

$3

Хутка мы перададзім Вам інфармацыю, як Вы можаце дапамагчы ў паляпшэньні {{GRAMMAR:родны|{{SITENAME}}}}.

Калі Вы не дасылалі гэты запыт, калі ласка, праігнаруйце гэты ліст, і мы больш не будзем Вас турбаваць.

З найлепшымі пажаданьнямі, і дзякуй Вам,
Каманда {{GRAMMAR:родны|{{SITENAME}}}}',
);

/** Bulgarian (Български)
 * @author DCLXVI
 * @author Turin
 */
$messages['bg'] = array(
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Исках да допринеса за общата оценка на страницата',
	'articlefeedback-survey-answer-whyrated-development' => 'Надявам се, че оценката ми ще се отрази положително върху развитието на страницата',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Исках да допринеса за {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Харесва ми да споделям мнението си',
	'articlefeedback-survey-answer-whyrated-other' => 'Друго',
	'articlefeedback-survey-question-useful-iffalse' => 'Защо?',
	'articlefeedback-survey-question-comments' => 'Имате ли някакви допълнителни коментари?',
	'articlefeedback-survey-submit' => 'Изпращане',
	'articlefeedback-survey-title' => 'Моля, отговорете на няколко въпроса',
	'articlefeedback-survey-thanks' => 'Благодарим ви, че попълнихте въпросника!',
	'articlefeedback-report-switch-label' => 'Показване на резултатите',
	'articlefeedback-pitch-join-login' => 'Влизане',
	'articlefeedback-pitch-edit-accept' => 'Редактиране на тази страница',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'articlefeedback' => 'নিবন্ধের ফিডব্যাক',
	'articlefeedback-desc' => 'নিবন্ধের ফিডব্যাক',
	'articlefeedback-survey-question-origin' => 'জরিপটি শুরুর সময় আপনি কোন পাতায় অবস্থান করছিলেন?',
	'articlefeedback-survey-question-whyrated' => 'অনুগ্রহপূর্বক আমাদের বলুন, কেনো আজ আপনি এই পাতাটিকে রেট করলেন (প্রযোজ্য সকল অপশন চেক করুন):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'আমি এই পাতাটির সর্বব্যাপী রেটিংয়ে অবদান রাখতে চেয়েছিলাম',
	'articlefeedback-survey-answer-whyrated-development' => 'আমি আশা করি আমার রেটিং এই পাতাটির উন্নয়নে ইতিবাচক প্রভাব ফেলবে',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'আমি {{SITENAME}} সাইটে অবদান রাখতে চেয়েছিলাম',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'আমি আমার মতামত প্রদান করতে পছন্দ করি',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'আমি আজকে কোনো রেটিং প্রদান করিনি, কিন্তু সুবিধাটির ওপর একটি ফিডব্যাক প্রদান করতে চেয়েছিলাম',
	'articlefeedback-survey-answer-whyrated-other' => 'অন্যান্য',
	'articlefeedback-survey-question-useful' => 'আপনি কি মনে করেন যে এখানে প্রদানকৃত রেটিংগুলো কার্যকরী ও বোধগম্য?',
	'articlefeedback-survey-question-useful-iffalse' => 'কেনো?',
	'articlefeedback-survey-question-comments' => 'আপনার কী প্রদান করার মতো আরও কোনো মন্তব্য রয়েছে?',
	'articlefeedback-survey-submit' => 'জমা দিন',
	'articlefeedback-survey-title' => 'অনুগ্রহপূর্বক কয়েকটি প্রশ্নের উত্তর দিন',
	'articlefeedback-survey-thanks' => 'জরিপটিতে অংশ নেওয়ার জন্য আপনাকে ধন্যবাদ।',
	'articlefeedback-error' => 'একটি ত্রুটি দেখা দিয়েছে। অনুগ্রহপূর্বক পরবর্তীতে আবার চেষ্টা করুন।',
	'articlefeedback-form-switch-label' => 'এই পাতটি রেট করুন',
	'articlefeedback-form-panel-title' => 'এই পাতটি রেট করুন',
	'articlefeedback-form-panel-instructions' => 'অনুগ্রহপূর্বক কিছু সময় নিয়ে এই পাতাটি রেট করুন।',
	'articlefeedback-form-panel-clear' => 'এই রেটিংটি অপসারণ করো',
	'articlefeedback-form-panel-expertise' => 'আমি এই বিষয়টি সম্পর্কে উচ্চমানের জ্ঞান রাখি (ঐচ্ছিক)',
	'articlefeedback-form-panel-expertise-studies' => 'আমার এই সম্পর্কিত কলেজ/বিশ্ববিদ্যালয়ের ডিগ্রি রয়েছে',
	'articlefeedback-form-panel-expertise-profession' => 'এটি আমার পেশার অংশ',
	'articlefeedback-form-panel-expertise-hobby' => 'এটি আমার খুবই পছন্দের একটি শখ',
	'articlefeedback-form-panel-expertise-other' => 'এ বিষয়ে আমার জ্ঞানের উৎস এই তালিকায় নেই',
	'articlefeedback-form-panel-helpimprove' => 'আমি উইকিপিডিয়ার উন্নয়নে সাহায্য করতে চাই, আমাকে ই-মেইল পাঠান (ঐচ্ছিক)',
	'articlefeedback-form-panel-helpimprove-note' => 'আমরা আপনাকে একটি নিশ্চিতকরণ ই-মেইল পাঠাবো। আমরা কারও সাথে আপনার ই-মেইল ঠিকানা শেয়ার করবো না। $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'গোপনীয়তার নীতি',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:গোপনীয়তার নীতি',
	'articlefeedback-form-panel-submit' => 'রেটিং জমাদান',
	'articlefeedback-form-panel-success' => 'সফলভাবে সংরক্ষিত',
	'articlefeedback-form-panel-expiry-title' => 'আপনার রেটিং মেয়াদ উত্তীর্ণ হয়ে গেছে',
	'articlefeedback-form-panel-expiry-message' => 'অনুগ্রহ করে এই পাতাটি নতুন করে লোড করুন, এবং নতুন রেটিং প্রদান করুন।',
	'articlefeedback-report-switch-label' => 'পাতার রেটিং দেখাও',
	'articlefeedback-report-panel-title' => 'পাতার রেটিং',
	'articlefeedback-report-panel-description' => 'বর্তমানের গড় রেটিং।',
	'articlefeedback-report-empty' => 'কোনো রেটিং নেই',
	'articlefeedback-report-ratings' => '$1 রেটিং',
	'articlefeedback-field-trustworthy-label' => 'বিশ্বাসী',
	'articlefeedback-field-trustworthy-tip' => 'আপনি কী মনে করেন এই পাতায় যথেষ্ট পরিমান তথ্যসূত্র রয়েছে এবং সেগুলো নির্ভরযোগ্য সূত্র হতে এসেছে?',
	'articlefeedback-field-complete-label' => 'সম্পূর্ণ',
	'articlefeedback-field-complete-tip' => 'আপনি কী মনে করেনে এই পাতাটি থাকা প্রয়োজনীয় এমন সকল বিষয় সম্পর্কে ধারাণা দিতে পেরেছে?',
	'articlefeedback-field-objective-label' => 'উদ্দেশ্য',
	'articlefeedback-field-objective-tip' => 'আপনি কি মনে করেন, এই পাতাটি সকল পক্ষের মতামতের একটি নিরপেক্ষ উপস্থাপন করতে সমর্থ হয়েছে?',
	'articlefeedback-field-wellwritten-label' => 'ভালো লেখা',
	'articlefeedback-field-wellwritten-tip' => 'আপনি কী মনে করেন এই পাতাটি ভালোভাবে সাজানো ও ভালোভাবে লেখা হয়েছে?',
	'articlefeedback-pitch-reject' => 'সম্ভবত পরে',
	'articlefeedback-pitch-or' => 'অথবা',
	'articlefeedback-pitch-thanks' => 'ধন্যবাদ! আপনার রেটিং সংরক্ষণ করা হয়েছে।',
	'articlefeedback-pitch-survey-message' => 'অনুগ্রহপূর্বক কিছু সময় ব্যয় করে একটি ছোট জরিপে অংশ নিন।',
	'articlefeedback-pitch-survey-accept' => 'জরিপ শুরু',
	'articlefeedback-pitch-join-message' => 'আপনি কি একটি অ্যাকাউন্ট তৈরি করতে চেয়েছিলেন?',
	'articlefeedback-pitch-join-body' => 'একটি অ্যাকাউন্ট আপনাকে আপনার সম্পাদনাগুলো অনুসরণ করতে সাহায্য করবে, আপনি আলোচনায় অংশ নিতে পারবেন, এবং সম্প্রদায়ের অংশ হতে পারবেন।',
	'articlefeedback-pitch-join-accept' => 'একটি অ্যাকাউন্ট তৈরি করুন',
	'articlefeedback-pitch-join-login' => 'প্রবেশ করুন',
	'articlefeedback-pitch-edit-message' => 'আপনি কী জানতেন যে আপনি একই পাতাটি সম্পাদনা করতে পারেন?',
	'articlefeedback-pitch-edit-accept' => 'এই পাতাটি সম্পাদনা করুন',
	'articlefeedback-survey-message-success' => 'জরিপটিতে অংশ নেওয়ার জন্য আপনাকে ধন্যবাদ।',
	'articlefeedback-survey-message-error' => 'একটি ত্রুটি দেখা দিয়েছে।
অনুগ্রহপূর্বক পরবর্তীতে আবার চেষ্টা করুন।',
);

/** Breton (Brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Gwendal
 * @author Y-M D
 */
$messages['br'] = array(
	'articlefeedback' => 'Priziadenn pennadoù',
	'articlefeedback-desc' => 'Priziadenn pennadoù (stumm stur)',
	'articlefeedback-survey-question-origin' => "E peseurt pajenn e oac'h p'hoc'h eus kroget gant an enselladenn-mañ ?",
	'articlefeedback-survey-question-whyrated' => "Roit deomp an abeg d'ar perak ho peus priziet ar bajenn-mañ hiziv (kevaskit an abegoù gwirion) :",
	'articlefeedback-survey-answer-whyrated-contribute-rating' => "C'hoant em boa da reiñ sikour evit priziañ ar bajenn en ur mod hollek",
	'articlefeedback-survey-answer-whyrated-development' => "Spi am eus e servijo d'un doare pozitivel ma friziadenn evit dioreiñ ar bajenn",
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => "C'hoant em boa da gemer perzh e {{SITENAME}}",
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Plijout a ra din reiñ ma ali',
	'articlefeedback-survey-answer-whyrated-didntrate' => "N'am eus ket priziet ar bajenn hiziv, reiñ ma soñj diwar-benn an arc'hweladur an hini eo",
	'articlefeedback-survey-answer-whyrated-other' => 'All',
	'articlefeedback-survey-question-useful' => "Hag-eñ e soñjoc'h ez eo ar briziadennoù roet talvoudus ha sklaer ?",
	'articlefeedback-survey-question-useful-iffalse' => 'Perak ?',
	'articlefeedback-survey-question-comments' => 'Evezhiadennoù all ho pefe ?',
	'articlefeedback-survey-submit' => 'Kas',
	'articlefeedback-survey-title' => "Trugarez da respont d'un nebeut goulennoù",
	'articlefeedback-survey-thanks' => 'Trugarez da vezañ leuniet ar goulennaoueg.',
	'articlefeedback-error' => "C'hoarvezet ez eus ur fazi. Esaeit en-dro diwezhtaoc'h, mar plij.",
	'articlefeedback-form-switch-label' => "Reiñ un notenn d'ar bajenn-mañ",
	'articlefeedback-form-panel-title' => "Reiñ un notenn d'ar bajenn-mañ",
	'articlefeedback-form-panel-instructions' => 'Trugarez da gemer un tamm amzer da briziañ ar bajenn-mañ.',
	'articlefeedback-form-panel-clear' => 'Lemel an notenn-mañ',
	'articlefeedback-form-panel-expertise' => 'Gouzout a ran mat-tre diouzh an danvez-se (diret)',
	'articlefeedback-form-panel-expertise-studies' => 'Un diplom skol-veur pe skol-uhel a zere am eus tapet',
	'articlefeedback-form-panel-expertise-profession' => 'Ul lodenn eus ma micher eo',
	'articlefeedback-form-panel-expertise-hobby' => 'Dik on gant an danvez-se ent personel',
	'articlefeedback-form-panel-expertise-other' => "Orin ma anaouedegezh n'eo ket renablet aze",
	'articlefeedback-form-panel-helpimprove' => 'Me a garfe skoazellañ da wellaat Wikipedia, kasit din ur postel (diret)',
	'articlefeedback-form-panel-helpimprove-note' => "Kaset e vo deoc'h ur chomlec'h kadarnaat. Ne vo ket kaset ho chomlec'h postel da zen ebet. $1",
	'articlefeedback-form-panel-helpimprove-privacy' => 'Reolennoù prevezded',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Reolennoù prevezded',
	'articlefeedback-form-panel-submit' => 'Kas ar priziadennoù',
	'articlefeedback-form-panel-success' => 'Enrollet ervat',
	'articlefeedback-form-panel-expiry-title' => "Aet eo ho priziadenn d'he zermen",
	'articlefeedback-form-panel-expiry-message' => 'Adpriziit ar bajenn-mañ ha kasit en-dro ho priziadenn nevez.',
	'articlefeedback-report-switch-label' => 'Gwelet notennoù ar bajenn',
	'articlefeedback-report-panel-title' => 'Priziadennoù ar bajenn',
	'articlefeedback-report-panel-description' => 'Notennoù keitat evit ar mare.',
	'articlefeedback-report-empty' => 'Priziadenn ebet',
	'articlefeedback-report-ratings' => '$1 priziadenn',
	'articlefeedback-field-trustworthy-label' => 'A fiziañs',
	'articlefeedback-field-trustworthy-tip' => "Ha soñjal a ra deoc'h ez eus arroudennoù a-walc'h er bajenn-mañ ? Ha diwar mammennoù sirius e teuont ?",
	'articlefeedback-field-complete-label' => 'Graet',
	'articlefeedback-field-complete-tip' => "Ha soñjal a ra deoc'h e vez graet mat tro temoù pennañ ar sujed ?",
	'articlefeedback-field-objective-label' => 'Diuntu',
	'articlefeedback-field-objective-tip' => "Ha soñjal a ra deoc'h e vez kavet displeget er bajenn-mañ, en un doare reizh a-walc'h, holl tuioù ar sujed ?",
	'articlefeedback-field-wellwritten-label' => 'Skrivet brav',
	'articlefeedback-field-wellwritten-tip' => "Ha soñjal a ra deoc'h eo skrivet brav ha frammet mat ar bajenn-mañ ?",
	'articlefeedback-pitch-reject' => "Diwezhatoc'hik marteze",
	'articlefeedback-pitch-or' => 'pe',
	'articlefeedback-pitch-thanks' => 'Trugarez ! Enrollet eo bet ho priziadenn.',
	'articlefeedback-pitch-survey-message' => "Tapit un tammig amzer da respont d'ur sontadeg vihan.",
	'articlefeedback-pitch-survey-accept' => 'Kregiñ gant an enklask',
	'articlefeedback-pitch-join-message' => "Krouiñ ur gont a felle deoc'h ober ?",
	'articlefeedback-pitch-join-body' => "Gant ur gont e c'hallot heuliañ ar c'hemmoù degaset ganeoc'h, kemer perzh e kaozeadennoù ha bezañ ezel eus ar gumuniezh.",
	'articlefeedback-pitch-join-accept' => 'Krouiñ ur gont',
	'articlefeedback-pitch-join-login' => 'Kevreañ',
	'articlefeedback-pitch-edit-message' => "Ha gouzout a rit e c'hallit degas kemmoù war ar bajenn-mañ ?",
	'articlefeedback-pitch-edit-accept' => 'Degas kemmoù war ar bajenn-mañ',
	'articlefeedback-survey-message-success' => 'Trugarez da vezañ leuniet ar goulennaoueg.',
	'articlefeedback-survey-message-error' => "Ur fazi zo bet.
Klaskit en-dro diwezhatoc'h.",
	'articleFeedback-table-caption-dailyhighsandlows' => 'Lusk ha dilusk an devezh',
	'articleFeedback-table-caption-weeklymostchanged' => 'Ar re gemmet ar muiañ er sizhun-mañ',
	'articleFeedback-table-caption-recentlows' => 'Dilusk nevesañ',
	'articleFeedback-table-heading-page' => 'Pajenn',
	'articleFeedback-table-heading-average' => 'Keidenn',
	'articlefeedback-emailcapture-response-body' => "Demat deoc'h !

Trugarez deoc'h da vezañ diskouezet bezañ dedennet d'hor skoazellañ evit gwellaat {{SITENAME}}.

Kemerit ur pennadig amzer evit kadarnaat ho chomlec'h postel en ur glikañ war al liamm a-is : 

$1

Gallout a rit ivez mont da welet :

$2

Ha merkañ ar c'hod kadarnaat da-heul :

$3

A-barzh pell ez aimp e darempred ganeoc'h evit ho skoazellañ da wellaat {{SITENAME}}.

Ma n'eo ket deuet ar goulenn ganeoc'h, na rit ket van ouzh ar postel-mañ, ne vo ket kaset mann ebet all deoc'h.

A wir galon ganeoc'h ha trugarez deoc'h,
Skipailh {{SITENAME}}",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'articlefeedback' => 'Ocjenjivanje članaka',
	'articlefeedback-desc' => 'Ocjenjivanje članaka (probna verzija)',
	'articlefeedback-survey-question-origin' => 'Koja je stranica na kojoj ste bili kada ste počeli ovu anketu?',
	'articlefeedback-survey-question-whyrated' => 'Molimo recite nam zašto se ocijenili danas ovu stranicu (označite sve koje se može primijeniti):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Želio sam da pridonesem sveukupnoj ocjeni stranice',
	'articlefeedback-survey-answer-whyrated-development' => 'Nadam se da će moja ocjena imati pozitivan odjek na uređivanje stranice',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Želim da pridonosim na projektu {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Volim dijeliti svoje mišljenje',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Nisam dao ocjene danas, ali sam želio da dadnem povratne podatke o mogućnostima',
	'articlefeedback-survey-answer-whyrated-other' => 'Ostalo',
	'articlefeedback-survey-question-useful' => 'Da li vjerujete da su date ocjene korisne i jasne?',
	'articlefeedback-survey-question-useful-iffalse' => 'Zašto?',
	'articlefeedback-survey-question-comments' => 'Da li imate dodatnih komentara?',
	'articlefeedback-survey-submit' => 'Pošalji',
	'articlefeedback-survey-title' => 'Molimo odgovorite na nekoliko pitanja',
	'articlefeedback-survey-thanks' => 'Hvala vam na popunjavanju ankete.',
	'articlefeedback-error' => 'Desila se greška. Molimo pokušajte kasnije.',
	'articlefeedback-form-switch-label' => 'Ocijeni ovu stranicu',
	'articlefeedback-form-panel-title' => 'Ocijeni ovu stranicu',
	'articlefeedback-form-panel-instructions' => 'Molimo odvojite trenutak vremena da ocijenite ovu stranicu.',
	'articlefeedback-form-panel-clear' => 'Ukloni ovu ocjenu',
	'articlefeedback-form-panel-expertise' => 'Visoko sam obrazovan o ovoj temi (neobavezno)',
	'articlefeedback-form-panel-expertise-studies' => 'Imam odgovarajući fakultetsku/univerzitetsku diplomu',
	'articlefeedback-form-panel-expertise-profession' => 'Ovo je dio moje struke',
	'articlefeedback-form-panel-expertise-hobby' => 'Ovo je moja duboka lična strast',
	'articlefeedback-form-panel-expertise-other' => 'Izvor mog znanja nije prikazan ovdje',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Politika privatnosti',
	'articlefeedback-form-panel-submit' => 'Pošalji ocjene',
	'articlefeedback-form-panel-success' => 'Uspješno sačuvano',
	'articlefeedback-form-panel-expiry-title' => 'Vaše ocjene su istekle',
	'articlefeedback-form-panel-expiry-message' => 'Molimo ponovo ocijenite ovu stranicu i pošaljite nove ocjene.',
	'articlefeedback-report-switch-label' => 'Prikaži ocjene stranice',
	'articlefeedback-report-panel-title' => 'Ocjene stranice',
	'articlefeedback-report-panel-description' => 'Trenutni prosječni rejtinzi.',
	'articlefeedback-report-empty' => 'Bez ocjena',
	'articlefeedback-report-ratings' => '$1 ocjena',
	'articlefeedback-field-trustworthy-label' => 'Vjerodostojno',
	'articlefeedback-field-trustworthy-tip' => 'Da li smatrate da ova stranica ima dovoljno izvora i da su oni iz provjerljivih izvora?',
	'articlefeedback-field-complete-label' => 'Završeno',
	'articlefeedback-field-complete-tip' => 'Da li mislite da ova stranica pokriva osnovna područja teme koja bi trebala?',
	'articlefeedback-field-objective-label' => 'Nepristrano',
	'articlefeedback-field-objective-tip' => 'Da li smatrate da ova stranica prikazuje neutralni prikaz iz svih perspektiva o temi?',
	'articlefeedback-field-wellwritten-label' => 'Dobro napisano',
	'articlefeedback-field-wellwritten-tip' => 'Da li mislite da je ova stranica dobro organizirana i dobro napisana?',
	'articlefeedback-pitch-reject' => 'Možda kasnije',
	'articlefeedback-pitch-or' => 'ili',
	'articlefeedback-pitch-thanks' => 'Hvala! Vaše ocjene su spremljene.',
	'articlefeedback-pitch-survey-message' => 'Molimo izdvojite trenutak za ispunite kratku anketu.',
	'articlefeedback-pitch-survey-accept' => 'Započni anketu',
	'articlefeedback-pitch-join-message' => 'Da li želite napraviti račun?',
	'articlefeedback-pitch-join-body' => 'Račun će vam pomoći da pratite vaše izmjene, da se uključite u razgovore i da budete dio zajednice.',
	'articlefeedback-pitch-join-accept' => 'Napravi račun',
	'articlefeedback-pitch-join-login' => 'Prijavi se',
	'articlefeedback-pitch-edit-message' => 'Da li znate da možete urediti ovu stranicu?',
	'articlefeedback-pitch-edit-accept' => 'Uredite ovu stranicu',
	'articlefeedback-survey-message-success' => 'Hvala vam na popunjavanju ankete.',
	'articlefeedback-survey-message-error' => 'Desila se greška.
Molimo pokušajte kasnije.',
);

/** Catalan (Català)
 * @author Aleator
 * @author BroOk
 * @author El libre
 * @author Solde
 */
$messages['ca'] = array(
	'articlefeedback' => "Avaluació de l'article",
	'articlefeedback-desc' => "Avaluació de l'article",
	'articlefeedback-survey-question-whyrated' => "Per favor, diga'ns per què has valorat aquesta pàgina avui (marca totes les opcions que creguis convenient):",
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Vull contribuir a la qualificació global de la pàgina',
	'articlefeedback-survey-answer-whyrated-development' => 'Espero que la meva qualificació afecti positivament al desenvolupament de la pàgina',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Volia contribuir a {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Vull compartir la meva opinió',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'No he valorat res avui, però volia donar resposta a la característica',
	'articlefeedback-survey-answer-whyrated-other' => 'Altres',
	'articlefeedback-survey-question-useful' => 'Creus que les valoracions proporcionades són útils i clares?',
	'articlefeedback-survey-question-useful-iffalse' => 'Per què?',
	'articlefeedback-survey-question-comments' => 'Tens algun comentari addicional?',
	'articlefeedback-survey-submit' => 'Trametre',
	'articlefeedback-survey-title' => 'Si us plau, contesti algunes preguntes',
	'articlefeedback-survey-thanks' => "Gràcies per omplir l'enquesta.",
	'articlefeedback-form-switch-label' => 'Proporciona informació',
	'articlefeedback-form-panel-title' => 'Els teus comentaris',
	'articlefeedback-form-panel-instructions' => 'Si us plau dedica un moment per valorar aquesta pàgina.',
	'articlefeedback-form-panel-submit' => 'Envia comentaris',
	'articlefeedback-form-panel-success' => 'Desat correctament',
	'articlefeedback-report-switch-label' => 'Mostra els resultats',
	'articlefeedback-report-panel-title' => 'Resultats dels comentaris',
	'articlefeedback-report-panel-description' => 'Actual mitjana de qualificacions.',
	'articlefeedback-report-empty' => 'No hi ha valoracions',
	'articlefeedback-report-ratings' => '$1 valoracions',
	'articlefeedback-field-trustworthy-label' => 'Digne de confiança',
	'articlefeedback-field-complete-label' => 'Complet',
	'articlefeedback-field-complete-tip' => 'Consideres que aquesta pàgina aborda els temes essencials que havien de ser coberts?',
	'articlefeedback-field-objective-label' => 'Imparcial',
	'articlefeedback-field-objective-tip' => "Creus que aquesta pàgina representa, de forma equilibrada, tots els punts de vista sobre l'assumpte?",
	'articlefeedback-field-wellwritten-label' => 'Ben escrit',
	'articlefeedback-pitch-reject' => 'Potser més tard',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-survey-accept' => "Comença l'enquesta",
	'articlefeedback-pitch-join-accept' => 'Crea un compte',
	'articlefeedback-pitch-edit-accept' => 'Comença a editar',
	'articleFeedback-table-heading-page' => 'Pàgina',
	'articleFeedback-table-heading-average' => 'Mitjana',
);

/** Chechen (Нохчийн)
 * @author Sasan700
 */
$messages['ce'] = array(
	'articlefeedback-form-panel-submit' => 'Дlадахьийта хетарг',
);

/** Czech (Česky)
 * @author Jkjk
 * @author Mormegil
 * @author Mr. Richard Bolla
 */
$messages['cs'] = array(
	'articlefeedback' => 'Hodnocení článku',
	'articlefeedback-desc' => 'Hodnocení článků (pilotní verze)',
	'articlefeedback-survey-question-origin' => 'Ze které stránky jste {{gender:|přišel|přišla|přišli}} na tento průzkum?',
	'articlefeedback-survey-question-whyrated' => 'Proč jste dnes hodnotili tuto stránku (zaškrtněte všechny platné možnosti)?',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Chtěl jsem ovlivnit výsledné ohodnocení stránky',
	'articlefeedback-survey-answer-whyrated-development' => 'Doufám, že mé hodnocení pozitivně ovlivní budoucí vývoj stránky',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Chtěl jsem pomoci {{grammar:3sg|{{SITENAME}}}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Rád sděluji svůj názor',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Dnes jsem nehodnotil, ale chtěl jsem poskytnout svůj názor na tuto funkci',
	'articlefeedback-survey-answer-whyrated-other' => 'Jiný důvod',
	'articlefeedback-survey-question-useful' => 'Myslíte si, že poskytovaná hodnocení jsou užitečná a pochopitelná?',
	'articlefeedback-survey-question-useful-iffalse' => 'Proč?',
	'articlefeedback-survey-question-comments' => 'Máte nějaké další komentáře?',
	'articlefeedback-survey-submit' => 'Odeslat',
	'articlefeedback-survey-title' => 'Odpovězte prosím na několik otázek',
	'articlefeedback-survey-thanks' => 'Děkujeme za vyplnění průzkumu.',
	'articlefeedback-error' => 'Došlo k chybě. Zkuste to prosím později.',
	'articlefeedback-form-switch-label' => 'Hodnoťte tuto stránku',
	'articlefeedback-form-panel-title' => 'Ohodnoťte tuto stránku',
	'articlefeedback-form-panel-instructions' => 'Věnujte prosím chvilku ohodnocení této stránky.',
	'articlefeedback-form-panel-clear' => 'Odstranit hodnocení',
	'articlefeedback-form-panel-expertise' => 'Mám rozsáhlé znalosti tohoto tématu (nepovinné)',
	'articlefeedback-form-panel-expertise-studies' => 'Mám příslušný vysokoškolský titul',
	'articlefeedback-form-panel-expertise-profession' => 'Jde o součást mé profese',
	'articlefeedback-form-panel-expertise-hobby' => 'Je to můj velký koníček',
	'articlefeedback-form-panel-expertise-other' => 'Původ mých znalostí zde není uveden',
	'articlefeedback-form-panel-helpimprove' => 'Rád bych pomohl vylepšit Wikipedii, pošlete mi e-mail (nepovinné)',
	'articlefeedback-form-panel-helpimprove-note' => 'Pošleme vám potvrzovací e-mail. Vaši e-mailovou adresu nikomu neposkytneme. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Zásady ochrany osobních údajů',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Ochrana osobních údajů',
	'articlefeedback-form-panel-submit' => 'Odeslat hodnocení',
	'articlefeedback-form-panel-success' => 'Úspěšně uloženo',
	'articlefeedback-form-panel-expiry-title' => 'Platnost vašeho hodnocení vypršela',
	'articlefeedback-form-panel-expiry-message' => 'Ohodnoťte prosím stránku znovu a zadejte nové hodnocení.',
	'articlefeedback-report-switch-label' => 'Zobrazit hodnocení',
	'articlefeedback-report-panel-title' => 'Hodnocení stránky',
	'articlefeedback-report-panel-description' => 'Aktuální průměrné hodnocení',
	'articlefeedback-report-empty' => 'Bez hodnocení',
	'articlefeedback-report-ratings' => '$1 hodnocení',
	'articlefeedback-field-trustworthy-label' => 'Důvěryhodnost',
	'articlefeedback-field-trustworthy-tip' => 'Máte pocit, že tato stránka dostatečně odkazuje na zdroje a použité zdroje jsou důvěryhodné?',
	'articlefeedback-field-complete-label' => 'Úplnost',
	'articlefeedback-field-complete-tip' => 'Máte pocit, že tato stránka pokrývá všechny důležité části tématu?',
	'articlefeedback-field-objective-label' => 'Objektivita',
	'articlefeedback-field-objective-tip' => 'Máte pocit, že tato stránka spravedlivě pokrývá všechny pohledy na dané téma?',
	'articlefeedback-field-wellwritten-label' => 'Čitelnost',
	'articlefeedback-field-wellwritten-tip' => 'Máte pocit, že tato stránka je správně organizována a dobře napsána?',
	'articlefeedback-pitch-reject' => 'Možná později',
	'articlefeedback-pitch-or' => 'nebo',
	'articlefeedback-pitch-thanks' => 'Děkujeme! Vaše hodnocení bylo uloženo.',
	'articlefeedback-pitch-survey-message' => 'Věnujte prosím chvilku vyplnění krátkého průzkumu.',
	'articlefeedback-pitch-survey-accept' => 'Spustit průzkum',
	'articlefeedback-pitch-join-message' => 'Chtěli byste si založit uživatelský účet?',
	'articlefeedback-pitch-join-body' => 'Účet vám umožní sledovat vaše editace, účastnit se diskusí a stát se součástí komunity.',
	'articlefeedback-pitch-join-accept' => 'Založit účet',
	'articlefeedback-pitch-join-login' => 'Přihlásit se',
	'articlefeedback-pitch-edit-message' => 'Věděli jste, že můžete tuto stránku upravit?',
	'articlefeedback-pitch-edit-accept' => 'Editovat stránku',
	'articlefeedback-survey-message-success' => 'Děkujeme za vyplnění dotazníku.',
	'articlefeedback-survey-message-error' => 'Došlo k chybě.
Zkuste to prosím později.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dnešní maxima a minima',
	'articleFeedback-table-heading-page' => 'Stránka',
	'articleFeedback-table-heading-average' => 'Průměr',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 * @author Purodha
 */
$messages['de'] = array(
	'articlefeedback' => 'Seiteneinschätzung',
	'articlefeedback-desc' => 'Ermöglicht die Einschätzung von Seiten (Pilotversion)',
	'articlefeedback-survey-question-origin' => 'Auf welcher Seite befandest du dich zu Anfang dieser Umfrage?',
	'articlefeedback-survey-question-whyrated' => 'Bitte lasse uns wissen, warum du diese Seite heute eingeschätzt hast (Zutreffendes bitte ankreuzen):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Ich wollte mich an der Einschätzung der Seite beteiligen',
	'articlefeedback-survey-answer-whyrated-development' => 'Ich hoffe, dass meine Einschätzung die künftige Entwicklung der Seite positiv beeinflusst',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Ich wollte mich an {{SITENAME}} beteiligen',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Ich teile meine Einschätzung gerne mit',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Ich habe heute keine Einschätzung vorgenommen, wollte allerdings eine Rückmeldung zu dieser Funktion zur Einschätzung der Seite geben',
	'articlefeedback-survey-answer-whyrated-other' => 'Anderes',
	'articlefeedback-survey-question-useful' => 'Glaubst du, dass die abgegebenen Einschätzungen nützlich und verständlich sind?',
	'articlefeedback-survey-question-useful-iffalse' => 'Warum?',
	'articlefeedback-survey-question-comments' => 'Hast du noch weitere Anmerkungen?',
	'articlefeedback-survey-submit' => 'Speichern',
	'articlefeedback-survey-title' => 'Bitte beantworte uns ein paar Fragen',
	'articlefeedback-survey-thanks' => 'Vielen Dank für die Teilnahme an der Umfrage.',
	'articlefeedback-error' => 'Ein Fehler ist aufgetreten. Bitte versuche es später erneut.',
	'articlefeedback-form-switch-label' => 'Diese Seite einschätzen',
	'articlefeedback-form-panel-title' => 'Diese Seite einschätzen',
	'articlefeedback-form-panel-instructions' => 'Bitte nimm dir kurz Zeit, diese Seite einzuschätzen.',
	'articlefeedback-form-panel-clear' => 'Einschätzung entfernen',
	'articlefeedback-form-panel-expertise' => 'Ich habe umfangreiche Kenntnisse zu diesem Thema (optional)',
	'articlefeedback-form-panel-expertise-studies' => 'Ich habe einen entsprechenden Abschluss/ Hochschulabschluss',
	'articlefeedback-form-panel-expertise-profession' => 'Es ist ein Teil meines Berufes',
	'articlefeedback-form-panel-expertise-hobby' => 'Ich habe ein sehr starkes persönliches Interesse an diesem Thema',
	'articlefeedback-form-panel-expertise-other' => 'Die Grund für meine Kenntnisse ist hier nicht aufgeführt',
	'articlefeedback-form-panel-helpimprove' => 'Ich möchte dabei helfen, {{SITENAME}} zu verbessern. Sende mir bitte eine E-Mail. (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Wir werden dir eine Bestätigungs-E-Mail senden. Wir geben deine E-Mail-Adresse an niemanden weiter. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Datenschutz',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Datenschutz',
	'articlefeedback-form-panel-submit' => 'Einschätzung übermitteln',
	'articlefeedback-form-panel-success' => 'Erfolgreich gespeichert',
	'articlefeedback-form-panel-expiry-title' => 'Deine Einschätzung liegt zu lange zurück.',
	'articlefeedback-form-panel-expiry-message' => 'Bitte beurteile die Seite erneut und speichere eine neue Einschätzung.',
	'articlefeedback-report-switch-label' => 'Einschätzungen zu dieser Seite ansehen',
	'articlefeedback-report-panel-title' => 'Einschätzungen zu dieser Seite',
	'articlefeedback-report-panel-description' => 'Aktuelle Durchschnittsergebnisse der Einschätzungen',
	'articlefeedback-report-empty' => 'Keine Einschätzungen',
	'articlefeedback-report-ratings' => '$1 Einschätzungen',
	'articlefeedback-field-trustworthy-label' => 'Vertrauenswürdig',
	'articlefeedback-field-trustworthy-tip' => 'Hast du den Eindruck, dass diese Seite über genügend Quellenangaben verfügt und diese zudem aus vertrauenswürdigen Quellen stammen?',
	'articlefeedback-field-complete-label' => 'Vollständig',
	'articlefeedback-field-complete-tip' => 'Hast du den Eindruck, dass diese Seite alle wichtigen Aspekte enthält, die mit dessen Inhalt zusammenhängen?',
	'articlefeedback-field-objective-label' => 'Unvoreingenommen',
	'articlefeedback-field-objective-tip' => 'Hast du den Eindruck, dass diese Seite eine ausgewogene Darstellung aller mit deren Inhalt verbundenen Aspekte enthält?',
	'articlefeedback-field-wellwritten-label' => 'Gut geschrieben',
	'articlefeedback-field-wellwritten-tip' => 'Hast du den Eindruck, dass diese Seite gut strukturiert sowie geschrieben wurde?',
	'articlefeedback-pitch-reject' => 'Vielleicht später',
	'articlefeedback-pitch-or' => 'oder',
	'articlefeedback-pitch-thanks' => 'Vielen Dank! Deine Einschätzung wurde gespeichert.',
	'articlefeedback-pitch-survey-message' => 'Bitte nehme dir einen Moment Zeit, um an einer kurzen Umfrage teilzunehmen.',
	'articlefeedback-pitch-survey-accept' => 'Umfrage starten',
	'articlefeedback-pitch-join-message' => 'Wolltest du ein Benutzerkonto anlegen?',
	'articlefeedback-pitch-join-body' => 'Ein Benutzerkonto hilft dir deine Bearbeitungen besser nachvollziehen zu können, dich einfacher an Diskussionen zu beteiligen sowie ein Teil der Benutzergemeinschaft zu werden.',
	'articlefeedback-pitch-join-accept' => 'Benutzerkonto erstellen',
	'articlefeedback-pitch-join-login' => 'Anmelden',
	'articlefeedback-pitch-edit-message' => 'Wusstest du, dass du diesen Artikel bearbeiten kannst?',
	'articlefeedback-pitch-edit-accept' => 'Diesen Artikel bearbeiten',
	'articlefeedback-survey-message-success' => 'Vielen Dank für die Teilnahme an der Umfrage.',
	'articlefeedback-survey-message-error' => 'Ein Fehler ist aufgetreten.
Bitte später erneut versuchen.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Heutige Hochs und Tiefs',
	'articleFeedback-table-caption-weeklymostchanged' => 'Diese Woche am meisten geändert',
	'articleFeedback-table-caption-recentlows' => 'Aktuelle Tiefs',
	'articleFeedback-table-heading-page' => 'Seite',
	'articleFeedback-table-heading-average' => 'Durchschnitt',
	'articlefeedback-emailcapture-response-body' => 'Hallo!

Vielen Dank für dein Interesse an der Verbesserung von {{SITENAME}}.

Bitte nimm dir einen Moment Zeit, deine E-Mail-Adresse zu bestätigen, indem du auf den folgenden Link klickst:

$1

Du kannst auch die folgende Seite besuchen:

$2

Gib dort den nachfolgenden Bestätigungscode ein:

$3

Wir melden uns in Kürze dazu, wie du helfen kannst, {{SITENAME}} zu verbessern.

Sofern du diese Anfrage nicht ausgelöst hast, ignoriere einfach diese E-Mail. Wir werden dir dann nichts mehr zusenden.

Viele Grüße und vielen Dank,
Das {{SITENAME}}-Team',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Catrope
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'articlefeedback-survey-question-whyrated' => 'Bitte lassen Sie uns wissen, warum Sie diese Seite heute eingeschätzt haben (Zutreffendes bitte ankreuzen):',
	'articlefeedback-survey-question-useful' => 'Glauben Sie, dass die abgegebenen Einschätzungen nützlich und verständlich sind?',
	'articlefeedback-survey-question-comments' => 'Haben Sie noch weitere Anmerkungen?',
	'articlefeedback-survey-title' => 'Bitte beantworten Sie uns ein paar Fragen',
	'articlefeedback-survey-thanks' => 'Vielen Dank für Ihre Rückmeldung.',
	'articlefeedback-error' => 'Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.',
	'articlefeedback-form-panel-instructions' => 'Bitte nehmen Sie sich kurz Zeit, diesen Seite einzuschätzen.',
	'articlefeedback-field-trustworthy-tip' => 'Haben Sie den Eindruck, dass diese Seite über genügend Quellenangaben verfügt und diese zudem aus vertrauenswürdigen Quellen stammen?',
	'articlefeedback-field-complete-tip' => 'Haben Sie den Eindruck, dass diese Seite alle wichtigen Aspekte enthält, die mit dessen Inhalt zusammenhängen?',
	'articlefeedback-field-objective-tip' => 'Haben Sie den Eindruck, dass diese Seite eine ausgewogene Darstellung aller mit dessen Inhalt verbundenen Aspekte enthält?',
	'articlefeedback-field-wellwritten-tip' => 'Haben Sie den Eindruck, dass diese Seite gut strukturiert sowie geschrieben wurde?',
	'articlefeedback-pitch-thanks' => 'Vielen Dank! Ihre Einschätzung wurde gespeichert.',
	'articlefeedback-pitch-survey-message' => 'Bitte nehmen Sie sich einen Moment Zeit, um an einer kurzen Umfrage teilzunehmen.',
	'articlefeedback-pitch-join-message' => 'Wussten Sie, dass Sie auch ein Benutzerkonto anlegen können? Ein Benutzerkonto hilft Ihnen Ihre Bearbeitungen nachzuvollziehen, sich einfacher an Diskussionen zu beteiligen sowie ein Teil der Wikipedia zu werden.',
	'articlefeedback-pitch-edit-message' => 'Wussten Sie, dass Sie diesen Artikel bearbeiten können?',
	'articlefeedback-expert-assessment-question' => 'Besitzen Sie Kenntnisse bezüglich dieses Themas?',
	'articlefeedback-survey-message-error' => 'Ein Fehler ist aufgetreten.
Bitte versuchen Sie es später erneut.',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Som kśěł k {{SITENAME}} pśinosowaś',
	'articlefeedback-survey-answer-whyrated-other' => 'Druge',
	'articlefeedback-survey-question-useful-iffalse' => 'Cogodla?',
	'articlefeedback-survey-question-comments' => 'Maš hyšći dalšne komentary?',
	'articlefeedback-survey-submit' => 'Wótpósłaś',
	'articlefeedback-survey-title' => 'Pšosym wótegroń na někotare pšašanja',
	'articlefeedback-error' => 'Zmólka jo nastała. Pšosym wopytaj pózdźej hyšći raz.',
	'articlefeedback-form-panel-expertise' => 'Mam pśedznaśa k toś tej temje',
	'articlefeedback-form-panel-expertise-studies' => 'Som na wušej šuli/uniwersiśe studěrował',
	'articlefeedback-form-panel-expertise-profession' => 'Jo źěl mójogo pówołanja',
	'articlefeedback-form-panel-expertise-hobby' => 'Zwisujo z mójimi hobbyjami abo zajmami',
	'articlefeedback-form-panel-expertise-other' => 'Žrědło mójich znajobnosćow njejo how pódane',
	'articlefeedback-report-switch-label' => 'Pogódnośenja boka pokazaś',
	'articlefeedback-report-empty' => 'Žedne pogódnośenja',
	'articlefeedback-report-ratings' => '$1 pogódnosénjow',
	'articlefeedback-field-trustworthy-label' => 'Dowěry gódny',
	'articlefeedback-field-complete-label' => 'Dopołny',
	'articlefeedback-field-wellwritten-label' => 'Derje napisany',
	'articlefeedback-pitch-reject' => 'Snaź pózdźej',
	'articlefeedback-pitch-or' => 'abo',
	'articlefeedback-pitch-join-accept' => 'Konto załožyś',
	'articlefeedback-pitch-join-login' => 'Pśizjawiś',
	'articlefeedback-pitch-edit-accept' => 'Toś ten nastawk wobźěłaś',
	'articlefeedback-survey-message-error' => 'Zmólka jo nastała. Pšosym wopytaj pózdźej hyšći raz.',
);

/** Greek (Ελληνικά)
 * @author Glavkos
 */
$messages['el'] = array(
	'articlefeedback' => 'Αξιολόγηση Άρθρου',
	'articlefeedback-desc' => 'Αξιολόγηση Άρθρου (πιλοτική έκδοση)',
	'articlefeedback-survey-question-origin' => 'Σε ποιά σελίδα  ήσασταν όταν ξεκινήσατε αυτή την έρευνα;',
	'articlefeedback-survey-question-whyrated' => 'Bonvolu informigi nin  kial vi taksis ĉi tiun paĝon hodiaŭ (marku ĉion taŭgan):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Mi volis kontribui al la suma taksado de la paĝo',
	'articlefeedback-survey-answer-whyrated-development' => 'Mi esperas ke mia takso pozitive influus la disvolvadon de la paĝo',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Mi volis kontribui al {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Plaĉas al mi doni mian opinion.',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Mi ne provizas taksojn hodiaŭ, se volis doni komentojn pri la ilo',
	'articlefeedback-survey-answer-whyrated-other' => 'Alia',
	'articlefeedback-survey-question-useful' => 'Ĉu vi konsideras ke la taksoj provizitaj estas utilaj kaj klara?',
	'articlefeedback-survey-question-useful-iffalse' => 'Kial?',
	'articlefeedback-survey-question-comments' => 'Ĉu vi havas iujn suplementajn komentojn?',
	'articlefeedback-survey-submit' => 'Enigi',
	'articlefeedback-survey-title' => 'Bonvolu respondi al kelkaj demandoj',
	'articlefeedback-survey-thanks' => 'Dankon pro plenumante la enketon.',
	'articlefeedback-error' => 'Παρουσιάστηκε σφάλμα. Παρακαλώ δοκιμάστε αργότερα.',
	'articlefeedback-form-switch-label' => 'Βαθμολογήστε αυτή τη σελίδα',
	'articlefeedback-form-panel-title' => 'Βαθμολογήστε αυτή τη σελίδα',
	'articlefeedback-form-panel-instructions' => 'Παρακαλώ αφιερώστε  λίγο χρόνο για να αξιολογήσετε αυτή τη σελίδα.',
	'articlefeedback-form-panel-clear' => 'Καταργήστε αυτή την αξιολόγηση',
	'articlefeedback-form-panel-expertise' => 'Είμαι πολύ καλά πληροφορημένος σχετικά με αυτό το θέμα (προαιρετικό)',
	'articlefeedback-form-panel-expertise-studies' => 'Έχω ένα αντίστοιχο πτυχίο κολλεγίου/πανεπιστημίου',
	'articlefeedback-form-panel-expertise-profession' => 'Είναι μέρος του επαγγέλματος μου',
	'articlefeedback-form-panel-expertise-hobby' => 'Είναι ένα βαθύ  προσωπικό πάθος',
	'articlefeedback-form-panel-expertise-other' => 'Η πηγή της γνώσης μου δεν αναφέρεται εδώ',
	'articlefeedback-form-panel-helpimprove' => 'Θα ήθελα να συμβάλλω  στη βελτίωση της Wikipedia, στείλτε μου ένα e-mail (προαιρετικά)',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Πολιτική απορρήτου',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Πολιτική απορρήτου',
	'articlefeedback-form-panel-submit' => 'Υποβολή βαθμολογιών',
	'articlefeedback-form-panel-success' => 'Αποθηκεύτηκαν με επιτυχία',
	'articlefeedback-form-panel-expiry-message' => 'Παρακαλούμε να επανεκτιμήσετε αυτή τη σελίδα και να υποβάλετε νέες βαθμολογίες.',
	'articlefeedback-report-switch-label' => 'Δείτε τις βαθμολογήσεις της σελίδας',
	'articlefeedback-report-panel-title' => 'Βαθμολογήσεις σελίδας',
	'articlefeedback-pitch-or' => 'ή',
	'articlefeedback-pitch-thanks' => 'Ευχαριστώ! Οι βαθμολογίες σας έχουν αποθηκευτεί.',
	'articlefeedback-pitch-survey-message' => 'Αφιερώστε λίγο χρόνο για να συμπληρώσετε μια μικρή έρευνα.',
	'articlefeedback-pitch-survey-accept' => 'Αρχίστε  έρευνα',
	'articlefeedback-pitch-join-message' => 'Μήπως θέλετε να δημιουργήσετε ένα λογαριασμό;',
	'articlefeedback-pitch-join-body' => 'Ένας λογαριασμός θα σας βοηθήσει να παρακολουθείτε τις αλλαγές σας, να πάρετε μέρος σε συζητήσεις, και να είστε μέρος της κοινότητας.',
	'articlefeedback-pitch-join-accept' => 'Δημιουργήστε έναν λογαριασμό',
	'articlefeedback-pitch-join-login' => 'Είσοδος',
	'articlefeedback-pitch-edit-message' => 'Ξέρατε ότι μπορείτε να επεξεργαστείτε αυτή τη σελίδα;',
	'articlefeedback-pitch-edit-accept' => 'Επεξεργαστείτε αυτή τη σελίδα',
	'articlefeedback-survey-message-success' => 'Ευχαριστώ για τη συμπλήρωση της έρευνας.',
	'articlefeedback-survey-message-error' => 'Παρουσιάστηκε ένα σφάλμα.
Προσπαθήστε ξανά αργότερα.',
	'articleFeedback-table-caption-weeklymostchanged' => 'Τα πιο αλλαγμένα αυτής της εβδομάδας',
	'articleFeedback-table-heading-page' => 'Σελίδα',
	'articleFeedback-table-heading-average' => 'Μέσος όρος',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'articlefeedback' => 'Takso de artikolo',
	'articlefeedback-desc' => 'Artikola takso (testa versio)',
	'articlefeedback-survey-question-origin' => 'En kiu paĝo vi estis kiam vi komencis la etikedon?',
	'articlefeedback-survey-question-whyrated' => 'Bonvolu informigi nin  kial vi taksis ĉi tiun paĝon hodiaŭ (marku ĉion taŭgan):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Mi volis kontribui al la suma taksado de la paĝo',
	'articlefeedback-survey-answer-whyrated-development' => 'Mi esperas ke mia takso pozitive influus la disvolvadon de la paĝo',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Mi volis kontribui al {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Plaĉas al mi doni mian opinion.',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Mi ne provizas taksojn hodiaŭ, se volis doni komentojn pri la ilo',
	'articlefeedback-survey-answer-whyrated-other' => 'Alia',
	'articlefeedback-survey-question-useful' => 'Ĉu vi konsideras ke la taksoj provizitaj estas utilaj kaj klara?',
	'articlefeedback-survey-question-useful-iffalse' => 'Kial?',
	'articlefeedback-survey-question-comments' => 'Ĉu vi havas iujn suplementajn komentojn?',
	'articlefeedback-survey-submit' => 'Enigi',
	'articlefeedback-survey-title' => 'Bonvolu respondi al kelkaj demandoj',
	'articlefeedback-survey-thanks' => 'Dankon pro plenumante la enketon.',
	'articlefeedback-error' => 'Eraro okazis. Bonvolu reprovi baldaŭ.',
	'articlefeedback-form-switch-label' => 'Taksu ĉi tiun paĝon',
	'articlefeedback-form-panel-title' => 'Taksi ĉi tiun paĝon',
	'articlefeedback-form-panel-instructions' => 'Bonvolu pasigi momenton por taksi ĉi tiun paĝon.',
	'articlefeedback-form-panel-clear' => 'Forigi ĉi tiun taksadon',
	'articlefeedback-form-panel-expertise' => 'Mi estas fake sperta pri ĉi tiu temo (nedeviga)',
	'articlefeedback-form-panel-expertise-studies' => 'Mi havas ĉi-teman diplomon de kolegio aŭ universitato',
	'articlefeedback-form-panel-expertise-profession' => 'Ĝi estas parto de mia profesio.',
	'articlefeedback-form-panel-expertise-hobby' => 'Ĝi estas profunda persona pasio',
	'articlefeedback-form-panel-expertise-other' => 'La fonto de mia scio ne estas montrita ĉi tie',
	'articlefeedback-form-panel-helpimprove' => 'Mi volus helpi plibonigi Vikipedion; sendu al mi retpoŝton (nedeviga)',
	'articlefeedback-form-panel-helpimprove-note' => 'Ni sendos al vi konfirmantan retpoŝton. Ni ne donos vian adreson al iu ajn. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Regularo pri respekto de la privateco',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Respekto de la privateco',
	'articlefeedback-form-panel-submit' => 'Sendi taksojn',
	'articlefeedback-form-panel-success' => 'Sukcese konservita',
	'articlefeedback-form-panel-expiry-title' => 'Viaj taksoj findatiĝis',
	'articlefeedback-form-panel-expiry-message' => 'Bonvolu retaksi ĉi tiun paĝon kaj sendi novajn taksojn.',
	'articlefeedback-report-switch-label' => 'Vidi taksadon de paĝoj',
	'articlefeedback-report-panel-title' => 'Taksado de paĝoj',
	'articlefeedback-report-panel-description' => 'Aktualaj averaĝaj taksoj.',
	'articlefeedback-report-empty' => 'Sen takso',
	'articlefeedback-report-ratings' => '$1 taksoj',
	'articlefeedback-field-trustworthy-label' => 'Fidinda',
	'articlefeedback-field-trustworthy-tip' => 'Ĉu vi opinias ke ĉi tiu paĝo havas sufiĉajn citaĵojn kaj tiuj citaĵoj venas de fidindaj fontoj?',
	'articlefeedback-field-complete-label' => 'Kompleta',
	'articlefeedback-field-complete-tip' => 'Ĉu vi opinias ke ĉi tiu paĝo kovras la esencan temon de la subjekto?',
	'articlefeedback-field-objective-label' => 'Objektiva',
	'articlefeedback-field-objective-tip' => 'Ĉu vi opinias ke ĉi tiu paĝo montras justan reprezentadon de ĉiuj perspektivoj pri la afero?',
	'articlefeedback-field-wellwritten-label' => 'Bone verkita',
	'articlefeedback-field-wellwritten-tip' => 'Ĉu vi opinias ke ĉi tiu paĝo estas bone organizita kaj bone verkita?',
	'articlefeedback-pitch-reject' => 'Eble baldaŭ',
	'articlefeedback-pitch-or' => 'aŭ',
	'articlefeedback-pitch-thanks' => 'Dankon! Viaj taksoj estis konservitaj.',
	'articlefeedback-pitch-survey-message' => 'Bonvolu doni momenton por kompletigi mallongan enketon.',
	'articlefeedback-pitch-survey-accept' => 'Ekfari enketon',
	'articlefeedback-pitch-join-message' => 'Ĉu vi volus krei konton?',
	'articlefeedback-pitch-join-body' => 'Konto helpos al vi atenti viajn redaktojn, interdiskuti, kaj esti parto de la komunumo.',
	'articlefeedback-pitch-join-accept' => 'Krei konton',
	'articlefeedback-pitch-join-login' => 'Ensaluti',
	'articlefeedback-pitch-edit-message' => 'Ĉu vi scias ke vi povas redakti ĉi tiun paĝon?',
	'articlefeedback-pitch-edit-accept' => 'Redakti ĉi tiun paĝon',
	'articlefeedback-survey-message-success' => 'Dankon pro plenumante la enketon.',
	'articlefeedback-survey-message-error' => 'Eraro okazis. 
Bonvolu reprovi baldaŭ.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'La altoj kaj malaltoj hodiaŭ',
	'articleFeedback-table-caption-weeklymostchanged' => 'Plej ŝanĝitaj ĉi-semajne',
	'articleFeedback-table-caption-recentlows' => 'Lastatempaj malaltoj',
	'articleFeedback-table-heading-page' => 'Paĝo',
	'articleFeedback-table-heading-average' => 'Averaĝo',
	'articlefeedback-emailcapture-response-body' => 'Saluton!

Dankon por esprimante intereson por helpi plibonigi je {{SITENAME}}.

Bonvolu konfirmi vian retpoŝtadreson klakante la jenan ligilon:

$1

Vi povas ankaŭ viziti:

$2

Kaj enigi la jenan konfirmkodon:

$3

Ni mesaĝos vin baldaŭ pri kiel vi povas plibonigi je {{SITENAME}}.

Se vi ne eksendis ĉi tiun peton, bonvolu ignori ĉi tiu retpoŝto, kaj ni ne sendos al vi ion ajn.

Koran dankon,
La teamo {{SITENAME}}',
);

/** Spanish (Español)
 * @author Dferg
 * @author Locos epraix
 * @author Od1n
 * @author Sanbec
 * @author Translationista
 */
$messages['es'] = array(
	'articlefeedback' => 'Evaluación del artículo',
	'articlefeedback-desc' => 'Evaluación del artículo (versión de pruebas)',
	'articlefeedback-survey-question-whyrated' => 'Por favor, dinos por qué has valorado esta página hoy (marca todas las opciones que correspondan):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Quería contribuir a la calificación global de la página',
	'articlefeedback-survey-answer-whyrated-development' => 'Espero que mi calificación afecte positivamante el desarrollo de la página',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Quería contribuir a {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Me gusta compartir mi opinión',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Hoy no evalué ninguna página. Sólo quise dejar mis comentarios sobre la funcionalidad.',
	'articlefeedback-survey-answer-whyrated-other' => 'Otro',
	'articlefeedback-survey-question-useful' => '¿Crees las valoraciones proporcionadas son útiles y claras?',
	'articlefeedback-survey-question-useful-iffalse' => '¿Por qué?',
	'articlefeedback-survey-question-comments' => '¿Tienes algún comentario adicional?',
	'articlefeedback-survey-submit' => 'Enviar',
	'articlefeedback-survey-title' => 'Por favor, contesta algunas preguntas',
	'articlefeedback-survey-thanks' => 'Gracias por completar la encuesta.',
	'articlefeedback-error' => 'Ha ocurrido un error. Por favor inténtalo de nuevo más tarde.',
	'articlefeedback-form-switch-label' => 'Evalúa esta página',
	'articlefeedback-form-panel-title' => 'Evalúa esta página',
	'articlefeedback-form-panel-instructions' => 'Por favor tómate un tiempo para evaluar esta página.',
	'articlefeedback-form-panel-clear' => 'Eliminar la evaluación',
	'articlefeedback-form-panel-expertise' => 'Tengo conocimientos previos sobre este tema',
	'articlefeedback-form-panel-expertise-studies' => 'Lo he estudiado en la universidad',
	'articlefeedback-form-panel-expertise-profession' => 'Es parte de mi profesión',
	'articlefeedback-form-panel-expertise-hobby' => 'Está relacionado con mis aficiones o intereses',
	'articlefeedback-form-panel-expertise-other' => 'La fuente de mi conocimiento no está en esta lista',
	'articlefeedback-form-panel-submit' => 'Enviar comentarios',
	'articlefeedback-report-switch-label' => 'Ver las calificaciones de la página',
	'articlefeedback-report-panel-title' => 'Evaluaciones de la página',
	'articlefeedback-report-panel-description' => 'Promedio actual de calificaciones.',
	'articlefeedback-report-empty' => 'No hay valoraciones',
	'articlefeedback-report-ratings' => '$1 valoraciones',
	'articlefeedback-field-trustworthy-label' => 'Confiable',
	'articlefeedback-field-trustworthy-tip' => '¿Posee esta página suficientes fuentes y éstas son fuentes de confianza?',
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => '¿Crees que esta página cubre las áreas esenciales del tópico que deberían estar cubiertas?',
	'articlefeedback-field-objective-label' => 'Objetivo',
	'articlefeedback-pitch-or' => 'o',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'articlefeedback' => 'Artikli hindamine',
	'articlefeedback-desc' => 'Artikli hindamine (prooviversioon)',
	'articlefeedback-survey-question-whyrated' => 'Miks seda lehekülge täna hindasid (vali kõik sobivad):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Tahtsin leheküljele üldist hinnangut anda',
	'articlefeedback-survey-answer-whyrated-development' => 'Loodan, et minu hinnang aitab lehekülje arendamisele kaasa',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Tahtsin {{GRAMMAR:inessive|{{SITENAME}}}} kaastööd teha',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Mulle meeldib oma arvamust jagada',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Ma ei hinnanud täna seda lehekülge, vaid tahtsin tagasisidet anda',
	'articlefeedback-survey-answer-whyrated-other' => 'Muu',
	'articlefeedback-survey-question-useful' => 'Kas pead antud hinnanguid kasulikuks ja selgeks?',
	'articlefeedback-survey-question-useful-iffalse' => 'Miks?',
	'articlefeedback-survey-question-comments' => 'Kas sul on lisamärkusi?',
	'articlefeedback-survey-submit' => 'Saada',
	'articlefeedback-survey-title' => 'Palun vasta mõnele küsimusele.',
	'articlefeedback-survey-thanks' => 'Aitäh küsitlusele vastamast!',
	'articlefeedback-pitch-or' => 'või',
);

/** Basque (Euskara)
 * @author Abel2es
 * @author Joxemai
 */
$messages['eu'] = array(
	'articlefeedback-survey-answer-whyrated-other' => 'Beste bat',
	'articlefeedback-survey-question-useful-iffalse' => 'Zergatik?',
	'articlefeedback-survey-submit' => 'Bidali',
	'articlefeedback-form-switch-label' => 'Kalifikatu orri hau',
	'articlefeedback-form-panel-title' => 'Kalifikatu orri hau',
	'articlefeedback-form-panel-instructions' => 'Har ezazu mesedez une bat orri hau baloratzeko.',
	'articlefeedback-field-complete-label' => 'Osorik',
	'articlefeedback-pitch-edit-accept' => 'Hasi editatzen',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Huji
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'articlefeedback' => 'ارزیابی مقاله‌ها',
	'articlefeedback-desc' => 'ارزیابی مقاله‌ها (نسخهٔ آزمایشی)',
	'articlefeedback-survey-question-whyrated' => 'لطفاً به ما اطلاع دهید که چرا شما امروز به این صفحه نمره دادید (تمام موارد مرتبط را انتخاب کنید):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'می‌خواستم در نمره کلی صفحه مشارکت کنم',
	'articlefeedback-survey-answer-whyrated-development' => 'امیدوارم که نمره‌ای که دادم اثر مثبتی روی پیشرفت صفحه داشته باشد',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'می‌خواستم به {{SITENAME}} کمک کنم',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'علاقه دارم نظر خودم را به اشتراک بگذارم',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'امروز نمره‌ای ندادم، اما می‌خواهم راجع به این ویژگی نظر بدهم',
	'articlefeedback-survey-answer-whyrated-other' => 'غیره',
	'articlefeedback-survey-question-useful' => 'آیا فکر می‌کنید نمره‌های ارائه شده مفید و واضح هستند؟',
	'articlefeedback-survey-question-useful-iffalse' => 'چرا؟',
	'articlefeedback-survey-question-comments' => 'آیا هر گونه نظر اضافی دارید؟',
	'articlefeedback-survey-submit' => 'ارسال',
	'articlefeedback-survey-title' => 'لطفاً به چند پرسش پاسخ دهید',
	'articlefeedback-survey-thanks' => 'از این که نظرسنجی را تکمیل کردید متشکریم.',
	'articlefeedback-report-switch-label' => 'مشاهدهٔ آرای صفحه',
	'articlefeedback-field-complete-label' => 'کامل بودن',
	'articlefeedback-pitch-or' => 'یا',
	'articlefeedback-pitch-thanks' => 'با تشکر! رتبه‌بندی‌های شما، ذخیره شده‌است.',
);

/** Finnish (Suomi)
 * @author Nike
 * @author Olli
 */
$messages['fi'] = array(
	'articlefeedback' => 'Artikkelin arviointi',
	'articlefeedback-desc' => 'Artikkelin arviointi (kokeiluversio)',
	'articlefeedback-survey-question-whyrated' => 'Kerro meille, miksi arvostelit tämän sivun tänään (lisää merkki kaikkiin, jotka pitävät paikkaansa):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Haluan vaikuttaa sivun kokonaisarvosanaan',
	'articlefeedback-survey-answer-whyrated-development' => 'Toivon, että arvosteluni vaikuttaisi positiivisesti sivun kehitykseen',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Haluan osallistua {{SITENAME}}-sivuston kehitykseen',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Pidän mielipiteeni kertomisesta',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'En antanut arvosteluja tänään, mutta halusin antaa palautetta arvosteluominaisuudesta',
	'articlefeedback-survey-answer-whyrated-other' => 'Muu',
	'articlefeedback-survey-question-useful' => 'Ovatko annetut arvostelut mielestäsi hyödyllisiä ja todellisia?',
	'articlefeedback-survey-question-useful-iffalse' => 'Miksi?',
	'articlefeedback-survey-question-comments' => 'Onko sinulla muita kommentteja?',
	'articlefeedback-survey-submit' => 'Lähetä',
	'articlefeedback-survey-title' => 'Vastaathan muutamiin kysymyksiin',
	'articlefeedback-survey-thanks' => 'Kiitos kyselyn täyttämisestä.',
);

/** French (Français)
 * @author Crochet.david
 * @author IAlex
 * @author Od1n
 * @author Peter17
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'articlefeedback' => 'Évaluation d’article',
	'articlefeedback-desc' => 'Évaluation d’article (version pilote)',
	'articlefeedback-survey-question-origin' => 'À quelle page étiez-vous lorsque vous avez commencé cette évaluation ?',
	'articlefeedback-survey-question-whyrated' => 'Veuillez nous indiquer pourquoi vous avez évalué cette page aujourd’hui (cochez tout ce qui s’applique) :',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Je voulais contribuer à l’évaluation globale de la page',
	'articlefeedback-survey-answer-whyrated-development' => 'J’espère que mon évaluation aura une incidence positive sur le développement de la page',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Je voulais contribuer à {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'J’aime partager mon opinion',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Je n’ai pas évalué la page, mais je voulais donner un retour sur cette fonctionnalité',
	'articlefeedback-survey-answer-whyrated-other' => 'Autre',
	'articlefeedback-survey-question-useful' => 'Pensez-vous que les évaluations fournies soient utiles et claires ?',
	'articlefeedback-survey-question-useful-iffalse' => 'Pourquoi ?',
	'articlefeedback-survey-question-comments' => 'Avez-vous d’autres commentaires ?',
	'articlefeedback-survey-submit' => 'Soumettre',
	'articlefeedback-survey-title' => 'Veuillez répondre à quelques questions',
	'articlefeedback-survey-thanks' => 'Merci d’avoir rempli le questionnaire.',
	'articlefeedback-error' => "Une erreur s'est produite. Veuillez réessayer plus tard.",
	'articlefeedback-form-switch-label' => 'Noter cette page',
	'articlefeedback-form-panel-title' => 'Noter cette page',
	'articlefeedback-form-panel-instructions' => 'Veuillez prendre un moment pour évaluer cette page.',
	'articlefeedback-form-panel-clear' => 'Supprimer cette évaluation',
	'articlefeedback-form-panel-expertise' => 'Je suis très bien informé sur ce sujet (facultatif)',
	'articlefeedback-form-panel-expertise-studies' => 'Je détient un diplôme collégial ou universitaire pertinent',
	'articlefeedback-form-panel-expertise-profession' => 'Cela fait partie de ma profession',
	'articlefeedback-form-panel-expertise-hobby' => "C'est une passion profonde et personnelle",
	'articlefeedback-form-panel-expertise-other' => "La source de ma connaissance n'est pas répertoriée ici",
	'articlefeedback-form-panel-helpimprove' => "J'aimerais aider à améliorer Wikipedia, envoyez-moi un courriel (facultatif)",
	'articlefeedback-form-panel-helpimprove-note' => 'Nous vous enverrons un courriel de confirmation. Nous ne partagerons votre adresse avec personne. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Politique de confidentialité',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Confidentialité',
	'articlefeedback-form-panel-submit' => 'Envoyer les cotes',
	'articlefeedback-form-panel-success' => 'Enregistré avec succès',
	'articlefeedback-form-panel-expiry-title' => 'Votre évaluation a expiré',
	'articlefeedback-form-panel-expiry-message' => 'Veuillez réévaluer cette page et soumettre votre nouvelle évaluation.',
	'articlefeedback-report-switch-label' => 'Voir les notes des pages',
	'articlefeedback-report-panel-title' => 'Évaluation des pages',
	'articlefeedback-report-panel-description' => 'Notations moyennes actuelles.',
	'articlefeedback-report-empty' => 'Aucune évaluation',
	'articlefeedback-report-ratings' => 'Notations $1',
	'articlefeedback-field-trustworthy-label' => 'Digne de confiance',
	'articlefeedback-field-trustworthy-tip' => 'Pensez-vous que cette page a suffisamment de citations et que celles-ci proviennent de sources dignes de confiance ?',
	'articlefeedback-field-complete-label' => 'Complet',
	'articlefeedback-field-complete-tip' => 'Pensez-vous que cette page couvre les thèmes essentiels du sujet ?',
	'articlefeedback-field-objective-label' => 'Impartial',
	'articlefeedback-field-objective-tip' => 'Pensez-vous que cette page fournit une présentation équitable de toutes les perspectives du sujet traité ?',
	'articlefeedback-field-wellwritten-label' => 'Bien écrit',
	'articlefeedback-field-wellwritten-tip' => 'Pensez-vous que cette page soit bien organisée et bien écrite ?',
	'articlefeedback-pitch-reject' => 'Peut-être plus tard',
	'articlefeedback-pitch-or' => 'ou',
	'articlefeedback-pitch-thanks' => 'Merci ! Votre évaluation a été enregistrée.',
	'articlefeedback-pitch-survey-message' => 'Veuillez prendre quelques instants pour remplir un court sondage.',
	'articlefeedback-pitch-survey-accept' => 'Démarrer l’enquête',
	'articlefeedback-pitch-join-message' => 'Vouliez-vous créer un compte ?',
	'articlefeedback-pitch-join-body' => 'Un compte vous aidera à suivre vos modifications, vous impliquer dans les discussions et faire partie de la communauté.',
	'articlefeedback-pitch-join-accept' => 'Créer un compte',
	'articlefeedback-pitch-join-login' => 'Se connecter',
	'articlefeedback-pitch-edit-message' => 'Saviez-vous que vous pouvez modifier cette page ?',
	'articlefeedback-pitch-edit-accept' => 'Modifier cette page',
	'articlefeedback-survey-message-success' => 'Merci d’avoir rempli le questionnaire.',
	'articlefeedback-survey-message-error' => 'Une erreur est survenue.
Veuillez ré-essayer plus tard.',
	'articleFeedback-table-caption-dailyhighsandlows' => "Les hauts et bas d'aujourd'hui",
	'articleFeedback-table-caption-weeklymostchanged' => 'Les plus modifiés cette semaine',
	'articleFeedback-table-caption-recentlows' => 'Dernières bas',
	'articleFeedback-table-heading-page' => 'Page',
	'articleFeedback-table-heading-average' => 'Moyenne',
	'articlefeedback-emailcapture-response-body' => "Bonjour !

Merci de votre à aider à améliorer {{SITENAME}}.

Veuillez prendre un moment pour confirmer votre courriel en cliquant sur le lien ci-dessous :

$1

Vous pouvez aussi visiter :

$2

Et entrer le code ce confirmation suivant :

$3

Nous serons en contact prochainement pour connaître la façon dont vous pouvez aider à améliorer {{SITENAME}}.

Si vous n'avez pas initié cette demande, veuillez ignorer ce courriel et nous ne vous enverrons rien d’autre chose.

Meilleurs vœux, et merci,

L’équipe de {{SITENAME}}",
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'articlefeedback' => 'Èstimacion d’articllo',
	'articlefeedback-desc' => 'Èstimacion d’articllo (vèrsion pilote)',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'J’âmo partagiér mon avis',
	'articlefeedback-survey-answer-whyrated-other' => 'Ôtra',
	'articlefeedback-survey-question-useful-iffalse' => 'Porquè ?',
	'articlefeedback-survey-question-comments' => 'Avéd-vos d’ôtros comentèros ?',
	'articlefeedback-survey-submit' => 'Sometre',
	'articlefeedback-survey-title' => 'Volyéd rèpondre a quârques quèstions',
	'articlefeedback-survey-thanks' => 'Grant-marci d’avêr rempli lo quèstionèro.',
	'articlefeedback-error' => 'Una èrror est arrevâ. Volyéd tornar èprovar ples târd.',
	'articlefeedback-form-switch-label' => 'Èstimar cela pâge',
	'articlefeedback-form-panel-title' => 'Èstimar cela pâge',
	'articlefeedback-form-panel-instructions' => 'Volyéd prendre un moment por èstimar cela pâge.',
	'articlefeedback-form-panel-clear' => 'Enlevar cela èstimacion',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Politica de confidencialitât',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Politica de confidencialitât',
	'articlefeedback-form-panel-submit' => 'Mandar les èstimacions',
	'articlefeedback-form-panel-success' => 'Encartâ avouéc reusséta',
	'articlefeedback-form-panel-expiry-title' => 'Voutres èstimacions ont èxpirâs',
	'articlefeedback-report-switch-label' => 'Vêre les èstimacions de la pâge',
	'articlefeedback-report-panel-title' => 'Èstimacions de la pâge',
	'articlefeedback-report-panel-description' => 'Èstimacions moyenes d’ora.',
	'articlefeedback-report-empty' => 'Gins d’èstimacion',
	'articlefeedback-report-ratings' => 'Èstimacions $1',
	'articlefeedback-field-trustworthy-label' => 'Digno de confiance',
	'articlefeedback-field-complete-label' => 'Complèt',
	'articlefeedback-field-objective-label' => 'Emparciâl',
	'articlefeedback-field-wellwritten-label' => 'Bien ècrit',
	'articlefeedback-pitch-reject' => 'Pôt-étre ples târd',
	'articlefeedback-pitch-or' => 'ou ben',
	'articlefeedback-pitch-thanks' => 'Grant-marci ! Voutra èstimacion at étâ encartâ.',
	'articlefeedback-pitch-survey-accept' => 'Emmodar l’enquéta',
	'articlefeedback-pitch-join-accept' => 'Fâre un compto',
	'articlefeedback-pitch-join-login' => 'Sè branchiér',
	'articlefeedback-pitch-edit-accept' => 'Changiér ceta pâge',
	'articlefeedback-survey-message-success' => 'Grant-marci d’avêr rempli lo quèstionèro.',
	'articlefeedback-survey-message-error' => 'Una èrror est arrevâ.
Volyéd tornar èprovar ples târd.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Los hôts et bâs d’houé',
	'articleFeedback-table-caption-weeklymostchanged' => 'Los ples changiês de cela semana',
	'articleFeedback-table-caption-recentlows' => 'Dèrriérs bâs',
	'articleFeedback-table-heading-page' => 'Pâge',
	'articleFeedback-table-heading-average' => 'Moyena',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'articlefeedback-survey-submit' => 'Invie',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'articlefeedback' => 'Avaliación do artigo',
	'articlefeedback-desc' => 'Versión piloto da avaliación dos artigos',
	'articlefeedback-survey-question-origin' => 'En que páxina estaba cando comezou a enquisa?',
	'articlefeedback-survey-question-whyrated' => 'Díganos por que valorou esta páxina (marque todas as opcións que cumpran):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Quería colaborar na valoración da páxina',
	'articlefeedback-survey-answer-whyrated-development' => 'Agardo que a miña valoración afecte positivamente ao desenvolvemento da páxina',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Quería colaborar con {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Gústame dar a miña opinión',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Non dei ningunha valoración, só quería deixar os meus comentarios sobre a característica',
	'articlefeedback-survey-answer-whyrated-other' => 'Outra',
	'articlefeedback-survey-question-useful' => 'Cre que as valoracións dadas son útiles e claras?',
	'articlefeedback-survey-question-useful-iffalse' => 'Por que?',
	'articlefeedback-survey-question-comments' => 'Ten algún comentario adicional?',
	'articlefeedback-survey-submit' => 'Enviar',
	'articlefeedback-survey-title' => 'Responda algunhas preguntas',
	'articlefeedback-survey-thanks' => 'Grazas por encher a enquisa.',
	'articlefeedback-error' => 'Houbo un erro. Inténteo de novo máis tarde.',
	'articlefeedback-form-switch-label' => 'Avaliar esta páxina',
	'articlefeedback-form-panel-title' => 'Avaliar esta páxina',
	'articlefeedback-form-panel-instructions' => 'Por favor, tome uns intres para avaliar esta páxina.',
	'articlefeedback-form-panel-clear' => 'Eliminar a avaliación',
	'articlefeedback-form-panel-expertise' => 'Estou moi ben informado sobre este tema (opcional)',
	'articlefeedback-form-panel-expertise-studies' => 'Teño un grao escolar ou universitario pertinente',
	'articlefeedback-form-panel-expertise-profession' => 'É parte da miña profesión',
	'articlefeedback-form-panel-expertise-hobby' => 'É unha das miñas afeccións persoais',
	'articlefeedback-form-panel-expertise-other' => 'A fonte do meu coñecemento non está nesta lista',
	'articlefeedback-form-panel-helpimprove' => 'Gustaríame axudar a mellorar a Wikipedia; enviádeme un correo electrónico (opcional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Enviarémoslle un correo electrónico de confirmación. Non compartiremos o seu enderezo con ninguén. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Política de protección de datos',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Política de protección de datos',
	'articlefeedback-form-panel-submit' => 'Enviar a avaliación',
	'articlefeedback-form-panel-success' => 'Gardado correctamente',
	'articlefeedback-form-panel-expiry-title' => 'As súas avaliacións caducaron',
	'articlefeedback-form-panel-expiry-message' => 'Volva avaliar esta páxina e envíe as novas valoracións.',
	'articlefeedback-report-switch-label' => 'Ollar as avaliacións da páxina',
	'articlefeedback-report-panel-title' => 'Avaliacións da páxina',
	'articlefeedback-report-panel-description' => 'Avaliacións medias.',
	'articlefeedback-report-empty' => 'Sen avaliacións',
	'articlefeedback-report-ratings' => '$1 avaliacións',
	'articlefeedback-field-trustworthy-label' => 'Fidedigno',
	'articlefeedback-field-trustworthy-tip' => 'Cre que esta páxina ten citas suficientes e que estas son de fontes fiables?',
	'articlefeedback-field-complete-label' => 'Completo',
	'articlefeedback-field-complete-tip' => 'Cre que esta páxina aborda as áreas esenciais do tema que debería?',
	'articlefeedback-field-objective-label' => 'Imparcial',
	'articlefeedback-field-objective-tip' => 'Cre que esta páxina mostra unha representación xusta de todas as perspectivas do tema?',
	'articlefeedback-field-wellwritten-label' => 'Ben escrito',
	'articlefeedback-field-wellwritten-tip' => 'Cre que esta páxina está ben organizada e escrita?',
	'articlefeedback-pitch-reject' => 'Talvez logo',
	'articlefeedback-pitch-or' => 'ou',
	'articlefeedback-pitch-thanks' => 'Grazas! Gardáronse as súas valoracións.',
	'articlefeedback-pitch-survey-message' => 'Dedique un momento a encher esta pequena enquisa.',
	'articlefeedback-pitch-survey-accept' => 'Comezar a enquisa',
	'articlefeedback-pitch-join-message' => 'Quere crear unha conta?',
	'articlefeedback-pitch-join-body' => 'Unha conta axudará a seguir as súas edicións, participar en conversas e ser parte da comunidade.',
	'articlefeedback-pitch-join-accept' => 'Crear unha conta',
	'articlefeedback-pitch-join-login' => 'Rexistro',
	'articlefeedback-pitch-edit-message' => 'Sabía que pode editar esta páxina?',
	'articlefeedback-pitch-edit-accept' => 'Editar esta páxina',
	'articlefeedback-survey-message-success' => 'Grazas por encher a enquisa.',
	'articlefeedback-survey-message-error' => 'Houbo un erro.
Inténteo de novo máis tarde.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Os altos e baixos de hoxe',
	'articleFeedback-table-caption-weeklymostchanged' => 'Os máis modificados esta semana',
	'articleFeedback-table-caption-recentlows' => 'Últimos baixos',
	'articleFeedback-table-heading-page' => 'Páxina',
	'articleFeedback-table-heading-average' => 'Media',
	'articlefeedback-emailcapture-response-body' => 'Ola!

Grazas por expresar interese en axudar a mellorar {{SITENAME}}.

Tome un momento para confirmar o seu correo electrónico premendo na ligazón que hai a continuación: 

$1

Tamén pode visitar:

$2

E inserir o seguinte código de confirmación:

$3

Poñerémonos en contacto con vostede para informarlle sobre como axudar a mellorar {{SITENAME}}.

Se vostede non fixo esta petición, ignore esta mensaxe e non lle enviaremos máis nada.

Os mellores desexos e grazas,
O equipo de {{SITENAME}}',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'articlefeedback' => 'Artikelyyschetzig',
	'articlefeedback-desc' => 'Macht d Yyschetzig vu Artikel megli (Pilotversion)',
	'articlefeedback-survey-question-whyrated' => 'Bitte loss es is wisse, wurum Du dää Artikel hite yygschetzt hesch (bitte aachryzle, was zuetrifft):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Ich haa welle mitmache bi dr Yyschetzig vu däm Artikel',
	'articlefeedback-survey-answer-whyrated-development' => 'Ich hoffe, ass myy Yyschetzig e positive Yyfluss het uf di chimftig Entwicklig vum Artikel',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Ich haa welle mitmache bi {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Ich tue gärn myy Meinig teile',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Ich haa hite kei Yyschetzig vorgnuu, haa aber e Ruckmäldig zue däre Funktion welle gee',
	'articlefeedback-survey-answer-whyrated-other' => 'Anderi',
	'articlefeedback-survey-question-useful' => 'Glaubsch, ass d Yyschetzige, wu abgee wore sin, nitzli un verständli sin?',
	'articlefeedback-survey-question-useful-iffalse' => 'Wurum?',
	'articlefeedback-survey-question-comments' => 'Hesch no meh Aamerkige?',
	'articlefeedback-survey-submit' => 'Ibertrage',
	'articlefeedback-survey-title' => 'Bitte gib Antworte uf e paar Froge',
	'articlefeedback-survey-thanks' => 'Dankschen fir Dyy Ruckmäldig.',
	'articlefeedback-error' => 'S het e Fähler gee. Bitte versuech s speter nomol.',
	'articlefeedback-form-switch-label' => 'Die Syte yyschetze',
	'articlefeedback-form-panel-title' => 'Die Syte yyschetze',
	'articlefeedback-form-panel-instructions' => 'Bitte nimm Dir churz Zyt un tue dää Artikel yyschetze.',
	'articlefeedback-form-panel-clear' => 'Yyschetzig uuseneh',
	'articlefeedback-form-panel-expertise' => 'Ich haa umfangrychi Chänntnis zue däm Thema',
	'articlefeedback-form-panel-expertise-studies' => 'Ich haa ne entsprächende Hochschuelabschluss',
	'articlefeedback-form-panel-expertise-profession' => 'S isch Teil vu myym Beruef',
	'articlefeedback-form-panel-expertise-hobby' => 'Ich haa ne seli stark persenlig Inträssi an däm Thema',
	'articlefeedback-form-panel-expertise-other' => 'Dr Grund fir myy Chänntnis isch do nit ufgfiert',
	'articlefeedback-form-panel-submit' => 'Yyschetzig ibertrage',
	'articlefeedback-form-panel-success' => 'Erfolgrych gspycheret',
	'articlefeedback-form-panel-expiry-title' => 'Dyy Yyschetzig isch z lang här.',
	'articlefeedback-form-panel-expiry-message' => 'Bitte tue d Syte nomol beurteile un e neji yyschetzitg spychere.',
	'articlefeedback-report-switch-label' => 'Yyschetzige zue däre Syte aaluege',
	'articlefeedback-report-panel-title' => 'Yyschetzige vu dr Syte',
	'articlefeedback-report-panel-description' => 'Aktuälli Durschnittsergebnis vu dr Yyschetzige',
	'articlefeedback-report-empty' => 'Kei Yyschetzige',
	'articlefeedback-report-ratings' => '$1 Yyschetzige',
	'articlefeedback-field-trustworthy-label' => 'Vertröueswirdig',
	'articlefeedback-field-trustworthy-tip' => 'Hesch Du dr Yydruck, ass es in däm Artikel gnue Quällenaagabe het un ass mer däne Quälle cha tröue?',
	'articlefeedback-field-complete-label' => 'Vollständig',
	'articlefeedback-field-complete-tip' => 'Hesch Du dr Yydruck, ass in däm Artikel aali Aschpäkt ufgfiert sin, wu mit däm Thema zämmehange?',
	'articlefeedback-field-objective-label' => 'Nit voryygnuu',
	'articlefeedback-field-objective-tip' => 'Hesch Du dr Yydruck, ass dää Artikel e uusgwogeni Darstellig isch vu allne Aschpäkt, wu mit däm Thema verbunde sin?',
	'articlefeedback-field-wellwritten-label' => 'Guet gschribe',
	'articlefeedback-field-wellwritten-tip' => 'Hesch Du dr Yydruck, ass dää Artikel guet strukturiert un gschribe isch?',
	'articlefeedback-pitch-reject' => 'Villicht speter',
	'articlefeedback-pitch-or' => 'oder',
	'articlefeedback-pitch-thanks' => 'Dankschen! Dyy Yyschetzig isch gspycheret wore.',
	'articlefeedback-pitch-survey-message' => 'Bitte nimm der e Momänt Zyt go bin ere churzen Umfrog mitmache.',
	'articlefeedback-pitch-survey-accept' => 'Umfrog aafange',
	'articlefeedback-pitch-join-message' => 'Hesch e Benutzerkonto welle aalege?',
	'articlefeedback-pitch-join-body' => 'E Benutzerkonto hilft der dyni Bearbeitige besser noovollzie z chenne, eifacher bi Diskussione mitzmache un e Teil vu dr Benutzergmeinschaft z wäre.',
	'articlefeedback-pitch-join-accept' => 'Benutzerkonto aalege',
	'articlefeedback-pitch-join-login' => 'Aamälde',
	'articlefeedback-pitch-edit-message' => 'Hesch gwisst, ass du dä Artikel chasch bearbeite?',
	'articlefeedback-pitch-edit-accept' => 'Die Syte bearbeite',
	'articlefeedback-survey-message-success' => 'Dankschen, ass Du bi däre Umfrog mitgmacht hesch.',
	'articlefeedback-survey-message-error' => 'E Fähler isch ufträtte.
Bitte versuech s speter nomol.',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Nahum
 * @author YaronSh
 */
$messages['he'] = array(
	'articlefeedback' => 'הערכת ערך',
	'articlefeedback-desc' => 'הערכת ערך (גרסה ניסיונית)',
	'articlefeedback-survey-question-origin' => 'מאיזה עמוד הגעתם לסקר הזה?',
	'articlefeedback-survey-question-whyrated' => 'נא ליידע אותנו מדובר דירגת דף זה היום (יש לסמן את כל העונים לשאלה):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'ברצוני לתרום לדירוג הכללי של הדף',
	'articlefeedback-survey-answer-whyrated-development' => 'כולי תקווה שהדירוג שלי ישפיע לטובה על פיתוח הדף',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'ברצוני לתרום ל{{grammar:תחילית|{{SITENAME}}}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'מוצא חן בעיני לשתף את דעתי ברבים',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'לא סיפקתי אף דירוגים היום, אך ברצוני לתת משוב על תכונה',
	'articlefeedback-survey-answer-whyrated-other' => 'אחר',
	'articlefeedback-survey-question-useful' => 'האם קיבלת את התחושה שהדירוגים שסיפקת שימושיים וברורים?',
	'articlefeedback-survey-question-useful-iffalse' => 'מדוע?',
	'articlefeedback-survey-question-comments' => 'האם יש לך הערות נוספות?',
	'articlefeedback-survey-submit' => 'שליחה',
	'articlefeedback-survey-title' => 'נא לענות על מספר שאלות',
	'articlefeedback-survey-thanks' => 'תודה לך על מילוי הסקר.',
	'articlefeedback-error' => 'אירעה שגיאה. נא לנסות שוב מאוחר יותר.',
	'articlefeedback-form-switch-label' => 'תנו הערכה לדף הזה',
	'articlefeedback-form-panel-title' => 'תנו הערכה לדף הזה',
	'articlefeedback-form-panel-instructions' => 'הקדישו רגע לדרג את הדף.',
	'articlefeedback-form-panel-clear' => 'הסר דירוג זה',
	'articlefeedback-form-panel-expertise' => 'יש לי ידע רב על הנושא הזה (לא חובה)',
	'articlefeedback-form-panel-expertise-studies' => 'יש לי תואר אקדמי בנושא הזה',
	'articlefeedback-form-panel-expertise-profession' => 'זה חלק מהמקצוע שלי',
	'articlefeedback-form-panel-expertise-hobby' => 'זה מעורר בי תשוקה רבה',
	'articlefeedback-form-panel-expertise-other' => 'מקור הידע שלי לא מופיע כאן',
	'articlefeedback-form-panel-helpimprove' => 'אני רוצה לעזור לשפר את ויקיפדיה, שלחו לי מכתב על זה (לא חובה)',
	'articlefeedback-form-panel-helpimprove-note' => 'אנו נשלח לך מכתב אימות בדוא״ל. לא נשתף את הכתובת עם איש. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'מדיניות הפרטיות',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:מדיניות הפרטיות',
	'articlefeedback-form-panel-submit' => 'לשלוח דירוגים',
	'articlefeedback-form-panel-success' => 'נשמר בהצלחה',
	'articlefeedback-form-panel-expiry-title' => 'הדירוגים שלכם פגו',
	'articlefeedback-form-panel-expiry-message' => 'נא להעריך את הדף מחדש ולשלוח דירוגים חדשים.',
	'articlefeedback-report-switch-label' => 'להציג את ההערכות שניתנו לדף',
	'articlefeedback-report-panel-title' => 'הערכות שניתנו לדף הזה',
	'articlefeedback-report-panel-description' => 'ממוצע הדירוגים הנוכחי.',
	'articlefeedback-report-empty' => 'אין דירוגים',
	'articlefeedback-report-ratings' => '$1 דירוגים',
	'articlefeedback-field-trustworthy-label' => 'אמין',
	'articlefeedback-field-trustworthy-tip' => 'האם אתם מרגישים שבדף הזה יש הפניות מספיקות למקורות ושהמקורות מהימנים?',
	'articlefeedback-field-complete-label' => 'להשלים',
	'articlefeedback-field-complete-tip' => 'האם אתם מרגישים שהדף הזה סוקר את התחומים החיוניים הנוגעים בנושא?',
	'articlefeedback-field-objective-label' => 'לא מוטה',
	'articlefeedback-field-objective-tip' => 'האם אתם מרגישים שהדף הזה מייצג באופן הולם את כל נקודות המבט על הנושא?',
	'articlefeedback-field-wellwritten-label' => 'כתוב היטב',
	'articlefeedback-field-wellwritten-tip' => 'האם אתם מרגישים שהדף הזה מאורגן וכתוב היטב?',
	'articlefeedback-pitch-reject' => 'אולי מאוחר יותר',
	'articlefeedback-pitch-or' => 'או',
	'articlefeedback-pitch-thanks' => 'תודה! הדירוגים שלכם נשמרו.',
	'articlefeedback-pitch-survey-message' => 'אנא הקדישו רגע למילוי שאלון קצר.',
	'articlefeedback-pitch-survey-accept' => 'להתחיל את הסקר',
	'articlefeedback-pitch-join-message' => 'אתם רוצים ליצור חשבון?',
	'articlefeedback-pitch-join-body' => 'החשבון יעזור לכם לעקוב אחר העריכות שלכם, להיות מעורבים בדיונים ולהיות חלק מהקהילה.',
	'articlefeedback-pitch-join-accept' => 'יצירת חשבון',
	'articlefeedback-pitch-join-login' => 'כניסה לחשבון',
	'articlefeedback-pitch-edit-message' => 'הידעתם שאתם יכולים לערוך את הדף הזה?',
	'articlefeedback-pitch-edit-accept' => 'לערוך את הדף הזה',
	'articlefeedback-survey-message-success' => 'תודה על מילוי הסקר.',
	'articlefeedback-survey-message-error' => 'אירעה שגיאה. 
נא לנסות שוב מאוחר יותר.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'התוצאות הגבוהות והנמוכות היום',
	'articleFeedback-table-caption-weeklymostchanged' => 'מה השתנה השבוע יותר מכול',
	'articleFeedback-table-caption-recentlows' => 'תוצאות נמוכות לאחרונה',
	'articleFeedback-table-heading-page' => 'דף',
	'articleFeedback-table-heading-average' => 'ממוצע',
	'articlefeedback-emailcapture-response-body' => 'שלום!

תודה שהבעתם עניין בסיוע לשיפור אתר {{SITENAME}}.

אנא הקדישו רגע לאשר את הדואר האלקטרוני שלכם על־ידי לחיצה על הקישור להלן:

$1

אפשר גם לבקר בקישור הבא:

$2

ולהזין את קוד האישור הבא:

$3

נהיה בקשר לאחר זמן קצר ונספר לכם על דרכים לסייע לשפר את אתר {{SITENAME}}.

אם לא יזמת את הבקשה הזאת, נא להתעלם מהמכתב הזה ולא נשלח לך שום דבר אחר.

כל טוב, ותודה

צוות {{SITENAME}}',
);

/** Croatian (Hrvatski)
 * @author Herr Mlinka
 * @author Roberta F.
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'articlefeedback' => 'Ocjenjivanje članaka',
	'articlefeedback-desc' => 'Ocjenjivanje članaka (probna inačica)',
	'articlefeedback-survey-question-whyrated' => 'Molimo recite nam zašto ste ocijenili danas ovu stranicu (označite sve što se može primijeniti):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Želio sam pridonijeti sveukupnoj ocjeni stranice',
	'articlefeedback-survey-answer-whyrated-development' => 'Nadam se da će moja ocjena imati pozitivno uticati na razvoj stranice',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Želim pridonijeti projektu {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Volim dijeliti svoje mišljenje',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Nisam dao ocjene danas, ali sam želio dati mišljenje o dogradnji',
	'articlefeedback-survey-answer-whyrated-other' => 'Ostalo',
	'articlefeedback-survey-question-useful' => 'Jesu li dane ocjene korisne i jasne?',
	'articlefeedback-survey-question-useful-iffalse' => 'Zašto?',
	'articlefeedback-survey-question-comments' => 'Imate li neki dodatni komentar?',
	'articlefeedback-survey-submit' => 'Pošalji',
	'articlefeedback-survey-title' => 'Molimo odgovorite na nekoliko pitanja',
	'articlefeedback-survey-thanks' => 'Hvala vam na popunjavanju ankete.',
	'articlefeedback-error' => 'Došlo je do pogrješke. 
Molimo, pokušajte ponovno kasnije.',
	'articlefeedback-form-switch-label' => 'Ocijeni ovu stranicu',
	'articlefeedback-form-panel-title' => 'Ocijeni ovu stranicu',
	'articlefeedback-form-panel-instructions' => 'Molimo odvojite trenutak vremena da ocijenite ovu stranicu.',
	'articlefeedback-form-panel-clear' => 'Ukloni ovu ocijenu',
	'articlefeedback-form-panel-expertise' => 'Visoko sam obrazovan o ovoj temi',
	'articlefeedback-form-panel-expertise-studies' => 'Imam odgovarajući fakultetski/sveučilišni stupanj',
	'articlefeedback-form-panel-expertise-profession' => 'To je dio moje struke',
	'articlefeedback-form-panel-expertise-hobby' => 'To je duboka osobna strast',
	'articlefeedback-form-panel-expertise-other' => 'Izvor moga znanja nije na ovom popisu',
	'articlefeedback-form-panel-submit' => 'Pošaljite povratnu informaciju',
	'articlefeedback-form-panel-success' => 'Uspješno spremljeno',
	'articlefeedback-form-panel-expiry-title' => 'Vaše su ocjene istekle',
	'articlefeedback-form-panel-expiry-message' => 'Molimo ponovno ocijenite ovu stranicu te pošaljite nove ocjene.',
	'articlefeedback-report-switch-label' => 'Prikaži ocjene ove stranice',
	'articlefeedback-report-panel-title' => 'Ocjene stranice',
	'articlefeedback-report-panel-description' => 'Trenutačni prosjek ocjena.',
	'articlefeedback-report-empty' => 'Nema ocjena',
	'articlefeedback-report-ratings' => '$1 ocjena',
	'articlefeedback-field-trustworthy-label' => 'Vjerodostojno',
	'articlefeedback-field-trustworthy-tip' => 'Smatrate li da ova stranica ima dovoljno izvora i da su oni iz vjerodostojnih izvora?',
	'articlefeedback-field-complete-label' => 'Zaokružena cjelina teme',
	'articlefeedback-field-complete-tip' => 'Da li mislite da ova stranica pokriva osnovna područja teme koja bi trebala?',
	'articlefeedback-field-objective-label' => 'Nepristrano',
	'articlefeedback-field-objective-tip' => 'Da li smatrate da ova stranica prikazuje neutralni prikaz iz svih perspektiva o temi?',
	'articlefeedback-field-wellwritten-label' => 'Dobro napisano',
	'articlefeedback-field-wellwritten-tip' => 'Mislite li da je ova stranica dobro organizirana i dobro napisana?',
	'articlefeedback-pitch-reject' => 'Možda kasnije',
	'articlefeedback-pitch-or' => 'ili',
	'articlefeedback-pitch-thanks' => 'Hvala! Vaše su ocjene sačuvane.',
	'articlefeedback-pitch-survey-message' => 'Molimo vas da odvojite trenutak kako biste dovršili kratku anketu.',
	'articlefeedback-pitch-survey-accept' => 'Počni anketu',
	'articlefeedback-pitch-join-message' => 'Želite li kreirati korisnički račun?',
	'articlefeedback-pitch-join-body' => 'Korisnički će vam račun olakšati praćenje vaših uređivanja, uključivanje u rasprave te će te lakše postati dijelom zajednice.',
	'articlefeedback-pitch-join-accept' => 'Otvori novi suradnički račun',
	'articlefeedback-pitch-join-login' => 'Prijavite se',
	'articlefeedback-pitch-edit-message' => 'Jeste li znali da možete uređivati ovu stranicu?',
	'articlefeedback-pitch-edit-accept' => 'Uredi ovu stranicu',
	'articlefeedback-survey-message-success' => 'Hvala vam na popunjavanju ankete.',
	'articlefeedback-survey-message-error' => 'Došlo je do pogrješke. 
Molimo Vas, pokušajte ponovno kasnije.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'articlefeedback' => 'Pohódnoćenje nastawkow',
	'articlefeedback-desc' => 'Pohódnoćenje nastawkow (pilotowa wersija)',
	'articlefeedback-survey-question-whyrated' => 'Prošu zdźěl nam, čehodla sy tutu stronu dźensa posudźił (trjechace prošu nakřižować):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Chcych so na cyłkownym pohódnoćenju strony wobdźělić',
	'articlefeedback-survey-answer-whyrated-development' => 'Nadźijam so, zo moje pohódnoćene by wuwiće strony pozitiwnje wobwliwowało',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Chcych k {{SITENAME}} přinošować',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Bych rady moje měnjenje dźělił',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Dźensa njejsym žane pohódnoćenja přewjedł, ale chcych swoje měnjenje wo tutej funkciji wuprajić.',
	'articlefeedback-survey-answer-whyrated-other' => 'Druhe',
	'articlefeedback-survey-question-useful' => 'Wěriš, zo podate pohódnoćenja su wužite a jasne?',
	'articlefeedback-survey-question-useful-iffalse' => 'Čehodla?',
	'articlefeedback-survey-question-comments' => 'Maš hišće dalše komentary?',
	'articlefeedback-survey-submit' => 'Wotpósłać',
	'articlefeedback-survey-title' => 'Prošu wotmołw na někotre prašenja',
	'articlefeedback-survey-thanks' => 'Dźakujemy so za twój posudk.',
	'articlefeedback-error' => 'Zmylk je wustupił.
Prošu spytaj pozdźišo hišće raz.',
	'articlefeedback-form-switch-label' => 'Tutu stronu pohódnoćić',
	'articlefeedback-form-panel-title' => 'Tutu stronu pohódnoćić',
	'articlefeedback-form-panel-instructions' => 'Prošu bjer sej trochu časa, zo by tutu stronu pohódnoćił.',
	'articlefeedback-form-panel-clear' => 'Tute pohódnoćenje wotstronić',
	'articlefeedback-form-panel-expertise' => 'Mam dobre předznajomosće k tutej temje',
	'articlefeedback-form-panel-expertise-studies' => 'Sym na wotpowědnej wyšej šuli/uniwersiće studował',
	'articlefeedback-form-panel-expertise-profession' => 'Je dźěl mojeho powołanja',
	'articlefeedback-form-panel-expertise-hobby' => 'Je mój konik',
	'articlefeedback-form-panel-expertise-other' => 'Žórło mojich znajomosćow njeje tu podate',
	'articlefeedback-form-panel-submit' => 'Posudki pósłać',
	'articlefeedback-form-panel-success' => 'wuspěšnje składowany',
	'articlefeedback-form-panel-expiry-title' => 'Twoje pohódnoćenja su spadnyli',
	'articlefeedback-form-panel-expiry-message' => 'Prošu pohódnoć tutu stronu znowa a pósćel nowe pohódnoćenja.',
	'articlefeedback-report-switch-label' => 'Pohódnoćenja strony pokazać',
	'articlefeedback-report-panel-title' => 'Pohódnoćenja strony',
	'articlefeedback-report-panel-description' => 'Aktualne přerězkowe pohódnoćenja.',
	'articlefeedback-report-empty' => 'Žane pohódnoćenja',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|pohódnoćenje|pohódnoćeni|pohódnoćenja|pohódnoćenjow}}',
	'articlefeedback-field-trustworthy-label' => 'Dowěry hódny',
	'articlefeedback-field-trustworthy-tip' => 'Měniće, zo tuta strona ma dosć citatow a zo tute citaty su z dowěry hódnych žórłow?',
	'articlefeedback-field-complete-label' => 'Dospołny',
	'articlefeedback-field-complete-tip' => 'Měnicé, zo tuta strona wobkedźbuje wšitke bytostne temowe pola, kotrež měła wobsahować?',
	'articlefeedback-field-objective-label' => 'Wěcowny',
	'articlefeedback-field-objective-tip' => 'Měniš, zo tuta strona pokazuje wurunane předstajenje wšěch perspektiwow tutoho problema?',
	'articlefeedback-field-wellwritten-label' => 'Derje napisany',
	'articlefeedback-field-wellwritten-tip' => 'Měniš, zo tuta strona je derje zorganizowana a derje napisana?',
	'articlefeedback-pitch-reject' => 'Snano pozdźišo',
	'articlefeedback-pitch-or' => 'abo',
	'articlefeedback-pitch-thanks' => 'Měj dźak! Twoje pohódnoćenja su so składowali.',
	'articlefeedback-pitch-survey-message' => 'Prošu bjer sej wokomik časa, zo by so na krótkim naprašowanju wobdźělił.',
	'articlefeedback-pitch-survey-accept' => 'Pohódnoćenje započeć',
	'articlefeedback-pitch-join-message' => 'Sy chcył konto załožić?',
	'articlefeedback-pitch-join-body' => 'Konto budźe ći pomhać twoje změny slědować, so na diskusijach wobdźělić a dźěl zhromadźenstwa być.',
	'articlefeedback-pitch-join-accept' => 'Konto załožić',
	'articlefeedback-pitch-join-login' => 'Přizjewić',
	'articlefeedback-pitch-edit-message' => 'Sy wědźał, zo móžeš tutu stronu wobdźěłać?',
	'articlefeedback-pitch-edit-accept' => 'Tutu stronu wobdźěłać',
	'articlefeedback-survey-message-success' => 'Dźakujemy so za wobdźělenje na naprašowanju.',
	'articlefeedback-survey-message-error' => 'Zmylk je wustupił.
Prošu spytaj pozdźišo hišće raz.',
);

/** Hungarian (Magyar)
 * @author Dani
 * @author Misibacsi
 */
$messages['hu'] = array(
	'articlefeedback' => 'Szócikk értékelése',
	'articlefeedback-desc' => 'Cikk értékelése (kísérleti változat)',
	'articlefeedback-survey-question-whyrated' => 'Kérjük, mondd el nekünk, miért értékelted ezt az oldalt (jelöld meg a megfelelőket):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Azt akartam, hogy hozzájáruljak az oldal összesített értékeléséhez',
	'articlefeedback-survey-answer-whyrated-development' => 'Remélem, hogy az értékelésem pozitívan befolyásolja az oldal fejlődését',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Azt akartam, hogy hozzájáruljak ehhez: {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Szerettem volna megosztani a véleményemet',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Ma még nem adtam értékelést, de szerettem volna visszajelzést adni erről a funkcióról',
	'articlefeedback-survey-answer-whyrated-other' => 'Egyéb',
	'articlefeedback-survey-question-useful' => 'Hiszel abban, hogy az értékelések hasznosak és világosak?',
	'articlefeedback-survey-question-useful-iffalse' => 'Miért?',
	'articlefeedback-survey-question-comments' => 'Van még további észrevételed?',
	'articlefeedback-survey-submit' => 'Értékelés küldése',
	'articlefeedback-survey-title' => 'Kérjük, válaszolj néhány kérdésre',
	'articlefeedback-survey-thanks' => 'Köszönjük a kérdőív kitöltését!',
);

/** Interlingua (Interlingua)
 * @author Catrope
 * @author McDutchie
 */
$messages['ia'] = array(
	'articlefeedback' => 'Evalutation de articulos',
	'articlefeedback-desc' => 'Evalutation de articulos (version pilota)',
	'articlefeedback-survey-question-origin' => 'In qual pagina te trovava tu quando tu comenciava iste sondage?',
	'articlefeedback-survey-question-whyrated' => 'Per favor dice nos proque tu ha evalutate iste pagina hodie (marca tote le optiones applicabile):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Io voleva contribuer al evalutation general del pagina',
	'articlefeedback-survey-answer-whyrated-development' => 'Io spera que mi evalutation ha un effecto positive sur le disveloppamento del pagina',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Io voleva contribuer a {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Me place condivider mi opinion',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Io non dava un evalutation hodie, ma io voleva dar mi opinion super le functionalitate',
	'articlefeedback-survey-answer-whyrated-other' => 'Altere',
	'articlefeedback-survey-question-useful' => 'Crede tu que le evalutationes providite es utile e clar?',
	'articlefeedback-survey-question-useful-iffalse' => 'Proque?',
	'articlefeedback-survey-question-comments' => 'Ha tu additional commentos?',
	'articlefeedback-survey-submit' => 'Submitter',
	'articlefeedback-survey-title' => 'Per favor responde a alcun questiones',
	'articlefeedback-survey-thanks' => 'Gratias pro completar le questionario.',
	'articlefeedback-error' => 'Un error ha occurrite. Per favor reproba plus tarde.',
	'articlefeedback-form-switch-label' => 'Evalutar iste pagina',
	'articlefeedback-form-panel-title' => 'Evalutar iste pagina',
	'articlefeedback-form-panel-instructions' => 'Per favor prende un momento pro evalutar iste pagina.',
	'articlefeedback-form-panel-clear' => 'Remover iste evalutation',
	'articlefeedback-form-panel-expertise' => 'Io es multo ben informate super iste thema (optional)',
	'articlefeedback-form-panel-expertise-studies' => 'Io ha un grado relevante de collegio/universitate',
	'articlefeedback-form-panel-expertise-profession' => 'Illo face parte de mi profession',
	'articlefeedback-form-panel-expertise-hobby' => 'Es un passion personal profunde',
	'articlefeedback-form-panel-expertise-other' => 'Le origine de mi cognoscentia non es listate hic',
	'articlefeedback-form-panel-helpimprove' => 'Io volerea adjutar a meliorar Wikipedia, per favor invia me un e-mail (optional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Nos te inviara un e-mail de confirmation. Nos non divulga tu adresse de e-mail a altere personas. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Politica de confidentialitate',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Politica de confidentialitate',
	'articlefeedback-form-panel-submit' => 'Submitter evalutationes',
	'articlefeedback-form-panel-success' => 'Salveguardate con successo',
	'articlefeedback-form-panel-expiry-title' => 'Tu evalutationes ha expirate',
	'articlefeedback-form-panel-expiry-message' => 'Per favor re-evaluta iste pagina e submitte nove evalutationes.',
	'articlefeedback-report-switch-label' => 'Vider evalutationes del pagina',
	'articlefeedback-report-panel-title' => 'Evalutationes del pagina',
	'articlefeedback-report-panel-description' => 'Evalutationes medie actual.',
	'articlefeedback-report-empty' => 'Nulle evalutation',
	'articlefeedback-report-ratings' => '$1 evalutationes',
	'articlefeedback-field-trustworthy-label' => 'Digne de fide',
	'articlefeedback-field-trustworthy-tip' => 'Pensa tu que iste pagina ha sufficiente citationes e que iste citationes refere a fontes digne de fide?',
	'articlefeedback-field-complete-label' => 'Complete',
	'articlefeedback-field-complete-tip' => 'Pensa tu que iste pagina coperi le themas essential que illo deberea coperir?',
	'articlefeedback-field-objective-label' => 'Impartial',
	'articlefeedback-field-objective-tip' => 'Pensa tu que iste pagina monstra un representation juste de tote le perspectivas super le question?',
	'articlefeedback-field-wellwritten-label' => 'Ben scribite',
	'articlefeedback-field-wellwritten-tip' => 'Pensa tu que iste pagina es ben organisate e ben scribite?',
	'articlefeedback-pitch-reject' => 'Forsan plus tarde',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => 'Gratias! Tu evalutation ha essite salveguardate.',
	'articlefeedback-pitch-survey-message' => 'Per favor prende un momento pro completar un curte questionario.',
	'articlefeedback-pitch-survey-accept' => 'Comenciar sondage',
	'articlefeedback-pitch-join-message' => 'Vole tu crear un conto?',
	'articlefeedback-pitch-join-body' => 'Un conto te adjuta a traciar tu modificationes, a participar in discussiones e a facer parte del communitate.',
	'articlefeedback-pitch-join-accept' => 'Crear conto',
	'articlefeedback-pitch-join-login' => 'Aperir session',
	'articlefeedback-pitch-edit-message' => 'Sapeva tu que tu pote modificar iste articulo?',
	'articlefeedback-pitch-edit-accept' => 'Modificar iste articulo',
	'articlefeedback-survey-message-success' => 'Gratias pro haber respondite al inquesta.',
	'articlefeedback-survey-message-error' => 'Un error ha occurrite.
Per favor reproba plus tarde.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Altos e bassos de hodie',
	'articleFeedback-table-caption-weeklymostchanged' => 'Le plus modificate iste septimana',
	'articleFeedback-table-caption-recentlows' => 'Bassos recente',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Medie',
	'articlefeedback-emailcapture-response-body' => 'Salute!

Gratias pro tu interesse in adjutar a meliorar {{SITENAME}}.

Per favor prende un momento pro confirmar tu adresse de e-mail. Clicca super le ligamine sequente:

$1

Alternativemente, visita:

$2

...e entra le sequente codice de confirmation:

$3

Nos va tosto contactar te pro explicar como tu pote adjutar a meliorar {{SITENAME}}.

Si tu non ha initiate iste requesta, per favor ignora iste e-mail e nos non te inviara altere cosa.

Optime salutes, e multe gratias,
Le equipa de {{SITENAME}}',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 * @author IvanLanin
 * @author Kenrick95
 */
$messages['id'] = array(
	'articlefeedback' => 'Penilaian artikel',
	'articlefeedback-desc' => 'Penilaian artikel (versi percobaan)',
	'articlefeedback-survey-question-origin' => 'Apa halaman yang sedang Anda lihat saat memulai survei ini?',
	'articlefeedback-survey-question-whyrated' => 'Harap beritahu kami mengapa Anda menilai halaman ini hari ini (centang semua yang benar):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Saya ingin berkontribusi untuk peringkat keseluruhan halaman',
	'articlefeedback-survey-answer-whyrated-development' => 'Saya harap penilaian saya akan memberi dampak positif terhadap pengembangan halaman ini',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Saya ingin berkontribusi ke {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Saya ingin berbagi pendapat',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Saya tidak memberikan penilaian hari ini, tetapi ingin memberikan umpan balik pada fitur tersebut',
	'articlefeedback-survey-answer-whyrated-other' => 'Lainnya',
	'articlefeedback-survey-question-useful' => 'Apakah Anda yakin bahwa peringkat yang diberikan berguna dan jelas?',
	'articlefeedback-survey-question-useful-iffalse' => 'Mengapa?',
	'articlefeedback-survey-question-comments' => 'Apakah Anda memiliki komentar tambahan?',
	'articlefeedback-survey-submit' => 'Kirim',
	'articlefeedback-survey-title' => 'Silakan jawab beberapa pertanyaan',
	'articlefeedback-survey-thanks' => 'Terima kasih telah mengisi survei ini.',
	'articlefeedback-error' => 'Telah terjadi sebuah kesalahan. Silakan coba lagi nanti.',
	'articlefeedback-form-switch-label' => 'Berikan nilai halaman ini',
	'articlefeedback-form-panel-title' => 'Nilai halaman ini',
	'articlefeedback-form-panel-instructions' => 'Harap luangkan waktu untuk menilai halaman ini.',
	'articlefeedback-form-panel-clear' => 'Hapus penilaian ini',
	'articlefeedback-form-panel-expertise' => 'Saya sangat mengetahui topik ini (opsional)',
	'articlefeedback-form-panel-expertise-studies' => 'Saya memiliki gelar perguruan tinggi yang relevan',
	'articlefeedback-form-panel-expertise-profession' => 'Itu bagian dari profesi saya',
	'articlefeedback-form-panel-expertise-hobby' => 'Itu merupakan hasrat pribadi yang mendalam',
	'articlefeedback-form-panel-expertise-other' => 'Sumber pengetahuan saya tidak tercantum di sini',
	'articlefeedback-form-panel-helpimprove' => 'Saya ingin membantu meningkatkan Wikipedia. Kirimi saya surel (opsional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Kami akan mengirim surel konfirmasi. Kami tidak akan berbagi alamat Anda dengan siapa pun. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Kebijakan privasi',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Kebijakan privasi',
	'articlefeedback-form-panel-submit' => 'Kirim peringkat',
	'articlefeedback-form-panel-success' => 'Berhasil disimpan',
	'articlefeedback-form-panel-expiry-title' => 'Peringkat Anda sudah kedaluwarsa',
	'articlefeedback-form-panel-expiry-message' => 'Silakan evaluasi kembali halaman ini dan kirimkan peringkat baru.',
	'articlefeedback-report-switch-label' => 'Lihat penilaian halaman',
	'articlefeedback-report-panel-title' => 'Penilaian halaman',
	'articlefeedback-report-panel-description' => 'Peringkat rata-rata saat ini',
	'articlefeedback-report-empty' => 'Belum berperingkat',
	'articlefeedback-report-ratings' => '$1 penilaian',
	'articlefeedback-field-trustworthy-label' => 'Dapat dipercaya',
	'articlefeedback-field-trustworthy-tip' => 'Apakah Anda merasa bahwa halaman ini memiliki cukup kutipan dan bahwa kutipan tersebut berasal dari sumber tepercaya?',
	'articlefeedback-field-complete-label' => 'Lengkap',
	'articlefeedback-field-complete-tip' => 'Apakah Anda merasa bahwa halaman ini mencakup wilayah topik penting yang seharusnya?',
	'articlefeedback-field-objective-label' => 'Tidak bias',
	'articlefeedback-field-objective-tip' => 'Apakah Anda merasa bahwa halaman ini menunjukkan representasi yang adil dari semua perspektif tentang masalah ini?',
	'articlefeedback-field-wellwritten-label' => 'Ditulis dengan baik',
	'articlefeedback-field-wellwritten-tip' => 'Apakah Anda merasa bahwa halaman ini disusun dan ditulis dengan baik?',
	'articlefeedback-pitch-reject' => 'Mungkin nanti',
	'articlefeedback-pitch-or' => 'atau',
	'articlefeedback-pitch-thanks' => 'Terima kasih! Penilaian Anda telah disimpan.',
	'articlefeedback-pitch-survey-message' => 'Harap luangkan waktu untuk mengisi survei singkat.',
	'articlefeedback-pitch-survey-accept' => 'Mulai survei',
	'articlefeedback-pitch-join-message' => 'Apakah Anda ingin membuat akun?',
	'articlefeedback-pitch-join-body' => 'Akun akan membantu Anda melacak suntingan Anda, terlibat dalam diskusi, dan menjadi bagian dari komunitas.',
	'articlefeedback-pitch-join-accept' => 'Buat account',
	'articlefeedback-pitch-join-login' => 'Masuk log',
	'articlefeedback-pitch-edit-message' => 'Tahukah Anda bahwa Anda dapat menyunting laman ini?',
	'articlefeedback-pitch-edit-accept' => 'Sunting halaman ini',
	'articlefeedback-survey-message-success' => 'Terima kasih telah mengisi survei ini.',
	'articlefeedback-survey-message-error' => 'Kesalahan terjadi.
Silakan coba lagi.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Kenaikan dan penurunan hari ini',
	'articleFeedback-table-caption-weeklymostchanged' => 'Paling berubah minggu ini',
	'articleFeedback-table-caption-recentlows' => 'Penurunan terbaru',
	'articleFeedback-table-heading-page' => 'Halaman',
	'articleFeedback-table-heading-average' => 'Rata-rata',
	'articlefeedback-emailcapture-response-body' => 'Halo!

Terima kasih atas minat Anda untuk membantu meningkatkan {{SITENAME}}.

Harap luangkan waktu untuk mengonfirmasi surel Anda dengan mengklik pranala di bawah ini:

$1

Anda juga dapat mengunjungi:

$2

Dan masukkan kode konfirmasi berikut:

$3

Dalam waktu dekat, kami akan menghubungi Anda dan menerangkan bagaimana cara membantu peningkatan {{SITENAME}}.

Jika Anda tidak mengajukan permintaan ini, harap mengabaikan surel ini dan kami akan tidak mengirimkan apa pun.

Salam, dan terima kasih,
Tim {{SITENAME}}',
);

/** Italian (Italiano)
 * @author Beta16
 * @author Pietrodn
 */
$messages['it'] = array(
	'articlefeedback' => 'Valutazione pagina',
	'articlefeedback-desc' => 'Valutazione pagina (versione pilota)',
	'articlefeedback-survey-question-origin' => 'In quale pagina eravate quando avete iniziato questa indagine?',
	'articlefeedback-survey-question-whyrated' => 'Esprimi il motivo per cui oggi hai valutato questa pagina (puoi selezionare più opzioni):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Ho voluto contribuire alla valutazione complessiva della pagina',
	'articlefeedback-survey-answer-whyrated-development' => 'Spero che il mio giudizio influenzi positivamente lo sviluppo della pagina',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Ho voluto contribuire a {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Mi piace condividere la mia opinione',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Non ho fornito valutazioni oggi, ma ho voluto lasciare un feedback sulla funzionalità',
	'articlefeedback-survey-answer-whyrated-other' => 'Altro',
	'articlefeedback-survey-question-useful' => 'Pensi che le valutazioni fornite siano utili e chiare?',
	'articlefeedback-survey-question-useful-iffalse' => 'Perché?',
	'articlefeedback-survey-question-comments' => 'Hai altri commenti?',
	'articlefeedback-survey-submit' => 'Invia',
	'articlefeedback-survey-title' => 'Per favore, rispondi ad alcune domande',
	'articlefeedback-survey-thanks' => 'Grazie per aver compilato il questionario.',
	'articlefeedback-error' => 'Si è verificato un errore. 
Riprova più tardi.',
	'articlefeedback-form-switch-label' => 'Valuta questa pagina',
	'articlefeedback-form-panel-title' => 'Valuta questa pagina',
	'articlefeedback-form-panel-instructions' => "Per favore, concedici un po' del tuo tempo per valutare questa pagina.",
	'articlefeedback-form-panel-clear' => 'Cancella questo giudizio',
	'articlefeedback-form-panel-expertise' => 'Conosco molto bene questo argomento (opzionale)',
	'articlefeedback-form-panel-expertise-studies' => 'Ho una laurea pertinente alla materia',
	'articlefeedback-form-panel-expertise-profession' => 'È parte della mia professione',
	'articlefeedback-form-panel-expertise-hobby' => 'È una profonda passione personale',
	'articlefeedback-form-panel-expertise-other' => 'La fonte della mia conoscenza non è elencata qui',
	'articlefeedback-form-panel-helpimprove' => 'Vorrei contribuire a migliorare Wikipedia, inviatemi una e-mail (facoltativo)',
	'articlefeedback-form-panel-helpimprove-note' => 'Ti invieremo una e-mail di conferma. Non condivideremo il tuo indirizzo con nessuno. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Informazioni sulla privacy',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Informazioni sulla privacy',
	'articlefeedback-form-panel-submit' => 'Invia voti',
	'articlefeedback-form-panel-success' => 'Salvato con successo',
	'articlefeedback-form-panel-expiry-title' => 'Le tue valutazioni sono obsolete',
	'articlefeedback-form-panel-expiry-message' => 'Valuta nuovamente questa pagina ed inviaci i tuoi giudizi.',
	'articlefeedback-report-switch-label' => 'Mostra i risultati',
	'articlefeedback-report-panel-title' => 'Giudizio pagina',
	'articlefeedback-report-panel-description' => 'Valutazione media attuale.',
	'articlefeedback-report-empty' => 'Nessuna valutazione',
	'articlefeedback-report-ratings' => '$1 voti',
	'articlefeedback-field-trustworthy-label' => 'Affidabile',
	'articlefeedback-field-trustworthy-tip' => 'Ritieni che questa pagina abbia citazioni sufficienti e che queste citazioni provengano da fonti attendibili?',
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => 'Ritieni che questa pagina copra le aree tematiche essenziali che dovrebbe?',
	'articlefeedback-field-objective-label' => 'Obiettiva',
	'articlefeedback-field-objective-tip' => 'Ritieni che questa pagina mostri una rappresentazione equa di tutti i punti di vista sul tema?',
	'articlefeedback-field-wellwritten-label' => 'Ben scritta',
	'articlefeedback-field-wellwritten-tip' => 'Ritieni che questa pagina sia ben organizzata e ben scritta?',
	'articlefeedback-pitch-reject' => 'Forse più tardi',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => 'Grazie! Le tue valutazioni sono state salvate.',
	'articlefeedback-pitch-survey-message' => 'Spendi un momento per completare un breve sondaggio.',
	'articlefeedback-pitch-survey-accept' => 'Inizia sondaggio',
	'articlefeedback-pitch-join-message' => 'Vuoi creare un account?',
	'articlefeedback-pitch-join-body' => 'Un account ti aiuterà a tenere traccia delle tue modifiche, a partecipare a discussioni e ad essere parte della comunità.',
	'articlefeedback-pitch-join-accept' => 'Crea un nuovo utente',
	'articlefeedback-pitch-join-login' => 'Entra',
	'articlefeedback-pitch-edit-message' => 'Sai che è possibile modificare questa pagina?',
	'articlefeedback-pitch-edit-accept' => 'Modifica questa pagina',
	'articlefeedback-survey-message-success' => 'Grazie per aver compilato il questionario.',
	'articlefeedback-survey-message-error' => 'Si è verificato un errore. 
Riprova più tardi.',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Media',
);

/** Japanese (日本語)
 * @author Marine-Blue
 * @author Ohgi
 * @author Whym
 * @author Yanajin66
 * @author 青子守歌
 */
$messages['ja'] = array(
	'articlefeedback' => '記事の評価',
	'articlefeedback-desc' => '記事の評価',
	'articlefeedback-survey-question-whyrated' => '今日、なぜこのページを評価したか教えてください（該当するものすべてにチェックを入れてください）：',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'ページの総合的評価を投稿したかった',
	'articlefeedback-survey-answer-whyrated-development' => '自分の評価が、このページの成長に良い影響を与えることを望んでいる',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => '{{SITENAME}}に貢献したい',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => '意見を共有したい',
	'articlefeedback-survey-answer-whyrated-didntrate' => '今日は評価しなかったが、この機能に関するフィードバックをしたかった。',
	'articlefeedback-survey-answer-whyrated-other' => 'その他',
	'articlefeedback-survey-question-useful' => 'これらの評価は、分かりやすく、役に立つものだと思いますか？',
	'articlefeedback-survey-question-useful-iffalse' => 'なぜですか？',
	'articlefeedback-survey-question-comments' => '他に追加すべきコメントがありますか？',
	'articlefeedback-survey-submit' => '送信',
	'articlefeedback-survey-title' => '質問に少しお答えください',
	'articlefeedback-survey-thanks' => '調査に記入していただき、ありがとうございます。',
	'articlefeedback-error' => 'エラーが発生しました。後でもう一度試してください。',
	'articlefeedback-form-switch-label' => 'このページを評価',
	'articlefeedback-form-panel-title' => 'このページを評価',
	'articlefeedback-form-panel-instructions' => 'このページの評価を算出していますので、少しお待ちください。',
	'articlefeedback-form-panel-clear' => 'この評価を除去する',
	'articlefeedback-form-panel-expertise' => 'この話題について、高度な知識を持っている（自由選択）',
	'articlefeedback-form-panel-expertise-studies' => '関連する大学の学位を持っている',
	'articlefeedback-form-panel-expertise-profession' => '自分の職業の一部である',
	'articlefeedback-form-panel-expertise-hobby' => '個人的に深い情熱を注いでいる',
	'articlefeedback-form-panel-expertise-other' => '自分の知識源はこの中にない',
	'articlefeedback-form-panel-helpimprove' => 'ウィキペディアを改善するための電子メールを受信する（自由選択）',
	'articlefeedback-form-panel-helpimprove-privacy' => 'プライバシー・ポリシー',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:プライバシー・ポリシー',
	'articlefeedback-form-panel-submit' => '評価を送信',
	'articlefeedback-form-panel-success' => '保存に成功',
	'articlefeedback-form-panel-expiry-title' => 'あなたの評価の有効期限が切れました',
	'articlefeedback-form-panel-expiry-message' => 'このページを再評価して、新しい評価を送信してください。',
	'articlefeedback-report-switch-label' => 'ページの評価を見る',
	'articlefeedback-report-panel-title' => 'ページの評価',
	'articlefeedback-report-panel-description' => '現在の評価の平均。',
	'articlefeedback-report-empty' => '評価なし',
	'articlefeedback-report-ratings' => '$1 の評価',
	'articlefeedback-field-trustworthy-label' => '信頼できる',
	'articlefeedback-field-trustworthy-tip' => 'このページは、十分な出典があり、それらの出典は信頼できる情報源によるものですか？',
	'articlefeedback-field-complete-label' => '完成度',
	'articlefeedback-field-complete-tip' => 'この記事は、不可欠な話題を、説明していると思いますか？',
	'articlefeedback-field-objective-label' => '公平な',
	'articlefeedback-field-objective-tip' => 'このページは、ある問題に対する全ての観点を平等に説明していると思いますか？',
	'articlefeedback-field-wellwritten-label' => 'よく書けている',
	'articlefeedback-field-wellwritten-tip' => 'この記事は、良く整理され、良く書かれていると思いますか？',
	'articlefeedback-pitch-reject' => '後でやる',
	'articlefeedback-pitch-or' => 'または',
	'articlefeedback-pitch-thanks' => 'ありがとうございました。評価は保存されました。',
	'articlefeedback-pitch-survey-message' => '短いアンケートにご協力ください。',
	'articlefeedback-pitch-survey-accept' => '調査を開始',
	'articlefeedback-pitch-join-message' => 'アカウントを作成しませんか。',
	'articlefeedback-pitch-join-body' => 'アカウントを作成することで、自分自身の編集を振り返ることが容易になり、議論に参加しやすくなり、コミュニティの一員にもなれます。',
	'articlefeedback-pitch-join-accept' => 'アカウント作成',
	'articlefeedback-pitch-join-login' => 'ログイン',
	'articlefeedback-pitch-edit-message' => 'このページを編集できることをご存じですか。',
	'articlefeedback-pitch-edit-accept' => 'このページを編集',
	'articlefeedback-survey-message-success' => 'アンケートに記入していただきありがとうございます。',
	'articlefeedback-survey-message-error' => 'エラーが発生しました。
後でもう一度試してください。',
	'articleFeedback-table-caption-dailyhighsandlows' => '今日の最高値と最低値',
	'articleFeedback-table-heading-page' => 'ページ',
	'articleFeedback-table-heading-average' => '平均',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 * @author Dawid Deutschland
 * @author ITshnik
 */
$messages['ka'] = array(
	'articlefeedback' => 'სტატიის შეფასება',
	'articlefeedback-desc' => 'სტატიის შეფასება',
	'articlefeedback-survey-question-whyrated' => 'გთხოვთ შეგვატყობინეთ, თუ რატომ შეაფასეთ დღეს ეს სტატია (შეამოწმეთ სისწორე)',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'მე ვისურვებდი სტატიის შეფასებაში მონაწილეობის მიღებას',
	'articlefeedback-survey-answer-whyrated-development' => 'ვიმედოვნებ, რომ ჩემი შეფასება დადებითად აისახება სტატიის მომავალ განვითარებაზე',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'მე ვისურვებდი {{SITENAME}}-ში მონაწილეობას',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'მე სიამოვნებით გაგიზიარებთ ჩემს აზრს',
	'articlefeedback-survey-answer-whyrated-other' => 'სხვა',
	'articlefeedback-survey-question-useful' => 'გჯერათ, რომ მოცემული შეფასებები გამოსაყენებელი და გასაგებია?',
	'articlefeedback-survey-question-useful-iffalse' => 'რატომ?',
	'articlefeedback-survey-question-comments' => 'კიდევ დაამატებთ რამეს?',
	'articlefeedback-survey-submit' => 'შენახვა',
	'articlefeedback-survey-title' => 'გთხოვთ, გვიპასუხეთ რამდენიმე შეკითხვაზე',
	'articlefeedback-survey-thanks' => 'გმადლობთ საპასუხო შეტყობინებისათვის',
	'articlefeedback-error' => 'წარმოიშვა რაღაც შეცდომა. გთხოვთ სცადეთ მოგვიანებით.',
	'articlefeedback-form-switch-label' => 'ამ გვერდის შეფასება',
	'articlefeedback-form-panel-title' => 'ამ გვერდის შეფასება',
	'articlefeedback-form-panel-instructions' => 'გთხოვთ, გამონახეთ დრო ამ გვერდის შეფასებისათვის.',
	'articlefeedback-form-panel-clear' => 'შეფასება წაიშალა',
	'articlefeedback-form-panel-expertise' => 'მე მაქვს წინასწარი ცოდნა ამ თემის შესახებ',
	'articlefeedback-form-panel-expertise-studies' => 'მე ეს უმაღლეს სასწავლებელში ვისწავლე',
	'articlefeedback-form-panel-expertise-profession' => 'ეს ჩემი პროფესიის ნაწილია',
	'articlefeedback-form-panel-expertise-hobby' => 'ეს ჩემს ჰობისა და ინტერესებს მოიცავს',
	'articlefeedback-form-panel-expertise-other' => 'ჩემი ცოდნის წყარო აქ მოცემული არაა',
	'articlefeedback-form-panel-submit' => 'დაეთანხმე შეფასებას',
	'articlefeedback-form-panel-success' => 'შენახულია წარმატებით',
	'articlefeedback-report-switch-label' => 'გვერდის შეფასებების ხილვა',
	'articlefeedback-report-panel-title' => 'ამ გვერდის შეფასებები',
	'articlefeedback-report-panel-description' => 'შეფასების ამჟამინდელი შედეგები',
	'articlefeedback-report-empty' => 'შეფასებები არაა',
	'articlefeedback-report-ratings' => '$1 შეფასება',
	'articlefeedback-field-trustworthy-label' => 'სანდო',
	'articlefeedback-field-trustworthy-tip' => 'ფიქრობთ, რომ ეს სტატია საკმარისი რაოდენობით შეიცავს სანდო წყაროებს?',
	'articlefeedback-field-complete-label' => 'დასრულებულია',
	'articlefeedback-field-complete-tip' => 'მიგაჩნიათ, რომ ეს სტატია შეიცავს მისივე შინაარსთან დაკავშირებულ ყველა მნიშვნელოვან ასპექტს?',
	'articlefeedback-field-objective-label' => 'მიუკერძოებელია',
	'articlefeedback-field-objective-tip' => 'მიგაჩნიათ, რომ ეს სტატია შეიცავს მისივე თემასთან დაკავშირებული წარმოდგენის შესახებ მიუკერძოებელ ინფორმაციას?',
	'articlefeedback-field-wellwritten-label' => 'კარგად დაწერილი',
	'articlefeedback-field-wellwritten-tip' => 'მიგაჩნიათ, რომ ეს სტატია კარგი სტრუქტურისაა და კარგადაა დაწერილი?',
	'articlefeedback-pitch-reject' => 'იქნებ მოგვიანებით',
	'articlefeedback-pitch-or' => 'ან',
	'articlefeedback-pitch-thanks' => 'გმადლობთ! თქვენი შეფასება შენახულია.',
	'articlefeedback-pitch-survey-message' => 'გთხოვთ, გამონახეთ მცირე დრო პატარა გამოკითხვაში მონაწილეობის მისაღებად.',
	'articlefeedback-pitch-survey-accept' => 'გამოკითხვის დაწყება',
	'articlefeedback-pitch-join-message' => 'იცით, რომ თქვენ შეგიძლიათ სამომხმარებლო ანგარიშის შექმნა? საკუთარი ანგარიშით შეგიძლიათ აკონტროლოთ თქვენი რედაქტირებები, ჩაერთოთ დებატებში და გახდეთ ვიკისაზოგადოების ნაწილი.',
	'articlefeedback-pitch-join-accept' => 'გახსენი ანგარიში',
	'articlefeedback-pitch-join-login' => 'შესვლა',
	'articlefeedback-pitch-edit-message' => 'იცით, რომ თქვენ ამ სტატიის რედაქტირება შეგიძლიათ?',
	'articlefeedback-pitch-edit-accept' => 'ამ გვერდის რედაქტირება',
	'articlefeedback-survey-message-success' => 'გმადლობთ გამოკითხვაში მონაწილეობისათვის.',
	'articlefeedback-survey-message-error' => 'წარმოიშვა რაღაც შეცდომა.
გთხოვთ სცადეთ მოგვიანებით.',
);

/** Korean (한국어)
 * @author Kwj2772
 */
$messages['ko'] = array(
	'articlefeedback' => '문서 평가',
	'articlefeedback-desc' => '문서 평가 (파일럿 버전)',
	'articlefeedback-survey-question-whyrated' => '오늘 이 문서를 왜 평가했는지 알려주십시오 (해당되는 모든 항목에 체크해주세요):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => '이 문서에 대한 전체적인 평가에 기여하고 싶어서',
	'articlefeedback-survey-answer-whyrated-development' => '내가 한 평가가 문서 발전에 긍정적인 영향을 줄 수 있다고 생각해서',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => '{{SITENAME}}에 기여하고 싶어서',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => '내 의견을 공유하고 싶어서',
	'articlefeedback-survey-answer-whyrated-didntrate' => '오늘 평가를 하지는 않았지만 이 기능에 대해 피드백을 남기고 싶어서',
	'articlefeedback-survey-answer-whyrated-other' => '기타',
	'articlefeedback-survey-question-useful' => '당신은 평가한 것이 유용하고 명확할 것이라 생각하십니까?',
	'articlefeedback-survey-question-useful-iffalse' => '왜 그렇게 생각하십니까?',
	'articlefeedback-survey-question-comments' => '다른 의견이 있으십니까?',
	'articlefeedback-survey-submit' => '제출',
	'articlefeedback-survey-title' => '몇 가지 질문에 답해 주시기 바랍니다.',
	'articlefeedback-survey-thanks' => '설문에 응해 주셔서 감사합니다.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'articlefeedback' => 'Enschäzonge för Sigge',
	'articlefeedback-desc' => 'Enschäzonge för Sigge',
	'articlefeedback-survey-question-origin' => 'Op wat för en Sigg bes De jewääse, wi De aanjefange häs, op heh di Froore ze antwoote?',
	'articlefeedback-survey-question-whyrated' => 'Bes esu joot, un lohß ons weße, woröm De hück för heh di Sigg en Enschäzong affjejovve häs, un maach e Krüzje övverall, woh_t paß:',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Esch wullt jät beidraare zo all dä Enschäzonge för heh di Sigg',
	'articlefeedback-survey-answer-whyrated-development' => 'Esch hoffen, dat ming Enschäzong för di Sigg dozoh beidrääht, dat se bäßer jemaat weed',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Esch wullt jät {{GRAMMAR:zo Dativ|{{SITENAME}}}} beidraare',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Esch jävven jäähn ming Meinong of',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Esch han hück kein Enschäzong afjejovve, wullt ävver en Röckmäldong övver et Enschäze vun Sigge afjävve',
	'articlefeedback-survey-answer-whyrated-other' => 'Söns jet',
	'articlefeedback-survey-question-useful' => 'Meins De, dat di Enschäzonge, di_et bes jäz jit, ze bruche sin un kloh?',
	'articlefeedback-survey-question-useful-iffalse' => 'Woröm?',
	'articlefeedback-survey-question-comments' => 'Häs De sönß noch jet ze saare?',
	'articlefeedback-survey-submit' => 'Faßhallde',
	'articlefeedback-survey-title' => 'Bes esu joot, un jivv e paa Antowwote',
	'articlefeedback-survey-thanks' => 'Mer donn und bedanke för et Ußfölle!',
	'articlefeedback-error' => 'Ene Fähler es dozwesche jukumme.
Versöhg et shpääder norr_ens.',
	'articlefeedback-form-switch-label' => 'Heh di Sigg enschäze',
	'articlefeedback-form-panel-title' => 'Heh di Sigg enschäze',
	'articlefeedback-form-panel-instructions' => 'Nemm Der ene Momang, öm heh di Sigg enzeschäze.',
	'articlefeedback-form-panel-clear' => 'Enschäzong fott nämme',
	'articlefeedback-form-panel-expertise' => 'Esch han en joode un vill Ahnong vun däm Theema',
	'articlefeedback-form-panel-expertise-studies' => 'Esch han dat aan ene Huhscholl udder aan der Univäsitäät shtudeet, un han ene Afschloß jemaat',
	'articlefeedback-form-panel-expertise-profession' => 'Et jehöt bei minge Beroof',
	'articlefeedback-form-panel-expertise-hobby' => 'Esch han e deef Inträße aan dä Saach',
	'articlefeedback-form-panel-expertise-other' => 'Söns jät, wat heh nit opjeföhrd es',
	'articlefeedback-form-panel-helpimprove' => 'Esch däät jähn methällfe, {{GRAMMAR:Nominativ|{{SITENAME}}}} bäßer ze maache. Doht mer en <i lang="en">e-mail</i> schecke.',
	'articlefeedback-form-panel-helpimprove-note' => 'Mr schecke Der en <i lang="en">e-mail</i> zum Beschtäteje.
Mer jävve Ding Adräß för de <i lang="en">e-mail</i> aan Keine wigger.
$1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Rääjelle för der Daateschotz un de Jeheimhaldung',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Daateschotz un Jeheimhaldung',
	'articlefeedback-form-panel-submit' => 'Lohß jonn!',
	'articlefeedback-form-panel-success' => 'Afjeshpeishert.',
	'articlefeedback-form-panel-expiry-title' => 'Ding Enschäzonge sen enzwesche övverhollt',
	'articlefeedback-form-panel-expiry-message' => 'Donn di Sigg heh neu Enschaäze, bes esu joot,',
	'articlefeedback-report-switch-label' => 'Enschäzunge vun heh dä Sigg beloore',
	'articlefeedback-report-panel-title' => 'Enschäzunge vun heh dä Sigg',
	'articlefeedback-report-panel-description' => 'De dorschnettlesche Enschäzunge.',
	'articlefeedback-report-empty' => 'Kein Enschäzunge',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|Ein Enschäzung|$1 Enschäzunge|Kein Enschäzunge}}',
	'articlefeedback-field-trustworthy-label' => 'Verdent Vertroue',
	'articlefeedback-field-trustworthy-tip' => 'Meins De, dat heh di Sigg jenooch Quälle aanjitt, un dat mer dänne jläuve kann?',
	'articlefeedback-field-complete-label' => 'Kumplätt',
	'articlefeedback-field-complete-tip' => 'Meins De, dat heh di Sigg all dat enthallde deiht, wat weeshtesh un nüüdesch is, dat nix draan fählt?',
	'articlefeedback-field-objective-label' => 'Opjäktiev',
	'articlefeedback-field-objective-tip' => 'Meins De, dat heh di Sigg ob en aanschtändije un ußjewoore Aat all de Aanseshte un Bedraachtungswiese vun der iehrem Teema widderjitt?',
	'articlefeedback-field-wellwritten-label' => 'Joot jeschrevve',
	'articlefeedback-field-wellwritten-tip' => 'Fengks De heh di Sigg joot zosamme_jeschtalld un joot jeschrevve?',
	'articlefeedback-pitch-reject' => 'Shpääder velleish',
	'articlefeedback-pitch-or' => 'udder',
	'articlefeedback-pitch-thanks' => 'Mer donn uns bedangke. Ding Enschäzonge sin faßjehallde.',
	'articlefeedback-pitch-survey-message' => 'Nämm Der koot Zigg för en Ömfrooch.',
	'articlefeedback-pitch-survey-accept' => 'Met dä Ömfrooch aanfange',
	'articlefeedback-pitch-join-message' => 'Wells De Desch aanmällde?',
	'articlefeedback-pitch-join-body' => 'Med en Aanmälldong kanns De leisch Ding eije Beidrääsch verfollje, beim Klaafe metmaache un e Deil vun der Jemeinschaff sin.',
	'articlefeedback-pitch-join-accept' => 'Aaanmälde',
	'articlefeedback-pitch-join-login' => 'Enlogge',
	'articlefeedback-pitch-edit-message' => 'Häß De jewoß, dat De heh di Sigg ändere kanns?',
	'articlefeedback-pitch-edit-accept' => 'Donn heh di Sigg ändere',
	'articlefeedback-survey-message-success' => 'Merci för et Ußfölle!',
	'articlefeedback-survey-message-error' => 'Ene Fähler es dozwesche jukumme.
Versöhg et shpääder norr_enß.',
	'articleFeedback-table-caption-weeklymostchanged' => 'Diß Woch et miehtß jeändert',
	'articleFeedback-table-heading-page' => 'Sigg',
	'articleFeedback-table-heading-average' => 'Dorschnett',
);

/** Kurdish (Latin) (Kurdî (Latin))
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'articlefeedback-survey-question-useful-iffalse' => 'Çima?',
	'articlefeedback-report-switch-label' => 'Encaman nîşan bide',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Catrope
 * @author Robby
 */
$messages['lb'] = array(
	'articlefeedback' => 'Artikelaschätzung',
	'articlefeedback-desc' => 'Artikelaschätzung Pilotversioun',
	'articlefeedback-survey-question-origin' => 'Op wat fir enger Säit war Dir wéi Dir mat der Ëmfro ugefaang huet?',
	'articlefeedback-survey-question-whyrated' => 'Sot eis w.e.g. firwat datt Dir dës säit bewäert hutt (klickt alles u wat zoutrëfft):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Ech wollt zur allgemenger Bewäertung vun der Säit bedroen',
	'articlefeedback-survey-answer-whyrated-development' => "Ech hoffen datt meng Bewäertung d'Entwécklung vun der Säit positiv beaflosst",
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Ech wollt mech un {{SITENAME}} bedeelegen',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Ech deele meng Meenung gäre mat',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Ech hunn haut keng Bewäertung ofginn, awer ech wollt mäi Feedback zu dëser Fonctionalitéit ginn',
	'articlefeedback-survey-answer-whyrated-other' => 'Anerer',
	'articlefeedback-survey-question-useful' => "Mengt Dir datt d'Bewäertungen hei nëtzlech a kloer sinn?",
	'articlefeedback-survey-question-useful-iffalse' => 'Firwat?',
	'articlefeedback-survey-question-comments' => 'Hutt Dir nach aner Bemierkungen?',
	'articlefeedback-survey-submit' => 'Späicheren',
	'articlefeedback-survey-title' => 'Beäntwert w.e.g. e puer Froen',
	'articlefeedback-survey-thanks' => 'Merci datt Dir eis Ëmfro ausgefëllt hutt.',
	'articlefeedback-error' => 'Et ass e Feeler geschitt. Probéiert w.e.g. méi spéit nach emol.',
	'articlefeedback-form-switch-label' => 'Dës Säit bewäerten',
	'articlefeedback-form-panel-title' => 'Dës Säit bewäerten',
	'articlefeedback-form-panel-instructions' => 'Huelt Iech w.e.g. een Ament fir d¨s Säit ze bewäerten.',
	'articlefeedback-form-panel-clear' => 'Dës Bewäertung ewechhuelen',
	'articlefeedback-form-panel-expertise' => 'Ech weess gutt iwwer dëse Sujet Bescheed (fakultativ)',
	'articlefeedback-form-panel-expertise-studies' => 'Ech hunn een Ofschloss an der Schoul/op der Universitéit zu deem Sujet',
	'articlefeedback-form-panel-expertise-profession' => 'Et ass en Deel vu mengem Beruff',
	'articlefeedback-form-panel-expertise-hobby' => 'Ech si passionéiert vun deem Sujet',
	'articlefeedback-form-panel-expertise-other' => "D'Quell vu mengem Wëssen ass hei net opgezielt",
	'articlefeedback-form-panel-helpimprove' => 'Ech wëll hëllefe fir {{SITENAME}} ze verbesseren, schéckt mir eng E-Mail (fakultativ)',
	'articlefeedback-form-panel-helpimprove-note' => 'Mir schécken Iech eng Confirmatiouns-E-Mail. Mir ginn Är E-Mailadress u kee weider. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Dateschutz',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Dateschutz',
	'articlefeedback-form-panel-submit' => 'Bewäertunge schécken',
	'articlefeedback-form-panel-success' => 'Gespäichert',
	'articlefeedback-form-panel-expiry-title' => 'Är Bewäertung ass ofgelaf',
	'articlefeedback-form-panel-expiry-message' => 'Bewäert dëse Säit w.e.g. nach emol a späichert déi nei Bewäertung.',
	'articlefeedback-report-switch-label' => 'Bewäertunge vun der Säit weisen',
	'articlefeedback-report-panel-title' => 'Bewäertunge vun der Säit',
	'articlefeedback-report-panel-description' => 'Aktuell duerchschnëttlech Bewäertung.',
	'articlefeedback-report-empty' => 'Keng Bewäertungen',
	'articlefeedback-report-ratings' => '$1 Bewäertungen',
	'articlefeedback-field-trustworthy-label' => 'Vertrauenswürdeg',
	'articlefeedback-field-trustworthy-tip' => 'Hutt Dir den Androck datt dës Säit genuch Zitater huet an datt dës Zitater aus vertrauenswierdege Quelle kommen?',
	'articlefeedback-field-complete-label' => 'Komplett',
	'articlefeedback-field-complete-tip' => 'Hutt dir den Androck datt dës Säit déi wesentlech Aspekter vun dësem Sujet behandelt déi solle beliicht ginn?',
	'articlefeedback-field-objective-label' => 'Net virageholl',
	'articlefeedback-field-objective-tip' => 'Hutt Dir den Androck datt dës Säit eng ausgeglache Presentatioun vun alle Perspektive vun dësem Thema weist?',
	'articlefeedback-field-wellwritten-label' => 'Gutt geschriwwen',
	'articlefeedback-field-wellwritten-tip' => 'Hutt Dir den Androck datt dës Säit gutt organiséiert a gutt geschriwwen ass?',
	'articlefeedback-pitch-reject' => 'Vläicht méi spéit',
	'articlefeedback-pitch-or' => 'oder',
	'articlefeedback-pitch-thanks' => 'Merci! Är Bewäertung gouf gespäichert.',
	'articlefeedback-pitch-survey-message' => 'Huelt Iech w.e.g. een Ament fir eng kuerz Ëmfro auszefëllen.',
	'articlefeedback-pitch-survey-accept' => 'Ëmfro ufänken',
	'articlefeedback-pitch-join-message' => 'Wollt Dir e Benotzerkont opmaachen?',
	'articlefeedback-pitch-join-body' => 'E Benotzerkont hëlleft Iech Är Ännerungen am Aen ze behalen, Iech méi einfach un Diskussiounen ze bedeelegen an en Deel vun der Gemeinschaft ze sinn.',
	'articlefeedback-pitch-join-accept' => 'Benotzerkont opmaachen',
	'articlefeedback-pitch-join-login' => 'Aloggen',
	'articlefeedback-pitch-edit-message' => 'Wosst Dir datt Dir dës Säit ännere kënnt?',
	'articlefeedback-pitch-edit-accept' => 'Dës Säit änneren',
	'articlefeedback-survey-message-success' => "Merci datt Dir d'Ëmfro ausgefëllt hutt.",
	'articlefeedback-survey-message-error' => 'Et ass e Feeler geschitt.
Probéiert w.e.g. méi spéit nach emol.',
	'articleFeedback-table-caption-weeklymostchanged' => 'Déi gréisst Ännerungen an dëser Woch',
	'articleFeedback-table-heading-page' => 'Säit',
	'articleFeedback-table-heading-average' => 'Duerchschnëtt',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'articlefeedback' => 'Paginabeoordeiling',
	'articlefeedback-desc' => 'Paginabeoordeiling (tesversie)',
	'articlefeedback-survey-answer-whyrated-other' => 'Anges',
	'articlefeedback-survey-question-useful-iffalse' => 'Wróm?',
);

/** Lithuanian (Lietuvių)
 * @author Perkunas
 */
$messages['lt'] = array(
	'articlefeedback-form-switch-label' => 'Įvertinti šį puslapį',
	'articlefeedback-form-panel-title' => 'Įvertinti šį puslapį',
	'articlefeedback-form-panel-clear' => 'Pašalinti šį įvertinimą',
	'articlefeedback-report-empty' => 'Nėra vertinimų',
	'articlefeedback-report-ratings' => '$1 vertinimas',
	'articlefeedback-pitch-join-message' => 'Ar norėjote sukurti paskyrą?',
	'articlefeedback-pitch-join-accept' => 'Sukurti paskyrą',
	'articlefeedback-pitch-join-login' => 'Prisijungti',
	'articlefeedback-pitch-edit-message' => 'Ar žinote, kad galite redaguoti šį puslapį?',
	'articlefeedback-pitch-edit-accept' => 'Redaguoti šį puslapį',
	'articlefeedback-survey-message-error' => 'Įvyko klaida.
Pabandykite vėliau.',
);

/** Latvian (Latviešu)
 * @author GreenZeb
 * @author Papuass
 */
$messages['lv'] = array(
	'articlefeedback' => 'Atsauksme par rakstu',
	'articlefeedback-desc' => 'Atsauksme par rakstu',
	'articlefeedback-survey-question-origin' => 'Kādas lapas Jūs apmeklējāt pirms sākāt šo aptauju?',
	'articlefeedback-survey-question-whyrated' => 'Lūdzu pasakiet, kādēļ Jūs šodien novērtējāt šo lapu (atzīmējiet visas atbilstošās atbildes):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Es vēlējos dot ieguldījumu kopējā lapas vērtējumā',
	'articlefeedback-survey-answer-whyrated-development' => 'Es cerēju, ka mans vērtējums pozitīvu ietekmēs lapas tālāku pilnveidošanu',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Es vēlējos dot ieguldījumu {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Man patīk dalīties ar viedokli',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Es šodien neiesniedzu vērtējumu, bet vēlējos dot atsauksmi',
	'articlefeedback-survey-answer-whyrated-other' => 'Cits',
	'articlefeedback-survey-question-useful' => 'Vai Jūs uzskatāt, ka iesniegtie vērtējumi ir lietderīgi un skaidri?',
	'articlefeedback-survey-question-useful-iffalse' => 'Kāpēc?',
	'articlefeedback-survey-question-comments' => 'Vai tev ir kādi papildus komentāri?',
	'articlefeedback-survey-submit' => 'Iesniegt',
	'articlefeedback-survey-title' => 'Lūdzu, atbildi uz dažiem jautājumiem',
	'articlefeedback-survey-thanks' => 'Paldies par piedalīšanos aptaujā.',
	'articlefeedback-error' => 'Radusies kļūda. Lūdzu, mēģiniet vēlāk vēlreiz.',
	'articlefeedback-form-switch-label' => 'Novērtējiet šo lapu',
	'articlefeedback-form-panel-title' => 'Novērtējiet šo lapu',
	'articlefeedback-form-panel-instructions' => 'Lūdzu, veltiet laiku lapas novērtēšanai.',
	'articlefeedback-form-panel-clear' => 'Noņemt šo vērtējumu',
	'articlefeedback-form-panel-expertise' => 'Es esmu ļoti zinošs par šo tēmu (atzīmēt pēc izvēles)',
	'articlefeedback-form-panel-expertise-studies' => 'Man ir attiecīgās jomas augstākās izglītības grāds',
	'articlefeedback-form-panel-expertise-profession' => 'Tā ir daļa no mana amata',
	'articlefeedback-form-panel-expertise-hobby' => 'Tā ir dziļa personiska aizraušanās',
	'articlefeedback-form-panel-expertise-other' => 'Manu zināšanu ieguves veids nav šajā sarakstā',
	'articlefeedback-form-panel-helpimprove' => 'Es vēlētos palīdzēt uzlabot Vikipēdiju, sūtiet man e-pastu (atzīmēt pēc izvēles)',
	'articlefeedback-form-panel-helpimprove-note' => 'Mēs Jums nosūtīsim apstiprinājuma e-pastu. Mēs citām personām nedarīsim zināmu Jūsu adresi. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Privātuma politika',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Privātuma politika',
	'articlefeedback-form-panel-submit' => 'Iesniegt vērtējumus',
	'articlefeedback-form-panel-success' => 'Veiksmīgi saglabāts',
	'articlefeedback-form-panel-expiry-title' => 'Jūsu vērtējuma derīguma termiņš ir beidzies',
	'articlefeedback-form-panel-expiry-message' => 'Lūdzu, pārskatiet šo lapu un iesniedziet jaunus vērtējumus.',
	'articlefeedback-report-switch-label' => 'Skatīt lapas vērtējumus',
	'articlefeedback-report-panel-title' => 'Lapas vērtējumi',
	'articlefeedback-report-panel-description' => 'Pašreizējais vidējais vērtējums.',
	'articlefeedback-report-empty' => 'Nav vērtējumu',
	'articlefeedback-report-ratings' => '$1 vērtējumi',
	'articlefeedback-field-trustworthy-label' => 'Uzticamība',
	'articlefeedback-field-trustworthy-tip' => 'Vai Jums šķiet, ka lapai ir diezgan daudz citātu un ka šie citāti nāk no uzticamiem avotiem?',
	'articlefeedback-field-complete-label' => 'Pabeigtība',
	'articlefeedback-field-complete-tip' => 'Vai Jums šķiet, ka šī lapa apskata visas nepieciešamās temata jomas, ko būtu nepieciešams pieminēt?',
	'articlefeedback-field-objective-label' => 'Objektivitāte',
	'articlefeedback-field-objective-tip' => 'Vai Jums šķiet, ka šī lapa parāda pareizu satura attēlojumu no visiem šī jautājuma skatījumiem?',
	'articlefeedback-field-wellwritten-label' => 'Informācijas izklāsts',
	'articlefeedback-field-wellwritten-tip' => 'Vai Jums šķiet, ka šī lapa ir labi strukturēta un informatīva?',
	'articlefeedback-pitch-reject' => 'Varbūt vēlāk',
	'articlefeedback-pitch-or' => 'vai',
	'articlefeedback-pitch-thanks' => 'Paldies! Jūsu vērtējumi ir saglabāti.',
	'articlefeedback-pitch-survey-message' => 'Lūdzu, veltiet laiku, lai aizpildītu īsu aptauju.',
	'articlefeedback-pitch-survey-accept' => 'Sākt aptauju',
	'articlefeedback-pitch-join-message' => 'Vai vēlaties izveidot kontu?',
	'articlefeedback-pitch-join-body' => 'Konts palīdzēs Jums pārskatīt savus labojumus, sekmīgāk piedalīties diskusijās un iekļauties kopienā.',
	'articlefeedback-pitch-join-accept' => 'Izveidot kontu',
	'articlefeedback-pitch-join-login' => 'Pieteikties',
	'articlefeedback-pitch-edit-message' => 'Vai Jūs zināt, ka varat rediģēt šo lapu?',
	'articlefeedback-pitch-edit-accept' => 'Izmainīt šo lapu',
	'articlefeedback-survey-message-success' => 'Paldies, ka aizpildījās aptauju!',
	'articlefeedback-survey-message-error' => 'Radusies kļūda.
Lūdzu, mēģiniet vēlāk vēlreiz.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Šodienas kāpumi un kritumi',
	'articleFeedback-table-caption-weeklymostchanged' => 'Šajā nedēļā visvairāk mainītie',
	'articleFeedback-table-caption-recentlows' => 'Pēdējie kritumi',
	'articleFeedback-table-heading-page' => 'Lapa',
	'articleFeedback-table-heading-average' => 'Vidēji',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'articlefeedback' => 'Оценување на статија',
	'articlefeedback-desc' => 'Пилотна верзија на Оценување на статија',
	'articlefeedback-survey-question-origin' => 'На која страница бевте кога ја започнавте анкетава?',
	'articlefeedback-survey-question-whyrated' => 'Кажете ни зошто ја оценивте страницава денес (штиклирајте ги сите релевантни одговори)',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Сакав да придонесам кон севкупната оцена на страницата',
	'articlefeedback-survey-answer-whyrated-development' => 'Се надевам дека мојата оценка ќе влијае позитивно на развојот на страницата',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Сакав да придонесам кон {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Сакам да го искажувам моето мислење',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Не оценував денес, туку сакав да искажам мое мислење за функцијата',
	'articlefeedback-survey-answer-whyrated-other' => 'Друго',
	'articlefeedback-survey-question-useful' => 'Дали сметате дека дадените оценки се полезни и јасни?',
	'articlefeedback-survey-question-useful-iffalse' => 'Зошто?',
	'articlefeedback-survey-question-comments' => 'Имате некои други забелешки?',
	'articlefeedback-survey-submit' => 'Поднеси',
	'articlefeedback-survey-title' => 'Ве молиме одговорете на неколку прашања',
	'articlefeedback-survey-thanks' => 'Ви благодариме што ја пополнивте анкетата.',
	'articlefeedback-error' => 'Се појави грешка. Обидете се повторно.',
	'articlefeedback-form-switch-label' => 'Оценете ја страницава',
	'articlefeedback-form-panel-title' => 'Оценете ја страницава',
	'articlefeedback-form-panel-instructions' => 'Одвојте момент за да ја оцените страницава.',
	'articlefeedback-form-panel-clear' => 'Отстрани ја оценкава',
	'articlefeedback-form-panel-expertise' => 'Имам големи познавања на оваа тематика (незадолжително)',
	'articlefeedback-form-panel-expertise-studies' => 'Имам релевантно више/факултетско образование',
	'articlefeedback-form-panel-expertise-profession' => 'Ова е во полето на мојата професија',
	'articlefeedback-form-panel-expertise-hobby' => 'Ова е моја длабока лична пасија',
	'articlefeedback-form-panel-expertise-other' => 'Изворот на моите сознанија не е наведен тука',
	'articlefeedback-form-panel-helpimprove' => 'Сакам да помогнам во подобрувањето на Википедија - испратете ми е-пошта (незадолжително)',
	'articlefeedback-form-panel-helpimprove-note' => 'Ќе ви испратиме порака за потврда. Вашата адреса не ја даваме никому. $1',
	'articlefeedback-form-panel-helpimprove-email-placeholder' => 'eposta@primer.org',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Заштита на личните податоци',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Заштита на личните податоци',
	'articlefeedback-form-panel-submit' => 'Поднеси оценки',
	'articlefeedback-form-panel-success' => 'Успешно зачувано',
	'articlefeedback-form-panel-expiry-title' => 'Вашите оценки истекоа',
	'articlefeedback-form-panel-expiry-message' => 'Прегледајте ја страницава повторно и дајте ѝ нови оценки.',
	'articlefeedback-report-switch-label' => 'Оценки за страницата',
	'articlefeedback-report-panel-title' => 'Оценки за страницата',
	'articlefeedback-report-panel-description' => 'Тековни просечи оценки.',
	'articlefeedback-report-empty' => 'Нема оценки',
	'articlefeedback-report-ratings' => '$1 оценки',
	'articlefeedback-field-trustworthy-label' => 'Веродостојност',
	'articlefeedback-field-trustworthy-tip' => 'Дали сметате дека страницава има доволно наводи и дека изворите се веродостојни?',
	'articlefeedback-field-complete-label' => 'Исцрпност',
	'articlefeedback-field-complete-tip' => 'Дали сметате дека статијава ги обработува најважните основни теми што треба да се обработат?',
	'articlefeedback-field-objective-label' => 'Непристрасност',
	'articlefeedback-field-objective-tip' => 'Дали сметате дека статијава на праведен начин ги застапува сите гледишта по оваа проблематика?',
	'articlefeedback-field-wellwritten-label' => 'Добро напишана',
	'articlefeedback-field-wellwritten-tip' => 'Дали сметате дека страницава е добро организирана и убаво напишана?',
	'articlefeedback-pitch-reject' => 'Можеби подоцна',
	'articlefeedback-pitch-or' => 'или',
	'articlefeedback-pitch-thanks' => 'Ви благодариме! Вашите оценки се зачувани.',
	'articlefeedback-pitch-survey-message' => 'Пополнете ја оваа кратка анкета.',
	'articlefeedback-pitch-survey-accept' => 'Почни',
	'articlefeedback-pitch-join-message' => 'Дали сакате да создадете сметка?',
	'articlefeedback-pitch-join-body' => 'Ако имате сметка ќе можете да ги следите вашите уредувања, да се вклучувате во дискусии и да бидете дел од заедницата',
	'articlefeedback-pitch-join-accept' => 'Создај сметка',
	'articlefeedback-pitch-join-login' => 'Најавете се',
	'articlefeedback-pitch-edit-message' => 'Дали знаете дека можете да ја уредите страницава?',
	'articlefeedback-pitch-edit-accept' => 'Уреди ја страницава',
	'articlefeedback-survey-message-success' => 'Ви благодариме што ја пополнивте анкетата.',
	'articlefeedback-survey-message-error' => 'Се појави грешка.
Обидете се подоцна.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Издигања и падови за денес',
	'articleFeedback-table-caption-weeklymostchanged' => 'Најизменети за неделава',
	'articleFeedback-table-caption-recentlows' => 'Скорешни падови',
	'articleFeedback-table-heading-page' => 'Страница',
	'articleFeedback-table-heading-average' => 'Просечно',
	'articlefeedback-emailcapture-response-body' => 'Здраво!

Ви благодариме што изразивте интерес да помогнете во развојот на {{SITENAME}}.

Потврдете ја вашата е-пошта на следнава врска: 

$1

Можете да ја посетите и страницата:

$2

Внесете го следниов потврден кон:

$3

Набргу ќе ви пишеме како можете да помогнете во подобрувањето на {{SITENAME}}.

Ако го немате побарано ова, занемарате ја поракава, и ние повеќе ништо нема да ви испраќаме.

Ви благодариме и сè најдобро,
Екипата на {{SITENAME}}',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'articlefeedback' => 'ലേഖനത്തിന്റെ മൂല്യനിർണ്ണയം',
	'articlefeedback-desc' => 'ലേഖനത്തിന്റെ മൂല്യനിർണ്ണയം (പ്രാരംഭ പതിപ്പ്)',
	'articlefeedback-survey-question-origin' => 'താങ്കൾ ഈ സർവേ ഉപയോഗിക്കാൻ തുടങ്ങിയപ്പോൾ ഏത് താളിലായിരുന്നു?',
	'articlefeedback-survey-question-whyrated' => 'ഈ താളിന് താങ്കൾ ഇന്ന് നിലവാരമിട്ടതെന്തുകൊണ്ടാണെന്ന് ദയവായി പറയാമോ (ബാധകമാകുന്ന എല്ലാം തിരഞ്ഞെടുക്കുക):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'താളിന്റെ ആകെ നിലവാരം നിർണ്ണയിക്കാൻ ഞാനാഗ്രഹിക്കുന്നു',
	'articlefeedback-survey-answer-whyrated-development' => 'ഞാനിട്ട നിലവാരം താളിന്റെ വികസനത്തിൽ ക്രിയാത്മകമായ ഫലങ്ങൾ സൃഷ്ടിക്കുമെന്ന് കരുതുന്നു',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'ഞാൻ {{SITENAME}} സംരംഭത്തിൽ സംഭാവന ചെയ്യാൻ ആഗ്രഹിക്കുന്നു',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'എന്റെ അഭിപ്രായം പങ്ക് വെയ്ക്കുന്നതിൽ സന്തോഷമേയുള്ളു',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'ഞാനിന്ന് നിലവാരനിർണ്ണയം നടത്തിയിട്ടില്ല, പക്ഷേ ഈ സൗകര്യം സംബന്ധിച്ച അഭിപ്രായം അറിയിക്കാൻ ആഗ്രഹിക്കുന്നു',
	'articlefeedback-survey-answer-whyrated-other' => 'മറ്റുള്ളവ',
	'articlefeedback-survey-question-useful' => 'നൽകിയിരിക്കുന്ന നിലവാരം ഉപകാരപ്രദവും വ്യക്തവുമാണെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-survey-question-useful-iffalse' => 'എന്തുകൊണ്ട്?',
	'articlefeedback-survey-question-comments' => 'താങ്കൾക്ക് മറ്റെന്തെങ്കിലും അഭിപ്രായങ്ങൾ പങ്ക് വെയ്ക്കാനുണ്ടോ?',
	'articlefeedback-survey-submit' => 'സമർപ്പിക്കുക',
	'articlefeedback-survey-title' => 'ദയവായി ഏതാനം ചോദ്യങ്ങൾക്ക് ഉത്തരം നൽകുക',
	'articlefeedback-survey-thanks' => 'സർവേ പൂരിപ്പിച്ചതിനു നന്ദി',
	'articlefeedback-error' => 'എന്തോ പിഴവുണ്ടായിരിക്കുന്നു. ദയവായി പിന്നീട് വീണ്ടും ശ്രമിക്കുക.',
	'articlefeedback-form-switch-label' => 'ഈ താളിനു നിലവാരമിടുക',
	'articlefeedback-form-panel-title' => 'ഈ താളിനു നിലവാരമിടുക',
	'articlefeedback-form-panel-instructions' => 'താഴെ ഈ താളിന്റെ മൂല്യനിർണ്ണയം നടത്താൻ ഒരു നിമിഷം ചിലവാക്കുക.',
	'articlefeedback-form-panel-clear' => 'ഈ നിലവാരമിടൽ നീക്കം ചെയ്യുക',
	'articlefeedback-form-panel-expertise' => 'എനിക്ക് ഈ വിഷയത്തിൽ വളരെ അറിവുണ്ട് (ഐച്ഛികം)',
	'articlefeedback-form-panel-expertise-studies' => 'എനിക്ക് ബന്ധപ്പെട്ട വിഷയത്തിൽ കലാലയ/യൂണിവേഴ്സിറ്റി ബിരുദമുണ്ട്',
	'articlefeedback-form-panel-expertise-profession' => 'ഇതെന്റെ ജോലിയുടെ ഭാഗമാണ്',
	'articlefeedback-form-panel-expertise-hobby' => 'ഇതെനിക്ക് അഗാധ താത്പര്യമുള്ളവയിൽ പെടുന്നു',
	'articlefeedback-form-panel-expertise-other' => 'എന്റെ അറിവിന്റെ ഉറവിടം ഇവിടെ നൽകിയിട്ടില്ല',
	'articlefeedback-form-panel-helpimprove' => 'വിക്കിപീഡിയ മെച്ചപ്പെടുത്താൻ ഞാനാഗ്രഹിക്കുന്നു, ഇമെയിൽ അയച്ചു തരിക (ഐച്ഛികം)',
	'articlefeedback-form-panel-helpimprove-note' => 'ഞങ്ങൾ താങ്കൾക്ക് ഒരു സ്ഥിരീകരണ ഇമെയിൽ അയയ്ക്കുന്നതാണ്. താങ്കളുടെ വിലാസം ആരുമായും പങ്കുവെയ്ക്കുന്നതല്ല. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'സ്വകാര്യതാനയം',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:സ്വകാര്യതാനയം',
	'articlefeedback-form-panel-submit' => 'നിലവാരമിടലുകൾ സമർപ്പിക്കുക',
	'articlefeedback-form-panel-success' => 'വിജയകരമായി സേവ് ചെയ്തിരിക്കുന്നു',
	'articlefeedback-form-panel-expiry-title' => 'താങ്കളിട്ട നിലവാരങ്ങൾ കാലഹരണപ്പെട്ടിരിക്കുന്നു',
	'articlefeedback-form-panel-expiry-message' => 'ദയവായി ഈ താൾ പുനർമൂല്യനിർണ്ണയം ചെയ്ത് പുതിയ നിലവാരമിടലുകൾ സമർപ്പിക്കുക.',
	'articlefeedback-report-switch-label' => 'ഈ താളിനു ലഭിച്ച നിലവാരം കാണുക',
	'articlefeedback-report-panel-title' => 'താളിന്റെ നിലവാരം',
	'articlefeedback-report-panel-description' => 'ഇപ്പോഴത്തെ നിലവാരമിടലുകളുടെ ശരാശരി.',
	'articlefeedback-report-empty' => 'നിലവാരമിടലുകൾ ഒന്നുമില്ല',
	'articlefeedback-report-ratings' => '$1 നിലവാരമിടലുകൾ',
	'articlefeedback-field-trustworthy-label' => 'വിശ്വാസയോഗ്യം',
	'articlefeedback-field-trustworthy-tip' => 'ഈ താളിൽ വിശ്വസനീയങ്ങളായ സ്രോതസ്സുകളെ ആശ്രയിക്കുന്ന ആവശ്യമായത്ര അവലംബങ്ങൾ ഉണ്ടെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-field-complete-label' => 'സമ്പൂർണ്ണം',
	'articlefeedback-field-complete-tip' => 'ഈ താൾ അത് ഉൾക്കൊള്ളേണ്ട എല്ലാ മേഖലകളും ഉൾക്കൊള്ളുന്നതായി താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-field-objective-label' => 'പക്ഷപാതരഹിതം',
	'articlefeedback-field-objective-tip' => 'ഈ താളിൽ വിഷയത്തിന്റെ എല്ലാ വശത്തിനും അർഹമായ പ്രാതിനിധ്യം ലഭിച്ചതായി താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-field-wellwritten-label' => 'നന്നായി രചിച്ചത്',
	'articlefeedback-field-wellwritten-tip' => 'ഈ താൾ നന്നായി ക്രമീകരിക്കപ്പെട്ടതും നന്നായി എഴുതപ്പെട്ടതുമാണെന്ന് താങ്കൾ കരുതുന്നുണ്ടോ?',
	'articlefeedback-pitch-reject' => 'പിന്നീട് ആലോചിക്കാം',
	'articlefeedback-pitch-or' => 'അഥവാ',
	'articlefeedback-pitch-thanks' => 'നന്ദി! താങ്കൾ നടത്തിയ മൂല്യനിർണ്ണയം സേവ് ചെയ്തിരിക്കുന്നു.',
	'articlefeedback-pitch-survey-message' => 'ഈ ചെറിയ സർവ്വേ പൂർത്തിയാക്കാൻ ഒരു നിമിഷം ചിലവഴിക്കുക.',
	'articlefeedback-pitch-survey-accept' => 'സർവ്വേ തുടങ്ങുക',
	'articlefeedback-pitch-join-message' => 'താങ്കൾക്കും അംഗത്വം എടുക്കണമെന്നില്ലേ?',
	'articlefeedback-pitch-join-body' => 'അംഗത്വമെടുക്കുന്നത് താങ്കളുടെ തിരുത്തലുകൾ പിന്തുടരാനും, ചർച്ചകളിൽ പങ്കാളിയാകാനും, സമൂഹത്തിന്റെ ഭാഗമാകാനും സഹായമാകും.',
	'articlefeedback-pitch-join-accept' => 'അംഗത്വമെടുക്കുക',
	'articlefeedback-pitch-join-login' => 'പ്രവേശിക്കുക',
	'articlefeedback-pitch-edit-message' => 'ഈ താൾ തിരുത്താനാവും എന്ന് താങ്കൾക്കറിയാമോ?',
	'articlefeedback-pitch-edit-accept' => 'ഈ താൾ തിരുത്തുക',
	'articlefeedback-survey-message-success' => 'സർവേ പൂരിപ്പിച്ചതിനു നന്ദി',
	'articlefeedback-survey-message-error' => 'എന്തോ പിഴവുണ്ടായിരിക്കുന്നു.
ദയവായി വീണ്ടും ശ്രമിക്കുക.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'ഇന്നത്തെ കയറ്റിറക്കങ്ങൾ',
	'articleFeedback-table-caption-weeklymostchanged' => 'ഈ ആഴ്ചയിൽ ഏറ്റവുമധികം മാറിയത്',
	'articleFeedback-table-caption-recentlows' => 'സമീപകാല ഇറക്കങ്ങൾ',
	'articleFeedback-table-heading-page' => 'താൾ',
	'articleFeedback-table-heading-average' => 'ശരാശരി',
	'articlefeedback-emailcapture-response-body' => 'നമസ്കാരം!

{{SITENAME}} മെച്ചപ്പെടുത്താനുള്ള സഹായം ചെയ്യാൻ സന്നദ്ധത പ്രകടിപ്പിച്ചതിന് ആത്മാർത്ഥമായ നന്ദി.

താഴെ നൽകിയിരിക്കുന്ന കണ്ണിയിൽ ഞെക്കി താങ്കളുടെ ഇമെയിൽ ദയവായി സ്ഥിരീകരിക്കുക: 

$1

താങ്കൾക്ക് ഇതും സന്ദർശിക്കാവുന്നതാണ്:

$2

എന്നിട്ട് താഴെ കൊടുത്തിരിക്കുന്ന സ്ഥിരീകരണ കോഡ് നൽകുക:

$3

{{SITENAME}} സംരംഭം മെച്ചപ്പെടുത്താൻ താങ്കൾക്ക് എങ്ങനെ സഹായിക്കാനാകും എന്ന് തീരുമാനിക്കാൻ ഞങ്ങൾ താങ്കളുമായി ഉടനെ ബന്ധപ്പെടുന്നതായിരിക്കും.

താങ്കളുടെ ഇച്ഛ പ്രകാരം അല്ല ഈ അഭ്യർത്ഥനയെങ്കിൽ, ഈ ഇമെയിൽ അവഗണിക്കുക, ഞങ്ങൾ താങ്കൾക്ക് പിന്നീടൊന്നും അയച്ച് ബുദ്ധിമുട്ടിയ്ക്കില്ല.

ആശംസകൾ, നന്ദി,
{{SITENAME}} സ്നേഹിതർ',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'articlefeedback-survey-submit' => 'Явуулах',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aviator
 */
$messages['ms'] = array(
	'articlefeedback' => 'Pentaksiran rencana',
	'articlefeedback-desc' => 'Pentaksiran rencana (versi percubaan)',
	'articlefeedback-survey-answer-whyrated-other' => 'Lain',
	'articlefeedback-survey-question-useful-iffalse' => 'Мезекс?',
	'articlefeedback-survey-submit' => 'Serahkan',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'articlefeedback-survey-answer-whyrated-other' => 'Лия',
	'articlefeedback-survey-question-useful-iffalse' => 'Мезекс?',
	'articlefeedback-survey-submit' => 'Максомс',
	'articlefeedback-field-wellwritten-label' => 'Парсте сёрмадозь',
	'articlefeedback-pitch-or' => 'эли',
	'articlefeedback-pitch-edit-accept' => 'Витнемс-петнемс те лопанть',
	'articleFeedback-table-heading-page' => 'Лопазо',
);

/** Nahuatl (Nāhuatl)
 * @author Teòtlalili
 */
$messages['nah'] = array(
	'articlefeedback-pitch-or' => 'nòso',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam Rhk
 */
$messages['ne'] = array(
	'articlefeedback-survey-question-useful-iffalse' => 'किन?',
	'articlefeedback-survey-question-comments' => 'तपाईंसित अरु कुनै अतिरिक्त टिप्पणीहरु छन्?',
	'articlefeedback-survey-submit' => 'बुझाउने',
	'articlefeedback-form-panel-title' => 'यस पृष्ठको मूल्य निर्धारण गर्ने',
	'articlefeedback-form-panel-success' => 'सफलता पूर्वक संग्रह गरियो',
	'articlefeedback-field-trustworthy-label' => 'विश्वस्त',
	'articlefeedback-field-complete-label' => 'पूर्ण',
	'articlefeedback-pitch-or' => 'अथवा',
	'articlefeedback-pitch-survey-accept' => 'सर्वेक्षण सुरु गर्ने',
	'articlefeedback-pitch-join-message' => 'के  तपाईं खाता बनाउन चाहनुहुन्थ्यो?',
	'articlefeedback-pitch-join-accept' => 'खाता खोल्ने',
	'articlefeedback-pitch-join-login' => 'प्रवेश गर्ने',
	'articlefeedback-pitch-edit-message' => 'तपाईं यो पृष्ठलाई सम्पादन गर्न सक्नुहुन्छ भनेर  तपाईंलाई थाह थियो?',
	'articlefeedback-pitch-edit-accept' => 'यो पृष्ट सम्पादन गर्ने',
	'articlefeedback-survey-message-success' => 'सर्वेक्षण भर्नु भएकोमा धन्यवाद',
	'articlefeedback-survey-message-error' => 'एउटा त्रुटि भएकोछ
कृपया फेरि प्रयास गर्नुहोस्।',
);

/** Dutch (Nederlands)
 * @author Catrope
 * @author McDutchie
 * @author Siebrand
 */
$messages['nl'] = array(
	'articlefeedback' => 'Paginabeoordeling',
	'articlefeedback-desc' => 'Paginabeoordeling (testversie)',
	'articlefeedback-survey-question-origin' => 'Op welke pagina was u toen u aan deze vragenlijst bent begonnen?',
	'articlefeedback-survey-question-whyrated' => 'Laat ons weten waarom u deze pagina vandaag hebt beoordeeld (kies alle redenen die van toepassing zijn):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Ik wil bijdragen aan de beoordelingen van de pagina',
	'articlefeedback-survey-answer-whyrated-development' => 'Ik hoop dat mijn beoordeling een positief effect heeft op de ontwikkeling van de pagina',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Ik wilde bijdragen aan {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Ik vind het fijn om mijn mening te delen',
	'articlefeedback-survey-answer-whyrated-didntrate' => "Ik heb vandaag geen pagina's beoordeeld, maar in de toekomst wil ik wel terugkoppeling geven",
	'articlefeedback-survey-answer-whyrated-other' => 'Anders',
	'articlefeedback-survey-question-useful' => 'Vindt u dat de beoordelingen bruikbaar en duidelijk zijn?',
	'articlefeedback-survey-question-useful-iffalse' => 'Waarom?',
	'articlefeedback-survey-question-comments' => 'Hebt u nog opmerkingen?',
	'articlefeedback-survey-submit' => 'Opslaan',
	'articlefeedback-survey-title' => 'Beantwoord alstublieft een paar vragen',
	'articlefeedback-survey-thanks' => 'Bedankt voor het beantwoorden van de vragen.',
	'articlefeedback-error' => 'Er is een fout opgetreden.
Probeer het later opnieuw.',
	'articlefeedback-form-switch-label' => 'Deze pagina waarderen',
	'articlefeedback-form-panel-title' => 'Deze pagina waarderen',
	'articlefeedback-form-panel-instructions' => 'Geef alstublieft een beoordeling van deze pagina.',
	'articlefeedback-form-panel-clear' => 'Deze beoordeling verwijderen',
	'articlefeedback-form-panel-expertise' => 'Ik ben zeer goed geïnformeerd over dit onderwerp (optioneel)',
	'articlefeedback-form-panel-expertise-studies' => 'Ik heb een relevante opleiding gevolgd op HBO/WO-niveau',
	'articlefeedback-form-panel-expertise-profession' => 'Dit onderwerp is onderdeel van mijn beroep',
	'articlefeedback-form-panel-expertise-hobby' => 'Dit is een diepgevoelde persoonlijke passie',
	'articlefeedback-form-panel-expertise-other' => 'De bron van mijn kennis is geen keuzeoptie',
	'articlefeedback-form-panel-helpimprove' => 'Ik wil graag helpen Wikipedia te verbeteren, stuur me een e-mail (optioneel)',
	'articlefeedback-form-panel-helpimprove-note' => 'We sturen u een bevestigingse-mail. We delen uw adres verder met niemand. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Privacybeleid',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Privacybeleid',
	'articlefeedback-form-panel-submit' => 'Beoordelingen opslaan',
	'articlefeedback-form-panel-success' => 'Opgeslagen',
	'articlefeedback-form-panel-expiry-title' => 'Uw beoordelingen zijn verlopen',
	'articlefeedback-form-panel-expiry-message' => 'Beoordeel deze pagina alstublieft opnieuw en sla uw beoordeling op.',
	'articlefeedback-report-switch-label' => 'Paginawaarderingen weergeven',
	'articlefeedback-report-panel-title' => 'Paginawaarderingen',
	'articlefeedback-report-panel-description' => 'Huidige gemiddelde beoordelingen.',
	'articlefeedback-report-empty' => 'Geen beoordelingen',
	'articlefeedback-report-ratings' => '$1 beoordelingen',
	'articlefeedback-field-trustworthy-label' => 'Betrouwbaar',
	'articlefeedback-field-trustworthy-tip' => 'Vindt u dat deze pagina voldoende bronvermeldingen heeft en dat de bronvermeldingen betrouwbaar zijn?',
	'articlefeedback-field-complete-label' => 'Afgerond',
	'articlefeedback-field-complete-tip' => 'Vindt u dat deze pagina de essentie van dit onderwerp bestrijkt?',
	'articlefeedback-field-objective-label' => 'Onbevooroordeeld',
	'articlefeedback-field-objective-tip' => 'Vindt u dat deze pagina een eerlijke weergave is van alle invalshoeken voor dit onderwerp?',
	'articlefeedback-field-wellwritten-label' => 'Goed geschreven',
	'articlefeedback-field-wellwritten-tip' => 'Vindt u dat deze pagina een correcte opbouw heeft een goed is geschreven?',
	'articlefeedback-pitch-reject' => 'Nu niet',
	'articlefeedback-pitch-or' => 'of',
	'articlefeedback-pitch-thanks' => 'Bedankt!
Uw beoordeling is opgeslagen.',
	'articlefeedback-pitch-survey-message' => 'Neem alstublieft even de tijd om een korte vragenlijst in te vullen.',
	'articlefeedback-pitch-survey-accept' => 'Vragenlijst starten',
	'articlefeedback-pitch-join-message' => 'Wilt u een gebruiker aanmaken?',
	'articlefeedback-pitch-join-body' => 'Als u een gebruiker hebt, kunt u uw bewerkingen beter volgen, meedoen aan overleg en een vollediger onderdeel zijn van de gemeenschap.',
	'articlefeedback-pitch-join-accept' => 'Gebruiker aanmaken',
	'articlefeedback-pitch-join-login' => 'Aanmelden',
	'articlefeedback-pitch-edit-message' => 'Wist u dat u deze pagina kunt bewerken?',
	'articlefeedback-pitch-edit-accept' => 'Deze pagina bewerken',
	'articlefeedback-survey-message-success' => 'Bedankt voor het beantwoorden van de vragen.',
	'articlefeedback-survey-message-error' => 'Er is een fout opgetreden.
Probeer het later opnieuw.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Hoogte- en dieptepunten van vandaag',
	'articleFeedback-table-caption-weeklymostchanged' => 'Deze week de meeste wijzigingen',
	'articleFeedback-table-caption-recentlows' => 'Recente dieptepunten',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Gemiddelde',
	'articlefeedback-emailcapture-response-body' => 'Hallo!

Dank u wel voor uw interesse in het verbeteren van {{SITENAME}}.

Bevestig alstublieft uw e-mailadres door op de volgende verwijziging te klikken:

$1

U kunt ook gaan naar:

$2

En daar de volgende bevestigingscode invoeren:

$3

We nemen binnenkort contact met u op over hoe u kunt helpen {{SITENAME}} te verbeteren.

Als u niet hebt gevraagd om dit bericht, negeer deze e-mail dan en dan krijgt u geen e-mail meer van ons.

Dank u!

Met vriendelijke groet,

Het team van {{SITENAME}}',
);

/** ‪Nederlands (informeel)‬ (‪Nederlands (informeel)‬)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'articlefeedback-survey-question-origin' => 'Op welke pagina was je toen je aan deze vragenlijst bent begonnen?',
	'articlefeedback-survey-question-whyrated' => 'Laat ons weten waarom je deze pagina vandaag hebt beoordeeld (kies alle redenen die van toepassing zijn):',
	'articlefeedback-survey-question-useful' => 'Vind je dat de beoordelingen bruikbaar en duidelijk zijn?',
	'articlefeedback-survey-question-comments' => 'Hebt je nog opmerkingen?',
	'articlefeedback-form-panel-helpimprove-note' => 'We sturen je een bevestigingse-mail. We delen je adres verder met niemand. $1',
	'articlefeedback-form-panel-expiry-title' => 'Je beoordelingen zijn verlopen',
	'articlefeedback-field-trustworthy-tip' => 'Vind je dat deze pagina voldoende bronvermeldingen heeft en dat de bronvermeldingen betrouwbaar zijn?',
	'articlefeedback-field-complete-tip' => 'Vind je dat deze pagina de essentie van dit onderwerp bestrijkt?',
	'articlefeedback-field-objective-tip' => 'Vind je dat deze pagina een eerlijke weergave is van alle invalshoeken voor dit onderwerp?',
	'articlefeedback-field-wellwritten-tip' => 'Vind je dat deze pagina een correcte opbouw heeft een goed is geschreven?',
	'articlefeedback-pitch-thanks' => 'Bedankt!
Je beoordeling is opgeslagen.',
	'articlefeedback-pitch-join-message' => 'Wil je een gebruiker aanmaken?',
	'articlefeedback-pitch-join-body' => 'Als je een gebruiker hebt, kan je je bewerkingen beter volgen, meedoen aan overleg en een vollediger onderdeel zijn van de gemeenschap.',
	'articlefeedback-pitch-edit-message' => 'Wist je dat je deze pagina kunt bewerken?',
	'articlefeedback-emailcapture-response-body' => 'Hallo!

Dank je wel voor je interesse in het verbeteren van {{SITENAME}}.

Bevestig alsjeblieft je e-mailadres door op de volgende verwijziging te klikken:

$1

Je kunt ook gaan naar:

$2

En daar de volgende bevestigingscode invoeren:

$3

We nemen binnenkort contact met je op over hoe u kunt helpen {{SITENAME}} te verbeteren.

Als je niet hebt gevraagd om dit bericht, negeer deze e-mail dan en dan krijg je geen e-mail meer van ons.

Dank je!

Groetjes,

Het team van {{SITENAME}}',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Nghtwlkr
 */
$messages['nn'] = array(
	'articlefeedback-survey-question-useful-iffalse' => 'Kvifor?',
	'articlefeedback-survey-submit' => 'Send',
	'articlefeedback-pitch-or' => 'eller',
	'articlefeedback-pitch-join-login' => 'Logg inn',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 * @author Sjurhamre
 */
$messages['no'] = array(
	'articlefeedback' => 'Artikkelvurdering',
	'articlefeedback-desc' => 'Artikkelvurdering (pilotversjon)',
	'articlefeedback-survey-question-origin' => 'Hvilken side var du på når du startet denne undersøkelsen?',
	'articlefeedback-survey-question-whyrated' => 'Gi oss beskjed om hvorfor du vurderte denne siden idag (huk av alle som passer):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Jeg ønsket å bidra til den generelle vurderingen av denne siden',
	'articlefeedback-survey-answer-whyrated-development' => 'Jeg håper at min vurdering vil påvirke utviklingen av siden positivt',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Jeg ønsket å bidra til {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Jeg liker å dele min mening',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Jeg ga ingen vurderinger idag, men ønsket å gi tilbakemelding på denne funksjonen',
	'articlefeedback-survey-answer-whyrated-other' => 'Annet',
	'articlefeedback-survey-question-useful' => 'Tror du at vurderingene som blir gitt er nyttige og klare?',
	'articlefeedback-survey-question-useful-iffalse' => 'Hvorfor?',
	'articlefeedback-survey-question-comments' => 'Har du noen ytterligere kommentarer?',
	'articlefeedback-survey-submit' => 'Send',
	'articlefeedback-survey-title' => 'Svar på noen få spørsmål',
	'articlefeedback-survey-thanks' => 'Takk for at du fylte ut undersøkelsen.',
	'articlefeedback-error' => 'En feil har oppstått. Prøv igjen senere.',
	'articlefeedback-form-switch-label' => 'Vurder denne siden',
	'articlefeedback-form-panel-title' => 'Vurder denne siden',
	'articlefeedback-form-panel-instructions' => 'Ta deg tid til å vurdere denne siden.',
	'articlefeedback-form-panel-clear' => 'Fjern denne vurderingen',
	'articlefeedback-form-panel-expertise' => 'Jeg er svært kunnskapsrik på dette området (valgfritt)',
	'articlefeedback-form-panel-expertise-studies' => 'Jeg har en relevant høyskole-/universitetsgrad',
	'articlefeedback-form-panel-expertise-profession' => 'Det er en del av yrket mitt',
	'articlefeedback-form-panel-expertise-hobby' => 'Det er en dypt personlig hobby/lidenskap',
	'articlefeedback-form-panel-expertise-other' => 'Kilden til min kunnskap er ikke listet opp her',
	'articlefeedback-form-panel-helpimprove' => 'Jeg ønsker å bidra til å forbedre Wikipedia, send meg en e-post (valgfritt)',
	'articlefeedback-form-panel-helpimprove-note' => 'Vi vil sende deg en bekreftelse på e-post. Vi vil ikke dele adressen din med noen andre. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Retningslinjer for personvern',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Retningslinjer for personvern',
	'articlefeedback-form-panel-submit' => 'Send vurdering',
	'articlefeedback-form-panel-success' => 'Lagret',
	'articlefeedback-form-panel-expiry-title' => 'Vurderingen din har utløpt',
	'articlefeedback-form-panel-expiry-message' => 'Revurder denne siden og send inn din nye vurdering.',
	'articlefeedback-report-switch-label' => 'Vis sidevurderinger',
	'articlefeedback-report-panel-title' => 'Sidevurderinger',
	'articlefeedback-report-panel-description' => 'Gjeldende gjennomsnittskarakter.',
	'articlefeedback-report-empty' => 'Ingen vurderinger',
	'articlefeedback-report-ratings' => '$1 vurderinger',
	'articlefeedback-field-trustworthy-label' => 'Pålitelig',
	'articlefeedback-field-trustworthy-tip' => 'Føler du at denne siden har tilstrekkelig med siteringer og at disse siteringene kommer fra pålitelige kilder?',
	'articlefeedback-field-complete-label' => 'Fullfør',
	'articlefeedback-field-complete-tip' => 'Føler du at denne siden dekker de vesentlige emneområdene som den burde?',
	'articlefeedback-field-objective-label' => 'Objektiv',
	'articlefeedback-field-objective-tip' => 'Føler du at denne siden viser en rettferdig representasjon av alle perspektiv på problemet?',
	'articlefeedback-field-wellwritten-label' => 'Velskrevet',
	'articlefeedback-field-wellwritten-tip' => 'Føler du at denne siden er godt organisert og godt skrevet?',
	'articlefeedback-pitch-reject' => 'Kanskje senere',
	'articlefeedback-pitch-or' => 'eller',
	'articlefeedback-pitch-thanks' => 'Takk. Dine vurderinger har blitt lagret.',
	'articlefeedback-pitch-survey-message' => 'Ta et øyeblikk til å fullføre en kort undersøkelse.',
	'articlefeedback-pitch-survey-accept' => 'Start undersøkelsen',
	'articlefeedback-pitch-join-message' => 'Ville du opprette en konto?',
	'articlefeedback-pitch-join-body' => 'En konto hjelper deg å spore dine endringer, bli involvert i diskusjoner og være en del av fellesskapet.',
	'articlefeedback-pitch-join-accept' => 'Opprett konto',
	'articlefeedback-pitch-join-login' => 'Logg inn',
	'articlefeedback-pitch-edit-message' => 'Visste du at du kan redigere denne siden?',
	'articlefeedback-pitch-edit-accept' => 'Rediger denne siden',
	'articlefeedback-survey-message-success' => 'Takk for at du fylte ut undersøkelsen.',
	'articlefeedback-survey-message-error' => 'En feil har oppstått.
Prøv igjen senere.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dagens oppturer og nedturer',
	'articleFeedback-table-caption-weeklymostchanged' => 'Mest endret denne uken',
	'articleFeedback-table-caption-recentlows' => 'Ukens nedturer',
	'articleFeedback-table-heading-page' => 'Side',
	'articleFeedback-table-heading-average' => 'Gjennomsnitt',
	'articlefeedback-emailcapture-response-body' => 'Hei!

Takk for din interesse i å hjelpe oss med å forbedre {{SITENAME}}. Vennligst bekreft e-posten din ved å klikke på lenken under:

$1

Du kan også besøke:

$2

Og angi følgende bekreftelseskode:

$3

Vi tar snart kontakt for å forklare hvordan du kan forbedre {{SITENAME}}.

Om du ikke har bedt om denne e-posten, vennligst ignorer den. Den blir i så fall den siste du får fra oss.


Takk skal du ha og lykke til!

Hilsen {{SITENAME}}-teamet',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Odisha1
 */
$messages['or'] = array(
	'articlefeedback-survey-submit' => 'ଦାଖଲକରିବା',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'articlefeedback' => 'Ocena artykułu',
	'articlefeedback-desc' => 'Ocena artykułu (wersja pilotażowa)',
	'articlefeedback-survey-question-origin' => 'Na jakie strony {{GENDER:|wchodziłeś|wchodziłaś}} od momentu rozpoczęcia ankiety?',
	'articlefeedback-survey-question-whyrated' => 'Dlaczego oceniłeś dziś tę stronę (zaznacz wszystkie pasujące):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Chciałem mieć wpływ na ogólną ocenę strony',
	'articlefeedback-survey-answer-whyrated-development' => 'Mam nadzieję, że moja ocena pozytywnie wpłynie na rozwój strony',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Chciałem mieć swój wkład w rozwój {{GRAMMAR:D.lp|{{SITENAME}}}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Lubię dzielić się swoją opinią',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Nie oceniałem dziś, ale chcę podzielić się swoją opinią na temat tego rozszerzenia',
	'articlefeedback-survey-answer-whyrated-other' => 'Inny powód',
	'articlefeedback-survey-question-useful' => 'Czy uważasz, że taka metoda oceniania jest użyteczna i czytelna?',
	'articlefeedback-survey-question-useful-iffalse' => 'Dlaczego?',
	'articlefeedback-survey-question-comments' => 'Czy masz jakieś dodatkowe uwagi?',
	'articlefeedback-survey-submit' => 'Zapisz',
	'articlefeedback-survey-title' => 'Proszę udzielić odpowiedzi na kilka pytań',
	'articlefeedback-survey-thanks' => 'Dziękujemy za wypełnienie ankiety.',
	'articlefeedback-error' => 'Wystąpił błąd. Proszę spróbować ponownie później.',
	'articlefeedback-form-switch-label' => 'Oceń tę stronę',
	'articlefeedback-form-panel-title' => 'Oceń tę stronę',
	'articlefeedback-form-panel-instructions' => 'Poświeć chwilę, aby ocenić tę stronę.',
	'articlefeedback-form-panel-clear' => 'Usuń ranking',
	'articlefeedback-form-panel-expertise' => 'Posiadam szeroką wiedzę w tym temacie (opcjonalne)',
	'articlefeedback-form-panel-expertise-studies' => 'Znam to ze szkoły średniej lub ze studiów',
	'articlefeedback-form-panel-expertise-profession' => 'To element mojego zawodu',
	'articlefeedback-form-panel-expertise-hobby' => 'Bardzo wnikliwie interesuję się tym tematem',
	'articlefeedback-form-panel-expertise-other' => 'Źródła mojej wiedzy nie ma na liście',
	'articlefeedback-form-panel-helpimprove' => 'Chciałbym pomóc rozwijać Wikipedię – wyślij do mnie e‐maila (opcjonalne)',
	'articlefeedback-form-panel-helpimprove-note' => 'Otrzymasz od nas e‐maila potwierdzającego. Nie udostępnimy nikomu Twojego adresu. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Zasady ochrony prywatności',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Zasady ochrony prywatności',
	'articlefeedback-form-panel-submit' => 'Prześlij opinię',
	'articlefeedback-form-panel-success' => 'Zapisano',
	'articlefeedback-form-panel-expiry-title' => 'Twoje oceny są nieaktualne',
	'articlefeedback-form-panel-expiry-message' => 'Dokonaj ponownej oceny tej strony i zapisz jej wynik',
	'articlefeedback-report-switch-label' => 'Jak strona jest oceniana',
	'articlefeedback-report-panel-title' => 'Ocena strony',
	'articlefeedback-report-panel-description' => 'Aktualna średnia ocen.',
	'articlefeedback-report-empty' => 'Brak ocen',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|ocena|oceny|ocen}}',
	'articlefeedback-field-trustworthy-label' => 'Godny zaufania',
	'articlefeedback-field-trustworthy-tip' => 'Czy uważasz, że strona ma wystarczającą liczbę odnośników i że odnoszą się one do wiarygodnych źródeł?',
	'articlefeedback-field-complete-label' => 'Wyczerpanie tematu',
	'articlefeedback-field-complete-tip' => 'Czy uważasz, że strona porusza wszystkie istotne aspekty, które powinna?',
	'articlefeedback-field-objective-label' => 'Neutralny',
	'articlefeedback-field-objective-tip' => 'Czy uważasz, że strona prezentuje wszystkie punkty widzenia na to zagadnienie?',
	'articlefeedback-field-wellwritten-label' => 'Dobrze napisany',
	'articlefeedback-field-wellwritten-tip' => 'Czy uważasz, że strona jest właściwie sformatowana oraz zrozumiale napisana?',
	'articlefeedback-pitch-reject' => 'Może później',
	'articlefeedback-pitch-or' => 'lub',
	'articlefeedback-pitch-thanks' => 'Dziękujemy! Wystawione przez Ciebie oceny zostały zapisane.',
	'articlefeedback-pitch-survey-message' => 'Poświęć chwilę na wypełnienie krótkiej ankiety.',
	'articlefeedback-pitch-survey-accept' => 'Rozpocznij ankietę',
	'articlefeedback-pitch-join-message' => 'Czy chcesz utworzyć konto?',
	'articlefeedback-pitch-join-body' => 'Posiadanie konta ułatwia śledzenie wprowadzanych zmian, udział w dyskusjach oraz integrację ze społecznością.',
	'articlefeedback-pitch-join-accept' => 'Utwórz konto',
	'articlefeedback-pitch-join-login' => 'Zaloguj się',
	'articlefeedback-pitch-edit-message' => 'Czy wiesz, że możesz edytować tę stronę?',
	'articlefeedback-pitch-edit-accept' => 'Edytuj tę stronę',
	'articlefeedback-survey-message-success' => 'Dziękujemy za wypełnienie ankiety.',
	'articlefeedback-survey-message-error' => 'Wystąpił błąd.
Proszę spróbować ponownie później.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Najwyższe i najniższe w dniu dzisiejszym',
	'articleFeedback-table-caption-weeklymostchanged' => 'Najczęściej zmieniane w tym tygodniu',
	'articleFeedback-table-caption-recentlows' => 'Najniższe ostatnio',
	'articleFeedback-table-heading-page' => 'Strona',
	'articleFeedback-table-heading-average' => 'Średnio',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'articlefeedback' => "Valutassion ëd j'artìcoj",
	'articlefeedback-desc' => "Version pilòta dla valutassion ëd j'artìcoj",
	'articlefeedback-survey-question-origin' => "An su che pagina it j'eres-to quand it l'has ancaminà sto sondagi?",
	'articlefeedback-survey-question-whyrated' => "Për piasì, ch'an fasa savèj përchè a l'ha valutà costa pàgina ancheuj (ch'a marca tut lòn ch'a-i intra):",
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'I vorìa contribuì a la valutassion global ëd la pàgina',
	'articlefeedback-survey-answer-whyrated-development' => 'I spero che mia valutassion a peussa toché positivament ël dësvlup ëd la pàgina',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'I veui contribuì a {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Am pias condivide mia opinion',
	'articlefeedback-survey-answer-whyrated-didntrate' => "I l'heu pa dàit ëd valutassion ancheuj, ma i vorìa dé un coment an sla fonsionalità",
	'articlefeedback-survey-answer-whyrated-other' => 'Àutr',
	'articlefeedback-survey-question-useful' => 'Chërdës-to che le valutassion dàite a sio ùtij e ciàire?',
	'articlefeedback-survey-question-useful-iffalse' => 'Përchè?',
	'articlefeedback-survey-question-comments' => "Ha-lo d'àutri coment?",
	'articlefeedback-survey-submit' => 'Spediss',
	'articlefeedback-survey-title' => "Për piasì, ch'a risponda a chèich chestion",
	'articlefeedback-survey-thanks' => "Mersì d'avèj compilà ël questionari.",
	'articlefeedback-error' => "A l'é capitaje n'eror. Për piasì preuva pi tard.",
	'articlefeedback-form-switch-label' => 'Vàluta sta pagina',
	'articlefeedback-form-panel-title' => 'Vàluta sta pagina',
	'articlefeedback-form-panel-instructions' => 'Për piasì pija un moment për valuté sta pagina',
	'articlefeedback-form-panel-clear' => 'Gava sta valutassion',
	'articlefeedback-form-panel-expertise' => 'Mi i conòsso motobin sto argoment (opsional)',
	'articlefeedback-form-panel-expertise-studies' => "Mi i l'heu un diploma ëd colegi/università përtinent",
	'articlefeedback-form-panel-expertise-profession' => "A l'é part ëd mia profession",
	'articlefeedback-form-panel-expertise-hobby' => "A l'é na passion përsonal ancreusa",
	'articlefeedback-form-panel-expertise-other' => "La sorziss ëd mia conossensa a l'é pa listà ambelessì",
	'articlefeedback-form-panel-helpimprove' => 'Am piasirìa giuté a mejoré Wikipedia, mandme un corel (opsional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Noi it manderoma un corel ëd confirma. Noi i condividroma pa toa adrëssa con gnun. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Polìtica ëd confindensialità',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Polìtica ëd confidensialità',
	'articlefeedback-form-panel-submit' => 'Spediss valutassion',
	'articlefeedback-form-panel-success' => 'Salvà da bin',
	'articlefeedback-form-panel-expiry-title' => 'Toe valutassion a son scadùe',
	'articlefeedback-form-panel-expiry-message' => 'Për piasì torna valuté sta pagina e spediss le valutassion neuve.',
	'articlefeedback-report-switch-label' => 'Varda le valutassion ëd la pagina',
	'articlefeedback-report-panel-title' => 'Valutassion ëd la pagina',
	'articlefeedback-report-panel-description' => 'Valutassion medie corente.',
	'articlefeedback-report-empty' => 'Pa gnun-e valutassion',
	'articlefeedback-report-ratings' => '$1 valutassion',
	'articlefeedback-field-trustworthy-label' => 'Fidà',
	'articlefeedback-field-trustworthy-tip' => "Pensës-to che sta pagina a l'abia basta citassion e che ste citassion a rivo da sorziss fidà?",
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => "Pensës-to che sta pagina a coata j'àire essensiaj dl'argoment com a dovrìa?",
	'articlefeedback-field-objective-label' => 'Obietiv',
	'articlefeedback-field-objective-tip' => 'pensës-to che sta pagina a mosta na giusta rapresentassion ëd tute le prospetive dël problema?',
	'articlefeedback-field-wellwritten-label' => 'Bin-scrivù',
	'articlefeedback-field-wellwritten-tip' => 'Pensës-to che sta pagina a sia bin-organisà e bin-scrivùa?',
	'articlefeedback-pitch-reject' => 'Miraco pì tard',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => 'Mersì! toe valutassion a son stàite salvà.',
	'articlefeedback-pitch-survey-message' => 'Për piasì pija un moment për completé un curt sondagi.',
	'articlefeedback-pitch-survey-accept' => 'Ancamin-a sondagi',
	'articlefeedback-pitch-join-message' => 'Veus-to creé un cont?',
	'articlefeedback-pitch-join-body' => 'Un cont at giuterà a trassé toe modìfiche, at anserirà an discussion, e a sarà part ëd la comunità.',
	'articlefeedback-pitch-join-accept' => 'Crea un cont',
	'articlefeedback-pitch-join-login' => 'Intra',
	'articlefeedback-pitch-edit-message' => "Sas-to ch'it peule modifiché sta pagina?",
	'articlefeedback-pitch-edit-accept' => "Modìfica st'artìcol-sì",
	'articlefeedback-survey-message-success' => "Mersì d'avèj compilà ël questionari.",
	'articlefeedback-survey-message-error' => "A l'é capitaje n'eror. 
Për piasì preuva torna pi tard.",
	'articleFeedback-table-caption-dailyhighsandlows' => "Aut e bass d'ancheuj",
	'articleFeedback-table-caption-weeklymostchanged' => 'Ij magior cangiament dë sta sman-a',
	'articleFeedback-table-caption-recentlows' => 'Bass recent',
	'articleFeedback-table-heading-page' => 'Pàgina',
	'articleFeedback-table-heading-average' => 'Media',
	'articlefeedback-emailcapture-response-body' => "Cerea!

Mersì për avèj signalà anteressi a giuté a mejoré {{SITENAME}}.

Për piasì treuva un moment për confirmé tò corel an sgnacand an sël colegament sota:

$1

It peule ëdcò visité:

$2

E anserì ël còdes ëd confirma sì sota:

$3

I saroma an contat për un pòch su com it peule giuté a mejoré {{SITENAME}}.

S'it l'has pa ancaminà ti sta arcesta, për piasì ignora sto corel e noi it manderoma pi gnente d'àutr.

Tante bele ròbe, e mersì,
L'echip ëd {{SITENAME}}",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'articlefeedback-survey-answer-whyrated-other' => 'نور',
	'articlefeedback-survey-question-useful-iffalse' => 'ولې؟',
	'articlefeedback-survey-submit' => 'سپارل',
	'articlefeedback-pitch-reject' => 'کېدای شي وروسته',
	'articlefeedback-pitch-or' => 'يا',
	'articlefeedback-pitch-join-accept' => 'يو ګڼون جوړول',
	'articlefeedback-pitch-join-login' => 'ننوتل',
);

/** Portuguese (Português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author Waldir
 */
$messages['pt'] = array(
	'articlefeedback' => 'Avaliação do artigo',
	'articlefeedback-desc' => 'Avaliação do artigo (versão de testes)',
	'articlefeedback-survey-question-origin' => 'Em que página estava quando iniciou esta avaliação?',
	'articlefeedback-survey-question-whyrated' => 'Diga-nos porque é que avaliou esta página hoje (marque todas as opções verdadeiras):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Queria contribuir para a avaliação global da página',
	'articlefeedback-survey-answer-whyrated-development' => 'Espero que a minha avaliação afecte positivamente o desenvolvimento da página',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Queria colaborar com a {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Gosto de dar a minha opinião',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Hoje não avaliei páginas, mas queria deixar o meu comentário sobre a funcionalidade',
	'articlefeedback-survey-answer-whyrated-other' => 'Outra',
	'articlefeedback-survey-question-useful' => 'Acredita que as avaliações dadas são úteis e claras?',
	'articlefeedback-survey-question-useful-iffalse' => 'Porquê?',
	'articlefeedback-survey-question-comments' => 'Tem mais comentários?',
	'articlefeedback-survey-submit' => 'Enviar',
	'articlefeedback-survey-title' => 'Por favor, responda a algumas perguntas',
	'articlefeedback-survey-thanks' => 'Obrigado por preencher o inquérito.',
	'articlefeedback-error' => 'Ocorreu um erro. Tente novamente mais tarde, por favor.',
	'articlefeedback-form-switch-label' => 'Avaliar esta página',
	'articlefeedback-form-panel-title' => 'Avaliar esta página',
	'articlefeedback-form-panel-instructions' => 'Dedique um momento a avaliar esta página abaixo, por favor.',
	'articlefeedback-form-panel-clear' => 'Remover essa avaliação',
	'articlefeedback-form-panel-expertise' => 'Conheço este assunto muito profundamente (opcional)',
	'articlefeedback-form-panel-expertise-studies' => 'Tenho estudos relevantes do secundário/universidade',
	'articlefeedback-form-panel-expertise-profession' => 'Faz parte dos meus conhecimentos profissionais',
	'articlefeedback-form-panel-expertise-hobby' => 'É uma das minhas paixões pessoais',
	'articlefeedback-form-panel-expertise-other' => 'A fonte do meu conhecimento não está listada aqui',
	'articlefeedback-form-panel-helpimprove' => 'Gostava de ajudar a melhorar a Wikipédia; enviem-me um correio electrónico (opcional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Irá receber uma mensagem de confirmação por correio electrónico. O seu endereço de correio electrónico não será partilhado com ninguém. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Política de privacidade',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Política de privacidade',
	'articlefeedback-form-panel-submit' => 'Enviar avaliações',
	'articlefeedback-form-panel-success' => 'Gravado',
	'articlefeedback-form-panel-expiry-title' => 'As suas avaliações expiraram',
	'articlefeedback-form-panel-expiry-message' => 'Volte a avaliar esta página e envie as novas avaliações, por favor.',
	'articlefeedback-report-switch-label' => 'Ver avaliações',
	'articlefeedback-report-panel-title' => 'Avaliações',
	'articlefeedback-report-panel-description' => 'Avaliações médias actuais.',
	'articlefeedback-report-empty' => 'Não existem avaliações',
	'articlefeedback-report-ratings' => '$1 avaliações',
	'articlefeedback-field-trustworthy-label' => 'De confiança',
	'articlefeedback-field-trustworthy-tip' => 'Considera que esta página tem citações suficientes e que essas citações provêm de fontes fiáveis?',
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => 'Considera que esta página aborda os temas essenciais que deviam ser cobertos?',
	'articlefeedback-field-objective-label' => 'Imparcial',
	'articlefeedback-field-objective-tip' => 'Acha que esta página representa, de forma equilibrada, todos os pontos de vista sobre o assunto?',
	'articlefeedback-field-wellwritten-label' => 'Bem escrita',
	'articlefeedback-field-wellwritten-tip' => 'Acha que esta página está bem organizada e bem escrita?',
	'articlefeedback-pitch-reject' => 'Talvez mais tarde',
	'articlefeedback-pitch-or' => 'ou',
	'articlefeedback-pitch-thanks' => 'Obrigado! As suas avaliações foram gravadas.',
	'articlefeedback-pitch-survey-message' => 'Por favor, dedique um momento para responder a um pequeno inquérito.',
	'articlefeedback-pitch-survey-accept' => 'Começar inquérito',
	'articlefeedback-pitch-join-message' => 'Queria criar uma conta?',
	'articlefeedback-pitch-join-body' => 'Uma conta permite-lhe seguir as suas edições, participar nos debates e fazer parte da comunidade.',
	'articlefeedback-pitch-join-accept' => 'Criar conta',
	'articlefeedback-pitch-join-login' => 'Autenticação',
	'articlefeedback-pitch-edit-message' => 'Sabia que pode editar esta página?',
	'articlefeedback-pitch-edit-accept' => 'Editar esta página',
	'articlefeedback-survey-message-success' => 'Obrigado por preencher o inquérito.',
	'articlefeedback-survey-message-error' => 'Ocorreu um erro. 
Tente novamente mais tarde, por favor.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Os melhores e piores de hoje',
	'articleFeedback-table-caption-weeklymostchanged' => 'Os mais alterados da semana',
	'articleFeedback-table-caption-recentlows' => 'Os piores mais recentes',
	'articleFeedback-table-heading-page' => 'Página',
	'articleFeedback-table-heading-average' => 'Média',
	'articlefeedback-emailcapture-response-body' => 'Olá,

Obrigado por expressar interesse em ajudar a melhorar a {{SITENAME}}.

Confirme o seu endereço de correio electrónico, clicando o link abaixo, por favor:

$1

Também pode visitar:

$2

E introduzir o seguinte código de confirmação:

$3

Em breve irá receber informações sobre como poderá ajudar a melhorar a {{SITENAME}}.

Se não iniciou este pedido, ignore esta mensagem e não voltará a ser contactado.

Cumprimentos,
A equipa da {{SITENAME}}',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author 555
 * @author Giro720
 * @author Raylton P. Sousa
 */
$messages['pt-br'] = array(
	'articlefeedback' => 'Avaliação do artigo',
	'articlefeedback-desc' => 'Avaliação do artigo (versão de testes)',
	'articlefeedback-survey-question-origin' => 'Em que página você estava quando começou a responder esta pesquisa?',
	'articlefeedback-survey-question-whyrated' => 'Diga-nos porque é que classificou esta página hoje, por favor (marque todas as opções as quais se aplicam):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Eu queria contribuir para a classificação global da página',
	'articlefeedback-survey-answer-whyrated-development' => 'Eu espero que a minha classificação afete positivamente o desenvolvimento da página',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Eu queria colaborar com a {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Eu gosto de dar a minha opinião',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Hoje não classifiquei páginas, mas queria deixar o meu comentário sobre a funcionalidade',
	'articlefeedback-survey-answer-whyrated-other' => 'Outra',
	'articlefeedback-survey-question-useful' => 'Você acredita que as classificações dadas são úteis e claras?',
	'articlefeedback-survey-question-useful-iffalse' => 'Por quê?',
	'articlefeedback-survey-question-comments' => 'Você tem mais algum comentário?',
	'articlefeedback-survey-submit' => 'Enviar',
	'articlefeedback-survey-title' => 'Por favor, responda a algumas perguntas',
	'articlefeedback-survey-thanks' => 'Obrigado por preencher o questionário.',
	'articlefeedback-error' => 'Ocorreu um erro. Por favor, tente novamente mais tarde.',
	'articlefeedback-form-switch-label' => 'Avaliar esta página',
	'articlefeedback-form-panel-title' => 'Avaliar esta página',
	'articlefeedback-form-panel-instructions' => 'Dedique um momento a avaliar esta página abaixo, por favor.',
	'articlefeedback-form-panel-clear' => 'Remover esta avaliação',
	'articlefeedback-form-panel-expertise' => 'Estou muito bem informado sobre este tema (opcional)',
	'articlefeedback-form-panel-expertise-studies' => 'Tenho um título universitário relacionado',
	'articlefeedback-form-panel-expertise-profession' => 'Faz parte dos meus conhecimentos profissionais',
	'articlefeedback-form-panel-expertise-hobby' => 'É uma das minhas paixões pessoais',
	'articlefeedback-form-panel-expertise-other' => 'A fonte dos meus conhecimentos, não está listada aqui',
	'articlefeedback-form-panel-helpimprove' => 'Eu gostaria de ajudar a melhorar a Wikipédia; enviem-me um e-mail (opcional)',
	'articlefeedback-form-panel-helpimprove-note' => 'Nós enviaremos a você um e-mail de confirmação. O seu endereço de e-mail não será partilhado com ninguém. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Política de privacidade',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Política de privacidade',
	'articlefeedback-form-panel-submit' => 'Enviar avaliações',
	'articlefeedback-form-panel-success' => 'Gravado com sucesso',
	'articlefeedback-form-panel-expiry-title' => 'As suas avaliações expiraram',
	'articlefeedback-form-panel-expiry-message' => 'Volte a avaliar esta página e envie as novas avaliações, por favor.',
	'articlefeedback-report-switch-label' => 'Ver avaliações',
	'articlefeedback-report-panel-title' => 'Avaliações',
	'articlefeedback-report-panel-description' => 'Classificações médias atuais.',
	'articlefeedback-report-empty' => 'Não existem avaliações',
	'articlefeedback-report-ratings' => '$1 avaliações',
	'articlefeedback-field-trustworthy-label' => 'Confiável',
	'articlefeedback-field-trustworthy-tip' => 'Você considera que esta página tem citações suficientes e que essas citações provêm de fontes fiáveis?',
	'articlefeedback-field-complete-label' => 'Completa',
	'articlefeedback-field-complete-tip' => 'Você considera que esta página aborda os temas essenciais que deviam ser cobertos?',
	'articlefeedback-field-objective-label' => 'Imparcial',
	'articlefeedback-field-objective-tip' => 'Você acha que esta página representa, de forma equilibrada, todos os pontos de vista sobre o assunto?',
	'articlefeedback-field-wellwritten-label' => 'Bem escrito',
	'articlefeedback-field-wellwritten-tip' => 'Acha que esta página está bem organizada e bem escrita?',
	'articlefeedback-pitch-reject' => 'Talvez mais tarde',
	'articlefeedback-pitch-or' => 'ou',
	'articlefeedback-pitch-thanks' => 'Obrigado! As suas avaliações foram salvas.',
	'articlefeedback-pitch-survey-message' => 'Por favor, dedique um momento para responder a um pequeno questionário.',
	'articlefeedback-pitch-survey-accept' => 'Começar questionário',
	'articlefeedback-pitch-join-message' => 'Você queria criar uma conta?',
	'articlefeedback-pitch-join-body' => 'Uma conta permite-lhe seguir as suas edições, participar nos debates e fazer parte da comunidade.',
	'articlefeedback-pitch-join-accept' => 'Criar conta',
	'articlefeedback-pitch-join-login' => 'Autenticação',
	'articlefeedback-pitch-edit-message' => 'Sabia que pode editar esta página?',
	'articlefeedback-pitch-edit-accept' => 'Editar esta página',
	'articlefeedback-survey-message-success' => 'Obrigado por preencher o questionário.',
	'articlefeedback-survey-message-error' => 'Ocorreu um erro. 
Tente novamente mais tarde, por favor.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Os melhores e piores de hoje',
	'articleFeedback-table-caption-weeklymostchanged' => 'Os mais alterados da semana',
	'articleFeedback-table-caption-recentlows' => 'Os piores mais recentes',
	'articleFeedback-table-heading-page' => 'Página',
	'articleFeedback-table-heading-average' => 'Média',
	'articlefeedback-emailcapture-response-body' => 'Olá,

Obrigado por expressar interesse em ajudar a melhorar a {{SITENAME}}.

Confirme o seu endereço de e-mail, clicando o link abaixo, por favor:

$1

Você também pode visitar:

$2

E, então, introduzir o seguinte código de confirmação:

$3

Em breve você irá receber informações sobre como você poderá ajudar a melhorar a {{SITENAME}}.

Se você não iniciou este pedido, ignore esta mensagem e não voltará a ser contactado.

Cumprimentos,
A equipe da {{SITENAME}}',
);

/** Romanian (Română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 * @author Strainu
 */
$messages['ro'] = array(
	'articlefeedback' => 'Evaluare articol',
	'articlefeedback-desc' => 'Evaluare articol',
	'articlefeedback-survey-question-origin' => 'Care a fost ultima pagină vizitată înainte de a începe acest sondaj?',
	'articlefeedback-survey-question-whyrated' => 'Vă rugăm să ne spuneți de ce ați evaluat această pagină astăzi (bifați tot ce se aplică):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Am vrut să contribui la evaluarea paginii',
	'articlefeedback-survey-answer-whyrated-development' => 'Sper ca evaluarea mea să afecteze pozitiv dezvoltarea paginii',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Am vrut să contribui la {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Îmi place să îmi împărtășesc opinia',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Nu am furnizat evaluări astăzi, însă am dorit să ofer reacții pe viitor',
	'articlefeedback-survey-answer-whyrated-other' => 'Altul',
	'articlefeedback-survey-question-useful' => 'Considerați că evaluările furnizate sunt folositoare și clare?',
	'articlefeedback-survey-question-useful-iffalse' => 'De ce?',
	'articlefeedback-survey-question-comments' => 'Aveți comentarii suplimentare?',
	'articlefeedback-survey-submit' => 'Trimite',
	'articlefeedback-survey-title' => 'Vă rugăm să răspundeți la câteva întrebări',
	'articlefeedback-survey-thanks' => 'Vă mulțumim pentru completarea sondajului.',
	'articlefeedback-error' => 'A apărut o eroare. Vă rugăm să reîncercați mai târziu.',
	'articlefeedback-form-switch-label' => 'Evaluează această pagină',
	'articlefeedback-form-panel-title' => 'Evaluare pagină',
	'articlefeedback-form-panel-instructions' => 'Vă rugăm să acordați câteva clipe evaluării acestei pagini.',
	'articlefeedback-form-panel-clear' => 'Elimină această evaluare',
	'articlefeedback-form-panel-expertise' => 'Dețin cunoștințe solide despre acest subiect (opțional)',
	'articlefeedback-form-panel-expertise-studies' => 'Am o diplomă relevantă la nivel de colegiu/universitate',
	'articlefeedback-form-panel-expertise-profession' => 'Este parte din profesia mea',
	'articlefeedback-form-panel-expertise-hobby' => 'Este o pasiune personală puternică',
	'articlefeedback-form-panel-expertise-other' => 'Nivelul cunoștințelor mele nu se află în această listă',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Politica de confidențialitate',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Politica de confidențialitate',
	'articlefeedback-form-panel-submit' => 'Trimite evaluările',
	'articlefeedback-form-panel-success' => 'Salvat cu succes',
	'articlefeedback-form-panel-expiry-title' => 'Evaluările dumneavoastră au expirat',
	'articlefeedback-form-panel-expiry-message' => 'Vă rugăm să reevaluați această pagină și să trimiteți noi clasificări.',
	'articlefeedback-report-switch-label' => 'Vezi evaluările paginilor',
	'articlefeedback-report-panel-title' => 'Evaluări pagină',
	'articlefeedback-report-panel-description' => 'Media evaluărilor actuale.',
	'articlefeedback-report-empty' => 'Nu există evaluări',
	'articlefeedback-report-ratings' => '{{PLURAL:$1|evaluare|$1 evaluări}}',
	'articlefeedback-field-trustworthy-label' => 'De încredere',
	'articlefeedback-field-trustworthy-tip' => 'Credeți că pagina de față conține suficiente referințe și că acestea provin din surse de încredere?',
	'articlefeedback-field-complete-label' => 'Completă',
	'articlefeedback-field-complete-tip' => 'Credeți că pagina de față acoperă subiectul într-o manieră satisfăcătoare?',
	'articlefeedback-field-objective-label' => 'Obiectivă',
	'articlefeedback-field-objective-tip' => 'Credeți că pagina de față tratează echitabil toate perspectivele și opiniile cu privire la subiect?',
	'articlefeedback-field-wellwritten-label' => 'Bine scrisă',
	'articlefeedback-field-wellwritten-tip' => 'Credeți că pagina de față este bine organizată și bine redactată?',
	'articlefeedback-pitch-reject' => 'Poate mai târziu',
	'articlefeedback-pitch-or' => 'sau',
	'articlefeedback-pitch-thanks' => 'Vă mulțumim! Evaluările dumneavoastră au fost contorizate.',
	'articlefeedback-pitch-survey-message' => 'Vă rugăm să acordați câteva momente completării unui scurt chestionar.',
	'articlefeedback-pitch-survey-accept' => 'Pornește sondajul',
	'articlefeedback-pitch-join-message' => 'Ați dori să vă creați un cont?',
	'articlefeedback-pitch-join-body' => 'Un cont de utilizator v-ar ajuta să țineți evidența contribuțiile dumneavoastră, să luați parte la discuții și să faceți parte din comunitate.',
	'articlefeedback-pitch-join-accept' => 'Creează un cont',
	'articlefeedback-pitch-join-login' => 'Autentificare',
	'articlefeedback-pitch-edit-message' => 'Știți că puteți modifica această pagină?',
	'articlefeedback-pitch-edit-accept' => 'Modifică această pagină',
	'articlefeedback-survey-message-success' => 'Vă mulțumim că ați completat chestionarul.',
	'articlefeedback-survey-message-error' => 'A apărut o eroare.
Vă rugăm să reîncercați mai târziu.',
	'articleFeedback-table-heading-page' => 'Pagina',
	'articleFeedback-table-heading-average' => 'Medie',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 * @author Reder
 */
$messages['roa-tara'] = array(
	'articlefeedback' => 'Artichele de valutazione',
	'articlefeedback-desc' => 'Artichele de valutazione (versiune guidate)',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => "Ije vogghie condrebbuische a 'u pundegge totale d'a pàgene",
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => "Ije amm'a condrebbuì a {{SITENAME}}",
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => "Me chiace dìcere 'u penziere mèje",
	'articlefeedback-survey-answer-whyrated-other' => 'Otre',
	'articlefeedback-survey-question-useful-iffalse' => 'Purcé?',
	'articlefeedback-survey-question-comments' => 'Tìne otre commende?',
	'articlefeedback-survey-submit' => 'Conferme',
	'articlefeedback-survey-title' => 'Se preghe de responnere a quacche dumanne',
	'articlefeedback-survey-thanks' => "Grazzie pè avè combilate 'u sondagge.",
	'articlefeedback-form-switch-label' => 'Valute sta pàgene',
	'articlefeedback-form-panel-title' => 'Valute sta pàgene',
	'articlefeedback-form-panel-instructions' => "Pe piacere pigghiate 'nu mumende pe valutà sta pàgene.",
	'articlefeedback-form-panel-clear' => 'Live stu pundegge',
	'articlefeedback-form-panel-expertise-profession' => "Jè parte d'a professiona meje",
	'articlefeedback-form-panel-expertise-hobby' => "Queste jè 'na passiona profonda meje",
	'articlefeedback-form-panel-submit' => 'Conferme le pundegge',
	'articlefeedback-form-panel-success' => 'Reggistrate cu successe',
	'articlefeedback-form-panel-expiry-title' => 'Le pundegge tune onne scadute',
	'articlefeedback-report-switch-label' => "Vide 'u pundegge d'a pàgene",
	'articlefeedback-report-panel-title' => "Pundegge d'a pàgene",
	'articlefeedback-report-panel-description' => 'Pundegge medie corrende.',
	'articlefeedback-report-empty' => 'Nisciune pundegge',
	'articlefeedback-report-ratings' => '$1 pundegge',
	'articlefeedback-field-trustworthy-label' => 'Avveramende affidabbele',
	'articlefeedback-field-complete-label' => 'Comblete',
	'articlefeedback-field-objective-label' => 'Obbiettive',
	'articlefeedback-field-wellwritten-label' => 'Scritte bbuène',
	'articlefeedback-pitch-reject' => 'Forse cchiù tarde',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-survey-accept' => "Accuminze 'u sondagge",
	'articlefeedback-pitch-join-accept' => "Ccreje 'nu cunde utende",
	'articlefeedback-pitch-join-login' => 'Tràse',
	'articlefeedback-pitch-edit-accept' => 'Cange sta pàgene',
	'articlefeedback-survey-message-error' => "'N'errore s'a verificate.
Pe piacere pruève arrete.",
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
	'articlefeedback-survey-question-origin' => 'На какой странице вы находились, когда начали этот опрос?',
	'articlefeedback-survey-question-whyrated' => 'Пожалуйста, дайте нам знать, почему вы сегодня дали оценку этой странице (отметьте все подходящие варианты):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Я хотел повлиять на итоговый рейтинг этой страницы',
	'articlefeedback-survey-answer-whyrated-development' => 'Я надеюсь, что моя оценка положительно повлияет на развитие этой страницы',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Я хочу содействовать развитию {{GRAMMAR:genitive|{{SITENAME}}}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Мне нравится делиться своим мнением',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Я не поставил сегодня оценку, но хочу оставить отзыв о данной функции',
	'articlefeedback-survey-answer-whyrated-other' => 'Иное',
	'articlefeedback-survey-question-useful' => 'Считаете ли вы, что проставленные оценки являются полезными и понятными?',
	'articlefeedback-survey-question-useful-iffalse' => 'Почему?',
	'articlefeedback-survey-question-comments' => 'Есть ли у вас какие-либо дополнительные замечания?',
	'articlefeedback-survey-submit' => 'Отправить',
	'articlefeedback-survey-title' => 'Пожалуйста, ответьте на несколько вопросов',
	'articlefeedback-survey-thanks' => 'Спасибо за участие в опросе.',
	'articlefeedback-error' => 'Произошла ошибка. Пожалуйста, повторите попытку позже.',
	'articlefeedback-form-switch-label' => 'Оцените эту страницу',
	'articlefeedback-form-panel-title' => 'Оцените эту страницу',
	'articlefeedback-form-panel-instructions' => 'Пожалуйста, найдите время, чтобы оценить эту страницу.',
	'articlefeedback-form-panel-clear' => 'Удалить эту оценку',
	'articlefeedback-form-panel-expertise' => 'Я хорошо знаком с этой темой (опционально)',
	'articlefeedback-form-panel-expertise-studies' => 'По данной теме я получил образование в колледже / университете',
	'articlefeedback-form-panel-expertise-profession' => 'Это часть моей профессии',
	'articlefeedback-form-panel-expertise-hobby' => 'Это моё большое личное увлечение',
	'articlefeedback-form-panel-expertise-other' => 'Источник моих знаний здесь не указан',
	'articlefeedback-form-panel-helpimprove' => 'Я хотел бы помочь улучшить Википедию, отправьте мне письмо (опционально)',
	'articlefeedback-form-panel-helpimprove-note' => 'Мы отправим вам письмо с подтверждением. Мы не передадим ваш адрес кому-либо ещё. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Политика конфиденциальности',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Политика конфиденциальности',
	'articlefeedback-form-panel-submit' => 'Отправить оценку',
	'articlefeedback-form-panel-success' => 'Информация сохранена',
	'articlefeedback-form-panel-expiry-title' => 'Ваши оценки устарели',
	'articlefeedback-form-panel-expiry-message' => 'Пожалуйста, пересмотрите эту страницу и укажите новые оценки.',
	'articlefeedback-report-switch-label' => 'Показать оценки страницы',
	'articlefeedback-report-panel-title' => 'Оценки страницы',
	'articlefeedback-report-panel-description' => 'Текущие средние оценки.',
	'articlefeedback-report-empty' => 'Нет оценок',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|оценка|оценки|оценок}}',
	'articlefeedback-field-trustworthy-label' => 'Достоверность',
	'articlefeedback-field-trustworthy-tip' => 'Считаете ли вы, что на этой странице достаточно ссылок на источники, что источники являются достоверными?',
	'articlefeedback-field-complete-label' => 'Полнота',
	'articlefeedback-field-complete-tip' => 'Считаете ли вы, что эта страница в достаточной мере раскрывает основные вопросы темы?',
	'articlefeedback-field-objective-label' => 'Беспристрастность',
	'articlefeedback-field-objective-tip' => 'Считаете ли вы, что эта страница объективно отражает все точки зрения по данной теме?',
	'articlefeedback-field-wellwritten-label' => 'Стиль изложения',
	'articlefeedback-field-wellwritten-tip' => 'Считаете ли вы, что эта страница хорошо организована и хорошо написана?',
	'articlefeedback-pitch-reject' => 'Может быть, позже',
	'articlefeedback-pitch-or' => 'или',
	'articlefeedback-pitch-thanks' => 'Спасибо! Ваши оценки сохранены.',
	'articlefeedback-pitch-survey-message' => 'Пожалуйста, найдите время для выполнения краткой оценки.',
	'articlefeedback-pitch-survey-accept' => 'Начать опрос',
	'articlefeedback-pitch-join-message' => 'Вы хотели бы создать учётную запись?',
	'articlefeedback-pitch-join-body' => 'Учётная запись поможет вам отслеживать изменения, участвовать в обсуждениях, быть частью сообщества.',
	'articlefeedback-pitch-join-accept' => 'Создать учётную запись',
	'articlefeedback-pitch-join-login' => 'Представиться',
	'articlefeedback-pitch-edit-message' => 'Знаете ли вы, что эту страницу можно редактировать?',
	'articlefeedback-pitch-edit-accept' => 'Править эту страницу',
	'articlefeedback-survey-message-success' => 'Спасибо за участие в опросе.',
	'articlefeedback-survey-message-error' => 'Произошла ошибка. 
Пожалуйста, повторите попытку позже.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Сегодняшние взлёты и падения',
	'articleFeedback-table-caption-weeklymostchanged' => 'Наиболее изменившиеся на этой неделе',
	'articleFeedback-table-caption-recentlows' => 'Недавние падения',
	'articleFeedback-table-heading-page' => 'Страница',
	'articleFeedback-table-heading-average' => 'Среднее',
	'articlefeedback-emailcapture-response-body' => 'Здравствуйте!

Спасибо за интерес к улучшению проекта {{SITENAME}}.

Пожалуйста, потратьте несколько секунд, чтобы подтвердить адрес электронной почты, нажав на ссылку ниже:

$1

Вы можете также посетить:

$2

И ввести следующий код подтверждения:

$3

Вскоре мы сообщим вам, как можно помочь в улучшении проекта {{SITENAME}}.

Если вы не отправляли подобного запроса, пожалуйста, проигнорируйте это сообщение, и мы больше не будем вас тревожить.

С наилучшими пожеланиями и благодарностью
Команда проекта {{SITENAME}}',
);

/** Rusyn (Русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'articlefeedback' => 'Оцінка статї',
	'articlefeedback-desc' => 'Оцінка статї (експеріменталный варіант)',
	'articlefeedback-survey-question-whyrated' => 'Чом сьте днесь оцінили тоту сторінку (зачаркните вшыткы платны можности):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Хотїв єм овпливнити цалкову оцінку сторінкы',
	'articlefeedback-survey-answer-whyrated-development' => 'Сподїваю ся, же мій рейтінґ буде позітівно впливати на вывой сторінкы',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Хотїв єм помочі {{grammar:3sg|{{SITENAME}}}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Люблю здїляти свій назор',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Днесь єм не оцінёвав, але хотїв єм додати свій назор на тоту функцію',
	'articlefeedback-survey-answer-whyrated-other' => 'Інше',
	'articlefeedback-survey-question-useful' => 'Думаєте собі, же доданы оцінкы суть хосновны і зрозумітельны?',
	'articlefeedback-survey-question-useful-iffalse' => 'Чом?',
	'articlefeedback-survey-question-comments' => 'Маєте даякы додаточны коментарї?',
	'articlefeedback-survey-submit' => 'Одослати',
	'articlefeedback-survey-title' => 'Просиме, одповіджте на пару вопросів',
	'articlefeedback-survey-thanks' => 'Дякуєме за выповнїня звідованя.',
	'articlefeedback-form-panel-title' => 'Ваш назор',
	'articlefeedback-form-panel-instructions' => 'Просиме, найдьте собі час про оцінку той статї.',
	'articlefeedback-report-switch-label' => 'Указати резултаты',
	'articlefeedback-field-trustworthy-tip' => 'Маєте чутя, же тота сторінка достаточно одказує на жрідла і хоснованы жрідла суть способны довірованя?',
	'articlefeedback-field-complete-label' => 'Комплетность',
	'articlefeedback-field-complete-tip' => 'Маєте чутя, же тота сторінка покрывать вшыткы важны части темы?',
	'articlefeedback-field-objective-tip' => 'Маєте чутя, же тота сторінка справедливо покрывать вшыткы погляды на даны темы?',
	'articlefeedback-field-wellwritten-tip' => 'Маєте чутя, же тота сторінка є правилно орґанізована о добрї написана?',
	'articlefeedback-pitch-join-accept' => 'Вытворити конто',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'articlefeedback' => 'Ыстатыйаны сыаналааһын',
	'articlefeedback-desc' => 'Ыстатыйаны сыаналааһын (тургутуллар барыла)',
	'articlefeedback-survey-question-whyrated' => 'Бука диэн эт эрэ, тоҕо бүгүн бу сирэйи сыаналаатыҥ (туох баар сөп түбэһэр барыллары бэлиэтээ):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Бу сирэй түмүк рейтинин уларытаары',
	'articlefeedback-survey-answer-whyrated-development' => 'Сыанам бу сирэй тупсарыгар көмөлөһүө диэн санааттан',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => '{{GRAMMAR:genitive|{{SITENAME}}}} сайдыытыгар көмөлөһүөхпүн баҕарабын',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Бэйэм санаабын дьоҥҥо биллэрэрбин сөбүлүүбүн',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Бүгүн сыана бирбэтим, ол эрээри бу функция туһунан суруйуохпун баҕарабын',
	'articlefeedback-survey-answer-whyrated-other' => 'Атын',
	'articlefeedback-survey-question-useful' => 'Баар сыанабыллар туһаланы аҕалыахтара дуо, өйдөнөллөр дуо?',
	'articlefeedback-survey-question-useful-iffalse' => 'Тоҕо?',
	'articlefeedback-survey-question-comments' => 'Ханнык эмит эбии этиилээххин дуо?',
	'articlefeedback-survey-submit' => 'Ыытарга',
	'articlefeedback-survey-title' => 'Бука диэн аҕыйах ыйытыыга хоруйдаа эрэ',
	'articlefeedback-survey-thanks' => 'Ыйытыыларга хоруйдаабыккар махтанабыт.',
	'articlefeedback-form-switch-label' => 'Бу сирэйи сыаналаа',
	'articlefeedback-form-panel-title' => 'Бу сирэйи сыаналаа',
	'articlefeedback-form-panel-instructions' => 'Бука диэн бу сирэйгэ сыанабылла туруор эрэ.',
	'articlefeedback-form-panel-clear' => 'Бу сыананы сот',
	'articlefeedback-form-panel-expertise' => 'Бу тиэмэни бэркэ билэбин',
	'articlefeedback-form-panel-expertise-studies' => 'Бу тиэмэни колледжка/университекка үөрэппитим',
	'articlefeedback-form-panel-expertise-profession' => 'Идэм сорҕото',
	'articlefeedback-form-panel-expertise-hobby' => 'Мин дьарыктанар үлүһүйүүм, сүрүн дьулҕаным',
	'articlefeedback-form-panel-expertise-other' => 'Туох сыһыаннааҕым туһунан манна ыйыллыбатах',
	'articlefeedback-form-panel-submit' => 'Сыанабылы ыытыы',
	'articlefeedback-form-panel-success' => 'Бигэргэтилиннэ',
	'articlefeedback-form-panel-expiry-title' => 'Сыанабылыҥ эргэрбит',
	'articlefeedback-form-panel-expiry-message' => 'Бука диэн бу сирэйи хат көр уонна саҥа сыаната быс.',
	'articlefeedback-report-switch-label' => 'Сирэй сыанабылларын көрдөр',
	'articlefeedback-report-panel-title' => 'Сирэйи сыаналааһын',
	'articlefeedback-report-panel-description' => 'Билиҥҥи орто сыанабыллар.',
	'articlefeedback-report-empty' => 'Сыанабыл суох',
	'articlefeedback-report-ratings' => '$1 сыанабыл',
	'articlefeedback-field-trustworthy-label' => 'Итэҕэтиилээҕэ',
	'articlefeedback-field-complete-label' => 'Толорута',
	'articlefeedback-field-complete-tip' => 'Бу сирэй тиэмэ сүрүн ис хоһоонун арыйар дуо?',
	'articlefeedback-field-objective-label' => 'Тутулуга суоҕа',
	'articlefeedback-field-objective-tip' => 'Бу сирэй араас көрүүлэри тэҥҥэ, тугу да күөмчүлээбэккэ көрдөрөр дии саныыгын дуо?',
	'articlefeedback-field-wellwritten-label' => 'Суруйуу истиилэ',
	'articlefeedback-field-wellwritten-tip' => 'Бу сирэй бэркэ сааһыланан суруллубут дии саныыгын дуо?',
	'articlefeedback-pitch-reject' => 'Баҕар кэлин',
	'articlefeedback-pitch-or' => 'эбэтэр',
	'articlefeedback-pitch-thanks' => 'Махтал! Эн сыанабылыҥ бигэргэтилиннэ.',
	'articlefeedback-pitch-survey-message' => 'Бука диэн, кылгас сыана биэрэрдии толкуйдан эрэ.',
	'articlefeedback-pitch-survey-accept' => 'Ыйытыгы саҕалыырга',
	'articlefeedback-pitch-join-message' => 'Манна бэлиэтэниэххин баҕараҕын дуо?',
	'articlefeedback-pitch-join-body' => 'Ааккын бэлиэтээтэххинэ уларытыылары кэтээн көрөр, ырытыыларга кыттар уонна маннааҕы дьон сорҕото буолар кыахтаныаҥ.',
	'articlefeedback-pitch-join-accept' => 'Саҥа ааты бэлиэтииргэ',
	'articlefeedback-pitch-join-login' => 'Ааккын эт',
	'articlefeedback-pitch-edit-message' => 'Бу сирэйи уларытар кыахтааххын ээ.',
	'articlefeedback-pitch-edit-accept' => 'Бу сирэйи уларыт',
	'articlefeedback-survey-message-success' => 'Ыйытыыларга хоруйдаабыккар махтанабыт.',
	'articlefeedback-survey-message-error' => 'Алҕас таҕыста.
Бука диэн хойутуу хос боруобалаар.',
);

/** Sicilian (Sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'articlefeedback-survey-answer-whyrated-other' => 'Àutru',
	'articlefeedback-survey-question-useful-iffalse' => 'Picchì?',
	'articlefeedback-survey-question-comments' => 'Vò diri autri cosi?',
	'articlefeedback-survey-title' => "Arrispunni a 'na pocu di dumanni",
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'articlefeedback' => 'Hodnotenie článku',
	'articlefeedback-desc' => 'Hodnotenie článku (pilotná verzia)',
	'articlefeedback-survey-question-origin' => 'Na ktorej stránke ste sa nachádzali, keď ste spustili tento prieskum?',
	'articlefeedback-survey-question-whyrated' => 'Prosím, dajte nám vedieť prečo ste dnes ohodnotili túto stránku (zaškrtnite všetky možnosti, ktoré považujete za pravdivé):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Chcel som prispieť k celkovému ohodnoteniu stránky',
	'articlefeedback-survey-answer-whyrated-development' => 'Dúfam, že moje hodnotenie pozitívne ovplyvní vývoj stránky',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Chcel som prispieť do {{GRAMMAR:genitív|{{SITENAME}}}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Rád sa delím o svoj názor',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Dnes som neposkytol hodnotenie, ale chcel som okomentovať túto možnosť',
	'articlefeedback-survey-answer-whyrated-other' => 'Iné',
	'articlefeedback-survey-question-useful' => 'Veríte, že poskytnuté hodnotenia sú užitočné a jasné?',
	'articlefeedback-survey-question-useful-iffalse' => 'Prečo?',
	'articlefeedback-survey-question-comments' => 'Máte nejaké ďalšie komentáre?',
	'articlefeedback-survey-submit' => 'Odoslať',
	'articlefeedback-survey-title' => 'Prosím, zodpovedajte niekoľko otázok',
	'articlefeedback-survey-thanks' => 'Ďakujeme za vyplnenie dotazníka.',
	'articlefeedback-error' => 'Vyskytla sa chyba. Prosím, skúste to neskôr.',
	'articlefeedback-form-switch-label' => 'Ohodnotiť túto stránku',
	'articlefeedback-form-panel-title' => 'Ohodnotiť túto stránku',
	'articlefeedback-form-panel-instructions' => 'Prosím, venujte chvíľku ohodnoteniu tejto stránky.',
	'articlefeedback-form-panel-clear' => 'Odstrániť toto hodnotenie',
	'articlefeedback-form-panel-expertise' => 'Mám veľké vedomosti o tejto téme (nepovinné)',
	'articlefeedback-form-panel-expertise-studies' => 'Mám v tejto oblasti univerzitný titul',
	'articlefeedback-form-panel-expertise-profession' => 'Je to súčasť mojej profesie',
	'articlefeedback-form-panel-expertise-hobby' => 'Je to moja hlboká osobná vášeň',
	'articlefeedback-form-panel-expertise-other' => 'Zdroj mojich vedomostí tu nie je uvedený',
	'articlefeedback-form-panel-helpimprove' => 'Chcel by som pomôcť zlepšeniu Wikipédie, pošlite mi e-mail (nepovinné)',
	'articlefeedback-form-panel-helpimprove-note' => 'Pošleme vám potvrdzovací email. Vašu adresu neposkytneme nikomu inému. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Ochrana súkromia',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Ochrana súkromia',
	'articlefeedback-form-panel-submit' => 'Odoslať hodnotenie',
	'articlefeedback-form-panel-success' => 'Úspešne uložené',
	'articlefeedback-form-panel-expiry-title' => 'Platnosť vášho hodnotenia vypršala',
	'articlefeedback-form-panel-expiry-message' => 'Prosím, znova vyhodnoťte túto stránku a odošlite nové hodnotenie.',
	'articlefeedback-report-switch-label' => 'Zobraziť hodnotenia stránky',
	'articlefeedback-report-panel-title' => 'Hodnotenia stránky',
	'articlefeedback-report-panel-description' => 'Súčasné priemerné hodnotenie.',
	'articlefeedback-report-empty' => 'Bez hodnotenia',
	'articlefeedback-report-ratings' => '$1 {{PLURAL:$1|hodnotenie|hodnotenia|hodnotení}}',
	'articlefeedback-field-trustworthy-label' => 'Dôveryhodná',
	'articlefeedback-field-trustworthy-tip' => 'Máte pocit, že táto stránka má dostatočné citácie a že tieto citácie pochádzajú z dôveryhodných zdrojov?',
	'articlefeedback-field-complete-label' => 'Úplná',
	'articlefeedback-field-complete-tip' => 'Máte pocit, že táto stránka pokrýva základné tematické oblasti, ktoré by mala?',
	'articlefeedback-field-objective-label' => 'Objektívna',
	'articlefeedback-field-objective-tip' => 'Máte pocit, že táto stránka zobrazuje spravodlivé zastúpenie všetkých pohľadov na problematiku?',
	'articlefeedback-field-wellwritten-label' => 'Dobre napísaná',
	'articlefeedback-field-wellwritten-tip' => 'Máte pocit, že táto stránka je dobre organizovaná a dobre napísaná?',
	'articlefeedback-pitch-reject' => 'Možno neskôr',
	'articlefeedback-pitch-or' => 'alebo',
	'articlefeedback-pitch-thanks' => 'Vďaka! Vaše hodnotenie bolo uložené.',
	'articlefeedback-pitch-survey-message' => 'Prosím, venujte chvíľku vyplneniu krátkeho prieskumu.',
	'articlefeedback-pitch-survey-accept' => 'Spustiť prieskum',
	'articlefeedback-pitch-join-message' => 'Chceli ste si vytvoriť účet?',
	'articlefeedback-pitch-join-body' => 'Účtu vám pomôže sledovať vaše úpravy, zapojiť sa do diskusií a stať sa súčasťou komunity.',
	'articlefeedback-pitch-join-accept' => 'Vytvoriť účet',
	'articlefeedback-pitch-join-login' => 'Prihlásiť sa',
	'articlefeedback-pitch-edit-message' => 'Vedeli ste, že môžete túto stránku upravovať?',
	'articlefeedback-pitch-edit-accept' => 'Upraviť túto stránku',
	'articlefeedback-survey-message-success' => 'Ďakujeme za vyplnenie dotazníka.',
	'articlefeedback-survey-message-error' => 'Vyskytla sa chyba.
Prosím, skúste to neskôr.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dnešné maximá a minimá',
	'articleFeedback-table-caption-weeklymostchanged' => 'Tento týždeň sa najviac menil',
	'articleFeedback-table-caption-recentlows' => 'Nedávne minimá',
	'articleFeedback-table-heading-page' => 'Stránka',
	'articleFeedback-table-heading-average' => 'Priemer',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'articlefeedback' => 'Ocenjevanje člankov',
	'articlefeedback-desc' => 'Ocenjevanje člankov (pilotska različica)',
	'articlefeedback-survey-question-origin' => 'Na kateri strani ste bili, ko ste začeli s to anketo?',
	'articlefeedback-survey-question-whyrated' => 'Prosimo, povejte nam, zakaj ste danes ocenili to stran (izberite vse, kar ustreza):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Želel sem prispevati splošni oceni strani',
	'articlefeedback-survey-answer-whyrated-development' => 'Upam, da bo moja ocena dobro vplivala na razvoj strani',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Želel sem prispevati k projektu {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Rad delim svoje mnenje',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Danes nisem podal ocene, ampak sem želel podati povratno informacijo o funkciji',
	'articlefeedback-survey-answer-whyrated-other' => 'Drugo',
	'articlefeedback-survey-question-useful' => 'Ali verjamete, da so posredovane ocene uporabne in jasne?',
	'articlefeedback-survey-question-useful-iffalse' => 'Zakaj?',
	'articlefeedback-survey-question-comments' => 'Imate kakšne dodatne pripombe?',
	'articlefeedback-survey-submit' => 'Pošlji',
	'articlefeedback-survey-title' => 'Prosimo, odgovorite na nekaj vprašanj',
	'articlefeedback-survey-thanks' => 'Zahvaljujemo se vam za izpolnitev vprašalnika.',
	'articlefeedback-error' => 'Prišlo je do napake. Prosimo, poskusite znova pozneje.',
	'articlefeedback-form-switch-label' => 'Ocenite to stran',
	'articlefeedback-form-panel-title' => 'Ocenite to stran',
	'articlefeedback-form-panel-instructions' => 'Prosimo, vzemite si trenutek in ocenite to stran.',
	'articlefeedback-form-panel-clear' => 'Odstrani oceno',
	'articlefeedback-form-panel-expertise' => 'S to temo sem zelo dobro seznanjen (neobvezno)',
	'articlefeedback-form-panel-expertise-studies' => 'Imam ustrezno fakultetno/univerzitetno diplomo',
	'articlefeedback-form-panel-expertise-profession' => 'Je del mojega poklica',
	'articlefeedback-form-panel-expertise-hobby' => 'To je globoka osebna strast',
	'articlefeedback-form-panel-expertise-other' => 'Vir mojega znanja tukaj ni naveden',
	'articlefeedback-form-panel-helpimprove' => 'Rad bi pomagal izboljšati Wikipedijo, zato mi pošljite e-pošto (neobvezno)',
	'articlefeedback-form-panel-helpimprove-note' => 'Poslali vam bomo potrditveno e-pošto. Vašega naslova ne bomo delili z nikomer. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Politika zasebnosti',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Politika zasebnosti',
	'articlefeedback-form-panel-submit' => 'Pošlji ocene',
	'articlefeedback-form-panel-success' => 'Uspešno shranjeno',
	'articlefeedback-form-panel-expiry-title' => 'Vaše ocene so potekle',
	'articlefeedback-form-panel-expiry-message' => 'Prosimo, ponovno ocenite to stran in pošljite nove ocene.',
	'articlefeedback-report-switch-label' => 'Prikaži ocene strani',
	'articlefeedback-report-panel-title' => 'Ocene strani',
	'articlefeedback-report-panel-description' => 'Trenutne povprečne ocene.',
	'articlefeedback-report-empty' => 'Brez ocen',
	'articlefeedback-report-ratings' => '$1 ocen',
	'articlefeedback-field-trustworthy-label' => 'Zanesljivo',
	'articlefeedback-field-trustworthy-tip' => 'Menite, da ima ta stran dovolj navedkov in da ta navajanja prihajajo iz zanesljivih virov?',
	'articlefeedback-field-complete-label' => 'Celovito',
	'articlefeedback-field-complete-tip' => 'Menite, da ta stran zajema temeljna tematska področja, ki bi jih naj?',
	'articlefeedback-field-objective-label' => 'Nepristransko',
	'articlefeedback-field-objective-tip' => 'Menite, da ta stran prikazuje pravično zastopanost vseh pogledov na obravnavano temo?',
	'articlefeedback-field-wellwritten-label' => 'Dobro napisano',
	'articlefeedback-field-wellwritten-tip' => 'Menite, da je ta stran dobro organizirana in dobro napisana?',
	'articlefeedback-pitch-reject' => 'Morda kasneje',
	'articlefeedback-pitch-or' => 'ali',
	'articlefeedback-pitch-thanks' => 'Hvala! Vaše ocene so zabeležene.',
	'articlefeedback-pitch-survey-message' => 'Prosimo, vzemite si trenutek, da izpolnite kratko anketo.',
	'articlefeedback-pitch-survey-accept' => 'Začni z anketo',
	'articlefeedback-pitch-join-message' => 'Ste želeli ustvariti račun?',
	'articlefeedback-pitch-join-body' => 'Račun vam bo pomagal slediti vašim urejanjem, se vključiti v razpravo in biti del skupnosti.',
	'articlefeedback-pitch-join-accept' => 'Ustvari račun',
	'articlefeedback-pitch-join-login' => 'Prijavite se',
	'articlefeedback-pitch-edit-message' => 'Ali ste vedeli, da lahko uredite ta članek?',
	'articlefeedback-pitch-edit-accept' => 'Uredi ta članek',
	'articlefeedback-survey-message-success' => 'Zahvaljujemo se vam za izpolnitev vprašalnika.',
	'articlefeedback-survey-message-error' => 'Prišlo je do napake.
Prosimo, poskusite znova pozneje.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Današnji vzponi in padci',
	'articleFeedback-table-caption-weeklymostchanged' => 'Ta teden najbolj spremenjeno',
	'articleFeedback-table-caption-recentlows' => 'Nedavni padci',
	'articleFeedback-table-heading-page' => 'Stran',
	'articleFeedback-table-heading-average' => 'Povprečje',
	'articlefeedback-emailcapture-response-body' => 'Pozdravljeni!

Zahvaljujemo se vam za izkazano zanimanje za pomoč pri izboljševanju {{GRAMMAR:rodilnik|{{SITENAME}}}}.

Prosimo, vzemite si trenutek in potrdite vaš e-poštni naslov s klikom na spodnjo povezavo:

$1

Obiščete lahko tudi:

$2

in vnesete spodnjo potrditveno kodo:

$3

Kmalu vam bomo sporočili, kako lahko pomagate izboljšati {{GRAMMAR:tožilnik|{{SITENAME}}}}.

Če tega niste zahtevali, prosimo, prezrite to e-pošto in ničesar več vam ne bomo poslali.

Hvala in najlepše želje,
ekipa {{GRAMMAR:rodilnik|{{SITENAME}}}}',
);

/** Serbian Cyrillic ekavian (‪Српски (ћирилица)‬)
 * @author Rancher
 * @author Sasa Stefanovic
 */
$messages['sr-ec'] = array(
	'articlefeedback-survey-answer-whyrated-other' => 'Остало',
	'articlefeedback-survey-question-useful-iffalse' => 'Зашто?',
	'articlefeedback-survey-question-comments' => 'Имате ли још коментара?',
	'articlefeedback-survey-submit' => 'Пошаљи',
	'articlefeedback-survey-title' => 'Молимо вас да одговорите на неколико питања',
	'articlefeedback-survey-thanks' => 'Хвала вам што сте попунили упитник.',
	'articlefeedback-error' => 'Дошло је до грешке. Покушајте поново.',
	'articlefeedback-form-switch-label' => 'Оцени ову страницу',
	'articlefeedback-form-panel-title' => 'Оцењивање странице',
	'articlefeedback-form-panel-instructions' => 'Издвојте тренутак да оцените ову страницу.',
	'articlefeedback-form-panel-clear' => 'Уклони ову оцену',
	'articlefeedback-form-panel-expertise-profession' => 'То је део моје струке',
	'articlefeedback-form-panel-expertise-hobby' => 'То је везано за моје хобије или занимања',
	'articlefeedback-form-panel-submit' => 'Пошаљи повратну информацију',
	'articlefeedback-report-empty' => 'Нема оцена.',
	'articlefeedback-field-trustworthy-label' => 'Поуздано',
	'articlefeedback-field-wellwritten-label' => 'Лепо написано',
	'articlefeedback-pitch-reject' => 'Можда касније',
	'articlefeedback-pitch-or' => 'или',
	'articlefeedback-pitch-survey-accept' => 'Почни упитник',
	'articlefeedback-pitch-join-accept' => 'Отвори налог',
	'articlefeedback-pitch-join-login' => 'Пријави ме',
	'articlefeedback-pitch-edit-accept' => 'Уреди ову страницу',
	'articlefeedback-survey-message-success' => 'Хвала вам што сте попунили упитник.',
	'articlefeedback-survey-message-error' => 'Дошло је до грешке.
Покушајте касније.',
);

/** Swedish (Svenska)
 * @author Ainali
 * @author Fluff
 * @author Lokal Profil
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'articlefeedback' => 'Artikelbedömning',
	'articlefeedback-desc' => 'Artikelbedömning (pilotversion)',
	'articlefeedback-survey-question-origin' => 'Vilken sida var du på när du startade denna undersökning?',
	'articlefeedback-survey-question-whyrated' => 'Låt oss gärna veta varför du bedömt denna sida i dag (markera alla som gäller):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Jag ville bidra till den övergripande bedömningen av sidan',
	'articlefeedback-survey-answer-whyrated-development' => 'Jag hoppas att min bedömning skulle påverka utvecklingen av sidan positivt',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Jag ville bidra till {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Jag gillar att ge min åsikt',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Jag har inte gjort en bedömning idag, men ville ge feedback på funktionen',
	'articlefeedback-survey-answer-whyrated-other' => 'Annat',
	'articlefeedback-survey-question-useful' => 'Tror du att bedömningarna är användbara och tydliga?',
	'articlefeedback-survey-question-useful-iffalse' => 'Varför?',
	'articlefeedback-survey-question-comments' => 'Har du några ytterligare kommentarer?',
	'articlefeedback-survey-submit' => 'Skicka in',
	'articlefeedback-survey-title' => 'Svara på några få frågor',
	'articlefeedback-survey-thanks' => 'Tack för att du fyllde i enkäten.',
	'articlefeedback-error' => 'Ett fel har uppstått. Försök igen senare.',
	'articlefeedback-form-switch-label' => 'Betygsätt sidan',
	'articlefeedback-form-panel-title' => 'Betygsätt sidan',
	'articlefeedback-form-panel-instructions' => 'Vänligen betygsätt denna sida.',
	'articlefeedback-form-panel-clear' => 'Ta bort detta betyg',
	'articlefeedback-form-panel-expertise' => 'Jag är mycket kunniga om detta ämne (frivilligt)',
	'articlefeedback-form-panel-expertise-studies' => 'Jag har en relevant högskole-/universitetsexamen',
	'articlefeedback-form-panel-expertise-profession' => 'Det är en del av mitt yrke',
	'articlefeedback-form-panel-expertise-hobby' => 'Det är relaterat till mina hobbyer eller intressen',
	'articlefeedback-form-panel-expertise-other' => 'Källan till min kunskap inte är listade här',
	'articlefeedback-form-panel-helpimprove' => 'Jag skulle vilja bidra till att förbättra Wikipedia, skicka mig ett e-post (frivilligt)',
	'articlefeedback-form-panel-helpimprove-note' => 'Vi skickar en bekräftelse via e-post. Vi delar inte ut din adress till någon annan. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Integritetspolicy',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Integritetspolicy',
	'articlefeedback-form-panel-submit' => 'Skicka in feedback',
	'articlefeedback-form-panel-success' => 'Sparat',
	'articlefeedback-form-panel-expiry-title' => 'Dina betyg har gått ut',
	'articlefeedback-form-panel-expiry-message' => 'Vänligen omvärdera denna sida och skicka nya omdömen.',
	'articlefeedback-report-switch-label' => 'Visa sidbetyg',
	'articlefeedback-report-panel-title' => 'Sidbetyg',
	'articlefeedback-report-panel-description' => 'Nuvarande genomsnittliga betyg.',
	'articlefeedback-report-empty' => 'Inga betyg',
	'articlefeedback-report-ratings' => '$1 betyg',
	'articlefeedback-field-trustworthy-label' => 'Trovärdig',
	'articlefeedback-field-trustworthy-tip' => 'Känner du att denna sida har tillräckliga citat och att dessa citat kommer från pålitliga källor?',
	'articlefeedback-field-complete-label' => 'Heltäckande',
	'articlefeedback-field-complete-tip' => 'Känner du att den här sidan täcker de väsentliga ämnesområden som det ska?',
	'articlefeedback-field-objective-label' => 'Objektiv',
	'articlefeedback-field-objective-tip' => 'Känner du att den här sidan visar en rättvis representation av alla perspektiv på frågan?',
	'articlefeedback-field-wellwritten-label' => 'Välskrivet',
	'articlefeedback-field-wellwritten-tip' => 'Tycker du att den här sidan är väl organiserad och välskriven?',
	'articlefeedback-pitch-reject' => 'Kanske senare',
	'articlefeedback-pitch-or' => 'eller',
	'articlefeedback-pitch-thanks' => 'Tack! Ditt betyg har sparats.',
	'articlefeedback-pitch-survey-message' => 'Vänligen ta en stund att fylla i en kort enkät.',
	'articlefeedback-pitch-survey-accept' => 'Starta undersökning',
	'articlefeedback-pitch-join-message' => 'Ville du skapa ett konto?',
	'articlefeedback-pitch-join-body' => 'Ett konto kommer att hjälpa dig att spåra ändringar, engagera dig i diskussioner, och vara en del av samhället.',
	'articlefeedback-pitch-join-accept' => 'Skapa ett konto',
	'articlefeedback-pitch-join-login' => 'Logga in',
	'articlefeedback-pitch-edit-message' => 'Visste du att du kan redigera denna sida?',
	'articlefeedback-pitch-edit-accept' => 'Redigera denna sida',
	'articlefeedback-survey-message-success' => 'Tack för att du fyllde i undersökningen.',
	'articlefeedback-survey-message-error' => 'Ett fel har uppstått. 
Försök igen senare.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Dagens toppar och dalar',
	'articleFeedback-table-caption-weeklymostchanged' => 'Veckans mest ändrade',
	'articleFeedback-table-caption-recentlows' => 'Senaste dalar',
	'articleFeedback-table-heading-page' => 'Sida',
	'articleFeedback-table-heading-average' => 'Genomsnittlig',
);

/** Tamil (தமிழ்)
 * @author TRYPPN
 */
$messages['ta'] = array(
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'இந்த தளத்திற்கு நான் பங்களிக்க வேண்டும் {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'நான் என்னுடைய கருத்துக்களை மற்றவர்களுடன் பகிர்ந்துகொள்ள விரும்புகிறேன்',
	'articlefeedback-survey-answer-whyrated-other' => 'மற்றவை',
	'articlefeedback-survey-question-useful-iffalse' => 'ஏன் ?',
	'articlefeedback-survey-question-comments' => 'தாங்கள் மேலும் அதிகமான கருத்துக்களை கூற விரும்புகிறீர்களா ?',
	'articlefeedback-survey-submit' => 'சமர்ப்பி',
	'articlefeedback-survey-title' => 'தயவு செய்து ஒரு சில கேள்விகளுக்கு பதில் அளியுங்கள்',
	'articlefeedback-survey-thanks' => 'ஆய்வுக்கான படிவத்தை பூர்த்தி செய்தமைக்கு நன்றி.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'articlefeedback' => 'వ్యాసపు మూల్యాంకన',
	'articlefeedback-survey-question-whyrated' => 'ఈ పుటని ఈరోజు మీరు ఎందుకు మూల్యాంకన చేసారో మాకు దయచేసి తెలియజేయండి (వర్తించే వాటినన్నీ ఎంచుకోండి):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'నేను ఈ పుట యొక్క స్థూల మూల్యాంకనకి తోడ్పాలనుకున్నాను',
	'articlefeedback-survey-answer-whyrated-development' => 'నా మూల్యాంకన ఈ పుట యొక్క అభివృద్ధికి సానుకూలంగా ప్రభావితం చేస్తుందని ఆశిస్తున్నాను',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'నేను {{SITENAME}}కి తోడ్పడాలనుకున్నాను',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'నా అభిప్రాయాన్ని పంచుకోవడం నాకిష్టం',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'నేను ఈ రోజు మాల్యాంకన చేయలేదు, కానీ ఈ సౌలభ్యంపై నా ప్రతిస్పందనని తెలియజేయాలనుకున్నాను',
	'articlefeedback-survey-answer-whyrated-other' => 'ఇతర',
	'articlefeedback-survey-question-useful' => 'ఈ మూల్యాంకనలు ఉపయోగకరంగా మరియు స్పష్టంగా ఉన్నాయని మీరు నమ్ముతున్నారా?',
	'articlefeedback-survey-question-useful-iffalse' => 'ఎందుకు?',
	'articlefeedback-survey-question-comments' => 'అదనపు వ్యాఖ్యలు ఏమైనా ఉన్నాయా?',
	'articlefeedback-survey-submit' => 'దాఖలుచెయ్యి',
	'articlefeedback-survey-title' => 'దయచేసి కొన్ని ప్రశ్నలకి సమాధానమివ్వండి',
	'articlefeedback-survey-thanks' => 'ఈ సర్వేని పూరించినందుకు కృతజ్ఞతలు.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'గోప్యతా విధానం',
	'articlefeedback-report-panel-title' => 'పుట మూల్యాంకన',
	'articlefeedback-report-ratings' => '$1 మూల్యాంకనలు',
	'articlefeedback-pitch-or' => 'లేదా',
	'articlefeedback-pitch-join-login' => 'ప్రవేశించండి',
	'articlefeedback-pitch-edit-accept' => 'ఈ పుటని మార్చండి',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'articleFeedback-table-heading-page' => 'Pájina',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'articlefeedback' => 'Makala berlen baha',
	'articlefeedback-desc' => 'Makala berlen baha (synag warianty)',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Men sahypanyň umumy derejesine goşant goşmak isledim.',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => '{{SITENAME}} saýtyna goşant goşmak isledim.',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Öz pikirimi paýlaşmagy halaýaryn.',
	'articlefeedback-survey-answer-whyrated-other' => 'Başga',
	'articlefeedback-survey-question-useful' => 'Berlen derejeleriň peýdalydygyna we düşnüklidigine ynanýarsyňyzmy?',
	'articlefeedback-survey-question-useful-iffalse' => 'Näme üçin?',
	'articlefeedback-survey-question-comments' => 'Goşmaça bellikleriňiz barmy?',
	'articlefeedback-survey-submit' => 'Tabşyr',
	'articlefeedback-survey-title' => 'Käbir soraglara jogap beriň',
	'articlefeedback-survey-thanks' => 'Soragnamany dolduranyňyz üçin sag boluň.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'articlefeedback' => 'Pagsusuri ng lathalain',
	'articlefeedback-desc' => 'Pagsusuri ng lathalain (paunang bersyon)',
	'articlefeedback-survey-question-origin' => 'Anong pahina ang kinaroroonan mo noong simulan mo ang pagtatanung-tanong na ito?',
	'articlefeedback-survey-question-whyrated' => 'Mangyari sabihin sa amin kung bakit mo inantasan ng ganito ang pahinang ito ngayon (lagyan ng tsek ang lahat ng maaari):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Nais kong umambag sa pangkalahatang kaantasan ng pahina',
	'articlefeedback-survey-answer-whyrated-development' => 'Umaasa ako na ang aking pag-aantas ay positibong makakaapekto sa pagpapaunlad ng pahina',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Nais kong makapag-ambag sa {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Nais ko ang pagpapamahagi ng aking opinyon',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Hindi ako nagbigay ng pag-aantas ngayon, subalit nais kong magbigay ng puna sa hinaharap',
	'articlefeedback-survey-answer-whyrated-other' => 'Iba pa',
	'articlefeedback-survey-question-useful' => 'Naniniwala ka ba na ang mga pag-aantas na ibinigay ay magagamit at malinaw?',
	'articlefeedback-survey-question-useful-iffalse' => 'Bakit?',
	'articlefeedback-survey-question-comments' => 'Mayroon ka pa bang karagdagang mga puna?',
	'articlefeedback-survey-submit' => 'Ipasa',
	'articlefeedback-survey-title' => 'Pakisagot ang ilang mga katanungan',
	'articlefeedback-survey-thanks' => 'Salamat sa pagsagot sa mga pagtatanong.',
	'articlefeedback-error' => 'Naganap ang isang kamalian.  Paki subukan uli mamaya.',
	'articlefeedback-form-switch-label' => 'Antasan ang pahinang ito',
	'articlefeedback-form-panel-title' => 'Antasan ang pahinang ito',
	'articlefeedback-form-panel-instructions' => 'Mangyaring maglaan ng isang sandali upang antasan ang pahinang ito.',
	'articlefeedback-form-panel-clear' => 'Alisin ang antas na ito',
	'articlefeedback-form-panel-expertise' => 'Talagang maalam ako hinggil sa paksang ito (maaaring wala ito)',
	'articlefeedback-form-panel-expertise-studies' => 'Mayroon akong kaugnay na baitang sa dalubhasaan/pamantasan',
	'articlefeedback-form-panel-expertise-profession' => 'Bahagi ito ng aking propesyon',
	'articlefeedback-form-panel-expertise-hobby' => 'Isa itong malalim na pansariling hilig',
	'articlefeedback-form-panel-expertise-other' => 'Hindi nakatala rito ang pinagmulan ng aking kaalaman',
	'articlefeedback-form-panel-helpimprove' => 'Nais kong painamin ang Wikipedia, padalhan ako ng isang e-liham (maaaring wala ito)',
	'articlefeedback-form-panel-helpimprove-note' => 'Padadalhan ka namin ng isang e-liham ng pagtitiyak. Hindi namin ibabahagi ang tirahan mo kaninuman. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Patakaran sa paglilihim',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Patakaran sa paglilihim',
	'articlefeedback-form-panel-submit' => 'Ipadala ang mga antas',
	'articlefeedback-form-panel-success' => 'Matagumpay na nasagip',
	'articlefeedback-form-panel-expiry-title' => 'Paso na ang mga pag-aantas mo',
	'articlefeedback-form-panel-expiry-message' => 'Mangyaring pakisuring muli ang pahinang ito at magpasa ng bagong mga antas.',
	'articlefeedback-report-switch-label' => 'Tingnan ang mga antas ng pahina',
	'articlefeedback-report-panel-title' => 'Mga antas ng pahina',
	'articlefeedback-report-panel-description' => 'Pangkasalukuyang pangkaraniwang mga antas.',
	'articlefeedback-report-empty' => 'Walang mga antas',
	'articlefeedback-report-ratings' => '$1 mga antas',
	'articlefeedback-field-trustworthy-label' => 'Mapagkakatiwalaan',
	'articlefeedback-field-trustworthy-tip' => 'Pakiramdam mo ba na ang pahinang ito ay may sapat na mga pagbabanggit ng pinagsipian at ang mga pagbabanggit na ito ay mula sa mapagkakatiwalaang mga pinagkunan?',
	'articlefeedback-field-complete-label' => 'Buo',
	'articlefeedback-field-complete-tip' => 'Sa tingin mo ba ang pahinang ito ay sumasakop sa mahahalagang mga lugar ng paksang nararapat?',
	'articlefeedback-field-objective-label' => 'Palayunin',
	'articlefeedback-field-objective-tip' => 'Nararamdaman mo ba na ang pahinang ito ay nagpapakita ng patas na pagkatawan sa lahat ng mga pananaw hinggil sa paksa?',
	'articlefeedback-field-wellwritten-label' => 'Mainam ang pagkakasulat',
	'articlefeedback-field-wellwritten-tip' => 'Sa tingin mo ba ang pahinang ito ay maayos ang pagkakabuo at mabuti ang pagkakasulat?',
	'articlefeedback-pitch-reject' => 'Maaaring mamaya',
	'articlefeedback-pitch-or' => 'o',
	'articlefeedback-pitch-thanks' => 'Salamat! Nasagip na ang iyong mga pag-aantas.',
	'articlefeedback-pitch-survey-message' => 'Mangyaring maglaan ng isang sandali upang buuin ang iyong maikling pagbibigay-tugon.',
	'articlefeedback-pitch-survey-accept' => 'Simulan ang pagtugon',
	'articlefeedback-pitch-join-message' => 'Ninais mo bang makalikha ng isang akawnt?',
	'articlefeedback-pitch-join-body' => 'Ang isang akawnt ay makakatulong sa iyong masubaybayan ang mga binago mo, makalahok sa mga usapan, at maging isang bahagi ng pamayanan.',
	'articlefeedback-pitch-join-accept' => 'Lumikha ng isang akawnt',
	'articlefeedback-pitch-join-login' => 'Lumagdang papasok',
	'articlefeedback-pitch-edit-message' => 'Alam mo bang mababago mo ang pahinang ito?',
	'articlefeedback-pitch-edit-accept' => 'Baguhin ang pahinang ito',
	'articlefeedback-survey-message-success' => 'Salamat sa pagpuno ng tugon.',
	'articlefeedback-survey-message-error' => 'Naganap ang isang kamalian.
Paki subukan uli mamaya.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Mga matataas at mga mabababa sa araw na ito',
	'articleFeedback-table-caption-weeklymostchanged' => 'Pinaka nabago sa linggong ito',
	'articleFeedback-table-caption-recentlows' => 'Kamakailang mga mabababa',
	'articleFeedback-table-heading-page' => 'Pahina',
	'articleFeedback-table-heading-average' => 'Karaniwan',
	'articlefeedback-emailcapture-response-body' => 'Kumusta!

Salamat sa pagpapahayag mo ng pagnanais na makatulong sa pagpapainam ng {{SITENAME}}.

Mangyaring kumuha ng isang sandli upang tiyakin ang iyong e-liham sa pamamagitan ng pagpindot sa kawing na nasa ibaba: 

$1

Maaari mo ring dalawin ang:

$2

At ipasok ang sumusunod na kodigo ng pagtitiyak:

$3

Makikipag-ugnayan kami sa loob ng ilang mga sandali sa kung paano ka makakatulong sa pagpapainam ng {{SITENAME}}.

Kung hindi ikaw ang nagpasimula ng kahilingang ito, mangyaring huwag pansinin ang e-liham na ito at hindi na kami magpapadala ng iba pa.

Pinakamainam na mga mithiin para sa iyo at nagpapasalamat,
Ang pangkat ng {{SITENAME}}',
);

/** Turkish (Türkçe)
 * @author 82-145
 * @author CnkALTDS
 * @author Emperyan
 * @author Joseph
 * @author Karduelis
 */
$messages['tr'] = array(
	'articlefeedback' => 'Madde değerlendirmesi',
	'articlefeedback-desc' => 'Madde Geridönütleri',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Fikirlerimi paylaşmayı seviyorum',
	'articlefeedback-survey-answer-whyrated-other' => 'Diğer',
	'articlefeedback-survey-question-useful-iffalse' => 'Neden?',
	'articlefeedback-survey-submit' => 'Gönder',
	'articlefeedback-survey-title' => 'Lütfen birkaç soruya yanıt verin',
	'articlefeedback-survey-thanks' => 'Anketi doldurduğunuz için teşekkür ederiz.',
	'articlefeedback-pitch-or' => 'veya',
	'articlefeedback-pitch-join-accept' => 'Yeni hesap edin',
	'articlefeedback-pitch-join-login' => 'Oturum aç',
	'articlefeedback-survey-message-success' => 'Anketi doldurduğunuz için teşekkür ederiz.',
);

/** Ukrainian (Українська)
 * @author Arturyatsko
 * @author Тест
 */
$messages['uk'] = array(
	'articlefeedback' => 'Оцінка статті',
	'articlefeedback-desc' => 'Оцінка статті (експериментальний варіант)',
	'articlefeedback-survey-question-whyrated' => 'Будь ласка, розкажіть нам, чому Ви оцінили цю сторінку сьогодні (позначте все, що відповідає):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Я хотів внести свій внесок у загальний рейтинг сторінки',
	'articlefeedback-survey-answer-whyrated-development' => 'Я сподіваюся, що мій рейтинг буде позитивно впливати на розвиток сторінки',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Я хотів внести свій внесок у {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Мені подобається ділитися своєю думкою',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Я не оцінив сторінку сьогодні, але хочу залишити відгук про цю функцію',
	'articlefeedback-survey-answer-whyrated-other' => 'Інше',
	'articlefeedback-survey-question-useful' => 'Чи вважаєте Ви поставлені оцінки корисними та зрозумілими?',
	'articlefeedback-survey-question-useful-iffalse' => 'Чому?',
	'articlefeedback-survey-question-comments' => 'Чи є у Вас якісь додаткові коментарі?',
	'articlefeedback-survey-submit' => 'Відправити',
	'articlefeedback-survey-title' => 'Будь ласка, дайте відповідь на кілька питань',
	'articlefeedback-survey-thanks' => 'Дякуємо за заповнення опитування.',
	'articlefeedback-error' => 'Сталася помилка. Будь ласка, повторіть спробу пізніше.',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Політика конфіденційності',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Політика конфіденційності',
	'articlefeedback-report-switch-label' => 'Показати оцінки сторінки',
	'articlefeedback-pitch-or' => 'або',
	'articlefeedback-pitch-join-accept' => 'Створити обліковий запис',
	'articlefeedback-pitch-edit-accept' => 'Редагувати цю сторінку',
	'articleFeedback-table-heading-page' => 'Сторінка',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'articlefeedback' => 'Valutassion pagina',
	'articlefeedback-desc' => 'Valutassion pagina (version de prova)',
	'articlefeedback-survey-question-whyrated' => 'Dine el motivo par cui te ghè valutà sta pagina (te poli selessionar più opzioni):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Voléa contribuir a la valutassion conplessiva de la pagina',
	'articlefeedback-survey-answer-whyrated-development' => "Spero che el me giudissio l'influensa positivamente el svilupo de sta pagina",
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Go vossù contribuire a {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Me piase condivìdar la me opinion',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'No go dato valutassion uncuò, ma go volù lassar un comento su la funsionalità',
	'articlefeedback-survey-answer-whyrated-other' => 'Altro',
	'articlefeedback-survey-question-useful' => 'Pensito che le valutassion fornìe le sia utili e ciare?',
	'articlefeedback-survey-question-useful-iffalse' => 'Parché?',
	'articlefeedback-survey-question-comments' => 'Gheto altre robe da dir?',
	'articlefeedback-survey-submit' => 'Manda',
	'articlefeedback-survey-title' => 'Par piaser, rispondi a qualche domanda',
	'articlefeedback-survey-thanks' => 'Grassie de aver conpilà el questionario.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'articlefeedback' => 'Đánh giá bài',
	'articlefeedback-desc' => 'Đánh giá bài (phiên bản thử nghiệm)',
	'articlefeedback-survey-question-origin' => 'Bạn đang xem trang nào lúc khi bắt đầu cuộc khảo sát này?',
	'articlefeedback-survey-question-whyrated' => 'Xin hãy cho chúng tôi biết lý do tại sao bạn đánh giá trang này hôm nay (kiểm tra các hộp thích hợp):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => 'Tôi muốn có ảnh hưởng đến đánh giá tổng cộng của trang',
	'articlefeedback-survey-answer-whyrated-development' => 'Tôi hy vọng rằng đánh giá của tôi sẽ có ảnh hưởng tích cực đến sự phát triển của trang',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => 'Tôi muốn đóng góp vào {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => 'Tôi thích đưa ý kiến của tôi',
	'articlefeedback-survey-answer-whyrated-didntrate' => 'Tôi không đánh giá hôm nay, nhưng vẫn muốn phản hồi về tính năng',
	'articlefeedback-survey-answer-whyrated-other' => 'Khác',
	'articlefeedback-survey-question-useful' => 'Bạn có tin rằng các đánh giá được cung cấp là hữu ích và dễ hiểu?',
	'articlefeedback-survey-question-useful-iffalse' => 'Tạo sao?',
	'articlefeedback-survey-question-comments' => 'Bạn có ý kiến bổ sung?',
	'articlefeedback-survey-submit' => 'Gửi',
	'articlefeedback-survey-title' => 'Xin vui lòng trả lời một số câu hỏi',
	'articlefeedback-survey-thanks' => 'Cám ơn bạn đã điền khảo sát.',
	'articlefeedback-error' => 'Đã gặp lỗi. Xin vui lòng thử lại sau.',
	'articlefeedback-form-switch-label' => 'Đánh giá trang này',
	'articlefeedback-form-panel-title' => 'Đánh giá trang này',
	'articlefeedback-form-panel-instructions' => 'Xin hãy dành một chút thì giờ để đánh giá trang này.',
	'articlefeedback-form-panel-clear' => 'Hủy đánh giá này',
	'articlefeedback-form-panel-expertise' => 'Tôi rất am hiểu về đề tài này (tùy chọn)',
	'articlefeedback-form-panel-expertise-studies' => 'Tôi đã lấy bằng có liên quan tại trường cao đẳng / đại học',
	'articlefeedback-form-panel-expertise-profession' => 'Nó thuộc về nghề nghiệp của tôi',
	'articlefeedback-form-panel-expertise-hobby' => 'Tôi quan tâm một cách thiết tha về đề tài này',
	'articlefeedback-form-panel-expertise-other' => 'Tôi hiểu về đề tài này vì lý do khác',
	'articlefeedback-form-panel-helpimprove' => 'Tôi muốn giúp cải tiến Wikipedia – gửi cho tôi một thư điện tử (tùy chọn)',
	'articlefeedback-form-panel-helpimprove-note' => 'Chúng tôi sẽ gửi cho bạn một thư điện tử xác nhận. Chúng tôi sẽ không chia sẽ địa chỉ của bạn với bất cứ ai. $1',
	'articlefeedback-form-panel-helpimprove-privacy' => 'Chính sách về sự riêng tư',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:Chính sách về sự riêng tư',
	'articlefeedback-form-panel-submit' => 'Gửi đánh giá',
	'articlefeedback-form-panel-success' => 'Lưu thành công',
	'articlefeedback-form-panel-expiry-title' => 'Các đánh giá của bạn đã hết hạn',
	'articlefeedback-form-panel-expiry-message' => 'Xin vui lòng coi lại và đánh giá lại trang này.',
	'articlefeedback-report-switch-label' => 'Xem các đánh giá của trang',
	'articlefeedback-report-panel-title' => 'Đánh giá của trang',
	'articlefeedback-report-panel-description' => 'Đánh giá trung bình hiện tại',
	'articlefeedback-report-empty' => 'Không có đánh giá',
	'articlefeedback-report-ratings' => '$1 đánh giá',
	'articlefeedback-field-trustworthy-label' => 'Đáng tin',
	'articlefeedback-field-trustworthy-tip' => 'Bạn có cảm thấy rằng bày này chú thích nguồn gốc đầy đủ và đáng tin các nguồn?',
	'articlefeedback-field-complete-label' => 'Đầy đủ',
	'articlefeedback-field-complete-tip' => 'Bạn có cảm thấy rằng bài này bao gồm các đề tài cần thiết?',
	'articlefeedback-field-objective-label' => 'Trung lập',
	'articlefeedback-field-objective-tip' => 'Bạn có cảm thấy rằng bài này đại diện công bằng cho tất cả các quan điểm về các vấn đề?',
	'articlefeedback-field-wellwritten-label' => 'Viết hay',
	'articlefeedback-field-wellwritten-tip' => 'Bạn có cảm thấy rằng bài này được sắp xếp đàng hoàng có văn bản hay?',
	'articlefeedback-pitch-reject' => 'Không bây giờ',
	'articlefeedback-pitch-or' => 'hoặc',
	'articlefeedback-pitch-thanks' => 'Cám ơn! Đánh giá của bạn đã được lưu.',
	'articlefeedback-pitch-survey-message' => 'Hãy dành một chút thời gian để phản hồi một cuộc khảo sát ngắn.',
	'articlefeedback-pitch-survey-accept' => 'Bắt đầu trả lời',
	'articlefeedback-pitch-join-message' => 'Bạn có muốn mở tài khoản tại đây?',
	'articlefeedback-pitch-join-body' => 'Một tài khoản sẽ giúp bạn theo dõi các trang mà bạn sửa đổi và tham gia các cuộc thảo luận và hoạt động của cộng đồng.',
	'articlefeedback-pitch-join-accept' => 'Mở tài khoản',
	'articlefeedback-pitch-join-login' => 'Đăng nhập',
	'articlefeedback-pitch-edit-message' => 'Bạn có biết rằng bạn có thể sửa đổi trang này?',
	'articlefeedback-pitch-edit-accept' => 'Sửa đổi trang này',
	'articlefeedback-survey-message-success' => 'Cám ơn bạn đã điền khảo sát.',
	'articlefeedback-survey-message-error' => 'Đã gặp lỗi.
Xin hãy thử lại sau.',
	'articleFeedback-table-caption-dailyhighsandlows' => 'Các điểm cao và thấp nhất hôm nay',
	'articleFeedback-table-caption-weeklymostchanged' => 'Các điểm thay đổi nhiều nhất vào tuần này',
	'articleFeedback-table-caption-recentlows' => 'Các điểm thấp gần đây',
	'articleFeedback-table-heading-page' => 'Trang',
	'articleFeedback-table-heading-average' => 'Trung bình',
	'articlefeedback-emailcapture-response-body' => 'Xin chào!

Cám ơn bạn đã bày tỏ quan tâm về việc giúp cải tiến {{SITENAME}}.

Xin vui lòng dành một chút thời gian để xác nhận địa chỉ thư điện tử của bạn dùng liên kết dưới đây:

$1

Bạn cũng có thể ghé vào:

$2

và nhập mã xác nhận sau:

$3

Chúng tôi sẽ sớm liên lạc với bạn với thông tin về giúp cải tiến {{SITENAME}}.

Nếu bạn không phải là người yêu cầu thông tin này, xin vui lòng kệ thông điệp này và chúng tôi sẽ không gửi cho bạn bất cứ gì nữa.

Thân mến và cám ơn,
Nhóm {{SITENAME}}',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'articlefeedback' => '条目评级',
	'articlefeedback-desc' => '条目评级（测试版）',
	'articlefeedback-survey-question-whyrated' => '请告诉我们今天你为何评价了此页面(选择所有符合的):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => '我想对网页的总体评价作贡献',
	'articlefeedback-survey-answer-whyrated-development' => '我希望我的评价能给此网页带来正面的影响',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => '我想对{{SITENAME}}做出贡献',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => '我愿意共享我的观点',
	'articlefeedback-survey-answer-whyrated-didntrate' => '我今天没有进行评价，但我希望对特性进行反馈。',
	'articlefeedback-survey-answer-whyrated-other' => '其他',
	'articlefeedback-survey-question-useful' => '你认为提供的评价有用并清晰吗？',
	'articlefeedback-survey-question-useful-iffalse' => '为什么？',
	'articlefeedback-survey-question-comments' => '你还有什么想说的吗？',
	'articlefeedback-survey-submit' => '提交',
	'articlefeedback-survey-title' => '请回答几个问题',
	'articlefeedback-survey-thanks' => '谢谢您回答问卷。',
	'articlefeedback-form-switch-label' => '提供意见',
	'articlefeedback-form-panel-title' => '您的意见',
	'articlefeedback-form-panel-instructions' => '请花些时间为这个条目打分',
	'articlefeedback-form-panel-submit' => '上载意见',
	'articlefeedback-field-complete-label' => '完成',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 * @author 阿pp
 */
$messages['zh-hans'] = array(
	'articlefeedback' => '条目评级',
	'articlefeedback-desc' => '条目评级（测试版）',
	'articlefeedback-survey-question-origin' => '哪一页，你在你开始这项统计调查的时候？',
	'articlefeedback-survey-question-whyrated' => '请告诉我们今天你为何评价了此页面(选择所有符合的):',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => '我想对网页的总体评价作贡献',
	'articlefeedback-survey-answer-whyrated-development' => '我希望我的评价能给此网页带来正面的影响',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => '我想对{{SITENAME}}做出贡献',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => '我愿意共享我的观点',
	'articlefeedback-survey-answer-whyrated-didntrate' => '我今天没有进行评价，但我希望对特性进行反馈。',
	'articlefeedback-survey-answer-whyrated-other' => '其他',
	'articlefeedback-survey-question-useful' => '你认为提供的评价有用并清晰吗？',
	'articlefeedback-survey-question-useful-iffalse' => '为什么？',
	'articlefeedback-survey-question-comments' => '你还有什么想说的吗？',
	'articlefeedback-survey-submit' => '提交',
	'articlefeedback-survey-title' => '请回答几个问题',
	'articlefeedback-survey-thanks' => '谢谢您回答问卷。',
	'articlefeedback-error' => '发生了一个错误。请稍后重试。',
	'articlefeedback-form-switch-label' => '评论此页',
	'articlefeedback-form-panel-title' => '评论此页',
	'articlefeedback-form-panel-instructions' => '请花些时间为这个条目打分',
	'articlefeedback-form-panel-clear' => '删除此分级',
	'articlefeedback-form-panel-expertise' => '我非常了解本主题（可选）',
	'articlefeedback-form-panel-expertise-studies' => '我有与其有关的大学学位',
	'articlefeedback-form-panel-expertise-profession' => '这我的专业的一部分',
	'articlefeedback-form-panel-expertise-hobby' => '这是个人隐私',
	'articlefeedback-form-panel-expertise-other' => '此处未列出我的知识的来源',
	'articlefeedback-form-panel-helpimprove' => '我想帮助改善维基百科，请给我发送一封电子邮件（可选）',
	'articlefeedback-form-panel-helpimprove-note' => '我们将向您发送确认电子邮件。我们不会与任何人共享您的地址。$1',
	'articlefeedback-form-panel-helpimprove-privacy' => '私隐政策',
	'articlefeedback-form-panel-helpimprove-privacylink' => 'Project:隐私政策',
	'articlefeedback-form-panel-submit' => '提交意见',
	'articlefeedback-form-panel-success' => '成功保存',
	'articlefeedback-form-panel-expiry-title' => '您的评级已过期',
	'articlefeedback-form-panel-expiry-message' => '请重新评估此页并提交新的评级。',
	'articlefeedback-report-switch-label' => '视图页面评级',
	'articlefeedback-report-panel-title' => '页面评级',
	'articlefeedback-report-panel-description' => '目前平均评分',
	'articlefeedback-report-empty' => '没有评级',
	'articlefeedback-report-ratings' => '$1评级',
	'articlefeedback-field-trustworthy-label' => '值得信赖',
	'articlefeedback-field-trustworthy-tip' => '你觉得这页有足够的引文和这些引文来自可信来源吗？',
	'articlefeedback-field-complete-label' => '完成',
	'articlefeedback-field-complete-tip' => '您觉得此页有包括基本主题领域吗？',
	'articlefeedback-field-objective-label' => '无偏',
	'articlefeedback-field-objective-tip' => '你觉得此页所显示的所有观点的公平表示对这一问题吗？',
	'articlefeedback-field-wellwritten-label' => '写得很好',
	'articlefeedback-field-wellwritten-tip' => '你觉得此页是完善和写得很好吗？',
	'articlefeedback-pitch-reject' => '也许以后',
	'articlefeedback-pitch-or' => '或者',
	'articlefeedback-pitch-thanks' => '谢谢！已保存您的评级。',
	'articlefeedback-pitch-survey-message' => '请花些时间完成简短的调查。',
	'articlefeedback-pitch-survey-accept' => '开始调查',
	'articlefeedback-pitch-join-message' => '您要创建帐户吗？',
	'articlefeedback-pitch-join-body' => '帐户将帮助您跟踪您所做的编辑，参与讨论，并成为社区的一部分。',
	'articlefeedback-pitch-join-accept' => '创建帐户',
	'articlefeedback-pitch-join-login' => '登录',
	'articlefeedback-pitch-edit-message' => '您知道您可以编辑此页吗？',
	'articlefeedback-pitch-edit-accept' => '编辑此页',
	'articlefeedback-survey-message-success' => '谢谢您回答问卷。',
	'articlefeedback-survey-message-error' => '出现错误。
请稍后再试。',
	'articleFeedback-table-caption-dailyhighsandlows' => '今天的新鲜事',
	'articleFeedback-table-caption-weeklymostchanged' => '本周最多更改',
	'articleFeedback-table-caption-recentlows' => '近期低点',
	'articleFeedback-table-heading-page' => '页面',
	'articleFeedback-table-heading-average' => '平均',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Hydra
 * @author Mark85296341
 */
$messages['zh-hant'] = array(
	'articlefeedback' => '條目評級',
	'articlefeedback-desc' => '條目評級',
	'articlefeedback-survey-question-whyrated' => '請讓我們知道你為什麼額定此頁今日（檢查所有適用）：',
	'articlefeedback-survey-answer-whyrated-contribute-rating' => '我想有助於提升整體的額定頁',
	'articlefeedback-survey-answer-whyrated-development' => '我希望我的評分將積極影響發展的頁面',
	'articlefeedback-survey-answer-whyrated-contribute-wiki' => '我想幫助 {{SITENAME}}',
	'articlefeedback-survey-answer-whyrated-sharing-opinion' => '我喜歡分享我的意見',
	'articlefeedback-survey-answer-whyrated-didntrate' => '我沒有提供收視率的今天，但想給的反饋功能',
	'articlefeedback-survey-answer-whyrated-other' => '其他',
	'articlefeedback-survey-question-useful' => '你相信提供的收視率是有用的，清楚了嗎？',
	'articlefeedback-survey-question-useful-iffalse' => '為什麼？',
	'articlefeedback-survey-question-comments' => '你有什麼其他意見？',
	'articlefeedback-survey-submit' => '提交',
	'articlefeedback-survey-title' => '請回答幾個問題',
	'articlefeedback-survey-thanks' => '感謝您填寫調查表。',
	'articlefeedback-error' => '發生了錯誤。請稍後再試。',
	'articlefeedback-form-switch-label' => '評價這個網頁',
	'articlefeedback-form-panel-title' => '評價這個網頁',
	'articlefeedback-form-panel-instructions' => '請花一點時間來評價這個網頁。',
	'articlefeedback-form-panel-clear' => '刪除本次評級',
	'articlefeedback-form-panel-expertise' => '我有先驗知識對這個話題',
	'articlefeedback-form-panel-expertise-studies' => '我在大學已經研究',
	'articlefeedback-form-panel-expertise-profession' => '我的專業的一部分',
	'articlefeedback-form-panel-expertise-hobby' => '這是關係到我的愛好或興趣',
	'articlefeedback-form-panel-expertise-other' => '我的知識的來源不在此列',
	'articlefeedback-form-panel-submit' => '提交反饋',
	'articlefeedback-report-switch-label' => '查看網頁評級',
	'articlefeedback-report-panel-title' => '網頁評級',
	'articlefeedback-report-panel-description' => '目前的平均收視率。',
	'articlefeedback-report-empty' => '無評分',
	'articlefeedback-report-ratings' => '$1 評級',
	'articlefeedback-field-trustworthy-label' => '可靠',
	'articlefeedback-field-trustworthy-tip' => '你覺得這個頁面已經足夠引文和這些引文來自可靠來源？',
	'articlefeedback-field-complete-label' => '完成',
);

