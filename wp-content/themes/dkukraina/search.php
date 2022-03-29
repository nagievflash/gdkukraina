<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="wrap-pl-1 wrap-pr-2 indent-from-head mb-64 mb-md-96">

<div class="divided-content-layout">
	<div class="divided-content-layout__main">
		<div class="mb-24 mb-md-32" data-animate>
            <nav class="breadcrumbs" aria-label="breadcrumb" data-breadcrumbs>
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__crumb" data-breadcrumbs-crumb>
                        <a href="/" class="breadcrumbs__text breadcrumbs__link text-button" data-breadcrumbs-text>Главная</a>
                    </li>
                    <li class="breadcrumbs__crumb" aria-current="page" data-breadcrumbs-crumb>
                        <span class="breadcrumbs__text text-button" data-breadcrumbs-text>Результаты поиска</span>
                    </li>
                </ul>
            </nav>
        </div>
        <h1 class="h1" data-animate>Результаты поиска</h1>
		<div class="mb-24 mt-24 mb-md-32 mt-md-32" data-animate>
			<form class="search-form" action="/">
				<div class="field field-search">
					<div class="control">
						<div class="input-shell">
							<input type="text" name="s" value="<?php echo esc_html( get_search_query() ); ?>" class="input" placeholder="Введите запрос">
							<button class="field-search__btn" type="submit">
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
<?php if ( have_posts() ):	?>


        <div class="mb-24 nb-md-32 text-menu text-bold" data-animate>
            Найдено: <?php echo (int) $wp_query->found_posts; ?>
        </div>
        <div>
            <?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();
		$post_id = get_the_ID(); // or use the post id if you already have it
		$category = get_the_category($post_id);
        ?>
            <div class="search-result-item" data-animate>
                <div class="search-result-item__inner">
                    <div class="search-result-item__path">
                        <a class="search-result-item__path-link" href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php echo $category[0]->name?></a>
                    </div>
                    <div class="search-result-item__link user-text">
                        <a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a>
                    </div>
                    <div class="search-result-item__text user-text"><?php the_excerpt();?>...</div>
                </div>
            </div>
            <?php } ?>
        </div>
    <?php else: ?>
    <?php endif;?>
    </div>
</div>
<?php get_footer();
