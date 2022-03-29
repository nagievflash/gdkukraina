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




<div class="poster-mobile" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>)"></div>
<div class="wrap-pl-1 wrap-pr-1 pt-96 pb-96 bg-white">
    <div class="mb-48">
        <div class="kinozal">

            <div class="row">
                <div class="left-block">
                    <div class="poster">
                        <img width="100%" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>" />
                    </div>
                    <?php
                    if (get_field('trailer')):?>
                        <div class="trailer">
                            <iframe width="100%" height="300" src="<?php echo str_replace('https://www.youtube.com/watch?v=','https://www.youtube.com/embed/',get_field('trailer'));?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    <?php endif;?>
                 </div>

                <div class="right-block">
                    <h1 class="h1"><?php echo get_the_title();?></h1>
                    <p class="slogan"><?php the_field('slogan');?></p>
                    <a href="#schedule" class="buy-tickets" title="Перейти к расписанию"><span class="icon-ticket"></span><span>Расписание и билеты</span></a>
                    <div class="film-content">
                        <h3>О фильме</h3>
                        <div class="film-details row">
                            <div class="left-block">Год производства</div>
                            <div class="right-block"><?php the_field('year');?></div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Страна</div>
                            <div class="right-block"><?php the_field('country');?></div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Жанр</div>
                            <div class="right-block"><?php the_field('genre');?></div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Режиссер</div>
                            <div class="right-block"><?php the_field('creators');?></div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Продюссер</div>
                            <div class="right-block"><?php the_field('producers');?></div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Актеры</div>
                            <div class="right-block"><?php the_field('actors');?></div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Начало проката</div>
                            <div class="right-block"><?php the_field('date_start');?></div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Окончание проката</div>
                            <div class="right-block"><?php the_field('date_end');?></div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Ограничение возраста</div>
                            <div class="right-block"><?php the_field('age');?>+</div>
                        </div>
                        <div class="film-details row">
                            <div class="left-block">Длительность</div>
                            <div class="right-block"><?php the_field('duration');?></div>
                        </div>
                        <div class="film-description">
                            <h3>Описание</h3>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="schedule-item d-flex align-items-end">
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
                        <div class="price-item">
                            <div class="price premier-widget" data-session="<?php echo get_sub_field('session');?>">
	                            <?php echo get_sub_field('price');?> ₽
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</div>
