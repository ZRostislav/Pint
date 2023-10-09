<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Pint «Вход»</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="Files\Photo\ico.png">
</head>
 <body>
  <div class="header">
  	<h2>Вход</h2>
  </div>
  <div class="headers	">
   <a class="aa" href="http://pint-server/"><h3>⇐Назад</h3></a>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Имя пользователя</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Авторизоваться</button>
  	</div>
  	<p>
	  Еще не зарегистрирован?  <a href="register.php">Регистрация</a>
  	</p>
  </form>
 </body>
</html>
