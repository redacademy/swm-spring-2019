<?php
/**
 * The template for displaying all pages.
 * Template Name: Services 
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php
// Lets get the page slug
global $post;
$post_slug=$post->post_name;

// For display the data we need to echo it

$service = explode("-",$post_slug);
echo $service[0];
// $category = ucfirst($service[0]);


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    </header><!-- .entry-header -->

	<div class="entry-content">
        <?php
            
              

                $services_args = array(
                    'post_type' => 'services',
                    'posts_per_page' => '11',
                
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'service_category',
                            'field' => 'slug',
                            'terms' => 'service-'.$service[0],
                        )
                    )
                );
                
                    ?> 
                <?php
                $query = new WP_Query($services_args);

                while($query->have_posts()) : $query->the_post();
                // echo $category_id;

                ?>
                
                <h2><?php the_title(); ?></h2>

                <?php the_post_thumbnail( 'large' ); ?>

                <?php the_excerpt(); ?>

                <a href="<?php esc_url (the_permalink()) ?>">learn more &rarr;</a>

                 
                <?php endwhile; ?>
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
