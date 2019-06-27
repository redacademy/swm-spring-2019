<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="contactgrid">
			<?php while (have_posts()) : the_post(); ?>

			<?php
                    global $post;
                    $post_slug=$post->post_name;
					$service = explode("-",$post_slug);
					echo $service[0];
                    ?>   

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile; 
		?>

		</div>
		<!--.contactgrid-->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>