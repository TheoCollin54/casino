const form = document.getElementById("inscription-form");
form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch("https://script.google.com/macros/s/AKfycbynE1Fp1NcBcrVp65VpU74SZE7fnN2boCIlPsRzY-5QdICJj6jjwVsX3vcYbiUBcMJSqw/exec", {
        method: "POST",
        body: new URLSearchParams(formData) // Pas de headers personnalisés = pas de préflight
    })
        .then(response => {
            if (response.ok) {
                alert("Données envoyées avec succès !");
                form.reset();
            } else {
                alert("Erreur lors de l’envoi.");
            }
        })
        .catch(error => {
            console.error("Erreur:", error);
            alert("Erreur réseau.");
        });
});
