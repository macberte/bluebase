<?php
/*

Template Name: Utility
Template Post Type: page

 */
get_header();

get_template_part('template-parts/content', 'cover-page');?>



<!-- ENTRY-CONTENT -->
<article id="post-<?php the_ID();?>" <?php post_class('entry-content-page delay way-animate fadeUp');?>>
  <!-- loop wordpress -->
  <?php while (have_posts()): the_post();?>

	  <div class="container w-950">
	    <div class="row">
	      <!-- TITLE LINE -->
	      <div class="col-12 text-center">
	        <h1>TITLE CLASS</h1>
	      </div>
	      <div class="col-12 mb-5">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> underline</h4>
	        <h2 class="underline">Lorem ipsum dolor sit amet</h2>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nihil debitis dolorum quia eaque provident
	          facere corporis commodi dignissimos! Maxime quae ea quaerat nam quam quod consectetur, quo harum debitis.</p>
	      </div>
	      <hr>
	      <div class="col-12">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> underline-center</h4>
	        <h2 class="underline-center">Lorem ipsum dolor sit amet</h2>
	        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nihil debitis dolorum quia
	          eaque provident
	          facere corporis commodi dignissimos! Maxime quae ea quaerat nam quam quod consectetur, quo harum debitis.</p>
	      </div>

	      <hr>
	      <div class="col-12 mb-5">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> overline</h4>
	        <h2 class="overline">Lorem ipsum dolor sit amet</h2>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nihil debitis dolorum quia eaque provident
	          facere corporis commodi dignissimos! Maxime quae ea quaerat nam quam quod consectetur, quo harum debitis.</p>
	      </div>

	      <hr>
	      <div class="col-12 mb-5">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> overline-center</h4>
	        <h2 class="overline-center">Lorem ipsum dolor sit amet</h2>
	        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nihil debitis dolorum quia
	          eaque provident
	          facere corporis commodi dignissimos! Maxime quae ea quaerat nam quam quod consectetur, quo harum debitis.</p>
	      </div>

	      <hr>
	      <div class="col-12 mb-5 text-center">
	        <h4 class="mb-4 text-left" style="color: #FF5722;">-Class-> infraline</h4>
	        <h5 class="small-title infraline">Lorem ipsum</h5>
	        <h2 class="">Lorem ipsum dolor sit amet</h2>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nihil debitis dolorum quia
	          eaque provident
	          facere corporis commodi dignissimos! Maxime quae ea quaerat nam quam quod consectetur, quo harum debitis.</p>
	        <h2 class="infraline">Lorem ipsum dolor sit amet consectetur</h2>
	      </div>


	      <hr>
	      <div class="col-12 mb-5">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> leftline</h4>
	        <h2 class="leftline">Lorem ipsum dolor sit amet</h2>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nihil debitis dolorum quia
	          eaque provident
	          facere corporis commodi dignissimos! Maxime quae ea quaerat nam quam quod consectetur, quo harum debitis.</p>
	      </div>

	      <!-- SHADOW -->
	      <div class="col-12 text-center mb-5">
	        <h1>SHADOW</h1>
	      </div>

	      <!-- Shadow -->
	      <h4 class="mb-4" style="color: #FF5722;">-Class-> shadow</h4>

	      <div class="row my-5">
	        <div class="col-lg-6 mb-4">
	          <figure class="shadow"><img src="<?php echo get_template_directory_uri(); ?>/img/image-1.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-6 mb-4">
	          <figure class="shadow"><img src="<?php echo get_template_directory_uri(); ?>/img/image-2.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-6 mb-4">
	          <figure class="shadow"><img src="<?php echo get_template_directory_uri(); ?>/img/image-3.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-6 mb-4">
	          <figure class="shadow"><img src="<?php echo get_template_directory_uri(); ?>/img/image-4.jpg" alt="">
	          </figure>
	        </div>
	      </div>
	    </div>

	    <!-- ultra-Shadow -->
	    <h4 class="mb-4" style="color: #FF5722;">-Class-> ultra-shadow</h4>
	    <div class="row my-5">
	      <div class="col-lg-6 mb-4">
	        <figure class="ultra-shadow"><img src="<?php echo get_template_directory_uri(); ?>/img/image-1.jpg" alt="">
	        </figure>
	      </div>
	      <div class="col-lg-6 mb-4">
	        <figure class="ultra-shadow"><img src="<?php echo get_template_directory_uri(); ?>/img/image-2.jpg" alt="">
	        </figure>
	      </div>
	      <div class="col-lg-6 mb-4">
	        <figure class="ultra-shadow"><img src="<?php echo get_template_directory_uri(); ?>/img/image-3.jpg" alt="">
	        </figure>
	      </div>
	      <div class="col-lg-6 mb-4">
	        <figure class="ultra-shadow"><img src="<?php echo get_template_directory_uri(); ?>/img/image-4.jpg" alt="">
	        </figure>
	      </div>
	    </div>
	    <!-- ./row -->


	    <!-- HOVER EFFECT -->
	    <div class="row mb-5">
	      <div class="col-12 text-center mb-5">
	        <h1>HOVER BOX EFFECT</h1>
	      </div>

	      <!-- overlay-box -->
	      <h4 class="mb-4" style="color: #FF5722;">-Class-> overlay-box</h4>
	      <div class="row my-5">
	        <div class="col-lg-3 mb-4">
	          <figure class="overlay-box">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-1.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="overlay-box">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="overlay-box">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-3.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="overlay-box">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-4.jpg" alt="">
	          </figure>
	        </div>
	      </div>

	    </div>
	    <!-- ./row -->



	    <!-- overlay-zoom -->
	    <div class="row">

	      <h4 class="mb-4" style="color: #FF5722;">-Class-> overlay-zoom</h4>
	      <div class="row my-5">
	        <div class="col-lg-3 mb-4">
	          <figure class="overlay-zoom">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-1.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="overlay-zoom">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="overlay-zoom">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-3.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="overlay-zoom">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-4.jpg" alt="">
	          </figure>
	        </div>
	      </div>
	    </div>


	    <!-- overlay-shadow -->
	    <div class="row">

	      <h4 class="mb-4" style="color: #FF5722;">-Class-> overlay-shadow</h4>
	      <div class="row my-5">
	        <div class="col-lg-3 mb-4">
	          <figure class="ultra-shadow overlay-shadow">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-1.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="ultra-shadow overlay-shadow">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="ultra-shadow overlay-shadow">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-3.jpg" alt="">
	          </figure>
	        </div>
	        <div class="col-lg-3 mb-4">
	          <figure class="ultra-shadow overlay-shadow">
	            <img src="<?php echo get_template_directory_uri(); ?>/img/image-4.jpg" alt="">
	          </figure>
	        </div>
	      </div>
	    </div>



	    <!--ICON-->
	    <div class="row mb-5">
	      <div class="col-12 text-center mb-5">
	        <h1>ICON</h1>
	      </div>
	    </div>

	    <h4 class="mb-4" style="color: #FF5722;">-Class-> circle-icon</h4>
	    <div class="row mb-5">
	      <div class="col-lg-1">
	        <span class="circle-icon">
	          <i class="icon-desktop"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="circle-icon">
	          <i class="icon-paper-plane"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="circle-icon">
	          <i class="icon-phone"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="circle-icon">
	          <i class="icon-leaf"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="circle-icon">
	          <i class="icon-mail"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="circle-icon">
	          <i class="icon-share-1"></i>
	        </span>
	      </div>
	    </div>


	    <!-- CIRCLE-ICON-->
	    <h4 class="mb-4" style="color: #FF5722;">-Class-> square-icon</h4>
	    <div class="row mb-5">
	      <div class="col-lg-1">
	        <span class="square-icon">
	          <i class="icon-desktop"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="square-icon">
	          <i class="icon-paper-plane"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="square-icon">
	          <i class="icon-phone"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="square-icon">
	          <i class="icon-leaf"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="square-icon">
	          <i class="icon-mail"></i>
	        </span>
	      </div>
	      <div class="col-lg-1">
	        <span class="square-icon">
	          <i class="icon-share-1"></i>
	        </span>
	      </div>
	    </div>

	    <hr>


	    <div class="row">
	      <div class="col-lg-12 text-center">
	        <h2>BUTTON & LINK</h2>
	      </div>

	      <div class="col-lg-12 mb-5">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> btn-primary</h4>
	        <a href="#" class="btn-primary">Scopri di più</a> <a href="#" class="btn-primary">Leggi tutto</a>
	      </div>
	      <div class="col-lg-12 mb-5">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> btn-primary.empty</h4>
	        <a href="#" class="btn-primary empty">Scopri di più</a> <a href="#" class="btn-primary empty">Leggi tutto</a>
	      </div>
	      <div class="col-lg-12 mb-5">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> btn-primary.empty.white</h4>
	        <div class="p-5" style="background: #212121;">
	          <a href="#" class="btn-primary empty">Scopri di più</a> <a href="#" class="btn-primary empty">Leggi tutto</a>
	        </div>
	      </div>
	      <div class="col-lg-12 mb-5">
	        <h4 class="mb-4" style="color: #FF5722;">-Class-> arrow-link</h4>
	        <a href="#" class="arrow-link">Scopri di più <i class="icon-right-open-big"></i></a>
	      </div>
	    </div>





















	  </div>
	  <!-- ./container -->

	  <?php endwhile;?>
  <!-- ./loop wordpress -->
</article>

<?php get_footer();?>