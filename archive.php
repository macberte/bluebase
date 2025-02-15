<?php get_header();

get_template_part('template-parts/content', 'cover-archive');?>


<!-- Enry Content -->
<article class="entry-content-page way-animate delay-2 fadeUp">
  <div class="container w-1280">
    <div class="row">

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
		              <i class="icon-calendar-empty"></i> <?php the_time(
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

    </div>
    <!-- ./row -->

  </div>
  <!-- ./container -->

</article>



<?php get_footer();?>