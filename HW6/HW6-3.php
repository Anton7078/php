<?php
require_once 'db.php';
$name = $_POST['name'];
$numOrd =  $_POST['num_order'];
$mail =  $_POST['mail'];
$rev =  $_POST['review'];
$link = mysqli_connect('localhost', 'root', 'aasd', 'review');
    if (isset($_POST['result'])){
        $sql = mysqli_query($link, "INSERT INTO reviews VALUES (null,'$name',$numOrd,'$mail','$rev')");
        if ($sql) {
            $output = 'Данные успешно добавлены в таблицу.';
            header("Location: hw6-2.php");
        } else {
            $output = 'Ошибка! Введите данные еще раз!' ;//. mysqli_error($link) . '';
            //header("Location: hw6-2.php");
        };
    }
    else $output = "Заполните данные";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hw6.css">
    <title>Review</title>
</head>
<body class="content-form">
<div style="justify-content: center;">
    <form method="POST" action="hw6-2.php" class="form-review">
        <p>Введите имя:</p>
        <input type="text" name="name">
        <p>Введите номер заказа:</p>
        <input type="number" name="num_order">
        <p>Введите email:</p>
        <input type="email" name="mail">
        <p>Отзыв:</p>
        <textarea name="review" placeholder="Комментарий"></textarea>
        <input type="submit" name="result">
        <p><?php echo $output;?></p>
    </form>
    <?php contentreview();?>
</div>



</body>
</html>