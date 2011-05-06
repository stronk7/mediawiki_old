<?php
/**
 * Configuration file for webfonts
 * First font is the default font for the language
 * @file
 * @ingroup Extensions
 */
$fontsPath = "$wgScriptPath/extensions/WebFonts/fonts";
$wgWebFonts = array(
	'fonts' => array(
		'RufScript' => array(
			'eot' => "$fontsPath/en/Rufscript.eot",
			'ttf' => "$fontsPath/en/Rufscript.ttf",
			'woff' => "$fontsPath/en/Rufscript.woff",
		),

		'Perizia' => array(
			'eot' => "$fontsPath/en/Perizia.eot",
			'ttf' => "$fontsPath/en/Perizia.ttf",
			'woff' => "$fontsPath/en/Perizia.woff",
		),
		'Ubuntu' => array(
			'eot' => "$fontsPath/en/ubuntu-r-webfont.eot",
			'ttf' => "$fontsPath/en/ubuntu-r.ttf",
			'woff' => "$fontsPath/en/ubuntu-r-webfont.woff",
			'svg' => "$fontsPath/en/ubuntu-r-webfont.svg",
			),
		'Dyuthi' => array(
			'eot' => "$fontsPath/ml/Dyuthi.eot",
			'ttf' => "$fontsPath/ml/Dyuthi.ttf",
			'woff' => "$fontsPath/ml/Dyuthi.woff",
			'size' => 32,
			'normalization' => array(
				"ൾ" => "ള്‍",
				"ൻ" => "ന്‍",
				"ർ" => "ര്‍",
				"ൺ "=> "ണ്‍",
				"ൽ" => "ല്‍",
				"ൿ" => "ക്‍ ",
				"ൻ‍റ" => "ന്റ",
				"ന്‍റെ" => "ന്റെ"
				)
				),

		'Meera' => array(
			'eot' => "$fontsPath/ml/Meera.eot",
			'ttf' => "$fontsPath/ml/Meera.ttf",
			'woff' => "$fontsPath/ml/Meera.woff",
			'size' => 20,
			'normalization' => array(
				"ൾ" => "ള്‍",
				"ൻ" => "ന്‍",
				"ർ" => "ര്‍",
				"ൺ "=> "ണ്‍",
				"ൽ" => "ല്‍",
				"ൿ" => "ക്‍ ",
				"ൻ‍റ" => "ന്റ",
				"ന്‍റെ" => "ന്റെ"
				)
				),

		'Rachana' => array(
			'eot' => "$fontsPath/ml/Rachana.eot",
			'ttf' => "$fontsPath/ml/Rachana.ttf",
			'woff' => "$fontsPath/ml/Rachana.woff",
			'normalization' => array(
				"ൾ" => "ള്‍",
				"ൻ" => "ന്‍",
				"ർ" => "ര്‍",
				"ൺ "=> "ണ്‍",
				"ൽ" => "ല്‍",
				"ൿ" => "ക്‍ ",
				"ൻ‍റ" => "ന്റ",
				"ന്‍റെ" => "ന്റെ"
				)
				),
		'RaghuMalayalam' => array(
			'eot' => "$fontsPath/ml/RaghuMalayalam.eot",
			'ttf' => "$fontsPath/ml/RaghuMalayalam.ttf",
			'woff' => "$fontsPath/ml/RaghuMalayalam.woff",
			'normalization' => array(
				"ൾ" => "ള്‍",
				"ൻ" => "ന്‍",
				"ർ" => "ര്‍",
				"ൺ "=> "ണ്‍",
				"ൽ" => "ല്‍",
				"ൿ" => "ക്‍ ",
				"ൻ‍റ" => "ന്റ",
				"ന്‍റെ" => "ന്റെ"
				)
				),
		'Lohit Oriya' => array(
			'eot' => "$fontsPath/or/Lohit-Oriya.eot",
			'ttf' => "$fontsPath/or/Lohit-Oriya.ttf",
			'woff' => "$fontsPath/or/Lohit-Oriya.woff",
				),
		'Lohit Tamil' => array(
			'eot' => "$fontsPath/ta/Lohit-Tamil.eot",
			'ttf' => "$fontsPath/ta/Lohit-Tamil.ttf",
			'woff' => "$fontsPath/ta/Lohit-Tamil.woff",
				),
		'Lohit Telugu' => array(
			'eot' => "$fontsPath/te/LohitTelugu.eot",
			'ttf' => "$fontsPath/te/LohitTelugu.ttf",
			'woff' => "$fontsPath/te/LohitTelugu.woff",
				),
		'Lohit Bengali' => array(
			'eot' => "$fontsPath/bn/LohitBengali.eot",
			'ttf' => "$fontsPath/bn/LohitBengali.ttf",
			'woff' => "$fontsPath/bn/LohitBengali.woff",
				),
		'Samyak Gujarati' => array(
			'eot' => "$fontsPath/gu/SamyakGujarati.eot",
			'ttf' => "$fontsPath/gu/SamyakGujarati.ttf",
			'woff' => "$fontsPath/gu/SamyakGujarati.woff",
				),
		'Lohit Hindi' => array(
			'eot' => "$fontsPath/hi/LohitHindi.eot",
			'ttf' => "$fontsPath/hi/LohitHindi.ttf",
			'woff' => "$fontsPath/hi/LohitHindi.woff",
				),
		'Samyak Devanagari' => array(
			'eot' => "$fontsPath/hi/SamyakDevanagari.eot",
			'ttf' => "$fontsPath/hi/SamyakDevanagari.ttf",
			'woff' => "$fontsPath/hi/SamyakDevanagari.woff",
				),
		'David CLM' => array(
			'eot' => "$fontsPath/he/DavidCLM-Medium.eot",
			'ttf' => "$fontsPath/he/DavidCLM-Medium.ttf",
			'woff' => "$fontsPath/he/DavidCLM-Medium.woff",
				),
		'Hadasim CLM' => array(
			'eot' => "$fontsPath/he/HadasimCLM-Regular.eot",
			'ttf' => "$fontsPath/he/HadasimCLM-Regular.ttf",
			'woff' => "$fontsPath/he/HadasimCLM-Regular.woff",
				),
		'Ezra SIL' => array(
			'eot' => "$fontsPath/he/EzraSILSR.eot",
			'ttf' => "$fontsPath/he/EzraSILSR.ttf",
			'woff' => "$fontsPath/he/EzraSILSR.woff",
				),
		'Kedage' => array(
			'eot' => "$fontsPath/kn/Kedage.eot",
			'ttf' => "$fontsPath/kn/Kedage.ttf",
			'woff' => "$fontsPath/kn/Kedage.woff",
				),
		'Lohit Kannada' => array(
			'eot' => "$fontsPath/kn/LohitKannada.eot",
			'ttf' => "$fontsPath/kn/LohitKannada.ttf",
			'woff' => "$fontsPath/kn/LohitKannada.woff",
				),
		'Masterpiece Uni Sans' => array(
			'eot' => "$fontsPath/my/MasterpieceUniSans.eot",
			'ttf' => "$fontsPath/my/MasterpieceUniSans.ttf",
			'woff' => "$fontsPath/my/MasterpieceUniSans.woff",
			'svg' =>  "$fontsPath/my/MasterpieceUniSans.svg",
		),
		'Padauk-Regular' => array(
			'eot' => "$fontsPath/my/Padauk-Regular.eot",
			'ttf' => "$fontsPath/my/Padauk-Regular.ttf",
			'woff' => "$fontsPath/my/Padauk-Regular.woff",
			'svg' =>  "$fontsPath/my/Padauk-Regular.svg",
		),
		'Myanmar3' => array(
			'eot' => "$fontsPath/my/Myanmar3.eot",
			'ttf' => "$fontsPath/my/Myanmar3.ttf",
			'woff' => "$fontsPath/my/Myanmar3.woff",
			'svg' =>  "$fontsPath/my/Myanmar3.svg",
		),
		'Yunghkio' => array(
			'eot' => "$fontsPath/my/Yunghkio.eot",
			'ttf' => "$fontsPath/my/Yunghkio.ttf",
			'woff' => "$fontsPath/my/Yunghkio.woff",
			'svg' =>  "$fontsPath/my/Yunghkio.svg",
		),
		'KhmerOSbattambang'=> array(
			'eot' => "$fontsPath/km/KhmerOSbattambang.eot",
			'ttf' => "$fontsPath/km/KhmerOSbattambang.ttf",
			'woff' => "$fontsPath/km/KhmerOSbattambang.woff",
			'svg' =>  "$fontsPath/km/KhmerOSbattambang.svg",
		),
		'KhmerOSbokor'=> array(
			'eot' => "$fontsPath/km/KhmerOSbokor.eot",
			'ttf' => "$fontsPath/km/KhmerOSbokor.ttf",
			'woff' => "$fontsPath/km/KhmerOSbokor.woff",
			'svg' =>  "$fontsPath/km/KhmerOSbokor.svg",
		),
		'KhmerOS' => array(
			'eot' => "$fontsPath/km/KhmerOS.eot",
			'ttf' => "$fontsPath/km/KhmerOS.ttf",
			'woff' => "$fontsPath/km/KhmerOS.woff",
			'svg' =>  "$fontsPath/km/KhmerOS.svg",
		),
		'KhmerOSsiemreap' => array(
			'eot' => "$fontsPath/km/KhmerOSsiemreap.eot",
			'ttf' => "$fontsPath/km/KhmerOSsiemreap.ttf",
			'woff' => "$fontsPath/km/KhmerOSsiemreap.woff",
			'svg' =>  "$fontsPath/km/KhmerOSsiemreap.svg",
		),
		'KhmerOSmuollight' => array(
			'eot' => "$fontsPath/km/KhmerOSmuollight.eot",
			'ttf' => "$fontsPath/km/KhmerOSmuollight.ttf",
			'woff' => "$fontsPath/km/KhmerOSmuollight.woff",
			'svg' =>  "$fontsPath/km/KhmerOSmuollight.svg",
		),
		'KhmerOSmuol' => array(
			'eot' => "$fontsPath/km/KhmerOSmuol.eot",
			'ttf' => "$fontsPath/km/KhmerOSmuol.ttf",
			'woff' => "$fontsPath/km/KhmerOSmuol.woff",
			'svg' =>  "$fontsPath/km/KhmerOSmuol.svg",
		),
		'KhmerOSmuolpali' => array(
			'eot' => "$fontsPath/km/KhmerOSmuolpali.eot",
			'ttf' => "$fontsPath/km/KhmerOSmuolpali.ttf",
			'woff' => "$fontsPath/km/KhmerOSmuolpali.woff",
			'svg' =>  "$fontsPath/km/KhmerOSmuolpali.svg",
		),
		'KhmerOSfreehand' => array(
			'eot' => "$fontsPath/km/KhmerOSfreehand.eot",
			'ttf' => "$fontsPath/km/KhmerOSfreehand.ttf",
			'woff' => "$fontsPath/km/KhmerOSfreehand.woff",
			'svg' =>  "$fontsPath/km/KhmerOSfreehand.svg",
		),
		'KhmerOSfasthand' => array(
			'eot' => "$fontsPath/km/KhmerOSfasthand.eot",
			'ttf' => "$fontsPath/km/KhmerOSfasthand.ttf",
			'woff' => "$fontsPath/km/KhmerOSfasthand.woff",
			'svg' =>  "$fontsPath/km/KhmerOSfasthand.svg",
		),

		),

	'languages' => array(
		'en' => array( 'RufScript', 'Perizia', 'Ubuntu' ),
		'ml' => array( 'Meera', 'Rachana' , 'Dyuthi', 'RaghuMalayalam'),
		'or' => array( 'Lohit Oriya'),
		'ta' => array( 'Lohit Tamil'),
		'te' => array( 'Lohit Telugu'),
		'bn' => array( 'Lohit Bengali'),
		'as' => array( 'Lohit Bengali'),
		'gu' => array( 'Samyak Gujarati'),
		'hi' => array( 'Samyak Devanagari', 'Lohit Hindi'),
		'mr' => array( 'Samyak Devanagari', 'Lohit Hindi'),
		'ks' => array( 'Samyak Devanagari', 'Lohit Hindi'),
		'he' => array( 'Ezra SIL', 'David CLM','Hadasim CLM'),
		'kn' => array( 'Kedage', 'Lohit Kannada'),
		'my' => array( 'Masterpiece Uni Sans','Padauk-Regular','Myanmar3','Yunghkio'),
		'km' => array('KhmerOSbattambang', 'KhmerOSsiemreap', 'KhmerOS', 'KhmerOSbokor', 'KhmerOSmuollight', 'KhmerOSmuol','KhmerOSmuolpali', 'KhmerOSfreehand', 'KhmerOSfasthand'),
		),
	);
