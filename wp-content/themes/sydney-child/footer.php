<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */

 $link_footer1 = get_field('link-footer-c2_1', 'options');
 $link_footer2 = get_field('link-footer-c2_2', 'options');



 

?>
	</div>

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<?php $container 	= get_theme_mod( 'footer_credits_container', 'container' ); ?>
	<?php $credits 		= sydney_footer_credits(); ?>

	<footer class="costum-footer">
		<div class="costum-footer-inner">
			<div class="costum-footer-kolommen">
				<div class="costum-footer-c1">
					<?php if( get_field('titel-footer-c1', 'options') ): ?>
						<h2 class="titel-footer_c1"><?php the_field('titel-footer-c1', 'options'); ?></h2>
					<?php endif; ?>
					<?php

					// Check rows existexists.
					if( have_rows('repeater-footer-c1', 'options') ):

						// Loop through rows.
						while( have_rows('repeater-footer-c1', 'options') ) : the_row();

							// Load sub field value.
							$link_c1 = get_sub_field('link-footer-c1', 'options');
							$tekst_c1 = get_sub_field('tekstLink-footer-c1', 'options');
							// Do something... ?>
							<a class="link-footer-rep" href="<?php echo $link_c1 ?>"><?php echo $tekst_c1 ?></a>
						
						<?php // End loop.
						endwhile;

					// No value.
					else :
						// Do something...
					endif;

					?>
				</div>
				<div class="costum-footer-c2">
					<?php if( get_field('titel-footer-c2', 'options') ): ?>
						<h2 class="titel-footer_c2"><?php the_field('titel-footer-c2', 'options'); ?></h2>
					<?php endif; ?>
					<?php
					if( $link_footer1 ): ?>
						<a class="linkContactFooter" href="<?php echo esc_url( $link_footer1 ); ?>">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<?php the_field('tekstLink-footer-c2_1', 'options'); ?>
						</a>
					<?php endif; ?>
					<?php
					if( $link_footer2 ): ?>
						<a class="linkContactFooter" href="<?php echo esc_url( $link_footer2 ); ?>">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<?php the_field('tekstLink-footer-c2_2', 'options'); ?>
						</a>
					<?php endif; ?>
					<?php if( get_field('informatie-footer-c2', 'options') ): ?>
						<p class="informatie-footer-c2"><?php the_field('informatie-footer-c2', 'options'); ?></p>
					<?php endif; ?>
				</div>
				<div class="costum-footer-c3">
					<?php if( get_field('titel-footer-c3', 'options') ): ?>
						<h2 class="titel-footer-c3"><?php the_field('titel-footer-c3', 'options'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('informatie-footer-c3', 'options') ): ?>
						<p class="informatie-footer-c3"><?php the_field('informatie-footer-c3', 'options'); ?></p>
					<?php endif; ?>
				</div>
				<div class="costum-footer-c4">
					<?php if( get_field('afbeelding-footer', 'options') ): ?>
						<img class="afbeelding-footer" src="<?php the_field('afbeelding-footer', 'options'); ?>" />
					<?php endif; ?>
				</div>
			</div>
			<?php echo wp_kses_post( $credits ); ?>
		</div>
	</footer>

	

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
