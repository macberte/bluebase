<?php
/*

Template Name: Contatti-3
Template Post Type: page

 */

get_header();

get_template_part('template-parts/content', 'cover-page');?>


<!-- ENTRY-CONTENT -->
<article id="post-<?php the_ID();?>" <?php post_class(
    'entry-content-page contact-3'
);?>>


  <div class="container w-1200 ct-contact">
    <div class="row position-relative justify-content-center">

      <div class="col-lg-5 col-md-7">
        <div class="ct-sede_inner">
          <div class="ct-title mb-3">
            <span class="overtitle">LA CANTINA</span>
            <h2 class="ct-name">Torrevilla s.c.a.</h2>
            <p>Contatta gli uffici</p>
          </div>

          <div class="contact-border-wrap">
            <div class="contact-border">
              <span class="icon-contact"><i class="icon-location absolute-xy"></i></span>
              <p>Via Emilia 4 <br>
                27050 Torrazza Coste (PV) Italy
                <br>
                P. IVA 00187020185
              </p>
            </div>
            <div class="contact-border">
              <span class="icon-contact"><i class="icon-clock absolute-xy"></i></span>
              <p><strong>Lunedì - giovedì</strong><br>8.30 - 12.30 <br> 14.30 - 18.30<br><strong>Venerdì</strong> <br>
                8.00 - 12.00</p>
            </div>
            <div class="contact-border">
              <span class="icon-contact"><i class="icon-phone absolute-xy"></i></span>
              <p><a href="tel:+39038377003" data-type="tel" data-id="tel:+39038377003">Tel. 0383 77003</a><br>Fax 0383
                77592
              </p>
            </div>
            <div class="contact-border">
              <span class="icon-contact"><i class="icon-mail absolute-xy"></i></span>
              <p><a href="mailto:info@torrevilla.it">info@torrevilla.it</a></p>
            </div>
          </div>
        </div>

        <!-- Wine Shop -->
        <div class="ct-wineshop_inner text-white">
          <div class="ct-title mb-3">
            <span class="overtitle">PUNTO VENDITA</span>
            <h2 class="ct-name">Wine Shop</h2>
            <p>Contatta il punto vendita</p>
          </div>
          <div class="contact-border-wrap">
            <div class="contact-border">
              <span class="icon-contact"><i class="icon-location absolute-xy"></i></span>
              <p>Via Emilia 4 <br>
                27050 Torrazza Coste (PV) Italy
              </p>
            </div>
            <div class="contact-border">
              <span class="icon-contact"><i class="icon-clock absolute-xy"></i></span>
              <p><strong>Lunedì - Domenica</strong><br>8.30 - 13.00<br>14.30 - 19.00</p>
            </div>
            <div class="contact-border">
              <span class="icon-contact"><i class="icon-phone absolute-xy"></i></span>
              <p><a href="tel:+39038377520" data-type="tel" data-id="tel:+39038377520">Tel. 0383 77520</a>
              </p>
            </div>
            <div class="contact-border">
              <span class="icon-contact"><i class="icon-mail absolute-xy"></i></span>
              <p><a href="mailto:bottega@torrevilla.it">bottega@torrevilla.it</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-9 offset-lg-1 form-contact-wrap position-relative">
        <div class="form-contact_inner">
          <span><i>Bisogno di informazioni?</i></span>
          <h2>Compila il form</h2>
          <div class="form-contact">
            <?php echo do_shortcode('[contact-form-7 id="4717fc8" title="Generico type-icon simple"]'); ?>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="ct-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d45158.81257067006!2d9.0651055!3d44.9756609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478739aa4cb5ee9d%3A0x2101ff8c844dd6df!2sTorrevilla%20-%20Produzione%20e%20Vendita%20Vini%20e%20Spumanti%20Oltrep%C3%B2%20Pavese!5e0!3m2!1sit!2sit!4v1727712696712!5m2!1sit!2sit"
      width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>



</article>




<?php get_footer();?>