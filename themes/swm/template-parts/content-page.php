<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	</header><!-- .entry-header -->


	<div class="entry-content">


		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
