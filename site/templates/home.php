<?php
if(!r::is_ajax()) {	
	snippet('header');
}
?>

<section class="home">
	<?php echo kirbytext($page->text()) ?>
</section>

<?php $n = 0; ?>

<?php foreach($pages->visible() AS $section) : ?>


	<?php $items = $section->children()->visible()->flip(); ?>

	<section class="<? echo $section->fragment(); ?>">
		<?php if($items && $items->count()): ?>
				
			<?php foreach($items AS $item): ?>
				<article id="<?php echo $item->id(); ?>">
					<a href="<?=$item->url()?>">
					<!--<h1><?php echo html($item->title()) ?></h1>-->
					<figure>
		
						<?php $image = $item->images()->find('screenshot.png') ?>
						<img src="<?php echo $image->url() ?>" />
				
					</figure>
					</a>	
				</article>
			<?php endforeach; ?>

		<?php endif; ?>
	</section>

<?php endforeach; ?>


<?php
if(!r::is_ajax()) {	
	snippet('footer');
}
?>