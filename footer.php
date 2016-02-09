<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package MStemp
 */
?>

	</div><!-- #content -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		
<?php printf( __('%1$s  %2$s', 'mediocre-software' ), 'If you are not satisfied with my products email me at', '<a href="mailto:publicchar@cock.li" rel="designer">publicchar@cock.li</a>' ); ?>

			<?php printf( __('%1$s  %2$s', 'mediocre-software' ), 'This Mediocre Software company was founded by ', '<a href="https://github.com/briggsoft" rel="designer">Jason Briggs</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
