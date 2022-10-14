<?php $profileName = ""; ?> 
<div class="header">
    <div class="container">
        <div class="left">
            <div class="logo">
                <img src="/img/logo.svg" alt="Logo">
            </div>
            <div class="separ"></div>
            <div class="alter-page">
                <a href=<?= "/anime/".$page ?> class="btn anime <?php if ($type == "anime") echo "active"?>">Аниме<span></span></a>
                <a href=<?= "/manga/".$page ?> class="btn manga <?php if ($type == "manga") echo "active"?>">Манга<span></span></a>
            </div>
            <div class="separ"></div>
            <div class="menu">
                <a href=<?php if ($type == "anime") echo "/anime/"; else echo "/manga/" ?> class="btn <?php if ($page == "") echo "active" ?>">Главная</a>
                <a href=<?php if ($type == "anime") echo "/anime/catalog/"; else echo "/manga/catalog" ?> class="btn <?php if ($page == "catalog") echo "active" ?>">Каталог</a>
                <a href=<?php if ($type == "anime") echo "/anime/top/"; else echo "/manga/top/" ?> class="btn <?php if ($page == "top") echo "active" ?>">Топ-100</a>
            </div>
        </div>
        <div class="right">
            <button class="search-btn">
                <img src="/img/search.svg" alt="">
            </button>
            <div class="profile">
                <p><?php
                    if($profileName == "") {
                        echo("<span>Вход в профиль</span>");
                    } else {
                        echo("<span>Здравствуйте, </span>" . $profileName);
                    }
                ?></p>
                <img src="/img/no-profile.png" alt="">
            </div>
        </div>
    </div>
    <div class="line"></div>
</div>