<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

    <div class="not-found" data-colored-bg="">
        <div class="not-found__wrapper">
            <div class="not-found__inner">
                <div class="not-found__content">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/4.png" alt="4" class="not-found__num">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/0.png" alt="0" class="not-found__num">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/4.png" alt="4" class="not-found__num">
                </div>
                <div class="not-found__info">
                    <h1 class="not-found__text h1">Страница не найдена</h1>
                    <a href="/" class="btn text-button"> <span>На главную</span> </a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
