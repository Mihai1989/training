<?php
// PHP date object connect to the DB
$hostname='localhost';
$username='root';
$password='root';

try {
  $db = new PDO("mysql:host=$hostname;dbname=cheltuieli",$username,$password);//new
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  echo $e->getMessage();
  exit;
}
?>
