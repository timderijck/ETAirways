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

<form action="./dbcalls/create.php" method="post">
    <label >typ hier de bestemming in naam in</label><br>
    <input type="text" name="gerecht" id="1">
    <input type="submit" value="submit">
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
        <input type="text" name="productnaam"  value="<?php echo $value['dealbestemming']; ?>">
        <input type="text" name="Prijs" id="" value="<?php echo $value['prijs']; ?>">
        <input type="text" name="img" id="" value="<?php echo $value['img']; ?>">
        <input type="text" name="uitleg" id="" value="<?php echo $value['stad']; ?>">

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