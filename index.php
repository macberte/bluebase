<?php get_header();

$cover_blog = get_field('cover_blog', 'option');
$size = 'full';

?>


<div class="cover-page">
  <!-- COVER set in theme settings-->
  <?php if ($cover_blog): ?>

  <figure class="parallax-fit">
    <?php
echo wp_get_attachment_image($cover_blog, $size); ?>
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

        <span class="overtitle-page line-left">Blog</span>
        <h1 class="title-page">News</h1>
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


<!-- Enry Content -->
<article <?php post_class('entry-content-page way-animate delay-2 fadeUp');?>>
  <div class="container w-1280">
    <div class="row">

      <div class="col-12 meta-accordion-wrap mb-4">

        <button class="btn-accordion-meta" aria-expanded="false">
          <span>
            <i class="icon-cs-close" aria-hidden="true"></i>
          </span>
          Categorie e tags
        </button>

        <div class="accordion-meta">

          <?php
$categories = get_categories();
$categories = get_tags();

//CATEGORY
$categories = get_categories();
if (!empty($categories)) {
    echo '<h2 class="archive-meta_title">Categorie</h2>';
    echo '<ul class="archive-meta_menu">';
    foreach ($categories as $category) {
        $category_link = esc_url(get_category_link($category->term_id));
        $category_name = esc_html($category->name);
        echo "<li><a href='$category_link'>$category_name</a> ({$category->count})</li>";
    }
    echo '</ul>';
}

//TAGS
$tags = get_tags();
if (!empty($tags)) {
    echo '<h2 class="archive-meta_title">Tags</h2>';
    echo '<ul class="archive-meta_menu">';
    foreach ($tags as $tag) {
        $tag_link = esc_url(get_tag_link($tag->term_id));
        $tag_name = esc_html($tag->name);
        echo "<li><a href='$tag_link'>$tag_name</a> ({$tag->count})</li>";
    }
    echo '</ul>';
}

?>
        </div>
      </div>

      <!-- loop wordpress -->
      <?php if (have_posts()):
    while (have_posts()):
        the_post();?>

      <!-- CARD-ARCHIVE-BLOG -->
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="card-blog">

          <div class="card-blog_label">
            <?php
        foreach (get_the_category() as $category) {
            echo "<span>";
            echo $category->name;
            echo "</span>";
        }?>
          </div>
          <!-- Se ha l'immagine in evidenza -->
          <?php if (has_post_thumbnail()) {?>
          <a href="<?php the_permalink();?>" title="<?php the_title();?>">
            <figure class="card-blog_image overlay-box">
              <?php the_post_thumbnail('medium_large', [
            'class' => 'img-fluid w-100',
            'alt' => get_the_title(),
        ]);?>
            </figure>
          </a>

          <!-- Se non ha l'immagine in evidenza -->
          <?php } else {?>
          <a href="<?php the_permalink();?>" title="<?php the_title();?>">
            <figure class="card-blog_image overlay-box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-photo_3_2.jpg" alt="no image">
            </figure>
          </a>
          <?php }?>

          <div class="card-blog_content">
            <span class="card-blog_meta">
              <i class="icon-calendar-empty" aria-hidden="true"></i> <?php the_time(
            'j F Y'
        );?></span>
            <h3 class="card-blog_title"><?php the_title();?></h3>

            <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="btn-primary inverse">Leggi
              tutto</a>
          </div>

        </div>
      </div>
      <!-- ./CARD-ARCHIVE-BLOG -->

      <?php
    endwhile;
else:
?>
      <!-- ./loop wordpress -->

      <div class="col-12">
        <h4>Spiacenti al momento non ci sono post da visualizzare</h4>
      </div>

      <?php
endif;?>

      <!-- Paginate Link -->
      <div class="col-12 pagination-num pb-5">
        <?php echo paginate_links(); ?>
      </div>

    </div>
    <!-- ./row -->

  </div>
  <!-- ./container -->

</article>



<?php get_footer();?>