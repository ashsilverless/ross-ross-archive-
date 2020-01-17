<?php
/*
// ========= Custom Taxonomies - Case Studies ============
*/

add_action( 'init', 'taxonomy_type', 0 );

function taxonomy_type() {

    $labels = array(
        'name'              => _x( 'Type', 'taxonomy general name' ),
        'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Destination'   ),
        'all_items'         => __( 'All Types'     ),
        'parent_item'       => __( 'Parent Type'   ),
        'parent_item_colon' => __( 'Parent Type:'  ),
        'edit_item'         => __( 'Edit Type'     ),
        'update_item'       => __( 'Update Type'   ),
        'add_new_item'      => __( 'Add New Type'  ),
        'new_item_name'     => __( 'New Type Name' ),
        'menu_name'         => __( '- Types'         )
    );

    register_taxonomy( 'type', array( 'case_studies' ), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'type', 'hierarchical' => true )
    ));
}
