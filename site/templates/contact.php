<?php
if(!r::is_ajax()) {	
	snippet('header');
}
?>
<section class="contact">
	
	<div class="padding">

		<?php echo kirbytext($page->text()) ?>
		
		<aside class="hcard">
			<dl>
				<dt>Email:</dt>
				<dd>steve at domain dot com</dd>
				<dt>Phone:</dt>
				<dd>07590843170</dd>
				<dt>Twitter:</dt>
				<dd>@steveu</dd>
			</dl>
		</aside>
		
	</div>

</section>

<?php
if(!r::is_ajax()) {	
	snippet('footer');
}
?>