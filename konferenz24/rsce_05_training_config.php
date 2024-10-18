<?php
// Liste von Fortbildungen

return [
    'label' => ['Fortbildungen', 'Liste der Fortbildungen'],
    'types' => ['content'],
	'contentCategory' => 'Kundenname Spezial',
    'fields' => [
        'trainings' => [
			'label' => ['Forbildungen', ''],
			'elementLabel' => '%s. Fortbildung',
			'inputType' => 'list',
			'minItems' => 0,
			'maxItems' => 30,
			'fields' => [
                'trainingnr' => [
                    'label' => ['Fortbildungsnr.', ''],
                    'inputType' => 'text',
                    'eval' => [
                        'mandatory' => false,
                        'tl_class' => 'w50'
                    ],
                ],
                'headline' => [
                    'label' => ['Überschrift', ''],
                    'inputType' => 'text',
                    'eval' => [
                        'mandatory' => false,
                        'tl_class' => 'clr'
                    ],
                ],
                'trainer' => [
                    'label' => ['Trainer', 'bei mehreren mit Komma getrennt'],
                    'inputType' => 'text',
                    'eval' => [
                        'mandatory' => false,
                        'tl_class' => 'w50'
                    ],
                ],
                'email' => [
                    'label' => ['E-Mail der Trainer', 'bei mehreren mit Komma getrennt'],
                    'inputType' => 'text',
                    'eval' => [
                        'mandatory' => false,
                        'tl_class' => 'w50',
                        'rgxp' => 'emails',
                    ],
                ],
                'startdate' => [
                    'label' => ['Datum (für autom. Verbergen, wenn vorbei)', 'bitte über Kalender auswählen'],
                    'inputType' => 'text',
                    'eval' => [
                        'mandatory' => false,
                        'tl_class' => 'w50',
                        'datepicker' => 'true',
                        'rgxp' => 'date'
                    ],
                ],
                'date' => [
                    'label' => ['Termin (Ausgabe auf Seite)', 'Muster: 22.09.2022, 10.00 bis 14.00 Uhr'],
                    'inputType' => 'text',
                    'eval' => [
                        'mandatory' => false,
                        'tl_class' => 'w50'
                    ],
                ],
                'participants' => [
                    'label' => ['Anzahl Teilnehmer', 'Wird 0 eingetragen, erscheint: Teilnehmerzahl offen'],
                    'inputType' => 'text',
                    'eval' => [
                        'mandatory' => false,
                        'tl_class' => 'w50',
                        'rgxp' => 'natural',
                    ],
                ],
                'text' => [
                    'label' => ['Nur-Text', ''],
                    'inputType' => 'textarea',
                    'eval' => [
                        'mandatory' => false,
                        'tl_class' => 'clr',
                        'rte' => 'tinyMCE'
                    ],
                ],
            ],
        ],
    ],
];