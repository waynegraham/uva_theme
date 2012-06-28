<?php
$title = item('Dublin Core', 'Title');

head(
  array(
    'title' => $title,
    'bodyid'=>'items',
    'bodyclass' => 'show'
  )
);

$i = get_current_item();
$contributor = contribution_get_item_contributor($i); 

?>

<div id="primary">
    <p class="kicker"><?php echo item('Item Type Name'); ?></p>
    <h1><?php echo item('Dublin Core', 'Title'); ?></h1>
    <div  class="row clearfix">
           <div id="itemfiles">
        <?php if (item_has_type('Moving Image')): ?>
        <?php $files = $i->getFiles();?>
        <?php set_current_file($files[0]); ?>
           <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
            <script src="http://vjs.zencdn.net/c/video.js"></script>
            <video id="video" class="video-js vjs-default-skin" controls preload="auto" width="640" height="530" data-setup="{}">

<source src="<?php echo uri('archive/files/' . item_file('archive filename')); ?>" type="<?php echo item_file('MIME Type'); ?>" />
            </video>
        <?php else: ?>
           <!-- The following returns all of the files associated with an item. -->
          <?php echo display_files_for_item(array('imageSize' => 'fullsize')); ?>
        <?php endif; ?>
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

      <?php if (!is_null($contributor)): ?>
      <div class="contributor">
        <h2>Contributed by</h2>
        <?php echo $contributor->name; ?>
      </div>
      <?php endif; ?>

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
