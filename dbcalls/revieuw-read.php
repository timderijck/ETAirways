<?php
include ('conn.php');
$stmt = $conn->prepare("SELECT * FROM revieuws;");
$stmt->execute();
$result = $stmt->fetchAll();
