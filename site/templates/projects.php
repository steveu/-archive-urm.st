<?php
if(!r::is_ajax()) {	
	snippet('header');
}
?>

<section class="projects">

	<?php foreach($page->children()->visible()->flip() as $item): ?>

	<article id="<?php echo $item->id(); ?>">

		<div class="meta">

				

				<figure class="">
	



				<?php $image = $item->images()->find('screenshot.png') ?>

				<img src="<?php echo $image->url() ?>" />

			</a>

			
		</figure>

		<h2><?php echo html($item->title()) ?></h2>
					<time datetime="<?php echo $item->date('c') ?>" pubdate="pubdate">
						<?php echo $item->date('F Y') ?>
					</time>

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