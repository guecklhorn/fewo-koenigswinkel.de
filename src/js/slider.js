;(function () {
    const sliderContainer = document.querySelector('[data-sliderContainer]')

    const swiper = new Swiper(sliderContainer, {
        autoHeight: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        spaceBetween: 16,
        autoplay: {
            delay: 5000,
        },
    })
})()
