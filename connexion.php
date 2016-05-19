<?php

// recherche du serveur prod ou local
$IP=$_SERVER['SERVER_ADDR'];

if($IP=='127.0.0.1'){
		$db=new PDO('mysql:host=localhost;dbname=jojoLaBidouille', 'root', 'Alpha270');
	}elseif($IP=='31.220.16.42'){
		$db=new PDO('mysql:host=localhost;dbname=u154204657_jojol', 'u154204657_root', 'Alpha270');
	}else{
		echo('IP :'.$IP);
	}

?>
