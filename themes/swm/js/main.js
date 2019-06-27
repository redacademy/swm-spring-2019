jQuery(document).ready(function ($) {

    //Search functionality for navigation
    $('.fa-search').click(function () {
        $('.search-field').slideToggle('slow');
    });


    document.addEventListener('wpcf7mailsent', function (event) {
        location = 'http://localhost:3000/lessons/startsWithMe/thank-you/';
    }, false);


});