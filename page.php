<?php get_header();

get_template_part('template-parts/content', 'cover-page');?>

<!-- ENTRY-CONTENT -->
<article id="post-<?php the_ID();?>" <?php post_class('entry-content-page delay-2 way-animate fadeUp'
);?>>

  <div class="container">

    <!-- loop wordpress -->
    <?php while (have_posts()): the_post();?>


    <?php the_content();?>


    <?php
endwhile;?>
    <!-- ./loop wordpress -->


  </div>

</article>


<?php get_footer();?>