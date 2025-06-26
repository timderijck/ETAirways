<?php
$servername = "mariadb";
$username = "admin";
$password = "admin";
$dbname = "database";
 
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=database", $username, $password);
 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>