<?php
require_once 'base.php';
$id = $_GET['id'];
//var_dump("$id");
if ($id && is_numeric($id)) {
    mysqli_query($link, 'update images set view = view + 1 where id='.$id);
    $result = mysqli_query($link, 'select * from images where id='.$id);
    $image = mysqli_fetch_assoc($result);
    if ($image) {
        echo '<img src="image/'.$image['name'] .'">';
        echo '<span><br></br>Просмотры: '.$image['view'].' </span>';
    }
    else {
        die("Can't find image");
    }
}