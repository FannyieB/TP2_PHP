<?php
//Ici créer le formulaire de mise à jour des produits

require_once('Views/header.php');
require_once ('controller/connect.php');
$req = $db->prepare('SELECT * FROM produits WHERE id = ?');
$req->execute(array($_GET["id"]));
$data= $req->fetchAll();
//var_dump($data);
?>
<form method="get" action="controller/updateProductController.php">
    <input type="hidden" name="id" value=<?= $data[0]["id"] ?> />
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom du produit</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value=<?=$data[0]["name"]?>>

    </div>
    <div class="mb-3">
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                      style="height: 100px" name="description" value=<?=$data[0]["description"]?>></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">tarif TTC</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tarif" value=<?=$data[0]["tarif"] ?>>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">tarif HT</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tarifHT" value=<?=$data[0]["tarifHT"] ?>>
    </div>
    <button type="submit" class="btn btn-primary">mettre à jour</button>
</form>
