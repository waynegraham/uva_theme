<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo get_html_lang(); ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo get_html_lang(); ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo get_html_lang(); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo get_html_lang(); ?>"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php echo settings('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?>
  </title>
  <meta name="viewport" content="width=device-width">
  <?php if ($description = settings('description')): ?>
  <meta name="description" content="<?php echo $description; ?>">
  <?php endif; ?>
  <meta name="author" content="<?php echo settings('author'); ?>">
  <link rel="shortcut icon" href="<?php echo src('favicon.ico', 'images'); ?>">
  <link rel="apple-touch-icon" href="<?php echo src('apple-touch-icon.png', 'images'); ?>">
  <link type="text/css" rel="stylesheet" href="http://yui.yahooapis.com/2.5.1/build/datatable/assets/skins/sam/datatable.css">
  <?php echo js('libs/modernizr-2.5.3.min', 'javascripts'); ?>

  <?php echo auto_discovery_link_tags(); ?>
  <?php echo plugin_header(); ?>
  <?php
    queue_css('style');
    display_css();
?>

</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => 'uvalib-t1 uvalib-hd1 yui-skin-sam ' . @$bodyclass)); ?>

<div id="globalHd">
  <div class="docWrap">
    <div id="skipToNav" class="imgReplace"><strong>Skip directly to:</strong> <a href="#content">Main content</a> &nbsp;|&nbsp; <a href="#globalNav">Main navigation</a> &nbsp;|&nbsp; <a href="#sectNav">Navigation for this section of the website</a></div>

    <hr />
    <div id="bookmarkMotif"> </div>
    <div id="branding">
      <span class="displayForNoCSS">Go to</span> <a id="logo" class="imgReplace" href="http://lib.virginia.edu" title="Go to U.Va. Library Home">University of Virginia Library</a> <span class="displayForNoCSS">home</span>    </div>
    <hr />
    <hr />
  </div>
  <!-- End .docWrap -->
</div>

<hr />

<div id="content">
  <div class="docWrap">
    <div id="mainContent">

    <div class="hd"><h1><?php echo settings('site_title'); ?></h1></div>
      <div class="bd">

