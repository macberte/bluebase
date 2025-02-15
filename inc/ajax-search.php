<?php
/**
 * Include script
 */
function live_search_scripts()
{
    wp_register_script(
        'live-search',
        get_template_directory_uri() . '/js/search.js',
        ['jquery'],
        null,
        true
    );
    wp_enqueue_script('live-search');

    $live_search = [
        'ajax_url' => admin_url('admin-ajax.php'),
    ];

    wp_localize_script('live-search', 'live_search', $live_search);
}
add_action('wp_enqueue_scripts', 'live_search_scripts');

/**
 * Live search
 */
function live_search()
{
    $post_type = ['post', 'page'];
    $the_query = new WP_Query([
        'post_type' => $post_type,
        'posts_per_page' => -1,
        's' => esc_attr($_POST['keyword']),
    ]);

    if ($the_query->have_posts()) {
        while ($the_query->have_posts()):
            $the_query->the_post();?>


	<!-- Post type -->
	<?php $post_type = get_post_type();?>


	<li class="live-search-item">
	  <a class="live-search-item_link" href="<?php echo esc_url(
                post_permalink()
            ); ?>" title="<?php echo __('Vai a', 'blubase') . ' ' . get_the_title(); ?>">

	    <?php if (has_post_thumbnail()): ?>
	    <figure>
	      <?php the_post_thumbnail('thumbnail');?>
	    </figure>
	    <?php else: ?>
    <figure>
      <img src="<?php echo get_template_directory_uri(); ?>/img/search-thumb.jpg">
    </figure>

    <?php endif;?>


    <div class="result-content">
      <h6><?php the_title();?></h6>

      <?php if ('page' == $post_type) {?>
      <span>Pagina</span>
      <?php } elseif ('post' == $post_type) {?>
      <span>Articolo - <?php the_time('j F Y');?></span>
      <?php }?>
    </div>

  </a>
</li>

<?php
endwhile;

        wp_reset_query();
        wp_reset_postdata();
    } else {
        ?>
<li class="live-search-no-results">
  <?php _e('Spiacenti. La ricerca non ha prodotto risultati...', 'blubase');?>
</li>
<?php
}

    die();
}
add_action('wp_ajax_live_search', 'live_search');
add_action('wp_ajax_nopriv_live_search', 'live_search');
?>