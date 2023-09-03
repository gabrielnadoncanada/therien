// logo slider js
import Swiper from 'swiper';
// import Swiper styles
import 'swiper/css';
let Sliders = document.querySelectorAll(
    '.slider'
);

console.log(Sliders);
[...Sliders].forEach((singleSlide) => {
    const swiperSliderDiv = singleSlide.querySelector(
        '.slider-container'
    );

    // slider id
    const sliderId = swiperSliderDiv.dataset.id;

    // slider options
    const deskItems = swiperSliderDiv.dataset.desktop;
    const tabItems = parseInt(swiperSliderDiv.dataset.tablet);
    const phoneItems = parseInt(swiperSliderDiv.dataset.mobile);

    const deskSpace = parseInt(swiperSliderDiv.dataset.deskspace);
    const tabSpace = parseInt(swiperSliderDiv.dataset.tabspace);
    const phoneSpace = parseInt(swiperSliderDiv.dataset.phonespace);

    const autoplay = JSON.parse(swiperSliderDiv.dataset.autoplay);
    const autoplayDelay = parseInt(swiperSliderDiv.dataset.autoplaydelay);
    const autoplayDirection = JSON.parse(
        swiperSliderDiv.dataset.autoplaydirection
    );
    const pauseOnHover = JSON.parse(swiperSliderDiv.dataset.pauseonhover);

    const autoplayOptions = autoplay
        ? {
            delay: autoplayDelay,
            reverseDirection: autoplayDirection,
            pauseOnMouseEnter: pauseOnHover,
            disableOnInteraction: false,
        }
        : false;

    const speed = parseInt(swiperSliderDiv.dataset.speed);
    const loop = JSON.parse(swiperSliderDiv.dataset.loop);
    const keyboard = JSON.parse(swiperSliderDiv.dataset.keyboard);
    const mousewheel = JSON.parse(swiperSliderDiv.dataset.mousewheel);
    const parallax = swiperSliderDiv.dataset.parallax ? JSON.parse(swiperSliderDiv.dataset.parallax) : false;
    const autoHeight = JSON.parse(swiperSliderDiv.dataset.autoheight);
    const nextEl = swiperSliderDiv.dataset.nextel;
    const prevEl = swiperSliderDiv.dataset.prevel;
    const width =  swiperSliderDiv.dataset.width;


    console.log(width)

    // pagination options
    const showPagination = JSON.parse(swiperSliderDiv.dataset.pagination);
    const paginationClass = singleSlide.querySelector('.slider-pag');

    const paginationOptions = showPagination
        ? {
            el: paginationClass,
            clickable: showPagination,
        }
        : false;

    // navigation options
    const showNav = JSON.parse(swiperSliderDiv.dataset.navigation);
    const prevNav = singleSlide.querySelector('.slider-prev');
    const nextNav = singleSlide.querySelector('.slider-next');

    let navigationOptions = showNav
        ? {
            nextEl: nextNav,
            prevEl: prevNav,
        }
        : false;


    if(nextEl && prevEl) {
        navigationOptions = {
            nextEl: nextEl,
            prevEl: prevEl,
        }
    }

    const direction = swiperSliderDiv.getAttribute('dir')

    let args = {
        pagination: paginationOptions,
        navigation: navigationOptions,
        slidesPerView: deskItems,
        spaceBetween: deskSpace,
        autoplay: autoplayOptions,
        speed,
        loop,
        keyboard,
        mousewheel,
        autoHeight,
        parallax,
        breakpoints: {
            320: {
                slidesPerView: phoneItems,
                spaceBetween: phoneSpace,
            },

            601: {
                slidesPerView: tabItems,
                spaceBetween: tabSpace,
            },

            992: {
                slidesPerView: deskItems,
                spaceBetween: deskSpace,
            },
        },
    };


    width ? args.width = width : null;

    console.log(args)
    if(direction === 'vertical') {
        args.direction = 'vertical'
    }

    const slider = new Swiper(`#${sliderId}`, args);
});
