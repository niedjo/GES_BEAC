<?php

 
$server = 'localhost';
$dbname = 'ges_beac';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
// pour les visiteurs
$tout = $bdd->query("SELECT * FROM usager,statut,mouvement WHERE statut.id_statut=mouvement.rubrique AND mouvement.rubrique=usager.id_usager ORDER BY rubrique DESC");
$visiteurs = $bdd->query("SELECT * FROM usager,statut,mouvement WHERE statut.id_statut=mouvement.rubrique AND mouvement.rubrique=usager.id_usager AND statut='visiteur' ORDER BY rubrique DESC");
$employee = $bdd->query("SELECT * FROM usager,statut,mouvement WHERE statut.id_statut=mouvement.rubrique AND mouvement.rubrique=usager.id_usager AND statut='employee' ORDER BY rubrique DESC");
$document = $bdd->query("SELECT * FROM usager,statut,mouvement WHERE statut.id_statut=mouvement.rubrique AND mouvement.rubrique=usager.id_usager AND statut LIKE('%document%') ORDER BY rubrique DESC");
// // pour les stagiaires
// $stagiaires = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Stage%') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");

//     $stg1 = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Stage professionel%') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
//     $stg2 = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Stage academique%') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
//     $stg3 = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Stage de vaccance%') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
    
// // pour les prestataires
// $prestataires = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Prestataire%') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
//     $prest1 = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Prestataire : AGICAM') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
//     $prest2 = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Prestataire : NBS') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
//     $prest3 = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Prestataire : ITACHI') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
//     $prest4 = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Prestataire : SACAM') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
//     $prest5 = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Prestataire : GIEA') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
    


// // pour les particuliers
// $particuliers = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE statue LIKE('Particulier') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");


// // pour la recherche

// if (isset($_GET['search']) and !empty($_GET['search'])) {
//     $search = $_GET['search'];
//     $resultat = $dbco->query("SELECT nom_et_prenom,mouv,date_enregistrement,motif FROM utilisateur,statue,mouvement WHERE CONCAT(nom_et_prenom,mouv,date_enregistrement,motif) LIKE('%$search%') AND statue.id_statue=utilisateur.rubrique AND mouvement.id_mouv=utilisateur.rubrique ORDER BY rubrique DESC");
    
// }


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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="accueil2.css">
    <script src="accueil.js" defer></script>
    <style>
        table{
            border-collapse: collapse;
            /* padding: 50px; */
            margin-top: 100px;
            font-size: 19px;
            width: 90%;
            /* color: green; */
        }
        .th1{
            font-weight: 700;
            font-size: 20px;
            color: #6B410A;
        }
        .th2{
            font-weight: 600;   
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<header>
<div class="log"> <img class="logo" src="logo-BEAC.jpg" alt="logo de la page"> </div> <div class="beac">GES_BEAC</div>
 <ul class="menu">
       <li class="add"> <a href="login.html"class="tab">Ajouter</a></li>
       <div class="vide"></div>
       <li><a href="sortir.php?search=user" class="tab">Marquer une sortie</a></li>
       <div class="vide"></div>
       <li><a href="recherche.php?search=eeee" class="tab">Rechercher un usager</a></li>
       <div class="vide"></div>
       
 </ul>
</header>    
</body>
<div class="tabs">
    <div class="tab1 tab curseur">Tout</div>
    <div class="tab2 tab curseur">Visiteurs</div>
    <div class="tab3 tab curseur">Employés</div>
    <div class="tab4 tab curseur">Documents</div>

</div>

<?php


?>
<div class="tout">
    <?php
    

    echo "<center><table border='1'>
    <tr class='th1'><td colspan=\"3\" align=\"center\">USAGER</td><td>PERSONNALITE</td><td colspan=\"9\" align=\"center\">MOUVEMENT</td></tr>
<tr class='th2'><td align=\"center\">Nom et Prenom</td><td align=\"center\">Piece d'identite</td><td align=\"center\">Nombre de pieces</td><td>Personnalite</td><td>Orientation</td><td>Motif</td><td>Observation</td><td>Objet</td><td>Destination</td><td>Date et heure d'entree</td><td>Date et heure de sortie</td><td>Date de decharge</td></tr>
    ";

    while ($a = $tout->fetch()) {
        echo "<tr><td>".$a['nom_et_prenom']."</td> <td>".$a['piece']." </td><td>".$a['nombre_pieces']." </td><td> ".$a['statut']." </td><td> ".$a['mouvement']." </td><td> ".$a['motif']." </td><td> ".$a['observation']."</td><td> ".$a['objet']." </td><td> ".$a['destination']." </td><td> ".$a['date_et_heure_entree']." </td><td> ".$a['date_et_heure_sortie']." </td><td> ".$a['date_decharge']." </td></tr>";
    }
    echo "</table></center>";
    
    
    ?>
</div>
<div class="visiteur">
<?php
    

    echo "<center><table border='1'>
    <tr class='th1'><td colspan=\"3\" align=\"center\">USAGER</td><td>PERSONNALITE</td><td colspan=\"9\" align=\"center\">MOUVEMENT</td></tr>
<tr class='th2'><td align=\"center\">Nom et Prenom</td><td align=\"center\">Piece d'identite</td><td>Personnalite</td><td>Orientation</td><td>Motif</td><td>Observation</td><td>Date et heure d'entree</td><td>Date et heure de sortie</td></tr>
    ";

    while ($a = $visiteurs->fetch()) {
        echo "<tr><td>".$a['nom_et_prenom']."</td> <td>".$a['piece']." </td><td> ".$a['statut']." </td><td> ".$a['mouvement']." </td><td> ".$a['motif']." </td><td> ".$a['observation']."</td><td> ".$a['date_et_heure_entree']." </td><td> ".$a['date_et_heure_sortie']." </td></tr>";
    }
    echo "</table></center>";
    
    
    ?>
</div>
<div class="employee">
<?php
    

    echo "<center><table border='1'>
    <tr class='th1'><td colspan=\"3\" align=\"center\">USAGER</td><td>PERSONNALITE</td><td colspan=\"9\" align=\"center\">MOUVEMENT</td></tr>
<tr class='th2'><td align=\"center\">Nom et prenom</td><td align=\"center\">Piece d'identite</td><td>Personnalite</td><td>Orientation</td><td>Motif</td><td>Observation</td><td>Date et heure d'entree</td><td>Date et heure de sortie</td></tr>
    ";

    while ($a = $employee->fetch()) {
        echo "<tr><td>".$a['nom_et_prenom']."</td> <td>".$a['piece']." </td><td> ".$a['statut']." </td><td> ".$a['mouvement']." </td><td> ".$a['motif']." </td><td> ".$a['observation']."</td><td> ".$a['date_et_heure_entree']." </td><td> ".$a['date_et_heure_sortie']." </td></tr>";
    }
    echo "</table></center>";
    
    
    ?>
</div>
<div class="document">
<?php
    

    echo "<center><table border='1'>
    <tr class='th1'><td colspan=\"3\" align=\"center\">USAGER</td><td>PERSONNALITE</td><td colspan=\"9\" align=\"center\">MOUVEMENT</td></tr>
<tr class='th2'><td align=\"center\">Piece d'identite</td><td align=\"center\">Nombre de pieces</td><td>Outils</td><td>orientation</td><td>Observation</td><td>Objet</td><td>Destination</td><td>Date et heure d'entree</td><td>Date et heure de sortie</td><td>Date de decharge</td></tr>
    ";

    while ($a = $document->fetch()) {
        echo "<tr><td>".$a['piece']." </td><td>".$a['nombre_pieces']." </td><td> ".$a['statut']." </td><td> ".$a['mouvement']." </td><td> ".$a['observation']."</td><td> ".$a['objet']." </td><td> ".$a['destination']." </td><td> ".$a['date_et_heure_entree']." </td><td> ".$a['date_et_heure_sortie']." </td><td> ".$a['date_decharge']." </td></tr>";
    }
    echo "</table></center>";
    
    
    ?>
</div>
<div class="content5">
    
</div>
</html>