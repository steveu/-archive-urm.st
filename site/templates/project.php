<?php snippet('header'); ?>

<section class="project">

	<div class="padding">

		<h1><?php echo html($page->title()) ?></h1>

	</div>

	<figure class="folio">
		<?php $image = $page->images()->find('screenshot.png') ?>
		<img src="<?php echo $image->url() ?>" alt="Project screenshot" />
	</figure>
					
	<div class="padding">
		
		<p class="meta">
			Date:
			<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F Y') ?></time>
			&#8211;
			Client:
			<?php if ($page->clientlink()) echo '<a href="' . $page->clientlink() . '">'; ?>
			<?=$page->client?>
			<?php if ($page->clientlink()) echo '</a>'; ?>
			&#8211;
			Work:<em class="tags">
			<?php foreach ($tags = explode(",", $page->tags()) as $tag) : ?>
				<span><?=$tag?></span>
			<?php endforeach; ?>
			</em>
		</p>

		<?php echo kirbytext($page->text()) ?>

		<?php if ($page->link()) : ?>
			<p class="options">
				<a href="http://<?php echo $page->link() ?>" class="button">See this project live</a>
			</p>
		<?php endif; ?>
		
	</div>
	
</section>

<nav class="prev_next">
	
	<?php
	$projects = $pages->findByTitle('Projects');

	// previous or last
	if($page->hasNextVisible()) {
		$previous = $page->nextVisible();
	}
	else {
		$previous = $projects->children()->visible()->first();
	}

	$previous_pic = $previous->images()->find('screenshot.png');
	?>
	<a href="<?=$previous->url()?>" class="prev">
		<figure>
			<img src="<?php echo $previous_pic->url() ?>" />
			<figcaption>
				<h2><?=$previous->title()?></h2>
				<span></span>
			</figpation>
		</figure>
	</a>

	<?php
	// previous or last
	if($page->hasPrevVisible()) {
		$next = $page->prevVisible();
	}
	else {
		$next = $projects->children()->visible()->last();
	}

	$next_pic = $next->images()->find('screenshot.png');
	?>

	<a href="<?=$next->url()?>" class="next">
		<figure>
			<img src="<?php echo $next_pic->url() ?>" />
			<figcaption>
				<h2><?=$next->title()?></h2>
				<span></span>
			</figpation>
		</figure>
	</a>


</nav>

<?php snippet('footer'); ?>