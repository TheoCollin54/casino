const form = document.getElementById("inscription-form");
form.addEventListener("submit", function (e) {
    e.preventDefault();

    const data = {
        name: document.getElementById("name").value,
        firstname: document.getElementById("firstname").value,
        number: document.getElementById("number").value
    };

    fetch("https://script.google.com/macros/s/AKfycbw_o1W4tGH_IytOd_TbT9c_x3yB_wDeV7bQ-w6iEnsTqWmpynYEBcU8bJos2dLui7qeDg/exec", {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            "Content-Type": "application/json"
        }
    })
        .then(response => {
            if (response.ok) {
                alert("Données envoyées avec succès !");
                form.reset();
            } else {
                alert("Erreur lors de l’envoi.");
            }
        });
});