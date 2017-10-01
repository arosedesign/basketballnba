(function ($) {
jQuery(document).ready(function($) {
	$('form.mailchimp-newsletter').on('submit', function (e) {
		e.preventDefault();
		if( !($(".response").length) ){	
			$('#mailchimp-sign-up').append('<p class="response"></p>');
		}
		var $this = $(this),
			$submit = $this.find('button[type=submit]'),
			$response = $this.find('p.response');

		$this.ajaxSubmit({
			type : 'POST',
			url	 : global.ajaxurl,
			data : {
				ajax_nonce : global.ajax_nonce,
				action : 'add_to_mailchimp_list'
			},
			timeout	: 10000,
			dataType: 'json',
			success	: function (responseText) {
				$response.replaceWith('<p class="response">' + responseText.text + '</p>');
				$submit.unblock();
				$this.trigger('reset');
			}
		});
	});

	});
})(jQuery);