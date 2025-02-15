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
$id = 'gallery-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'gallery-acf';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }



$images = get_field('gallery');

if( $images ): ?>


 <div id="<?php echo esc_attr($id); ?>" class="<?php echo $className ?> container-gallery clearfix gallery my-3">

   <?php foreach( $images as $image ): ?>

     <div class="thumb-acf-gallery overlay-box" style="width: calc(100%/<?php the_field('el_for_row'); ?>);">
       <a class="gallery-acf-link" href="<?php echo $image['url']; ?>">
          <img src="<?php echo $image['sizes']['portfolio']; ?>" alt="<?php echo $image['alt']; ?>" />
          <div class="overlay animate"><i class="icon-eye animate"></i></div>
       </a>

     </div>

   <?php endforeach; ?>

 </div>

<?php endif; ?>

<!-- Richiede magnificPopUp.js e mobileGesture.js -->
