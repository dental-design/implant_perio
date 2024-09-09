import $ from 'jquery';

class MenuHover {

    // constructor
    constructor() {
        this.body = $('body');
        this.nav = $('#site-nav');
        this.navItems = $('#site-nav .has-children');
        this.overlay = $('.body-overlay');

        this.toggle = false;

        this.events();
    }

    // event handlers
    events() {
        this.navItems.on('mouseenter', this.navEnter.bind(this));
        this.nav.on('mouseleave', this.navLeave.bind(this));
    }

    // methods
    navEnter(e) {
        if ($(window).width() > 1100 && this.nav.offset().top !== 0) {
            if (!this.toggle) {
                this.body.addClass('locked');
                this.overlay.addClass('active-nav');

                this.toggle = true;
            }
        }
    }

    navLeave(e) {
        if ($(window).width() > 1100 && this.navOffsetTop !== 0) {
            if (this.toggle) {
                this.body.removeClass('locked');
                this.overlay.removeClass('active-nav');

                this.toggle = false;
            }
        }
    }
}

export default MenuHover;