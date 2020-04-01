<?php /*
Template Name: Шаблон Программы Обучения
Template Post Type: post, page, product
*/ ?>
<?php get_template_part('head') ?>
<?php get_template_part('header') ?>
	<section class="distance-learning" id="distance-learning">
		<div class="section-container">
			<div class="training-content">
				<div class="training-content__box">
					<h3 class="training-content__title">
						<?php the_title(); ?>
					</h3>
					<p class="training-content__subtitle">
						Программы обучения:
					</p>
				</div>
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cdo' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cdo' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div>
	</section>
<?php get_template_part('footer') ?>