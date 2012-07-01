<?php
if(!r::is_ajax()) {	
	snippet('header');
}
?>

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

<?php
if(!r::is_ajax()) {	
	snippet('footer');
}
?>