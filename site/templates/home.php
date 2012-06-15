<?php snippet('header'); ?>

<section class="home">
<?php echo kirbytext($page->text()) ?>
</section>

<?php $n = 0; ?>

<?php foreach($pages->visible() AS $section) : ?>

	<?php $items = $section->children()->visible()->flip(); ?>

	<section class="<? echo $section->fragment(); ?>">
		<?php echo kirbytext($section->text()); ?>

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

<?php snippet('footer') ?>