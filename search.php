<?php
include("conn.php");

if (isset($_GET["searchresult"])) {
    $searchResult = $_GET["searchresult"];
    if (empty($searchResult)) {
        echo "Please enter a search term.";
        exit;
    }

    $searchTerm = '%' . strtolower($searchResult) . '%';
    $stmt->bindParam(":search", $searchTerm);

    $query = "
    SELECT id, dealbestemming, img, prijs, stad
    FROM deals
    WHERE
        LOWER(TRIM(titel)) LIKE :search
        OR LOWER(TRIM(beschrijving)) LIKE :search
        OR LOWER(TRIM(bestemming)) LIKE :search
";


    try {
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":product", $searchTerm);
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
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <?php include("../includes/header.php"); ?>
    </header>
    <main>
        <div class="zoekresultaten">
            <?php
            if (isset($result) && $result) {
                echo "<h2>Reisdeals voor: '" . htmlspecialchars($searchResult) . "'</h2>";
                foreach ($result as $row) {
                    echo '<div class="zoekresultaat-blok">';
                    echo '<h3>' . htmlspecialchars($row['titel']) . '</h3>';
                    echo '<p><strong>Bestemming:</strong> ' . htmlspecialchars($row['bestemming']) . '</p>';
                    echo '<p>' . htmlspecialchars($row['beschrijving']) . '</p>';
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
        <?php include("../includes/footer.php"); ?>
    </footer>
</body>

</html>