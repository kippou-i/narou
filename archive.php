<?php
get_header();
?>

<div class="archive">
  <?php if (is_tag()) : ?>
    <h1 class="archive__title">おすすめ小説 - <?php single_cat_title(); ?></h1>
  <?php else : ?>
    <h1 class="archive__title archive__title--none">おすすめ小説</h1>
  <?php endif; ?>

  <div class="archive__lead">
    当サイト管理者・いとによる、おすすめのなろう小説を紹介しています。
  </div>

  <?php if (!is_tag()) : ?>
    <ul class="archive__tags">
      <?php
      $post_tags = get_tags();
      if ($post_tags) {
        foreach ($post_tags as $tag) {
          echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '（' . $tag->count . '）</a>';
        }
      }
      ?>
    </ul>
  <?php endif; ?>

  <div class="post-area">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="post">
          <article>
            <div class="post__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/ogp.png" alt="">
              <?php endif; ?>
            </div>
            <h2 class="post__title"><?php the_title(); ?></h2>
            <?php
            $post_tags = get_the_tags();
            if ($post_tags) {
              echo '<ul class="post__tag">';
              foreach ($post_tags as $tag) {
                echo '<li>' . $tag->name . '</li>';
              }
              echo '</ul>';
            }
            ?>
            <?php the_excerpt(); ?>
          </article>
        </a>
    <?php endwhile;
    endif; ?>
  </div>

  <?php the_posts_pagination(); ?>

</div>

<?php
get_footer();
