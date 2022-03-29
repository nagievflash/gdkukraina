<?php
/**
 * Template name: шаблон Отзывы
 */

get_header(); ?>

<div class="wrap-pl-1 wrap-pr-1 indent-from-head">
	<div class="mb-24 mb-md-32" data-animate>
		<nav class="breadcrumbs" aria-label="breadcrumb" data-breadcrumbs itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
			<ul class="breadcrumbs__list">
				<li class="breadcrumbs__crumb" data-breadcrumbs-crumb itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a href="/" class="breadcrumbs__text breadcrumbs__link text-button" title="Главная" data-breadcrumbs-text itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1" />
				</li>
				<li class="breadcrumbs__crumb" aria-current="page" data-breadcrumbs-crumb>
					<span class="breadcrumbs__text text-button" data-breadcrumbs-text title="Оставить отзыв">Оставить отзыв</span>
				</li>
			</ul>
		</nav>
	</div>

	<h1 class="h1 mb-24 mb-md-48" data-animate>Оставить отзыв</h1>

	<div class="mb-64 mb-md-96" id="ajax-pager">
		<div class="card-news-list mt-40 mt-md-48 js-ajax-items">
            <!-- Put this script tag to the <head> of your page -->
            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>

            <script type="text/javascript">
                VK.init({apiId: 5520532, onlyWidgets: true});
            </script>

            <!-- Put this div tag to the place, where the Comments block will be -->
            <div id="vk_comments"></div>
            <script type="text/javascript">
                VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
            </script>
		</div>
	</div>
</div>
<!-- /.content -->
<?php get_footer(); ?>
