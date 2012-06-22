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
  <?php echo js('libs/modernizr-2.5.3.min', 'javascripts'); ?>

  <?php echo auto_discovery_link_tags(); ?>
  <?php echo plugin_header(); ?>
  <?php
    queue_css('style');
    display_css();
?>

  <!--[if lt IE 8]><?php echo css('ie'); ?><![endif]-->

</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => 'home blog logged-in admin-bar  no-bg ' . @$bodyclass)); ?>

<div id="wrap" role="document">
    <div id="jump-menu" class="visuallyhidden">
      Jump to: 
      <ul>
        <li><a href="#content">Main content</a></li>
        <li><a href="#main-nav">Main navigation</a></li>
        <li><a href="#search">Search</a></li>
        <li><a href="http://lib.virginia.edu/services/accessibility/">Accessibility Services</a></li>
      </ul>
    </div>

     <div class="container top-container">
      <div class="row top-row">
        <nav class="sixcol" id="top-nav">
          <h3 class="visuallyhidden">U.Va. Links</h3>
          <ul>
            <li><a class="return-home" href="http://localhost:8888/wordpress/">Test Home</a></li>
            <li><a href="http://www.virginia.edu">U.Va. Home</a></li>
            <li><a href="http://lib.virginia.edu">U.Va. Library</a></li>
          </ul>
        </nav>
        <div class="sixcol last">
                  </div>
      </div>
    </div>
<div class="container header-container"><div class="row header-row clearfix">
    <header id="top-banner" class="twelvecol" role="banner">
            <div class="container">
        <h1 class="ninecol" id="main-title">
          <a href="http://localhost:8888/wordpress/">
            <span class="donor-title">Just another WordPress site</span>
            <span class="library-title">Test</span>        
        </a></h1>
        <a class="threecol last" id="logo" href="http://lib.virginia.edu">
          <?php echo img('liblogo.pn'); ?>
          <img src="/wordpress/wp-content/themes/libweb-base/img/liblogo.png" width="198" height="90" alt="Test">
        </a>
      </div>
    </header>
  </div></div><!-- /.row /.container -->

<div id="content">
  <div class="docWrap">
    <div id="mainContent">

    <div class="hd"><h1><?php echo settings('site_title'); ?></h1></div>
      <div class="bd">

