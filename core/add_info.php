<style>
.bdr{
 border:1px solid #CCCCCC;
}
/* Popup box BEGIN */
.hover_bkgr_fricc, .hover_bkgr_fricc2,.hover_bkgr_fricc3 , .hover_bkgr_fricc4{
    background:rgba(0,0,0,.4);
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper,.hover_bkgr_fricc2 .helper,.hover_bkgr_fricc3 .helper , .hover_bkgr_fricc4 .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div,.hover_bkgr_fricc2 > div ,.hover_bkgr_fricc3 > div ,.hover_bkgr_fricc4 > div{
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
  
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
	  cursor: pointer;
}
.trigger_popup_fricc ,.trigger_popup_fricc2,.trigger_popup_fricc3, .trigger_popup_fricc4{
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */
</style>
<!--<script src="https://kit.fontawesome.com/bb033a95fb.js" crossorigin="anonymous"></script>-->
<script src="<?php echo plugins_url( '/jquery-1.11.0.min.js', __FILE__ );?>"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script>
    $(document).ready(function(){
	
	///// PACKAGE ADDTION ////
    $("#add").click(function(){
    var packnem=$("#packnem").val();
    var weight=$("#weight").val();
    var o_id=$("#oid").val(); 
    $.ajax({
    type: "POST",
    url: "<?php echo plugins_url( 'add_packeged.php', __FILE__ );?>",
    data: { packnem: packnem, weight:weight, oid:o_id },
    success: function(req_data)
    {
    //$("#unit_data").html(req_data);
    window.location.reload();
	}
    })
    })
	
	$("#change_sts").click(function(){
    var weight = $("#weight").val();
    var status = $("#l_status").val();
	var notes = $("#notes").val();
    var w_id = $("#wid").val(); 
	//alert(w_id); 
    $.ajax({
    type: "POST",
    url: "<?php echo plugins_url( 'update_packeged.php', __FILE__ );?>",
    data: { weight: weight, status:status, notes:notes, w_id:w_id },
    success: function(req_data)
    {
    //$("#unit_data").html(req_data);
   	 window.location.reload();
	}
    })
    })
	
    
    $("#refresh").click(function(){
 	///// FETCH PACKAGE ADDTION ////
    var o_id=$("#oid").val(); 
    $.ajax({
    type: "POST",
    url: "<?php echo plugins_url( 'add_packeged.php', __FILE__ );?>",
    data: { oid: o_id },
    success: function(req_data)
    {
    //$("#unit_data").html(req_data);
	alert("Package Added Success.");
    window.location.reload();
    }
    })})
    
    
 $("#add_addres").click(function(){
 	///// LOCATION ADDTION //// 
    var location=$("#location").val();
    var status=$("#status").val();
   // var remarks=$("#remarks").val(); 
    var oid2=$("#oid2").val(); 	
    $.ajax({
    type: "POST",
    url: "<?php echo plugins_url( 'add_location.php', __FILE__ );?>",
    data: { location: location, status:status, oid2:oid2 },
    success: function(req_data)
    {
   //$("#locations").html(req_data);
    alert("Location Added Success.");
	window.location.reload();
	}
    })
    })
    
    $(function() {
    $( "#date" ).datepicker();
    
    });
	
    $("#del_pack").click(function(){
    var pack_id =$(this).attr('ref');
	$.ajax({
    type: "POST",
    url: "<?php echo plugins_url( 'del_package.php', __FILE__ );?>",
    data: { pack_id: pack_id },
    success: function(req_data)
    {
    if(req_data=="TRUE"){
	 alert("Deleted Success.");
	window.location.reload();
	}else{
	 alert("Something Wrong.");
	window.location.reload();
	};
    }
    })})
	
    $("#loc_del").click(function(){
    var location_id =$(this).attr('ref');
	$.ajax({
    type: "POST",
    url: "<?php echo plugins_url( 'del_location.php', __FILE__ );?>",
    data: { location_id: location_id },
    success: function(req_data)
    {
    if(req_data=="TRUE"){
	 alert("Deleted Success.");
	window.location.reload();
	}else{
	 alert("Something Wrong.");
	window.location.reload();
	};
    }
    })})
    })
    </script>
<style>

</style>
<?php $id=$_GET['pr_id'];  ?>
<hr><br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="299" align="center" valign="middle" bgcolor="#CCCCCC">Order No</td>
    <td width="354" height="30" align="center" valign="middle" bgcolor="#CCCCCC">Name to</td>
    <td width="415" align="center" valign="middle" bgcolor="#CCCCCC">Shipping Addres</td>
  </tr>
  <?PHP function get_requests($id)
        {   
        global $wpdb;
        $rec_list="SELECT * FROM ".$wpdb->prefix."tracking where id='".$id."' LIMIT 0,1";
        $req_list = $wpdb->get_results($rec_list);
        return $req_list;
        }
		 $stt = get_requests($id);
        if($stt){ 
        $i=1;
	  foreach($stt as $inf){?>
  <tr>
    <td width="299" align="center" valign="middle" class="bdr"><?php echo  do_shortcode('[barcode text="'.$inf->order_no.'" size="40" text_size="10" codetype="code128"]')."<br/>Order No : " .$inf->order_no." <br/>&nbsp; Container No: ".$inf->container_no; ?></td>
    <td width="354" height="58" align="center" valign="middle" class="bdr"><?php echo $inf->dest_full_name;?></td>
    <td width="415" align="center" valign="middle" class="bdr"><?php echo $inf->dest_address."<br/>Country : ".$inf->dest_country."<br/> Phone: ".$inf->dest_phone;?></td>
  </tr>
<?php }}?>  
  <tr>
    <td>&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<hr>

<table width="315">
<tr>
    <td width="33%" height="35" align="center" valign="middle"><a class="trigger_popup_fricc button button-primary">Add Package Type </a></td>
    <td width="33%" align="center" valign="middle"><a class="trigger_popup_fricc2 button button-primary" >Add Location  </a></td>
   <!--- <td width="33%" align="center" valign="middle"><a class="trigger_popup_fricc3 button button-primary">Package Status </a></td> --->
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="35" colspan="5" align="center" valign="middle">&nbsp;
    
    <style type="text/css">
.bdr { border:1px solid #CCCCCC; }
</style>
<table width="67%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" colspan="4" bgcolor="#CCCCCC" align="center"><strong>&nbsp;&nbsp;PACKAGE DETAILS</strong></td>
  </tr>
  <tr>
    <td width="14%" height="32" bgcolor="#999999" class="bdr"><div align="center"><strong>Sr No</strong></div></td>
    <td width="53%" bgcolor="#999999" class="bdr"><div align="center"><strong>Name</strong></div></td>
    <td width="17%" bgcolor="#999999" class="bdr"><div align="center"><strong>Weight</strong></div></td>
    <td width="16%" align="center" valign="middle" bgcolor="#999999" class="bdr"><strong>Action</strong></td>
  </tr>
<?php 
    function get_package($id)
        {   global $wpdb;
			$rec_list="SELECT * FROM ".$wpdb->prefix."package where order_id='".$id."'";
			$req_list = $wpdb->get_results($rec_list);
			return $req_list;
        }
	$stt = get_package($id);
	if($stt){ 
	$i=1;
	foreach($stt as $inf){
	?>
  <tr>
    <td height="38" align="center" valign="middle" class="bdr"><?php echo $i;$i++;?></td>
    <td align="center" valign="middle" class="bdr"><?php echo $inf->package_name;?></td>
    <td align="center" valign="middle" class="bdr"><?php echo $inf->package_weight;?></td>
    <td align="center" valign="middle" class="bdr"><a ref="<?php echo $inf->pack_id;?>" onclick="javascript: return confirm('Are You sure');" id="del_pack"><i class="fa-solid fa-trash"></i></a></td>
  </tr>
<?php }}?>
</table>    </td>
  </tr>
  <tr>
    <td height="35" colspan="5" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="35" colspan="5" align="center" valign="middle">
 <table width="63%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="30" colspan="4" bgcolor="#CCCCCC" align="center"><strong>PACKAGE CURRENT LOCATION STATUS</strong></td>
  </tr>
  <tr>
    <td width="10%" height="41" bgcolor="#999999" class="bdr"><div align="center"><strong>Sr No</strong></div></td>
    <td width="40%" bgcolor="#999999" class="bdr"><div align="center"><strong>Location </strong></div></td>
    <td width="25%" bgcolor="#999999" class="bdr"><div align="center"><strong>Status </strong></div></td>
    <td width="25%" align="center" valign="middle" bgcolor="#999999" class="style1"><strong>Action</strong></td>
    </tr>
<?php function get_location($id)
        {   
        global $wpdb;
        $rec_list="SELECT * FROM ".$wpdb->prefix."location where order_id='".$id."'";
        $req_list = $wpdb->get_results($rec_list);
        return $req_list;
        }
	 $stt = get_location($id);
        if($stt){ 
        $i=1;
	  foreach($stt as $info){?>
  <tr>
    <td height="38" align="center" valign="middle" class="bdr"><?php echo $i;$i++;?></td>
    <td align="center" valign="middle" class="bdr"><div align="center">&nbsp;&nbsp;<?php echo $info->location_name;?></div>      </td>
     <td align="center" valign="middle" class="bdr"><div align="center">&nbsp;&nbsp;<?php echo $info->status;?></div>      </td>
    <td align="center" valign="middle" class="bdr"><div align="center"><a ref="<?php echo $info->location_id;?>" onclick="javascript: return confirm('Are You sure');" id="loc_del"><i class="fa-solid fa-trash"></i></a></div></td>
    </tr>
<?php }}?>
</table> </td>
  </tr>
</table>

<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
      <div class="popupCloseButton">X</div>
       <table width="93%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30" colspan="3" bgcolor="#CCCCCC"><strong>PACKAGE INFORMATION ADD</strong></td>
      </tr>
      <tr>
        <td width="191" align="center" valign="top"><strong>NAME</strong></td>
        <td width="214" height="23" align="center" valign="top"><strong>Weight</strong></td>
        <td width="148" align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><input type="text" name="packnem" id="packnem" /></td>
        <td height="24" align="center" valign="top"><input type="text" name="weight" id="weight" />
          <input type="hidden" name="oid" id="oid"  value="<?php echo $id;?>"/></td>
        <td align="center" valign="top"><input type="button" name="button" id="add" value="Add Package"  class="button button-primary"/></td>
      </tr>
    </table>
    </div>
</div>
<!----------   Location Popup box----------->
<div class="hover_bkgr_fricc2">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">X</div>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="30%" height="35" align="center" valign="middle" bgcolor="#CCCCCC">Location</td>
        <td width="29%" align="center" valign="middle" bgcolor="#CCCCCC">Status</td>
        <td width="41%" align="center" valign="middle" bgcolor="#CCCCCC">Remarks</td>
        </tr>
      <tr>
        <td height="45" align="center" valign="top"><input type="text" name="location" id="location" /></td>
        <td align="center" valign="top">  <select name="status" id="status">
                <option value="Shipment Picked UP">Shipment picked up</option>
					<option value="Arrived at Sort Facility">Arrived at Sort Facility </option>
					<option value="Package Accept in Sort Facility">Package Accept in Sort Facility</option>
					<option value="Status updated">Status updated</option>
					<option value="Departed Facility">Departed Facility</option>
					<option value="Package Checked By Customs">Package Checked By Customs</option>
					<option value="Pending Insurance">Pending Insurance</option>
					<option value="Transit">Transit</option>
					<option value="On Hold">On Hold</option>
					<option value="Processed">Processed</option>
					<option value="Shipped">Shipped</option>
					<option value="Deliverd">Delivered</option>
					<option value="Sign by Receiver">Sign by Receiver</option>
                </select></td>
        <td align="center" valign="top">
        <input type="hidden" name="oid2" id="oid2"  value="<?php echo $id;?>"/> 
        <input type="button" name="add_addres" id="add_addres" value="Add Location"  class="button button-primary"/></td>
        </tr>
      <tr>
        <td height="27" align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle"></td>
      </tr>
    </table>
    </div>
</div>
<!----- POPUP CLOSE ------->


<div class="hover_bkgr_fricc3">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">X</div>
      <table width="97%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="30%" height="35" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Weight</strong></td>
        <td width="29%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Status</strong></td>
        <td width="41%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Remarks Note</strong></td>
        </tr>
      <tr>
        <td height="45" align="center" valign="top"><input type="text" name="weight" id="weight"  placeholder="Enter Weight In Kg"/></td>
        <td align="center" valign="top">
                <select name="l_status" id="l_status">
                <option value="On Hold">On Hold</option>
                <option value="Processed">Processed</option>
                <option value="Shipped">Shipped</option>
                <option value="Deliverd">Delivered</option>
                </select>
                  </td>
        <td align="left" valign="top"><textarea name="notes" id="notes" cols="50" rows="2" placeholder="Enter Remarks Note"></textarea>
        <input type="hidden" name="wid" id="wid" value="<?php echo $id;?>"/></td>
        </tr>
      <tr>
        <td height="27" align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle"><input type="button" name="change_sts" id="change_sts" value="Update Status"  class="button button-primary"/></td>
      </tr>
    </table>
    </div>
</div>

<script>
$(window).load(function() {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
	 $(".trigger_popup_fricc2").click(function(){
       $('.hover_bkgr_fricc2').show();
    });
	$(".trigger_popup_fricc3").click(function(){
       $('.hover_bkgr_fricc3').show();
    });
	$(".trigger_popup_fricc4").click(function(){
       $('.hover_bkgr_fricc4').show();
    });
    $('.hover_bkgr_fricc').click(function(){ 
		//$('.hover_bkgr_fricc').hide();
 	 });
	 
    $('.popupCloseButton').click(function(){
       $('.hover_bkgr_fricc').hide();
	   $('.hover_bkgr_fricc2').hide();
	   $('.hover_bkgr_fricc3').hide();
	   $('.hover_bkgr_fricc4').hide();
    });
});
</script>