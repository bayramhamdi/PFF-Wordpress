<?php

$wp_customize->add_section(
	'mobile_menu_builder--menu-3', array(
		'priority' => 10,
		'title' => __( 'Menu 3', 'mobile-menu-builder' ),
		'panel'  => 'mobile_menu_builder_panel',
	)
);


$wp_customize->add_setting( 'mobile_menu_builder_customizer[menu-3-icon]', array(
	'type'      	=> 'option',
    'capability' 	=> 'edit_theme_options',
    'transport' 	=> 'postMessage',
    'default'       => 'ion-ios-mail',
));

$wp_customize->add_control(new TM_Customize_Iconpicker_Control($wp_customize, 'mobile_menu_builder_customizer[menu-3-icon]', array(
    'label'         => __('Select Icon', 'mobile-menu-builder'),
    'description'   => __('Choose from FontAwesome icon list.', 'mobile-menu-builder'),
    'section'       => 'mobile_menu_builder--menu-3',
    'settings'      => 'mobile_menu_builder_customizer[menu-3-icon]',
    'priority'      => 10,
)));

$wp_customize->add_setting(
	'mobile_menu_builder_customizer[menu-3-label]', array(
		'type'      		=> 'option',
		'capability' 		=> 'edit_theme_options',
		'transport' 		=> 'postMessage',
        'default'           => __( 'Contact Us', 'mobile-menu-builder' ),
	)
);

$wp_customize->add_control(
	'mobile_menu_builder_customizer[menu-3-label]', array(
        'settings' 		=> 'mobile_menu_builder_customizer[menu-3-label]',
        'label'   		=> __( 'Menu Label', 'easy-login-styler' ),
        'description'   => __( 'Add your menu text label.', 'mobile-menu-builder' ),
        'section' 		=> 'mobile_menu_builder--menu-3',
        'type'    		=> 'text',
        'priority'      => 20,
));

$wp_customize->add_setting(
    'mobile_menu_builder_customizer[menu-3-link]', array(
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
    )
);

$wp_customize->add_control(
    'mobile_menu_builder_customizer[menu-3-link]', array(
        'settings'      => 'mobile_menu_builder_customizer[menu-3-link]',
        'label'         => __( 'Link', 'mobile-menu-builder' ),
        'description'   => __( 'Add the URL where you want the link to point to after click.', 'mobile-menu-builder' ),
        'section'       => 'mobile_menu_builder--menu-3',
        'type'          => 'text',
        'priority'      => 30,
));

$wp_customize->add_setting(
    'mobile_menu_builder_customizer[menu-3-popup]', array(
        'default'           => false,
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Toggle_Control(
        $wp_customize, 'mobile_menu_builder_customizer[menu-3-popup]', array(
            'label'         => __( 'Open Popup', 'mobile-menu-builder' ),
            'description'   => __( 'Trigger popup open when user click this menu.' ),
            'section'       => 'mobile_menu_builder--menu-3',
            'settings'      => 'mobile_menu_builder_customizer[menu-3-popup]',
            'priority'      => 40,
        )
    )
);

$wp_customize->add_setting(
    'mobile_menu_builder_customizer[rate-4]', array(
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
    )
);

$wp_customize->add_control(
  new Mobile_Menu_builder_Heading_Control( $wp_customize, 'mobile_menu_builder_customizer[rate-4]',
  array(
    'description'   => sprintf( esc_html__( 'Loving Mobile Menu Builder? Give us %s5-star rating%s to help spread the words. Thank you very much!', 'mobile-menu-builder' ), '<a href="https://wordpress.org/support/plugin/mobile-menu-builder/reviews/?filter=5" target="_blank">', '</a>' ),
    'settings'      => 'mobile_menu_builder_customizer[rate-4]',
    'section'       => 'mobile_menu_builder--menu-3',
    'priority'      => 500,
) ) );

$wp_customize->selective_refresh->add_partial( 'mobile_menu_builder_customizer[menu-3-label]', array(
    'selector'            => '.mobile-menu-builder--link-3',
    'container_inclusive' => true,
    'fallback_refresh'    => false, // Prevents refresh loop when document does not contain .cta-wrap selector. This should be fixed in WP 4.7.
) );

?>