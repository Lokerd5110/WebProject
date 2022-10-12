<?php
    $episodes = 725;
    $titleName = "One Piece";
    $genre = "Комедия";
?>
<a href="#" class="small-card">
    <?php include "./templates/rate.php"; ?>
    <div class="bottom">
        <p class="episodes"><?= $episodes . " епизодов" ?></p>
        <p class="title-name"><?= $titleName ?></p>
        <object><a href="#" class="tag"><?= $genre ?></a></object>
    </div>
    
</a>