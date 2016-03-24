<?php
/**
 *
 * The index.php file serves as the fall back template and default homepage for our theme.
 *
 * @since 1.0
 * @package WeFoster Framework
 */
?>

<?php get_template_part( 'header' ); ?>

<div id="main-content" class="main <?php do_action( 'class_main' ); ?>" role="main">

	<?php
	//Use to Load to Post Title, Page Titles & Archive Titles. see lib/layout/actions.php
	do_action( 'before_page_content' );
	?>

	<?php do_action( 'before_loop' ); ?>

	<?php if ( ! have_posts() ) : ?>

		<div class="alert alert-warning">

			<?php _e( 'Sorry, no results were found.', 'wefoster' ); ?>

		</div>

		<?php get_search_form(); ?>

	<?php endif; ?>


	<?php do_action( 'before_loop_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'templates/loops/content', get_post_type() ); ?>

	<?php endwhile; ?>

	<?php do_action( 'after_loop_content' ); ?>

	<?php if ( $wp_query->max_num_pages > 1 ) : ?>

		<nav class="post-nav">

			<ul class="pager">
				<li class="previous"><?php next_posts_link( __( '&larr; Older posts', 'wefoster' ) ); ?></li>
				<li class="next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'wefoster' ) ); ?></li>
			</ul>

		</nav>

	<?php endif; ?>

	<?php do_action( 'after_loop' ); ?>

</div><!-- /.main -->

<?php get_template_part( 'sidebar' ); ?>
<?php get_template_part( 'footer' ); ?>
