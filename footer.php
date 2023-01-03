</main>

<?php
get_sidebar();
?>

</div>
</div>

<footer class="wrapper__under footer">
  <p class="footer__attention">
    <span class="br">※「小説家になろう」は</span><span class="br">株式会社ヒナプロジェクトの登録商標です</span>
  </p>

  <nav class="footer__nav">
    <?php
    $footer__nav = array(
      'theme_location' => 'footer__nav',
      'container' => false,
    );
    wp_nav_menu($footer__nav);
    ?>
  </nav>

  <p class="footer__copy"><small>&copy; 2021 なろう本文検索.</small></p>
</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>