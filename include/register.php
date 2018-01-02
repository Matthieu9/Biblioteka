<?php
include('bdd.php');
$req = $bdd->prepare('INSERT INTO users(pseudo, pass, is_admin) VALUES(:pseudo, :pass, :is_admin)');
$req->execute(array(
	'pseudo' => $_POST['username'],
	'pass' => $_POST['pass'],
	'is_admin' => 0
	));
?>