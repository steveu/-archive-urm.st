<?php snippet('header'); ?>

<section class="about">
	<div class="padding">
		<h1 class="title"><?=$page->title()?></h1>
		<div class="content">
			<?php echo kirbytext($page->text()); ?>
		</div>
	</div>
</section>

<?php snippet('footer'); ?>