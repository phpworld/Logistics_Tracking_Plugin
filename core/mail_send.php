<?php 

$order_id	= $_REQUEST['order_id'];	
$to = $_REQUEST['mail'];
$subject = "Your Parcel Tracking Information ";
$txt = '<p align="center">
Thank You for Order we have some informaiton for your Shipping order <br> that Tracking Information is '.$order_id.'
Find Your Parcel Current Status Click Here <br><br><br><a href="https://almarshippinglogistics.com/trackings/?track='.$order_id.'" style="background: #ff6000; padding: 10px; border-radius: 12px; color: #fff; text-decoration: none;"> Track your Parcel</a>
</p>';

$headers = "From: webmaster@example.com" . "\r\n" .
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$txt,$headers);

?>
	