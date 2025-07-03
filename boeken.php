<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['boeking'] = [
        'stad' => $_POST['stad'],
        'dealbestemming' => $_POST['dealbestemming'],
        'prijs' => $_POST['prijs']
    ];

    header('Location: reisinfo.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>
