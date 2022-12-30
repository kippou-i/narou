<section class="book-affiliate">
  <div class="book-affiliate__pict"><img src="<?php echo esc_url(get_field('image_url')); ?>"></div>
  <div class="book-affiliate__info">
    <p class="book-affiliate__title"><?php echo the_field('title'); ?></p>
    <?php if (post_custom('description')) : ?>
      <p class="book-affiliate__description"><?php echo the_field('description'); ?></p>
    <?php endif; ?>
    <ul class="book-affiliate__link">
      <?php if (get_field('amazon_url')) : ?>
        <li><a class="book-affiliate__btn orange" target="_blank" rel="noopener" href="<?php echo esc_url(get_field('amazon_url')); ?>">Amazon</a></li>
      <?php endif; ?>
      <?php if (get_field('kindle_url')) : ?>
        <li><a class="book-affiliate__btn blue" target="_blank" rel="noopener" href="<?php echo esc_url(get_field('kindle_url')); ?>">Kindle</a></li>
      <?php endif; ?>
      <?php if (get_field('rakuten_url')) : ?>
        <li><a class="book-affiliate__btn red" target="_blank" rel="noopener" href="<?php echo esc_url(get_field('rakuten_url')); ?>">楽天</a></li>
      <?php endif; ?>
      <?php if (get_field('yahoo_url')) : ?>
        <li><a class="book-affiliate__btn green" target="_blank" rel="noopener" href="<?php echo esc_url(get_field('yahoo_url')); ?>">Yahoo!</a></li>
      <?php endif; ?>
    </ul>
  </div>
</section>