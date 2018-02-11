<?php
try
{
  $user = 'postgres';
  $password = 'st!ckbug95';
  $db = new PDO('pgsql:host=127.0.0.1;dbname=rexburg_restaurants', $user, $password);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>