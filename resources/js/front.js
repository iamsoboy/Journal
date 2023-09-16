import './bootstrap';
import 'flowbite';
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import Alpine from 'alpinejs';

// import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';

window.Alpine = Alpine;

Alpine.start();
Swiper.use([Autoplay, Navigation, Pagination]);

// Hero Slider
const swiperHeroSlider = new Swiper('.js-vv-hero-swiper', {
    slidesPerView: 1,
    loop: true,
    loopedSlides: 3,
    centeredSlides: true,
    spaceBetween: 20,
    speed: 500,

    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.js-vv-hero-swiper-btn-next',
        prevEl: '.js-vv-hero-swiper-btn-prev',
    },

    pagination: {
        el: '.swiper-pagination'
    },

    on: {
        slideChange: function() {
            const currentIndex = this.realIndex;
            const currentSlide = this.slides[currentIndex];
            currentSlide.classList.add('vv-slide-played');
        }
    },
});
