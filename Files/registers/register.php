<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Pint «Регистрация»</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="Files\Photo\ico.png">
</head>
 <body>
  <div class="header">
  	<h2>Зарегистрироваться</h2>
  </div>
  <div class="headers	">
   <a class="aa" href="http://pint-server/"><h3>⇐Назад</h3></a>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Имя пользователя</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Электронная почта</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Подтвердите пароль</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Зарегистрироваться</button>
  	</div>
  	<p>
	  Уже зарегистрировались? <a href="login.php">Войти</a>
  	</p>
  </form>
 </body>
</html>
