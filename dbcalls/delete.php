<?php
include("./conn.php");

$id = $_POST['ID'];

$stmt = $conn->prepare("DELETE FROM deals WHERE ID=:ID");
$stmt->bindParam(":ID", $id);
$stmt->execute();

header('Location: ../admin.php');