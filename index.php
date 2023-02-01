<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Multi Page Registration Form</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
	<style>
  ul#stepForm, ul#stepForm li {
    margin: 0;
    padding: 0;
  }
  ul#stepForm li {
    list-style: none outside none;
  } 
  label{margin-top: 10px;}
  .help-inline-error{color:red;}
</style>
  </head>
  <body>
  
  <br />
  <br />
  <br />
    <div class="container">
      <div class="page-header">
        <h1>Multi Page Registration Form</h1>
      </div>
      <div class="clearfix"></div>
<div class="container" style="padding-left: 0px; padding-right: 15px;">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Complete this form in 3 steps!</h3>
    </div>
    <div class="panel-body">
      <form name="basicform" id="basicform" method="post" action="index.php" enctype="multipart/form-data">
        
        <div id="sf1" class="frm">
          <fieldset>
            <legend>Step 1 of 3</legend>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Name:<span style="color: red !important; display: inline; float: none;">*</span> </label>
              <div class="col-lg-6" style="display:flex;">
                <input type="text" style= "flex: 1; margin-right: 20px;" placeholder="Your First Name" id="uname" name="fname" class="form-control" autocomplete="off" required >
                <input type="text" style= "flex: 1;" placeholder="Your Last Name" id="lname" name="lname" class="form-control" autocomplete="off" required >
              </div>
            </div>
            <br /><br><br>
            <div class="form-group"style="height: 10px;clear: both;" required>
              <label class="col-lg-2 control-label" for="dob">Date of Birth <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="date" placeholder="Your Date of birth" id="dob" name="dob" class="form-control" autocomplete="off">
              </div>
            </div><br><br>
             <!-- <div class="input-group">
        <input type="text" class="form-control input-sm" value="input 1 " />
        <span class="input-group-btn" style="width:150px;"></span>
        <input type="text" class="form-control 
                input-sm" value="input 2" />
    </div>-->
    <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uname">Father's Name: <span style="color: red !important; display: inline; float: none;">*</span> </label>
              <div class="col-lg-6" style="display:flex;">
                <input type="text" style= "flex: 1; margin-right: 20px;" placeholder="Father's First Name" id="fafname" name="fafname" class="form-control" autocomplete="off" required >
                <input type="text" style= "flex: 1;" placeholder="Father's Last Name" id="falname" name="falname" class="form-control" autocomplete="off" required >
              </div>
            </div>
            <br />
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uname">Mother's Name: <span style="color: red !important; display: inline; float: none;">*</span> </label>
              <div class="col-lg-6" style="display:flex;">
                <input type="text" style= "flex: 1; margin-right: 20px;" placeholder="Mother's First Name" id="mofname" name="mofname" class="form-control" autocomplete="off" required >
                <input type="text" style= "flex: 1;" placeholder="Mother's Last Name" id="mollname" name="molname" class="form-control" autocomplete="off" required >
              </div>
            </div>
              
            <br />
            <br>
            <br>

			 <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Your Email: <span style="color: red !important; display: inline; float: none;">*</span> </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Your Email" id="uemail" name="uemail" class="form-control" autocomplete="off">
              </div>
            </div>
          <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group">
              <div class="round">
              <label class="col-lg-2 control-label" for="uemail">Gender: <span style="color: red !important; display: inline; float: none;">*</span> </label>
			    <div class="col-sm-6">
			    <label>
			    <input type="radio" name="type" id="optionsRadios1" value="male" checked> Male
			    </label>
			  	<label>
			    <input type="radio" name="type" id="optionsRadios1" value="female"> Female
			    </label>
          </div>
          </div>
          </div>
         <div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group" style="height: 10px;clear: both;"></div>
			 <div class="form-group" required>
              <label class="col-lg-2 control-label" for="nationality">Nationality: <span style="color: red !important; display: inline; float: none;">*</span> </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Enter your Nationality" id="uname" name="nationality" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 5px;clear: both;"></div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
			<div class="form-group" style="height: 10px;clear: both;"></div>
			 <div class="form-group">
              <label class="col-lg-2 control-label" for="nationality">Address: <span style="color: red !important; display: inline; float: none;">*</span> </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Enter your Address" id="uname" name="address" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 5px;clear: both;"></div>

            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uname"> </label>
              <div class="col-lg-6" style="display:flex;">
                <input type="text" style= "flex: 1; margin-right: 20px;" placeholder="City" id="city" name="city" class="form-control" autocomplete="off" required >
                <select id="country" style= "flex: 1;" placeholder="country" id="falname" name="country" class="form-control" autocomplete="off" required >
                <option>country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
              </div>
            </div>

			<!--<div class="form-group" style="height: 10px;clear: both;"></div>
			 <div class="form-group">
              <label class="col-lg-2 control-label" for="address">Home Address: <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="text" placeholder="" id="uname" name="city" class="form-control" autocomplete="off">
                <div class="col-sm-6">
                <input type="text" placeholder="city" id="uname" name="country" class="form-control" autocomplete="off"><span> </span><select id="country" name="country" class="form-control">
                 <option>country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
              </div>
            </div>-->
            <div class="form-group" style="height: 5px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Telephone No (Moblie):</label>
              <div class="col-lg-6">
                <input type="tel" placeholder="Enter Your Mobile Number" minlength="10" maxlength="10" pattern="[0-9]{10}"id="uname" name="mob" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="form-group" style="height: 10px;clear: both;"></div>
			<div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Telephone No (Telephone):</label>
              <div class="col-lg-6">
                <input type="tel" placeholder="Enter Your Telephone Number" minlength="6" maxlength="10" pattern="[0-9]{10}"id="uname" name="tnumber" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
			
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-success open1" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf2" class="frm" style="display: none;">
          <fieldset>
            <legend>Step 2 of 3</legend>


			<div class="form-group" required>
              <label class="col-lg-2 control-label" for="inst">HSC Institution Name: <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="text" placeholder="Institute Name" id="inst" name="inst" class="form-control" autocomplete="off">
              </div>
            </div>
			
			 <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uemail">HSC Board: <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
              <div class="col-sm-6">
			    <label>
			    <input type="radio" name="board" id="optionsRadios1" value="CBSE" checked> CBSE
			    </label>
			  	<label>
			    <input type="radio" name="board" id="optionsRadios1" value="ICSC"> ICSC
			    </label>
          <label>
			    <input type="radio" name="board" id="optionsRadios1" value="STATE BOARD"> STATE BOARD
			    </label>
          </div>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="inst">Percentage (10th): <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="number" placeholder="10th percentage" id="inst" name="per" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="inst">SSC Institution Name: <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="text" placeholder="SSC Institute" id="sscinst" name="sscinst" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uemail">SSC Board <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
              <div class="col-sm-6">
			    <label>
			    <input type="radio" name="sscboard" id="optionsRadios1" value="CBSE" checked> CBSE
			    </label>
			  	<label>
			    <input type="radio" name="sscboard" id="optionsRadios1" value="ICSC"> ICSC
			    </label>
          <label>
			    <input type="radio" name="sscboard" id="optionsRadios1" value="STATE BOARD"> STATE BOARD
			    </label>
          </div>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="inst">Percentage (12th/SSC): <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="number" placeholder="SSC percentage" id="inst" name="sscper" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="curpursuing">Currently Pursuing: <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="text" placeholder="Currently Pursuing" id="curpursuing" name="curpursuing" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="curpursuing">Current Educational Institute Name: <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="text" placeholder="Current educational Institute name" id="cei" name="cei" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="curpursuing">Overall Percentage <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="number" placeholder="Overall Percentage" id="cei" name="op" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="curpursuing">Current Backlogs if/any <if>
              <any></any> <span style="color: red !important; display: inline; float: none;">*</span></label>
              <div class="col-lg-6">
                <input type="number" placeholder="Current Backlogs" id="cei" name="cb" class="form-control" autocomplete="off">
              </div>
            </div>

            



            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back2" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success open2" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf3" class="frm" style="display: none;">
          <fieldset>
            <legend>Step 3 of 3</legend>

            <div class="clearfix" style="height: 10px;clear: both;"></div>
				 <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uemail">Recent Passport Size Photo (Size less than 4mb) :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="image" class="btn btn-success form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uemail">HSC MarkSheet (Size less than 4mb) :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="file" class="btn btn-success form-control" autocomplete="off">
              </div>
            </div>

            <div class="form-group" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uemail">SSC MarkSheet (Size less than 4mb) :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="file2" class="btn btn-success form-control" autocomplete="off">
              </div>
            </div>

            <div class="form-group" style="height: 10px;clear: both;"></div>
            <div class="form-group" required>
              <label class="col-lg-2 control-label" for="uemail">All Semester MarkSheet (PDF or DOC) (Size less than 4mb) :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="file3" class="btn btn-success form-control" autocomplete="off">
              </div>
            </div>
            <!--<div class="form-group" style="height: 10px;clear: both;"></div>
            
            <div class="form-group" style="height: 10px;clear: both;"></div>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">SSC MarkSheet :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="file2" class="btn btn-success form-control" autocomplete="off">
              </div>
            </div>
            <div class="form-group" style="height: 10px;clear: both;"></div>

            <div class="form-group" style="height: 10px;clear: both;"></div>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">All Semester MarkSheet :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="file3" class="btn btn-success form-control" autocomplete="off">
              </div>
            </div>-->
            <div class="form-group" style="height: 10px;clear: both;"></div>


            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success" type="submit" name="submit">Submit </button> 
                <img src="images/spinner.gif" alt="" id="loader" style="display: none">
              </div>
            </div>

          </fieldset>
        </div>
      </form>
    </div>
  </div>


</div>
<?php 
include ("post.php");
?>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
  
  jQuery().ready(function() {

    // validate form on keyup and submit
    var v = jQuery("#basicform").validate({
      rules: {
		    fname: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        u_name: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        uemail: {
          required: true,
          minlength: 2,
          email: true,
          maxlength: 100,
        },
        address: {
          required: true,
        },
        fafname: {
          required: true,
          minlength: 2,
          maxlength: 15,
        },
        moffname: {
          required: true,
          minlength: 2,
          maxlength: 15,
        },

      },
      errorElement: "span",
      errorClass: "help-inline-error",
    });

    $(".open1").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf2").show("slow");
      }
    });

    $(".open2").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf3").show("slow");
      }
    });
    
    $(".open3").click(function() {
      if (v.form()) {
        $("#loader").show();
         setTimeout(function(){
           $("#basicform").html('<h2>Thanks for your time.</h2>');
         }, 1000);
        return false;
      }
    });
    
    $(".back2").click(function() {
      $(".frm").hide("fast");
      $("#sf1").show("slow");
    });

    $(".back3").click(function() {
      $(".frm").hide("fast");
      $("#sf2").show("slow");
    });

  });
</script>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
