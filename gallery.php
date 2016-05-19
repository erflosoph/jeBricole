<?php
// html du header
include_once 'templateHaut.php';
// bandeau de gauche
include_once 'templateGauche.php';
// connexion BDD
include_once 'connexion.php';
?>

<body class="gallery-page">
                    <!-- content-main -->
                    <div class="content-main gallery_main">

                        <div class="gallery-main-inner">
                            
                            <div class="col-md-12 gallery_title_main">
                                <div class="gallery_title">
                                    <h3>GALLERY</h3>
                                    <h4>RESPONSIVE DESIGN</h4>
                                </div><br style="clear:both;"/>
                            </div>

                            <div id="content" class="gallery-images-container">
                                <div class="box-gutter"></div>
                                <div class="box-sizer"></div>
                                <div class="box">
                                    <a href="images/gallery-item-1-big.jpg"><img alt="Agra picture" src="images/gallery-item-1.jpg"></a>
                                </div>
                                <div class="box">
                                    <a href="images/gallery-item-4-big.jpg"><img alt="Agra picture" src="images/gallery-item-4.jpg"></a>
                                </div>
                                <div class="box">
                                    <a href="images/gallery-item-6-big.jpg"><img alt="Agra picture" src="images/gallery-item-6.jpg"></a>
                                </div>
                                <div class="box">
                                    <a href="images/gallery-item-2-big.jpg"><img alt="Agra picture" src="images/gallery-item-2.jpg"></a>
                                </div>
                                <div class="box">
                                    <a href="images/gallery-item-5-big.jpg"><img alt="Agra picture" src="images/gallery-item-5.jpg"></a>
                                </div>
                                <div class="box">
                                    <a href="images/gallery-item-7-big.jpg"><img alt="Agra picture" src="images/gallery-item-7.jpg"></a>
                                </div>
                                <div class="box">
                                    <a href="images/gallery-item-8-big.jpg"><img alt="Agra picture" src="images/gallery-item-8.jpg"></a>
                                </div>
                                <div class="box">
                                    <a href="images/gallery-item-3-big.jpg"><img alt="Agra picture" src="images/gallery-item-3.jpg"></a>
                                </div>
                            </div>                

                            <div class="row text-center view_more_main">
                               <a href="#" class="btn view_more">view more</a>
                            </div>

                        </div>

                    </div>
                </div> <!-- .main-page -->
            </div> <!-- .row -->
            <footer class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                    <p class="copyright">Copyright © 2016 Company Name
                    
                    | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">template mo</a></p>
                </div>    
            </footer>  <!-- .row -->   

        </div> <!-- .container -->
    </div>  <!-- .main-body -->


    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/imagesloaded.3.1.8.min.js"></script>
    <script src="js/jquery.masonry.3.2.1.min.js"></script> <!-- http://masonry.desandro.com/ -->
    <script src="js/jquery.magnific-popup.min.js"></script> <!-- http://dimsemenov.com/plugins/magnific-popup/ -->

    <script>
        function init_masonry(){
          var $container = $('#content');

          $container.imagesLoaded( function(){
              $container.masonry({
                itemSelector: '.box',
                isAnimated: true
            });
          });
        }

        $(document).ready(function(){
            
            //Init jQuery Masonry layout
            init_masonry();

            // Magnific Popup
            $('.gallery-images-container').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
            });

            //Select menu onchange
            $("#collapsed-navbar").change(function () {
                window.location = $(this).val();
            });
        
        });
    </script>

</body>
</html>
