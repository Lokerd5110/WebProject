<!DOCTYPE html>
<html lang="en">
    <?php
        $type = "anime";
        $page = "catalog";
        $root = $_SERVER['DOCUMENT_ROOT']; 
        include $root."/blocks/head.php" 
    ?>

    <body>

        <?php
            include $root."/templates/header.php";
        ?>
        
        <div class="container">
            <?php
                include $root."/blocks/catalog-filters.php";
                include $root."/blocks/catalog-titles.php";
            ?>
        </div>   
            
        <?php include $root."/templates/footer.php" ?>
    </body>
</html>