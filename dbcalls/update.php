<?php

include("conn.php");

$productnaam = $_POST['productnaam'];
$prijs = $_POST['Prijs'];
$id = $_POST['id'];
$img = $_POST['img'];
$uitleg = $_POST['uitleg'];

$sql = 'UPDATE menuitems SET Productnaam = :productnaam, prijs = :prijs, img = :img, uitleg = :uitleg WHERE id =:id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":productnaam", $productnaam );
$stmt->bindParam(":prijs", $prijs );
$stmt->bindParam(":img", $img );
$stmt->bindParam(":uitleg", $uitleg );
$stmt->bindParam(":id", $id );
$stmt->execute();


header("location: ../admin.php");

?>