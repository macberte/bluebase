<?php

/**
 * Testimonials-owl Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'owl-testimonials-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'owl-testimonials';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


?>





<?php if( have_rows('testimonial_item') ): ?>

<?php

    //OPTIONS

    //Button radio - selection option script owl plugin
    $testimonialAutoplay = get_field('testimonial_autoplay');

    if($testimonialAutoplay == 'si'){

      $owl_Autoplay = 'true';

    }else if($testimonialAutoplay == 'no'){

      $owl_Autoplay = 'false';
    }

    //Number Testimonial speed slide - First element open
    $owl_Speed = get_field('testimonial_speed_slide');


     ?>

<!-- Carousel testimonials -->
<div id="<?php echo esc_attr($id); ?>" class="owl-carousel <?php echo esc_attr($className);
    ?>">

  <?php while( have_rows('testimonial_item') ): the_row();

  		// vars
  		$testimonialImage = get_sub_field('image_testimonials');
  		$testimonialName = get_sub_field('testimonial_name');
  		$testimonialContent = get_sub_field('testimonial_content');

  		?>

  <!-- slide item -->
  <div class="ow-slide-item">
    <div class="testimonials-circle-image text-center">
      <img src="<?php echo $testimonialImage['url'] ?>" alt="<?php echo $testimonialImage['alt'] ?>">
    </div>
    <div class="testimonials-text text-center my-5">
      <?php echo $testimonialContent; ?>
    </div>
    <div class="testimonials-title text-center my-5">
      <h4><?php echo $testimonialName; ?></h4>
    </div>
  </div>

  <?php endwhile; ?>

</div>
<!-- ./carousel testimonials block -->
<?php endif; ?>


<!-- SCRIPT  -->
<script type="text/javascript">
jQuery(document).ready(function($) {

  $(".owl-testimonials").owlCarousel({
    responsiveClass: true,
    items: 2,
    autoplay: true,
    autoplayTimeout: 5000,
    //autoplayHoverPause: true,
    autoHeight: true,
    rewind: true,
    touchDrag: true,
    // loop: true,
    smartSpeed: 1000,
    margin: 10,
    nav: true,
    dots: true,
    navText: [
      '<i class="icon-left-open-big"></i>',
      '<i class="icon-right-open-big"></i>'
    ],
    responsive: {
      // breakpoint from 0 up
      0: {
        items: 1,
        autoplay: false
      },
    }
  });


}); /*Close jQuery*/
</script>