<?php

include("conn.php");

$dealbestemming = $_POST['dealbestemming'];
$prijs = $_POST['Prijs'];
$id = $_POST['id'];
$img = $_POST['img'];
$uitleg = $_POST['stad'];

$sql = 'UPDATE DEALS SET dealbestemming = :dealbestemming, prijs = :prijs, img = :img, stad = :stad WHERE id =:id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":dealbestemming", $dealbestemming );
$stmt->bindParam(":prijs", $prijs );
$stmt->bindParam(":img", $img );
$stmt->bindParam(":stad", $stad );
$stmt->bindParam(":id", $id );
$stmt->execute();


header("location: ../admin.php");

?>