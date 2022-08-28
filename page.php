<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thehandymancan
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<script>
		jQuery(document).ready(function(){
				if(jQuery("form").length){
					jQuery("#work-phone").on( "change", formatPhone );
					jQuery("#cell-phone").on( "change", formatPhone );
					jQuery("#home-phone").on( "change", formatPhone );
				}
		});

		function formatPhone(event) {
			rawString =  event.target.value;
			var digitsOnlyString = rawString.replace(/[^0-9]/g,'');

			var firstThree = digitsOnlyString.substring(0, 3);
			var middleThree = digitsOnlyString.substring(3, 6);
			var lastFour = digitsOnlyString.substring(6, 10);
			event.target.value = "("+firstThree+")"+" "+middleThree+"-"+lastFour;
		}
	</script>
<?php
get_sidebar();
get_footer();
