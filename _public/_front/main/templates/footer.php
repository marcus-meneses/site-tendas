

        <!-- Start of Footer Area -->
        <footer id="footer" class="footer-area footer-bg pt-100" style="background-color:#1a4f9c !important;">
            <div class="footer-top-area pb-50" style="background-color:
#0089d0 !important;">
                <div class="container">
                    <div class="row" style="background-color:
#0089d0 !important;">

  
<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="padding:15px;color:#fff !important;">
<h2 style="color:#fff !important;">Onde estamos</h2>
<p><br>Av.Sonnemberg, Qd. 123,<br> lt. Área 2 – Cidade Jardim <br>
CEP: 74.413-125 <br> Goiânia – GO</p>
<p><br><br>Próximo ao Detran e a Comurg. </p>
</div>

<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="padding:15px;color:#fff !important;">
<h2 style="color:#fff !important;">Atendimento</h2>
<p><br>(62) 3233-0952 </p>
<p><br><br>contato@tendasecia.com.br</p>

 

</div>



                    </div>
                </div>
            </div>
            <div class="footer-bottom-area" style="background-color:#333 !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="copy-right-text">
                                <p>2017 <a href="http://voastudio.tech" target="_blank">Voa Studio</a></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <ul class="social-icon" style="padding-top:0px; margin-top:0px;">
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i>
                                </a></li>
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i>
                                </a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i>
                                </a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End of Footer Area -->
        <!--start back to top -->
        <div class="none" id="back-top"><i class="zmdi zmdi-chevron-up"></i></div>
        <!-- End back to top -->


</div> <!-- Body main wrapper END -->

<?php
 $this->loadJs('bootstrap.min');
 $this->loadJs('owl.carousel.min');
 $this->loadJs('plugins');
 $this->loadJs('slick.min');
 $this->loadJs('waypoints.min');
 $this->loadJs('main');
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyhnotOg6n69X0Cg0IQImepYuDNqPMapc"></script>

<script>
   
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
       
        var mapOptions = {
            
            zoom: 14,

            scrollwheel: false,

       
            center: new google.maps.LatLng(-16.682648, -49.300356),  

 
            styles: [
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e9e9e9"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dedede"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#333333"
                                },
                                {
                                    "lightness": 40
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f2f2f2"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#fefefe"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        }
                    ]
        };

 
        var mapElement = document.getElementById('googleMap');

 
        var map = new google.maps.Map(mapElement, mapOptions);
 
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-16.682648, -49.300356),
            map: map,
            title: 'Tendas & Cia',
            icon: '<?php $this->imgFile( "map.png" );?>',
            animation:google.maps.Animation.BOUNCE

        });
    }
</script>  
   
</body>
</html>