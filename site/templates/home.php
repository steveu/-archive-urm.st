<?php snippet('header'); ?>

<section class="home">

	<h1 class="title">
		<strong>Hello there</strong>, I'm Steve, a freelance web designer & developer based in North Yorkshire. <em>I design and build interfaces for web &amp; mobile</em>.
	</h1>

	<?php $projects = $pages->findByTitle('Projects'); ?>
	<?php $items = $projects->children()->visible()->flip(); ?>
	<?php if($items && $items->count()): ?>
		<?php $i = 0; ?>
		<?php foreach($items AS $item): ?>
			<?php if ($i < 6) : ?>
			<article>
				<a href="/projects/<?=$item->id()?>">
					<figure>
						<?php $image = $item->images()->find('screenshot.png') ?>
						<img src="<?php echo $image->url() ?>" alt="<?=$item->title()?>" />
					</figure>
				</a>	
			</article>
			<?php endif; ?>
			<?php $i++; ?>
		<?php endforeach; ?>

	<?php endif; ?>

</section>


<section class="testimionials">
	<h1>What? Letterbox screenshots not enough?</h1>
	<?php $testimonials = $pages->findByTitle('Testimonials'); ?>
	<?php $items = $testimonials->children()->visible(); ?>

	<?php foreach($items AS $item): ?>
		<blockquote>
			<figure>
				<span>
					<?php $image = $item->images()->find('picture.jpg') ?>
					<img src="<?php echo $image->url() ?>" alt="<?=$item->title()?>" />
				</span>
			</figure>
			<p><?=$item->quote()?></p>
			<cite>
				<strong><?=$item->author()?></strong>, <?=$item->job()?>
				-
				<a href="<?=$item->link()?>">
					<?=$item->company()?>
				</a>
			</cite>	
		</blockquote>
	<?php endforeach; ?>


</section>

<?php snippet('footer'); ?>