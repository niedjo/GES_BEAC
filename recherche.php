<?php

$server = 'localhost';
$dbname = 'ges_beac';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);

$search = $_GET['search'];
if (isset($search) and !empty($search)) {
    $select = $bdd->query("SELECT * FROM usager,statut,mouvement WHERE statut.id_statut=mouvement.rubrique AND statut.id_statut=usager.id_usager AND concat(nom_et_prenom,piece,mouvement,statut.statut,motif,observation) LIKE('%$search%')");
}

// $liste = array("","","");
// while ($a = $select->fetch()) {
//     $liste[0] = $a['nom_et_prenom'];
//     $liste[1] = $a['piece'];
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            font-size: 20px;
        }
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
        a{
            font-size: 19px;
            text-decoration: none;
            margin-left: 20px;
            color: red;
        }
    </style>
</head>
<body>
<form method="get"><center><input type="search" name="search" id="search" placeholder="rechercher une usager">
<input type="submit" value="rechercher"><a href="accueil.php">retour a la page d'accueil</a></center>
<?php
    

    echo "<center><table border='1'>
    <tr class='th1'><td colspan=\"3\" align=\"center\">USAGER</td><td>PERSONNALITE</td><td colspan=\"9\" align=\"center\">MOUVEMENT</td></tr>
<tr class='th2'><td align=\"center\">Nom et Prenom</td><td align=\"center\">Piece d'identite</td><td align=\"center\">Nombre de pieces</td><td>Personnalite</td><td>Orientation</td><td>Motif</td><td>Observation</td><td>Objet</td><td>Destination</td><td>Date et heure d'entree</td><td>Date et heure de sortie</td><td>Date de decharge</td></tr>
    ";

    while ($a = $select->fetch()) {
        echo "<tr><td>".$a['nom_et_prenom']."</td> <td>".$a['piece']." </td><td>".$a['nombre_pieces']." </td><td> ".$a['statut']." </td><td> ".$a['mouvement']." </td><td> ".$a['motif']." </td><td> ".$a['observation']."</td><td> ".$a['objet']." </td><td> ".$a['destination']." </td><td> ".$a['date_et_heure_entree']." </td><td> ".$a['date_et_heure_sortie']." </td><td> ".$a['date_decharge']." </td></tr>";
    }
    echo "</table></center>";
    // while ($a = $select->fetch()) {
    //     echo $a['nom_et_prenom']."<br>";
    // }
    
    
    ?>
</body>
</html>