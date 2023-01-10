<a class="small-card">
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
        <object></object>
    </div>
</a>