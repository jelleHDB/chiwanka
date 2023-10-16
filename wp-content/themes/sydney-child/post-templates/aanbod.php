<?php
/*
Template Name: Aanbod
Template Post Type: post, projects, employees
*/

get_header(); ?>

<div class="slider-aanbod" style="background-image: linear-gradient( rgb(0 0 0 / 30%), rgb(0 0 0 / 30%) ), url(<?php the_field('afbeelding_slider-aanbod'); ?>)">
	<div class="slider-aanbod-inner">
		<?php if( get_field('titel-slider-aanbod') ): ?>
			<h2 class="titel-slider-aanbod"><?php the_field('titel-slider-aanbod'); ?></h2>
		<?php endif; ?>
	</div>
</div>
<div class="image-border image-border-2"></div>
<div class="aanbod-post">
	<div class="aanbod-innerpost">
		<?php if( get_field('informatie_deel-aanbod_1') ): ?>
			<?php the_field('informatie_deel-aanbod_1'); ?>
		<?php endif; ?>
	</div>
	<div class="aanbod-column-post">
		<div class="aanbod-c1-post">
			<?php if( get_field('informatie_deel-aanbod_2') ): ?>
				<?php the_field('informatie_deel-aanbod_2'); ?>
			<?php endif; ?>
		</div>
		<div class="aanbod-c2-post">
			<?php if( get_field('titel_tarief-aanbod') ): ?>
				<i class="fa fa-leaf" aria-hidden="true"></i>
				<h2 class="titel_tarief-aanbod"><?php the_field('titel_tarief-aanbod'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('prijs-aanbod') ): ?>
				<p class="prijs-aanbod">€<?php the_field('prijs-aanbod'); ?></p>
			<?php endif; ?>
			<?php if( get_field('tijd_aanbod') ): ?>
				<p class="tijd_aanbod">🕑 <?php the_field('tijd_aanbod'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php
get_footer();
