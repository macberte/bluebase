<?php
/*

Template Name: Components
Template Post Type: page

 */
get_header();

get_template_part('template-parts/content', 'cover-page');?>


<!-- ENTRY-CONTENT -->
<article id="post-<?php the_ID();?>" <?php post_class(
    'entry-content-page delay way-animate fadeUp'
);?>>
  <!-- loop wordpress -->
  <?php while (have_posts()):
    the_post();?>

  <!-- cta-btn-phone -->
  <section class="components-phone">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <!-- Item -->
          <span>Classe: cta-btn-phone</span>
          <h2>Cta phone</h2>
          <p>Ideale per footer o header</p>
          <div class="cta-btn-phone">
            <a href="tel:+390383212368"> <span></span><i class="icon-phone"></i> 0383 21 23 68</a>
          </div>

        </div>
        <div class="col-lg-6"></div>
      </div>
    </div>
  </section>

  <hr>


  <!-- Parallax Fit cover -->
  <div class="container mb-5">
    <div class="row">
      <div class="col-12">
        <span>Classe: .parallax-fit</span>
        <h2>Parallax Fit Cover</h2>
        <p>Usati helpers .color-white e .text-white</p>
      </div>
    </div>
  </div>

  <section class="parallax-fit_container components-parallax py-100 text-white color-inherit">
    <figure class="parallax-fit">
      <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.jpg" alt="">
    </figure>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Lorem ipsum dolor si</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quos a soluta veritatis, harum provident
            labore dignissimos tempore asperiores quibusdam blanditiis ex libero adipisci assumenda fugiat distinctio
            unde rem doloremque.</p>
        </div>
      </div>
    </div>
  </section>

  <hr>

  <!-- w-650 -->
  <div class="container mb-5">
    <div class="row">
      <div class="col-12">
        <span>Classe: .w-650</span>
        <h2>Componente largo 650px</h2>
        <p></p>
      </div>
    </div>
  </div>


  <section class="components-width-650">
    <div class="container">
      <div class="row">
        <div class="w-650 text-center">
          <figure class="mb-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cover-lake.jpg" alt="">
          </figure>
          <h2>Lorem ipsum</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolore similique iusto aspernatur. At
            dicta nulla molestiae necessitatibus vitae. Recusandae beatae atque quod optio omnis non quibusdam quisquam
            ullam natus?</p>
          <a href="#" class="btn-primary">Scopri di più</a>
        </div>
      </div>
    </div>
  </section>


  <hr>

  <!-- Banner -->
  <div class="container mb-5">
    <div class="row">
      <div class="col-12">
        <span>Classe: .banner</span>
        <h2>Banner</h2>
        <p>Immagine in object-fit altezza container 30vh</p>
      </div>
    </div>
  </div>


  <section class="banner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/image-4.jpg" alt="">
  </section>


  <hr>

  <!-- Width 80vw -->
  <div class="container mb-5">

    <span>Classe: .w-lg-80</span>
    <h2>Contenitore largo 80vw</h2>
    <p>Contenitore in display flex con colonne 30 / 30 / 40 con padding 15px</p>

  </div>

  <div class="w-lg-80">

  </div>


  <?php
endwhile;?>
  <!-- ./loop wordpress -->
</article>

<?php get_footer();?>