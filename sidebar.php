<aside class="aside">
  <nav class="aside__bread">
    <ul>
      <?php if (is_home()) : ?>
        <li></li>
      <?php elseif (is_tag()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/recommend">おすすめ小説</a></li>
        <li><?php echo single_tag_title(); ?></li>
      <?php elseif (is_archive()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li>おすすめ小説</li>
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
        <li><a href="<?php echo esc_url(home_url()); ?>/recommend">おすすめ小説</a></li>
        <li><?php echo single_post_title(); ?></li>
      <?php elseif (is_search()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li><?php echo wp_get_document_title(); ?></li>
      <?php elseif (is_404()) : ?>
        <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
        <li>404 NOT FOUND</li>
      <?php else : ?>
      <?php endif; ?>
    </ul>
  </nav>

  <div class="aside__attention">
    <p>※「小説家になろう」は株式会社ヒナプロジェクトの登録商標です。</p>
  </div>
</aside>