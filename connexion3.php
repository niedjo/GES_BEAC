<?php

$server = 'localhost';
$dbname = 'ges_beac';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




// $nom = $_POST['nom'];
$piece_ident = $_POST['identit'];
// $motif = $_POST['motif'];
// $mouvement = $_POST['mouvement'];
$objet = $_POST['objet'];
$destination = $_POST['destination'];
$nbr_piece = $_POST['piece'];
$observation = $_POST['observation'];
$date = gmdate('Y-m-d h:i:s');


if (isset($piece_ident)and isset($objet) and isset($destination)and isset($nbr_piece) and isset($observation)) {
    $inserer1 = ("INSERT INTO usager(piece,nombre_pieces) values(\"$piece_ident\",\"$nbr_piece\");
    INSERT INTO mouvement(mouvement,objet,destination,observation,date_et_heure_entree) VALUES(\"ENTREE\",\"$objet\",\"$destination\",\"$observation\",'$date');
    INSERT INTO statut(statut) values('Document de transmission');
    ");
    
    $bdd->exec($inserer1);
    // header("location:accueil.php");
}
else {
    echo "echec d'enregistrement, veillez reessayer";
}








?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>enregistrement effectue avec succes</p>
    <h1><a href="accueil.php">retour a la page d'accueil</a></h1>
</body>
</html>