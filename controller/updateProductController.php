<?php
// dans cette page on gere l'action avec la base de donnée

/*Ce fichier sert à mettre à jour une carte produit 
selon les données renseignée dans le formulaire*/

require_once ('connect.php');

var_dump($_POST);

$req = $db->prepare('UPDATE produits SET name =?, description=?, tarif=? , tarifHT=? WHERE id=?');
$req ->execute(array(
    htmlspecialchars($_POST['name']),
    htmlspecialchars($_POST['description']),
    htmlspecialchars(intval($_POST['tarif'])),
    htmlspecialchars(intval($_POST['tarifHT'])),
    htmlspecialchars($_POST["id"])
));
header('Location:../index.php');