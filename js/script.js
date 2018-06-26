// jQuery.fn.animateAuto = function(prop, speed, callback){
//     var elem, height, width;
//     return this.each(function(i, el){
//         el = jQuery(el), elem = el.clone().css({"height":"auto","width":"auto"}).appendTo("body");
//         height = elem.css("height"),
//             width = elem.css("width"),
//             elem.remove();
//
//         if(prop === "height")
//             el.animate({"height":height, "opacity": "1"}, speed, callback);
//         else if(prop === "width")
//             el.animate({"width":width}, speed, callback);
//         else if(prop === "both")
//             el.animate({"width":width,"height":height}, speed, callback);
//     });
// };
$(document).on('click', '#flex-menu', function () {
    if ($('.search-result-block-filter-main-sub-area').attr('attr') != 'Y') {
        $('.search-result-block-filter-main-sub-area').animate({
            "height" : "1105",
            "opacity" : "1"
        });
        $('#gl-arrows').css({
            'transform': 'rotate(180deg)'
        });
        $('.search-result-block-filter-main-sub-area').attr('attr', 'Y')
    } else {
        $('.search-result-block-filter-main-sub-area').animate({
            'height': '0',
            'opacity': '0'
        });
        $('#gl-arrows').css({
            'transform': 'rotate(360deg)'
        });
        $('.search-result-block-filter-main-sub-area').attr('attr', 'N')
    }
});
$(document).on('click', '.b-add__item-r-dropdown', function () {
    if ($('.color-palette').attr('attr') != 'Y') {
        $('.color-palette').animate({
            'height': '60'
        },200);
        $('#dropdown-btn-glyphicon').css({
            'transform': 'rotate(180deg)'
        });
        $('.dropdown-btn-color').css({
            'background-color':'#e2f5fc'
        });
        $('.color-palette').attr('attr', 'Y')
    } else {
        $('.color-palette').animate({
            'height': '30'
        },200);
        $('#dropdown-btn-glyphicon').css({
            'transform': 'rotate(360deg)'
        });
        $('.dropdown-btn-color').css({
            'background-color':'#fff'
        });
        $('.color-palette').attr('attr', 'N')
    }
});
$(document).on('click', '#flex-text-detail', function () {
    var height = $('.detail-element-description-auto').innerHeight();
    var heightInner = $('.detail-element-description-auto-inner').innerHeight();
    if (height == '150'){
        $('.detail-element-description-auto').animate({
            height : heightInner
        });
        $('#flex-text-detail').html('Свернуть');
    }else {
        $('.detail-element-description-auto').animate({
            height : '150'
        });
        $('#flex-text-detail').html('Показать всё');
    }
});
$(document).ready(function () {
    $(".dropdown-menu a").click(function(){
        var selText = $(this).text();
        $(this).parents('.dropdown').find('.dropdown-toggle').html('<div class="characteristic-type">'+selText+'</div>'+' <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>');
    });
    $(".dropdown-menu a").click(function(){
        var selText = $(this).text();
        $(this).parents('.dropdown').find('.dd-select').html('<span class="year-select">'+selText+'</span>'+' <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>');
    });
    $('.dd-select').dropdown();
    // $('.custom-checkbox').prop('indeterminate', true);

    jQuery('#selectLocation').on('click', function (e) {
        $(this).next().toggle();
    });
    jQuery('.dropdown-menu.keep-open').on('click', function (e) {
        e.stopPropagation();
    });

    if(1) {
        $('body').attr('tabindex', '0');
    }
    else {
        alertify.confirm().set({'reverseButtons': true});
        alertify.prompt().set({'reverseButtons': true});
    }
    // $('#color-help').dropdown();
    // $('.search-result-item-model').hover(function() {
    //     $(this).find('.dropdown-menu').stop(true, true).fadeIn(100);
    // }, function() {
    //     $(this).find('.dropdown-menu').stop(true, true).fadeOut(100);
    // });

});
$(function () {
    $('.color-auto').popover({
        trigger: 'hover'
    })
});
$(function () {
    $(document).on('click', '.detail-card-item-nav-menu li', function() {
        var data = $(this).attr('data-attr');
        $(document).find('.detail-card-item-nav-menu li').removeClass('active');
        $(this).addClass('active');
        $(document).find('.detail-card-item-characteristic-inner').removeClass('active');
        return $(document).find('.detail-card-item-characteristic-inner[data-attr="' + data + '"]').addClass('active');
    });
});
$(function () {
    $('#btn-modal-registration').on('click', function () {
        $('.modal-registration').modal();
    })
});
$(document).ready(function() {
    $('.stock-search-filter-header').on('click',
        function() {
            $('.stock-search-filter-body').slideToggle("fast");
            if ($('.stock-search-filter-body').attr('attr') == 'close') {
                $('#gl-arrows').css({
                    'transform': 'rotate(360deg)'
                });
                $('.stock-search-filter-body').attr('attr', 'open')
            }else{
                $('#gl-arrows').css({
                    'transform': 'rotate(180deg)'
                });
                $('.stock-search-filter-body').attr('attr', 'close')
            }
        }
    );
});
$(function () {
    $('#template-save-auto').on('click', function () {
        $('.template-modal-save-auto').modal();
    });
});
$(document).ready(function() {
    $('.gl-arrows-bar').on('click', function() {
        getID = $(this).attr('data-id');
        console.log(getID);
        $('.filter-area[data-id="'+getID+'"]').slideToggle(300);
        $('.filter-bar-menu[data-id="'+getID+'"]').toggleClass('open');
        if($('.filter-bar-menu[data-id="'+getID+'"]').hasClass('open')) {
            $(this).css({
                'transform': 'rotate(180deg)'
            });
        }else{
            $(this).css({
                'transform': 'rotate(360deg)'
            });
        }
        return false;
    });
});
$(document).ready(function () {
    $('.add-archive').on('click', function () {
        $('.modal-registration').modal();
    });
});
$(document).ready(function () {
   var inW = $('.mobile-menu').innerWidth();
   var inWx2 = $('.mobile-menu').innerWidth() * 2;
   var ouH = $('.main-options').outerHeight();
   var ouHx2 = $('.main-options').outerHeight() + $('.mobile-profile ').outerHeight();
    $('.mobile-profile').css({
        transform: 'translate3d('+inW+'px, -'+ouH+'px, 0)'
    });
    $('.mobile-menu-swap').css({
        transform: 'translate3d(-'+inW+'px, -'+ouHx2+'px, 0)'
    });
   $('#profileBtn').on('click', function () {
       $('.nav-btn-mm').removeClass('active');
       $('.main-options').css({
           transform: 'translate3d(-'+inW+'px, 0, 0)'
       });
       $('.mobile-profile').css({
           opacity: '1',
           transform: 'translate3d(0px, -'+ouH+'px, 0)'
       });
       $('.mobile-menu-swap').css({
           opacity: '1',
           transform: 'translate3d(-'+inWx2+'px, -'+ouHx2+'px, 0)'
       });
       $(this).addClass('active');
   });
    $('#searchBtn').on('click', function () {
        $('.nav-btn-mm').removeClass('active');
        $('.mobile-profile').css({
            opacity: '1',
            transform: 'translate3d('+inW+'px, -'+ouH+'px, 0)'
        });
        $('.main-options').css({
            transform: 'translate3d(0, 0, 0)'
        });
        $('.mobile-menu-swap').css({
            opacity: '1',
            transform: 'translate3d(-'+inW+'px, -'+ouHx2+'px, 0)'
        });
        $(this).addClass('active');
    });
    $('#menuBtn').on('click', function () {
        $('.nav-btn-mm').removeClass('active');
        $('.mobile-profile').css({
            opacity: '1',
            transform: 'translate3d('+inWx2+'px, -'+ouH+'px, 0)'
        });
        $('.main-options').css({
            transform: 'translate3d('+inW+'px, 0, 0)'
        });
        $('.mobile-menu-swap').css({
            opacity: '1',
            transform: 'translate3d(0, -'+ouHx2+'px, 0)'
        });
        $(this).addClass('active');
    });
    /*swiper*/
    $('.main-options').swipe({
        swipeLeft: function () {
            $('.nav-btn-mm').removeClass('active');
            $(this).css({
                transform: 'translate3d(-'+inW+'px, 0, 0)'
            });
            $('.mobile-profile').css({
                opacity: '1',
                transform: 'translate3d(0px, -'+ouH+'px, 0)'
            });
            $('.mobile-menu-swap').css({
                opacity: '1',
                transform: 'translate3d(-'+inWx2+'px, -'+ouHx2+'px, 0)'
            });
            $('#profileBtn').addClass('active')
        },
        swipeRight: function () {
            $('.nav-btn-mm').removeClass('active');
            $('.mobile-profile').css({
                opacity: '1',
                transform: 'translate3d('+inWx2+'px, -'+ouH+'px, 0)'
            });
            $('.main-options').css({
                transform: 'translate3d('+inW+'px, 0, 0)'
            });
            $('.mobile-menu-swap').css({
                opacity: '1',
                transform: 'translate3d(0, -'+ouHx2+'px, 0)'
            });
            $('#menuBtn').addClass('active')
        }
    });
    $('.mobile-menu-swap').swipe({
        swipeLeft: function () {
            $('.nav-btn-mm').removeClass('active');
            $('.mobile-profile').css({
                opacity: '1',
                transform: 'translate3d('+inW+'px, -'+ouH+'px, 0)'
            });
            $('.main-options').css({
                transform: 'translate3d(0, 0, 0)'
            });
            $('.mobile-menu-swap').css({
                opacity: '1',
                transform: 'translate3d(-'+inW+'px, -'+ouHx2+'px, 0)'
            });
            $('#searchBtn').addClass('active')
        },
    });
    $('.mobile-profile').swipe({
        swipeRight: function () {
            $('.nav-btn-mm').removeClass('active');
            $('.mobile-profile').css({
                opacity: '1',
                transform: 'translate3d('+inW+'px, -'+ouH+'px, 0)'
            });
            $('.main-options').css({
                transform: 'translate3d(0, 0, 0)'
            });
            $('.mobile-menu-swap').css({
                opacity: '1',
                transform: 'translate3d(-'+inW+'px, -'+ouHx2+'px, 0)'
            });
            $('#searchBtn').addClass('active')
        }
    })
});