<div class="title-comments">
    <h2 class="section-header">Комментарии:</h2>
    <form>
        <textarea name="comment" id="comment" placeholder="Ваш комментарий" rows="3"></textarea>
        <button class="send-btn"><img src="/img/send-icon.svg" alt=""></button>
    </form>
    <div class="comments">
        <?php 
            for($i = 0; $i < 3; $i++) {
                include $root."/templates/comment.php";
            }
        ?>
    </div>
</div>