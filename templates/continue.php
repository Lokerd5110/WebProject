<?php
    $titleName = "Твое имя";
    $type = "movie";
    $stopped = "1:23:44";
    $serNumb = "";
?>
<div class="continue">
    <img src="./img/continue-background.png" alt="" width="46" height="46">
    <div class="title">
        <h3 class="titleName"><?= $titleName ?></h3>
        <p class="content-series"><?php 
            switch($type) {
                case "anime":
                    echo($serNumb . " эпизод");
                    break;
                case "movie":
                    echo("Фильм");
                    break;
                case "manga":
                    echo("Манга");
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
                echo("Глава" . $stopped);
                break;
        }
    ?></p>
</div>