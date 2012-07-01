<?php
if(!r::is_ajax()) {	
	snippet('header');
}
?>



<section class="about">
	<?php echo kirbytext($page->text()); ?>
</section>

<?php
if(!r::is_ajax()) {	
	snippet('footer');
}
?>