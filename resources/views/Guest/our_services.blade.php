<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Qdra</title>

    <link rel="website icon" href="{{ asset("guest/images/logo.png") }}" />
    <link rel="stylesheet" href="{{ asset("guest/css/all.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("guest/css/animate.min.css") }}" />
    <!-- ############ include only in Arabic pages ############  -->
    <link rel="stylesheet" href="{{ asset("guest/css/bootstrap-rtl.min.css") }}" />
    <!-- #######################################################  -->
    <!-- ########### include only in English pages ############  -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- #######################################################  -->
    <link rel="stylesheet" href="{{ asset("guest/css/bootstrap-select.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("guest/css/jquery.fancybox.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("guest/css/swiper.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("guest/css/aos.css") }}" />
    <link rel="stylesheet" href="{{ asset("guest/css/style.css") }}" />
  </head>

  <body>
    <!-- Start Side Links Section -->
    <section class="side_links_section">
      <ul class="links_wrapper__">
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/call.svg") }}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/what's_up.svg") }}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/snap_chat.svg") }}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/facebook.svg") }}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/instagram.svg") }}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/twitter_old.svg") }}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/tiktok.svg") }}" alt="" />
          </a>
        </li>
      </ul>
      <div class="arrow_button__">
        <i class="fa-solid fa-chevron-left"></i>
      </div>
    </section>
    <!-- End Side Links Section -->

    <!-- start header  -->

    <header class="main_header__">
      <div class="top_header__">
        <div class="container">
          <div class="lang_wrapper__">
            <div class="lang__ dropdown__">
              <a class="lang_link__ butt__" href="#!">
                <figure class="figure__">
                  <img src="{{ asset("guest/images/shapes/global.svg") }}" alt="" />
                </figure>
                العربية
              </a>
              <ul class="sub-menu__">
                <li><a href="index.html">العربية</a></li>
                <li><a href="index_en.html">English</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="fixed_header__">
        <div class="container">
          <div class="header_content__">
            <a class="header_logo__" href="index.html">
              <figure class="figure__">
                <img src="{{ asset("guest/images/logo.png") }}" alt=".." />
              </figure>
            </a>

            <nav class="nav-om" id="navbar-menu-om">
              <button class="close-button__"></button>

              <figure class="figure__ nav_logo__">
                <img src="{{ asset("guest/images/logo.png") }}" alt=".." />
              </figure>

              <ul class="nav-list-om list-unstyled">
                <li class="">
                  <a href="{{ url("/") }}">الرئيسية</a>
                </li>
                <li class="mega_menu__">
                  <a class="" href="{{ url("aboutus") }}">نبذة عنا</a>
                </li>
                <li class="active">
                  <a href="">خدماتنا</a>
                </li>
                <li>
                  <a href="{{ url("guest/team") }}">فريقنا الطبى</a>
                </li>
                <li>
                  <a href="{{ url("guest/service") }}"
                    >خدمات الرعاية الصحية</a
                  >
                </li>
                <li>
                  <a href="{{ url("guest/contact/create") }}">إتصل بنا</a>
                </li>
                <li>
                  <a href="{{ url("guest/request/create") }}">الوظائف</a>
                </li>
              </ul>

              <ul class="toolbar_options__ list-unstyled">
                <li class="block__ sing_up_blocks_list_item__">
                  <a
                    class="link__ header_booking_link__"
                    href="contact_us.html"
                  >
                    إحجز الآن
                  </a>
                </li>
              </ul>
            </nav>

            <!-- start active nenu button in small sizes  -->
            <button class="menu_button__ button__" id="menu-butt-activ-om">
              <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                data-icon="bars"
                class="svg-inline--fa fa-bars fa-w-14"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <path
                  fill="currentColor"
                  d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                ></path>
              </svg>
            </button>
            <!-- end active nenu button in small sizes  -->
          </div>
        </div>
        <div class="overlay"></div>
      </div>
    </header>

    <!-- end header  -->

    <!-- Start Page Head Section -->
    <section class="page_head_wrapper">
      <figure class="figure__ asp-om loading-omd">
        <img
          class="img-om lazy-omd"
          data-src="{{ asset("guest/images/intro/02.jpg") }}"
          alt="..."
        />
      </figure>
      <div class="title_wrapper__">
        <div class="container">
          <h1 class="page_main_title__">خدماتنا</h1>
        </div>
      </div>
    </section>
    <!-- End Page Head Section -->

    <main class="our_services_section">
        @foreach($services as $service )


      <div class="our_services_block__">
        <div class="img_wrapper__">
          <figure class="figure__ asp-om loading-omd">
            <img
              class="img-om lazy-omd"
              data-src="{{ asset("storage/". $service->background_image) }}"
              alt="..."
            />
          </figure>
        </div>

        <div class="content_wrapper__">
          <div class="section_head_wrapper__ white_color">
            <h2 class="section_main_title__">{{ $service->title }}</h2>
          </div>
          <p class="parag__">
           {{ $service->shortdesc }}</p>
          <a href="{{ url("guest/show/$service->id") }}" class="link__ services_link__">
            قراءة المزيد
            <img
              src="{{ asset("guest/images/shapes/services_link_arrow_left.svg") }}"
              alt="..."
            />
          </a>
        </div>
      </div>
      @endforeach
    </main>

    <!-- Start Footer -->

    <footer class="footer_sec__">
      <div class="container">
        <div class="footer_content__">
          <div class="footer_block__">
            <a class="footer_logo__" href="index.html">
              <figure class="figure__">
                <img src="{{ asset("guest/images/footer_logo.svg") }}" alt=".." />
              </figure>
            </a>
            <p class="footer_parag__">
              مركز طبى للعلاج الطبيعى والحجامة خبرة 10 سنوات وأكثر من 100 طبيب
            </p>
          </div>

          <div class="footer_block__">
            <h4 class="footer_block_head__">الموقع</h4>
            <p class="footer_location_parag__">
              <img
                class="icon__"
                src="{{ asset("guest/images/shapes/customers_opinions_location_icon__.svg") }}"
                alt="..."
              />
              <span class="parag_content__">
                جدة , حى السلامة , شارع سارى , بجوار بنك سالم , الدور التانى
              </span>
            </p>
          </div>

          <div class="fotter_links_block__ footer_block__">
            <h4 class="footer_block_head__">روابط سريعة</h4>
            <ul class="footer_list__ list-unstyled">
              <li><a href="index.html">الرئيسية</a></li>
              <li>
                <a href="about_us.html">اتصل بنا</a>
              </li>
              <li><a href="our_services.html">خدمتنا </a></li>
              <li><a href="our_projects.html">إنضم إلينا</a></li>
            </ul>
          </div>

          <div class="footer_block__">
            <h4 class="news_mail_title__">
              اشترك في نشرتنا البريدية
            </h4>
            <div class="news_mail_input__wrapper__">
              <input type="text" class="input__ none_border__" placeholder="ادخل البريد الاكتروني">
              <button class="submit-button__">إشتراك</button>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_banks_icons_wrapper__">
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/tamara.png") }}" alt="..." class="img-om">
        </figure>
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/visa.png") }}" alt="..." class="img-om">
        </figure>
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/mada.png") }}" alt="..." class="img-om">
        </figure>
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/tabby.png") }}" alt="..." class="img-om">
        </figure>
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/mispay.png") }}" alt="..." class="img-om">
        </figure>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- start js include  -->
    <script src="{{ asset("guest/js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("guest/js/jquery.fancybox.min.js") }}"></script>
    <script src="{{ asset("guest/js/popper.min.js") }}"></script>
    <script src="{{ asset("guest/js/swiper.min.js") }}"></script>
    <script src="{{ asset("guest/js/swiper_props.js") }}"></script>
    <script src="{{ asset("guest/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("guest/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("guest/js/mixitup.min.js") }}"></script>
    <script src="{{ asset("guest/js/aos.js") }}"></script>
    <script src="{{ asset("guest/js/repeater.js") }}"></script>
    <script src="{{ asset("guest/js/plugin.js") }}"></script>
  </body>
</html>
