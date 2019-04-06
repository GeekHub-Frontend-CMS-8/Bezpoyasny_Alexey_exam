<?php

function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'contact-us' , array(
        'title'      => __( 'contact-us', 'akad' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'contact-us-title' , array(
        'default'     => 'Title',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-us-title', array(
        'label'        => __( 'Title', 'akad' ),
        'section'    => 'contact-us',
        'settings'   => 'contact-us-title',
    ) ) );

}
add_action( 'customize_register', 'mytheme_customize_register' );