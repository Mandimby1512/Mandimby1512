<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atache</title>
    <link rel="stylesheet" href="tache.css">
</head>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $date = $_POST["date"];
    $liste = $_POST["liste"];
    $atache = $_POST["atache"];

    // Adresse e-mail de destination
    $destinataire = "abraha@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Rapport de travail - " . $date;

    // Construire le corps de l'e-mail
    $contenu = "Date: $date\n";
    $contenu .= "Liste d'équipes présentes:\n$liste\n";
    $contenu .= "Tâche aujourd'hui:\n$atache\n";

    // En-têtes de l'e-mail
    $headers = "From: webmaster@example.com"; // Remplacez par votre adresse e-mail

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "<p>Votre rapport de travail a été envoyé avec succès.</p>";
    } else {
        echo "<p>Une erreur s'est produite lors de l'envoi du rapport de travail.</p>";
    }
}
?>



    <section class="partie0">
    <header>
        <div><p>Rapport des taches aujourd'hui</p></div>

        <ul class="menue">
            <li><a href="#chef_equipe">Chef d'équipe</a></li>
            <li><a href="#mangasiner">Magasinier</a></li>
            <li><a href="#tresorier">Trésorier</a></li>
        </ul>
    </header>
    </section>
    <section class="partie1" id="chef_equipe">
        <div class="chef">
            <p>completer le formuleur pour le chef d'equipe</p>
            <form action="jadonaabraha@gmail.com" method="post">

                
                <label for="date">Date :</label><br>
                <input type="text" id="date" placeholder="jj/MM/AAAA" name="date"><br>
                <label for="liste">Liste d'équipes présentes :</label><br>
                <textarea name="liste" id="liste" cols="30" rows="10">Nom et prénom</textarea><br>
                <label for="atache">Tâche aujourd'hui :</label><br>
                <textarea name="atache" id="atache" cols="30" rows="5"></textarea><br>
                <input type="submit" value="Envoyer">
            </form>

        </div>
        
    </section>

    <section class="partie2" id="mangasiner">
    <p>completer le formuleur pour le magasinier</p>
        <div class="chef">
            <form action="#">
                <label for="">date</label><br>
                <input type="text" id="date" placeholder="jj/MM/AAAA" nom="date"><br>
                <table>
                    <caption>produit entre et sortie</caption>
                    <tr>
                        <tbody>
                            <thead>
                                <td>produit entrant</td>
                                <td>description</td>
                                <td>produit sortant</td>
                                <td>description et nbr</td>
                            </thead>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>

                        </tbody>
                    </tr>
                </table>

                <input type="submit" value="envoye">
            </form>
        </div>
        
    </section>
    <section class="partie3" id="tresorier">
    <p>completer le formuleur </p>
        <div class="chef">
            <form action="#">
                <label for="">date</label><br>
                <input type="text" id="date" placeholder="jj/MM/AAAA" nom="date"><br>
                <table>

                    <caption>prix de l'éthane à vendre</caption>

                    <tr>
                        <tbody>
                            <thead>
                                <td>Nom du produit entrant</td>
                                <td>Nombre(s)</td>
                                <td>Prix unitaire</td> 
                                <td>prix total</td>        
                            </thead>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                            <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody><td></td><td></td><td>TOTAL</td><td><input type="text"></td></tbody>

                    </tr>
                </table>
                <table>

                    <caption>argent dépensé</caption>

                    <tr>
                        <tbody>
                            <thead>
                                <td>Nom du produit sortant</td>
                                <td>Nombre(s)</td>
                                <td>Prix unitaire</td> 
                                <td>prix total</td>        
                            </thead>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>

                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody>
                        <td><input type="text" ></td>
                            <td><input type="text" placeholder="Nbr"></td>></td>
                            <td><input type="text" ></td>
                            <td><input type="text" ></td>
                        </tbody>
                    </tr>
                    <tr>
                        <tbody><td></td><td></td><td>TOTAL</td><td><input type="text"></td></tbody>

                    </tr>
                </table>
                

                <input type="submit" value="envoye">
            </form>
        </div>
    </section>
    <section>
        <footer>
        <p>Merci d'avoir suivi le programme</p>                                      
        </footer></section>

</body>
</html>