<?php

/*Ce fichier sert à se connecter à la base de données. 
Les identifiants $host $dbname $user $password remplacés par mes identifiants ADMIN de Clever Cloud*/

$host ="b0mq9jvhpwhmtm0nksoo-mysql.services.clever-cloud.com";
$dbname="b0mq9jvhpwhmtm0nksoo";
$user="umlooxktykooxksb";
$password = "IVUWkMauvbTZcANTse5v";

try{
	$db= new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;', $user,
		$password);
} catch (Exception $e){
	die('Error :'.$e->getMessage());
}
