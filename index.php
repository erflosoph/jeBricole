<?php
// html du header
include_once 'templateHaut.php';
// bandeau de gauche
include_once 'templateGauche.php';
// connexion BDD
include_once 'connexion.php';

$sql='SELECT * from utilisateurs';
$qry= $db->prepare($sql);

$qry->execute();
$data=$qry->fetch();


?>


<body> 
<script type="text/javascript" charset="utf8" src="js/jquery.datatables.js"></script>


            
			<div class="content-main">
                        <div class="row margin-b-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="banner-main-home">                                
                                    <div class="banner-main-home-text">
                                        <div class="heading">
                                            <h1>Je Bricole</h1>
                                            <p class="text-uppercase">Le site d'un bricoleur</p>
                                        </div>
                                        <div class="desc">
                                         
                                            <p>Ce site va vous parler des réalisations d'un bricoleur touche à tout</p>
                                            <br /> Vous devez être administré pour accèder à l'ensemble des fonctionnalités du site.
                                            La demande ce fait à l'aide du bouton 'je veux un compte'. Une fois administré vous pourrez vous 
                                            connecter dans la zone ABOUT
                                           <br />
                                            <?php 
                                            if(isset($data['ID'])){
                                            	echo('Connecté');
                                            }
                                            //echo(' data -> '.$data['ID']. $data['nom'].$data['prenom'].$data['email'].$data['groupe'].$data['password']);
                                            
                                            ?>
                                            <br />
                                            <a href="creationCompte.php" target="_self"> <input type="button" class="" value="Je veux un compte"</button></a>                                        </div>
                                    </div>
                                    <img src="images/home-img-1.png" alt="Image" class="img-responsive">
                                </div>                        
                            </div>    
                        </div>
                        <div class="row margin-b-30">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="box london">
                                    <div class="box-icon">
                                        <img src="images/home-img-2.jpg" alt="Image" class="img-responsive">
                                    </div>
                                    <div class="info float-container">
                                        <div class="col-sm-12 london-title">
                                            <h3 class="text-uppercase">test tableau HTML</h3>
                                            <h4 class="text-uppercase">on va essayer Jquery pour l'affichage d'un tableau</h4>
                                        </div>
                                        <p>
											<table id="monTableau">
												<thead>
													<tr>
														<th>Nom</th>
														<th>Prénom</th>
														<th>Age</th>
														<th>Sexe</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<td>Maman</td>
														<td>Ours</td>
														<td>10 ans</td>
														<td>F</td>
													</tr>
													<tr>
														<td>Papa</td>
														<td>Ours</td>
														<td>11 ans</td>
														<td>M</td>
													</tr>
													<tr>
														<td>Fils</td>
														<td>Ours</td>
														<td>2 ans</td>
														<td>M</td>
													</tr>
													<tr>
														<td>Fille</td>
														<td>Ours</td>
														<td>3 ans</td>
														<td>F</td>
													</tr>
												</tbody>
											
											</table>
										</p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="box paris">
                                    <div class="box-icon">
                                        <img src="images/home-img-3.jpg" alt="Image" class="img-responsive">
                                    </div>
                                    <div class="info float-container">
                                        <div class="col-sm-12 london-title paris-title">
                                            <h3 class="text-uppercase">Proin gravida nibhvel</h3>
                                            <h4 class="text-uppercase">mauris vitae erat</h4>
                                        </div>
                                        <p>Sean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p><hr />
                                        <div class="col-sm-12 location-main"> 
                                            <div class="pull-left location location2">
                                                <i class="fa fa-map-marker fa-2x"></i><span>PARIS</span>
                                            </div>
                                            <div class="pull-right user-icons">
                                                <a href="#"><i class="fa fa-star fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-user fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box bottom-main">
                                    <div class="info float-container">
                                        <div class="col-sm-12 bottom-title">
                                            <h3 class="text-uppercase">Proin gravida nibhvel</h3>
                                            <h4 class="text-uppercase">mauris vitae erat</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                <div class="bottom-img">
                                                    <img src="images/home-img-4.jpg" alt="Image">
                                                    <p class="first">Sollicitudin nibh</p>    
                                                </div>                                      
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                <div class="bottom-img">
                                                    <img src="images/home-img-5.jpg" alt="Image">
                                                    <p class="second">duis sedio amiet</p>    
                                                </div>                                      
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                <div class="bottom-img">
                                                    <img src="images/home-img-6.jpg" alt="Image">
                                                    <p class="third">Nec sagittis seim</p>    
                                                </div>                                      
                                            </div>
                                        </div>
                                        <p class="bottom-desc">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p><hr />
                                        <div class="col-sm-12 location-main"> 
                                            <div class="pull-right bottom-user">
                                                <a href="#"><i class="fa fa-caret-right"></i><span>READ MORE</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- .content-main -->
                </div> <!-- .main-page -->
            </div> <!-- .row -->           
            <footer class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                    <p class="copyright">Copyright © 2016 Company Name 
                    
                    | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">template mo</a></p>
                </div>    
            </footer>  <!-- .row -->      
        </div> <!-- .container -->
    </div> <!-- .main-body -->

    <!-- JavaScript -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script>
		
		$('#monTableau').dataTable( {
		  "scrollY": "100px",
		  "scrollCollapse": true,
		  "paging": false
		} );
	</script>
	
</body>
</html>
