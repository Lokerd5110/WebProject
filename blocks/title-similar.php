<?php
    if ($type == "anime") {
        $picturePath = "/img/anime-small-card-background.png";
        $episodes = 725;
        $titleName = "One Piece";
        $genre = "Комедия";
        $titleType = "anime";
        $rate = 4.7;
    }   else {
        $picturePath = "/img/manga-small-card-background.png";
        $titleName = "Хоримия";
        $genre = "Повседневность";
        $titleType = "manhwa";
        $rate = 4.7;
    }
?>

<div class="title-similar">
    <h2 class="section-header">Вам также может понравиться:</h2>
    <div class="titles">
        <?php
            for($i = 0; $i < 4; $i++) {
                include $root."/templates/small-card.php";
            }
        ?>
    </div>
    <button class="swap-btn"><img src="/img/swap-btn.svg" alt=""></button>
</div>