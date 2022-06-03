<?php

if (isset($_POST['submit']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['object']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    $from = $_POST['email'];
    $to = 'contact@louis-gambart.fr';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['object'];
    $text = $_POST['message'];

    $message = "Prénom : " . $first_name . "<br>";
    $message .= "Nom : " . $last_name . "<br>";
    $message .= "De : " . "louis-gambart.fr" . "<br>";
    $message .= "Sujet : " . $subject . "<br>";
    $message .= "Message : " . $text;

    $headers = "From: " . $from . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8";


    $ret = mail($to, $subject, $message, $headers);
    if ($ret) {
        header('Location: form_success.php');
    } else {
        header('Location: form_fail.php');
    }
}
else{
    header('Location: form_fail.php');
}