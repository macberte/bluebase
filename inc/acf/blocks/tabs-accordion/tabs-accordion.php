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
$id = 'tabs-accordion-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'tabs-accordion';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


?>




<?php if( have_rows('tabs_element') ): ?>

<?php

    //OPTIONS

    //Button radio - selection stile
    $stile_selection = get_field('stile_tabs');

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
  <ul class="nav-tabs d-none d-lg-flex">

    <?php while( have_rows('tabs_element') ): the_row();
      		// vars
          $title = get_sub_field('tabs_title');
          $content = get_sub_field('tabs_content');
          $counter++ 
    ?>
    <li data-tabs-nav="<?php echo $title; ?>" class="<?php if($counter===1){echo 'tabs-active';} ?>">
      <?php echo $title; ?></li>


    <?php endwhile; ?>
  </ul>

  <?php while( have_rows('tabs_element') ): the_row();
    $title2 = get_sub_field('tabs_title');
    $content2 = get_sub_field('tabs_content');
    $contentBox = get_sub_field('tabs_content_box');

    $counter2++ 
  		?>




  <div class="accordion-item-wrap">
    <h3 class="accordion-item-voice d-lg-none"><?php echo $title2; ?></h3>
    <div class="accordion-item-panel<?php if($counter2==1){echo ' tabs-active';} ?>"
      data-tabs-panel="<?php echo $title2; ?>">
      <div class="accordion-item-left">
        <?php echo $content2; ?>
      </div>
      <?php if($contentBox): ?>
      <div class="accordion-item-right">
        <div>
          <?php echo $contentBox; ?>
        </div>
      </div>
      <?php endif; ?>


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
    $('.first-open > div:first-child > .accordion-item-panel').slideDown();
    $('.first-open > div:first-child > .accordion-item-voice').addClass('active');
    $('.first-open > div:first-child').addClass('active');
  }

  // openFirstPanel();

  $('.tabs-accordion .accordion-item-voice').click(function() {

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