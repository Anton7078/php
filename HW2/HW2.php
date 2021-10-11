// 1 задание
<?php
$a = 3;
$b = 0;

if ($a >= 0 and $b >= 0)
    echo $a - $b;
else if ($a < 0 and $b < 0)
        echo $a * $b;
else echo $a + $b;
?>

// 2 задание
<?php
$a = 10;
function PrintArray($a) 
    {
    $array = [];
    for ($i = $a; $i<=15; $i++) 
        {
            $array[] = "$i";
        }
    foreach ($array as $row) 
        {	
            echo $row . ' ';
        }
    }
switch ($a)
{	
    case 0:
        PrintArray($a);		
        break;
    case 1:	
        PrintArray($a);
        break;
    case 2:	
        PrintArray($a);
        break;
    case 3:	
        PrintArray($a);
        break;
    case 4:	
        PrintArray($a);
        break;
    case 5:	
        PrintArray($a);
        break;
    case 6:		
        PrintArray($a);		
        break;
    case 7:	
        PrintArray($a);
        break;
    case 8:	
        PrintArray($a);
        break;
    case 9:	
        PrintArray($a);
        break;
    case 10:	
        PrintArray($a);
        break;
    case 11:	
        PrintArray($a);
        break; 
    case 12:	
        PrintArray($a);
        break;
    case 13:	
        PrintArray($a);
        break;
    case 14:	
        PrintArray($a);
        break;
    case 15:	
        PrintArray($a);
        break;
}
?>

// 3 задание
<?php
function plus($a, $b)
    {
        return $a + $b;
    }

function minus($a, $b)
    {
        return $a - $b;
    }

function multi($a, $b)
    {
        return $a * $b;
    }

function segment($a, $b)
    {
        return $a / $b;
    }
echo plus(5, 4).' , '.minus($a, $b).' , '.multi(5, 4).' , '.segment(5, 4);
?>

// 4 задание
<?php
function mathOperation($arg1, $arg2, $operation) 
    {
    switch ($operation)
        {	
            case '+':
                echo plus($arg1, $arg2);		
                break;
            case '-':	
                echo minus($arg1, $arg2);
                break;
            case '*':	
                echo multi($arg1, $arg2);
                break;
            case '/':	
                echo segment($arg1, $arg2);
                break;

        }
    }
mathOperation(6, 7, '*');
?>

// 5 задание
<?php
$year = date('Y');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    </body>
    <footer>
        <p><?=$year;?></p>
    </footer>
</html>

// 6 задание
<?php
function power($val, $pow) {
    if ($pow ===0) 
        {
            return 1;
        }
    else if ($pow > 0) 
        {
            return $val * power($val, $pow - 1);
        }
    else if ($pow < 0)
        {
            return power(1/$val, -$pow);
        }
}
echo power(2, -2);
?>

// 7 задание
<?php
//ini_set('date.timezone', 'Europe/Moscow');
//$hour = date('H');
//$minut = date('i');
$hour = 21;
$minut = 43;
function hours($a)
    {
        if ((intdiv($a, 10)!= 1) and ($a % 10 == 1)) 
            {
                return $a.' '.'час';
            }
        else if ((intdiv($a, 10) != 1) and (($a % 10 > 1) and ($a % 10 < 5))) 
            {
                return $a.' '.'часа';
            }
        else return $a.' '.'часов';
    }
function minutes($b) 
    {
        if ((intdiv($b, 10)!= 1) and ($b % 10 == 1)) 
            {
                return $b.' '.'минута';
            }
        else if ((intdiv($b, 10) != 1) and (($b % 10 > 1) and ($b % 10 < 5))) 
            {
                return $b.' '.'минуты';
            }
        else return $b.' '.'минут';
    }
echo hours($hour).' '.minutes($minut);
?>