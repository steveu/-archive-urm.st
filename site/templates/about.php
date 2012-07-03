<?php
if(!r::is_ajax()) {	
	snippet('header');
}
?>


<section class="about">
	<div class="single">
		<?php echo kirbytext($page->text()); ?>
	</div>
</section>

<?php
if(!r::is_ajax()) {	
	snippet('footer');
}
?>