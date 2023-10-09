<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'tapeconnects.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);

    /*
     * Делаем выборку всех строк комментариев с полученным ID продукта выше
     */

    $comments = mysqli_query($connect, "SELECT * FROM `news` WHERE `product_id` = '$product_id'");

?>

<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  }

  require_once 'tapeconnects.php';

?>
<!DOCTYPE html>
<html lang=ru dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pint «<?= $product['title'] ?>»‎</title>
    <link rel="stylesheet" href="Files\css\style-news.css">
    <link rel="stylesheet" href="Files\css\style.css">
    <link rel="stylesheet" href="Files\css\adaptation.css">
    <link rel="icon" href="Files\Photo\ico.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

   <style>
    html { margin:0; }
    .b-log {color: white}
   </style>
  </head>

  <body>
    <div class="wrapper">
      <header class="header">
       <h2 class="Pint-log">Pint</h2>
       <button class="button-log" onclick="window.location.href = 'http://pint-server/';"></button>
        <div class="Pint-mash">
         <a class="a-log" href="error.html"><p class="nali">Блог</p></a>
         <a class="a-log" href="tape.php"><p class="nali">Лента</p></a>
         <a class="a-log" href="error.html"><p class="nali">Галерея</p></a>
         <a class="a-log" href="contests.html"><p class="nali">Конкурсы</p></a>
         <a class="a-log" href="contacts.html"><p class="nali">Контакты</p></a>
         <a class="b-log" href="Files\registers\login.php"><p class="nali">Вход</p></a>
         <div class="img-log">
          <img src="Files\Photo\The_upper_part19.png">
         </div>
         <?php  if (isset($_SESSION['username'])) : ?>
    	    <p align="center" class="reg-users">Добро пожаловать!<br><strong><?php echo $_SESSION['username']; ?></strong></p>
    	    <p> <a align="center" class="reg-user" href="index.php?logout='1'" style="color: red;">Выйти из аккаунта</a> </p>
          <style>
           .b-log {position: fixed; opacity: 0%; display: none;}
          </style>
         <?php endif ?>
        </div>
      </header>

      <main class="content">
       <h2>Title: <?= $product['title'] ?></h2>
       <h4>Price: <?= $product['text'] ?></h4>
       <p>Description: <?= $product['data'] ?></p>
     </main>

     <footer class="footer">
       <a href="https://telegram.org/"><img class="footer-img-telegram" align="center" src="Files\Photo\ico-fat-telegram.png" width="40" height="40" alt=""></a>
       <a href="https://www.youtube.com/"><img class="footer-img-youtube" align="center" src="Files\Photo\ico-fat-youtube.png" width="40" height="40" alt=""></a>
       <a href="https://ru-ru.facebook.com/"><img class="footer-img-facebok" align="center" src="Files\Photo\ico-fat-facebok.png" width="40" height="40" alt=""></a>
       <p align="left" class="footer-text"><font size="3">© 2022-2023 OOO "Pint". Все права защищены.<br>Перепечатка и любое использование материалов возможно только при наличии ссылки на первоисточник.<font></p>
     </footer>

   </div>
  </body>

</html>
