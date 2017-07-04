<?php

// slide post type
function slide_post_type() {

    $labels = array(
        'name'                  => _x( 'Slajdy', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Slajd', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Slajdy', 'text_domain' ),
        'name_admin_bar'        => __( 'Slajdy', 'text_domain' ),
        'archives'              => __( 'Wszystkie slajdy', 'text_domain' ),
        'parent_item_colon'     => __( 'Slajd', 'text_domain' ),
        'all_items'             => __( 'Wszystkie slajdy', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj nowy slajd', 'text_domain' ),
        'add_new'               => __( 'Dodaj nowy slajd', 'text_domain' ),
        'new_item'              => __( 'Dodaj nowy slajd', 'text_domain' ),
        'edit_item'             => __( 'Edytuj slajd', 'text_domain' ),
        'update_item'           => __( 'Aktualizuj slajd', 'text_domain' ),
        'view_item'             => __( 'Zobacz slajd', 'text_domain' ),
        'search_items'          => __( 'Wyszukaj slajd', 'text_domain' ),
        'not_found'             => __( 'Nie znaleziono slajdów', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
        'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
        'set_featured_image'    => __( 'Ustaw wyróżniony obrazek', 'text_domain' ),
        'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'text_domain' ),
        'use_featured_image'    => __( 'Użyj jako wyróżniony obrazek', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $rewrite = array(
        'slug'                  => 'slajdy',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Slajd', 'text_domain' ),
        'description'           => __( 'Opis slajdu', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-format-image',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'slide', $args );

}

add_action( 'init', 'slide_post_type', 0 );

// service post type
function services_post_type() {

    $labels = array(
        'name'                  => _x( 'Usługi', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Usługa', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Usługi', 'text_domain' ),
        'name_admin_bar'        => __( 'Usługi', 'text_domain' ),
        'archives'              => __( 'Wszystkie usługi', 'text_domain' ),
        'parent_item_colon'     => __( 'Usługa', 'text_domain' ),
        'all_items'             => __( 'Wszystkie usługi', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj nową usługę', 'text_domain' ),
        'add_new'               => __( 'Dodaj nową usługę', 'text_domain' ),
        'new_item'              => __( 'Dodaj nową usługę', 'text_domain' ),
        'edit_item'             => __( 'Edytuj usługę', 'text_domain' ),
        'update_item'           => __( 'Aktualizuj usługę', 'text_domain' ),
        'view_item'             => __( 'Zobacz usługę', 'text_domain' ),
        'search_items'          => __( 'Wyszukaj usługę', 'text_domain' ),
        'not_found'             => __( 'Nie znaleziono usług', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
        'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
        'set_featured_image'    => __( 'Ustaw wyróżniony obrazek', 'text_domain' ),
        'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'text_domain' ),
        'use_featured_image'    => __( 'Użyj jako wyróżniony obrazek', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $rewrite = array(
        'slug'                  => 'uslugi',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Uslugi', 'text_domain' ),
        'description'           => __( 'Opis usługi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'editor' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-tools',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'services', $args );

}

add_action( 'init', 'services_post_type', 0 );

// realizations post type
function realizations_post_type() {

    $labels = array(
        'name'                  => _x( 'Realizacje', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Realizacje', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Realizacje', 'text_domain' ),
        'name_admin_bar'        => __( 'Realizacje', 'text_domain' ),
        'archives'              => __( 'Archiwum Realizacji', 'text_domain' ),
        'parent_item_colon'     => __( 'Rodzic Realizacji:', 'text_domain' ),
        'all_items'             => __( 'Wszystkie Realizacje', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj nowe Realizacje', 'text_domain' ),
        'add_new'               => __( 'Dodaj nowe', 'text_domain' ),
        'new_item'              => __( 'Nowe Realizacje', 'text_domain' ),
        'edit_item'             => __( 'Edytuj Realizacje', 'text_domain' ),
        'update_item'           => __( 'Zaaktualizuj Realizacje', 'text_domain' ),
        'view_item'             => __( 'Zobacz Realizacje', 'text_domain' ),
        'search_items'          => __( 'Szukaj Realizacji', 'text_domain' ),
        'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
        'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
        'set_featured_image'    => __( 'Ustaw wyróżniony obrazek', 'text_domain' ),
        'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'text_domain' ),
        'use_featured_image'    => __( 'Użyj jako wyróżniony obrazek', 'text_domain' ),
        'insert_into_item'      => __( 'Wstaw do Realizacji', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Wgrano do Realizacji', 'text_domain' ),
        'items_list'            => __( 'Lista Realizacji', 'text_domain' ),
        'items_list_navigation' => __( 'Lista Realizacji', 'text_domain' ),
        'filter_items_list'     => __( 'Filtruj Realizacje', 'text_domain' ),
    );

    $args = array(
        'label'                 => __( 'Realizacje', 'text_domain' ),
        'description'           => __( 'Post type used for site realizations', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type( 'realizations', $args );

}

add_action( 'init', 'realizations_post_type', 0 );

?>