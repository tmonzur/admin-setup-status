<?php
/**
* Project: setupstatus.
* Copyright: 2018 @Agent Design
*/
function post_setup_status_data(){
	$sstatus = $_POST['status_color'];
	$sassignee = $_POST['assignee'];
	$snotes = $_POST['notes'];
	$pageTitle = $_POST['page_title'];
		
	if( isset( $_POST['ajaxrequest'] ) && $_POST['ajaxrequest'] === 'true' ) {
		global $wpdb;
		
		$current_url = $_SERVER[HTTP_REFERER];
				
			//$sql = "SELECT * FROM ".$wpdb->prefix."setup_status_info";
			//$results = $wpdb->get_results($sql);
			//$pageTitle = get_admin_page_title();
		
			//$table_name = $wpdb->prefix . 'newsletter';
			//if (count($results)==0 || count($results)== ''){ 
			$wpdb->insert( $wpdb->prefix.'setup_status_info', array("setup_status" => $sstatus, "assignee" => $sassignee, "status_note" => $snotes, "page_name" => $pageTitle, "page_url" => $current_url, "issue_date" => current_time( 'mysql' )));					
			//}else{
			//	$wpdb->update( $wpdb->prefix.'setup_status_info', array('setup_status' => $sstatus, 'assignee' => $sassignee, 'status_note' => $snotes, 'issue_date' => current_time( 'mysql' )), array( 'id'=>1));
			//}
			//var_dump( $wpdb->last_query );
		die();
		return true;
	}		
}
add_action('wp_ajax_post_setup_status_data', 'post_setup_status_data');
?>