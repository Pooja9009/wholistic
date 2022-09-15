<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package who
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php
$xmlDoc=new DOMDocument();
// $xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
// $q=$_GET["q"];

//lookup all links from the xml file if length of q>0
// if (strlen($q)>0) {
//   $hint="";
//   for($i=0; $i<($x->length); $i++) {
//     $y=$x->item($i)->getElementsByTagName('title');
//     $z=$x->item($i)->getElementsByTagName('url');
//     if ($y->item(0)->nodeType==1) {
//       //find a link matching the search text
//       if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
//         if ($hint=="") {
//           $hint="<a href='" .
//           $z->item(0)->childNodes->item(0)->nodeValue .
//           "' target='_blank'>" .
//           $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
//         } else {
//           $hint=$hint . "<br /><a href='" .
//           $z->item(0)->childNodes->item(0)->nodeValue .
//           "' target='_blank'>" .
//           $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
//         }
//       }
//     }
//   }
// }

// Set output to "no suggestion" if no hint was found
// or to the correct values
// if ($hint=="") {
//   $response="no suggestion";
// } else {
//   $response=$hint;
// }

//output the response
// echo $response;
?>

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
			

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					// printf( esc_html__( 'Search Results for: %s', 'who' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
