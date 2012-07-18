<?php snippet('header'); ?>

<section class="notes">

	<article class="note">

		<div class="padding">

			<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate">
			<em>
			Note written: <?=$page->date('j<\s\up>S</\s\up> F Y')?> &#8212; a <?=$page->temp()?>, <?=$page->weather()?>, <?=$page->date('l') ?> <?=$page->when()?> in <?=$page->location()?>.
			</em>
			</time>

			<h1><a href="<?php echo $page->url() ?>"><?php echo html($page->title()) ?></a></h1>
			
			<?php echo kirbytext($page->text()) ?>
		
		</div>

	</article>


</section>


<?php snippet('footer'); ?>