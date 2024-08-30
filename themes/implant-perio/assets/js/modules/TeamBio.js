import $ from 'jquery';

class TeamBio {

    // constructor
    constructor() {
        this.teamCards = $('.team-member-card');
        this.closeIcon = $('.bio-close-icon');
        this.overlay = $('.team-member-bios');

        this.teamToggle = false;

        this.events();
    }

    // event handlers
    events() {
        this.teamCards.on('click', this.activateBio.bind(this));
        this.closeIcon.on('click', this.iconClose.bind(this));
        this.overlay.on('click', this.overlayClose.bind(this));
        
        $(document).on('keydown', this.keyClose.bind(this));
    }

    // methods
    activateBio(e) {
        if (this.teamToggle) {
            return;
        }

        const data = e.target.closest('.team-member-card').dataset;
        const bio = $(`.team-member-bio-card[data-team="${ data['team'] }"]`);

        bio.addClass('active');
        this.overlay.addClass('active');
        $('body').addClass('bio-locked');

        this.teamToggle = true;
    }

    overlayClose(e) {
        if (!this.teamToggle || !$(e.target).is(this.overlay)) {
            return;
        }

        this.hideBio(e);
    }

    keyClose(e) {
        if (e.keyCode != 27 || !this.teamToggle) {
            return;
        }

        this.hideBio(e);
    }

    iconClose(e) {
        if (!this.teamToggle) {
            return;
        }

        this.hideBio(e);
    }

    hideBio(e) {
        const bioCard = $('.team-member-bio-card.active');

        bioCard.removeClass('active');
        this.overlay.removeClass('active');
        $('body').removeClass('bio-locked');

        this.teamToggle = false;
    }
}

export default TeamBio;