@extends('layouts.student_app')
@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    <style>
        .error {
            color: #FF0000;
        }

        .circular {
            margin: auto;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            overflow: hidden;
        }

        .circular img {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 100%;
            width: auto;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<div class="page-content edit-profile">
    <div class="container-fluid">
        <div class="row students-steps-bg h-100">
            <div class="col-md-3 py-4 students-steps-border">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb-list">
                            <li>STUDENTS</li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><b> EDIT STUDENT </b></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3>Edit Student</h3>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-12">
                        <ul class="vertical-steps">
                            <li class="vertical-step-item my-2 d-flex mouse-pointer" onclick="goBack('personal_information')" id="personal_information_selector">
                                <div class="rounded-circle list-icon bg-black my-auto" id="personal_information_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                                <div class="rounded-circle text-black mx-3 my-auto font-weight-bold fs-5" id="personal_information_text">Personal Information</div>
                            </li>
                            <li class="vertical-step-item my-2 d-flex mouse-pointer" onclick="goBack('education')" id="education_selector">
                                <div class="rounded-circle list-icon border-1x p-0-8rem my-auto" id="education_icon"></div>
                                <div class="rounded-circle text-black mx-3 my-auto font-weight-bold fs-5" id="education_text">Education</div>
                            </li>
                            <li class="vertical-step-item my-2 d-flex mouse-pointer" onclick="goBack('english_test_score')" id="english_test_score_selector">
                                <div class="rounded-circle list-icon border-1x p-0-8rem my-auto" id="english_test_score_icon"></div>
                                <div class="rounded-circle text-black mx-3 my-auto font-weight-bold fs-5" id="english_test_score_text">English Test Score</div>
                            </li>
                            <li class="vertical-step-item my-2 d-flex mouse-pointer" onclick="goBack('work_experience')" id="work_experience_selector">
                                <div class="rounded-circle list-icon border-1x p-0-8rem my-auto" id="work_experience_icon"></div>
                                <div class="rounded-circle text-black mx-3 my-auto font-weight-bold fs-5" id="work_experience_text">Work Experience</div>
                            </li>
                            <li class="vertical-step-item my-2 d-flex mouse-pointer" onclick="goBack('passport')" id="passport_selector">
                                <div class="rounded-circle list-icon border-1x p-0-8rem my-auto" id="passport_icon"></div>
                                <div class="rounded-circle text-black mx-3 my-auto font-weight-bold fs-5" id="passport_text">Passport &amp; Travel History</div>
                            </li>
                            <li class="vertical-step-item my-2 d-flex mouse-pointer" onclick="goBack('other')" id="other_selector">
                                <div class="rounded-circle list-icon border-1x p-0-8rem my-auto" id="other_icon"></div>
                                <div class="rounded-circle text-black mx-3 my-auto font-weight-bold fs-5" id="other_text">Emergency Contact &amp; Other Documents</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-12 bg-white">
                <div class="row" id="personal_information">
                    <div class="col-md-12 p-4">
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 16.67%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-8 col-md-12 col-sm-12">
                                <div class="row m-t-2-1rem">
                                    <div class="col-md-12 m-auto">
                                        <h4 class="page-title">Personal Information</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 m-auto">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="firstname">
                                                        <strong>First Name<span class="text-danger">*</span></strong>
                                                    </label>
                                                    <input name="firstname" id="firstname" form="SetClass" type="text" required="" class="form-control border-radius-4px" placeholder="First Name" value="Sonu" readonly="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="lastname"><strong>Last Name</strong></label>
                                                    <input name="lastname" id="lastname" form="SetClass" type="text" class="form-control border-radius-4px" placeholder="Last Name" value="Sonu" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="gender">
                                                        <strong>Gender<span class="text-danger">*</span></strong>
                                                    </label>
                                                    <div class="holder">
                                                        <ul class="radio-list">
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="gender" value="male" checked="" form="SetClass" readonly="" />
                                                                    <span class="fake-input"></span>
                                                                    <span class="fake-label">Male</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="gender" value="female" form="SetClass" readonly="" />
                                                                    <span class="fake-input"></span>
                                                                    <span class="fake-label">Female</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="gender" value="others" form="SetClass" readonly="" />
                                                                    <span class="fake-input"></span>
                                                                    <span class="fake-label">Others</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="dob">
                                                        <strong>Date of Birth<span class="text-danger">*</span></strong>
                                                    </label>
                                                    <input name="date" type="date" class="form-control border-radius-4px" disabled="" value="1999-02-02" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="marital_status">
                                                        <strong>Marital Status<span class="text-danger">*</span></strong>
                                                    </label>
                                                    <div class="holder">
                                                        <ul class="radio-list">
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="marital_status" readonly="" value="married" form="SetClass" />
                                                                    <span class="fake-input"></span>
                                                                    <span class="fake-label">Married</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="marital_status" readonly="" checked="" value="unmarried" form="SetClass" />
                                                                    <span class="fake-input"></span>
                                                                    <span class="fake-label">Unmarried</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <div class="holder">
                                                        <div class="selects-frame">
                                                            <div class="select-holder member-select">
                                                                <label for="student_email">
                                                                    <strong>Country<span class="text-danger">*</span></strong>
                                                                </label>
                                                                <div class="custom-select-holder">
                                                                    <select class="form-control" disabled="">
                                                                        <option value="">Select Country</option>
                                                                        <option value="1">Afghanistan</option>
                                                                        <option value="2">Albania</option>
                                                                        <option value="3">Algeria</option>
                                                                        <option value="4">American Samaaoa</option>
                                                                        <option value="5">Andorra</option>
                                                                        <option value="6">Angola</option>
                                                                        <option value="7">Anguilla</option>
                                                                        <option value="8">Antarctica</option>
                                                                        <option value="9">Antigua And Barbuda</option>
                                                                        <option value="10">Argentina</option>
                                                                        <option value="11">Armenia</option>
                                                                        <option value="12">Aruba</option>
                                                                        <option value="13">Australia</option>
                                                                        <option value="14">Austria</option>
                                                                        <option value="15">Azerbaijan</option>
                                                                        <option value="16">Bahamas The</option>
                                                                        <option value="17">Bahrain</option>
                                                                        <option value="18">Bangladesh</option>
                                                                        <option value="19">Barbados</option>
                                                                        <option value="20">Belarus</option>
                                                                        <option value="21">Belgium</option>
                                                                        <option value="22">Belize</option>
                                                                        <option value="23">Benin</option>
                                                                        <option value="24">Bermuda</option>
                                                                        <option value="25">Bhutan</option>
                                                                        <option value="26">Bolivia</option>
                                                                        <option value="27">Bosnia and Herzegovina</option>
                                                                        <option value="28">Botswana</option>
                                                                        <option value="29">Bouvet Island</option>
                                                                        <option value="30">Brazil</option>
                                                                        <option value="31">British Indian Ocean Territory</option>
                                                                        <option value="32">Brunei</option>
                                                                        <option value="33">Bulgaria</option>
                                                                        <option value="34">Burkina Faso</option>
                                                                        <option value="35">Burundi</option>
                                                                        <option value="36">Cambodia</option>
                                                                        <option value="37">Cameroon</option>
                                                                        <option value="38">Canada</option>
                                                                        <option value="39">Cape Verde</option>
                                                                        <option value="40">Cayman Islands</option>
                                                                        <option value="41">Central African Republic</option>
                                                                        <option value="42">Chad</option>
                                                                        <option value="43">Chile</option>
                                                                        <option value="44">China</option>
                                                                        <option value="45">Christmas Island</option>
                                                                        <option value="46">Cocos (Keeling) Islands</option>
                                                                        <option value="47">Colombia</option>
                                                                        <option value="48">Comoros</option>
                                                                        <option value="49">Republic Of The Congo</option>
                                                                        <option value="50">Democratic Republic Of The Congo</option>
                                                                        <option value="51">Cook Islands</option>
                                                                        <option value="52">Costa Rica</option>
                                                                        <option value="53">Cote D'Ivoire (Ivory Coast)</option>
                                                                        <option value="54">Croatia (Hrvatska)</option>
                                                                        <option value="55">Cuba</option>
                                                                        <option value="56">Cyprus</option>
                                                                        <option value="57">Czech Republic</option>
                                                                        <option value="58">Denmark</option>
                                                                        <option value="59">Djibouti</option>
                                                                        <option value="60">Dominica</option>
                                                                        <option value="61">Dominican Republic</option>
                                                                        <option value="62">East Timor</option>
                                                                        <option value="63">Ecuador</option>
                                                                        <option value="64">Egypt</option>
                                                                        <option value="65">El Salvador</option>
                                                                        <option value="66">Equatorial Guinea</option>
                                                                        <option value="67">Eritrea</option>
                                                                        <option value="68">Estonia</option>
                                                                        <option value="69">Ethiopia</option>
                                                                        <option value="70">External Territories of Australia</option>
                                                                        <option value="71">Falkland Islands</option>
                                                                        <option value="72">Faroe Islands</option>
                                                                        <option value="73">Fiji Islands</option>
                                                                        <option value="74">Finland</option>
                                                                        <option value="75">France</option>
                                                                        <option value="76">French Guiana</option>
                                                                        <option value="77">French Polynesia</option>
                                                                        <option value="78">French Southern Territories</option>
                                                                        <option value="79">Gabon</option>
                                                                        <option value="80">Gambia The</option>
                                                                        <option value="81">Georgia</option>
                                                                        <option value="82">Germany</option>
                                                                        <option value="83">Ghana</option>
                                                                        <option value="84">Gibraltar</option>
                                                                        <option value="85">Greece</option>
                                                                        <option value="86">Greenland</option>
                                                                        <option value="87">Grenada</option>
                                                                        <option value="88">Guadeloupe</option>
                                                                        <option value="89">Guam</option>
                                                                        <option value="90">Guatemala</option>
                                                                        <option value="91">Guernsey and Alderney</option>
                                                                        <option value="92">Guinea</option>
                                                                        <option value="93">Guinea-Bissau</option>
                                                                        <option value="94">Guyana</option>
                                                                        <option value="95">Haiti</option>
                                                                        <option value="96">Heard and McDonald Islands</option>
                                                                        <option value="97">Honduras</option>
                                                                        <option value="98">Hong Kong S.A.R.</option>
                                                                        <option value="99">Hungary</option>
                                                                        <option value="100">Iceland</option>
                                                                        <option selected="" value="101" data-select2-id="select2-data-2-xv4e">India</option>
                                                                        <option value="102">Indonesia</option>
                                                                        <option value="103">Iran</option>
                                                                        <option value="104">Iraq</option>
                                                                        <option value="105">Ireland</option>
                                                                        <option value="106">Israel</option>
                                                                        <option value="107">Italy</option>
                                                                        <option value="108">Jamaica</option>
                                                                        <option value="109">Japan</option>
                                                                        <option value="110">Jersey</option>
                                                                        <option value="111">Jordan</option>
                                                                        <option value="112">Kazakhstan</option>
                                                                        <option value="113">Kenya</option>
                                                                        <option value="114">Kiribati</option>
                                                                        <option value="115">Korea North</option>
                                                                        <option value="116">Korea South</option>
                                                                        <option value="117">Kuwait</option>
                                                                        <option value="118">Kyrgyzstan</option>
                                                                        <option value="119">Laos</option>
                                                                        <option value="120">Latvia</option>
                                                                        <option value="121">Lebanon</option>
                                                                        <option value="122">Lesotho</option>
                                                                        <option value="123">Liberia</option>
                                                                        <option value="124">Libya</option>
                                                                        <option value="125">Liechtenstein</option>
                                                                        <option value="126">Lithuania</option>
                                                                        <option value="127">Luxembourg</option>
                                                                        <option value="128">Macau S.A.R.</option>
                                                                        <option value="129">Macedonia</option>
                                                                        <option value="130">Madagascar</option>
                                                                        <option value="131">Malawi</option>
                                                                        <option value="132">Malaysia</option>
                                                                        <option value="133">Maldives</option>
                                                                        <option value="134">Mali</option>
                                                                        <option value="135">Malta</option>
                                                                        <option value="136">Man (Isle of)</option>
                                                                        <option value="137">Marshall Islands</option>
                                                                        <option value="138">Martinique</option>
                                                                        <option value="139">Mauritania</option>
                                                                        <option value="140">Mauritius</option>
                                                                        <option value="141">Mayotte</option>
                                                                        <option value="142">Mexico</option>
                                                                        <option value="143">Micronesia</option>
                                                                        <option value="144">Moldova</option>
                                                                        <option value="145">Monaco</option>
                                                                        <option value="146">Mongolia</option>
                                                                        <option value="147">Montserrat</option>
                                                                        <option value="148">Morocco</option>
                                                                        <option value="149">Mozambique</option>
                                                                        <option value="150">Myanmar</option>
                                                                        <option value="151">Namibia</option>
                                                                        <option value="152">Nauru</option>
                                                                        <option value="153">Nepal</option>
                                                                        <option value="154">Netherlands Antilles</option>
                                                                        <option value="155">Netherlands</option>
                                                                        <option value="156">New Caledonia</option>
                                                                        <option value="157">New Zealand</option>
                                                                        <option value="158">Nicaragua</option>
                                                                        <option value="159">Niger</option>
                                                                        <option value="160">Nigeria</option>
                                                                        <option value="161">Niue</option>
                                                                        <option value="162">Norfolk Island</option>
                                                                        <option value="163">Northern Mariana Islands</option>
                                                                        <option value="164">Norway</option>
                                                                        <option value="165">Oman</option>
                                                                        <option value="166">Pakistan</option>
                                                                        <option value="167">Palau</option>
                                                                        <option value="168">Palestinian Territory Occupied</option>
                                                                        <option value="169">Panama</option>
                                                                        <option value="170">Papua new Guinea</option>
                                                                        <option value="171">Paraguay</option>
                                                                        <option value="172">Peru</option>
                                                                        <option value="173">Philippines</option>
                                                                        <option value="174">Pitcairn Island</option>
                                                                        <option value="175">Poland</option>
                                                                        <option value="176">Portugal</option>
                                                                        <option value="177">Puerto Rico</option>
                                                                        <option value="178">Qatar</option>
                                                                        <option value="179">Reunion</option>
                                                                        <option value="180">Romania</option>
                                                                        <option value="181">Russia</option>
                                                                        <option value="182">Rwanda</option>
                                                                        <option value="183">Saint Helena</option>
                                                                        <option value="184">Saint Kitts And Nevis</option>
                                                                        <option value="185">Saint Lucia</option>
                                                                        <option value="186">Saint Pierre and Miquelon</option>
                                                                        <option value="187">Saint Vincent And The Grenadines</option>
                                                                        <option value="188">Samoa</option>
                                                                        <option value="189">San Marino</option>
                                                                        <option value="190">Sao Tome and Principe</option>
                                                                        <option value="191">Saudi Arabia</option>
                                                                        <option value="192">Senegal</option>
                                                                        <option value="193">Serbia</option>
                                                                        <option value="194">Seychelles</option>
                                                                        <option value="195">Sierra Leone</option>
                                                                        <option value="196">Singapore</option>
                                                                        <option value="197">Slovakia</option>
                                                                        <option value="198">Slovenia</option>
                                                                        <option value="199">Smaller Territories of the UK</option>
                                                                        <option value="200">Solomon Islands</option>
                                                                        <option value="201">Somalia</option>
                                                                        <option value="202">South Africa</option>
                                                                        <option value="203">South Georgia</option>
                                                                        <option value="204">South Sudan</option>
                                                                        <option value="205">Spain</option>
                                                                        <option value="206">Sri Lanka</option>
                                                                        <option value="207">Sudan</option>
                                                                        <option value="208">Suriname</option>
                                                                        <option value="209">Svalbard And Jan Mayen Islands</option>
                                                                        <option value="210">Swaziland</option>
                                                                        <option value="211">Sweden</option>
                                                                        <option value="212">Switzerland</option>
                                                                        <option value="213">Syria</option>
                                                                        <option value="214">Taiwan</option>
                                                                        <option value="215">Tajikistan</option>
                                                                        <option value="216">Tanzania</option>
                                                                        <option value="217">Thailand</option>
                                                                        <option value="218">Togo</option>
                                                                        <option value="219">Tokelau</option>
                                                                        <option value="220">Tonga</option>
                                                                        <option value="221">Trinidad And Tobago</option>
                                                                        <option value="222">Tunisia</option>
                                                                        <option value="223">Turkey</option>
                                                                        <option value="224">Turkmenistan</option>
                                                                        <option value="225">Turks And Caicos Islands</option>
                                                                        <option value="226">Tuvalu</option>
                                                                        <option value="227">Uganda</option>
                                                                        <option value="228">Ukraine</option>
                                                                        <option value="229">United Arab Emirates</option>
                                                                        <option value="230">United Kingdom</option>
                                                                        <option value="231">United States</option>
                                                                        <option value="232">United States Minor Outlying Islands</option>
                                                                        <option value="233">Uruguay</option>
                                                                        <option value="234">Uzbekistan</option>
                                                                        <option value="235">Vanuatu</option>
                                                                        <option value="236">Vatican City State (Holy See)</option>
                                                                        <option value="237">Venezuela</option>
                                                                        <option value="238">Vietnam</option>
                                                                        <option value="239">Virgin Islands (British)</option>
                                                                        <option value="240">Virgin Islands (US)</option>
                                                                        <option value="241">Wallis And Futuna Islands</option>
                                                                        <option value="242">Western Sahara</option>
                                                                        <option value="243">Yemen</option>
                                                                        <option value="244">Yugoslavia</option>
                                                                        <option value="245">Zambia</option>
                                                                        <option value="246">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <div class="holder">
                                                        <div class="selects-frame">
                                                            <div class="select-holder member-select">
                                                                <label for="student_email">
                                                                    <strong>State<span class="text-danger">*</span></strong>
                                                                </label>
                                                                <div class="custom-select-holder" style="padding: 0 !important;">
                                                                    <select class="form-control" disabled="">
                                                                        <option value="">Select State</option>
                                                                        <option value="1">Andaman and Nicobar Islands</option>
                                                                        <option value="2">Andhra Pradesh</option>
                                                                        <option value="3">Arunachal Pradesh</option>
                                                                        <option value="4">Assam</option>
                                                                        <option value="5">Bihar</option>
                                                                        <option value="6">Chandigarh</option>
                                                                        <option value="7">Chhattisgarh</option>
                                                                        <option value="8">Dadra and Nagar Haveli</option>
                                                                        <option value="9">Daman and Diu</option>
                                                                        <option selected="" value="10" data-select2-id="select2-data-7-2owl">Delhi</option>
                                                                        <option value="11">Goa</option>
                                                                        <option value="12">Gujarat</option>
                                                                        <option value="13">Haryana</option>
                                                                        <option value="14">Himachal Pradesh</option>
                                                                        <option value="15">Jammu and Kashmir</option>
                                                                        <option value="16">Jharkhand</option>
                                                                        <option value="17">Karnataka</option>
                                                                        <option value="18">Kenmore</option>
                                                                        <option value="19">Kerala</option>
                                                                        <option value="20">Lakshadweep</option>
                                                                        <option value="21">Madhya Pradesh</option>
                                                                        <option value="22">Maharashtra</option>
                                                                        <option value="23">Manipur</option>
                                                                        <option value="24">Meghalaya</option>
                                                                        <option value="25">Mizoram</option>
                                                                        <option value="26">Nagaland</option>
                                                                        <option value="27">Narora</option>
                                                                        <option value="28">Natwar</option>
                                                                        <option value="29">Odisha</option>
                                                                        <option value="30">Paschim Medinipur</option>
                                                                        <option value="31">Pondicherry</option>
                                                                        <option value="32">Punjab</option>
                                                                        <option value="33">Rajasthan</option>
                                                                        <option value="34">Sikkim</option>
                                                                        <option value="35">Tamil Nadu</option>
                                                                        <option value="36">Telangana</option>
                                                                        <option value="37">Tripura</option>
                                                                        <option value="38">Uttar Pradesh</option>
                                                                        <option value="39">Uttarakhand</option>
                                                                        <option value="40">Vaishali</option>
                                                                        <option value="41">West Bengal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <div class="holder">
                                                        <div class="selects-frame">
                                                            <div class="select-holder member-select">
                                                                <label for="student_email">
                                                                    <strong>City<span class="text-danger">*</span></strong>
                                                                </label>
                                                                <div class="custom-select-holder" style="padding: 0 !important;">
                                                                    <select class="form-control" disabled="">
                                                                        <option value="">Select City</option>
                                                                        <option selected="" value="706" data-select2-id="select2-data-8-tea8">Delhi</option>
                                                                        <option value="707">New Delhi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="mobile">
                                                        <strong>Mobile<span class="text-danger">*</span></strong>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-4">
                                                            <select class="form-control">
                                                                <option data-country-id="1" value="93">+93</option>
                                                                <option data-country-id="2" value="355">+355</option>
                                                                <option data-country-id="3" value="213">+213</option>
                                                                <option data-country-id="4" value="1684">+1684</option>
                                                                <option data-country-id="5" value="376">+376</option>
                                                                <option data-country-id="6" value="244">+244</option>
                                                                <option data-country-id="7" value="1264">+1264</option>
                                                                <option data-country-id="8" value="0">+0</option>
                                                                <option data-country-id="9" value="1268">+1268</option>
                                                                <option data-country-id="10" value="54">+54</option>
                                                                <option data-country-id="11" value="374">+374</option>
                                                                <option data-country-id="12" value="297">+297</option>
                                                                <option data-country-id="13" value="61">+61</option>
                                                                <option data-country-id="14" value="43">+43</option>
                                                                <option data-country-id="15" value="994">+994</option>
                                                                <option data-country-id="16" value="1242">+1242</option>
                                                                <option data-country-id="17" value="973">+973</option>
                                                                <option data-country-id="18" value="880">+880</option>
                                                                <option data-country-id="19" value="1246">+1246</option>
                                                                <option data-country-id="20" value="375">+375</option>
                                                                <option data-country-id="21" value="32">+32</option>
                                                                <option data-country-id="22" value="501">+501</option>
                                                                <option data-country-id="23" value="229">+229</option>
                                                                <option data-country-id="24" value="1441">+1441</option>
                                                                <option data-country-id="25" value="975">+975</option>
                                                                <option data-country-id="26" value="591">+591</option>
                                                                <option data-country-id="27" value="387">+387</option>
                                                                <option data-country-id="28" value="267">+267</option>
                                                                <option data-country-id="29" value="0">+0</option>
                                                                <option data-country-id="30" value="55">+55</option>
                                                                <option data-country-id="31" value="246">+246</option>
                                                                <option data-country-id="32" value="673">+673</option>
                                                                <option data-country-id="33" value="359">+359</option>
                                                                <option data-country-id="34" value="226">+226</option>
                                                                <option data-country-id="35" value="257">+257</option>
                                                                <option data-country-id="36" value="855">+855</option>
                                                                <option data-country-id="37" value="237">+237</option>
                                                                <option data-country-id="38" value="1">+1</option>
                                                                <option data-country-id="39" value="238">+238</option>
                                                                <option data-country-id="40" value="1345">+1345</option>
                                                                <option data-country-id="41" value="236">+236</option>
                                                                <option data-country-id="42" value="235">+235</option>
                                                                <option data-country-id="43" value="56">+56</option>
                                                                <option data-country-id="44" value="86">+86</option>
                                                                <option data-country-id="45" value="61">+61</option>
                                                                <option data-country-id="46" value="672">+672</option>
                                                                <option data-country-id="47" value="57">+57</option>
                                                                <option data-country-id="48" value="269">+269</option>
                                                                <option data-country-id="49" value="242">+242</option>
                                                                <option data-country-id="50" value="242">+242</option>
                                                                <option data-country-id="51" value="682">+682</option>
                                                                <option data-country-id="52" value="506">+506</option>
                                                                <option data-country-id="53" value="225">+225</option>
                                                                <option data-country-id="54" value="385">+385</option>
                                                                <option data-country-id="55" value="53">+53</option>
                                                                <option data-country-id="56" value="357">+357</option>
                                                                <option data-country-id="57" value="420">+420</option>
                                                                <option data-country-id="58" value="45">+45</option>
                                                                <option data-country-id="59" value="253">+253</option>
                                                                <option data-country-id="60" value="1767">+1767</option>
                                                                <option data-country-id="61" value="1809">+1809</option>
                                                                <option data-country-id="62" value="670">+670</option>
                                                                <option data-country-id="63" value="593">+593</option>
                                                                <option data-country-id="64" value="20">+20</option>
                                                                <option data-country-id="65" value="503">+503</option>
                                                                <option data-country-id="66" value="240">+240</option>
                                                                <option data-country-id="67" value="291">+291</option>
                                                                <option data-country-id="68" value="372">+372</option>
                                                                <option data-country-id="69" value="251">+251</option>
                                                                <option data-country-id="70" value="61">+61</option>
                                                                <option data-country-id="71" value="500">+500</option>
                                                                <option data-country-id="72" value="298">+298</option>
                                                                <option data-country-id="73" value="679">+679</option>
                                                                <option data-country-id="74" value="358">+358</option>
                                                                <option data-country-id="75" value="33">+33</option>
                                                                <option data-country-id="76" value="594">+594</option>
                                                                <option data-country-id="77" value="689">+689</option>
                                                                <option data-country-id="78" value="0">+0</option>
                                                                <option data-country-id="79" value="241">+241</option>
                                                                <option data-country-id="80" value="220">+220</option>
                                                                <option data-country-id="81" value="995">+995</option>
                                                                <option data-country-id="82" value="49">+49</option>
                                                                <option data-country-id="83" value="233">+233</option>
                                                                <option data-country-id="84" value="350">+350</option>
                                                                <option data-country-id="85" value="30">+30</option>
                                                                <option data-country-id="86" value="299">+299</option>
                                                                <option data-country-id="87" value="1473">+1473</option>
                                                                <option data-country-id="88" value="590">+590</option>
                                                                <option data-country-id="89" value="1671">+1671</option>
                                                                <option data-country-id="90" value="502">+502</option>
                                                                <option data-country-id="91" value="44">+44</option>
                                                                <option data-country-id="92" value="224">+224</option>
                                                                <option data-country-id="93" value="245">+245</option>
                                                                <option data-country-id="94" value="592">+592</option>
                                                                <option data-country-id="95" value="509">+509</option>
                                                                <option data-country-id="96" value="0">+0</option>
                                                                <option data-country-id="97" value="504">+504</option>
                                                                <option data-country-id="98" value="852">+852</option>
                                                                <option data-country-id="99" value="36">+36</option>
                                                                <option data-country-id="100" value="354">+354</option>
                                                                <option data-country-id="101" selected="" value="91">+91</option>
                                                                <option data-country-id="102" value="62">+62</option>
                                                                <option data-country-id="103" value="98">+98</option>
                                                                <option data-country-id="104" value="964">+964</option>
                                                                <option data-country-id="105" value="353">+353</option>
                                                                <option data-country-id="106" value="972">+972</option>
                                                                <option data-country-id="107" value="39">+39</option>
                                                                <option data-country-id="108" value="1876">+1876</option>
                                                                <option data-country-id="109" value="81">+81</option>
                                                                <option data-country-id="110" value="44">+44</option>
                                                                <option data-country-id="111" value="962">+962</option>
                                                                <option data-country-id="112" value="7">+7</option>
                                                                <option data-country-id="113" value="254">+254</option>
                                                                <option data-country-id="114" value="686">+686</option>
                                                                <option data-country-id="115" value="850">+850</option>
                                                                <option data-country-id="116" value="82">+82</option>
                                                                <option data-country-id="117" value="965">+965</option>
                                                                <option data-country-id="118" value="996">+996</option>
                                                                <option data-country-id="119" value="856">+856</option>
                                                                <option data-country-id="120" value="371">+371</option>
                                                                <option data-country-id="121" value="961">+961</option>
                                                                <option data-country-id="122" value="266">+266</option>
                                                                <option data-country-id="123" value="231">+231</option>
                                                                <option data-country-id="124" value="218">+218</option>
                                                                <option data-country-id="125" value="423">+423</option>
                                                                <option data-country-id="126" value="370">+370</option>
                                                                <option data-country-id="127" value="352">+352</option>
                                                                <option data-country-id="128" value="853">+853</option>
                                                                <option data-country-id="129" value="389">+389</option>
                                                                <option data-country-id="130" value="261">+261</option>
                                                                <option data-country-id="131" value="265">+265</option>
                                                                <option data-country-id="132" value="60">+60</option>
                                                                <option data-country-id="133" value="960">+960</option>
                                                                <option data-country-id="134" value="223">+223</option>
                                                                <option data-country-id="135" value="356">+356</option>
                                                                <option data-country-id="136" value="44">+44</option>
                                                                <option data-country-id="137" value="692">+692</option>
                                                                <option data-country-id="138" value="596">+596</option>
                                                                <option data-country-id="139" value="222">+222</option>
                                                                <option data-country-id="140" value="230">+230</option>
                                                                <option data-country-id="141" value="269">+269</option>
                                                                <option data-country-id="142" value="52">+52</option>
                                                                <option data-country-id="143" value="691">+691</option>
                                                                <option data-country-id="144" value="373">+373</option>
                                                                <option data-country-id="145" value="377">+377</option>
                                                                <option data-country-id="146" value="976">+976</option>
                                                                <option data-country-id="147" value="1664">+1664</option>
                                                                <option data-country-id="148" value="212">+212</option>
                                                                <option data-country-id="149" value="258">+258</option>
                                                                <option data-country-id="150" value="95">+95</option>
                                                                <option data-country-id="151" value="264">+264</option>
                                                                <option data-country-id="152" value="674">+674</option>
                                                                <option data-country-id="153" value="977">+977</option>
                                                                <option data-country-id="154" value="599">+599</option>
                                                                <option data-country-id="155" value="31">+31</option>
                                                                <option data-country-id="156" value="687">+687</option>
                                                                <option data-country-id="157" value="64">+64</option>
                                                                <option data-country-id="158" value="505">+505</option>
                                                                <option data-country-id="159" value="227">+227</option>
                                                                <option data-country-id="160" value="234">+234</option>
                                                                <option data-country-id="161" value="683">+683</option>
                                                                <option data-country-id="162" value="672">+672</option>
                                                                <option data-country-id="163" value="1670">+1670</option>
                                                                <option data-country-id="164" value="47">+47</option>
                                                                <option data-country-id="165" value="968">+968</option>
                                                                <option data-country-id="166" value="92">+92</option>
                                                                <option data-country-id="167" value="680">+680</option>
                                                                <option data-country-id="168" value="970">+970</option>
                                                                <option data-country-id="169" value="507">+507</option>
                                                                <option data-country-id="170" value="675">+675</option>
                                                                <option data-country-id="171" value="595">+595</option>
                                                                <option data-country-id="172" value="51">+51</option>
                                                                <option data-country-id="173" value="63">+63</option>
                                                                <option data-country-id="174" value="0">+0</option>
                                                                <option data-country-id="175" value="48">+48</option>
                                                                <option data-country-id="176" value="351">+351</option>
                                                                <option data-country-id="177" value="1787">+1787</option>
                                                                <option data-country-id="178" value="974">+974</option>
                                                                <option data-country-id="179" value="262">+262</option>
                                                                <option data-country-id="180" value="40">+40</option>
                                                                <option data-country-id="181" value="7">+7</option>
                                                                <option data-country-id="182" value="250">+250</option>
                                                                <option data-country-id="183" value="290">+290</option>
                                                                <option data-country-id="184" value="1869">+1869</option>
                                                                <option data-country-id="185" value="1758">+1758</option>
                                                                <option data-country-id="186" value="508">+508</option>
                                                                <option data-country-id="187" value="1784">+1784</option>
                                                                <option data-country-id="188" value="684">+684</option>
                                                                <option data-country-id="189" value="378">+378</option>
                                                                <option data-country-id="190" value="239">+239</option>
                                                                <option data-country-id="191" value="966">+966</option>
                                                                <option data-country-id="192" value="221">+221</option>
                                                                <option data-country-id="193" value="381">+381</option>
                                                                <option data-country-id="194" value="248">+248</option>
                                                                <option data-country-id="195" value="232">+232</option>
                                                                <option data-country-id="196" value="65">+65</option>
                                                                <option data-country-id="197" value="421">+421</option>
                                                                <option data-country-id="198" value="386">+386</option>
                                                                <option data-country-id="199" value="44">+44</option>
                                                                <option data-country-id="200" value="677">+677</option>
                                                                <option data-country-id="201" value="252">+252</option>
                                                                <option data-country-id="202" value="27">+27</option>
                                                                <option data-country-id="203" value="0">+0</option>
                                                                <option data-country-id="204" value="211">+211</option>
                                                                <option data-country-id="205" value="34">+34</option>
                                                                <option data-country-id="206" value="94">+94</option>
                                                                <option data-country-id="207" value="249">+249</option>
                                                                <option data-country-id="208" value="597">+597</option>
                                                                <option data-country-id="209" value="47">+47</option>
                                                                <option data-country-id="210" value="268">+268</option>
                                                                <option data-country-id="211" value="46">+46</option>
                                                                <option data-country-id="212" value="41">+41</option>
                                                                <option data-country-id="213" value="963">+963</option>
                                                                <option data-country-id="214" value="886">+886</option>
                                                                <option data-country-id="215" value="992">+992</option>
                                                                <option data-country-id="216" value="255">+255</option>
                                                                <option data-country-id="217" value="66">+66</option>
                                                                <option data-country-id="218" value="228">+228</option>
                                                                <option data-country-id="219" value="690">+690</option>
                                                                <option data-country-id="220" value="676">+676</option>
                                                                <option data-country-id="221" value="1868">+1868</option>
                                                                <option data-country-id="222" value="216">+216</option>
                                                                <option data-country-id="223" value="90">+90</option>
                                                                <option data-country-id="224" value="7370">+7370</option>
                                                                <option data-country-id="225" value="1649">+1649</option>
                                                                <option data-country-id="226" value="688">+688</option>
                                                                <option data-country-id="227" value="256">+256</option>
                                                                <option data-country-id="228" value="380">+380</option>
                                                                <option data-country-id="229" value="971">+971</option>
                                                                <option data-country-id="230" value="44">+44</option>
                                                                <option data-country-id="231" value="1">+1</option>
                                                                <option data-country-id="232" value="1">+1</option>
                                                                <option data-country-id="233" value="598">+598</option>
                                                                <option data-country-id="234" value="998">+998</option>
                                                                <option data-country-id="235" value="678">+678</option>
                                                                <option data-country-id="236" value="39">+39</option>
                                                                <option data-country-id="237" value="58">+58</option>
                                                                <option data-country-id="238" value="84">+84</option>
                                                                <option data-country-id="239" value="1284">+1284</option>
                                                                <option data-country-id="240" value="1340">+1340</option>
                                                                <option data-country-id="241" value="681">+681</option>
                                                                <option data-country-id="242" value="212">+212</option>
                                                                <option data-country-id="243" value="967">+967</option>
                                                                <option data-country-id="244" value="38">+38</option>
                                                                <option data-country-id="245" value="260">+260</option>
                                                                <option data-country-id="246" value="263">+263</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 col-sm-8 pl-0">
                                                            <div class="form-group">
                                                                <input id="mobile" type="text" class="form-control border-radius-4px" placeholder="Enter Mobile Number" name="mobile" form="SetClass" disabled="" value="7982595013" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="student_email">
                                                        <strong>E-Mail<span class="text-danger">*</span></strong>
                                                    </label>
                                                    <input type="email" id="student_email" class="form-control border-radius-4px" placeholder="Enter Email ID" name="email" form="SetClass" disabled="" value="sonuverma7982595013@gmail.com" />
                                                    <p class="text-danger" id="emailMessage"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <button class="btn btn-primary text-white btn-block" onclick="func_tabs_run('education','personal_information')">Save &amp; Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" id="edit_stateID" value="10">
                <input type="hidden" id="edit_cityID" value="706">

                <div class="row d-none" id="education">
                    <div class="col-md-12 p-4">
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 33.34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-2-1rem">
                            <div class="col-md-12 m-auto">
                                <h4 class="page-title font-weight-bold">Education Detail</h4>
                                <p class="mb-2 font-size-12">
                                    Filling forms is a lengthy task that might take upto 5-10 minutes, But we are here to reduce this time for you. Just upload the documents and our team will fill out the details for you. Kindly make sure the documents are
                                    clear.
                                </p>
                                <p class="mb-2 font-size-12">Accepted file type: .png, .jpg, .jpeg, .pdf</p>
                                <p class="mb-2 font-size-12 ">Accepted max file size: 4MB</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="d-flex justify-content-start flex-wrap" id="educationPreviews">
                                    <div class="m-1">
                                        <div class="drop-zone">
                                            <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                            <input type="file" name="myFile" class="drop-zone__input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <button onclick="func_tabs_run('english_test_score','education')" class="btn btn-primary text-white btn-block">Save &amp; Continue</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="english_test_score">
                    <div class="col-md-12 p-4">
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50.01%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-2-1rem">
                            <div class="col-md-12 m-auto">
                                <h4 class="page-title font-weight-bold">English Test Score</h4>
                                <p class="mb-2 font-size-12">
                                    Filling forms is a lengthy task that might take upto 5-10 minutes, But we are here to reduce this time for you. Just upload the documents and our team will fill out the details for you. Kindly make sure the documents are
                                    clear.
                                </p>
                                <p class="mb-2 font-size-12">Accepted file type: .png, .jpg, .jpeg, .pdf</p>
                                <p class="mb-2 font-size-12">Accepted max file size: 4MB</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="d-flex justify-content-start flex-wrap" id="englishTestScorePreviews">
                                    <div class="m-1">
                                        <div class="drop-zone">
                                            <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                            <input type="file" name="myFile" class="drop-zone__input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <button onclick="func_tabs_run('work_experience','english_test_score')" class="btn btn-primary text-white btn-block">Save &amp; Continue</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="work_experience">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66.68%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-2-1rem">
                            <div class="col-md-12 m-auto">
                                <h4 class="page-title font-weight-bold">Work Experience</h4>
                                <p class="mb-2 font-size-12">
                                    Filling forms is a lengthy task that might take upto 5-10 minutes, But we are here to reduce this time for you. Just upload the documents and our team will fill out the details for you. Kindly make sure the documents are
                                    clear.
                                </p>
                                <p class="mb-2 font-size-12">Accepted file type: .png, .jpg, .jpeg, .pdf</p>
                                <p class="mb-2 font-size-12">Accepted max file size: 4MB</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="d-flex justify-content-start flex-wrap" id="workExperiencePreviews">
                                    <div class="m-1">
                                        <div class="drop-zone">
                                            <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                            <input type="file" name="myFile" class="drop-zone__input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <button onclick="func_tabs_run('passport','work_experience')" class="btn btn-primary text-white">Save &amp; Continue</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="passport">
                    <div class="col-md-12 p-4">
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75.015%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-2-1rem">
                            <div class="col-md-12 m-auto">
                                <h4 class="page-title font-weight-bold">Passport &amp; Travel History</h4>
                                <p class="mb-2 font-size-12">
                                    Filling forms is a lengthy task that might take upto 5-10 minutes, But we are here to reduce this time for you. Just upload the documents and our team will fill out the details for you. Kindly make sure the documents are
                                    clear.
                                </p>
                                <p class="mb-2 font-size-12">Accepted file type: .png, .jpg, .jpeg, .pdf</p>
                                <p class="mb-2 font-size-12">Accepted max file size: 4MB</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="d-flex justify-content-start flex-wrap" id="passportPreviews">
                                    <div class="m-1">
                                        <div class="drop-zone">
                                            <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                            <input type="file" name="myFile" class="drop-zone__input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 m-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="fs-5">
                                            <span class="mr-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                            </span>
                                            Add Visa Refusal
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-2"></div>
                                <div class="row mb-2" id="vr_repeat"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-success mouse-pointer fs-5 mb-3" id="add_new_vr">+ Add Another</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="fs-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg>
                                            Add Travel History
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-2"></div>
                                <div class="row mb-2" id="th_repeat"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-success mouse-pointer fs-5 mb-3" id="add_new_th">+ Add Another</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <button onclick="func_tabs_run('other','passport')" class="btn btn-primary text-white btn-block">Save &amp; Continue</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="other">
                    <div class="col-md-12 p-4">
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 91.685%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-2-1rem">
                            <div class="col-md-12 m-auto">
                                <h4 class="page-title font-weight-bold">Emergency Contact &amp; Other Documents</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="emergency_name"><strong>Contact Person</strong></label>
                                    <input name="emergency_name" id="emergency_name" form="SetClass" type="text" class="form-control border-radius-4px" placeholder="Enter Emergency Name" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mobile"><strong>Mobile</strong></label>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4">
                                            <select class="form-control">
                                                <option data-country-id="1" value="93">+93</option>
                                                <option data-country-id="2" value="355">+355</option>
                                                <option data-country-id="3" value="213">+213</option>
                                                <option data-country-id="4" value="1684">+1684</option>
                                                <option data-country-id="5" value="376">+376</option>
                                                <option data-country-id="6" value="244">+244</option>
                                                <option data-country-id="7" value="1264">+1264</option>
                                                <option data-country-id="8" value="0">+0</option>
                                                <option data-country-id="9" value="1268">+1268</option>
                                                <option data-country-id="10" value="54">+54</option>
                                                <option data-country-id="11" value="374">+374</option>
                                                <option data-country-id="12" value="297">+297</option>
                                                <option data-country-id="13" value="61">+61</option>
                                                <option data-country-id="14" value="43">+43</option>
                                                <option data-country-id="15" value="994">+994</option>
                                                <option data-country-id="16" value="1242">+1242</option>
                                                <option data-country-id="17" value="973">+973</option>
                                                <option data-country-id="18" value="880">+880</option>
                                                <option data-country-id="19" value="1246">+1246</option>
                                                <option data-country-id="20" value="375">+375</option>
                                                <option data-country-id="21" value="32">+32</option>
                                                <option data-country-id="22" value="501">+501</option>
                                                <option data-country-id="23" value="229">+229</option>
                                                <option data-country-id="24" value="1441">+1441</option>
                                                <option data-country-id="25" value="975">+975</option>
                                                <option data-country-id="26" value="591">+591</option>
                                                <option data-country-id="27" value="387">+387</option>
                                                <option data-country-id="28" value="267">+267</option>
                                                <option data-country-id="29" value="0">+0</option>
                                                <option data-country-id="30" value="55">+55</option>
                                                <option data-country-id="31" value="246">+246</option>
                                                <option data-country-id="32" value="673">+673</option>
                                                <option data-country-id="33" value="359">+359</option>
                                                <option data-country-id="34" value="226">+226</option>
                                                <option data-country-id="35" value="257">+257</option>
                                                <option data-country-id="36" value="855">+855</option>
                                                <option data-country-id="37" value="237">+237</option>
                                                <option data-country-id="38" value="1">+1</option>
                                                <option data-country-id="39" value="238">+238</option>
                                                <option data-country-id="40" value="1345">+1345</option>
                                                <option data-country-id="41" value="236">+236</option>
                                                <option data-country-id="42" value="235">+235</option>
                                                <option data-country-id="43" value="56">+56</option>
                                                <option data-country-id="44" value="86">+86</option>
                                                <option data-country-id="45" value="61">+61</option>
                                                <option data-country-id="46" value="672">+672</option>
                                                <option data-country-id="47" value="57">+57</option>
                                                <option data-country-id="48" value="269">+269</option>
                                                <option data-country-id="49" value="242">+242</option>
                                                <option data-country-id="50" value="242">+242</option>
                                                <option data-country-id="51" value="682">+682</option>
                                                <option data-country-id="52" value="506">+506</option>
                                                <option data-country-id="53" value="225">+225</option>
                                                <option data-country-id="54" value="385">+385</option>
                                                <option data-country-id="55" value="53">+53</option>
                                                <option data-country-id="56" value="357">+357</option>
                                                <option data-country-id="57" value="420">+420</option>
                                                <option data-country-id="58" value="45">+45</option>
                                                <option data-country-id="59" value="253">+253</option>
                                                <option data-country-id="60" value="1767">+1767</option>
                                                <option data-country-id="61" value="1809">+1809</option>
                                                <option data-country-id="62" value="670">+670</option>
                                                <option data-country-id="63" value="593">+593</option>
                                                <option data-country-id="64" value="20">+20</option>
                                                <option data-country-id="65" value="503">+503</option>
                                                <option data-country-id="66" value="240">+240</option>
                                                <option data-country-id="67" value="291">+291</option>
                                                <option data-country-id="68" value="372">+372</option>
                                                <option data-country-id="69" value="251">+251</option>
                                                <option data-country-id="70" value="61">+61</option>
                                                <option data-country-id="71" value="500">+500</option>
                                                <option data-country-id="72" value="298">+298</option>
                                                <option data-country-id="73" value="679">+679</option>
                                                <option data-country-id="74" value="358">+358</option>
                                                <option data-country-id="75" value="33">+33</option>
                                                <option data-country-id="76" value="594">+594</option>
                                                <option data-country-id="77" value="689">+689</option>
                                                <option data-country-id="78" value="0">+0</option>
                                                <option data-country-id="79" value="241">+241</option>
                                                <option data-country-id="80" value="220">+220</option>
                                                <option data-country-id="81" value="995">+995</option>
                                                <option data-country-id="82" value="49">+49</option>
                                                <option data-country-id="83" value="233">+233</option>
                                                <option data-country-id="84" value="350">+350</option>
                                                <option data-country-id="85" value="30">+30</option>
                                                <option data-country-id="86" value="299">+299</option>
                                                <option data-country-id="87" value="1473">+1473</option>
                                                <option data-country-id="88" value="590">+590</option>
                                                <option data-country-id="89" value="1671">+1671</option>
                                                <option data-country-id="90" value="502">+502</option>
                                                <option data-country-id="91" value="44">+44</option>
                                                <option data-country-id="92" value="224">+224</option>
                                                <option data-country-id="93" value="245">+245</option>
                                                <option data-country-id="94" value="592">+592</option>
                                                <option data-country-id="95" value="509">+509</option>
                                                <option data-country-id="96" value="0">+0</option>
                                                <option data-country-id="97" value="504">+504</option>
                                                <option data-country-id="98" value="852">+852</option>
                                                <option data-country-id="99" value="36">+36</option>
                                                <option data-country-id="100" value="354">+354</option>
                                                <option data-country-id="101" value="91">+91</option>
                                                <option data-country-id="102" value="62">+62</option>
                                                <option data-country-id="103" value="98">+98</option>
                                                <option data-country-id="104" value="964">+964</option>
                                                <option data-country-id="105" value="353">+353</option>
                                                <option data-country-id="106" value="972">+972</option>
                                                <option data-country-id="107" value="39">+39</option>
                                                <option data-country-id="108" value="1876">+1876</option>
                                                <option data-country-id="109" value="81">+81</option>
                                                <option data-country-id="110" value="44">+44</option>
                                                <option data-country-id="111" value="962">+962</option>
                                                <option data-country-id="112" value="7">+7</option>
                                                <option data-country-id="113" value="254">+254</option>
                                                <option data-country-id="114" value="686">+686</option>
                                                <option data-country-id="115" value="850">+850</option>
                                                <option data-country-id="116" value="82">+82</option>
                                                <option data-country-id="117" value="965">+965</option>
                                                <option data-country-id="118" value="996">+996</option>
                                                <option data-country-id="119" value="856">+856</option>
                                                <option data-country-id="120" value="371">+371</option>
                                                <option data-country-id="121" value="961">+961</option>
                                                <option data-country-id="122" value="266">+266</option>
                                                <option data-country-id="123" value="231">+231</option>
                                                <option data-country-id="124" value="218">+218</option>
                                                <option data-country-id="125" value="423">+423</option>
                                                <option data-country-id="126" value="370">+370</option>
                                                <option data-country-id="127" value="352">+352</option>
                                                <option data-country-id="128" value="853">+853</option>
                                                <option data-country-id="129" value="389">+389</option>
                                                <option data-country-id="130" value="261">+261</option>
                                                <option data-country-id="131" value="265">+265</option>
                                                <option data-country-id="132" value="60">+60</option>
                                                <option data-country-id="133" value="960">+960</option>
                                                <option data-country-id="134" value="223">+223</option>
                                                <option data-country-id="135" value="356">+356</option>
                                                <option data-country-id="136" value="44">+44</option>
                                                <option data-country-id="137" value="692">+692</option>
                                                <option data-country-id="138" value="596">+596</option>
                                                <option data-country-id="139" value="222">+222</option>
                                                <option data-country-id="140" value="230">+230</option>
                                                <option data-country-id="141" value="269">+269</option>
                                                <option data-country-id="142" value="52">+52</option>
                                                <option data-country-id="143" value="691">+691</option>
                                                <option data-country-id="144" value="373">+373</option>
                                                <option data-country-id="145" value="377">+377</option>
                                                <option data-country-id="146" value="976">+976</option>
                                                <option data-country-id="147" value="1664">+1664</option>
                                                <option data-country-id="148" value="212">+212</option>
                                                <option data-country-id="149" value="258">+258</option>
                                                <option data-country-id="150" value="95">+95</option>
                                                <option data-country-id="151" value="264">+264</option>
                                                <option data-country-id="152" value="674">+674</option>
                                                <option data-country-id="153" value="977">+977</option>
                                                <option data-country-id="154" value="599">+599</option>
                                                <option data-country-id="155" value="31">+31</option>
                                                <option data-country-id="156" value="687">+687</option>
                                                <option data-country-id="157" value="64">+64</option>
                                                <option data-country-id="158" value="505">+505</option>
                                                <option data-country-id="159" value="227">+227</option>
                                                <option data-country-id="160" value="234">+234</option>
                                                <option data-country-id="161" value="683">+683</option>
                                                <option data-country-id="162" value="672">+672</option>
                                                <option data-country-id="163" value="1670">+1670</option>
                                                <option data-country-id="164" value="47">+47</option>
                                                <option data-country-id="165" value="968">+968</option>
                                                <option data-country-id="166" value="92">+92</option>
                                                <option data-country-id="167" value="680">+680</option>
                                                <option data-country-id="168" value="970">+970</option>
                                                <option data-country-id="169" value="507">+507</option>
                                                <option data-country-id="170" value="675">+675</option>
                                                <option data-country-id="171" value="595">+595</option>
                                                <option data-country-id="172" value="51">+51</option>
                                                <option data-country-id="173" value="63">+63</option>
                                                <option data-country-id="174" value="0">+0</option>
                                                <option data-country-id="175" value="48">+48</option>
                                                <option data-country-id="176" value="351">+351</option>
                                                <option data-country-id="177" value="1787">+1787</option>
                                                <option data-country-id="178" value="974">+974</option>
                                                <option data-country-id="179" value="262">+262</option>
                                                <option data-country-id="180" value="40">+40</option>
                                                <option data-country-id="181" value="7">+7</option>
                                                <option data-country-id="182" value="250">+250</option>
                                                <option data-country-id="183" value="290">+290</option>
                                                <option data-country-id="184" value="1869">+1869</option>
                                                <option data-country-id="185" value="1758">+1758</option>
                                                <option data-country-id="186" value="508">+508</option>
                                                <option data-country-id="187" value="1784">+1784</option>
                                                <option data-country-id="188" value="684">+684</option>
                                                <option data-country-id="189" value="378">+378</option>
                                                <option data-country-id="190" value="239">+239</option>
                                                <option data-country-id="191" value="966">+966</option>
                                                <option data-country-id="192" value="221">+221</option>
                                                <option data-country-id="193" value="381">+381</option>
                                                <option data-country-id="194" value="248">+248</option>
                                                <option data-country-id="195" value="232">+232</option>
                                                <option data-country-id="196" value="65">+65</option>
                                                <option data-country-id="197" value="421">+421</option>
                                                <option data-country-id="198" value="386">+386</option>
                                                <option data-country-id="199" value="44">+44</option>
                                                <option data-country-id="200" value="677">+677</option>
                                                <option data-country-id="201" value="252">+252</option>
                                                <option data-country-id="202" value="27">+27</option>
                                                <option data-country-id="203" value="0">+0</option>
                                                <option data-country-id="204" value="211">+211</option>
                                                <option data-country-id="205" value="34">+34</option>
                                                <option data-country-id="206" value="94">+94</option>
                                                <option data-country-id="207" value="249">+249</option>
                                                <option data-country-id="208" value="597">+597</option>
                                                <option data-country-id="209" value="47">+47</option>
                                                <option data-country-id="210" value="268">+268</option>
                                                <option data-country-id="211" value="46">+46</option>
                                                <option data-country-id="212" value="41">+41</option>
                                                <option data-country-id="213" value="963">+963</option>
                                                <option data-country-id="214" value="886">+886</option>
                                                <option data-country-id="215" value="992">+992</option>
                                                <option data-country-id="216" value="255">+255</option>
                                                <option data-country-id="217" value="66">+66</option>
                                                <option data-country-id="218" value="228">+228</option>
                                                <option data-country-id="219" value="690">+690</option>
                                                <option data-country-id="220" value="676">+676</option>
                                                <option data-country-id="221" value="1868">+1868</option>
                                                <option data-country-id="222" value="216">+216</option>
                                                <option data-country-id="223" value="90">+90</option>
                                                <option data-country-id="224" value="7370">+7370</option>
                                                <option data-country-id="225" value="1649">+1649</option>
                                                <option data-country-id="226" value="688">+688</option>
                                                <option data-country-id="227" value="256">+256</option>
                                                <option data-country-id="228" value="380">+380</option>
                                                <option data-country-id="229" value="971">+971</option>
                                                <option data-country-id="230" value="44">+44</option>
                                                <option data-country-id="231" value="1">+1</option>
                                                <option data-country-id="232" value="1">+1</option>
                                                <option data-country-id="233" value="598">+598</option>
                                                <option data-country-id="234" value="998">+998</option>
                                                <option data-country-id="235" value="678">+678</option>
                                                <option data-country-id="236" value="39">+39</option>
                                                <option data-country-id="237" value="58">+58</option>
                                                <option data-country-id="238" value="84">+84</option>
                                                <option data-country-id="239" value="1284">+1284</option>
                                                <option data-country-id="240" value="1340">+1340</option>
                                                <option data-country-id="241" value="681">+681</option>
                                                <option data-country-id="242" value="212">+212</option>
                                                <option data-country-id="243" value="967">+967</option>
                                                <option data-country-id="244" value="38">+38</option>
                                                <option data-country-id="245" value="260">+260</option>
                                                <option data-country-id="246" value="263">+263</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-8">
                                            <div class="form-group">
                                                <input id="emergency_mobile" type="text" class="form-control border-radius-4px" placeholder="Enter Mobile Number" name="emergency_mobile" form="SetClass" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="emergency_email"><strong>Email</strong></label>
                                    <input name="emergency_email" id="emergency_email" form="SetClass" placeholder="Enter Contact Person Email ID" type="email" class="form-control" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <p><b>Add Other Documents</b></p>
                                <p>Accepted file type: .png, .jpg, .jpeg, .pdf</p>
                                <p>Accepted max file size: 4MB</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <div class="d-flex justify-content-start flex-wrap" id="otherPreviews">
                                    <div class="m-1">
                                        <form action="" method="POST">
                                            <div class="drag text-center">
                                                <label for="file-upload" class="custom-file-upload">
                                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                                </label>
                                                <input id="file-upload" type="file">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="remarks"><strong>Remarks</strong></label>
                                    <textarea rows="4" id="remarks" class="form-control" name="remarks" form="SetClass" maxlength="450">yes</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <input type="hidden" name="student_files_inp[education][0]" id="student_files_education" form="SetClass" />
                                <input type="hidden" name="student_files_inp[english_test_score][0]" id="student_files_english_test_score" form="SetClass" />
                                <input type="hidden" name="student_files_inp[work_experience][0]" id="student_files_work_experience" form="SetClass" />
                                <input type="hidden" name="student_files_inp[passport][0]" id="student_files_passport" form="SetClass" />
                                <input type="hidden" name="student_files_inp[other][0]" id="student_files_other" form="SetClass" />
                                <input type="hidden" name="update" form="SetClass" />
                                <button onclick="studentFormSubmit('finish','other')" class="btn btn-primary text-white btn-block">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="finish">
                    <div class="col-md-12 p-4">
                        <div class="row d-none" id="finishProgress">
                            <div class="col-md-12 m-auto">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-5">
                            <div class="col-md-12 m-auto py-5">
                                <div class="text-center py-5" id="studentProcess">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                        <circle cx="50" cy="50" r="0" fill="none" stroke="#1b2f3e" stroke-width="2">
                                            <animate attributeName="r" repeatCount="indefinite" dur="1.333333333333333s" values="0;24" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="-0.6666666666666665s"></animate>
                                            <animate attributeName="opacity" repeatCount="indefinite" dur="1.333333333333333s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline" begin="-0.6666666666666665s"></animate>
                                        </circle>
                                        <circle cx="50" cy="50" r="0" fill="none" stroke="#ffcd00" stroke-width="2">
                                            <animate attributeName="r" repeatCount="indefinite" dur="1.333333333333333s" values="0;24" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline"></animate>
                                            <animate attributeName="opacity" repeatCount="indefinite" dur="1.333333333333333s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline"></animate>
                                        </circle>
                                    </svg>
                                    <p class="text-center font-weight-bold">Please Wait Processing ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection