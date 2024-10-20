<?php
    $name = $_POST['name'];
    $CosName = $_POST['ComName'];
    $tel = $_POST['tel'];
    $to = 'exp@yandex.ru';
    $header = 'Данные'


    $message = "Имя пользователя: $name \nСайт компании: $ComName \nТелефон: $tel";


    $send = mail($to, $header, $message, "Content-type:text/plain; charset = UTF-8\r\nFrom:$ComName");
?>