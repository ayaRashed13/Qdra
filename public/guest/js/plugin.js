jQuery(document).ready(function ($) {
  AOS.init();
  lazyLoad();
  showPassword($);
  collapseFooterMenusInSmallScreens($);
  toggleSideMenuInSmallScreens($);
  stickyHeader($);
  verificationCodeSeprate();
  selectPIckerInit($);
  // customDropdownSelectAction();
  uploadProfilePhoto();
  chatScrollDirectionDown();
  verificationTimer();
  mixItUpInit();
  headerSearch();
  allWebsiteSlidersInit();
  changeFileInputName()
});

// functions init
function selectPIckerInit($) {
  $(".selectpicker").selectpicker();
}

function lazyLoad() {
  const images = document.querySelectorAll(".lazy-omd");

  const optionsLazyLoad = {
    //  rootMargin: '-50px',
    // threshold: 1
  };

  const preloadImage = function (img) {
    img.src = img.getAttribute("data-src");
    img.onload = function () {
      img.parentElement.classList.remove("loading-omd");
      img.parentElement.classList.add("loaded-omd");
      img.parentElement.parentElement.classList.add("lazy-head-om");
    };
  };

  const imageObserver = new IntersectionObserver(function (enteries) {
    enteries.forEach(function (entery) {
      if (!entery.isIntersecting) {
        return;
      } else {
        preloadImage(entery.target);
        imageObserver.unobserve(entery.target);
      }
    });
  }, optionsLazyLoad);

  images.forEach(function (image) {
    imageObserver.observe(image);
  });
}

function swiperInit(options) {
  // console.log(options);
  const swiper = new Swiper(options.className + " .swiper-container", {
    spaceBetween: 30,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    rtl: $("html").attr("dir") === "rtl" ? true : false,
    pagination: {
      el: options.className + " .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: options.className + " .swiper-button-next",
      prevEl: options.className + " .swiper-button-prev",
    },
    breakpoints: options.breakpoints,
    observer: options.observer,
    observeParents: options.observeParents,
    grid: options.grid,
    ...options,
  });

  lazyLoad();

  return swiper;
}

function verificationCodeSeprate() {
  const inputElements = [...document.querySelectorAll("input.code-input")];

  inputElements.forEach((ele, index) => {
    ele.addEventListener("keydown", (e) => {
      // if the keycode is backspace & the current field is empty
      // focus the input before the current. The event then happens
      // which will clear the input before the current
      if (e.keyCode === 8 && e.target.value === "") {
        inputElements[Math.max(0, index - 1)].focus();
      }
    });
    ele.addEventListener("input", (e) => {
      if (e.target.value === "") {
        inputElements[index].classList = "code-input";
      } else {
        inputElements[index].classList = "code-input active";
      }

      // take the first character of the input
      // this actually breaks if you input an emoji like 👨‍👩‍👧‍👦....
      // but I'm willing to overlook insane security code practices.
      const [first, ...rest] = e.target.value;
      e.target.value = first ?? ""; // the `??` '' is for the backspace usecase
      const lastInputBox = index === inputElements.length - 1;
      const insertedContent = first !== undefined;
      if (insertedContent && !lastInputBox) {
        // continue to input the rest of the string
        inputElements[index + 1].focus();
        inputElements[index + 1].value = rest.join("");
        inputElements[index + 1].dispatchEvent(new Event("input"));
      }
    });
  });
}

function showPassword($) {
  $(".show-password-button-om").on("click", function (e) {
    e.preventDefault();

    if ($(this).parent().find("input").attr("type") == "text") {
      $(this).parent().find("input").attr("type", "password");
      $(this).removeClass("show-om");
    } else {
      $(this).parent().find("input").attr("type", "text");
      $(this).addClass("show-om");
    }
  });
}

function collapseFooterMenusInSmallScreens($) {
  if ($(window).width() <= 991) {
    $(".collapse-head-om").on("click", function (e) {
      e.preventDefault();

      $(".collapse-head-om")
        .not(this)
        .parent()
        .find(".list-collapse-om")
        .slideUp();
      $(this)
        .parent()
        .find(".list-collapse-om")
        .slideToggle({
          queue: false,
          complete: function () {
            $(".list-collapse-om").each(function () {
              if ($(this).css("display") == "none") {
                $(this).parent().removeClass("active");
              } else {
                $(this).parent().addClass("active");
              }
            });
          },
        });
    });
  }
}

function toggleSideMenuInSmallScreens($) {
  // nav men activation
  $("#menu-butt-activ-om").on("click", function (e) {
    e.preventDefault();

    $("#navbar-menu-om").addClass("active-menu");
    $(".overlay").addClass("active");
    $("body").addClass("overflow-body");
  });

  // nav men close
  $(".close-button__ , .overlay ").on("click", function (e) {
    e.preventDefault();
    $("#navbar-menu-om").removeClass("active-menu");
    $(".overlay").removeClass("active");
    $("body").removeClass("overflow-body");
  });
}

function stickyHeader($) {
  let headerHeight = $("header").outerHeight();

  $("header").innerHeight(headerHeight);

  let lastScroll = 0;
  $(document).on("scroll", function () {
    let currentScroll = $(this).scrollTop();
    // side links 
    if(currentScroll > headerHeight + 500 || screen.width < 500) {
      $(".side_links_section").addClass("active");
    } else {
      $(".side_links_section").removeClass("active");
    }

    // scroll down
    if (currentScroll < lastScroll && currentScroll > headerHeight + 500) {
      // add class avtive menu
      $(".fixed_header__").addClass("active_menu__");
      $(".fixed_header__").removeClass("not_active_menu__");
    } else if (
      currentScroll > lastScroll &&
      currentScroll > headerHeight + 500
    ) {
      // scroll up
      if ($(".fixed_header__").hasClass("active_menu__")) {
        $(".fixed_header__").removeClass("active_menu__");
        $(".fixed_header__").addClass("not_active_menu__");
      }
    } else {
      $(".fixed_header__").removeClass("active_menu__");
      $(".fixed_header__").removeClass("not_active_menu__");
    }
    lastScroll = currentScroll;
  });

  $(".arrow_button__").click(() => {
    $(".side_links_section").removeClass("active");
  });
}

function allWebsiteSlidersInit() {
  homeSliderInit();
  healthCareServicesSwiperInit();
}

function uploadProfilePhoto() {
  let uploadProfilePhotoInput = document.querySelector(
    ".upload_profile_photo_input"
  );
  if (!uploadProfilePhotoInput) {
    return;
  }

  uploadProfilePhotoInput.addEventListener(
    "change",
    function () {
      const reader = new FileReader();
      reader.onload = function () {
        $(".provider_profile_img_uploaded").attr("src", `${reader.result}`);
        $(".provider_img_block").removeClass("none_before_shape");
        $(".upload_profile_photo_label_overlay__").addClass("uploaded");
      };

      reader.readAsDataURL(uploadProfilePhotoInput.files[0]);
    },
    false
  );
}

function chatScrollDirectionDown() {
  let messageBody = document.querySelector(".chat_content__");
  if (!messageBody) {
    return;
  }

  messageBody.scrollTop = messageBody.scrollHeight;
}

function verificationTimer() {
  let verificationPage = document.getElementById("verification_page__");
  if (!verificationPage) return;
  let sendCodeAgainButton = document.getElementById("send_code_again_button__");
  let countdown = document.querySelector(".timer__");
  let counter = countdown.getAttribute("timerValueInSeconds");
  let progress = document.querySelector(".progress__");
  sendCodeAgainButton.disabled = true;

  let countdownInterval = setInterval(function () {
    counter--;
    let progressWidth =
      100 - (counter / countdown.getAttribute("timerValueInSeconds")) * 100;
    let minutes = Math.floor(counter / 60);
    let seconds = counter % 60;

    progress.style.width = progressWidth + "%";

    countdown.innerHTML = `${minutes < 10 ? "0" + minutes : minutes} : ${
      seconds < 10 ? "0" + seconds : seconds
    }`;

    if (counter <= 0) {
      clearInterval(countdownInterval);
      sendCodeAgainButton.disabled = false;
    }
  }, 1000);
  $("#send_code_again_button__").on("click", function () {
    verificationTimer();
  });
}

function mixItUpInit() {
  let specialtiesMixItUpElement = document.getElementById(
    "specialties_box_list"
  );

  if (specialtiesMixItUpElement) {
    mixitup(specialtiesMixItUpElement, {
      selectors: {
        control: ".specialties_filter_control",
        target: ".specialties_filter_item",
      },
    });
  }

  $(".filter").each((index, element) => {
    if (index === 0) element.click();
  });
}

function headerSearch() {
  $(".close_search_btn, #search_box .overlay__, #header_search_btn").click(() =>
    $("#search_box").toggleClass("active")
  );
}


function changeFileInputName() {
  $('.upload_input__').change(function(e) {
    let parentElement = e.target.closest('.upload_file_label__')
    let filePlaceholder = parentElement.querySelector('.label_placeholder__');
    filePlaceholder.innerHTML = e.target.files[0].name;
    filePlaceholder.classList.add("uploaded")
  })
}