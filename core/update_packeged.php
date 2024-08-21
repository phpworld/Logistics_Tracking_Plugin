<?php 
 include_once("../../../../wp-config.php");
 include_once("../../../../wp-load.php");
 include_once('../../../../wp-includes/wp-db.php');

 global $wpdb;
 
  $weight   = $_REQUEST['weight'];
  $l_status = $_REQUEST['status'];
  $notes    = $_REQUEST['notes'];
  $wid      = $_REQUEST['w_id'];
  
 if(!empty($weight) && !empty($notes)){
 $wpdb->query("UPDATE ".$wpdb->prefix."tracking SET status='".$l_status."', weight = '".$weight."', remark ='".$notes."' WHERE id='".$wid."'");

}?>
