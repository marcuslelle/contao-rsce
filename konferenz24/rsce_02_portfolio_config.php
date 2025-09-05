<?php
// 

return [
	'label' => ['Portfolio Cards', ''],
	'types' => ['content'],
	'standardFields' => ['cssID'],
    'contentCategory' => 'Kunde Spezial',
	'fields' => [
		'headline' => [
			'label' => ['Überschrift', 'Überschrift über der Cards-Liste'],
			'inputType' => 'text',
			'eval' => [
				'tl_class' => 'clr',
				'allowHtml' => true,
			],
		],
		'listitems' => [
			'label' => ['Cards', ''],
			'elementLabel' => '%s. Card',
			'inputType' => 'list',
			'minItems' => 0,
			'maxItems' => 9,
			'fields' => [
				'image' => [
					'label' => ['Bild', ''],
					'inputType' => 'fileTree',
					'eval' => [
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => '%contao.image.valid_extensions%',
						//4.13? 'extensions' => \Config::get('validImageTypes'],
					],
				],
				'imageAlt' => [
					'label' => ['Alt-Text', 'Bitte geben Sie dem Bild einen Alt-Text'],
					'inputType' => 'text',
					'eval' => [
						'tl_class' => 'clr w50',
					],
				],
				'imageTitle' => [
					'label' => ['Title-Text', 'Bitte geben Sie dem Bild einen Title-Text'],
					'inputType' => 'text',
					'eval' => [
						'tl_class' => 'w50',
					],
				],
				'imageLightbox' => [
					'label' => ['Lightbox/neues Fenster', 'Wenn ein Bild-Link eingeben wurde, wird dieser in einem neuen Fenster geöffnet. Sonst öffnet sich das Bild in einer Lightbox.'],
					'inputType' => 'checkbox',
					'eval' => [
						'tl_class' => 'clr w50 cbx m12',
					],
				],    
				'text' => [
					'label' => ['Text', 'Text der Card'],
					'inputType' => 'textarea',
					'eval' => [
						'tl_class' => 'clr',
						'rte' => 'tinyMCE_reduced', //Achtung, das ist ein angepasstes TinyMCE-Template. Das muss direkt im Ordner /templates auf der obersten Ebene liegen
						// oder du schreibtst einfach 'rte' => 'tinyMCE',
						'maxlength' => 200,
					],
				], 
				'button' => [
					'label' => ['Beschriftung', 'Beschriftung des Buttons'],
					'inputType' => 'text',
					'eval' => [
						'tl_class' => 'clr w50',
					],
				], 
				'link' => [
					'label' => ['Link', 'Ziel, mit dem der Button verlinkt werden soll.'],
					'inputType' => 'url',
					'eval' => [
						'tl_class' => 'w50',
					],
				],						  
			],         
        ],
	],
];
