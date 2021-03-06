<?php
// html du header
include_once 'templateHaut.php';
// bandeau de gauche
include_once 'templateGauche.php';
// connexion BDD
include_once 'connexion.php';
?>

<body>
                    <div class="content-main">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="banner-main-about margin-b-30">
                                    <div class="banner-main-about-text">
                                        <div class="heading2">
                                            <p>WELCOME TO</p>
                                            <h1>ACCORD</h1>
                                        </div>
                                        <div class="desc2">
                                            <ul>
                                                <li>This is free Bootstrap theme by templatemo.</li>
                                                <li>Proin gravida nibh vel velit.</li>
                                                <li>Aenean sollicitudin lorem quis.</li>
                                                <li>bibendum auctor, nisi elitnsequat ipsum.</li>
                                                <li>nec sagittis sem nibh id elit.</li>
                                            </ul>
                                            <button type="button" class="">SAGITIS SELIT</button>
                                        </div>
                                    </div>
                                    <img src="images/about-img-1.png" alt="Image" class="img-responsive">
                                </div>    
                            </div>                                                        
                        </div> <!-- .banner-main-about -->

                        <!-- Modals -->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="images/about-img-2.jpg" alt="Image" class="img-responsive">
                                    </div> <!-- .modal-body -->
                                </div> <!-- .modal-content -->
                            </div> <!-- .modal-dialog -->
                        </div> <!-- #myModal -->
                        <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="images/about-img-3.jpg" alt="Image" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="images/about-img-4.jpg" alt="Image" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row about-box-main">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                <div class="cards">
                                    
                                    <div class="box about_box_line card">
                                        <div class="box-icon">
                                            <img src="images/about-img-2.jpg" alt="Image" class="img-responsive">
                                            <div class="inner_search">
                                                <div class="search_icon text-center Absolute-Center" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></div>
                                            </div> <!-- .inner_search -->
                                        </div> <!-- .box-icon -->
                                        <div class="info">
                                            <div class="about_box_title">
                                                <h3>Proin gravi nia</h3>
                                                <h4>mauris vitae erat</h4>
                                            </div>
                                        </div> <!-- .info -->
                                        <div class="line"></div>
                                        <p class="about_box_text">who we are!</p>
                                    </div>
                                
                                    <div class="box about_box_line card">
                                        <div class="box-icon">
                                            <img src="images/about-img-3.jpg" alt="Image" class="img-responsive">
                                            <div class="inner_search">
                                                <div class="search_icon text-center Absolute-Center" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search"></i></div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="about_box_title">
                                                <h3>eLIT CONSEQUAT </h3>
                                                <h4>iPSUM VELIT</h4>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <p class="about_box_text">what we do!</p>
                                    </div>

                                    <div class="box about_box_line card">
                                        <div class="box-icon">
                                            <img src="images/about-img-4.jpg" alt="Image" class="img-responsive">
                                            <div class="inner_search">
                                                <div class="search_icon text-center Absolute-Center" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></div>
                                            </div> <!-- .inner_search -->
                                        </div> <!-- .box-icon -->
                                        <div class="info">
                                            <div class="about_box_title">
                                                <h3>UPULATE CURSES</h3>
                                                <h4>DUIS SEDOIDO</h4>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <p class="about_box_text">why choose us!</p>
                                    </div>
                                      
                                </div>
                                
                            </div>
                            
                        </div>

                        <div class="row margin-b-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 biliend">
                                <div class="banner-2-container">
                                    <div class="aenean">
                                        <h4>Aenean sotin </h4>
                                        <h3>biliend</h3>
                                    </div>    
                                </div>                                
                            </div>
                        </div>
                        <!-- <div class="row"> -->
                            <div class="about-last-container">
                                <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> -->
                                   <div class="box bottom-main info-nav-container">
                                        <ul class="info info-ul">
                                            <li><a href="#" class="about_proin current">Proin gravida</a></li>
                                            <li><a href="#" class="about_proin">nibh vel velit</a></li>
                                            <li><a href="#" class="about_proin">auctor aliquet</a></li>
                                            <li><a href="#" class="about_proin">aenean</a></li>
                                            <li><a href="#" class="about_proin">sollicitudin</a></li>
                                            <li><a href="#" class="about_proin">lorem quis bibendum</a></li> 
                                            <li><a href="#" class="about_proin">auctor nisi elit</a></li>
                                            <li><a href="#" class="about_proin">consequat ipsum</a></li>
                                            <li><a href="#" class="about_proin">semnibh id elit</a></li>
                                        </ul>
                                    </div>
                                <!-- </div> -->    
                                <!-- <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"> -->
                                    <div class="box bottom-main info-description-container">
                                        <div class="info">
                                            <div class="proin-title">
                                                <h3>Proin gravida nibhvel</h3>
                                                <h4>mauris vitae erat</h4>
                                            </div>                                       
                                            <img src="images/about-img-5.png" alt="Image" class="img-responsive">
                                            <p class="proin-right-text">This is free Bootstrap theme by templatemo. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem.</p>
                                        </div> <!-- .info -->
                                    </div>
                                <!-- </div> -->
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <footer class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                    <p class="copyright">Copyright © 2016 Company Name
                    
                    | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">template mo</a></p>
                </div>    
            </footer>            
        </div>
    </div>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
