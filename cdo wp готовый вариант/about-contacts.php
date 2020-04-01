<?php /*
Template Name: Шаблон О нас | Контакты
Template Post Type: post, page, product
*/ ?>
<?php get_template_part('head') ?>
<?php get_template_part('header') ?>
	<section class="about" id="about">
		<div class="section-container">
			<div class="about-content">
				<h3 class="about-content__title">
					<?php the_title(); ?>
				</h3>
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