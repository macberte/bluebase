<?php
/*

Template Name: Contatti-1
Template Post Type: page

 */

get_header();

get_template_part('template-parts/content', 'cover-page');?>




<!-- ENTRY-CONTENT -->
<article id="post-<?php the_ID();?>" <?php post_class(
    'entry-content-page contact-1'
);?>>

  <div class="container w-1200">

    <div class="row">
      <div class="col-md-6 contact delay way-animate fadeUp">
        <span class="contact-overtitle fw-bold secondary-font">Sviluppo web</span>
        <h2 class="primary-color mb-0">SALTONELWEB</h2>
        <p>La Natura non accetta compromessi i nostri prodotti nemmeno.</p>
        <p><strong>Via Lomellina 46 <br>
            27058 Voghera (PV)</strong></p>
        <hr>

        <p class="underline mb-5">Se hai bisogno di informazioni compila il form o contattaci direttamente.</p>

        <a href="https://goo.gl/maps/JNKebym4UA3cbadPA" target="_blank" class="contact-pills">
          <div class="circle-icon"><i class="icon-paper-plane"></i></div>
          <p>Raggiungici</p>
          <span>Naviga Con Google Maps</span>
        </a>
        <a href="tel:+393891126372" class="contact-pills">
          <div class="circle-icon"><i class="icon-phone"></i></div>
          <p>Chiamaci</p>
          <span>389 11 26 372</span>
        </a>
        <a href="mailto:info@saltonelweb.it" class="contact-pills">
          <div class="circle-icon"><i class="icon-mail"></i></div>
          <p>Scrivici</p>
          <span>info@saltonelweb.it</span>
        </a>
        <a href="https://wa.me/39389112637" target="_blank" class="contact-pills">
          <div class="circle-icon"><i class="icon-whatsapp"></i></div>
          <p>Messaggia</p>
          <span>Contattaci con WhatsApp</span>
        </a>

      </div>

      <div class="contact-form col-md-6 mt-4 pl-lg-5 way-animate fadeUp">
        <span class="overtitle-form">Qualche domanda?</span>
        <h2 class="form-title">Compila il form</h2>
        <?php echo do_shortcode(
    '[contact-form-7 id="4717fc8" title="Generico type-icon simple"]'
); ?>
      </div>
    </div>


    <!-- loop wordpress -->
    <?php while (have_posts()):
    the_post();?>


	    <?php the_content();?>



	    <?php
endwhile;?>
    <!-- ./loop wordpress -->


  </div>


  <div class="mappa-wrap">
    <div class="maps">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112762.09938233891!2d9.040216404207746!3d44.94528427096062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47874a007b46efd3%3A0x489e0ed68326c1e9!2sAzienda%20Agricola%20Impoggio!5e0!3m2!1sit!2sit!4v1608290844281!5m2!1sit!2sit"
        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </div>
  </div>


</article>




<?php get_footer();?>