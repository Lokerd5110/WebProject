<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная Аниме</title>
    <?php
        switch($page) {
            case "":
                include $root."/blocks/styles/main-styles.php";
                break;
            case "catalog":
                include $root."/blocks/styles/catalog-styles.php";
                break;
            case "top":
                include $root."/blocks/styles/top-styles.php";
                break;
            case "title":
                include $root."/blocks/styles/title-styles.php";
                break;
        } 
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
</head>