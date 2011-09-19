/**
 * Configuration file for webfonts
 * First font is the default font for the language
 */

(function ($) {
	$.webfonts = {};

	$.webfonts.config = {
		fonts: {
			RufScript: {
				eot: "en/Rufscript.eot",
				ttf: "en/Rufscript.ttf",
				woff: "en/Rufscript.woff"
			},
			Perizia: {
				eot: "en/Perizia.eot",
				ttf: "en/Perizia.ttf",
				woff: "en/Perizia.woff"
			},
			Ubuntu: {
				eot: "en/ubuntu-r-webfont.eot",
				ttf: "en/ubuntu-r.ttf",
				woff: "en/ubuntu-r-webfont.woff",
				svg: "en/ubuntu-r-webfont.svg"
			},
			
			AnjaliOldLipi: {
				eot: "ml/AnjaliOldLipi.eot",
				ttf: "ml/AnjaliOldLipi.ttf",
				woff: "ml/AnjaliOldLipi.woff"
			},
			Meera: {
				eot: "ml/Meera.eot",
				ttf: "ml/Meera.ttf",
				woff: "ml/Meera.woff",
				scale: 1.5,
				normalization: {
					"ൾ": "ള്‍",
					"ൻ": "ന്‍",
					"ർ": "ര്‍",
					"ൺ ": "ണ്‍",
					"ൽ": "ല്‍",
					"ൿ": "ക്‍ ",
					"ൻ‍റ": "ന്റ",
					"ന്‍റെ": "ന്റെ"
				}
			},
			Rachana: {
				eot: "ml/Rachana.eot",
				ttf: "ml/Rachana.ttf",
				woff: "ml/Rachana.woff",
				normalization: {
					"ൾ": "ള്‍",
					"ൻ": "ന്‍",
					"ർ": "ര്‍",
					"ൺ ": "ണ്‍",
					"ൽ": "ല്‍",
					"ൿ": "ക്‍ ",
					"ൻ‍റ": "ന്റ",
					"ന്‍റെ": "ന്റെ"
				}
			},
			RaghuMalayalam: {
				eot: "ml/RaghuMalayalam.eot",
				ttf: "ml/RaghuMalayalam.ttf",
				woff: "ml/RaghuMalayalam.woff",
				normalization: {
					"ൾ": "ള്‍",
					"ൻ": "ന്‍",
					"ർ": "ര്‍",
					"ൺ ": "ണ്‍",
					"ൽ": "ല്‍",
					"ൿ": "ക്‍ ",
					"ൻ‍റ": "ന്റ",
					"ന്‍റെ": "ന്റെ"
				}
			},
			
			"Lohit Oriya": {
				eot: "or/Lohit-Oriya.eot",
				ttf: "or/Lohit-Oriya.ttf",
				woff: "or/Lohit-Oriya.woff"
			},
			"Lohit Tamil": {
				eot: "ta/Lohit-Tamil.eot",
				ttf: "ta/Lohit-Tamil.ttf",
				woff: "ta/Lohit-Tamil.woff"
			},
			
			"Lohit Telugu": {
				eot: "te/LohitTelugu.eot",
				ttf: "te/LohitTelugu.ttf",
				woff: "te/LohitTelugu.woff"
			},
			
			"Lohit Bengali": {
				eot: "bn/LohitBengali.eot",
				ttf: "bn/LohitBengali.ttf",
				woff: "bn/LohitBengali.woff"
			},
			
			"Samyak Gujarati": {
				eot: "gu/SamyakGujarati.eot",
				ttf: "gu/SamyakGujarati.ttf",
				woff: "gu/SamyakGujarati.woff"
			},
			
			"Lohit Hindi": {
				eot: "hi/LohitHindi.eot",
				ttf: "hi/LohitHindi.ttf",
				woff: "hi/LohitHindi.woff"
			},
			"Samyak Devanagari": {
				eot: "hi/SamyakDevanagari.eot",
				ttf: "hi/SamyakDevanagari.ttf",
				woff: "hi/SamyakDevanagari.woff"
			},
			
			"Miriam CLM": {
				eot: "he/MiriamCLM-Book.eot",
				ttf: "he/MiriamCLM-Book.ttf",
				woff: "he/MiriamCLM-Book.woff"
			},
			"Taamey Frank CLM": {
				eot: "he/TaameyFrankCLM.eot",
				ttf: "he/TaameyFrankCLM.ttf",
				woff: "he/TaameyFrankCLM.woff",
				svg: "he/TaameyFrankCLM.svg"
			},
			
			Kedage: {
				eot: "kn/Kedage.eot",
				ttf: "kn/Kedage.ttf",
				woff: "kn/Kedage.woff"
			},
			"Lohit Kannada": {
				eot: "kn/LohitKannada.eot",
				ttf: "kn/LohitKannada.ttf",
				woff: "kn/LohitKannada.woff"
			},
			
			"Masterpiece Uni Sans": {
				eot: "my/MasterpieceUniSans.eot",
				ttf: "my/MasterpieceUniSans.ttf",
				woff: "my/MasterpieceUniSans.woff",
				svg:  "my/MasterpieceUniSans.svg"
			},
			"Padauk-Regular": {
				eot: "my/Padauk-Regular.eot",
				ttf: "my/Padauk-Regular.ttf",
				woff: "my/Padauk-Regular.woff",
				svg:  "my/Padauk-Regular.svg"
			},
			Myanmar3: {
				eot: "my/Myanmar3.eot",
				ttf: "my/Myanmar3.ttf",
				woff: "my/Myanmar3.woff",
				svg:  "my/Myanmar3.svg"
			},
			Yunghkio: {
				eot: "my/Yunghkio.eot",
				ttf: "my/Yunghkio.ttf",
				woff: "my/Yunghkio.woff",
				svg:  "my/Yunghkio.svg"
			},
			
			KhmerOSbattambang: {
				eot: "km/KhmerOSbattambang.eot",
				ttf: "km/KhmerOSbattambang.ttf",
				woff: "km/KhmerOSbattambang.woff",
				svg:  "km/KhmerOSbattambang.svg"
			},
			KhmerOSbokor: {
				eot: "km/KhmerOSbokor.eot",
				ttf: "km/KhmerOSbokor.ttf",
				woff: "km/KhmerOSbokor.woff",
				svg:  "km/KhmerOSbokor.svg"
			},
			KhmerOS: {
				eot: "km/KhmerOS.eot",
				ttf: "km/KhmerOS.ttf",
				woff: "km/KhmerOS.woff",
				svg:  "km/KhmerOS.svg"
			},
			KhmerOSsiemreap: {
				eot: "km/KhmerOSsiemreap.eot",
				ttf: "km/KhmerOSsiemreap.ttf",
				woff: "km/KhmerOSsiemreap.woff",
				svg:  "km/KhmerOSsiemreap.svg"
			},
			KhmerOSmuollight: {
				eot: "km/KhmerOSmuollight.eot",
				ttf: "km/KhmerOSmuollight.ttf",
				woff: "km/KhmerOSmuollight.woff",
				svg:  "km/KhmerOSmuollight.svg"
			},
			KhmerOSmuol: {
				eot: "km/KhmerOSmuol.eot",
				ttf: "km/KhmerOSmuol.ttf",
				woff: "km/KhmerOSmuol.woff",
				svg:  "km/KhmerOSmuol.svg"
			},
			KhmerOSmuolpali: {
				eot: "km/KhmerOSmuolpali.eot",
				ttf: "km/KhmerOSmuolpali.ttf",
				woff: "km/KhmerOSmuolpali.woff",
				svg:  "km/KhmerOSmuolpali.svg"
			},
			KhmerOSfreehand: {
				eot: "km/KhmerOSfreehand.eot",
				ttf: "km/KhmerOSfreehand.ttf",
				woff: "km/KhmerOSfreehand.woff",
				svg:  "km/KhmerOSfreehand.svg"
			},
			KhmerOSfasthand: {
				eot: "km/KhmerOSfasthand.eot",
				ttf: "km/KhmerOSfasthand.ttf",
				woff: "km/KhmerOSfasthand.woff",
				svg:  "km/KhmerOSfasthand.svg"
			},
			
			Pagul: {
				eot: "saz/Pagul.eot",
				ttf: "saz/Pagul.ttf",
				woff: "saz/Pagul.woff"
			},
			AbyssinicaSIL: {
				eot: "gez/AbyssinicaSIL-R.eot",
				ttf: "gez/AbyssinicaSIL-R.ttf",
				woff: "gez/AbyssinicaSIL-R.woff"
			},
			"Iranian Sans": {
				eot: "fa/IranianSans.eot",
				ttf: "fa/IranianSans.ttf",
				woff: "fa/IranianSans.woff"
			}	    
		},

		languages: {
			// en: [ "RufScript", "Perizia", "Ubuntu" ],
			ml: [ "AnjaliOldLipi", "Meera", "Rachana", "RaghuMalayalam" ],
			or: [ "Lohit Oriya" ],
			ta: [ "Lohit Tamil" ],
			te: [ "Lohit Telugu" ],
			bn: [ "Lohit Bengali" ],
			as: [ "Lohit Bengali" ],
			gu: [ "Samyak Gujarati" ],
			hi: [ "Samyak Devanagari", "Lohit Hindi" ],
			mr: [ "Samyak Devanagari", "Lohit Hindi" ],
			ks: [ "Samyak Devanagari", "Lohit Hindi" ],
			he: [ "Miriam CLM", "Taamey Frank CLM" ],
			kn: [ "Kedage", "Lohit Kannada" ],
			my: [ "Masterpiece Uni Sans", "Padauk-Regular", "Myanmar3", "Yunghkio" ],
			km: [ "KhmerOSbattambang", "KhmerOSsiemreap", "KhmerOS", "KhmerOSbokor",
			      "KhmerOSmuollight", "KhmerOSmuol", "KhmerOSmuolpali",
			      "KhmerOSfreehand", "KhmerOSfasthand" ],
			saz: [ "Pagul" ],
			am: [ "AbyssinicaSIL" ],
			ti: [ "AbyssinicaSIL" ],
			fa: [ "Iranian Sans" ]
		}
	};
})(jQuery);
