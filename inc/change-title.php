<?php

add_filter('get_the_archive_title', function ($title) {
	if (is_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_search()) {
		$title = '検索結果：' . esc_html(get_search_query(false));
	} elseif (is_404()) {
		$title = '「404」ページが見つかりません';
	}
	return $title;
});

add_filter('protected_title_format', function () {
	return '%s';
});
