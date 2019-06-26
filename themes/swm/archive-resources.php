<?php
/**
 * The template for displaying all pages.
 * Template Name: Resources
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <header class="entry-header">
            <h3>Resources</h3>
            <?php while (have_posts()) : the_post(); ?>


            </header>
        <?php endwhile; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content resourcesContainer">

                <?php
                $resources_video_featured_args = array(
                    'post_type' => 'resources',
                    'posts_per_page' => '1',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'resource_category',
                            'field' => 'slug',
                            'terms' => 'videos',
                        )
                    )
                );
                $resources_video_featured_alternate_args = array(
                    'post_type' => 'resources',
                    'posts_per_page' => '1',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'resource_category',
                            'field' => 'slug',
                            'terms' => 'videos',
                        )
                    )
                ); ?>
                <?php
                $resources_videos_featured_args = array(
                    'post_type' => 'resources',
                    'posts_per_page' => '3',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'resource_category',
                            'field' => 'slug',
                            'terms' => 'videos',
                        )
                    )
                ); ?>
                <?php
                $resources_blogs_featured_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                ); ?>
                <?php
                $resources_podcasts_featured_args = array(
                    'post_type' => 'resources',
                    'posts_per_page' => '3',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'resource_category',
                            'field' => 'slug',
                            'terms' => 'podcasts',
                        )
                    )
                ); ?>
                <?php
                $resources_ebook_featured_args = array(
                    'post_type' => 'resources',
                    'posts_per_page' => '1',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'resource_category',
                            'field' => 'slug',
                            'terms' => 'ebooks',
                        )
                    )
                );
                ?>
                <article class="resourcesFeaturedContainer">
                    <section class="featuredVideoContainer">    
                    <?php
                    $resources_video_featured_query = new WP_Query($resources_video_featured_args);
                    while ($resources_video_featured_query->have_posts()) : $resources_video_featured_query->the_post(); ?>
                        <?php $video_sharing_link = get_cfc_field('videoattributes', 'featured-video-option'); ?>
                        <?php if ($video_sharing_link == 'yes') { ?>
                            <div class="singleFeaturedVideoContainer">
                                <?php the_cfc_field('videoattributes', 'video-sharing-link'); ?>
                            </div>
                        <?php }
                    endwhile ?>
                    <?php
                    $resources_video_featured_alternate_query = new WP_Query($resources_video_featured_alternate_args);
                    while ($resources_video_featured_alternate_query->have_posts()) : $resources_video_featured_alternate_query->the_post(); ?>
                        <?php $video_sharing_link = get_cfc_field('videoattributes', 'featured-video-option'); ?>
                        <?php if ($video_sharing_link == 'no') { ?>
                            <div class="singleFeaturedVideoContainer">
                                <?php the_cfc_field('videoattributes', 'video-sharing-link'); ?>
                            </div>
                        <?php }
                    endwhile ?>
                        </section>
                        <section class="featuredVideosContainer"> 
                            <h5>Featured Videos</h5>
                       
                
                            <div class='test'>
                    <?php 
                   
                    $resources_videos_featured_query = new WP_Query($resources_videos_featured_args);
                    while ($resources_videos_featured_query->have_posts()) : $resources_videos_featured_query->the_post();
                        ?>
                        <div class="singleFeaturedVideosContainer">
                        <?php the_cfc_field('videoattributes', 'video-sharing-link'); ?>
                        </div>
                    <?php endwhile; ?>
                        </div>
                        </section>

                        <section class="featuredBlogContainer">
                    <h5>Featured Blogs</h5>
                    <div class="test2">
                    <?php
                    $resources_blogs_featured_query = new WP_Query($resources_blogs_featured_args);
                    while ($resources_blogs_featured_query->have_posts()) : $resources_blogs_featured_query->the_post();
                        ?>
                        <div class="singleFeaturedBlogContainer">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                    <?php endwhile; ?>
                        </div>
                        </section>
                        <section class="featuredPodcastsContainer">
                    <h5>Featured Podcasts</h5>
                    <?php
                    $resources_podcasts_featured_query = new WP_Query($resources_podcasts_featured_args);
                    while ($resources_podcasts_featured_query->have_posts()) : $resources_podcasts_featured_query->the_post();
                        ?>
                        <div class="singleFeaturedPodcastsContainer">
                        <?php the_cfc_field('podcastattributes', 'podcast-sources-link');
                        ?>
                        </div>
                    <?php endwhile; ?>
                        </section>

                        <section class="featuredEbookContainer">
                    <h5>E-Book</h5>

                    <?php
                    $resources_ebook_featured_query = new WP_Query($resources_ebook_featured_args);
                    while ($resources_ebook_featured_query->have_posts()) : $resources_ebook_featured_query->the_post();
                        ?>


                    <div class="singleFeaturedEbookContainer">
                        <a href="<?php the_cfc_field('ebooksattributes', 'ebook-sources-link'); ?>"><img src='<?php the_cfc_field('ebooksattributes', 'ebook-thumbnail-image'); ?>'></a>
                        <?php the_excerpt(); ?>
                    </div>
                    <?php endwhile; ?>

                    </article>

                    <article class="resourcesEbooksContainer">
                        

                        <?php
                        $resources_ebook_args = array(
                            'post_type' => 'resources',
                            'posts_per_page' => '1',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'resource_category',
                                    'field' => 'slug',
                                    'terms' => 'ebooks',
                                )
                            )
                        );
                        ?>
                        
                        <?php
                        $resources_ebook_query = new WP_Query($resources_ebook_args);
                        while ($resources_ebook_query->have_posts()) : $resources_ebook_query->the_post();
                            ?>
                            <div class="singleEbooksContainer">
                                
                            <img src="<?php the_cfc_field('ebooksattributes', 'ebook-thumbnail-image'); ?>">
                            <div class="ebooksMeta">
                            <h3><?php the_cfc_field('ebooksattributes', 'ebook-post-title'); ?></h3>
                            <?php the_cfc_field('ebooksattributes', 'ebook-description'); ?>
                            <a class="downloadButtonLink" href="<?php the_cfc_field('ebooksattributes', 'ebook-sources-link'); ?>"><button class="downloadButton" type="button">Download</button></a>
                            </div>
                    </div>
                        <?php endwhile; ?>
               
                    </article>

                    <article class="resourcesVideoContainer">
                        <?php
                        $resources_video_args = array(
                            'post_type' => 'resources',
                            'posts_per_page' => '7',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'resource_category',
                                    'field' => 'slug',
                                    'terms' => 'videos',
                                )
                            )
                        );
                        ?>

                        <?php
                        $resources_video_query = new WP_Query($resources_video_args);
                        while ($resources_video_query->have_posts()) : $resources_video_query->the_post(); ?>
                        <div class="singleResourcesVideoContainer">
                        <?php   the_cfc_field('videoattributes', 'video-sharing-link'); ?>
                        <?php   the_title(); ?>
                        <?php   the_cfc_field('videoattributes', 'video-description'); ?>
                        </div>
                        <?php endwhile; ?>
                    </article>

                    <article class="resourcesPodcastsContainer">
                    
                        <?php
                        $resources_podcast_args = array(
                            'post_type' => 'resources',
                            "posts_per_page" => '12',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'resource_category',
                                    'field' => 'slug',
                                    'terms' => 'podcasts',
                                )
                            )
                        );
                        ?>
                        <?php
                        $resources_podcast_query = new WP_Query($resources_podcast_args);
                        while ($resources_podcast_query->have_posts()) : $resources_podcast_query->the_post(); ?>
                        <div class="singleResourcesPodcastsContainer">
                            <?php the_cfc_field('podcastattributes', 'podcast-sources-link'); ?>
                        </div>
                        <?php endwhile; ?>
                    </article>

                    <article class="resourcesBlogContainer">
                      
                        
                        <?php
                        $resources_blog_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '10',
                        );
                        ?>



                        <?php
                        $resources_blog_query = new WP_Query($resources_blog_args);
                        while ($resources_blog_query->have_posts()) : $resources_blog_query->the_post();
                            ?>

                        <div class="singleResourcesBlogContainer">
                            <?php

                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else { ?>
                                <img src="<?php echo wp_get_attachment_url('760'); ?>"> <!-- FIND DYNAMIC PATH METHOD, NEEDS WORK -->
                            <?php } ?>


                            <?php $categories = get_the_category(); ?>
                            <?php if (!empty($categories)) {
                                echo esc_html($categories[0]->name);
                            } ?>

                            <?php the_title();  ?>
                        </div>
                        <?php endwhile; ?>

                    </article>

            </div><!-- .entry-content -->
        </article><!-- #post-## -->



    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>