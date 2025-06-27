
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>


<body class="body">
    <div class="revieuw-text">
  <h1>sorry voor het ongemak maar door een technische storing kunnen er geen reviews worden geschreven.</h1>
  </div>  
  <div class="review-form">
        <h2>Laat een review achter</h2>

  <form method="post" action="./dbcalls/create_review.php">
    <label for="username">Naam:</label>
    <input type="text" id="username" name="username" required>

    <label for="review">Review:</label>
    <input type="text" id="review" name="review" required>

    <input type="submit" value="Verstuur">
</form>

    </div>


 <?php
$reviews = [
    ['name' => 'Anna', 'text' => 'Super goede service en vriendelijke medewerkers!'],
    ['name' => 'Mark', 'text' => 'Heel tevreden met mijn ervaring. Aanrader!'],
    ['name' => 'Emile', 'text' => 'Super goede website mooie php en goed gecodeerd dikke 10 emile de developer heeft zo te zien hard gewerkt'],
];

echo '<div class="container-revieuw">';
echo '<div class="review-list">';
echo '<h2>Beoordelingen</h2>';

foreach ($reviews as $revieuw) {
    echo '<div class="review">';
    echo '<b>' . $revieuw['name'] . '</b>';
    echo '<p>' . $revieuw['text'] . '</p>';
    echo '</div>';
}

echo '</div>';
echo '</div>';

?>

</body>
</html>

