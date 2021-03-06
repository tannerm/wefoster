<?php
/**
 * The footer of our theme.
 *
 * This is the template that closes the <div id="main-content" class="main"> and end our markup for the theme
 *
 * @since 1.0
 *
 * @package WeFoster Framework
 */
?>
</div><!-- /.content -->
</div><!-- /.wrap -->

<?php do_action( 'wf_before_footer' ); ?>

<footer class="content-info <?php do_action( 'wf_class_footer' ); ?>" role="contentinfo">


	<div class="<?php do_action( 'wf_class_container' );
	do_action( 'wf_class_container_footer' ); ?>">

		<?php do_action( 'wf_open_footer' ); ?>

		<div class="row">

			<?php get_template_part( 'templates/footer/' . wff_get_footer_type() ); ?>

			<div class="col-sm-12 bottom-links text-center">

				<?php if ( get_theme_mod( 'wf_plus_footer_text', 'default' ) == 'default' ): ?>

					<?php printf( __( "Powered by WordPress. Theme developed by %s", 'wefoster' ), '<a href="http://wefoster.co">WeFoster</a>' ); ?>

				<?php else: ?>

					<?php $footer_copyright = get_theme_mod( 'wf_plus_footer_text' ) ?>

					<?php // Data validation: Allow anchor and strong tags
					echo wp_kses( $footer_copyright,
					              array(
						              'strong' => array(),
						              'a'      => array(
							              'href'   => true,
							              'rel'    => true,
							              'rev'    => true,
							              'name'   => true,
							              'target' => true,
						              )
					              )
					);
					?>


				<?php endif; ?>

			</div>


			<?php do_action( 'wf_close_footer' ); ?>

		</div>

</footer>

<!-- layout wrapper -->
</div>
<?php do_action( 'wf_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
