<?php


$server = 'localhost';
$dbname = 'ges_beac';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
// $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$date = gmdate('Y-m-d h:i:s');
$rubrique = $_POST['n'];
$update = $bdd->query("UPDATE mouvement SET date_et_heure_sortie='$date' where rubrique=$rubrique;");
// $bdd->exec($update);


 
// header("location:accueil.php");





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>sortie marquee</p>
    <h1><a href="accueil.php">retour a la page d'accueil</a></h1>
</body>
</html>