// 


$(window).scroll(function () {
    // Get number of pixels of scroll.
    var pixel = $(window).scrollTop();
    // console.log(pixel);
    // When the scroll exceeds 300px, give the [fixed-menu] class.
    if (pixel >= 150) {
        $('.navbar').addClass('fixed-menu');
    } else {
        $('.navbar').removeClass('fixed-menu');
    }
});

$(document).ready(function () {
    $(document).on('change', '#privacy_policy', function () {
        if ($('#privacy_policy').is(":checked")) {
            $('#btnRegister').prop('disabled', false);
        } else {
            $('#btnRegister').prop('disabled', true);
        }
    });

    $(".navbar__icon").click(function () {
        $(".navbar").toggleClass("tranform0");
    });
    $(".close").click(function () {
        $(".menu__admin").toggleClass("tranform0");
        $(".menu__left").toggleClass("w-16");
        $(".content__right").toggleClass("w-83");
    });
    $(".click__item--navbar").click(function () {
        $(".show_megamenu").toggleClass("h100");
        $(".show_megamenu1").removeClass("h100");
        $(".show_megamenu2").removeClass("h100");
        $(".show_megamenu3").removeClass("h100");
    });
    $(".click__item--navbar1").click(function () {
        $(".show_megamenu1").toggleClass("h100");
        $(".show_megamenu").removeClass("h100");
        $(".show_megamenu2").removeClass("h100");
        $(".show_megamenu3").removeClass("h100");
    });
    $(".click__item--navbar2").click(function () {
        $(".show_megamenu2").toggleClass("h100");
        $(".show_megamenu").removeClass("h100");
        $(".show_megamenu1").removeClass("h100");
        $(".show_megamenu3").removeClass("h100");
    });
    $(".click__item--navbar3").click(function () {
        $(".show_megamenu3").toggleClass("h100");
        $(".show_megamenu").removeClass("h100");
        $(".show_megamenu1").removeClass("h100");
        $(".show_megamenu2").removeClass("h100");
    });
    $(".click__item--navbar4").click(function () {
        $(".show_megamenu4, .show_megamenu1").toggleClass("h100");
    });
    $(".job__type--click2").click(function () {
        $(".job__type2").toggleClass("h100");
    });
    $(".job__type--click").click(function () {
        $(".job__type").toggleClass("h100");
    });

    $(".click__profile").click(function () {
        $(".list__profile").toggleClass("d-block");
    });

    $("#slider").slider({
        min: 15000,
        max: 75000,
        step: 1000,
        values: [15000, 75000],
        slide: function (event, ui) {
            for (var i = 0; i < ui.values.length; ++i) {
                $("input.sliderValue[data-index=" + i + "]").val(ui.values[i]);
            }
        }
    });
    $("input.sliderValue").each(function () {
        var $this = $(this);
        $("#slider").slider("values", $this.data("index"), $this.val());
    });

    $("input.sliderValue").change(function () {
        var $this = $(this);
        $("#slider").slider("values", $this.data("index"), $this.val());
    });

    $(document).ready(function () {
        const slider_line = document.getElementById('slider_line');
        const slider_input = document.getElementById('slider_input');
        if (slider_input && slider_line) {
            function showSliderValue() {
                slider_line.style.width = slider_input.value + '%';
            }

            showSliderValue();

            window.addEventListener("resize", showSliderValue);
            slider_input.addEventListener('input', showSliderValue, false);
        }
    });

    // chosen
    $(".chosen-select").chosen({ allow_single_deselect: true, width: "100%" });

    // sumernote
    $(document).ready(function () {
        if ($('.summernote').length > 0) {
            $('.summernote').summernote({
                height: 200,
                disableHtml: true,
                toolbar: [
                    ['style', ['bold', 'italic', 'link', 'unlink', 'undo', 'redo', 'list']],
                    ['para', ['ul', 'ol', 'paragraph']],
                ],
            });
        }
    });

    // clone html
    $("#btnCloneExperience").on("click", function () {
        // Clone the div
        var html = $("#templateExperience").html();
        // Append the cloned div to the DOM
        $(html).insertBefore($("#btnCloneExperience"));
    });

    $("#btnCloneEducation").on("click", function () {
        // Clone the div
        var html = $("#templateEducation").html();
        // Append the cloned div to the DOM
        $(html).insertBefore($("#btnCloneEducation"));
    });

    $("#btnCloneAction").on("click", function () {
        // Clone the div
        var html = $("#templateAction").html();
        // Append the cloned div to the DOM
        $(html).insertBefore($("#btnCloneAction"));
    });

    $("#btnCloneInterest").on("click", function () {
        // Clone the div
        var html = $("#templateInterest").html();
        // Append the cloned div to the DOM
        $(html).insertBefore($("#btnCloneInterest"));
    });

    $("#btnCloneAdditionalInformation").on("click", function () {
        // Clone the div
        var html = $("#templateAdditionalInformation").html();
        // Append the cloned div to the DOM
        $(html).insertBefore($("#btnCloneAdditionalInformation"));
    });
    // end clone html

    $(document).on('click', '.close__card', function () {
        $(this).parent().remove();
    });

    // edit html
    $(document).on('click', '.edit-experience', function () {
        var _this = $(this);
        var id = $(this).attr('data-id');
        $.ajax("get-experience.php?id=" + id)
            .done(function (data) {
                $(_this).next().html(data);
            });
    });

    $(document).on('click', '.edit-education', function () {
        var _this = $(this);
        var id = $(this).attr('data-id');
        $.ajax("get-education.php?id=" + id)
            .done(function (data) {
                $(_this).next().html(data);
            });
    });

    $(document).on('click', '.edit-action', function () {
        var _this = $(this);
        var id = $(this).attr('data-id');
        $.ajax("get-action.php?id=" + id)
            .done(function (data) {
                $(_this).next().html(data);
            });
    });

    $(document).on('click', '.edit-additional-information', function () {
        var _this = $(this);
        var id = $(this).attr('data-id');
        $.ajax("get-additional-information.php?id=" + id)
            .done(function (data) {
                $(_this).next().html(data);
            });
    });

    $(document).on('click', '.edit-interest', function () {
        var _this = $(this);
        var id = $(this).attr('data-id');
        $.ajax("get-interest.php?id=" + id)
            .done(function (data) {
                $(_this).next().html(data);
            });
    });
    // end edit html

    $(document).on('click', '.btn.btn--add.save', function (event) {
        event.preventDefault();
        var _this = $(this);
        var form = $(this).parents('form').first();
        var data = $(form).serialize();
        var url = $(form).attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: data,
        }).done(function (data) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã lưu thành công!',
                showConfirmButton: false,
                timer: 1500
            });
            $(_this).parents('.experience-content').first().html(data);
        });
        return false;
    });

    $(document).on('click', '.btn.btn--add.delete', function (event) {
        event.preventDefault();
        var _this = $(this);
        var form = $(this).parents('form').first();
        var data = $(form).serialize();
        var url = "./delete_resumer.php";
        $.ajax({
            type: "POST",
            url: url,
            data: data,
        }).done(function (data) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã xóa thành công!',
                showConfirmButton: false,
                timer: 1500
            });
            $(_this).parents('.data__profile--detail.bg-light').first().remove();
        });
        return false;
    });

    $(document).on('change', '#file_cv', function getValueFromInput() {
        var inputField = document.getElementById('file_cv');
        var value = inputField.value;
        var showCV = document.getElementById('showCV');
        showCV.textContent = "Đã chọn tệp: " + value;
    })

    $(document).on('click', '.btn-delete.delete', function (event) {
        event.stopPropagation();
        event.preventDefault();

        Swal.fire({
            title: 'Bạn có chắc muốn xóa?',
            text: "Bạn không thể hoàn tác lại!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa!'
        }).then((result) => {
            if (result.isConfirmed) {
                var link = $(this).attr('href');
                window.location.href = link;
            } else {
                
            }
        });
    });

    $(document).on('click', '.btn--add.delete', function (event) {
        event.stopPropagation();
        event.preventDefault();

        Swal.fire({
            title: 'Bạn có chắc muốn xóa?',
            text: "Bạn không thể hoàn tác lại!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa!'
        }).then((result) => {
            if (result.isConfirmed) {
                var link = $(this).parents('form').first().attr('action');
                window.location.href = link;
                Swal.fire(
                    'Đã xóa!',
                    'Bạn đã xóa thành công.',
                    'success'
                );
                console.log(1);
            } else {
                Swal.fire(
                    'Chưa Xóa',
                    'Đã hủy.',
                    'error'
                );
            }
        });
    });

    // message ajax
    $(document).on('click', '.user_detail.ajax_mess', function (event) {
        event.preventDefault();
        var _this = $(this).parents(".mess__box").first();
        var link = $(this).attr('data-id');

        $.ajax("get_user_id.php?id=" + link).done(function (data) {
            $(_this).children().html(data);
            $('#messageChat').focus();
        });
    });

    setTimeout(function doSomething() {
        if ($("#chatMessage").length && $("#chatMessage").attr('data-chat-id')) {
            var chat_id = $("#chatMessage").attr('data-chat-id');
            if ($('.body-candidate').length) {
                $.ajax("ajax_candidate_chat.php?id=" + chat_id).done(function (data) {
                    $(".scroll_mess").append(data);
                });
            } else {
                $.ajax("ajax_employer_chat.php?id=" + chat_id).done(function (data) {
                    $(".scroll_mess").append(data);
                });
            }
        }
        setTimeout(doSomething, 3000);
    }, 3000);

    $(document).on('click', '.btn-mess', function (event) {
        event.preventDefault();
        var form = $(this).parents('form').first();
        var data = $(form).serialize();
        var url = $(form).attr('action');
        console.log(data);

        $.ajax({
            type: "POST",
            url: url,
            data: data,
        }).done(function (data) {
            $('.scroll_mess').append(data);
            $('#messageChat').val('');
        });
        return false;
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var profileLinks = document.querySelectorAll(".list__profile .link__profile");

    profileLinks.forEach(function (link) {
        if (link.href === window.location.href) {
            link.classList.add("color__green");
        }
    });

});

$(document).ready(function () {
    if (typeof $.fn.validate === 'function') {
        // validate
        $("#change__password").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "password": {
                    required: true,
                    minlength: 6
                },
                "re-password": {
                    equalTo: "#password",
                    minlength: 6
                }
            },
            messages: {
                "password": {
                    required: "<span class=\"err_validate\">Bắt buộc nhập Password</span>",
                    minlength: "<span class=\"err_validate\">Hãy nhập ít nhất 6 ký tự</span>"
                },
                "re-password": {
                    equalTo: "<span class=\"err_validate\">Hai password phải giống nhau</span>",
                    minlength: "<span class=\"err_validate\">Hãy nhập ít nhất 6 ký tự</span>"
                }
            }
        });
    }

    var typedElement = document.querySelector('.typed');

    if (typedElement) {
        var typed2 = new Typed(typedElement, {
            strings: ["First sentence.", "Second sentence."],
            typeSpeed: 100,
            backSpeed: 100,
            fadeOut: true,
            loop: true
        });
    }


    $('.single-item').slick();


    $('.center').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3,
        speed: 300,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });

});





