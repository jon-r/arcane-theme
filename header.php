<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
  <meta charset="utf-8">

  <?php // force Internet Explorer to use the latest rendering engine available ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title(''); ?></title>

  <?php // mobile meta (hooray!) ?>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <![endif]-->
  <?php // or, set /favicon.ico for IE10 win ?>
  <meta name="msapplication-TileColor" content="#4c0f11">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
  <meta name="theme-color" content="#4c0f11">

  <meta name="description" content="Independant cocktail bar & drinking den. Madness & filigree. South King St, Manchester" >
  <meta name="author" content="Jon Richards" >

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php // wordpress head functions ?>
  <?php wp_head(); ?>
  <?php // end of wordpress head ?>

  <?php // drop Google Analytics Here ?>
  <?php // end analytics ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<?php if (is_front_page()) : ?>
<header class="hero header-splash is-fullheight">
  <div class="hero-content">
    <div class="container">
      <img class="hero-image" src="<?php echo get_template_directory_uri().'/library/images/arcanelogo1.png' ?>" />
    </div>
  </div>

  <div id="js_navSticky" class="hero-footer title-bar">

    <div class="fluid-container">
      <nav role="navigation" class="tabs is-centered has-frame" itemscope itemtype="http://schema.org/SiteNavigationElement">
        <?php wp_nav_menu([
         'container' => false,                           // remove nav container
         'container_class' => '',                 // class of container (should you choose to use it)
         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
         'menu_class' => '',               // adding custom nav class
         'theme_location' => 'main-nav',                 // where it's located in the theme
         'before' => '',                                 // before the menu
         'after' => '',                                  // after the menu
         'link_before' => '',                            // before each link
         'link_after' => '',                             // after each link
         'depth' => 0,                                   // limit the depth of the nav
         'fallback_cb' => ''                             // fallback function (if there is one)
        ]); ?>

      </nav>
    </div>

    <div class="nav-pointer" >
      <a href="#menu" >
      <img src="<?php echo get_template_directory_uri().'/library/images/pointer.svg' ?>" />
      </a>
    </div>
  </div>
</header>
<?php else : ?>


<header class="hero header">
  <div class="hero-footer title-bar">
    <div class="fluid-container is-fixed">
      <div class="header-logo">
        <a href="<?php echo home_url() ?>">
          <img src="<?php echo get_template_directory_uri().'/library/images/arcanelogo1.png' ?>" />
        </a>
      </div>

      <nav role="navigation" class="tabs is-centered has-frame" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <?php wp_nav_menu([
       'container' => false,                           // remove nav container
       'container_class' => '',                 // class of container (should you choose to use it)
       'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
       'menu_class' => '',               // adding custom nav class
       'theme_location' => 'main-nav',                 // where it's located in the theme
       'before' => '',                                 // before the menu
       'after' => '',                                  // after the menu
       'link_before' => '',    // before each link
       'link_after' => '',                             // after each link
       'depth' => 0,                                   // limit the depth of the nav
       'fallback_cb' => ''                             // fallback function (if there is one)
      ]); ?>

      </nav>
    </div>
  </div>
</header>

  <?php endif ?>

