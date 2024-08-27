(function () {
    const sliderContainer = document.querySelector("[data-sliderContainer]"),
        sliderThumbnailContainer = document.querySelector(
            "[data-sliderThumbnailContainer]"
        );

    const thumbnails = new Swiper(sliderThumbnailContainer, {
        spaceBetween: 16,
        slidesPerView: 3,
        freeMode: false,
        watchSlidesProgress: true,
        grabCursor: true,
        mousewheel: true,
        breakpoints: {
            480: {
                slidesPerView: 4,
            },
            640: {
                slidesPerView: 5,
            },
            768: {
                slidesPerView: 6,
            },
        },
    });

    const swiper = new Swiper(sliderContainer, {
        grabCursor: true,
        mousewheel: true,
        spaceBetween: 16,
        thumbs: {
            swiper: thumbnails,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
})();
