<?php
// dans cette page créer les actions pour la création de produit

/* Ce fichier sert à insérer de nouvelles valeurs dans la base de données.*/


require_once ('connect.php');

// Récupérer le produit sélectionné
$selectedProduct = $_POST['tooling'];

// Récupérer la description et l'image en fonction du produit sélectionné dans la liste déroulante du formulaire
$productInfo = getProductInfo($selectedProduct);

// Ajouter le produit à la base de données
$req = $db->prepare('INSERT INTO tooling (`name`, `description`, `price_HT`, `price_TTC`, `image_path`) VALUES (:name, :description, :price_HT, :price_TTC, :image_path)');
$req->execute(array(
    "name" => htmlspecialchars($productInfo['name']),
    "description" => htmlspecialchars($productInfo['description']),
    "price_HT" => htmlspecialchars($productInfo['price_HT']),
    "price_TTC" => htmlspecialchars($productInfo['price_TTC']),
    "image_path" => htmlspecialchars($productInfo['image_path']),
));

header('Location:../index.php');

//Récupération de la description et de l'image de l'article
function getProductInfo($productName) {
    global $db;
   
    $stmt = $db->prepare('SELECT description, price_HT, price_TTC, image_path FROM tooling WHERE name = ?');
    $stmt->execute([$productName]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Tableau associatif avec les informations du produit
    return [
        'description' => $result['description'],
        'price_HT' => $result['price_HT'],
        'price_TTC' => $result['price_TTC'],
        'image_path' => $result['image_path'],
    ];
}

/*
$req = $db->prepare('INSERT INTO tooling (`name`, `description`, `price_HT`, `price_TTC`, `image_path`) VALUES (:name, :description, :price_HT, :price_TTC, :image_path)');
$req->execute(array(
    "name" => htmlspecialchars($_POST['name']),
    "description" => htmlspecialchars($_POST['description']),
    "price_HT" => htmlspecialchars(intval($_POST['price_HT'])),
    "price_TTC" => htmlspecialchars(intval($_POST['price_TTC'])),
    "image_path" => htmlspecialchars($_POST['image_path']),
));
header('Location:../index.php');
*/

