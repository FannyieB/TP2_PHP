<?php
require_once('connect.php');

// Récupérer le produit sélectionné
$selectedProduct = $_POST['product'];

// Récupérer la description et l'image en fonction du produit sélectionné dans la liste déroulante du formulaire
$productInfo = getProductInfo($selectedProduct);

if ($productInfo !== false) {
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
} else {
    echo "Erreur: Impossible de récupérer les informations du produit.";
}

// Récupération de la description et de l'image de l'article
function getProductInfo($productName) {
    global $db;

    $stmt = $db->prepare('SELECT name, description, price_HT, price_TTC, image_path FROM tooling WHERE name = ?');
    $stmt->execute([$productName]);

    // Gestion des erreurs SQL
    if ($stmt->errorCode() !== '00000') {
        $errors = $stmt->errorInfo();
        echo "Erreur SQL : " . $errors[2];
        return false;
    }

    // Récupérer le premier résultat
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si un résultat a été trouvé
    if (!$result) {
        return false;
    }

    // Tableau associatif avec les informations du produit
    return $result;
}
?>