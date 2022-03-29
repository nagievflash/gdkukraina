<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>

</main>
  <section class="footer-contacts">
      <div class="wrap-pl-1 wrap-pr-1 mb-96">
          <div class="h1 mb-24 mb-md-48 mt-24 mt-md-48 animate" data-animate="">Контакты</div>
          <div class="footer-contacts__list">
        <?php

        // Check rows exists.
        if( have_rows('contacts', 'option') ):

            // Loop through rows.
            while( have_rows('contacts', 'option') ) : the_row();?>
              <div class="footer-contacts__item text-default">
                  <div class="mb-16" data-animate>
                      <p><strong><?php the_sub_field('department');?></strong><br /><?php the_sub_field('name');?></p>
                      <a href="tel:<?php echo str_replace(array(' ', '(', ')', '-'), '', get_sub_field('phone'));?>" target="_blank" rel="noopener noreferrer"><?php the_sub_field('phone');?></a>
                  </div>
              </div>
              <?php endwhile;
              endif;?>
          </div>
      </div>
  </section>

  <footer class="footer" role="contentinfo" data-colored-bg>
        <div class="footer__wrapper wrap-pl-1 wrap-pr-1">

	        <?php
	        $args = array(
		        'container'     => '',
		        'theme_location'=> 'footer-menu',
		        'depth'         => 1,
		        'fallback_cb'   => false,
		        'items_wrap'    => '<div class="footer__nav" data-animate>%3$s</div>',
		        'link_before'   => '<span class="footer__nav-text">',
		        'link_after'    => '</span>',
	        );
	        wp_nav_menu($args);
	        ?>
            <div class="footer__info" data-animate>
                <div class="footer__info-item">
                    <a href="/about/finansovo-khozyajstvennaya-deyatelnost/" target="_blank" title="Финансово-хозяйственная деятельность" class="footer__info-link"> Финансово-хозяйственная деятельность </a>
                </div>
                <div class="footer__info-item">
                    <a href="/about/materialno-tekhnicheskoe-obespechenie/" target="_blank" title="Материально-техническое обеспечение" class="footer__info-link"> Материально-техническое обеспечение </a>
                </div>
                <div class="footer__info-item">
                    <a href="/about/protivodeystviye-korruptsi" target="_blank" title="Противодействие коррупции" class="footer__info-link"> Противодействие коррупции </a>
                </div>
            </div>
            <div class="footer__social" data-animate>
                <div class="footer__social-item">
                    <a href="https://vk.com/kinozal_dk" target="_blank" title="Мы Вконтакте" class="footer__social-link footer__social-link--icon">
                        <i class="icon is-smoll footer__social-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="currentColor">
                                <path
                                        d="M25.909 11.694l.063.1c.16.428-.362 1.41-1.562 2.948-.167.215-.393.498-.677.852-.278.342-.47.583-.574.723a5.121 5.121 0 0 0-.316.496c-.107.19-.15.33-.125.422.024.09.07.205.135.345.066.141.179.285.339.433.159.145.358.324.593.53.028.014.046.026.052.04.98.876 1.642 1.614 1.99 2.217.02.034.043.075.066.125.025.051.05.14.074.266a.745.745 0 0 1-.006.341c-.028.1-.114.192-.26.277-.146.083-.35.124-.615.124l-2.666.04a1.21 1.21 0 0 1-.582-.05 2.587 2.587 0 0 1-.541-.22l-.209-.121a4.88 4.88 0 0 1-.729-.642 17.298 17.298 0 0 1-.713-.777 3.365 3.365 0 0 0-.635-.581c-.226-.158-.422-.21-.588-.156a.822.822 0 0 0-.084.035.969.969 0 0 0-.177.145 1.25 1.25 0 0 0-.223.297 1.99 1.99 0 0 0-.178.52 3.266 3.266 0 0 0-.068.779.94.94 0 0 1-.114.461l-.042.05c-.125.127-.31.2-.552.22h-1.197c-.493.027-1-.029-1.52-.165a6.02 6.02 0 0 1-1.37-.532 12.64 12.64 0 0 1-1.073-.662 6.29 6.29 0 0 1-.733-.576l-.26-.24a6.886 6.886 0 0 1-.287-.302 21.79 21.79 0 0 1-.744-.912c-.376-.476-.744-.98-1.104-1.515a30.153 30.153 0 0 1-1.276-2.116 32.484 32.484 0 0 1-1.359-2.728.782.782 0 0 1-.062-.271.31.31 0 0 1 .031-.16l.041-.06c.105-.127.303-.19.595-.19l2.852-.02a1.067 1.067 0 0 1 .406.15l.052.03a.66.66 0 0 1 .25.32c.14.334.3.681.48 1.039.18.358.322.63.426.817l.167.29c.2.402.395.75.583 1.043.187.295.356.524.505.688.15.163.293.292.432.386.139.093.257.14.355.14a.81.81 0 0 0 .28-.05.186.186 0 0 0 .053-.05 1.623 1.623 0 0 0 .266-.692c.03-.194.063-.465.097-.813a7.326 7.326 0 0 0 0-1.254 4.398 4.398 0 0 0-.093-.73 1.812 1.812 0 0 0-.146-.462l-.062-.121c-.173-.227-.469-.371-.884-.431-.092-.014-.074-.094.05-.241.112-.127.244-.227.396-.3.368-.174 1.198-.255 2.49-.242.569.007 1.038.05 1.405.132.14.032.255.077.348.134a.546.546 0 0 1 .215.241 1.5 1.5 0 0 1 .109.321c.024.11.036.263.036.456 0 .194-.003.378-.01.552-.008.174-.016.41-.026.707-.01.298-.016.573-.016.828 0 .073-.003.213-.01.421a7.526 7.526 0 0 0-.006.481c.004.114.016.25.037.406.021.158.061.288.12.391a.664.664 0 0 0 .235.246l.176.04c.063.013.153-.024.27-.11a3.86 3.86 0 0 0 .396-.346c.146-.144.327-.368.542-.672.215-.305.451-.664.707-1.078.417-.696.788-1.448 1.115-2.257a.734.734 0 0 1 .104-.176.454.454 0 0 1 .116-.104l.04-.031.053-.025.136-.03a.4.4 0 0 1 .207-.004l2.999-.02c.27-.035.493-.026.667.024.173.05.28.106.322.166"
                                />
                            </svg>
                        </i>
                    </a>
                </div>
                <div class="footer__social-item">
                    <a href="https://ok.ru/groupgdkukraina" target="_blank" title="Наша группа в одноклассниках" class="footer__social-link footer__social-link--icon">
                        <i class="icon is-smoll footer__social-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M120.001,753.38c10.372,0,18.807-8.435,18.807-18.807c0-10.362-8.435-18.799-18.807-18.799 c-10.362,0-18.807,8.437-18.807,18.799C101.194,744.945,109.639,753.38,120.001,753.38z M120.001,689.164 c25.055,0,45.422,20.367,45.422,45.409c0,25.052-20.367,45.427-45.422,45.427c-25.049,0-45.422-20.375-45.422-45.427 C74.579,709.532,94.952,689.164,120.001,689.164z M138.378,652.109c9.247,2.107,18.165,5.765,26.377,10.925 c6.215,3.917,8.089,12.134,4.172,18.35c-3.912,6.23-12.124,8.103-18.35,4.186c-18.605-11.703-42.561-11.698-61.156,0 c-6.227,3.917-14.438,2.043-18.346-4.186c-3.917-6.221-2.049-14.433,4.168-18.35c8.211-5.154,17.129-8.818,26.376-10.925 l-25.395-25.394c-5.192-5.197-5.192-13.621,0.005-18.817c2.601-2.596,6.004-3.897,9.406-3.897c3.408,0,6.816,1.3,9.417,3.897 l24.943,24.954l24.965-24.954c5.192-5.197,13.616-5.197,18.812,0c5.202,5.196,5.202,13.626,0,18.817 C163.773,626.715,138.378,652.109,138.378,652.109z" transform="matrix(.125 0 0 -.125 0 102.5)"/>
                            </svg>
                        </i>
                    </a>
                </div>
                <div class="footer__social-item">
                    <a href="https://t.me/gdkukraina" target="_blank" title="Наш Telegram канал" class="footer__social-link footer__social-link--icon">
                        <i class="icon is-smoll footer__social-icon" aria-hidden="true">
                            <svg version="1.1" id="Bold" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
                                <path class="st0" d="M206.9,312.1l-5.8,82.3c8.4,0,12-3.6,16.4-7.9l39.3-37.6l81.4,59.6c14.9,8.3,25.5,3.9,29.5-13.7L421,144.6l0,0
                                c4.7-22-8-30.7-22.6-25.3l-314,120.2c-21.4,8.3-21.1,20.2-3.6,25.6l80.3,25l186.4-116.6c8.7-5.8,16.7-2.6,10.2,3.2L206.9,312.1z"></path>
                            </svg>
                        </i>
                    </a>
                </div>
                <div class="footer__social-item">
                    <a href="https://www.youtube.com/%D0%93%D0%B4%D0%BA%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0" target="_blank" title="Наш Youtube канал" class="footer__social-link footer__social-link--icon">
                        <i class="icon is-smoll footer__social-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="currentColor">
                                <path
                                    d="M17.051 24c-2.615 0-5.463-.08-8.463-.238-1.772-.094-3.147-1.422-3.343-3.23a41.956 41.956 0 0 1 0-9.065c.196-1.793 1.569-3.121 3.34-3.23a132.042 132.042 0 0 1 15.83 0c1.79.106 3.133 1.403 3.34 3.229.326 2.89.327 5.939 0 9.064-.188 1.807-1.529 3.106-3.336 3.232a107.13 107.13 0 0 1-7.368.238zM16.44 8.858c-2.607 0-5.231.08-7.8.237-1.353.083-2.364 1.073-2.515 2.463a41.131 41.131 0 0 0 0 8.883c.151 1.402 1.16 2.392 2.511 2.464 2.984.156 5.816.236 8.415.236 2.595 0 5.053-.08 7.306-.236 1.363-.095 2.376-1.084 2.52-2.462.32-3.065.32-6.053 0-8.883-.158-1.395-1.169-2.385-2.515-2.465a134.312 134.312 0 0 0-7.922-.237zm-2.19 4.1v5.894l5.823-2.927-5.822-2.968z"
                                />
                            </svg>
                        </i>
                    </a>
                </div>
                <div class="footer__social-item">
                    <a href="mailto:gdk@gdkukraina.ru" target="_blank" title="Написать нам письмо" class="footer__social-link footer__social-link--icon">
                        <i class="icon is-smoll footer__social-icon" aria-hidden="true">
                            <svg fill="none" height="32" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="currentColor">
                                    <rect height="14" rx="1.5" width="21" x="5.5" y="8.5"></rect>
                                    <path d="m5.95652 8.93751 8.84678 6.60639c.7098.53 1.6836.53 2.3934 0l8.8468-6.60639"></path>
                                </g>
                            </svg>
                        </i>
                    </a>
                </div>
            </div>
            <div class="footer__copyright" data-animate>
                <span class="footer__copyright-text">© 2021 Муниципальное бюджетное клубное учреждение «Городской Дом культуры «Украина»<br />
                    При использовании материалов сайта ссылка на источник обязательна.<br />
                    ИНН 8906006479<br />
                    ОГРН 1038901060318
                </span>
                <a href="https://axiomadigital.ru" target="_blank" class="footer__logo">
                    Разработано в
                    <i class="icon is-smoll footer__logo-icon" aria-hidden="true">
                        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 164 31" style="enable-background:new 0 0 164 31;"> <title>Axioma logo</title> <g> <path d="M8.1,30.9c-2.2,0-4-0.6-5.4-1.9c-1.4-1.2-2-2.9-2-4.9c0-2.2,0.8-3.8,2.4-4.9c1.6-1.1,3.4-1.7,5.5-1.6c2,0,3.7,0.3,5.2,1 v-0.3c0-1.5-0.6-2.4-1.7-2.8c-0.9-0.3-1.9-0.5-3-0.5c-2.2,0-4.1,0.5-5.9,1.5v-5.6c2.1-1,4.6-1.5,7.6-1.5c3,0,5.4,0.7,7.2,2.2 c1.8,1.5,2.8,3.5,2.8,6v6.2c0,0.7,0.4,1.1,1.2,1.1c0.5,0,0.9-0.1,1.2-0.2v5c-0.9,0.7-2.1,1-3.6,1c-2.4,0-4.1-0.8-5-2.3 C13,30.1,10.8,30.9,8.1,30.9z M10.5,26.2c1.4,0,2.5-0.6,3.3-1.8v-2.1c-0.8-0.6-1.8-0.9-3-0.9c-0.9,0-1.7,0.2-2.3,0.7 c-0.6,0.5-0.9,1-0.9,1.8c0,0.7,0.3,1.3,0.8,1.7C9,26,9.7,26.2,10.5,26.2z"/> <path d="M31.6,30.4H24l7.3-10.5l-6.8-9.8h7.7l3.3,5l3.3-5h7.7l-6.8,9.8L47,30.4h-7.8l-3.8-5.6L31.6,30.4z"/> <path d="M52.8,8.3c-1.1,0-2.1-0.4-2.9-1.2s-1.2-1.8-1.2-2.9c0-1.1,0.4-2.1,1.2-2.9c0.8-0.8,1.7-1.2,2.9-1.2c1.1,0,2.1,0.4,2.9,1.2 c0.8,0.8,1.2,1.8,1.2,2.9c0,1.1-0.4,2.1-1.2,2.9C54.9,7.9,53.9,8.3,52.8,8.3z M56.4,30.4h-7.1V10.1h7.1V30.4z"/> <path d="M79,27.9c-2.1,2-4.9,3-8.2,3c-3.3,0-6.1-1-8.2-3c-2.2-2-3.2-4.6-3.2-7.6c0-3,1.1-5.6,3.2-7.6c2.2-2.1,4.9-3.1,8.2-3.1 c3.3,0,6,1,8.2,3.1c2.2,2,3.2,4.6,3.2,7.6C82.3,23.3,81.2,25.9,79,27.9z M75.3,20.3c0-1.3-0.4-2.4-1.3-3.3 c-0.9-0.9-1.9-1.3-3.2-1.3c-1.3,0-2.3,0.4-3.2,1.3c-0.9,0.9-1.3,2-1.3,3.3c0,1.3,0.4,2.4,1.3,3.3c0.8,0.9,1.9,1.3,3.2,1.3 c1.3,0,2.4-0.4,3.2-1.3C74.9,22.7,75.3,21.6,75.3,20.3z"/> <path d="M92.2,30.4h-7.1V10.1h7.1v2.4c1.5-1.9,3.5-2.9,6.2-2.9c1.2,0,2.3,0.3,3.3,1c1,0.7,1.8,1.4,2.3,2.4c0.7-1,1.6-1.8,2.8-2.4 c1.2-0.6,2.5-0.9,3.8-0.9c2.2,0,3.9,0.7,5.3,2.1c1.3,1.4,2,3.4,2,6v12.7h-7.1V19.1c0-2.2-0.9-3.3-2.6-3.3c-1.4,0-2.5,0.6-3.2,1.9 v12.7H98V19.1c0-2.2-0.9-3.3-2.6-3.3c-1.4,0-2.5,0.6-3.2,1.9V30.4z"/> <path d="M127.4,30.9c-2.2,0-4-0.6-5.4-1.9c-1.4-1.2-2-2.9-2-4.9c0-2.2,0.8-3.8,2.4-4.9c1.6-1.1,3.4-1.7,5.5-1.6c2,0,3.7,0.3,5.2,1 v-0.3c0-1.5-0.6-2.4-1.7-2.8c-0.9-0.3-1.9-0.5-3-0.5c-2.2,0-4.1,0.5-5.9,1.5v-5.6c2.1-1,4.6-1.5,7.6-1.5c3,0,5.4,0.7,7.2,2.2 c1.8,1.5,2.8,3.5,2.8,6v6.2c0,0.7,0.4,1.1,1.2,1.1c0.5,0,0.9-0.1,1.2-0.2v5c-0.9,0.7-2.1,1-3.6,1c-2.4,0-4.1-0.8-5-2.3 C132.2,30.1,130,30.9,127.4,30.9z M129.8,26.2c1.4,0,2.5-0.6,3.3-1.8v-2.1c-0.8-0.6-1.8-0.9-3-0.9c-0.9,0-1.7,0.2-2.3,0.7 c-0.6,0.5-0.9,1-0.9,1.8c0,0.7,0.3,1.3,0.8,1.7C128.2,26,128.9,26.2,129.8,26.2z"/> <path d="M151.4,29.7c-0.8,0.8-1.8,1.2-3,1.2s-2.2-0.4-3-1.2c-0.8-0.8-1.2-1.8-1.2-3c0-1.2,0.4-2.2,1.2-3c0.8-0.8,1.8-1.2,3-1.2 s2.2,0.4,3,1.2c0.8,0.8,1.2,1.8,1.2,3C152.6,27.9,152.2,28.9,151.4,29.7z"/> </g> </svg>
                    </i>
                </a>
            </div>
        </div>
    </footer>
    <div class="popup-message-group">
        <div class="popup-message" id="success-registration" aria-hidden="true">
            <div class="popup-message__overlay" tabindex="-1" data-micromodal-close>
                <div class="popup-message__inner" role="dialog" aria-modal="true">
                    <header class="popup-message__header">
                        <div class="popup-message__title h1">
                            Регистрация прошла успешно!
                        </div>
                        <button class="popup-message__close" aria-label="Close modal" data-micromodal-close></button>
                    </header>
                    <div class="popup-message__content user-text">
                        На указанный email вы получите письмо с подробной информацией о дне открытых дверей.
                    </div>
                    <footer class="popup-message__footer">
                        <div class="button-group">
                            <div class="button-group__item">
                                <a href="#" class="btn text-button popup-message__button" data-micromodal-close>
                                    <span>Понятно</span>
                                </a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <div class="popup-message" id="success-send" aria-hidden="true">
            <div class="popup-message__overlay" tabindex="-1" data-micromodal-close>
                <div class="popup-message__inner" role="dialog" aria-modal="true">
                    <header class="popup-message__header">
                        <div class="popup-message__title h1">
                            Спасибо за заявку!
                        </div>
                        <button class="popup-message__close" aria-label="Close modal" data-micromodal-close></button>
                    </header>
                    <div class="popup-message__content user-text">
                        Наши специалисты свяжутся с вами в ближайшее время
                    </div>
                    <footer class="popup-message__footer">
                        <div class="button-group">
                            <div class="button-group__item">
                                <a href="#" class="btn text-button popup-message__button" data-micromodal-close>
                                    <span>Понятно</span>
                                </a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <div class="popup-message popup-message--fail" id="fail-registration" aria-hidden="true">
            <div class="popup-message__overlay" tabindex="-1" data-micromodal-close>
                <div class="popup-message__inner" role="dialog" aria-modal="true">
                    <header class="popup-message__header">
                        <div class="popup-message__title h1">
                            Ой!
                        </div>
                        <button class="popup-message__close" aria-label="Close modal" data-micromodal-close></button>
                    </header>
                    <div class="popup-message__content user-text">
                        Что-то пошло не так
                    </div>
                    <footer class="popup-message__footer"></footer>
                </div>
            </div>
        </div>
    </div>
    <div class="blind-panel" data-blind-panel>
        <button class="blind-panel__close" data-blind-panel-close></button>
        <div class="blind-panel__title h2">Версия для слабовидящих</div>
        <div class="blind-panel__item">
            <div class="blind-panel__item-title">Размер шрифта:</div>
            <div class="blind-panel__controls-panel" data-blind-controls="text-large">
                <div class="blind-panel__control" data-control="false"><span>Aб</span></div>
                <div class="blind-panel__control" data-control="true"><span>Аб</span></div>
            </div>
        </div>
        <div class="blind-panel__item">
            <div class="blind-panel__item-title">Цветовая схема:</div>
            <div class="blind-panel__controls-panel" data-blind-controls="color">
                <div class="blind-panel__control" data-control="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.71 43.71" width="28px" height="28px" fill="currentColor">
                        <path d="M21.86,0A21.86,21.86,0,1,0,43.71,21.86,21.85,21.85,0,0,0,21.86,0ZM4.37,21.86A17.51,17.51,0,0,1,21.86,4.37v35A17.51,17.51,0,0,1,4.37,21.86Z" />
                    </svg>
                </div>
                <div class="blind-panel__control" data-control="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.71 43.71" width="28px" height="28px" fill="currentColor">
                        <path d="M21.86,0A21.86,21.86,0,1,0,43.71,21.86,21.85,21.85,0,0,0,21.86,0ZM4.37,21.86A17.51,17.51,0,0,1,21.86,4.37v35A17.51,17.51,0,0,1,4.37,21.86Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="blind-panel__item">
            <div class="blind-panel__item-title">Изображения:</div>
            <div class="blind-panel__controls-panel" data-blind-controls="disable-images">
                <div class="blind-panel__control" data-control="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.71 43.71" width="28" height="28" fill="#fff">
                        <path
                            d="M43.71,3.17A3.16,3.16,0,0,0,40.55,0H3.17A3.17,3.17,0,0,0,0,3.17V40.55a3.16,3.16,0,0,0,3.17,3.16H40.55a3.15,3.15,0,0,0,3.16-3.16ZM36.28,34.6H7.49c-.79,0-1.06-.71-.61-1.35L15.2,21.34a1.17,1.17,0,0,1,1.84-.2l1.68,1.67a1.27,1.27,0,0,0,1.92-.1l4-4.91a1,1,0,0,1,1.72.07L36.9,33.24C37.35,33.89,37.07,34.6,36.28,34.6Zm-2-14.49a3.44,3.44,0,1,1,3.44-3.44A3.44,3.44,0,0,1,34.27,20.11Z"
                        />
                    </svg>
                </div>
                <div class="blind-panel__control" data-control="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.71 45.71" width="28" height="28">
                        <path
                            fill="none"
                            stroke="#fff"
                            stroke-miterlimit="10"
                            stroke-width="2px"
                            opacity=".3"
                            d="M41.55,1H4.17A3.17,3.17,0,0,0,1,4.17V41.55a3.16,3.16,0,0,0,3.17,3.16H41.55a3.15,3.15,0,0,0,3.16-3.16V4.17A3.16,3.16,0,0,0,41.55,1Z"
                        />
                        <polygon fill="#fff" points="33.71 31.65 31.65 33.71 22.86 24.93 14.07 33.71 12 31.65 20.79 22.86 12 14.07 14.07 12 22.86 20.79 31.65 12 33.71 14.07 24.93 22.86 33.71 31.65" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Закрыть (Esc)"></button>
                    <button class="pswp__button pswp__button--fs" title="Полноэкранный режим"></button>
                    <button class="pswp__button pswp__button--zoom" title="Приблизить/отдалить"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Назад"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Вперед"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="scroll-up-btn" data-scroll-up-btn>
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="currentColor">
            <g fill="none" stroke-width="2">
                <path d="m11.27 11.27 4.73-4.73 4.73 4.73" />
                <path d="m16 25v-17" stroke-linecap="square" />
            </g>
        </svg>
    </button>
    <button type="button" class="query-button" data-query-button>?</button>
    <div class="right-menu" id="right-menu">
        <div class="right-menu__bg js-close-right-menu" data-target="#right-menu"></div>
        <div class="right-menu__content">
            <button type="button" class="right-menu__close js-close-right-menu" data-target="#right-menu"></button>
            <div class="right-menu__title h1">Виртуальная приемная</div>
            <div class="right-menu__description-text user-text">
                <p>Для того чтобы Ваше обращение было обработано максимально эффективно, рекомендуем ознакомиться с правилами:</p>

                <p>В соответствии с ч. 1 ст. 7 Федерального Закона от 02.05.2006 № 59-ФЗ "О порядке рассмотрения обращений граждан Российской Федерации" (далее Федеральный закон № 59-ФЗ) гражданин в своем письменном обращении в обязательном порядке указывает либо наименование государственного органа или органа местного самоуправления, в которые направляет письменное обращение, либо фамилию, имя отчество соответствующего должностного лица, либо должность соответствующего лица, а также свои фамилию, имя, отчество (последнее — при наличии), почтовый адрес, по которому должны быть направлены ответ, уведомление о переадресации обращения, излагает суть предложения, заявления или жалобы, ставит личную подпись и дату.</p>

                <p>Частью 3 ст. 7 Федерального закона № 59-ФЗ предусмотрено, что обращение, поступившее в государственный орган, орган местного самоуправления или должностному лицу в форме электронного документа, подлежит рассмотрению в порядке, установленном настоящим Федеральным законом. В обращении гражданин в обязательном порядке указывает свои фамилию, имя, отчество (последнее — при наличии), адрес электронной почты, если ответ должен быть направлен в форме электронного документа, и почтовый адрес, если ответ должен быть направлен в письменной форме.</p>

                <p>В случае отсутствия указанных обязательных реквизитов обращение может быть оставлено без ответа. Кроме того, без ответа по существу поставленных вопросов останется письменное обращение, в котором содержатся нецензурные либо оскорбительные выражения, угрозы жизни, здоровью и имуществу должностного лица, а также членов его семьи.</p>

                <p>Просим Вас руководствоваться указанными требованиями законодательства, заполнять все предложенные реквизиты и четко формулировать суть обращения.</p>

                <p>Информация о персональных данных граждан, направивших запрос в электронном виде, хранится и обрабатывается с соблюдением российского законодательства о персональных данных.</p>

                <p>Внимание! Ваши персональные данные будут использованы только в целях хранения, накопления, систематизации, уточнения и обработки в рамках исполнения ваших обращений, и не могут передаваться третьим лицам с другими целями.</p>
            </div>
	        <?php echo do_shortcode('[contact-form-7 id="3957" title="Виртуальная приемная" html_id="priyemnaya" html_class="form contact-form right-menu__form"]');?>

            <div class="right-menu__bottom-text user-text">
                <b>Телефон для справок</b>
                <a href="tel:+73493827548">+7 (34938) 27-5-48</a>
            </div>
        </div>
    </div>
    <div class="query-window" data-query-window>
        <div class="query-window__bg bg-blue"></div>
        <button type="button" class="query-window__close" data-query-window-close>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" stroke="currentColor">
                <path d="M8.485 8.485l16.97 16.97m.001-16.97l-16.97 16.97" fill="none" />
            </svg>
        </button>
        <div class="query-window__inner">
            <div class="query-window__heading h2">Задать вопрос</div>
            <div class="query-window__list">
                <div class="query-window-item-shell">
                    <a href="https://vk.com/write-43917220" target="_blank" class="query-window-item text-default">
                        <span class="query-window-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="currentColor">
                                <path
                                    d="M25.909 11.694l.063.1c.16.428-.362 1.41-1.562 2.948-.167.215-.393.498-.677.852-.278.342-.47.583-.574.723a5.121 5.121 0 0 0-.316.496c-.107.19-.15.33-.125.422.024.09.07.205.135.345.066.141.179.285.339.433.159.145.358.324.593.53.028.014.046.026.052.04.98.876 1.642 1.614 1.99 2.217.02.034.043.075.066.125.025.051.05.14.074.266a.745.745 0 0 1-.006.341c-.028.1-.114.192-.26.277-.146.083-.35.124-.615.124l-2.666.04a1.21 1.21 0 0 1-.582-.05 2.587 2.587 0 0 1-.541-.22l-.209-.121a4.88 4.88 0 0 1-.729-.642 17.298 17.298 0 0 1-.713-.777 3.365 3.365 0 0 0-.635-.581c-.226-.158-.422-.21-.588-.156a.822.822 0 0 0-.084.035.969.969 0 0 0-.177.145 1.25 1.25 0 0 0-.223.297 1.99 1.99 0 0 0-.178.52 3.266 3.266 0 0 0-.068.779.94.94 0 0 1-.114.461l-.042.05c-.125.127-.31.2-.552.22h-1.197c-.493.027-1-.029-1.52-.165a6.02 6.02 0 0 1-1.37-.532 12.64 12.64 0 0 1-1.073-.662 6.29 6.29 0 0 1-.733-.576l-.26-.24a6.886 6.886 0 0 1-.287-.302 21.79 21.79 0 0 1-.744-.912c-.376-.476-.744-.98-1.104-1.515a30.153 30.153 0 0 1-1.276-2.116 32.484 32.484 0 0 1-1.359-2.728.782.782 0 0 1-.062-.271.31.31 0 0 1 .031-.16l.041-.06c.105-.127.303-.19.595-.19l2.852-.02a1.067 1.067 0 0 1 .406.15l.052.03a.66.66 0 0 1 .25.32c.14.334.3.681.48 1.039.18.358.322.63.426.817l.167.29c.2.402.395.75.583 1.043.187.295.356.524.505.688.15.163.293.292.432.386.139.093.257.14.355.14a.81.81 0 0 0 .28-.05.186.186 0 0 0 .053-.05 1.623 1.623 0 0 0 .266-.692c.03-.194.063-.465.097-.813a7.326 7.326 0 0 0 0-1.254 4.398 4.398 0 0 0-.093-.73 1.812 1.812 0 0 0-.146-.462l-.062-.121c-.173-.227-.469-.371-.884-.431-.092-.014-.074-.094.05-.241.112-.127.244-.227.396-.3.368-.174 1.198-.255 2.49-.242.569.007 1.038.05 1.405.132.14.032.255.077.348.134a.546.546 0 0 1 .215.241 1.5 1.5 0 0 1 .109.321c.024.11.036.263.036.456 0 .194-.003.378-.01.552-.008.174-.016.41-.026.707-.01.298-.016.573-.016.828 0 .073-.003.213-.01.421a7.526 7.526 0 0 0-.006.481c.004.114.016.25.037.406.021.158.061.288.12.391a.664.664 0 0 0 .235.246l.176.04c.063.013.153-.024.27-.11a3.86 3.86 0 0 0 .396-.346c.146-.144.327-.368.542-.672.215-.305.451-.664.707-1.078.417-.696.788-1.448 1.115-2.257a.734.734 0 0 1 .104-.176.454.454 0 0 1 .116-.104l.04-.031.053-.025.136-.03a.4.4 0 0 1 .207-.004l2.999-.02c.27-.035.493-.026.667.024.173.05.28.106.322.166"
                                />
                            </svg>
                        </span>
                        <span class="query-window-item__text">Написать ВKонтакте</span>
                    </a>
                </div>
                <div class="query-window-item-shell">
                    <a href="/about/ostavit-otzyv/" target="_blank" class="query-window-item text-default">
                        <span class="query-window-item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="currentColor">
                                <path
                                    d="M24.601 8.34A11.416 11.416 0 0 0 16.5 5a11.474 11.474 0 0 0-8.113 3.337C6.205 10.493 5.003 13.357 5 16.393v.006c0 1.838.484 3.691 1.4 5.383L5.032 28l6.296-1.43a11.532 11.532 0 0 0 5.168 1.226h.005c3.054 0 5.936-1.185 8.113-3.337C26.796 22.3 28 19.439 28 16.402c0-3.016-1.206-5.88-3.399-8.062zM16.5 26.001h-.004a9.72 9.72 0 0 1-4.616-1.169l-.298-.161-4.186.95.91-4.128-.176-.302c-.872-1.501-1.332-3.159-1.332-4.794.003-5.292 4.355-9.602 9.702-9.602a9.63 9.63 0 0 1 6.834 2.817c1.852 1.843 2.87 4.254 2.87 6.79C26.201 21.695 21.848 26 16.499 26z"
                                />
                            </svg>
                        </span>
                        <span class="query-window-item__text">Оставить отзыв</span>
                    </a>
                </div>
                <div class="query-window-item-shell">
                    <a href="/" target="_self" class="query-window-item text-default js-open-right-menu " data-target="#right-menu">
                        <span class="query-window-item__icon">
                            <svg viewBox="0 0 32 32" width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path
                                    d="m16 28a12 12 0 1 1 12-12 12 12 0 0 1 -12 12zm3.39-14.49a2.17 2.17 0 0 0 -.92-1.82 4.1 4.1 0 0 0 -2.47-.69 7.68 7.68 0 0 0 -1.72.19 6.86 6.86 0 0 0 -1.25.36v1.94h.26a4.45 4.45 0 0 1 1.02-.49 3.3 3.3 0 0 1 1-.2 2.09 2.09 0 0 1 1.16.27 1 1 0 0 1 .41.91 1.49 1.49 0 0 1 -.21.77 2.36 2.36 0 0 1 -.59.59 3.36 3.36 0 0 1 -.77.41c-.24.09-.52.17-.82.25v2.14h2.24v-1.47a7.26 7.26 0 0 0 1.09-.52 4 4 0 0 0 .82-.65 2.68 2.68 0 0 0 .54-.85 3.33 3.33 0 0 0 .21-1.14zm-2.45 7.16v-1.67h-2.57v1.68z"
                                />
                            </svg>
                        </span>
                        <span class="query-window-item__text">Виртуальная приемная</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/core.min.js?1585037128248810"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/core_ajax.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/core_promise.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/promise.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/loadext.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/extension.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/find.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/includes.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/matches.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/closest.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/main.polyfill.fill.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/core.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/intersectionobserver.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/lazyload.bundle.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/parambag.bundle.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/vendors.js"></script>
      <link rel="stylesheet" href="/wp-content/themes/dkukraina/assets/css/core.css">

      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/jquery-2.1.3.min.min.js?158290333284283"></script>


      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/loadCashIfNoJQuery.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/critical.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/components.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/vendors.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/app.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/script.js"></script>

      <link rel="stylesheet" href="/wp-content/themes/dkukraina/assets/css/app.css">


      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/template_v1.js"></script>
      <script type="text/javascript" src="/wp-content/themes/dkukraina/assets/js/index.js"></script>




      <script>
      	$("a.main-nav__item-link[href='/rabotnikam/']").attr('href', 'javascript:void()');
      </script>

        <link href="https://widget.premierzal.ru/widget.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://widget.premierzal.ru/widget.js"></script>
        <script>
            jQuery(document).ready(function() {
                jQuery('.schedule .premier-widget').click(function () {
                    let theatreID = '5e35bebd-c5ce-41a0-abdd-cdcc92cf3a44'
                    let sessionID = $(this).data('session')
                    window.initPaymentWidget('body', theatreID, sessionID, 'https://widget.premierzal.ru')
                })
            })
        </script>
        <script type="text/javascript" src="https://widget.premierzal.ru/widget.js"></script>
        <script>
            $('.movie-item__button').click(function (){
                window.initPaymentWidget('body', '5e35bebd-c5ce-41a0-abdd-cdcc92cf3a44', $(this).data('session'), 'https://widget.premierzal.ru')
            })
            $('.main-nav__item-link[href="#"]').click(function(){
                $(this).parent().find('.main-nav__submenu-toggle:first').click()
            })
        </script>

        <script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=22937" data-pixel-id="22937"></script>
  </body>
</html>
