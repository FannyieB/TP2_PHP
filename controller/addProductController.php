<?php
// dans cette page créer les actions pour la création de produit

/* Ce fichier sert à insérer de nouvelles valeurs dans la base de données.*/


require_once ('connect.php');

$req = $db->prepare('INSERT INTO tooling (`name`, `description`, `price_HT`, `price_TTC`, `image_path`) VALUES (:name, :description, :price_HT, :price_TTC, :image_path)');
$req->execute(array(
    "name" => htmlspecialchars($_POST['name']),
    "description" => htmlspecialchars($_POST['description']),
    "price_HT" => htmlspecialchars(intval($_POST['price_HT'])),
    "price_TTC" => htmlspecialchars(intval($_POST['price_TTC'])),
    "image_path" => htmlspecialchars($_POST['image_path']),
));
header('Location:../index.php');