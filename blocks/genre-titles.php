<div class="genre-titles">
    <h2 class="section-header"><a href="#" class="genre-header"><?= $genreName ?></a></h2>
    <div class="titles">
        <?php
            if ($type == "anime") {
                $picturePath = "/img/card-images/small-naruto.png";
                $episodes = 725;
                $titleName = "One Piece";
                $genre = "Комедия";
                $titleType = "anime";
                $rate = 4.7;
            } else {
                $picturePath = "/img/card-images/small-naruto.png";
                $titleName = "Хоримия";
                $genre = "Повседневность";
                $titleType = "manhwa";
                $rate = 4.7;
            }
            for ($i = 0; $i < 4; $i++) {
                include $root."/templates/small-card.php"; 
            }
        ?>
    </div>
</div>