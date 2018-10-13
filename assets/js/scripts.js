$(document).foundation();

$(document).ready(function() {

    //Function to create Slick Slide with Progress Bar
    function slickSliderProgressBar($slide, time, param){
        var progressContainer = '<div class="slider-progress-container"><div class="slider-progress"><div class="progress"></div></div><div class="paging-info"></div></div>';

        var dots  = $('.slick-dots');

        var $bar,
            isPause,
            tick,
            percentTime;

        // Init Slick: Append progress bar & paging info
        $slide.on('init', function(event, slick, currentSlide, nextSlide){
            $slide.append(progressContainer);
            var i = (currentSlide ? currentSlide : 0) + 1;
            $slide.find('.paging-info').text('0'+ i + '/' + '0'+ slick.slideCount);
        });

        // Update paging
        $slide.on('reInit afterChange', function(event, slick, currentSlide, nextSlide){
            var i = (currentSlide ? currentSlide : 0) + 1;
            $slide.find('.paging-info').text('0'+ i + '/' + '0'+ slick.slideCount);
        });

        //Default Param
        param['slide'] = '.slide-item';
        
        // Build Slick
        $slide.slick(param);
    
        $bar = $slide.find('.slider-progress .progress');
        
        // Pause progress bar when hover
        $slide.on({
            mouseenter: function() {
                isPause = true;
            },
            mouseleave: function() {
                isPause = false;
            }
        });

        $('.slick-dots').on('click', function() {
            startProgressbar();
        });
    
        function startProgressbar() {
            resetProgressbar();
            percentTime = 0;
            isPause = false;
            tick = setInterval(interval, 10);
        }
    
        function interval() {
            if(isPause === false) {
                percentTime += 1 / (time+0.1);
                $bar.css({
                    width: percentTime+"%"
                });
                if(percentTime >= 100){
                    $slide.slick('slickNext');
                    startProgressbar();
                }
            }
        }  
    
        function resetProgressbar() {
            $bar.css({
                width: 0+'%' 
            });
            clearTimeout(tick);
        }
    
        startProgressbar();
    }


    // Main Slider
    var $slide1 = $('.main-slider');
    var time1 = 5;
    var param1 = {
        arrows: true,
        dots: true
    };

    slickSliderProgressBar($slide1, time1, param1 );
  
    // News Slider
    var $slide2 = $('.news-slider');
    var time2 = 4;
    var param2 = {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        asNavFor: '.news-slider-nav'
    };

    slickSliderProgressBar($slide2, time2, param2 );

    // News Slider Nav
    $('.news-slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.news-slider',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        vertical: true,
        verticalSwiping: true
    });

    // Industry Slider
    var $slide3 = $('.industry-slider');
    var time3 = 4;
    var param3 = {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                centerMode: false,
              }
            }
        ]
    };

    slickSliderProgressBar($slide3, time3, param3 );


    //Social Share Scroll
    $(window).scroll(function(){
        var dark_pos = $('section.bg-black').offset().top;
        var dark_height = $('section.bg-black').height();
        var social_share = $('#social-share').offset().top;
        var scroll = $(window).scrollTop();
    
        if(social_share > dark_pos && social_share < (dark_pos + dark_height)) {
            $('#social-share').addClass('menu_black');
            $('#social-share').removeClass('menu_white');
        }
        else {
            $('#social-share').removeClass('menu_black');
            $('#social-share').addClass('menu_white');
        }
    
    })



    // Hide Header on on scroll down
    /*
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }
    */

    // Scroll to Top
    $(document).on('click', 'a[rel="slideTo"]', function(e) {
        var id = $(this).attr('href');    
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }
        e.preventDefault();
        var pos = $id.offset().top;
        $('body, html').animate({scrollTop: pos});
    });

    // Mobile Menu
	$('#open-menu').on('click', function(e) {
        e.preventDefault();
        $('#mobile-menu').toggleClass('open');
        $(this).toggleClass('active');
    });

    //Parallax
    $('.parallax').paroller();
    $('.paroller').paroller();


    //Open Bio
    $('.board-grid-item').on('click', '.open-bio', function(e){
        e.preventDefault();
        var $board_item = $('.board-grid-item');
        var $board_bio = $('.board-bio-item');
        var this_board_bio = $(this).attr('href');
        var $this_board_bio = $(this_board_bio);
        var $headerHeight = $('.site-header').height() + 10;

        $board_bio.hide();
        $this_board_bio.show();
        $board_item.show();
        $(this).closest('.board-grid-item').hide();

        var pos = $this_board_bio.offset().top - $headerHeight;
        $('body, html').animate({scrollTop: pos});      
    });

    //Close Bio Button
    $('.board-bio-item').on('click', '.close', function(e){
        e.preventDefault();
        id = $(this).attr('href');
        $id = $(id);
        $id.show();
        $(this).closest('.board-bio-item').hide();
    });
});



