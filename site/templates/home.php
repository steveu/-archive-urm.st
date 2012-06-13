<?php

s::start();

if (s::get('fuse8')) {
	
	$page->uri = 'fuse8';
	$fuse8 = $pages->find('fuse8');


	snippet('header');

	echo '<div id="page">';
	echo '<h1 class="hello"><span>' . $fuse8->title() . '</span></h1>';

	echo '<div class="text">';
	echo kirbytext($fuse8->text());
	echo '</div>';
	echo '</div>';
}
else {

	snippet('header');

	echo '<div id="page">';
?>


<div class="home_slideshow">
	<div>

		<h1>hello there</h1>

	</div>
</div>


<?php echo kirbytext($page->text()) ?>

</div>

<?php } ?>


<?php snippet('footer') ?>