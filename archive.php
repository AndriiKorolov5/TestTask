<?php
/*
    Template Name: Arhives
*/
?>
<?php get_header();?>
                <?php 
                $args = array(
                'post_type' => $_GET['type_of_post'],
                'orderby' => 'date',
                );
                $query = new WP_Query( $args ); ?>
                <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog__post post">
                        <div class="post__image-wrap">
                            <img class="post__image" src="<?php the_field('post_image'); ?>" alt="Post image 1">
                        </div>
                        <div class="post__desc">
                            <h5 class="post__head"><?php the_title(); ?></h5>
                            <hr class="post__line">
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
<?php get_footer();?>
