<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">

    <!-- fonts for: headers, copy, code -->
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Anonymous+Pro:400,400italic,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
    <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 400px)">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>var base = '<?php echo theme_url(); ?>';</script>
    <!-- <script src="<?php echo asset('anchor/views/assets/js/zepto.js'); ?>"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="<?php echo theme_url('/js/main.js'); ?>"></script>

      <meta name="viewport" content="width=device-width">
      <meta name="generator" content="Anchor CMS">

      <meta property="og:title" content="<?php echo site_name(); ?>">
      <meta property="og:type" content="website">
      <meta property="og:url" content="<?php echo e(current_url()); ?>">
      <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
      <meta property="og:site_name" content="<?php echo site_name(); ?>">
      <meta property="og:description" content="<?php echo site_description(); ?>">

    <?php if(customised()): ?>
        <!-- Custom CSS -->
        <style><?php echo article_css(); ?></style>

        <!--  Custom Javascript -->
        <script><?php echo article_js(); ?></script>
    <?php endif; ?>
  </head>
  <body class="<?php echo body_class(); ?>">
    <div class="main-wrap">
      <div class="slidey" id="tray">
        <div class="wrap">
          <form id="search" action="<?php echo search_url(); ?>" method="post">
            <label for="term">Search my blog:</label>
            <input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
          </form>

          <aside>
            <b>Categories</b>
            <ul>
            <?php while(categories()): ?>
              <li>
                <a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
                  <?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
            </ul>
          </aside>
        </div>
      </div>



<style>
  #top #logo { float:left; margin-right:30px; margin-bottom:26px; }
  #top #main { float:right; margin-left:20px; }
  #top #postTitle { display:inline; }
  #top #tocContainer { clear:both; max-width:700px; margin:auto; }
  #top #tocContainer a { display:block; }
  #top a { float:none; }
</style>

      <header id="top">
        <a id="logo" href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url() . "themes/jl/img/tecnosol.png"; ?>" alt="<?php echo site_name(); ?>">
        </a>

        <?php if(has_menu_items()): ?>
        <nav id="main" role="navigation">
          <ul>
            <?php while(menu_items()): ?>
            <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
              <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
                <?php echo menu_name(); ?>
              </a>
            </li>
            <?php endwhile; ?>

            <li class="tray">
              <a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
            </li>
          </ul>
        </nav>
        <?php endif; ?>

        <h1 id="postTitle"><?php echo page_title('Page can’t be found'); ?></h1>

        <div id="tocContainer" class="tocContainer">
          <div class="toc"></div>
        </div>

      </header>


