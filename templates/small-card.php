<a href=<?php if($type == "anime") echo "/anime/title/"; else echo "/manga/title/"; ?> class="small-card" style="background-image: url(<?= $picturePath ?>);">
    <?php include $root."/templates/rate.php"; ?>
    <div class="bottom">
        <p class="episodes"><?php
            switch($titleType) {
                case "anime":
                    echo $episodes . " епизодов";
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
        ?></p>
        <h2 class="title-name"><?= $titleName ?></h2>
        <object><a href="#" class="tag"><?= $genre ?></a></object>
    </div>
</a>