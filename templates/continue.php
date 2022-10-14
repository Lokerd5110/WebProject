<div class="continue">
    <a href=<?php if($type == "anime") echo "/anime/title/"; else echo "/manga/title/"; ?>><img src="<?= $picturePath ?>" alt="" width="46" height="46"></a>
    <div class="title">
        <a href=<?php if($type == "anime") echo "/anime/title/"; else echo "/manga/title/"; ?> class="titleName"><?= $titleName ?></a>
        <p class="content-series"><?php 
            switch($titleType) {
                case "anime":
                    echo($serNumb . " эпизод");
                    break;
                case "movie":
                    echo("Фильм");
                    break;
                case "manga":
                    echo("Манга");
                    break;
                case "manhwa":
                    echo("Манхва");
                    break;
            }
        ?></p>
    </div>
    <p class="continue-from"><?php
        switch($type) {
            case "anime":
                echo($stopped);
                break;
            case "movie":
                echo($stopped);
                break;
            case "manga":
                echo("Глава " . $stopped);
                break;
        }
    ?></p>
</div>