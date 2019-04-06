<?php
function create_post_type()
{
    register_post_type('testimonials',
        array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('testimonials'),
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



function getTestimonials() {
    $testimonials = array(
        'posts_per_page' => 8,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'testimonials',
    );

    return get_posts($testimonials);
}