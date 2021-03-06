<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<p>© <?php echo date("Y"); ?> BasketballNBA All Rights Reserved.</p>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

<script <?php echo 'src="' . get_home_url() . '/wp-content/themes/arosedesign/js/style.js"' ?> type="text/javascript" defer=""></script>
<script>
    jQuery(document).ready( function() {
        if (jQuery(".eupopup").length > 0) {
            jQuery(document).euCookieLawPopup().init({
                'popupTitle' : 'Questo sito utilizza i cookies',
                'popupText' : 'Li usiamo per offrirti la migior esperienza possibile. Se continuerai ad utilizzare il nostro sito vorrà dire che sei felice di ricevere tutti i cookies su questo sito.'
            });
        }
    });
</script>
</body>
</html>
