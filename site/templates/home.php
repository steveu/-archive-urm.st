<?php snippet('header'); ?>


<h1 class="title"><?=markdown($page->heading())?></h1>


<?php $projects = $pages->findByTitle('Projects'); ?>
<?php $items = $projects->children()->visible()->flip(); ?>
<?php if($items && $items->count()): ?>
	
	<section class="home_projects">

	<?php foreach($items AS $item): ?>
		<article>
			<a href="/projects/<?=$item->id()?>">
				<figure>
					<?php $image = $item->images()->find('screenshot.png') ?>
					<img src="<?php echo $image->url() ?>" alt="<?=$item->title()?>" />
				</figure>
			</a>	
		</article>
	<?php endforeach; ?>

	</section>

<?php endif; ?>


<?php snippet('footer'); ?>