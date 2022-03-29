<?php
/**
 * Template name: шаблон Контакты
 */

get_header(); ?>
<div class="wrap-pl-1 wrap-pr-1 indent-from-head mb-64 mb-md-96">
    <div class="divided-content-layout">
        <div class="divided-content-layout__sidebar" data-sticky-container>
            <div data-sticky data-margin-top="40">
                <div class="side-navigation">
                    <div class="mb-24">
                        <div class="text-menu">Адреса и контакты</div>
                    </div>
                    <div class="sidenav-item-shell">
                        <div class="sidenav-item-shell">
                            <a href="#" title="Учетная карточка и банковские реквизиты" target="_self" class="sidenav-item">Учетная карточка и банковские реквизиты</a>
                        </div>
                    </div>
                    <div class="mt-24">
                    </div>
                </div>
            </div>
        </div>
        <div class="divided-content-layout__main">
            <div class="mb-24 mb-md-32">
                <nav class="breadcrumbs" aria-label="breadcrumb" data-breadcrumbs itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__crumb" data-breadcrumbs-crumb itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/" class="breadcrumbs__text breadcrumbs__link text-button" title="Главная" data-breadcrumbs-text itemprop="item"><span itemprop="name">Главная</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li class="breadcrumbs__crumb" aria-current="page" data-breadcrumbs-crumb>
                            <span class="breadcrumbs__text text-button" data-breadcrumbs-text title="Адреса и контакты">Адреса и контакты</span>
                        </li>
                    </ul>
                </nav>
            </div>
            <h1 class="h1" data-animate>Адреса и контакты <br />городского Дома культуры «Украина»</h1>
            <div class="text-intro-layout text-default">
                <div class="text-intro-layout__lead user-text" data-animate>
                    Адрес: 629602, ЯНАО, г.&nbsp;Муравленко, ул.&nbsp;Ленина, 61 </div>
                <div class="text-intro-layout__description user-text" data-animate>
                    тел.:&nbsp;+7&nbsp;(34938) 27-5-48<br> e-mail:&nbsp;
                    <a href="mailto:gdk@gdkukraina.ru">gdk@gdkukraina.ru</a> </div>
            </div>
            <div class="tabs__content mb-40" style="">
                <div role="tabpanel" class="tabs__pane active" data-pane="tab-">
                    <div class="rules-list hide-numeric">
                        <div style="padding-bottom: 1rem;" class="mt-64">
                        </div>
                        <div style="padding-bottom: 1rem;" class="rules-list__item bg-white bg-wings">
                            <div class="">
                                <div class="rules-list__item-title h2 mb-24">Где мы находимся</div>
                                <div class="rules-list__item-text user-text text-default mt-0">
                                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2f427ab94c9a0fff6f433931672ee7d75a51eed2253b4f04259eaa88dfef7d12&amp;source=constructor" width="100%" height="519" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div style="padding-bottom: 1rem;" class="rules-list__item ">
                            <div class="">
                                <div class="rules-list__item-title h2 mb-24">Адреса и контакты</div>
                                <div class="rules-list__item-text user-text text-default mt-0">
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.content -->
<?php get_footer(); ?>
