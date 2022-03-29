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




    <div class="news-detail-head wrap-pl-1 wrap-pr-1 indent-from-head">
        <div class="news-detail-head__image">
            <picture>
                <img
                        class="image is-lazy"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo get_the_post_thumbnail_url();?>"
                        alt=""
                />
            </picture>
        </div>
        <div class="news-detail-head__wrap">
            <div class="news-detail-head__back-to">
                <a href="/news/" class="link-back-to is-white">Все новости</a>
            </div>
            <div class="news-detail-head__date">
                <div class="numerical-item">
                    <div class="numerical-item__number text-fact">
                        <span><?php echo get_the_date('d');?></span>
                    </div>
                    <div class="numerical-item__label text-default">
	                    <?php echo month_date(get_the_date('F Y'));?>
                    </div>
                </div>
            </div>
            <h1 class="news-detail-head__title h1"><?php echo get_the_title();?></h1>
        </div>
    </div>
    <div class="news-detail-body wrap-pl-1 wrap-pr-1 my-48 my-md-64 my-lg-96">
        <div class="news-detail-body__wrap">
            <div class="user-text text-default">
                <?php the_content();?>
                <span id="bx-cursor-node"> </span>
            </div>
        </div>
    </div>

