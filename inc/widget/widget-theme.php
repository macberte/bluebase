<?php 

/* Registrazione nuovo widget (Ultimi Articoli con immagine)
  --------------------------------------------------------*/

    // Register and load the widget
    function wpb_load_widget() {
      register_widget( 'wpb_widget' );
  }
  add_action( 'widgets_init', 'wpb_load_widget' );

  // Creating the widget
  class wpb_widget extends WP_Widget {

  function __construct() {

  parent::__construct(



  // Base ID of your widget
  'wpb_widget',

  // Widget name will appear in UI
  __('Custom_Loop Articoli', 'wpb_widget_domain'),

  // Widget description
  array( 'description' => __( 'Custom Loop Articoli', 'wpb_widget_domain' ), )
  );
  }

  // Creating widget front-end

  public function widget( $args, $instance ) {

  $title = apply_filters( 'widget_title', $instance['title'] );

  // before and after widget arguments are defined by themes
  echo $args['before_widget'];
  if ( ! empty( $title ) )
  echo $args['before_title'] . $title . $args['after_title'];

  //Myfunction wp_query
    $argoments = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    );


    //Query
    $recent_post_query = new WP_Query($argoments);
    //Loop
    if ( $recent_post_query->have_posts() ) :
      ?>

<!-- Open Tag List -->
<ul class="container-rpw pt-3">

  <?php
      while ( $recent_post_query->have_posts() ) :
        $recent_post_query->the_post();

    ?>

  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="link-rpw">
    <li class="item-rpw d-flex">

      <div class="img-rpw">
        <?php the_post_thumbnail('thumbnail', array( 'class'=> 'img-fluid', 'alt' => get_the_title() )); ?>
      </div>
      <div class="content-rpw">
        <h4><?php the_title(); ?></h4>
        <span><?php the_time('j F Y'); ?></span>
      </div>

    </li>
  </a>

  <hr>

  <?php
      endwhile; else:

    ?>
  <!-- Close Tag List -->
</ul>

<?php
      endif;

      // Ripristina Query & Post Data originali
      wp_reset_query();
      wp_reset_postdata();

    //end myfunction wp_link_query


    // This is where you run the code and display the output

    //echo __( 'Hello, World!', 'wpb_widget_domain' );
    echo $args['after_widget'];

  }

  // Widget Backend
  public function form( $instance ) {
  if ( isset( $instance[ 'title' ] ) ) {
  $title = $instance[ 'title' ];
  }
  else {
  $title = __( 'New title', 'wpb_widget_domain' );
  }
  // Widget admin form
  ?>
<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
    name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
  $instance = array();
  $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
  return $instance;
  }
  } // Class wpb_widget ends here


  
?>