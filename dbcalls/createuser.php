<?php
session_start();
include("conn.php"); // Zorg dat $conn een PDO verbinding is

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Waarden uit POST halen
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirmpassword'] ?? '';

    // Basisvalidatie
    if (empty($username) || empty($email) || empty($password) || empty($confirm)) {
        die("Vul alle velden in.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Ongeldig e-mailadres.");
    }

    if ($password !== $confirm) {
        die("Wachtwoord en bevestiging komen niet overeen.");
    }

    try {
        // SQL statement voorbereiden zonder password hashing
        $stmt = $conn->prepare("INSERT INTO Users (username, password, email) VALUES (?, ?, ?)");
        $stmt->execute([$username, $password, $email]);

        // Sessie opslaan en doorsturen
        $_SESSION['username'] = $username;
        header("Location: ../login.php");
        exit;

    } catch (PDOException $e) {
        die("Fout bij invoegen: " . $e->getMessage());
    }
} else {
    echo "Geen gegevens ontvangen.";
}
