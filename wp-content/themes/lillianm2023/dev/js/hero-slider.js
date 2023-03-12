export class HeroSlider {
    constructor(containerSelector, dotsContainer, interval = 5000) {
        this.slides = document.querySelectorAll(`${containerSelector} > div`);
        this.dotsContainer = document.querySelector(dotsContainer);
        this.slideIndex = 0;
        this.interval = interval;
        // Create dots and add click listeners
        for (let i = 0; i < this.slides.length; i++) {
            const dot = document.createElement('div');
            dot.classList.add('hero-slider__dot');
            this.dotsContainer.appendChild(dot);
            dot.addEventListener('click', () => {
                this.showSlide(i);
            });
        }
        // Add dot navigation to the slider
        const sliderContainer = document.querySelector(containerSelector);
        // Show the first slide and dot
        this.showSlide(this.slideIndex);
        // Start the auto slide interval
        this.startInterval();
    }
    showSlide(index) {
        // Hide all slides and dots
        for (let i = 0; i < this.slides.length; i++) {
            this.slides[i].classList.remove('active');
            this.dotsContainer.children[i].classList.remove('active');
        }
        // Show the selected slide and dot
        this.slides[index].classList.add('active');
        this.dotsContainer.children[index].classList.add('active');
        this.slideIndex = index;
    }
    startInterval() {
        this.intervalId = setInterval(() => {
            // Move to the next slide and dot
            this.slideIndex = (this.slideIndex + 1) % this.slides.length;
            // Show the new slide and dot
            this.showSlide(this.slideIndex);
        }, this.interval);
    }
    stopInterval() {
        clearInterval(this.intervalId);
    }
}