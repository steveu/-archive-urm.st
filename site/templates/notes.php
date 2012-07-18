<?php snippet('header'); ?>

<section class="notes">


	<?php foreach($page->children()->visible()->flip() as $item): ?>

	<article>

		<div class="padding">

			<h1><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h1>
			<time datetime="<?php echo $item->date('c') ?>" pubdate="pubdate">
				<?php echo $item->date('j F Y') ?>
			</time>
			<?php echo kirbytext($item->text()) ?>
		
		</div>

	</article>

	<?php endforeach ?>


</section>

<?php snippet('footer'); ?>