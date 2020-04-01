<header class="header" id="header">
	<div class="navigation">
		<div class="section-container d-flex align-items-center">
			<div class="col-3">
				<a href="/">
					<img src="<?php bloginfo('template_directory')?>/img/logo.png" alt="" class="nav-logo logo">
				</a>
			</div>
			<nav class="col-9 d-flex justify-content-between">
				<?php wp_nav_menu( array(
					'theme_location'  => '',
					'menu'            => 'Основное',
					'container'       => false,
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'navigation-menu d-flex justify-content-between',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'		  => '',
				) ); 
				?>
				<a href="tel:+78632412143" class="menu-phone">
					8 (863) 241-21-43
				</a>
				<div class="hamburger js-menu-modal">
                    <div id="menuToggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
			</nav>
		</div>
	</div>
</header>