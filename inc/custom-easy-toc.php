<?php
$my_toc_no = 0;

function toc_anchor_change($return, $heading)
{
	global $my_toc_no;
	$my_toc_no = $my_toc_no + 1;
	return "toc_" . $my_toc_no;
}
add_filter('ez_toc_url_anchor_target', 'toc_anchor_change', 10, 2);
