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

    $('#accordion').accordion();/** Jquery UI**/


    $('#data_table').DataTable();/** DataTables**/

        // handle jQuery plugin naming conflict between jQuery UI and Bootstrap
    $.widget.bridge('uibutton', $.ui.button);
    $.widget.bridge('uitooltip', $.ui.tooltip);

}); /** Document Ready**/
