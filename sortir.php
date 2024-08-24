<?php

$server = 'localhost';
$dbname = 'ges_beac';
$user = 'root';
$pass = '';

$bdd = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);

@$search = htmlspecialchars($_GET['search']);
if (isset($search) and !empty($search)) {
    $select = $bdd->query("SELECT * FROM usager,statut,mouvement WHERE nom_et_prenom ='$search' limit 1");
    $select1 = $bdd->query("SELECT * FROM usager WHERE nom_et_prenom ='$search'");
}

$liste = array("","","");
while ($a = $select->fetch()) {
        
        $nom = $a['nom_et_prenom']; 
        $piece_ident = $a['piece'];
        $motif = $a['motif'];
        // $mouvement = $_POST['mouvement'];
        $objet = $a['objet'];
        $destination = $a['destination'];
        $nbr_piece = $a['nombre_pieces'];
        $observation = $a['observation'];
}
while ($a = $select1->fetch()) {
    $id = $a['id_usager'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="login.js" defer></script>
    <style>
        .onglet4{
            border: 0px solid black;
            border-radius: 2pc;
            padding: 5px;
            font-size: 18px;
            margin-top: 25%;
            margin-left: 37%;
            position: absolute;
        }
        form{
            display: flex;
            margin-left: 100px;
            
        }
    </style>
    <title>Document</title>
    <!-- <link rel="stylesheet" href="login.css"> -->

</head>
<body>
    <img src="beac_.jpg" alt="image de font">
    <div class="onglets">
        <div class="onglet1 onglet tab1">visiteur</div>
        <div class="onglet2 onglet tab2">employe</div>
        <div class="onglet3 onglet tab3">Document</div>
        <div class="onglet4"><form method="get"><input type="search" name="search" id="search" placeholder="rechercher quelqu'un"> <input type="submit" value="rechercher"></form></div>
    </div>
    
<div class="form content1">
    <table border="0" align="center">
    
    
        <form method="post" action="sortir1.php" name="form1">
            <tr>
                <td>identifiant en base</td>
                <td><input type="number" name="n" id="n" value="<?=$id?>"></td>
            </tr>
            <tr class="nom">
                <td> Nom et Prenom</td>
                <td><input type="text" name="nom" required value="<?=$nom;?>"></td>
            </tr>
            <tr class="piece_ident">
             <td> Piece d'identite</td>
             <td><input type="text" name="identit" required value="<?=$piece_ident;?>"></td>
         </tr>
         <tr class="motif">
             <td> Motif</td>
             <td><textarea name="motif" cols="30" rows="5" class="motif" required ><?=$motif;?></textarea></td>
         </tr>
         <!-- <tr>
             <td>Mouvement </td>
             <td>
                 <select name="mouvement" class="mouvement">
                     <option value="Entree">Entree</option>
                     <option value="Sortie">Sortie</option>
                 </select>
            </td>
         </tr> -->
         <!-- <tr class="objet">
             <td> Object</td>
             <td><input type="text" name="objet"></td>
         </tr> -->
         <!-- <tr class="destin">
             <td> Destination</td>
             <td><input type="text" name="destination"></td>
         </tr> -->
         <!-- <tr class="nbr_piece">
             <td> Nombre de piece</td>
             <td><input type="number" name="piece"></td>
         </tr> -->
         <tr>
             <td> Observation</td>
             <td><textarea name="observation" cols="30" rows="5" required ><?=$observation;?></textarea></td>
         </tr>
         <tr>
             <td colspan="2" align="center">
             <input type="submit" name="valide" value="sortir"></td>
             
         </tr>
     
        </form>
    </table> 
    
</div>
    <div class="form content2">
        <table border="0" align="center">
        <form method="post" action="sortie1.php" name="form1">
            <tr class="nom">
                <td> Nom et Prenom</td>
                <td><input type="text" name="nom" require value="<?=$nom;?>"></td>
            </tr>
            <!-- <tr class="piece_ident">
             <td> Piece d'identite</td>
             <td><input type="text" name="identit"></td>
         </tr> -->
         <tr class="motif">
             <td> Motif</td>
             <td><textarea name="motif" cols="30" rows="5" class="motif" required ><?=$motif;?></textarea></td>
         </tr>
         <!-- <tr>
             <td>Mouvement </td>
             <td>
                 <select name="mouvement" class="mouvement">
                     <option value="Entree">Entree</option>
                     <option value="Sortie">Sortie</option>
                 </select>
            </td>
         </tr> -->
         <!-- <tr class="objet">
             <td> Object</td>
             <td><input type="text" name="objet"></td>
         </tr> -->
         <!-- <tr class="destin">
             <td> Destination</td>
             <td><input type="text" name="destination"></td>
         </tr> -->
         <!-- <tr class="nbr_piece">
             <td> Nombre de piece</td>
             <td><input type="number" name="piece"></td>
         </tr> -->
         <tr>
             <td> Observation</td>
             <td><textarea name="observation" cols="30" rows="5" required><?=$observation;?></textarea></td>
         </tr>
         <tr>
             <td colspan="2" align="center">
             <input type="submit" name="valide" value="sortir"></td>
             
         </tr>
     
        </form> 
    </table>
    </div>
    <div class="form content3">
        <table border="0" align="center">
            <form method="post" action="sortir1.php" name="form1">
                <!-- <tr class="nom">
                    <td> Nom et Prenom</td>
                    <td><input type="text" name="nom"></td>
                </tr> -->
                <tr class="piece_ident">
                 <td> Piece d'identite</td>
                 <td><input type="text" name="identit" required value="<?=$piece_ident;?>"></td>
             </tr>
             <!-- <tr class="motif">
                 <td> Motif</td>
                 <td><textarea name="motif" cols="30" rows="5" class="motif">RAS</textarea></td>
             </tr> -->
             <!-- <tr>
                 <td>Mouvement </td>
                 <td>
                     <select name="mouvement" class="mouvement">
                         <option value="Entree">Entree</option>
                         <option value="Sortie">Sortie</option>
                     </select>
                </td>
             </tr> -->
             <tr class="objet">
                 <td> Object</td>
                 <td><input type="text" name="objet" required value="<?=$objet;?>"></td>
             </tr>
             <tr class="destin">
                 <td> Destination</td>
                 <td><input type="text" name="destination" required value="<?=$destination;?>"></td>
             </tr>
             <tr class="nbr_piece">
                 <td> Nombre de piece</td>
                 <td><input type="number" name="piece" required value="<?=$nbr_piece;?>"></td>
             </tr>
             <tr>
                 <td> Observation</td>
                 <td><textarea name="observation" cols="30" rows="5" required><?=$observation;?></textarea></td>
             </tr>
             <tr>
                 <td colspan="2" align="center">
                 <input type="submit" name="valide" value="Enregister" required></td>
                 
             </tr>
         
            </form> 
        </table>
    </div>


       
</body>

</html>
