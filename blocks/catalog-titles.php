<?php 
    $titlesAmount = 13; 
    $page = 1;
    if($titlesAmount > 12) $showedTitles = 12; else $showedTitles = $titlesAmount;
?> 

<div class="catalog-titles">
    <div class="cards">
        <?php 
            for($i = 0; $i < $showedTitles; $i++ ) {
                if ($type == "anime") {
                    $picturePath = "/img/card-images/small-naruto.png";
                    $episodes = 725;
                    $titleName = "One Piece";
                    $genre = "Комедия";
                    $rate = 4.7;
                    $titleType = "anime";
                }   else {
                    $picturePath = "/img/card-images/small-naruto.png";
                    $titleName = "Хоримия";
                    $genre = "Повседневность";
                    $rate = 4.7;
                    $titleType = "manhwa";
                }
                include $root."/templates/small-card.php";
            }
        ?>
    </div>
    <ul class="page-numbers">
        <?php
            for($i = 0; $i < $titlesAmount / 12; $i++) {
                if($i + 1 == $page) {
                    echo '<li class="active"><a href="#">'.($i+1).'</a></li>';
                } else {
                    echo '<li><a href="#">'.($i+1).'</a></li>';
                }
                
            }
        ?>
    </ul>
</div>