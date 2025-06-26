<?php
include ('conn.php');
$stmt = $conn->prepare("SELECT * FROM deals;");
$stmt->execute();
$result = $stmt->fetchAll();