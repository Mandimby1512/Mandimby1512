<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php
// Connexion à la base de données
try {
    $connection = new PDO('mysql:host=localhost;dbname=espas-membres;charset=utf8', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Erreur de connexion : " . $e->getMessage();
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST["email"];
    $password = $_POST["mdp"];

    if(!empty($mail) && !empty($password)) {
        $req = $connection->prepare("SELECT * FROM amploye WHERE email = :email AND mdp = :mdp");
        $req->execute(array(':email' => $mail, ':mdp' => $password));

        if($req->fetchColumn() > 0) {
            header("Location: tache.php");
            exit;
        } else {
            echo "Identifiants incorrects.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>

<section>
    <h1>Connexion</h1>
    <form action="#" method="POST"> 
        <label for="email">Adresse mail</label>
        <input type="text" name="email" id="email">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp">
        <input type="submit" value="Se connecter">
    </form>
    <p>Aller à la page d'inscription</p>
    <a href="inscription.php">Inscription</a>
</section>
</body>
</html>
