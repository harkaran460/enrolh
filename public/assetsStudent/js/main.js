function create_custom_dropdowns() {
    $('.form-Program-set select').each(function(i, select) {
        if (!$(this).next().hasClass('dropdown-select')) {
            $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
            var dropdown = $(this).next();
            var options = $(select).find('option');
            var selected = $(this).find('option:selected');
            dropdown.find('.current').html(selected.data('display-text') || selected.text());
            options.each(function(j, o) {
                var display = $(o).data('display-text') || '';
                dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
            });
        }
    });

    $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
}

// Event listeners

// Open/close
$(document).on('click', '.dropdown-select', function(event) {
    if ($(event.target).hasClass('dd-searchbox')) {
        return;
    }
    $('.dropdown-select').not($(this)).removeClass('open');
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
        $(this).find('.option').attr('tabindex', 0);
        $(this).find('.selected').focus();
    } else {
        $(this).find('.option').removeAttr('tabindex');
        $(this).focus();
    }
});

// Close when clicking outside
$(document).on('click', function(event) {
    if ($(event.target).closest('.dropdown-select').length === 0) {
        $('.dropdown-select').removeClass('open');
        $('.dropdown-select .option').removeAttr('tabindex');
    }
    event.stopPropagation();
});

function filter() {
    var valThis = $('#txtSearchValue').val();
    $('.dropdown-select ul > li').each(function() {
        var text = $(this).text();
        (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
    });
};
// Search

// Option click
$(document).on('click', '.dropdown-select .option', function(event) {
    $(this).closest('.list').find('.selected').removeClass('selected');
    $(this).addClass('selected');
    var text = $(this).data('display-text') || $(this).text();
    $(this).closest('.dropdown-select').find('.current').text(text);
    $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
});

// Keyboard events
$(document).on('keydown', '.dropdown-select', function(event) {
    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
    // Space or Enter
    //if (event.keyCode == 32 || event.keyCode == 13) {
    if (event.keyCode == 13) {
        if ($(this).hasClass('open')) {
            focused_option.trigger('click');
        } else {
            $(this).trigger('click');
        }
        return false;
        // Down
    } else if (event.keyCode == 40) {
        if (!$(this).hasClass('open')) {
            $(this).trigger('click');
        } else {
            focused_option.next().focus();
        }
        return false;
        // Up
    } else if (event.keyCode == 38) {
        if (!$(this).hasClass('open')) {
            $(this).trigger('click');
        } else {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
            focused_option.prev().focus();
        }
        return false;
        // Esc
    } else if (event.keyCode == 27) {
        if ($(this).hasClass('open')) {
            $(this).trigger('click');
        }
        return false;
    }
});

$(document).ready(function() {
    create_custom_dropdowns();
});




let currentTab = 'personal_information';
let visitedTabs = [];
let isSubmitted = false;

function func_tabs_run(runner, division = 'random-div') {
    var stu_valid_arr = [];
    var stu_val_count = 0;
    // $(".required_message").html('');
    $('#' + division).find('input').each(function(event) {
        if ($(this).prop("required") == true) {
            if ($(this).val().length > 0) {
                if ($(this).attr("type") == "text" || $(this).attr("type") == "email" || $(this).attr("type") == "number" || $(this).attr("type") == "date") {
                    if ($(this).attr("type") == "email") {
                        if (validateEmail($(this).val())) {
                            $('#' + $(this).attr("name") + 'Message').html('');
                        } else {
                            $('#' + $(this).attr("name") + 'Message').html('Email is not valid.');
                        }
                    } else {
                        $('#' + $(this).attr("name") + 'Message').html('');
                    }
                }
                if ($(this).attr("type") == "radio") {
                    if ($(this).is(":checked")) {
                        stu_val_count++;
                    }
                } else if ($(this).attr("type") == "file") {
                    stu_val_count++;
                } else {
                    if ($(this).attr("type") == "email") {
                        if (validateEmail($(this).val())) {
                            stu_val_count++;
                        }
                    } else {
                        stu_val_count++;
                    }
                }
            } else {
                if ($(this).attr("type") == "text" || $(this).attr("type") == "email" || $(this).attr("type") == "number" || $(this).attr("type") == "date") {
                    $('#' + $(this).attr("name") + 'Message').html('This Field is Required!');
                }
            }
            if ($.inArray($(this).attr("name"), stu_valid_arr) == -1 || $(this).attr("type") == "text" || $(this).attr("type") == "file") {

                stu_valid_arr.push($(this).attr("name"));
            }

        }
    });

    $('#' + division).find('select').each(function() {
        if ($(this).prop("required") == true) {
            if ($(this).val().length > 0) {
                $('#' + $(this).attr("name") + 'Message').html('');
                if ($(this).is('select')) {
                    stu_val_count++;
                }
            } else {
                $('#' + $(this).attr("name") + 'Message').html('This Field is Required');
            }
            if ($.inArray($(this).attr("name"), stu_valid_arr) == -1) {
                stu_valid_arr.push($(this).attr("name"));
            }
        }
    });
    if (stu_valid_arr.length == stu_val_count) {
        currentTab = runner;
        if (visitedTabs.indexOf(division) == -1) {
            visitedTabs.push(division);
        }
        if ($("#" + runner).hasClass('disabled')) {
            $("#" + runner).removeClass('disabled');
        }
        if ($('#' + runner).hasClass('d-none')) {
            $("#" + runner).removeClass('d-none');
            if (!$('#' + division).hasClass('d-none')) {
                $('#' + division).addClass('d-none');
            }
            if (!$('#' + division + '_selector').hasClass('active')) {
                $('#' + division + '_selector').addClass('active');
                $('#' + division + '_icon').removeClass('bg-primary');
                $('#' + division + '_icon').addClass('bg-primary');
                $('#' + division + '_text').removeClass('text-primary');
                $('#' + division + '_text').addClass('text-primary');
                $('#' + division + '_icon').html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>');
            }
            if ($('#' + runner + '_icon').hasClass('p-0-8rem')) {
                $('#' + runner + '_icon').removeClass('p-0-8rem');
                $('#' + runner + '_icon').addClass('p-0-1rem');
                $('#' + runner + '_icon').removeClass('border-1x');
                $('#' + runner + '_icon').addClass('bg-primary');
                $('#' + runner + '_text').addClass('font-weight-bold');
                $('#' + runner + '_icon').html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>');
            }
        }

        $("#" + runner).click();
    }
}
//Gurshobit Code
// console.log('');
function goBack(goto = 'other') {
    if (visitedTabs.indexOf(goto) !== -1 && !isSubmitted) {
        if (goto !== currentTab) {
            func_tabs_run(goto, currentTab);
        }
    }
}
let trash_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>';
let count_vr = 0;
$("#add_new_vr").on("click", function() {
    var vrcount = count_vr++;
    $("#vr_repeat").append("<div class='col-md-4 shower_row_vr" + vrcount + "' style='margin: auto;'><div class='form-group'><input type='hidden' class='form-control' form='SetClass' value='Visa Refusal' name='traveltype[]' readonly ><select class='form-control' form='SetClass' name='travel_country[]'><option value=''>Select</option><option value='1'>Afghanistan</option><option value='2'>Albania</option><option value='3'>Algeria</option><option value='4'>American Samaaoa</option><option value='5'>Andorra</option><option value='6'>Angola</option><option value='7'>Anguilla</option><option value='8'>Antarctica</option><option value='9'>Antigua And Barbuda</option><option value='10'>Argentina</option><option value='11'>Armenia</option><option value='12'>Aruba</option><option value='13'>Australia</option><option value='14'>Austria</option><option value='15'>Azerbaijan</option><option value='16'>Bahamas The</option><option value='17'>Bahrain</option><option value='18'>Bangladesh</option><option value='19'>Barbados</option><option value='20'>Belarus</option><option value='21'>Belgium</option><option value='22'>Belize</option><option value='23'>Benin</option><option value='24'>Bermuda</option><option value='25'>Bhutan</option><option value='26'>Bolivia</option><option value='27'>Bosnia and Herzegovina</option><option value='28'>Botswana</option><option value='29'>Bouvet Island</option><option value='30'>Brazil</option><option value='31'>British Indian Ocean Territory</option><option value='32'>Brunei</option><option value='33'>Bulgaria</option><option value='34'>Burkina Faso</option><option value='35'>Burundi</option><option value='36'>Cambodia</option><option value='37'>Cameroon</option><option value='38'>Canada</option><option value='39'>Cape Verde</option><option value='40'>Cayman Islands</option><option value='41'>Central African Republic</option><option value='42'>Chad</option><option value='43'>Chile</option><option value='44'>China</option><option value='45'>Christmas Island</option><option value='46'>Cocos (Keeling) Islands</option><option value='47'>Colombia</option><option value='48'>Comoros</option><option value='49'>Republic Of The Congo</option><option value='50'>Democratic Republic Of The Congo</option><option value='51'>Cook Islands</option><option value='52'>Costa Rica</option><option value='53'>Cote D'Ivoire (Ivory Coast)</option><option value='54'>Croatia (Hrvatska)</option><option value='55'>Cuba</option><option value='56'>Cyprus</option><option value='57'>Czech Republic</option><option value='58'>Denmark</option><option value='59'>Djibouti</option><option value='60'>Dominica</option><option value='61'>Dominican Republic</option><option value='62'>East Timor</option><option value='63'>Ecuador</option><option value='64'>Egypt</option><option value='65'>El Salvador</option><option value='66'>Equatorial Guinea</option><option value='67'>Eritrea</option><option value='68'>Estonia</option><option value='69'>Ethiopia</option><option value='70'>External Territories of Australia</option><option value='71'>Falkland Islands</option><option value='72'>Faroe Islands</option><option value='73'>Fiji Islands</option><option value='74'>Finland</option><option value='75'>France</option><option value='76'>French Guiana</option><option value='77'>French Polynesia</option><option value='78'>French Southern Territories</option><option value='79'>Gabon</option><option value='80'>Gambia The</option><option value='81'>Georgia</option><option value='82'>Germany</option><option value='83'>Ghana</option><option value='84'>Gibraltar</option><option value='85'>Greece</option><option value='86'>Greenland</option><option value='87'>Grenada</option><option value='88'>Guadeloupe</option><option value='89'>Guam</option><option value='90'>Guatemala</option><option value='91'>Guernsey and Alderney</option><option value='92'>Guinea</option><option value='93'>Guinea-Bissau</option><option value='94'>Guyana</option><option value='95'>Haiti</option><option value='96'>Heard and McDonald Islands</option><option value='97'>Honduras</option><option value='98'>Hong Kong S.A.R.</option><option value='99'>Hungary</option><option value='100'>Iceland</option><option value='101'>India</option><option value='102'>Indonesia</option><option value='103'>Iran</option><option value='104'>Iraq</option><option value='105'>Ireland</option><option value='106'>Israel</option><option value='107'>Italy</option><option value='108'>Jamaica</option><option value='109'>Japan</option><option value='110'>Jersey</option><option value='111'>Jordan</option><option value='112'>Kazakhstan</option><option value='113'>Kenya</option><option value='114'>Kiribati</option><option value='115'>Korea North</option><option value='116'>Korea South</option><option value='117'>Kuwait</option><option value='118'>Kyrgyzstan</option><option value='119'>Laos</option><option value='120'>Latvia</option><option value='121'>Lebanon</option><option value='122'>Lesotho</option><option value='123'>Liberia</option><option value='124'>Libya</option><option value='125'>Liechtenstein</option><option value='126'>Lithuania</option><option value='127'>Luxembourg</option><option value='128'>Macau S.A.R.</option><option value='129'>Macedonia</option><option value='130'>Madagascar</option><option value='131'>Malawi</option><option value='132'>Malaysia</option><option value='133'>Maldives</option><option value='134'>Mali</option><option value='135'>Malta</option><option value='136'>Man (Isle of)</option><option value='137'>Marshall Islands</option><option value='138'>Martinique</option><option value='139'>Mauritania</option><option value='140'>Mauritius</option><option value='141'>Mayotte</option><option value='142'>Mexico</option><option value='143'>Micronesia</option><option value='144'>Moldova</option><option value='145'>Monaco</option><option value='146'>Mongolia</option><option value='147'>Montserrat</option><option value='148'>Morocco</option><option value='149'>Mozambique</option><option value='150'>Myanmar</option><option value='151'>Namibia</option><option value='152'>Nauru</option><option value='153'>Nepal</option><option value='154'>Netherlands Antilles</option><option value='155'>Netherlands</option><option value='156'>New Caledonia</option><option value='157'>New Zealand</option><option value='158'>Nicaragua</option><option value='159'>Niger</option><option value='160'>Nigeria</option><option value='161'>Niue</option><option value='162'>Norfolk Island</option><option value='163'>Northern Mariana Islands</option><option value='164'>Norway</option><option value='165'>Oman</option><option value='166'>Pakistan</option><option value='167'>Palau</option><option value='168'>Palestinian Territory Occupied</option><option value='169'>Panama</option><option value='170'>Papua new Guinea</option><option value='171'>Paraguay</option><option value='172'>Peru</option><option value='173'>Philippines</option><option value='174'>Pitcairn Island</option><option value='175'>Poland</option><option value='176'>Portugal</option><option value='177'>Puerto Rico</option><option value='178'>Qatar</option><option value='179'>Reunion</option><option value='180'>Romania</option><option value='181'>Russia</option><option value='182'>Rwanda</option><option value='183'>Saint Helena</option><option value='184'>Saint Kitts And Nevis</option><option value='185'>Saint Lucia</option><option value='186'>Saint Pierre and Miquelon</option><option value='187'>Saint Vincent And The Grenadines</option><option value='188'>Samoa</option><option value='189'>San Marino</option><option value='190'>Sao Tome and Principe</option><option value='191'>Saudi Arabia</option><option value='192'>Senegal</option><option value='193'>Serbia</option><option value='194'>Seychelles</option><option value='195'>Sierra Leone</option><option value='196'>Singapore</option><option value='197'>Slovakia</option><option value='198'>Slovenia</option><option value='199'>Smaller Territories of the UK</option><option value='200'>Solomon Islands</option><option value='201'>Somalia</option><option value='202'>South Africa</option><option value='203'>South Georgia</option><option value='204'>South Sudan</option><option value='205'>Spain</option><option value='206'>Sri Lanka</option><option value='207'>Sudan</option><option value='208'>Suriname</option><option value='209'>Svalbard And Jan Mayen Islands</option><option value='210'>Swaziland</option><option value='211'>Sweden</option><option value='212'>Switzerland</option><option value='213'>Syria</option><option value='214'>Taiwan</option><option value='215'>Tajikistan</option><option value='216'>Tanzania</option><option value='217'>Thailand</option><option value='218'>Togo</option><option value='219'>Tokelau</option><option value='220'>Tonga</option><option value='221'>Trinidad And Tobago</option><option value='222'>Tunisia</option><option value='223'>Turkey</option><option value='224'>Turkmenistan</option><option value='225'>Turks And Caicos Islands</option><option value='226'>Tuvalu</option><option value='227'>Uganda</option><option value='228'>Ukraine</option><option value='229'>United Arab Emirates</option><option value='230'>United Kingdom</option><option value='231'>United States</option><option value='232'>United States Minor Outlying Islands</option><option value='233'>Uruguay</option><option value='234'>Uzbekistan</option><option value='235'>Vanuatu</option><option value='236'>Vatican City State (Holy See)</option><option value='237'>Venezuela</option><option value='238'>Vietnam</option><option value='239'>Virgin Islands (British)</option><option value='240'>Virgin Islands (US)</option><option value='241'>Wallis And Futuna Islands</option><option value='242'>Western Sahara</option><option value='243'>Yemen</option><option value='244'>Yugoslavia</option><option value='245'>Zambia</option><option value='246'>Zimbabwe</option></select></div></div><div class='col-md-4 shower_row_vr" + vrcount + "' style='margin: auto;'><div class='form-group'><input type='date' class='form-control' form='SetClass' value='2022-05-13' name='traveldate[]' ></div></div><div class='col-md-2 text-danger travel-history my-1 shower_row_vr" + vrcount + "' id='visaRefusalDelete" + vrcount + "'>" + trash_svg + "</div><div class='col-md-2 shower_row_vr" + vrcount + "'></div>");
    $("#visaRefusalDelete" + vrcount).on("click", function() {
        $(".shower_row_vr" + vrcount).remove();
        $(this).remove();
    });
});
let count_th = 0;
$("#add_new_th").on("click", function() {
    var thcount = count_th++;
    $("#th_repeat").append("<div class='col-md-4 shower_row" + thcount + "' style='margin: auto;'><div class='form-group'><input type='hidden' class='form-control' form='SetClass' value='Travel Histtory' name='traveltype[]' readonly ><select class='form-control' form='SetClass' name='travel_country[]'><option value=''>Select</option><option value='1'>Afghanistan</option><option value='2'>Albania</option><option value='3'>Algeria</option><option value='4'>American Samaaoa</option><option value='5'>Andorra</option><option value='6'>Angola</option><option value='7'>Anguilla</option><option value='8'>Antarctica</option><option value='9'>Antigua And Barbuda</option><option value='10'>Argentina</option><option value='11'>Armenia</option><option value='12'>Aruba</option><option value='13'>Australia</option><option value='14'>Austria</option><option value='15'>Azerbaijan</option><option value='16'>Bahamas The</option><option value='17'>Bahrain</option><option value='18'>Bangladesh</option><option value='19'>Barbados</option><option value='20'>Belarus</option><option value='21'>Belgium</option><option value='22'>Belize</option><option value='23'>Benin</option><option value='24'>Bermuda</option><option value='25'>Bhutan</option><option value='26'>Bolivia</option><option value='27'>Bosnia and Herzegovina</option><option value='28'>Botswana</option><option value='29'>Bouvet Island</option><option value='30'>Brazil</option><option value='31'>British Indian Ocean Territory</option><option value='32'>Brunei</option><option value='33'>Bulgaria</option><option value='34'>Burkina Faso</option><option value='35'>Burundi</option><option value='36'>Cambodia</option><option value='37'>Cameroon</option><option value='38'>Canada</option><option value='39'>Cape Verde</option><option value='40'>Cayman Islands</option><option value='41'>Central African Republic</option><option value='42'>Chad</option><option value='43'>Chile</option><option value='44'>China</option><option value='45'>Christmas Island</option><option value='46'>Cocos (Keeling) Islands</option><option value='47'>Colombia</option><option value='48'>Comoros</option><option value='49'>Republic Of The Congo</option><option value='50'>Democratic Republic Of The Congo</option><option value='51'>Cook Islands</option><option value='52'>Costa Rica</option><option value='53'>Cote D'Ivoire (Ivory Coast)</option><option value='54'>Croatia (Hrvatska)</option><option value='55'>Cuba</option><option value='56'>Cyprus</option><option value='57'>Czech Republic</option><option value='58'>Denmark</option><option value='59'>Djibouti</option><option value='60'>Dominica</option><option value='61'>Dominican Republic</option><option value='62'>East Timor</option><option value='63'>Ecuador</option><option value='64'>Egypt</option><option value='65'>El Salvador</option><option value='66'>Equatorial Guinea</option><option value='67'>Eritrea</option><option value='68'>Estonia</option><option value='69'>Ethiopia</option><option value='70'>External Territories of Australia</option><option value='71'>Falkland Islands</option><option value='72'>Faroe Islands</option><option value='73'>Fiji Islands</option><option value='74'>Finland</option><option value='75'>France</option><option value='76'>French Guiana</option><option value='77'>French Polynesia</option><option value='78'>French Southern Territories</option><option value='79'>Gabon</option><option value='80'>Gambia The</option><option value='81'>Georgia</option><option value='82'>Germany</option><option value='83'>Ghana</option><option value='84'>Gibraltar</option><option value='85'>Greece</option><option value='86'>Greenland</option><option value='87'>Grenada</option><option value='88'>Guadeloupe</option><option value='89'>Guam</option><option value='90'>Guatemala</option><option value='91'>Guernsey and Alderney</option><option value='92'>Guinea</option><option value='93'>Guinea-Bissau</option><option value='94'>Guyana</option><option value='95'>Haiti</option><option value='96'>Heard and McDonald Islands</option><option value='97'>Honduras</option><option value='98'>Hong Kong S.A.R.</option><option value='99'>Hungary</option><option value='100'>Iceland</option><option value='101'>India</option><option value='102'>Indonesia</option><option value='103'>Iran</option><option value='104'>Iraq</option><option value='105'>Ireland</option><option value='106'>Israel</option><option value='107'>Italy</option><option value='108'>Jamaica</option><option value='109'>Japan</option><option value='110'>Jersey</option><option value='111'>Jordan</option><option value='112'>Kazakhstan</option><option value='113'>Kenya</option><option value='114'>Kiribati</option><option value='115'>Korea North</option><option value='116'>Korea South</option><option value='117'>Kuwait</option><option value='118'>Kyrgyzstan</option><option value='119'>Laos</option><option value='120'>Latvia</option><option value='121'>Lebanon</option><option value='122'>Lesotho</option><option value='123'>Liberia</option><option value='124'>Libya</option><option value='125'>Liechtenstein</option><option value='126'>Lithuania</option><option value='127'>Luxembourg</option><option value='128'>Macau S.A.R.</option><option value='129'>Macedonia</option><option value='130'>Madagascar</option><option value='131'>Malawi</option><option value='132'>Malaysia</option><option value='133'>Maldives</option><option value='134'>Mali</option><option value='135'>Malta</option><option value='136'>Man (Isle of)</option><option value='137'>Marshall Islands</option><option value='138'>Martinique</option><option value='139'>Mauritania</option><option value='140'>Mauritius</option><option value='141'>Mayotte</option><option value='142'>Mexico</option><option value='143'>Micronesia</option><option value='144'>Moldova</option><option value='145'>Monaco</option><option value='146'>Mongolia</option><option value='147'>Montserrat</option><option value='148'>Morocco</option><option value='149'>Mozambique</option><option value='150'>Myanmar</option><option value='151'>Namibia</option><option value='152'>Nauru</option><option value='153'>Nepal</option><option value='154'>Netherlands Antilles</option><option value='155'>Netherlands</option><option value='156'>New Caledonia</option><option value='157'>New Zealand</option><option value='158'>Nicaragua</option><option value='159'>Niger</option><option value='160'>Nigeria</option><option value='161'>Niue</option><option value='162'>Norfolk Island</option><option value='163'>Northern Mariana Islands</option><option value='164'>Norway</option><option value='165'>Oman</option><option value='166'>Pakistan</option><option value='167'>Palau</option><option value='168'>Palestinian Territory Occupied</option><option value='169'>Panama</option><option value='170'>Papua new Guinea</option><option value='171'>Paraguay</option><option value='172'>Peru</option><option value='173'>Philippines</option><option value='174'>Pitcairn Island</option><option value='175'>Poland</option><option value='176'>Portugal</option><option value='177'>Puerto Rico</option><option value='178'>Qatar</option><option value='179'>Reunion</option><option value='180'>Romania</option><option value='181'>Russia</option><option value='182'>Rwanda</option><option value='183'>Saint Helena</option><option value='184'>Saint Kitts And Nevis</option><option value='185'>Saint Lucia</option><option value='186'>Saint Pierre and Miquelon</option><option value='187'>Saint Vincent And The Grenadines</option><option value='188'>Samoa</option><option value='189'>San Marino</option><option value='190'>Sao Tome and Principe</option><option value='191'>Saudi Arabia</option><option value='192'>Senegal</option><option value='193'>Serbia</option><option value='194'>Seychelles</option><option value='195'>Sierra Leone</option><option value='196'>Singapore</option><option value='197'>Slovakia</option><option value='198'>Slovenia</option><option value='199'>Smaller Territories of the UK</option><option value='200'>Solomon Islands</option><option value='201'>Somalia</option><option value='202'>South Africa</option><option value='203'>South Georgia</option><option value='204'>South Sudan</option><option value='205'>Spain</option><option value='206'>Sri Lanka</option><option value='207'>Sudan</option><option value='208'>Suriname</option><option value='209'>Svalbard And Jan Mayen Islands</option><option value='210'>Swaziland</option><option value='211'>Sweden</option><option value='212'>Switzerland</option><option value='213'>Syria</option><option value='214'>Taiwan</option><option value='215'>Tajikistan</option><option value='216'>Tanzania</option><option value='217'>Thailand</option><option value='218'>Togo</option><option value='219'>Tokelau</option><option value='220'>Tonga</option><option value='221'>Trinidad And Tobago</option><option value='222'>Tunisia</option><option value='223'>Turkey</option><option value='224'>Turkmenistan</option><option value='225'>Turks And Caicos Islands</option><option value='226'>Tuvalu</option><option value='227'>Uganda</option><option value='228'>Ukraine</option><option value='229'>United Arab Emirates</option><option value='230'>United Kingdom</option><option value='231'>United States</option><option value='232'>United States Minor Outlying Islands</option><option value='233'>Uruguay</option><option value='234'>Uzbekistan</option><option value='235'>Vanuatu</option><option value='236'>Vatican City State (Holy See)</option><option value='237'>Venezuela</option><option value='238'>Vietnam</option><option value='239'>Virgin Islands (British)</option><option value='240'>Virgin Islands (US)</option><option value='241'>Wallis And Futuna Islands</option><option value='242'>Western Sahara</option><option value='243'>Yemen</option><option value='244'>Yugoslavia</option><option value='245'>Zambia</option><option value='246'>Zimbabwe</option></select></div></div><div class='col-md-4 shower_row" + thcount + "' style='margin: auto;'><div class='form-group'><input type='date' class='form-control' form='SetClass' value='2022-05-13' name='traveldate[]' ></div></div><div class='col-md-2 text-danger travel-history my-1 shower_row" + thcount + "' id='travelHistoryDelete" + thcount + "'>" + trash_svg + "</div><div class='col-md-2 shower_row" + thcount + "'></div>");
    $("#travelHistoryDelete" + thcount).on("click", function() {
        $(".shower_row" + thcount).remove();
        $(this).remove();
    });

});

$(".op_check").on("click", function() {
    var filter = 0;
    if ($(this).is(":checked")) {
        var filter = $(".op_check").filter(':checked').length;
    }
    if (filter >= 1) {
        $(".delete_operation_btn").show();
    } else {
        $(".delete_operation_btn").hide();
    }

});

// color change html 
document.documentElement.style.setProperty('--color', localStorage.getItem('pageColor'));

const colors = document.querySelectorAll('.color-layout');

colors.forEach(function(color) {
    color.addEventListener('click', function() {
        let hex = color.dataset.color;
        document.documentElement.style.setProperty('--color', hex);

        localStorage.setItem('pageColor', color.dataset.color);

    })
});

// Pre loader
var windowOn = $(window);
windowOn.on('load', function() {
    $("#loading").fadeOut(500);
});

$(".navbar-header").find(".app-search").find("input").each((function() {
    $(this).on("focus",
            (function() { $(".navbar-header").find(".search-result").addClass("show") })),
        $(this).on("focusout",
            (function() { $(".app-search").find(".search-result").removeClass("show") }))
}));


var xValues = ["1-Year", "2-Year"];
var yValues = [80, 20];
var barColors = [
    "#1e3a8a",
    "#50a5f1"
];


new Chart("myChart1", {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        title: {
            display: false,
        },
        legend: {
            display: !1
        }
    }
});

$("#filters").click(function() {
    $(".programs-form-search").slideToggle();
});

 

$(document).ready(function() {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function(e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function() {
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
    });

    allPrevBtn.click(function() {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
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
            prevStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

$(".add_now").click(function() {
    $(".school-attended").slideDown();
});

$(".main-switch").click(function() {
    $(".main-switch-toggle").slideToggle();
});

$(".main-switch2").click(function() {
    $(".main-switch-toggle2").slideToggle();
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".vertical-menu").addClass("darkHeader");
    }
});

$(".see-more").click(function() {
    $(this).addClass('hide1');
});

$(".less-more").click(function() {
    $(".see-more").removeClass('hide1');
});


$('.see-more').click(function() {
    $('.main-slide').slideUp();
    if ($(this).siblings('.main-slide').css('display') === 'none')
        $(this).siblings('.main-slide').slideDown();
    else
        $(this).siblings('.main-slide').slideUp();
});

$('.less-more').click(function() {
    $('.main-slide').slideUp();
    if ($(this).siblings('.main-slide').css('display') === 'block')
        $(this).siblings('.main-slide').slideUp();
    else
        $(this).siblings('.main-slide').slideDown();
});
 
$('.add-notes').click(function() {
    $('.textarea-custom-slide').slideToggle();
    $(this).find(".fa").toggleClass("fa-plus fa-minus");
});

$(".css-see-less p").click(function() {
    $('.wrapped-content').toggleClass('less_min_height');
});

$(".fold-table tr.view").on("click", function() {
    $(this).toggleClass("open").next(".fold").toggleClass("open");
});


$('#payments-filter').click(function() {
    $('.payment-history').slideToggle();
});
