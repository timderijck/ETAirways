<?php
  session_start();

    include("conn.php");
    $stmt = $conn->prepare("SELECT * FROM Users WHERE username = :username AND password = :password And email = :email;");
    $stmt->bindParam(":username", $_POST['username']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->bindParam(":email",    $_POST['email']);
    $stmt->execute();
    $result = $stmt->fetch();



if ($result){
    $_SESSION['username'] = $result['username'];
    header(header: 'location: ../admin.php');
 
}
else{
    echo 'boehoe';
}