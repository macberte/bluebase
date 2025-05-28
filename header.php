<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Only if SEO Rank Math not work -->
  <?php if (!is_plugin_active('seo-by-rank-math/rank-math.php')) { ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php wp_title(); ?></title>
  <?php }?>

  <?php wp_head(); ?>

</head>



<body <?php body_class(''); ?>>
  <?php wp_body_open(); ?>
  <a href="#main-content" class="skip-link" title="Skip to main content">Salta al contenuto principale</a>

  <header class="main-header" role="banner">
    <!-- TOP-BAR -->
    <div class="top-bar d-none d-lg-block">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 text-left">
            <a href="https://www.google.com/maps/dir/44.9916305,8.9978201/nate+centro+riparazioni/@44.9925405,8.9991396,17z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x47873eeec959d753:0x13d41efe3fe80223!2m2!1d9.0041662!2d44.9942604!3e0"
              target="_blank" class="mr-3"> <i class="icon-location"></i> Via Don Minzoni 62, Voghera (PV)</a>
            <a href="mailto:info@nomeazienda.it"><i class="icon-mail"></i> info@nomeazienda.it</a>
          </div>

          <div class="col-lg-6 text-right">
            <a href="https://www.facebook.com/" target="_blank" title="Facebook" rel="noreferrer noopener"
              class="mr-2"><i class="icon-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank" title="Instagram" rel="noreferrer noopener"><i
                class="icon-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="navigator">

        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php the_field(
                'logo',
                'option'
            ); ?>" alt="logo" title="Logo">
          </a>
        </div>


        <!-- menu-wrap Menu-desktop -->
        <nav class="nav-container" role="navigation" aria-label="Menu principale">

          <!-- Menu -->
          <?php wp_nav_menu([
              //'menu' => 'main-menu',
              'theme_location' => 'main-menu',
              'container' => '',
              'container_id' => '',
              'container_class' => '',
              'menu_id' => false,
              'menu_class' => 'main-menu',
              'depth' => 3,
              'fallback_cb' => '',
          ]); ?>

          <!-- CTA Call -->
          <div class="cta-btn-phone stagger">
            <a href="tel:+390383212368" title="Chiamaci"><i class="icon-phone"></i> 0383 21 23 68</a>
          </div>

          <!-- Only Mobile -->
          <div class="social-section d-lg-none stagger">
            <hr class="divider-mobile">
            <div class="social-mobile">
              <a href="https://www.facebook.com" target="_blank" title="Facebook" rel="noreferrer noopener"
                class="circle-icon"><i class="icon-facebook"></i></a>
              <a href="https://www.instagram.com" target="_blank" title="Instagram" rel="noreferrer noopener"
                class="circle-icon"><i class="icon-instagram"></i></a>
            </div>
          </div>


          <div class="search-form-container">
            <form class="search-form" action="<?php echo esc_url_raw(
                home_url()
            ); ?>" method="get">

              <input class="form-input" type="search" placeholder="Cerca..." aria-label="Search" name="s">
              <button type="submit"><i class="icon-my-search" aria-hidden="true"></i></button>
            </form>
          </div>

        </nav><!-- ./nv-container -->

        <!-- Toggle menu-mobile -->
        <div class="wrap-toggle d-flex align-items-center d-lg-none">
          <div class="toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!-- ./navigator -->

    </div>
    <!-- ./container -->

  </header>


  <!-- LIVE SEARCH -->
  <div class="live-search-wall">
    <div class="live-search-container w-1200">

      <div class="live-search-close">
        <i class="icon-cs-close"></i>
        <span><?php _e('Chiudi', 'blubase'); ?></span>
      </div>

      <h2><?php _e('Cerca nel sito', 'blubase'); ?></h2>

      <form id="live-search-form" action="<?php echo esc_url_raw(home_url()); ?>">
        <input type="text" id="live-search-input" name="s" aria-label="Search"
          placeholder="<?php _e('Cerca nel sito...', 'blubase'); ?>">
        <button class="live-search-btn" type="submit"><i class="icon-cs-search" aria-hidden="true"></i></button>
        <button class="live-search-reset-btn" type="reset"><i class="icon-cs-close" aria-hidden="true"></i></button>
      </form>

      <div class="live-search-wrap">
        <ul class="live-search-results"></ul>
      </div>
    </div>

    <div class="search-results-number_wrap">
      <div class="search-results-number w-1200">
        <?php printf(
            _e(
                'La ricerca ha prodotto <strong><span class="num-result-search"></span></strong> risultati.',
                'blubase'
            )
        ); ?> <button class="submit-search-form" type="submit">
          <?php _e('Mostra tutti', 'blubase'); ?></button>
      </div>
    </div>
  </div>

  <!-- Main Overlay -->
  <div class="main-overlay"></div>


  <!-- MAIN CONTENT close in footer-->
  <main id="main-content">