<?php
function contentreview(){
    $link = mysqli_connect('localhost', 'root', 'aasd', 'review');
    $result = mysqli_query($link, 'select * from reviews');
    $row = mysqli_fetch_assoc($result);
    echo "<div class='review-content'><p class='review-content-number'>Имя:  $row[name]<br> Заказ №  $row[orderName]</p><p class='review-content-number'> Отзыв:  $row[text_review]</div>";
    while ($row = mysqli_fetch_assoc($result)) {

        echo "<div class='review-content'><p class='review-content-number'>Имя:  $row[name]<br> Заказ №  $row[orderName]</p><p class='review-content-number'> Отзыв:  $row[text_review] </div>"; //'. '  Заказ № ' . $row['ordername'] . '</p><p> Отзыв:  ' . $row['text_review'] . '</p>'';
    };};
?>