<?php
if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $from = $_POST['mail'];
    $message = $_POST['message'];
    $to = 'contact@louis-gambart.fr';
    $subject = "Contact from portfolio";
    $body = "From: $name <br> E-Mail: $from <br> Message: $message";
    $headers = "From: " . $from . "\r\n" . "Content-Type: text/html; charset=UTF-8";
    if(mail($to, $subject, $body, $headers)){
        $is_send = '1';
    }else{
        $is_send = '0';
    }
    header('Location: /pages/contact.php?is_send='.$is_send);
} else {
    header('Location: /pages/contact.php?is_send=0');
}