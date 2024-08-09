<?php
 include "connection.php";
 // Vérification si les données sont envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $adresse_email = isset($_POST['adresse_email']) ? $_POST['adresse_email'] : '';
    $numero_de_telephone = isset($_POST['numero_de_telephone']) ? $_POST['numero_de_telephone'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validation des champs
    if (!empty($nom) && !empty($adresse_email) && !empty($numero_de_telephone) && !empty($password)) {
        // Préparation de la requête SQL
        $sql = 'INSERT INTO utilisateurs (nom, adresse_email, numero_de_telephone, password) VALUES (:nom, :adresse_email, :numero_de_telephone, :password)';
        $stmt = $database->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':adresse_email', $adresse_email);
        $stmt->bindParam(':numero_de_telephone', $numero_de_telephone);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));

        // Exécution de la requête
        if ($stmt->execute()) {
            echo 'Inscription réussie';
        } else {
            echo 'Erreur lors de l\'inscription';
        }
    } else {
        echo 'Tous les champs doivent être remplis';
    }
} else {
    echo 'Méthode de requête invalide';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container-sign-up">
    <form action="sign-up" method="POST" class="menace" >
        <h1>sign-up</h1>
        <div class="social-container">
              <div class="tel">
                <span>utiliser un compte gmail et un numero de telephone</span>
            </div>
              <input type="text" placeholder="nom">
              <input type="email" placeholder="emaii">
              <input type="numero" placeholder="numero de telephone">
              <input type="password" placeholder="mot de passe">
              <button class="form_button" type="submit">creer le compte</button>
        </div>
    </form>
</div>
</body>
</html>