<?php
if(!r::is_ajax()) {	
	snippet('header');
}
?>

<div id="page">

<?php echo kirbytext($page->text()) ?>

</div>

<?php
if(!r::is_ajax()) {	
	snippet('footer');
}
?>