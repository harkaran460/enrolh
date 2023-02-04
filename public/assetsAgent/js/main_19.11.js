

$(".select2").select2();

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

$(".filter").click(function() {
    $(".payment-action").slideToggle("show");
});


$("#search-dropdwon-main").click(function() {
    $(".search-dropdown ul").toggleClass('demo');
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

$("#filters").click(function() {
    $(".programs-form-search").slideToggle();
});

// $(window).scroll(function() {
//     var scroll = $(window).scrollTop();
//     if (scroll >= 10) {
//         $(".vertical-menu").addClass("darkHeader");
//     }
// });
 
$(".main-switch").click(function() {
    $(".main-switch-toggle").slideToggle();
});

$(".main-switch2").click(function() {
    $(".main-switch-toggle2").slideToggle();
});

$(".main-switch3").click(function() {
    $(".main-switch-toggle3").slideToggle();
});

$('#payments-filter').click(function() {
    $('.payment-history').slideToggle();
});

$('.add-notes').click(function() {
    $('.textarea-custom-slide').slideToggle();
    $(this).find(".fa").toggleClass("fa-plus fa-minus");
});

$(".css-see-more p").click(function() {
    $('.wrapped-content').addClass('less_min_height');
});

$(".css-see-less p").click(function() {
    $('.wrapped-content').removeClass('less_min_height');
});

$(".fold-table tr.view").on("click", function() {
    $(this).toggleClass("open").next(".fold").toggleClass("open");
});

$(".main-review-icon1 i").click(function(){
   $(".click-item").toggleClass("slide_10"); 
});

$(".vertical-menu").hover(
    function() {
        $(this).addClass("slide");
    },
    function() {
        $(this).removeClass("slide");
    }
);


$("#studentId_click").click(function(){
   $(".studentid_hide").toggle(); 
});

$("#studentemail_click").click(function(){
   $(".studentemail_hide").toggle(); 
});

$("#fname_click").click(function(){
   $(".fname_hide").toggle(); 
});

$("#lname_click").click(function(){
   $(".lname_name").toggle(); 
});

$("#nationlty_click").click(function(){
   $(".nationality_hide").toggle(); 
});

$("#recruitmentp_click").click(function(){
   $(".recruitmentp_hide").toggle(); 
});

$("#recruiter_click").click(function(){
   $(".recuiter_t_hide").toggle(); 
});

$("#education_click").click(function(){
   $(".education_hide").toggle(); 
});

$("#application_click").click(function(){
   $(".appplication_hide").toggle(); 
});

$("#student_all_hide").click(function(){
   $(".studentid_hide, .studentemail_hide, .fname_hide, .lname_name, .nationality_hide, .recruitmentp_hide, .recuiter_t_hide, .education_hide, .appplication_hide").toggle(); 
}); 

$(".add_attended_school").click(function(){
   $(".add_attended_school_row").addClass("show"); 
});

$(".cencel_school_row").click(function(){
   $(".add_attended_school_row").removeClass("show"); 
});

$('#rangestart').calendar({
    type: 'date',
    endCalendar: $('#rangeend')
});

$('#rangeend').calendar({
    type: 'date',
    startCalendar: $('#rangestart')
});

$('#rangestart1').calendar({
    type: 'date',
    endCalendar: $('#rangeend1')
});

$('#rangeend1').calendar({
    type: 'date',
    startCalendar: $('#rangestart1')
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
 

jQuery(document).ready(function () {
    ImgUpload();
    
        var attr11 = $('#doc_4 option[value="2"]').attr('selected');
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
        });
    
    
    
    
    
 
});

function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $('.upload__inputfile').each(function() {
        $(this).on('change', function(e) {
            imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
            var maxLength = $(this).attr('data-max_length');

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;
            filesArr.forEach(function(f, index) {

                if (!f.type.match('image.*')) {
                    return;
                }

                if (imgArray.length > maxLength) {
                    return false
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
                        reader.onload = function(e) {
                            var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                            imgWrap.append(html);
                            iterator++;
                        }
                        reader.readAsDataURL(f);
                    }
                }
            });
        });
    });

    $('body').on('click', ".upload__img-close", function(e) {
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