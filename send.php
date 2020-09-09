<?php
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$data = implode(",  ", $_POST['check_list']);

?>

<?php
        $name = stripslashes(htmlspecialchars($_POST['name']));
        $phone = stripslashes(htmlspecialchars($_POST['phone']));
        $data = implode(",  ", $_POST['check_list']);
        $headers = "Content-Type: text/plain; charset=UTF-8";
        $from = 'From: GoldenSot'; 
        $to = 'lona.panasuk@gmail.com'; // send to this address
        $subject = 'GoldenSot'; //subject line in email

         $message = 
         "Имя: $name\n
         Телефон: $phone\n 
         Корзина: $data\n";

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
        
        mail($to, $subject, $message, $headers); ?>