<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="body-admin">
    
    <header class="flex">
        <div class="maatschappijinfo flex">
            <img src="assets/img/ETAirways.png" alt="ETplaatje" height="80" width="80">
            <div class="maatschappijtekst">
                <h1>ET Airways</h1>
            </div>
            <div class="taalinloggen flex position">
                <div class="taal flex">
                    <img src="assets/img/nlvlag.png" alt="nl" width="27" height="20">
                    <div class="nltekst">
                        <h2>Netherlands - nl</h2>
                    </div>
                </div>
                <div class="inloggen flex">
                    <div class="inlogplaatje position">
                        <img src="assets/img/inlog.png" alt="inlog" width="32" height="32">
                    </div>
                    <div class="nltekst">
                        <h2>Inloggen</h2>
                        <div class="dropdown">
                            <button class="dropbtn"><h2>Inloggen</h2>
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="registratie.php"><h2>Account aanmaken</h2></a>
                                <a href="login.php"><h2>Inloggen</h2></a>
                                <a href="adminlogin.php"><h2>Admin</h2></a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
      

      <h1>test nu ajagh</h1>
        <?php

include("./dbcalls/conn.php");
include('./dbcalls/read.php');


//Het loopen van de database gegevens
foreach ($result as $value) {

?>
  
    <form action="./dbcalls/update.php" method="post">
        <input type="hidden" name="id" id="" value="<?php echo $value['ID']; ?>" >
        <input type="text" name="productnaam"  value="<?php echo $value['productnaam']; ?>">
        <input type="text" name="Prijs" id="" value="<?php echo $value['prijs']; ?>">
        <input type="text" name="img" id="" value="<?php echo $value['img']; ?>">
        <input type="text" name="uitleg" id="" value="<?php echo $value['uitleg']; ?>">

        <button type="submit">Update</button>
    </form>

    <?php

    
    echo '<form action="./dbcalls/delete.php" method="post">';
    echo '<input type="hidden" name="ID" value="' . $value['ID'] . '">';
    echo '<input type="submit" name="" value="delete" > ';
    echo '</form>';

    echo '</div>';
}
?>

        

   
    </main>


</body>

</html>