</div>
</div><!-- /#main -->
<aside id="sidebar" class="threecol last" role="complementary">
  <div class="container">
    <div id="sidebar-area-top">
      <article id="search-2" class="widget-1 widget-first widget widget_search">
        <div class="widget-1 widget-first container">
          <?php echo simple_search(); ?>
           <!-- <form role="search" method="get" id="searchform" action="http://localhost:8888/wordpress/">
              <label class="visuallyhidden" for="s">Search for:</label>
              <input type="text" value="" name="s" id="s" placeholder="Search">
              <input type="submit" id="searchsubmit" value="Search" class="button">
            </form> -->
        </div>
      </article>

      <article id="recent-posts-2" class="widget-2 widget widget_recent_entries">
      <div class="widget-2 container">
      <h3><?php echo __('Recently Contributed'); ?></h3>
        <?php
          $homepageRecentItems = (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : 5;
          set_items_for_loop(recent_items($homepageRecentItems));
         ?>
        <?php if (has_items_for_loop()): ?>
        <ul>
        <?php while(loop_items()): ?>
          <li class="item">
            <h4><?php echo $item('title'); ?></h4>
            <?php if (item_has_thumbnail()): ?>
              <div class="item-img">
                <?php echo link_to_item(item_square_thumbnail()); ?>
              </div>
            <?php endif; ?>
          </li>
        <?php endwhile; ?>
        </ul>
        <?php else: ?>
          <h4>There are no items</h4>
        <?php endif; ?>
        <p class="view-items-link"><?php echo link_to_browse_items(__('View All Items')); ?></p>
        </div>
    </article>
        </div>
            </aside><!-- /#sidebar -->
        </div><!-- /#content -->
    </div>
</div><!-- /.row /.container -->
<div class="container footer-container"><div class="row row-container clearfix">
    <footer id="content-info" class="row" role="contentinfo">
            <div class="container">
            <p id="copyright">&copy; <?php echo date("Y");?> by the Rector and Visitors of the <a href="http://www.virginia.edu">University of Virginia</a></p>
      </div>
    </footer>
    </div></div><!-- /.row /.container -->
  </div><!-- /#wrap -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<?php
    queue_js('uva-theme-1.0-min', 'javascripts');
    echo display_js(false);
?>
<script>
var _paq=_paq||[];(function(){var a="https:"==document.location.protocol?"https://analytics.lib.virginia.edu/":"http://analytics.lib.virginia.edu/";_paq.push(["setSiteId","10"]);_paq.push(["setTrackerUrl",a+"piwik.php"]);_paq.push(["trackPageView"]);_paq.push(["enableLinkTracking"]);var b=document,c=b.createElement("script"),d=b.getElementsByTagName("script")[0];c.type="text/javascript";c.defer=true;c.async=true;c.src=a+"piwik.js";d.parentNode.insertBefore(c,d)})()
</script>

<script type="text/javascript" src="http://use.typekit.com/txp7zqw.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 7 ]>
  <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
</body>
</html>
