<?php snippet('header'); ?>

<section class="contact">
	
	<div class="padding">

		<h1 class="title"><?=$page->heading()?></h1>

		<div class="content">
		
			<aside class="vcard" id="hcard-Steve-Urmston">

				<figure>
					<div>
						<img src="/assets/images/avatar.jpg" alt="Steven Urmston" />
					</div>
					<figcaption class="fn">Steve Urmston</figcaption>
				</figure>

				<dl>
					<dt>Email / IM:</dt>
					<dd class="email-im">
						<span class="email"><?php echo str::email('steve@urm.st'); ?></span>
						<span class="url" href="xmpp:steve@urm.st">Jabber</span>
					</dd>
					<dt>Skype:</dt>
					<dd>steveurmston</dd>
					<dt>Post:</dt>
					<dd class="adr">
						<span class="street">65 Beaconsfield Street,<br />
						Acomb,<br /></span>
						<span class="locality">York</span>,
						<span class="postal-code">YO24 4NB</span>
					</dd>
				</dl>

				<nav class="icon-links">
					<a class="no-ajaxy microformat" href="/assets/steve_urmston.vcf"><em><span></span>Download Vcard</em></a>

					<a class="twitter" href="https://twitter.com/steveu" data-icon="&#x23;"><em><span></span>Follow on Twitter</em></a>
					<a class="dribbble" href="http://dribbble.com/steveu" data-icon="&#x22;"><em><span></span>Follow on Dribbble</em></a>
					<a class="github" href="https://github.com/steveu" data-icon="&#x24;"><em><span></span>Follow on Github</em></a>
				</nav>

				<span class="left"></span>
				<span class="right"></span>
				
			</aside>
		</div>
		
	</div>

</section>

<?php snippet('footer'); ?>