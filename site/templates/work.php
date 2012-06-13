<?php snippet('header') ?>

<div id="page">

	<section class="work">

		<?php foreach($page->children()->visible()->flip() as $item): ?>

		<article id="<?php echo $item->id(); ?>">

			<div class="meta">
				

				<div class="details">
					<h1><?php echo html($item->title()) ?></h1>

					<div class="desc">
						<time datetime="<?php echo $item->date('c') ?>" pubdate="pubdate">
							<?php echo $item->date('F Y') ?>
						</time>

						<?php echo kirbytext($item->text()) ?>
					</div>
				</div>

				
				<? if ($item->type() == 'Slideshare') : ?>

					<a href="/assets/documents/game_mechanics_vle.pdf">Download the PDF</a>

				<? elseif ($item->type() == 'Gist') : ?>

				
				<? else : ?>

					<table class="breakdown">
						<caption>My Involvement</caption>
					<?php
					foreach(c::get('breakdowns') AS $key => $title)  {
						if ($item->$key() != '') {
					?>
					<tr>
						<th><?php echo $title ?>:</th>
						<td>
							<span>
								<span class="percent<?php echo $item->$key() ?>"><?php echo $item->$key() ?>%</span>
							</span>
						</td>
					</tr>
					<?php
						}
					}
					?>
					</table>

				<? endif ?>

			</div>

			<? if ($item->type() == 'Slideshare') : ?>
					
				<aside class="slideshow">

				<iframe src="http://www.slideshare.net/slideshow/embed_code/7852875?rel=0" frameborder="0" marginwidth="0" marginheight="0" scrolling="no">></iframe>

				</aside>
			
			<? elseif ($item->type() == 'Gist') : ?>
				<aside class="gist">
					<script src="https://gist.github.com/957913.js?file=gistfile1.php"></script>
				</aside>

			<? else : ?>

			<figure class="">
				
				<a class="chrome" href="http://<?php echo $item->link() ?>/">
					
					<em>Vist Site</em>
					
					<figcaption>
						<img src="http://<?php echo $item->link() ?>/favicon.ico" width="16" height="16" />
						<?php echo $item->link() ?>
					</figcaption>

					<?php $image = $item->images()->find('screenshot.png') ?>

					<img src="<?php echo $image->url() ?>" />

				</a>

				
			</figure>

			<? endif ?>

		</article>

		<?php endforeach ?>

	</section>

</div>

<?php snippet('footer') ?>