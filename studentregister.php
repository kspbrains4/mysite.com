<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student registration form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/dataTables.bootstrap.min.css">
   <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/dataTables.bootstrap.min.js"></script>

    <script>
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#basicBootstrapForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
            lastName: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
                }
            },
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});
</script>
    
</head>

<body style="background-color:#24477f;color:#ccccff;"><br><br>

    <div class="container">
<form id="basicBootstrapForm" class="form-horizontal">
    <br><br>
    <fieldset><legend style="color:#ccccff"> STUDENT REGISTRATION FORM</legend>
         <div class="form-group">
            <br><br>
            <label class="col-xs-3 control-label">Student No:</label>
            <div class="col-xs-4">
            <input type="text" class="form-control" name="student_no" placeholder="Enter the student No" autofocus="true" required="" />
        </div>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="lastName" value="STUDENT"  disabled="true" />
        </div>

    </div><br>

      <div class="form-row">
      
      <div class="col-md-3 mb-3">
      <label for="validationCustom03">Student Reg No:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Enter your Student Regostration No." required>
      
    </div>  
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">First Name:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Enter your first name" required>
      
    </div>



    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Last Name:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Enter last name" required>
      
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Contact NO:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Enter contact no" required>
      
    </div></div>

      <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Country</label>
  
                                         <select class="form-control"> 
                                            <option>Select</option>
    <option value="AFG">Afghanistan</option>
    <option value="ALA">Åland Islands</option>
    <option value="ALB">Albania</option>
    <option value="DZA">Algeria</option>
    <option value="ASM">American Samoa</option>
    <option value="AND">Andorra</option>
    <option value="AGO">Angola</option>
    <option value="AIA">Anguilla</option>
    <option value="ATA">Antarctica</option>
    <option value="ATG">Antigua and Barbuda</option>
    <option value="ARG">Argentina</option>
    <option value="ARM">Armenia</option>
    <option value="ABW">Aruba</option>
    <option value="AUS">Australia</option>
    <option value="AUT">Austria</option>
    <option value="AZE">Azerbaijan</option>
    <option value="BHS">Bahamas</option>
    <option value="BHR">Bahrain</option>
    <option value="BGD">Bangladesh</option>
    <option value="BRB">Barbados</option>
    <option value="BLR">Belarus</option>
    <option value="BEL">Belgium</option>
    <option value="BLZ">Belize</option>
    <option value="BEN">Benin</option>
    <option value="BMU">Bermuda</option>
    <option value="BTN">Bhutan</option>
    <option value="BOL">Bolivia, Plurinational State of</option>
    <option value="BES">Bonaire, Sint Eustatius and Saba</option>
    <option value="BIH">Bosnia and Herzegovina</option>
    <option value="BWA">Botswana</option>
    <option value="BVT">Bouvet Island</option>
    <option value="BRA">Brazil</option>
    <option value="IOT">British Indian Ocean Territory</option>
    <option value="BRN">Brunei Darussalam</option>
    <option value="BGR">Bulgaria</option>
    <option value="BFA">Burkina Faso</option>
    <option value="BDI">Burundi</option>
    <option value="KHM">Cambodia</option>
    <option value="CMR">Cameroon</option>
    <option value="CAN">Canada</option>
    <option value="CPV">Cape Verde</option>
    <option value="CYM">Cayman Islands</option>
    <option value="CAF">Central African Republic</option>
    <option value="TCD">Chad</option>
    <option value="CHL">Chile</option>
    <option value="CHN">China</option>
    <option value="CXR">Christmas Island</option>
    <option value="CCK">Cocos (Keeling) Islands</option>
    <option value="COL">Colombia</option>
    <option value="COM">Comoros</option>
    <option value="COG">Congo</option>
    <option value="COD">Congo, the Democratic Republic of the</option>
    <option value="COK">Cook Islands</option>
    <option value="CRI">Costa Rica</option>
    <option value="CIV">Côte d'Ivoire</option>
    <option value="HRV">Croatia</option>
    <option value="CUB">Cuba</option>
    <option value="CUW">Curaçao</option>
    <option value="CYP">Cyprus</option>
    <option value="CZE">Czech Republic</option>
    <option value="DNK">Denmark</option>
    <option value="DJI">Djibouti</option>
    <option value="DMA">Dominica</option>
    <option value="DOM">Dominican Republic</option>
    <option value="ECU">Ecuador</option>
    <option value="EGY">Egypt</option>
    <option value="SLV">El Salvador</option>
    <option value="GNQ">Equatorial Guinea</option>
    <option value="ERI">Eritrea</option>
    <option value="EST">Estonia</option>
    <option value="ETH">Ethiopia</option>
    <option value="FLK">Falkland Islands (Malvinas)</option>
    <option value="FRO">Faroe Islands</option>
    <option value="FJI">Fiji</option>
    <option value="FIN">Finland</option>
    <option value="FRA">France</option>
    <option value="GUF">French Guiana</option>
    <option value="PYF">French Polynesia</option>
    <option value="ATF">French Southern Territories</option>
    <option value="GAB">Gabon</option>
    <option value="GMB">Gambia</option>
    <option value="GEO">Georgia</option>
    <option value="DEU">Germany</option>
    <option value="GHA">Ghana</option>
    <option value="GIB">Gibraltar</option>
    <option value="GRC">Greece</option>
    <option value="GRL">Greenland</option>
    <option value="GRD">Grenada</option>
    <option value="GLP">Guadeloupe</option>
    <option value="GUM">Guam</option>
    <option value="GTM">Guatemala</option>
    <option value="GGY">Guernsey</option>
    <option value="GIN">Guinea</option>
    <option value="GNB">Guinea-Bissau</option>
    <option value="GUY">Guyana</option>
    <option value="HTI">Haiti</option>
    <option value="HMD">Heard Island and McDonald Islands</option>
    <option value="VAT">Holy See (Vatican City State)</option>
    <option value="HND">Honduras</option>
    <option value="HKG">Hong Kong</option>
    <option value="HUN">Hungary</option>
    <option value="ISL">Iceland</option>
    <option value="IND">India</option>
    <option value="IDN">Indonesia</option>
    <option value="IRN">Iran, Islamic Republic of</option>
    <option value="IRQ">Iraq</option>
    <option value="IRL">Ireland</option>
    <option value="IMN">Isle of Man</option>
    <option value="ISR">Israel</option>
    <option value="ITA">Italy</option>
    <option value="JAM">Jamaica</option>
    <option value="JPN">Japan</option>
    <option value="JEY">Jersey</option>
    <option value="JOR">Jordan</option>
    <option value="KAZ">Kazakhstan</option>
    <option value="KEN">Kenya</option>
    <option value="KIR">Kiribati</option>
    <option value="PRK">Korea, Democratic People's Republic of</option>
    <option value="KOR">Korea, Republic of</option>
    <option value="KWT">Kuwait</option>
    <option value="KGZ">Kyrgyzstan</option>
    <option value="LAO">Lao People's Democratic Republic</option>
    <option value="LVA">Latvia</option>
    <option value="LBN">Lebanon</option>
    <option value="LSO">Lesotho</option>
    <option value="LBR">Liberia</option>
    <option value="LBY">Libya</option>
    <option value="LIE">Liechtenstein</option>
    <option value="LTU">Lithuania</option>
    <option value="LUX">Luxembourg</option>
    <option value="MAC">Macao</option>
    <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
    <option value="MDG">Madagascar</option>
    <option value="MWI">Malawi</option>
    <option value="MYS">Malaysia</option>
    <option value="MDV">Maldives</option>
    <option value="MLI">Mali</option>
    <option value="MLT">Malta</option>
    <option value="MHL">Marshall Islands</option>
    <option value="MTQ">Martinique</option>
    <option value="MRT">Mauritania</option>
    <option value="MUS">Mauritius</option>
    <option value="MYT">Mayotte</option>
    <option value="MEX">Mexico</option>
    <option value="FSM">Micronesia, Federated States of</option>
    <option value="MDA">Moldova, Republic of</option>
    <option value="MCO">Monaco</option>
    <option value="MNG">Mongolia</option>
    <option value="MNE">Montenegro</option>
    <option value="MSR">Montserrat</option>
    <option value="MAR">Morocco</option>
    <option value="MOZ">Mozambique</option>
    <option value="MMR">Myanmar</option>
    <option value="NAM">Namibia</option>
    <option value="NRU">Nauru</option>
    <option value="NPL">Nepal</option>
    <option value="NLD">Netherlands</option>
    <option value="NCL">New Caledonia</option>
    <option value="NZL">New Zealand</option>
    <option value="NIC">Nicaragua</option>
    <option value="NER">Niger</option>
    <option value="NGA">Nigeria</option>
    <option value="NIU">Niue</option>
    <option value="NFK">Norfolk Island</option>
    <option value="MNP">Northern Mariana Islands</option>
    <option value="NOR">Norway</option>
    <option value="OMN">Oman</option>
    <option value="PAK">Pakistan</option>
    <option value="PLW">Palau</option>
    <option value="PSE">Palestinian Territory, Occupied</option>
    <option value="PAN">Panama</option>
    <option value="PNG">Papua New Guinea</option>
    <option value="PRY">Paraguay</option>
    <option value="PER">Peru</option>
    <option value="PHL">Philippines</option>
    <option value="PCN">Pitcairn</option>
    <option value="POL">Poland</option>
    <option value="PRT">Portugal</option>
    <option value="PRI">Puerto Rico</option>
    <option value="QAT">Qatar</option>
    <option value="REU">Réunion</option>
    <option value="ROU">Romania</option>
    <option value="RUS">Russian Federation</option>
    <option value="RWA">Rwanda</option>
    <option value="BLM">Saint Barthélemy</option>
    <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
    <option value="KNA">Saint Kitts and Nevis</option>
    <option value="LCA">Saint Lucia</option>
    <option value="MAF">Saint Martin (French part)</option>
    <option value="SPM">Saint Pierre and Miquelon</option>
    <option value="VCT">Saint Vincent and the Grenadines</option>
    <option value="WSM">Samoa</option>
    <option value="SMR">San Marino</option>
    <option value="STP">Sao Tome and Principe</option>
    <option value="SAU">Saudi Arabia</option>
    <option value="SEN">Senegal</option>
    <option value="SRB">Serbia</option>
    <option value="SYC">Seychelles</option>
    <option value="SLE">Sierra Leone</option>
    <option value="SGP">Singapore</option>
    <option value="SXM">Sint Maarten (Dutch part)</option>
    <option value="SVK">Slovakia</option>
    <option value="SVN">Slovenia</option>
    <option value="SLB">Solomon Islands</option>
    <option value="SOM">Somalia</option>
    <option value="ZAF">South Africa</option>
    <option value="SGS">South Georgia and the South Sandwich Islands</option>
    <option value="SSD">South Sudan</option>
    <option value="ESP">Spain</option>
    <option value="LKA">Sri Lanka</option>
    <option value="SDN">Sudan</option>
    <option value="SUR">Suriname</option>
    <option value="SJM">Svalbard and Jan Mayen</option>
    <option value="SWZ">Swaziland</option>
    <option value="SWE">Sweden</option>
    <option value="CHE">Switzerland</option>
    <option value="SYR">Syrian Arab Republic</option>
    <option value="TWN">Taiwan, Province of China</option>
    <option value="TJK">Tajikistan</option>
    <option value="TZA">Tanzania, United Republic of</option>
    <option value="THA">Thailand</option>
    <option value="TLS">Timor-Leste</option>
    <option value="TGO">Togo</option>
    <option value="TKL">Tokelau</option>
    <option value="TON">Tonga</option>
    <option value="TTO">Trinidad and Tobago</option>
    <option value="TUN">Tunisia</option>
    <option value="TUR">Turkey</option>
    <option value="TKM">Turkmenistan</option>
    <option value="TCA">Turks and Caicos Islands</option>
    <option value="TUV">Tuvalu</option>
    <option value="UGA">Uganda</option>
    <option value="UKR">Ukraine</option>
    <option value="ARE">United Arab Emirates</option>
    <option value="GBR">United Kingdom</option>
    <option value="USA">United States</option>
    <option value="UMI">United States Minor Outlying Islands</option>
    <option value="URY">Uruguay</option>
    <option value="UZB">Uzbekistan</option>
    <option value="VUT">Vanuatu</option>
    <option value="VEN">Venezuela, Bolivarian Republic of</option>
    <option value="VNM">Viet Nam</option>
    <option value="VGB">Virgin Islands, British</option>
    <option value="VIR">Virgin Islands, U.S.</option>
    <option value="WLF">Wallis and Futuna</option>
    <option value="ESH">Western Sahara</option>
    <option value="YEM">Yemen</option>
    <option value="ZMB">Zambia</option>
    <option value="ZWE">Zimbabwe</option> 
            </select>      
    </div>
    
    <div class="col-md-3 mb-3">
      <label for="home_district">Home District:</label>
      <select class="form-control" name="home_district" id="home_district">

    <option value="">Select</option>
<option value="Abim">Abim</option>
    <option value="Adjumani">Adjumani</option>
    <option value="Agago">Agago</option>
    <option value="Alebtong">Alebtong</option>
    <option value="Amolatar">Amolatar</option>
    <option value="Amudat">Amudat</option>
    <option value="Amuria">Amuria</option>
    <option value="Amuru">Amuru</option>
    <option value="Apac">Apac</option>
     <option value="Arua">Arua</option>
      <option value="Budaka">Budaka</option>
       <option value="Bugweri">Bugweri</option>
    <option value="Bududa">Bududa</option>
    <option value="Bugiri">Bugiri</option>
    <option value="Bukedea">Bukedea</option>
    <option value="Bukwa">Bukwa</option>
    <option value="Bulambuli">Bulambuli</option>
    <option value="Busia">Busia</option>
    <option value="Butaleja">Butaleja</option>
    <option value="Buyende">Buyende</option>
    <option value="Buikwe">Buikwe</option>
    <option value="Bukomansimbi">Bukomansimbi</option>
    <option value="Butambala">Butambala</option>
    <option value="Buvuma">Buvuma</option>
    <option value="Buhweju">Buhweju</option>
    <option value="Buliisa">Buliisa</option>
    <option value="Bundibugy">Bundibugyo</option>
    <option value="Bushenyi">Bushenyi</option>
    <option value="Butebo">Butebo</option>
    <option value="Bunyangabu">Bunyangabu</option>
    <option value="Dokolo">Dokolo</option>
    <option value="Gomba">Gomba</option>
    <option value="Gulu">Gulu</option>
    <option value="Hoima">Hoima</option>
    <option value="Iganga">Iganga</option>
    <option value="Ibanda">Ibanda</option>
    <option value="Isingiro">Isingiro</option>
    <option value="Jinja">Jinja</option>
     <option value="Kalangala">Kalangala</option>
    <option value="Kalungu">Kalungu</option>
    <option value="Kampala">Kampala</option>
    <option value="Kayunga">Kayunga</option>
    <option value="Kiboga">Kiboga</option>
    <option value="Kyankwanzi">Kyankwanzi</option>
    <option value="Kaberamaido">Kaberamaido</option>
    <option value="Kaliro">Kaliro</option>
    <option value="Kamuli">Kamuli</option>
    <option value="Kapchorwa">Kapchorwa</option>
    <option value="Katakwi">Katakwi</option>
    <option value="Kibuku">Kibuku</option>
    <option value="Kumi">Kumi</option>
    <option value="Kween">Kween</option>
     <option value="Kaabong" >Kaabong</option>
    <option value="Kitgum">Kitgum</option>
    <option value="Koboko">Koboko</option>
    <option value="Kole">Kole</option>
    <option value="Kotido">Kotido</option>
    <option value="Kabale">Kabale</option>
    <option value="Kabarole">Kabarole</option>
    <option value="Kamwenge">Kamwenge</option>
      <option value="Kanungu">Kanungu</option>
    <option value="Kasese">Kasese</option>
    <option value="Kibaale">Kibaale</option>
    <option value="Kiruhura">Kiruhura</option>
    <option value="Kiryandongo">Kiryandongo</option>
    <option value="Kisoro">Kisoro</option>
    <option value="Kyegegwa">Kyegegwa</option>
    <option value="Kyenjojo">Kyenjojo</option>
     <option value="Kagadi">Kagadi</option>
    <option value="Kakumiro">Kakumiro</option>
     <option value="Kasanda">Kasanda</option>
    <option value="Kwania">Kwania</option>
    <option value="Kapelebyong">Kapelebyong</option>
    <option value="Kibuube">Kibuube</option>
<option value="Karenga">Karenga</option>
   <option value="Kazo">Kazo</option>
<option value="Kitagwenda">Kitagwenda</option>
  <option value="Kyotera">Kyotera</option>
   <option value="Lamwo">Lamwo</option>
<option value="Lusot">Lusot</option>
    <option value="Lira">Lira</option>
    <option value="Luuka">Luuka</option>
    <option value="Luweero">Luweero</option>
    <option value="Lwengo">Lwengo</option>
    <option value="Lyantonde">Lyantonde</option>
    <option value="Masaka">Masaka</option>
<option value="Madi-Okollo">Madi-Okollo</option>
    <option value="Mityana">Mityana</option>
      <option value="Mpigi">Mpigi</option>
    <option value="Mubende">Mubende</option>
    <option value="Masindi">Masindi</option>
    <option value="Mbarara">Mbarara</option>
    <option value="Mitooma">Mitooma</option>
    <option value="Mukono">Mukono</option>
       <option value="Manafwa">Manafwa</option>
    <option value="Mayuge">Mayuge</option>
    <option value="Mbale">Mbale</option>
      <option value="Maracha">Maracha</option>
    <option value="Moroto">Moroto</option>
    <option value="Moyo">Moyo</option>
    <option value="Nakapiripirit">Nakapiripirit</option>
    <option value="Napak">Napak</option>
     <option value="Namayingo">Namayingo</option>
      <option value="Ngora">Ngora</option>
    <option value="Namutumba">Namutumba</option>
    <option value="Nebbi">Nebbi</option>
    <option value="Nakaseke">Nakaseke</option>
    <option value="Nakasongola">Nakasongola</option>
    <option value="Nwoya">Nwoya</option>
<option value="Ntoroko">Ntoroko</option>
    <option value="Ntungamo">Ntungamo</option>
 <option value="Namisindwa">Namisindwa</option>
    <option value="Nabilatuk">Nabilatuk</option>
<option value="Obongi">Obongi</option>
      <option value="Otuke">Otuke</option>
    <option value="Oyam">Oyam</option>
  <option value="Pakwach">Pakwach</option>
    <option value="Pallisa">Pallisa</option>
     <option value="Pader">Pader</option>
    <option value="Rakai">Rakai</option>
      <option value="Rubanda">Rubanda</option>
 <option value="Rukiga">Rukiga</option>
 <option value="Rwampara">Rwampara</option>
    <option value="Rubirizi">Rubirizi</option>
    <option value="Rukungiri">Rukungiri</option>
    <option value="Sheema">Sheema</option>
    <option value="Serere">Serere</option>
    <option value="Sironko">Sironko</option>
    <option value="Soroti">Soroti</option>
    <option value="Ssembabule">Ssembabule</option>
    <option value="Tororo">Tororo</option>
    <option value="Wakiso">Wakiso</option>
<option value="Yumbe">Yumbe</option>
    <option value="Zombo">Zombo</option>
    <option value="Other">Other</option>

</select>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom05">NIN NO:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Enter the national id no" required>
      
    </div></div>
      <div class="form-row">
    
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Passport Photo:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="your photo" required>
      
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Marital Status:</label>
      <select class="form-control"> 
    <option>Select</option>
    <option value="ALA">Single</option>
    <option value="ALB">Married</option>
    <option value="ALB">In Relationship</option>
    <option value="ALB">Other</option>
    
     
                                            </select>
      
    </div></div>
      <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Email Address</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Enter  email address" required>
      
    </div>
    
    </div>

      <div class="form-row">
<div class="col-md-3 mb-3">
      <label for="validationCustom03">Study time:</label>
       <select class="form-control"> 
            
            <option>Select</option>
    <option value="DAY">DAY</option>
    <option value="EVE">EVE</option>
    <option value="OTHERS">OTHERS</option>
         </select>
      
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Program:</label>
       <select class="form-control"> 
            
            <option>Select</option>
    <option value="BITC">BITC</option>
    <option value="BIS">BIS</option>
    <option value="DCS">DCS</option>
    <option value="BTCT">BTCT</option>
    <option value="TEHNOLOGY CHEMISTRY">TEHNOLOGY CHEMISTRY</option>
    <option value="TEHNOLOGY BIOLOGY">TEHNOLOGY BIOLOGY</option>
    <option value="TEHNOLOGY PHYSICS">TEHNOLOGY PHYSICS</option>
    <option value="ALB">OTHERS</option>
         </select>
      
    </div>
    
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Date Of Birth:</label>
      <input type="Date" class="form-control" id="validationCustom05" placeholder="Enter date of birth" required>
      
    </div>

<div class="col-md-3 mb-3">
      <label for="validationCustom05">Password:</label>
      <input type="password" maxlength="15" class="form-control" id="validationCustom05" placeholder="Enter password" required>
      </div>
      <div class="col-md-3 mb-3">
      <label for="validationCustom05">Confirm Password:</label>
      <input type="password" maxlength="15" class="form-control" id="validationCustom05" placeholder="Enter password" required>
      </div>

</div>


 
       <div class="col-md-3 mb-3">
       <div class="form-group">
        <label class="col-xs-3 control-label">Gender</label>
        <div class="col-xs-6">
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="male" /> Male
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="female" /> Female
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="other" /> Other
                </label>
            </div>
        </div>
    </div>

    </div>

</div>


  
<div class="container">
    <div class="form-group">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" value="agree" /> Agree with the terms and conditions
                </label>
            </div>
        </div>
    </div>
<br><br>

<br><br>
    <div class="form-group reg">
        <div class="row">
        <div class="col-xs-12  col-lg-12">
            <button type="submit" class="btn btn-success btn-lg btn-block"> Register Now</button>
        </div>
    </div></div></div>
    </fieldset>

<style type="text/css">

.reg {
    margin-left: 10em;
    margin-right: 15em;

   
}


    </style>
    
</form>


</div>

</body>
</html>