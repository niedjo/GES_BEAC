<?php


$server = 'localhost';
$dbname = 'ges_beac';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




$couleur = $_POST['couleur'];
$police = $_POST['police'];

if (isset($couleur) and isset($police)) {
    $update = ("UPDATE parametre SET police = '$police', couleur = '$couleur' WHERE id='0'");
    
    $bdd->exec($update);
}
header("location:connect.php");






?>