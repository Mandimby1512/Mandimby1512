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

// Vérification si le formulaire a été soumis
if(isset($_POST['envoie'])) {
    // Vérification des champs du formulaire
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
        // Récupération des données du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        // Utilisation de password_hash() pour hacher le mot de passe (recommandé)
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        
        try {
            // Préparation de la requête SQL
            $insertUser = $connection->prepare("INSERT INTO amploye (nom, prenom, email, mdp) VALUES (?, ?, ?, ?)");
            // Exécution de la requête
            $insertUser->execute([$nom, $prenom, $email, $mdp]);
            echo "Utilisateur inscrit avec succès.";
        } catch(PDOException $e) {
            // Gestion des erreurs d'insertion
            echo "Erreur d'inscription : " . $e->getMessage();
        }
    } else {
        echo "Veuillez compléter tous les champs du formulaire.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <section>
    <h2>Inscription</h2>
    <form method="POST" action="">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="mdp">Mot de passe :</label><br>
        <input type="password" id="mdp" name="mdp"><br>
        <input type="submit" name="envoie" value="S'inscrire">
    </form>
    </section>
</body>
</html>
