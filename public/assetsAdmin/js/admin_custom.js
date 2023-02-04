$("#country").select2();
$("#country").on("change", function (e) {
    let ids = $("#country option:selected")
        .map(function () {
            return $(this).data("id");
        })
        .get();

    let token = $("input[name=_token]").val();
    if (ids != "") {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            url: base_path + "/getstate",

            data: {
                token: token,
                ids: ids,
            },
            type: "POST",
            success: function (result) {
                if (result == "not_found") {
                    $("#state").html(
                        '<option selected value="">Select</option>'
                    );
                } else {
                    $("#state").html(result);
                }
            },
        });
    }
});

/************************************/
$("#state").select2();
$("#state").on("change", function (e) {
    let ids = $("#state option:selected")
        .map(function () {
            return $(this).data("id");
        })
        .get();

    let token = $("input[name=_token]").val();
    if (ids != "") {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            url: base_path + "/getcity",
            data: {
                token: token,
                ids: ids,
            },
            type: "POST",
            success: function (result) {
                if (result == "not_found") {
                    $("#city").html(
                        '<option selected value="">Select</option>'
                    );
                } else {
                    $("#city").html(result);
                }
            },
        });
    }
});

/**************************/
let token = $("input[name=_token]").val();
$("#sorting").on("change", function (e) {
    this.form.submit();
});

/**************************/

function student_regi_agent(id) {
    let filterdata = $("select#sorting option").filter(":selected").val();
    let email = $.trim($("input[name='email']").val());
    let phone = $.trim($("input[name='phone']").val());
    let fname = $.trim($("input[name='fname']").val());
    let reg = /^[0-9]{1,10}$/;
    let checking = reg.test(phone);
    let atposition = email.indexOf("@");
    let dotposition = email.lastIndexOf(".");

    if (email == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter email id.</div>'
        );
        $("input[name='email']").focus();
        return false;
    } else if (
        atposition < 1 ||
        dotposition < atposition + 2 ||
        dotposition + 2 >= email.length
    ) {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter valid email id.</div>'
        );
        $("input[name='email']").focus();
        return false;
    } else if (phone == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter phone no.</div>'
        );
        $("input[name='phone']").focus();
        return false;
    } else if (checking == false) {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Accept only number.</div>'
        );
        $("input[name='phone']").focus();
        return false;
    } else if (phone.length < 10 || phone.length > 10) {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter correct mobile number.</div>'
        );
        $("input[name='phone']").focus();
        return false;
    } else if (fname == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter first name.</div>'
        );
        $("input[name='fname']").focus();
        return false;
    } else {
        let data = $("#student_regi").serialize();
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            url: base_path + "/student-registration-by-agent",
            data: data,
            type: "POST",
            success: function (result) {
                if (result === "email_exist") {
                    $("#error").html(
                        '<div class="alert alert-danger" role="alert">The email has already been taken.</div>'
                    );
                }
                var parsedJson = $.parseJSON(result);
                if (parsedJson.message === "success") {
                    $("#student_regi")[0].reset();
                    $("#success").html(
                        '<div class="alert alert-success" role="alert">Information save successfully .</div>'
                    );
                    setTimeout(function () {
                        $("#addNewStudent").modal("hide");
                    }, 4000);
                    window.location.replace(
                        "/agent-student-profile/" + parsedJson.last_id
                    );
                }
                if (result === "failed") {
                    $("#error").html(
                        '<div class="alert alert-danger" role="alert">Somthing wrong.</div>'
                    );
                }
            },
        });
    }
}

/*******************************************/
// AJAX call for autocomplete  student filter
$(".loadern").hide();
$(document).ready(function () {
    let token = $("input[name=_token]").val();
    $("#search-dropdwon-main").keyup(function () {
        $(".loadern").show();
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            type: "POST",
            url: base_path + "/studentname-autocomplet-agent",
            data: "keyword=" + $(this).val(),
            /*beforeSend: function() {
                $(".loadern").show();
            },*/
            success: function (data) {
                $("#suggesstionbox").show();
                $("#suggesstionbox").html(data);
                $("#search-box").css("background", "#FFF");
                $("#search-res").css("display", "block");
                $(".loadern").hide();
            },
        });
    });
});

function selectStudent(name, id) {
    $("#search-dropdwon-main").val(name);
    $("#student").val(id);
    $("#suggesstionbox").hide();
    let token = $("input[name=_token]").val();
    $.ajax({
        dataType: "json",
        headers: {
            "X-CSRF-TOKEN": token,
        },
        type: "POST",
        url: base_path + "/studentname-autocomplet-agent-details",
        data: "id=" + id,
        dataType: "JSON",
        success: function (response) {
            // alert(response.st.id);
            $("#visa_permit").val(response.st.study_permit_visa).change();
            $("#nationality").val(response.st.country_of_citizenship).change();
            $("#education_country")
                .val(response.st.country_of_education)
                .change();
            $("#education_lavel").val(response.st.level_of_education).change();
            $("#grading_schem").val(response.st.grading_scheme).change();
            $("#exam_type").val(response.st.english_exam_type).change();
            $("#reading").val(response.st.reading);
            $("#listening").val(response.st.lisenting);
            $("#speaking").val(response.st.speaking);
            $("#writing").val(response.st.writing);
        },
    });

    //  $("#search-res").css("display","none");
    $(".loadern").hide();
    $(".demo").hide();
}

// hide row
$(function () {
    $("#exam_type").change(function () {
        if ($(this).val() == 3) {
            $(".addisnalrow").css("display", "inline-flex");
        } else if ($(this).val() == 4) {
            $(".addisnalrow").css("display", "inline-flex");
        } else {
            $(".addisnalrow").css("display", "none");
        }
    });
});
/****************************************/
// AJAX call for autocomplete  student list main page
$(".loadern2").hide();
$(document).ready(function () {
    let token = $("input[name=_token]").val();
    $("#search_student").keyup(function () {
        $(".loadern2").show();
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            type: "POST",
            url: base_path + "/studentname-autocomplet-agent-mainpage",
            data: "keyword=" + $(this).val(),

            success: function (data) {
                //alert(data);
                $("#student_list_on_page").show();
                $("#student_list_on_page").html(data);
                $("#search_student").css("background", "#FFF");
                $(".loadern2").hide();
            },
        });
    });
});

function setprogramid(id) {
    $("#programid").val(id);
}

$(".btn-close").click(function () {
    $("#pdetails").html("");

    $("#elgalertdanger").hide();
    $("#elgalertsuc").hide();
});

/*****************************/
//To select country name
function selectStudentMainPage(name, id) {
    $("#search_student").val(name);
    $("#student-main").val(id);
    $("#student_list_on_page").hide();

    $("#papply").css("display", "block");
    $("#elgalertdanger").hide();
    $("#elgalertsuc").hide();

    //  $("#search-res").css("display","none");
    $("#main-content-popup").show();
    $(".loadern2").hide();
    $(".demo").hide();
    let programid = $("#programid").val();
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        type: "POST",
        url: base_path + "/get-program-eligibility-details-agent-mainpage",
        data: { pid: +programid },

        success: function (data) {
            if (data) {
                $("#elgalertsuc").show();
                //console.log(typeof data);
                var html_to_append = "";
                $.each(data, function (i, item) {
                    html_to_append +=
                        '<div class="border-bottom"><img src="' +
                        base_path +
                        "/images/" +
                        item.program_logo +
                        '" alt="Logo" width="48" height="48"><span class="fw-bold ptitle">' +
                        item.programs_name +
                        '</span><p class="fs-5 fw-semibold mt-3">Additional Requirements</p><table class="table table-bordered"><thead><tr><th>Intake Date</th><td>' +
                        item.earliest_intake_date +
                        "</td></tr><tr><th>Tuition Fee</th><td>" +
                        item.tuition_fee_min +
                        " - " +
                        item.tuition_fee_max +
                        "</td></tr><tr><th>Application Fee</th><td>" +
                        item.application_fee_min +
                        " - " +
                        item.application_fee_max +
                        "</td></tr><tr><th>Minimum Education</th><td>" +
                        item.minimum_level_of_education_completed +
                        "</td></tr><tr><th>Minimum GPA</th><td>" +
                        item.minimum_gpa +
                        "</td></tr><tr><th>Open Date</th><td>" +
                        item.open_date +
                        '</td></tr></thead><tbody></tbody></table><p class="fs-5 fw-semibold mt-3">Program Summary</p><p class="fs-5">' +
                        item.program_summary +
                        "</p></div>";
                });
                $("#pdetails").html(html_to_append);
                $("#papply").show();
            } else {
                $("#elgalertdanger").show();
            }
        },
    });
}

/**********Sub Agent*********** */

//********get state list******** */
$("#agentcountry").on("change", function (e) {
    let cid = $(this).val();
    let agenttoken = $("input[name=_token]").val();
    if (cid != "") {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            url: base_path + "/getstate",

            data: {
                token: agenttoken,
                ids: cid,
            },
            type: "POST",
            success: function (result) {
                //alert(result);
                if (result == "not_found") {
                    $("#agentstate").html(
                        '<option selected value="">Select</option>'
                    );
                } else {
                    $("#agentstate").html(result);
                }
            },
        });
    }
});

/****************get city list********************/

$("#agentstate").on("change", function (e) {
    let cid = $("#agentstate option:selected")
        .map(function () {
            return $(this).data("id");
        })
        .get();
    $("#hstate").val(cid);
    let token = $("input[name=_token]").val();
    if (cid != "") {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            url: base_path + "/getcity",
            data: {
                token: token,
                ids: cid,
            },
            type: "POST",
            success: function (result) {
                if (result == "not_found") {
                    $("#agentcity").html(
                        '<option selected value="">Select</option>'
                    );
                } else {
                    $("#agentcity").html(result);
                }
            },
        });
    }
});

$("#agentcity").on("change", function (e) {
    let cid = $("#agentcity option:selected")
        .map(function () {
            return $(this).data("id");
        })
        .get();
    let cityid = $(this).val();
    $("#hcity").val(cid);
});

function prograApply() {
    let agent_id = $("#agent_id").val();
    let programid = $("#programid").val();
    let student_id = $("#student-main").val();
    // alert(agent_id +' -'+programid +'-'+student_id);

    let token = $("input[name=_token]").val();
    if (agent_id != "" && student_id != "" && programid != "") {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            url: base_path + "/apply-program-by-agent",
            data: {
                token: token,
                agent_id: agent_id,
                student_id: student_id,
                programid: programid,
            },
            type: "POST",
            success: function (result) {
                if (result == "success") {
                    $("#elgalertsuc").html(
                        "Your Application Successfully Applyed"
                    );
                    setTimeout(function () {
                        $("#select-student").hide();
                    }, 3000);
                } else {
                    $("#elgalertdanger").html("Your Application Not Applyed");
                }
            },
        });
    } else {
        $("#elgalertdanger").html("Somthing Wrong!");
    }
}

/* filter on college details page*/

function getSelectVlue() {
    let program_level = $("#program_level").val();
    let descipline = $("#descipline").val();
    let inteke = $("#inteke").val();
    let program_order = $("#program_order").val();
    let searchstr = $("#search").val();
    if (searchstr == "") {
        searchstr = "NA";
    }
    //alert(program_level + "-" + descipline + " - " + inteke);
    let token = $("input[name=_token]").val();
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        url: base_path + "/program-filter-on-college-details",
        data: {
            token: token,
            program_level: program_level,
            descipline: descipline,
            inteke: inteke,
            program_order: program_order,
            searchstr: searchstr,
        },
        type: "POST",
        success: function (result) {
            //alert(result.id)
            if (result != "notfount") {
                $(".defultdata").hide();
                var html_to_append = "";
                $.each(result, function (i, item) {
                    html_to_append +=
                        '<div class="program-card bg-white p-3"><div class="program-card-main"><div class="program-card-img"><img src="' +
                        base_path +
                        "/images/" +
                        item.program_logo +
                        '" alt="' +
                        item.programs_name +
                        '"></div><div class="program-card-heading"><h4><a href="' +
                        base_path +
                        "/agent-college-details/" +
                        item.id +
                        '">' +
                        item.programs_name +
                        "</a></h4><p>" +
                        item.program_college_name +
                        '</p><ul><li><div class="list-li"><p>Earliest intake</p><p>' +
                        item.earliest_intake_date +
                        '</p></div></li><li><div class="list-li"><p>Tuition</p><p>' +
                        item.tuition_fee_min +
                        '</p></div></li><li><div class="list-li"><p>Application fee</p><p>' +
                        item.application_fee_min +
                        '</p></div></li></ul><a href="" data-bs-toggle="modal" data-bs-target="#check-student-eligibility"class="btn btn-primary" >Check Student Eligibility</a></div></div></div>';
                });
                $("#program_result").html(html_to_append);
            } else {
                $("#program_result")
                    .html(
                        '<div class="alert alert-danger" role="alert">No Data Found!</div><div class=""> </div>'
                    )
                    .hide(9000);

                $(".defultdata").show();
            }
        },
    });
}

//update agent-student-profile
function agentStudentProfileUpdate() {
    let country_of_citizenship = $("select#country_of_citizenship option")
        .filter(":selected")
        .val();
    let city_town = $("select#city_town option").filter(":selected").val();
    let country = $("select#country option").filter(":selected").val();
    let province_state = $("select#province_state option")
        .filter(":selected")
        .val();
    let country_of_education = $("select#country_of_education option")
        .filter(":selected")
        .val();
    let highest_level_of_education = $(
        "select#highest_level_of_education option"
    )
        .filter(":selected")
        .val();
    let grading_scheme = $("select#grading_scheme option")
        .filter(":selected")
        .val();
    let country_of_institution = $("select#country_of_institution option")
        .filter(":selected")
        .val();
    let level_of_education = $("select#level_of_education option")
        .filter(":selected")
        .val();
    let school_city_town = $("select#school_city_town option")
        .filter(":selected")
        .val();

    let first_name = $.trim($("input[name='first_name']").val());
    let date_of_birth = $.trim($("input[name='date_of_birth']").val());
    let first_language = $.trim($("input[name='first_language']").val());
    let passport_number = $.trim($("input[name='passport_number']").val());

    let address = $.trim($("input[name='address']").val());
    let email = $.trim($("input[name='email']").val());

    let postal_code = $.trim($("input[name='postal_code']").val());
    let phone_number = $.trim($("input[name='phone_number']").val());
    let grade_average = $.trim($("input[name='grade_average']").val());

    let name_of_institution = $.trim(
        $("input[name='name_of_institution']").val()
    );
    let primary_language_of_instruction = $.trim(
        $("input[name='primary_language_of_instruction']").val()
    );
    let attended_institution_from = $.trim(
        $("input[name='attended_institution_from']").val()
    );
    let attended_institution_to = $.trim(
        $("input[name='attended_institution_to']").val()
    );
    let graduation_date = $.trim($("input[name='graduation_date']").val());
    let school_address = $.trim($("input[name='school_address']").val());

    let marital_status = $('input[name="marital_status"]:checked').val();
    let gender = $('input[name="gender"]:checked').val();
    let graduated_from_most_recent_school = $(
        'input[name="graduated_from_most_recent_school"]:checked'
    ).val();
    let graduated_institution = $(
        'input[name="graduated_institution"]:checked'
    ).val();

    let reg = /^[0-9]{1,10}$/;
    let checking = reg.test(phone_number);
    let atposition = email.indexOf("@");
    let dotposition = email.lastIndexOf(".");

    if (first_name == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter first name.</div>'
        );
        $("input[name='first_name']").focus();
        return false;
    } else if (date_of_birth == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select date of birth.</div>'
        );
        $("input[name='date_of_birth']").focus();
        return false;
    } else if (first_language == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter first language.</div>'
        );
        $("input[name='first_language']").focus();
        return false;
    } else if (country_of_citizenship == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select citizenship.</div>'
        );
        $("input[name='country_of_citizenship']").focus();
        return false;
    } else if (passport_number == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter passport number.</div>'
        );
        $("input[name='passport_number']").focus();
        return false;
    } else if (marital_status == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select marital status.</div>'
        );
        $("input[name='marital_status']").focus();
        return false;
    } else if (gender == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select gender.</div>'
        );
        $("input[name='gender']").focus();
        return false;
    } else if (address == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter address.</div>'
        );
        $("input[name='address']").focus();
        return false;
    } else if (email == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter email.</div>'
        );
        $("input[name='email']").focus();
        return false;
    } else if (email == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter email.</div>'
        );
        $("input[name='email']").focus();
        return false;
    } else if (
        atposition < 1 ||
        dotposition < atposition + 2 ||
        dotposition + 2 >= email.length
    ) {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter valid email id.</div>'
        );
        $("input[name='email']").focus();
        return false;
    } else if (country == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select country.</div>'
        );
        $("input[name='country']").focus();
        return false;
    } else if (province_state == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select state.</div>'
        );
        $("input[name='province_state']").focus();
        return false;
    } else if (city_town == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select city.</div>'
        );
        $("input[name='city_town']").focus();
        return false;
    } else if (postal_code == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter postal code.</div>'
        );
        $("input[name='postal_code']").focus();
        return false;
    } else if (phone_number == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter phone number.</div>'
        );
        $("input[name='phone_number']").focus();
        return false;
    } else if (phone_number == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter phone number.</div>'
        );
        $("input[name='phone_number']").focus();
        return false;
    } else if (checking == false) {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Accept only number.</div>'
        );
        $("input[name='phone_number']").focus();
        return false;
    } else if (phone_number.length < 10 || phone_number.length > 10) {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter correct phone number.</div>'
        );
        $("input[name='phone_number']").focus();
        return false;
    } else if (country_of_education == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select country of education.</div>'
        );
        $("input[name='country_of_education']").focus();
        return false;
    } else if (highest_level_of_education == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select highest level of education.</div>'
        );
        $("input[name='highest_level_of_education']").focus();
        return false;
    } else if (grading_scheme == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select grading scheme.</div>'
        );
        $("input[name='grading_scheme']").focus();
        return false;
    } else if (grade_average == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter grading average.</div>'
        );
        $("input[name='grade_average']").focus();
        return false;
    } else if (graduated_from_most_recent_school == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please check graduated from most recent school.</div>'
        );
        $("input[name='graduated_from_most_recent_school']").focus();
        return false;
    } else if (country_of_institution == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select country of education.</div>'
        );
        $("input[name='country_of_institution']").focus();
        return false;
    } else if (name_of_institution == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter name of institution.</div>'
        );
        $("input[name='name_of_institution']").focus();
        return false;
    } else if (level_of_education == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select level of education.</div>'
        );
        $("input[name='level_of_education']").focus();
        return false;
    } else if (primary_language_of_instruction == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter primary language of instruction.</div>'
        );
        $("input[name='primary_language_of_instruction']").focus();
        return false;
    } else if (attended_institution_from == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter attended institution from.</div>'
        );
        $("input[name='attended_institution_from']").focus();
        return false;
    } else if (attended_institution_to == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter attended institution to.</div>'
        );
        $("input[name='attended_institution_to']").focus();
        return false;
    } else if (graduated_institution == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please check graduated institution to.</div>'
        );
        $("input[name='graduated_institution']").focus();
        return false;
    } else if (graduation_date == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter graduation date.</div>'
        );
        $("input[name='graduation_date']").focus();
        return false;
    } else if (school_address == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please enter school address.</div>'
        );
        $("input[name='school_address']").focus();
        return false;
    } else if (school_city_town == "") {
        $("#error").html(
            '<div class="alert alert-danger" role="alert">Please select school city town.</div>'
        );
        $("input[name='school_city_town']").focus();
        return false;
    } else {
        let data = $("#updatestudentProfile").serialize();
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": token,
            },
            url: base_path + "/agent-student-profile-update",
            data: data,
            type: "POST",
            success: function (result) { //alert(result);
                var parsedJson = $.parseJSON(result);
               
                if (parsedJson.message === "success") {
                    // alert(parsedJson.student_id);
                    $("#success").html(
                        '<div class="alert alert-success" role="alert">Profile updated successfully .</div>'
                    );

                    setTimeout(function () {
                        window.location.replace(
                            "/search-and-apply/" + parsedJson.student_id
                        );
                    }, 100);
                } else if (parsedJson.message === "failed") {
                    $("#error").html(
                        '<div class="alert alert-danger" role="alert">Somthing wrong.</div>'
                    );
                }
            },
        });
    }
}

//	student Certificate upload
function docupload(docType,studentId,appId)
{
    var property = document.getElementById("img-upload"+docType).files[0];
    var image_name = property.name;
    var image_extension = image_name.split(".").pop().toLowerCase();
    let token1 = $("input[name=_token]").val();
    if (jQuery.inArray(image_extension, ["gif", "jpg", "jpeg", "png"]) == -1) {
        alert("Invalid image file");
    }
    //alert(token1);
    var form_data = new FormData();
    form_data.append("file", property);
    form_data.append("appid", appId);
    form_data.append("student_id", studentId);
    form_data.append("doc_type", docType);

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token1,
        },
        url: base_path + "/student-certificate-upload",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#msg"+docType).html("Loading......");
        },
        success: function (data) {
            $("#uploaddoc"+docType).hide();
            $("#suceess"+docType).text("Document successfully updated");
            $("#msg"+docType).html(data);
            $("#complete"+docType).show();
            $("#pending"+docType).hide();
        },
    });

}

//save student notes

function notesSave()
{
 var title      = $('#notes_title').val();
 var student_id = $('#student_id').val();
 var appid      = $('#appid').val();
 var notes      = $('#notes').val();
 let token = $("input[name=_token]").val();

 if (title == "") {
    $("#error").html(
        '<div class="alert alert-danger" role="alert">Please enter note title.</div>'
    );
    $("input[name='title']").focus();
    return false;
 }else if(notes =="")
 {
    $("#error").html(
        '<div class="alert alert-danger" role="alert">Please enter note.</div>'
    );
    $("input[name='notes']").focus();
    return false;
 }else{
 var form_data = new FormData();
     form_data.append("title", title);
     form_data.append("student_id", student_id);
     form_data.append("appid", appid);
     form_data.append("notes", notes);

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        url: base_path + "/student-notes",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#msg").html("please wait......");
        },
        success: function (data) {
            $("#msg").html('Save');
            if(data =='success')
            {
            $("#success").html("<div class='alert alert-success'><strong>Success!</strong> Note save successfully.</div> "); 
            $('#frmnote')[0].reset();
        }else
            { 
              $("#error").html("<div class='alert alert-danger'><strong>Failed!</strong> Data Not Saved.</div> ");    
            }
        },
    });
 
}
}







/*$(document).on("change", "#img-upload1", function () {
    var property = document.getElementById("img-upload").files[0];
    var image_name = property.name;
    var image_extension = image_name.split(".").pop().toLowerCase();
    let token1 = $("input[name=_token]").val();
    let appid = $("#appid").val();
    let st_id = $("#student_id").val();
    if (jQuery.inArray(image_extension, ["gif", "jpg", "jpeg", "png"]) == -1) {
        alert("Invalid image file");
    }

    var form_data = new FormData();
    form_data.append("file", property);
    form_data.append("appid", appid);
    form_data.append("student_id", st_id);

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token1,
        },
        url: base_path + "/student-certificate-upload",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#msg").html("Loading......");
        },
        success: function (data) {
            $("#uploaddoc").hide();
            $("#suceess").text("Document successfully updated");
            $("#msg").html(data);
        },
    });
});*/

//	student passport upload

$(document).on("change", "#img-upload_pass", function () {
    var property = document.getElementById("img-upload_pass").files[0];
    var image_name = property.name;
    var image_extension = image_name.split(".").pop().toLowerCase();
    let token1 = $("input[name=_token]").val();
    let appid = $("#appid_pass").val();
    let st_id = $("#student_id").val();

    if (jQuery.inArray(image_extension, ["gif", "jpg", "jpeg", "png"]) == -1) {
        alert("Invalid image file");
    }

    var form_data = new FormData();
    form_data.append("file", property);
    form_data.append("appid_pass", appid);
    form_data.append("student_id", st_id);

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token1,
        },
        url: base_path + "/student-passport-upload",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#msg_pass").html("Loading......");
        },
        success: function (data) {
            $("#uploaddoc_pass").hide();
            $("#suceess_pass").text("Document successfully updated");
            $("#msg_pass").html(data);
        },
    });
});




  $(document).ready(function() {
    $('input').keyup(function(event) {
        if (event.which === 13)
        {
            event.preventDefault();
            $('form#frmStudentFilter').submit();
        }
    });
});

$(document).ready(function() {
    $('input').keyup(function(event) {
        if (event.which === 13)
        {
            event.preventDefault();
            $('form#frmApplicationFilter').submit();
        }
    });
});

function updateDocument(appid,docId)
{
    var optVal= $('#doc_'+docId).val();
    let token = $("input[name=_token]").val();
    if(optVal !=0){
    var form_data = new FormData();
        form_data.append("docId", docId);
        form_data.append("appid", appid);
        form_data.append("optVal", optVal);

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        url: base_path + "/update-document-status",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#msg_pass_"+ docId).html("Please wait...");
        },
        success: function (data) {
            if(data=='aproved'){
            $("#disaprove_"+ docId).css("display", "none");
            $("#msg_pass_"+ docId).hide();
            $("#suceess_pass_"+ docId).html("<spain class='success'>Document successfully Aproved</span>");
            }
            else if(data=='disaproved'){
                $("#disaprove_"+ docId).css("display", "block");
                $("#msg_pass_"+ docId).hide();
                $("#suceess_pass_"+ docId).html("<spain class='success'>Document successfully Disaproved</span>");
                }else{
                    $("#disaprove_"+ docId).css("display", "none");
                    $("#msg_pass_"+ docId).hide();
                    $("#suceess_pass_"+ docId).html("<spain class='error'>Something worng</span>");   
                }
        },
    });
}
$("#disaprove_"+ docId).css("display", "none");
}

function statusChange(appid,status)
{   
    var form_data = new FormData();
        form_data.append("appid", appid);
        form_data.append("status", status);

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        url: base_path + "/change-document-status",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#msg_pass").html("Please wait...");
        },
        success: function (data) {
            if(data=='aproved'){
            $("#msg_pass").hide();
            $("#suceess_pass").html("<spain class='success'>Application successfully Aproved</span>");
            setTimeout(function() {
                //location.reload();
            }, 5000);
            }
            else if(data=='disaproved'){
                $("#msg_pass").hide();
                $("#suceess_pass").html("<spain class='error'>Application successfully Disaproved</span>");
                setTimeout(function() {
                    location.reload();
                }, 5000);    
            }else{
                    $("#msg_pass").hide();
                    $("#suceess_pass").html("<spain class='error'>Something worng</span>");   
                }
        },
    });
}

function disaproved(id,appid)
{
 let disc = $('#disc_'+id).val();
 let form_data = new FormData();
        form_data.append("appid", appid);
        form_data.append("id", id);
        form_data.append("disc", disc);
 if(disc !='')
 {
     $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        url: base_path + "/update-document-status-discription",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#msgpass_"+id).html("Please wait...");
        },
        success: function (data) {
            if(data=='update'){
            $("#msgpass_"+id).hide();
            $("#suceess_pass_"+id).html("");
            $("#suceesspass_"+id).html("<spain class='success'>Comment successfully save</span>");
            setTimeout(function() {
                //location.reload();
            }, 5000);
               
            }else{
                $("#msgpass_"+id).hide();
                $("#suceesspass_"+id).html("<spain class='error'>Something worng</span>");   
                }
        },
    });
 }
}
