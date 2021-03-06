<?php do_action( 'wf_before_header' ); ?>
<header class="navbar navbar-default <?php do_action( 'wf_class_header' ); ?>" role="banner">

	<?php do_action( 'wf_open_header' ); ?>

	<div class="<?php do_action( 'wf_class_container' );
	do_action( 'class_container_navbar' ); ?> navbar-container">
		<div class="row navigation-wrap">
			<div class="navbar-header <?php do_action( 'wf_class_navbar_header' ); ?>">
				<?php
				//Load Mobile Navigation (Show Sidebar & BuddyPress Navigation)
				get_template_part( 'templates/header/mobile-navigation-left' );

				//Load the Branding/Logo
				get_template_part( 'templates/header/branding' );

				//Load the right Mobile Navigation (Navigation Menus)
				get_template_part( 'templates/header/mobile-navigation-right' );
				?>
			</div>

			<?php
			// This hook is used to add the navigation on the minimal layout.
			do_action( 'wf_before_header_navigation' );
			do_action( 'wf_after_header_navigation' );
			?>

		</div>
	</div>

	<?php
	// This load the full header
	do_action( 'wf_close_header' );
	?>
</header>
<?php do_action( 'wf_after_header' ); ?>
