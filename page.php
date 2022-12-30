<?php
get_header();
?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <article class="page-post" id="post-<?php the_ID(); ?>">
      <h1 class="page-post__title"><?php the_title(); ?></h1>

      <div class="page-post__content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
