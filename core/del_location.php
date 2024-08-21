<?php 
 include_once("../../../../wp-config.php");
 include_once("../../../../wp-load.php");
 include_once('../../../../wp-includes/wp-db.php');

 global $wpdb;
 $location_id  =$_REQUEST['location_id'];
 if(!empty($location_id))
 {
   $wpdb->query("DELETE FROM ".$wpdb->prefix."location WHERE location_id ='".$location_id."'");
   echo 'TRUE';
  } 
 else 
 { 
 echo "FALSE"; 
 }

?>
