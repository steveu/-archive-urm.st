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
			

			<p class="twitter">Formed an opinion? <a class="social twitter" href="http://twitter.com/steveu"><span data-icon="&#x23;"></span>I'm @steveu on Twitter</a></p>
		</div>



	</article>

	<?php endforeach ?>


</section>

<?php snippet('footer'); ?>