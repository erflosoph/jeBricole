<?php
// html du header
include_once 'templateHaut.php';
// bandeau de gauche
include_once 'templateGauche.php';
// connexion BDD
include_once 'connexion.php';
?>



<body class="contact-page">
<div class="content-main contact-content">
<div class="contact-content-upper">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="gallery_title">
<h3>jeBricole</h3>
<h4>Formulaire de contact</h4>
</div>
</div>
</div>
 
<div class="row">
<div class="col-sm-12 col-md-6 contact_left">
<form class="form-horizontal" method="post" action="#">

<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="NAME..." value="">
</div>

<div class="form-group">
<input type="email" class="form-control" id="email" name="email" placeholder="EMAIL..." value="">
</div>

<div class="form-group">
<input type="text" class="form-control" id="subject" name="subject" placeholder="SUBJECT..." value="">
</div>

<div class="form-group">
<textarea class="form-control" rows="4" name="message" placeholder="MESSAGE..."></textarea>
</div>

<div class="form-group">
<input id="submit" name="submit" type="submit" value="Send" class="btn view_more btn-submit">
</div>

</form>
</div> <!-- .contact-left -->

<div class="col-sm-12 col-md-6 contact_right">

<div class="col-md-12 contact_title">
CONTACT
</div>

<div class="col-md-12 contact_sub_title">
contacter le webmaster
</div>
 
<div class="col-md-12 contact_text">
Contacter le webmaster de ce site.
</div>
<!--  
	<div class="col-md-12 contact_info">
	<a href="mailto:info@company.com" class="contact-info-link">
	<i class="fa fa-envelope contact-fa"></i>info@company.com
	</a><br/>
	<a href="+1234567890" class="contact-info-link">
	<i class="fa fa-mobile contact-fa"></i>(+123) 456 7890
	</a><br/>
	<a href="+0987654321" class="contact-info-link">
	<i class="fa fa-phone contact-fa"></i>(+098) 765 4321
	</a><br/>
	</div>
	
	<div class="col-md-12">
	<span><i class="fa fa-rss social-icon rss_icon"></i></span>
	<span><i class="fa fa-twitter social-icon twitter_icon"></i></span>
	<span><i class="fa fa-facebook social-icon facebook_icon"></i></span>
	</div>
-->


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

	</body>
	</html>
