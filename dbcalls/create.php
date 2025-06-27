<h1>Create</h1>


<?php
include("./conn.php");
var_dump($_POST);
// Veilige manier om POST-waarden op te halen
$dealbestemming = $_POST['dealbestemming'] ?? null;
$img = $_POST['img'] ?? null;
$prijs = $_POST['prijs'] ?? null;
$stad = $_POST['stad'] ?? null;


echo 'Dit is de bestemming: ' . $dealbestemming . ' <<<<<';

// Check of alle verplichte velden aanwezig zijn
if (!$img || !$prijs || !$stad) {
    die("Fout: één of meer verplichte velden ontbreken (img, prijs, stad).");
}

// SQL-query met alle velden
$sql = 'INSERT INTO deals (dealbestemming, img, prijs, stad)
        VALUES (:dealbestemming, :img, :prijs, :stad)';
$stmt = $conn->prepare($sql);

$stmt->bindParam(":dealbestemming", $dealbestemming);
$stmt->bindParam(":img", $img);
$stmt->bindParam(":prijs", $prijs);
$stmt->bindParam(":stad", $stad);
    
$stmt->execute();



?>
