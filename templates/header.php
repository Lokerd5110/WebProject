<?php $profileName = ""; ?> 
<div class="header">
    <div class="container">
        <div class="left">
            <div class="logo">
                <img src="/img/icons/logo.svg" alt="Logo">
            </div>
            <div class="separ"></div>
            <div class="alter-page">
                <a href=<?= "/anime/".$page ?> class="btn anime <?php if ($type == "anime") echo "active"?>">Аниме<span></span></a>
                <a href=<?= "/manga/".$page ?> class="btn manga <?php if ($type == "manga") echo "active"?>">Манга<span></span></a>
            </div>
            <div class="separ"></div>
            <div class="menu">
                <a href='#' class="btn <?php if ($page == "") echo "active" ?>">Главная</a>
                <a href='#' class="btn <?php if ($page == "catalog") echo "active" ?>">Каталог</a>
                <a href='#' class="btn <?php if ($page == "top") echo "active" ?>">Топ-100</a>
            </div>
        </div>
        <div class="right">
            <button class="search-btn">
                <img src="/img/icons/search.svg" alt="">
            </button>
            <div class="profile">
                <?php
                    if($profileName == "") {
                        echo("<button>Вход в профиль</button>");
                    } else {
                        echo("<button>Здравствуйте, </button>" . $profileName);
                    }
                ?>
                <img src="/img/images/no-profile.png" alt="">
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="pop-up">
        <div class="form-background">
            <div class="login-type">
                <button id="register-button" class="active">Зарегистрироваться</button>
                <button id="login-button">Войти</button>
            </div>
            <div class="form register">
                <label for="email">Email: </label>
                <input type="text" name="email">
                <label for="password">Пароль: </label>
                <input type="text" name="password">
                <label for="password-repeat">Повтор пароля: </label>
                <input type="text" name="password-repeat">
                <label for="login">Логин: </label>
                <input type="text" name="login">
                <button id="register-send">Зарегистрироваться</button>
            </div>
            <div class="form login">
                <label for="email">Email: </label>
                <input type="text" name="email">
                <label for="password">Пароль: </label>
                <input type="text" name="password">
                <button id="register-send">Войти</button>
            </div>
        </div>
    </div>
    <div class="exit-pop-up">
        <div class="background">
            <button id="exit">Выйти</button>
            <button id="delete-account">Удалить аккаунт</button>
        </div>
    </div>
    <script src="/scripts/header.js"></script>
</div>