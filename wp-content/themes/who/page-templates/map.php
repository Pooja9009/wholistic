<div id="googleMap"> </div>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtvccU2yCjfCbqiO2T_CIKP2txqGOMfZA"></script>
<script type="text/javascript">
    var map;
    var grayStyles = [{
        featureType: "landscape",
        stylers: [{
            color: "#f5f5f5"
        }
        ]},
        {
            featureType: "water",
            stylers: [{
                color: "#fcd0c3"
            }]}
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
        ['Stony Plain Wellness Pharmacy', 53.52933318851337, -114.00112482216366],
        ['Advanced Health Pharmasave', 54.142040979205376, -115.68512073749105],
        ['Cambrian Pharmacy', 51.082343518094326, -114.09278316449762],
        ['Thrive Naturals', 49.829154979548186, -119.62867469332048],
        ['YES Wellness.com', 49.150190995569176, -122.86130557797965],
        ['Sina Pharmacy & Health Centre', 49.27948387470931, -123.11946689333449],
        ['Pure Integrative Pharmacy', 48.41804313667063, -123.36976499146468],
        ['National Nutrition', 44.58635448439282, -79.42752073381125],
        ['Well Plus Pharmacy', 43.965846419742, -79.27523894914827],
        ['Your Good Health', 43.7686278750319, -79.38610419145282],
        ['Vitamart.ca (Online Only)', 43.47008657093412, -79.68286246446442],
        ['TNS Health Food Cobourg', 43.97238588945977, -78.19395224913595],
        ['The Granary', 45.139356695320615, -76.14481549330482],
        ['Natural Food Pantry – Orleans', 45.46694075301992, -75.49001090865585],
        ['Papillon Foods', 45.446240159667646, -73.81487992030921],
        ['Biodor Produits Naturels', 45.50120594178967, -73.57264212774265],
        ['Naterro', 46.786747286519585, -71.28037946448697],
        ['Aaura Whole Foods LTD', 45.96152482902304, -66.64786662030247]
    ];



    function initialize() {
        map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        var marker, i;
        var infowindow = new google.maps.InfoWindow();

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map:map,
                //    icon:'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
                icon: '<?php bloginfo("template_directory"); ?>/img/redMarker.svg'
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));


        }

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>




