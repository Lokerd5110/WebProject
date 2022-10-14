<?php
    $genreName = "Романтика";
    $genreDecription = "Окунитесь в тысячи <br> историй любви, счастья и нежных чувств";
    $genreColor = "#E2566F";
    $bottom = 23;
    $right = 7;
?>

<div class="genre-cont">
    <div class="genre-card" style="background-color: <?php echo $genreColor; ?>">
        <h2 class="name"><?= $genreName ?></h2>
        <p class="description"><?= $genreDecription ?></p>
        <img src="/img/genre-img.png" alt="" style="position: absolute; bottom: <?php echo $bottom; ?>px; right: <?php echo $right; ?>px;">
    </div>    
</div>
