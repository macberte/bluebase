<?php

/* BLOCKS: Registrazione blocco acf
 --------------------------------------------------------*/
function register_acf_block_types()
{
    // register a Accordion block.
    acf_register_block_type([
        'name' => 'Accordion',
        'title' => __('Accordion'),
        'description' => __('Blocco custom realizzato da Saltonelweb'),
        'render_template' => 'inc/acf/blocks/accordion/accordion.php',
        'category' => 'my-block',
        'icon' => 'align-none',
        'keywords' => ['accordion', 'menu', 'lista', 'saltonelweb'],
        'enqueue_style' =>
            get_stylesheet_directory_uri() .
            '/inc/acf/blocks/accordion/accordion.css',
        'enqueue_script' =>
            get_stylesheet_directory_uri() .
            '/inc/acf/blocks/accordion/accordion.js',
    ]);
    // register a Gallery block.
    acf_register_block_type([
        'name' => 'Gallery',
        'title' => __('Gallery acf'),
        'description' => __('Blocco custom realizzato da Saltonelweb'),
        'render_template' => 'inc/acf/blocks/gallery/gallery.php',
        'category' => 'my-block',
        'icon' => 'format-gallery',
        'keywords' => ['gallery', 'immagine', 'image', 'saltonelweb'],
        'enqueue_style' =>
            get_stylesheet_directory_uri() .
            '/inc/acf/blocks/gallery/gallery.css',
    ]);
    // register a Card block.
    acf_register_block_type([
        'name' => 'Card-person',
        'title' => __('Card Person'),
        'description' => __('Blocco custom realizzato da Saltonelweb'),
        'render_template' => 'inc/acf/blocks/card-person/card-person.php',
        'category' => 'my-block',
        'icon' => 'admin-users',
        'keywords' => ['card', 'immagine', 'image', 'saltonelweb'],
        'enqueue_style' =>
            get_stylesheet_directory_uri() .
            '/inc/acf/blocks/card-person/card-person.css',
    ]);
    // register a Flip card block.
    acf_register_block_type([
        'name' => 'Flip-card',
        'title' => __('Flip Card'),
        'description' => __('Blocco custom realizzato da Saltonelweb'),
        'render_template' => 'inc/acf/blocks/flip-card/flip-card.php',
        'category' => 'my-block',
        'icon' => 'admin-users',
        'keywords' => ['card', 'tile', 'flip', 'saltonelweb'],
        'enqueue_style' =>
            get_stylesheet_directory_uri() .
            '/inc/acf/blocks/flip-card/flip-card.css',
    ]);
    // register a Testimonials owl block.
    acf_register_block_type([
        'name' => 'testimonials-owl',
        'title' => __('Testimonials owl slide'),
        'description' => __('Blocco custom realizzato da Saltonelweb'),
        'render_template' =>
            'inc/acf/blocks/testimonials-owl/testimonials-owl.php',
        'category' => 'my-block',
        'icon' => 'admin-users',
        'keywords' => ['testimonials', 'slide', 'owl', 'saltonelweb'],
        'enqueue_style' =>
            get_stylesheet_directory_uri() .
            'inc/acf/blocks/testimonials-owl/testimonials-owl.css',
    ]);

    // register a Tabs-accordion block.
    acf_register_block_type([
        'name' => 'Tabs-accordion',
        'title' => __('Tabs to accordion'),
        'description' => __('Blocco custom realizzato da Saltonelweb'),
        'render_template' => 'inc/acf/blocks/tabs-accordion/tabs-accordion.php',
        'category' => 'my-block',
        'icon' => 'align-none',
        'keywords' => ['tabs', 'accordion', 'panel', 'saltonelweb'],
        'enqueue_style' =>
            get_stylesheet_directory_uri() .
            'inc/acf/blocks/tabs-accordion/tabs-accordion.php',
    ]);
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

//Registrazione della nuova categoria di blocco My Block
add_filter(
    'block_categories',
    function ($categories, $post) {
        return array_merge($categories, [
            [
                'slug' => 'my-block',
                'title' => 'My Block',
            ],
        ]);
    },
    10,
    2
);
?>