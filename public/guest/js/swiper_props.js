function homeSliderInit() {
  const homeSliderProps = {
    className: '.home_slider_section__',
    effect: "fade",
    slidesPerColumn: 1,
    spaceBetween: 0,
    speed: 3000,
    observer: true,
    observeParents: true,
    loop:true,
  }

  swiperInit(homeSliderProps)
}

function healthCareServicesSwiperInit() {
  const healthCareServicesSwiperBreakNormalPoints = {
    0: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  };

  const healthCareServicesSliderSectionProps = {
    className: '.health_care_services_section',
    breakpoints: healthCareServicesSwiperBreakNormalPoints,
    spaceBetween: 30,
    autoplay: false,
  };

  swiperInit(healthCareServicesSliderSectionProps)
}