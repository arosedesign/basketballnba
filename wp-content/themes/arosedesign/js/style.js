jQuery(document).ready(function(){

    jQuery('.opensearch').click(function(e) {
        e.preventDefault();
        jQuery( "form.search-form" ).toggleClass( 'opened' );
        jQuery( ".opensearch .fa" ).toggleClass('fa-search');
        jQuery( ".opensearch .fa" ).toggleClass('fa-close');
        setTimeout(focussearch, 100);
    });

    mobileupdate()

});

function focussearch(){
    jQuery('form.search-form input.search-field').focus()
}

function mobileupdate(){
    if(jQuery(window).innerWidth() <= 767) {
        jQuery('#social_header ul').append(jQuery('a.opensearch'))
    }
}

jQuery(window).resize(mobileupdate);
