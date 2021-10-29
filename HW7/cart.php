<?php
if(isset($_GET['action'])&&$_GET['action']=='del'){
    $id = $_GET['id'];
    if(isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}

if(isset($_POST['remove'])){
    foreach($_POST['quantity'] as $key => $val) {
        unset($_SESSION['cart'][$key]);
    }
}

if(isset($_POST['submit2'])){
    foreach($_POST['quantity'] as $key => $val) {
        if($val==0) {
            unset($_SESSION['cart'][$key]);
        }else{
            $_SESSION['cart'][$key]['quantity']=$val;
        }
    }
}
?>
<h1>Корзина</h1>
<form method="post" action="index.php?page=cart">

<?php
    if(isset($_SESSION['cart'])){
    $sql='SELECT * FROM products WHERE id IN (';
    foreach($_SESSION['cart'] as $id => $value) {
        $sql.=$id.',';
    }
    $sql=substr($sql, 0, -1).') ORDER BY name ASC';
    $result=mysqli_query($link, $sql);
    if($result){
        ?>
        <table>
            <tr>
                <td style="padding-right: 10px;">Название</td>
                <td style="padding-right: 10px;">Количество</td>
                <td style="padding-right: 20px;">Цена за 1 шт.</td>
                <td>Сумма</td>
            </tr>
        </table>
        <?php
    while($row=mysqli_fetch_assoc($result)){
        $subtotal=$_SESSION['cart'][$row['id']]['quantity']*$row['price'];
        $totalprice+=$subtotal;
        ?>
        <table>
        <tr>
            <td style="padding-right: 40px;"><?php echo $row['name'] ?></td>
            <td style="padding-right: 40px;"><input type='number' style='width: 30px;' name='quantity[<?php echo $row['id'] ?>]'  value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>"/></td>
            <td style="padding-right: 40px;"><?php echo $row['price'] ?> руб.</td>
            <td style="padding-right: 20px;"><?php echo $_SESSION['cart'][$row['id']]['quantity']*$row['price'] ?> руб.</td>
            <td><a href="index.php?page=cart&action=del&id=<?php echo $row['id'] ?>" style="border: 1px solid black; text-decoration: none; vertical-align:middle;">x</a></td>
        </tr>

        <?php
    }
    ?>
    <tr>
        <td colspan='5'>Общая сумма: <?php echo $totalprice ?> руб.</td>
    </tr>
</table>
    <input type='submit' name='submit2' value="Пересчитать"/>
    <input type='submit' name='remove' value="Очистить корзину"/>
        <?php
    } else echo "Корзина пуста";
        ?>
</form>
<a href="index.php?page=products">Вернуться в раздел "Продукция"</a>
<?php
}else echo "Корзина пуста";
