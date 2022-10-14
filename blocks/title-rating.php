<?php
    $marks = array(12334, 12334, 259, 126, 11);
    $sum = 0;
    $res = 0;
    for($i = 0; $i < count($marks); $i++) {
        $sum += $marks[$i];
        $res += $marks[$i] * (5 - $i);
    }
    $res /= $sum; 
    $res = round($res, 1);
?>

<div class="title-rating">
    <h2 class="section-header">Ваша оценка</h2>
    <div class="simple-rating">
        <div class="stars">
            <div class="star" style="background-color: <?php if (round($res, 1) >= 0.5) echo "#FFC700"; else echo "#E1E1E1"; ?>;"></div>
            <div class="star" style="background-color: <?php if (round($res, 1) >= 1.5) echo "#FFC700"; else echo "#E1E1E1"; ?>;"></div>
            <div class="star" style="background-color: <?php if (round($res, 1) >= 2.5) echo "#FFC700"; else echo "#E1E1E1"; ?>;"></div>
            <div class="star" style="background-color: <?php if (round($res, 1) >= 3.5) echo "#FFC700"; else echo "#E1E1E1"; ?>;"></div>
            <div class="star" style="background-color: <?php if (round($res, 1) >= 4.5) echo "#FFC700"; else echo "#E1E1E1"; ?>;"></div>
        </div>
        <div class="number">
            <p class="summare"><span><?= $res ?></span>/5.0</p>
            <p class="rate-aount"><?= $sum ?> оценок</p>
        </div>
    </div>
    <table class="complex-rating">
        <?php 
            for($i = 0; $i < 5; $i++) {
                echo ('<tr class="line">
                        <td width="23px" class="mark">'.(5 - $i).'</td>
                        <td width="36px"><img src="/img/small-title-star.svg" alt=""></td>
                        <td width="590px"><div class="grey-line"></div><div class="red-line" style="width: '.round(550 * ($marks[$i] / $sum), 0).'px "></td>
                        <td width="84px" class="percent">'.round($marks[$i] / $sum*100, 1).'%</td>
                        <td class="amountVoices">'.$marks[$i].'</td>
                    </tr>');
            }
        ?>
    </table>
</div>