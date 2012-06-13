<?php snippet('header') ?>

<div id="page">

	<section class="notes">


		<article>

			<aside class="meta">
				
				<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate">
				<em>
				Post written by Steve on the <?=$page->date('j<\s\up>S</\s\up> F Y')?> &#8212; a <?=$page->temp()?>, <?=$page->weather()?> <?=$page->when()?> in <?=$page->location()?>.
				</em>
				</time>
			</aside>

			<div class="post">

				<h1><?php echo html($page->title()) ?></h1>
    			<?php echo kirbytext($page->text()) ?>


    			<?php snippet('disqus', array('disqus_shortname' => 'clearbar')) ?>
			</div>
			
		</article>


	</section>

</div>

<?php snippet('footer') ?>