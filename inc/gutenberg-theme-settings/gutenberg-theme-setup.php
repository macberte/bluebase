<?php

//Disabilita il font size select nel backend
//add_theme_support('disable-custom-font-sizes');

//Disabilita la selezione del colore custon nel backend
//add_theme_support( 'disable-custom-colors' );

function blubase_theme_gutenberg_setup()
{
    // Add support for custom color scheme.
    add_theme_support('editor-color-palette', [
        [
            'name' => __('Primary', 'blubase'),
            'slug' => 'primary',
            'color' => '#198df4',
        ],
        [
            'name' => __('Accent', 'blubase'),
            'slug' => 'secondary',
            'color' => '#fdd135',
        ],
        [
            'name' => __('Contrast', 'blubase'),
            'slug' => 'third',
            'color' => '#e91e63',
        ],
        [
            'name' => __('Dark', 'blubase'),
            'slug' => 'fourth',
            'color' => '#004886',
        ],
        [
            'name' => __('Soft', 'blubase'),
            'slug' => 'fifth',
            'color' => '#f5f7f8',
        ],
        [
            'name' => __('Soft Grey', 'blubase'),
            'slug' => 'sixth',
            'color' => '#f7f7f7',
        ],
        [
            'name' => __('Rosso', 'blubase'),
            'slug' => 'red',
            'color' => '#e91e63',
        ],
        [
            'name' => __('Giallo', 'blubase'),
            'slug' => 'yellow',
            'color' => '#ffe500',
        ],
        [
            'name' => __('Verde', 'blubase'),
            'slug' => 'green',
            'color' => '#4caf50',
        ],
        [
            'name' => __('Blu', 'blubase'),
            'slug' => 'blue',
            'color' => '#2196f3',
        ],

        [
            'name' => __('Bianco', 'blubase'),
            'slug' => 'white',
            'color' => '#ffffff',
        ],
        [
            'name' => __('Nero', 'blubase'),
            'slug' => 'black',
            'color' => '#000000',
        ],
    ]);

    // Add support for custom size scheme.
    add_theme_support('editor-font-sizes', [
        [
            'name' => __('Defautl 16 ', 'blubase'),
            //'class' => 'my-mid-font',
            'shortName' => __('16', 'blubase'),
            'size' => 16,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '16',
        ],
        [
            'name' => __('12', 'blubase'),
            'shortName' => __('12', 'blubase'),
            'size' => 12,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '12',
        ],
        [
            'name' => __('13', 'blubase'),
            'shortName' => __('13', 'blubase'),
            'size' => 13,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '13',
        ],
        [
            'name' => __('14', 'blubase'),
            'shortName' => __('14', 'blubase'),
            'size' => 14,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '14',
        ],
        [
            'name' => __('15', 'blubase'),
            'shortName' => __('15', 'blubase'),
            'size' => 15,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '14',
        ],
        [
            'name' => __('18', 'blubase'),
            'shortName' => __('18', 'blubase'),
            'size' => 18,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '18',
        ],
        [
            'name' => __('20', 'blubase'),
            'shortName' => __('20', 'blubase'),
            'size' => 20,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '20',
        ],
        [
            'name' => __('22', 'blubase'),
            'shortName' => __('22', 'blubase'),
            'size' => 22,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '22',
        ],
        [
            'name' => __('24', 'blubase'),
            'shortName' => __('24', 'blubase'),
            'size' => 24,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '24',
        ],
        [
            'name' => __('26', 'blubase'),
            'shortName' => __('26', 'blubase'),
            'size' => 26,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '26',
        ],
        [
            'name' => __('28', 'blubase'),
            'shortName' => __('28', 'blubase'),
            'size' => 28,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '28',
        ],
        [
            'name' => __('30', 'blubase'),
            'shortName' => __('30', 'blubase'),
            'size' => 30,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '30',
        ],
        [
            'name' => __('32', 'blubase'),
            'shortName' => __('32', 'blubase'),
            'size' => 32,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '32',
        ],
        [
            'name' => __('36', 'blubase'),
            'shortName' => __('36', 'blubase'),
            'size' => 36,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '36',
        ],
        [
            'name' => __('42', 'blubase'),
            'shortName' => __('42', 'blubase'),
            'size' => 42,
            'unit' => 'px', // or 'em', 'pt', 'rem'
            'slug' => '42',
        ],
    ]);
}

add_action('after_setup_theme', 'blubase_theme_gutenberg_setup');
