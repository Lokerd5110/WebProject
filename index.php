<!DOCTYPE html>
<html lang="en">
    <?php include "./blocks/head.php" ?>

    <body>
        <?php 
            include "./templates/header.php";
        ?>
        
        <div class="container">
            <?php
                include "./blocks/main-top.php";
                include "./blocks/rating.php"; 
                $genreName = "Популярные Приключения";
                include "./blocks/genre-titles.php";
                include "./blocks/popular-genres.php";
            ?>
        </div>   
            
        <?php include "./templates/footer.php" ?>
    </body>
</html>