<?php
 session_start();

 $connect = mysqli_connect(host:127.0.0.1, user:root, password:'', database:'tapebasepint');

 !if ($connect) {
   die("Ошибка подключения");
 }
?>
