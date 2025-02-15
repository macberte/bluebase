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
$id = 'flip-card-container-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'flip-card-container';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


?>





<?php if( have_rows('flip_card_item') ): ?>


<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className);?>">

  <?php while( have_rows('flip_card_item') ): the_row();

  		// vars
  		$frontImg = get_sub_field('front_img');
      $frontTitle = get_sub_field('front_title');
      $frontContent = get_sub_field('front_content');
      
  		$backTitle = get_sub_field('back_title');
  		$backContent = get_sub_field('back_content');
  		$backButton = get_sub_field('back_button');

  		?>

  <!-- flip-card -->
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="<?php echo $frontImg['url']; ?>" alt="<?php echo $frontImg['alt']; ?>">
        <h3 class="flip-card_title"><?php echo $frontTitle; ?></h3>

        <?php echo $frontContent; ?>

      </div>

      <div class="flip-card-back">
        <div class="flip-back-top">
          <h4 class="flip-card_title-back"><?php echo $backTitle; ?></h4>
          <?php echo $backContent; ?>
        </div>
        <?php if($backButton): ?>
        <div class="flip-back-bottom">
          <a href="<?php echo $backButton['url']; ?>" class="btn-flip my-3"
            title="<?php echo $backButton['title']; ?>"><?php echo $backButton['title']; ?></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php endwhile; ?>

</div>
<!-- ./Flip-card-content block -->
<?php endif; ?>