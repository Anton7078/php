<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>php1.6.1</title>
</head>
<body>
<form method="post" action="">
    <input type="number" name="operand1" placeholder="Число 1">
    <select name="operation">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multi">*</option>
        <option value="defrag">/</option>
    </select>
    <input type="number" name="operand2" placeholder="Число 2">
    <input type="submit" name="result">
</form>
</body>
</html>

<?php
$oper = $_POST['operation'];
$num1 =  $_POST['operand1'];
$num2 =  $_POST['operand2'];
if ($num1!=NULL and $num2!=NULL) {
    $result = check($num1, $num2, $oper);
    echo 'Число 1 = '.$num1.'<br>   Число 2 = '.$num2;
    echo '<br>Операция: '.$result[1]."<br>Ответ:  ".round($result[0],2);
}
else echo "Введите ДВА числа!";
function check($arg1, $arg2, $operation) {
    switch ($operation) {
        case "plus" :
            $result = $arg1+$arg2;
            $name = 'сумма';
            break;
        case "minus" :
            $result = $arg1-$arg2;
            $name = 'разность';
            break;
        case "multi" :
            $result = $arg1*$arg2;
            $name = 'произведение';
            break;
        case "defrag" :
            if ($arg2!='0'){
                $result = $arg1/$arg2;
                $name = 'частное';
                break;
            }
            else {
                $name = 'частное';
                $result ='Деление на ноль. Введите другое число!';
            }
    }
    return [$result,$name];
    }