<?php
/**
 * The template for displaying archive pages
 *
 */

get_header();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
                <h2><?php echo the_title(); ?></h2>
	<?php endwhile; ?>


<?php else : ?>

<?php endif; ?>

<?php
get_footer();
