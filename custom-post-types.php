<?php
/*
// ========= Custom Post Types - Case Studies ============
*/

add_action( 'init', 'custom_post_type_case_studies', 0 );

function custom_post_type_case_studies() {

    $labels = array(
        'name'                => _x( 'Case Studies', 'Post Type General Name',  'rossross' ),
        'singular_name'       => _x( 'Case Study',  'Post Type Singular Name', 'rossross' ),
        'menu_name'           => __( 'Case Study',         'rossross' ),
        'parent_item_colon'   => __( 'Parent Case Study',  'rossross' ),
        'all_items'           => __( 'All Case Studies',   'rossross' ),
        'view_item'           => __( 'View Case Study',    'rossross' ),
        'add_new_item'        => __( 'Add New Case Study', 'rossross' ),
        'add_new'             => __( 'Add Case Study',     'rossross' ),
        'edit_item'           => __( 'Edit Case Study',    'rossross' ),
        'update_item'         => __( 'Update Case Study',  'rossross' ),
        'search_items'        => __( 'Search Case Study',  'rossross' ),
        'not_found'           => __( 'Not Found',          'rossross' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'rossross' )
    );

    $args = array(
        'label'               => __( 'case_studies', 'rossross' ),
        'description'         => __( 'Case Study', 'rossross' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail' ),
        'menu_icon'           => 'dashicons-index-card',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'case_studies', $args );
}
