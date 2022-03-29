<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	$category = get_the_category();
	$slug = $category[0]->slug;
	if ($category[0]->slug == 'pushkinskaya-karta') $slug = 'events';
	get_template_part( 'template-parts/content/content-'.$slug );


endwhile; // End of the loop.

get_footer();
