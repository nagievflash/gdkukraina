<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<h1 class="visually-hidden">ГДК «Украина»</h1>
  <div class="main-hero-double-slider" data-colored-bg>
      <div class="main-hero-slider-bg-wrap" data-main-hero-slider-bg-wrap>
          <div class="main-hero-slider-bg" data-main-hero-slider-bg>
              <div class="swiper-wrapper">
                  <!-- Slides -->
                <?php if( have_rows('hero_slider') ): ?>
                    <?php while( have_rows('hero_slider') ): the_row();
                        $image = get_sub_field('slide_image');?>
                  <div class="swiper-slide main-hero-bg-slide bg-blue">
                      <div class="main-hero-bg-slide__video" style="background-image:url(<?php echo esc_url($image['url']); ?>)">
                          <?php if (get_sub_field('slide_video')['url']): ?>
                          <video class="video" loop="loop" preload="auto" autoplay="autoplay" muted="muted" playsinline>
                              <source src="<?php echo get_sub_field('slide_video')['url'];?>" type="<?php echo get_sub_field('slide_video')['mime_type'];?>" />
                              Your browser does not support the video tag.
                          </video>
                          <?php endif;?>
                      </div>
                  </div>
                <?php endwhile; endif;?>


              </div>
          </div>

          <div class="main-hero-double-slider-pagination">
              <div class="slider-pagination" data-slider-pagination></div>
          </div>
      </div>

      <div class="main-hero-slider-content-wrap" data-main-hero-slider-content-wrap>
          <div class="main-hero-slider-content" data-main-hero-slider-content>
              <div class="swiper-wrapper">
                <?php if( have_rows('hero_slider') ): ?>
                    <?php while( have_rows('hero_slider') ): the_row();
                        $image = get_sub_field('slide_image');?>
                  <!-- Slides -->
                  <div class="swiper-slide main-hero-content-slide wrap-pl-3 wrap-pr-2 indent-from-head">
                      <div class="main-hero-content-slide__main">
                          <h2 class="main-hero-content-slide__heading h1"><?php echo get_sub_field('slide_title'); ?></h2>
                          <div class="main-hero-content-slide__desc text-default"><?php echo get_sub_field('slide_description'); ?>
                              <?php /*if (get_sub_field('slide_link')['url']):*/?><!--
                              <div class="button-group mt-24">
                                  <div class="button-group__item">
                                      <a href="<?php /*echo get_sub_field('slide_link')['url']; */?>" class="btn text-button">
                                          <span><?php /*echo get_sub_field('slide_link')['title']; */?></span>
                                      </a>
                                  </div>
                              </div>
                              --><?php /*endif;*/?>
                          </div>
                      </div>
                  </div>
	                <?php endwhile; endif;?>

              </div>
          </div>
      </div>
  </div>
  <div class="wrap-pl-1 wrap-pr-1">

      <div class="mt-48 mt-md-96" data-tabs>
          <div class="tabs mb-24 mb-md-40 mb-lg-48" data-animate>
              <span class="h1 active" data-tab="events">События</span>
              <span class="h1" data-tab="news">Новости</span>
          </div>
          <div class="tabs__content">
              <div role="tabpanel" class="tabs__pane active" data-pane="events" data-animate>
                  <div class="swiper-container slider-news-twin" data-slider-news-twin data-animate>
                      <div class="swiper-wrapper">
                    <?php
                    global $wp_query;
                    $args = array(
                        'cat' => 3,
                        'order' => 'ASC',
                        'orderby' => 'ID',
                        'taxonomy' => 'category',
                        'posts_per_page' => 18); //get all posts

                    $posts = get_posts($args);
                    foreach ($posts as $post) :?>
                          <div class="swiper-slide">
                              <a href="<?php echo get_permalink();?>" class="card-news is-black no-invert card-news--image" target="_self">
                                  <div class="card-news__inner">
                                      <div class="card-news__image">
                                          <img
                                                  class="image is-lazy"
                                                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                  data-src="<?php echo get_the_post_thumbnail_url();?>"
                                                  alt="<?php echo get_the_title();?>"
                                          />
                                      </div>

                                      <div class="card-news__top">
                                          <div class="card-news__label text-label">
	                                          <?php
                                                if( have_rows('schedule') ):
                                                    while( have_rows('schedule') ) : the_row();
	                                                    if (get_row_index() == 1) echo 'c '.get_sub_field('schedule_date');
                                                    endwhile;
                                                else :
                                                endif; ?>
                                          </div>
                                      </div>

                                      <div class="card-news__bottom">
                                          <div class="card-news__text text-default">
	                                          <?php echo get_the_title();?>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div>


	                      <?php endforeach;
	                      wp_reset_postdata();
	                      ?>

                      </div>
                      <div class="slider-bottom-line mt-16 mt-md-40">
                          <div class="slider-bottom-line__btns">
                              <div class="button-group">
                                  <div class="button-group__item">
                                      <a href="/events/" class="btn text-button">
                                          <span>Все события</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="slider-bottom-line__nav">
                              <div class="slider-nav">
                                  <div class="slider-nav__counter">
                                      <div class="nav-counter" data-nav-counter>
                                          <span class="nav-counter__text nav-counter__text--start text-menu">00</span>
                                          <span class="nav-counter__text nav-counter__text--end text-menu">00</span>
                                      </div>
                                  </div>
                                  <div class="slider-nav__arrows">
                                      <div class="nav-arrows">
                                          <button type="button" class="nav-arrows__button nav-arrows__button--prev" title="Назад" aria-label="Назад">
                                              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
                                                  <g fill="none" stroke-width="2">
                                                      <path d="m11.5 20.5-4.73-4.73 4.73-4.77" />
                                                      <path d="m25.23 15.77h-17" stroke-linecap="square" />
                                                  </g>
                                              </svg>
                                          </button>
                                          <button type="button" class="nav-arrows__button nav-arrows__button--next" title="Вперёд" aria-label="Вперёд">
                                              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
                                                  <g fill="none" stroke-width="2">
                                                      <path d="m20.5 11 4.73 4.73-4.73 4.77" />
                                                      <path d="m23.77 15.77h-17" stroke-linecap="square" />
                                                  </g>
                                              </svg>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div role="tabpanel" class="tabs__pane" data-pane="news" data-animate>
                  <div class="swiper-container slider-news-twin">
                      <div class="swiper-container slider-news-accent" data-slider-news-accent data-animate>
                          <div class="swiper-wrapper">
                              <?php
                              global $wp_query;
                              $args = array(
	                              'cat' => 8,
                                  'taxonomy' => 'category',
	                              'posts_per_page' => 12); //get all posts

                              $posts = get_posts($args);
                              foreach ($posts as $post) :?>
                                  <div class="swiper-slide">
                                      <a href="<?php echo get_permalink();?>" target="_self" class="card-news card-news--image">
                                          <div class="card-news__inner">
                                              <div class="card-news__image">
                                                  <img
                                                          class="image is-lazy"
                                                          src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                          data-src="<?php echo get_the_post_thumbnail_url();?>"
                                                          alt="<?php echo get_the_title();?>"
                                                  />
                                              </div>
                                              <div class="card-news__top">
                                                  <div class="card-news__label text-label"><?php echo get_the_date('d F Y');?></div>
                                              </div>
                                              <div class="card-news__bottom">
                                                  <div class="card-news__text text-default"><?php echo get_the_title();?></div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              <?php endforeach;
                              wp_reset_postdata();
                              ?>
                          </div>
                          <div class="slider-bottom-line mt-16 mt-md-40">
                              <div class="slider-bottom-line__btns">
                                  <div class="button-group">
                                      <div class="button-group__item">
                                          <a href="/news/" target="_self" class="btn text-button"> <span>Все новости</span> </a>
                                      </div>
                                  </div>
                              </div>
                              <div class="slider-bottom-line__nav">
                                  <div class="slider-nav">
                                      <div class="slider-nav__counter">
                                          <div class="nav-counter" data-nav-counter>
                                              <span class="nav-counter__text nav-counter__text--start text-menu">00</span>
                                              <span class="nav-counter__text nav-counter__text--end text-menu">00</span>
                                          </div>
                                      </div>
                                      <div class="slider-nav__arrows">
                                          <div class="nav-arrows">
                                              <button type="button" class="nav-arrows__button nav-arrows__button--prev" title="Назад" aria-label="Назад">
                                                  <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
                                                      <g fill="none" stroke-width="2">
                                                          <path d="m11.5 20.5-4.73-4.73 4.73-4.77" />
                                                          <path d="m25.23 15.77h-17" stroke-linecap="square" />
                                                      </g>
                                                  </svg>
                                              </button>
                                              <button type="button" class="nav-arrows__button nav-arrows__button--next" title="Вперёд" aria-label="Вперёд">
                                                  <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
                                                      <g fill="none" stroke-width="2">
                                                          <path d="m20.5 11 4.73 4.73-4.73 4.77" />
                                                          <path d="m23.77 15.77h-17" stroke-linecap="square" />
                                                      </g>
                                                  </svg>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="h1 mb-24 mb-md-48 mt-48 mt-md-96" data-animate>Информация</div>
      <div class="card-education-group" data-animate>
          <div class="card-education is-white is-cell-2 cell-gosuslugi">
              <div align="center" style="text-align: center; height:100%"> <div style="text-align: center; width: 100%; z-index: -1; height:100%;"> <script src="https://pos.gosuslugi.ru/bin/script.min.js"></script> <style>#js-show-iframe-wrapper{position: relative; height:100%; display: flex; align-items: center; justify-content: center; width: 100%; min-width: 293px; max-width: 100%; background: linear-gradient(138.4deg, #38bafe 26.49%, #2d73bc 79.45%); color: #fff; cursor: pointer;}#js-show-iframe-wrapper .pos-banner-fluid *{box-sizing: border-box;}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{display: block; width: 240px; min-height: 56px; font-size: 18px; line-height: 24px; cursor: pointer; background: #0d4cd3; color: #fff; border: none; border-radius: 8px; outline: 0;}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background: #1d5deb;}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus{background: #2a63ad;}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active{background: #2a63ad;}@-webkit-keyframes fadeInFromNone{0%{display: none; opacity: 0;}1%{display: block; opacity: 0;}100%{display: block; opacity: 1;}}@keyframes fadeInFromNone{0%{display: none; opacity: 0;}1%{display: block; opacity: 0;}100%{display: block; opacity: 1;}}@font-face{font-family: LatoWebLight; src: url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.ttf) format("truetype"); font-style: normal; font-weight: 400;}@font-face{font-family: LatoWeb; src: url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.ttf) format("truetype"); font-style: normal; font-weight: 400;}@font-face{font-family: LatoWebBold; src: url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.ttf) format("truetype"); font-style: normal; font-weight: 400;}@font-face{font-family: RobotoWebLight; src: url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.ttf) format("truetype"); font-style: normal; font-weight: 400;}@font-face{font-family: RobotoWebRegular; src: url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.ttf) format("truetype"); font-style: normal; font-weight: 400;}@font-face{font-family: RobotoWebBold; src: url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.ttf) format("truetype"); font-style: normal; font-weight: 400;}@font-face{font-family: ScadaWebRegular; src: url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.ttf) format("truetype"); font-style: normal; font-weight: 400;}@font-face{font-family: ScadaWebBold; src: url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.ttf) format("truetype"); font-style: normal; font-weight: 400;}@font-face{font-family: Geometria; src: url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot); src: url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot?#iefix) format("embedded-opentype"), url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.ttf) format("truetype"); font-weight: 400; font-style: normal;}@font-face{font-family: Geometria-ExtraBold; src: url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot); src: url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot?#iefix) format("embedded-opentype"), url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.ttf) format("truetype"); font-weight: 800; font-style: normal;}</style> <style>#js-show-iframe-wrapper .bf-1{position: relative; display: grid; grid-template-columns: var(--pos-banner-fluid-1__grid-template-columns); grid-template-rows: var(--pos-banner-fluid-1__grid-template-rows); width: 100%; max-width: 1060px; font-family: LatoWeb, sans-serif; box-sizing: border-box;}#js-show-iframe-wrapper .bf-1__decor{grid-column: var(--pos-banner-fluid-1__decor-grid-column); grid-row: var(--pos-banner-fluid-1__decor-grid-row); padding: var(--pos-banner-fluid-1__decor-padding); background: url(https://pos.gosuslugi.ru/bin/banner-fluid/1/banner-fluid-bg-1.svg) var(--pos-banner-fluid-1__decor-bg-position) no-repeat; background-size: var(--pos-banner-fluid-1__decor-bg-size);}#js-show-iframe-wrapper .bf-1__logo-wrap{display: flex; flex-direction: column; align-items: flex-end;}#js-show-iframe-wrapper .bf-1__logo{width: 128px;}#js-show-iframe-wrapper .bf-1__slogan{font-family: LatoWebBold, sans-serif; font-size: var(--pos-banner-fluid-1__slogan-font-size); line-height: var(--pos-banner-fluid-1__slogan-line-height); color: #fff;}#js-show-iframe-wrapper .bf-1__content{padding: var(--pos-banner-fluid-1__content-padding);}#js-show-iframe-wrapper .bf-1__description{display: flex; flex-direction: column; margin-bottom: 24px;}#js-show-iframe-wrapper .bf-1__text{margin-bottom: 12px; font-size: 24px; line-height: 32px; font-family: LatoWebBold, sans-serif; color: #fff;}#js-show-iframe-wrapper .bf-1__text_small{margin-bottom: 0; font-size: 16px; line-height: 24px; font-family: LatoWeb, sans-serif;}#js-show-iframe-wrapper .bf-1__btn-wrap{display: flex; align-items: center; justify-content: center;}</style> <div id="js-show-iframe-wrapper"> <div class="pos-banner-fluid bf-1"> <div class="bf-1__decor"> <div class="bf-1__logo-wrap"> <img class="bf-1__logo" src="https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo.svg" alt="Госуслуги"/> <div class="bf-1__slogan">Решаем вместе</div></div></div><div class="bf-1__content"> <div class="bf-1__description"> <span class="bf-1__text"> Не убран мусор, яма на дороге, не горит фонарь? </span> <span class="bf-1__text bf-1__text_small"> Столкнулись с проблемой&nbsp;— сообщите о ней! </span> </div><div class="bf-1__btn-wrap"> <button class="pos-banner-btn_2" type="button" style="width: 240px;">Сообщить о проблеме</button> </div></div></div></div><script>(function (){"use strict"; function ownKeys(e, t){var o=Object.keys(e); if (Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e); if (t) n=n.filter(function (t){return Object.getOwnPropertyDescriptor(e, t).enumerable;}); o.push.apply(o, n);}return o;}function _objectSpread(e){for (var t=1; t < arguments.length; t++){var o=null !=arguments[t] ? arguments[t] :{}; if (t % 2) ownKeys(Object(o), true).forEach(function (t){_defineProperty(e, t, o[t]);}); else if (Object.getOwnPropertyDescriptors) Object.defineProperties(e, Object.getOwnPropertyDescriptors(o)); else ownKeys(Object(o)).forEach(function (t){Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(o, t));});}return e;}function _defineProperty(e, t, o){if (t in e) Object.defineProperty(e, t,{value: o, enumerable: true, configurable: true, writable: true}); else e[t]=o; return e;}var POS_PREFIX_1="--pos-banner-fluid-1__", posOptionsInitial={"grid-template-columns": "100%", "grid-template-rows": "310px auto", "decor-grid-column": "initial", "decor-grid-row": "initial", "decor-padding": "30px 30px 0 30px", "decor-bg-position": "center calc(100% - 10px)", "decor-bg-size": "75% 75%", "content-padding": "0 30px 30px 30px", "slogan-font-size": "24px", "slogan-line-height": "32px",}, setStyles=function (e, t){Object.keys(e).forEach(function (o){t.style.setProperty(POS_PREFIX_1 + o, e[o]);});}, removeStyles=function (e, t){Object.keys(e).forEach(function (e){t.style.removeProperty(POS_PREFIX_1 + e);});}; function changePosBannerOnResize(){var e=document.documentElement, t=_objectSpread({}, posOptionsInitial), o=document.getElementById("js-show-iframe-wrapper"), n=o ? o.offsetWidth : document.body.offsetWidth; if (n > 500) (t["grid-template-columns"]="min-content 1fr"), (t["grid-template-rows"]="100%"), (t["decor-grid-column"]="2"), (t["decor-grid-row"]="1"), (t["decor-padding"]="30px 30px 30px 0"), (t["decor-bg-position"]="calc(30% - 10px) calc(72% - 2px)"), (t["decor-bg-size"]="calc(23% + 150px)"), (t["content-padding"]="30px"); if (n > 800) (t["decor-bg-position"]="calc(38% - 50px) calc(6% - 0px)"), (t["decor-bg-size"]="420px"), (t["slogan-font-size"]="32px"), (t["slogan-line-height"]="40px"); if (n > 1020) (t["decor-bg-position"]="calc(30% - 28px) calc(0% - 40px)"), (t["decor-bg-size"]="620px"); setStyles(t, e);}changePosBannerOnResize(), window.addEventListener("resize", changePosBannerOnResize), (window.onunload=function (){var e=document.documentElement; window.removeEventListener("resize", changePosBannerOnResize), removeStyles(posOptionsInitial, e);});})(); </script> <script>Widget("https://pos.gosuslugi.ru/form", 257990); </script> </div></div>
          </div>
          <div class="card-education is-black" data-bloat data-accordion>
              <div class="card-education__inner">
                  <div class="card-education__head">
                      <div data-accordion-toggle></div>
                      <div class="card-education__title h2">Где купить билеты<i class="css-cross"></i></div>
                  </div>
                  <div data-accordion-roll>
                      <div class="information-content">
                          <div class="user-text">
                              <p>
                                  —
                                  В киоске самообслуживания, расположенном в холле первого этажа (оплата только картой)
                              </p>
                              <p>
                                  —
                                  На нашем официальном сайте
                              </p>
                              <p>
                                  —
                                  В кассе ГДК «Украина»
                              </p>
                          </div>

                          <div class="card-education__numerical-item-list"></div>

                          <div class="button-group">
                              <div class="button-group__item">
                                  <a href="/" target="_self" class="btn text-button">
                                      <span>Подробнее</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <span class="bloat bloat--bg"></span>
              <span class="bloat bloat--fg"></span>
          </div>
          <a href="/pushkinskaya-karta/" class="card-education cell-pushkin-card"><img src="https://gdkukraina.ru/images/Banner_na_sayt.jpg" width="100%" alt=""></a>
      </div>
      <div class="mt-48 mb-48 mb-md-96">
          <div class="my-48 my-md-96">
              <h2 class="h1 mb-24 mb-md-48" data-animate>Кинозал</h2>
              <div class="text-layout mb-48" data-animate>
                  <div class="text-layout__content">
                      <div class="pb-md-24">
                          <div class="text-layout__text user-text text-default text-layout__text--small">
                              <p>Новый  вид услуг кинопоказ введен с марта 2012 года и с тех пор в одном зале на 392 места гармонично переплетаются концерты, конкурсы, фестивали, российские и зарубежные киносеансы формата 2D и 3D.
<br /><br />
                                  Современная  цифровая киноустановка, звуковая система Dolby Surround 5.1 и экран площадью 65 кв.м., позволяют зрителям полностью погрузится в события  происходящие на экране.  </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="section-kinozal" data-animate>
                  <div class="kinozal-wrap" data-slider-logos-wrap>
                      <div class="swiper-container slider-kinozal" data-slider-logos>
                          <div class="swiper-wrapper">
					          <?php
					          $movies = array();
					          foreach (getMovies() as $movie) {
						          if ($movie->Cast) {
							          $filename = '';
							          foreach ( $movie->MediaDatas as $data ) {
								          if ( $data->TypeId == 1 ) {
									          $filename = getMediaData( $data->Id, $data->FileName );
								          }
							          }
							          if ($filename == '/wp-content/themes/dkukraina/img/') $filename = '/wp-content/themes/dkukraina/img/no-image.jpg';
							          $movieDetails = [
								          "name"      => $movie->Name,
								          "rate"      => $movie->Rate,
								          "genres"    => $movie->Genres,
								          "poster"    => $filename,
							          ];
							          $movies[] = $movieDetails;
						          }
					          }
					          ?>

					          <?php foreach ($movies as $movie):?>
                                  <div class="swiper-slide">
                                      <a href="/kinozal" class="movie-card is-interactive">
								          <?php if( isset( $movie["poster"] ) ): ?>
                                              <img
                                                      class="image is-lazy"
                                                      src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                      data-src="<?php echo $movie["poster"]; ?>"
                                                      alt="<?php echo $movie["name"]; ?>"
                                              />
								          <?php endif;?>
                                      </a>
                                  </div>
					          <?php endforeach;?>
                          </div>
                      </div>
                      <div class="slider-bottom-line mt-16 mt-md-40">
                          <div class="slider-bottom-line__nav">
                              <div class="slider-nav">
                                  <div class="slider-nav__counter">
                                      <div class="nav-counter" data-nav-counter>
                                          <span class="nav-counter__text nav-counter__text--start text-menu">00</span>
                                          <span class="nav-counter__text nav-counter__text--end text-menu">00</span>
                                      </div>
                                  </div>
                                  <div class="slider-nav__arrows">
                                      <div class="nav-arrows">
                                          <button type="button" class="nav-arrows__button nav-arrows__button--prev" title="Назад" aria-label="Назад">
                                              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
                                                  <g fill="none" stroke-width="2">
                                                      <path d="m11.5 20.5-4.73-4.73 4.73-4.77" />
                                                      <path d="m25.23 15.77h-17" stroke-linecap="square" />
                                                  </g>
                                              </svg>
                                          </button>
                                          <button type="button" class="nav-arrows__button nav-arrows__button--next" title="Вперёд" aria-label="Вперёд">
                                              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
                                                  <g fill="none" stroke-width="2">
                                                      <path d="m20.5 11 4.73 4.73-4.73 4.77" />
                                                      <path d="m23.77 15.77h-17" stroke-linecap="square" />
                                                  </g>
                                              </svg>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="bg-white bg-wings section-partners has-button">
          <h2 class="section-partners__heading h1" data-animate>Ссылки на информационные ресурсы</h2>
          <div class="section-partners__slider" data-animate>
              <div class="slider-logos-wrap" data-slider-logos-wrap>
                  <div class="swiper-container slider-logos" data-slider-logos>
                      <div class="swiper-wrapper">
                        <?php if( have_rows('partners') ): ?>
                        <?php while( have_rows('partners') ): the_row();
		                $image = get_sub_field('image');?>
                            <div class="swiper-slide">
                              <a href="<?php echo get_sub_field('link'); ?>" target="_blank" class="partner-logo is-interactive">
                                  <?php if( !empty( $image ) ): ?>
                                  <img
                                      class="image is-lazy"
                                      src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                      data-src="<?php echo esc_url($image['url']); ?>"
                                      alt="<?php echo get_sub_field('title'); ?>"
                                  />
                                  <?php endif;?>
                              </a>
                          </div>
                        <?php endwhile; endif;?>
                      </div>
                  </div>
                  <div class="slider-bottom-line mt-16 mt-md-40">
                      <div class="slider-bottom-line__nav">
                          <div class="slider-nav">
                              <div class="slider-nav__counter">
                                  <div class="nav-counter" data-nav-counter>
                                      <span class="nav-counter__text nav-counter__text--start text-menu">00</span>
                                      <span class="nav-counter__text nav-counter__text--end text-menu">00</span>
                                  </div>
                              </div>
                              <div class="slider-nav__arrows">
                                  <div class="nav-arrows">
                                      <button type="button" class="nav-arrows__button nav-arrows__button--prev" title="Назад" aria-label="Назад">
                                          <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
                                              <g fill="none" stroke-width="2">
                                                  <path d="m11.5 20.5-4.73-4.73 4.73-4.77" />
                                                  <path d="m25.23 15.77h-17" stroke-linecap="square" />
                                              </g>
                                          </svg>
                                      </button>
                                      <button type="button" class="nav-arrows__button nav-arrows__button--next" title="Вперёд" aria-label="Вперёд">
                                          <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
                                              <g fill="none" stroke-width="2">
                                                  <path d="m20.5 11 4.73 4.73-4.73 4.77" />
                                                  <path d="m23.77 15.77h-17" stroke-linecap="square" />
                                              </g>
                                          </svg>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="mb-48 mb-md-96">
          <div class="h1 mb-24 mb-md-48 mt-48 mt-md-96" data-animate>Публичный доклад</div>
          <div class="text-layout mb-48 animate" data-animate="">
              <div class="pb-md-24">
                  <div class="text-layout__text user-text text-default text-layout__text--big">
                      <p>Ежегодный публичный доклад муниципального бюджетного клубного учреждения «Городской Дом культуры "Украина" (далее — учреждение, МБКУ ГДК «Украина»), подготовлен по итогам работы учреждения в 2021 году на основе мониторинга организации работы коллективов любительского художественного творчества, любительских объединений и клубов по интересам, оказания услуг по организации и проведению концертных и культурно-массовых мероприятий, выполнения муниципального задания и включает в себя статистическую информацию, самооценку результатов и условий деятельности учреждения, на основании которой выявлены проблемы, сформулированы задачи и актуальные тенденции развития на предстоящий период. Публичный доклад составлен с целью представления результатов деятельности Учреждения, обеспечения информационной прозрачности и открытости. Коллектив авторов с благодарностью примет отзывы, замечания и предложения по ссылке на сайт УКИМП </p>
                  </div>
              </div>

          </div>
          <div class="button-group">
              <div class="button-group__item">
                  <a href="http://ukimp.muravlenko.com/publichnye-doklady/yezhegodnye-publichnye-doklady-za-2020-god/" target="_self" class="btn text-button"> <span>Оставить комментарий</span> </a>
              </div>
              <div class="button-group__item">
                  <a href="https://gdkukraina.ru/uploads/%D0%9F%D1%83%D0%B1%D0%BB%D0%B8%D1%87%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%BE%D0%BA%D0%BB%D0%B0%D0%B4_%D0%94%D0%9A_2021.pdf" target="_blank" class="btn text-button"> <span>Публичный доклад МБКУ ГДК Украина за 2021 г.</span> </a>
              </div>
              <div class="button-group__item">
                  <a href="https://gdkukraina.ru/svedeniya-o-dokhodakh/" target="_self" class="btn text-button btn-wrap"> <span>Сведения о доходах, расходах, об имуществе и обязательствах имущественного характера руководителя МБКУ ГДК «Украина» и членов его семьи</span> </a>
              </div>
          </div>
      </div>
  </div>
<?php
get_footer();
