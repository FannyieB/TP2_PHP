<?php
require_once ('Views/header.php');
// Sur cette page, vous devez créer le formulaire pour la création des produits



?>
<form method="post" action="controller/addProductController.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom du produit</label>
        <!-- Ajout liste déroulante d'articles -->
            <select class="form-control" id="product" name="product">
                <option value="produit1">HIKOKI Perceuse visseuse à percussion 550 W</option>
                <option value="produit2">DEWALT Perceuse visseuse 18V 5Ah</option>
                <option value="produit3">HIKOKI Perceuse Visseuse 18V 5.0 Ah 55 Nm</option>
                <option value="produit4">BOSCH Perceuse visseuse 12 V-GSR12V-15 housse</option>
                <option value="produit5">BOSCH Perceuse visseuse 18V 2x4Ah GSR18V-55</option>
                <option value="produit6">HIKOKI Perceuse à percussion 600W-DV16SSWAZ</option>
                <option value="produit7">DEWALT Perceuse visseuse 18V 1 x 5Ah</option>
                <option value="produit8">METABO Perceuse-visseuse 12V 2Ah PowerMaxx</option> 
                <option value="produit9">METABO Perceuse visseuse 18V 4.0Ah BS18L</option>       
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
        <label for="exampleInputEmail1" class="form-label">choisir l'image</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image_path">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   
</form>


