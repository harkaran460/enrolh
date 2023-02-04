jQuery(document).ready(function () {
    ImgUpload();
});

function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $('.upload__inputfile').each(function () {
        $(this).on('change', function (e) {
            imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
            var maxLength = $(this).attr('data-max_length');

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;
            filesArr.forEach(function (f, index) {

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
                        reader.onload = function (e) {
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

    $('body').on('click', ".upload__img-close", function (e) {
        var file = $(this).parent().data("file");
        for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i].name === file) {
                imgArray.splice(i, 1);
                break;
            }
        }
        $(this).parent().parent().remove();
    });
};


(function () {
    $(document).on('click', '.js-add--exam-row', function (e) {
        var clone, examsList;
        e.preventDefault();
        examsList = $('#form-exams-list');
        clone = examsList.children('.form-group:first').clone(true);
        clone.append($('<button>').addClass('btn btn-danger js-remove--exam-row').html('Feature Remove'));
        //reset values in cloned inputs and
        //add enumerated ID's to input fields
        clone.find('textarea,input').val('').attr('id', function () {
            console.log("added new row");
            return $(this).attr('id') + '_' + (examsList.children('.form-group').length + 1);
        });
        return examsList.append(clone);
    });

    //remove rows when remove button is clicked
    $(document).on('click', '.js-remove--exam-row', function (e) {
        e.preventDefault();
        console.log("Removed one row");

        // var getTxtValue = $("#noOfQuestionAsnwer").val();
        // var getTxtValue = parseInt(getTxtValue) - 1;
        // $("#noOfQuestionAsnwer").val(getTxtValue);


        return $(this).parent().remove();
    });

}).call(this);


$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".vertical-menu").addClass("darkHeader");
    }
});