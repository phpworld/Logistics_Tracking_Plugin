<?php 
 include_once("../../../../wp-config.php");
 include_once("../../../../wp-load.php");
 include_once('../../../../wp-includes/wp-db.php');

 global $wpdb;
 
  $ord_id  = $_REQUEST['oid'];
  $pakg_nm = $_REQUEST['packnem'];
  $weight  = $_REQUEST['weight'];
 
 if(!empty($pakg_nm) && !empty($weight)){
     $wpdb->query("INSERT INTO ".$wpdb->prefix."package(order_id, package_name, package_weight) VALUES ('".$ord_id."','".$pakg_nm."','".$weight."')");
}

?>
