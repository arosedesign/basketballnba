<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="stylesheet" <?php echo 'href="' . get_home_url() . '/wp-content/themes/arosedesign/css/font-awesome.min.css"' ?> type="text/css" media="all">
    <?php wp_head(); ?>
    <link rel="stylesheet" <?php echo 'href="' . get_home_url() . '/wp-content/themes/arosedesign/css/style.css"' ?> type="text/css" media="all">

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

        <div id="topline">&nbsp;</div>

        <div id="tophead">

            <div id="social_header">
                <ul>
                    <li class="facebook">
                        <span class="tooltip">Facebook</span>
                        <a target="_blank" href="https://www.facebook.com/basketballncaa/">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="twitter">
                        <span class="tooltip">Twitter</span>
                        <a target="_blank" href="https://twitter.com/BallNcaa">
                            <i class="fa fa-twitter"></i> </a></li><li class="rss">
                        <span class="tooltip">Rss</span> <a href="http://basketballncaa.com/feed/">
                            <i class="fa fa-rss"></i>
                        </a>
                    </li>
                    <li class="envelope">
                        <span class="tooltip">Contact Us</span>
                        <a href="mailto:redazione@basketballncaa.com">
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="logo">
                <?php include 'logo.php'; ?>
            </div>

            <div id="searchform">
                <?php get_search_form(); ?>
            </div>

        </div>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
