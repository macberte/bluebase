<?php

if ( post_password_required() )
   return;
?>

   <?php if ( have_comments() ) : ?>

              <h3 class="title-comments-num"><?php comments_number( esc_html__('Nessun commento', 'snw'), esc_html__('1 Commento', 'snw'), esc_html__('% Commenti', 'snw') ); ?></h3>

               <ol class="comment-list">
                   <?php
                       wp_list_comments( array(
                           'style'       => 'ol',
                           'short_ping'  => true,
                           'avatar_size' => 60,
                       ) );
                   ?>
               </ol><!-- .comment-list -->

       <?php
           if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
       ?>

   <nav class="comment-navigation">
       <h3 style="border-bottom:none; margin-bottom:10px; padding-bottom:0;"><?php esc_html_e( 'Comment navigation', 'snw' ); ?></h3>
           <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Prev', 'snw' ) ); ?></div>
           <div class="nav-next"><?php next_comments_link( esc_html__( 'Next', 'snw' ) ); ?></div>
       </nav>

       <?php endif; ?>

       <?php if ( ! comments_open() && get_comments_number() ) : ?>
       <p><?php esc_html_e( 'Comments are closed.' , 'snw' ); ?></p>
       <?php endif; ?>

   <?php endif; ?>




         <?php comment_form(); ?>
