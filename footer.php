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
<div class="mission-statement">
	<div class="entry-content">
		<div class="wrapper">
		<h3>Mission Statement</h3>
		<p>A STEWARD OF YOUR PROPERTY, SERVICING YOUR HOME LIKE ITS MINE.<br>
		Present and future owners are assured of Integrity In Craftsmanship in accordance with local codes, and that premium materials have been installed.<br>
		John C. Thomas<br>
		License #BC129693</p>
		</div>
	</div>
</div>
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
	</div>
</div>
	<div class="olylena">
		<div class="wrapper">
			<div class="boogiebox">
				<div class="sm-box">
					<h3>Check out our TV commercial!</h3>
				</div>
				<div class="sm-box">
				<video width="100%" controls="">
					<source src="/wp-content/themes/thehandymancan/images/ole-and-lena.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
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
