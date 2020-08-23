<?php
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$data = stripslashes(htmlspecialchars($_POST['check_list']));
$data = implode(",  ", $_POST['check_list']);


if(empty($name) || empty($phone)){
echo '<h1 style="color:red;">Пожалуйста заполните все поля</h1>';
echo '<meta http-equiv="refresh" content="2; url=http://'.$_SERVER['SERVER_NAME'].'">';
}
else{
$subject = '[HappyMan]'; 
$addressat = "lona.panasuk@gmail.com";
$success_url = './form-ok.php?name='.$_POST['name'].
'&phone='.$_POST['phone'].
'&data='.$_POST['check_list'];


/////
$message = "Имя: {$name}
\nТелефон: {$phone}
\nКорзина: {$data}";

$verify = mail($addressat,$subject,$message, "From:Mail", "Content-type:text/plain;charset=utf-8\r\n");

if ($verify == 'true'){
    // header('Location: '.$success_url);

    echo '<style>';
    echo 'h1 {';
    echo 'text-align: center;';
    echo '}';
    echo '';
    echo 'p {';
    echo 'text-align: center;';
    echo '}';
    echo '</style>';

    echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';

    echo '<ul class="list_info">';
    echo '<li>';
    echo '<span>Ф.И.O.: </span>';
    echo $name;
    echo '</li>';
    echo '<li>';
    echo '<span>Телефон: </span>';
    echo $phone;
    echo '</li>';
    echo '<li>';
    echo '<span>Корзина: </span>';
    echo $data;
    echo '</li>';
    echo '</ul>';

    echo '<p class="fail success">';
    echo 'Если вы ошиблись при заполнени формы, то, пожалуйста,';
    echo '<a href="javascript: history.back(-1);">заполните заявку еще раз</a>';
    echo '</p>';
    
    exit;
}
else 
    {
        $errorMessage = error_get_last()['message'];
        $result = '<h1 style="color:red;">Произошла ошибка!</h1><p>' . $errorMessage . '</p>';
        echo $result;
    }
}
?>