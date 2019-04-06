<?php
function create_post_type()
{
    register_post_type('talent',
        array(
            'labels' => array(
                'name' => __('Talent'),
                'singular_name' => __('talent'),
                'add_new' => __('Add new'),
                'add_new_item' => __('Add new'),
                'edit_item' => __('Edit')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => false,
            'taxonomies'  => array( 'category' ),
            'supports' => array( 'title',  'editor', 'thumbnail', 'excerpts', 'revisions'),
        )
    );

    register_post_type('news',
        array(
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('news'),
                'add_new' => __('Add new'),
                'add_new_item' => __('Add new'),
                'edit_item' => __('Edit')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => false,
            'taxonomies'  => array( 'category' ),
            'supports' => array( 'title',  'editor', 'thumbnail', 'excerpts', 'revisions'),
        )
    );

    register_post_type('news-video',
        array(
            'labels' => array(
                'name' => __('News-video'),
                'singular_name' => __('news-video'),
                'add_new' => __('Add new'),
                'add_new_item' => __('Add new'),
                'edit_item' => __('Edit')
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => false,
            'taxonomies'  => array( 'category' ),
            'supports' => array( 'title',  'editor', 'thumbnail', 'excerpts', 'revisions'),
        )
    );
}
add_action( 'init', 'create_post_type' );



function getTalent() {
    $talent = array(
        'posts_per_page' => 8,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'talent',
    );

    return get_posts($talent);
}



function getNews() {
    $news = array(
        'posts_per_page' => 3,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'news',
    );

    return get_posts($news);
}

function getNews_video() {
    $newsVideo = array(
        'posts_per_page' => 3,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'news-video',
    );

    return get_posts($newsVideo);
}