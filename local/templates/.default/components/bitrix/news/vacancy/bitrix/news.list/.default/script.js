document.addEventListener('DOMContentLoaded', function () {
    var citySlider = new Swiper('.vacancy-city__slider', {
        slidesPerView: 1,
        simulateTouch: false,
        effect: 'fade',
        speed: 1000,
        parallax: true,
        fadeEffect: {
            crossFade: true
        },
        // direction: 'vertical',
        pagination: {
            el: '.vacancy__citys',
            clickable: true,
            bulletClass: 'vacancy__city',
            bulletActiveClass: 'vacancy__city_active',
            renderBullet: function (index, className) {
                var name = document.querySelectorAll('.vacancy-slide')[index].dataset.name;
                return '<div class="' + className + '">' + (name) + '</div>';
            }
        }
    })
    var vacancyItemSlider = new Swiper('.vacancy-slide__slider', {
        slidesPerView: 3,
        spaceBetween: 55,
        parallax: true,
        autoplay: true,
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            480: {
                slidesPerView: 1
            }
        }
    })
});
