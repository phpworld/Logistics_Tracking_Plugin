<?php global $wpdb;?>
<script src="<?php echo plugins_url( '/jquery-1.11.0.min.js', __FILE__ );?>"></script>
<script>$(document).ready(function(){
 $("#add_adrs").click(function(){
  var zip =$("#zip").val();
  var city =$("#city").val();
  var addres =$("#addres").val();
  var sts =$("#status2").val(); 
  var track = $("#track").val();
  var fullDate = new Date();
  var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
  var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();

  $.ajax({
		type: "POST",
		url: "<?php echo plugins_url( 'add_addres.php', __FILE__ );?>",
		data: { zip: zip, city:city, sts:sts, date:currentDate, addres:addres ,track:track },
		success: function(req_data)
		{
		 //  var str =req_data;
		 // alert(str.trim());
		   //$('#review').css('display','none');
		    //$('.modal-backdrop').css('display','none');
		   // location.reload();
		   $('#data').html(req_data);
		   //$('.form-control').find('input:textarea').val('');
		}
	  }); // Ajax Close Here
	
       })
    
	
	$("#ref").click(function(){
		var track2=$("#track").val(); 
 		
		  $.ajax({
		type: "POST",
		url: "<?php echo plugins_url( 'add_addres.php', __FILE__ );?>",
		data: { zip: zip, city:city, sts:sts, date:currentDate, addres:addres ,track:track },
		success: function(req_data)
		{
		
		}
		})
		
		})//
		
     })
	
    })
</script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#date_frm" ).datepicker();
	$( "#date_to" ).datepicker();
  });
  </script>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.bdr{
 border:1px solid #CCCCCC;
}
-->
</style>
<table width="94%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="93%" height="49" align="center" valign="middle" bgcolor="#999999"><span class="style1">Add Order Here</span></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#E9EBED"><form name="form1" method="post" action="<?php echo plugins_url( '/cd_add_order.php', __FILE__ );?>">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="48%" height="116" align="center" valign="top"><table width="99%" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td height="42" colspan="3" bgcolor="#CCCCCC"><strong style="padding-left:50PX;">SHIPPNG INFORMATION</strong></td>
              </tr>
              <tr>
                <td width="30%" height="25" align="right" valign="middle"><strong>DATE</strong></td>
                <td width="2%" height="25">&nbsp;</td>
                <td height="25"><input type="text" name="date_frm" id="date_frm" /></td>
              </tr>
              <tr>
                <td width="30%" height="30" align="right" valign="middle"><strong>NAME</strong></td>
                <td width="2%" height="30">&nbsp;</td>
                <td height="30"><input type="text" name="name_frm" id="name_frm" /></td>
              </tr>
              <tr>
                <td width="30%" height="40" align="right" valign="top"><strong>LOCATION</strong></td>
                <td width="2%" height="40">&nbsp;</td>
                <td><textarea name="loc_frm" id="loc_frm" cols="25" rows="3"></textarea></td>
              </tr>
          </table></td>
          <td width="2%">&nbsp;</td>
          <td width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="33" align="right" valign="middle" bgcolor="#CCCCCC"><strong>ORDER NO # </strong></td>
                <td height="33" bgcolor="#CCCCCC">&nbsp;</td>
                <td height="33" bgcolor="#CCCCCC"><input type="text" name="order_no" id="order_no" /></td>
              </tr>
              <tr>
                <td height="33" align="right" valign="middle" bgcolor="#CCCCCC"><strong>Email:</strong></td>
                <td height="33" bgcolor="#CCCCCC">&nbsp;</td>
                <td height="33" bgcolor="#CCCCCC"><input type="text" name="email_to" id="email_to" /></td>
              </tr>
              <tr>
                <td height="33" colspan="3" bgcolor="#999999"><strong style="padding-left:20px;">DELIVERY INFORMATION</strong></td>
              </tr>
              <tr>
                <td width="30%" height="29" bgcolor="#CCCCCC"><div align="right"><strong>DATE</strong></div></td>
                <td width="2%" height="29" bgcolor="#CCCCCC">&nbsp;</td>
                <td height="29" bgcolor="#CCCCCC"><input type="text" name="date_to" id="date_to" /></td>
              </tr>
              <tr>
                <td width="30%" height="25" bgcolor="#CCCCCC"><div align="right"><strong>NAME</strong></div></td>
                <td width="2%" height="25" bgcolor="#CCCCCC">&nbsp;</td>
                <td height="25" bgcolor="#CCCCCC"><input type="text" name="name_to" id="name_to" /></td>
              </tr>
              <tr>
                <td width="30%" height="40" valign="top" bgcolor="#CCCCCC"><div align="right"><strong>LOCATION</strong></div></td>
                <td width="2%" height="40" bgcolor="#CCCCCC">&nbsp;</td>
                <td height="40" align="left" valign="top" bgcolor="#CCCCCC"><textarea name="loc_to" id="loc_to" cols="25" rows="3"></textarea></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="19" align="right" valign="middle">&nbsp;</td>
          <td height="19" align="right" valign="middle">&nbsp;</td>
          <td height="19" align="right" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="20" align="right" valign="middle"><table width="100%" height="68" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="3" bgcolor="#CCCCCC" class="bdr"><strong style="padding-left:20px;">CURRENT STATUS</strong></td>
              </tr>
              <tr>
                <td height="38" align="right" class="bdr"><strong>Set Status</strong></td>
                <td width="10" class="bdr">&nbsp;</td>
                <td class="bdr"><select name="status" id="status">
                    <option value="Processed">Processed</option>
                    <option value="Shipped">Shipped</option>
                    <option value="Deliverd">Delivered</option>
                  </select>                </td>
              </tr>
          </table></td>
          <td height="20" align="right" valign="middle"><p>&nbsp;</p>
              <p>&nbsp;</p></td>
          <td height="20" align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="32" bgcolor="#CCCCCC"><strong style="padding-left:20px;">Services Type</strong></td>
              </tr>
              <tr>
                <td height="37" class="bdr"><input type="text" name="ser_type" id="ser_type" /></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="36" colspan="3" align="center" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="48" colspan="3" align="center" valign="top"><input type="submit" name="submit" id="submit" value="Submit" class="button button-primary" />
            &nbsp;&nbsp;
            <input type="reset" name="button2" id="button2" value="Reset" /></td>
        </tr>
       
      </table>
    </form>    </td>
  </tr>
</table>

<p>&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="9%" height="41" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Srial No.</strong></td>
        <td width="16%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Order No </strong></td>
        <td width="24%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Name</strong></td>
        <td width="9%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Date</strong></td>
        <td width="13%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Status</strong></td>
        <td width="13%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Type</strong></td>
        <td width="16%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Action</strong></td>
      </tr>
      <?php 
	  function get_requests()
        {   
        global $wpdb;
        $rec_list="SELECT * FROM ".$wpdb->prefix."tracking ORDER BY id DESC";
        $req_list = $wpdb->get_results($rec_list);
        return $req_list;
        }
        
        $stt = get_requests($track);
        if($stt){ 
        $i=1;
	  foreach($stt as $inf)
	  {?>
      <tr>
        <td height="41" align="center" valign="middle" class="bdr"><?php echo $i; $i++;?></td>
        <td align="center" valign="middle" class="bdr"><?php echo  do_shortcode('[barcode text="'.$inf->order_no.'" size="40" text_size="10" codetype="code128"]');?></td>
        <td align="center" valign="middle" class="bdr"><?php echo $inf->name_to;?></td>
        <td align="center" valign="middle" class="bdr"><?php echo $inf->date_to;?></td>
        <td align="center" valign="middle" class="bdr"><?php echo $inf->status;?></td>
        <td align="center" valign="middle" class="bdr"><?php echo $inf->type_service;?></td>
        <td align="center" valign="middle" class="bdr"><a href="<?php echo $url = admin_url()."admin.php?page=order_tracker&&pags=add-loc&&pr_id=".$inf->id;?>">Add</a> | <a href="#">Edit</a> | <a href="#">Delete</a></td>
      </tr>
      
      <?php } }?>
      <tr>
        <td height="41" align="center" valign="middle" class="bdr">&nbsp;</td>
        <td align="center" valign="middle" class="bdr">&nbsp;</td>
        <td align="center" valign="middle" class="bdr">&nbsp;</td>
        <td align="center" valign="middle" class="bdr">&nbsp;</td>
        <td align="center" valign="middle" class="bdr">&nbsp;</td>
        <td align="center" valign="middle" class="bdr">&nbsp;</td>
        <td align="center" valign="middle" class="bdr">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
