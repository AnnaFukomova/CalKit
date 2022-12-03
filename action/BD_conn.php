<?php
$login = "MrPryanik";
$pass = "12345Tt";
$host = "localhost";
$namedb = "mrpryanikdb";

if(empty($_POST)==true){
  echo "";
}else{
  try {
    $conndb = new PDO("mysql:host=$host;dbname=$namedb", $login, $pass);
    $conndb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
  catch(PDOException $e){
      file_put_contents('errors.txt', $e->getMessage()."\n", FILE_APPEND);
      }
  }
 ?>
