<div class="rating">
    <h2 class="section-header">Рейтинговое аниме</h2>
    <div class="banners">
        <?php
            if ($type == "anime") {
                $picturePath = "/img/anime-big-card-background.png";
            }   else {
                $picturePath = "/img/manga-big-card-background.png";
            }
            for($i = 0; $i < 4; $i++) {
                include $root."/templates/big-card.php";
            }
        ?>
    </div>
    <button class="swap-btn"><img src="/img/swap-btn.svg" alt=""></button>
</div>