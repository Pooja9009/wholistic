<div id="googleMap"></div>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtvccU2yCjfCbqiO2T_CIKP2txqGOMfZA&libraries=places"></script>
<script>

    const input = document.getElementById("location");
    const searchBox = new google.maps.places.SearchBox(input);

    var map;
    var grayStyles = [{
        featureType: "landscape",
        stylers: [{
            color: "#f5f5f5"
        }
        ]
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
</script>
<script>window.stores = [{
        "ID": 323,
        "title": "Advanced Health Pharmasave\ufffc",
        "address1": "5112 50th St ",
        "address2": "Whitecourt AB T7S 1W3 ",
        "address3": "Canada",
        "coordinates": {
            "address": "5112 50 Street, Whitecourt, AB, Canada",
            "lat": 54.1419414,
            "lng": -115.6849459,
            "zoom": 16,
            "place_id": "ChIJ54_vJ60smVMRrTPMAZUBDH8",
            "name": "5112 50 St",
            "street_number": "5112",
            "street_name": "50 Street",
            "street_name_short": "50 St",
            "city": "Whitecourt",
            "state": "Alberta",
            "state_short": "AB",
            "post_code": "T7S 1V4",
            "country": "Canada",
            "country_short": "CA"
        },
        "lat": 54.1419414,
        "lng": -115.6849459
    },{
        "ID": 324,
        "title": "Stony Plain Wellness Pharmacy\ufffc",
        "address1": "106, 5013 48 St.",
        "address2": "Stony Plain AB T7Z 1L8",
        "address3": "Canada",
        "coordinates": {
            "address": "P888+V8V, Leknath Marg, Kathmandu 44600, Nepal",
            "lat": 27.71709333602948,
            "lng": 85.3159138729553,
            "zoom": 16,
            "place_id": "ChIJL3JKLB0Z6zkRF7hWkrNXyMI",
            "street_name": "Leknath Marg",
            "city": "Kathmandu",
            "state": "Bagmati Province",
            "post_code": "44600",
            "country": "Nepal",
            "country_short": "NP"
        },
        "lat": 53.52933318851337,
        "lng": -114.00112482216366
    },{
        "ID": 325,
        "title": "Homegrown Foods Ltd\ufffc",
        "address1": "10 - 19 Granite Drive",
        "address2": "Stony Plain AB T7Z 1V8",
        "address3": "Canada",
        "coordinates": {
            "address": "P888+V8V, Leknath Marg, Kathmandu 44600, Nepal",
            "lat": 27.71709333602948,
            "lng": 85.3159138729553,
            "zoom": 16,
            "place_id": "ChIJL3JKLB0Z6zkRF7hWkrNXyMI",
            "street_name": "Leknath Marg",
            "city": "Kathmandu",
            "state": "Bagmati Province",
            "post_code": "44600",
            "country": "Nepal",
            "country_short": "NP"
        },
        "lat": 53.542820261718745,
        "lng": -113.98735717340466
    }, {
        "ID": 326,
        "title": "Cambrian Pharmacy\ufffc",
        "address1": "#9 728 Northmount Dr NW",
        "address2": "Calgary AB T2K 3K2 ",
        "address3": "Canada",
        "coordinates": {
            "address": "P888+V8V, Leknath Marg, Kathmandu 44600, Nepal",
            "lat": 27.71709333602948,
            "lng": 85.3159138729553,
            "zoom": 16,
            "place_id": "ChIJL3JKLB0Z6zkRF7hWkrNXyMI",
            "street_name": "Leknath Marg",
            "city": "Kathmandu",
            "state": "Bagmati Province",
            "post_code": "44600",
            "country": "Nepal",
            "country_short": "NP"
        },
        "lat": 51.082343518094326,
        "lng": -114.09278316449762
    },{
        "ID": 327,
        "title": "Thrive Naturals\ufffc",
        "address1": "2454 Dobbin Road",
        "address2": "West Kelowna BC V4T 1K5",
        "address3": "Canada",
        "coordinates": {
            "address": "P888+V8V, Leknath Marg, Kathmandu 44600, Nepal",
            "lat": 27.71709333602948,
            "lng": 85.3159138729553,
            "zoom": 16,
            "place_id": "ChIJL3JKLB0Z6zkRF7hWkrNXyMI",
            "street_name": "Leknath Marg",
            "city": "Kathmandu",
            "state": "Bagmati Province",
            "post_code": "44600",
            "country": "Nepal",
            "country_short": "NP"
        },
        "lat": 49.829154979548186,
        "lng": -119.62867469332048
    }, {
        "ID": 328,
        "title": "YES Wellness.com\ufffc",
        "address1": "12565 88 Ave",
        "address2": "Surrey BC V3W 3J7",
        "address3": "Canada",
        "coordinates": {
            "address": "5112 50 Street, Whitecourt, AB, Canada",
            "lat": 54.1419414,
            "lng": -115.6849459,
            "zoom": 16,
            "place_id": "ChIJ54_vJ60smVMRrTPMAZUBDH8",
            "name": "5112 50 St",
            "street_number": "5112",
            "street_name": "50 Street",
            "street_name_short": "50 St",
            "city": "Whitecourt",
            "state": "Alberta",
            "state_short": "AB",
            "post_code": "T7S 1V4",
            "country": "Canada",
            "country_short": "CA"
        },
        "lat": 49.150190995569176,
        "lng": -122.86130557797965
    }, {
        "ID": 329,
        "title": "Nutters Everyday\ufffc",
        "address1": "835A Broadway Avenue",
        "address2": "Saskatoon SK S7N 1B5",
        "address3": "Canada",
        "coordinates": {
            "address": "P888+V8V, Leknath Marg, Kathmandu 44600, Nepal",
            "lat": 27.71709333602948,
            "lng": 85.3159138729553,
            "zoom": 16,
            "place_id": "ChIJL3JKLB0Z6zkRF7hWkrNXyMI",
            "street_name": "Leknath Marg",
            "city": "Kathmandu",
            "state": "Bagmati Province",
            "post_code": "44600",
            "country": "Nepal",
            "country_short": "NP"
        },
        "lat": 52.11717572868288,
        "lng": -106.65649114522991
    },{
        "ID": 329,
        "title": "Sina Pharmacy & Health Centre\ufffc",
        "address1": "505 Smithe St",
        "address2": "Vancouver BC V6B 6H1",
        "address3": "Canada",
        "coordinates": {
            "address": "P888+V8V, Leknath Marg, Kathmandu 44600, Nepal",
            "lat": 27.71709333602948,
            "lng": 85.3159138729553,
            "zoom": 16,
            "place_id": "ChIJL3JKLB0Z6zkRF7hWkrNXyMI",
            "street_name": "Leknath Marg",
            "city": "Kathmandu",
            "state": "Bagmati Province",
            "post_code": "44600",
            "country": "Nepal",
            "country_short": "NP"
        },
        "lat": 49.27948387470931,
        "lng": -123.11946689333449
    },{
        "ID": 329,
        "title": "Pure Integrative Pharmacy\ufffc",
        "address1": "102-557 Superior Street",
        "address2": "Victoria BC V8V 0E4",
        "address3": "Canada",
        "coordinates": {
            "address": "P888+V8V, Leknath Marg, Kathmandu 44600, Nepal",
            "lat": 27.71709333602948,
            "lng": 85.3159138729553,
            "zoom": 16,
            "place_id": "ChIJL3JKLB0Z6zkRF7hWkrNXyMI",
            "street_name": "Leknath Marg",
            "city": "Kathmandu",
            "state": "Bagmati Province",
            "post_code": "44600",
            "country": "Nepal",
            "country_short": "NP"
        },
        "lat": 48.41804313667063,
        "lng": -123.36976499146468
    }]</script>

<script>
    function initialize() {
        map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);


        for (let i = 0; i < stores.length; i++) {
            const latlng = {lat: +stores[i].lat, lng: +stores[i].lng};
            const marker = new google.maps.Marker({
                position: latlng,
                map: map,
            });
            const infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(`<div id="infowindow">
                            ${stores[i].title}, ${stores[i].address1}, ${stores[i].address2}, ${stores[i].address3}</div>`)
                    infowindow.open(map, marker);
                }
            })(marker, i));


        }

    }

    google.maps.event.addDomListener(window, 'load', initialize);


</script>


