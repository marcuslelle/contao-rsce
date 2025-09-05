<?php
// Team-Liste mit Bild, Name, Telefon, E-Mail und Social-Media-Links

return [
	'label' => ['Team Liste', ''],
	'types' => ['content'],
	'standardFields' => ['cssID'],
    'contentCategory' => 'Kunde Spezial',
	'fields' => [
		'headline' => [
			'label' => ['Überschrift', 'Überschrift über der Team-Liste'],
			'inputType' => 'standardField',
			'options' => ['h2', 'h3'],
			'eval' => [
				'tl_class' => 'w50',
			],
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
					],
				],  
				'name' => [
					'label' => ['Name', 'Bitte geben Sie einen Namen ein'],
					//'inputType' => 'text', // wenn es einfach ein Textfeld für die Namenseingabe werden soll, dann dieses Feld einblenden und die nächsten beiden ausblenden / löschen
					'inputType' => 'select', // Select nur für das Beispiel, dass man Daten aus einer externen Tabelle holt, hier die Mitglieder
		            'foreignKey' => 'tl_member.CONCAT(firstname," ",lastname)', // aus externer Tabelle, speichert ID
					'eval' => [
						'tl_class' => 'w50',
						'includeBlankOption' => true,
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
