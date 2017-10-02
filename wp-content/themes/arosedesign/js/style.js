jQuery(document).ready(function(){
    jQuery('.opensearch').click(function(e) {
        e.preventDefault();
        jQuery( "form.search-form" ).toggleClass( 'opened' );
        jQuery( ".opensearch .fa" ).toggleClass('fa-search');
        jQuery( ".opensearch .fa" ).toggleClass('fa-close');
    });
});