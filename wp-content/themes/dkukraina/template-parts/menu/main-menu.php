<div class="navigation-menu__main-nav">
	<div class="main-nav">
        <?php
        $items_wrap = '<ul id="%1$s" class="main-nav__list %2$s" data-delay="0.1">%3$s</ul>';
        wp_nav_menu([
	        'theme_location'    => 'primary-menu',
	        'menu_class'        => 'main-nav__list',
	        'container'         => 'ul',
	        'container_class'   => 'header__main-nav',
            'items_wrap'        => $items_wrap,
            'walker'            => new Main_Walker_Nav_Menu()
        ]);
        ?>
        <!--
		<ul class="main-nav__list" data-delay="0.1">
            <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                <div class="nav-item__bg"></div>
                <a href="/" class="main-nav__item-link" title="Главная" target="_self">Главная</a>
                <button class="main-nav__submenu-toggle"></button>
            </li>
			<li class="main-nav__item main-nav__item--has-submenu" data-animate>
				<div class="nav-item__bg"></div>
				<a href="/about/" class="main-nav__item-link" title="Об учреждении" target="_self">Об учреждении</a>
				<button class="main-nav__submenu-toggle"></button>
				<ul class="main-nav__list main-nav__list--submenu level-1">
					<li class="main-nav__item-backward">
						<button class="item-backward__btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
								<path d="M33.485 29L25 37.485 16.515 29M25 37V13" fill="none" fill-rule="evenodd" stroke="#FFF" />
							</svg>
						</button>
						<a href="/about/" title="Основные сведения" target="_self" class="item-backward__link">Основные сведения</a>
					</li>
					<li class="main-nav__item main-nav__item--has-submenu" data-animate>
						<div class="nav-item__bg"></div>
						<a href="" class="main-nav__item-link" title="Структура и руководство" target="_self">Структура и руководство</a>
					</li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="Документация" target="_self">Документация</a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="Услуги" target="_self">Услуги</a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="Плановые и фактические показатели деятельности" target="_self">Плановые и фактические показатели деятельности </a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="Материально-техническое обеспечение" target="_self">Материально-техническое обеспечение</a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="Коллективы" target="_self">Коллективы</a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="Любительские объединения и клубы по интересам" target="_self">Любительские объединения и клубы по интересам</a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="https://rabota.yanao.ru/Employer/DetailVacancy/?companyId=5566b865-485c-11e3-9daf-005056876601" class="main-nav__item-link" title="Вакансии" target="_href">Вакансии</a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="Оставить отзыв" target="_self">Оставить отзыв</a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="Мультимедиа" target="_self">Мультимедиа</a>
                    </li>
                    <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                        <div class="nav-item__bg"></div>
                        <a href="" class="main-nav__item-link" title="FAQ" target="_self">FAQ</a>
                    </li>
                </ul>
			</li>
            <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                <div class="nav-item__bg"></div>
                <a href="/kinozal/" class="main-nav__item-link" title="Кинозал" target="_self">Кинозал</a>
                <button class="main-nav__submenu-toggle"></button>
            </li>
            <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                <div class="nav-item__bg"></div>
                <a href="/events/" class="main-nav__item-link" title="События" target="_self">События</a>
                <button class="main-nav__submenu-toggle"></button>
            </li>
            <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                <div class="nav-item__bg"></div>
                <a href="/" class="main-nav__item-link" title="Сведения о доходах" target="_self">Сведения о доходах</a>
                <button class="main-nav__submenu-toggle"></button>
            </li>
            <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                <div class="nav-item__bg"></div>
                <a href="/" class="main-nav__item-link" title="Политика конфиденциальности" target="_self">Политика конфиденциальности</a>
                <button class="main-nav__submenu-toggle"></button>
            </li>
            <li class="main-nav__item main-nav__item--has-submenu" data-animate>
                <div class="nav-item__bg"></div>
                <a href="/contacts/" class="main-nav__item-link" title="Контакты" target="_self">Контакты</a>
                <button class="main-nav__submenu-toggle"></button>
            </li>
		</ul>

		</div>-->
    <ul class="profile-nav__list js-nav" id="profile-nav" data-delay="0.1">
        <li class="profile-nav__title" data-animate>Личный кабинет</li>
    </ul>
    <div class="search-nav js-nav" id="search-nav" data-delay="0.1">
        <div class="search-nav__top" data-animate-menu>
            <form class="search-form" action="/">
                <div class="field field-search">
                    <div class="control">
                        <div class="input-shell">
                            <input type="text" name="s" class="input is-white" placeholder="Введите запрос" />
                            <button class="field-search__btn is-white" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" stroke="currentColor">
                                    <g fill="none">
                                        <g transform="rotate(-45 18.036 2.636)">
                                            <path d="M7.423 15.5h1v5.923h-1z" />
                                            <circle cx="7.5" cy="7.5" r="7.5" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="main-nav__promo" data-animate-menu></div>
    <div class="main-nav__info" data-animate-menu>
        <div class="info-links">
            <ul class="info-links__list">
                <li class="info-links__item">
                    <a href="/news/" class="info-links__item-link" target="_self" title="Новости учреждения">
                        <i class="icon is-large" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M0 0h32v32H0z" />
                                    <path
                                            d="M24 16v6.358c0 .907-.672 1.642-1.5 1.642s-1.5-.735-1.5-1.642V16h3zm-3.689-7v13.403A2.2 2.2 0 0 0 21 24H10.616C9.723 24 9 23.27 9 22.37V9h11.311zm-1.539 2H15.05v5.043h3.723V11zm-8.489 11.185h8.29v-.625h-8.29v.625zm0-2.127h8.29v-.625h-8.29v.625zm0-2h8.29v-.625h-8.29v.625zm.036-2.015h3.478v-.625h-3.478v.625zm0-1.923h3.478v-.625h-3.478v.625zm0-1.923h3.478v-.625h-3.478v.625z"
                                            fill="currentColor"
                                            fill-rule="nonzero"
                                    />
                                </g>
                            </svg>
                        </i>
                        <span class="info-links-text">Новости учреждения</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="info-contacts">
            <ul class="info-contacts__list">
                <li class="info-contacts__item">
                    <div class="contacts-group">
                        <div class="contacts-group__title">Телефон для справок</div>
                        <ul class="contacts-group__list">
                            <li class="contacts-group__item">
                                <a href="tel:+73493827548">+7 (34938) 27-5-48</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-nav__social" data-animate-menu>
        <div class="social-block social">
            <ul class="social__list">
                <li class="social__item">
                    <a href="https://vk.com/kinozal_dk" class="social__item-link" target="_blank" title="Мы Вконтакте">
                        <i class="icon is-large" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="currentColor">
                                <path
                                        d="M25.909 11.694l.063.1c.16.428-.362 1.41-1.562 2.948-.167.215-.393.498-.677.852-.278.342-.47.583-.574.723a5.121 5.121 0 0 0-.316.496c-.107.19-.15.33-.125.422.024.09.07.205.135.345.066.141.179.285.339.433.159.145.358.324.593.53.028.014.046.026.052.04.98.876 1.642 1.614 1.99 2.217.02.034.043.075.066.125.025.051.05.14.074.266a.745.745 0 0 1-.006.341c-.028.1-.114.192-.26.277-.146.083-.35.124-.615.124l-2.666.04a1.21 1.21 0 0 1-.582-.05 2.587 2.587 0 0 1-.541-.22l-.209-.121a4.88 4.88 0 0 1-.729-.642 17.298 17.298 0 0 1-.713-.777 3.365 3.365 0 0 0-.635-.581c-.226-.158-.422-.21-.588-.156a.822.822 0 0 0-.084.035.969.969 0 0 0-.177.145 1.25 1.25 0 0 0-.223.297 1.99 1.99 0 0 0-.178.52 3.266 3.266 0 0 0-.068.779.94.94 0 0 1-.114.461l-.042.05c-.125.127-.31.2-.552.22h-1.197c-.493.027-1-.029-1.52-.165a6.02 6.02 0 0 1-1.37-.532 12.64 12.64 0 0 1-1.073-.662 6.29 6.29 0 0 1-.733-.576l-.26-.24a6.886 6.886 0 0 1-.287-.302 21.79 21.79 0 0 1-.744-.912c-.376-.476-.744-.98-1.104-1.515a30.153 30.153 0 0 1-1.276-2.116 32.484 32.484 0 0 1-1.359-2.728.782.782 0 0 1-.062-.271.31.31 0 0 1 .031-.16l.041-.06c.105-.127.303-.19.595-.19l2.852-.02a1.067 1.067 0 0 1 .406.15l.052.03a.66.66 0 0 1 .25.32c.14.334.3.681.48 1.039.18.358.322.63.426.817l.167.29c.2.402.395.75.583 1.043.187.295.356.524.505.688.15.163.293.292.432.386.139.093.257.14.355.14a.81.81 0 0 0 .28-.05.186.186 0 0 0 .053-.05 1.623 1.623 0 0 0 .266-.692c.03-.194.063-.465.097-.813a7.326 7.326 0 0 0 0-1.254 4.398 4.398 0 0 0-.093-.73 1.812 1.812 0 0 0-.146-.462l-.062-.121c-.173-.227-.469-.371-.884-.431-.092-.014-.074-.094.05-.241.112-.127.244-.227.396-.3.368-.174 1.198-.255 2.49-.242.569.007 1.038.05 1.405.132.14.032.255.077.348.134a.546.546 0 0 1 .215.241 1.5 1.5 0 0 1 .109.321c.024.11.036.263.036.456 0 .194-.003.378-.01.552-.008.174-.016.41-.026.707-.01.298-.016.573-.016.828 0 .073-.003.213-.01.421a7.526 7.526 0 0 0-.006.481c.004.114.016.25.037.406.021.158.061.288.12.391a.664.664 0 0 0 .235.246l.176.04c.063.013.153-.024.27-.11a3.86 3.86 0 0 0 .396-.346c.146-.144.327-.368.542-.672.215-.305.451-.664.707-1.078.417-.696.788-1.448 1.115-2.257a.734.734 0 0 1 .104-.176.454.454 0 0 1 .116-.104l.04-.031.053-.025.136-.03a.4.4 0 0 1 .207-.004l2.999-.02c.27-.035.493-.026.667.024.173.05.28.106.322.166"
                                />
                            </svg>
                        </i>
                    </a>
                </li>
                <li class="social__item">
                    <a href="https://ok.ru/groupgdkukraina" class="social__item-link" target="_blank" title="Мы в Одноклассниках">
                        <i class="icon is-large" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M120.001,753.38c10.372,0,18.807-8.435,18.807-18.807c0-10.362-8.435-18.799-18.807-18.799 c-10.362,0-18.807,8.437-18.807,18.799C101.194,744.945,109.639,753.38,120.001,753.38z M120.001,689.164 c25.055,0,45.422,20.367,45.422,45.409c0,25.052-20.367,45.427-45.422,45.427c-25.049,0-45.422-20.375-45.422-45.427 C74.579,709.532,94.952,689.164,120.001,689.164z M138.378,652.109c9.247,2.107,18.165,5.765,26.377,10.925 c6.215,3.917,8.089,12.134,4.172,18.35c-3.912,6.23-12.124,8.103-18.35,4.186c-18.605-11.703-42.561-11.698-61.156,0 c-6.227,3.917-14.438,2.043-18.346-4.186c-3.917-6.221-2.049-14.433,4.168-18.35c8.211-5.154,17.129-8.818,26.376-10.925 l-25.395-25.394c-5.192-5.197-5.192-13.621,0.005-18.817c2.601-2.596,6.004-3.897,9.406-3.897c3.408,0,6.816,1.3,9.417,3.897 l24.943,24.954l24.965-24.954c5.192-5.197,13.616-5.197,18.812,0c5.202,5.196,5.202,13.626,0,18.817 C163.773,626.715,138.378,652.109,138.378,652.109z" transform="matrix(.125 0 0 -.125 0 102.5)"/>
                            </svg>
                        </i>
                    </a>
                </li>
                <li class="social__item">
                    <a href="https://t.me/gdkukraina" class="social__item-link" target="_blank" title="Наш Telegram Канал">
                        <i class="icon is-large" aria-hidden="true">
                            <svg version="1.1" id="Bold" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
                                <path class="st0" d="M206.9,312.1l-5.8,82.3c8.4,0,12-3.6,16.4-7.9l39.3-37.6l81.4,59.6c14.9,8.3,25.5,3.9,29.5-13.7L421,144.6l0,0
                                c4.7-22-8-30.7-22.6-25.3l-314,120.2c-21.4,8.3-21.1,20.2-3.6,25.6l80.3,25l186.4-116.6c8.7-5.8,16.7-2.6,10.2,3.2L206.9,312.1z"></path>
                            </svg>
                        </i>
                    </a>
                </li>
                <li class="social__item">
                    <a href="https://www.youtube.com/%D0%93%D0%B4%D0%BA%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0" class="social__item-link" target="_blank" title="Наш Youtube Канал">
                        <i class="icon is-large" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="currentColor">
                                <path
                                        d="M17.051 24c-2.615 0-5.463-.08-8.463-.238-1.772-.094-3.147-1.422-3.343-3.23a41.956 41.956 0 0 1 0-9.065c.196-1.793 1.569-3.121 3.34-3.23a132.042 132.042 0 0 1 15.83 0c1.79.106 3.133 1.403 3.34 3.229.326 2.89.327 5.939 0 9.064-.188 1.807-1.529 3.106-3.336 3.232a107.13 107.13 0 0 1-7.368.238zM16.44 8.858c-2.607 0-5.231.08-7.8.237-1.353.083-2.364 1.073-2.515 2.463a41.131 41.131 0 0 0 0 8.883c.151 1.402 1.16 2.392 2.511 2.464 2.984.156 5.816.236 8.415.236 2.595 0 5.053-.08 7.306-.236 1.363-.095 2.376-1.084 2.52-2.462.32-3.065.32-6.053 0-8.883-.158-1.395-1.169-2.385-2.515-2.465a134.312 134.312 0 0 0-7.922-.237zm-2.19 4.1v5.894l5.823-2.927-5.822-2.968z"
                                />
                            </svg>
                        </i>
                    </a>
                </li>
                <li class="social__item">
                    <a href="mailto:gdk@gdkukraina.ru" class="social__item-link" target="_blank" title="Написать нам письмо">
                        <i class="icon is-large" aria-hidden="true">
                            <svg fill="none" height="32" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="currentColor">
                                    <rect height="14" rx="1.5" width="21" x="5.5" y="8.5"></rect>
                                    <path d="m5.95652 8.93751 8.84678 6.60639c.7098.53 1.6836.53 2.3934 0l8.8468-6.60639"></path>
                                </g>
                            </svg>
                        </i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="service-nav--mob">
        <ul class="service-nav__list">
            <li class="service-nav__item">
                <a href="#" class="service-nav__item-link" data-blind-panel-open>
                    <i class="icon is-large" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
                            <defs>
                                <path
                                        id="a"
                                        d="M4.205 4.023L.575 7.544l3.72 3.608c2.715 2.635 6.284 3.953 9.855 3.953 3.568 0 7.137-1.318 9.855-3.953l3.628-3.521-3.72-3.608C21.195 1.389 17.627.072 14.058.072c-3.569 0-7.137 1.317-9.853 3.951zm.735 6.501l-3.073-2.98L4.85 4.651c5.077-4.924 13.341-4.924 18.418 0l3.072 2.98-2.982 2.893c-2.539 2.462-5.874 3.693-9.208 3.693-3.335 0-6.672-1.231-9.21-3.693z"
                                />
                                <path id="c" d="M.595 3.211a.376.376 0 1 0 .75 0c0-1.036.844-1.878 1.881-1.878a.376.376 0 0 0 0-.752 2.633 2.633 0 0 0-2.631 2.63z" />
                                <path
                                        id="e"
                                        d="M.091 5.835c0 2.902 2.698 5.261 6.013 5.261s6.013-2.359 6.013-5.261c0-2.899-2.696-5.261-6.013-5.261C2.789.574.091 2.936.091 5.835zm.925 0c0-2.453 2.282-4.452 5.088-4.452 2.805 0 5.088 1.999 5.088 4.452 0 2.456-2.283 4.453-5.088 4.453-2.806 0-5.088-1.997-5.088-4.453z"
                                />
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h32v32H0z" />
                                <g transform="translate(2 8.85)">
                                    <mask id="b" fill="#fff">
                                        <use xlink:href="#a" />
                                    </mask>
                                    <path fill="currentColor" d="M-6.941 22.62H35.15V-7.445H-6.941z" mask="url(#b)" />
                                </g>
                                <g transform="translate(12 11.85)">
                                    <mask id="d" fill="#fff">
                                        <use xlink:href="#c" />
                                    </mask>
                                    <path fill="currentColor" d="M-6.922 11.104h18.039V-6.935H-6.922z" mask="url(#d)" />
                                </g>
                                <g transform="translate(10 9.85)">
                                    <mask id="f" fill="#fff">
                                        <use xlink:href="#e" />
                                    </mask>
                                    <path fill="currentColor" d="M-7.425 18.613h27.059V-6.942H-7.425z" mask="url(#f)" />
                                </g>
                            </g>
                        </svg>
                    </i>
                </a>
            </li>
            <li class="service-nav__item" style="display:none!important;">
                <a class="service-nav__item-link" href="/en/?ref=Y" title="EN"><span>EN</span></a>
            </li>
        </ul>
	</div>
</div>