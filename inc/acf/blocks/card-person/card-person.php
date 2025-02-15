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
$id = 'card-person-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'card-person';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }



$image = get_field('image');
$title = get_field('title');
$content = get_field('text');

 ?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo $className ?> mb-5 mb-md-0">
  <img src="<?php echo $image['sizes']['card-news']; ?>" alt="<?php echo $image['alt']; ?>">
  <div class="card-person_body">
    <h3 class="card-person_title"><?php echo $title; ?></h3>
    <div class="card-person_text">
      <p><?php echo $content; ?></p>
    </div>
  </div>
  <div class="card-person_footer">
    <a href="#"><i class="icon-facebook"></i></a>
    <a href="#"><i class="icon-instagram"></i></a>
    <a href="#"><i class="icon-twitter"></i></a>
  </div>
</div>