<?php

$db = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');

if(isset($_POST['nom'], $_POST['message']) && !empty($_POST['nom'] && $_POST['message']))
{

	$nom = htmlspecialchars(trim($_POST['nom']));
	$message = htmlspecialchars(trim($_POST['message']));

	$db->exec("INSERT INTO ajax(id,nom,message) VALUES('','$nom', '$message')");

	echo "<div class='alert alert-success'>Vos données on été envoyées</div>";

}else{

	echo "<div class='alert alert-danger'>Veuillez compléter tous les champs</div>";
}