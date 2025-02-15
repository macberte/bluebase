<div class="cover-blog">

  <div class="container w-950">
    <div class="row">
      <div class="col-12">

        <!-- BREADCRUMB -->
        <div class="breadcrumb way-animate fadeUp">
          <?php if (function_exists('rank_math_the_breadcrumbs')) {
    rank_math_the_breadcrumbs();
}?>
        </div>

        <?php if (has_post_thumbnail()) {?>
        <div class="blog-image way-animate fadeUp delay">
          <figure class="">
            <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => get_the_title()));?>
          </figure>
        </div>
        <?php } else {?>

        <div style="margin-top: 100px;"></div>
        <?php }?>

        <div class="single-data way-animate fadeUp delay-2">
          <div class="single-meta">
            <span class="single-date single-meta_item"><i class="icon-calendar-empty"></i> <?php the_date();?></span>

            <span class="single-category single-meta_item"><i class="icon-folder-open-empty"></i> Categoria:
              <?php the_category(', ');?></span>
            <?php if (has_tag()): ?>
            <span class="single-tag single-meta_item"><i class="icon-tags"></i> <?php the_tags();?></span>
            <?php endif;?>
          </div>
          <div class="social-share-wrap">
            <span class="btn-share">Condividi <i class="icon-share"></i></span>
            <?php custom_social_share();?>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>