<?php
 include_once("../../../../wp-config.php");
 include_once("../../../../wp-load.php");
 include_once('../../../../wp-includes/wp-db.php');
 global $wpdb;

  $ord  =$_REQUEST['ord_id'];

 if(!empty($ord))
 {
   $wpdb->query("DELETE FROM ".$wpdb->prefix."tracking WHERE id ='".$ord."'");
    wp_redirect( admin_url( '/admin.php?page=order_tracker&pg=order-page' ) );
  } 
 else 
 { 
 wp_redirect( admin_url( '/admin.php?page=order_tracker&pg=order-page' ));
 }


 ?>