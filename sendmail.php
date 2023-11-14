<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('uk', 'phpmailer/language/');
    $mail->IsHTML(true);
    $mail->Subject = 'Заявка на тур';

    $mail->addAddress('koronatur@ukr.net');

    $body = 'Нова заявка на тур';

    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Імя:</strong> '.$_POST['name'].'</p>'
    }
    if(trim(!empty($_POST['phone']))){
        $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>'
    }
    if(trim(!empty($_POST['message']))){
        $body.='<p><strong>Повідомлення:</strong> '.$_POST['message'].'</p>'
    }

    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Помилка';
    } else {
        $message = 'Дані відправлені!';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>