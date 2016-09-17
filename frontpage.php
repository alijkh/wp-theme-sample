
<?php get_header(); ?>

<div class="row">
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
    <li><img src="data1/images/1542126_443.jpg" alt="1542126_443" title="1542126_443" id="wows1_0"/></li>
    <li><img src="data1/images/1542129_142.jpg" alt="1542129_142" title="1542129_142" id="wows1_1"/></li>
    <li><a href="http://wowslider.com"><img src="data1/images/zf8sdvkmppfflswcxlnv.jpg" alt="wowslider.com" title="zf8sdvkmppfflswcxlnv" id="wows1_2"/></a></li>
    <li><img src="data1/images/1.jpg" alt="کتابخانه-1" title="کتابخانه-1" id="wows1_3"/></li>
  </ul></div>
  <div class="ws_bullets"><div>
    <a href="#" title="1542126_443"><span><img src="data1/tooltips/1542126_443.jpg" alt="1542126_443"/>1</span></a>
    <a href="#" title="1542129_142"><span><img src="data1/tooltips/1542129_142.jpg" alt="1542129_142"/>2</span></a>
    <a href="#" title="zf8sdvkmppfflswcxlnv"><span><img src="data1/tooltips/zf8sdvkmppfflswcxlnv.jpg" alt="zf8sdvkmppfflswcxlnv"/>3</span></a>
    <a href="#" title="کتابخانه-1"><span><img src="data1/tooltips/1.jpg" alt="کتابخانه-1"/>4</span></a>
  </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap carousel</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
</div>

<!----------------------------------------------------------------------------- end slider -->
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
    if(is_home())
    {
    if(has_post_thumbnail())
    {
    echo "<a href='".get_permalink()."'>";
    the_post_thumbnail( 'thumbnail');
    echo "</a>";
    }
    // the_excerpt();
    }
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