<?php
get_header();
?>

<?php
if(have_posts()):
while(have_posts()):
the_post();
?>

<h1><?php the_title(); ?> </h1>

<?php the_content(); ?>

<?php
endwhile;
endif;
?>

<?php
/* Run the loop to output the posts.
* If you want to overload this in a child theme then include a file
* called loop-index.php and that will be used instead.
*/
get_template_part( 'loop', 'index' );
?>

<?php get_sidebar(); ?>

<?php
get_footer();
?>
