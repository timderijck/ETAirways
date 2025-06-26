<?php
include("./conn.php");

$id = $_POST['ID'];

$stmt = $conn->prepare("DELETE FROM deals WHERE id = :id");
$stmt->bindParam(":id", $id); // zelfde als in de query
$stmt->execute();


exit;
?>
