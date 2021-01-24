<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Stylesheets
        ============================================= -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <meta property="og:title" content="Assignment" />
    <meta property="og:url" content="https://github.com/khaled301" />
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.jpg" />
    <meta property="og:description" content="Homework Assignment" />



    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/fevicon.jpg">


</head>

<body  <?php body_class(); ?>>

<div class="se-pre-con"></div>

<div id="page" class="site" style="display: none;">

    <!-- Header ============================================= -->
    <header id="header" class="transparent-header floating-header" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo ============================================= -->
                <div id="logo">
                    <a href="<?php echo get_home_url(); ?>" class="standard-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.jpg" alt="assignment-logo"></a>
                    <a href="<?php echo get_home_url(); ?>" class="retina-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.jpg" alt="assignment-logo"></a>
                </div>

                <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: https://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->


                <!-- Primary Navigation
                    ============================================= -->
                <nav id="primary-menu">

                    <ul>
						<li><a href="<?php echo get_category_link( 3 ); ?>"><div>PLACES</div></a></li>
						<li><a href="<?php echo get_category_link( 4 ); ?>"><div>PEOPLE</div></a></li>
						<li><a href="<?php echo get_category_link( 5 ); ?>"><div>PURPOSE</div></a></li>
						<li><a href="#myModal1" data-lightbox="inline"><i class="icon-search3" style="font-size: 16px;"></i></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

				<div class="modal1 mfp-hide" id="myModal1">
					<div class="block divcenter" style="background-color: transparent; max-width: 60%;">
						<div class="center custom-search-center" style="padding: 50px;">
							<form style="width: 80%;" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
								<label style="width: 100%;">
									<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
									<input type="search" class="search-field"
										style="width: 100%;"
										placeholder="<?php echo esc_attr_x( 'Search articles...', 'placeholder' ) ?>"
										value="<?php echo get_search_query() ?>" name="s"
										title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
								</label>
							</form>
						</div>
					</div>
				</div>

            </div>

        </div>

    </header><!-- #header end -->

