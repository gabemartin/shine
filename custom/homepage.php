<?php

function create_FAQ_post_type() {
    register_post_type( 'FAQ',
        array(
            'labels' => array(
                'name' => 'FAQs',
                'singular_name' => 'FAQ',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New FAQ',
                'edit_item' => 'Edit FAQ',
                'new_item' => 'New FAQ',
                'view_item' => 'View FAQ',
                'search_items' => 'Search FAQs',
                'not_found' =>  'Nothing Found',
                'not_found_in_trash' => 'Nothing found in the Trash',
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array()
        )
    );
}
add_action( 'init', 'create_FAQ_post_type' );

//FAQ countries taxonomy
register_taxonomy("countries", array("FAQ"), array(
    "hierarchical" => false,
    "label" => "Countries",
    "singular_label" => "Country",
    "rewrite" => true
));


function create_Benefit_post_type() {
    register_post_type( 'Benefit',
        array(
            'labels' => array(
                'name' => 'Benefits',
                'singular_name' => 'Benefit',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Benefit',
                'edit_item' => 'Edit Benefit',
                'new_item' => 'New Benefit',
                'view_item' => 'View Benefit',
                'search_items' => 'Search Benefits',
                'not_found' =>  'Nothing Found',
                'not_found_in_trash' => 'Nothing found in the Trash',
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array()
        )
    );
}
add_action( 'init', 'create_Benefit_post_type' );

//Benefit countries taxonomy
register_taxonomy("countries", array("Benefit"), array(
    "hierarchical" => false,
    "label" => "Countries",
    "singular_label" => "Country",
    "rewrite" => true
));

function create_Global_post_type() {
    register_post_type( 'Global',
        array(
            'labels' => array(
                'name' => 'Globals',
                'singular_name' => 'Global',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Global',
                'edit_item' => 'Edit Global',
                'new_item' => 'New Global',
                'view_item' => 'View Global',
                'search_items' => 'Search Globals',
                'not_found' =>  'Nothing Found',
                'not_found_in_trash' => 'Nothing found in the Trash',
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array()
        )
    );
}
add_action( 'init', 'create_Global_post_type' );

//Global countries taxonomy
register_taxonomy("countries", array("Global"), array(
    "hierarchical" => false,
    "label" => "Countries",
    "singular_label" => "Country",
    "rewrite" => true
));

function create_Package_post_type() {
    register_post_type( 'Package',
        array(
            'labels' => array(
                'name' => 'Packages',
                'singular_name' => 'Package',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Package',
                'edit_item' => 'Edit Package',
                'new_item' => 'New Package',
                'view_item' => 'View Package',
                'search_items' => 'Search Packages',
                'not_found' =>  'Nothing Found',
                'not_found_in_trash' => 'Nothing found in the Trash',
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array()
        )
    );
}
add_action( 'init', 'create_Package_post_type' );

//Package countries taxonomy
register_taxonomy("countries", array("Package"), array(
    "hierarchical" => false,
    "label" => "Countries",
    "singular_label" => "Country",
    "rewrite" => true
));


