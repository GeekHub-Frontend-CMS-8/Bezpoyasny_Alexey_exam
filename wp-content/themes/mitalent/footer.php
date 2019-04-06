<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akad
 */

?>

<footer class="footer container">
    <div class="footer__top">
        <div class="footer__logo">
            <?php the_custom_logo(); ?>
        </div>
        <a class="footer__mail" href="mailto:alexey_b2007@ukr.net"><?php echo get_theme_mod('mailto'); ?></a>
    </div>
    <div class="footer__bottom">
        <p class="footer__bottom-copyright"><?php echo get_theme_mod('copyright'); ?></p>
        <nav class="social">
            <ul class="social__list">
                <li><a class="social__link" href="#"><?php echo get_theme_mod('footer-social-1'); ?></a></li>
                <li><a class="social__link" href="#"><?php echo get_theme_mod('footer-social-2'); ?></a></li>
                <li><a class="social__link" href="#"><?php echo get_theme_mod('footer-social-3'); ?></a></li>
                <li><a class="social__link" href="#"><?php echo get_theme_mod('footer-social-4'); ?></a></li>
            </ul>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>