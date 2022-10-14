<!DOCTYPE html>
<html lang="en">
    <?php
        $type = "anime";
        $page = "";
        $root = $_SERVER['DOCUMENT_ROOT']; 
        include $root."/blocks/head.php" 
    ?>

    <body>

        <?php
            include $root."/templates/header.php";
        ?>
        
        <div class="container">
            <?php
                include $root."/blocks/main-top.php";
                include $root."/blocks/rating.php"; 
                $genreName = "Популярные Приключения";
                include $root."/blocks/genre-titles.php";
                include $root."/blocks/popular-genres.php";
                $genreName = "Популярная Романтика";
                include $root."/blocks/genre-titles.php";
                $genreName = "Популярные Комедии";
                include $root."/blocks/genre-titles.php";
            ?>
        </div>   
            
        <?php include $root."/templates/footer.php" ?>
    </body>
</html>