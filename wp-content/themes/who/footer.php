<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package who
 */

?>

<footer id="colophon" class="site-footer">
    <h4 class="footer-heading">CONTACT US</h4>
    <div class="footer-content">

        <div class=content-detail>
            <!-- <img src="<?php bloginfo("template_directory"); ?>/img/phoneIcon.png" /> -->
            <i class="fa fa-phone footer-icons" style="transform: rotate(260deg);"></i>
            <p>1-800-387-0177</p>
        </div>
        <div class=content-detail>
            <!-- <img src="<?php bloginfo("template_directory"); ?>/img/emailIcon.png" /> -->
            <i class="fa fa-envelope footer-icons"></i>
            <p>info@wholisticbyaor.ca</p>
        </div>
        <div class=content-detail>
            <i class="fa fa-map-marker footer-icons"></i>
            <p id="location">3900 – 12 Street NE Calgary,<br>AB Canada T2E 8H9</p>
        </div>
        <div class=content-detail>
            <p id="email-detail">Enter your email to stay up to date on all news<br>
                <input style="padding:0;  border-radius: 6px; margin-top: 9px; width: 228px;" type="email" id="email-id"
                    name="email-id" placeholder="Email" />

                <i class="fa fa-paper-plane sent-icon" style="margin-left: -48px;
   border: 5px solid black;
    font-size: 18px;
    background-color: black;
    padding: 4px 10px 0px 7px;
    border-radius: 0 6px 6px 0;"></i>
            </p>
        </div>
    </div><!-- .site-info -->
    <hr>
    <div class="second-content-footer">
        <p id="terms"><a href="/who/terms">Terms and Condition</a></p>
        <p id="policy"><a href="/who/policy">Privacy Policy</p>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>