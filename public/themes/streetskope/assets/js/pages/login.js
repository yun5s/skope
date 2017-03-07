/**
 * Created by Jamal on 2/22/2017.
 */
$(document).ready(function () {
    var headerCircle = $('.header-circle.logo');
    var logoSrc = 'url('+headerCircle.data('image')+')';
    headerCircle.css('background-image', logoSrc);
});