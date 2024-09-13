import "../css/style.scss"

import $ from 'jquery';

// Our modules / classes
import GoogleMap from "./modules/GoogleMap";
import TeamBio from "./modules/TeamBio";
import FAQ from "./modules/Faqs";
import Headroom from "./modules/Headroom";
import MenuHover from "./modules/MenuHover";

// standard function components
import "./modules/BeforeAfter";
import "./modules/Lazyload";
import "./modules/BurgerMenu";
import "./modules/Checkbox";
import "./modules/slick";

// Instantiate a new object using our modules/classes
const googleMap = new GoogleMap();
const teamBio = new TeamBio();
const faq = new FAQ();
const menu = new MenuHover();

// call any auxillary functions
(function() {
    // check if headroom works on the browser and then add sticky to the navigation

    if (Headroom.cutsTheMustard) {
        // scroll depth before function kicks in and hides nav. Stops bug where if someone nudges their mouse to scroll, navigation disappears even if the scroll depth is a few px
        const options = {
            offset : 142
        }

        const stickyNav = new Headroom(document.querySelector('.headroom-nav'), options);

        stickyNav.init();
    }

    // slick initalise
    $('#review-mosaic-slider.has-slides').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    });
})();