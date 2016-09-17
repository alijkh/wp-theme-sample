<?php get_header(); ?>
<div class="single">
<div id="content " class="row container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <article>
     <h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>
     <?php
     if (is_home())
     {


      if ( has_post_thumbnail() )
      {
        echo "<a href='".get_permalink()."'>";
        the_post_thumbnail( 'medium');
        echo "</a>";
      the_excerpt();
      }
      }
      else
      {
        the_content();
      }
    ?>
   </article>
   <?php endwhile; else: ?>
   <p><?php _e('متاسفانه صفحه مورد نظر شما یافت نشد.'); ?></p><?php endif; ?>
</div>
<?php get_footer(); ?>