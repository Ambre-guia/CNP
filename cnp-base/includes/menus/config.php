<?php

add_action( 'init', 'my_register_menus' );

function my_register_menus()
{
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ),
          'menu-lateral-1' => __( 'Menu 1' ),
          'menu-lateral-2' => __( 'Menu 2' ),
          'menu-lateral-3' => __( 'Menu 3' ),
          'menu-lateral-4' => __( 'Menu 4' ),
          'footer-menu' => __( 'Footer Menu' ),
          )
  );
}