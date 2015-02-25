<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Aldehyde
 */
?>
	</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
	<div class="container">
	 
	</div>   
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php		
	if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
			 	echo of_get_option('footercode1', true); } ?>
<?php wp_footer(); ?>
</body>
</html>