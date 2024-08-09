<?php
include "connection.php";
// Vérification si les données sont envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et validation des données du formulaire
    $nom = isset($_POST['name']) ? ($_POST['name']) : '';
    $prenom = isset($_POST['prenom']) ? ($_POST['prenom']) : '';
    $localisation = isset($_POST['localisation']) ? ($_POST['localisation']) : '';
    $age = isset($_POST['age']) ? ($_POST['age']) : '';

    // Validation de l'âge pour s'assurer qu'il est numérique
    if (!is_numeric($age)) {
        die('L\'âge doit être un nombre.');
    }

    // Préparation de la requête SQL pour insérer les données
    $sql = 'INSERT INTO beneficiaire (nom, prenom, localisation, age, date_ajout) VALUES (:nom, :prenom, :localisation, :age, NOW())';
    $stmt = $database->prepare($sql);

    // Liaison des paramètres
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':localisation', $localisation);
    $stmt->bindParam(':age', $age);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo 'Bénéficiaire ajouté avec succès !';
    } else {
        echo 'Erreur lors de l\'ajout du bénéficiaire.';
    }
} else {
    echo 'Méthode de requête invalide.';

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Bénéfices</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="beneficiaire">
        <h1>Gestion des Bénéficiaires</h1>
        
        <!-- Formulaire pour ajouter un nouveau bénéficiaire -->
        <form id="add-beneficiary-form" action="suivi des beneficiares.php" method="POST">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>
            <label for="prenom">prenom:</label>
            <input type="text" id="prenom" name="prenom" required>
            <label for="localisation">localisation:</label>
            <input type="text" id="localisation" name="localisation" required>
            <label for="age">age:</label>
            <input type="text" id="age" name="age" required><br>
            
            <button type="submit">Ajouter Bénéficiaire</button>
        </form>
        
        <!-- Table pour afficher les bénéficiaires -->
        <table id="beneficiaries-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>age</th>
                    <th>Date d'ajout</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>