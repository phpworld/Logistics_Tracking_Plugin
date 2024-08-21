<?php
/*
Plugin Name: Logistics Tracking System
Plugin URI: http://digitalcreativeinternational.com
Description: This is login Plugin in the upper right of your admin screen on every page. company website is <a href="www.websitedesigneurope.com">www.websitedesigneurope.com</a>
Author:  Vinay Kumar Singh
Version: 3.0
Author URI: www.digitalcreativeinternational.com
*/

add_action( 'admin_menu', 'ordertrack' );
	function ordertrack()
	{
	// Main menu
	add_menu_page( 	' Logistics Tracking System', // TITLE
	'Logistics Tracking System',     // Name 
	'manage_options',    // This is type of menu 
	'order_tracker',     // Navigatin code Root
	'ordertracker_fun'   // Call the Function  to Run the plugin this is the main function to display the dashboard .
  	);

function ordertracker_fun(){

if($_GET['page']=='order_tracker')
	{
	global $title;
	print '<div class="wrap">';
	print "<h1>$title</h1>";
	print "<HR/>";
	$file = plugin_dir_path( __FILE__ ) . "core/dashboard.php";
	
	if ( file_exists( $file ) )
	require $file;
	print "<HR/>";
	print '</div>';
	}

if(@$_GET['pg']=='order-page')
	{
	$title = " Add Order ";
	print '<div class="wrap">';
	print "<h1>$title</h1>";
	$file = plugin_dir_path( __FILE__ ) . "core/add_order.php";
	if ( file_exists( $file ) )
	require $file;
	print '</div>';
	}
	
	if(@$_GET['pags']=='add-loc')
	{
	$title = " Add Location & Package Information";
	print '<div class="wrap">';
	print "<h1>$title</h1>";
	$file = plugin_dir_path( __FILE__ ) . "core/add_info.php";
	if ( file_exists( $file ) )
	require $file;
	print '</div>';
	}	
}}

define('ADMIN_INCLUDE_DIR', plugin_dir_path(__FILE__).'core/');


//// Load Tracking Pages In Frontend

	function tracking_pg()
	{
	 include('core/tracking_page.php'); 
	 }
	add_shortcode('tracking-page', 'tracking_pg');

/// SHORT CODE FOR TRACKING PAGE ===  [tracking-page] 

add_shortcode ('barcode','m8080_generate_barcode');

function m8080_generate_barcode($attr){
	$attr=apply_filters('m8080_barcode',$attr);
	$text = (isset($attr["text"])?$attr["text"]:"0");
	$size = (isset($attr["size"])?$attr["size"]:"20");
	$text_size = (isset($attr["text_size"])?$attr["text_size"]:"0");
	$code_type = (isset($attr["code_type"])?$attr["code_type"]:"code128");
	
	ob_start();
	echo '<img src="'.plugin_dir_url(__FILE__).'lib/barcode.php?text='.$text.'&size='.$size.'&size_tekst='.$text_size.'&codetype='.$code_type.'" alt="barcode"/>';
	$view = ob_get_clean();
    return $view;
}