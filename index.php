<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST">
            <label for="name"><strong>Nom :</strong></label>
            <input type="text" id="name" name="name" required>

            <label for="firstname"><strong>Prénom :</strong></label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="number"><strong>Numéro d'adhérent :</strong></label>
            <input type="number" id="number" name="number" required>

            <button type="submit" class="btn">Envoyer</button>
        </form>
    </div>
</body>
</html>