<?php get_header();

//$cover_404 = get_field('cover_404', 'option');
?>

<div class="cover-blog">

  <div class="container">
    <div class="row">
      <div class="col-12">
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


<!-- ENTRY-CONTENT -->
<article <?php post_class('container delay way-animate fadeUp delay-1 page-404');?>>

  <div class="row justify-content-center">
    <!-- Content-page -->
    <div class="col-lg-9">
      <h1 class="page-title text-center error-title">Pagina non trovata...</h1>
      <div class="error-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/404-image.svg" alt="Errore 404">
      </div>
    </div>
    <div class="col-lg-6 message-404 text-center mb-5">
      <h3 class="">Abbiamo aggiornato il sito</h3>
      <p class="text-center">Probabilmente la pagina che stai cercando non esiste, oppure è stata spostata.<br>
        Puoi contattarci per seganlarci il problema.</p>
      <a href="<?php echo home_url('/contatti'); ?>" title="Contattaci" class="btn-primary">Contattaci</a>
    </div>
  </div>

</article>
<!-- ./container -->

<?php get_footer();?>