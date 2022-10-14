<a href=<?php if($type == "anime") echo "/anime/title/"; else echo "/manga/title/"; ?> class="banner" style="background-image: url(<?= $picturePath ?>);">
    <div class="top">
        <span class="top-number">
            <p><?= $topNumber ?></p>
        </span>
        <?php include $root."/templates/big-rate.php"; ?>
    </div>
    <h2 class="header"><?= $titleName ?></h2>
    <p class="description"><?= $description ?> </p>
</a>