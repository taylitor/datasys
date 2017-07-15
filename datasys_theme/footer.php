<!-- footer -->
        <div class="col-xs-12 Pad0" style="background: #07081e;">

            <div class="col-xs-12 text-center mTop20 Pad0" style="z-index: 1;">
                <div class="container" style="z-index: 1;">
                    <div class="col-xs-12 col-sm-4 mBot20 Pad20" style="z-index: 1;">
<?php  
$args = array(
'post_type' => 'menu',
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?>                     
                        <p class="text-left text-white istok let-sp-0 mTop10" style="font-size: 16px;line-height: 1.736;">
                            <a href="<?php echo get_site_url(); ?>" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="text-decoration: none;">
                                <?php echo the_field('inicio') ?>
                            </a>
                        </p>
                        <p class="text-left text-white istok let-sp-0 mTop10" style="font-size: 16px;line-height: 1.736;">
                            <a href="<?php echo the_field('blog_link') ?>" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="text-decoration: none;">
                                <?php echo the_field('blog') ?>
                            </a>
                        </p>
                        <p class="text-left text-white istok let-sp-0 mTop10" style="font-size: 16px;line-height: 1.736;">
                            <a href="<?php echo the_field('contacto_link') ?>" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="text-decoration: none;">
                                <?php echo the_field('contacto') ?>
                            </a>
                        </p>
                        <p class="text-left text-white istok let-sp-0 mTop10" style="font-size: 16px;line-height: 1.736;">
                            <a href="<?php echo the_field('reclutamiento_link') ?>" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="text-decoration: none;">
                                <?php echo the_field('reclutamiento') ?>
                            </a>
                        </p>
                        <p class="text-left text-white istok let-sp-0 mTop10" style="font-size: 16px;line-height: 1.736;">
                            <a href="<?php echo ot_get_option('link_carbono'); ?>" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="text-decoration: none; display: inline-block; background: #fff; padding: 12px;border-radius: 15px;" download>
                                <img class="animateme" data-when="enter" data-from="0.9" data-to="0" data-opacity="0" data-translatex="200" data-rotatez="90" src="<?php echo ot_get_option('imagen_carbono'); ?>" alt="" style="max-width: 150px;">
                            </a>
                        </p>
                    

</div>                    
                    <div class="col-xs-12 col-sm-4 mBot20 Pad20" style="z-index: 1;">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo2.png" alt="" style="max-width: 100%;">
                        <p class="text-center text-white istok-b let-sp-0 mTop35" style="font-size: 18px;line-height: 1.743;">
                            Lun-Vier 7:45-5:30
                        </p>
                        <p style="font-size: 18px;line-height: 1.743;">
                            <a href="mailto:info@datasys.la" target="_blank" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="text-decoration: none;">
                                info@datasys.la
                            </a>
                        </p>
                        <p style="font-size: 18px;line-height: 1.743;">
                            <a href="tel:+50625866464" target="_blank" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="text-decoration: none;">
                                +506 2586-6464
                            </a>
                        </p>
                        <div class="mTop35">
                            <a href="<?php echo the_field('facebook_link') ?>" target="_blank" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="text-decoration: none;">
                                <span class="fa-stack fa-lg" style="width: 50px;height: 50px;">
                                    <i class="fa fa-circle fa-stack-2x" style="font-size: 50px;"></i>
                                    <i class="fa fa-facebook fa-stack-2x fa-inverse" style="color: #07081e;font-size: 30px; line-height: 50px;"></i>
                                </span>
                            </a>
                            <a href="<?php echo the_field('linkedin_link') ?>" target="_blank" class="link-red text-center text-white istok-b let-sp-0 mTop10" style="margin-left: 50px;text-decoration: none;">
                                <span class="fa-stack fa-lg" style="width: 50px;height: 50px;">
                                    <i class="fa fa-circle fa-stack-2x" style="font-size: 50px;"></i>
                                    <i class="fa fa-linkedin fa-stack-2x fa-inverse" style="color: #07081e;font-size: 30px; line-height: 50px;"></i>
                                </span>
                            </a>
                        </div>
                    </div>
<?php 
}
}
wp_reset_postdata();
?>                     
                    <div class="col-xs-12 col-sm-4 mBot20 Pad20" style="z-index: 1;">
                        <div id="map1" class="map-home" style="max-width: 300px; margin: 0 auto;">

                        </div>
                        <p class="text-left text-white istok let-sp-0" style="max-width: 300px; margin: 0 auto;font-size: 14px;line-height: 1.688; margin-top: 10px;">
                            San Francisco de Dos Rios de la rotonda Y Griega 250 mts sur, hacia Desamparados, San Jos&eacute;
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 text-center" style="z-index: 1;">
                <div class="container" style="z-index: 1; padding-left: 25px; padding-right: 25px;">
                    <div class="col-xs-12 mTop10" style="height: 1px; background: rgb(48, 48, 48); margin-bottom: 15px;"></div>
                    <div class="col-xs-12" style="margin-bottom: 15px;">
                        <p class="col-xs-12 Pad0 text-left istok f-w-500 footer-copy" style="">
                            © 2014 Datasys Group, All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/plugins/menu/js/main_menu.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/plugins/menu/js/headroom.js"></script>

        <script src='<?php echo get_template_directory_uri() ?>/assets/js/parallax.js'></script>

        <script src="<?php echo get_template_directory_uri() ?>/assets/plugins/manparallax/js/index.js"></script>

        <script src="<?php echo get_template_directory_uri() ?>/assets/js/tabs-collapse.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/plugins/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">

$(function() {
      $(".scroll-indicator").click(function() {
        $("html, body").stop().animate({
            scrollTop: $($(this).attr("href")).offset().top - 0
         }, 1500);
        return false;
    });
});

$( document ).ready(function() {
    $( '#tabClick' ).click();
});
    
</script>
<script type="text/javascript">
$( document ).ready(function() {
 console.log('click!');
$( ".owl-next" ).click();
});
</script> 
        <script type="text/javascript">
            function autocollapse() {
                var navbar_cont = $('.navbar-autocollapse .col-xs-12');
                var navbar = $('.navbar-autocollapse');
                navbar.parent().removeClass('collapsed');
                navbar.removeClass('collapsed');
                if (navbar_cont.innerHeight() > 100 || navbar_cont.innerWidth() < 1024) {
                    navbar.parent().addClass('collapsed');
                    navbar.addClass('collapsed');
                }
            }
            jQuery(document).on('ready', autocollapse);
            jQuery(window).on('resize', autocollapse);

            $(document).ready(function () {
                $('.services_tabs_list').tabCollapse();
                $('.slider-down').click(function () {
                    $('html,body').animate(
                            {
                                scrollTop: ($(window).height() / 100) * 100
                            }, {duration: 'slow', easing: 'swing'}
                    );
                });
                initialize_owl($('#owl-carousel-main'));
                initialize_owl_us($('#owl-carousel-us'));
                initialize_owl_services($('#owl-carousel-services'));
                initialize_owl_testimonial($('#owl-carousel-testimonial'));
                initialize_owl_certifications($('#owl-carousel-certifications'));
            });
            $(window).scroll(function () {
                if ($(this).scrollTop() > 300) {        // If page is scrolled more than 50px
                    $('#return-to-top').addClass('top-slide');    // Fade in the arrow
                } else {
                    $('#return-to-top').removeClass('top-slide');   // Else fade out the arrow
                }
            });

            $('#return-to-top').click(function () {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop: 0                       // Scroll to top of body
                }, 500);
            });
            function initialize_owl(owl) {
                owl.owlCarousel({
                    nav: false,
                    autoplay: true,
                    margin: 0,
                    loop: true,
                    center: true,
                    stagePadding: 0,
                    autoWidth: false,
                    items: 1,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        768: {
                            items: 1,
                            nav: false
                        },
                        992: {
                            items: 1,
                            nav: false
                        },
                        1200: {
                            items: 1,
                            nav: false
                        }
                    },
                    dots: true,
                    autoplayTimeout: 5000,
                    navText: [
                        "<i style='font-size:20px;padding-top:2px;' class='text-red fa fa-chevron-left icon-white'></i>",
                        "<i style='font-size:20px;' class='text-red fa fa-chevron-right icon-white'></i>"
                    ]
                });
            }
            function initialize_owl_us(owl) {
                owl.owlCarousel({
                    autoplay: false,
                    margin: 0,
                    loop: true,
                    center: true,
                    stagePadding: 0,
                    autoWidth: false,
                    items: 1,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        768: {
                            items: 1,
                            nav: false
                        },
                        992: {
                            items: 1,
                            nav: false
                        },
                        1200: {
                            items: 1,
                            nav: false
                        }
                    },
                    dots: true,
                    autoplayTimeout: 1000,
                    toInside: false
                });
            }
            function initialize_owl_services(owl) {
                owl.owlCarousel({
                    items: 4,
                    nav: true,
                    autoplay: true,
                    margin: 0,
                    loop: true,
                    center: false,
                    stagePadding: 0,
                    autoWidth: false,
                    autoplayTimeout:2000,
                    autoPlaySpeed: 2000,
                    autoplayHoverPause:false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1
                            //nav: true
                        },
                        768: {
                            items: 2
                            //nav: true
                        },
                        992: {
                            items: 3
                            //nav: true
                        },
                        1200: {
                            items: 4
                            //nav: true
                        },
                        1400: {
                            items: 4
                            //nav: true
                        }

                    },
                    dots: false,
                    navText: [
                        '<i class="fa fa-chevron-left fa-4 grow" aria-hidden="true" style="color: #CCC; font-size: 50px;"></i>',
                        '<i class="fa fa-chevron-right fa-4 grow" aria-hidden="true" style="color: #CCC; font-size: 50px;"></i>',
                    ]
                });
            }
function initialize_owl_certifications(owl) {
                owl.owlCarousel({
                    items: 1,
                    nav: false,
                    autoplay: true,
                    margin: 0,
                    loop: true,
                    center: false,
                    stagePadding: 0,
                    autoWidth: false,
                    autoplayTimeout:2000,
                    autoPlaySpeed: 2000,
                    autoplayHoverPause:false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        768: {
                            items: 1,
                            nav: false
                        },
                        992: {
                            items: 1,
                            nav: false
                        },
                        1200: {
                            items: 1,
                            nav: false
                        },
                        1400: {
                            items: 1,
                            nav: false
                        }

                    },
                    dots: false,
                    navText: [
                        '<i class="fa fa-chevron-left fa-4 grow" aria-hidden="true" style="color: #CCC; font-size: 50px;"></i>',
                        '<i class="fa fa-chevron-right fa-4 grow" aria-hidden="true" style="color: #CCC; font-size: 50px;"></i>',
                    ]
                });
            }            
            function initialize_owl_testimonial(owl) {
                owl.owlCarousel({
                    autoplay: true,
                    margin: 0,
                    loop: true,
                    center: true,
                    stagePadding: 0,
                    autoWidth: false,
                    items: 1,
                    autoplay:false,
                    autoplayTimeout:2000,
                    autoPlaySpeed: 2000,
                    autoplayHoverPause:false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        768: {
                            items: 1,
                            nav: false
                        },
                        992: {
                            items: 1,
                            nav: false
                        },
                        1200: {
                            items: 1,
                            nav: false
                        }
                    },
                    dots: true,
                    toInside: false
                });
            }
            function destroy_owl(owl) {
                //el.data('owlCarousel').destroy();
                owl.trigger("destroy.owl.carousel");
                owl.find('.owl-stage-outer').children(':eq(0)').unwrap();
            }

        </script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAZVp-3U2pCdpKiyJ7ydGKztjX9bF8k0g"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var map_state = 0;
                var map_state_st = '';
                if (!("ontouchend" in document)) {
                    map_state = 1;
                    map_state_st = 'is-active';
                }
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    maxZoom: 18,
                    scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    //center: new google.maps.LatLng(16.403537, -77.956009), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.

                    styles: [{"featureType": "all", "elementType": "labels.text.fill", "stylers": [{"color": "#ffffff"}]}, {"featureType": "all", "elementType": "labels.text.stroke", "stylers": [{"color": "#000000"}, {"lightness": 13}]}, {"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#000000"}]}, {"featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{"color": "#144b53"}, {"lightness": 14}, {"weight": 1.4}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#08304b"}]}, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#0c4152"}, {"lightness": 5}]}, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#000000"}]}, {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#0b434f"}, {"lightness": 25}]}, {"featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{"color": "#000000"}]}, {"featureType": "road.arterial", "elementType": "geometry.stroke", "stylers": [{"color": "#0b3d51"}, {"lightness": 16}]}, {"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#000000"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"color": "#146474"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#07081e"}]}],
                    draggable: map_state
                };
                var mobile_btn = '';
                if (isMobile.any()) {
                    mobile_btn = 'mobile';
                }
                var maps = [
                    {
                        id: 'map1',
                        map_obj: new google.maps.Map(document.getElementById('map1'), mapOptions),
                        zoom: 18,
                        features: [
                            {
                                position: new google.maps.LatLng(9.9126521, -84.0686509),
                                type: 'info',
                                tittle: 'Datasys Costa Rica',
                                category: 'datasys',
                                location: 'Costa Rica'
                            }
                        ],
                        map_markers: [],
                        bounds: new google.maps.LatLngBounds(),
                        infowindow: new google.maps.InfoWindow(),
                        scroll_position: 'scroll-style'
                    }
                ];

                //create empty LatLngBounds object
                //var bounds = new google.maps.LatLngBounds();
                //var infowindow = new google.maps.InfoWindow();

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                //var mapElement = document.getElementById('map-1');

                // Create the Google Map using our element and options defined above
                //var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var icons = {
                    info: {
                        url: '<?php echo get_template_directory_uri() ?>/assets/img/marker1.png', // url
                        scaledSize: new google.maps.Size(40, 53), // scaled size
                        origin: new google.maps.Point(0, 0), // origin
                        anchor: new google.maps.Point(20, 53) // anchor
                    }
                };
                function addMarker(map, feature, i) {
                    var marker = new google.maps.Marker({
                        position: feature.position,
                        animation: google.maps.Animation.DROP,
                        icon: icons[feature.type],
                        map: map.map_obj,
                        title: feature.tittle,
                        category: feature.category,
                        location: feature.location
                    });
                    map.map_markers.push(marker);
                    //extend the bounds to include each marker's position
                    map.bounds.extend(marker.position);

                    google.maps.event.addListener(marker, 'click', (function (marker) {
                        return function () {
                            map.infowindow.setContent(feature.tittle);
                            map.infowindow.open(map.map_obj, this);
                        };
                    })(marker));
                }

                for (var h = 0; h < maps.length; h++) {
                    var map = maps[h];
                    $('#' + map.id + '').append(
                            '<div class="' + mobile_btn + ' ' + map.scroll_position + '" style="">' +
                            '<div class="scroll-map">' +
                            '<div data-map="' + h + '" data-state="' + map_state + '" class="btn-cont ' + mobile_btn + ' ' + map_state_st + '" draggable="false" title="Habilitar scroll dentro del mapa" style="">' +
                            'Habilitar scroll' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                            );
                    for (var i = 0; i < map.features.length; i++) {
                        addMarker(map, map.features[i], i);
                    }

                    if (map.features.length <= 1) {
                        //var extendPoint1 = new google.maps.LatLng(map.bounds.getNorthEast().lat() + 0.20, map.bounds.getNorthEast().lng() + 0.20);
                        //var extendPoint2 = new google.maps.LatLng(map.bounds.getNorthEast().lat() - 0.20, map.bounds.getNorthEast().lng() - 0.20);
                        //map.bounds.extend(extendPoint1);
                        //map.bounds.extend(extendPoint2);
                    }
                    map.map_obj.fitBounds(map.bounds);
                    map.map_obj.setCenter(map.bounds.getCenter());
                }

                $('.btn-cont').click(function () {
                    var map = maps[$(this).data('map')];
                    if ($(this).data('state') == 0) {
                        $(this).data('state', 1);
                        $(this).addClass('is-active');
                        map.map_obj.set('draggable', true);
                    } else {
                        $(this).data('state', 0);
                        $(this).removeClass('is-active');
                        map.map_obj.set('draggable', false);
                    }
                });
            }
            var isMobile = {
                Android: function () {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function () {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function () {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function () {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function () {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function () {
                    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
                }
            };
        </script>
        <script type="text/javascript">
        $( "#nosotros" ).click(function() {
          $( "#submenuNosotros" ).fadeToggle();
          $('#submenuSoluciones').hide();
          $('#submenuServicios').hide();
        });
        $( "#soluciones" ).click(function() {
          $( "#submenuSoluciones" ).fadeToggle();
          $('#submenuNosotros').hide();
          $('#submenuServicios').hide();
        });
        /*$( "#servicios" ).click(function() {
          $( "#submenuServicios" ).fadeToggle();
          $('#submenuNosotros').hide();
          $('#submenuSoluciones').hide();
        });*/
        </script>
                    <script type="text/javascript">
$( document ).ready(function() {
    var wid = $(window).width();                   
    if (wid => "1024") {
    document.getElementById("nosotros").innerHTML = "<a href='http://code-sapiens.com/projects/datasys/nosotros/valores' id='nosotros'>Nosotros</span></a>";
    document.getElementById("soluciones").innerHTML = "<a href='http://code-sapiens.com/projects/datasys/soluciones/datacenters/' id='nosotros'>Portafolio</span></a>";
    }else{
    document.getElementById("nosotros").innerHTML = "<a href='#' id='nosotros'>Nosotros</span></a>";
    document.getElementById("soluciones").innerHTML = "<a href='#' id='soluciones'>Portafolio</span></a>";
    }
});                    

                    </script>       
    </body>
</html>