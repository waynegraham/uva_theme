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

