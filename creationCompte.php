<?php
// html du header
include_once 'templateHaut.php';
// bandeau de gauche
include_once 'templateGauche.php';
// connexion BDD
require 'connexion.php';
?>



<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
  $(function() {
    $('#email').change(function() {
    	var emailSoumis = $('#email').val();
    	$.post('traiteFormulaire.php', { email: emailSoumis},function(data) {
	    	if(data!=''){ // l'adresse mail existe déjà
	        	//alert(data);
	        	var fail_email=1;
				document.getElementById("avertissement").innerHTML='Il existe déjà un utilisateur avec cette adresse.<br />Veuillez en choisir une autre.';
				document.getElementById("email").focus();
				document.getElementById("email").value="";
	    	}else{ // elle n'existe pas
				var fail_email=0;
				document.getElementById("avertissement").innerHTML='';
			}
    	});
    });
  });
</script>

</head>


<body class="contact-page">
<div class="content-main contact-content">
	<div class="contact-content-upper">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="gallery_title">
					<h3>jeBricole</h3>
					<h4>Création de compte</h4>
				</div>
			</div>
		</div>
 
		<div class="row">
			<div class="col-sm-12 col-md-6 contact_left">

 <!-- vérification de l'unicité de l'adresse mail en utilisant un appel ajax -->

<!-- formulaire d'inscription -->

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
	
	 

	<?php
	echo('<div class="form-group">');
 	echo('<input id="submit" name="submit" type="submit" value="Send" class="btn view_more btn-submit">');
	echo('</div>');
	?>
</form>

</div> <!-- .contact-left -->

<div class="col-sm-12 col-md-6 contact_right">

 
	<div class="col-md-12 contact_text">
		Votre inscription sera prise en compte par le webmaster pour qu'il la valide.
	</div>
	
	<div id="avertissement" class="col-md-12 contact_text_error" name="avertissement">
	</div>
	


</div> <!-- .contact_right -->

</div> <!-- .row -->
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div id="google-map"></div>
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


<!-- <script src="jquery.js"></script> -->

	</body>
	</html>
