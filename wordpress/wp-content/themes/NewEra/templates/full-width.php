<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

	<section id="main" role="main" class="twelve columns">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'page' ); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->


<?php get_footer(); ?>