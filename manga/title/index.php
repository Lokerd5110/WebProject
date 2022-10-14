<!DOCTYPE html>
<html lang="en">
    <?php
        $type = "manga";
        $page = "title";
        $root = $_SERVER['DOCUMENT_ROOT']; 
        include $root."/blocks/head.php" 
    ?>

    <body>

        <?php
            include $root."/templates/header.php";
        ?>
        
        <div class="container">
            <?php
                include $root."/blocks/title-top.php";
                include $root."/blocks/title-related.php";
                include $root."/blocks/title-rating.php";
                include $root."/blocks/title-similar.php";
                include $root."/blocks/title-comments.php";
            ?>
        </div>   
            
        <?php include $root."/templates/footer.php" ?>
    </body>
</html>