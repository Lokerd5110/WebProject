<?php
    $topNumber = 6;
    $rate = 4.7;
    $titleName = "Клинок, рассекающий демонов";
    $description = "Танджиро - старший сын в семье, потерявшей кормильца. Однажды, он уходит в другой город. Утром парень вернётся домой живой и невредимый... Но его ждут ужасные известия... ";
?>
<div class="banner">
    <div class="top">
        <span class="top-number">
            <p><?= $topNumber ?></p>
        </span>
        <div class="rate">
            <img src="./img/rating-star.svg" alt="">
            <p><?= $rate ?></p>
        </div>
    </div>
    <h2 class="header"><?= $titleName ?></h2>
    <p class="description"><?= $description ?> </p>
</div>