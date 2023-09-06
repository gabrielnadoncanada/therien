// logo slider js
let Sliders = document.querySelectorAll(
    '.slider'
);


[...Sliders].forEach((singleSlide) => {
    const swiperSliderDiv = singleSlide.querySelector(
        '.slider-container'
    );

    // slider id
    const sliderId = swiperSliderDiv.dataset.id;

    // slider options
    const deskItems = swiperSliderDiv.dataset.desktop;
    const tabItems = swiperSliderDiv.dataset.tablet;
    const phoneItems = swiperSliderDiv.dataset.mobile;

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
    const nextEl = JSON.parse(swiperSliderDiv.dataset.nextel);
    const prevEl = JSON.parse(swiperSliderDiv.dataset.prevel);
    const width = JSON.parse(swiperSliderDiv.dataset.width);




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


    if (nextEl && prevEl) {
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
                slidesPerView: 1,
                spaceBetween: phoneSpace,
            },

            601: {
                slidesPerView: 1,
                spaceBetween: tabSpace,
            },

            992: {
                slidesPerView: 1,
                spaceBetween: deskSpace,
            },
        },
    };


    width ? args.width = width : null;


    if (direction === 'vertical') {
        args.direction = 'vertical'
    }

    const slider = new Swiper(`#${sliderId}`, args);

    window.slider = window.slider || {};
    window.slider[sliderId] = slider;

});
