<?php

$cover_archive = get_field('cover_archive', 'option');
//SIZE IMAGE
$size = 'full';

if (is_category()):

    $cover_set = get_field('cover_category', 'option');
    $title_archive = single_cat_title('', false);
    $overtitle_archive = 'Archivio Categoria';

elseif (is_tag()):

    $cover_set = get_field('cover_tags', 'option');
    $title_archive = single_tag_title('', false);
    $overtitle_archive = 'Archivio Tags';

elseif (is_date()):

    $cover_set = get_field('cover_date', 'option');
    $title_archive = get_the_archive_title();
    $overtitle_archive = 'Articoli del';

elseif (is_search()):

    $cover_set = get_field('cover_search', 'option');
    $title_archive = 'Ricerca...';
    $overtitle_archive = 'Risultati di ricerca';

else:

    $cover_set = null;
    $title_archive = get_the_archive_title();
    $overtitle_archive = 'Archivio';

endif;
?>


<div class="cover-page">
  <!-- COVER set in theme settings-->
  <?php if ($cover_set): ?>

  <figure class="parallax-fit">
    <?php
echo wp_get_attachment_image($cover_set, $size); ?>
  </figure>

  <?php else: ?>

  <!-- COVER Generic -->
  <figure class="parallax-fit">
    <?php $size = 'full';
echo wp_get_attachment_image($cover_archive, $size);?>
  </figure>

  <?php endif;?>

  <div class="filter" style="opacity: 0.6; background-color:#000;"></div>



  <div class="container">
    <div class="row py-3">
      <div class="col-12 way-animate fadeUp">

        <span class="overtitle-page line-left"><?php echo $overtitle_archive; ?></span>
        <h1 class="title-page"><?php echo $title_archive; ?></h1>

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