

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
        <form method="post" action="review.php">
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>

            <label for="review">Review:</label>
            <textarea id="review" name="review" rows="5" required></textarea>

            <input type="submit" value="Verstuur">
        </form>
    </div>


    <div class="container-revieuw">
    <div class="review-list">
        <h2>Beoordelingen</h2>

        <!-- Simpele voorbeeldreviews -->
        <div class="review">
            <strong>Anna</strong>
            <p>Super goede service en vriendelijke medewerkers!</p>
        </div>
        <div class="review">
            <strong>Mark</strong>
            <p>Heel tevreden met mijn ervaring. Aanrader!</p>
        </div>
         <div class="review">
            <strong>Emile</strong>
            <p>Super goede website mooie php en goed gecodeerd dikke 10 emile de developer heeft zo te zien hard gewerkt</p>
        </div>
    </div>
</div>


</body>
</html>

