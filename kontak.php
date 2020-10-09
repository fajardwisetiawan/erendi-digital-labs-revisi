<?php include 'assets/component/header.php' ?>

        <!-- breadcumb-area start -->
        <div class="breadcumb-area bg-img-5 black-opacity">
        <div id="particles-js"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap text-center">
                            <h2>Kontak Kami</h2>
                            <ul>
                                <li><a href="index.html">Beranda</a></li>
                                <li>/</li>
                                <li class="active">Kontak</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- contact-area start -->
        <div class="contact-area bg-1 ptb-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="cf-msg"></div>
                            <form action="mail.php" method="post" id="cf">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" placeholder="Nama" id="fname" name="fname">
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" placeholder="Email" id="email" name="email">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" placeholder="Subjek" id="subject" name="subject">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="contact-textarea" placeholder="Pesan" id="msg" name="msg"></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button id="submit" class="cont-submit btn-contact btn-style" name="submit">KIRIM PESAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-wrap">
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    Telepon
                                    <p>
                                        <span>(+62) 21-22819566</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    Email
                                    <p>
                                        <span>general: admin@erendi.digital</span>
                                        <span>support: support@erendi.digital</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-location-arrow"></i>
                                    Alamat
                                    <p>
                                        <span>Tamini Square LT. 2 Unit:SS-1/30-31 Jl.Taman Mini Raya,Garuda,Pinang Ranti,Makassar Jakarta Timur 13540</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.789510270983!2d106.87921781543662!3d-6.291372595446538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f29bb862f867%3A0x284d719ef134130b!2sTamini%20Square!5e0!3m2!1sid!2sid!4v1592389341181!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- contact-area end -->

        <?php include 'assets/component/footer.php' ?>

        <!-- all js here -->
        
        <!-- particle.js -->
        <link rel="stylesheet" media="screen" href="demo/css/style.css">
        <script src="particles.js"></script>
        <script src="demo/js/app.js"></script>
        <script src="demo/js/lib/stats.js"></script>

		<!-- jquery latest version -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="assets/js/owl.carousel.min.js"></script>
		<!-- counterup.main.js -->
        <script src="assets/js/counterup.main.js"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- jquery.waypoints.min.js -->
        <script src="assets/js/jquery.waypoints.min.js"></script>
		<!-- jquery.magnific-popup.min.js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.712764, -74.005667),
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#222222"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#222222"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":17}]}]
                };

                var map = new google.maps.Map(document.getElementById('googleMap'),
                    mapOptions);


                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation: google.maps.Animation.BOUNCE,
                    map: map
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		<!-- main js -->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
