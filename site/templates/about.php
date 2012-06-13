<?php snippet('header') ?>

<?php $image = $page->images()->find('steve_urmston.jpg') ?>

<figure class="full">
	<img rel="<?php echo $image->url() ?>" src="/assets/images/preload.gif" />
	<div>
	<figcaption>
		Horizontal in <a href="http://www.watchthegardengrow.eu/the-garden-zadar">The Garden</a> in Zadar
	</figcaption>
	</div>
</figure>

<div id="page">

	<section class="content">
		<?php echo kirbytext($page->text()) ?>
	</section>

	<aside class="blank">

		<h3>I got skills in&hellip; <i>(Sadly no sweet bike or moustache)</i></h3>
		<div id="skills_matrix">
			<table>
				<thead>
					<tr>
						<th>Skill:</th>
						<th>Ability:</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Graphic Design:</th>
						<td>50%</td>
					</tr>
					<tr>
						<th>Interaction Design:</th>
						<td>70%</td>
					</tr>
					<tr>
						<th><abbr>IA</abbr>:</th>
						<td>60%</td>
					</tr>
					<tr>
						<th>Research:</th>
						<td>30%</td>
					</tr>
					<tr>
						<th>PHP:</th>
						<td>90%</td>
					</tr>
					<tr>
						<th>Javascript:</th>
						<td>80%</td>
					</tr>
					<tr>
						<th>CSS:</th>
						<td>100%</td>
					</tr>
					<tr>
						<th>HTML:</th>
						<td>100%</td>
					</tr>
				</tbody>		
			</table>
		</div>
	</aside>

</div>

<?php snippet('footer') ?>