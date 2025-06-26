<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "casino";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérification si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération et sécurisation des données
    $name = htmlspecialchars(trim($_POST['name']));
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $number = htmlspecialchars(trim($_POST['number']));

    // Insertion en base de données
    try {
        $stmt = $pdo->prepare("INSERT INTO inscris (name, firstname, number) VALUES (?, ?, ?)");
        $stmt->execute([$name, $firstname, $number]);
        echo "Vos données ont bien été envoyées !";
        header("Location: logged.html");
    } catch (PDOException $e) {
        if ($e->errorInfo[1] == 1062) {
            echo "Erreur : Ce numéro d'adhérent est déjà utilisé !";
        } else {
            echo "Erreur lors de l'inscription : " . $e->getMessage();
        }
    }
}
?>