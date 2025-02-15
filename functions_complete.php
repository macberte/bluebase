<?php
/**
 * agave Theme functions and definitions
 *
 * @link https://www.saltonelweb.it
 */

// content width
if (!isset($content_width)) {
    $content_width = 1170;
}

/* Setup Theme
 -------------------------------------------------------- */
if (!function_exists('agave_setup_theme')) {
    function agave_setup_theme()
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
        add_editor_style('css/custom-editor-style.css');

        add_theme_support('align-wide');

        //html5 support
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

        //Enable support for Post Formats.
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

        // create custom size images
        add_image_size('cover', 1600, 1066, true); //3:2
        add_image_size('single', 800, 406, true); //1,97 wide
        add_image_size('archive', 600, 304, true); //1,97 wide
        add_image_size('portfolio', 480, 320, true); //3:2

        add_image_size('slide', 1600, 900, true); //16:9
        add_image_size('card', 640, 360, true); //16:9
        //add_image_size('editor_real', 1200, 0, false);//larghezza massima 1920px Mantiene aspect ratio
        //add_image_size('editor_16-9', 1200, 675, true);//16:9

        //aggiunge la dimensione personalizzata selezionabile nel backend
        add_filter('image_size_names_choose', 'wpshout_custom_sizes');
        function wpshout_custom_sizes($sizes)
        {
            return array_merge($sizes, [
                'portfolio' => __('portfolio'),
                'card' => __('card'),
                //'editor_real' => __( 'Proporzione agave Reale' ),
                //'editor_16-9' => __( 'Proporzione agave Wide' )
            ]);
        }

        // create custom menus
        register_nav_menus([
            'main-menu' => esc_html__('Header', 'agave'),
        ]);

        //load theme languages
        load_theme_textdomain('agave', get_template_directory() . '/languages');
    }
}

add_action('after_setup_theme', 'agave_setup_theme');

/* Aggiunge file con personalizzazioni colori e font-size a gutenberg tramite hook after_setup_theme
 -------------------------------------------------------- */
require_once 'inc/gutenberg_setup.php';

/* BLOCKS: Registrazione blocco acf e opzioni
 --------------------------------------------------------*/
require_once 'inc/acf_block_and_options.php';

/* Register Sidebars & Area Widget
 -------------------------------------------------------- */
function agave_widgets_init()
{
    $sidebar_args = [
        'name' => esc_html__('Footer-1', 'agave'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'agave'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title"><span>',
        'after_title' => '</span></h3>',
    ];

    register_sidebar($sidebar_args);

    $sidebar_args2 = [
        'name' => esc_html__('Footer-2', 'agave'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'agave'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ];

    register_sidebar($sidebar_args2);

    $sidebar_args3 = [
        'name' => esc_html__('Footer-3', 'agave'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'agave'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ];

    register_sidebar($sidebar_args3);

    $sidebar_args4 = [
        'name' => esc_html__('Footer-4', 'agave'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'agave'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ];

    register_sidebar($sidebar_args4);

    $sidebar_args5 = [
        'name' => esc_html__('Sidebar-1', 'agave'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'agave'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title"><span>',
        'after_title' => '</span></h2>',
    ];

    register_sidebar($sidebar_args5);
}
add_action('widgets_init', 'agave_widgets_init');

/* Include javascript files
 -------------------------------------------------------- */
if (!function_exists('agave_scripts')) {
    function agave_scripts()
    {
        //wp_enqueue_script('agave-popper-js', get_template_directory_uri() .'/js/popper.min.js', array('jquery'),null ,true );
        //wp_enqueue_script('agave-bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'),null ,true );
        wp_enqueue_script(
            'agave-waypoints',
            get_template_directory_uri() . '/js/jquery.waypoints.min.js',
            ['jquery'],
            null,
            true
        );
        wp_enqueue_script(
            'agave-mobilegesture-js',
            get_template_directory_uri() . '/js/mobilegesture.js',
            ['jquery'],
            null,
            true
        );
        wp_enqueue_script(
            'agave-owl-carousel',
            get_template_directory_uri() . '/js/owl.carousel.min.js',
            ['jquery'],
            null,
            true
        );
        wp_enqueue_script(
            'agave-magnificPopUp-js',
            get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',
            ['jquery'],
            null,
            true
        );
        wp_enqueue_script(
            'agave-scripts-js',
            get_template_directory_uri() . '/js/scripts.js',
            ['jquery'],
            null,
            true
        );

        if (is_singular()) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('wp_enqueue_scripts', 'agave_scripts');

/* Include css files
 -------------------------------------------------------- */
if (!function_exists('agave_styles')) {
    function agave_styles()
    {
        wp_enqueue_style(
            'agave-bootstrap-css',
            get_template_directory_uri() . '/css/bootstrap.min.css',
            false,
            '4.1.3',
            false
        );
        wp_enqueue_style(
            'agave-font-fontello',
            get_template_directory_uri() . '/fontello/css/fontello.css',
            false,
            '',
            false
        );
        wp_enqueue_style(
            'agave-font-maitree',
            '//fonts.googleapis.com/css?family=Montserrat:300i,400,700,900&display=swap',
            false,
            '',
            false
        );
        wp_enqueue_style(
            'agave-owl-carousel-css',
            get_template_directory_uri() . '/css/owl.carousel.css',
            false,
            '',
            false
        );
        wp_enqueue_style(
            'agave-magnific-popup-css',
            get_template_directory_uri() . '/css/magnific-popup.css',
            false,
            '',
            false
        );
        wp_enqueue_style(
            'agave-style-default-css',
            get_template_directory_uri() . '/style.css?v3.0',
            false,
            '',
            false
        );
    }
}

add_action('wp_enqueue_scripts', 'agave_styles');

/* Esclude le voci cat: tag: archivio: dal titolo dell'archivio
 --------------------------------------------------------*/
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = sprintf(__('%1$s'), single_term_title('', false));
    }

    return $title;
});

/* Form - Widget search - modifica l'output HTML del form di wordpress
 -------------------------------------------------------- */
function my_search_form($form)
{
    $form =
        '<form role="search" method="get" id="searchform" class="searchform" action="' .
        home_url('/') .
        '" >
    <input type="text" value="' .
        get_search_query() .
        '" name="s" id="s" placeholder="Cerca...">
	<button type="submit" id="searchsubmit"><i class="icon-search"></i></button>
    </form>';

    return $form;
}

add_filter('get_search_form', 'my_search_form');

/* Class Menu active (Aggiunge classe active alla voce di menu)
 -------------------------------------------------------- */
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}

/* Excerpt lenght
 -------------------------------------------------------- */
function agave_excerpt_length($length)
{
    return 15; //Di default WP usa 55 parole, in questo caso 20
}
add_filter('excerpt_length', 'agave_excerpt_length', 999);

/*Aggiunge il link Leggi tutto di default è [...]*/
function agave_excerpt_more($more)
{
    //global $post;
    return '<a class="moretag" href="' .
        get_permalink($post->ID) .
        '"> ...Leggi tutto </a>';
}
add_filter('excerpt_more', 'agave_excerpt_more');

/* Attiva l' excerpt nelle pagine con Gutenberg
 -------------------------------------------------------- */
function wpse325327_add_excerpts_to_pages()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'wpse325327_add_excerpts_to_pages');

/* Add class to button submit (sensei theme)
 -------------------------------------------------------- */
function wpdocs_comment_form_defaults($defaults)
{
    $defaults['class_submit'] = 'btn-primary animate';
    return $defaults;
}

add_filter('comment_form_defaults', 'wpdocs_comment_form_defaults');

/* Consente di tenere gli attributi dei tag HTML come animation-name nell'editor di testo
 --------------------------------------------------------*/
function override_tinymce_option($initArray)
{
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'override_tinymce_option');

// Prevent WP from adding <p> tags on all post types
function disable_wp_auto_p($content)
{
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
    return $content;
}
add_filter('the_content', 'disable_wp_auto_p', 0);

/* BLOCKS: Registrazione blocco acf
 --------------------------------------------------------*/
function register_acf_block_types()
{
    // register a testimonial block.
    acf_register_block_type([
        'name' => 'Accordion',
        'title' => __('Accordion'),
        'description' => __('Blocco custom realizzato da Saltonelweb'),
        'render_template' => 'template-parts/blocks/accordion/accordion.php',
        'category' => 'formatting',
        'icon' => 'align-none',
        'keywords' => ['accordion', 'menu', 'lista', 'saltonelweb'],
        'enqueue_style' =>
            get_stylesheet_directory_uri() .
            '/template-parts/blocks/accordion/accordion.css',
    ]);
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

/* OPTION PAGE ACF
 --------------------------------------------------------*/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ]);
}

/* CONTATORE VISITE
 --------------------------------------------------------*/

// Funzione per aggiornare il campo personalizzato
// contenente il numero delle visualizzazioni del post

function my_track_post_views()
{
    if (is_singular()) {
        $count = get_post_meta(get_the_ID(), '_post_views', true);

        // Se non trovo il valore o per caso contiene
        // dei valori non numerici inizializzo il contatore

        if (!is_numeric($count) or $count == '') {
            delete_post_meta(get_the_ID(), '_post_views');
            add_post_meta(get_the_ID(), '_post_views', '1');
        }

        // Aggiornamento del contatore "custom post field"
        update_post_meta(get_the_ID(), '_post_views', $count + 1);
    }
}

// Aggiungo la funzione su azione wp_head in maniera
// da essere eseguita durante il caricamento iniziale

add_action('wp_head', 'my_track_post_views');

// Funzione da definire nel function.php la quale
// Deve essere richiamata dal vostro template per la visualizzazione

function get_track_post_views()
{
    $count = get_post_meta(get_the_ID(), '_post_views', true);
    if (is_numeric($count)) {
        return $count;
    } else {
        return 0;
    }
}

// In qualsiasi parte del vostro tema e precisamente dove volete
// visualizzare il numero delle views legate al post

// --> echo get_track_post_views();

/* CONTATORE
 Aggiunta delle funzioni per le definizioni dei meta box nel backend
 aggiunge box controllo visite nel backend
------------------------------------------------------ */

function my_add_meta_box()
{
    add_meta_box('my_mb', 'Visualizzazioni', 'my_mb_form', 'post', 'side');
    add_meta_box('my_mb', 'Visualizzazioni', 'my_mb_form', 'page', 'side');
}

add_action('add_meta_boxes', 'my_add_meta_box');
add_action('save_post', 'my_mb_save');

/* Funzione per la creazione del form */
function my_mb_form()
{
    $id = get_the_ID();
    $views = get_post_meta($id, '_sz_post_views', true);

    echo '<table class="form-table">';
    echo '<tr>';
    echo '<td><label for="_post_views">' . 'View' . '</label></td>';
    echo '<td><input type="number" name="_post_views" id="_post_views" ';
    echo 'value="' . $views . '"></td>';
    echo '</tr>';
    echo '</table>';
}

/* CONTATORE
Funzione per il salvataggio del form
----------------------------------- */
function my_mb_save()
{
    $id = get_the_ID();
    $key = '_post_views';
    $value = $_POST[$key];

    if (get_post_meta($id, $key, false)) {
        update_post_meta($id, $key, $value);
    } else {
        add_post_meta($id, $key, $value);
    }
}

/* CONTATORE
Funzione per aggiungere la colonna delle visite nel backend
----------------------------------- */

// Funzione per la visualizzazione delle views su
// elenco standard dei post e delle pagine wordpress

function oo_theme_columns_posts($defaults)
{
    $defaults['views'] = ucfirst(__('views', 'snw'));
    return $defaults;
}


function oo_theme_columns_custom($column_name, $id)
{
    if ($column_name === 'views') {
        echo get_post_meta($id, '_post_views', true);
    }
}

// Funzione per la visualizzazione delle views su
// elenco standard dei post e delle pagine wordpress

add_filter('manage_posts_columns', 'oo_theme_columns_posts', 5);
add_filter('manage_pages_columns', 'oo_theme_columns_posts', 5);

add_action('manage_posts_custom_column', 'oo_theme_columns_custom', 5, 2);
add_action('manage_pages_custom_column', 'oo_theme_columns_custom', 5, 2);

/* Registrazione nuovo widget (Ultimi Articoli con immagine)
 --------------------------------------------------------*/

// Register and load the widget
function wpb_load_widget()
{
    register_widget('wpb_widget');
}
add_action('widgets_init', 'wpb_load_widget');

// Creating the widget
class wpb_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            // Base ID of your widget
            'wpb_widget',

            // Widget name will appear in UI
            __('Custom_Loop Articoli', 'wpb_widget_domain'),

            // Widget description
            ['description' => __('Custom Loop Articoli', 'wpb_widget_domain')]
        );
    }

    // Creating widget front-end

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        //Myfunction wp_query
        $argoments = [
            'post_type' => 'post',
            'posts_per_page' => 3,
        ];

        //Query
        $recent_post_query = new WP_Query($argoments);
        //Loop
        if ($recent_post_query->have_posts()): ?>

<!-- Open Tag List -->
<ul class="container-rpw pt-3">

  <?php while ($recent_post_query->have_posts()):
      $recent_post_query->the_post(); ?>

  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="link-rpw">
    <li class="item-rpw d-flex">

      <div class="img-rpw">
        <?php the_post_thumbnail('thumbnail', [
            'class' => 'img-fluid',
            'alt' => get_the_title(),
        ]); ?>
      </div>
      <div class="content-rpw">
        <h4><?php the_title(); ?></h4>
        <span><?php the_time('j F Y'); ?></span>
      </div>

    </li>
  </a>

  <hr>

  <?php
  endwhile;else: ?>
  <!-- Close Tag List -->
</ul>

<?php endif;

        // Ripristina Query & Post Data originali
        wp_reset_query();
        wp_reset_postdata();

        //end myfunction wp_link_query

        // This is where you run the code and display the output

        //echo __( 'Hello, World!', 'wpb_widget_domain' );
        echo $args['after_widget'];
    }

    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'wpb_widget_domain');
        }// Widget admin form
        ?>
<p>
  <label for="<?php echo $this->get_field_id(
      'title'
  ); ?>"><?php _e('Title:'); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id(
      'title'
  ); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
</p>
<?php
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance['title'] = !empty($new_instance['title'])
            ? strip_tags($new_instance['title'])
            : '';
        return $instance;
    }
} // Class wpb_widget ends here

/* Count facebook Like
 --------------------------------------------------------*/
function count_like_facebook()
{
    $appid = '1540398229435058';
    $appsecret = 'ea8bfbde29ce9a7f72d1799ba06505a7';
    $url = get_permalink($id);
    $url = "https://graph.facebook.com/v3.2/?id=$url&fields=engagement&access_token=$appid|$appsecret";

    //open connection
    $ch = curl_init();
    $timeout = 5;

    //set the url
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); // Values: GET, POST, PUT, DELETE, PATCH, UPDATE

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    $data = json_decode($result, true);

    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';

    // add up engagement numbers: reaction count, comment count, and share count
    $total_count =
        $data['engagement']['reaction_count'] +
        $data['engagement']['comment_count'] +
        $data['engagement']['share_count'];

    // Conta i Mi piace o reazioni
    //$reaction_count = $data['engagement']['reaction_count'];

    // Conta i commenti
    //$comment_count = $data['engagement']['comment_count'];

    echo '<span>' . number_format($total_count) . '</span>';
    //echo '<span>'.number_format($comment_count).'</span>';
}

/* Replace form Comments - Blog
 --------------------------------------------------------*/
function wpsites_modify_comment_form_text_area($arg)
{
    $arg['comment_field'] =
        '<p class="comment-form-comment"><label for="comment">' .
        '</label><textarea id="comment" placeholder="il tuo commento qui.." name="comment" cols="45" rows="6" aria-required="true"></textarea></p>';
    return $arg;
}

add_filter('comment_form_defaults', 'wpsites_modify_comment_form_text_area');

function my_update_comment_fields($fields)
{
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $label = $req ? '*' : ' ' . __('(optional)', 'snw');
    $aria_req = $req ? "aria-required='true'" : '';

    $fields['author'] =
        '<p class="comment-form-author">

  			<input id="author" name="author" type="text" placeholder="' .
        esc_attr__('Il tuo Nome o Nickname *', 'snw') .
        '" value="' .
        esc_attr($commenter['comment_author']) .
        '" size="30" ' .
        $aria_req .
        ' />
  		</p>';

    $fields['email'] =
        '<p class="comment-form-email">

  			<input id="email" name="email" type="email" placeholder="' .
        esc_attr__('La tua E-mail *', 'snw') .
        '" value="' .
        esc_attr($commenter['comment_author_email']) .
        '" size="30" ' .
        $aria_req .
        ' />
  		</p>';

    $fields['url'] =
        '<p class="comment-form-url">

  			<input id="url" name="url" type="url"  placeholder="' .
        esc_attr__('Il tuo sito web', 'snw') .
        '" value="' .
        esc_attr($commenter['comment_author_url']) .
        '" size="30" />
  			</p>';

    return $fields;
}
add_filter('comment_form_default_fields', 'my_update_comment_fields');

/* Custom Main Query for Archive agave
 -------------------------------------------------------- */
// change main query for Custom Post type
function agave_query($query)
{
    // Make sure this only fires when we want it too
    if ($query->is_main_query() && $query->is_post_type_archive('agave')) {
        // If so, modify the post per page
        $query->set('posts_per_page', -1);
    }
    // Make sure this only fires when we want it too
    elseif ($query->is_main_query() && $query->is_tax('territorien')) {
        // If so, modify the post per page
        $query->set('posts_per_page', -1);
    }
    // Make sure this only fires when we want it too
    elseif ($query->is_main_query() && $query->is_tax('kategorien')) {
        // If so, modify the post per page
        $query->set('posts_per_page', -1);
    }
}
add_action('pre_get_posts', 'agave_query', 9999);

/* ACF ADD MENU ICON  IMAGE in MENU
 -------------------------------------------------------- */
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{
    // loop
    foreach ($items as &$item) {
        // vars
        $icon = get_field('mn_icon', $item);

        // append icon
        if ($icon) {
            $item->title .=
                '<span class="mn-icon"><img src="' .
                $icon['sizes']['thumbnail'] .
                '" alt="' .
                $icon['alt'] .
                '"/></span>';
        }
    }

    // return
    return $items;
}

/* Disabilita Gutenberg per certi tipi di post
 -------------------------------------------------------- */
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);

function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'customer') {
        return false;
    }
    return $current_status;
}

/* WOOCOMMERCE - Escludere prodotti di particolari categorie dalla pagina shop
 -------------------------------------------------------- */

function nascondi_categorie_query( $q ) {
    $tax_query = (array) $q->get( 'tax_query' );
    $tax_query[] = array(
           'taxonomy' => 'product_cat',
           'field' => 'slug',
           'terms' => array( 'nascosto' ), 
           'operator' => 'NOT IN'
    );
    $q->set( 'tax_query', $tax_query );
}
add_action( 'woocommerce_product_query', 'nascondi_categorie_query' );


/* WOOCOMMERCE - Non mostrare una certa categoria 
 -------------------------------------------------------- */

add_filter( 'get_terms', 'get_subcategory_terms', 10, 3 );

function get_subcategory_terms( $terms, $taxonomies, $args ) {

$new_terms = array();

// if a product category and on the shop page
if ( in_array( 'product_cat', $taxonomies ) && ! is_admin() ) {

foreach ( $terms as $key => $term ) {

if ( ! in_array( $term->slug, array( 'nascosto' ) ) ) {
$new_terms[] = $term;
}

}

$terms = $new_terms;
}

return $terms;
}



/* Inject in Header Adobe Rolex Code tracker only on template rolex
 --------------------------------------------------------*/
function inject_code_head()
{
    $currentTemplateSlug = get_page_template_slug();
    if (strpos($currentTemplateSlug, 'template-rolex') !== false): ?>
<!-- Adobe Head Assets -->
<script src="//assets.adobedtm.com/7e3b3fa0902e/7ba12da1470f/launch-5de25e657d80.min.js" async></script>

<?php endif;
}

add_action('wp_head', 'inject_code_head', 10);

/* Inject After Body open Adobe Rolex Code tracker only on template rolex
 --------------------------------------------------------*/
function inject_code_body()
{
    $currentTemplateSlug = get_page_template_slug();
    if (strpos($currentTemplateSlug, 'template-rolex') !== false): ?>
<!-- Adobe Body coBrandVersion -->
<script>
window.coBrandVersion = "Hybrid"
</script>

<?php endif;
}

add_action('wp_body_open', 'inject_code_body');

/* Inject in Footer Adobe Rolex Code tracker only on template rolex
 --------------------------------------------------------*/

function inject_code_footer()
{
    $currentTemplateSlug = get_page_template_slug();
    if (strpos($currentTemplateSlug, 'template-rolex') !== false): ?>
<!-- Adobe Footer pageBottom -->
<script type="text/javascript">
_satellite.pageBottom();
</script>

<?php endif;
}

add_action('wp_footer', 'inject_code_footer', 10, 2);

?>