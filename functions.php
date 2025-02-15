<?php
/**
 * blubase Theme functions and definitions.
 *
 * @see https://www.saltonelweb.it
 */

// content width
if (!isset($content_width)) {
    $content_width = 1470;
}

/*=========================================================================
Setup Theme
=========================================================================*/

if (!function_exists('blubase_setup_theme')) {
    function blubase_setup_theme()
    {
        // add support titles

        add_theme_support('title-tag');

        // add theme feed links
        add_theme_support('automatic-feed-links');

        // enable featured image
        add_theme_support('post-thumbnails');

        // Load default block styles.
        add_theme_support('wp-block-styles');

        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');

        // Add support align wide.
        add_theme_support('align-wide');

        // Load regular editor styles into the new block-based editor.
        add_theme_support('editor-styles');

        // Aggiunge il file che stilizza l'editor nel backend
        // add_editor_style( array( 'css/custom-editor-style.css' , 'css/bootstrap.min.css' ) );
        add_editor_style('inc/editor-style/editor-style.css');

        // html5 support
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

        // Enable support for Post Formats.
        add_theme_support('post-formats', [
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ]);

        /* Custom Image size
        --------------------------------------------------------------------------*/
        // add_image_size('cover-page', 1920, 600, true); //
        // add_image_size('card', 600, 450, true); //4:3 card-news

        /* Aggiunge la dimensione personalizzata per l'immagine selezionabile ell'editor
        --------------------------------------------------------------------------*/
        // add_filter('image_size_names_choose', 'wpshout_custom_sizes');
        // function wpshout_custom_sizes($sizes)
        // {
        //     return array_merge($sizes, [
        //         'cover-page' => __('cover page'),
        //     ]);
        // }

        /* Record menus
        --------------------------------------------------------------------------*/
        register_nav_menus([
            'main-menu' => esc_html__('Header', 'blubase'),
        ]);

        /* Load Theme languages
        --------------------------------------------------------------------------*/
        load_theme_textdomain(
            'blubase',
            get_template_directory().'/languages'
        );
    }
}

add_action('after_setup_theme', 'blubase_setup_theme');

/*  Aggiunge file con personalizzazioni colori e font-size a gutenberg
--------------------------------------------------------------------------*/
require_once 'inc/gutenberg-theme-settings/gutenberg-theme-setup.php';

/* ACF: Registrazione Opzioni theme settings
--------------------------------------------------------------------------*/
require_once 'inc/acf/acf-options-setup.php';

/* ACF: Registrazione blocchi custom ACF
--------------------------------------------------------*/
// require_once 'inc/acf/acf-block-setup.php';

/* CUSTOM WIDGET: Aggiunge widget personalizzati
--------------------------------------------------------*/
// require_once 'inc/widget/widget-theme.php';

/* Ajax Search
--------------------------------------------------------------------------*/
require_once 'inc/ajax-search.php';

/*=========================================================================
Aggiunge registrazione stile aggiuntiva per i blocchi Gutenberg che lo consentono (button, ecc..) gutenberg-add-style
=========================================================================*/
function myguten_enqueue()
{
    wp_enqueue_script(
        'myguten-script',
        get_template_directory_uri().
        '/inc/gutenberg-theme-settings/gutenberg-block-style.js'
    );
}
add_action('enqueue_block_editor_assets', 'myguten_enqueue');

function myguten_stylesheet()
{
    wp_enqueue_style(
        'myguten-stylesheet',
        get_template_directory_uri().'/css/gutenberg-theme-style.min.css'
    );
}
add_action('enqueue_block_assets', 'myguten_stylesheet');

/*=========================================================================
Register Sidebars & Area Widget
=========================================================================*/
function blubase_widgets_init()
{
    $footer_args = [
        'name' => esc_html__('Footer-1', 'blubase'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'blubase'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ];

    register_sidebar($footer_args);

    $footer_args2 = [
        'name' => esc_html__('Footer-2', 'blubase'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'blubase'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ];

    register_sidebar($footer_args2);

    $footer_args3 = [
        'name' => esc_html__('Footer-3', 'blubase'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'blubase'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ];

    register_sidebar($footer_args3);

    $footer_args4 = [
        'name' => esc_html__('Footer-4', 'blubase'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'blubase'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ];

    register_sidebar($footer_args4);

    $sidebar_blog = [
        'name' => esc_html__('Sidebar-blog', 'blubase'),
        'id' => 'sidebar-blog',
        'description' => esc_html__('Add widgets here.', 'blubase'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title"><span>',
        'after_title' => '</span></h2>',
    ];

    register_sidebar($sidebar_blog);

    $sidebar_one = [
        'name' => esc_html__('Sidebar-one', 'blubase'),
        'id' => 'sidebar-one',
        'description' => esc_html__('Add widgets here.', 'blubase'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title"><span>',
        'after_title' => '</span></h2>',
    ];

    register_sidebar($sidebar_one);
}
add_action('widgets_init', 'blubase_widgets_init');

/*=========================================================================
Deregister CSS WordPress default
=========================================================================*/
function wps_deregister_styles()
{
    // wp_dequeue_style('global-styles'); //css inline default wordpress 5.9
    wp_dequeue_style('classic-theme-styles'); // theme add to WP 6.1
    // wp_dequeue_style('wp-block-library'); //Gutenberg
    // wp_dequeue_style('wp-block-library-theme'); //Gutenberg
}
add_action('wp_enqueue_scripts', 'wps_deregister_styles', 100);

/*=========================================================================
Include javascript files
=========================================================================*/
if (!function_exists('blubase_scripts')) {
    function blubase_scripts()
    {
        // wp_enqueue_script('blubase-gsap', get_template_directory_uri() .'/js/gsap.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script(
            'blubase-viewportchecker',
            get_template_directory_uri().'/js/jquery.viewportchecker.min.js',
            ['jquery'],
            null,
            true
        );

        wp_enqueue_script(
            'blubase-slick-slider',
            get_template_directory_uri().'/js/slick.min.js',
            ['jquery'],
            null,
            true
        );
        wp_enqueue_script(
            'blubase-fancyBox-js',
            get_template_directory_uri().'/js/jquery.fancybox.min.js',
            ['jquery'],
            null,
            true
        );
        wp_enqueue_script(
            'blubase-scripts-js',
            get_template_directory_uri().'/js/scripts.js?v1.0',
            ['jquery'],
            null,
            true
        );

        if (is_single()) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('wp_enqueue_scripts', 'blubase_scripts');

/*=========================================================================
Include css files
=========================================================================*/
if (!function_exists('blubase_styles')) {
    function blubase_styles()
    {
        /* Register Style
        --------------------------------------------------------------------------*/
        wp_enqueue_style(
            'blubase-bootstrap-essential',
            get_template_directory_uri().'/css/bootstrap-essential-min.css',
            false,
            '1.0.0',
            false
        );
        // wp_enqueue_style(
        //     'font-google',
        //     '//fonts.googleapis.com/css2?family=Heebo:wght@300;400;700&family=Mulish:wght@300;400;700&display=swap"',
        //     false,
        //     '',
        //     false
        // );
        wp_enqueue_style(
            'font-1',
            get_template_directory_uri().'/fonts/Heebo/Heebo-VariableFont_wght.ttf',
            false,
            '',
            false
        );
        wp_enqueue_style(
            'blubase-font-fontello',
            get_template_directory_uri().'/fontello/css/fontello.css',
            false,
            '',
            false
        );
        wp_enqueue_style(
            'blubase-slick',
            get_template_directory_uri().'/css/slick.css',
            false,
            '',
            false
        );
        wp_enqueue_style(
            'blubase-fancy-Box',
            get_template_directory_uri().'/css/fancy.box.css',
            false,
            '',
            false
        );
        wp_enqueue_style(
            'blubase-style-default',
            get_template_directory_uri().'/style.css?v3.0',
            false,
            '',
            false
        );
    }
}

add_action('wp_enqueue_scripts', 'blubase_styles');

/*=========================================================================
Esclude le voci cat: tag: archivio: dal titolo dell'archivio
=========================================================================*/
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">'.get_the_author().'</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = sprintf(__('%1$s'), single_term_title('', false));
    }

    return $title;
});

/*=========================================================================
Form - Widget search - modifica l'output HTML del button search form di wordpress
=========================================================================*/
function my_search_form($form)
{
    $form =
    '<form role="search" method="get" id="searchform" class="search-form" action="'.
    home_url('/').
    '" >
    <input type="text" value="'.
    get_search_query().
        '" name="s" id="s" class="form-input" placeholder="Cerca...">
	<button type="submit" id="searchsubmit"><i class="icon-search"></i></button>
    </form>';

    return $form;
}

add_filter('get_search_form', 'my_search_form');

/*=========================================================================
Class Menu active (Aggiunge classe active alla voce di menu)
=========================================================================*/

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

/*=========================================================================
Excerpt lenght
=========================================================================*/
function blubase_excerpt_length($length)
{
    return 16; // Di default WP usa 55 parole, in questo caso 20
}
add_filter('excerpt_length', 'blubase_excerpt_length', 999);

/*=========================================================================
Add class to button submit (sensei theme)
=========================================================================*/
function wpdocs_comment_form_defaults($defaults)
{
    $defaults['class_submit'] = 'btn-primary animate';

    return $defaults;
}

add_filter('comment_form_defaults', 'wpdocs_comment_form_defaults');

/*=========================================================================
ACF ADD MENU ICON
=========================================================================*/
function my_wp_nav_menu_objects($items, $args)
{
    // loop
    foreach ($items as &$item) {
        // vars
        $icon = get_field('mn_icon', $item);

        // append icon
        if ($icon) {
            $item->title .=
                '<span class="mn-icon"><img src="'.
                $icon['sizes']['thumbnail'].
                '" alt="'.
                $icon['alt'].
                '"/></span>';
        }
    }

    // return
    return $items;
}
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);