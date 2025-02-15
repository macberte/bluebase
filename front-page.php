<?php get_header(); ?>

<!-- SEO Title -->
<h1 class="seo-title"><?php the_field('seo-h1_home_page', 'option'); ?></h1>

<div class="hero parallax-animation"
  style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/cover-lake.jpg')">
  <div class="filter"></div>
  <div class="hero-content absolute-xy">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex flex-column align-items-center">
          <h2 class="hero-title_big">Lorem ipsum dolor sit amet</h2>
          <h3 class="hero-title_small">Lasciati guidare dall'emozione</h3>
          <div class="hero-button mt-5">
            <a href="#jump-corsi" class="btn-primary mr-4">I nostri corsi</a>
            <a href="#" class="btn-primary empty white">certificazioni</a>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<!-- Intro -->
<section class="force py-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Lorem ipsum dolor sit amet</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum eveniet neque ad ut. Illo suscipit, beatae, ab
          odio nobis delectus dolore provident cum atque reprehenderit veritatis id, blanditiis exercitationem unde?</p>
      </div>
      <div class="col-lg-6"></div>
    </div>
  </div>
</section>

<?php the_content(); ?>

<!-- News -->
<section class="home-news p-md-80">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5">
        <h2 class="title-line">News</h2>
      </div>

      <!-- Query-->
      <?php
$args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
    'nopaging' => false,
];

// Query
$snw_query = new WP_Query($args);
// Loop
while ($snw_query->have_posts()) {
    $snw_query->the_post(); ?>

      <div class="col-md-6 col-lg-4 mb-5">
        <div class="card-news">


          <!-- Se ha l'immagine in evidenza -->
          <?php if (has_post_thumbnail()) {?>

          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <div class="card-news-image overlay-box">
              <?php the_post_thumbnail('card-news', [
                  'class' => 'img-fluid w-100',
                  'alt' => get_the_title(),
              ]); ?>
            </div>

          </a>
          <!-- Se non ha l'immagine in evidenza -->
          <?php } else {?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <div class="card-news-image overlay-box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-photo_3_2.jpg" alt="">
            </div>
          </a>
          <?php }?>


          <div class="card-news-content">

            <h3 class="card-news-title">
              <?php the_title(); ?>
            </h3>

            <span class="card-news-date mr-1"><i class="icon-calendar mr-1"></i><?php the_time(
                'j F Y'
            ); ?></span>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-primary">Leggi tutto</a>
          </div>
        </div>
      </div>

      <?php
}
// End Loop


// Ripristina Query & Post Data originali
wp_reset_query();
wp_reset_postdata();
?>
      <!-- End WP_Query -->

    </div>
  </div>
</section>

<?php get_footer(); ?>