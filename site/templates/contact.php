<?php snippet('header'); ?>

<section class="contact">
	
	<div class="padding">

		<h1 class="title"><?=$page->heading()?></h1>

		<div class="content">
		
			<aside class="hcard">

				<figure>
					<div>
						<img src="/assets/images/avatar.jpg" />
					</div>
				</figure>

				<dl>
					<dt>Email:</dt>
					<dd><?php echo str::email('steve@urm.st'); ?></dd>
					<dt>Phone:</dt>
					<dd><a href="">+44 (0)1904 651752</a></dd>
					<dt>Post:</dt>
					<dd>The Coach House,<br />
						Fulford Park,<br />
						York,
						YO10 4QE
					</dd>
				</dl>

				<nav class="icon-links">
					<a href="" class="microformat"></a>

					<a href="" data-icon="&#x23;"></a>
					<a href="" data-icon="&#x22;"></a>
					<a class="github" href="" data-icon="&#x24;"></a>
				</nav>

				<span class="left"></span>
				<span class="right"></span>
				
			</aside>
		</div>
		
	</div>

</section>

<?php snippet('footer'); ?>