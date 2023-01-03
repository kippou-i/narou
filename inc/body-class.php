<?php

function my_theme_body_classes($classes)
{
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'my_theme_body_classes');
