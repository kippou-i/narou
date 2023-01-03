<?php
function my_theme_menu()
{
  register_nav_menus(array(
    'header__nav' => 'ヘッダーメニュー',
    'footer__nav' => 'フッターメニュー',
  ));
}
add_action('after_setup_theme', 'my_theme_menu');

function my_editor_menu($atts, $item)
{
  if (!empty($item->description)) {
    $atts['data-desc'] = $item->description;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'my_editor_menu', 10, 2);
