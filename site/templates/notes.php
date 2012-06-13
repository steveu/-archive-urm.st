<?php snippet('header') ?>

<!--
<div class="notes_search">

	<p>This is the personal blog of Steve Urmston</p>

	<form action="">

		<fieldset>
			<label>Search content:</label>
			<input type="text" name="q" id="q" />
		</fieldset>
	</form>

</div>
-->
<div id="page">

	<section class="notes">

		<?php foreach($page->children()->visible()->flip() as $item): ?>

		<article>

			<aside class="meta">
				<time datetime="<?php echo $item->date('c') ?>" pubdate="pubdate"><?php echo $item->date('l j<\s\up>S</\s\up> F, Y') ?></time>
				<p class="comments"><a href="<?php echo $item->url() ?>#disqus_thread">0 Comments</a></p>
			</aside>

			<div class="post">
				<h1><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h1>
				<?php echo kirbytext($item->text()) ?>
			</div>
			
		</article>

		<?php endforeach ?>

	</section>

</div>

<?php snippet('footer') ?>