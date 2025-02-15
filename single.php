<?php get_header();

get_template_part('template-parts/content', 'cover-single');?>




<!-- ENTRY-CONTENT -->
<article id="post-<?php the_ID();?>" <?php post_class(
    'entry-content-post way-animate delay-3 fadeUp'
);?>>


  <div class="container w-950">


    <h1 class="title-blog"><?php the_title();?></h1>

    <!-- loop wordpress -->
    <?php while (have_posts()):
    the_post();?>


	    <?php the_content();?>


	    <!-- Post comments -->
	    <div class="blog-post-comments">

	      <?php comments_template();?>

	    </div><!-- blog post comment -->
	    <?php
endwhile;?>
    <!-- ./loop wordpress -->



    <div class="social-share-end">
      <span class="">Condividi <i class="icon-share"></i></span>
      <?php custom_social_share();?>
    </div>


    <div style="margin-bottom: 100px;"></div>

  </div>
</article>





<?php get_footer();?>