<table width="99%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="13%" height="49" align="center" valign="middle" bgcolor="#3399FF"><span class="style1">Order No</span></td>
          <td width="39%" align="center" valign="middle" bgcolor="#3399FF"><span class="style1">Adderss</span></td>
          <td width="9%" align="center" valign="middle" bgcolor="#3399FF"><span class="style1">Status</span></td>
          <td width="14%" align="center" valign="middle" bgcolor="#3399FF"><span class="style1">City </span></td>
          <td width="12%" align="center" valign="middle" bgcolor="#3399FF"><span class="style1">Date</span></td>
          <td width="13%" align="center" valign="middle" bgcolor="#3399FF"><span class="style1">Action</span></td>
        </tr>
		<?php 
        function get_requests()
        {   
        global $wpdb;
        $rec_list="SELECT * FROM tracker ORDER BY id DESC";
        $req_list = $wpdb->get_results($rec_list);
        return $req_list;
        }
        
        $stt = get_requests();
        if($stt){ 
        $i=1;
        foreach($stt as $inf)
        { ?>
        
      <tr>
        <td height="49" align="center" valign="middle" bgcolor="#FFFFFF" class="bdr"><?php echo $inf->ord_no;?></td>
          <td align="left" valign="top" bgcolor="#FFFFFF" class="bdr">&nbsp;</td>
          <td align="center" valign="middle" bgcolor="#FFFFFF" class="bdr">Processed</td>
          <td align="center" valign="middle" bgcolor="#FFFFFF" class="bdr">Los anglis </td>
          <td align="center" valign="middle" bgcolor="#FFFFFF" class="bdr"><?php echo $inf->date;?></td>
          <td align="center" valign="middle" bgcolor="#FFFFFF" class="bdr">    <a href="<?php echo $url = admin_url()."admin.php?page=order_tracker&amp;&amp;pg=order-page&amp;&amp;pr_id=".$inf->id;?>">Add</a>| <a href="<?php echo plugins_url( '/del_order.php?id='.$inf->id, __FILE__ );?>" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
   <?php }}?>
    </table>