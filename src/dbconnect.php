<?php


try
{

  $pdo = new PDO('mysql:host=127.0.0.1;dbname=society_management11', 'root', 'admin123');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  
  exit();
}



?>