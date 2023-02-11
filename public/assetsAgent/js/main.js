$(".select2").select2();

// color change html
document.documentElement.style.setProperty(
    "--color",
    localStorage.getItem("pageColor")
);

const colors = document.querySelectorAll(".color-layout");

colors.forEach(function (color) {
    color.addEventListener("click", function () {
        let hex = color.dataset.color;
        document.documentElement.style.setProperty("--color", hex);

        localStorage.setItem("pageColor", color.dataset.color);
    });
});

// Pre loader
var windowOn = $(window);
windowOn.on("load", function () {
    $("#loading").fadeOut(500);
});

$(".navbar-header")
    .find(".app-search")
    .find("input")
    .each(function () {
        $(this).on("focus", function () {
            $(".navbar-header").find(".search-result").addClass("show");
        }),
            $(this).on("focusout", function () {
                $(".app-search").find(".search-result").removeClass("show");
            });
    });

$(".filter").click(function () {
    $(".payment-action").slideToggle("show");
});

$("#search-dropdwon-main").click(function () {
    $(".search-dropdown ul").toggleClass("demo");
});

$(".see-more").click(function () {
    $(this).addClass("hide1");
});

$(".less-more").click(function () {
    $(".see-more").removeClass("hide1");
});

$(".see-more").click(function () {
    $(".main-slide").slideUp();
    if ($(this).siblings(".main-slide").css("display") === "none")
        $(this).siblings(".main-slide").slideDown();
    else $(this).siblings(".main-slide").slideUp();
});

$(".less-more").click(function () {
    $(".main-slide").slideUp();
    if ($(this).siblings(".main-slide").css("display") === "block")
        $(this).siblings(".main-slide").slideUp();
    else $(this).siblings(".main-slide").slideDown();
});

$("#filters").click(function () {
    $(".programs-form-search").slideToggle();
});

// $(window).scroll(function() {
//     var scroll = $(window).scrollTop();
//     if (scroll >= 10) {
//         $(".vertical-menu").addClass("darkHeader");
//     }
// });

$(".main-switch").click(function () {
    $(".main-switch-toggle").slideToggle();
});

$(".main-switch2").click(function () {
    $(".main-switch-toggle2").slideToggle();
});

$(".main-switch3").click(function () {
    $(".main-switch-toggle3").slideToggle();
});

$("#payments-filter").click(function () {
    $(".payment-history").slideToggle();
});

$(".add-notes").click(function () {
    $(".textarea-custom-slide").slideToggle();
    $(this).find(".fa").toggleClass("fa-plus fa-minus");
});

$(".css-see-more p").click(function () {
    $(".wrapped-content").addClass("less_min_height");
});

$(".css-see-less p").click(function () {
    $(".wrapped-content").removeClass("less_min_height");
});

$(".fold-table tr.view").on("click", function () {
    $(this).toggleClass("open").next(".fold").toggleClass("open");
});

$(".main-review-icon1 i").click(function () {
    $(".click-item").toggleClass("slide_10");
});

$(".vertical-menu").hover(
    function () {
        $(this).addClass("slide");
    },
    function () {
        $(this).removeClass("slide");
    }
);

function disblecontent() {}

//=====================================================================  hide filter columns for student page start =====================================================================
$("#studentId_click").click(function () {
    $(".studentid_hide").toggle();
});

$("#studentemail_click").click(function () {
    $(".studentemail_hide").toggle();
});

$("#fname_click").click(function () {
    $(".fname_hide").toggle();
});

$("#lname_click").click(function () {
    $(".lname_name").toggle();
});

$("#nationlty_click").click(function () {
    $(".nationality_hide").toggle();
});

$("#recruitmentp_click").click(function () {
    $(".recruitmentp_hide").toggle();
});

$("#recruiter_click").click(function () {
    $(".recuiter_t_hide").toggle();
});

$("#education_click").click(function () {
    $(".education_hide").toggle();
});

$("#application_click").click(function () {
    $(".appplication_hide").toggle();
});

$("#action_click").click(function () {
    $(".action_hide").toggle();
});

$("#student_all_hide").click(function () {
    $(
        ".studentid_hide, .studentemail_hide, .fname_hide, .lname_name, .nationality_hide, .recruitmentp_hide, .recuiter_t_hide, .education_hide, .appplication_hide"
    ).toggle();
});
//===================================================================== hide filter columns for student page end =====================================================================

$(".add_attended_school").click(function () {
    $(".add_attended_school_row").addClass("show");
});

$(".cencel_school_row").click(function () {
    $(".add_attended_school_row").removeClass("show");
});

$("#rangestart").calendar({
    type: "date",
    endCalendar: $("#rangeend"),
});

$("#rangeend").calendar({
    type: "date",
    startCalendar: $("#rangestart"),
});

$("#rangestart1").calendar({
    type: "date",
    endCalendar: $("#rangeend1"),
});

$("#rangeend1").calendar({
    type: "date",
    startCalendar: $("#rangestart1"),
});

//=====================================================================  hide filter columns for Application page start =====================================================================
$("#appId_app").click(function () {
    $(".appId_hide_app").toggle();
});

$("#studentId_app").click(function () {
    $(".studentId_hide_app").toggle();
});

$("#applyDate_app").click(function () {
    $(".applyDate_hide_app").toggle();
});

$("#firstName_app").click(function () {
    $(".firstName_hide_app").toggle();
});

$("#lastName_app").click(function () {
    $(".lastName_hide_app").toggle();
});

$("#status_app").click(function () {
    $(".status_hide_app").toggle();
});

$("#recruitments_app").click(function () {
    $(".requirements_hide_app").toggle();
});

$("#currentStage_app").click(function () {
    $(".currentStage_hide_app").toggle();
});

$("#program_app").click(function () {
    $(".program_hide_app").toggle();
});

$("#school_app").click(function () {
    $(".school_hide_app").toggle();
});

$("#startDate_app").click(function () {
    $(".startDate_hide_app").toggle();
});

$("#recruitfmentPartner_app").click(function () {
    $(".recruitmentPartner_hide_app").toggle();
});

$("#paymentDate_app").click(function () {
    $(".paymentDate_hide_app").toggle();
});

$("#action_app").click(function () {
    $(".action_app_hide").toggle();
});

$("#application_all_hide").click(function () {
    $(
        ".appId_hide_app, .studentId_hide_app, .applyDate_hide_app, .firstName_hide_app, .lastName_hide_app, .status_hide_app, .requirements_hide_app, .currentStage_hide_app, .program_hide_app, .school_hide_app, .startDate_hide_app, .recruitmentPartner_hide_app, .paymentDate_hide_app"
    ).toggle();
});

// ============================================= hide filter columns for Application page end =====================================================================

function filtercheck() {
    if (document.getElementById("prepareApplication_t").checked) {
        const collection = document.getElementsByClassName(
            "Prepare Application"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("prepareApplication_f").checked) {
        const collection = document.getElementsByClassName(
            "Prepare Application"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    if (document.getElementById("submissionInProg_t").checked) {
        const collection = document.getElementsByClassName(
            "Submission In Progress"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("submissionInProg_f").checked) {
        const collection = document.getElementsByClassName(
            "Submission In Progress"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    if (document.getElementById("decision_t").checked) {
        const collection = document.getElementsByClassName("Decision");
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("decision_f").checked) {
        const collection = document.getElementsByClassName("Decision");
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    if (document.getElementById("postDecisionReq_t").checked) {
        const collection = document.getElementsByClassName(
            "Post-Decision Requirements"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("postDecisionReq_f").checked) {
        const collection = document.getElementsByClassName(
            "Post-Decision Requirements"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }
    if (document.getElementById("readyToSubmit_t").checked) {
        const collection = document.getElementsByClassName("Ready to Submit");
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("readyToSubmit_f").checked) {
        const collection = document.getElementsByClassName("Ready to Submit");
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    if (document.getElementById("submittedToSchool_t").checked) {
        const collection = document.getElementsByClassName(
            "Submitted to School"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("submittedToSchool_f").checked) {
        const collection = document.getElementsByClassName(
            "Submitted to School"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    if (document.getElementById("readyForVisa_t").checked) {
        const collection = document.getElementsByClassName("Ready for Visa");
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("readyForVisa_f").checked) {
        const collection = document.getElementsByClassName("Ready for Visa");
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    if (document.getElementById("ReadyToEnroll_t").checked) {
        const collection = document.getElementsByClassName("Ready to Enroll");
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("ReadyToEnroll_f").checked) {
        const collection = document.getElementsByClassName("Ready to Enroll");
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    if (document.getElementById("applicationCancelled_t").checked) {
        const collection = document.getElementsByClassName(
            "Application Cancelled"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("applicationCancelled_f").checked) {
        const collection = document.getElementsByClassName(
            "Application Cancelled"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    if (document.getElementById("enrollmentconf_t").checked) {
        const collection = document.getElementsByClassName(
            "Enrollment Confirmed"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        console.log(collection.length);
    } else if (document.getElementById("enrollmentconf_f").checked) {
        const collection = document.getElementsByClassName(
            "Enrollment Confirmed"
        );
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }
    }

    /* if(document.getElementById('payYes').checked) {
               const collection = document.getElementsByClassName("Pay Application Fee"); 
               for(var i=0; i<collection.length; i++){
                   collection[i].style.display="";
               }
                console.log(collection.length);
           }else if(document.getElementById('payNo').checked) {
               const collection = document.getElementsByClassName("Pay Application Fee"); 
               for(var i=0; i<collection.length; i++){
                   collection[i].style.display="none";
               } 
           }*/

    if (document.getElementById("payNo").checked) {
        const collection = document.getElementsByClassName("Not Paid");
        const collection1 = document.getElementsByClassName("Processing");
        const collection2 = document.getElementsByClassName("Accepted");
        const collection3 = document.getElementsByClassName("Cancelled");
        const collection4 = document.getElementsByClassName("Submitted");
        console.log(collection.length);
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "";
        }
        for (var i = 0; i < collection1.length; i++) {
            collection1[i].style.display = "none";
        }
        if (collection2 != null) {
            for (var i = 0; i < collection2.length; i++) {
                collection2[i].style.display = "none";
            }
        }
        if (collection3 != null) {
            for (var i = 0; i < collection3.length; i++) {
                collection3[i].style.display = "none";
            }
        }
        if (collection4 != null) {
            for (var i = 0; i < collection4.length; i++) {
                collection4[i].style.display = "none";
            }
        }
    } else if (document.getElementById("payYes").checked) {
        const collection = document.getElementsByClassName("Not Paid");
        const collection1 = document.getElementsByClassName("Processing");
        const collection2 = document.getElementsByClassName("Accepted");
        const collection3 = document.getElementsByClassName("Cancelled");
        const collection4 = document.getElementsByClassName("Submitted");
        // console.log(collection.length);
        for (var i = 0; i < collection.length; i++) {
            collection[i].style.display = "none";
        }

        for (var i = 0; i < collection1.length; i++) {
            collection1[i].style.display = "";
        }
        if (collection2 != null) {
            for (var i = 0; i < collection2.length; i++) {
                collection2[i].style.display = "";
            }
        }
        if (collection3 != null) {
            for (var i = 0; i < collection3.length; i++) {
                collection3[i].style.display = "";
            }
        }
        if (collection4 != null) {
            for (var i = 0; i < collection4.length; i++) {
                collection4[i].style.display = "";
            }
        }
    }
}

$(function () {
    $(document).tooltip({
        position: {
            my: "center bottom-20",
            at: "center top",
            using: function (position, feedback) {
                $(this).css(position);
                $("<div>")
                    .addClass("arrow")
                    .addClass(feedback.vertical)
                    .addClass(feedback.horizontal)
                    .appendTo(this);
            },
        },
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#imagePreview").css(
                "background-image",
                "url(" + e.target.result + ")"
            );
            $("#imagePreview").hide();
            $("#imagePreview").fadeIn(650);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function () {
    readURL(this);
});

jQuery(document).ready(function () {
    ImgUpload();

    /* var attr11 = $('#doc_4 option[value="2"]').attr('selected');
        if (typeof attr11 !== 'undefined' && attr11 !== false) {
              $("div#suceess_pass_4 + #docStatus").append(
                  '<form class="form">' +
                  '<div class="mb-3"><textarea class="form-control" rows="4"></textarea>' +
                  '<button type="submit" class="btn btn-secondary mt-2 float-end">Confirm identity</button>' +
                  '</div>'
              );
        }
    
        $('#doc_4').on('change', function() {
            var value = $(this).val();
            if(value == 2){
                  $("div#suceess_pass_4 + #docStatus .form").show();
            }else{
                $("div#suceess_pass_4 + #docStatus .form").hide();
            }
        });
    
    
        $('#doc_4').on('click', function() {
            var value = $(this).val();
            if(value == 1){
                $("div#suceess_pass_4 + #docStatus .form").hide(); 
            };
            if(value == 0){
                $("div#suceess_pass_4 + #docStatus .form").hide();
            };
        });
    
        var attr12 = $('#doc_5 option[value="2"]').attr('selected');
        if (typeof attr12 !== 'undefined' && attr12 !== false) {
              $("div#suceess_pass_5 + #docStatus").append(
                  '<form class="form">' +
                  '<div class="mb-3"><textarea class="form-control" rows="4"></textarea>' +
                  '<button type="submit" class="btn btn-secondary mt-2 float-end">Confirm identity</button>' +
                  '</div>'
              );
        }
    
        $('#doc_5').on('change', function() {
            var value = $(this).val();
            if(value == 2){
                  $("div#suceess_pass_5 + #docStatus .form").show();
            }else{
                $("div#suceess_pass_5 + #docStatus .form").hide();
            }
        });
    
    
        $('#doc_5').on('click', function() {
            var value = $(this).val();
            if(value == 1){
                $("div#suceess_pass_5 + #docStatus .form").hide(); 
            };
            if(value == 0){
                $("div#suceess_pass_5 + #docStatus .form").hide();
            };
        });*/
});

function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $(".upload__inputfile").each(function () {
        $(this).on("change", function (e) {
            imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
            var maxLength = $(this).attr("data-max_length");

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;
            filesArr.forEach(function (f, index) {
                if (!f.type.match("image.*")) {
                    return;
                }

                if (imgArray.length > maxLength) {
                    return false;
                } else {
                    var len = 0;
                    for (var i = 0; i < imgArray.length; i++) {
                        if (imgArray[i] !== undefined) {
                            len++;
                        }
                    }
                    if (len > maxLength) {
                        return false;
                    } else {
                        imgArray.push(f);

                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var html =
                                "<div class='upload__img-box'><div style='background-image: url(" +
                                e.target.result +
                                ")' data-number='" +
                                $(".upload__img-close").length +
                                "' data-file='" +
                                f.name +
                                "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                            imgWrap.append(html);
                            iterator++;
                        };
                        reader.readAsDataURL(f);
                    }
                }
            });
        });
    });

    $("body").on("click", ".upload__img-close", function (e) {
        var file = $(this).parent().data("file");
        for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i].name === file) {
                imgArray.splice(i, 1);
                break;
            }
        }
        $(this).parent().parent().remove();
    });
}
$("#filters").click(function () {
    $(".programs-form-search").attr("style", "");
});

$(function () {
    $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        localStorage.setItem("lastTab", $(this).attr("href"));
    });
    var lastTab = localStorage.getItem("lastTab");

    if (lastTab) {
        $('[href="' + lastTab + '"]').tab("show");
    }
});


// -------------------------------------IMPORTANT NOTICE TAB SELECTION WHEN PAGE REFRESH START-------------------------
$("#missing_requirements_tab").click(function () { 
    localStorage.setItem("activeTab", active);
    var currentTab = document.getElementById("missing_requirements_tab");
    localStorage.getItem("activeTab");
});
// -------------------------------------IMPORTANT NOTICE TAB SELECTION WHEN PAGE REFRESH END-------------------------


// ---------------------------IMPORTANT NOTICE TAB CONTENT SELECTION WHEN PAGE REFRESH START-------------------------

$(function () {
    $('button[data-bs-toggle="pill"]').on("shown.bs.tab", function (e) {
        localStorage.setItem("lastTab", $(this).attr("id"));
    });
    var lastTab = localStorage.getItem("lastTab");

    if (lastTab == "notes_tab") {
        document.getElementById(lastTab).classList.add("active");
        document
            .getElementById("missing_requirements_tab")
            .classList.remove("active");
        var a = document.getElementById("notes");
        var b = document.getElementById("missing_requirements");
        a.classList.add("show", "active");
        b.classList.remove("active", "show");
    } else if (lastTab == "application_status_tab") {
        document.getElementById(lastTab).classList.add("active");
        document
            .getElementById("missing_requirements_tab")
            .classList.remove("active");
        var a = document.getElementById("application_status");
        var b = document.getElementById("missing_requirements");
        a.classList.add("show", "active");
        b.classList.remove("active", "show");
    }
});
// -------------------------IMPORTANT NOTICE TAB CONTENT SELECTION WHEN PAGE REFRESH END-------------------------


// ---------------------------------------- SHOW CONFIRM BOX WHEN DELETING NOTICE START----------------------------

function Confirm($true, $false, $link) {
    /*change*/
    var title = "Delete Notice";
    var msg = "Are you sure you want to Delete";

    var $content =
        "<div class='dialog-ovelay'>" +
        "<div class='dialog'><header>" +
        " <h3> " +
        title +
        " </h3> " +
        "<i class='fa fa-close'></i>" +
        "</header>" +
        "<div class='dialog-msg'>" +
        " <p> " +
        msg +
        " </p> " +
        "</div>" +
        "<footer>" +
        "<div class='controls'>" +
        " <button class='button button-danger doAction'>" +
        $true +
        "</button> " +
        " <button class='button button-default cancelAction'>" +
        $false +
        "</button> " +
        "</div>" +
        "</footer>" +
        "</div>" +
        "</div>";
    $("body").prepend($content);
    $(".doAction").click(function () {
        window.open($link, "_self");
        // location.reload();
        $(this)
            .parents(".dialog-ovelay")
            .fadeOut(500, function () {
                $(this).remove();
            });
    });
    $(".cancelAction, .fa-close").click(function () {
        $(this)
            .parents(".dialog-ovelay")
            .fadeOut(500, function () {
                $(this).remove();
            });
    });
}
// ---------------------------------------- SHOW CONFIRM BOX WHEN DELETING NOTICE END----------------------------


function test() {
    alert("test");
}

// -----------------------------------OPEN MODAL ON CLICK EDIT BUTTON OF NOTICE BOARD START-----------------------------
$(document).ready(function () {
    if (window.location.href.indexOf("#editNotice") != -1) {
        $("#editNotice").modal("show");
    }
});
// -----------------------------------OPEN MODAL ON CLICK EDIT BUTTON OF NOTICE BOARD END-----------------------------
