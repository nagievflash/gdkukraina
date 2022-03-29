<?php
/**
 * Template name: шаблон События
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
					<span class="breadcrumbs__text text-button" data-breadcrumbs-text title="События">События</span>
				</li>
			</ul>
		</nav>
	</div>

	<h1 class="h1 mb-24 mb-md-48" data-animate>События</h1>

	<div class="mb-64 mb-md-96" id="ajax-pager">
		<div class="card-news-list mt-40 mt-md-48 js-ajax-items">
			<?php
			global $wp_query;
			$args = array(
				'cat' => 3,
				'taxonomy' => 'category',
				'order' => 'ASC',
				'orderby' => 'ID',
				'posts_per_page' => 20); //get all posts

			$posts = get_posts($args);
			foreach ($posts as $key=>$post) :?>
				<div class="card-news-list__item js-ajax-item<?php if(in_array($key, [0,3,4,7])):?> is-wide<?php endif;?>" data-animate>
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
			<?php endforeach; wp_reset_postdata();?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
