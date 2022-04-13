<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thehandymancan
 */

?>

	</div><!-- #content -->

<?php
$curpage= get_the_ID();
if(is_front_page() || $curpage == 169 || $curpage == 182){ ?>
<div class="testimonials">
<div class="wrapper">
	<div class="boogiebox">

	<div class="test-box sm-box">
		<div class="testholder">
			<i class="fa fa-quote-left" aria-hidden="true"></i>Job easily completed and fridge was replaced with the new one which John had gone and picked up. He then took the old one to be recycled. John responded promptly to our inquiry and did the work 3 days later. He offered suggestions on different options for the replacement. He acted very professionally.
		</div>
		</div>
	<div class="test-box sm-box">
		<div class="testholder">
			<i class="fa fa-quote-left" aria-hidden="true"></i>Johnny did exceptionally high quality work and was very pleasant to work with. The length of the job
		went longer than the estimate through no fault of his, but he gave us a courtesy discount anyway. Will
		definitely hire him again in the future!
		</div>
	</div>
	<div class="test-box sm-box">
		<div class="testholder">
			<i class="fa fa-quote-left" aria-hidden="true"></i>The contractors arrived the day after I called.  They were very friendly and professional.  They completed the work really fast.  It would have taken me all weekend to do what they completed in two hours.  I would definitely recommend this company.  They even were nice to my dogs.  I'm trying to figure out what they can fix next.  I'm really happy with the results.
	</div>
	</div>
	</div>

	<div class="text-center">
		<a href="https://www.angieslist.com/companylist/us/mn/oakdale/the-handyman-can%21%21%21%C2%AE-inc-reviews-92065.htm" target="_blank" class="btn">Read more reviews</a>
	</div>
</div>
</div>
	<div class="olylena">
		<div class="wrapper">
			<div class="boogiebox">
				<div class="sm-box">
					<h3>Check out our TV commercial!</h3>
				</div>
				<div class="sm-box">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/CM3K8_kVv2g?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
<div class="wrapper">
	&copy;<?php echo date("Y"); ?> The Handy Man Can!!!
</div>

		<?php //wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery("#angiesButton").click(function(){
	jQuery("#angiesOverlay").css('display','block');
});

jQuery("#angiesOverlay").click(function(){
	jQuery("#angiesOverlay").css('display','none');
});
	</script>
</body>
</html>
