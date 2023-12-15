<?php
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
