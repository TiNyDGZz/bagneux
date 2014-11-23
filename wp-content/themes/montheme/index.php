

<?php get_header(); ?> <!-- ouvrir header,php -->



		<div id="content">
			

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			 get_sidebar(); ?>
			
			</div><!-- #content -->
		


<?php get_footer(); ?>