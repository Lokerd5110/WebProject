<div class="popular-genres">
    <h2 class="section-header">Популярные жанры</h2>
    <div class="genres-list">
        <?php
            for($i = 0; $i < 6; $i++) {
                include $root."/templates/genre-card.php";
            }
        ?>
    </div>
    <button class="swap-btn"><img src="/img/swap-btn.svg" alt=""></button>
</div>