<aside class="aside">
  <nav class="aside_bread">
    <ul>
      <?php if (is_home()) : ?>
        <li></li>
      <?php elseif (is_page()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><?php the_title(); ?></li>
      <?php elseif (is_category()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><?php single_cat_title(); ?></li>
      <?php elseif (is_year()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><?php the_time('Y年'); ?></li>
      <?php elseif (is_month()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><?php the_time('Y年m月'); ?></li>
      <?php elseif (is_single()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><?php $c = get_the_category();
            echo '<a href="' . get_category_link($c[0]->term_id) . '">' . $c[0]->name . '</a>'; ?> &gt; <?php echo single_post_title(); ?></li>
      <?php elseif (is_search()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><?php echo wp_get_document_title(); ?></li>
      <?php elseif (is_404()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><?php echo wp_get_document_title(); ?></li>
      <?php else : ?>
      <?php endif; ?>
    </ul>
  </nav>

  <div class="aside_pr">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3799116642278714" crossorigin="anonymous"></script>
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3799116642278714" data-ad-slot="7945385425" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
</aside>