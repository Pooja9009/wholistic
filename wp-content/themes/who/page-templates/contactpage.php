<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package who
 * Template name:contactpage
 */

get_header();
?>

    <main id="primary" class="site-main">

        <body id="contact-page">
        <div class="contact-banner"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/contactBannerImg.png')">
            <div class="contact-form">
                <h1>CONTACT US</h1>
                <form>
                    <div class="name-info">
                        <label for="fname"></label>
                        <input type="text" id="fname" name="fname" placeholder="First Name">

                        <label for="lname"></label>
                        <input type="text" id="lname" name="lname" placeholder="Last Name">
                    </div>
                    <div class="mail-contact-info">
                        <label for="email"></label>
                        <input type="text" id="email" name="email" placeholder="Email Address">

                        <label for="phone"></label>
                        <input type="number" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                    <textarea rows="4" cols="30" placeholder="Message"></textarea>
                    <div class=submit>
                        <input type="submit" id="send-button" value="Send">
                    </div>
                </form>
            </div>
        </div>
        </body>
    </main><!-- #main -->
<?php
get_footer();