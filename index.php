<?php get_header(); ?>

<div class="row">

 <!-- <div class="row"> --><!-- start main box  -->
<div id="news">
  <div class="container">
    <?php
  $count=0;
    $the_query = new WP_Query( 'posts_per_page=10' );?>
     <?php if (have_posts()) : while ( have_posts()) : the_post();?>
     <?php if (($count%3) == 0)
     {
       echo "</div> <div class='row news'>";
     } ?>
     <div class="span4">
       <h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>
       <?php

    if(has_post_thumbnail())
    {
    echo "<a href='".get_permalink()."'>";
    the_post_thumbnail( 'thumbnail');
    echo "</a>";
    }
    the_excerpt();

    // else
    // {
    // the_content();
    // }
    $count = $count+1;
    ?>
     </div>
     <?php endwhile; else: ?>
     <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
  </div>
</div>
<div id="delimiter"></div>

<?php get_footer(); ?>
