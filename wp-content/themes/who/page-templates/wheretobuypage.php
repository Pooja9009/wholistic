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
        <div class="where-banner"
            style="background-image:url('<?php bloginfo("template_directory");?>/img/whereBanner.png">
            <h1>WHERE TO BUY</h1>
        </div>
        <div class="borderLine">
        </div>
        <div class="map-block">
            <div class="map-first-block">
                <label>Your location
                    <input type="text" id="location"/>
                </label>
                <label>Search radius
                    <input type="number" id="radius"/>
                </label>
                <label>Results
                    <input type="number" id="results" />
                </label>
                <input type="submit" value="Search">

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
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d170698.83670961153!2d-106.86108463029201!3d52.192416168649494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5304f67f0ec08fe5%3A0x3618626fc8cc8f0b!2sNutters%20Everyday%20Naturals!5e0!3m2!1sen!2snp!4v1662375941129!5m2!1sen!2snp" width="675" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</main><!-- #main -->
<?php
get_footer();