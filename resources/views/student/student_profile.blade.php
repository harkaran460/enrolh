@extends('layouts.student_app')
@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<section class="main-student-profile">
    <div class="container-fluid">
        <div id="success_messae" class="alert alert-success" style="display: none;">
            <strong><span style="color: black;"></span></strong>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="stepwizard" id="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" class="btn btn-primary">
                                General Information <i class="fa-solid fa-circle-check" id="green-color"></i>
                            </a>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" class="btn btn-default" disabled="disabled">
                                Education History <i class="fa-solid fa-circle-info" id="red"></i>
                            </a>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" class="btn btn-default" disabled="disabled">
                                Test Scores <i class="fa-solid fa-circle-check" id="green-color"></i>
                            </a>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-4" class="btn btn-default" disabled="disabled">
                                Background Information <i class="fa-solid fa-circle-info" id="red"></i>
                            </a>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-5" class="btn btn-default" disabled="disabled">
                                Upload Documents <i class="fa-solid fa-circle-check" id="green-color"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-white alert-dismissible fade show" role="alert">
                    <p> <i class="fa-solid fa-bell"></i> You should check in on some of those fields below. </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>

        <div class="row mt-md-3">
            <div class="col-md-12">
                <div class="setup-content" id="step-1">
                    <h5 class="heading-registration">Registration Date: May 12th, 2022</h5>
                    <div class="card p-2">
                        <form id="form1">
                            <div class="card-body">
                                <div class="personal-information">
                                    <h4>Personal Information</h4>
                                    <h5>(As indicated on your passport)</h5>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> First Name <span class="red">*</span> </label>
                                                <input name="first_name" id="first_name" type="text" class="form-control" placeholder="Enter First Name...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Middle Name </label>
                                                <input name="middle_name" id="middle_name" type="text" class="form-control" placeholder="Enter Middle Name...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Last Name </label>
                                                <input name="last_name" id="last_name" type="text" class="form-control" placeholder="Enter Last Name...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Date of Birth <span class="red">*</span> </label>
                                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> First Language <span class="red">*</span> </label>
                                                <input name="first_language" id="first_language" type="text" class="form-control" placeholder="Enter First Language ...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country of Citizenship <span class="red">*</span> </label>
                                                <select name="country_of_citizenship" id="country_of_citizenship" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Country of Citizenship</option>
                                                    <option value="Afghanistan" @if (old('country_of_citizenship')=="Afghanistan" ) {{ 'selected' }} @endif>Afghanistan</option>
                                                    <option value="Aland Islands" @if (old('country_of_citizenship')=="Aland Islands" ) {{ 'selected' }} @endif>Aland Islands</option>
                                                    <option value="Albania" @if (old('country_of_citizenship')=="Albania" ) {{ 'selected' }} @endif>Albania</option>
                                                    <option value="Algeria" @if (old('country_of_citizenship')=="Algeria" ) {{ 'selected' }} @endif>Algeria</option>
                                                    <option value="American Samoa" @if (old('country_of_citizenship')=="American Samoa" ) {{ 'selected' }} @endif>American Samoa</option>
                                                    <option value="Andorra" @if (old('country_of_citizenship')=="Andorra" ) {{ 'selected' }} @endif>Andorra</option>
                                                    <option value="Angola" @if (old('country_of_citizenship')=="Angola" ) {{ 'selected' }} @endif>Angola</option>
                                                    <option value="Anguilla" @if (old('country_of_citizenship')=="Anguilla" ) {{ 'selected' }} @endif>Anguilla</option>
                                                    <option value="Antarctica" @if (old('country_of_citizenship')=="Antarctica" ) {{ 'selected' }} @endif>Antarctica</option>
                                                    <option value="Antigua and Barbuda" @if (old('country_of_citizenship')=="Antigua and Barbuda" ) {{ 'selected' }} @endif>Antigua and Barbuda</option>
                                                    <option value="Argentina" @if (old('country_of_citizenship')=="Argentina" ) {{ 'selected' }} @endif>Argentina</option>
                                                    <option value="Armenia" @if (old('country_of_citizenship')=="Armenia" ) {{ 'selected' }} @endif>Armenia</option>
                                                    <option value="Aruba" @if (old('country_of_citizenship')=="Aruba" ) {{ 'selected' }} @endif>Aruba</option>
                                                    <option value="Australia" @if (old('country_of_citizenship')=="Australia" ) {{ 'selected' }} @endif>Australia</option>
                                                    <option value="Austria" @if (old('country_of_citizenship')=="Austria" ) {{ 'selected' }} @endif>Austria</option>
                                                    <option value="Azerbaijan" @if (old('country_of_citizenship')=="Azerbaijan" ) {{ 'selected' }} @endif>Azerbaijan</option>
                                                    <option value="Bahamas" @if (old('country_of_citizenship')=="Bahamas" ) {{ 'selected' }} @endif>Bahamas</option>
                                                    <option value="Bahrain" @if (old('country_of_citizenship')=="Bahrain" ) {{ 'selected' }} @endif>Bahrain</option>
                                                    <option value="Bangladesh" @if (old('country_of_citizenship')=="Bangladesh" ) {{ 'selected' }} @endif>Bangladesh</option>
                                                    <option value="Barbados" @if (old('country_of_citizenship')=="Barbados" ) {{ 'selected' }} @endif>Barbados</option>
                                                    <option value="Belarus" @if (old('country_of_citizenship')=="Belarus" ) {{ 'selected' }} @endif>Belarus</option>
                                                    <option value="Belgium" @if (old('country_of_citizenship')=="Belgium" ) {{ 'selected' }} @endif>Belgium</option>
                                                    <option value="Belize" @if (old('country_of_citizenship')=="Belize" ) {{ 'selected' }} @endif>Belize</option>
                                                    <option value="Benin" @if (old('country_of_citizenship')=="Benin" ) {{ 'selected' }} @endif>Benin</option>
                                                    <option value="Bermuda" @if (old('country_of_citizenship')=="Bermuda" ) {{ 'selected' }} @endif>Bermuda</option>
                                                    <option value="Bhutan" @if (old('country_of_citizenship')=="Bhutan" ) {{ 'selected' }} @endif>Bhutan</option>
                                                    <option value="Bolivia" @if (old('country_of_citizenship')=="Bolivia" ) {{ 'selected' }} @endif>Bolivia</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba" @if (old('country_of_citizenship')=="Bonaire, Sint Eustatius and Saba" ) {{ 'selected' }} @endif>Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina" @if (old('country_of_citizenship')=="Bosnia and Herzegovina" ) {{ 'selected' }} @endif>Bosnia and Herzegovina</option>
                                                    <option value="Botswana" @if (old('country_of_citizenship')=="Botswana" ) {{ 'selected' }} @endif>Botswana</option>
                                                    <option value="Bouvet Island" @if (old('country_of_citizenship')=="Bouvet Island" ) {{ 'selected' }} @endif>Bouvet Island</option>
                                                    <option value="Brazil" @if (old('country_of_citizenship')=="Brazil" ) {{ 'selected' }} @endif>Brazil</option>
                                                    <option value="British Indian Ocean Territory" @if (old('country_of_citizenship')=="British Indian Ocean Territory" ) {{ 'selected' }} @endif>British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam" @if (old('country_of_citizenship')=="Brunei Darussalam" ) {{ 'selected' }} @endif>Brunei Darussalam</option>
                                                    <option value="Bulgaria" @if (old('country_of_citizenship')=="Bulgaria" ) {{ 'selected' }} @endif>Bulgaria</option>
                                                    <option value="Burkina Faso" @if (old('country_of_citizenship')=="Burkina Faso" ) {{ 'selected' }} @endif>Burkina Faso</option>
                                                    <option value="Burundi" @if (old('country_of_citizenship')=="Burundi" ) {{ 'selected' }} @endif>Burundi</option>
                                                    <option value="Cambodia" @if (old('country_of_citizenship')=="Cambodia" ) {{ 'selected' }} @endif>Cambodia</option>
                                                    <option value="Cameroon" @if (old('country_of_citizenship')=="Cameroon" ) {{ 'selected' }} @endif>Cameroon</option>
                                                    <option value="Canada" @if (old('country_of_citizenship')=="Canada" ) {{ 'selected' }} @endif>Canada</option>
                                                    <option value="Cape Verde" @if (old('country_of_citizenship')=="Cape Verde" ) {{ 'selected' }} @endif>Cape Verde</option>
                                                    <option value="Cayman Islands" @if (old('country_of_citizenship')=="Cayman Islands" ) {{ 'selected' }} @endif>Cayman Islands</option>
                                                    <option value="Central African Republic" @if (old('country_of_citizenship')=="Central African Republic" ) {{ 'selected' }} @endif>Central African Republic</option>
                                                    <option value="Chad" @if (old('country_of_citizenship')=="Chad" ) {{ 'selected' }} @endif>Chad</option>
                                                    <option value="Chile" @if (old('country_of_citizenship')=="Chile" ) {{ 'selected' }} @endif>Chile</option>
                                                    <option value="China" @if (old('country_of_citizenship')=="China" ) {{ 'selected' }} @endif>China</option>
                                                    <option value="Christmas Island" @if (old('country_of_citizenship')=="Christmas Island" ) {{ 'selected' }} @endif>Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands" @if (old('country_of_citizenship')=="Cocos (Keeling) Islands" ) {{ 'selected' }} @endif>Cocos (Keeling) Islands</option>
                                                    <option value="Colombia" @if (old('country_of_citizenship')=="Colombia" ) {{ 'selected' }} @endif>Colombia</option>
                                                    <option value="Comoros" @if (old('country_of_citizenship')=="Comoros" ) {{ 'selected' }} @endif>Comoros</option>
                                                    <option value="Congo" @if (old('country_of_citizenship')=="Congo" ) {{ 'selected' }} @endif>Congo</option>
                                                    <option value="Congo, Democratic Republic of the Congo" @if (old('country_of_citizenship')=="Congo, Democratic Republic of the Congo" ) {{ 'selected' }} @endif>Congo, Democratic Republic of the Congo</option>
                                                    <option value="Cook Islands" @if (old('country_of_citizenship')=="Cook Islands" ) {{ 'selected' }} @endif>Cook Islands</option>
                                                    <option value="Costa Rica" @if (old('country_of_citizenship')=="Costa Rica" ) {{ 'selected' }} @endif>Costa Rica</option>
                                                    <option value="Cote D'Ivoire" @if (old('country_of_citizenship')=="Cote D'Ivoire" ) {{ 'selected' }} @endif>Cote D'Ivoire</option>
                                                    <option value="Croatia" @if (old('country_of_citizenship')=="Croatia" ) {{ 'selected' }} @endif>Croatia</option>
                                                    <option value="Cuba" @if (old('country_of_citizenship')=="Cuba" ) {{ 'selected' }} @endif>Cuba</option>
                                                    <option value="Curacao" @if (old('country_of_citizenship')=="Curacao" ) {{ 'selected' }} @endif>Curacao</option>
                                                    <option value="Cyprus" @if (old('country_of_citizenship')=="Cyprus" ) {{ 'selected' }} @endif>Cyprus</option>
                                                    <option value="Czech Republic" @if (old('country_of_citizenship')=="Czech Republic" ) {{ 'selected' }} @endif>Czech Republic</option>
                                                    <option value="Denmark" @if (old('country_of_citizenship')=="Denmark" ) {{ 'selected' }} @endif>Denmark</option>
                                                    <option value="Djibouti" @if (old('country_of_citizenship')=="Djibouti" ) {{ 'selected' }} @endif>Djibouti</option>
                                                    <option value="Dominica" @if (old('country_of_citizenship')=="Dominica" ) {{ 'selected' }} @endif>Dominica</option>
                                                    <option value="Dominican Republic" @if (old('country_of_citizenship')=="Dominican Republic" ) {{ 'selected' }} @endif>Dominican Republic</option>
                                                    <option value="Ecuador" @if (old('country_of_citizenship')=="Ecuador" ) {{ 'selected' }} @endif>Ecuador</option>
                                                    <option value="Egypt" @if (old('country_of_citizenship')=="Egypt" ) {{ 'selected' }} @endif>Egypt</option>
                                                    <option value="El Salvador" @if (old('country_of_citizenship')=="El Salvador" ) {{ 'selected' }} @endif>El Salvador</option>
                                                    <option value="Equatorial Guinea" @if (old('country_of_citizenship')=="Equatorial Guinea" ) {{ 'selected' }} @endif>Equatorial Guinea</option>
                                                    <option value="Eritrea" @if (old('country_of_citizenship')=="Eritrea" ) {{ 'selected' }} @endif>Eritrea</option>
                                                    <option value="Estonia" @if (old('country_of_citizenship')=="Estonia" ) {{ 'selected' }} @endif>Estonia</option>
                                                    <option value="Ethiopia" @if (old('country_of_citizenship')=="Ethiopia" ) {{ 'selected' }} @endif>Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)" @if (old('country_of_citizenship')=="Falkland Islands (Malvinas)" ) {{ 'selected' }} @endif>Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands" @if (old('country_of_citizenship')=="Faroe Islands" ) {{ 'selected' }} @endif>Faroe Islands</option>
                                                    <option value="Fiji" @if (old('country_of_citizenship')=="Fiji" ) {{ 'selected' }} @endif>Fiji</option>
                                                    <option value="Finland" @if (old('country_of_citizenship')=="Finland" ) {{ 'selected' }} @endif>Finland</option>
                                                    <option value="France" @if (old('country_of_citizenship')=="France" ) {{ 'selected' }} @endif>France</option>
                                                    <option value="French Guiana" @if (old('country_of_citizenship')=="French Guiana" ) {{ 'selected' }} @endif>French Guiana</option>
                                                    <option value="French Polynesia" @if (old('country_of_citizenship')=="French Polynesia" ) {{ 'selected' }} @endif>French Polynesia</option>
                                                    <option value="French Southern Territories" @if (old('country_of_citizenship')=="French Southern Territories" ) {{ 'selected' }} @endif>French Southern Territories</option>
                                                    <option value="Gabon" @if (old('country_of_citizenship')=="Gabon" ) {{ 'selected' }} @endif>Gabon</option>
                                                    <option value="Gambia" @if (old('country_of_citizenship')=="Gambia" ) {{ 'selected' }} @endif>Gambia</option>
                                                    <option value="Georgia" @if (old('country_of_citizenship')=="Georgia" ) {{ 'selected' }} @endif>Georgia</option>
                                                    <option value="Germany" @if (old('country_of_citizenship')=="Germany" ) {{ 'selected' }} @endif>Germany</option>
                                                    <option value="Ghana" @if (old('country_of_citizenship')=="Ghana" ) {{ 'selected' }} @endif>Ghana</option>
                                                    <option value="Gibraltar" @if (old('country_of_citizenship')=="Gibraltar" ) {{ 'selected' }} @endif>Gibraltar</option>
                                                    <option value="Greece" @if (old('country_of_citizenship')=="Greece" ) {{ 'selected' }} @endif>Greece</option>
                                                    <option value="Greenland" @if (old('country_of_citizenship')=="Greenland" ) {{ 'selected' }} @endif>Greenland</option>
                                                    <option value="Grenada" @if (old('country_of_citizenship')=="Grenada" ) {{ 'selected' }} @endif>Grenada</option>
                                                    <option value="Guadeloupe" @if (old('country_of_citizenship')=="Guadeloupe" ) {{ 'selected' }} @endif>Guadeloupe</option>
                                                    <option value="Guam" @if (old('country_of_citizenship')=="Guam" ) {{ 'selected' }} @endif>Guam</option>
                                                    <option value="Guatemala" @if (old('country_of_citizenship')=="Guatemala" ) {{ 'selected' }} @endif>Guatemala</option>
                                                    <option value="Guernsey" @if (old('country_of_citizenship')=="Guernsey" ) {{ 'selected' }} @endif>Guernsey</option>
                                                    <option value="Guinea" @if (old('country_of_citizenship')=="Guinea" ) {{ 'selected' }} @endif>Guinea</option>
                                                    <option value="Guinea-Bissau" @if (old('country_of_citizenship')=="Guinea-Bissau" ) {{ 'selected' }} @endif>Guinea-Bissau</option>
                                                    <option value="Guyana" @if (old('country_of_citizenship')=="Guyana" ) {{ 'selected' }} @endif>Guyana</option>
                                                    <option value="Haiti" @if (old('country_of_citizenship')=="Haiti" ) {{ 'selected' }} @endif>Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands" @if (old('country_of_citizenship')=="Heard Island and Mcdonald Islands" ) {{ 'selected' }} @endif>Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)" @if (old('country_of_citizenship')=="Holy See (Vatican City State)" ) {{ 'selected' }} @endif>Holy See (Vatican City State)</option>
                                                    <option value="Honduras" @if (old('country_of_citizenship')=="Honduras" ) {{ 'selected' }} @endif>Honduras</option>
                                                    <option value="Hong Kong" @if (old('country_of_citizenship')=="Hong Kong" ) {{ 'selected' }} @endif>Hong Kong</option>
                                                    <option value="Hungary" @if (old('country_of_citizenship')=="Hungary" ) {{ 'selected' }} @endif>Hungary</option>
                                                    <option value="Iceland" @if (old('country_of_citizenship')=="Iceland" ) {{ 'selected' }} @endif>Iceland</option>
                                                    <option value="India" @if (old('country_of_citizenship')=="India" ) {{ 'selected' }} @endif>India</option>
                                                    <option value="Indonesia" @if (old('country_of_citizenship')=="Indonesia" ) {{ 'selected' }} @endif>Indonesia</option>
                                                    <option value="Iran, Islamic Republic of" @if (old('country_of_citizenship')=="Iran, Islamic Republic of" ) {{ 'selected' }} @endif>Iran, Islamic Republic of</option>
                                                    <option value="Iraq" @if (old('country_of_citizenship')=="Iraq" ) {{ 'selected' }} @endif>Iraq</option>
                                                    <option value="Ireland" @if (old('country_of_citizenship')=="Ireland" ) {{ 'selected' }} @endif>Ireland</option>
                                                    <option value="Isle of Man" @if (old('country_of_citizenship')=="Isle of Man" ) {{ 'selected' }} @endif>Isle of Man</option>
                                                    <option value="Israel" @if (old('country_of_citizenship')=="Israel" ) {{ 'selected' }} @endif>Israel</option>
                                                    <option value="Italy" @if (old('country_of_citizenship')=="Italy" ) {{ 'selected' }} @endif>Italy</option>
                                                    <option value="Jamaica" @if (old('country_of_citizenship')=="Jamaica" ) {{ 'selected' }} @endif>Jamaica</option>
                                                    <option value="Japan" @if (old('country_of_citizenship')=="Japan" ) {{ 'selected' }} @endif>Japan</option>
                                                    <option value="Jersey" @if (old('country_of_citizenship')=="Jersey" ) {{ 'selected' }} @endif>Jersey</option>
                                                    <option value="Jordan" @if (old('country_of_citizenship')=="Jordan" ) {{ 'selected' }} @endif>Jordan</option>
                                                    <option value="Kazakhstan" @if (old('country_of_citizenship')=="Kazakhstan" ) {{ 'selected' }} @endif>Kazakhstan</option>
                                                    <option value="Kenya" @if (old('country_of_citizenship')=="Kenya" ) {{ 'selected' }} @endif>Kenya</option>
                                                    <option value="Kiribati" @if (old('country_of_citizenship')=="Kiribati" ) {{ 'selected' }} @endif>Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of" @if (old('country_of_citizenship')=="Korea, Democratic People's Republic of" ) {{ 'selected' }} @endif>Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of" @if (old('country_of_citizenship')=="Korea, Republic of" ) {{ 'selected' }} @endif>Korea, Republic of</option>
                                                    <option value="Kosovo" @if (old('country_of_citizenship')=="Kosovo" ) {{ 'selected' }} @endif>Kosovo</option>
                                                    <option value="Kuwait" @if (old('country_of_citizenship')=="Kuwait" ) {{ 'selected' }} @endif>Kuwait</option>
                                                    <option value="Kyrgyzstan" @if (old('country_of_citizenship')=="Kyrgyzstan" ) {{ 'selected' }} @endif>Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic" @if (old('country_of_citizenship')=="Lao People's Democratic Republic" ) {{ 'selected' }} @endif>Lao People's Democratic Republic</option>
                                                    <option value="Latvia" @if (old('country_of_citizenship')=="Latvia" ) {{ 'selected' }} @endif>Latvia</option>
                                                    <option value="Lebanon" @if (old('country_of_citizenship')=="Lebanon" ) {{ 'selected' }} @endif>Lebanon</option>
                                                    <option value="Lesotho" @if (old('country_of_citizenship')=="Lesotho" ) {{ 'selected' }} @endif>Lesotho</option>
                                                    <option value="Liberia" @if (old('country_of_citizenship')=="Liberia" ) {{ 'selected' }} @endif>Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya" @if (old('country_of_citizenship')=="Libyan Arab Jamahiriya" ) {{ 'selected' }} @endif>Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein" @if (old('country_of_citizenship')=="Liechtenstein" ) {{ 'selected' }} @endif>Liechtenstein</option>
                                                    <option value="Lithuania" @if (old('country_of_citizenship')=="Lithuania" ) {{ 'selected' }} @endif>Lithuania</option>
                                                    <option value="Luxembourg" @if (old('country_of_citizenship')=="Luxembourg" ) {{ 'selected' }} @endif>Luxembourg</option>
                                                    <option value="Macao" @if (old('country_of_citizenship')=="Macao" ) {{ 'selected' }} @endif>Macao</option>
                                                    <option value="Macedonia, the Former Yugoslav Republic of" @if (old('country_of_citizenship')=="Macedonia, the Former Yugoslav Republic of" ) {{ 'selected' }} @endif>Macedonia, the Former Yugoslav Republic of</option>
                                                    <option value="Madagascar" @if (old('country_of_citizenship')=="Madagascar" ) {{ 'selected' }} @endif>Madagascar</option>
                                                    <option value="Malawi" @if (old('country_of_citizenship')=="Malawi" ) {{ 'selected' }} @endif>Malawi</option>
                                                    <option value="Malaysia" @if (old('country_of_citizenship')=="Malaysia" ) {{ 'selected' }} @endif>Malaysia</option>
                                                    <option value="Maldives" @if (old('country_of_citizenship')=="Maldives" ) {{ 'selected' }} @endif>Maldives</option>
                                                    <option value="Mali" @if (old('country_of_citizenship')=="Mali" ) {{ 'selected' }} @endif>Mali</option>
                                                    <option value="Malta" @if (old('country_of_citizenship')=="Malta" ) {{ 'selected' }} @endif>Malta</option>
                                                    <option value="Marshall Islands" @if (old('country_of_citizenship')=="Marshall Islands" ) {{ 'selected' }} @endif>Marshall Islands</option>
                                                    <option value="Martinique" @if (old('country_of_citizenship')=="Martinique" ) {{ 'selected' }} @endif>Martinique</option>
                                                    <option value="Mauritania" @if (old('country_of_citizenship')=="Mauritania" ) {{ 'selected' }} @endif>Mauritania</option>
                                                    <option value="Mauritius" @if (old('country_of_citizenship')=="Mauritius" ) {{ 'selected' }} @endif>Mauritius</option>
                                                    <option value="Mayotte" @if (old('country_of_citizenship')=="Mayotte" ) {{ 'selected' }} @endif>Mayotte</option>
                                                    <option value="Mexico" @if (old('country_of_citizenship')=="Mexico" ) {{ 'selected' }} @endif>Mexico</option>
                                                    <option value="Micronesia, Federated States of" @if (old('country_of_citizenship')=="Micronesia, Federated States of" ) {{ 'selected' }} @endif>Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of" @if (old('country_of_citizenship')=="Moldova, Republic of" ) {{ 'selected' }} @endif>Moldova, Republic of</option>
                                                    <option value="Monaco" @if (old('country_of_citizenship')=="Monaco" ) {{ 'selected' }} @endif>Monaco</option>
                                                    <option value="Mongolia" @if (old('country_of_citizenship')=="Mongolia" ) {{ 'selected' }} @endif>Mongolia</option>
                                                    <option value="Montenegro" @if (old('country_of_citizenship')=="Montenegro" ) {{ 'selected' }} @endif>Montenegro</option>
                                                    <option value="Montserrat" @if (old('country_of_citizenship')=="Montserrat" ) {{ 'selected' }} @endif>Montserrat</option>
                                                    <option value="Morocco" @if (old('country_of_citizenship')=="Morocco" ) {{ 'selected' }} @endif>Morocco</option>
                                                    <option value="Mozambique" @if (old('country_of_citizenship')=="Mozambique" ) {{ 'selected' }} @endif>Mozambique</option>
                                                    <option value="Myanmar" @if (old('country_of_citizenship')=="Myanmar" ) {{ 'selected' }} @endif>Myanmar</option>
                                                    <option value="Namibia" @if (old('country_of_citizenship')=="Namibia" ) {{ 'selected' }} @endif>Namibia</option>
                                                    <option value="Nauru" @if (old('country_of_citizenship')=="Nauru" ) {{ 'selected' }} @endif>Nauru</option>
                                                    <option value="Nepal" @if (old('country_of_citizenship')=="Nepal" ) {{ 'selected' }} @endif>Nepal</option>
                                                    <option value="Netherlands" @if (old('country_of_citizenship')=="Netherlands" ) {{ 'selected' }} @endif>Netherlands</option>
                                                    <option value="Netherlands Antilles" @if (old('country_of_citizenship')=="Netherlands Antilles" ) {{ 'selected' }} @endif>Netherlands Antilles</option>
                                                    <option value="New Caledonia" @if (old('country_of_citizenship')=="New Caledonia" ) {{ 'selected' }} @endif>New Caledonia</option>
                                                    <option value="New Zealand" @if (old('country_of_citizenship')=="New Zealand" ) {{ 'selected' }} @endif>New Zealand</option>
                                                    <option value="Nicaragua" @if (old('country_of_citizenship')=="Nicaragua" ) {{ 'selected' }} @endif>Nicaragua</option>
                                                    <option value="Niger" @if (old('country_of_citizenship')=="Niger" ) {{ 'selected' }} @endif>Niger</option>
                                                    <option value="Nigeria" @if (old('country_of_citizenship')=="Nigeria" ) {{ 'selected' }} @endif>Nigeria</option>
                                                    <option value="Niue" @if (old('country_of_citizenship')=="Niue" ) {{ 'selected' }} @endif>Niue</option>
                                                    <option value="Norfolk Island" @if (old('country_of_citizenship')=="Norfolk Island" ) {{ 'selected' }} @endif>Norfolk Island</option>
                                                    <option value="Northern Mariana Islands" @if (old('country_of_citizenship')=="Northern Mariana Islands" ) {{ 'selected' }} @endif>Northern Mariana Islands</option>
                                                    <option value="Norway" @if (old('country_of_citizenship')=="Norway" ) {{ 'selected' }} @endif>Norway</option>
                                                    <option value="Oman" @if (old('country_of_citizenship')=="Oman" ) {{ 'selected' }} @endif>Oman</option>
                                                    <option value="Pakistan" @if (old('country_of_citizenship')=="Pakistan" ) {{ 'selected' }} @endif>Pakistan</option>
                                                    <option value="Palau" @if (old('country_of_citizenship')=="Palau" ) {{ 'selected' }} @endif>Palau</option>
                                                    <option value="Palestinian Territory, Occupied" @if (old('country_of_citizenship')=="Palestinian Territory, Occupied" ) {{ 'selected' }} @endif>Palestinian Territory, Occupied</option>
                                                    <option value="Panama" @if (old('country_of_citizenship')=="Panama" ) {{ 'selected' }} @endif>Panama</option>
                                                    <option value="Papua New Guinea" @if (old('country_of_citizenship')=="Papua New Guinea" ) {{ 'selected' }} @endif>Papua New Guinea</option>
                                                    <option value="Paraguay" @if (old('country_of_citizenship')=="Paraguay" ) {{ 'selected' }} @endif>Paraguay</option>
                                                    <option value="Peru" @if (old('country_of_citizenship')=="Peru" ) {{ 'selected' }} @endif>Peru</option>
                                                    <option value="Philippines" @if (old('country_of_citizenship')=="Philippines" ) {{ 'selected' }} @endif>Philippines</option>
                                                    <option value="Pitcairn" @if (old('country_of_citizenship')=="Pitcairn" ) {{ 'selected' }} @endif>Pitcairn</option>
                                                    <option value="Poland" @if (old('country_of_citizenship')=="Poland" ) {{ 'selected' }} @endif>Poland</option>
                                                    <option value="Portugal" @if (old('country_of_citizenship')=="Portugal" ) {{ 'selected' }} @endif>Portugal</option>
                                                    <option value="Puerto Rico" @if (old('country_of_citizenship')=="Puerto Rico" ) {{ 'selected' }} @endif>Puerto Rico</option>
                                                    <option value="Qatar" @if (old('country_of_citizenship')=="Qatar" ) {{ 'selected' }} @endif>Qatar</option>
                                                    <option value="Reunion" @if (old('country_of_citizenship')=="Reunion" ) {{ 'selected' }} @endif>Reunion</option>
                                                    <option value="Romania" @if (old('country_of_citizenship')=="Romania" ) {{ 'selected' }} @endif>Romania</option>
                                                    <option value="Russian Federation" @if (old('country_of_citizenship')=="Russian Federation" ) {{ 'selected' }} @endif>Russian Federation</option>
                                                    <option value="Rwanda" @if (old('country_of_citizenship')=="Rwanda" ) {{ 'selected' }} @endif>Rwanda</option>
                                                    <option value="Saint Barthelemy" @if (old('country_of_citizenship')=="Saint Barthelemy" ) {{ 'selected' }} @endif>Saint Barthelemy</option>
                                                    <option value="Saint Helena" @if (old('country_of_citizenship')=="Saint Helena" ) {{ 'selected' }} @endif>Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis" @if (old('country_of_citizenship')=="Saint Kitts and Nevis" ) {{ 'selected' }} @endif>Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia" @if (old('country_of_citizenship')=="Saint Lucia" ) {{ 'selected' }} @endif>Saint Lucia</option>
                                                    <option value="Saint Martin" @if (old('country_of_citizenship')=="Saint Martin" ) {{ 'selected' }} @endif>Saint Martin</option>
                                                    <option value="Saint Pierre and Miquelon" @if (old('country_of_citizenship')=="Saint Pierre and Miquelon" ) {{ 'selected' }} @endif>Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and the Grenadines" @if (old('country_of_citizenship')=="Saint Vincent and the Grenadines" ) {{ 'selected' }} @endif>Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa" @if (old('country_of_citizenship')=="Samoa" ) {{ 'selected' }} @endif>Samoa</option>
                                                    <option value="San Marino" @if (old('country_of_citizenship')=="San Marino" ) {{ 'selected' }} @endif>San Marino</option>
                                                    <option value="Sao Tome and Principe" @if (old('country_of_citizenship')=="Sao Tome and Principe" ) {{ 'selected' }} @endif>Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia" @if (old('country_of_citizenship')=="Saudi Arabia" ) {{ 'selected' }} @endif>Saudi Arabia</option>
                                                    <option value="Senegal" @if (old('country_of_citizenship')=="Senegal" ) {{ 'selected' }} @endif>Senegal</option>
                                                    <option value="Serbia" @if (old('country_of_citizenship')=="Serbia" ) {{ 'selected' }} @endif>Serbia</option>
                                                    <option value="Serbia and Montenegro" @if (old('country_of_citizenship')=="Serbia and Montenegro" ) {{ 'selected' }} @endif>Serbia and Montenegro</option>
                                                    <option value="Seychelles" @if (old('country_of_citizenship')=="Seychelles" ) {{ 'selected' }} @endif>Seychelles</option>
                                                    <option value="Sierra Leone" @if (old('country_of_citizenship')=="Sierra Leone" ) {{ 'selected' }} @endif>Sierra Leone</option>
                                                    <option value="Singapore" @if (old('country_of_citizenship')=="Singapore" ) {{ 'selected' }} @endif>Singapore</option>
                                                    <option value="Sint Maarten" @if (old('country_of_citizenship')=="Sint Maarten" ) {{ 'selected' }} @endif>Sint Maarten</option>
                                                    <option value="Slovakia" @if (old('country_of_citizenship')=="Slovakia" ) {{ 'selected' }} @endif>Slovakia</option>
                                                    <option value="Slovenia" @if (old('country_of_citizenship')=="Slovenia" ) {{ 'selected' }} @endif>Slovenia</option>
                                                    <option value="Solomon Islands" @if (old('country_of_citizenship')=="Solomon Islands" ) {{ 'selected' }} @endif>Solomon Islands</option>
                                                    <option value="Somalia" @if (old('country_of_citizenship')=="Somalia" ) {{ 'selected' }} @endif>Somalia</option>
                                                    <option value="South Africa" @if (old('country_of_citizenship')=="South Africa" ) {{ 'selected' }} @endif>South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands" @if (old('country_of_citizenship')=="South Georgia and the South Sandwich Islands" ) {{ 'selected' }} @endif>South Georgia and the South Sandwich Islands</option>
                                                    <option value="South Sudan" @if (old('country_of_citizenship')=="South Sudan" ) {{ 'selected' }} @endif>South Sudan</option>
                                                    <option value="Spain" @if (old('country_of_citizenship')=="Spain" ) {{ 'selected' }} @endif>Spain</option>
                                                    <option value="Sri Lanka" @if (old('country_of_citizenship')=="Sri Lanka" ) {{ 'selected' }} @endif>Sri Lanka</option>
                                                    <option value="Sudan" @if (old('country_of_citizenship')=="Sudan" ) {{ 'selected' }} @endif>Sudan</option>
                                                    <option value="Suriname" @if (old('country_of_citizenship')=="Suriname" ) {{ 'selected' }} @endif>Suriname</option>
                                                    <option value="Svalbard and Jan Mayen" @if (old('country_of_citizenship')=="Svalbard and Jan Mayen" ) {{ 'selected' }} @endif>Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland" @if (old('country_of_citizenship')=="Swaziland" ) {{ 'selected' }} @endif>Swaziland</option>
                                                    <option value="Sweden" @if (old('country_of_citizenship')=="Sweden" ) {{ 'selected' }} @endif>Sweden</option>
                                                    <option value="Switzerland" @if (old('country_of_citizenship')=="Switzerland" ) {{ 'selected' }} @endif>Switzerland</option>
                                                    <option value="Syrian Arab Republic" @if (old('country_of_citizenship')=="Syrian Arab Republic" ) {{ 'selected' }} @endif>Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China" @if (old('country_of_citizenship')=="Taiwan, Province of China" ) {{ 'selected' }} @endif>Taiwan, Province of China</option>
                                                    <option value="Tajikistan" @if (old('country_of_citizenship')=="Tajikistan" ) {{ 'selected' }} @endif>Tajikistan</option>
                                                    <option value="Tanzania, United Republic of" @if (old('country_of_citizenship')=="Tanzania, United Republic of" ) {{ 'selected' }} @endif>Tanzania, United Republic of</option>
                                                    <option value="Thailand" @if (old('country_of_citizenship')=="Thailand" ) {{ 'selected' }} @endif>Thailand</option>
                                                    <option value="Timor-Leste" @if (old('country_of_citizenship')=="Timor-Leste" ) {{ 'selected' }} @endif>Timor-Leste</option>
                                                    <option value="Togo" @if (old('country_of_citizenship')=="Togo" ) {{ 'selected' }} @endif>Togo</option>
                                                    <option value="Tokelau" @if (old('country_of_citizenship')=="Tokelau" ) {{ 'selected' }} @endif>Tokelau</option>
                                                    <option value="Tonga" @if (old('country_of_citizenship')=="Tonga" ) {{ 'selected' }} @endif>Tonga</option>
                                                    <option value="Trinidad and Tobago" @if (old('country_of_citizenship')=="Trinidad and Tobago" ) {{ 'selected' }} @endif>Trinidad and Tobago</option>
                                                    <option value="Tunisia" @if (old('country_of_citizenship')=="Tunisia" ) {{ 'selected' }} @endif>Tunisia</option>
                                                    <option value="Turkey" @if (old('country_of_citizenship')=="Turkey" ) {{ 'selected' }} @endif>Turkey</option>
                                                    <option value="Turkmenistan" @if (old('country_of_citizenship')=="Turkmenistan" ) {{ 'selected' }} @endif>Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands" @if (old('country_of_citizenship')=="Turks and Caicos Islands" ) {{ 'selected' }} @endif>Turks and Caicos Islands</option>
                                                    <option value="Tuvalu" @if (old('country_of_citizenship')=="Tuvalu" ) {{ 'selected' }} @endif>Tuvalu</option>
                                                    <option value="Uganda" @if (old('country_of_citizenship')=="Uganda" ) {{ 'selected' }} @endif>Uganda</option>
                                                    <option value="Ukraine" @if (old('country_of_citizenship')=="Ukraine" ) {{ 'selected' }} @endif>Ukraine</option>
                                                    <option value="United Arab Emirates" @if (old('country_of_citizenship')=="United Arab Emirates" ) {{ 'selected' }} @endif>United Arab Emirates</option>
                                                    <option value="United Kingdom" @if (old('country_of_citizenship')=="United Kingdom" ) {{ 'selected' }} @endif>United Kingdom</option>
                                                    <option value="United States" @if (old('country_of_citizenship')=="United States" ) {{ 'selected' }} @endif>United States</option>
                                                    <option value="United States Minor Outlying Islands" @if (old('country_of_citizenship')=="United States Minor Outlying Islands" ) {{ 'selected' }} @endif>United States Minor Outlying Islands</option>
                                                    <option value="Uruguay" @if (old('country_of_citizenship')=="Uruguay" ) {{ 'selected' }} @endif>Uruguay</option>
                                                    <option value="Uzbekistan" @if (old('country_of_citizenship')=="Uzbekistan" ) {{ 'selected' }} @endif>Uzbekistan</option>
                                                    <option value="Vanuatu" @if (old('country_of_citizenship')=="Vanuatu" ) {{ 'selected' }} @endif>Vanuatu</option>
                                                    <option value="Venezuela" @if (old('country_of_citizenship')=="Venezuela" ) {{ 'selected' }} @endif>Venezuela</option>
                                                    <option value="Viet Nam" @if (old('country_of_citizenship')=="Viet Nam" ) {{ 'selected' }} @endif>Viet Nam</option>
                                                    <option value="Virgin Islands, British" @if (old('country_of_citizenship')=="Virgin Islands, British" ) {{ 'selected' }} @endif>Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.s." @if (old('country_of_citizenship')=="Virgin Islands, U.s." ) {{ 'selected' }} @endif>Virgin Islands, U.s.</option>
                                                    <option value="Wallis and Futuna" @if (old('country_of_citizenship')=="Wallis and Futuna" ) {{ 'selected' }} @endif>Wallis and Futuna</option>
                                                    <option value="Western Sahara" @if (old('country_of_citizenship')=="Western Sahara" ) {{ 'selected' }} @endif>Western Sahara</option>
                                                    <option value="Yemen" @if (old('country_of_citizenship')=="Yemen" ) {{ 'selected' }} @endif>Yemen</option>
                                                    <option value="Zambia" @if (old('country_of_citizenship')=="Zambia" ) {{ 'selected' }} @endif>Zambia</option>
                                                    <option value="Zimbabwe" @if (old('country_of_citizenship')=="Zimbabwe" ) {{ 'selected' }} @endif>Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Passport Number
                                                    <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect your passport information for identity verification purposes, your school or program of interest may require this information to process your application. If applicable, it may also be used for processing your visa."></i>
                                                    <span class="red">*</span>
                                                </label>
                                                <input name="passport_number" id="passport_number" type="tel" class="form-control" placeholder="Enter Passport Number...">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group radio-main">
                                                <label> Marital Status
                                                    <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect information about your marital status because your school or program of interest may require this information to process your application."></i>
                                                    <span class="red">*</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="marital_status" value="Single" id="flexRadioDefault1" {{(old('marital_status') == 'Single') ? 'checked' : ''}} checked>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Single
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="marital_status" value="Married" {{(old('marital_status') == 'Married') ? 'checked' : ''}} id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Married
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group radio-main">
                                                <label> Gender <span class="red">*</span> </label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender" value="Female" id="gender" {{(old('gender') == 'Female') ? 'checked' : ''}} checked>
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender" value="Male" {{(old('gender') == 'Male') ? 'checked' : ''}} id="gender">
                                                            <label class="form-check-label" for="flexRadioDefault4">
                                                                Male
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="address-detail">
                                    <h4>Address Detail</h4>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label> Address <span class="red">*</span> </label>
                                                <input name="address" id="address" type="text" class="form-control" placeholder="Enter Full Address...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> City/Town <span class="red">*</span> </label>
                                                <input name="city_town" id="city_town" type="text" class="form-control" placeholder="Enter City Name...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country <span class="red">*</span> </label>
                                                <select name="country" id="country" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Country</option>
                                                    <option value="Afghanistan" @if (old('country')=="Afghanistan" ) {{ 'selected' }} @endif>Afghanistan</option>
                                                    <option value="Aland Islands" @if (old('country')=="Aland Islands" ) {{ 'selected' }} @endif>Aland Islands</option>
                                                    <option value="Albania" @if (old('country')=="Albania" ) {{ 'selected' }} @endif>Albania</option>
                                                    <option value="Algeria" @if (old('country')=="Algeria" ) {{ 'selected' }} @endif>Algeria</option>
                                                    <option value="American Samoa" @if (old('country')=="American Samoa" ) {{ 'selected' }} @endif>American Samoa</option>
                                                    <option value="Andorra" @if (old('country')=="Andorra" ) {{ 'selected' }} @endif>Andorra</option>
                                                    <option value="Angola" @if (old('country')=="Angola" ) {{ 'selected' }} @endif>Angola</option>
                                                    <option value="Anguilla" @if (old('country')=="Anguilla" ) {{ 'selected' }} @endif>Anguilla</option>
                                                    <option value="Antarctica" @if (old('country')=="Antarctica" ) {{ 'selected' }} @endif>Antarctica</option>
                                                    <option value="Antigua and Barbuda" @if (old('country')=="Antigua and Barbuda" ) {{ 'selected' }} @endif>Antigua and Barbuda</option>
                                                    <option value="Argentina" @if (old('country')=="Argentina" ) {{ 'selected' }} @endif>Argentina</option>
                                                    <option value="Armenia" @if (old('country')=="Armenia" ) {{ 'selected' }} @endif>Armenia</option>
                                                    <option value="Aruba" @if (old('country')=="Aruba" ) {{ 'selected' }} @endif>Aruba</option>
                                                    <option value="Australia" @if (old('country')=="Australia" ) {{ 'selected' }} @endif>Australia</option>
                                                    <option value="Austria" @if (old('country')=="Austria" ) {{ 'selected' }} @endif>Austria</option>
                                                    <option value="Azerbaijan" @if (old('country')=="Azerbaijan" ) {{ 'selected' }} @endif>Azerbaijan</option>
                                                    <option value="Bahamas" @if (old('country')=="Bahamas" ) {{ 'selected' }} @endif>Bahamas</option>
                                                    <option value="Bahrain" @if (old('country')=="Bahrain" ) {{ 'selected' }} @endif>Bahrain</option>
                                                    <option value="Bangladesh" @if (old('country')=="Bangladesh" ) {{ 'selected' }} @endif>Bangladesh</option>
                                                    <option value="Barbados" @if (old('country')=="Barbados" ) {{ 'selected' }} @endif>Barbados</option>
                                                    <option value="Belarus" @if (old('country')=="Belarus" ) {{ 'selected' }} @endif>Belarus</option>
                                                    <option value="Belgium" @if (old('country')=="Belgium" ) {{ 'selected' }} @endif>Belgium</option>
                                                    <option value="Belize" @if (old('country')=="Belize" ) {{ 'selected' }} @endif>Belize</option>
                                                    <option value="Benin" @if (old('country')=="Benin" ) {{ 'selected' }} @endif>Benin</option>
                                                    <option value="Bermuda" @if (old('country')=="Bermuda" ) {{ 'selected' }} @endif>Bermuda</option>
                                                    <option value="Bhutan" @if (old('country')=="Bhutan" ) {{ 'selected' }} @endif>Bhutan</option>
                                                    <option value="Bolivia" @if (old('country')=="Bolivia" ) {{ 'selected' }} @endif>Bolivia</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba" @if (old('country')=="Bonaire, Sint Eustatius and Saba" ) {{ 'selected' }} @endif>Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina" @if (old('country')=="Bosnia and Herzegovina" ) {{ 'selected' }} @endif>Bosnia and Herzegovina</option>
                                                    <option value="Botswana" @if (old('country')=="Botswana" ) {{ 'selected' }} @endif>Botswana</option>
                                                    <option value="Bouvet Island" @if (old('country')=="Bouvet Island" ) {{ 'selected' }} @endif>Bouvet Island</option>
                                                    <option value="Brazil" @if (old('country')=="Brazil" ) {{ 'selected' }} @endif>Brazil</option>
                                                    <option value="British Indian Ocean Territory" @if (old('country')=="British Indian Ocean Territory" ) {{ 'selected' }} @endif>British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam" @if (old('country')=="Brunei Darussalam" ) {{ 'selected' }} @endif>Brunei Darussalam</option>
                                                    <option value="Bulgaria" @if (old('country')=="Bulgaria" ) {{ 'selected' }} @endif>Bulgaria</option>
                                                    <option value="Burkina Faso" @if (old('country')=="Burkina Faso" ) {{ 'selected' }} @endif>Burkina Faso</option>
                                                    <option value="Burundi" @if (old('country')=="Burundi" ) {{ 'selected' }} @endif>Burundi</option>
                                                    <option value="Cambodia" @if (old('country')=="Cambodia" ) {{ 'selected' }} @endif>Cambodia</option>
                                                    <option value="Cameroon" @if (old('country')=="Cameroon" ) {{ 'selected' }} @endif>Cameroon</option>
                                                    <option value="Canada" @if (old('country')=="Canada" ) {{ 'selected' }} @endif>Canada</option>
                                                    <option value="Cape Verde" @if (old('country')=="Cape Verde" ) {{ 'selected' }} @endif>Cape Verde</option>
                                                    <option value="Cayman Islands" @if (old('country')=="Cayman Islands" ) {{ 'selected' }} @endif>Cayman Islands</option>
                                                    <option value="Central African Republic" @if (old('country')=="Central African Republic" ) {{ 'selected' }} @endif>Central African Republic</option>
                                                    <option value="Chad" @if (old('country')=="Chad" ) {{ 'selected' }} @endif>Chad</option>
                                                    <option value="Chile" @if (old('country')=="Chile" ) {{ 'selected' }} @endif>Chile</option>
                                                    <option value="China" @if (old('country')=="China" ) {{ 'selected' }} @endif>China</option>
                                                    <option value="Christmas Island" @if (old('country')=="Christmas Island" ) {{ 'selected' }} @endif>Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands" @if (old('country')=="Cocos (Keeling) Islands" ) {{ 'selected' }} @endif>Cocos (Keeling) Islands</option>
                                                    <option value="Colombia" @if (old('country')=="Colombia" ) {{ 'selected' }} @endif>Colombia</option>
                                                    <option value="Comoros" @if (old('country')=="Comoros" ) {{ 'selected' }} @endif>Comoros</option>
                                                    <option value="Congo" @if (old('country')=="Congo" ) {{ 'selected' }} @endif>Congo</option>
                                                    <option value="Congo, Democratic Republic of the Congo" @if (old('country')=="Congo, Democratic Republic of the Congo" ) {{ 'selected' }} @endif>Congo, Democratic Republic of the Congo</option>
                                                    <option value="Cook Islands" @if (old('country')=="Cook Islands" ) {{ 'selected' }} @endif>Cook Islands</option>
                                                    <option value="Costa Rica" @if (old('country')=="Costa Rica" ) {{ 'selected' }} @endif>Costa Rica</option>
                                                    <option value="Cote D'Ivoire" @if (old('country')=="Cote D'Ivoire" ) {{ 'selected' }} @endif>Cote D'Ivoire</option>
                                                    <option value="Croatia" @if (old('country')=="Croatia" ) {{ 'selected' }} @endif>Croatia</option>
                                                    <option value="Cuba" @if (old('country')=="Cuba" ) {{ 'selected' }} @endif>Cuba</option>
                                                    <option value="Curacao" @if (old('country')=="Curacao" ) {{ 'selected' }} @endif>Curacao</option>
                                                    <option value="Cyprus" @if (old('country')=="Cyprus" ) {{ 'selected' }} @endif>Cyprus</option>
                                                    <option value="Czech Republic" @if (old('country')=="Czech Republic" ) {{ 'selected' }} @endif>Czech Republic</option>
                                                    <option value="Denmark" @if (old('country')=="Denmark" ) {{ 'selected' }} @endif>Denmark</option>
                                                    <option value="Djibouti" @if (old('country')=="Djibouti" ) {{ 'selected' }} @endif>Djibouti</option>
                                                    <option value="Dominica" @if (old('country')=="Dominica" ) {{ 'selected' }} @endif>Dominica</option>
                                                    <option value="Dominican Republic" @if (old('country')=="Dominican Republic" ) {{ 'selected' }} @endif>Dominican Republic</option>
                                                    <option value="Ecuador" @if (old('country')=="Ecuador" ) {{ 'selected' }} @endif>Ecuador</option>
                                                    <option value="Egypt" @if (old('country')=="Egypt" ) {{ 'selected' }} @endif>Egypt</option>
                                                    <option value="El Salvador" @if (old('country')=="El Salvador" ) {{ 'selected' }} @endif>El Salvador</option>
                                                    <option value="Equatorial Guinea" @if (old('country')=="Equatorial Guinea" ) {{ 'selected' }} @endif>Equatorial Guinea</option>
                                                    <option value="Eritrea" @if (old('country')=="Eritrea" ) {{ 'selected' }} @endif>Eritrea</option>
                                                    <option value="Estonia" @if (old('country')=="Estonia" ) {{ 'selected' }} @endif>Estonia</option>
                                                    <option value="Ethiopia" @if (old('country')=="Ethiopia" ) {{ 'selected' }} @endif>Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)" @if (old('country')=="Falkland Islands (Malvinas)" ) {{ 'selected' }} @endif>Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands" @if (old('country')=="Faroe Islands" ) {{ 'selected' }} @endif>Faroe Islands</option>
                                                    <option value="Fiji" @if (old('country')=="Fiji" ) {{ 'selected' }} @endif>Fiji</option>
                                                    <option value="Finland" @if (old('country')=="Finland" ) {{ 'selected' }} @endif>Finland</option>
                                                    <option value="France" @if (old('country')=="France" ) {{ 'selected' }} @endif>France</option>
                                                    <option value="French Guiana" @if (old('country')=="French Guiana" ) {{ 'selected' }} @endif>French Guiana</option>
                                                    <option value="French Polynesia" @if (old('country')=="French Polynesia" ) {{ 'selected' }} @endif>French Polynesia</option>
                                                    <option value="French Southern Territories" @if (old('country')=="French Southern Territories" ) {{ 'selected' }} @endif>French Southern Territories</option>
                                                    <option value="Gabon" @if (old('country')=="Gabon" ) {{ 'selected' }} @endif>Gabon</option>
                                                    <option value="Gambia" @if (old('country')=="Gambia" ) {{ 'selected' }} @endif>Gambia</option>
                                                    <option value="Georgia" @if (old('country')=="Georgia" ) {{ 'selected' }} @endif>Georgia</option>
                                                    <option value="Germany" @if (old('country')=="Germany" ) {{ 'selected' }} @endif>Germany</option>
                                                    <option value="Ghana" @if (old('country')=="Ghana" ) {{ 'selected' }} @endif>Ghana</option>
                                                    <option value="Gibraltar" @if (old('country')=="Gibraltar" ) {{ 'selected' }} @endif>Gibraltar</option>
                                                    <option value="Greece" @if (old('country')=="Greece" ) {{ 'selected' }} @endif>Greece</option>
                                                    <option value="Greenland" @if (old('country')=="Greenland" ) {{ 'selected' }} @endif>Greenland</option>
                                                    <option value="Grenada" @if (old('country')=="Grenada" ) {{ 'selected' }} @endif>Grenada</option>
                                                    <option value="Guadeloupe" @if (old('country')=="Guadeloupe" ) {{ 'selected' }} @endif>Guadeloupe</option>
                                                    <option value="Guam" @if (old('country')=="Guam" ) {{ 'selected' }} @endif>Guam</option>
                                                    <option value="Guatemala" @if (old('country')=="Guatemala" ) {{ 'selected' }} @endif>Guatemala</option>
                                                    <option value="Guernsey" @if (old('country')=="Guernsey" ) {{ 'selected' }} @endif>Guernsey</option>
                                                    <option value="Guinea" @if (old('country')=="Guinea" ) {{ 'selected' }} @endif>Guinea</option>
                                                    <option value="Guinea-Bissau" @if (old('country')=="Guinea-Bissau" ) {{ 'selected' }} @endif>Guinea-Bissau</option>
                                                    <option value="Guyana" @if (old('country')=="Guyana" ) {{ 'selected' }} @endif>Guyana</option>
                                                    <option value="Haiti" @if (old('country')=="Haiti" ) {{ 'selected' }} @endif>Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands" @if (old('country')=="Heard Island and Mcdonald Islands" ) {{ 'selected' }} @endif>Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)" @if (old('country')=="Holy See (Vatican City State)" ) {{ 'selected' }} @endif>Holy See (Vatican City State)</option>
                                                    <option value="Honduras" @if (old('country')=="Honduras" ) {{ 'selected' }} @endif>Honduras</option>
                                                    <option value="Hong Kong" @if (old('country')=="Hong Kong" ) {{ 'selected' }} @endif>Hong Kong</option>
                                                    <option value="Hungary" @if (old('country')=="Hungary" ) {{ 'selected' }} @endif>Hungary</option>
                                                    <option value="Iceland" @if (old('country')=="Iceland" ) {{ 'selected' }} @endif>Iceland</option>
                                                    <option value="India" @if (old('country')=="India" ) {{ 'selected' }} @endif>India</option>
                                                    <option value="Indonesia" @if (old('country')=="Indonesia" ) {{ 'selected' }} @endif>Indonesia</option>
                                                    <option value="Iran, Islamic Republic of" @if (old('country')=="Iran, Islamic Republic of" ) {{ 'selected' }} @endif>Iran, Islamic Republic of</option>
                                                    <option value="Iraq" @if (old('country')=="Iraq" ) {{ 'selected' }} @endif>Iraq</option>
                                                    <option value="Ireland" @if (old('country')=="Ireland" ) {{ 'selected' }} @endif>Ireland</option>
                                                    <option value="Isle of Man" @if (old('country')=="Isle of Man" ) {{ 'selected' }} @endif>Isle of Man</option>
                                                    <option value="Israel" @if (old('country')=="Israel" ) {{ 'selected' }} @endif>Israel</option>
                                                    <option value="Italy" @if (old('country')=="Italy" ) {{ 'selected' }} @endif>Italy</option>
                                                    <option value="Jamaica" @if (old('country')=="Jamaica" ) {{ 'selected' }} @endif>Jamaica</option>
                                                    <option value="Japan" @if (old('country')=="Japan" ) {{ 'selected' }} @endif>Japan</option>
                                                    <option value="Jersey" @if (old('country')=="Jersey" ) {{ 'selected' }} @endif>Jersey</option>
                                                    <option value="Jordan" @if (old('country')=="Jordan" ) {{ 'selected' }} @endif>Jordan</option>
                                                    <option value="Kazakhstan" @if (old('country')=="Kazakhstan" ) {{ 'selected' }} @endif>Kazakhstan</option>
                                                    <option value="Kenya" @if (old('country')=="Kenya" ) {{ 'selected' }} @endif>Kenya</option>
                                                    <option value="Kiribati" @if (old('country')=="Kiribati" ) {{ 'selected' }} @endif>Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of" @if (old('country')=="Korea, Democratic People's Republic of" ) {{ 'selected' }} @endif>Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of" @if (old('country')=="Korea, Republic of" ) {{ 'selected' }} @endif>Korea, Republic of</option>
                                                    <option value="Kosovo" @if (old('country')=="Kosovo" ) {{ 'selected' }} @endif>Kosovo</option>
                                                    <option value="Kuwait" @if (old('country')=="Kuwait" ) {{ 'selected' }} @endif>Kuwait</option>
                                                    <option value="Kyrgyzstan" @if (old('country')=="Kyrgyzstan" ) {{ 'selected' }} @endif>Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic" @if (old('country')=="Lao People's Democratic Republic" ) {{ 'selected' }} @endif>Lao People's Democratic Republic</option>
                                                    <option value="Latvia" @if (old('country')=="Latvia" ) {{ 'selected' }} @endif>Latvia</option>
                                                    <option value="Lebanon" @if (old('country')=="Lebanon" ) {{ 'selected' }} @endif>Lebanon</option>
                                                    <option value="Lesotho" @if (old('country')=="Lesotho" ) {{ 'selected' }} @endif>Lesotho</option>
                                                    <option value="Liberia" @if (old('country')=="Liberia" ) {{ 'selected' }} @endif>Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya" @if (old('country')=="Libyan Arab Jamahiriya" ) {{ 'selected' }} @endif>Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein" @if (old('country')=="Liechtenstein" ) {{ 'selected' }} @endif>Liechtenstein</option>
                                                    <option value="Lithuania" @if (old('country')=="Lithuania" ) {{ 'selected' }} @endif>Lithuania</option>
                                                    <option value="Luxembourg" @if (old('country')=="Luxembourg" ) {{ 'selected' }} @endif>Luxembourg</option>
                                                    <option value="Macao" @if (old('country')=="Macao" ) {{ 'selected' }} @endif>Macao</option>
                                                    <option value="Macedonia, the Former Yugoslav Republic of" @if (old('country')=="Macedonia, the Former Yugoslav Republic of" ) {{ 'selected' }} @endif>Macedonia, the Former Yugoslav Republic of</option>
                                                    <option value="Madagascar" @if (old('country')=="Madagascar" ) {{ 'selected' }} @endif>Madagascar</option>
                                                    <option value="Malawi" @if (old('country')=="Malawi" ) {{ 'selected' }} @endif>Malawi</option>
                                                    <option value="Malaysia" @if (old('country')=="Malaysia" ) {{ 'selected' }} @endif>Malaysia</option>
                                                    <option value="Maldives" @if (old('country')=="Maldives" ) {{ 'selected' }} @endif>Maldives</option>
                                                    <option value="Mali" @if (old('country')=="Mali" ) {{ 'selected' }} @endif>Mali</option>
                                                    <option value="Malta" @if (old('country')=="Malta" ) {{ 'selected' }} @endif>Malta</option>
                                                    <option value="Marshall Islands" @if (old('country')=="Marshall Islands" ) {{ 'selected' }} @endif>Marshall Islands</option>
                                                    <option value="Martinique" @if (old('country')=="Martinique" ) {{ 'selected' }} @endif>Martinique</option>
                                                    <option value="Mauritania" @if (old('country')=="Mauritania" ) {{ 'selected' }} @endif>Mauritania</option>
                                                    <option value="Mauritius" @if (old('country')=="Mauritius" ) {{ 'selected' }} @endif>Mauritius</option>
                                                    <option value="Mayotte" @if (old('country')=="Mayotte" ) {{ 'selected' }} @endif>Mayotte</option>
                                                    <option value="Mexico" @if (old('country')=="Mexico" ) {{ 'selected' }} @endif>Mexico</option>
                                                    <option value="Micronesia, Federated States of" @if (old('country')=="Micronesia, Federated States of" ) {{ 'selected' }} @endif>Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of" @if (old('country')=="Moldova, Republic of" ) {{ 'selected' }} @endif>Moldova, Republic of</option>
                                                    <option value="Monaco" @if (old('country')=="Monaco" ) {{ 'selected' }} @endif>Monaco</option>
                                                    <option value="Mongolia" @if (old('country')=="Mongolia" ) {{ 'selected' }} @endif>Mongolia</option>
                                                    <option value="Montenegro" @if (old('country')=="Montenegro" ) {{ 'selected' }} @endif>Montenegro</option>
                                                    <option value="Montserrat" @if (old('country')=="Montserrat" ) {{ 'selected' }} @endif>Montserrat</option>
                                                    <option value="Morocco" @if (old('country')=="Morocco" ) {{ 'selected' }} @endif>Morocco</option>
                                                    <option value="Mozambique" @if (old('country')=="Mozambique" ) {{ 'selected' }} @endif>Mozambique</option>
                                                    <option value="Myanmar" @if (old('country')=="Myanmar" ) {{ 'selected' }} @endif>Myanmar</option>
                                                    <option value="Namibia" @if (old('country')=="Namibia" ) {{ 'selected' }} @endif>Namibia</option>
                                                    <option value="Nauru" @if (old('country')=="Nauru" ) {{ 'selected' }} @endif>Nauru</option>
                                                    <option value="Nepal" @if (old('country')=="Nepal" ) {{ 'selected' }} @endif>Nepal</option>
                                                    <option value="Netherlands" @if (old('country')=="Netherlands" ) {{ 'selected' }} @endif>Netherlands</option>
                                                    <option value="Netherlands Antilles" @if (old('country')=="Netherlands Antilles" ) {{ 'selected' }} @endif>Netherlands Antilles</option>
                                                    <option value="New Caledonia" @if (old('country')=="New Caledonia" ) {{ 'selected' }} @endif>New Caledonia</option>
                                                    <option value="New Zealand" @if (old('country')=="New Zealand" ) {{ 'selected' }} @endif>New Zealand</option>
                                                    <option value="Nicaragua" @if (old('country')=="Nicaragua" ) {{ 'selected' }} @endif>Nicaragua</option>
                                                    <option value="Niger" @if (old('country')=="Niger" ) {{ 'selected' }} @endif>Niger</option>
                                                    <option value="Nigeria" @if (old('country')=="Nigeria" ) {{ 'selected' }} @endif>Nigeria</option>
                                                    <option value="Niue" @if (old('country')=="Niue" ) {{ 'selected' }} @endif>Niue</option>
                                                    <option value="Norfolk Island" @if (old('country')=="Norfolk Island" ) {{ 'selected' }} @endif>Norfolk Island</option>
                                                    <option value="Northern Mariana Islands" @if (old('country')=="Northern Mariana Islands" ) {{ 'selected' }} @endif>Northern Mariana Islands</option>
                                                    <option value="Norway" @if (old('country')=="Norway" ) {{ 'selected' }} @endif>Norway</option>
                                                    <option value="Oman" @if (old('country')=="Oman" ) {{ 'selected' }} @endif>Oman</option>
                                                    <option value="Pakistan" @if (old('country')=="Pakistan" ) {{ 'selected' }} @endif>Pakistan</option>
                                                    <option value="Palau" @if (old('country')=="Palau" ) {{ 'selected' }} @endif>Palau</option>
                                                    <option value="Palestinian Territory, Occupied" @if (old('country')=="Palestinian Territory, Occupied" ) {{ 'selected' }} @endif>Palestinian Territory, Occupied</option>
                                                    <option value="Panama" @if (old('country')=="Panama" ) {{ 'selected' }} @endif>Panama</option>
                                                    <option value="Papua New Guinea" @if (old('country')=="Papua New Guinea" ) {{ 'selected' }} @endif>Papua New Guinea</option>
                                                    <option value="Paraguay" @if (old('country')=="Paraguay" ) {{ 'selected' }} @endif>Paraguay</option>
                                                    <option value="Peru" @if (old('country')=="Peru" ) {{ 'selected' }} @endif>Peru</option>
                                                    <option value="Philippines" @if (old('country')=="Philippines" ) {{ 'selected' }} @endif>Philippines</option>
                                                    <option value="Pitcairn" @if (old('country')=="Pitcairn" ) {{ 'selected' }} @endif>Pitcairn</option>
                                                    <option value="Poland" @if (old('country')=="Poland" ) {{ 'selected' }} @endif>Poland</option>
                                                    <option value="Portugal" @if (old('country')=="Portugal" ) {{ 'selected' }} @endif>Portugal</option>
                                                    <option value="Puerto Rico" @if (old('country')=="Puerto Rico" ) {{ 'selected' }} @endif>Puerto Rico</option>
                                                    <option value="Qatar" @if (old('country')=="Qatar" ) {{ 'selected' }} @endif>Qatar</option>
                                                    <option value="Reunion" @if (old('country')=="Reunion" ) {{ 'selected' }} @endif>Reunion</option>
                                                    <option value="Romania" @if (old('country')=="Romania" ) {{ 'selected' }} @endif>Romania</option>
                                                    <option value="Russian Federation" @if (old('country')=="Russian Federation" ) {{ 'selected' }} @endif>Russian Federation</option>
                                                    <option value="Rwanda" @if (old('country')=="Rwanda" ) {{ 'selected' }} @endif>Rwanda</option>
                                                    <option value="Saint Barthelemy" @if (old('country')=="Saint Barthelemy" ) {{ 'selected' }} @endif>Saint Barthelemy</option>
                                                    <option value="Saint Helena" @if (old('country')=="Saint Helena" ) {{ 'selected' }} @endif>Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis" @if (old('country')=="Saint Kitts and Nevis" ) {{ 'selected' }} @endif>Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia" @if (old('country')=="Saint Lucia" ) {{ 'selected' }} @endif>Saint Lucia</option>
                                                    <option value="Saint Martin" @if (old('country')=="Saint Martin" ) {{ 'selected' }} @endif>Saint Martin</option>
                                                    <option value="Saint Pierre and Miquelon" @if (old('country')=="Saint Pierre and Miquelon" ) {{ 'selected' }} @endif>Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and the Grenadines" @if (old('country')=="Saint Vincent and the Grenadines" ) {{ 'selected' }} @endif>Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa" @if (old('country')=="Samoa" ) {{ 'selected' }} @endif>Samoa</option>
                                                    <option value="San Marino" @if (old('country')=="San Marino" ) {{ 'selected' }} @endif>San Marino</option>
                                                    <option value="Sao Tome and Principe" @if (old('country')=="Sao Tome and Principe" ) {{ 'selected' }} @endif>Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia" @if (old('country')=="Saudi Arabia" ) {{ 'selected' }} @endif>Saudi Arabia</option>
                                                    <option value="Senegal" @if (old('country')=="Senegal" ) {{ 'selected' }} @endif>Senegal</option>
                                                    <option value="Serbia" @if (old('country')=="Serbia" ) {{ 'selected' }} @endif>Serbia</option>
                                                    <option value="Serbia and Montenegro" @if (old('country')=="Serbia and Montenegro" ) {{ 'selected' }} @endif>Serbia and Montenegro</option>
                                                    <option value="Seychelles" @if (old('country')=="Seychelles" ) {{ 'selected' }} @endif>Seychelles</option>
                                                    <option value="Sierra Leone" @if (old('country')=="Sierra Leone" ) {{ 'selected' }} @endif>Sierra Leone</option>
                                                    <option value="Singapore" @if (old('country')=="Singapore" ) {{ 'selected' }} @endif>Singapore</option>
                                                    <option value="Sint Maarten" @if (old('country')=="Sint Maarten" ) {{ 'selected' }} @endif>Sint Maarten</option>
                                                    <option value="Slovakia" @if (old('country')=="Slovakia" ) {{ 'selected' }} @endif>Slovakia</option>
                                                    <option value="Slovenia" @if (old('country')=="Slovenia" ) {{ 'selected' }} @endif>Slovenia</option>
                                                    <option value="Solomon Islands" @if (old('country')=="Solomon Islands" ) {{ 'selected' }} @endif>Solomon Islands</option>
                                                    <option value="Somalia" @if (old('country')=="Somalia" ) {{ 'selected' }} @endif>Somalia</option>
                                                    <option value="South Africa" @if (old('country')=="South Africa" ) {{ 'selected' }} @endif>South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands" @if (old('country')=="South Georgia and the South Sandwich Islands" ) {{ 'selected' }} @endif>South Georgia and the South Sandwich Islands</option>
                                                    <option value="South Sudan" @if (old('country')=="South Sudan" ) {{ 'selected' }} @endif>South Sudan</option>
                                                    <option value="Spain" @if (old('country')=="Spain" ) {{ 'selected' }} @endif>Spain</option>
                                                    <option value="Sri Lanka" @if (old('country')=="Sri Lanka" ) {{ 'selected' }} @endif>Sri Lanka</option>
                                                    <option value="Sudan" @if (old('country')=="Sudan" ) {{ 'selected' }} @endif>Sudan</option>
                                                    <option value="Suriname" @if (old('country')=="Suriname" ) {{ 'selected' }} @endif>Suriname</option>
                                                    <option value="Svalbard and Jan Mayen" @if (old('country')=="Svalbard and Jan Mayen" ) {{ 'selected' }} @endif>Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland" @if (old('country')=="Swaziland" ) {{ 'selected' }} @endif>Swaziland</option>
                                                    <option value="Sweden" @if (old('country')=="Sweden" ) {{ 'selected' }} @endif>Sweden</option>
                                                    <option value="Switzerland" @if (old('country')=="Switzerland" ) {{ 'selected' }} @endif>Switzerland</option>
                                                    <option value="Syrian Arab Republic" @if (old('country')=="Syrian Arab Republic" ) {{ 'selected' }} @endif>Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China" @if (old('country')=="Taiwan, Province of China" ) {{ 'selected' }} @endif>Taiwan, Province of China</option>
                                                    <option value="Tajikistan" @if (old('country')=="Tajikistan" ) {{ 'selected' }} @endif>Tajikistan</option>
                                                    <option value="Tanzania, United Republic of" @if (old('country')=="Tanzania, United Republic of" ) {{ 'selected' }} @endif>Tanzania, United Republic of</option>
                                                    <option value="Thailand" @if (old('country')=="Thailand" ) {{ 'selected' }} @endif>Thailand</option>
                                                    <option value="Timor-Leste" @if (old('country')=="Timor-Leste" ) {{ 'selected' }} @endif>Timor-Leste</option>
                                                    <option value="Togo" @if (old('country')=="Togo" ) {{ 'selected' }} @endif>Togo</option>
                                                    <option value="Tokelau" @if (old('country')=="Tokelau" ) {{ 'selected' }} @endif>Tokelau</option>
                                                    <option value="Tonga" @if (old('country')=="Tonga" ) {{ 'selected' }} @endif>Tonga</option>
                                                    <option value="Trinidad and Tobago" @if (old('country')=="Trinidad and Tobago" ) {{ 'selected' }} @endif>Trinidad and Tobago</option>
                                                    <option value="Tunisia" @if (old('country')=="Tunisia" ) {{ 'selected' }} @endif>Tunisia</option>
                                                    <option value="Turkey" @if (old('country')=="Turkey" ) {{ 'selected' }} @endif>Turkey</option>
                                                    <option value="Turkmenistan" @if (old('country')=="Turkmenistan" ) {{ 'selected' }} @endif>Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands" @if (old('country')=="Turks and Caicos Islands" ) {{ 'selected' }} @endif>Turks and Caicos Islands</option>
                                                    <option value="Tuvalu" @if (old('country')=="Tuvalu" ) {{ 'selected' }} @endif>Tuvalu</option>
                                                    <option value="Uganda" @if (old('country')=="Uganda" ) {{ 'selected' }} @endif>Uganda</option>
                                                    <option value="Ukraine" @if (old('country')=="Ukraine" ) {{ 'selected' }} @endif>Ukraine</option>
                                                    <option value="United Arab Emirates" @if (old('country')=="United Arab Emirates" ) {{ 'selected' }} @endif>United Arab Emirates</option>
                                                    <option value="United Kingdom" @if (old('country')=="United Kingdom" ) {{ 'selected' }} @endif>United Kingdom</option>
                                                    <option value="United States" @if (old('country')=="United States" ) {{ 'selected' }} @endif>United States</option>
                                                    <option value="United States Minor Outlying Islands" @if (old('country')=="United States Minor Outlying Islands" ) {{ 'selected' }} @endif>United States Minor Outlying Islands</option>
                                                    <option value="Uruguay" @if (old('country')=="Uruguay" ) {{ 'selected' }} @endif>Uruguay</option>
                                                    <option value="Uzbekistan" @if (old('country')=="Uzbekistan" ) {{ 'selected' }} @endif>Uzbekistan</option>
                                                    <option value="Vanuatu" @if (old('country')=="Vanuatu" ) {{ 'selected' }} @endif>Vanuatu</option>
                                                    <option value="Venezuela" @if (old('country')=="Venezuela" ) {{ 'selected' }} @endif>Venezuela</option>
                                                    <option value="Viet Nam" @if (old('country')=="Viet Nam" ) {{ 'selected' }} @endif>Viet Nam</option>
                                                    <option value="Virgin Islands, British" @if (old('country')=="Virgin Islands, British" ) {{ 'selected' }} @endif>Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.s." @if (old('country')=="Virgin Islands, U.s." ) {{ 'selected' }} @endif>Virgin Islands, U.s.</option>
                                                    <option value="Wallis and Futuna" @if (old('country')=="Wallis and Futuna" ) {{ 'selected' }} @endif>Wallis and Futuna</option>
                                                    <option value="Western Sahara" @if (old('country')=="Western Sahara" ) {{ 'selected' }} @endif>Western Sahara</option>
                                                    <option value="Yemen" @if (old('country')=="Yemen" ) {{ 'selected' }} @endif>Yemen</option>
                                                    <option value="Zambia" @if (old('country')=="Zambia" ) {{ 'selected' }} @endif>Zambia</option>
                                                    <option value="Zimbabwe" @if (old('country')=="Zimbabwe" ) {{ 'selected' }} @endif>Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Province/State <span class="red">*</span> </label>
                                                <select name="province_state" id="province_state" class="form-select" aria-label="Default select example">
                                                    <option value="">Select State</option>
                                                    <option value="Andhra Pradesh" @if (old('province_state')=="Andhra Pradesh" ) {{ 'selected' }} @endif>Andhra Pradesh</option>
                                                    <option value="Andaman and Nicobar Islands" @if (old('Andaman and Nicobar Islands')=="Zambia" ) {{ 'selected' }} @endif>Andaman and Nicobar Islands</option>
                                                    <option value="Arunachal Pradesh" @if (old('province_state')=="Arunachal Pradesh" ) {{ 'selected' }} @endif>Arunachal Pradesh</option>
                                                    <option value="Assam" @if (old('province_state')=="Assam" ) {{ 'selected' }} @endif>Assam</option>
                                                    <option value="Bihar" @if (old('province_state')=="Bihar" ) {{ 'selected' }} @endif>Bihar</option>
                                                    <option value="Chandigarh" @if (old('province_state')=="Chandigarh" ) {{ 'selected' }} @endif>Chandigarh</option>
                                                    <option value="Chhattisgarh" @if (old('province_state')=="Chhattisgarh" ) {{ 'selected' }} @endif>Chhattisgarh</option>
                                                    <option value="Dadar and Nagar Haveli" @if (old('province_state')=="Dadar and Nagar Haveli" ) {{ 'selected' }} @endif>Dadar and Nagar Haveli</option>
                                                    <option value="Daman and Diu" @if (old('province_state')=="Daman and Diu" ) {{ 'selected' }} @endif>Daman and Diu</option>
                                                    <option value="Delhi" @if (old('province_state')=="Delhi" ) {{ 'selected' }} @endif>Delhi</option>
                                                    <option value="Lakshadweep" @if (old('province_state')=="Lakshadweep" ) {{ 'selected' }} @endif>Lakshadweep</option>
                                                    <option value="Puducherry" @if (old('province_state')=="Puducherry" ) {{ 'selected' }} @endif>Puducherry</option>
                                                    <option value="Goa" @if (old('province_state')=="Goa" ) {{ 'selected' }} @endif>Goa</option>
                                                    <option value="Gujarat" @if (old('province_state')=="Gujarat" ) {{ 'selected' }} @endif>Gujarat</option>
                                                    <option value="Haryana" @if (old('province_state')=="Haryana" ) {{ 'selected' }} @endif>Haryana</option>
                                                    <option value="Himachal Pradesh" @if (old('province_state')=="Himachal Pradesh" ) {{ 'selected' }} @endif>Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir" @if (old('province_state')=="Jammu and Kashmir" ) {{ 'selected' }} @endif>Jammu and Kashmir</option>
                                                    <option value="Jharkhand" @if (old('province_state')=="Jharkhand" ) {{ 'selected' }} @endif>Jharkhand</option>
                                                    <option value="Karnataka" @if (old('province_state')=="Karnataka" ) {{ 'selected' }} @endif>Karnataka</option>
                                                    <option value="Kerala" @if (old('province_state')=="Kerala" ) {{ 'selected' }} @endif>Kerala</option>
                                                    <option value="Madhya Pradesh" @if (old('province_state')=="Madhya Pradesh" ) {{ 'selected' }} @endif>Madhya Pradesh</option>
                                                    <option value="Maharashtra" @if (old('province_state')=="Maharashtra" ) {{ 'selected' }} @endif>Maharashtra</option>
                                                    <option value="Manipur" @if (old('province_state')=="Manipur" ) {{ 'selected' }} @endif>Manipur</option>
                                                    <option value="Meghalaya" @if (old('province_state')=="Meghalaya" ) {{ 'selected' }} @endif>Meghalaya</option>
                                                    <option value="Mizoram" @if (old('province_state')=="Mizoram" ) {{ 'selected' }} @endif>Mizoram</option>
                                                    <option value="Nagaland" @if (old('province_state')=="Nagaland" ) {{ 'selected' }} @endif>Nagaland</option>
                                                    <option value="Odisha" @if (old('province_state')=="Odisha" ) {{ 'selected' }} @endif>Odisha</option>
                                                    <option value="Punjab" @if (old('province_state')=="Punjab" ) {{ 'selected' }} @endif>Punjab</option>
                                                    <option value="Rajasthan" @if (old('province_state')=="Rajasthan" ) {{ 'selected' }} @endif>Rajasthan</option>
                                                    <option value="Sikkim" @if (old('province_state')=="Sikkim" ) {{ 'selected' }} @endif>Sikkim</option>
                                                    <option value="Tamil Nadu" @if (old('province_state')=="Tamil Nadu" ) {{ 'selected' }} @endif>Tamil Nadu</option>
                                                    <option value="Telangana" @if (old('province_state')=="Telangana" ) {{ 'selected' }} @endif>Telangana</option>
                                                    <option value="Tripura" @if (old('province_state')=="Tripura" ) {{ 'selected' }} @endif>Tripura</option>
                                                    <option value="Uttar Pradesh" @if (old('province_state')=="Uttar Pradesh" ) {{ 'selected' }} @endif>Uttar Pradesh</option>
                                                    <option value="Uttarakhand" @if (old('province_state')=="Uttarakhand" ) {{ 'selected' }} @endif>Uttarakhand</option>
                                                    <option value="West Bengal" @if (old('province_state')=="West Bengal" ) {{ 'selected' }} @endif>West Bengal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Postal/Zip Code <span class="red">*</span> </label>
                                                <input name="postal_code" id="postal_code" type="text" class="form-control" placeholder="Enter Pin Code...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Email <span class="red">*</span> </label>
                                                <input name="email" id="email" type="text" class="form-control" readonly placeholder="Enter Email...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Phone Number <span class="red">*</span> </label>
                                                <input name="phone_number" id="phone_number" type="tel" class="form-control" placeholder="Enter Phone Number...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-12">
                                            <button id="gotoStep2" class="btn-next float-end" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="setup-content" id="step-2">
                    <form id="form2">
                        <div class="education-summary">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h4>Education Summary</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country of Education <span class="red">*</span> </label>
                                                <select name="country_of_education" id="country_of_education" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Country of Education</option>
                                                    <option value="Afghanistan" @if (old('country_of_education')=="Afghanistan" ) {{ 'selected' }} @endif>Afghanistan</option>
                                                    <option value="Aland Islands" @if (old('country_of_education')=="Aland Islands" ) {{ 'selected' }} @endif>Aland Islands</option>
                                                    <option value="Albania" @if (old('country_of_education')=="Albania" ) {{ 'selected' }} @endif>Albania</option>
                                                    <option value="Algeria" @if (old('country_of_education')=="Algeria" ) {{ 'selected' }} @endif>Algeria</option>
                                                    <option value="American Samoa" @if (old('country_of_education')=="American Samoa" ) {{ 'selected' }} @endif>American Samoa</option>
                                                    <option value="Andorra" @if (old('country_of_education')=="Andorra" ) {{ 'selected' }} @endif>Andorra</option>
                                                    <option value="Angola" @if (old('country_of_education')=="Angola" ) {{ 'selected' }} @endif>Angola</option>
                                                    <option value="Anguilla" @if (old('country_of_education')=="Anguilla" ) {{ 'selected' }} @endif>Anguilla</option>
                                                    <option value="Antarctica" @if (old('country_of_education')=="Antarctica" ) {{ 'selected' }} @endif>Antarctica</option>
                                                    <option value="Antigua and Barbuda" @if (old('country_of_education')=="Antigua and Barbuda" ) {{ 'selected' }} @endif>Antigua and Barbuda</option>
                                                    <option value="Argentina" @if (old('country_of_education')=="Argentina" ) {{ 'selected' }} @endif>Argentina</option>
                                                    <option value="Armenia" @if (old('country_of_education')=="Armenia" ) {{ 'selected' }} @endif>Armenia</option>
                                                    <option value="Aruba" @if (old('country_of_education')=="Aruba" ) {{ 'selected' }} @endif>Aruba</option>
                                                    <option value="Australia" @if (old('country_of_education')=="Australia" ) {{ 'selected' }} @endif>Australia</option>
                                                    <option value="Austria" @if (old('country_of_education')=="Austria" ) {{ 'selected' }} @endif>Austria</option>
                                                    <option value="Azerbaijan" @if (old('country_of_education')=="Azerbaijan" ) {{ 'selected' }} @endif>Azerbaijan</option>
                                                    <option value="Bahamas" @if (old('country_of_education')=="Bahamas" ) {{ 'selected' }} @endif>Bahamas</option>
                                                    <option value="Bahrain" @if (old('country_of_education')=="Bahrain" ) {{ 'selected' }} @endif>Bahrain</option>
                                                    <option value="Bangladesh" @if (old('country_of_education')=="Bangladesh" ) {{ 'selected' }} @endif>Bangladesh</option>
                                                    <option value="Barbados" @if (old('country_of_education')=="Barbados" ) {{ 'selected' }} @endif>Barbados</option>
                                                    <option value="Belarus" @if (old('country_of_education')=="Belarus" ) {{ 'selected' }} @endif>Belarus</option>
                                                    <option value="Belgium" @if (old('country_of_education')=="Belgium" ) {{ 'selected' }} @endif>Belgium</option>
                                                    <option value="Belize" @if (old('country_of_education')=="Belize" ) {{ 'selected' }} @endif>Belize</option>
                                                    <option value="Benin" @if (old('country_of_education')=="Benin" ) {{ 'selected' }} @endif>Benin</option>
                                                    <option value="Bermuda" @if (old('country_of_education')=="Bermuda" ) {{ 'selected' }} @endif>Bermuda</option>
                                                    <option value="Bhutan" @if (old('country_of_education')=="Bhutan" ) {{ 'selected' }} @endif>Bhutan</option>
                                                    <option value="Bolivia" @if (old('country_of_education')=="Bolivia" ) {{ 'selected' }} @endif>Bolivia</option>
                                                    <option value="Bonaire, Sint Eustatius and Saba" @if (old('country_of_education')=="Bonaire, Sint Eustatius and Saba" ) {{ 'selected' }} @endif>Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="Bosnia and Herzegovina" @if (old('country_of_education')=="Bosnia and Herzegovina" ) {{ 'selected' }} @endif>Bosnia and Herzegovina</option>
                                                    <option value="Botswana" @if (old('country_of_education')=="Botswana" ) {{ 'selected' }} @endif>Botswana</option>
                                                    <option value="Bouvet Island" @if (old('country_of_education')=="Bouvet Island" ) {{ 'selected' }} @endif>Bouvet Island</option>
                                                    <option value="Brazil" @if (old('country_of_education')=="Brazil" ) {{ 'selected' }} @endif>Brazil</option>
                                                    <option value="British Indian Ocean Territory" @if (old('country_of_education')=="British Indian Ocean Territory" ) {{ 'selected' }} @endif>British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam" @if (old('country_of_education')=="Brunei Darussalam" ) {{ 'selected' }} @endif>Brunei Darussalam</option>
                                                    <option value="Bulgaria" @if (old('country_of_education')=="Bulgaria" ) {{ 'selected' }} @endif>Bulgaria</option>
                                                    <option value="Burkina Faso" @if (old('country_of_education')=="Burkina Faso" ) {{ 'selected' }} @endif>Burkina Faso</option>
                                                    <option value="Burundi" @if (old('country_of_education')=="Burundi" ) {{ 'selected' }} @endif>Burundi</option>
                                                    <option value="Cambodia" @if (old('country_of_education')=="Cambodia" ) {{ 'selected' }} @endif>Cambodia</option>
                                                    <option value="Cameroon" @if (old('country_of_education')=="Cameroon" ) {{ 'selected' }} @endif>Cameroon</option>
                                                    <option value="Canada" @if (old('country_of_education')=="Canada" ) {{ 'selected' }} @endif>Canada</option>
                                                    <option value="Cape Verde" @if (old('country_of_education')=="Cape Verde" ) {{ 'selected' }} @endif>Cape Verde</option>
                                                    <option value="Cayman Islands" @if (old('country_of_education')=="Cayman Islands" ) {{ 'selected' }} @endif>Cayman Islands</option>
                                                    <option value="Central African Republic" @if (old('country_of_education')=="Central African Republic" ) {{ 'selected' }} @endif>Central African Republic</option>
                                                    <option value="Chad" @if (old('country_of_education')=="Chad" ) {{ 'selected' }} @endif>Chad</option>
                                                    <option value="Chile" @if (old('country_of_education')=="Chile" ) {{ 'selected' }} @endif>Chile</option>
                                                    <option value="China" @if (old('country_of_education')=="China" ) {{ 'selected' }} @endif>China</option>
                                                    <option value="Christmas Island" @if (old('country_of_education')=="Christmas Island" ) {{ 'selected' }} @endif>Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands" @if (old('country_of_education')=="Cocos (Keeling) Islands" ) {{ 'selected' }} @endif>Cocos (Keeling) Islands</option>
                                                    <option value="Colombia" @if (old('country_of_education')=="Colombia" ) {{ 'selected' }} @endif>Colombia</option>
                                                    <option value="Comoros" @if (old('country_of_education')=="Comoros" ) {{ 'selected' }} @endif>Comoros</option>
                                                    <option value="Congo" @if (old('country_of_education')=="Congo" ) {{ 'selected' }} @endif>Congo</option>
                                                    <option value="Congo, Democratic Republic of the Congo" @if (old('country_of_education')=="Congo, Democratic Republic of the Congo" ) {{ 'selected' }} @endif>Congo, Democratic Republic of the Congo</option>
                                                    <option value="Cook Islands" @if (old('country_of_education')=="Cook Islands" ) {{ 'selected' }} @endif>Cook Islands</option>
                                                    <option value="Costa Rica" @if (old('country_of_education')=="Costa Rica" ) {{ 'selected' }} @endif>Costa Rica</option>
                                                    <option value="Cote D'Ivoire" @if (old('country_of_education')=="Cote D'Ivoire" ) {{ 'selected' }} @endif>Cote D'Ivoire</option>
                                                    <option value="Croatia" @if (old('country_of_education')=="Croatia" ) {{ 'selected' }} @endif>Croatia</option>
                                                    <option value="Cuba" @if (old('country_of_education')=="Cuba" ) {{ 'selected' }} @endif>Cuba</option>
                                                    <option value="Curacao" @if (old('country_of_education')=="Curacao" ) {{ 'selected' }} @endif>Curacao</option>
                                                    <option value="Cyprus" @if (old('country_of_education')=="Cyprus" ) {{ 'selected' }} @endif>Cyprus</option>
                                                    <option value="Czech Republic" @if (old('country_of_education')=="Czech Republic" ) {{ 'selected' }} @endif>Czech Republic</option>
                                                    <option value="Denmark" @if (old('country_of_education')=="Denmark" ) {{ 'selected' }} @endif>Denmark</option>
                                                    <option value="Djibouti" @if (old('country_of_education')=="Djibouti" ) {{ 'selected' }} @endif>Djibouti</option>
                                                    <option value="Dominica" @if (old('country_of_education')=="Dominica" ) {{ 'selected' }} @endif>Dominica</option>
                                                    <option value="Dominican Republic" @if (old('country_of_education')=="Dominican Republic" ) {{ 'selected' }} @endif>Dominican Republic</option>
                                                    <option value="Ecuador" @if (old('country_of_education')=="Ecuador" ) {{ 'selected' }} @endif>Ecuador</option>
                                                    <option value="Egypt" @if (old('country_of_education')=="Egypt" ) {{ 'selected' }} @endif>Egypt</option>
                                                    <option value="El Salvador" @if (old('country_of_education')=="El Salvador" ) {{ 'selected' }} @endif>El Salvador</option>
                                                    <option value="Equatorial Guinea" @if (old('country_of_education')=="Equatorial Guinea" ) {{ 'selected' }} @endif>Equatorial Guinea</option>
                                                    <option value="Eritrea" @if (old('country_of_education')=="Eritrea" ) {{ 'selected' }} @endif>Eritrea</option>
                                                    <option value="Estonia" @if (old('country_of_education')=="Estonia" ) {{ 'selected' }} @endif>Estonia</option>
                                                    <option value="Ethiopia" @if (old('country_of_education')=="Ethiopia" ) {{ 'selected' }} @endif>Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)" @if (old('country_of_education')=="Falkland Islands (Malvinas)" ) {{ 'selected' }} @endif>Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands" @if (old('country_of_education')=="Faroe Islands" ) {{ 'selected' }} @endif>Faroe Islands</option>
                                                    <option value="Fiji" @if (old('country_of_education')=="Fiji" ) {{ 'selected' }} @endif>Fiji</option>
                                                    <option value="Finland" @if (old('country_of_education')=="Finland" ) {{ 'selected' }} @endif>Finland</option>
                                                    <option value="France" @if (old('country_of_education')=="France" ) {{ 'selected' }} @endif>France</option>
                                                    <option value="French Guiana" @if (old('country_of_education')=="French Guiana" ) {{ 'selected' }} @endif>French Guiana</option>
                                                    <option value="French Polynesia" @if (old('country_of_education')=="French Polynesia" ) {{ 'selected' }} @endif>French Polynesia</option>
                                                    <option value="French Southern Territories" @if (old('country_of_education')=="French Southern Territories" ) {{ 'selected' }} @endif>French Southern Territories</option>
                                                    <option value="Gabon" @if (old('country_of_education')=="Gabon" ) {{ 'selected' }} @endif>Gabon</option>
                                                    <option value="Gambia" @if (old('country_of_education')=="Gambia" ) {{ 'selected' }} @endif>Gambia</option>
                                                    <option value="Georgia" @if (old('country_of_education')=="Georgia" ) {{ 'selected' }} @endif>Georgia</option>
                                                    <option value="Germany" @if (old('country_of_education')=="Germany" ) {{ 'selected' }} @endif>Germany</option>
                                                    <option value="Ghana" @if (old('country_of_education')=="Ghana" ) {{ 'selected' }} @endif>Ghana</option>
                                                    <option value="Gibraltar" @if (old('country_of_education')=="Gibraltar" ) {{ 'selected' }} @endif>Gibraltar</option>
                                                    <option value="Greece" @if (old('country_of_education')=="Greece" ) {{ 'selected' }} @endif>Greece</option>
                                                    <option value="Greenland" @if (old('country_of_education')=="Greenland" ) {{ 'selected' }} @endif>Greenland</option>
                                                    <option value="Grenada" @if (old('country_of_education')=="Grenada" ) {{ 'selected' }} @endif>Grenada</option>
                                                    <option value="Guadeloupe" @if (old('country_of_education')=="Guadeloupe" ) {{ 'selected' }} @endif>Guadeloupe</option>
                                                    <option value="Guam" @if (old('country_of_education')=="Guam" ) {{ 'selected' }} @endif>Guam</option>
                                                    <option value="Guatemala" @if (old('country_of_education')=="Guatemala" ) {{ 'selected' }} @endif>Guatemala</option>
                                                    <option value="Guernsey" @if (old('country_of_education')=="Guernsey" ) {{ 'selected' }} @endif>Guernsey</option>
                                                    <option value="Guinea" @if (old('country_of_education')=="Guinea" ) {{ 'selected' }} @endif>Guinea</option>
                                                    <option value="Guinea-Bissau" @if (old('country_of_education')=="Guinea-Bissau" ) {{ 'selected' }} @endif>Guinea-Bissau</option>
                                                    <option value="Guyana" @if (old('country_of_education')=="Guyana" ) {{ 'selected' }} @endif>Guyana</option>
                                                    <option value="Haiti" @if (old('country_of_education')=="Haiti" ) {{ 'selected' }} @endif>Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands" @if (old('country_of_education')=="Heard Island and Mcdonald Islands" ) {{ 'selected' }} @endif>Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)" @if (old('country_of_education')=="Holy See (Vatican City State)" ) {{ 'selected' }} @endif>Holy See (Vatican City State)</option>
                                                    <option value="Honduras" @if (old('country_of_education')=="Honduras" ) {{ 'selected' }} @endif>Honduras</option>
                                                    <option value="Hong Kong" @if (old('country_of_education')=="Hong Kong" ) {{ 'selected' }} @endif>Hong Kong</option>
                                                    <option value="Hungary" @if (old('country_of_education')=="Hungary" ) {{ 'selected' }} @endif>Hungary</option>
                                                    <option value="Iceland" @if (old('country_of_education')=="Iceland" ) {{ 'selected' }} @endif>Iceland</option>
                                                    <option value="India" @if (old('country_of_education')=="India" ) {{ 'selected' }} @endif>India</option>
                                                    <option value="Indonesia" @if (old('country_of_education')=="Indonesia" ) {{ 'selected' }} @endif>Indonesia</option>
                                                    <option value="Iran, Islamic Republic of" @if (old('country_of_education')=="Iran, Islamic Republic of" ) {{ 'selected' }} @endif>Iran, Islamic Republic of</option>
                                                    <option value="Iraq" @if (old('country_of_education')=="Iraq" ) {{ 'selected' }} @endif>Iraq</option>
                                                    <option value="Ireland" @if (old('country_of_education')=="Ireland" ) {{ 'selected' }} @endif>Ireland</option>
                                                    <option value="Isle of Man" @if (old('country_of_education')=="Isle of Man" ) {{ 'selected' }} @endif>Isle of Man</option>
                                                    <option value="Israel" @if (old('country_of_education')=="Israel" ) {{ 'selected' }} @endif>Israel</option>
                                                    <option value="Italy" @if (old('country_of_education')=="Italy" ) {{ 'selected' }} @endif>Italy</option>
                                                    <option value="Jamaica" @if (old('country_of_education')=="Jamaica" ) {{ 'selected' }} @endif>Jamaica</option>
                                                    <option value="Japan" @if (old('country_of_education')=="Japan" ) {{ 'selected' }} @endif>Japan</option>
                                                    <option value="Jersey" @if (old('country_of_education')=="Jersey" ) {{ 'selected' }} @endif>Jersey</option>
                                                    <option value="Jordan" @if (old('country_of_education')=="Jordan" ) {{ 'selected' }} @endif>Jordan</option>
                                                    <option value="Kazakhstan" @if (old('country_of_education')=="Kazakhstan" ) {{ 'selected' }} @endif>Kazakhstan</option>
                                                    <option value="Kenya" @if (old('country_of_education')=="Kenya" ) {{ 'selected' }} @endif>Kenya</option>
                                                    <option value="Kiribati" @if (old('country_of_education')=="Kiribati" ) {{ 'selected' }} @endif>Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of" @if (old('country_of_education')=="Korea, Democratic People's Republic of" ) {{ 'selected' }} @endif>Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of" @if (old('country_of_education')=="Korea, Republic of" ) {{ 'selected' }} @endif>Korea, Republic of</option>
                                                    <option value="Kosovo" @if (old('country_of_education')=="Kosovo" ) {{ 'selected' }} @endif>Kosovo</option>
                                                    <option value="Kuwait" @if (old('country_of_education')=="Kuwait" ) {{ 'selected' }} @endif>Kuwait</option>
                                                    <option value="Kyrgyzstan" @if (old('country_of_education')=="Kyrgyzstan" ) {{ 'selected' }} @endif>Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic" @if (old('country_of_education')=="Lao People's Democratic Republic" ) {{ 'selected' }} @endif>Lao People's Democratic Republic</option>
                                                    <option value="Latvia" @if (old('country_of_education')=="Latvia" ) {{ 'selected' }} @endif>Latvia</option>
                                                    <option value="Lebanon" @if (old('country_of_education')=="Lebanon" ) {{ 'selected' }} @endif>Lebanon</option>
                                                    <option value="Lesotho" @if (old('country_of_education')=="Lesotho" ) {{ 'selected' }} @endif>Lesotho</option>
                                                    <option value="Liberia" @if (old('country_of_education')=="Liberia" ) {{ 'selected' }} @endif>Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya" @if (old('country_of_education')=="Libyan Arab Jamahiriya" ) {{ 'selected' }} @endif>Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein" @if (old('country_of_education')=="Liechtenstein" ) {{ 'selected' }} @endif>Liechtenstein</option>
                                                    <option value="Lithuania" @if (old('country_of_education')=="Lithuania" ) {{ 'selected' }} @endif>Lithuania</option>
                                                    <option value="Luxembourg" @if (old('country_of_education')=="Luxembourg" ) {{ 'selected' }} @endif>Luxembourg</option>
                                                    <option value="Macao" @if (old('country_of_education')=="Macao" ) {{ 'selected' }} @endif>Macao</option>
                                                    <option value="Macedonia, the Former Yugoslav Republic of" @if (old('country_of_education')=="Macedonia, the Former Yugoslav Republic of" ) {{ 'selected' }} @endif>Macedonia, the Former Yugoslav Republic of</option>
                                                    <option value="Madagascar" @if (old('country_of_education')=="Madagascar" ) {{ 'selected' }} @endif>Madagascar</option>
                                                    <option value="Malawi" @if (old('country_of_education')=="Malawi" ) {{ 'selected' }} @endif>Malawi</option>
                                                    <option value="Malaysia" @if (old('country_of_education')=="Malaysia" ) {{ 'selected' }} @endif>Malaysia</option>
                                                    <option value="Maldives" @if (old('country_of_education')=="Maldives" ) {{ 'selected' }} @endif>Maldives</option>
                                                    <option value="Mali" @if (old('country_of_education')=="Mali" ) {{ 'selected' }} @endif>Mali</option>
                                                    <option value="Malta" @if (old('country_of_education')=="Malta" ) {{ 'selected' }} @endif>Malta</option>
                                                    <option value="Marshall Islands" @if (old('country_of_education')=="Marshall Islands" ) {{ 'selected' }} @endif>Marshall Islands</option>
                                                    <option value="Martinique" @if (old('country_of_education')=="Martinique" ) {{ 'selected' }} @endif>Martinique</option>
                                                    <option value="Mauritania" @if (old('country_of_education')=="Mauritania" ) {{ 'selected' }} @endif>Mauritania</option>
                                                    <option value="Mauritius" @if (old('country_of_education')=="Mauritius" ) {{ 'selected' }} @endif>Mauritius</option>
                                                    <option value="Mayotte" @if (old('country_of_education')=="Mayotte" ) {{ 'selected' }} @endif>Mayotte</option>
                                                    <option value="Mexico" @if (old('country_of_education')=="Mexico" ) {{ 'selected' }} @endif>Mexico</option>
                                                    <option value="Micronesia, Federated States of" @if (old('country_of_education')=="Micronesia, Federated States of" ) {{ 'selected' }} @endif>Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of" @if (old('country_of_education')=="Moldova, Republic of" ) {{ 'selected' }} @endif>Moldova, Republic of</option>
                                                    <option value="Monaco" @if (old('country_of_education')=="Monaco" ) {{ 'selected' }} @endif>Monaco</option>
                                                    <option value="Mongolia" @if (old('country_of_education')=="Mongolia" ) {{ 'selected' }} @endif>Mongolia</option>
                                                    <option value="Montenegro" @if (old('country_of_education')=="Montenegro" ) {{ 'selected' }} @endif>Montenegro</option>
                                                    <option value="Montserrat" @if (old('country_of_education')=="Montserrat" ) {{ 'selected' }} @endif>Montserrat</option>
                                                    <option value="Morocco" @if (old('country_of_education')=="Morocco" ) {{ 'selected' }} @endif>Morocco</option>
                                                    <option value="Mozambique" @if (old('country_of_education')=="Mozambique" ) {{ 'selected' }} @endif>Mozambique</option>
                                                    <option value="Myanmar" @if (old('country_of_education')=="Myanmar" ) {{ 'selected' }} @endif>Myanmar</option>
                                                    <option value="Namibia" @if (old('country_of_education')=="Namibia" ) {{ 'selected' }} @endif>Namibia</option>
                                                    <option value="Nauru" @if (old('country_of_education')=="Nauru" ) {{ 'selected' }} @endif>Nauru</option>
                                                    <option value="Nepal" @if (old('country_of_education')=="Nepal" ) {{ 'selected' }} @endif>Nepal</option>
                                                    <option value="Netherlands" @if (old('country_of_education')=="Netherlands" ) {{ 'selected' }} @endif>Netherlands</option>
                                                    <option value="Netherlands Antilles" @if (old('country_of_education')=="Netherlands Antilles" ) {{ 'selected' }} @endif>Netherlands Antilles</option>
                                                    <option value="New Caledonia" @if (old('country_of_education')=="New Caledonia" ) {{ 'selected' }} @endif>New Caledonia</option>
                                                    <option value="New Zealand" @if (old('country_of_education')=="New Zealand" ) {{ 'selected' }} @endif>New Zealand</option>
                                                    <option value="Nicaragua" @if (old('country_of_education')=="Nicaragua" ) {{ 'selected' }} @endif>Nicaragua</option>
                                                    <option value="Niger" @if (old('country_of_education')=="Niger" ) {{ 'selected' }} @endif>Niger</option>
                                                    <option value="Nigeria" @if (old('country_of_education')=="Nigeria" ) {{ 'selected' }} @endif>Nigeria</option>
                                                    <option value="Niue" @if (old('country_of_education')=="Niue" ) {{ 'selected' }} @endif>Niue</option>
                                                    <option value="Norfolk Island" @if (old('country_of_education')=="Norfolk Island" ) {{ 'selected' }} @endif>Norfolk Island</option>
                                                    <option value="Northern Mariana Islands" @if (old('country_of_education')=="Northern Mariana Islands" ) {{ 'selected' }} @endif>Northern Mariana Islands</option>
                                                    <option value="Norway" @if (old('country_of_education')=="Norway" ) {{ 'selected' }} @endif>Norway</option>
                                                    <option value="Oman" @if (old('country_of_education')=="Oman" ) {{ 'selected' }} @endif>Oman</option>
                                                    <option value="Pakistan" @if (old('country_of_education')=="Pakistan" ) {{ 'selected' }} @endif>Pakistan</option>
                                                    <option value="Palau" @if (old('country_of_education')=="Palau" ) {{ 'selected' }} @endif>Palau</option>
                                                    <option value="Palestinian Territory, Occupied" @if (old('country_of_education')=="Palestinian Territory, Occupied" ) {{ 'selected' }} @endif>Palestinian Territory, Occupied</option>
                                                    <option value="Panama" @if (old('country_of_education')=="Panama" ) {{ 'selected' }} @endif>Panama</option>
                                                    <option value="Papua New Guinea" @if (old('country_of_education')=="Papua New Guinea" ) {{ 'selected' }} @endif>Papua New Guinea</option>
                                                    <option value="Paraguay" @if (old('country_of_education')=="Paraguay" ) {{ 'selected' }} @endif>Paraguay</option>
                                                    <option value="Peru" @if (old('country_of_education')=="Peru" ) {{ 'selected' }} @endif>Peru</option>
                                                    <option value="Philippines" @if (old('country_of_education')=="Philippines" ) {{ 'selected' }} @endif>Philippines</option>
                                                    <option value="Pitcairn" @if (old('country_of_education')=="Pitcairn" ) {{ 'selected' }} @endif>Pitcairn</option>
                                                    <option value="Poland" @if (old('country_of_education')=="Poland" ) {{ 'selected' }} @endif>Poland</option>
                                                    <option value="Portugal" @if (old('country_of_education')=="Portugal" ) {{ 'selected' }} @endif>Portugal</option>
                                                    <option value="Puerto Rico" @if (old('country_of_education')=="Puerto Rico" ) {{ 'selected' }} @endif>Puerto Rico</option>
                                                    <option value="Qatar" @if (old('country_of_education')=="Qatar" ) {{ 'selected' }} @endif>Qatar</option>
                                                    <option value="Reunion" @if (old('country_of_education')=="Reunion" ) {{ 'selected' }} @endif>Reunion</option>
                                                    <option value="Romania" @if (old('country_of_education')=="Romania" ) {{ 'selected' }} @endif>Romania</option>
                                                    <option value="Russian Federation" @if (old('country_of_education')=="Russian Federation" ) {{ 'selected' }} @endif>Russian Federation</option>
                                                    <option value="Rwanda" @if (old('country_of_education')=="Rwanda" ) {{ 'selected' }} @endif>Rwanda</option>
                                                    <option value="Saint Barthelemy" @if (old('country_of_education')=="Saint Barthelemy" ) {{ 'selected' }} @endif>Saint Barthelemy</option>
                                                    <option value="Saint Helena" @if (old('country_of_education')=="Saint Helena" ) {{ 'selected' }} @endif>Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis" @if (old('country_of_education')=="Saint Kitts and Nevis" ) {{ 'selected' }} @endif>Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia" @if (old('country_of_education')=="Saint Lucia" ) {{ 'selected' }} @endif>Saint Lucia</option>
                                                    <option value="Saint Martin" @if (old('country_of_education')=="Saint Martin" ) {{ 'selected' }} @endif>Saint Martin</option>
                                                    <option value="Saint Pierre and Miquelon" @if (old('country_of_education')=="Saint Pierre and Miquelon" ) {{ 'selected' }} @endif>Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and the Grenadines" @if (old('country_of_education')=="Saint Vincent and the Grenadines" ) {{ 'selected' }} @endif>Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa" @if (old('country_of_education')=="Samoa" ) {{ 'selected' }} @endif>Samoa</option>
                                                    <option value="San Marino" @if (old('country_of_education')=="San Marino" ) {{ 'selected' }} @endif>San Marino</option>
                                                    <option value="Sao Tome and Principe" @if (old('country_of_education')=="Sao Tome and Principe" ) {{ 'selected' }} @endif>Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia" @if (old('country_of_education')=="Saudi Arabia" ) {{ 'selected' }} @endif>Saudi Arabia</option>
                                                    <option value="Senegal" @if (old('country_of_education')=="Senegal" ) {{ 'selected' }} @endif>Senegal</option>
                                                    <option value="Serbia" @if (old('country_of_education')=="Serbia" ) {{ 'selected' }} @endif>Serbia</option>
                                                    <option value="Serbia and Montenegro" @if (old('country_of_education')=="Serbia and Montenegro" ) {{ 'selected' }} @endif>Serbia and Montenegro</option>
                                                    <option value="Seychelles" @if (old('country_of_education')=="Seychelles" ) {{ 'selected' }} @endif>Seychelles</option>
                                                    <option value="Sierra Leone" @if (old('country_of_education')=="Sierra Leone" ) {{ 'selected' }} @endif>Sierra Leone</option>
                                                    <option value="Singapore" @if (old('country_of_education')=="Singapore" ) {{ 'selected' }} @endif>Singapore</option>
                                                    <option value="Sint Maarten" @if (old('country_of_education')=="Sint Maarten" ) {{ 'selected' }} @endif>Sint Maarten</option>
                                                    <option value="Slovakia" @if (old('country_of_education')=="Slovakia" ) {{ 'selected' }} @endif>Slovakia</option>
                                                    <option value="Slovenia" @if (old('country_of_education')=="Slovenia" ) {{ 'selected' }} @endif>Slovenia</option>
                                                    <option value="Solomon Islands" @if (old('country_of_education')=="Solomon Islands" ) {{ 'selected' }} @endif>Solomon Islands</option>
                                                    <option value="Somalia" @if (old('country_of_education')=="Somalia" ) {{ 'selected' }} @endif>Somalia</option>
                                                    <option value="South Africa" @if (old('country_of_education')=="South Africa" ) {{ 'selected' }} @endif>South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands" @if (old('country_of_education')=="South Georgia and the South Sandwich Islands" ) {{ 'selected' }} @endif>South Georgia and the South Sandwich Islands</option>
                                                    <option value="South Sudan" @if (old('country_of_education')=="South Sudan" ) {{ 'selected' }} @endif>South Sudan</option>
                                                    <option value="Spain" @if (old('country_of_education')=="Spain" ) {{ 'selected' }} @endif>Spain</option>
                                                    <option value="Sri Lanka" @if (old('country_of_education')=="Sri Lanka" ) {{ 'selected' }} @endif>Sri Lanka</option>
                                                    <option value="Sudan" @if (old('country_of_education')=="Sudan" ) {{ 'selected' }} @endif>Sudan</option>
                                                    <option value="Suriname" @if (old('country_of_education')=="Suriname" ) {{ 'selected' }} @endif>Suriname</option>
                                                    <option value="Svalbard and Jan Mayen" @if (old('country_of_education')=="Svalbard and Jan Mayen" ) {{ 'selected' }} @endif>Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland" @if (old('country_of_education')=="Swaziland" ) {{ 'selected' }} @endif>Swaziland</option>
                                                    <option value="Sweden" @if (old('country_of_education')=="Sweden" ) {{ 'selected' }} @endif>Sweden</option>
                                                    <option value="Switzerland" @if (old('country_of_education')=="Switzerland" ) {{ 'selected' }} @endif>Switzerland</option>
                                                    <option value="Syrian Arab Republic" @if (old('country_of_education')=="Syrian Arab Republic" ) {{ 'selected' }} @endif>Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China" @if (old('country_of_education')=="Taiwan, Province of China" ) {{ 'selected' }} @endif>Taiwan, Province of China</option>
                                                    <option value="Tajikistan" @if (old('country_of_education')=="Tajikistan" ) {{ 'selected' }} @endif>Tajikistan</option>
                                                    <option value="Tanzania, United Republic of" @if (old('country_of_education')=="Tanzania, United Republic of" ) {{ 'selected' }} @endif>Tanzania, United Republic of</option>
                                                    <option value="Thailand" @if (old('country_of_education')=="Thailand" ) {{ 'selected' }} @endif>Thailand</option>
                                                    <option value="Timor-Leste" @if (old('country_of_education')=="Timor-Leste" ) {{ 'selected' }} @endif>Timor-Leste</option>
                                                    <option value="Togo" @if (old('country_of_education')=="Togo" ) {{ 'selected' }} @endif>Togo</option>
                                                    <option value="Tokelau" @if (old('country_of_education')=="Tokelau" ) {{ 'selected' }} @endif>Tokelau</option>
                                                    <option value="Tonga" @if (old('country_of_education')=="Tonga" ) {{ 'selected' }} @endif>Tonga</option>
                                                    <option value="Trinidad and Tobago" @if (old('country_of_education')=="Trinidad and Tobago" ) {{ 'selected' }} @endif>Trinidad and Tobago</option>
                                                    <option value="Tunisia" @if (old('country_of_education')=="Tunisia" ) {{ 'selected' }} @endif>Tunisia</option>
                                                    <option value="Turkey" @if (old('country_of_education')=="Turkey" ) {{ 'selected' }} @endif>Turkey</option>
                                                    <option value="Turkmenistan" @if (old('country_of_education')=="Turkmenistan" ) {{ 'selected' }} @endif>Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands" @if (old('country_of_education')=="Turks and Caicos Islands" ) {{ 'selected' }} @endif>Turks and Caicos Islands</option>
                                                    <option value="Tuvalu" @if (old('country_of_education')=="Tuvalu" ) {{ 'selected' }} @endif>Tuvalu</option>
                                                    <option value="Uganda" @if (old('country_of_education')=="Uganda" ) {{ 'selected' }} @endif>Uganda</option>
                                                    <option value="Ukraine" @if (old('country_of_education')=="Ukraine" ) {{ 'selected' }} @endif>Ukraine</option>
                                                    <option value="United Arab Emirates" @if (old('country_of_education')=="United Arab Emirates" ) {{ 'selected' }} @endif>United Arab Emirates</option>
                                                    <option value="United Kingdom" @if (old('country_of_education')=="United Kingdom" ) {{ 'selected' }} @endif>United Kingdom</option>
                                                    <option value="United States" @if (old('country_of_education')=="United States" ) {{ 'selected' }} @endif>United States</option>
                                                    <option value="United States Minor Outlying Islands" @if (old('country_of_education')=="United States Minor Outlying Islands" ) {{ 'selected' }} @endif>United States Minor Outlying Islands</option>
                                                    <option value="Uruguay" @if (old('country_of_education')=="Uruguay" ) {{ 'selected' }} @endif>Uruguay</option>
                                                    <option value="Uzbekistan" @if (old('country_of_education')=="Uzbekistan" ) {{ 'selected' }} @endif>Uzbekistan</option>
                                                    <option value="Vanuatu" @if (old('country_of_education')=="Vanuatu" ) {{ 'selected' }} @endif>Vanuatu</option>
                                                    <option value="Venezuela" @if (old('country_of_education')=="Venezuela" ) {{ 'selected' }} @endif>Venezuela</option>
                                                    <option value="Viet Nam" @if (old('country_of_education')=="Viet Nam" ) {{ 'selected' }} @endif>Viet Nam</option>
                                                    <option value="Virgin Islands, British" @if (old('country_of_education')=="Virgin Islands, British" ) {{ 'selected' }} @endif>Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.s." @if (old('country_of_education')=="Virgin Islands, U.s." ) {{ 'selected' }} @endif>Virgin Islands, U.s.</option>
                                                    <option value="Wallis and Futuna" @if (old('country_of_education')=="Wallis and Futuna" ) {{ 'selected' }} @endif>Wallis and Futuna</option>
                                                    <option value="Western Sahara" @if (old('country_of_education')=="Western Sahara" ) {{ 'selected' }} @endif>Western Sahara</option>
                                                    <option value="Yemen" @if (old('country_of_education')=="Yemen" ) {{ 'selected' }} @endif>Yemen</option>
                                                    <option value="Zambia" @if (old('country_of_education')=="Zambia" ) {{ 'selected' }} @endif>Zambia</option>
                                                    <option value="Zimbabwe" @if (old('country_of_education')=="Zimbabwe" ) {{ 'selected' }} @endif>Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Highest Level of Education <span class="red">*</span> </label>
                                                <select name="highest_level_of_education" id="highest_level_of_education" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Highest Level of Education</option>
                                                    <option value="3-Year Undergraduate Advanced Diploma" @if (old('highest_level_of_education')=="3-Year Undergraduate Advanced Diploma" ) {{ 'selected' }} @endif>3-Year Undergraduate Advanced Diploma</option>
                                                    <option value="3-Yaar Bachelors Degree" @if (old('highest_level_of_education')=="3-Yaar Bachelors Degree" ) {{ 'selected' }} @endif>3-Yaar Bachelors Degree</option>
                                                    <option value="4-Yaar Bachelors Degree" @if (old('highest_level_of_education')=="4-Yaar Bachelors Degree" ) {{ 'selected' }} @endif>4-Yaar Bachelors Degree</option>
                                                    <optgroup label="Postgraduate"></optgroup>
                                                    <option value="Postgraduate Certificate/Diploma" @if (old('highest_level_of_education')=="Postgraduate Certificate/Diploma" ) {{ 'selected' }} @endif>Postgraduate Certificate/Diploma</option>
                                                    <option value="Masters Degree" @if (old('highest_level_of_education')=="Masters Degree" ) {{ 'selected' }} @endif>Masters Degree</option>
                                                    <option value="Doctoral Degree (Phd,M.D..)" @if (old('highest_level_of_education')=="Doctoral Degree (Phd,M.D..)" ) {{ 'selected' }} @endif>Doctoral Degree (Phd,M.D..)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Grading Scheme <span class="red">*</span> </label>
                                                <select name="grading_scheme" id="grading_scheme" class="form-select" aria-label="Default select example">
                                                    <option value="">Select Grading Scheme</option>
                                                    <option value="High Education (Degree) Division Scale">High Education (Degree) Division Scale</option>
                                                    <option value="High Education (Bechelor and Above) Grade Point 10 Scale">High Education (Bechelor and Above) Grade Point 10 Scale </option>
                                                    <option value="High Education (Bechelor and Above) Percentage Scale 0-100">High Education (Bechelor and Above) Percentage Scale 0-100 </option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Grade Average <span class="red">*</span> </label>
                                                <input name="grade_average" id="grade_average" type="tel" class="form-control" placeholder="Enter Grade Average...">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-md-5">
                                            <div class="form-group form-check">
                                                <input class="form-check-input" type="checkbox" value="Yes" id="graduated_from_most_recent_school" name="graduated_from_most_recent_school">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Graduated from most recent school
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="schools-attended">
                            <div class="card mt-md-3">
                                <div class="card-body">
                                    <h4>Schools Attended</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                Enter the school attended for Grade 12 / High School
                                            </p>
                                            <button class="btn-next mx-md-3 add_now" type="button">Add Now <i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="school-attended">
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Country of Institution <span class="red">*</span> </label>
                                                    <select name="country_of_institution" id="country_of_institution" class="form-select" aria-label="Default select example">
                                                        <option value="">Select Country of Institution</option>
                                                        <option value="Afghanistan" @if (old('country_of_institution')=="Afghanistan" ) {{ 'selected' }} @endif>Afghanistan</option>
                                                        <option value="Aland Islands" @if (old('country_of_institution')=="Aland Islands" ) {{ 'selected' }} @endif>Aland Islands</option>
                                                        <option value="Albania" @if (old('country_of_institution')=="Albania" ) {{ 'selected' }} @endif>Albania</option>
                                                        <option value="Algeria" @if (old('country_of_institution')=="Algeria" ) {{ 'selected' }} @endif>Algeria</option>
                                                        <option value="American Samoa" @if (old('country_of_institution')=="American Samoa" ) {{ 'selected' }} @endif>American Samoa</option>
                                                        <option value="Andorra" @if (old('country_of_institution')=="Andorra" ) {{ 'selected' }} @endif>Andorra</option>
                                                        <option value="Angola" @if (old('country_of_institution')=="Angola" ) {{ 'selected' }} @endif>Angola</option>
                                                        <option value="Anguilla" @if (old('country_of_institution')=="Anguilla" ) {{ 'selected' }} @endif>Anguilla</option>
                                                        <option value="Antarctica" @if (old('country_of_institution')=="Antarctica" ) {{ 'selected' }} @endif>Antarctica</option>
                                                        <option value="Antigua and Barbuda" @if (old('country_of_institution')=="Antigua and Barbuda" ) {{ 'selected' }} @endif>Antigua and Barbuda</option>
                                                        <option value="Argentina" @if (old('country_of_institution')=="Argentina" ) {{ 'selected' }} @endif>Argentina</option>
                                                        <option value="Armenia" @if (old('country_of_institution')=="Armenia" ) {{ 'selected' }} @endif>Armenia</option>
                                                        <option value="Aruba" @if (old('country_of_institution')=="Aruba" ) {{ 'selected' }} @endif>Aruba</option>
                                                        <option value="Australia" @if (old('country_of_institution')=="Australia" ) {{ 'selected' }} @endif>Australia</option>
                                                        <option value="Austria" @if (old('country_of_institution')=="Austria" ) {{ 'selected' }} @endif>Austria</option>
                                                        <option value="Azerbaijan" @if (old('country_of_institution')=="Azerbaijan" ) {{ 'selected' }} @endif>Azerbaijan</option>
                                                        <option value="Bahamas" @if (old('country_of_institution')=="Bahamas" ) {{ 'selected' }} @endif>Bahamas</option>
                                                        <option value="Bahrain" @if (old('country_of_institution')=="Bahrain" ) {{ 'selected' }} @endif>Bahrain</option>
                                                        <option value="Bangladesh" @if (old('country_of_institution')=="Bangladesh" ) {{ 'selected' }} @endif>Bangladesh</option>
                                                        <option value="Barbados" @if (old('country_of_institution')=="Barbados" ) {{ 'selected' }} @endif>Barbados</option>
                                                        <option value="Belarus" @if (old('country_of_institution')=="Belarus" ) {{ 'selected' }} @endif>Belarus</option>
                                                        <option value="Belgium" @if (old('country_of_institution')=="Belgium" ) {{ 'selected' }} @endif>Belgium</option>
                                                        <option value="Belize" @if (old('country_of_institution')=="Belize" ) {{ 'selected' }} @endif>Belize</option>
                                                        <option value="Benin" @if (old('country_of_institution')=="Benin" ) {{ 'selected' }} @endif>Benin</option>
                                                        <option value="Bermuda" @if (old('country_of_institution')=="Bermuda" ) {{ 'selected' }} @endif>Bermuda</option>
                                                        <option value="Bhutan" @if (old('country_of_institution')=="Bhutan" ) {{ 'selected' }} @endif>Bhutan</option>
                                                        <option value="Bolivia" @if (old('country_of_institution')=="Bolivia" ) {{ 'selected' }} @endif>Bolivia</option>
                                                        <option value="Bonaire, Sint Eustatius and Saba" @if (old('country_of_institution')=="Bonaire, Sint Eustatius and Saba" ) {{ 'selected' }} @endif>Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="Bosnia and Herzegovina" @if (old('country_of_institution')=="Bosnia and Herzegovina" ) {{ 'selected' }} @endif>Bosnia and Herzegovina</option>
                                                        <option value="Botswana" @if (old('country_of_institution')=="Botswana" ) {{ 'selected' }} @endif>Botswana</option>
                                                        <option value="Bouvet Island" @if (old('country_of_institution')=="Bouvet Island" ) {{ 'selected' }} @endif>Bouvet Island</option>
                                                        <option value="Brazil" @if (old('country_of_institution')=="Brazil" ) {{ 'selected' }} @endif>Brazil</option>
                                                        <option value="British Indian Ocean Territory" @if (old('country_of_institution')=="British Indian Ocean Territory" ) {{ 'selected' }} @endif>British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam" @if (old('country_of_institution')=="Brunei Darussalam" ) {{ 'selected' }} @endif>Brunei Darussalam</option>
                                                        <option value="Bulgaria" @if (old('country_of_institution')=="Bulgaria" ) {{ 'selected' }} @endif>Bulgaria</option>
                                                        <option value="Burkina Faso" @if (old('country_of_institution')=="Burkina Faso" ) {{ 'selected' }} @endif>Burkina Faso</option>
                                                        <option value="Burundi" @if (old('country_of_institution')=="Burundi" ) {{ 'selected' }} @endif>Burundi</option>
                                                        <option value="Cambodia" @if (old('country_of_institution')=="Cambodia" ) {{ 'selected' }} @endif>Cambodia</option>
                                                        <option value="Cameroon" @if (old('country_of_institution')=="Cameroon" ) {{ 'selected' }} @endif>Cameroon</option>
                                                        <option value="Canada" @if (old('country_of_institution')=="Canada" ) {{ 'selected' }} @endif>Canada</option>
                                                        <option value="Cape Verde" @if (old('country_of_institution')=="Cape Verde" ) {{ 'selected' }} @endif>Cape Verde</option>
                                                        <option value="Cayman Islands" @if (old('country_of_institution')=="Cayman Islands" ) {{ 'selected' }} @endif>Cayman Islands</option>
                                                        <option value="Central African Republic" @if (old('country_of_institution')=="Central African Republic" ) {{ 'selected' }} @endif>Central African Republic</option>
                                                        <option value="Chad" @if (old('country_of_institution')=="Chad" ) {{ 'selected' }} @endif>Chad</option>
                                                        <option value="Chile" @if (old('country_of_institution')=="Chile" ) {{ 'selected' }} @endif>Chile</option>
                                                        <option value="China" @if (old('country_of_institution')=="China" ) {{ 'selected' }} @endif>China</option>
                                                        <option value="Christmas Island" @if (old('country_of_institution')=="Christmas Island" ) {{ 'selected' }} @endif>Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands" @if (old('country_of_institution')=="Cocos (Keeling) Islands" ) {{ 'selected' }} @endif>Cocos (Keeling) Islands</option>
                                                        <option value="Colombia" @if (old('country_of_institution')=="Colombia" ) {{ 'selected' }} @endif>Colombia</option>
                                                        <option value="Comoros" @if (old('country_of_institution')=="Comoros" ) {{ 'selected' }} @endif>Comoros</option>
                                                        <option value="Congo" @if (old('country_of_institution')=="Congo" ) {{ 'selected' }} @endif>Congo</option>
                                                        <option value="Congo, Democratic Republic of the Congo" @if (old('country_of_institution')=="Congo, Democratic Republic of the Congo" ) {{ 'selected' }} @endif>Congo, Democratic Republic of the Congo</option>
                                                        <option value="Cook Islands" @if (old('country_of_institution')=="Cook Islands" ) {{ 'selected' }} @endif>Cook Islands</option>
                                                        <option value="Costa Rica" @if (old('country_of_institution')=="Costa Rica" ) {{ 'selected' }} @endif>Costa Rica</option>
                                                        <option value="Cote D'Ivoire" @if (old('country_of_institution')=="Cote D'Ivoire" ) {{ 'selected' }} @endif>Cote D'Ivoire</option>
                                                        <option value="Croatia" @if (old('country_of_institution')=="Croatia" ) {{ 'selected' }} @endif>Croatia</option>
                                                        <option value="Cuba" @if (old('country_of_institution')=="Cuba" ) {{ 'selected' }} @endif>Cuba</option>
                                                        <option value="Curacao" @if (old('country_of_institution')=="Curacao" ) {{ 'selected' }} @endif>Curacao</option>
                                                        <option value="Cyprus" @if (old('country_of_institution')=="Cyprus" ) {{ 'selected' }} @endif>Cyprus</option>
                                                        <option value="Czech Republic" @if (old('country_of_institution')=="Czech Republic" ) {{ 'selected' }} @endif>Czech Republic</option>
                                                        <option value="Denmark" @if (old('country_of_institution')=="Denmark" ) {{ 'selected' }} @endif>Denmark</option>
                                                        <option value="Djibouti" @if (old('country_of_institution')=="Djibouti" ) {{ 'selected' }} @endif>Djibouti</option>
                                                        <option value="Dominica" @if (old('country_of_institution')=="Dominica" ) {{ 'selected' }} @endif>Dominica</option>
                                                        <option value="Dominican Republic" @if (old('country_of_institution')=="Dominican Republic" ) {{ 'selected' }} @endif>Dominican Republic</option>
                                                        <option value="Ecuador" @if (old('country_of_institution')=="Ecuador" ) {{ 'selected' }} @endif>Ecuador</option>
                                                        <option value="Egypt" @if (old('country_of_institution')=="Egypt" ) {{ 'selected' }} @endif>Egypt</option>
                                                        <option value="El Salvador" @if (old('country_of_institution')=="El Salvador" ) {{ 'selected' }} @endif>El Salvador</option>
                                                        <option value="Equatorial Guinea" @if (old('country_of_institution')=="Equatorial Guinea" ) {{ 'selected' }} @endif>Equatorial Guinea</option>
                                                        <option value="Eritrea" @if (old('country_of_institution')=="Eritrea" ) {{ 'selected' }} @endif>Eritrea</option>
                                                        <option value="Estonia" @if (old('country_of_institution')=="Estonia" ) {{ 'selected' }} @endif>Estonia</option>
                                                        <option value="Ethiopia" @if (old('country_of_institution')=="Ethiopia" ) {{ 'selected' }} @endif>Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)" @if (old('country_of_institution')=="Falkland Islands (Malvinas)" ) {{ 'selected' }} @endif>Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands" @if (old('country_of_institution')=="Faroe Islands" ) {{ 'selected' }} @endif>Faroe Islands</option>
                                                        <option value="Fiji" @if (old('country_of_institution')=="Fiji" ) {{ 'selected' }} @endif>Fiji</option>
                                                        <option value="Finland" @if (old('country_of_institution')=="Finland" ) {{ 'selected' }} @endif>Finland</option>
                                                        <option value="France" @if (old('country_of_institution')=="France" ) {{ 'selected' }} @endif>France</option>
                                                        <option value="French Guiana" @if (old('country_of_institution')=="French Guiana" ) {{ 'selected' }} @endif>French Guiana</option>
                                                        <option value="French Polynesia" @if (old('country_of_institution')=="French Polynesia" ) {{ 'selected' }} @endif>French Polynesia</option>
                                                        <option value="French Southern Territories" @if (old('country_of_institution')=="French Southern Territories" ) {{ 'selected' }} @endif>French Southern Territories</option>
                                                        <option value="Gabon" @if (old('country_of_institution')=="Gabon" ) {{ 'selected' }} @endif>Gabon</option>
                                                        <option value="Gambia" @if (old('country_of_institution')=="Gambia" ) {{ 'selected' }} @endif>Gambia</option>
                                                        <option value="Georgia" @if (old('country_of_institution')=="Georgia" ) {{ 'selected' }} @endif>Georgia</option>
                                                        <option value="Germany" @if (old('country_of_institution')=="Germany" ) {{ 'selected' }} @endif>Germany</option>
                                                        <option value="Ghana" @if (old('country_of_institution')=="Ghana" ) {{ 'selected' }} @endif>Ghana</option>
                                                        <option value="Gibraltar" @if (old('country_of_institution')=="Gibraltar" ) {{ 'selected' }} @endif>Gibraltar</option>
                                                        <option value="Greece" @if (old('country_of_institution')=="Greece" ) {{ 'selected' }} @endif>Greece</option>
                                                        <option value="Greenland" @if (old('country_of_institution')=="Greenland" ) {{ 'selected' }} @endif>Greenland</option>
                                                        <option value="Grenada" @if (old('country_of_institution')=="Grenada" ) {{ 'selected' }} @endif>Grenada</option>
                                                        <option value="Guadeloupe" @if (old('country_of_institution')=="Guadeloupe" ) {{ 'selected' }} @endif>Guadeloupe</option>
                                                        <option value="Guam" @if (old('country_of_institution')=="Guam" ) {{ 'selected' }} @endif>Guam</option>
                                                        <option value="Guatemala" @if (old('country_of_institution')=="Guatemala" ) {{ 'selected' }} @endif>Guatemala</option>
                                                        <option value="Guernsey" @if (old('country_of_institution')=="Guernsey" ) {{ 'selected' }} @endif>Guernsey</option>
                                                        <option value="Guinea" @if (old('country_of_institution')=="Guinea" ) {{ 'selected' }} @endif>Guinea</option>
                                                        <option value="Guinea-Bissau" @if (old('country_of_institution')=="Guinea-Bissau" ) {{ 'selected' }} @endif>Guinea-Bissau</option>
                                                        <option value="Guyana" @if (old('country_of_institution')=="Guyana" ) {{ 'selected' }} @endif>Guyana</option>
                                                        <option value="Haiti" @if (old('country_of_institution')=="Haiti" ) {{ 'selected' }} @endif>Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands" @if (old('country_of_institution')=="Heard Island and Mcdonald Islands" ) {{ 'selected' }} @endif>Heard Island and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)" @if (old('country_of_institution')=="Holy See (Vatican City State)" ) {{ 'selected' }} @endif>Holy See (Vatican City State)</option>
                                                        <option value="Honduras" @if (old('country_of_institution')=="Honduras" ) {{ 'selected' }} @endif>Honduras</option>
                                                        <option value="Hong Kong" @if (old('country_of_institution')=="Hong Kong" ) {{ 'selected' }} @endif>Hong Kong</option>
                                                        <option value="Hungary" @if (old('country_of_institution')=="Hungary" ) {{ 'selected' }} @endif>Hungary</option>
                                                        <option value="Iceland" @if (old('country_of_institution')=="Iceland" ) {{ 'selected' }} @endif>Iceland</option>
                                                        <option value="India" @if (old('country_of_institution')=="India" ) {{ 'selected' }} @endif>India</option>
                                                        <option value="Indonesia" @if (old('country_of_institution')=="Indonesia" ) {{ 'selected' }} @endif>Indonesia</option>
                                                        <option value="Iran, Islamic Republic of" @if (old('country_of_institution')=="Iran, Islamic Republic of" ) {{ 'selected' }} @endif>Iran, Islamic Republic of</option>
                                                        <option value="Iraq" @if (old('country_of_institution')=="Iraq" ) {{ 'selected' }} @endif>Iraq</option>
                                                        <option value="Ireland" @if (old('country_of_institution')=="Ireland" ) {{ 'selected' }} @endif>Ireland</option>
                                                        <option value="Isle of Man" @if (old('country_of_institution')=="Isle of Man" ) {{ 'selected' }} @endif>Isle of Man</option>
                                                        <option value="Israel" @if (old('country_of_institution')=="Israel" ) {{ 'selected' }} @endif>Israel</option>
                                                        <option value="Italy" @if (old('country_of_institution')=="Italy" ) {{ 'selected' }} @endif>Italy</option>
                                                        <option value="Jamaica" @if (old('country_of_institution')=="Jamaica" ) {{ 'selected' }} @endif>Jamaica</option>
                                                        <option value="Japan" @if (old('country_of_institution')=="Japan" ) {{ 'selected' }} @endif>Japan</option>
                                                        <option value="Jersey" @if (old('country_of_institution')=="Jersey" ) {{ 'selected' }} @endif>Jersey</option>
                                                        <option value="Jordan" @if (old('country_of_institution')=="Jordan" ) {{ 'selected' }} @endif>Jordan</option>
                                                        <option value="Kazakhstan" @if (old('country_of_institution')=="Kazakhstan" ) {{ 'selected' }} @endif>Kazakhstan</option>
                                                        <option value="Kenya" @if (old('country_of_institution')=="Kenya" ) {{ 'selected' }} @endif>Kenya</option>
                                                        <option value="Kiribati" @if (old('country_of_institution')=="Kiribati" ) {{ 'selected' }} @endif>Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of" @if (old('country_of_institution')=="Korea, Democratic People's Republic of" ) {{ 'selected' }} @endif>Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of" @if (old('country_of_institution')=="Korea, Republic of" ) {{ 'selected' }} @endif>Korea, Republic of</option>
                                                        <option value="Kosovo" @if (old('country_of_institution')=="Kosovo" ) {{ 'selected' }} @endif>Kosovo</option>
                                                        <option value="Kuwait" @if (old('country_of_institution')=="Kuwait" ) {{ 'selected' }} @endif>Kuwait</option>
                                                        <option value="Kyrgyzstan" @if (old('country_of_institution')=="Kyrgyzstan" ) {{ 'selected' }} @endif>Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic" @if (old('country_of_institution')=="Lao People's Democratic Republic" ) {{ 'selected' }} @endif>Lao People's Democratic Republic</option>
                                                        <option value="Latvia" @if (old('country_of_institution')=="Latvia" ) {{ 'selected' }} @endif>Latvia</option>
                                                        <option value="Lebanon" @if (old('country_of_institution')=="Lebanon" ) {{ 'selected' }} @endif>Lebanon</option>
                                                        <option value="Lesotho" @if (old('country_of_institution')=="Lesotho" ) {{ 'selected' }} @endif>Lesotho</option>
                                                        <option value="Liberia" @if (old('country_of_institution')=="Liberia" ) {{ 'selected' }} @endif>Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya" @if (old('country_of_institution')=="Libyan Arab Jamahiriya" ) {{ 'selected' }} @endif>Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein" @if (old('country_of_institution')=="Liechtenstein" ) {{ 'selected' }} @endif>Liechtenstein</option>
                                                        <option value="Lithuania" @if (old('country_of_institution')=="Lithuania" ) {{ 'selected' }} @endif>Lithuania</option>
                                                        <option value="Luxembourg" @if (old('country_of_institution')=="Luxembourg" ) {{ 'selected' }} @endif>Luxembourg</option>
                                                        <option value="Macao" @if (old('country_of_institution')=="Macao" ) {{ 'selected' }} @endif>Macao</option>
                                                        <option value="Macedonia, the Former Yugoslav Republic of" @if (old('country_of_institution')=="Macedonia, the Former Yugoslav Republic of" ) {{ 'selected' }} @endif>Macedonia, the Former Yugoslav Republic of</option>
                                                        <option value="Madagascar" @if (old('country_of_institution')=="Madagascar" ) {{ 'selected' }} @endif>Madagascar</option>
                                                        <option value="Malawi" @if (old('country_of_institution')=="Malawi" ) {{ 'selected' }} @endif>Malawi</option>
                                                        <option value="Malaysia" @if (old('country_of_institution')=="Malaysia" ) {{ 'selected' }} @endif>Malaysia</option>
                                                        <option value="Maldives" @if (old('country_of_institution')=="Maldives" ) {{ 'selected' }} @endif>Maldives</option>
                                                        <option value="Mali" @if (old('country_of_institution')=="Mali" ) {{ 'selected' }} @endif>Mali</option>
                                                        <option value="Malta" @if (old('country_of_institution')=="Malta" ) {{ 'selected' }} @endif>Malta</option>
                                                        <option value="Marshall Islands" @if (old('country_of_institution')=="Marshall Islands" ) {{ 'selected' }} @endif>Marshall Islands</option>
                                                        <option value="Martinique" @if (old('country_of_institution')=="Martinique" ) {{ 'selected' }} @endif>Martinique</option>
                                                        <option value="Mauritania" @if (old('country_of_institution')=="Mauritania" ) {{ 'selected' }} @endif>Mauritania</option>
                                                        <option value="Mauritius" @if (old('country_of_institution')=="Mauritius" ) {{ 'selected' }} @endif>Mauritius</option>
                                                        <option value="Mayotte" @if (old('country_of_institution')=="Mayotte" ) {{ 'selected' }} @endif>Mayotte</option>
                                                        <option value="Mexico" @if (old('country_of_institution')=="Mexico" ) {{ 'selected' }} @endif>Mexico</option>
                                                        <option value="Micronesia, Federated States of" @if (old('country_of_institution')=="Micronesia, Federated States of" ) {{ 'selected' }} @endif>Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of" @if (old('country_of_institution')=="Moldova, Republic of" ) {{ 'selected' }} @endif>Moldova, Republic of</option>
                                                        <option value="Monaco" @if (old('country_of_institution')=="Monaco" ) {{ 'selected' }} @endif>Monaco</option>
                                                        <option value="Mongolia" @if (old('country_of_institution')=="Mongolia" ) {{ 'selected' }} @endif>Mongolia</option>
                                                        <option value="Montenegro" @if (old('country_of_institution')=="Montenegro" ) {{ 'selected' }} @endif>Montenegro</option>
                                                        <option value="Montserrat" @if (old('country_of_institution')=="Montserrat" ) {{ 'selected' }} @endif>Montserrat</option>
                                                        <option value="Morocco" @if (old('country_of_institution')=="Morocco" ) {{ 'selected' }} @endif>Morocco</option>
                                                        <option value="Mozambique" @if (old('country_of_institution')=="Mozambique" ) {{ 'selected' }} @endif>Mozambique</option>
                                                        <option value="Myanmar" @if (old('country_of_institution')=="Myanmar" ) {{ 'selected' }} @endif>Myanmar</option>
                                                        <option value="Namibia" @if (old('country_of_institution')=="Namibia" ) {{ 'selected' }} @endif>Namibia</option>
                                                        <option value="Nauru" @if (old('country_of_institution')=="Nauru" ) {{ 'selected' }} @endif>Nauru</option>
                                                        <option value="Nepal" @if (old('country_of_institution')=="Nepal" ) {{ 'selected' }} @endif>Nepal</option>
                                                        <option value="Netherlands" @if (old('country_of_institution')=="Netherlands" ) {{ 'selected' }} @endif>Netherlands</option>
                                                        <option value="Netherlands Antilles" @if (old('country_of_institution')=="Netherlands Antilles" ) {{ 'selected' }} @endif>Netherlands Antilles</option>
                                                        <option value="New Caledonia" @if (old('country_of_institution')=="New Caledonia" ) {{ 'selected' }} @endif>New Caledonia</option>
                                                        <option value="New Zealand" @if (old('country_of_institution')=="New Zealand" ) {{ 'selected' }} @endif>New Zealand</option>
                                                        <option value="Nicaragua" @if (old('country_of_institution')=="Nicaragua" ) {{ 'selected' }} @endif>Nicaragua</option>
                                                        <option value="Niger" @if (old('country_of_institution')=="Niger" ) {{ 'selected' }} @endif>Niger</option>
                                                        <option value="Nigeria" @if (old('country_of_institution')=="Nigeria" ) {{ 'selected' }} @endif>Nigeria</option>
                                                        <option value="Niue" @if (old('country_of_institution')=="Niue" ) {{ 'selected' }} @endif>Niue</option>
                                                        <option value="Norfolk Island" @if (old('country_of_institution')=="Norfolk Island" ) {{ 'selected' }} @endif>Norfolk Island</option>
                                                        <option value="Northern Mariana Islands" @if (old('country_of_institution')=="Northern Mariana Islands" ) {{ 'selected' }} @endif>Northern Mariana Islands</option>
                                                        <option value="Norway" @if (old('country_of_institution')=="Norway" ) {{ 'selected' }} @endif>Norway</option>
                                                        <option value="Oman" @if (old('country_of_institution')=="Oman" ) {{ 'selected' }} @endif>Oman</option>
                                                        <option value="Pakistan" @if (old('country_of_institution')=="Pakistan" ) {{ 'selected' }} @endif>Pakistan</option>
                                                        <option value="Palau" @if (old('country_of_institution')=="Palau" ) {{ 'selected' }} @endif>Palau</option>
                                                        <option value="Palestinian Territory, Occupied" @if (old('country_of_institution')=="Palestinian Territory, Occupied" ) {{ 'selected' }} @endif>Palestinian Territory, Occupied</option>
                                                        <option value="Panama" @if (old('country_of_institution')=="Panama" ) {{ 'selected' }} @endif>Panama</option>
                                                        <option value="Papua New Guinea" @if (old('country_of_institution')=="Papua New Guinea" ) {{ 'selected' }} @endif>Papua New Guinea</option>
                                                        <option value="Paraguay" @if (old('country_of_institution')=="Paraguay" ) {{ 'selected' }} @endif>Paraguay</option>
                                                        <option value="Peru" @if (old('country_of_institution')=="Peru" ) {{ 'selected' }} @endif>Peru</option>
                                                        <option value="Philippines" @if (old('country_of_institution')=="Philippines" ) {{ 'selected' }} @endif>Philippines</option>
                                                        <option value="Pitcairn" @if (old('country_of_institution')=="Pitcairn" ) {{ 'selected' }} @endif>Pitcairn</option>
                                                        <option value="Poland" @if (old('country_of_institution')=="Poland" ) {{ 'selected' }} @endif>Poland</option>
                                                        <option value="Portugal" @if (old('country_of_institution')=="Portugal" ) {{ 'selected' }} @endif>Portugal</option>
                                                        <option value="Puerto Rico" @if (old('country_of_institution')=="Puerto Rico" ) {{ 'selected' }} @endif>Puerto Rico</option>
                                                        <option value="Qatar" @if (old('country_of_institution')=="Qatar" ) {{ 'selected' }} @endif>Qatar</option>
                                                        <option value="Reunion" @if (old('country_of_institution')=="Reunion" ) {{ 'selected' }} @endif>Reunion</option>
                                                        <option value="Romania" @if (old('country_of_institution')=="Romania" ) {{ 'selected' }} @endif>Romania</option>
                                                        <option value="Russian Federation" @if (old('country_of_institution')=="Russian Federation" ) {{ 'selected' }} @endif>Russian Federation</option>
                                                        <option value="Rwanda" @if (old('country_of_institution')=="Rwanda" ) {{ 'selected' }} @endif>Rwanda</option>
                                                        <option value="Saint Barthelemy" @if (old('country_of_institution')=="Saint Barthelemy" ) {{ 'selected' }} @endif>Saint Barthelemy</option>
                                                        <option value="Saint Helena" @if (old('country_of_institution')=="Saint Helena" ) {{ 'selected' }} @endif>Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis" @if (old('country_of_institution')=="Saint Kitts and Nevis" ) {{ 'selected' }} @endif>Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia" @if (old('country_of_institution')=="Saint Lucia" ) {{ 'selected' }} @endif>Saint Lucia</option>
                                                        <option value="Saint Martin" @if (old('country_of_institution')=="Saint Martin" ) {{ 'selected' }} @endif>Saint Martin</option>
                                                        <option value="Saint Pierre and Miquelon" @if (old('country_of_institution')=="Saint Pierre and Miquelon" ) {{ 'selected' }} @endif>Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and the Grenadines" @if (old('country_of_institution')=="Saint Vincent and the Grenadines" ) {{ 'selected' }} @endif>Saint Vincent and the Grenadines</option>
                                                        <option value="Samoa" @if (old('country_of_institution')=="Samoa" ) {{ 'selected' }} @endif>Samoa</option>
                                                        <option value="San Marino" @if (old('country_of_institution')=="San Marino" ) {{ 'selected' }} @endif>San Marino</option>
                                                        <option value="Sao Tome and Principe" @if (old('country_of_institution')=="Sao Tome and Principe" ) {{ 'selected' }} @endif>Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia" @if (old('country_of_institution')=="Saudi Arabia" ) {{ 'selected' }} @endif>Saudi Arabia</option>
                                                        <option value="Senegal" @if (old('country_of_institution')=="Senegal" ) {{ 'selected' }} @endif>Senegal</option>
                                                        <option value="Serbia" @if (old('country_of_institution')=="Serbia" ) {{ 'selected' }} @endif>Serbia</option>
                                                        <option value="Serbia and Montenegro" @if (old('country_of_institution')=="Serbia and Montenegro" ) {{ 'selected' }} @endif>Serbia and Montenegro</option>
                                                        <option value="Seychelles" @if (old('country_of_institution')=="Seychelles" ) {{ 'selected' }} @endif>Seychelles</option>
                                                        <option value="Sierra Leone" @if (old('country_of_institution')=="Sierra Leone" ) {{ 'selected' }} @endif>Sierra Leone</option>
                                                        <option value="Singapore" @if (old('country_of_institution')=="Singapore" ) {{ 'selected' }} @endif>Singapore</option>
                                                        <option value="Sint Maarten" @if (old('country_of_institution')=="Sint Maarten" ) {{ 'selected' }} @endif>Sint Maarten</option>
                                                        <option value="Slovakia" @if (old('country_of_institution')=="Slovakia" ) {{ 'selected' }} @endif>Slovakia</option>
                                                        <option value="Slovenia" @if (old('country_of_institution')=="Slovenia" ) {{ 'selected' }} @endif>Slovenia</option>
                                                        <option value="Solomon Islands" @if (old('country_of_institution')=="Solomon Islands" ) {{ 'selected' }} @endif>Solomon Islands</option>
                                                        <option value="Somalia" @if (old('country_of_institution')=="Somalia" ) {{ 'selected' }} @endif>Somalia</option>
                                                        <option value="South Africa" @if (old('country_of_institution')=="South Africa" ) {{ 'selected' }} @endif>South Africa</option>
                                                        <option value="South Georgia and the South Sandwich Islands" @if (old('country_of_institution')=="South Georgia and the South Sandwich Islands" ) {{ 'selected' }} @endif>South Georgia and the South Sandwich Islands</option>
                                                        <option value="South Sudan" @if (old('country_of_institution')=="South Sudan" ) {{ 'selected' }} @endif>South Sudan</option>
                                                        <option value="Spain" @if (old('country_of_institution')=="Spain" ) {{ 'selected' }} @endif>Spain</option>
                                                        <option value="Sri Lanka" @if (old('country_of_institution')=="Sri Lanka" ) {{ 'selected' }} @endif>Sri Lanka</option>
                                                        <option value="Sudan" @if (old('country_of_institution')=="Sudan" ) {{ 'selected' }} @endif>Sudan</option>
                                                        <option value="Suriname" @if (old('country_of_institution')=="Suriname" ) {{ 'selected' }} @endif>Suriname</option>
                                                        <option value="Svalbard and Jan Mayen" @if (old('country_of_institution')=="Svalbard and Jan Mayen" ) {{ 'selected' }} @endif>Svalbard and Jan Mayen</option>
                                                        <option value="Swaziland" @if (old('country_of_institution')=="Swaziland" ) {{ 'selected' }} @endif>Swaziland</option>
                                                        <option value="Sweden" @if (old('country_of_institution')=="Sweden" ) {{ 'selected' }} @endif>Sweden</option>
                                                        <option value="Switzerland" @if (old('country_of_institution')=="Switzerland" ) {{ 'selected' }} @endif>Switzerland</option>
                                                        <option value="Syrian Arab Republic" @if (old('country_of_institution')=="Syrian Arab Republic" ) {{ 'selected' }} @endif>Syrian Arab Republic</option>
                                                        <option value="Taiwan, Province of China" @if (old('country_of_institution')=="Taiwan, Province of China" ) {{ 'selected' }} @endif>Taiwan, Province of China</option>
                                                        <option value="Tajikistan" @if (old('country_of_institution')=="Tajikistan" ) {{ 'selected' }} @endif>Tajikistan</option>
                                                        <option value="Tanzania, United Republic of" @if (old('country_of_institution')=="Tanzania, United Republic of" ) {{ 'selected' }} @endif>Tanzania, United Republic of</option>
                                                        <option value="Thailand" @if (old('country_of_institution')=="Thailand" ) {{ 'selected' }} @endif>Thailand</option>
                                                        <option value="Timor-Leste" @if (old('country_of_institution')=="Timor-Leste" ) {{ 'selected' }} @endif>Timor-Leste</option>
                                                        <option value="Togo" @if (old('country_of_institution')=="Togo" ) {{ 'selected' }} @endif>Togo</option>
                                                        <option value="Tokelau" @if (old('country_of_institution')=="Tokelau" ) {{ 'selected' }} @endif>Tokelau</option>
                                                        <option value="Tonga" @if (old('country_of_institution')=="Tonga" ) {{ 'selected' }} @endif>Tonga</option>
                                                        <option value="Trinidad and Tobago" @if (old('country_of_institution')=="Trinidad and Tobago" ) {{ 'selected' }} @endif>Trinidad and Tobago</option>
                                                        <option value="Tunisia" @if (old('country_of_institution')=="Tunisia" ) {{ 'selected' }} @endif>Tunisia</option>
                                                        <option value="Turkey" @if (old('country_of_institution')=="Turkey" ) {{ 'selected' }} @endif>Turkey</option>
                                                        <option value="Turkmenistan" @if (old('country_of_institution')=="Turkmenistan" ) {{ 'selected' }} @endif>Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands" @if (old('country_of_institution')=="Turks and Caicos Islands" ) {{ 'selected' }} @endif>Turks and Caicos Islands</option>
                                                        <option value="Tuvalu" @if (old('country_of_institution')=="Tuvalu" ) {{ 'selected' }} @endif>Tuvalu</option>
                                                        <option value="Uganda" @if (old('country_of_institution')=="Uganda" ) {{ 'selected' }} @endif>Uganda</option>
                                                        <option value="Ukraine" @if (old('country_of_institution')=="Ukraine" ) {{ 'selected' }} @endif>Ukraine</option>
                                                        <option value="United Arab Emirates" @if (old('country_of_institution')=="United Arab Emirates" ) {{ 'selected' }} @endif>United Arab Emirates</option>
                                                        <option value="United Kingdom" @if (old('country_of_institution')=="United Kingdom" ) {{ 'selected' }} @endif>United Kingdom</option>
                                                        <option value="United States" @if (old('country_of_institution')=="United States" ) {{ 'selected' }} @endif>United States</option>
                                                        <option value="United States Minor Outlying Islands" @if (old('country_of_institution')=="United States Minor Outlying Islands" ) {{ 'selected' }} @endif>United States Minor Outlying Islands</option>
                                                        <option value="Uruguay" @if (old('country_of_institution')=="Uruguay" ) {{ 'selected' }} @endif>Uruguay</option>
                                                        <option value="Uzbekistan" @if (old('country_of_institution')=="Uzbekistan" ) {{ 'selected' }} @endif>Uzbekistan</option>
                                                        <option value="Vanuatu" @if (old('country_of_institution')=="Vanuatu" ) {{ 'selected' }} @endif>Vanuatu</option>
                                                        <option value="Venezuela" @if (old('country_of_institution')=="Venezuela" ) {{ 'selected' }} @endif>Venezuela</option>
                                                        <option value="Viet Nam" @if (old('country_of_institution')=="Viet Nam" ) {{ 'selected' }} @endif>Viet Nam</option>
                                                        <option value="Virgin Islands, British" @if (old('country_of_institution')=="Virgin Islands, British" ) {{ 'selected' }} @endif>Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.s." @if (old('country_of_institution')=="Virgin Islands, U.s." ) {{ 'selected' }} @endif>Virgin Islands, U.s.</option>
                                                        <option value="Wallis and Futuna" @if (old('country_of_institution')=="Wallis and Futuna" ) {{ 'selected' }} @endif>Wallis and Futuna</option>
                                                        <option value="Western Sahara" @if (old('country_of_institution')=="Western Sahara" ) {{ 'selected' }} @endif>Western Sahara</option>
                                                        <option value="Yemen" @if (old('country_of_institution')=="Yemen" ) {{ 'selected' }} @endif>Yemen</option>
                                                        <option value="Zambia" @if (old('country_of_institution')=="Zambia" ) {{ 'selected' }} @endif>Zambia</option>
                                                        <option value="Zimbabwe" @if (old('country_of_institution')=="Zimbabwe" ) {{ 'selected' }} @endif>Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Name of Institution <span class="red">*</span> </label>
                                                    <input type="text" name="name_of_institution" id="name_of_institution" class="form-control" placeholder="Enter Name of Institution...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Level of Education <span class="red">*</span> </label>
                                                    <select name="level_of_education" id="level_of_education" class="form-select" aria-label="Default select example">
                                                        <option value="">None</option>
                                                        <optgroup label="Primary"></optgroup>
                                                        <option value="Greda 1" @if (old('level_of_education')=="Grade 1" ) {{ 'selected' }} @endif>Grade 1</option>
                                                        <option value="Greda 2" @if (old('level_of_education')=="Grade 2" ) {{ 'selected' }} @endif>Grade 2</option>
                                                        <option value="Greda 3" @if (old('level_of_education')=="Grade 3" ) {{ 'selected' }} @endif>Grade 3</option>
                                                        <option value="Greda 4" @if (old('level_of_education')=="Grade 4" ) {{ 'selected' }} @endif>Grade 4</option>
                                                        <option value="Greda 5" @if (old('level_of_education')=="Grade 5" ) {{ 'selected' }} @endif>Grade 5</option>
                                                        <option value="Greda 6" @if (old('level_of_education')=="Grade 6" ) {{ 'selected' }} @endif>Grade 6</option>
                                                        <option value="Greda 7" @if (old('level_of_education')=="Grade 7" ) {{ 'selected' }} @endif>Grade 7</option>
                                                        <option value="Greda 8" @if (old('level_of_education')=="Grade 8" ) {{ 'selected' }} @endif>Grade 8</option>
                                                        <optgroup label="Secondary"></optgroup>
                                                        <option value="Greda 9" @if (old('level_of_education')=="Grade 9" ) {{ 'selected' }} @endif>Grade 9</option>
                                                        <option value="Greda 10" @if (old('level_of_education')=="Grade 10" ) {{ 'selected' }} @endif>Grade 10</option>
                                                        <option value="Greda 11" @if (old('level_of_education')=="Grade 11" ) {{ 'selected' }} @endif>Grade 11</option>
                                                        <option value="Greda 12" @if (old('level_of_education')=="Grade 12 / High School" ) {{ 'selected' }} @endif>Grade 12 / High School</option>
                                                        <optgroup label="Undergraduate"></optgroup>
                                                        <option value="1-Year Post-Secondary Certificate" @if (old('level_of_education')=="1-Year Post-Secondary Certificate" ) {{ 'selected' }} @endif>1-Year Post-Secondary Certificate</option>
                                                        <option value="2-Year Undergradute Diploma" @if (old('level_of_education')=="2-Year Undergradute Diploma" ) {{ 'selected' }} @endif>2-Year Undergradute Diploma</option>
                                                        <option value="2-Year Undergradute Advanced Diploma" @if (old('level_of_education')=="2-Year Undergradute Advanced Diploma" ) {{ 'selected' }} @endif>2-Year Undergradute Advanced Diploma</option>
                                                        <option value="3-Year Bachelors Degree" @if (old('level_of_education')=="3-Year Bachelors Degree" ) {{ 'selected' }} @endif>3-Year Bachelors Degree</option>
                                                        <option value="4-Year Bachelors Degree" @if (old('level_of_education')=="4-Year Bachelors Degree" ) {{ 'selected' }} @endif>4-Year Bachelors Degree</option>
                                                        <optgroup label="Postgraduate"></optgroup>
                                                        <option value="Postgraduate" @if (old('level_of_education')=="Postgraduate Certificate/Diploma" ) {{ 'selected' }} @endif>Postgraduate Certificate/Diploma</option>
                                                        <option value="Masters Degree" @if (old('level_of_education')=="Masters Degree" ) {{ 'selected' }} @endif>Masters Degree</option>
                                                        <option value="Doctoral Degree (Phd, M.D., ...)" @if (old('level_of_education')=="Doctoral Degree (Phd, M.D., ...)" ) {{ 'selected' }} @endif>Doctoral Degree (Phd, M.D., ...)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Primary Language of Instruction <span class="red">*</span> </label>
                                                    <input name="primary_language_of_instruction" id="primary_language_of_instruction" type="text" class="form-control" placeholder="Enter Language of Instrucation...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Attended Institution From<span class="red">*</span> </label>
                                                    <input name="attended_institution_from" id="attended_institution_from" type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Attended Institution To<span class="red">*</span> </label>
                                                    <input name="attended_institution_to" id="attended_institution_to" type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Degree Name <span class="red">*</span> </label>
                                                    <input name="degree_name" id="degree_name" type="text" class="form-control" placeholder="Enter Degree Name...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group radio-main">
                                                    <label>I have graduated from this institution <span class="red">*</span> </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" name="graduated_institution" id="graduated_institution">
                                                        <label class="form-check-label" for="flexRadioDefault6">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" name="graduated_institution" id="graduated_institution" checked>
                                                        <label class="form-check-label" for="flexRadioDefault5">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Graduation Date <span class="red">*</span> </label>
                                                    <input id="graduation_date" name="graduation_date" type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="physical_certificate_for_this_degree" id="physical_certificate_for_this_degree" value="Yes">
                                                    <label class="form-check-label" for="flexCheckDefaultphysical">
                                                        I have the physical certificate for this degree
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>School Address</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Address<span class="red">*</span> </label>
                                                    <input name="school_address" id="school_address" type="text" class="form-control" placeholder="Enter Address...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>City/Town<span class="red">*</span> </label>
                                                    <input name="school_city_town" id="school_city_town" type="text" class="form-control" placeholder="Enter City/Town...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Province<span class="red">*</span> </label>
                                                    <input name="school_province" id="school_province" type="text" class="form-control" placeholder="Enter Province...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Postal/Zip Code </label>
                                                    <input name="school_postal_code" id="school_postal_code" type="text" class="form-control" placeholder="Enter Postal/Zip Code...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-12">
                                            <div class="float-end">
                                                <button class="btn-prev prevBtn" type="button">Back</button>
                                                <button id="gotoStep3" class="btn-next" type="button">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="setup-content" id="step-3">
                    <form id="form3">
                        <div class="card p-2">
                            <div class="card-body">
                                <h5 class="heading-registration">Registration Date: May 12th, 2022</h5>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>English Exam Type</label>
                                            <select name="english_exam_type" id="english_exam_type" class="form-select" aria-label="Default select example">
                                                <option value="">Select English Exam Type</option>
                                                <option value="I don't have this" @if (old('english_exam_type')=="I don't have this" ) {{ 'selected' }} @endif>I don't have this</option>
                                                <option value="I will provide this later" @if (old('english_exam_type')=="I will provide this later" ) {{ 'selected' }} @endif>I will provide this later</option>
                                                <option value="TOEFL" @if (old('english_exam_type')=="TOEFL" ) {{ 'selected' }} @endif>TOEFL</option>
                                                <option value="IELTS" @if (old('english_exam_type')=="IELTS" ) {{ 'selected' }} @endif>IELTS</option>
                                                <option value="Duolingo English Test" @if (old('english_exam_type')=="Duolingo English Test" ) {{ 'selected' }} @endif>Duolingo English Test</option>
                                                <option value="PTE" @if (old('english_exam_type')=="PTE" ) {{ 'selected' }} @endif>PTE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Date of Exam <span class="red">*</span> </label>
                                            <input name="date_of_exam" id="date_of_exam" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label> Enter Exact Scores <span class="red">*</span> </label>
                                            <input name="lisenting" id="lisenting" type="tel" class="form-control" placeholder="Lisenting ...">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group pt-md-4-custom ">
                                            <input name="reading" id="reading" type="tel" class="form-control" placeholder="Reading ...">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group pt-md-4-custom ">
                                            <input name="writing" id="writing" type="tel" class="form-control" placeholder="Writing ...">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group pt-md-4-custom">
                                            <input name="speaking" id="speaking" type="tel" class="form-control" placeholder="Speaking  ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-md-3">
                            <div class="card-body">
                                <h5 class="heading-registration">Additional Qualifications</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input main-switch" type="checkbox" id="flexSwitchCheckDefaultexam">
                                            <label class="form-check-label" for="flexSwitchCheckDefaultexam"> I have GRE exam scores </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-switch-toggle mt-md-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> GRE Exam Date </label>
                                                <input name="gre_exam_date" id="gre_exam_date" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Verbal </label>
                                                <input name="gre_verbal_score" id="gre_verbal_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gre_verbal_rank" id="gre_verbal_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Quantitative </label>
                                                <input name="gre_quantitative_score" id="gre_quantitative_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gre_quantitative_rank" id="gre_quantitative_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Writing </label>
                                                <input name="gre_writing_score" id="gre_writing_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gre_writing_rank" id="gre_writing_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input main-switch2" type="checkbox" id="flexSwitchCheckDefaultgmat">
                                            <label class="form-check-label" for="flexSwitchCheckDefaultgmat"> I have GMAT exam scores </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-switch-toggle2 mt-md-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> GRE Exam Date </label>
                                                <input name="gmat_gre_exam_date" id="gmat_gre_exam_date" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Verbal </label>
                                                <input name="gmat_verbal_score" id="gmat_verbal_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gmat_verbal_rank" id="gmat_verbal_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Quantitative </label>
                                                <input name="gmat_quantitative_score" id="gmat_quantitative_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gmat_quantitative_rank" id="gmat_quantitative_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Writing </label>
                                                <input name="gmat_writing_score" id="gmat_writing_score" type="tel" class="form-control" placeholder="Score">
                                                <input name="gmat_writing_rank" id="gmat_writing_rank" type="tel" class="form-control" placeholder="Rank %">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="float-end">
                                            <button class="btn-prev prevBtn" type="button">Back</button>
                                            <button id="gotoStep4" class="btn-next" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="setup-content" id="step-4">
                    <div class="card p-2">
                        <form id="form4">
                            <div class="card-body">
                                <h4>Background Information</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Have you been refused a visa from Canada, the USA, the United Kingdom, New Zealand, Australia or Ireland?</p>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Yes" name="refused_visa" id="refused_visa" checked>
                                                        <label class="form-check-label px-md-2" for="flexRadioDefaultyes1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="No" name="refused_visa" id="refused_visa">
                                                        <label class="form-check-label px-md-2" for="flexRadioDefaultno1">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Do you have a valid Study Permit / Visa?</label>
                                            <select class="select2 form-control select2-multiple" name="study_permit_visa[]" id="study_permit_visa" multiple="multiple" data-placeholder="Choose ...">
                                                <option value="I don't have this">I don't have this</option>
                                                <option value="USA F1 Visa">USA F1 Visa</option>
                                                <option value="Canadian Study Permit or Visitor Visa">Canadian Study Permit or Visitor Visa</option>
                                                <option value="UK Student Visa (Tier 4) or Short Term Study Visa">UK Student Visa (Tier 4) or Short Term Study Visa </option>
                                                <option value="Australian Student Visa">Australian Student Visa</option>
                                                <option value="Irish Stamp 2">Irish Stamp 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="form-group">
                                        <label>If you answered "Yes" to any of the questions above, please provide more details below:</label>
                                        <textarea name="more_background_details" id="more_background_details" cols="10" rows="4" class="form-control" placeholder="Provide details..."></textarea>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <div class="float-end">
                                            <button class="btn-prev prevBtn" type="button">Back</button>
                                            <button id="gotoStep5" class="btn-next" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="setup-content" id="step-5">
                    <div class="card p-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <h4 class="d-inline">Profile Complete!</h4>
                                        <button type="button" class="discover-programs float-end">Discourse School and Programs</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <form id="form5">
                        <div class="upload-documents">
                            <div class="card mt-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Upload Documents</h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" accept=".png, .jpg, .jpeg" name="three_year_undergraduate_advanced_diploma" id="three_year_undergraduate_advanced_diploma" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="upload-content">
                                                    <h4>Transcript For 3-Year Undergraduate Advanced Diploma Form</h4>
                                                    <h6>Default Transcript Education History Prototype</h6>
                                                </div>
                                                <div class="upload-img">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-md-3">
                            <div class="col-md-12">
                                <div class="float-end">
                                    <button class="btn-prev prevBtn" type="button">Back</button>
                                    <button class="btn-next" type="submit">Finsh</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


<script>
    $(document).ready(function() {
        getStudentProfile();
    });
</script>


<script>
    function getStudentProfile() {
        $.ajax({
            url: "{{ route('getStudentProfile') }}",
            type: "GET",
            success: function(response) {
                if (response.studentProfile != null) {
                    $("#first_name").val(response.studentProfile.first_name);
                    $("#middle_name").val(response.studentProfile.middle_name);
                    $("#last_name").val(response.studentProfile.last_name);
                    $("#date_of_birth").val(response.studentProfile.date_of_birth);
                    $("#first_language").val(response.studentProfile.first_language);
                    $("#country_of_citizenship").val(response.studentProfile.country_of_citizenship);
                    $("#passport_number").val(response.studentProfile.passport_number);
                    $("#address").val(response.studentProfile.address);
                    $("#city_town").val(response.studentProfile.city_town);
                    $("#country").val(response.studentProfile.country);
                    $("#province_state").val(response.studentProfile.province_state);
                    $("#postal_code").val(response.studentProfile.postal_code);
                    $("#email").val(response.studentProfile.email);
                    $("#phone_number").val(response.studentProfile.phone_number);
                    var gender = response.studentProfile.gender;
                    var marital_status = response.studentProfile.marital_status;
                    var graduated_institution = response.studentProfile.graduated_institution;
                    var refused_visa = response.studentProfile.refused_visa;

                    $("input[name=gender][value=" + gender + "]").prop('checked', true);
                    $("input[name=marital_status][value=" + marital_status + "]").prop('checked', true);
                    $("input[name=graduated_institution][value=" + graduated_institution + "]").prop('checked', true);
                    $("input[name=refused_visa][value=" + refused_visa + "]").prop('checked', true);

                    $("#country_of_education").val(response.studentProfile.country_of_education);
                    $("#highest_level_of_education").val(response.studentProfile.highest_level_of_education);
                    $("#grading_scheme").val(response.studentProfile.grading_scheme);
                    $("#grade_average").val(response.studentProfile.grade_average);
                    $("#country_of_institution").val(response.studentProfile.country_of_institution);
                    $("#name_of_institution").val(response.studentProfile.name_of_institution);
                    $("#level_of_education").val(response.studentProfile.level_of_education);
                    $("#primary_language_of_instruction").val(response.studentProfile.primary_language_of_instruction);
                    $("#attended_institution_from").val(response.studentProfile.attended_institution_from);
                    $("#attended_institution_to").val(response.studentProfile.attended_institution_to);
                    $("#degree_name").val(response.studentProfile.degree_name);
                    $("#graduation_date").val(response.studentProfile.graduation_date);
                    $("#school_address").val(response.studentProfile.school_address);
                    $("#school_city_town").val(response.studentProfile.school_city_town);
                    $("#school_province").val(response.studentProfile.school_province);
                    $("#school_postal_code").val(response.studentProfile.school_postal_code);
                    $("#english_exam_type").val(response.studentProfile.english_exam_type);
                    $("#date_of_exam").val(response.studentProfile.date_of_exam);
                    $("#lisenting").val(response.studentProfile.lisenting);
                    $("#reading").val(response.studentProfile.reading);
                    $("#writing").val(response.studentProfile.writing);
                    $("#speaking").val(response.studentProfile.speaking);
                    $("#gre_exam_date").val(response.studentProfile.gre_exam_date);
                    $("#gre_verbal_score").val(response.studentProfile.gre_verbal_score);
                    $("#gre_verbal_rank").val(response.studentProfile.gre_verbal_rank);
                    $("#gre_quantitative_score").val(response.studentProfile.gre_quantitative_score);
                    $("#gre_quantitative_rank").val(response.studentProfile.gre_quantitative_rank);
                    $("#gre_writing_score").val(response.studentProfile.gre_writing_score);
                    $("#gre_writing_rank").val(response.studentProfile.gre_writing_rank);
                    $("#gmat_gre_exam_date").val(response.studentProfile.gmat_gre_exam_date);
                    $("#gmat_verbal_score").val(response.studentProfile.gmat_verbal_score);
                    $("#gmat_verbal_rank").val(response.studentProfile.gmat_verbal_rank);
                    $("#gmat_quantitative_score").val(response.studentProfile.gmat_quantitative_score);
                    $("#gmat_quantitative_rank").val(response.studentProfile.gmat_quantitative_rank);
                    $("#gmat_writing_score").val(response.studentProfile.gmat_writing_score);
                    $("#gmat_writing_rank").val(response.studentProfile.gmat_writing_rank);
                    $("#more_background_details").val(response.studentProfile.more_background_details);

                    if (response.studentProfile.graduated_from_most_recent_school == 'Yes') {
                        $("#graduated_from_most_recent_school").prop('checked', true);
                    } else {
                        $("#graduated_from_most_recent_school").prop('checked', false);
                    }
                    if (response.studentProfile.physical_certificate_for_this_degree == 'Yes') {
                        $("#physical_certificate_for_this_degree").prop('checked', true);
                    } else {
                        $("#physical_certificate_for_this_degree").prop('checked', false);
                    }

                    var study_permit_visa = response.studentProfile.study_permit_visa;
                    if (study_permit_visa != '' || study_permit_visa != null) {
                        var result = study_permit_visa.split(',');
                        $('#study_permit_visa').val(result).change();
                    }


                    var threeYearUndergraduateAdvancedDiplomaImage = response.studentProfile.three_year_undergraduate_advanced_diploma;
                    threeYearUndergraduateAdvancedDiplomaImage = "/images/" + threeYearUndergraduateAdvancedDiplomaImage;

                    getImgURL(threeYearUndergraduateAdvancedDiplomaImage, (imgBlob) => {
                        let fileName = response.studentProfile.three_year_undergraduate_advanced_diploma;
                        let file = new File([imgBlob], fileName, {
                            type: "image/jpeg",
                            lastModified: new Date().getTime()
                        }, 'utf-8');
                        let container = new DataTransfer();
                        container.items.add(file);
                        document.querySelector('#three_year_undergraduate_advanced_diploma').files = container.files;

                    })

                    function getImgURL(url, callback) {
                        var xhr = new XMLHttpRequest();
                        xhr.onload = function() {
                            callback(xhr.response);
                        };
                        xhr.open('GET', url);
                        xhr.responseType = 'blob';
                        xhr.send();
                    }




                }
            }
        });
    }
</script>

<script>
    $(document).ready(function() {

        $('#form1').validate({
            rules: {
                first_name: {
                    required: true
                },
                date_of_birth: {
                    required: true
                },
                first_language: {
                    required: true
                },
                country_of_citizenship: {
                    required: true
                },
                passport_number: {
                    required: true
                },
                marital_status: {
                    required: true
                },
                gender: {
                    required: true
                },
                address: {
                    required: true
                },
                city_town: {
                    required: true
                },
                country: {
                    required: true
                },
                province_state: {
                    required: true
                },
                postal_code: {
                    required: true
                },
                email: {
                    required: true
                },
                phone_number: {
                    required: true
                },
            },
            messages: {
                first_name: {
                    required: "Please enter first name",
                },
                'date_of_birth': {
                    required: "Please select date of birth",
                },
                first_language: {
                    required: "Please enter first language",
                },
                country_of_citizenship: {
                    required: "Please select country of citizenship",
                },
                passport_number: {
                    required: "Please enter passport number",
                },
                marital_status: {
                    required: "Please select marital status",
                },
                gender: {
                    required: "Please select gender",
                },
                address: {
                    required: "Please enter address",
                },
                city_town: {
                    required: "Please enter city",
                },
                country: {
                    required: "Please select country",
                },
                province_state: {
                    required: "Please select province/state",
                },
                postal_code: {
                    required: "Please enter pincode",
                },
                email: {
                    required: "Please please enter email",
                },
                phone_number: {
                    required: "Please enter your phone number",
                }

            },
        });

        $('#form2').validate({
            rules: {
                country_of_education: {
                    required: true
                },
                highest_level_of_education: {
                    required: true
                },
                grading_scheme: {
                    required: true
                },
                grade_average: {
                    required: true
                },
                country_of_institution: {
                    required: true
                },
                name_of_institution: {
                    required: true
                },
                level_of_education: {
                    required: true
                },
                primary_language_of_instruction: {
                    required: true
                },
                attended_institution_from: {
                    required: true
                },
                attended_institution_to: {
                    required: true
                },
                degree_name: {
                    required: true
                },
                graduated_institution: {
                    required: true
                },
                graduation_date: {
                    required: true
                },
                school_address: {
                    required: true
                },
                school_city_town: {
                    required: true
                },
                school_province: {
                    required: true
                },
                school_postal_code: {
                    required: true
                }
            },
            messages: {
                country_of_education: {
                    required: "Please select country of education",
                },
                'highest_level_of_education': {
                    required: "Please select highest level of education",
                },
                grading_scheme: {
                    required: "Please select grading scheme",
                },
                grade_average: {
                    required: "Please enter grade average",
                },
                country_of_institution: {
                    required: "Please select country of institution",
                },
                name_of_institution: {
                    required: "Please enter name of institution",
                },
                level_of_education: {
                    required: "Please select level of education",
                },
                primary_language_of_instruction: {
                    required: "Please enter primary language of instruction",
                },
                attended_institution_from: {
                    required: "Please choose attended institution from",
                },
                attended_institution_to: {
                    required: "Please choose attended institution to",
                },
                degree_name: {
                    required: "Please enter degree name",
                },
                graduated_institution: {
                    required: "Please select graduated institution",
                },
                graduation_date: {
                    required: "Please choose graduation date",
                },
                school_address: {
                    required: "Please enter your school address",
                },
                school_city_town: {
                    required: "Please enter your school city town",
                },
                school_province: {
                    required: "Please enter your province",
                },
                school_postal_code: {
                    required: "Please enter your school postal code",
                }

            },
        });

        $('#form3').validate({
            rules: {
                english_exam_type: {
                    required: true
                },
                date_of_exam: {
                    required: true
                },
                lisenting: {
                    required: true
                },
                reading: {
                    required: true
                },
                writing: {
                    required: true
                },
                speaking: {
                    required: true
                },
                gre_exam_date: {
                    required: true
                },
                gre_verbal_score: {
                    required: true
                },
                gre_verbal_rank: {
                    required: true
                },
                gre_quantitative_score: {
                    required: true
                },
                gre_quantitative_rank: {
                    required: true
                },
                gre_writing_score: {
                    required: true
                },
                gre_writing_rank: {
                    required: true
                },
                gmat_gre_exam_date: {
                    required: true
                },
                gmat_verbal_score: {
                    required: true
                },
                gmat_verbal_rank: {
                    required: true
                },
                gmat_quantitative_score: {
                    required: true
                },
                gmat_quantitative_rank: {
                    required: true
                },
                gmat_writing_score: {
                    required: true
                },
                gmat_writing_rank: {
                    required: true
                },
                gmat_verbal_rank: {
                    required: true
                },
                gmat_verbal_rank: {
                    required: true
                },
                gmat_verbal_rank: {
                    required: true
                },

            },
            messages: {
                english_exam_type: {
                    required: "Please select english exam type",
                },
                'date_of_exam': {
                    required: "Please choose date of exam",
                },
                lisenting: {
                    required: "Please enter enter exact Scores of lisenting",
                },
                reading: {
                    required: "Please enter enter exact Scores of reading",
                },
                writing: {
                    required: "Please enter enter exact Scores of writing",
                },
                speaking: {
                    required: "Please enter name of institution",
                },
                gre_exam_date: {
                    required: "Please choose gre exam date",
                },
                gre_verbal_score: {
                    required: "Please enter gre verbal score",
                },
                gre_verbal_rank: {
                    required: "Please enter gre verbal rank",
                },
                gre_quantitative_score: {
                    required: "Please enter gre quantitative score",
                },
                gre_quantitative_rank: {
                    required: "Please enter gre quantitative rank",
                },
                gre_writing_score: {
                    required: "Please enter gre writing score",
                },
                gre_writing_rank: {
                    required: "Please enter gre writing rank",
                },
                gmat_gre_exam_date: {
                    required: "Please choose gmat gre exam date",
                },
                gmat_verbal_score: {
                    required: "Please enter gmat verbal score",
                },
                gmat_verbal_rank: {
                    required: "Please enter gmat verbal rank",
                },
                gmat_quantitative_score: {
                    required: "Please enter gmat quantitative score",
                },
                gmat_quantitative_rank: {
                    required: "Please enter gmat quantitative rank",
                },
                gmat_writing_score: {
                    required: "Please enter gmat writing score",
                },
                gmat_writing_rank: {
                    required: "Please enter gmat writing rank",
                }

            },



        });

        $('#form4').validate({
            rules: {
                field3: {
                    required: true
                }
            },

        });

        $('#form5').validate({
            rules: {
                field3: {
                    required: true
                }
            },

            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                var formData = new FormData()

                var image = $("#three_year_undergraduate_advanced_diploma")[0].files[0];

                formData.append('three_year_undergraduate_advanced_diploma', image);


                var first_name = $('input[name="first_name"]').val();
                var middle_name = $('input[name="middle_name"]').val();
                var last_name = $('input[name="last_name"]').val();
                var date_of_birth = $('input[name="date_of_birth"]').val();
                var first_language = $('input[name="first_language"]').val();


                var more_background_details = $('textarea#more_background_details').val();


                var passport_number = $('input[name="passport_number"]').val();
                var marital_status = $('input[name="marital_status"]').val();
                var gender = $('input[name="gender"]').val();
                var graduated_institution = $('input[name="graduated_institution"]').val();
                country = document.getElementById('country').value;
                country_of_citizenship = document.getElementById('country_of_citizenship').value;
                province_state = document.getElementById('province_state').value;
                country_of_education = document.getElementById('country_of_education').value;
                highest_level_of_education = document.getElementById('highest_level_of_education').value;
                grading_scheme = document.getElementById('grading_scheme').value;
                country_of_institution = document.getElementById('country_of_institution').value;
                level_of_education = document.getElementById('level_of_education').value;
                english_exam_type = document.getElementById('english_exam_type').value;



                var refused_visa = $("input[name=refused_visa]");
                var refused_visaSelected = refused_visa.filter(":checked").val();


                var address = $('input[name="address"]').val();
                var city_town = $('input[name="city_town"]').val();
                var postal_code = $('input[name="postal_code"]').val();
                var email = $('input[name="email"]').val();
                var phone_number = $('input[name="phone_number"]').val();
                var grade_average = $('input[name="grade_average"]').val();
                var graduated_from_most_recent_school = $('input[name="graduated_from_most_recent_school"]').val();
                var physical_certificate_for_this_degree = $('input[name="physical_certificate_for_this_degree"]').val();
                var name_of_institution = $('input[name="name_of_institution"]').val();
                var primary_language_of_instruction = $('input[name="primary_language_of_instruction"]').val();
                var attended_institution_from = $('input[name="attended_institution_from"]').val();
                var attended_institution_to = $('input[name="attended_institution_to"]').val();
                var degree_name = $('input[name="degree_name"]').val();
                var graduation_date = $('input[name="graduation_date"]').val();
                var school_address = $('input[name="school_address"]').val();
                var school_city_town = $('input[name="school_city_town"]').val();
                var school_province = $('input[name="school_province"]').val();

                var school_postal_code = $('input[name="school_postal_code"]').val();
                var date_of_exam = $('input[name="date_of_exam"]').val();
                var lisenting = $('input[name="lisenting"]').val();
                var reading = $('input[name="reading"]').val();
                var writing = $('input[name="writing"]').val();
                var speaking = $('input[name="speaking"]').val();
                var gre_exam_date = $('input[name="gre_exam_date"]').val();
                var gre_verbal_score = $('input[name="gre_verbal_score"]').val();
                var gre_verbal_rank = $('input[name="gre_verbal_rank"]').val();

                var gre_quantitative_score = $('input[name="gre_quantitative_score"]').val();
                var gre_quantitative_rank = $('input[name="gre_quantitative_rank"]').val();
                var gre_writing_score = $('input[name="gre_writing_score"]').val();
                var gre_writing_rank = $('input[name="gre_writing_rank"]').val();
                var gmat_gre_exam_date = $('input[name="gmat_gre_exam_date"]').val();
                var gmat_verbal_score = $('input[name="gmat_verbal_score"]').val();
                var gmat_verbal_rank = $('input[name="gmat_verbal_rank"]').val();
                var gmat_quantitative_score = $('input[name="gmat_quantitative_score"]').val();
                var gmat_quantitative_rank = $('input[name="gmat_quantitative_rank"]').val();
                var gmat_writing_score = $('input[name="gmat_writing_score"]').val();
                var gmat_writing_rank = $('input[name="gmat_writing_rank"]').val();







                formData.append('first_name', first_name);
                formData.append('middle_name', middle_name);
                formData.append('last_name', last_name);
                formData.append('date_of_birth', date_of_birth);
                formData.append('first_language', first_language);
                formData.append('more_background_details', more_background_details);
                formData.append('passport_number', passport_number);
                formData.append('marital_status', marital_status);
                formData.append('gender', gender);
                formData.append('country', country);
                formData.append('country_of_citizenship', country_of_citizenship);
                formData.append('province_state', province_state);
                formData.append('country_of_education', country_of_education);
                formData.append('highest_level_of_education', highest_level_of_education);
                formData.append('grading_scheme', grading_scheme);
                formData.append('country_of_institution', country_of_institution);
                formData.append('level_of_education', level_of_education);
                formData.append('english_exam_type', english_exam_type);
                formData.append('address', address);
                formData.append('city_town', city_town);
                formData.append('postal_code', postal_code);
                formData.append('email', email);
                formData.append('phone_number', phone_number);
                formData.append('grade_average', grade_average);
                formData.append('graduated_from_most_recent_school', graduated_from_most_recent_school);
                formData.append('name_of_institution', name_of_institution);
                formData.append('primary_language_of_instruction', primary_language_of_instruction);
                formData.append('attended_institution_from', attended_institution_from);
                formData.append('attended_institution_to', attended_institution_to);
                formData.append('degree_name', degree_name);
                formData.append('graduated_institution', graduated_institution);
                formData.append('graduation_date', graduation_date);
                formData.append('school_address', school_address);
                formData.append('school_city_town', school_city_town);
                formData.append('school_province', school_province);
                formData.append('school_postal_code', school_postal_code);
                formData.append('date_of_exam', date_of_exam);
                formData.append('lisenting', lisenting);
                formData.append('reading', reading);
                formData.append('writing', writing);
                formData.append('speaking', speaking);
                formData.append('gre_exam_date', gre_exam_date);
                formData.append('gre_verbal_score', gre_verbal_score);
                formData.append('gre_verbal_rank', gre_verbal_rank);
                formData.append('gre_quantitative_score', gre_quantitative_score);
                formData.append('gre_quantitative_rank', gre_quantitative_rank);
                formData.append('gre_writing_score', gre_writing_score);
                formData.append('gre_writing_rank', gre_writing_rank);
                formData.append('gmat_verbal_score', gmat_verbal_score);
                formData.append('gmat_gre_exam_date', gmat_gre_exam_date);
                formData.append('gmat_verbal_rank', gmat_verbal_rank);
                formData.append('gmat_quantitative_score', gmat_quantitative_score);
                formData.append('gmat_quantitative_rank', gmat_quantitative_rank);
                formData.append('gmat_writing_score', gmat_writing_score);
                formData.append('gmat_writing_rank', gmat_writing_rank);
                formData.append('refused_visa', refused_visaSelected);
                formData.append('physical_certificate_for_this_degree', physical_certificate_for_this_degree);

                formData.append('study_permit_visa', $('#study_permit_visa').select2("val"));


                $.ajax({
                    url: "{{ route('updateStudentProfile') }}",
                    enctype: 'multipart/form-data',
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        $("#success_messae span").html(response.success);
                        $('#success_messae').show();

                        window.setTimeout(function() {
                            location.reload()
                        }, 2000)
                        // console.log(response);
                    }
                });
            }
        });

        $('#gotoStep2').on('click', function() {
            if ($('#form1').valid()) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });

        $('#gotoStep3').on('click', function() {
            if ($('#form2').valid()) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });

        $('#gotoStep4').on('click', function() {
            if ($('#form3').valid()) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });
        $('#gotoStep5').on('click', function() {
            if ($('#form4').valid()) {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });

    });
</script>



@endsection