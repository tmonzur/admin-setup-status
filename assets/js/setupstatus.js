/*jQuery(document).ready(function(){

	jQuery("#setupstatus").click(function(){

        jQuery.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'http://localhost/wordpress/wp-admin/admin-ajax.php',
            data: { 
                'action': 'post_setup_status_data', 
                'status_color': jQuery('#status_color').val(), 
                'assignee': jQuery('#assignee').val(), 
                'snotes': jQuery('#snotes').val() },
            success: function(data){
				alert(data);
                document.location.href = HM_Ajax.redirecturl;
                
            }
        });
		
	});
	
	
});
*/

jQuery( document ).ready( function( $ ) {

        "use strict";
	/**
         * The file is enqueued from inc/admin/class-admin.php.
	 */        
        jQuery( '#nds_add_user_meta_ajax_form' ).submit( function( event ) {
            
            event.preventDefault(); // Prevent the default form submit.            
            
            // serialize the form data
            var ajax_form_data = jQuery("#nds_add_user_meta_ajax_form").serialize();
            
            //add our own ajax check as X-Requested-With is not always reliable
            ajax_form_data = ajax_form_data+'&ajaxrequest=true&submit=Save';
           
            jQuery.ajax({
                url:    HM_Ajax.ajaxurl, // domain/wp-admin/admin-ajax.php
                type:   'post',                
                data:   ajax_form_data,
				action: 'post_setup_status_data',
            })
            
            .done( function( response ) { // response from the PHP action
                jQuery(" #nds_form_feedback ").html( "<h2 class='success-msg'>Data Saved Successfully </h2><br>" + response );
            })
            
            // something went wrong  
            .fail( function() {
                jQuery(" #nds_form_feedback ").html( "<h2 class='error-msg'>Something went wrong.</h2><br>" );                  
            })
        
            // after all this time?
            .always( function() {
                event.target.reset();
            });
        
       });   
			
});



