<?php $profileName = ""; ?> 
<div class="header">
    <div class="container">
        <div class="left">
            <div class="logo">
                <img src="./img/logo.svg" alt="Logo">
            </div>
            <div class="separ"></div>
            <div class="alter-page">
                <a href="#" class="btn anime active">Аниме<span></span></a>
                <a href="#" class="btn manga">Манга<span></span></a>
            </div>
            <div class="separ"></div>
            <div class="menu">
                <a href="#" class="btn">Главная</a>
                <a href="#" class="btn active">Каталог</a>
                <a href="#" class="btn">Топ-100</a>
            </div>
        </div>
        <div class="right">
            <button class="search-btn">
                <img src="./img/search.svg" alt="">
            </button>
            <div class="profile">
                <p><?php
                    if($profileName == "") {
                        echo("<span>Вход в профиль</span>");
                    } else {
                        echo("<span>Здравствуйте, </span>" . $profileName);
                    }
                ?></p>
                <img src="./img/no-profile.png" alt="">
            </div>
        </div>
    </div>
    <div class="line"></div>
</div>