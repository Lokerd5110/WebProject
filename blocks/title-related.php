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

<div class="title-related">
    <h2 class="section-header">Связанное аниме:</h2>
    <?php include $root."/templates/small-card.php" ?>
</div>