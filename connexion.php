<?php

// recherche du serveur prod ou local
$IP=$_SERVER['SERVER_ADDR'];
echo('<p>IP : '.$IP.'</p>');
if($IP=='127.0.0.1'){
		//echo('<p>IP n2 : '.$IP.'</p>');
		$db=new PDO('mysql:host=localhost;dbname=jojolabidouille','root','') or die ("erreur de connexio nau serveur BDD");
				
	}elseif($IP=='31.170.165.226'){
		$db=new PDO('mysql:host=localhost;dbname=u571462442_jojol', 'u571462442_root', 'Alpha270');
	}else{
		echo('IP :'.$IP);
}
// affichage des message d'erreur sql
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

?>
