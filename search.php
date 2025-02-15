<?php get_header();

get_template_part('template-parts/content', 'cover-archive'); ?>


<!-- ENTRY-CONTENT -->
<article class="entry-content-page way-animate delay-2 fadeUp">
  <div class="container w-1280">
    <div class="row">

      <div class="col-12 mb-4">
        <h2 class="leftline">Risultati di ricerca per... <i>"<?php echo $s; ?>"</i></h2>
      </div>

      <!-- Loop wordpress -->
      <?php if (have_posts()) {
          while (have_posts()) {
              the_post(); ?>

      <!-- Post type -->
      <?php $post_type = get_post_type(); ?>
      <!-- CARD-ARCHIVE-BLOG -->
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="card-blog">

          <div class="card-blog_label">
            <!-- Check tipo di post -->
            <?php if ('page' == $post_type) {?>

            <span>Pagina</span>

            <?php } elseif ('post' == $post_type) {?>

            <span>Articolo</span>


            <?php }?>
          </div>

          <!-- Se ha l'immagine in evidenza -->
          <?php if (has_post_thumbnail()) {?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <figure class="card-blog_image overlay-box">
              <?php the_post_thumbnail('medium_large', [
                  'class' => 'img-fluid w-100',
                  'alt' => get_the_title(),
              ]); ?>
            </figure>
          </a>

          <!-- Se non ha l'immagine in evidenza -->
          <?php } else {?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <figure class="card-blog_image overlay-box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-photo_3_2.jpg" alt="no image">
            </figure>
          </a>
          <?php }?>

          <div class="card-blog_content">
            <span class="card-blog_meta">
              <i class="icon-calendar-empty"></i> <?php the_time(
                  'j F Y'
              ); ?></span>
            <h3 class="card-blog_title"><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn-primary inverse">Leggi
              tutto</a>
          </div>

        </div>
      </div>
      <!-- ./CARD-ARCHIVE-BLOG -->

      <?php
          }
      } else {
          ?>
      <!-- Loop Wordpress -->

      <!-- Else -->
      <div class="col-md-6 offset-md-3 text-center">
        <img class="search-image-not-found" src="<?php echo get_template_directory_uri(); ?>/img/search-not-found.png"
          alt="search">
        <h3 class="mb-2">Spiacenti</h3>
        <p class="text-center">Il termine di ricerca non ha prodotto risultati. <br>Prova di nuovo.</p>
        <div class="search-form-404-container text-center">
          <form class="search-form" action="<?php echo esc_url_raw(
              home_url()
          ); ?>" method="get">
            <input type="search" placeholder="Cerca nel sito..." aria-label="Search" name="s">
            <button type="submit"><i class="icon-search"></i></button>
          </form>
        </div>
      </div>

      <?php
      }?>
      <!-- End Loop Wordpress -->

    </div><!-- ./row -->



    <!-- s code -->
    <div class="row">
      <div class="col-12 pagination-num py-5">
        <?php echo paginate_links(); ?>
        <?php
      // $args = array(
      //   'show_all'           => false,
      //   'end_size'           => 1,
      //   'mid_size'           => 2,
      //   'prev_next'          => true,
      //   'prev_text'          => __('« Previous'),
      //   'next_text'          => __('Next »'),
      //   'type'               => 'plain',
      //   'add_args'           => false,
      //   'add_fragment'       => '',
      //   'before_page_number' => '',
      //   'after_page_number'  => ''
      // );

      // echo paginate_links($args);
?>
      </div>
    </div>


</article>
<!-- Container -->

<?php get_footer(); ?>