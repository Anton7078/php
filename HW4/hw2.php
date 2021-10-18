<?php
$path = 'images/';
$types = array('image/gif', 'image/png', 'image/jpg', 'image/jpeg');
$size = 10000000;
# Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
# Проверка по типу
if (!in_array($_FILES['picture']['type'], $types))
 die('Недопустимый тип файла <a href="http://hw4/hw2.php">Попробовать другой файл?</a>');
# Проверка по размеру
 if ($_FILES['picture']['size'] > $size)
 die('Превышен размер файла <a href="http://hw4/hw2.php">Попробовать другой файл?</a>');
# Копирование файла в директорию с картинками
 if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
 die('Ошибка <a href="http://hw4/hw2.php">Попробовать другой файл?</a>');
 $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')? 'https': 'http';
 header('Location: ' . $proto . '://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI']);
}

# Перебор картинок в папке и добавление на страницу
function insertImg() {
    $images = scandir('images/');
    for ($i=0; $i<count($images);$i++) {
        if (is_file('images/'.$images[$i] )) {
        echo "<img src='/images/$images[$i]' class='search-img' onclick='myfunction(this)'>";
        }}
}
?>

<!DOCTYPE HTML>
<html>
 <head>
 <title>Index</title>
 <meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css">
 <script src="js/main.js"></script>
 </head>
 <body>
     <div class="body-img">
 <div><?php insertImg();?></div>
 <div class='body-reseach'>
<p>Загрузка изображений</p>
 <form method="post" enctype="multipart/form-data" class ="body-form" >
 <input type="file" name="picture" class='input-file'>
 <input type="submit" value="Загрузить">
 </form>
 </div>
 <div class='modal'>
     <div class="modal-content">
        <img id="imMod" src="" class="image-modal" alt="">
        <span class='close-img'>&times;</span>
    </div>
</div>
 </div>
 </body>
</html>
