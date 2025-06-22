<?php
include("conn.php");

// Gegevens uit POST halen
$dealbestemming = $_POST['dealbestemming']; 
$prijs = $_POST['Prijs'];                  
$img = $_POST['img'];                       
$stad = $_POST['stad'];                     
$id = $_POST['id'];                         

// SQL-query voorbereiden
$sql = 'UPDATE deals 
        SET dealbestemming = :dealbestemming, 
            prijs = :prijs, 
            img = :img, 
            stad = :stad 
        WHERE id = :id';

$stmt = $conn->prepare($sql);

// Parameters binden
$stmt->bindParam(":dealbestemming", $dealbestemming);
$stmt->bindParam(":prijs", $prijs);
$stmt->bindParam(":img", $img);
$stmt->bindParam(":stad", $stad);
$stmt->bindParam(":id", $id);

// Query uitvoeren
$stmt->execute();

 header(header: 'location: ../admin.php');


?>
