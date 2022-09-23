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
			<img src="<?php bloginfo("template_directory"); ?>/img/phoneIcon.png"/>
			<p>1-800-387-0177</p>
</div>
			<div class=content-detail>
			<img src="<?php bloginfo("template_directory"); ?>/img/emailIcon.png"/>
			<p>info@wholisticbyaor.ca</p>
</div>
<div class=content-detail>
			<i class="fa fa-map-marker" style="font-size:18px;color:black;"></i>
			<p>3900 – 12 Street NE Calgary,<br>AB Canada T2E 8H9</p>
</div>
<div class=content-detail>
			<p>Enter your email to stay up to date on all news <br>
			<input type="email" id ="email-id" name="email-id" placeholder="Email" />
			<i class="fa fa-paper-plane sent-icon" style=" margin-left: -38px;
    border: 9px solid black;
    background-color: black;"></i>
			</p>
</div>
		</div><!-- .site-info -->
		<hr>
		<div class="second-content-footer">
			<p><a href="/who/terms">Terms and Condition</a></p>
			<p>Privacy Policy</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
