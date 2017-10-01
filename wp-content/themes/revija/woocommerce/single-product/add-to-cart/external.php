<?php
/**
 * External product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;
?>

<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

<p class="cart">
	<a href="<?php echo esc_url( $product_url ); ?>" rel="nofollow" class="single_add_to_cart_button button button_type_icon_medium button_orange alt"><?php echo $button_text; ?></a>
</p>

<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

<p class="category">
	
	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in clearfix">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
	
	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as clearfix">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

</p>