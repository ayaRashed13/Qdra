<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Qdra</title>

    <link rel="website icon" href="{{ asset("guest/images/logo.png")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/all.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/animate.min.css")}}" />
    <!-- ############ include only in Arabic pages ############  -->
    <link rel="stylesheet" href="{{ asset("guest/css/bootstrap-rtl.min.css")}}" />
    <!-- #######################################################  -->
    <!-- ########### include only in English pages ############  -->
    <!-- <link rel="stylesheet" href="{{ asset("guest/css/bootstrap.min.css")}}" -->
    <!-- #######################################################  -->
    <link rel="stylesheet" href="{{ asset("guest/css/bootstrap-select.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/jquery.fancybox.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/swiper.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/aos.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/style.css")}}" />
  </head>
)}}"
  <body>
    <!-- Start Side Links Section -->
    <section class="side_links_section">
      <ul class="links_wrapper__">
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/call.svg")}}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/what's_up.svg")}}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/snap_chat.svg")}}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/facebook.svg")}}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/instagram.svg")}}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/twitter_old.svg")}}" alt="" />
          </a>
        </li>
        <li>
          <a href="#" class="link__">
            <img src="{{ asset("guest/images/socials/tiktok.svg")}}" alt="" />
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
                  <img src="{{ asset("guest/images/shapes/global.svg")}}" alt="" />
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
                <img src="{{ asset("guest/images/logo.png")}}" alt=".." />
              </figure>
            </a>

            <nav class="nav-om" id="navbar-menu-om">
              <button class="close-button__"></button>

              <figure class="figure__ nav_logo__">
                <img src="{{ asset("guest/images/logo.png")}}" alt=".." />
              </figure>

              <ul class="nav-list-om list-unstyled">
                <li class="">
                  <a href="{{ url("/") }}">الرئيسية</a>
                </li>
                <li class="mega_menu__ active">
                  <a class="" href="{{  url("aboutus")  }}">نبذة عنا</a>
                </li>
                <li>
                  <a href="{{ url("guest/service") }}">خدماتنا</a>
                </li>
                <li>
                  <a href="{{ url("guest/team") }}">فريقنا الطبى</a>
                </li>
                <li>
                  <a href="health_care_services.html"
                    >خدمات الرعاية الصحية</a
                  >
                </li>
                <li>
                  <a href="{{ url("guest/contact/create") }}">إتصل بنا</a>
                </li>
                <li>
                  <a href="{{ url("guest/contact/create") }}">الوظائف</a>
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
          data-src="{{ asset("guest/images/intro/03.jpg")}}"
          alt="..."
        />
      </figure>
      <div class="title_wrapper__">
        <div class="container">
          <h1 class="page_main_title__">نبذة عنا</h1>
        </div>
      </div>
    </section>
    <!-- End Page Head Section -->

    <main class="about_us_section about_us_page default_page__">
      <div class="container">
        <div class="row row_modify with_row_gap">
          <div class="col-lg-6">
            <div class="section_head_wrapper__">
              <h2 class="section_main_title__">من نحن</h2>
            </div>

            <p class="about_us_main_parag__">
              تعرف علي <span class="site_name__">مركز قدرة</span> الطبى للعلاج
              الطبيعى والحجامة
            </p>
            <p class="parag__">
              هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
              سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات
              في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها
              تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف
            </p>
            <a href="#" class="link__ about_us_section_link__">
              مشاهدة المزيد
              <img
                class="icon__"
                src="{{ asset("guest/images/shapes/about_us_section_link_arrow.svg")}}"
                alt="..."
              />
            </a>
          </div>

          <div class="col-lg-6">
            <div class="main_img_wrapper__">
              <figure
                class="figure__ about_us_photo_figure__ loading-omd asp-om"
              >
                <img
                  class="img-om lazy-omd"
                  data-src="{{ asset("guest/images/about_us/01.jpg")}}"
                  alt="..."
                />
              </figure>
            </div>
          </div>
        </div>

        <div class="page_block__">
          <div class="section_head_wrapper__">
            <h2 class="section_main_title__">نبذة عن مركزنا</h2>
          </div>

          <p class="about_us_main_parag__ full_width__">
            تعرف علي <span class="site_name__">مركز قدرة</span> الطبى للعلاج
            الطبيعى والحجامة
          </p>
          <p class="parag__">
            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
            القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في
            الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي
            توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى
            نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
            العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم
            إيبسوم بشكل إفتراضي كنموذج
          </p>
          <p class="parag__">
            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
            القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في
            الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي
            توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى
            نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
            العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم
            إيبسوم بشكل إفتراضي كنموذج
          </p>
        </div>

        <div class="page_block__">
          <div class="section_head_wrapper__">
            <h2 class="section_main_title__">الرؤية والرسالة</h2>
          </div>

          <div class="row row_modify with_row_gap">
            <div class="col-lg-6">
              <div class="our_vision_and_message_card__">
                <div class="img_wrapper">
                  <figure class="figure__ icon__ loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/shapes/vision.svg")}}"
                      alt="..."
                    />
                  </figure>
                </div>
                <h3 class="title__">رؤيتنا</h3>
                <p class="parag__">
                  هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                  سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                  الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم
                  إيبسوم لأنها تعطي توزيعاَ
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="our_vision_and_message_card__">
                <div class="img_wrapper">
                  <figure class="figure__ icon__ loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/shapes/message.png")}}"
                      alt="..."
                    />
                  </figure>
                </div>
                <h3 class="title__">رسالتنا</h3>
                <p class="parag__">
                  هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                  سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                  الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم
                  إيبسوم لأنها تعطي توزيعاَ
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="page_block__">
          <div class="section_head_wrapper__">
            <h2 class="section_main_title__">الأهداف</h2>
          </div>

          <div class="goals_cards_wrapper__">
            <div class="goals_card__">
              <div class="img_wrapper__">
                <figure class="figure__ icon__ loading-omd">
                  <img class="img-om lazy-omd" data-src="{{ asset("guest/images/goals/01.svg")}}" alt="...">
                </figure>
              </div>
              <h4 class="title__">الكشف</h4>
              <p class="parag__">هناك حقيقة مثبتة منذ زمن طويل وهي  </p>
              <span class="number__">1</span>
            </div>
            <div class="goals_card__">
              <div class="img_wrapper__">
                <figure class="figure__ icon__ loading-omd">
                  <img class="img-om lazy-omd" data-src="{{ asset("guest/images/goals/02.svg")}}" alt="...">
                </figure>
              </div>
              <h4 class="title__">إعداد الخطة العلاجية</h4>
              <p class="parag__">هناك حقيقة مثبتة منذ زمن طويل وهي  </p>
              <span class="number__">2</span>
            </div>
            <div class="goals_card__">
              <div class="img_wrapper__">
                <figure class="figure__ icon__ loading-omd">
                  <img class="img-om lazy-omd" data-src="{{ asset("guest/images/goals/03.svg")}}" alt="...">
                </figure>
              </div>
              <h4 class="title__">الجلسات العلاجية</h4>
              <p class="parag__">هناك حقيقة مثبتة منذ زمن طويل وهي  </p>
              <span class="number__">3</span>
            </div>
            <div class="goals_card__">
              <div class="img_wrapper__">
                <figure class="figure__ icon__ loading-omd">
                  <img class="img-om lazy-omd" data-src="{{ asset("guest/images/goals/04.svg")}}" alt="...">
                </figure>
              </div>
              <h4 class="title__">إعادة التأهيل</h4>
              <p class="parag__">هناك حقيقة مثبتة منذ زمن طويل وهي  </p>
              <span class="number__">4</span>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Start Footer -->

    <footer class="footer_sec__">
      <div class="container">
        <div class="footer_content__">
          <div class="footer_block__">
            <a class="footer_logo__" href="index.html">
              <figure class="figure__">
                <img src="{{ asset("guest/images/footer_logo.svg")}}" alt=".." />
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
                src="{{ asset("guest/images/shapes/customers_opinions_location_icon__.svg")}}"
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
          <img src="{{ asset("guest/images/bank_icons/tamara.png")}}" alt="..." class="img-om">
        </figure>
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/visa.png")}}" alt="..." class="img-om">
        </figure>
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/mada.png")}}" alt="..." class="img-om">
        </figure>
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/tabby.png")}}" alt="..." class="img-om">
        </figure>
        <figure class="figure__ icon__">
          <img src="{{ asset("guest/images/bank_icons/mispay.png")}}" alt="..." class="img-om">
        </figure>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- start js include  -->
    <script src="{{ asset("guest/js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{ asset("guest/js/jquery.fancybox.min.js")}}"></script>
    <script src="{{ asset("guest/js/popper.min.js")}}"></script>
    <script src="{{ asset("guest/js/swiper.min.js")}}"></script>
    <script src="{{ asset("guest/js/swiper_props.js")}}"></script>
    <script src="{{ asset("guest/js/bootstrap-select.min.js")}}"></script>
    <script src="{{ asset("guest/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("guest/js/mixitup.min.js")}}"></script>
    <script src="{{ asset("guest/js/aos.js")}}"></script>
    <script src="{{ asset("guest/js/repeater.js")}}"></script>
    <script src="{{ asset("guest/js/plugin.js")}}"></script>
  </body>
</html>
