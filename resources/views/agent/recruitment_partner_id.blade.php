@extends('layouts.agent_app')
@section('content') 


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-3">
                    <div class="partner-id-number">
                        <h3>Recruitment Partner ID: 0000000</h3>
                    </div>

                    <hr/>
                    
                    <div class="partner-main-box">
                         
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="general_information_tab" data-bs-toggle="pill" data-bs-target="#general_information" type="button" role="tab" aria-controls="general_information" aria-selected="true">General Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="banking_information_tab" data-bs-toggle="pill" data-bs-target="#banking_information" type="button" role="tab" aria-controls="banking_information" aria-selected="false">Banking Information</button>
                            </li>
                            <!--<li class="nav-item" role="presentation">-->
                            <!--    <button class="nav-link" id="school_commissions_tab" data-bs-toggle="pill" data-bs-target="#school_commissions" type="button" role="tab" aria-controls="school_commissions" aria-selected="false">School Commissions</button>-->
                            <!--</li> -->
                             
                            <!--<li class="nav-item" role="presentation">-->
                            <!--    <button class="nav-link" id="commission_policy_tab" data-bs-toggle="pill" data-bs-target="#commission_policy" type="button" role="tab" aria-controls="commission_policy" aria-selected="false">Commission Policy</button>-->
                            <!--</li>-->
                        </ul>
                        <?php
                        if(Session::get('account_updated') !== null){
                            echo '<div class="alert alert-success" role="alert">';
                            ?>
                            {{Session::get('account_updated')}}
                            <?php 
                            echo '</div>'; 
                        }
                        ?>


                        
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="general_information" role="tabpanel" aria-labelledby="general_information_tab"> 
                                <div class="main-partner-box"> 
                                    <div class="partner-content">
                                        
                                        <h6>Your Recruitment Partner ID: 511864</h6>
                                        <h4>General Information</h4>
            
                                        <div class="recruitment-partner-logo"> 
                                            
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url(/assetsAgent/img/logo.png);">
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>

                                        <div class="form-group">
                                            <label>Business Certificate/Passport</label>
                                        </div>
                                        
                                        <div class="upload__box">
                                            <div class="upload__btn-box">
                                                <label class="upload__btn form-control">
                                                    <p><i class="fa-solid fa-download"></i> Upload images</p>
                                                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile" >
                                                </label>
                                            </div>
                                            <div class="upload__img-wrap"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Company Name <span class="red">*</span> </label>
                                            <input type="text" class="form-control" value="UNITRAVEL" />
                                        </div>

                                        <div class="form-group">
                                            <label>Website </label>
                                            <input type="url" class="form-control" value="www.enrolhere.com" />
                                        </div>

                                        <div class="form-group">
                                            <label>Skype ID </label>
                                            <input type="numbar" class="form-control" value="+91-78889-04210" />
                                        </div>

                                        <h2>Contact Information</h2>

                                        <div class="form-group">
                                            <label>Legal First Name <span class="red">*</span> </label>
                                            <input type="text" class="form-control" value="Moga" />
                                        </div>

                                        <div class="form-group">
                                            <label>Legal Last Name </label>
                                            <input type="text" class="form-control" value="Office" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email <span class="red">*</span> </label>
                                            <input type="email" class="form-control" value="moga@unitravel.in" />
                                        </div>

                                        <div class="form-group">
                                            <label>Phone <span class="red">*</span> </label>
                                            <input type="number" class="form-control" value="+91-721-6767-031" />
                                        </div>

                                        <div class="form-group">
                                            <label>Cellphone  </label>
                                            <input type="number" class="form-control" value="+91-788-8904-210" />
                                        </div>

                                        <div class="form-group">
                                            <label>Main Source of Students <span class="red">*</span> </label>
                                            <!--<input type="text" class="form-control" value="India" />-->
                                            <select name="country" class="form-select">
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
                                                <option value="India" selected>India</option>
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

                                        <div class="form-group">
                                            <label>Country  <span class="red">*</span> </label>
                                            <input type="text" class="form-control" value="India" />
                                        </div>

                                        <div class="form-group">
                                            <label>State/Province </label>
                                            <input type="text" class="form-control" value="Chandigarh" />
                                        </div>
 
                                        <div class="form-group">
                                            <label>City <span class="red">*</span> </label>
                                            <input type="text" class="form-control" value="Chandigarh" />
                                        </div>

                                        <div class="form-group">
                                            <label>Postal Code </label>
                                            <input type="number" class="form-control" value="160017" />
                                        </div>
 
                                        <div class="d-grid form-group">
                                            <input type="submit" class="btn btn-primary" value="Save" />
                                        </div> 

                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="tab-pane fade" id="banking_information" role="tabpanel" aria-labelledby="banking_information_tab">
                                <div class="main-partner-box"> 
                                    <div class="partner-content"> 
                                        <h4>Banking Information</h4>
                                        <form method="post" action="addAccountInfo">
                                            @csrf
                                            <input type="hidden" value="">
                                        <div class="form-group"> 
                                            <label>Bank Name </label>
                                            <input name="bank_name" type="text" class="form-control" />
                                            <span class="text-danger">
                                                @error('bank_name')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Bank Address </label>
                                            <input name="bank_address" type="text" class="form-control"/>
                                            <span class="text-danger">
                                            @error('bank_address')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
 
                                        <div class="form-group">
                                            <label>Ifsc Code / Swift Code </label>
                                            <input name="ifsc_code" type="text" class="form-control"/>
                                            <span class="text-danger">
                                            @error('ifsc_code')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Account Number </label>
                                            <input name="account_number" type="number" class="form-control"/>
                                            <span class="text-danger">
                                            @error('account_number')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Account Holder Name </label>
                                            <input name="account_holder_name" type="text" class="form-control"/>
                                            <span class="text-danger">
                                            @error('account_holder_name')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Institution Number </label>
                                            <input name="institution_number" type="text" class="form-control"/>
                                            <span class="text-danger">
                                            @error('institution_number')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>


                                        <div class="form-group">
                                            <label>Comments </label>
                                            <input name="comments" type="text" class="form-control"/>
                                            <span class="text-danger">
                                            @error('comments')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
 
                                        <div class="d-grid form-group">
                                            <input type="submit" class="btn-primary btn-block" value="Save"/>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="tab-pane fade" id="school_commissions" role="tabpanel" aria-labelledby="school_commissions_tab">-->
                            <!--    <div class="main-partner-box text-start"> -->
                            <!--        <div class="partner-content"> -->
                            <!--            <h4>School Commissions</h4>-->

                            <!--            <div class="alert alert-primary" role="alert">-->
                            <!--                <h5 class="fs-4"> <i class="fa-solid fa-circle-exclamation fs-5"></i><b> IMPORTANT DISCLAIMER/NOTICE</b></h5>-->
                            <!--                <p class="fs-5"> The Commission viewable here is a high-level estimate of what may be receivable by you upon a school confirming successful full-time enrollment. The estimate uses the gross tuition amount posted on the school program page; however, note that the actual Commission you may receive is based on a final determination resulting from ApplyBoard's agreement with the school, the net amount payable to ApplyBoard after deducting ancillary fees, scholarships and/or other non-commissionable fees, and is subject to several variables relevant to each student, such as ESL courses, nationality, the volume of credits/courses, transfer policy (if any), agent change (if any) and the term and/or program. For further specific commission details, consult each student's ApplyBoard application page, specifically the Notes tab.</p> -->
                            <!--            </div>-->

                            <!--            <div class="alert alert-warning" role="alert">-->
                            <!--                <p class="fs-5"> <i class="fa-solid fa-circle-exclamation fs-5"></i> The information that you see reflected in the table assumes a commission agreement of 75%. Please refer to the commissions policy tab to see your specific agreement.</p>-->
                            <!--           </div>-->

                            <!--           <table class="table table-striped table-bordered">-->
                            <!--                <thead>-->
                            <!--                    <tr>-->
                            <!--                        <th>School Name	</th>-->
                            <!--                        <th>Level If Applicable	</th>-->
                            <!--                        <th>Payment Type (%, $, Fixed)	</th>-->
                            <!--                        <th>Min @ 75%</th>-->
                            <!--                        <th>Max @ 75%</th>-->
                            <!--                        <th>Tax (Inc/Exc/Out of Scope) and %</th>-->
                            <!--                        <th>Variables Factors</th>-->
                            <!--                        <th>Installment Pay Out</th>-->
                            <!--                    </tr>-->
                            <!--                </thead>-->
                            <!--                <tbody>-->
                            <!--                    <tr>-->
                            <!--                        <td>CDI College	</td>-->
                            <!--                        <td>ACD</td>-->
                            <!--                        <td>%</td>-->
                            <!--                        <td>11.25%</td>-->
                            <!--                        <td>15.00%</td>-->
                            <!--                        <td>HST 13% Exclusive</td>-->
                            <!--                        <td># of students</td>-->
                            <!--                        <td>One time payment</td>-->
                            <!--                    </tr>-->
                            <!--                    <tr>-->
                            <!--                        <td>Yorkville University</td>-->
                            <!--                        <td>ACD</td>-->
                            <!--                        <td>Fixed</td>-->
                            <!--                        <td>$833.33</td>-->
                            <!--                        <td>$1,333.33</td>-->
                            <!--                        <td>HST 13% Inclusive</td>-->
                            <!--                        <td>Based on Program</td>-->
                            <!--                        <td>Paid out per semester, max 3 semesters</td>-->
                            <!--                    </tr>-->
                            <!--                </tbody>-->
                            <!--           </table>-->

                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                             
                            <!--<div class="tab-pane fade" id="commission_policy" role="tabpanel" aria-labelledby="commission_policy_tab">-->
                            <!--    <div class="main-partner-box"> -->
                            <!--        <div class="partner-content"> -->
                            <!--            <h4>Commission Policy</h4>-->

                            <!--            <div class="commission-policy d-flex justify-content-center">-->
                            <!--                <div class="box-input">-->
                            <!--                    <h5>SUCCESSFUL RECRUITS	</h5>-->
                            <!--                    <h6>0</h6>-->
                            <!--                </div>-->
                            <!--                <div class="box-input">-->
                            <!--                    <h5>COMMISSION RATE</h5>-->
                            <!--                    <h6>75</h6>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection