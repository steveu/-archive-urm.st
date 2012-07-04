<?php
if(!r::is_ajax()) {	
	snippet('header');
}
?>


<section class="about">
	<div class="padding">
		<?php echo kirbytext($page->text()); ?>
	</div>
</section>

<?php
if(!r::is_ajax()) {	
	snippet('footer');
}
?>