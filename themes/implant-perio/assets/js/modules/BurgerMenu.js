import $ from 'jquery';

$(document).ready(function() {
    let navToggle = false;

    $('#hamburger').on('click', e => {
        $('#hamburger').toggleClass('is-active');
        $('body').toggleClass('locked-mobile-nav');
        $('#site-nav').toggleClass('active');
        $('.body-overlay').toggleClass('active-nav-mobile');
    
        // check for window resize. If resize is greater than 1000px, close the mobile nav
        if (!navToggle) {
            const resizeListener = () => {
                if (window.innerWidth > 1000) {
                    closeNav();
        
                    $(window).off('resize', resizeListener); 
                }
            };

            $(window).on('resize', resizeListener);
        }

        navToggle = true;
    });
    
    // open sub nav items
    $('.open-nav-click').on('click', e => {
        if (window.innerWidth <= 1000) {
            const parent = e.target.closest('li');
    
            parent.querySelector('.children').classList.add('active');
        }
    });
    
    // close sub nav items
    $('.close-nav-click').on('click', e => {
        if (window.innerWidth <= 1000) {
            const parent = e.target.closest('ul');
    
            parent.classList.remove('active');
        }
    });
    
    // close mobile nav if clicking outside of the navigation
    $('.body-overlay').on('click', e => closeNav());
    
    // reuseable close nav function
    function closeNav (e) {
        $('#hamburger').removeClass('is-active');
        $('body').removeClass('locked-mobile-nav');
        $('#site-nav').removeClass('active');
        $('.body-overlay').removeClass('active-nav-mobile');

        navToggle = false;
    }
});


