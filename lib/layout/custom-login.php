<?php
/**
 * Enqueue our login stylesheet
 *
 * @since 1.0.0
 *
 */
function wff_login_style() {
	wp_enqueue_style( 'wff_login-styles', get_template_directory_uri() . '/assets/css/login-style.css' );
}

add_action( 'login_enqueue_scripts', 'wff_login_style' );

/**
 * Add our Custom Logo
 *
 * @since 1.0.0
 *
 */
function wff_login_logo() {
	$logo_type = get_theme_mod( 'wf_plus_logo_type', 'default' );
	echo '<style type="text/css">
    h1 a {
      background-image: url(' . WEFOSTER_FULL_LOGO_INVERSE . ') !important;
      background-size: 119%;
      display: inline-block !important;
      width: 300px !important;
      background-size: 99% !important;
    }
  </style>';
}

add_action( 'login_head', 'wff_login_logo' );

/**
 * Filter the login url
 *
 * @since 1.0.0
 *
 */
function wff_login_url() {
	return get_home_url();
}

add_filter( 'login_headerurl', 'wff_login_url' );

/**
 * Filter the login name.
 *
 * @since 1.0.0
 *
 */
function wff_login_name() {
	return get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
}

add_filter( 'login_headertitle', 'wff_login_name' );
