<?php
session_start();

include("conn.php");
$stmt = $conn->prepare("SELECT * FROM Users WHERE username = :username AND password = :password");
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetch();



if ($result){
    $_SESSION['username'] = $result['username'];
    header(header: 'location: ../user.php');

}
else{
    echo 'verkeerde inlog of wachtwoord';
}
var_dump($_POST);
