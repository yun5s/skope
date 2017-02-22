/**
 * Created by Jamal on 2/18/2017.
 */
// Get the modal
var modal = $('#single-img-modal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('#modal-image-1');
var modalImg = $('#single-img');
var captionText = $('#caption');
img.on('click', function () {
    modal.css('display', 'block');
    modalImg.attr('src', this.src);
    captionText.html(this.alt);
    $('body').css('overflow', 'hidden');
});

// Get the <span> element that closes the modal
var close = $(".close");

close.on('click', function () {
    modal.css('display', 'none');
    $('body').css('overflow', 'auto');
});

var VModal = $('#single-video-modal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var VImg = $('#modal-image-2');
var modalVideo = $('#single-video');
var VCaptionText = $('#caption');
var videoUrl = VImg.data('video');
var sourceHtml = '<source src="' + videoUrl +'" type="video/webm"><source src="'+ videoUrl +'" type="video/mkv">Your browser does not support the video tag.';
VImg.on('click', function () {
    VModal.css('display', 'block');
    modalVideo.html(sourceHtml);
    VCaptionText.html(this.alt);
    $('body').css('overflow', 'hidden');
});

// Get the <span> element that closes the modal
var VClose = $(".close");

VClose.on('click', function () {
    VModal.css('display', 'none');
    modalVideo[0].load();
    $('body').css('overflow', 'auto');
});