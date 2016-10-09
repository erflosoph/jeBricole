<?php
// vérifie que l'adresse mail n'existe pas en base
include_once 'connexion.php';
$qryEmail=$db->prepare('SELECT ID 
						FROM 	utilisateurs 
						WHERE 	LOWER(email)=?');
$qryEmail->execute(array($_POST['email']));
$dataEmail=$qryEmail->fetch();
if(is_numeric($dataEmail['ID'])){
	echo('Il existe déjà un utilisateur avec cette adresse.');
}
?>