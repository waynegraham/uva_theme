<?php
$pageTitle = __('Browse Items');

head(
  array(
    'title' => $pageTitle,
    'bodyid' => 'items',
    'bodyclas' => 'browse'
  )
);
?>
<div id="primary">

<h1><?php echo $pageTitle;?> <?php echo __('(%s total)', total_results()); ?></h1>

<div id="pagination-top" class="pagination">
  <?php echo pagination_links(); ?>
</div>

<?php while (loop_items()): ?>
    <div class="item hentry clearfix">
        <div class="item-meta">

        <h2><?php echo link_to_item(item('Dublin Core', 'Title'), array('class'=>'permalink')); ?></h2>

        <?php if (item_has_thumbnail()): ?>
        <div class="item-img">
            <?php echo link_to_item(item_square_thumbnail()); ?>
        </div>
        <?php endif; ?>

        <?php if ($text = item('Item Type Metadata', 'Text')): ?>
        <div class="item-description">
            <p><?php echo $text; ?></p>
        </div>
        <?php elseif ($description = item('Dublin Core', 'Description')): ?>
        <div class="item-description">
            <?php echo $description; ?>
        </div>
        <?php endif; ?>

        <?php echo plugin_append_to_items_browse_each(); ?>

        </div><!-- end class="item-meta" -->
    </div><!-- end class="item hentry" -->
    <?php endwhile; ?>

    <div id="pagination-bottom" class="pagination"><?php echo pagination_links(); ?></div>

    <?php echo plugin_append_to_items_browse(); ?>

</div>

<?php foot();
