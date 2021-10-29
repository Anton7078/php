<?php
if(isset($_GET['action'])&&$_GET['action']=='add'){
    $id = $_GET['id'];
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity']++;
        $message='Товар добавлен';
        header('Location: index.php?page=product');
    } else {
        $_result = mysqli_query($link, 'select * from products where id='.$id);
        if(mysqli_num_rows($_result)!=0){
            $_row=mysqli_fetch_assoc($_result);

        $_SESSION['cart'][$_row['id']] = array(
                'quantity' => '1',
                'price' => $_row['price']
        );
            $message='Товар добавлен';
            header('Location: index.php?page=product');
    }else{
            $message='Товар не добавлен!';
        }
    }
}
?>

 <h1>Продукция</h1>

<?php
$result = mysqli_query($link, "select * from products");
while ($row = mysqli_fetch_assoc($result)) {
?>

<table>
<tr>
    <td style="padding-right: 10px;"><?php echo $row['name'] ?></td>
    <td style="padding-right: 10px;"><?php echo $row['describes'] ?></td>
    <td style="padding-right: 10px;"><?php echo $row['price'] ?> руб.</td>
    <td style="padding-right: 10px;"><a href="index.php?page=products&action=add&id=<?php echo $row['id'] ?>">Добавить в корзину</a></td>
</tr>
</table>

<?php
}
if (isset($message)) {
    echo "<p>$message</p>";
}
?>

<h1>Корзина</h1>

<?php
if(isset($_SESSION['cart'])){
    $sql='SELECT * FROM products WHERE id IN (';
    foreach($_SESSION['cart'] as $id => $value) {
        $sql.=$id.',';
    }
    $sql=substr($sql, 0, -1).') ORDER BY name ASC';
    $result=mysqli_query($link, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
?>

<p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id']]['quantity'] ?></p>

<?php
}
?>

<hr />
<a href='index.php?page=cart'>Перейти в корзину</a>

<?php
    }else echo "Корзина пуста";
}else echo "Корзина пуста";
?>