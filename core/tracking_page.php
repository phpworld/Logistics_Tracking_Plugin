<?php global $wpdb;?>
<script src="https://kit.fontawesome.com/bb033a95fb.js" crossorigin="anonymous"></script>
<style type="text/css">
.bdr { border:1px solid #CCCCCC; }
	@media only screen and (max-width: 768px) {
		.mob{ width:100%;}
	}
a.another {
    padding: 10px;
    background-color: gray;
    color: #ffffff;
    border-radius: 5px;
}
</style>
<?php if(!isset($_GET['track'])){?>
<table border="0" cellspacing="0" cellpadding="0" style="margin:0 auto;">
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td width="50%"><blockquote> <strong>Shipment Tracking</strong></blockquote></td>
    <td width="2%">&nbsp;</td>
    <td width="48%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><form class="navbar-form navbar-left" role="search" action="" method="get">
  <div class="form-group">
    <input type="text" name="track" id="track" class="form-control" placeholder="Enter Consignment Number">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form></td>
  </tr>
</table>
<?php }?>
</div>
<div style="">&nbsp;</div>
<?php if(isset($_GET['track']))
{
$order_id=$_GET['track'];
$val=$wpdb->get_results("SELECT * FROM ".$wpdb->prefix."tracking WHERE order_no='".$order_id."'",OBJECT);
$nor= count($val);
$error='';
if($nor == 1 ){ 
$packge=$wpdb->get_results("SELECT * FROM ".$wpdb->prefix."package WHERE order_id = '".$val[0]->id."'",OBJECT);
$location=$wpdb->get_results("SELECT * FROM ".$wpdb->prefix."location WHERE order_id = '".$val[0]->id."'",OBJECT);
?>


<div class="post-content">
  <div class="vc_row wpb_row vc_row-fluid">
    <div class="mob" style="float:left;width: 571px;">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <?php echo do_shortcode('[barcode text="'.$order_id.'" size="40" text_size="10" codetype="code128"]');?> <br /> <br>
    &nbsp;&nbsp;<?php echo "<b>Tracking Code </b>: ". $order_id;?> <br>
	&nbsp;&nbsp;<?php echo "<b>Container No  </b>: ".$val[0]->container_no;?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-8">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <img src="https://postfrl.com/wp-content/uploads/2022/04/logistics.jpg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <table border="0" width="46%" style="float:left; overflow:hidden; margin-right:20px;" class="mob">
                <tbody>
                  <tr>
                    <td colspan="2" bgcolor="#CCCCCC" height="50"><strong>&nbsp; Shipping Information </strong></td>
                  </tr>
                  <tr>
                    <td width="247">&nbsp;&nbsp;&nbsp;<strong>Shipping Date : </strong></td>
                    <td width="828" height="40"> &nbsp;&nbsp;<?php echo $val[0]->ship_date;?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;<strong>Company Name :</strong></td>
                    <td height="36">&nbsp;&nbsp;<?php echo $val[0]->ship_company;?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;<strong>Origin Country :</strong></td>
                    <td height="40">&nbsp;&nbsp;<?php echo $val[0]->ship_country_origin;?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;<strong>Origin Address :</strong></td>
                    <td height="40">&nbsp;&nbsp;<?php echo $val[0]->ship_origin_address;?></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td height="40"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <table border="0" width="50%" class="mob">
                <tbody>
                  <tr>
                    <td colspan="2" bgcolor="#CCCCCC" height="50"><strong>&nbsp; Delivery Information<br>
                      </strong></td>
                  </tr>
                  <tr>
                    <td width="347"><strong>&nbsp; &nbsp;Email :&nbsp;</strong></td>
                    <td width="828" height="40">&nbsp;&nbsp;<?php echo $val[0]->dest_mail;?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp; <strong>Name :</strong></td>
                    <td height="36"> &nbsp;&nbsp;<?php echo $val[0]->dest_full_name;?></td>
                  </tr>
                  <tr>
                    <td>&nbsp; &nbsp;<b>Destination </b><strong>Country :</strong></td>
                    <td height="40"> &nbsp;&nbsp;<?php echo $val[0]->dest_country;?></td>
                  </tr>
                  <tr>
                    <td>&nbsp; &nbsp;<b>Destination </b><strong>Address :</strong></td>
                    <td height="40">&nbsp; <?php echo $val[0]->dest_address;?></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td height="40"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <table border="0" width="45%"  style="margin-right:45px; float:left; overflow:hidden;" class="mob">
                <tbody>
                  <tr>
                    <td width="50%" height="37" bgcolor="#CCCCCC"><div align="center"><strong>Parcel Content Type</strong></div></td>
                    <td width="50%" bgcolor="#CCCCCC"><div align="center"><strong>&nbsp; &nbsp;Weight in Kg / Lbs</strong></div></td>
                  </tr>
                <?php for($i=0;$i<=count($packge);$i++) {?> 
				 <tr>
                    <td height="37" align="center"> <div align="center"><?php echo $packge[$i]->package_name;?></div></td>
                    <td height="37" align="center"><div align="center"><?php echo $packge[$i]->package_weight;?></div></td>
				 </tr>
				<?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <table border="0" width="50%" class="mob">
                <tbody>
                  <tr>
                    <td width="38%" height="37" bgcolor="#CCCCCC"><div align="center"><strong>&nbsp; &nbsp; &nbsp; Transport Mode</strong></div></td>
                    <td width="62%" height="37" bgcolor="#CCCCCC"><div align="center"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Phone Number</strong></div></td>
                  </tr>
                  <tr>
                    <td height="37" align="center"><div align="center"><?php echo $val[0]->transport_mode;?></div></td>
                    <td height="37"><div align="center"><?php echo $val[0]->dest_phone;?></div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <table border="0" width="100%">
                <tbody>
                  <tr>
                    <td width="20%" height="37" bgcolor="#CCCCCC"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial No</strong></td>
                    <td width="40%" bgcolor="#CCCCCC">&nbsp; &nbsp; <strong> Current Location<br />
                    </strong></td>
					<td width="40%" bgcolor="#CCCCCC">&nbsp; &nbsp; <strong> Current Status<br />
                    </strong></td>
                  </tr>
                  <?php for($j=0;$j<=count($location);$j++){?> 
				  <tr>
                    <td height="37"><div align="center">Position : <?php echo $j;?></div></td>
                    <td height="37">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $location[$j]->location_name;?></td>
					<td height="37">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $location[$j]->status;?></td>
				  </tr>
                   <?php }?>
                   <tr>
                    <td height="37" align="right"><a href="/trackings/" class="another">Check Another Shippings</a></td>
                    <td height="37"></td>
				  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <?php } elseif($nor == 0) {  ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="54" bgcolor="#FFFFFF";><div align="center"><strong style="font-size:14px; padding:30px; font-family:Verdana, Arial, Helvetica, sans-serif">NO RECORDS FOUND OR WRONG TRACKING DETAILS . </strong></div> <a href="/trackings/" class="another">Check Another Shippings</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

<?php } }?>

