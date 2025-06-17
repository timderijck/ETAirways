<h1>create</h1>

<?php

include ("./conn.php");
$product = $_POST ['gerecht'];




echo 'dit is mijn productnaam: '.$product.' <<<<<';
$sql = 'INSERT INTO menuitems(Productnaam) VALUES (:product);';
$stmt = $conn ->prepare($sql);
$stmt ->bindParam(":product", $product);

$stmt->execute();

header('location: ../index.php');