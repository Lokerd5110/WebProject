<div class="main-top">
    <div class="banner-slider">
        <?php
            for($i = 0; $i < 3; $i++) {
                include "./templates/banner-card.php";
            }
        ?>
        <div class="slider">
            <button><img src="./img/banner-slider.svg" alt="" class="active"></button>
            <button><img src="./img/banner-slider.svg" alt=""></button>
            <button><img src="./img/banner-slider.svg" alt=""></button>
        </div>
    </div>

    <div class="continue-watching">
        <h2>Продолжить просмотр</h2>
        <ul>
            <?php for($i = 0; $i < 5; $i++) {
                include "./templates/continue.php";
            } ?>
        </ul>
    </div>
</div>