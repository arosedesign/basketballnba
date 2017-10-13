<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta property="fb:app_id" content="1946564005556988"/>




    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="stylesheet" <?php echo 'href="' . get_home_url() . '/wp-content/themes/arosedesign/css/font-awesome.min.css"' ?> type="text/css" media="all">
    <?php wp_head(); ?>
    <link rel="stylesheet" <?php echo 'href="' . get_home_url() . '/wp-content/themes/arosedesign/css/style.css"' ?> type="text/css" media="all">
</head>

<body <?php body_class('eupopup'); ?>>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83590033-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-83590033-2');
</script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1946564005556988',
            xfbml      : true,
            version    : 'v2.10'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

        <div id="topline">&nbsp;</div>

        <div id="tophead">

            <div id="social_header">
                <ul>
                    <li class="facebook">
                        <a target="_blank" href="https://www.facebook.com/bsktballnba/">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="twitter">
                        <a target="_blank" href="https://twitter.com/_BallNBA">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="rss">
                        <a target="_blank" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>/feed">
                            <i class="fa fa-rss"></i>
                        </a>
                    </li>
                    <li class="envelope">
                        <a href="mailto:redazione@basketballnba.com">
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="logo_container">
                <div id="logo">
                    <a title="" <?php echo 'href="' . get_home_url(). '"' ?> >
                        <?php include 'logo.php'; ?>
                    </a>
                </div>
            </div>

            <div id="searchform">
                <a class="opensearch" href="javascript:void(0)">
                    <i class="fa fa-search"></i>
                </a>
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

	<div class="site-content-contain">
		<div id="content" class="site-content">
