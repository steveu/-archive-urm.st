<?php snippet('header'); ?>

<section class="projects">

	<?php foreach($page->children()->visible()->flip() as $item): ?>

		<article>
			<a href="<?=$item->url()?>">
				<figure>
					<?php $image = $item->images()->find('screenshot.png') ?>
					<img src="<?php echo $image->url() ?>" />
					<figcaption>
						<h2>View Project</h2>
						<span></span>
					</figpation>
				</figure>

				<h2><?php echo html($item->title()) ?></h2>
				
				<?php echo kirbytext($item->intro()) ?>
				<ul class="tags">
				<?php foreach ($tags = explode(",", $item->tags()) as $tag) : ?>
					<li><?=$tag?></li>
				<?php endforeach; ?>
				</ul>
			</a>	
		</article>

	<?php endforeach ?>

</section>

<?php snippet('footer'); ?>