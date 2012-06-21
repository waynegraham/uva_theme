<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo get_html_lang(); ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo get_html_lang(); ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo get_html_lang(); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo get_html_lang(); ?>"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>
   <?php echo settings('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?>
  </title>
  <meta name="viewport" content="width=device-width">
  <?php if ($description = settings('description')): ?>
  <meta name="description" content="<?php echo $description; ?>">
  <?php endif; ?>
  <meta name="author" content="<?php echo settings('author'); ?>">
  <link rel="shortcut icon" href="<?php echo src('favicon.png', 'images'); ?>">
  <link rel="apple-touch-icon" href="<?php echo src('apple-touch-icon.png', 'images'); ?>">

  <?php echo js('libs/modernizr-2.5.3.min', 'javascripts/'); ?>

  <?php echo auto_discovery_link_tags(); ?>
  <?php echo plugin_header(); ?>
  <?php
    queue_css('style');
    display_css();
  ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<?php plugin_body(); ?>

<div id="container">




