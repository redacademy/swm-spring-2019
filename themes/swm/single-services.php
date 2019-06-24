<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title();?>
		<?php if ( has_post_thumbnail() ) : ?>
		<img  src='<?php the_post_thumbnail_url(); ?>'>
		<?php endif; ?>

	
</header>
	<div class="entry-content">


		<?php the_content(); ?>
		<?php the_cfc_field('additional_text_services', 'additional-text-services'); ?>
	
		<?php foreach( get_cfc_meta( 'youtube_url_services' ) as $key => $value ){ ?>
    <?php the_cfc_field( 'youtube_url_services','youtube-video-url-services', false, $key ); ?>
<?php }  ?>

<?php foreach( get_cfc_meta( 'image_services' ) as $key => $value ){ ?>
    <?php the_cfc_field( 'image_services','add-image', false, $key ); ?>
<?php }  ?>

	

	</div><!-- .entry-content -->

	
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>