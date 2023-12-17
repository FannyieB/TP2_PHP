<?php
// dans cette page on gere l'action avec la base de donnée

/*Ce fichier sert à mettre à jour une carte produit 
selon les données renseignée dans le formulaire*/

require_once('connect.php');

$req = $db->prepare('UPDATE tooling SET name =?, description=?, price_HT=? , price_TTC=? WHERE id=?');
$req->execute(array(
    htmlspecialchars($_POST['name']),
    htmlspecialchars($_POST['description']),
    htmlspecialchars(intval($_POST['price_HT'])),
    htmlspecialchars(intval($_POST['price_TTC'])),
    htmlspecialchars($_POST["id"]),
));

header('Location:../index.php');