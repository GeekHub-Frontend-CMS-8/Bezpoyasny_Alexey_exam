<?php

function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'footer' , array(
        'title'      => __( 'Footer', 'mitalent' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'mailto' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mailto', array(
        'label'        => __( 'mailto', 'mitalent' ),
        'section'    => 'footer',
        'settings'   => 'mailto',
    ) ) );

    $wp_customize->add_setting( 'copyright' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright', array(
        'label'        => __( 'copyright', 'mitalent' ),
        'section'    => 'footer',
        'settings'   => 'copyright',
    ) ) );

    $wp_customize->add_setting( 'footer-social-1' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-social-1', array(
        'label'        => __( 'social-1', 'mitalent' ),
        'section'    => 'footer',
        'settings'   => 'footer-social-1',
    ) ) );
    $wp_customize->add_setting( 'footer-social-2' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-social-2', array(
        'label'        => __( 'social-2', 'mitalent' ),
        'section'    => 'footer',
        'settings'   => 'footer-social-2',
    ) ) );
    $wp_customize->add_setting( 'footer-social-3' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-social-3', array(
        'label'        => __( 'social-3', 'mitalent' ),
        'section'    => 'footer',
        'settings'   => 'footer-social-3',
    ) ) );
    $wp_customize->add_setting( 'footer-social-4' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-social-4', array(
        'label'        => __( 'social-4', 'mitalent' ),
        'section'    => 'footer',
        'settings'   => 'footer-social-4',
    ) ) );

    $wp_customize->add_section( 'news' , array(
        'title'      => __( 'News', 'mitalent' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'news-title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-title', array(
        'label'        => __( 'news-title', 'mitalent' ),
        'section'    => 'news',
        'settings'   => 'news-title',
    ) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );