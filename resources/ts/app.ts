import './header';
import './faq';
import './privacy-policy';

import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/autoplay';

function initTestimonialSwiper() {
    const element = document.querySelector('.testimonialSwiper');

    if (!element) return;

    if ((element as HTMLElement).dataset.initialized) return;

    (element as HTMLElement).dataset.initialized = 'true';

    new Swiper('.testimonialSwiper', {
        modules: [Autoplay],
        slidesPerView: 3,
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 20 },
            768: { slidesPerView: 2, spaceBetween: 25 },
            1200: { slidesPerView: 3, spaceBetween: 30 },
        },
    });
}

document.addEventListener('DOMContentLoaded', initTestimonialSwiper);
document.addEventListener('livewire:navigated', initTestimonialSwiper);