import $ from 'jquery';

$('.checkbox-wrapper .checkbox-check, .checkbox-check-text').click(function() {
    $('.checkbox-check').toggleClass('checked');

    if ($('.contact-form-checkbox').checked != true) {
        $(".contact-form-checkbox").checked = true;
    } else {
        $(".contact-form-checkbox").checked = false;
    }
});