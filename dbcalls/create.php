<h1>create</h1>

<?php
include("./conn.php");

if (isset($_POST['dealbestemming'])) {
    $dealbestemming = $_POST['dealbestemming'];




    $sql = 'INSERT INTO deals (dealbestemming) VALUES (:dealbestemming)';
    $stmt = $conn->prepare($sql);
    
    
    $stmt->bindParam(':dealbestemming', $dealbestemming);
    
    
    $stmt->execute();

    header('Location: ../index.php');
} else {
    echo 'Geen bestemming ontvangen.';
}
?>
