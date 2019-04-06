<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akad
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title(); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body>
<header class="header container">

    <nav class="header__nav">
        <div class="menu">
            <ul id="menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'menu_class' => 'header__menu')); ?>
            </ul>
        </div>
        <div class="header__logo-wrap">
            <?php the_custom_logo(); ?>
        </div>
        <i class="fas fa-search"></i>
    </nav>
</header>