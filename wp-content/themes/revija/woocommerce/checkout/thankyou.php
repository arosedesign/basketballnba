<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

		<p class="woocommerce-notice"><?php
			if ( is_user_logged_in() )
				esc_html_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
			else
				esc_html_e( 'Please attempt your purchase again.', 'woocommerce' );
		?></p>

		<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ) ); ?>" class="button pay"><?php esc_html_e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received woocommerce-message"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

		<table class="shop_table order_details">
			<thead>
				<tr>
					<th><?php esc_html_e( 'Order:', 'woocommerce' ); ?></th>
					<th><?php echo esc_attr($order->get_order_number()); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php esc_html_e( 'Date:', 'woocommerce' ); ?></td>
					<td><?php echo wc_format_datetime( $order->get_date_created() ); ?></td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Total:', 'woocommerce' ); ?></td>
					<td><?php echo $order->get_formatted_order_total(); ?></td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Payment method:', 'woocommerce' ); ?></td>
					<?php if ( $order->get_payment_method_title() ) : ?>
					<td><?php echo wp_kses_post( $order->get_payment_method_title() );?></td>
					<?php endif; ?>
				</tr>
			</tbody>
		</table>

		<div class="clear"></div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
	<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

<?php else : ?>

	<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>