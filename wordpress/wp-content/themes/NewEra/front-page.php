<?php get_header(); ?>

	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'frontpage' ); ?>
        
        <?php get_template_part( 'templates/partials/inc', 'testimonals' ); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->


<?php get_footer(); ?>