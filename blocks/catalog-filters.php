<?php
    $genres = array("adventure", "Приключения", "romantic", "Романтика", "drama", "Драма");
    $years = [2019, 2020, 2021, 2022];
    $voices = ["band", "Студийная банда", "ancord", "Ancord", "anilib", "AniLib", "animedia", "Animedia"];
    $statuses = ["ended", "Выпущен", "ongoing", "Онгоинг", "droped", "Завершено", "planing", "Анонс"];
?>


<div class="catalog-filters">
    <button class="open-btn active">
        <span></span>
        <p>Фильтры</p>
    </button>
    <form>
        <fieldset class="main-filters">
            <span class="filter">
                <button>
                    <h2 class="filter-name">Жанры</h2>
                    <p class="selected-filters">Приключения,&#160;Комедия,&#160;Романтика</p>
                    <img src="/img/filter-arrow.svg" alt="">
                </button>
                <div class="filters">
                    <?php for($i=0; $i < count($genres); $i+=2) {
                        echo ('<span><input type="checkbox" class="checkbox" id="'.$genres[$i].'" name="'.$genres[$i].'"><label for="'.$genres[$i].'">'.$genres[$i+1].' </label></span>');
                    } ?>
                </div>
            </span>
            <span class="filter">
                <button>
                    <h2 class="filter-name">Годы</h2>
                    <p class="selected-filters"></p>
                    <img src="/img/filter-arrow.svg" alt="">
                </button>
                <div class="filters">
                    <?php for($i=0; $i < count($years); $i++) {
                        echo ('<span><label for="'.$years[$i].'">'.$years[$i].' </label><input type="checkbox" class="checkbox" id="'.$years[$i].'" name="'.$years[$i].'"></span>');
                    } ?>
                </div>
            </span>
            <span class="filter">
                <button>
                    <h2 class="filter-name">Озвучка</h2>
                    <p class="selected-filters"></p>
                    <img src="/img/filter-arrow.svg" alt="">
                </button>
                <div class="filters">
                    <?php for($i=0; $i < count($voices); $i+=2) {
                        echo ('<span><label for="'.$voices[$i].'">'.$voices[$i+1].' </label><input type="checkbox" class="checkbox" id="'.$voices[$i].'" name="'.$voices[$i].'"></span>');
                    } ?>
                </div>
            </span>
            <span class="filter">
                <button>
                    <h2 class="filter-name">Статус</h2>
                    <p class="selected-filters"></p>
                    <img src="/img/filter-arrow.svg" alt="">
                </button>
                <div class="filters">
                    <?php for($i=0; $i < count($statuses); $i+=2) {
                        echo ('<span><label for="'.$statuses[$i].'">'.$statuses[$i+1].' </label><input type="checkbox" class="checkbox" id="'.$statuses[$i].'" name="'.$statuses[$i].'"></span>');
                    } ?>
                </div>
            </span>
        </fieldset>
        <fieldset class="tags">
            <button>
                <img src="/img/filter-plus.svg" alt="">
                <p>Субтитры</p>
            </button>
            <button>
                <img src="/img/filter-plus.svg" alt="">
                <p>Субтитры</p>
            </button>
            <button>
                <img src="/img/filter-plus.svg" alt="">
                <p>Субтитры</p>
            </button>
        </fieldset>
        <button class="drop-tags">
            <img src="/img/filter-cross.svg" alt="">
            <p>Сбросить фильтры</p>
        </button>
    </form>
    <div class="header-sort">
            <h2 class="section-header">Недавно добавленное аниме</h2>
            <button class="active">
                <p>по рейтингу</p>
                <span></span>
            </button>
            <button>
                <p>по популярности</p>
                <span></span>
            </button>
        </div>
</div>