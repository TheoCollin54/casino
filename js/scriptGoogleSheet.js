document.getElementById("inscription-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const btn = this.querySelector(".btn");
    btn.disabled = true; // Désactive le bouton dès le clic

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
            // alert("Données envoyées : " + result);
            this.reset();
            window.location.href = "logged.html";
        })
        .catch(err => {
            alert("Erreur d’envoi : " + err);
            btn.disabled = false;
        });
});