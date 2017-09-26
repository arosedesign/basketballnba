<?php
	extract($args, EXTR_SKIP);
	$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
	
?>

<?php 
$before_widget = str_replace('class="', 'class="form_section newsletter_'.esc_attr($instance['type_newsletter']).' ', $before_widget);
echo $before_widget; 
?>


<?php if ($instance['type_newsletter'] == 'type1') { ?>

<?php if ($title !== ''): ?>
	<?php echo $before_title . $title . $after_title; ?>
<?php endif; ?>

	<form id="newsletter" class="mailchimp-newsletter" action="#" method="POST" >
		<?php
		
			if ( !empty($instance['mailchimp_intro']) ) {
				echo '<div id="mailchimp-sign-up" class="form_text mailchimp-sign-up"><p>' . $instance['mailchimp_intro'] . '</p></div>';
			}
		?>
		<button id="signup-submit" class="btn-email button <?php echo esc_attr($instance['style_type']); ?>"  name="newsletter-submit" type="submit"><i class="fa fa-envelope-o"></i></button>
		<div class="wrapper">
		<input  id="s-email" type="text" name="email" placeholder="<?php esc_html_e('Your email address', 'revija'); ?>">
		</div> 
		
		<p class="response"></p>
	</form>

<?php } else { ?>	
	
	
	<?php if ($title !== ''): ?>
	<?php echo '<h3 class="newsletter-title section_title event_info">' . $title . '</h3>' ?>
	<?php endif; ?>

	<form id="newsletter" class="mailchimp-newsletter" action="#" method="POST" >
		<?php
		
			if ( !empty($instance['mailchimp_intro']) ) {
				echo '<div id="mailchimp-sign-up" class="form_text mailchimp-sign-up"><p><h2 class="second_font">' . $instance['mailchimp_intro'] . '</h2></p></div>';
			}
		?>
		
		<div class="wrapper">
		<input  id="s-email" type="text" name="email" placeholder="<?php esc_html_e('Your email address', 'revija'); ?>">
		</div> 
		
		<button id="signup-submit" class="button button_newsletter_2 button_grey"  name="newsletter-submit" type="submit"><?php esc_html_e('Subscribe Now!', 'revija'); ?></button>
		<div class="newsletter_text_after event_info"  ><?php esc_html_e('One email every Sunday. No spam.', 'revija'); ?></div>
		
		
		<p class="response"></p>
	</form>
	
	
	
	
<?php } ?>	
	
	
<?php echo $after_widget; ?>


