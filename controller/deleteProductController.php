<?php
/*Ce fichier sert à supprimer une carte-produit en fonction de son ID*/


require_once ('connect.php');
$req = $db->prepare('DELETE  from tooling WHERE id=?');
$req->execute(array($_GET['id']));
/*redirection*/
header('Location:../index.php');
