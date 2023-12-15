<?php
/*Ce fichier sert à supprimer une carte de produit en fonction de son ID*/

ob_start();
require_once ('connect.php');

$req = $db->prepare('DELETE  from tooling WHERE id=?');
$req->execute(array($_GET['id']));
ob_end_flush();
header('Location: ../index.php');
