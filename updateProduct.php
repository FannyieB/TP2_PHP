<?php
//Ici créer le formulaire de mise à jour des produits

require_once('Views/header.php');
require_once ('controller/connect.php');
$req = $db->prepare('SELECT * FROM tooling WHERE id = ?');
$req->execute(array($_GET["id"]));
$data= $req->fetchAll();
//var_dump($data);

?>
<form method="post" action="controller/addProductController.php">

    <div class="mb-3">
        <label for="productList" class="form-label">Sélectionnez un produit</label>
        <select>
            <option value="1">HIKOKI Perceuse visseuse percussion 18V 5Ah - DV18DBSL WJZ</option>
            <option value="2">MILWAUKEE Pack 6 outils 18V 2x5Ah - M18 FPP6K2-502B</option>
            <option value="3">HIKOKI Perceuse visseuse percu 18V 5Ah DV18DBSL +100 Acc.</option>
            <option value="4">BOSCH Perfo GBH18V-21 + Visseuse GSR18V-28 plus 2x4Ah</option>            
        </select>
    </div> 
   
    <div class="mb-3">
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description" value=<?=$data[0]["description"]?>></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">tarif TTC</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price_HT" value=<?=$data[0]["price_HT"] ?>>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">tarif HT</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price_TTC" value=<?=$data[0]["price_TTC"] ?>>
    </div>
    <button type="submit" class="btn btn-primary btn-dark mb-2 w-40">mettre à jour l'article</button>

    <!-- Ajout du bouton de suppression -->
    <a href="../controller/deleteProductController.php?id=<?= $data[0]["id"] ?>" class="btn btn-danger">Supprimer l'article</a>
</form>


