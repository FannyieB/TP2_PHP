<?php
require_once ('Views/header.php');
// Sur cette page, vous devez créer le formulaire pour la création des produits



?>
<form method="post" action="controller/addProductController.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom du produit</label>
        <!-- Ajout liste déroulante d'articles -->
            <select class="form-control" id="product" name="product">
                <option value="produit1">Produit 1</option>
                <option value="produit2">Produit 2</option>
                <option value="produit3">Produit 3</option>
                <option value="produit4">Produit 4</option>
                <option value="produit5">Produit 5</option>
                <option value="produit6">Produit 6</option>
                <option value="produit7">Produit 7</option>           
             </select>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">

    </div>
    <div class="mb-3">
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">prix HT</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price_HT">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">prix TTC</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price_TTC">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">choisir image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image_path">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   
</form>


