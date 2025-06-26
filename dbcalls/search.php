<?php
include('../dbcalls/conn.php');

if (isset($_GET["searchresult"])) {
    $searchResult = $_GET["searchresult"];
    if (empty($searchResult)) {
        echo "Please enter a search term.";
        exit;
    }

    $searchTerm = '%' . strtolower($searchResult) . '%';

    $query = "
    SELECT id, dealbestemming, img, prijs, stad
    FROM deals
    WHERE
        LOWER(TRIM(dealbestemming)) LIKE :search
        OR LOWER(TRIM(stad)) LIKE :search
    ";

    try {
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":search", $searchTerm);
        $stmt->execute();
        $result = $stmt->fetchAll();
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="assets/js/validate.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="flex">
        <div class="maatschappijinfo flex">
            <img src="../assets/img/ETAirways.png" alt="ETplaatje" height="80" width="80">
            <div class="maatschappijtekst">
                <h1>ET Airways</h1>
            </div>
            <div class="taalinloggen flex position">
                <div class="taal flex">
                    <img src="../assets/img/nlvlag.png" alt="nl" width="27" height="20">
                    <div class="nltekst">
                        <h2>Netherlands - nl</h2>
                    </div>
                </div>
                <div class="inloggen flex">
                    <div class="inlogplaatje position">
                        <img src="../assets/img/inlog.png" alt="inlog" width="32" height="32">
                    </div>
                    <div class="nltekst">
                        <div class="dropdown">
                            <button class="dropbtn">
                                <h2>Inloggen</h2>
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="../registratie.php">
                                    <h2>Account aanmaken</h2>
                                </a>
                                <a href="../login.php">
                                    <h2>Inloggen</h2>
                                </a>
                                <a href="../adminlogin.php">
                                    <h2>Admin</h2>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="hoofdteksten flex">
            <div class="hoofdtekstpositie flex position indexposition hulpposition">
                <a href="../index.php">
                    <h1>Home</h1>
                </a>

                <h1>Mijn Reis</h1>
                </a>
                <a href="../info.php">
                    <h1>Informatie</h1>
                </a>
                <a href="../hulp.php">
                    <h1>Hulp</h1>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="zoekresultaten">
            <?php
            if (isset($result) && $result) {
                echo "<h2>Reisdeals voor: '" . htmlspecialchars($searchResult) . "'</h2>";
                foreach ($result as $row) {
                    echo '<div class="zoekresultaat-blok">';
                    echo '<h3>' . htmlspecialchars($row['dealbestemming']) . '</h3>';
                    echo '<p><strong>Bestemming:</strong> ' . htmlspecialchars($row['stad']) . '</p>';
                    echo '<img src="../assets/img/' . htmlspecialchars($row['img']) . '" alt="' . htmlspecialchars($row['dealbestemming']) . '" style="max-width: 300px;">';
                    echo '<p><strong>Prijs:</strong> €' . htmlspecialchars($row['prijs']) . '</p>';
                    echo '</div><br>';
                }
            } else {
                echo "Geen deals gevonden voor '" . htmlspecialchars($searchResult) . "'.";
            }

            ?>
        </div>
    </main>
    <footer>
        <footer class="footer footersearch">
            <div class="footer-blok-info">
                <img src="../assets/img/ETAirways.png" alt="">
                <h1>ET Airways</h1>
                <div class="email-container">
                    <h2>Over Ons</h2>
                    <h2>E-mail: ETAirways@gmail.com</h2>
                </div>
                <div class="telefoon-container">
                    <h3>
                        Telefoon nummer <br>
                        ETAirways: 0643873297
                    </h3>
                </div>
                <div class="container-partners">
                    <h4>onze partners <br> rentalcars.com & airbnb</h4>
                </div>
            </div>
        </footer>
    </footer>
</body>

</html>