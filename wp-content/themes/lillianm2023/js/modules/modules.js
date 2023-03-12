export function addStickyClassToHeader(headerDOM) {

    const header = document.querySelector(headerDOM);
    const headerHeight = header.offsetHeight;

    window.addEventListener('scroll', function() {

        const scrollPosition = window.scrollY;

        if (scrollPosition >= headerHeight) {
            header.classList.add('header--sticky');
        } else {
            header.classList.remove('header--sticky');
        }
    });
}

export function spinImageOnScroll(imageDOM) {

    const images = document.querySelectorAll(imageDOM);

    window.addEventListener('scroll', function() {

        const scrollPosition = window.scrollY;

        images.forEach(image => {

            const isVisible = isInViewport(image);

            if (isVisible) {

                const rotationAngle = scrollPosition * 0.5;

                image.style.transform = `rotate(${rotationAngle}deg)`;
            }
        });
    });
}


function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top - 60 >= 0 &&
        rect.left - 60 >= 0 &&
        rect.bottom - 60 <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right - 60 <= (window.innerWidth || document.documentElement.clientWidth)
    );
}


export function replaceSelectDropdown(selectElement) {

    const customSelect = document.createElement('div');

    customSelect.classList.add('custom-select');

    const selectedOption = document.createElement('span');

    selectedOption.classList.add('selected-option', 'default-selection');
    selectedOption.textContent = selectElement.options[selectElement.selectedIndex].textContent;
    customSelect.appendChild(selectedOption);

    const optionsList = document.createElement('ul');

    optionsList.classList.add('options-list');
    optionsList.style.display = 'none';

    for (let i = 0; i < selectElement.options.length; i++) {
        const option = selectElement.options[i];
        const optionItem = document.createElement('li');

        optionItem.textContent = option.textContent;
        optionItem.dataset.value = option.value;

        optionItem.addEventListener('click', () => {
            selectedOption.textContent = optionItem.textContent;
            selectElement.selectedIndex = i;
            selectElement.dispatchEvent(new Event('change'));
            optionsList.style.display = 'none';

            const selectedItemValue = optionItem.getAttribute('data-value');

            if(!selectedItemValue) {
                selectedOption.classList.add('default-selection');
            } else {
                selectedOption.classList.remove('default-selection');
            }
        });

        optionsList.appendChild(optionItem);
    }

    customSelect.appendChild(optionsList);

    selectElement.style.display = 'none';

    selectElement.parentNode.insertBefore(customSelect, selectElement.nextSibling);

    selectedOption.addEventListener('click', () => {
        optionsList.style.display = optionsList.style.display === 'none' ? 'block' : 'none';
    });
}

export function closeAnnouncementBar(dom) {
    const barDom = document.querySelector(dom);
    const btn = document.querySelector('.js-close-bar');

    if( !barDom && !btn ) {
        return;
    }

    btn.addEventListener('click', (event) => {
        barDom.remove();
    });
}

export function openCloseMobileMenu(dom) {
    const menuDom = document.querySelector(dom);
    const btnOpen = document.querySelector('.js-open-mobile-menu');
    const btnClose = document.querySelector('.js-close-mobile-menu');
    const html = document.querySelector('html');

    if( !menuDom && !btnOpen && !btnClose ) {
        return;
    }

    btnOpen.addEventListener('click', (event) => {
        menuDom.classList.add('active');
        html.classList.add('mobile-menu-active');
    });

    btnClose.addEventListener('click', (event) => {
        menuDom.classList.remove('active');
        html.classList.remove('mobile-menu-active');
    });
}

export function scrollToElement() {

    const links = document.querySelectorAll('a[href^="#"]');

    if (!links) {
        return;
    }

    links.forEach((link) => {

        // Add a click event listener to the link
        link.addEventListener("click", (event) => {

            // Prevent the default link behavior
            event.preventDefault();

            const href = event.target.closest('a').getAttribute("href");
            const section = document.querySelector(href);
            
            const stickyHeaderHeight = document.querySelector('.header--sticky');

            if(event.target.closest('.active')) {
                event.target.closest('.active').classList.remove('active');
                document.querySelector('html').classList.remove('mobile-menu-active');
            }

            if (!section && !stickyHeaderHeight) {
                return;
            }

            // Calculate the distance to scroll
            const sectionTop = section.offsetTop;
            const currentOffset = window.pageYOffset;

            const isAboveCurrentPosition  = sectionTop < window.pageYOffset;
            const distanceToScroll = isAboveCurrentPosition ?  sectionTop - window.pageYOffset : sectionTop - window.pageYOffset;

            // Set up the scroll animation
            let startTime = null;
            const duration = 1000;

            function scrollAnimation(currentTime) {
                if (startTime === null) {
                    startTime = currentTime;
                }

                const timeElapsed = currentTime - startTime;
                const scrollAmount = Math.easeInOutQuad(
                    timeElapsed,
                    currentOffset,
                    distanceToScroll,
                    duration
                );

                window.scrollTo(0, scrollAmount);

                if (timeElapsed < duration) {
                    requestAnimationFrame(scrollAnimation);
                }
            }

            // Start the scroll animation
            requestAnimationFrame(scrollAnimation);
        });
    });
}

// Easing function
Math.easeInOutQuad = function(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
};