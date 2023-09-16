import './bootstrap';
import 'flowbite';
import Swiper from "swiper";
import { Navigation } from 'swiper/modules';
import Alpine from 'alpinejs';
import Focus from '@alpinejs/focus'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'

// import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';


Alpine.plugin(Focus)
Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(NotificationsAlpinePlugin)

window.Alpine = Alpine;

Alpine.start();

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

    on: {
        slideChange: function() {
            const currentIndex = this.realIndex;
            const currentSlide = this.slides[currentIndex];
            currentSlide.classList.add('vv-slide-played');
        }
    },
});
