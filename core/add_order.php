<?php global $wpdb;?>
<script src="<?php echo plugins_url( '/jquery-1.11.0.min.js', __FILE__ );?>"></script>
<script>
$(document).ready(function(){
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
		// $('#review').css('display','none');
		// $('.modal-backdrop').css('display','none');
		// location.reload();
		   $('#data').html(req_data);
		   //$('.form-control').find('input:textarea').val('');
		}
	  }); // Ajax Close Here
	
       })

    })

</script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#date_frm" ).datepicker();
    $( "#exp_delivery" ).datepicker();
  });
  
 
  </script>
<table width="94%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="93%" height="49" align="center" valign="middle" bgcolor="#cccccc"><span class="style1"><strong>Add Shipping Order </strong></span></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#E9EBED"><form name="form1" method="post" action="<?php echo plugins_url( '/cd_add_order.php', __FILE__ );?>">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="48%" height="116" align="center" valign="top"><table width="535" border="0">
              <tr>
                <td width="146"><div align="right"><strong>ORDER NO # </strong></div></td>
                <td width="10" height="40">&nbsp;</td>
                <td width="365"><input type="text" name="order_no" id="order_no" required/></td>
              </tr>

            </table>
            <table width="99%" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td height="42" colspan="3" bgcolor="#CCCCCC"><strong style="padding-left:50PX;">Shipping Information</strong></td>
              </tr>
              <tr>
                <td width="30%" height="25" align="right" valign="middle"><div align="right"><strong>Shipping Date</strong></div></td>
                <td width="2%" height="25">&nbsp;</td>
                <td height="40"><input type="text" name="date_frm" id="date_frm" required/></td>
              </tr>
              <tr>
                <td width="30%" height="37" align="right" valign="middle"><div align="right"><strong>Company Name</strong></div></td>
                <td width="2%" height="37">&nbsp;</td>
                <td height="40"><input type="text" name="ship_company" id="ship_company" required/></td>
              </tr>
              <tr>
                <td width="30%" height="40" align="right" valign="top"><div align="right"><strong>Origin Country </strong></div></td>
                <td width="2%" height="40">&nbsp;</td>
                <td height="40"><span class="bdr">
                  <select id="ship_country_origin" name="ship_country_origin">
				  <option value="-Select Country-">--Select Country--<option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote DIvoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="India">India</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                </span></td>
              </tr>
              <tr>
                <td height="40" align="right" valign="top"><div align="right"><strong>Transport Mode </strong></div></td>
                <td height="40">&nbsp;</td>
                <td><select name="trans_mode" id="trans_mode">
				<option value='Air Freight <i class="fa-solid fa-plane-circle-check"></i>'>&nbsp;Air Freight</option>
				<option value='Ocean Freight <i class="fa-solid fa-sailboat"></i>'>Ocean Freight</option>
				<option value='Auto Shipping <i class="fa-solid fa-truck"></i>'>Auto Shipping</option>
                <option value='Train Transport <i class="fa-solid fa-train"></i>'>Train Transport</option>
				</select> </td>
              </tr>
              <tr>
                <td height="40" align="right" valign="top"><strong>Origin Address </strong></td>
                <td height="40">&nbsp;</td>
                <td><textarea name="ship_origin_address" id="ship_origin_address" cols="35" rows="3" required></textarea></td>
              </tr>
              <tr>
                <td height="40" align="right" valign="top">&nbsp;</td>
                <td height="40">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          <td width="2%">&nbsp;</td>
          <td width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="3" align="right" valign="middle"><table width="535" border="0">
                  <tr>
                    <td width="146"><div align="right"><strong>CONTAINER NO :</strong></div></td>
                    <td width="10" height="40">&nbsp;</td>
                    <td width="365"><input type="text" name="container_no" id="container_no" required/></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="42" colspan="3" bgcolor="#CCCCCC"><strong style="padding-left:20px;">Customer Information</strong></td>
            </tr>
			  <tr>
              <td width="30%" height="29"><div align="right"><strong>Expected Dilivery </strong></div></td>
              <td width="2%" height="29">&nbsp;</td>
              <td height="40"><input type="text" name="exp_delivery" id="exp_delivery" required/></td>
            </tr>
            <tr>
              <td width="30%" height="29"><div align="right"><strong>Full Name </strong></div></td>
              <td width="2%" height="29">&nbsp;</td>
              <td height="40"><input type="text" name="dest_full_name" id="dest_full_name" required/></td>
            </tr>
            <tr>
              <td width="30%" height="34"><div align="right"><strong>Email</strong></div></td>
              <td width="2%" height="34">&nbsp;</td>
              <td height="40"><input type="text" name="email_to" id="email_to" /></td>
            </tr>
            <tr>
              <td width="30%" height="31" valign="top"><div align="right"><strong>Phone</strong></div></td>
              <td width="2%" height="31">&nbsp;</td>
              <td height="40" align="left" valign="middle"><input type="text" name="desti_phone" id="desti_phone" required/></td>
            </tr>
            <tr>
              <td height="33" valign="top"><div align="right"><strong>Destination Country </strong></div></td>
              <td height="33">&nbsp;</td>
              <td height="40" align="left" valign="middle"><span class="bdr">
                <select id="desti_country" name="desti_country">
                  <option value="-Select Country-">--Select Country--</option>
                  <option value="Afganistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bonaire">Bonaire</option>
                  <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Canary Islands">Canary Islands</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Channel Islands">Channel Islands</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos Island">Cocos Island</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cote DIvoire">Cote DIvoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Curaco">Curacao</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands">Falkland Islands</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Ter">French Southern Ter</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Great Britain">Great Britain</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Hawaii">Hawaii</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="India">India</option>
                  <option value="Iran">Iran</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea North">Korea North</option>
                  <option value="Korea Sout">Korea South</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Laos">Laos</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libya">Libya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Midway Islands">Midway Islands</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Nambia">Nambia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherland Antilles">Netherland Antilles</option>
                  <option value="Netherlands">Netherlands (Holland, Europe)</option>
                  <option value="Nevis">Nevis</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau Island">Palau Island</option>
                  <option value="Palestine">Palestine</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Phillipines">Philippines</option>
                  <option value="Pitcairn Island">Pitcairn Island</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Republic of Montenegro">Republic of Montenegro</option>
                  <option value="Republic of Serbia">Republic of Serbia</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="St Barthelemy">St Barthelemy</option>
                  <option value="St Eustatius">St Eustatius</option>
                  <option value="St Helena">St Helena</option>
                  <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                  <option value="St Lucia">St Lucia</option>
                  <option value="St Maarten">St Maarten</option>
                  <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                  <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                  <option value="Saipan">Saipan</option>
                  <option value="Samoa">Samoa</option>
                  <option value="Samoa American">Samoa American</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Tahiti">Tahiti</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Erimates">United Arab Emirates</option>
                  <option value="United States of America">United States of America</option>
                  <option value="Uraguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City State">Vatican City State</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                  <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                  <option value="Wake Island">Wake Island</option>
                  <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zaire">Zaire</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
              </span></td>
            </tr>
            <tr>
              <td height="40" valign="top"><div align="right"><strong>Destination Address </strong></div></td>
              <td height="40">&nbsp;</td>
              <td height="40" align="left" valign="middle"><textarea name="desti_address" id="desti_address" cols="35" rows="3" required></textarea></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="19" align="right" valign="middle">&nbsp;</td>
          <td height="19" align="right" valign="middle">&nbsp;</td>
          <td height="19" align="right" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="25" colspan="3" align="center" valign="top">&nbsp;</td>
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
        <td width="7%" height="41" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Srial No.</strong></td>
        <td width="15%" align="center" valign="middle" bgcolor="#CCCCCC"><div align="left"><strong>Order No </strong></div></td>
        <td width="20%" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center"><strong>Full Name</strong></div></td>
        <td width="16%" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center"><strong>Date</strong></div></td>
        <td width="11%" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center"><strong>Shipping Company</strong></div></td>
        <td width="15%" align="center" valign="middle" bgcolor="#CCCCCC"><strong>Origin - Desination</strong></td>
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
        <td height="41" align="center" valign="middle" class="bdr"><?php echo $i; ?></td>
        <td align="center" valign="middle" class="bdr"><?php echo  do_shortcode('[barcode text="'.$inf->order_no.'" size="40" text_size="10" codetype="code128"]');?> <br> <?php echo $inf->order_no; ?></td>
        <td align="center" valign="middle" class="bdr"><?php echo $inf->dest_full_name;?></td>
        <td align="center" valign="middle" class="bdr"><?php echo $inf->ship_date;?></td>
        <td align="center" valign="middle" class="bdr"><?php echo $inf->ship_company;?></td>
        <td align="center" valign="middle" class="bdr"><?php echo $inf->ship_country_origin;?> - <?php echo $inf->dest_country;?></td>
        <td align="center" valign="middle" class="bdr"><a href="<?php echo $url = admin_url()."admin.php?page=order_tracker&&pags=add-loc&&pr_id=".$inf->id;?>" title="Edit Order" style="font-size:15px;"><i class="fa-solid fa-user-pen"></i></a> &nbsp;&nbsp;&nbsp; <a href="<?php echo plugins_url( 'core/del_order.php', dirname(__FILE__) )."?ord_id=".$inf->id;?>" onclick="javascript: return confirm('Are You sure');" title="Delete Order" style="font-size:15px;"><i class="fa-solid fa-trash"></i></a>
		  
		  &nbsp;&nbsp;&nbsp; 
         <a href="javascript:void(0)" title="<?php echo $inf->dest_mail.','.$inf->order_no;?>" id="mail_send<?php echo $i;?>" style="font-size:15px;"><i class="fa fa-envelope"></i></a> 
		  </td>
      </tr>
		<script>
			$('#mail_send<?php echo $i?>').click(function(){ 
				var title = jQuery(this).attr("title");
				const myArray = title.split(",");
				var mail= myArray[0];
				var order_id = myArray[1];
				
  $.ajax({
		type: "POST",
		url: "<?php echo plugins_url( 'mail_send.php', __FILE__ );?>",
		data: { mail: mail, order_id:order_id},
		success: function(req_data)
		{
		  alert('Mail Send Successfully..!!');
        }
	  }); // Ajax Close Here
	 
          })
		</script>
      <?php $i++; } }?>
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
