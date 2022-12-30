<?php
function my_page_navigation($pages = '', $range = 2)
{
  $show_items = ($range * 2) + 1;
  global $paged;
  if (empty($paged)) $paged = 1;

  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;

    if (!$pages) {
      $pages = 1;
    }
  }

  if ($pages) {

    echo "<ul class=\"page-navigation__inner\">";

    if ($paged > 1) {
      echo "<li class=\"page-navigation__numbers prev\"><a href='" . get_pagenum_link($paged - 1) . "'>＜</a></li>";
    } elseif ($paged = 1) {
      echo "<li class=\"page-navigation__numbers prev\">＜</li>";
    }

    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $show_items)) {
        echo ($paged == $i) ? "<li class=\"page-navigation__numbers current\">" . $i . "</li>\n" : "<li class=\"page-navigation__numbers\"><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>\n";
      }
    }

    if ($paged < $pages) {
      echo "<li class=\"page-navigation__numbers next\"><a href='" . get_pagenum_link($paged + 1) . "'>＞</a></li>";
    } elseif ($paged = $pages) {
      echo "<li class=\"page-navigation__numbers next\">＞</li>";
    }

    echo "</ul>";
  }
}
