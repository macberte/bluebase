<?php

//cover in theme_settings
$cover_image_default = get_field('default_page_cover', 'option');
//Field in page
$cover_data = get_field('cover_data');
$size = 'full';
// echo wp_get_attachment_image($cover_image_default, $size);

?>

<div class="cover-page">

  <figure class="cover-default parallax-fit">
    <?php the_post_thumbnail();?>
  </figure>

  <div class="filter" style="opacity: <?php echo $cover_data['cover_opacity'] /
    100; ?>; background-color: <?php echo $cover_data['cover_color']; ?>">
  </div>

  <div class="container">
    <div class="row py-3">
      <div class="col-12 way-animate fadeUp">
        <span class="overtitle-page line-left">Servizi</span>
        <h1 class="title-page"><?php the_title();?></h1>

        <!-- BREADCRUMB -->
        <div class="breadcrumb way-animate fadeUp">
          <?php if (function_exists('rank_math_the_breadcrumbs')) {
    rank_math_the_breadcrumbs();
}?>
        </div>

      </div>
    </div>
  </div>

</div>