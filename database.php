<?php
try{
$conn = new PDO('mysql:host=;dbname=;charset=utf8;','root','');
}

catch(Exception $e) {
   echo "We have an error"."<br>";
  echo $e->getMessage()."<br>";
  die();
}
