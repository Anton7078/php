<?php
$link = mysqli_connect('localhost', 'root', '', 'img_schema');
$result = mysqli_query($link, 'select * from images  order by view desc');
