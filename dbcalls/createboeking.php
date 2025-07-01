<?php
session_start();
include('conn.php');

// Gegevens uit POST
$id = $_POST['id'];           // ID van de boeking die je wil aanpassen
$boeking = $_POST['boeking']; // Nieuwe waarde voor 'boeking'
$plek = $_POST['plek'];       // Nieuwe waarde voor 'plek'

// Simpele validatie
if (empty($id) || empty($boeking) || empty($plek)) {
    die("Vul alle velden in.");
}

try {
    // Update de boeking met dit ID
    $sql = "UPDATE boekings SET boeking = :boeking, plek = :plek WHERE id = :id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':boeking', $boeking);
    $stmt->bindParam(':plek', $plek);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->execute();

    // Terug naar accountpagina
    header('Location: ../mijnaccount.php');
}
?>
