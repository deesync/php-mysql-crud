<?php
session_start();

$conn = mysqli_connect(
  $host = getenv('DB_HOST'),
  $username = getenv('DB_USER'),
  $password = getenv('DB_PASSWORD'),
  $dbname = getenv('DB_NAME')
) or die(mysqli_erro($mysqli));

?>
