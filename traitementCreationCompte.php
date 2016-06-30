<?php
// html du header
include_once 'templateHaut.php';
// bandeau de gauche
include_once 'templateGauche.php';
// connexion BDD
include_once 'connexion.php';

/*
 * vérification ds infos saisies
 */

$message='';
$fail=0; // on initisalise la valeur à 0 et  on la passe à 1 en cas de pb

// email
$_POST['email']=strtolower($_POST['email']); // foçage de l'adresse mail en minuscules
$_POST['email']=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // filtre les caractères interdits
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === true){ // vérifie le pattern de l'adresse mail
	$message='<br />Ce n\'est pas une adresse email valide.';
	$fail=1;
}

// vérifie que l'adresse mail n'existe pas en base

$qryEmail=$db->prepare('SELECT ID FROM utilisateurs WHERE LOWER(email)= :email');
$qryEmail->execute(array(email=>$_POST['email']));
$dataEmail=$qryEmail->fetch();

if(is_numeric($dataEmail['ID'])){
	$message.='<br />Il existe déjà un utilisateur avec cette adresse.';
	$fail=1;
}

// NOM
$_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
if(preg_match("/[a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿ\-]/", $_POST['name'])!==1){
	$message.='<br />Ce n\'est pas un nom valide.';
	$fail=1;
}

// Prenom
$_POST['firstname'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
if(preg_match("/[a-zA-Záàâäãåçéèêëíìîïñóòôöõúùûüýÿ\-]/", $_POST['name'])!==1){
	$message.='<br />Ce n\'est pas un prénom  valide.';
	$fail=1;
}
// mots de passe
if($_POST['password1']!=$_POST['passwordVerif']){
	$message.='<br />Le mot de passe et sa vérification sont différents';
	$fail=1;
}

/*
 * insertion dans la table des utilisateurs
 * 
 */
if($fail===0){
	$qryInsert=$db->prepare ('	INSERT INTO utilisateurs (	email,
															nom,
															prenom,
															password,
															centreInteret,
															message)
								VALUES 					(	?,
															?,
															?,
															PASSWORD(?),
															?,
															?)');
	
	//INSERT INTO `utilisateurs`(`ID`, `email`, `nom`, `prenom`, `groupe`, `password`, `centreInteret`, `message`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
	
	$qryInsert->execute(array(	$_POST['email'],
								$_POST['name'],
								$_POST['firstname'],
								$_POST['password1'],
								$_POST['interet'],
								$_POST['message']));
}
?>

<body>
 
<div class="row">


 <div class="content-main">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="banner-main-about margin-b-30">
                                    <div class="banner-main-about-text; min-height:500 px;">
                                        <div class="gallery_title">
											<h3>jeBricole</h3>
											<h4>Prise en compte de votre demande d'inscription</h4>
										</div>
                                        <div class="desc2">
<?php 
if ($fail!==0){
	echo('votre inscription est impossible : '.$message .'<br />');
}else{
	echo('<br />Votre inscription va être prise en compte et validée par un humain <br /> comptez 24H00 de délai.');
}


// echo('<br />'.$_POST['name']);
// echo('<br />'.$_POST['firstname']);
// echo('<br />'.$_POST['password1']);
// echo('<br />'.$_POST['passwordVerif']);

?>
											                                        
                                        </div>
                                    </div>
                                    <img src="images/about-img-1.png" alt="Image" class="img-responsive">
                                </div>    
                            </div>                                                        
                        </div> <!-- .banner-main-about -->
</div>



 
<!-- formulaire validation et verif d'inscription 

<form class="form-horizontal" method="post" action="traitementCreationCompte.php">
Les champs marqués d'un * sont obligatoires
<div class="form-group">
		<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom*..." value="" required>
</div>	
<div class="form-group">
	<input type="text" class="form-control" id="name" name="name" placeholder="Nom*..." value="" required>
</div>

<div class="form-group">
	<input type="email" class="form-control" id="email" name="email" placeholder="mon email*..." value="" required>
</div>


<div class="form-group">
	Mot de passe 
	<input type="password" class="form-control" id="password1" name="password1"  value="" required>
</div>
<div class="form-group">
	Répétez le mot de passe
	<input type="password" class="form-control" id="passwordVerif" name="passwordVerif" value="" required>
</div>

<div class="form-group">
	<input type="text" class="form-control" id="interet" name="interet" placeholder="Centre d'interet..." value="">
</div>

<div class="form-group">
	<textarea class="form-control" rows="4" name="message" placeholder="MESSAGE..."></textarea>
</div>
-->


 <!--  </div>.contact-left -->


</div> <!-- .row -->
</div>

<div class="row">

</div>
</div>

</div> <!-- .contact-content -->
</div> <!-- .main-page -->
</div> <!-- .row -->

<footer class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
<p class="copyright">Copyright © 2016 jeBricole

| Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">template mo</a></p>
</div>
</footer>  <!-- .row -->

</div> <!-- .container -->
</div> <!-- .main-body -->

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

	</body>
	</html>
