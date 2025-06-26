
<?php
include("./conn.php");
var_dump($_POST);
// Veilige manier om POST-waarden op te halen
$username = $_POST['username'];
$email = $_POST['email'] ;
$password = $_POST['password'] ;



// Check of alle verplichte velden aanwezig zijn
if (!$username || !$email || !$password) {
    die("Fout: één of meer verplichte velden ontbreken (username, email, password).");
}

// SQL-query met alle velden
$sql = 'INSERT INTO Users (username, email, password)
        VALUES (:username, :email, :password)';
$stmt = $conn->prepare($sql);

$stmt->bindParam(":username", $username);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":password", $password);

$stmt->execute();




?>