<div class="main-top">
    <div class="banner-slider">
        <?php
            if ($type == "anime") {
                $picturePath = "/img/images/anime-banner-background.png";
                $topNumber = 6;
                $rate = 4.7;
                $titleName = "Клинок, рассекающий демонов";
                $description = "Танджиро - старший сын в семье, потерявшей кормильца. Однажды, он уходит в другой город. Утром парень вернётся домой живой и невредимый... Но его ждут ужасные известия... ";
            }   else {
                $picturePath = "/img/images/manga-banner-background.png";
                $topNumber = 6;
                $rate = 4.7;
                $titleName = "Человек-бензопила";
                $description = "«Я всегда мечтал жить обычной жизнью: спать в тёплой постели, есть тосты с джемом по утрам, ходить на свидания со своей девушкой и улыбаться каждый день. Но всё изменилось со смертью отца — теперь, Почита, пора убивать!»";
            }
            for($i = 0; $i < 3; $i++) {
                include $root."/templates/banner-card.php";
            }
        ?>
        <div class="slider">
            <button><img src="/img/icons/banner-slider.svg" alt="" class="active"></button>
            <button><img src="/img/icons/banner-slider.svg" alt=""></button>
            <button><img src="/img/icons/banner-slider.svg" alt=""></button>
        </div>
    </div>

    <div class="continue-watching">
        <h2>Продолжить просмотр</h2>
        <ul>
            
        </ul>
    </div>
</div>