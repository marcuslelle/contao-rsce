<?php

return [
	'label' => ['Team Liste', ''],
	'types' => ['content'],
	'standardFields' => ['cssID'],
    'contentCategory' => 'Kunde Spezial',
	'fields' => [
		'headline' => [
			'label' => ['Überschrift', 'Überschriftüber der Team-Liste'],
			'inputType' => 'text',
			'eval' => [
				'tl_class' => 'clr',
			],
		],
		'options' => [
            'label' => [
				'Slider-Einstellungen', 
				'Hier können Sie die Einstellungen für den Slider festlegen.<br>Dauer und Anzahl der sichtbaren Cards auf dem Desktop.'],
            'inputType' => 'group',
        ],
		'autoplay' => [
			'label' => ['Dauer Autoplay', '0 = Aus, 1000 = 1 Sekunde'],
			   'eval' => [
					'mandatory' => true,
					'tl_class' => 'w50',
					'placeholder' => '0 = Aus, 1000 = 1 Sekunde',
					'rgxp' => 'natural'
				],
			   'inputType' => 'text',
		],
		'itemsDesktop' => [
			'label' => ['Anzahl Desktop', 'Anzahl der Elemente auf großen Bildschirmen'],
			   'eval' => [
					'mandatory' => false,
					'tl_class' => 'w50',
					'default' => 3,
					'rgxp' => 'custom',
					'customRgxp' => '/^[1-6]\d*$/',
					'errorMsg' => 'Bitte geben Sie eine Zahl zwischen 1 und 6 ein.'
				],
			   'inputType' => 'text',
		],
		'listitems' => [
			'label' => ['Team', ''],
			'elementLabel' => '%s. Team-Mitglied',
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
				'name' => [
					'label' => ['Name', 'Bitte geben Sie einen Namen ein'],
					'inputType' => 'text',
					'eval' => [
						'tl_class' => 'w50',
					],
				],
				'phone' => [
					'label' => ['Telefon', 'Bitte geben Sie eine Telefonnummer ein'],
					'inputType' => 'text',
					'eval' => [
						'tl_class' => 'w50',
						'rgxp' => 'phone',
					],
				],
				'email' => [
					'label' => ['E-Mail', 'Bitte geben Sie eine E-Mail-Adresse ein'],
					'inputType' => 'text',
					'eval' => [
						'tl_class' => 'w50',
						'rgxp' => 'email',
					],
				],
				'socialmedia' => [
					'label' => ['Social-Media-Links', ''],
					'elementLabel' => '%s. Netzwerk',
					'inputType' => 'list',
					'minItems' => 0,
					'maxItems' => 4,
					'fields' => [
						'socialNetwork' => [
							'label' => ['Soziales Netzwerk', 'Bitte wählen Sie ein soziales Netzwerk'],
							'inputType' => 'select',
							'options' => [
								'' => 'bitte wählen',
								'facebook' => 'Facebook',
								'instagram' => 'Instagram',
								'x-twitter' => 'X',
								'linkedin-in' => 'LinkedIn',
								'xing' => 'Xing',
							],
							'eval' => [
								'tl_class' => 'clr w50',
								'mandatory' => true,
							],
						], 
						'link' => [
							'label' => ['Link', 'Link zu Ihrem Profil'],
							'inputType' => 'url',
							'eval' => [
								'tl_class' => 'w50',
								'mandatory' => true,
							],
						],
					] 
				]		  
			],         
        ],
	],
];