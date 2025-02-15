<?php
/*

Template Name: Sidebare-one
Template Post Type: page

 */

get_header();

get_template_part('template-parts/content', 'cover-page');?>

<article id="post-<?php the_ID();?>" <?php post_class('entry-content-page delay way-animate fx-fadeUp');?>>
  <div class="container">
    <div class="row">


      <div class="col-lg-8">

        <!-- ENTRY-CONTENT -->

        <!-- loop wordpress -->
        <?php while (have_posts()): the_post();?>


	        <?php the_content();?>


	        <?php endwhile;?>
        <!-- ./loop wordpress -->


      </div>
      <!-- col-lg-8 -->

      <?php get_sidebar('sidebar-one');?>

    </div>
    <!-- ./row -->

  </div>
  <!-- ./container -->

</article>

<?php get_footer();?>