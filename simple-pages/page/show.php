
<?php 
$title = html_escape(simple_page('title'));

head(array('title' => $title)); ?>

<div id="primary">

  <h1><?php echo $title; ?></h1>

  <?php echo simple_page('text'); ?>

</div>

<?php echo foot(); ?>
