<?php

function change_menu_label()
{
  global $menu;
  $menu[5][0] = 'おすすめ小説';
  $menu[5][6] = 'dashicons-edit-large';
}
add_action('admin_menu', 'change_menu_label');

// function debug_gvar(){
//   global $menu;

//   echo('<pre>');
//   var_dump($menu);
//   echo('</pre>');

// }
// add_action('admin_menu', 'debug_gvar');