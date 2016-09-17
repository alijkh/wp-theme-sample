   <footer>
   <div class="row">
    <div class="span4"><?php dynamic_sidebar( 'widget-footer-right' ); ?></div>
    <div class="span4"><?php dynamic_sidebar( 'widget-footer-center' ); ?></div>
    <div class="span4"><?php dynamic_sidebar( 'widget-footer-left' ); ?></div>
   </div>
   <hr />
   	<div class="copyright"><h6>طراحی شده توسط <a href="https://github.com/ali.kharidar">علیرضا خریدار</a> در <a href="http://ermile.com/fa">ارمایل</a> &copy; 2016 </h6><?php
    $currentYear = date('Y');
    if (2016 < $currentYear)
    {
      echo '-' . $currentYear;
    }
    ?>
   </div>

  </footer>
 </div>
</body>
</html>