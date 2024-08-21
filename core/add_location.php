<?php 
 include_once("../../../../wp-config.php");
 include_once("../../../../wp-load.php");
 include_once('../../../../wp-includes/wp-db.php');
  
  global $wpdb;
 $ord_id   =$_REQUEST['oid2'];
 // $date     =$_REQUEST['date'];
 $lcaotion =$_REQUEST['location'];
 $status  =$_REQUEST['status'];

if(!empty($lcaotion) && !empty($ord_id)){
 
  $wpdb->query("INSERT INTO ".$wpdb->prefix."location( order_id, location_name, status) VALUES ('".$ord_id."','".$lcaotion."','".$status."')");
  }
    
  ?>
