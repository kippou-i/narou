<?php
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="shingle">
      <header class="shingle__header">
        <h1 class="shingle__title"><?php the_title(); ?></h1>
        <time class="shingle__time" datetime="<?php the_time('Ymd'); ?>"><?php the_time('Y.m.d'); ?></time>
        <?php
        $post_tags = get_the_tags();
        if ($post_tags) {
          echo '<ul class="shingle__tag">';
          foreach ($post_tags as $tag) {
            echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
          }
          echo '</ul>';
        }
        ?>
      </header>
      <main class="shingle__main">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>
        <?php the_content(); ?>
      </main>
    </article>
<?php endwhile;
endif; ?>

<?php
get_footer();
