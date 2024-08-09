<?php
session_start();

include "connection.php";

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer et nettoyer les données du formulaire
  $usernameOrEmail = isset($_POST['username_or_email']) ? ($_POST['username_or_email']) : '';
  $password = isset($_POST['password']) ? ($_POST['password']) : '';

  // Validation des données
  if (empty($usernameOrEmail) || empty($password)) {
      die('Veuillez remplir tous les champs.');
  }

  // Préparer la requête pour rechercher l'utilisateur
  $sql = 'SELECT username, email, password FROM login WHERE username = :username_or_email OR email = :username_or_email';
  $stmt = $database->prepare($sql);
  $stmt->bindParam(':username_or_email', $usernameOrEmail);
  $stmt->execute();

  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // Vérifier si l'utilisateur existe et si le mot de passe est correct
  if ($user && password_verify($password, $user['password'])) {
      // Les informations de connexion sont correctes
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];

      // // Rediriger l'utilisateur vers une page protégée ou d'accueil
      // header('Location: connection.php');
      // exit;
  } else {
      // Informations de connexion incorrectes
      echo 'Nom d\'utilisateur ou mot de passe incorrect.';
  }
} else {
  // La méthode de requête n'est pas POST
  echo 'Méthode de requête invalide.';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container-login">
            <form action="connection.php" method="POST" class="form" id="login">
                   <h1>login</h1>
                   <div class="input">
                      <div class="input-name">
                          <label for="1"></label> 
                          <input type="text" class="form-input" autofocus placeholder="username or email">
                          <div class="form__input-error-messages"></div>
                      </div>
                      <div class="input-password">
                           <label for="1"></label> 
                           <input type="password" class="form-input" autofocus placeholder="password">
                           <div class="form__input-password-incorrect"></div>
                       </div>
                       <button class="form_button" type="submit">se connecter</button>
                    </div>
            </form>
    </div>
          <script src="javascript/login.js"></script>
</body>
</html>