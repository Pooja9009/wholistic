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
			<p><img src="<?php bloginfo("template_directory"); ?>/img/phoneIcon.png"/>1-800-387-0177</p>
			<p><img src="<?php bloginfo("template_directory"); ?>/img/emailIcon.png"/>info@wholisticbyaor.ca</p>
			<p><i class="fa fa-map-marker" style="font-size:24px;color:black;"></i>3900 – 12 Street NE Calgary,<br>AB Canada T2E 8H9</p>
			<p>Enter your email to stay up to date on all news <br>
			<input type="email" id ="email-id" name="email-id" placeholder="Email" />
			<i class="fa fa-paper-plane sent-icon" style=" margin-left: -43px;
        margin-bottom: -13px;
        border: 9px solid black;
        background-color: black;"></i>
			</p>
		</div><!-- .site-info -->
		<hr>
		<div class="second-content-footer">
			<p>Terms and Condition</p>
			<p>Privacy Policy</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
