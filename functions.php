<?php
function my_theme_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array(
		'gallery',
		'caption',
		'style',
		'script',
	));
}
add_action('after_setup_theme', 'my_theme_setup');

function my_editor_css()
{
	add_theme_support('editor-styles');
	add_editor_style('editor-style.css'); //エディタ専用
}
add_action('after_setup_theme', 'my_editor_css');

function my_theme_scripts()
{
	$my_path_arr = array(
		'temp_uri' => get_template_directory_uri(),
		'home_url' => home_url(),
	);
	wp_enqueue_style('my-theme-style', get_stylesheet_uri(), array(), filemtime(get_theme_file_path('style.css')));
	wp_enqueue_style('my-theme-style-min', get_template_directory_uri() . '/dist/style.min.css', filemtime(get_theme_file_path('style.css')));
	wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/dist/script.js', array('jquery'), filemtime(get_theme_file_path('style.css')), true);
	wp_localize_script('my-theme-script', 'my_path', $my_path_arr);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

//ツールバー非表示
add_filter('show_admin_bar', '__return_false');

//ナビゲーションメニュー設定
require get_template_directory() . '/inc/navigation-menu.php';

//投稿画面カラーパレット設定
require get_template_directory() . '/inc/color-palette.php';

//bodyにページごとのクラスを追加
require get_template_directory() . '/inc/body-class.php';

//アーカイブページ
require get_template_directory() . '/inc/archive.php';

//ダッシュボードメニューのラベルを変更
require get_template_directory() . '/inc/change-label.php';

//書籍アフィリエイト
require get_template_directory() . '/inc/book-affiliate.php';
