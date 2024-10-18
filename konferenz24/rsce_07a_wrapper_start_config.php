<?php
// Wrapper Element für CSS-Grid

return [
	'label' => ['Wrapper Start-Element für CSS-Grid', ''],
	'types' => ['content'],
	'standardFields' => ['cssID'],
    'contentCategory' => 'Kunde Spezial',
	'wrapper' => [
        'type' => 'start',
    ],
	'fields' => [
		'gridSizes' => [
			'label' => ['Bildschirmgrößen', 'Wählen Sie eine oder mehrere Optionen'],
			'inputType' => 'checkbox',
			'options' => [
				'small' => '400px bis 767px',
				'tablet' => '768px bis 991px',
				'medium' => '992px bis 1119px',
				'large' => '1200px und größer',
			],
			'eval' => [
				'tl_class' => 'w50',
				'mandatory' => true,
				'multiple' => true,
			],
		],
		'gridGroup' => [
			'label' => ['Verschiedene Spalten-Breiten', 'Wählen Sie Ihre Optionen'],
			'inputType' => 'group',
			'eval' => [
				'tl_class' => 'clr',
			],
		],
		'gridSmallSelect' => [
			'label' => ['Anzahl Elemente für <768px', 'Wählen Sie eine der Optionen'],
			'inputType' => 'select',
			'options' => [
				'' => 'bitte wählen',
				'1' => '1 Element',
				'2' => '2 Elemente',
				'3' => '3 Elemente',
				'4' => '4 Elemente',
			],
			'eval' => [
				'tl_class' => 'w50',
				'mandatory' => true,
			],
			'dependsOn' => [
				'field' => 'gridSizes', 
				'value' => 'small',
			],
		],
		'gridTabletSelect' => [
			'label' => ['Anzahl Elemente für <992px', 'Wählen Sie eine der Optionen'],
			'inputType' => 'select',
			'options' => [
				'' => 'bitte wählen',
				'1' => '1 Element',
				'2' => '2 Elemente',
				'3' => '3 Elemente',
				'4' => '4 Elemente',
			],
			'eval' => [
				'tl_class' => 'w50',
				'mandatory' => true,

			],
			'dependsOn' => [
				'field' => 'gridSizes', 
				'value' => 'tablet',
			],		],
		'gridMediumSelect' => [
			'label' => ['Anzahl Elemente für <1199px', 'Wählen Sie eine der Optionen'],
			'inputType' => 'select',
			'options' => [
				'' => 'bitte wählen',
				'1' => '1 Element',
				'2' => '2 Elemente',
				'3' => '3 Elemente',
				'4' => '4 Elemente',
			],
			'eval' => [
				'tl_class' => 'w50',
				'mandatory' => true,
			],
			'dependsOn' => [
				'field' => 'gridSizes', 
				'value' => 'medium',
			],
		],
		'gridLargeSelect' => [
			'label' => ['Anzahl Elemente ab 1200px', 'Wählen Sie eine der Optionen'],
			'inputType' => 'select',
			'options' => [
				'' => 'bitte wählen',
				'1' => '1 Element',
				'2' => '2 Elemente',
				'3' => '3 Elemente',
				'4' => '4 Elemente',
			],
			'eval' => [
				'tl_class' => 'w50',
				'mandatory' => true,
			],
			'dependsOn' => [
				'field' => 'gridSizes', 
				'value' => 'large',
			],
		],
	],
];
