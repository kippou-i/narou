<?php

function echo_thumbnail($post_id, $size, $class_name)
{
	if (has_post_thumbnail()) {
		echo get_the_post_thumbnail($post_id, $size, array('class' => $class_name));
	} else {
		echo '<img class="' . $class_name . '" src="' . get_template_directory_uri() . '/src/img/ogp.png" alt="" />';
	}
}
