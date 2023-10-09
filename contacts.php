<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  }

?>
<!DOCTYPE html>
<html lang=ru dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pint «Контакты»</title>
    <link rel="stylesheet" href="Files\css\style.css">
    <link rel="stylesheet" href="Files\css\adaptation.css">
    <link rel="icon" href="Files\Photo\ico.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

   <style>
    html { overflow: hidden; margin:0; }
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
         <a class="a-log" href="contests.php"><p class="nali">Конкурсы</p></a>
         <a class="a-log" href="contacts.php"><p class="nali">Контакты</p></a>
         <a class="b-log" href="Files\registers\login.php"><p class="nali">Вход</p></a>
         <div class="img-log">
          <img src="Files\Photo\The_upper_part19.png">
         </div>
         <?php  if (isset($_SESSION['username'])) : ?>
    	    <p align="center" class="reg-users">Добро пожаловать!<br><strong><?php echo $_SESSION['username']; ?></strong></p>
    	    <p> <a align="center" class="reg-user" href="contacts.php?logout='1'" style="color: red;">Выйти из аккаунта</a> </p>
          <style>
           .b-log {position: fixed; opacity: 0%; display: none;}
          </style>
         <?php endif ?>
        </div>
      </header>

      <main class="content">
       <div class="pp"><h2>Контакты</h2></div>
       <div class="fot">
        <img src="Files\Photo\contacts-fond4.jpg" width="2500">
       </div>
       <div class="fot-opi">
         <img src="Files\Photo\contacts-fond-opi.jpg" width="1920">
       </div>
       <div class="fot-opi-2">
         <img src="Files\Photo\contacts-fond-opi.jpg" width="7680">
       </div>
       <div class="stend">
         <img style="margin-left:-110%;" src="Files\Photo\stend\sten1.jpg" width="200px">
         <img style="margin-left:60%;" src="Files\Photo\stend\sten2.jpg" width="200px">
         <img style="margin-left:50%;" src="Files\Photo\stend\sten3.jpg" width="200px">
       </div>
       <div class="stend-tp">
         <p align="center" style="margin-left:-97%;">Финансовый директор<br>Ищенко Станислав Владимирович<br>36 лет<br><br>+373 95 503 20 12</p>
         <p align="center" style="margin-left:42%;">Технический директор<br>Смитов Илья Иванович<br>25 лет<br><br>+373 35 243 53 65</p>
         <p align="center" style="margin-left:28%;">Начальник отдела по связям с общественностью<br>Карпов Александр Александрович<br>27 лет<br><br>+373 21 543 68 99</p>
       </div>
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
