<?php
// Register Custom Taxonomy
function portfolio_cat_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Категории', 'Taxonomy General Name', 'ith' ),
    'singular_name'              => _x( 'Категория', 'Taxonomy Singular Name', 'ith' ),
    'menu_name'                  => __( 'Категория', 'ith' )
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'portfolio_cat', array( 'portfolio' ), $args );

}
add_action( 'init', 'portfolio_cat_taxonomy', 0 );


function services_cat_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Категории', 'Taxonomy General Name', 'ith' ),
    'singular_name'              => _x( 'Категория', 'Taxonomy Singular Name', 'ith' ),
    'menu_name'                  => __( 'Категории', 'ith' ),
    'all_items'                  => __( 'Категории', 'ith' )
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'services_cat', array( 'services' ), $args );

}
add_action( 'init', 'services_cat_taxonomy', 0 );