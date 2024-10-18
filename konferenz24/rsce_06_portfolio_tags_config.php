<?php
// Portfolio mit Tags zum Filtern

use MadeYourDay\RockSolidCustomElements\CustomElements;


return [
	'label' => ['Portfolio Cards mit Tags', ''],
	'types' => ['content'],
	'standardFields' => ['cssID'],
    'contentCategory' => 'Kunde Spezial',
	'fields' => [
		'headline' => [
			'label' => ['Überschrift', 'Überschrift über der Cards-Liste'],
			'inputType' => 'text',
			'eval' => [
				'tl_class' => 'w50',
				'allowHtml' => true,
			],
		],
		'categories' => [
            'label'     => [ 'Tags', ''],
            'eval'      => [
				'mandatory' => false,
				'tl_class' => 'clr w50',
				'submitOnChange' => true],
            'inputType' => 'listWizard',
        ],
		'listitems' => [
			'label' => ['Cards', ''],
			'elementLabel' => '%s. Card',
			'inputType' => 'list',
			'minItems' => 0,
			'maxItems' => 8,
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
						'rte' => 'tinyMCE_reduced',
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
				'filter' => [
                    'label'            => ['Portfolio-Kategorie', 'Mehrfachnennungen sind möglich'],
                    'inputType'        => 'checkbox',
                    'eval'             => ['multiple' => true, 'tl_class' => 'w50 clr'],
                    'options_callback' => function ($dc) {
                        $availableTags = CustomElements::getDcaFieldValue($dc, 'rsce_field_categories');
                        $availableTags = \Contao\StringUtil::deserialize($availableTags,true);
                        return $availableTags;
                    },
                ],
                'hideItem' => [
                    'label'     => ['Ausblenden', 'Element nicht anzeigen'],
                    'eval'      => ['mandatory' => false, 'tl_class' => 'w50 clr'],
                    'inputType' => 'checkbox',
                ]						  
			],         
        ],
	],
];
