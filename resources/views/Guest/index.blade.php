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
    <!-- <link rel="stylesheet" href="{{ asset("guest/css/bootstrap.min.css")}}"> -->
    <!-- #######################################################  -->
    <link rel="stylesheet" href="{{ asset("guest/css/bootstrap-select.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/jquery.fancybox.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/swiper.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/aos.css")}}" />
    <link rel="stylesheet" href="{{ asset("guest/css/style.css")}}" />
  </head>

  <body>
    <!-- Start Side Links Section -->
    <section class="side_links_section">
      <ul class="links_wrapper__">
        @foreach ( $socials as $social )


        <li>

          <a href="{{ $social->link }}" class="link__">
            <img src="{{ asset("storage/". $social->img)}}" alt="" />
          </a>
        </li>
        @endforeach

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
                <img src="{{ asset("storage/".$settings[0]->value)}}" alt=".." />
                {{--@dd($settings[2]->value)--}}
              </figure>
            </a>

            <nav class="nav-om" id="navbar-menu-om">
              <button class="close-button__"></button>

              <figure class="figure__ nav_logo__">
                <img src="{{ asset("guest/images/logo.png")}}" alt=".." />
              </figure>

              <ul class="nav-list-om list-unstyled">
                <li class="active">
                  <a href="{{ url("/") }}">الرئيسية</a>
                </li>
                <li class="mega_menu__">
                  <a class="" href="{{ url("/aboutus") }}">نبذة عنا</a>
                </li>
                <li>
                  <a href="{{ url("/guest/service") }}">خدماتنا</a>
                </li>
                <li>
                  <a href="{{ url("guest/team") }}">فريقنا الطبى</a>
                </li>
                <li>
                  <a href="#home_page_download_app_section">خدمات الرعاية الصحية</a>
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

    <!-- Start Home Slider Section -->

    <main class="home_slider_section__">
      <div class="swiper-container home_slider__">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <figure class="figure__ loading-omd asp-om">
              <img
                class="img-om lazy-omd"
                data-src="{{ asset("storage/" . $settings[1]->value)}}"
                alt="..."
              />
            </figure>

            <div class="slider_container__">
              <h1 class="title__">
                <span class="site_name__"> قدرة </span>
                للعلاج الطبيعى والحجامة
              </h1>
              <p class="parag__">
                يستخدم العلاج الطبيعي أساليب مختلفة لاستعادة توازن المريض
                النفسي، والجسدي، وتحسينه، والمحافظة عليه، مع الأخذ بالحسبان
                التغيرات المتنوعة في الحالة الصحية للشخص المعالج.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <figure class="figure__ loading-omd asp-om">
              <img
                class="img-om lazy-omd"
                data-src="{{ asset("storage/" . $settings[1]->value)}}"
                alt="..."
              />
            </figure>

            <div class="slider_container__">
              <h1 class="title__">
                <span class="site_name__"> قدرة </span>
                للعلاج الطبيعى والحجامة
              </h1>
              <p class="parag__">
                يستخدم العلاج الطبيعي أساليب مختلفة لاستعادة توازن المريض
                النفسي، والجسدي، وتحسينه، والمحافظة عليه، مع الأخذ بالحسبان
                التغيرات المتنوعة في الحالة الصحية للشخص المعالج.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <figure class="figure__ loading-omd asp-om">
              <img
                class="img-om lazy-omd"
                data-src="{{ asset("storage/" . $settings[2]->value)}}"
                alt="..."
              />
            </figure>

            <div class="slider_container__">
              <h1 class="title__">
                <span class="site_name__"> قدرة </span>
                للعلاج الطبيعى والحجامة
              </h1>
              <p class="parag__">
                يستخدم العلاج الطبيعي أساليب مختلفة لاستعادة توازن المريض
                النفسي، والجسدي، وتحسينه، والمحافظة عليه، مع الأخذ بالحسبان
                التغيرات المتنوعة في الحالة الصحية للشخص المعالج.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <figure class="figure__ loading-omd asp-om">
              <img
                class="img-om lazy-omd"
                data-src="{{ asset("storage/" . $settings[3]->value)}}"
                alt="..."
              />
            </figure>

            <div class="slider_container__">
              <h1 class="title__">
                <span class="site_name__"> قدرة </span>
                للعلاج الطبيعى والحجامة
              </h1>
              <p class="parag__">
                يستخدم العلاج الطبيعي أساليب مختلفة لاستعادة توازن المريض
                النفسي، والجسدي، وتحسينه، والمحافظة عليه، مع الأخذ بالحسبان
                التغيرات المتنوعة في الحالة الصحية للشخص المعالج.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="arrow_pagination_wrapper__">
        <div class="arrow-sec center__">
          <div class="home_swiper_buttons swiper-button-prev"></div>
          <div class="home_swiper_buttons swiper-button-next"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </main>

    <!-- End Home Slider Section -->

    <!-- Start About Us Section -->
    <section class="about_us_section default_section__">
      <div class="container">
        <div class="row row_modify with_row_gap">
          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left">
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

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right">
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

        <div class="video_block__ about_us_video_block__ aos-init aos-animate" data-aos="fade-up">
          <div
            class="row row_modify with_row_gap reverse_dir_column_small_size"
          >
            <div class="col-lg-6">
              <div class="video_block_description_wrapper__">
                <figure class="icon__">
                  <img class="img-om" src="{{ asset("guest/images/logo.png")}}" alt="..." />
                </figure>

                <h4 class="title__">فيديو يحتوي على جولة تعريفية لمركزنا</h4>
                <p class="parag__">
                  هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                  سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                  الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم
                  إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن
                  استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو
                  (أي الأحرف) وكأنها نص مقروء. العديد
                </p>
              </div>
            </div>

            <div class="col-lg-6">
              <a
                data-fancybox="selected_visuals_card__"
                href="{{ asset("guest/images/about_us/02.jpg")}}"
                class="selected_visuals_card__"
              >
                <figure class="figure__ loading-omd asp-om">
                  <img
                    class="lazy-omd img-om"
                    data-src="{{ asset("guest/images/about_us/02.jpg")}}"
                    alt="..."
                  />
                </figure>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- Start Our Services Section -->
    <section class="our_services_section aos-init aos-animate" data-aos="fade-up">
        @foreach( $services as $service )

      <div class="our_services_block__">
        <div class="img_wrapper__" >
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
            {{ $service->shortdesc }}
           </p>
          <a href="{{ url("guest/show/$service->id") }}">

            قراءة المزيد
            <img
              src="{{ asset("guest/images/shapes/services_link_arrow_left.svg")}}"
              alt="..."
            />
          </a>
        </div>
      </div>
      @endforeach

    </section>
    <!-- End Our Services Section -->

    <!-- Start Our Team Section -->
    <section class="our_team_section__ default_section__">
      <div class="container">
        <div class="section_head_wrapper__ center">
          <h2 class="section_main_title__ with_margin_bottom__">
            فريقنا الطبى
          </h2>
          <h3 class="section_main_sub_title___">
            تعرف على فريقنا الطبى داخل مركز قدرة للعلاج الطبيعى والحجامة
          </h3>
        </div>

        <div class="row row_modify with_row_gap repeater_element__" data-repeat="0  ">
            @foreach ($teams as $team )
          <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos-offset="200" data-aos="flip-up">
            <div class="our_team_card__">
              <div class="img_wrapper__">
                <figure class="figure__ asp-om loading-omd">
                  <img
                    class="img-om lazy-omd"
                    data-src="{{ asset("storage/" . $team->image) }}"
                    alt="..."
                  />
                </figure>
              </div>
              <div class="description_wrapper__">
                <h4 class="title__">{{ $team->name }}</h4>
                <h5 class="sub_title__"> {{ $team->job?->name }}</h5>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Our Team Section -->

    <!-- Start Health Care Services Section -->
    <section class="health_care_services_section default_section__ aos-init aos-animate" data-aos="fade-down-left">
      <div class="container">
        <div class="section_head_wrapper__ center">
          <h2 class="section_main_title__ with_margin_bottom__">
            خدمات الرعاية الصحية
          </h2>
          <h3 class="section_main_sub_title___">
            تعرف على خدمات الرعاية الصحية المتنوعة لدينا
          </h3>
        </div>

        <div class="slider_content_wrapper__">
          <div
            class="health_care_services_swiper_button swiper-button-prev"
          ></div>

          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="health_care_services_card__">
                  <figure class="figure__ asp-om loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/intro/02.jpg")}}"
                      alt="..."
                    />
                  </figure>

                  <div class="description_wrapper__">
                    <div class="head_wrapper__">
                      <h4 class="title__">الرعاية الطبية</h4>
                      <span class="time__">24\10\2023</span>
                    </div>
                    <p class="parag__">
                      طويل وشاق هذا الطريق الذى يسلكة الطبيب لأن يصبح خريجآ
                    </p>
                    <a href="#" class="link__ health_care_card_link__">
                      قراءة
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="health_care_services_card__">
                  <figure class="figure__ asp-om loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/intro/02.jpg")}}"
                      alt="..."
                    />
                  </figure>

                  <div class="description_wrapper__">
                    <div class="head_wrapper__">
                      <h4 class="title__">الرعاية الطبية</h4>
                      <span class="time__">24\10\2023</span>
                    </div>
                    <p class="parag__">
                      طويل وشاق هذا الطريق الذى يسلكة الطبيب لأن يصبح خريجآ
                    </p>
                    <a href="#" class="link__ health_care_card_link__">
                      قراءة
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="health_care_services_card__">
                  <figure class="figure__ asp-om loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/intro/02.jpg")}}"
                      alt="..."
                    />
                  </figure>

                  <div class="description_wrapper__">
                    <div class="head_wrapper__">
                      <h4 class="title__">الرعاية الطبية</h4>
                      <span class="time__">24\10\2023</span>
                    </div>
                    <p class="parag__">
                      طويل وشاق هذا الطريق الذى يسلكة الطبيب لأن يصبح خريجآ
                    </p>
                    <a href="#" class="link__ health_care_card_link__">
                      قراءة
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="health_care_services_card__">
                  <figure class="figure__ asp-om loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/intro/02.jpg")}}"
                      alt="..."
                    />
                  </figure>

                  <div class="description_wrapper__">
                    <div class="head_wrapper__">
                      <h4 class="title__">الرعاية الطبية</h4>
                      <span class="time__">24\10\2023</span>
                    </div>
                    <p class="parag__">
                      طويل وشاق هذا الطريق الذى يسلكة الطبيب لأن يصبح خريجآ
                    </p>
                    <a href="#" class="link__ health_care_card_link__">
                      قراءة
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="health_care_services_card__">
                  <figure class="figure__ asp-om loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/intro/02.jpg")}}"
                      alt="..."
                    />
                  </figure>

                  <div class="description_wrapper__">
                    <div class="head_wrapper__">
                      <h4 class="title__">الرعاية الطبية</h4>
                      <span class="time__">24\10\2023</span>
                    </div>
                    <p class="parag__">
                      طويل وشاق هذا الطريق الذى يسلكة الطبيب لأن يصبح خريجآ
                    </p>
                    <a href="#" class="link__ health_care_card_link__">
                      قراءة
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="health_care_services_card__">
                  <figure class="figure__ asp-om loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/intro/02.jpg")}}"
                      alt="..."
                    />
                  </figure>

                  <div class="description_wrapper__">
                    <div class="head_wrapper__">
                      <h4 class="title__">الرعاية الطبية</h4>
                      <span class="time__">24\10\2023</span>
                    </div>
                    <p class="parag__">
                      طويل وشاق هذا الطريق الذى يسلكة الطبيب لأن يصبح خريجآ
                    </p>
                    <a href="#" class="link__ health_care_card_link__">
                      قراءة
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="health_care_services_card__">
                  <figure class="figure__ asp-om loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/intro/02.jpg")}}"
                      alt="..."
                    />
                  </figure>

                  <div class="description_wrapper__">
                    <div class="head_wrapper__">
                      <h4 class="title__">الرعاية الطبية</h4>
                      <span class="time__">24\10\2023</span>
                    </div>
                    <p class="parag__">
                      طويل وشاق هذا الطريق الذى يسلكة الطبيب لأن يصبح خريجآ
                    </p>
                    <a href="#" class="link__ health_care_card_link__">
                      قراءة
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="health_care_services_card__">
                  <figure class="figure__ asp-om loading-omd">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/intro/02.jpg")}}"
                      alt="..."
                    />
                  </figure>

                  <div class="description_wrapper__">
                    <div class="head_wrapper__">
                      <h4 class="title__">الرعاية الطبية</h4>
                      <span class="time__">24\10\2023</span>
                    </div>
                    <p class="parag__">
                      طويل وشاق هذا الطريق الذى يسلكة الطبيب لأن يصبح خريجآ
                    </p>
                    <a href="#" class="link__ health_care_card_link__">
                      قراءة
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="health_care_services_swiper_button swiper-button-next"
          ></div>
        </div>
        <div
          class="health_care_services_swiper_pagination swiper-pagination"
        ></div>
      </div>
    </section>
    <!-- End Health Care Services Section -->

    <!-- Start Our Partners Section -->
    <section class="our_partners_section default_section__">
      <div class="container">
        <div class="section_head_wrapper__ center">
          <h2 class="section_main_title__ with_margin_bottom__">شركائنا</h2>
          <h3 class="section_main_sub_title___">تعرف على شركاء نجاحنا</h3>
        </div>

        <div class="row row_modify with_row_gap">
          <div class="col-lg-4 col__ aos-init aos-animate" data-aos-offset="-500" data-aos="zoom-in">
            <div class="our_partners_card__">
              <figure class="figure__ icon__ loading-omd center">
                <img
                  class="img-om lazy-omd"
                  data-src="{{ asset("guest/images/our_partners/01.png")}}"
                  alt="..."
                />
              </figure>

              <h4 class="title__">عيادة الأمل</h4>
              <p class="parag__">
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                الفقرات في الصفحة التي يقرأها. ولذلك يتم
              </p>
            </div>
          </div>
          <div class="col-lg-4 col__ aos-init aos-animate" data-aos-offset="-500" data-aos="zoom-in">
            <div class="our_partners_card__">
              <figure class="figure__ icon__ loading-omd center">
                <img
                  class="img-om lazy-omd"
                  data-src="{{ asset("guest/images/our_partners/02.png")}}"
                  alt="..."
                />
              </figure>

              <h4 class="title__">عيادة الأمل</h4>
              <p class="parag__">
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                الفقرات في الصفحة التي يقرأها. ولذلك يتم
              </p>
            </div>
          </div>
          <div class="col-lg-4 col__ aos-init aos-animate" data-aos-offset="-500" data-aos="zoom-in">
            <div class="our_partners_card__">
              <figure class="figure__ icon__ loading-omd center">
                <img
                  class="img-om lazy-omd"
                  data-src="{{ asset("guest/images/our_partners/03.png")}}"
                  alt="..."
                />
              </figure>

              <h4 class="title__">عيادة الأمل</h4>
              <p class="parag__">
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                الفقرات في الصفحة التي يقرأها. ولذلك يتم
              </p>
            </div>
          </div>
          <div class="col-lg-4 col__ aos-init aos-animate" data-aos-offset="-500" data-aos="zoom-in">
            <div class="our_partners_card__">
              <figure class="figure__ icon__ loading-omd center">
                <img
                  class="img-om lazy-omd"
                  data-src="{{ asset("guest/images/our_partners/04.png")}}"
                  alt="..."
                />
              </figure>

              <h4 class="title__">عيادة الأمل</h4>
              <p class="parag__">
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                الفقرات في الصفحة التي يقرأها. ولذلك يتم
              </p>
            </div>
          </div>
          <div class="col-lg-4 col__ aos-init aos-animate" data-aos-offset="-500" data-aos="zoom-in">
            <div class="our_partners_card__">
              <figure class="figure__ icon__ loading-omd center">
                <img
                  class="img-om lazy-omd"
                  data-src="{{ asset("guest/images/our_partners/05.png")}}"
                  alt="..."
                />
              </figure>

              <h4 class="title__">عيادة الأمل</h4>
              <p class="parag__">
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                الفقرات في الصفحة التي يقرأها. ولذلك يتم
              </p>
            </div>
          </div>
          <div class="col-lg-4 col__ aos-init aos-animate" data-aos-offset="-500" data-aos="zoom-in">
            <div class="our_partners_card__">
              <figure class="figure__ icon__ loading-omd center">
                <img
                  class="img-om lazy-omd"
                  data-src="{{ asset("guest/images/our_partners/01.png")}}"
                  alt="..."
                />
              </figure>

              <h4 class="title__">عيادة الأمل</h4>
              <p class="parag__">
                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما
                سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع
                الفقرات في الصفحة التي يقرأها. ولذلك يتم
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Partners Section -->

    <!-- Start Our Customers' Opinions Section -->
    <section class="our_customers_opinions_section default_section__">
      <div class="container">
        <div class="section_head_wrapper__ center">
          <h2 class="section_main_title__ with_margin_bottom__">
            آراء عملائنا
          </h2>
          <h3 class="section_main_sub_title___">
            لديك مجموعة من آراء عملائنا المميزين
          </h3>
        </div>

        <div class="cards_wrapper__">
          <div class="row row_modify with_row_gap">
            <div class="col-lg-6 aos-init aos-animate" data-aos-offset="-500" data-aos="fade-left">
              <div class="customer_opinions_card__">
                <div class="imgwrapper__">
                  <figure class="figure__ loading-omd asp-om">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/customers_opinions/01.jpg")}}"
                      alt="..."
                    />
                  </figure>
                </div>
                <div class="description_wrapper__">
                  <div class="head_wrapper__">
                    <h4 class="title__">آمنة سعود محمود</h4>

                    <div class="rating_wrapper__">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                    </div>
                  </div>

                  <p class="parag__">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة
                    ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص
                  </p>

                  <h5 class="loaction__">
                    <img
                      class="icon__"
                      src="{{ asset("guest/images/shapes/customers_opinions_location_icon__.svg")}}"
                      alt="..."
                    />
                    السعودية , جدة , حى الصفا
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-6 aos-init aos-animate" data-aos-offset="-500" data-aos="fade-left">
              <div class="customer_opinions_card__">
                <div class="imgwrapper__">
                  <figure class="figure__ loading-omd asp-om">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/customers_opinions/01.jpg")}}"
                      alt="..."
                    />
                  </figure>
                </div>
                <div class="description_wrapper__">
                  <div class="head_wrapper__">
                    <h4 class="title__">آمنة سعود محمود</h4>

                    <div class="rating_wrapper__">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                    </div>
                  </div>

                  <p class="parag__">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة
                    ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص
                  </p>

                  <h5 class="loaction__">
                    <img
                      class="icon__"
                      src="{{ asset("guest/images/shapes/customers_opinions_location_icon__.svg")}}"
                      alt="..."
                    />
                    السعودية , جدة , حى الصفا
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-6 aos-init aos-animate" data-aos-offset="-500" data-aos="fade-left">
              <div class="customer_opinions_card__">
                <div class="imgwrapper__">
                  <figure class="figure__ loading-omd asp-om">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/customers_opinions/02.jpg")}}"
                      alt="..."
                    />
                  </figure>
                </div>
                <div class="description_wrapper__">
                  <div class="head_wrapper__">
                    <h4 class="title__">آمنة سعود محمود</h4>

                    <div class="rating_wrapper__">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                    </div>
                  </div>

                  <p class="parag__">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة
                    ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص
                  </p>

                  <h5 class="loaction__">
                    <img
                      class="icon__"
                      src="{{ asset("guest/images/shapes/customers_opinions_location_icon__.svg")}}"
                      alt="..."
                    />
                    السعودية , جدة , حى الصفا
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-6 aos-init aos-animate" data-aos-offset="-500" data-aos="fade-left">
              <div class="customer_opinions_card__">
                <div class="imgwrapper__">
                  <figure class="figure__ loading-omd asp-om">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/customers_opinions/02.jpg")}}"
                      alt="..."
                    />
                  </figure>
                </div>
                <div class="description_wrapper__">
                  <div class="head_wrapper__">
                    <h4 class="title__">آمنة سعود محمود</h4>

                    <div class="rating_wrapper__">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                    </div>
                  </div>

                  <p class="parag__">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة
                    ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص
                  </p>

                  <h5 class="loaction__">
                    <img
                      class="icon__"
                      src="{{ asset("guest/images/shapes/customers_opinions_location_icon__.svg")}}"
                      alt="..."
                    />
                    السعودية , جدة , حى الصفا
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-6 aos-init aos-animate" data-aos-offset="-500" data-aos="fade-left">
              <div class="customer_opinions_card__">
                <div class="imgwrapper__">
                  <figure class="figure__ loading-omd asp-om">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/customers_opinions/03.jpg")}}"
                      alt="..."
                    />
                  </figure>
                </div>
                <div class="description_wrapper__">
                  <div class="head_wrapper__">
                    <h4 class="title__">آمنة سعود محمود</h4>

                    <div class="rating_wrapper__">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                    </div>
                  </div>

                  <p class="parag__">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة
                    ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص
                  </p>

                  <h5 class="loaction__">
                    <img
                      class="icon__"
                      src="{{ asset("guest/images/shapes/customers_opinions_location_icon__.svg")}}"
                      alt="..."
                    />
                    السعودية , جدة , حى الصفا
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-6 aos-init aos-animate" data-aos-offset="-500" data-aos="fade-left">
              <div class="customer_opinions_card__">
                <div class="imgwrapper__">
                  <figure class="figure__ loading-omd asp-om">
                    <img
                      class="img-om lazy-omd"
                      data-src="{{ asset("guest/images/customers_opinions/03.jpg")}}"
                      alt="..."
                    />
                  </figure>
                </div>
                <div class="description_wrapper__">
                  <div class="head_wrapper__">
                    <h4 class="title__">آمنة سعود محمود</h4>

                    <div class="rating_wrapper__">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                      <i class="fa-solid fa-star active"></i>
                    </div>
                  </div>

                  <p class="parag__">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة
                    ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص
                  </p>

                  <h5 class="loaction__">
                    <img
                      class="icon__"
                      src="{{ asset("guest/images/shapes/customers_opinions_location_icon__.svg")}}"
                      alt="..."
                    />
                    السعودية , جدة , حى الصفا
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Customers' Opinions Section -->

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
    <script src="{{ asset("guest/js/jquery-ui.min.js")}}"></script>
    <script src="{{ asset("guest/js/jquery.datepick-ar.js")}}"></script>
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
