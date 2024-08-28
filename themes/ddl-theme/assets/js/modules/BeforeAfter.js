import $ from 'jquery';

$('#slider').on('input change', function(e) {
    const $parent = $(this).closest('.image-container');
    let value = $(this).val(); // Get the current slider value
    let width = value + '%'; // Convert it to a percentage

    // Update the clip-path of the after image to reveal the desired amount
    $parent.find('.after-image').css('clip-path', `inset(0 ${100 - value}% 0 0)`);

    // Update the position of the slider button
    $parent.find('.slider-button').css('left', `calc(${width} - 10px)`);
});