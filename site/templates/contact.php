<?php snippet('header'); ?>

<section class="contact">
	
	<div class="padding">

		<h1 class="title"><?=$page->heading()?></h1>

		<div class="content">
		
			<aside class="hcard">

				<figure>
					<div>
						<img src="/assets/images/avatar.jpg" alt="Steven Urmston" />
					</div>
				</figure>

				<dl>
					<dt>Email / IM:</dt>
					<dd><?php echo str::email('steve@urm.st'); ?></dd>
					<dt>Skype:</dt>
					<dd>steveurmston</dd>
					<dt>Post:</dt>
					<dd>65 Beaconsfield Street,<br />
						Acomb,<br />
						York,
						YO24 4NB
					</dd>
				</dl>

				<nav class="icon-links">
					<a class="no-ajaxy microformat" href="/assets/steve_urmston.vcf"></a>

					<a class="twitter" href="https://twitter.com/steveu" data-icon="&#x23;"></a>
					<a class="dribbble" href="http://dribbble.com/steveu" data-icon="&#x22;"></a>
					<a class="github" href="https://github.com/steveu" data-icon="&#x24;"></a>
				</nav>

				<span class="left"></span>
				<span class="right"></span>
				
			</aside>
		</div>
		
	</div>

</section>

<?php snippet('footer'); ?>