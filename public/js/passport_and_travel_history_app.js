$(function(){
    'use strict';

    // set the csrf-token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // fileupload() related actions
    if ($().fileupload) {
        
        // Initialize the jQuery File Upload widget:
        $('#fileupload_4').fileupload({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: $('#fileupload_4').attr('action'),
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            maxFileSize: 2000000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        });

        // Enable iframe cross-domain access via redirect option:
        $('#fileupload_4').fileupload(
            'option',
            'redirect',
            window.location.href.replace(
                /\/[^\/]*$/,
                '/cors/result.html?%s'
            )
        );
		
        // Load existing files:
        $('#fileupload_4').addClass('fileupload-processing');
        $.ajax({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: $('#fileupload_4').fileupload('option', 'url'),
            dataType: 'json',
            context: $('#fileupload_4')[0]
        }).always(function () {
            $(this).removeClass('fileupload-processing');
        }).done(function (result) {
            $(this).fileupload('option', 'done')
                .call(this, $.Event('done'), {result: result});
        });
    } 
});