<?php snippet('header') ?>

<div id="page">
	
	<aside class="vcard">
		<div class="hcard">
			<h2>I like mail, get in touch</h2>
			<dl>
				<dt>Email:</dt>
				<dd>steve at domain dot com</dd>
				<dt>Phone:</dt>
				<dd>07590843170</dd>
				<dt>Twitter:</dt>
				<dd>@steveu</dd>
			</dl>
		</div>
		
	</aside>

	<section class="content">
		<?php echo kirbytext($page->text()) ?>
	</section>

	

</div>

<?php snippet('footer') ?>