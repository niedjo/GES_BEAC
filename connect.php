<?php

session_start();
@$login = $_POST['nom'];
@$pass = $_POST['mdp'];
@$valider = $_POST['valider'];
$erreur = "";



if (isset($valider)) {
    if ($login == "user" and $pass == "123") {
        $_SESSION['manuela'] = "darren";
        header("location:accueil.php");
    }
    else {
        $erreur = "nom d'utilisateur ou mot de passe incorrect, veillez reessayer";
        echo "<script>
        window.addEventListener('DOMContentLoaded',jss)
        function jss() {
            let form = document.querySelector('.form')
            let content1 = document.querySelector('.content1')
            let content2 = document.querySelector('.content2')
            let content3 = document.querySelector('.content3')
            let section = document.querySelector('.section')
            form.style.display = ''
            function display() {
                content1.style.display = 'none'
                content2.style.display = 'none'
                content3.style.display = 'none'
                
            }
            display()
        }
        

            
        </script>" ;
    }
    
}


$server = 'localhost';
$dbname = 'ges_beac';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
$theme = $bdd->query("SELECT * FROM parametre WHERE id='0'");
while ($a = $theme->fetch()) {
    $police = $a['police'];
    $couleur = $a['couleur'];
}
echo "<script>
window.addEventListener('DOMContentLoaded',js)

function js() {
    document.querySelector('header').style.background = '$couleur'
    document.querySelector('.tabs').style.background = '$couleur'
    document.querySelector('body').style.fontFamily = '$police'
}</script>

";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connect.css">
    <script src="connect.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header class="head">
        <img src="Logo-BEAC.jpg" alt="le logo de la page" class="logo"><div class="logo_name">GES_BEAC</div><button id="autent">S'autentifier</button>
    </header>
    <div class="tabs">
        <div class="tab1 tab">La BEAC</div>
        <div class="tab2 tab">A propos</div>
        <div class="tab3 tab">parametre</div>
    </div>
    <div class="contents">
        <div class="content1">
       <p><h2> LA BANQUE DES ETATS DE L’AFRIQUE CENTRALE : <br> INSTITUT D’EMISSION EN AFRIQUE CENTRALE</h2></p><br><br>
<p> Créée en 1972, la Banque des Etats de l’Afrique Centrale (BEAC) est la banque centrale commune aux six Etats qui <br> constituent la Communauté Economique et Monétaire de l’Afrique Centrale (CEMAC). <br> Il s’agit respectivement du Cameroun, de la République Centrafricaine, du Congo, du Gabon, de la Guinée <br> Equatoriale et du Tchad. La BEAC a pour missions de : </p>
<ul>
   <li> définir et conduire la politique monétaire de la CEMAC;</li>
    <li>émettre la monnaie fiduciaire (billets de banque et pièces qui ont cours légal et pouvoir libératoire dans la CEMAC) ;
<li> conduire la politique de change de la CEMAC;
<li> détenir et gérer les réserves officielles de change des Etats-membres ;
<li>promouvoir le bon fonctionnement des systèmes de paiement et de règlement ;
<li>promouvoir la stabilité financière.
</ul>
La Banque Centrale met à la disposition de la Commission Bancaire des Etats de l’Afrique Centrale (COBAC), les moyens financiers, matériels et humains nécessaires à l’exécution de sa mission de supervision bancaire; mission indispensable pour garantir la stabilité économique de la CEMAC. Elle entretient aussi des relations régulières et efficaces avec des partenaires internationaux faisant d’elle une Institution monétaire et financière de référence.
        </div>
        <div class="content2">
            la GES_BEAC est une application concue pour gerer de maniere automatique les mouvements d'entree et sortie au sein de <br> la BEAC agence de Bafoussam. <br> Il s'agit entre autre des mouvements des visiteurs aussi des employers c'est a dire les agents de l'institution, les stagiaires, le personnel sous traitant <br> et enfin des documents de transmission 
        </div>
        <div class="content3">
            <form action="param.php" method="post" class="form2">
                Theme <br>
                <select name="couleur" id="couleur">
                    <option value="#c0a52b">jaune</option>
                    <option value="#fadf6a">jaune ciel</option>
                    <option value="#faac1c">orange</option>
                    <option value="#f73e10">rouge</option>
                    <option value="#4a3ef7">bleu</option>
                    <option value="#6f65f5">bleu ciel</option>
                    <option value="#65f59c">vert</option>
                </select><br>
                Police <br>
                <select name="police" id="police">
                    <option value="Arial">Arial</option>
                    <option value="san_serfis">sans serfis</option>
                    <option value="helvetica">helvetica</option>
                    <option value="courrier">courrier</option>
                </select><br>
                <input type="submit" value="modifier" id="submit">

            </form>
        </div>
    </div>
    <section><img src="Capture1-780x470.png" alt="image de font" class="section"></section>
    
        <form method="post" class="form">
        <div class="erreur"><?=$erreur?></div>
            Nom d'utilisateur <br>
            <input type="text" name="nom" id="nom"><br>
            Mot de passe <br>
            <input type="password" name="mdp" id="mdp"><br>
            <input type="submit" value="soumettre" name="valider" id="submit">
        </form>


</body>
</html>