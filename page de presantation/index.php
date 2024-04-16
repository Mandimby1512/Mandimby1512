
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boulangerie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><span>B</span>oulangerie</a>
        <div class="repositive"></div>
        <ul class="navbar">
                <li><a href="#banier1">acceuil</a></li>
               <li><a href="#histoire">historique</a></li> 
               <li><a href="#">Lieu</a></li> 
               <li><a href="#produit">produit</a></li> 
               <li><a href="#contacte">contact</a></li> 
               <a href="#" class="bouton">Offre</a>
        </ul>
    </header>
    <section class="banier1" id="banier1">
        <div class="contenu1">
            <h1>tonga soa</h1>
            <h2>boulangerie mamy</h2>
            <p>boulangerie mamy eto andrononobe dia misokatra isanadro, <br> Ary afaka manome fahafapo ho anao</p>
            </div>
              <div class="contenu2">
                <a href="login.php">se conecte le membre</a>
            </div>
    </section>
    <section class="banier2" id="histoire">
        <div class="contenu3"><h1>historique</h1></div>
        <div class="contenu4">
            <p>
Tout d’abord nous avons l’option safe_mod qui permet de vérifier que le propriétaire du script courant est le 
même que le propriétaire du fichier qui sera éventuellement manipulé par le script. 
safe_mod = on (off étant la valeur par défaut) 
Puis l’on a aussi l’option display_errors qui permet d’afficher à l’écran ou non les messages d’erreurs lorsqu’un 
script n’a pu s’exécuté correctement. 
display_errors = off (on étant la valeur par défaut) 
Et pour finir nous avons l’option log_errors qui permet d’enregistrer dans le fichier error_log de Apache les 
messages d’erreurs lorsqu’il y a une erreur d’exécution d’un script. 
log_errors = on (off étant la valeur par défaut)
Comme vous avez pu le voir dans le présent document, il existe tout un panel de petites astuces qui permettent 
de rentre votre serveur web plus sécurisé que par défaut. Bien entendu cette liste d’option n’est pas exhaustive et 
je vous engage par la même à aller vous documentez sur le sujet sur les différents sites qui parle de tout ça (voir 
ci-dessous pour les ressources). 
Par ailleurs il vous est vivement conseiller de vous tenir au courant des dernières failles de sécurité concernant 
les applications que vous pourriez utiliser ainsi vous éviterez bien des soucis. Ce tenir informer est une des clés 
de la sécurité d’un serveur.</p></div>
    </section> 
    <section class="baier3" id="produit">
        <h1>voici le diferent produit</h1>
        
        <div class="products-container">
    <div class="product">
    <h2>Pain</h2>
        <img src="pain.jfif" alt="Pain">
        <div class="description">
            <ul>
                <li>Nom: Pain</li>
                <li>Prix: 700ar/pièce</li>
                <li>Bon pain</li>
            </ul>
        </div>
    </div>
    <div class="product">
        <h2>brioche</h2>
        <img src="brioche-nanterre-classique.jpg" alt="Brioche">
        <div class="description">
            <ul>
                <li>Nom: Brioche</li>
                <li>Prix: 800ar/pièce</li>
                <li>Brioche moelleuse</li>
            </ul>
        </div>
    </div>
    <div class="product">
        <h2>gallette</h2>
        <img src="galette.jfif" alt="Galette">
        <div class="description">
            <ul>
                <li>Nom: Galette</li>
                <li>Prix: 600ar/pièce</li>
                <li>Galette croustillante</li>
            </ul>
        </div>
    </div>
</div>

        
    </section>
    <footer id="contacte">
        <p>merci pour avoir mon site</p>
        <div class="product1">
        <img src="fone.png" alt="fone">
        <div class="description">
            <ul>
                <li>+261325825981</li>
                <li>+261345957282</li>
                
            </ul>
        </div>
    </div>
    <div class="product1">
        <img src="fb.jfif" alt="facbook">
        <div class="description">
            <ul>
                <li>mandimby abraham</li>
                <li>ramanatenasoa</li>
            
            </ul>
        </div>
    </div>
    <div class="product1">
   
        <img src="email.png" alt="Email">
        <div class="description">
            <ul>
                <li>abraham@gmail.com</li>
                <li>bolagerie.mg</li>
            </ul>
        </div>
    </div>
</div>
       
    </footer>
</body>
</html>