<?php snippet('header'); ?>

<section class="projects">

	<?php foreach($page->children()->visible()->flip() as $item): ?>

		<article>
			<a href="<?=$item->url()?>">
				<figure>
					<?php $image = $item->images()->find('screenshot.png') ?>
					<img src="<?php echo $image->url() ?>" />
				</figure>

				<h2><?php echo html($item->title()) ?></h2>
				<?php echo kirbytext($item->intro()) ?>
			</a>	
		</article>

	<?php endforeach ?>

</section>

<?php snippet('footer'); ?>