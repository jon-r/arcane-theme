<?php

add_action( 'init', 'create_menus' );
function create_menus() {
  register_post_type( 'food_menus',
    array(
      'labels' => [
        'name' => __( 'Menus' ),
        'singular_name' => __( 'Menu' )
      ],
      'public' => true,
      'supports' => [
        'title'
      ],
      'menu_icon' => 'dashicons-book',
    )
  );
}
