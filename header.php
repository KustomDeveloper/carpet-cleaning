<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.png">

    <!-- Analytics goes here -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body id="site" <?php body_class(); ?>>
    <div class="head-wrapper">
        <div class="container-fluid">
            <div class="topbar">
                <p class="review-proof">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <em>Average 4.7 stars <br/> Based on </em><span>13 REVIEWS</span>
                </p>
                <p class="top-bar-phone">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/top-bar-phone-icon.png" />
                    Get a FREE Quote Today! <br/>
                    <span>555.567.8910</span>

                </p>
            </div>
            <div class="row flex-container">
                <div class="logo-container">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/kitchen-remodeling-logo.png" />
                    </a>
                </div><!-- .logo-container -->

                <div class="main-nav">
                    <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
                </div><!--.main-nav-->
                <div class="mobile-menu"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/mobile-menu.png"></div>
                <div class="close-menu"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/close-menu.png"></div>
                <div class="mobile-nav">
                    <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
                </div><!--.main-nav-->

            </div><!--.row-->
        </div><!--.container-fluid-->
    </div><!--.head-wrapper-->