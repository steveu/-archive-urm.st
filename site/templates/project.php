<?php snippet('header'); ?>

<section class="project">

	<div class="padding">

		<h1><?php echo html($page->title()) ?></h1>

	</div>

	<figure class="folio">
		<?php $image = $page->images()->find('screenshot.png') ?>
		<img src="<?php echo $image->url() ?>" />
	</figure>
					
	<div class="padding">
		
		<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate">
			<?php echo $page->date('F Y') ?>
		</time>


		<?php echo kirbytext($page->text()) ?>

		<?php if ($page->link()) : ?>
			<p class="options">
				<a href="http://<?php echo $page->link() ?>" class="button">See this project live</a>
			</p>
		<?php endif; ?>
		
	</div>
	
</section>