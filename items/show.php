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
    <p class="kicker"><?php echo item('Item Type Name'); ?></p>
    <h1><?php echo item('Dublin Core', 'Title'); ?></h1>
    <div  class="row clearfix">
      <!-- The following returns all of the files associated with an item. -->
      <div id="itemfiles">
        <?php echo display_files_for_item(array('imageSize' => 'fullsize')); ?>
      </div>

      <div class="element-set">
        <?php if ($url = item('Item Type Metadata', 'Local URL')): ?>
          <p class="item-type-website"><strong>URL</strong>: <?php echo $url; ?></p>
        <?php endif; ?>

        <?php if ($description = item('Dublin Core', 'Description')): ?>
        <?php echo nls2p($description); ?>
        <?php endif; ?>
        
        <?php if (item_has_type('Email')): ?>
        <div class="item-type-email">

          <?php
          $itemTypeFields = array('Text', 'From', 'To', 'CC', 'BCC', 'Subject Line', 'Email Body');
          foreach ($itemTypeFields as $field):
          ?>

          <?php if ($value = item('Item Type Metadata', $field)): ?>

          <h2><?php echo $field; ?></h2>
          <?php echo nls2p($value); ?>

          <?php endif; endforeach; ?>
        </div>
        <?php endif; ?>
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
