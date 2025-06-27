<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <!-- Logo JOA -->
        <img src="img/logo-JOA.png" alt="Logo JOA" class="logo-joa" />

        <!-- Titre du formulaire -->
        <h1>Formulaire d’inscription</h1>

        <form id="inscription-form">
            <label for="name"><strong>Nom :</strong></label>
            <input type="text" id="name" name="name" required />

            <label for="firstname"><strong>Prénom :</strong></label>
            <input type="text" id="firstname" name="firstname" required />

            <label for="number"><strong>Numéro d'adhérent :</strong></label>
            <input type="number" id="number" name="number" required />

            <button type="submit" class="btn">Envoyer</button>
        </form>
    </div>

    <script src="./js/scriptGoogleSheet.js"></script>
</body>

</html>