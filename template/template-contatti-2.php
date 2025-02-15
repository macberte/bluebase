<?php
/*

Template Name: Contatti-2
Template Post Type: page

 */

get_header();

get_template_part('template-parts/content', 'cover-page');?>




<!-- ENTRY-CONTENT -->
<article id="post-<?php the_ID();?>" <?php post_class(
    'entry-content-page contact-2'
);?>>

  <div class="container w-1200">

    <div class="row justify-content-center">
      <div class="col-md-9 contact way-animate fadeUp">

        <p class="overline-center">Per qualsiasi informazione o chiarimento, il nostro staff è a tua disposizione. Non
          esitare a contattarci,
          siamo qui per rispondere alle tue domande e fornirti tutte le informazioni di cui hai bisogno.</p>
        <p class="text-center">Visita la nostra <a href="<?php echo home_url('/documenti'); ?>"
            title="Documenti">sezione documenti</a>
          per
          visionare la nostra carta dei servizi e altre
          informazioni utili.</p>

        <hr>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 way-animate fadeUp delay">

        <a href="https://maps.app.goo.gl/u5eG97T1sNrAB5VU7" target="_blank" class="contact-pills">
          <div class="contact-icon"><i class="icon-paper-plane"></i></div>
          <div class="contact-pills_content">
            <h3>Raggiungici</h3>
            <p><strong>Naviga con Google Maps</strong><br><span>Località Stefano, 1
                27040 Cigognola (PV)</span></p>

          </div>
        </a>
        <a href="tel:0385257511" class="contact-pills">
          <div class="contact-icon"><i class="icon-phone"></i></div>
          <div class="contact-pills_content">
            <h3>Chiamaci</h3>
            <p>0385 25 75 11</p>
          </div>
        </a>
        <a href="mailto:info@rsalatuacasa.it" class="contact-pills">
          <div class="contact-icon"><i class="icon-mail"></i></div>
          <div class="contact-pills_content">
            <h3>Scrivici</h3>
            <p>info@rsalatuacasa.it</p>
          </div>
        </a>
        <div class="contact-pills">
          <div class="contact-icon"><i class="icon-clock"></i></div>
          <div class="contact-pills_content">
            <h3>Orari</h3>
            <p><strong>Lunedì - Venerdì</strong> <br>
              8.30 - 13.00 | 15.00 - 19.00 <br>
              <strong>Sabato - Domenica</strong> <br>
              9.00 - 13.00 | 15.00 - 19.00
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-9 pl-auto pl-lg-5 contact-form-wrap way-animate fadeUp delay-2">
        <h2>Compila il form</h2>
        <p class="text-form">Risponderemo il prima possibile</p>
        <?php echo do_shortcode(
    '[contact-form-7 id="4717fc8" title="Generico type-icon simple"]'
); ?>
      </div>
    </div>
  </div>



  <div class="maps">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11826.508231432797!2d9.236761085171203!3d45.05196395574897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4787318629c9337d%3A0x2d983cb4d6bcaf07!2sResidenza%20La%20Tua%20Casa!5e0!3m2!1sit!2sit!4v1731320293054!5m2!1sit!2sit"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>


</article>




<?php get_footer();?>