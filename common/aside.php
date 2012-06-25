<aside id="sidebar" class="threecol last" role="complementary">
  <div class="container">
    <div id="sidebar-area-top">
      <article id="search-2" class="widget-1 widget-first widget widget_search">
        <div class="widget-1 widget-first container">
          <?php echo simple_search(); ?>
        </div>
      </article>
      <article id="recent-posts-2" class="widget-2 widget widget_recent_entries">
        <div class="widget-2 container">
          <h3><?php echo __('Recently Contributed'); ?></h3>
        <?php
          $homepageRecentItems = (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : 5;
          set_items_for_loop(recent_items($homepageRecentItems));
         ?>
               <p class="view-items-link"><?php echo link_to_browse_items(__('View All Items')); ?></p>
        </div>
    </article>
  </div>
</aside><!-- /#sidebar -->

