<?php snippet('header'); ?>

<a href="#history_test">Test history</a>

<section class="home">
<?php echo kirbytext($page->text()) ?>
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

<section class="projects">
<?php foreach($page->children()->visible()->flip() as $item): ?>

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

<?php endforeach ?>
</section>

<h3 id="test_history">Test</h3>
<?php snippet('footer') ?>