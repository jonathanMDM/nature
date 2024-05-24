document.addEventListener('DOMContentLoaded', function () {
    let swiper = new Swiper('.swiper', {
        // Configure Swiper to your needs
        duraction:3000,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
});
