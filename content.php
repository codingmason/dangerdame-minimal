<div class="blog-post">
  <a href="<?php the_permalink(); ?>"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
  <p class="blog-post-meta"><?php the_date('M j'); ?><span>  |  </span> 
  <a href="<?php comments_link(); ?>">
    <?php
    printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
  </a></p>
  <?php the_content(); ?>
</div><!-- /.blog-post -->