<?php
    if($type == "anime") {
        $titleType = "movie";
        $picturePath = "/img/images/anime-title-img.png";
        $titleName = "Твоё имя";
        $description = "Парень из Токио Таки и девушка из провинции Мицуха обнаруживают, что о сне они меняются телами и проживают жизни друг друга. Но однажды эта способность исчезает и Таки решает во что бы то ни стало отыскать Мицуху.";
        $status = "ended";
        $year = 2016;
        $ageRating = "13+";
        $studio = "CoMix Wave Films";
        $director = "Синкай Макото";
        $voice = "Полное дублирование, Оригинальная";
        $subtitles = "Русские, Японские";
        $rate = "4.7";
        $userChoice = true;
    } else {
        $picturePath = "/img/images/manga-title-img.png";
        $titleType = "manga";
        $titleName = "Ванпанчмен";
        $description = "Манга повествует о молодом человеке по имени Сайтама. Он — герой, обычный герой. Основная его проблема в том, что он вышибает дух из злодеев одним ударом. А это очень скучно…";
        $status = "ongoing";
        $year = 2012;
        $ageRating = "16+";
        $studio = "Азбука";
        $director = "One";
        $voice = "Murata Yuusuke";
        $subtitles = "262";
        $rate = "4.7";
        $userChoice = true;
    }
?>

<div class="title-top">
    <div class="main-img">
        <img src=<?= $picturePath ?> alt="">
        <span class="rates">
            <?php if ($userChoice) {
                echo (
                    '<div class="userChoice">
                        <img src="/img/icons/rating-icon.svg" alt="">
                        <p>Выбор зрителей</p>
                    </div>'
                );
            } ?>
            <?php include $root."/templates/big-rate.php" ?>
        </span>
    </div>
    <div class="info">
        <h1 class="section-header"><?= $titleName ?></h1>
        <p class="description"><?= $description ?></p>
        <span class="buttons">
            <button class="watch">Смотреть аниме</button>
            <button class="like"><img src="/img/icons/title-like-icon.svg" alt=""></button>
        </span>
        <h2 class="section-header about">Об аниме:</h2>
        <ul>
            <?php
                switch($status) {
                    case "ended":
                        echo ('
                            <li class="status ended">Статус: <span>Выпущен</span></li>
                        ');
                        break;
                    case "ongoing":
                        echo ('
                            <li class="status ongoing">Статус: <span>Онгоинг</span></li>
                        ');
                        break;
                    case "droped":
                        echo ('
                            <li class="status droped">Статус: <span>Завершено</span></li>
                        ');
                        break;
                    case "planing":
                        echo ('
                            <li class="status planing">Статус: <span>Анонс</span></li>
                        ');
                        break;
                }
            ?>
            <li><?= "Год: ".$year ?></li> 
            <li><?= "Возрастной рейтинг: ".$ageRating ?></li>
            <li><?php if($titleType == "movie" || $titleType == "anime") echo "Студия: ".$studio; else echo "Издатель: ".$studio;?></li>
            <li><?php if($titleType == "movie" || $titleType == "anime") echo "Режиссер: ".$director; else echo "Автор: ".$director;?></li>
            <li>Тип: <?php
                switch($titleType) {
                    case "anime":
                        echo "Аниме";
                        break;
                    case "movie":
                        echo "Полнометражный фильм";
                        break;
                    case "manga":
                        echo "Манга";
                        break;
                    case "manhwa":
                        echo "Манхва";
                        break;
                }    
            ?></li>
            <li><?php if($titleType == "movie" || $titleType == "anime") echo "Озвучка: ".$voice; else echo "Художник: ".$voice;?></li>
            <li><?php if($titleType == "movie" || $titleType == "anime") echo "Субтитры: ".$subtitles; else echo "Количество глав: ".$subtitles;?></li>
        </ul>
    </div>
</div>