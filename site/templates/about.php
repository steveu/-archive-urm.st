<?php snippet('header'); ?>

<section class="home">
<h1><strong>Hello there</strong>, I'm Steve, a freelance web designer &amp; developer based in North Yorkshire. I deliver elegant interface design and creative front and back end code, for web and mobile.</h1>
</section>



<?php $n = 0; ?>

<?php foreach($pages->visible() AS $section) : ?>


	<?php $items = $section->children()->visible()->flip(); ?>

	<section class="<? echo $section->fragment(); ?>">
		<?php echo kirbytext($section->text()); ?>
		<?php
		/*
		<?php if($items && $items->count()): ?>
				
			<?php foreach($items AS $item): ?>
				<article id="<?php echo $item->id(); ?>">

					<h1><?php echo html($item->title()) ?></h1>
					<figure>
						<a href="">
							<?php $image = $item->images()->find('screenshot.png') ?>
							<img src="<?php echo $image->url() ?>" />
						</a>
					</figure>
					<!--
					<time datetime="<?php echo $item->date('c') ?>" pubdate="pubdate">
						<?php echo $item->date('F Y') ?>
					</time>
					-->

				</article>
			<?php endforeach; ?>

		<?php endif; ?>
		<?php */ ?>
	</section>

<?php endforeach; ?>


<?php snippet('footer') ?>