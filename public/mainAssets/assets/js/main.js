ClassicEditor.create(document.querySelector("#editor"));

document.querySelector("form").addEventListener("submit", (e) => {
    e.preventDefault();
    console.log(document.getElementById("editor").value);
});

$(".select2").select2();

$(function() {
    $(".view-more").click(function() {
        $(this).siblings(".slide-view").slideToggle("slow");
    });
});

$('#date-ranger').daterangepicker({
    "showWeekNumbers": true,
    "showISOWeekNumbers": true,
    "timePicker": true,
    "timePicker24Hour": true,
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    "alwaysShowCalendars": true,
    "startDate": "05/04/2022",
    "endDate": "05/10/2022"
}, function(start, end, label) {
    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
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


$(".filter").click(function() {
    $(".payment-action").slideToggle("show");
});


$("#search-dropdwon-main").click(function() {
    $(".search-dropdown ul").toggleClass('demo');
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

// $(".collage-slide-class").click(function() {
//     $("#choose-college").toggleClass("why-choose-college");
// });


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


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".vertical-menu").addClass("darkHeader");
    }
});


$(document).ready(function() {
    $("#range_04").ionRangeSlider({ skin: "square", type: "double", grid: !0, min: -1e3, max: 1e3, from: -500, to: 500 }),
        $("#range_05").ionRangeSlider({ skin: "square", type: "double", grid: !0, min: -1e3, max: 1e3, from: -500, to: 500, step: 250 })
});