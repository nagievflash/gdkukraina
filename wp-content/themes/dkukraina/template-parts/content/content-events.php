<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>




<div class="wrap-pl-1 wrap-pr-1 indent-from-head">
    <div class="mb-24 mb-md-32 animate" data-animate="">
        <nav class="breadcrumbs" aria-label="breadcrumb" data-breadcrumbs="" itemprop="http://schema.org/breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__crumb" data-breadcrumbs-crumb="" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" class="breadcrumbs__text breadcrumbs__link text-button" title="Главная" data-breadcrumbs-text="" itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1">
                </li>
                <li class="breadcrumbs__crumb" data-breadcrumbs-crumb="" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/events/" class="breadcrumbs__text breadcrumbs__link text-button" title="События" data-breadcrumbs-text="" itemprop="item"><span itemprop="name">События</span></a><meta itemprop="position" content="1">
                </li>
                <li class="breadcrumbs__crumb" aria-current="page" data-breadcrumbs-crumb="">
                    <span class="breadcrumbs__text text-button" data-breadcrumbs-text="" title="<?php echo get_the_title();?>"><?php echo get_the_title();?></span>
                </li>
            </ul>
        </nav>
    </div>
    <h1 class="h1 mb-24 mb-md-48 animate" data-animate><?php echo get_the_title();?></h1>
    <div class="mb-24 mb-md-48" id="ajax-pager">
        <div class="card-news-list mt-40 mt-md-48 js-ajax-items">
        </div>
    </div>
</div>
<div class="news-detail-body wrap-pl-1 wrap-pr-1 py-48 py-md-64 py-lg-96 bg-white">
	<div class="news-detail-body__wrap">
		<div class="user-text text-default">
            <div class="mb-24 mb-md-48">
                <picture>
                    <img
                            class="image is-lazy"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo get_the_post_thumbnail_url();?>"
                            alt=""
                    />
                </picture>
            </div>

			<?php the_content();?>
			<span id="bx-cursor-node"> </span>
		</div>
	</div>
</div>

<!-- Расписание -->
<div class="wrap-pl-1 wrap-pr-1 pt-96 pb-96 pb-24" id="schedule">
    <div class="">
        <div class="user-text text-default">
            <h2>Расписание сеансов</h2>
            <div class="schedule">
				<?php if( have_rows('schedule') ): ?>
					<?php while( have_rows('schedule') ): the_row();?>
						<?php
						$dateDay = date_i18n("d", strtotime( get_sub_field('schedule_date', false, false) ));
						$dateMonth = date_i18n("F", strtotime( get_sub_field('schedule_date', false, false) ));
						$dateWeek = date_i18n("l", strtotime( get_sub_field('schedule_date', false, false) ));
						?>
                        <div class="schedule-wrapper">
                            <div class="row align-items-center justify-content-between">
                                <div class="schedule-item date-item d-flex align-items-end">
                                    <div class="date">
                                        <span class="day"><?php echo $dateDay;?></span> <span class="month"><?php echo $dateMonth;?></span>
                                        <span class="weekday"><?php echo $dateWeek;?></span>
                                    </div>
                                </div>
                                <div class="schedule-item time-item">
                                    <div class="time">
                                        <span><?php echo get_sub_field('schedule_time');?></span>
                                    </div>
                                </div>
                                <div class="schedule-item price-item">
                                    <div class="cost">
                                        <span><?php echo get_sub_field('price');?> ₽</span>
                                    </div>
                                </div>
                                <?php if (get_sub_field('type') == 'yandex'):?>
                                <div class="price-button">
                                    <script id="yandex-button-<?php echo get_row_index();?>" type="text/html">
                                        <b style="color:#fff; text-decoration:none;" class="price">Купить билет</b>
                                    </script>
                                </div>
                                <y:ticket data-session-id="<?php echo explode('?', str_replace('https://widget.afisha.yandex.ru/w/sessions/', '', get_sub_field('link')))[0];?>" data-template="yandex-button-<?php echo get_row_index();?>"></y:ticket>
                                <?php elseif (get_sub_field('type') == 'other'): ?>
                                <a class="buy-tickets" href="<?php echo get_sub_field('link');?>" target="_blank">Купить билет</a>
                                <?php elseif (get_sub_field('type') == 'free'): ?>
                                <div class="schedule-item free-item">
                                    <span>Вход бесплатный</span>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
					<?php endwhile; endif;?>
            </div>
        </div>
    </div>
</div>
<script>
        var dealerName = 'YandexTicketsDealer';
        var dealer = window[dealerName] = window[dealerName] || [];

        dealer.push(['setDefaultClientKey', '1a113a03-a0da-40b8-8a17-b8a2f24ee1fa']);
        dealer.push(['setDefaultRegionId', 11174]);

        YandexTicketsDealer.push(['getDealer', function (dealer) {
            const widget = dealer.Widget('ticketsteam-1849@3811861', 'session', {
                target: document.getElementById('ya-widget-frame'),
                onRequestClose: function() {
                    widget.unmount();
                    widget.destroy();
                },
            });

            widget.mount({ style: { height: '600px' } });
        }]);


        /* Загрузка */
        (function () {
            var rnd = '?' + new Date().getTime() * Math.random();
            var script = document.createElement('script');
            var target = document.getElementsByTagName('script')[0];
            script.async = true;
            script.src = 'https://widget.afisha.yandex.ru/dealer/dealer.js'+rnd;
            target.parentNode.insertBefore(script, target);

        })();


</script>