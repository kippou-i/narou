<?php

function my_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['label'] = 'おすすめ小説';
		$args['has_archive'] = 'recommend';
	}
	return $args;
}
add_filter('register_post_type_args', 'my_archive', 8, 2);
