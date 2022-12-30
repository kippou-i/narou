<?php
get_header();
?>

<article class="page-post">
  <h1 class="page-post__title page-post__title--none">活動報告検索</h1>

  <p class="page-post__lead">
    小説家になろうの活動報告から全文検索できます。<br>
    対象作者のIDを入力することで、特定の作者の活動報告に絞り込んでの検索が可能です。
  </p>

  <div class="page-post__content">
    <script async src="https://cse.google.com/cse.js?cx=3054ee35f222c31cd"></script>
    <!-- <div class="gcse-searchbox-only"></div> -->

    <div id="cse-header" class="gcse-searchbox">
      <form id="cse-search-box" class="search-form" action="https://google.com/cse" target="_blank">
        <div class="search-form__inner">
          <input type="hidden" name="cx" value="52840e0274e5c48b2">
          <input type="hidden" name="ie" value="UTF-8">
          <label for="ncode" class="search-form__label">
            <span>作者ID</span>
            <span class="search-form__label__sub">例：152652　活動報告一覧のURLでも◎</span>
          </label>
          <input type="search" id="ncode" class="search-form__input">
          <label for="word" class="search-form__label">検索ワード<span class="search-form__label__required">必須</span></label>
          <input type="search" id="word" class="search-form__input" required>
          <label for="negative" class="search-form__label">検索除外ワード</label>
          <input type="search" id="negative" class="search-form__input">
          <input type="hidden" name="q" id="searchWord" value>
        </div>
        <button id="submit" class="search-form__submit">検索</button>
        <img src="https://www.google.com/cse/images/google_custom_search_smwide.gif">
      </form>
    </div>
  </div>
</article>

<?php
get_footer();
