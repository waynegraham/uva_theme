<?php

head(
  array(
    'title' => item(
      'Dublin Core',
      'Title'
    ),
    'bodyid'=>'items',
    'bodyclass' => 'show'
  )
);
?>

<div id="primary">

    <h1><?php echo item('Dublin Core', 'Title'); ?></h1>
    <div  class="row clearfix">
      <!-- The following returns all of the files associated with an item. -->
      <div id="itemfiles" class="sixcol">
        <?php echo display_files_for_item(); ?>
      </div>

      <div class="element-set threecol">
        <?php echo custom_show_item_metadata(); ?>
      </div>
    </div>

    <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h2><?php echo __('Citation'); ?></h2>
        <div class="element-text"><?php echo item_citation(); ?></div>
    </div>

    <?php echo plugin_append_to_items_show(); ?>

    <ul class="pager item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item(); ?></li>
    </ul>

</div><!-- end primary -->

<?php foot(); ?>
