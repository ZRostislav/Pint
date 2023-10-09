<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pint «Кабинет»</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="Files\Photo\ico.png">
</head>
 <body>

  <div class="header">
	 <h2>Кабинет</h2>
  </div>
  <div class="headers	">
   <a class="aa" href="http://pint-server/"><h3>⇐Назад</h3></a>
  </div>
  <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Добро пожаловать <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">выйти из аккаунта</a> </p>
    <?php endif ?>
   </div>

 </body>
</html>
