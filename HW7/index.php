<?php
session_start();
require_once 'connectBD.php';
if(isset($_GET['page'])){
    $pages = array('product','cart');
    if(in_array($_GET['page'], $pages)){
        $_page = $_GET['page'];
    }else $_page = 'product';
}else $_page = 'product';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Продукция</title>
</head>
<body>
    <div>

    <?php require_once $_page.".php";?>

    </div>
</body>
</html>