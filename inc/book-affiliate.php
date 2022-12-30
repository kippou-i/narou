<?php
function shortcord_book()
{
  ob_start();
  get_template_part('template-parts/book-affiliate');
  return ob_get_clean();
}
add_shortcode('book', 'shortcord_book');
