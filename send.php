<?php
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$cart = stripslashes(htmlspecialchars($_POST['cart']));

if($_GET['product_id']){
    $product_id = $_GET['product_id'];
}else{
    $product_id = $_POST['product_id'];
}
if(empty($name) || empty($phone) || empty($cart)){
echo '<h1 style="color:red;">Пожалуйста заполните все поля</h1>';
echo '<meta http-equiv="refresh" content="2; url=http://'.$_SERVER['SERVER_NAME'].'">';
}
else{
$subject = '[GoldenSot]'; 
$addressat = "lona.panasuk@gmail.com";
$success_url = './form-ok.php?name='.$_POST['name'].'&phone='.$_POST['phone'].'&time='.$_POST['Время_звонка'].'&cart='.$_POST['cart'].'';
$message = "Имя: {$name}\nТелефон: {$phone}\nТовар: {$cart}";
$verify = mail($addressat,$subject,$message,"Content-type:text/plain;charset=utf-8\r\n");
if ($verify == 'true'){
    header('Location: '.$success_url);
    echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
    exit;
}
else 
    {
    echo '<h1 style="color:red;">Произошла ошибка!</h1>';
    }
}
?>