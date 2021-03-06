<?php
/**
 * Register our Customizer Panels.
 *
 * @since 1.0.0
 *
 */
function wf_plus_register_panels( $wp_customize ) {
	/**
	 * Add Stylekit Panel
	 */
	$wp_customize->add_panel( 'wf_plus_stylekit_panel', array(
		'priority'    => 10,
		'title'       => __( 'Designs', 'wefoster' ),
		'description' => __( 'Carefully crafted designs', 'wefoster' ),
	) );

	/**
	 * Add Layout Panel
	 */
	$wp_customize->add_panel( 'wf_plus_appearance_panel', array(
		'priority'    => 10,
		'title'       => __( 'Appearance', 'wefoster' ),
		'description' => __( 'Fine grained control over the appearance of your site', 'wefoster' ),
	) );

	/**
	 * Add Typography Panel
	 */
	$wp_customize->add_panel( 'wf_plus_typography_panel', array(
		'priority'    => 10,
		'title'       => __( 'Typography', 'wefoster' ),
		'description' => __( 'Change the font display settings.', 'wefoster' ),
	) );

	/**
	 * Add BuddyPress Panel
	 */
	$wp_customize->add_panel( 'wf_plus_buddypress_panel', array(
		'priority'    => 10,
		'title'       => __( 'BuddyPress', 'wefoster' ),
		'description' => __( 'Customize the look of your BuddyPress pages', 'wefoster' ),
	) );
	//More code to come

	/**
	 * Add Homepage Panel
	 */
	$wp_customize->add_panel( 'wf_plus_homepage_panel', array(
		'priority'    => 10,
		'title'       => __( 'Homepage', 'wefoster' ),
		'description' => __( 'Change how your homepage looks', 'wefoster' ),
	) );

	/**
	 * Add BuddyPress Panel
	 */
	$wp_customize->add_panel( 'wf_plus_wordpress_panel', array(
		'priority'    => 10,
		'title'       => __( 'Posts & Pages', 'wefoster' ),
		'description' => __( 'Change how your posts and pages look', 'wefoster' ),
	) );
	//More code to come

}

add_action( 'customize_register', 'wf_plus_register_panels' );
