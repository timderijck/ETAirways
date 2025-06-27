
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
<body class="appels">
<h1>verander hier uw wachtwoord</h1>
<div class="container-change">
    <form method="post" action="./dbcalls/update-password.php">
    <input type="text" id="username" name="username" placeholder="Gebruikersnaam" class="noborder">
    <div class="verticalpadding2"></div>
    <input type="text" id="password" name="password" placeholder="Password" class="noborder">
    <input type="submit" value="verander">
</form>
</div>

</body>

</html>



