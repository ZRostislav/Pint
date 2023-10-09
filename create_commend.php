<?php

require_once 'tapeconnects.php';

$id = $_POST['id'];
$body = $_POST['body'];

mysqli_query($connect, query: "INSERT INTO 'comments' ('id', 'product_id', 'body') VALUES (NULL, '$id', NULL)");

?>