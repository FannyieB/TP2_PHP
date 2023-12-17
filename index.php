<?php
require_once('Views/header.php');
$req= $db->prepare('SELECT * FROM tooling ');
$req->execute(array());
$data = $req->fetchAll();
?>
<div id="description">
	<h1>Perceuse visseuse</h1>
	<p>
		Vous envisagez de percer, visser ou encore forer des pierres dures ou du béton ? Découvrez ci-dessous notre sélection de perceuses visseuses adaptées à tous vos besoins.
	</p>
	<p>
		Polyvalent, la <b>perceuse visseuse</b> est conçue pour percer des trous et visser rapidement et efficacement lorsque vous monter des étagères, assembler des meubles ou réaliser des projets de rénovation.<br/>
		La <b>perceuse visseuse d’angle</b> est conçue pour une utilisation dans les endroits difficiles d’accès, offrant précision et confort dans des environnements étroits.
	</p>
	<p>
		Pour vos travaux de perçage dans les charpentes en bois et en métal, la <b>perceuse de charpente</b> est l'outil idéal pour percer des diamètres plus importants.<br/>
		La <b>perceuse à percussion</b> permet de percer dans divers matériaux tels que le bois, le métal et même la brique, idéale tous vos travaux de perçage exigeants.
	</p>
	<p class="more"><a>Voir plus</a> ></p>
</div>

<h2>NOS AUTRES CATÉGORIES "PERCEUSE"</h2>

<div class="d-flex flex-wrap ">
	<?php foreach ($data as $k=>$d):
	?>
	<div class="col-md-4 mb-4">
	<div class="card ms-2" style="width: 18rem;">
		<img src="<?= $d["image_path"] ?>" class="card-img-top" alt="<?= $d["name"] ?>">			
		<div class="card-body">
			<h5 class="card-title"><?= $d["name"]?></h5>
			<p class="card-text"><?= $d["description"]?></p>
			<p>Prix : <?=$d['price_HT'] ?> € HT <?=$d['price_TTC']?> €TTC</p>
			<a href="#" class="btn btn-primary">Ajouter l'article au panier</a>
			<a href="updateProduct.php?id=<?= $d['id'] ?>" class="btn btn-primary">Mettre à jour l'article</a>
			<a href="controller/deleteProductController.php?id=<?= $d['id'] ?>" class="btn btn-danger">Supprimer l'article</a>
		</div>
	</div>
</div>



<?php endforeach; ?>
