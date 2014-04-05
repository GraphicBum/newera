<?php
/**
 * The template used for displaying page content in single.php
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1><?php the_title(); ?></h1>

	<?php get_template_part( 'templates/partials/inc', 'meta' ); ?>

	<div class="entry">

		<?php the_content(); ?>

		<?php wp_link_pages( array( 'before' => 'Pages: ', 'next_or_number' => 'number' ) ); ?>

		<?php the_tags( 'Tags: ', ', ', ''); ?>

	</div>
    <section class="gallery">
        <h3>Before Images</h3>
    <div class="row">
            <?php
$beforeimages = get_post_meta( $post->ID, 'before_images' );

foreach ( $beforeimages as $beforeimage ) {
    $thumb = pods_image_url( $beforeimage, 'gallery-thumb' );
    $full = pods_image_url( $beforeimage, 'full' );
    echo '<figure>
                        <a rel="gallery-before-images" href="'.$full.'">
                           <img width="300" height="300" src="'.$thumb.'" class="attachment-gallery-thumb" alt="New Era Home Improvemnet Project After Image">
                        </a>
                  </figure>';
        }
            ?>
</div>
          <div class="row">
        <h3>After Images</h3>

            <?php
$afterimages = get_post_meta( $post->ID, 'after_images' );

foreach ( $afterimages as $afterimage ) {
    $thumb = pods_image_url( $afterimage, 'gallery-thumb' );
    $full = pods_image_url( $afterimage, 'full' );
    echo '<figure>
                        <a rel="gallery-after-images" href="'.$full.'">
                           <img width="300" height="300" src="'.$thumb.'" class="attachment-gallery-thumb" alt="New Era Home Improvemnet Project After Image">
                        </a>
                  </figure>';
        }
            ?>
              </div>
    </section>

	<?php get_template_part( 'templates/partials/inc', 'socialbuttons' ); ?>

</article>