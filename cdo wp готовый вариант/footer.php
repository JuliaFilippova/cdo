<footer class="footer" id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-contacts">
						<p>
							Наш адрес: <br> 344 000 г. Ростов-на-Дону, пер. Гвардейский 11/В
						</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-contacts">
						<a href="mailto:rostov.imei@mail.ru">
							rostov.imei@mail.ru
						</a>
						<a href="mailto:info@cdo-rostov.ru">
							info@cdo-rostov.ru
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-contacts">
						<a href="tel:+78632412143">
							8 (863) 241-21-43
						</a>
						<a href="tel:+78632800017">
							8 (863) 280-00-17
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-contacts">
						<a href="#">
							Создание и раскрутка сайтов "VAVlab."
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- REQUEST MODAL WINDOW-END -->
    <div id="modal" class="modal-overlay"></div> <!-- фон для модальных окон -->
    <!-- MENU MODAL WINDOW -->
    <div class="menu-modal" id="menu-modal">
    	<?php wp_nav_menu( array(
			'theme_location'  => '',
			'menu'            => 'hamburger-menu',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'hamburger-navigation-menu',
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
		<a href="tel:+78632412143" class="menu-phone hamburger-menu-phone">
			8 (863) 241-21-43
		</a>
    </div>
    <!-- modal form  -->
	<?php echo do_shortcode('[contact-form-7 id="263" title="Контактная форма модалка"]') ?>
    <!-- MENU MODAL WINDOW-END -->
	<script src="<?php bloginfo('template_directory')?>/js/jquery-3.4.1.min.js"></script>
	<!-- slider fotorama -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/jquery.maskedinput.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/main.js"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(54882604, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/54882604" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<?php wp_footer() ?>
</body>
</html>