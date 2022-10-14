<?php 
    $avatarPath = "/img/comment-avatar.png";
    $authorName = "SuperNikitka20008";
    $date = "14.03.2022 17:11";
    $likes = 2303;
    $dislikes = 0;
    $content = "Ребята аниме просто супер плакал я,девушка,дедушка,кот,собака и метеорит!!! СТАВЛЮ 9 из 10!!!
    Кстати, сайт просто супер!!!! ИДЕАЛьНЫЙ САЙТ ПРОСТО ШИК!!!
    аааааааааааааааааааааааааааааааааааааааааааааа";
?>

<div class="comment">
    <div class="top">
        <img class="avatar" src=<?= $avatarPath ?> alt="">
        <div class="comment-data">
            <p class="author-name"><?= $authorName ?></p>
            <p class="date"><?= $date ?></p>
        </div>
        <button class="reply">ответить<img src="/img/reply-icon.svg" alt=""></button>
        <button class="like"><img src="/img/comment-like-icon.svg" alt=""><?= $likes ?></button>
        <button class="dislike"><img src="/img/comment-dislike-icon.svg" alt=""><?= $dislikes ?></button>
    </div>
    <div class="content">
        <p><?= $content ?></p>
    </div>
</div>