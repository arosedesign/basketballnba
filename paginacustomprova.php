<?php
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
get_header();
?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php

            global $wpdb;

            $shcode = $wpdb->get_results( 'SELECT id,data_title FROM staging_408_wce_editor_content', OBJECT );

            $shortcode_tags = array();
            foreach ($shcode as $key => $val) {
                $nome = $val->data_title;
                $id = $val->id;
                $shortcode_tags[$nome] = $id;
            }


            var_dump($shcode);



            ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
