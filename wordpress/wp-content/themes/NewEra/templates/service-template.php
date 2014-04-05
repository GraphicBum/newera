
<?php
/*
Template Name: Service Page
*/
?>
<?php get_header(); ?>

	<section id="main" role="main" class="twelve columns">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'page' ); ?>

		<?php endwhile; ?>
	</section>
</div>
   

<?php 
    $concrete = get_term_by('name', 'concrete', 'service');
    $interior = get_term_by('name', 'interior', 'service');
    $exterior = get_term_by('name', 'exterior', 'service');
?>

    <div id="concrete" class="services"> 
       <h3 class="text-center fittext" gumby-rate="0.8" gumby-sizes="12|100">Concrete Work</h3>
        <ul>
            <?php wp_list_categories('title_li=&child_of='.$concrete->term_id.'&taxonomy=service&hide_empty=0');?>
        </ul>
    </div>
 <div id="interior" class="services"> 
       <h3 class="text-center fittext" gumby-rate="0.8" gumby-sizes="12|100">Interior Work</h3>
        <ul>
            <?php wp_list_categories('title_li=&child_of='.$interior->term_id.'&taxonomy=service&hide_empty=0');?>
        </ul>
    </div>
 <div id="concrete" class="services"> 
       <h3 class="text-center fittext" gumby-rate="0.8" gumby-sizes="12|100">Exterior Work</h3>
        <ul>
            <?php wp_list_categories('title_li=&child_of='.$exterior->term_id.'&taxonomy=service&hide_empty=0');?>
        </ul>
    </div>


<?php get_footer(); ?>