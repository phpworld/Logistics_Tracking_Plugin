<?php 
 include_once("../../../../wp-config.php");
 include_once("../../../../wp-load.php");
 include_once('../../../../wp-includes/wp-db.php');
 global $wpdb;


if(isset($_POST['submit']))
  { 
  $order_no  = $_POST['order_no'];
  $container_no  = $_POST['container_no'];
  $date_frm = $_POST['date_frm']; 
  $ship_country_origin= $_POST['ship_country_origin'];
  $ship_origin_address	=$_POST['ship_origin_address'];
  $ship_company = $_POST['ship_company'];
  $trans_mode = $_POST['trans_mode'];
  $dest_full_name=$_POST['dest_full_name'];
  $email_to = $_POST['email_to'];
  $dest_phone = $_POST['desti_phone'];
  $dest_country = $_POST['desti_country'];
  $dest_address = $_POST['desti_address'];
  
   
  $wpdb->query("INSERT INTO ".$wpdb->prefix."tracking( order_no, container_no, ship_date, ship_country_origin, ship_origin_address, ship_company, dest_full_name, dest_phone, dest_country, dest_address, dest_mail, transport_mode) VALUES ('".$order_no."','".$container_no."','".$date_frm."','".$ship_country_origin."','".$ship_origin_address."','".$ship_company."','".$dest_full_name."','".$dest_phone."','".$dest_country."','".$dest_address."','".$email_to."','".$trans_mode."')");
  
   wp_redirect( site_url()."/wp-admin/admin.php?page=order_tracker&pg=order-page" );
  }
?>