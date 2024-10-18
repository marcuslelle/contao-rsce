<?php
// Kombination aus Text, Bild und Button

return [
    'label' => ['Text-Bild-Button', 'Fügt ein Text-Element ein, in dem Sie auch ein Bild und einen Call-to-Action Button anzeigen können.'],
    'types' => ['content'], 
    'contentCategory' => 'Kundenname Spezial',

    'standardFields' => ['headline', 'text', 'cssID'],

    'fields' => [
        'singleSRC' => [
            'label' => ['Bild', ''],
            'inputType' => 'standardField',
            'eval' => [
                'mandatory' => 'false',
                'tl_class' => 'clr',
            ],
        ],
        'imageAlt' => [
            'label' => ['Alt-Text', 'Bitte geben Sie dem Bild einen Alt-Text'],
            'inputType' => 'text',
            'eval' => [
                'mandatory' => 'true',
                'tl_class' => 'clr w50',
            ],
        ],
        'imageTitle' => [
            'label' => ['Title-Text', 'Bitte geben Sie dem Bild einen Title-Text'],
            'inputType' => 'text',
            'eval' => [
                'mandatory' => 'true',
                'tl_class' => 'w50',
            ],
        ],
        'imageCaption' => [
            'label' => ['Caption-Text', 'Bitte geben Sie dem Bild einen Caption-Text'],
            'inputType' => 'text',
            'eval' => [
                'tl_class' => 'w50',
            ],
        ],
        'imageLightbox' => [
            'label' => ['Lightbox/neues Fenster', 'Wenn ein Bild-Link eingeben wurde, wird dieser in einem neuen Fenster geöffnet. Sonst öffnet sich das Bild in einer Lightbox.'],
            'inputType' => 'checkbox',
            'eval' => [
                'tl_class' => 'clr w33 cbx m12',
            ],
        ],
        'imageLink' => [
            'label' => ['Bild-Link', 'Sie können das Bild intern oder extern verlinken.'],
            'inputType' => 'url',
            'eval' => [
                'tl_class' => 'w33',
            ],
        ],
        'imageClass' => [
            'label' => ['Bild-Klassen', 'Sie können dem Bild mehrere Klassen (mit Leerzeichen getrennt) zuweisen'],
            'inputType' => 'text',
            'eval' => [
                'tl_class' => 'w33',
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
                'decodeEntities' => true,
            ],
        ],        
    ],
];