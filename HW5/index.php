<?php
require_once 'base.php';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="index_img.php?id='.$row['id']. '">';
    echo '<img width="150" height="130" src="image/'.$row['name'] . '">';
    echo '</a>';
}