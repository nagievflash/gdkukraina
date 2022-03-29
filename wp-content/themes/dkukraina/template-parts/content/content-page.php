<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="wrap-pl-1 wrap-pr-1 pt-96 pb-96">
    <div class="mb-48">
        <h1 class="h1 hero__title animate mb-48 mt-48" data-animate=""><?php echo get_the_title();?></h1>
        <div class="user-text" data-animate>
	        <?php
	        the_content();
	        ?>
        </div>
    </div>

</div>