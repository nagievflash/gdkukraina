<?php
/**
 * Template name: шаблон Мультимедиа
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
					<span class="breadcrumbs__text text-button" data-breadcrumbs-text title="Мультимедиа">Мультимедиа</span>
				</li>
			</ul>
		</nav>
	</div>

	<h1 class="h1 mb-24 mb-md-48" data-animate>Мультимедиа</h1>

	<div class="mb-64 mb-md-96">
		<div class="card-news-list mt-40 mt-md-48 video-gallery">
			<?php
            // Check rows exists.
            if( have_rows('videogallery') ):

                // Loop through rows.
                while( have_rows('videogallery') ) : the_row();?>
				<div class="card-news-list__item video-gallery__item" data-animate>
                    <div class="card-news__inner">
                        <div class="card-news__video">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo str_replace('https://www.youtube.com/watch?v=', '', get_sub_field('link'));?>" title="<?php echo get_sub_field('title');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
					<h4><?php echo get_sub_field('title');?></h4>
				</div>
			<?php endwhile; endif;?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
