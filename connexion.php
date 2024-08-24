<?php

$server = 'localhost';
$dbname = 'ges_beac';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




$nom = $_POST['nom'];
$piece_ident = $_POST['identit'];
$motif = $_POST['motif'];
// $mouvement = $_POST['mouvement'];
$objet = $_POST['objet'];
$destination = $_POST['destination'];
$nbr_piece = $_POST['piece'];
$observation = $_POST['observation'];

if (isset($nom) and isset($piece_ident) and isset($motif) and isset($observation)) {
    $inserer1 = ("INSERT INTO usager(piece,nom_et_prenom) values(\"$piece_ident\",\"$nom\");
    INSERT INTO mouvement(mouvement,motif,observation) VALUES(\"ENTREE\",\"$motif\",\"$observation\");
    INSERT INTO statut(statut) values('Visiteur');
    ");
    
    $bdd->exec($inserer1);
}
elseif (isset($nom) and isset($motif) and isset($observation)) {
    $inserer1 = ("INSERT INTO usager(piece,nom_et_prenom) values(\"$nom\");
    INSERT INTO mouvement(mouvement,motif,observation) VALUES(\"ENTREE\",\"$motif\",\"$observation\");
    INSERT INTO statut(statut) values('Employee');
    ");
    
    $bdd->exec($inserer1);
}
elseif (isset($piece_ident)and isset($objet) and isset($destination)and isset($nbr_piece) and isset($observation)) {
    $inserer1 = ("INSERT INTO usager(piece,nombre_pieces) values(\"$piece_ident\",\"$nbr_piece\");
    INSERT INTO mouvement(mouvement,objet,destination,observation) VALUES(\"ENTREE\",\"$objet\",\"$destination\",\"$observation\");
    INSERT INTO statut(statut) values('Document de transmission');
    ");
    
    $bdd->exec($inserer1);
}
else {
    echo "echec d'enregistrement, veillez reessayer";
}








?>