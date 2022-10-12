<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wheretobuypage
 * Template name:where
 */

get_header();
?>
<main id="primary" class="site-main">

    <body id="where-to-buy">
        <script type="text/Javascript">
        </script>
        <div class="where-banner"
            style="background-image:url('<?php bloginfo("template_directory");?>/img/whereBanner.png">
            <h1>WHERE TO BUY</h1>
        </div>
        <div class="borderLine">
        </div>
        <div class="map-block">
            <div class="map-first-block">
                <label for="location">Your location </label>
                <input type="text" id="location" />

                <label for="radius">Search radius </label>
                <select name="radius" id="radius">
                    <option value="10km">10km</option>
                    <option value="25km">20km</option>
                    <option value="50km" selected>50km</option>
                    <option value="100km">100km</option>
                    <option value="200km">200km</option>
                    <option value="500km">500km</option>

                </select>

                <label for="results">Results </label>
                <select name="results" id="results">
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>

                </select>

                <input type="submit" value="Search" id="submit">

            </div>

            <div class="map-second-block">
                <div class="locations">
                    <div class="location-details">
                        <p><b>Nutters Everyday Naturals</b></p>
                        <p>835A Broadway Avenue</p>
                        <p>Saskatoon SK S7N 1B5</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>446.7 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Homegrown Foods Ltd</b></p>
                        <p>10 - 19 Granite Drive</p>
                        <p>Stony Plain AB T7Z 1V8</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>567.3 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Stony Plain Wellness Pharmacy</b></p>
                        <p>106, 5013 48 St.</p>
                        <p>Stony Plain AB T7Z 1L8</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>568.8 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Advanced Health Pharmasave</b></p>
                        <p>5112 50th St</p>
                        <p>Whitecourt AB T7S 1W3</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>632.8 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Cambrian Pharmacy</b></p>
                        <p>#9 728 Northmount Dr NW</p>
                        <p>Calgary AB T2K 3K2</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>758.2 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Thrive Naturals</b></p>
                        <p>2454 Dobbin Road</p>
                        <p>West Kelowna BC V4T 1K5</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>1128.9 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>YES Wellness.com</b></p>
                        <p>12565 88 Ave</p>
                        <p>#106</p>
                        <p>Surrey BC V3W 3J7</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>1352.2 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Sina Pharmacy & Health Centre</b></p>
                        <p>505 Smithe St</p>
                        <p>Vancouver BC V6B 6H1</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>1357.3 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Pure Integrative Pharmacy</b></p>
                        <p>102-557 Superior Street</p>
                        <p>Unit #31</p>
                        <p>Victoria BC V8V 0E4</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>1434.8 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>National Nutrition</b></p>
                        <p>5 Progress Dr.</p>
                        <p>Orillia ON L3V 0T7</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2277.8 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Well Plus Pharmacy</b></p>
                        <p>5402 Main St</p>
                        <p>Unit #5</p>
                        <p>Stofville ON L4A 1H3</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2334.8 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Your Good Health</b></p>
                        <p>2901 Bayview Ave</p>
                        <p>North York ON M2K 1E6</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2344 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Vitamart.ca (Online Only)</b></p>
                        <p>505 Iroquois Shore Road</p>
                        <p>Oakville ON L6H 2R3</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2351.2 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>TNS Health Food Cobourg</b></p>
                        <p>955 Elgin Street Wesr #1</p>
                        <p>Cobourg ON K9A 5J3</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2395.9 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>The Granary</b></p>
                        <p>107 Bridge St</p>
                        <p>Carleton Place ON K7C 2V4</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2427.3 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Natural Food Pantry – Orleans</b></p>
                        <p>1777 Tenth Line Road</p>
                        <p>Ottawa ON K1E 3X2</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2442.5 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Papillon Foods</b></p>
                        <p>313 St Jean Blvd, Pointe Claire</p>
                        <p>Pointe Claire QC H9R 3J1</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2544.3 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Biodor Produits Naturels</b></p>
                        <p>977 STE-CATHERINE OUEST, #101</p>
                        <p>Montreal QC H3B 4W3</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2555 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Naterro</b></p>
                        <p>2336 Chemin Sainte-Foy</p>
                        <p>BUR.101</p>
                        <p>Quebec QC G1V 1S5</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2606.6 km</p>
                        <p class="direction">Directions</p>
                    </div>
                    <div class="location-details">
                        <p><b>Aaura Whole Foods LTD</b></p>
                        <p>199 Westmorland ST</p>
                        <p>Fredericton NB E3B 3L6</p>
                        <p>Canada</p>
                        <div class="space">
                        </div>
                        <p>2946.3 km</p>
                        <p class="direction">Directions</p>
                    </div>
                </div>

                <div id="googleMap"> 
                <script type="text/javascript"
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtvccU2yCjfCbqiO2T_CIKP2txqGOMfZA&libraries=places">
                </script>
                <script type="text/javascript">
                var markers = [];
                var map;
                // Create the search box and link it to the UI element.

                const input = document.getElementById("location");
                const searchBox = new google.maps.places.SearchBox(input);

                // current location //
                const options = {
                    enableHighAccuracy: true,
                    timeout: 5000,
                    maximumAge: 0
                };

                function success(pos) {
                    const crd = pos.coords;
                    console.log('Your current position is:');
                    console.log(`Latitude : ${crd.latitude}`);
                    console.log(`Longitude: ${crd.longitude}`);
                    var location = ['Start Location',crd.latitude,crd.longitude];
                    locations.push(location);
                    reloadMarkers();


                }

                function error(err) {
                    console.warn(`ERROR(${err.code}): ${err.message}`);
                }
                navigator.geolocation.getCurrentPosition(success, error, options);









                

                // var map;
                var grayStyles = [{
                        featureType: "landscape",
                        stylers: [{
                            color: "#f5f5f5"
                        }]
                    },
                    {
                        featureType: "water",
                        stylers: [{
                            color: "#fcd0c3"
                        }]
                    }
                ];
                var mapOptions = {
                    center: new google.maps.LatLng(52.11717572868288, -106.65649114522991),
                    zoom: 3,
                    styles: grayStyles,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var locations = [
                    ['Nutters Everyday', 52.11717572868288, -106.65649114522991],
                    ['Homegrown Foods Ltd', 53.542820261718745, -113.98735717340466],
                    ['Stony Plain Wellness Pharmacy', 53.52933318851337, -
                        114.00112482216366
                    ],
                    ['Advanced Health Pharmasave', 54.142040979205376, -115.68512073749105],
                    ['Cambrian Pharmacy', 51.082343518094326, -114.09278316449762],
                    ['Thrive Naturals', 49.829154979548186, -119.62867469332048],
                    ['YES Wellness.com', 49.150190995569176, -122.86130557797965],
                    ['Sina Pharmacy & Health Centre', 49.27948387470931, -
                        123.11946689333449
                    ],
                    ['Pure Integrative Pharmacy', 48.41804313667063, -123.36976499146468],
                    ['National Nutrition', 44.58635448439282, -79.42752073381125],
                    ['Well Plus Pharmacy', 43.965846419742, -79.27523894914827],
                    ['Your Good Health', 43.7686278750319, -79.38610419145282],
                    ['Vitamart.ca (Online Only)', 43.47008657093412, -79.68286246446442],
                    ['TNS Health Food Cobourg', 43.97238588945977, -78.19395224913595],
                    ['The Granary', 45.139356695320615, -76.14481549330482],
                    ['Natural Food Pantry – Orleans', 45.46694075301992, -
                        75.49001090865585
                    ],
                    ['Papillon Foods', 45.446240159667646, -73.81487992030921],
                    ['Biodor Produits Naturels', 45.50120594178967, -73.57264212774265],
                    ['Naterro', 46.786747286519585, -71.28037946448697],
                    ['Aaura Whole Foods LTD', 45.96152482902304, -66.64786662030247]
                ];

                function setMarkers(locations) {
                    var infowindow = new google.maps.InfoWindow();
                     var marker;
                    for (var i = 0; i < locations.length; i++) {
                        var location = locations[i];
                        var myLatLng = new google.maps.LatLng(location[1], location[2]);
                        if (location[0] == 'Start Location') {
                             marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                               // title: location[0],
                            });
                        } 
                        else {
                             marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                icon: '<?php bloginfo("template_directory"); ?>/img/redMarker.svg',
                                //title: location[0],
                            });
                        }
                        google.maps.event.addListener(marker, 'click', (function(marker,i) {
                            return function() {
                                infowindow.setContent(locations[i][0]);
                                infowindow.open(map, marker);
                            }
                        })(marker,i));

                        // Push marker to markers array
                        markers.push(marker);
                    }
                }

                function reloadMarkers() {

                    // Loop through markers and set map to null for each
                    for (var i = 0; i < markers.length; i++) {

                        markers[i].setMap(null);
                    }

                    // Reset the markers array
                    markers = [];

                    // Call set markers to re-add markers
                    setMarkers(locations);
                }
                function initialize() {
                    map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
                    setMarkers(locations);
                }
                google.maps.event.addDomListener(window, 'load', initialize);
                </script>
                </div>
            </div>
        </div>

        <div class="last-block">
            <h3>GOT ANY QUESTIONS?</h3>
            <div class="browse button">
                <button>CONTACT US</button>
            </div>
        </div>

    </body>
</main>
<?php
get_footer();
        