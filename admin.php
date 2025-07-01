<?php include('./includes/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<h1>admin</h1>
<a href="index.php">terug naar de index</a>
<form method="POST" action="./dbcalls/create.php">
    <label>Bestemming:
        <input type="text" name="dealbestemming" required>
    </label><br>
    
    <label>Afbeelding (naam van bestand):
        <input type="text" name="img" required>
    </label><br>
    
    <label>Prijs:
        <input type="number" name="prijs" required>
    </label><br>
    
    <label>Stad:
        <input type="text" name="stad" required>
    </label><br>
    
    <button type="submit">Toevoegen</button>
</form>
</body>
</html>




<?php

include("./dbcalls/conn.php");
include('./dbcalls/read.php');


//Het loopen van de database gegevens
foreach ($result as $value) {

?>
  
    <form action="./dbcalls/update.php" method="post">
        <input type="hidden" name="id" id="" value="<?php echo $value['id']; ?>" >
        <input type="text" name="dealbestemming"  value="<?php echo $value['dealbestemming']; ?>">
        <input type="text" name="Prijs" id="" value="<?php echo $value['prijs']; ?>">
        <input type="text" name="img" id="" value="<?php echo $value['img']; ?>">
        <input type="text" name="stad" id="" value="<?php echo $value['stad']; ?>">

        <button type="submit">Update</button>
    </form>

    <?php

    
    echo '<form action="./dbcalls/delete.php" method="post">';
    echo '<input type="hidden" name="ID" value="' . $value['id'] . '">';
    echo '<input type="submit" name="" value="delete" > ';
    echo '</form>';

    echo '</div>';
}

?>



<?php
// Check of data binnenkomt via POST
if (isset($_POST['boeking']) && isset($_POST['plek'])) {
    $boeking = $_POST['boeking'];
    $plek = $_POST['plek'];

    echo "Boeking: " . $boeking . "<br>";
    echo "Plek: " . $plek . "<br>";

    echo "Update boeking";
} else {
    echo "Geen boekingsgegevens ontvangen.";
}
?>
