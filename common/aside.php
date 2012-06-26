<aside id="sidebar" class="threecol last" role="complementary">
  <div class="container">
    <div id="sidebar-area-top">
      <article id="search-2" class="widget-1 widget-first widget widget_search">
        <div class="widget-1 widget-first container">
          <?php echo Uva_Simple_Search(); ?>
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
        <ul class="recent-items">
        <?php while(loop_items()): ?>
          <li class="item">
            <?php if (item_has_thumbnail()): ?>
              <div class="item-img">
                <?php echo link_to_item(item_square_thumbnail()); ?>
              </div>
            <?php else: ?>
              <p class="recent-item-list"><?php echo link_to_item(item('Dublin Core', 'Title')); ?></p>
            <?php endif; ?>
          </li>
        <?php endwhile; ?>
        </ul>
        <?php else: ?>
          <h4>There are no public items</h4>
        <?php endif; ?>
        <p class="view-items-link"><?php echo link_to_browse_items(__('View All Contributions')); ?></p>
        </div>
    </article>
  </div>
  </div>
</aside><!-- /#sidebar -->
