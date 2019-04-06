<?php
/* Template Name: Home page*/
?>

<?php get_header(); ?>
<section class="talent container">
    <div class="talent__categories">
        <?php wp_list_categories('show_count&title_li='); ?>
    </div>
    <div class="talent__img-container">
        <?php
        $args = array('post_type' => array('posts', 'talent'));
        query_posts($args);
        while (have_posts()) :
        the_post(); ?>
        <div class="talent__img-wrap">
            <img class="talent__img" src="<?php echo the_post_thumbnail(); ?>
                <div class=" talent__overlay">
            <h3 class="talent__title"><?php echo the_title(); ?></h3>
            <?php echo the_content(); ?>
        </div>
    </div>

    <?php endwhile;
    wp_reset_query(); ?>
    </div>
    <a class="button" href="#">explore more</a>
</section>
<section class="news container">
    <h2 class="title"><?php echo get_theme_mod('news-title'); ?></h2>
    <div class="news__post-top-list">
        <?php
        $args = array('post_type' => array('posts', 'news'),
            'posts_per_page' => 3);
        query_posts($args);
        while (have_posts()) :
            the_post(); ?>
            <div class="news__post-top-item">
                <div class="news__post-top-img-wrap">
                    <img class="news__post-top-img" src="<?php echo the_post_thumbnail(); ?>
                </div>
                <div class=" news__post-top-content">
                    <a class="permalink" href="<?php echo get_the_permalink(); ?>">
                        <h3 class="news__post-top-title"><?php echo the_title(); ?></h3>
                    </a>
                    <p class="news__post-top-date">
                        <time><?php echo the_date(); ?></time>
                    </p>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
    <div class="news__post-bottom">
        <div class="news__post-bottom-left">
            <div class="news__post-bottom-left-top">
                <?php
                $args = array('post_type' => array('posts', 'news'),
                    'posts_per_page' => 1);
                query_posts($args);
                while (have_posts()) :
                the_post(); ?>
                <div class="news__post-bottom-left-top-content">
                    <a class="permalink" href="<?php echo get_the_permalink(); ?>">
                        <h3 class="news__post-bottom-left-top-title"><?php echo the_title(); ?></h3>
                    </a>
                    <p class="news__post-bottom-left-top-date">
                        <time><?php echo the_date(); ?></time>
                    </p>
                </div>
                <div class="news__post-bottom-left-top-img-wrap">
                    <img class="news__post-bottom-left-top-img" src="<?php echo the_post_thumbnail(); ?>
                    </div>
                <?php endwhile;
                    wp_reset_query(); ?>
            </div>
            <div class=" news__post-bottom-left-bottom">
                    <div class="news__post-bottom-left-bottom-item">
                        <?php
                        $args = array('post_type' => array('posts', 'news'),
                            'posts_per_page' => 1);
                        query_posts($args);
                        while (have_posts()) :
                            the_post(); ?>
                            <div class="news__post-bottom-right-item">
                                <div class="news__post-bottom-left-bottom-img-wrap">
                                    <img class="news__post-bottom-right-img" src="<?php echo the_post_thumbnail(); ?>
                                </div>
                                <div class=" news__post-bottom-right-content">
                                    <a class="permalink" href="<?php echo get_the_permalink(); ?>">
                                        <h3 class="news__post-bottom-right-title"><?php echo the_title(); ?></h3>
                                    </a>
                                    <p class="news__post-bottom-right-date">
                                        <time><?php echo the_date(); ?></time>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    </div>
                    <div class="news__post-bottom-left-bottom-item">
                        <?php
                        $args = array('post_type' => array('posts', 'news-video'),
                            'posts_per_page' => 1);
                        query_posts($args);
                        while (have_posts()) :
                        the_post(); ?>
                            <div class="news__video">
                                <?php echo the_content(); ?>
                            </div>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    </div>
                </div>
            </div>
            <div class="news__post-bottom-right slider">
                <?php
                $args = array('post_type' => array('posts', 'news'),
                    'posts_per_page' => 5);
                query_posts($args);
                while (have_posts()) :
                    the_post(); ?>
                    <div class="news__post-bottom-right-item slider__item">
                        <div class="news__post-bottom-right-img-wrap">
                            <img class="news__post-bottom-right-img" src="<?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class=" news__post-bottom-right-content">
                            <a class="permalink" href="<?php echo get_the_permalink(); ?>">
                                <h3 class="news__post-bottom-right-title"><?php echo the_title(); ?></h3>
                            </a>
                            <p class="news__post-bottom-right-date">
                                <time><?php echo the_date(); ?></time>
                            </p>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
        </div>
</section>

<?php get_footer(); ?>

