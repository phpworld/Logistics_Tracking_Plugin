<?php 
 include_once("../../../../wp-config.php");
 include_once("../../../../wp-load.php");
 include_once('../../../../wp-includes/wp-db.php');

 global $wpdb;
 $pack_id  =$_REQUEST['pack_id'];
 if(!empty($pack_id))
 {
   $wpdb->query("DELETE FROM ".$wpdb->prefix."package WHERE pack_id ='".$pack_id."'");
   echo 'TRUE';
  } 
 else 
 { 
 echo "FALSE"; 
 }

?>
