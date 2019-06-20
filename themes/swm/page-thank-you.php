<?php /* Template Name: thank-you */ ?>
<?php get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<section class="typ">
<section class="backgroundImage"><img  src= "<?php echo get_template_directory_uri() . '/images/swmLogo.png'; ?>" alt= "Background Image of the starts with me logo" height="472" width="393"></section>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section> <!-- .typ -->


<?php get_footer(); ?>