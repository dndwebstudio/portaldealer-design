// Generated by CoffeeScript 1.12.4
(function() {
  var htmlSpecialChar_decode;

  $.fn.jewDream = function() {
    var $active_now, initGalery;
    $active_now = false;
    if (!$('body>div').is('#jewDreamGalleryArea')) {
      $('body').append('<div id="jewDreamGalleryArea"></div>');
      $active_now = true;
    }
    $(this).on('click', function() {
      var $bxItemID, $isUser, $startedPicture, $userID, csrf;
      console.log('1');
      $bxItemID = $(this).attr('data-id');
      $startedPicture = $(this).attr('data-photo');
      csrf = $(this).attr('data-csrf');
      $isUser = false;
      $userID = false;
      if ($(this).attr('data-type') === "user") {
        $isUser = true;
        $userID = $(this).attr('data-uid');
      }
      $.ajax({
        url: "/ajax/jew_dream_get_gallery/",
        type: "POSt",
        data: {
          itemID: $bxItemID,
          user: $isUser,
          userID: $userID,
          csrfmiddlewaretoken: csrf
        },
        beforeSend: function() {
          return initGalery();
        },
        success: function(data) {
          var $area, $navLine;
          $area = $(document).find('div#jewDreamGalleryArea');
          if (data) {
            data = JSON.parse(htmlSpecialChar_decode(data));
            $navLine = 0;
            data.forEach(function(el, i) {
              $area.find('.jdga_gs_mian_slider').append('<img data-ind="' + (i + 1) + '" src="' + el['full'] + '" data-id="' + el['id'] + '"/>');
              return $area.find('.jdga_gs_mirror_slider_inner').append('<li data-ind="' + (i + 1) + '" data-id="' + el['id'] + '"><img src="' + el['resize'] + '"/></li>');
            });
            if ($startedPicture) {
              $area.find('.jdga_gs_mian_slider>img').each(function() {
                if ($(this).attr('data-id') === $startedPicture) {
                  $(this).addClass('activeJD');
                  return $area.find('.jdga_gs_mirror_slider_inner').find('li[data-id="' + $(this).attr('data-id') + '"]').addClass('activeJD');
                }
              });
            } else {
              $area.find('.jdga_gs_mian_slider>img').eq(0).addClass('activeJD');
              $area.find('.jdga_gs_mirror_slider_inner').find('li[data-id="' + $area.find('.jdga_gs_mian_slider>img').eq(0).attr('data-id') + '"]').addClass('activeJD');
            }
            return $area.find('.jdga_gallery_preloader').animate({
              opacity: 0
            }, 250, function() {
              $(document).find('.jdga_gallery').removeClass('jdga_gallery_onLoad');
              $(this).css({
                display: 'none'
              });
              $area.find('.jdga_gallery_sliders').css({
                display: 'block',
                opacity: 0
              });
              $area.find('.jdga_gs_mirror_slider_inner>li').each(function() {
                var $lastWidth;
                $(this).attr('data-prevWidth', $navLine);
                $navLine += parseInt($(this).innerWidth()) + 16;
                $lastWidth = parseInt($(this).innerWidth()) + 16;
                return $(this).attr('data-postWidth', $navLine);
              });
              if ($navLine > $area.find('.jdga_gs_mirror_slider_out').innerWidth()) {
                $area.find('.jdga_gs_mirror_slider_inner').css({
                  width: $navLine + "px"
                });
              }
              $area.find('.jdga_gs_mirror_slider_inner').attr({
                "data-width": $navLine
              });
              return $area.find('.jdga_gallery_sliders').animate({
                opacity: 1
              }, 250);
            });
          } else {
            return $area.html("");
          }
        }
      });
      return false;
    });
    if ($active_now) {
      $(document).on('click', '.jdga_gs_close', function() {
        var $area;
        $area = $(document).find('div#jewDreamGalleryArea');
        return $area.find('.jdga_gallery').animate({
          opacity: 0
        }, 250, function() {
          return $area.html('');
        });
      });
      $('body').keydown(function(eventObject) {
        if ($('.jdga_gs_close').is('div')) {
          if (eventObject.which === 27) {
            return $(document).find('.jdga_gs_close').trigger('click');
          }
        }
      });
      $(document).on('click', '.jdga_gallery_onLoad', function() {
        return $(document).find('.jdga_gs_close').trigger('click');
      });
      $(document).on('click', '.jdga_gs_mian_prev, .jdga_gs_mian_next', function() {
        var $actSlide, $area, $ind, $nextSlide;
        $area = $(document).find('div#jewDreamGalleryArea');
        $actSlide = $area.find('.jdga_gs_mian_slider>img.activeJD');
        $ind = $actSlide.attr('data-ind');
        if ($(this).hasClass('jdga_gs_mian_prev')) {
          $ind = parseInt($ind) - 1;
          if ($ind < 1) {
            $ind = $area.find('.jdga_gs_mian_slider>img').eq(-1).attr('data-ind');
          }
        } else {
          $ind = parseInt($ind) + 1;
          console.log($ind);
        }
        if (!$area.find('.jdga_gs_mian_slider>img[data-ind="' + $ind + '"]').is('img')) {
          $nextSlide = $area.find('.jdga_gs_mian_slider>img[data-ind="1"]');
        } else {
          $nextSlide = $area.find('.jdga_gs_mian_slider>img[data-ind="' + $ind + '"]');
        }
        return $actSlide.animate({
          opacity: 0
        }, 150, function() {
          var $miniElemPost, $miniElemPrev, $outWidth, $scrollLeft, $thisLeft;
          $area.find('.jdga_gs_mirror_slider_inner').find('li[data-id="' + $actSlide.attr('data-id') + '"]').removeClass('activeJD');
          $actSlide.removeClass('activeJD');
          $nextSlide.css({
            opacity: 0
          });
          $nextSlide.addClass('activeJD');
          $area.find('.jdga_gs_mirror_slider_inner').find('li[data-id="' + $nextSlide.attr('data-id') + '"]').addClass('activeJD');
          $nextSlide.animate({
            opacity: 1
          }, 150);
          $thisLeft = parseInt($area.find('.jdga_gs_mirror_slider_inner').css('left').replace("px", "").replace("-", ""));
          $outWidth = parseInt($area.find('.jdga_gs_mirror_slider_out').innerWidth());
          $miniElemPrev = $area.find('.jdga_gs_mirror_slider_inner').find('li.activeJD').attr('data-prevWidth');
          $miniElemPost = $area.find('.jdga_gs_mirror_slider_inner').find('li.activeJD').attr('data-postWidth');
          $scrollLeft = false;
          if ($miniElemPrev < $thisLeft) {
            $scrollLeft = parseInt($miniElemPrev);
          } else if ($miniElemPost > ($outWidth + $thisLeft)) {
            $scrollLeft = parseInt($miniElemPost) - $outWidth;
          }
          if ($scrollLeft >= 0) {
            return $area.find('.jdga_gs_mirror_slider_inner').animate({
              left: "-" + $scrollLeft + "px"
            }, 200);
          }
        });
      });
      $(document).on('click', '.jdga_gs_mirror_slider_inner>li', function() {
        var $actSlide, $area, $nextSlide;
        $area = $(document).find('div#jewDreamGalleryArea');
        $actSlide = $area.find('.jdga_gs_mian_slider>img.activeJD');
        $nextSlide = $area.find('.jdga_gs_mian_slider>img[data-id="' + $(this).attr('data-id') + '"]');
        return $actSlide.animate({
          opacity: 0
        }, 150, function() {
          $area.find('.jdga_gs_mirror_slider_inner').find('li[data-id="' + $actSlide.attr('data-id') + '"]').removeClass('activeJD');
          $actSlide.removeClass('activeJD');
          $nextSlide.css({
            opacity: 0
          });
          $nextSlide.addClass('activeJD');
          $area.find('.jdga_gs_mirror_slider_inner').find('li[data-id="' + $nextSlide.attr('data-id') + '"]').addClass('activeJD');
          return $nextSlide.animate({
            opacity: 1
          }, 150);
        });
      });
      $(document).on('click', '.jdga_gs_mirror_prev, .jdga_gs_mirror_next', function() {
        var $area, $ind, $outWidth, $scrollLeft, $thisLeft, $thisWidth;
        $area = $(document).find('div#jewDreamGalleryArea');
        if (parseInt($area.find('.jdga_gs_mirror_slider_inner').innerWidth()) > parseInt($area.find('.jdga_gs_mirror_slider_out').innerWidth())) {
          $scrollLeft = 0;
          $thisWidth = parseInt($area.find('.jdga_gs_mirror_slider_inner').innerWidth());
          $thisLeft = parseInt($area.find('.jdga_gs_mirror_slider_inner').css('left').replace("px", "").replace("-", ""));
          $outWidth = parseInt($area.find('.jdga_gs_mirror_slider_out').innerWidth());
          if ($(this).hasClass('jdga_gs_mirror_prev')) {
            $ind = false;
            $area.find('.jdga_gs_mirror_slider_inner>li').each(function() {
              if ($(this).attr('data-prevWidth') < $thisLeft) {
                return $ind = $(this).attr('data-ind');
              }
            });
            if ($ind) {
              if ($ind > 1) {
                $ind = parseInt($ind) - 1;
              }
              $scrollLeft = $area.find('.jdga_gs_mirror_slider_inner>li[data-ind="' + $ind + '"]').attr('data-prevWidth');
            } else {
              $scrollLeft = false;
            }
          } else {
            $ind = false;
            $area.find('.jdga_gs_mirror_slider_inner>li').each(function() {
              if ($(this).attr('data-postWidth') > ($thisLeft + $outWidth) && !$ind) {
                return $ind = $(this).attr('data-ind');
              }
            });
            if ($ind) {
              if ($area.find('.jdga_gs_mirror_slider_inner>li[data-ind="' + (parseInt($ind) + 1) + '"]').is('li')) {
                $ind = parseInt($ind) + 1;
              }
              $scrollLeft = parseInt($area.find('.jdga_gs_mirror_slider_inner>li[data-ind="' + $ind + '"]').attr('data-postWidth')) - $outWidth;
            } else {
              $scrollLeft = false;
            }
          }
          console.log($scrollLeft);
          if ($scrollLeft >= 0) {
            return $area.find('.jdga_gs_mirror_slider_inner').animate({
              left: "-" + $scrollLeft + "px"
            }, 200);
          }
        }
      });
      $(window).resize(function() {
        var $area, $navLine, sliderHeight, winHeight;
        $area = $(document).find('div#jewDreamGalleryArea');
        winHeight = window.innerHeight;
        sliderHeight = winHeight - 140;
        $area.find('.jdga_gs_mian').css({
          height: sliderHeight + "px"
        });
        $navLine = parseInt($area.find('.jdga_gs_mirror_slider_inner').attr('data-width'));
        if ($navLine > $area.find('.jdga_gs_mirror_slider_out').innerWidth()) {
          return $area.find('.jdga_gs_mirror_slider_inner').css({
            width: $navLine + "px"
          });
        } else {
          return $area.find('.jdga_gs_mirror_slider_inner').css({
            width: '100%',
            left: 0
          });
        }
      });
    }
    return initGalery = function() {
      var $area, sliderHeight, winHeight;
      $area = $(document).find('div#jewDreamGalleryArea');
      $area.append('<div class="jdga_gallery jdga_gallery_onLoad"> <div class="jdga_gallery_backLayout"></div> <div class="jdga_gallery_preloader"> <div class="jdga_gallery_preloader_item child"></div> <div class="helper"></div> </div> <div class="jdga_gallery_sliders"> <div class="jdga_gs_mian"> <div class="jdga_gs_close">&#10006;</div> <div class="jdga_gs_mian_slider"> </div> <div class="jdga_gs_mian_prev"> <div class="child"></div> <div class="helper"></div> </div> <div class="jdga_gs_mian_next"> <div class="child"></div> <div class="helper"></div> </div> </div> <div class="jdga_gs_mirror"> <div class="jdga_gs_mirror_slider"> <div class="jdga_gs_mirror_slider_out"> <ul style="left: 0px;" class="jdga_gs_mirror_slider_inner"></ul> </div> </div> <div class="jdga_gs_mirror_prev"> <div class="child"></div> <div class="helper"></div> </div> <div class="jdga_gs_mirror_next"> <div class="child"></div> <div class="helper"></div> </div> </div> </div> </div>');
      winHeight = window.innerHeight;
      sliderHeight = winHeight - 140;
      return $area.find('.jdga_gs_mian').css({
        height: sliderHeight + "px"
      });
    };
  };

  htmlSpecialChar_decode = function(value) {
    return value.replace(/&amp;/g, "&").replace(/&lt;/g, "<").replace(/&gt;/g, ">").replace(/&quot;/g, "\"").replace(/&#039;/g, "'");
  };

}).call(this);
