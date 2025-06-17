<?php
include ('conn.php');

$stmt = $conn->prepare("SELECT * FROM menuitems;");
$stmt->execute();
$result = $stmt->fetchAll();