<?php
$link = mysqli_connect('localhost', 'root', 'aasd', 'db_products');
$result = mysqli_query($link, 'select * from products');
$row = mysqli_fetch_assoc($result);
?>