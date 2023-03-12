import { HeroSlider } from './modules/hero-slider.js';
import { addStickyClassToHeader, spinImageOnScroll, replaceSelectDropdown, closeAnnouncementBar, openCloseMobileMenu } from './modules/modules.js';

//activate hero slider
const slider = new HeroSlider('.js-hero-slider', '.js-hero-slider-dots', 6000);

//activate sticky header
addStickyClassToHeader( 'header.header' );

//activate submark iamge spinner
spinImageOnScroll( '.submark__image--spin' );

// Find all select elements on the page
const selectElements = document.getElementsByTagName('select');

// Loop through the select elements and replace each one with a custom select element
for (let i = 0; i < selectElements.length; i++) {
    replaceSelectDropdown(selectElements[i]);
}

// Find the Gravity Form container element
var formContainer = document.querySelector('.gform_wrapper');

// Create a MutationObserver to watch for changes to the container element
var observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {

        if (mutation.addedNodes.length) {
            for (let i = 0; i < selectElements.length; i++) {
                replaceSelectDropdown(selectElements[i]);
            }
        }
    });
});
// Configure the MutationObserver to watch for childList changes to the container element
var observerConfig = { childList: true };
// Start observing the container element for changes
observer.observe(formContainer, observerConfig);

// close announcement bar
closeAnnouncementBar('.header__announcement-bar');

// open and close mobile menu
openCloseMobileMenu('.header__mobile');