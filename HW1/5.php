// 1 способ
<?php
$a = 1;
$b = 2;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo $a; // 2
echo $b; // 1
?>

// 2 способ
<?php
$a = 1;
$b = 2;
[$a, $b] = [$b, $a];
echo $a;  // 2
echo $b;  // 1
?>

