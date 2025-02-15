<?php

/**
 * Accordion Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'accordion-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'accordion';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


?>





<?php if( have_rows('element') ): ?>

<?php

    //OPTIONS

    //Button radio - selection stile
    $stile_selection = get_field('stile');

    if($stile_selection == 'semplice'){

      $stile = 'simple';

    }else if($stile_selection == 'colorato'){

      $stile = 'color';
    }else{
      $stile = get_field('custom_class');
    }

    //Button radio - First element open
    $first_element_open = get_field('first_open');

    if($first_element_open == 'si'){

      $first_open = 'first-open';

    }else{
      //No output code
    }

     ?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); echo " " . $stile . " " . $first_open;
    ?>">

  <?php while( have_rows('element') ): the_row();

  		// vars
  		$title = get_sub_field('title');
  		$content = get_sub_field('content');

  		?>

  <div class="accordion-item-wrap">
    <h3 class="accordion-item-voice"><?php echo $title; ?></h3>
    <div class="accordion-item-panel">
      <?php echo $content; ?>
    </div>
  </div>

  <?php endwhile; ?>

</div>
<!-- ./Accordion block -->
<?php endif; ?>


<!-- SCRIPT DISABILITATO perchè presente nel JS del tema -->
<script type="text/javascript">
jQuery(document).ready(function($) {
  function openFirstPanel() {
    $('.first-open > div:first-child > .accordion-item-panel').addClass('active').slideDown();
    $('.first-open > div:first-child > .accordion-item-voice').addClass('active');
    $('.first-open > div:first-child').addClass('active');
  }

  openFirstPanel();

  $('.accordion .accordion-item-voice').click(function() {

    var $accordion = $(this).parent().parent();

    var allPanels = $accordion.find('div > .accordion-item-panel');
    var allVoice = $accordion.find('div > .accordion-item-voice');

    var $this = $(this);
    var $target = $this.next();


    if ($target.hasClass('active')) {
      $target.removeClass('active').stop().slideUp();
      allVoice.removeClass('active');
      allPanels.removeClass('active');
    } else {
      allPanels.removeClass('active').stop().slideUp();
      allVoice.removeClass('active');
      $target.addClass('active').stop().slideDown();
      $this.addClass('active');
    }
    //Scroll to element - commentare per eliminare la funzione e lascare return false
    var targetEl = $(this); // Set the target as variable
    //lo scroll funziona solo su dispositivi sotto i 992 px
    if ($(window).width() < 992) {
      setTimeout(function() {
        $('html, body').stop().animate({
          scrollTop: $(targetEl).offset().top - 65
        }, 400, function() {
          location.hash = targetEl; //attach the hash (#jumptarget) to the pageurl
        });
      }, 400);
    } else {
      return false;
    }

    // return false;

  }); //click



}); /*Close jQuery*/
</script>