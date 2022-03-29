<?php
/**
 * Template name: шаблон Кинозал
 */

get_header(); ?>

<?php
$sessions = getSessions();
$sessionsList = array();
$movies = getMovies();

date_default_timezone_set("Asia/Yekaterinburg");
/**
 * Формируем расписание
 * array() $sessionDate
 */
foreach ($sessions as $session) {
    if ($session->Hall->Name == 'КиноЗал') {
	    $sessionDate = date('d-m', strtotime($session->DateTime));
	    foreach ($movies as $movie) {
		    if ($movie->Name == $session->MovieName) {
			    $filename = '';
			    foreach ($movie->MediaDatas as $data) {
				    if ($data->TypeId == 1) {
					    $filename = getMediaData($data->Id, $data->FileName);
				    }
			    }

			    if ($filename == '/wp-content/themes/dkukraina/img/') $filename = '/wp-content/themes/dkukraina/img/no-image.jpg';

			    $movieDetails = [
				    "name"          =>  $movie->Name,
				    "id"            =>  $movie->Id,
				    "rate"          =>  $movie->Rate,
				    "duration"      =>  $movie->Duration,
				    "cast"          =>  $movie->Cast,
				    "countries"     =>  $movie->Countries,
				    "directors"     =>  $movie->Directors,
				    "genres"        =>  $movie->Genres,
				    "story"         =>  $movie->Story,
				    "poster"        =>  $filename,
			    ];
		    }
	    }

	    $sessionList[$sessionDate][$movieDetails['id']][] = [
		    "id" => $session->Id,
		    "date_time" =>  $session->DateTime,
		    "format"    =>  $session->Format->Name,
		    "movie"     =>  $movieDetails
	    ];
    }
}
?>
<div class="wrap-pl-1 wrap-pr-1 indent-from-head">
    <div class="kinozal mb-24 mb-md-32" data-tabs>

        <h1 class="h1 animate mb-48 text-center" data-animate="">Расписание сеансов</h1>
        <div class="tabs mb-24 mb-md-40 mb-lg-48" data-animate>
            <?php $active = false;?>
            <?php if (isset($sessionList[date('d-m')])):?>

            <?php $active = true;?>
            <span class="h2 active" data-tab="today">Сегодня</span>
            <?php endif;?>
	        <?php if (isset($sessionList[date("d-m", strtotime("+1 day"))])):?>
            <span class="h2 <?php if (!$active) {echo 'active'; $active = true;}?>" data-tab="tomorrow">Завтра</span>
	        <?php endif;?>
            <?php foreach ($sessionList as $key => $session) {
                if ($key != date('d-m') && $key != date("d-m", strtotime("+1 day"))) {
                    $t = '';
                    foreach ($sessionList[$key] as $a) {
	                    $t = $a[0]['date_time'];
                        break;
                    }
                    ?>
            <span class="h2 <?php if (!$active) {echo 'active'; $active = true;}?>" data-tab="<?php echo $key;?>"><?php echo date("d.m", strtotime($t)); ?></span>
            <?php
                }
            }
            ?>
        </div>
	    <?php $active = false;?>
        <div class="tabs__content kinozal">
            <?php if (isset($sessionList[date('d-m')])):?>
            <div role="tabpanel" class="tabs__pane <?php echo $active; $active = true; ?>" data-pane="today" data-animate>
                <?php foreach ($sessionList[date('d-m')] as $session):?>
                <div class="movie-item">
                    <div class="movie-image">
                        <img src="<?php echo $session[0]['movie']['poster']; ?>" />
                    </div>
                    <div class="movie-content user-text">
                        <p class="movie-genres"><?php echo implode(', ', $session[0]['movie']['genres']); ?></p>
                        <div class="movie__title-wrapper">
                            <h1 class="movie-title h1"><?php echo $session[0]['movie']['name']; ?></h1>
                            <div class="movie-badges">
                                <span class="format"><?php echo $session[0]['format']; ?></span>
                                <span class="rate"><?php echo $session[0]['movie']['rate']; ?></span>
                            </div>
                        </div>
                        <p class="text-default"><?php echo $session[0]['movie']['story']; ?></p>
                        <div class="movie-sessions">
                            <?php foreach($session as $item):?>
                            <div class="movie-item__button" data-session="<?php echo $item['id']; ?>"><?php echo date('H:i', strtotime($item['date_time'])); ?></div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <?php endif;?>
            <?php if (isset($sessionList[date("d-m", strtotime("+1 day"))])):?>
                <div role="tabpanel" class="tabs__pane <?php if (!$active) {echo 'active'; $active = true;}?>" data-pane="tomorrow" data-animate>
			        <?php foreach ($sessionList[date("d-m", strtotime("+1 day"))] as $session):?>
                        <div class="movie-item">
                            <div class="movie-image">
                                <img src="<?php echo $session[0]['movie']['poster']; ?>" />
                            </div>
                            <div class="movie-content user-text">
                                <p class="movie-genres"><?php echo implode(', ', $session[0]['movie']['genres']); ?></p>
                                <div class="movie__title-wrapper">
                                    <h1 class="movie-title h1"><?php echo $session[0]['movie']['name']; ?></h1>
                                    <div class="movie-badges">
                                        <span class="format"><?php echo $session[0]['format']; ?></span>
                                        <span class="rate"><?php echo $session[0]['movie']['rate']; ?></span>
                                    </div>
                                </div>
                                <p class="text-default"><?php echo $session[0]['movie']['story']; ?></p>
                                <div class="movie-sessions">
							        <?php foreach($session as $item):?>
                                        <div class="movie-item__button" data-session="<?php echo $item['id']; ?>"><?php echo date('H:i', strtotime($item['date_time'])); ?></div>
							        <?php endforeach;?>
                                </div>
                            </div>
                        </div>
			        <?php endforeach;?>
                </div>
	        <?php endif;?>
            <?php foreach ($sessionList as $key => $item): ?>
            <?php if ($key != date('d-m') && $key != date("d-m", strtotime("+1 day"))) : ?>
            <div role="tabpanel" class="tabs__pane <?php if (!$active) {echo 'active'; $active = true;}?>" data-pane="<?php echo $key; ?>" data-animate>
	            <?php foreach ($sessionList[$key] as $session):?>
                    <div class="movie-item">
                        <div class="movie-image">
                            <img src="<?php echo $session[0]['movie']['poster']; ?>" />
                        </div>
                        <div class="movie-content user-text">
                            <p class="movie-genres"><?php echo implode(', ', $session[0]['movie']['genres']); ?></p>
                            <div class="movie__title-wrapper">
                                <h1 class="movie-title h1"><?php echo $session[0]['movie']['name']; ?></h1>
                                <div class="movie-badges">
                                    <span class="format"><?php echo $session[0]['format']; ?></span>
                                    <span class="rate"><?php echo $session[0]['movie']['rate']; ?></span>
                                </div>
                            </div>
                            <p class="text-default"><?php echo $session[0]['movie']['story']; ?></p>
                            <div class="movie-sessions">
					            <?php foreach($session as $item):?>
                                    <div class="movie-item__button" data-session="<?php echo $item['id']; ?>"><?php echo date('H:i', strtotime($item['date_time'])); ?></div>
					            <?php endforeach;?>
                            </div>
                        </div>
                    </div>
	            <?php endforeach;?>
            </div>
            <?php endif;?>
            <?php endforeach; ?>

        </div>
    </div>

</div>
<!-- /.content -->
<?php get_footer(); ?>
