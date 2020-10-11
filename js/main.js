$(function() {
    'use strict';

    $(document).ready(function() {
        const minus = $('.quantity__minus');
        const plus = $('.quantity__plus');
        const input = $('.quantity__input');
        minus.click(function(e) {
          e.preventDefault();
          var value = input.val();
          if (value > 1) {
            value--;
          }
          input.val(value);
        });
        
        plus.click(function(e) {
          e.preventDefault();
          var value = input.val();
          value++;
          input.val(value);
        })
      });

    $('.index-caro').owlCarousel({
        loop:true,
        rtl: true,
        nav: true,
        margin: 25,
        dots:false,
        navText:["",""],
        autoplay:true,
        autoplayTimeout:5000,
        responsive: {
            0: {
                items: 1
            },
        }
    });

    $('.for-job .owl-carousel').owlCarousel({
        rtl: true,
        nav: false,
        dots: false,
        navText: ["", ""],
        margin: 25,
        autoplay:true,
        responsive: {
            0: {
                items: 4
            },
        }
    });
   
    $('.opinions .owl-carousel').owlCarousel({
        rtl: true,
        nav: false,
        dots:true,
        margin: 25,
        responsive: {
            1280: {
                items: 4
            },
            1024: {
                items: 3
            },
            768: {
                items: 2
            },
            567: {
                items: 1
            }
        }
    });

    $('.partenars .owl-carousel').owlCarousel({
        rtl: true,
        nav: false,
        dots: false,
        margin: 25,
        responsive: {
            0: {
                items: 4
            },
        }
    });
 
    $('.logintab').click(function () {
        $('.pillsstyle li').toggleClass("active");
    
    });

    $('.new-account').click(function () {
        $('.signup,.login').toggleClass('none');

    });
    $('.login-btn').click(function () {
        $('.signup,.login ').toggleClass('none');

    });
    $('.forget-pass').click(function () {
        $('.login ,.forgetpass').toggleClass('none');

    });

    $('.login-btn2').click(function () {
        $('.forgetpass,.login ').toggleClass('none');

    });
    $('.order-now').click(function () {
        $('.forgetpass,.passcode ').toggleClass('none');

    });



    $('.span-style').hover(function () {
        $(this).children().children().toggleClass('remove');
        $(this).toggleClass('change-color');

    });
    // more link
    $('.more').click(function () {
        $(this).parent().find("p").removeClass('paragraph-lines');
        $(this).remove();

    });

    $(document).ready(function () {
        $('#emailpassword').on('submit', function (e) {
            $('#resetpass').modal('show');
            e.preventDefault();
        });
    });

    $(document).ready(function () {
        $('#codepass').on('submit', function (e) {
            $('#newresetpass').modal('show');
            e.preventDefault();
        });
    });

    $(document).ready(function () {
        $('#newpass').on('submit', function (e) {
            $('#resetpass , #newresetpass ,#newpass ,#forgetpass').modal('hide');
            e.preventDefault();
        });
    });


    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
    return $star_rating.each(function() {
        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
        return $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
        return $(this).removeClass('fa-star').addClass('fa-star-o');
        }
    });
    };

    $star_rating.on('click', function() {
    $star_rating.siblings('input.rating-value').val($(this).data('rating'));
    return SetRatingStar();
    });

    SetRatingStar();
    $(document).ready(function() {

    });

    // $("header ul.navbar-nav li").click(function (ee){
    //     // ee.preventDefault();
    //     $(this).addClass('active').siblings().removeClass('active');
    // });


    // $('.our-news .owl-nav .owl-prev, .our-news .owl-nav .owl-next').empty();

    // $('.various').fancybox({
    //     padding : 10,
    //     openEffect  : 'fade'
    // });

    // $(".nicescroll-box").niceScroll(".wrap",{cursorcolor:"#15222e",cursorwidth:"8px",background:"rgba(97,97,97,0.5)",cursorborder:"1px solid #afafaf",autohidemode:'leave'});

});

// function PreviewImage() {
//     var oFReader = new FileReader();
//     oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

//     oFReader.onload = function (oFREvent) {
//         document.getElementById("uploadPreview").src = oFREvent.target.result;
//     };
// };
function previewImages() {

    var preview = document.querySelector('#preview');

    if (this.files) {
        [].forEach.call(this.files, readAndPreview);
    }

    function readAndPreview(file) {

        // Make sure `file.name` matches our extensions criteria
        if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
        } // else...

        var reader = new FileReader();

        reader.addEventListener("load", function () {
            var image = new Image();
            image.height = 100;
            image.title = file.name;
            image.src = this.result;
            preview.appendChild(image);
        });

        reader.readAsDataURL(file);

    }
    // $(window).scroll(function () {
    //     var $heightScrolled = $(window).scrollTop();
    //     var $defaultHeight = 300;

    //     if ($heightScrolled < $defaultHeight) {
    //         $('#mynav').addClass("back-color")
    //     } else {
    //         $('#mynav').removeClass("back-color")
    //     }

    // });

}

document.querySelector('#file-input').addEventListener("change", previewImages);

