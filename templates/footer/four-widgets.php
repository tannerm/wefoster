<?php if ( is_active_sidebar( 'footer_widget_one' ) ) : ?>
	<!-- footer widgets -->
	<div class="col-sm-3 <?php do_action( 'wf_footer_widget_class' ); ?>" id="footer-widget-one">
		<?php
		dynamic_sidebar( 'footer_widget_one' );
		?>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'footer_widget_two' ) ) : ?>
	<!-- footer widgets -->
	<div class="col-sm-3 <?php do_action( 'wf_footer_widget_class' ); ?>" id="footer-widget-two">
		<?php
		dynamic_sidebar( 'footer_widget_two' );
		?>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'footer_widget_three' ) ) : ?>
	<!-- footer widgets -->
	<div class="col-sm-3 <?php do_action( 'wf_footer_widget_class' ); ?>" id="footer-widget-three">
		<?php
		dynamic_sidebar( 'footer_widget_three' );
		?>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'footer_widget_four' ) ) : ?>
	<!-- footer widgets -->
	<div class="col-sm-3 <?php do_action( 'wf_footer_widget_class' ); ?>" id="footer-widget-four">
		<?php
		dynamic_sidebar( 'footer_widget_four' );
		?>
	</div>
<?php endif; ?>
