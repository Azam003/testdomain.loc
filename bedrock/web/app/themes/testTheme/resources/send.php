<?php
// подключаем WP, можно конечно обойтись без этого, но зачем?
//require( dirname(__FILE__) . '/wp-load.php');

$mail_to = 'gaphack000@gmail.com';


if(isset($_POST['what']))
{
    $sub = 'Новая заявка - ' . $_POST['what'];
}



if(isset($sub))
{
    $error = '';

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];

        $n = 'Имя: ' . $name;
    }

    if(isset($_POST['phone']))
    {
        $phone = $_POST['phone'];

        $p = 'Телефон: ' . $phone;
    }

    if(isset($_POST['email']))
    {
        $email = $_POST['email'];

        $e = 'E-mail: ' . $email;
    }

    if(isset($_POST['date']))
    {
        $date = $_POST['date'];

        $d = 'Дата: ' . $date;
    }

    if(isset($_POST['time']))
    {
        $time = $_POST['time'];

        $t = 'Время: ' . $time;
    }

    if(isset($_POST['message']))
    {
        $ques = $_POST['message'];

        $q = 'Вопрос: ' . $ques;
    }


    if(strlen($error) == '')
    {
        $to      = $mail_to;
        $subject = $sub;
        $message = 'Тема: ' . $sub . "\r\n" .
            $n . "\r\n" .
            $p . "\r\n" .
            $e . "\r\n" .
            $d . "\r\n" .
            $t . "\r\n" .
            $q . "\r\n" . "\r\n";

        $email='no-reply@' . $_SERVER['HTTP_HOST']; // от кого
        $send = mail($mail_to,$sub,$message,"Content-type:text/plain; charset=utf-8\r\nFrom:$email");

        $headers = "Content-type:text/plain; charset=utf-8\r\nFrom:$email";
//        if( wp_mail( get_option('admin_email'), 'Сообщение с сайта', wpautop( $message ), $headers ) ) {
//            exit;
//        }
        $email='no-reply@' . $_SERVER['HTTP_HOST']; // от кого
        $send = mail($mail_to,$sub,$message,"Content-type:text/plain; charset=utf-8\r\nFrom:$email");
        echo 'Отправлено!';

//        header('location: thanks.html');
    }
}
