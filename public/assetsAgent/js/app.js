!(function(s) {
    "use strict";

    function c() {
        for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, s = e.length; t < s; t++)
            "nav-item dropdown active" === e[t].parentElement.getAttribute("class") && (e[t].parentElement.classList.remove("active"), null !== e[t].nextElementSibling && e[t].nextElementSibling.classList.remove("show"));
    }


    function l() {
        document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), s("body").removeClass("fullscreen-enable"));
    }
    s("#side-menu").metisMenu(),
        s(document).ready(function() {
            var e;
            0 < s("#sidebar-menu").length &&
                0 < s("#sidebar-menu .mm-active .active").length &&
                300 < (e = s("#sidebar-menu .mm-active .active").offset().top) &&
                ((e -= 300), s(".vertical-menu .simplebar-content-wrapper").animate({ scrollTop: e }, "slow"));
        }),
        [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e) {
            return new bootstrap.Tooltip(e)
        }), [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e) {
            return new bootstrap.Popover(e)
        })
    
        
       
   
 
})(jQuery);