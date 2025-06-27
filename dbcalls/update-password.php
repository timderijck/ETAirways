<?php
include("conn.php");

// Ophalen van gegevens uit POST
$username = $_POST['username'];
$password = $_POST['password'];

// SQL-query voorbereiden
$sql = 'UPDATE Users 
        SET password = :password 
        WHERE username = :username';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":password", $password);
$stmt->bindParam(":username", $username);
$stmt->execute();

// Doorsturen na update
header(header:'Location: ../password_chance.php');
exit;
?>
