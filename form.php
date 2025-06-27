<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="container">
        <form id="inscription-form">
            <label for="name"><strong>Nom :</strong></label>
            <input type="text" id="name" name="name" required>

            <label for="firstname"><strong>Prénom :</strong></label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="number"><strong>Numéro d'adhérent :</strong></label>
            <input type="number" id="number" name="number" required>

            <button type="submit" class="btn">Envoyer</button>
        </form>
    </div>
    <script>
        document.getElementById("inscription-form").addEventListener("submit", function(e) {
            e.preventDefault();

            const data = {
            name: this.name.value,
            firstname: this.firstname.value,
            number: this.number.value
            };

            const formData = new URLSearchParams(data);

            fetch("https://script.google.com/macros/s/AKfycbw8q9_hhAKKUw_P3YbF5puruVP7bAOjF2JRJUHptN_x1-UM_kDIfpqhd6_f4NzZcvc/exec", {
            method: "POST",
            body: formData
            })
            .then(res => res.text())
            .then(result => {
            alert("Données envoyées : " + result);
            this.reset();
            })
            .catch(err => {
            alert("Erreur d’envoi : " + err);
            });
        });
    </script>
</body>

</html>