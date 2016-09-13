<?php
/**
 * Template part for displaying posts.
 *
 * @package Escutcheon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear single' ); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<div class="entry-meta">
			<?php escutcheon_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="entry-wrapper">
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php escutcheon_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
	<?php
	if (!isset($first_content)) {
		$first_content = FALSE;
	?>
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->
	<?php
	}
	?>
</article><!-- #post-## -->
