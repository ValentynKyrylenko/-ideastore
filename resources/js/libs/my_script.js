/**
 * Created by kyrylenko on 23.04.2015.
 */
$(document).ready(function() {
    /** Bootstrap image class**/
    //$('img').not('.static').addClass('img-thumbnail');
    /** Light Box**/
    $('.img-thumbnail').click(function(evt) {
        var imgPath, newImage;
        //get path to new image
        imgPath = $(this).attr('src');

        //create HTML for new image, set opacity
        // also callback for when image loads
        $img = $('<img src="' + imgPath +'">').css('opacity',0).load(displayImage);


        //don't follow link
        evt.preventDefault();
        //don't let event go up page
        evt.stopPropagation();
    }); // end click

    function displayImage() {
        // add overlay
        $('<div id="overlay"><div id="photo"></div></div>').prependTo('body');
        // select photo div
        $photoDiv = $('#photo');
        //add to the #photo div
        $photoDiv.append($img);

        // position image
        $photoDiv.css({marginLeft : ($img.outerWidth()/2) * -1, marginTop : ($img.outerHeight()/2) * -1});
        //fade in new image
        $img.animate({opacity: 1}, 1000);
    }

    /** Light Box**/
    //$('html').on('click',function(evt) {
    //    var $overlay = $('#overlay');
    //    if (evt.target == $overlay.get(0)) {
    //        $overlay.remove();
    //    }
    //});
    //
    //
    //$('.slick_slide').slick({
    //    dots: true,
    //    speed: 500,
    //    autoplay: true,
    //    autoplaySpeed: 2000,
    //    fade: true,
    //    cssEase: 'linear'
    //});

    $('div.alert').delay(2500).slideUp(300);/** Flash massege**/


    $('#editor1' ).ckeditor();

    $('select').select2();


    $('#data_table').DataTable();/** DataTables**/

    //------------------------------------------------------Carusel---------------------------------------//
    var topoffset = 50; //variable for menu height
    var slideqty = $('#featured .item').length;
    var wheight = $(window).height(); //get the height of the window
    var randSlide = Math.floor(Math.random()*slideqty);

    $('#featured .item').eq(randSlide).addClass('active');


    $('.fullheight').css('height', wheight); //set to window tallness


    //replace IMG inside carousels with a background image
    $('#featured .item img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
    });

    //adjust height of .fullheight elements on window resize
    $(window).resize(function() {
        wheight = $(window).height(); //get the height of the window
        $('.fullheight').css('height', wheight); //set to window tallness
    });



    //Activate Scrollspy
    $('body').scrollspy({
        target: 'header .navbar',
        offset: topoffset
    });

    // add inbody class
    var hash = $(this).find('li.active a').attr('href');
    if(hash !== '#featured') {
        $('header nav').addClass('inbody');
    } else {
        $('header nav').removeClass('inbody');
    }


    // Add an inbody class to nav when scrollspy event fires
    $('.navbar-fixed-top').on('activate.bs.scrollspy', function() {
        var hash = $(this).find('li.active a').attr('href');
        if(hash !== '#featured') {
            $('header nav').addClass('inbody');
        } else {
            $('header nav').removeClass('inbody');
        }
    });


    //Use smooth scrolling when clicking on navigation
    $('.navbar a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') ===
            this.pathname.replace(/^\//,'') &&
            location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top-topoffset+2
                }, 500);
                return false;
            } //target.length
        } //click function
    }); //smooth scrolling

    //Automatically generate carousel indicators
    for (var i=0; i < slideqty; i++) {
        var insertText = '<li data-target="#featured" data-slide-to="' + i + '"';
        if (i === randSlide) {
            insertText += ' class="active" ';
        }
        insertText += '></li>';
        $('#featured ol').append(insertText);
    }

    $('.carousel').carousel({
        pause: false
    });




}); /** Document Ready**/
