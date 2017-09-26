<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;

REVIJA_WOOCOMMERCE_CONFIG::enqueue_script('elevate-zoom');

$image_uniqid = uniqid();
?>
<div class="images product-frame product_preview">
	<div class="qv_preview product_item"  data-id="<?php echo esc_attr($image_uniqid); ?>" id="qv_preview-<?php echo esc_attr($image_uniqid) ?>" >
	<?php
	
	function disable_srcset( $sources ) {
	return false;
	}
	add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );
	
	if ( has_post_thumbnail() ) {

		$image_title = esc_attr( get_the_title( get_post_thumbnail_id() ) );
		$image_link  = wp_get_attachment_url( get_post_thumbnail_id() );
		$props            = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
		$image_caption 	= get_post( get_post_thumbnail_id() )->post_excerpt;
		
		 $atts_image_single = array(
		    'title'	 => $props['title'],
			'alt'    => $props['alt'],
		    'data-zoom-image' => $image_link
		 );

		 if (mad_custom_get_option('zoom_on_product_image')) {
			 $atts_image_single['id'] = 'zoom_image';
			 
		 }
		$image       = get_the_post_thumbnail( $post->ID, 'shop_single', $atts_image_single );
		

		$attachment_count = count( $product->get_gallery_image_ids() );

		if ( $attachment_count > 0 ) {
			$gallery = 'product-gallery';
		} else {
			$gallery = '';
		}

		if (!$image) {
			if ( wc_placeholder_img_src() ) {
				$image = wc_placeholder_img( 'shop_single' );
			}
		}
		
		
		
		echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '%s <a data-group="preview" class="qv-review-expand jackboxInit button button_grey_light" href="%s"><i class="fa fa-search-plus"></i></a>', $image, $image_link ), $post->ID );

	} else {
		echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), esc_html__( 'Placeholder', 'woocommerce' ) ), $post->ID );
	}
	

	do_action( 'mad_woocommerce_after_product_thumbnails' );
	?>
	
	</div><!--/ .qv_preview-->
	
	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div><!--/ .images-->
