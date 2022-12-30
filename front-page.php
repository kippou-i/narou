<?php
get_header();
?>

<div class="topMain_description">
	<p>小説家になろうの投稿作品から全文検索できます。</p>
	<p>作品Ncodeを入力することで、特定の作品に絞り込んでの検索が可能です。</p>
</div>

<div class="topMain_box">
	<script async src="https://cse.google.com/cse.js?cx=3054ee35f222c31cd"></script>
	<!-- <div class="gcse-searchbox-only"></div> -->

	<div id="cse-header" class="gcse-searchbox">
		<form id="cse-search-box" class="ncodeForm" action="https://google.com/cse" target="_blank">
			<div class="ncodeForm_inner">
				<input type="hidden" name="cx" value="3054ee35f222c31cd">
				<input type="hidden" name="ie" value="UTF-8">
				<label for="ncode" class="ncodeForm_label">
					<span class="ncodeForm_label_row">作品Ncode</span>
					<span class="ncodeForm_label_sub ncodeForm_label_row">例：n2230dk<br>作品ページのURLでも◎</span>
				</label>
				<input type="search" id="ncode" class="ncodeForm_input">
				<label for="word" class="ncodeForm_label">検索ワード<span class="colorRed">（必須）</span></label>
				<input type="search" id="word" class="ncodeForm_input" required>
				<label for="negative" class="ncodeForm_label">検索除外ワード</label>
				<input type="search" id="negative" class="ncodeForm_input">
				<input type="hidden" name="q" id="searchWord" value>
			</div>
			<button id="submit" class="ncodeForm_submit">検索</button>
		</form>
		<img src="https://www.google.com/cse/images/google_custom_search_smwide.gif">
	</div>
</div>

<?php
get_footer();
