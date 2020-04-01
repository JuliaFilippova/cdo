<?php /*
Template Name: Главная
Template Post Type: post, page, product
*/ ?>
<?php get_template_part('head') ?>
	<header class="header header-bg" id="header">
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
		<div class="header-home d-flex">
			<div class="header-head">
				<div class="header-head__box">
					<h1 class="header-head__title">
						<?php the_title(); ?>
					</h1>
					<h3 class="header-head__subtitle">
						В московских <br> вузах и колледжах
					</h3>
					<a href="#" class="btn header-head__btn" id="btnForm">
						оставить заявку 
					</a>
				</div>
			</div>
			<div class="header-advantages fotorama" data-transition="crossfade" data-autoplay="4000">
				<div class="header-advantages__slide header-advantages__slide_dark">
					<p>
						- 2 ВУЗа и 2 Колледжа
					</p>
					<p>
						- 16 Специальностей
					</p>
					<p>
						- Зачисление 2 раза в год
					</p>
					<p>
						- Перевод круглый год
					</p>
					<p>
						- От 12500 руб. за семестр
					</p>
				</div>
				<div class="header-advantages__slide header-advantages__slide_bright">
					<p>
						Госдиплом гарантированно!
					</p>
				</div>
				<div class="header-advantages__slide header-advantages__slide_bright">
					<p>
						16 Специальностей
					</p>
				</div>
				<div class="header-advantages__slide header-advantages__slide_bright">
					<p>
						Без ЕГЭ!!!
					</p>
				</div>
				<div class="header-advantages__slide header-advantages__slide_bright">
					<p>
						От 12500 руб. за семестр
					</p>
				</div>
			</div>
		</div>
	</header>
	<section class="advantages" id="advantages">
		<div class="section-container">
			<div class="advantages-content">
				<div class="container">
					<h2>
						Дистанционное образование с нами это:
					</h2>
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<div class="advantages-content__card">
								<div class="advantages-content__img">
									<img src="<?php bloginfo('template_directory')?>/img/advantages1.png" alt="Изображение">
								</div>
								<h3 class="advantages-content__title">
									Госдиплом
								</h3>
								<p class="advantages-content__text">
									Выполняющие наши рекомендации и требования, вы гарантированно получаете диплом государственного образца.
								</p>
							</div>
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="advantages-content__card">
								<div class="advantages-content__img">
									<i class="fas fa-book-reader"></i>
								</div>
								<h3 class="advantages-content__title">
									Легко 
								</h3>
								<p class="advantages-content__text">
									Поступление без ЕГЭ. <br>
									Сокращение сроков обучения. <br>
									Все сдачи экзаменов и защита 
									дипломных и других работ 
									дистанционно
								</p>
							</div>
						</div>
						<div class="col-xl-4 col-md-12">
							<div class="advantages-content__card">
								<div class="advantages-content__img">
									<i class="far fa-thumbs-up"></i>
								</div>
								<h3 class="advantages-content__title">
									Удобно
								</h3>
								<p class="advantages-content__text">
									Учебный процесс проходит <br> тогда, когда вам это удобно.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="description" id="description">
		<div class="description-content">
			<div class="container">
				<div class="description-content__text">
					<h2>
						Как проходит обучение
					</h2>
					<p>
						Для обучения вам нужен только компьютер с интернетом, 
						проходить обучение вы можете в любое время 
						дня и ночи и в любой точке мира, все материалы 
						находятся в онлайн доступе на ресурсе учебных 
						заведений. Сдачи предметов контрольные и зачёты, 
						также сдаются с помощью интернета либо  
						отправляются по почте, заказным письмом.  
					</p>
				</div>
				<img src="<?php bloginfo('template_directory')?>/img/description1.png" alt="Изображение" class="description-content__img">
			</div>
		</div>
		<div class="description-content description-content__two">
			<div class="container">
				<div class="description-content__text">
					<h2>
						Просто
					</h2>
					<p>
						Поступление без ЕГЭ. <br>
						Сокращение сроков обучения. <br>
						Все сдачи экзаменов и защита <br> 
						дипломных и других работ <br> 
						дистанционно. 
					</p>
				</div>
				<img src="<?php bloginfo('template_directory')?>/img/description2.png" alt="Изображение" class="description-content__img">
				<div class="description-content__phone">
					<a href="tel:+78632412143">
						<i class="fas fa-phone-volume"></i>
						Ответим на все вопросы
					</a>
				</div>
			</div>
		</div>
		<div class="description-content description-content__three">
			<div class="container">
				<div class="description-content__text">
					<h2>
						Гарантировано
					</h2>
					<p>
						Абитуриенты учащиеся у нас, 
						выполняющие наши рекомендации 
						и требования, получают помощь и 
						максимальную защиту, а также 
						гарантированно получают дипломы 
						государственного образца.
						Возникшие проблемы 
						с учебным заведением мы 
						берем на себя.
					</p>
				</div>
				<img src="<?php bloginfo('template_directory')?>/img/description3.png" alt="Изображение" class="description-content__img">
			</div>
		</div>
	</section>
	<section class="program" id="program">
		<div class="section-container">
			<div class="program-content">
				<div class="container">
					<h2 class="program-content__title">
						Факультеты и программы обучения
					</h2>
					<h3 class="program-content__subtitle">
						Приглашаем на дистанционное обучение <br> по следующим направлениям:
					</h3>
					<div class="row">
						<div class="col-xl-3 col-md-6">
							<div class="program-card">
								<img src="<?php bloginfo('template_directory')?>/img/program1.png" alt="Изображение">
								<h3 class="program-card__title">
									Ночу во «мэи»
								</h3>
								<a href="http://cdo-rostov.ru/program-mei/" class="program-card__readmore">
									подробнее
								</a>
								<ul class="program-card__list">
									<li>
										Управление персоналом
									</li>
									<li>
										Юриспруденция
									</li>
									<li>
										
										Государственное и муниципальное управление
									</li>
									<li>
										Экономика
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="program-card">
								<img src="<?php bloginfo('template_directory')?>/img/program2.png" alt="Изображение">
								<h3 class="program-card__title">
									Очу во «еу»
								</h3>
								<a href="http://cdo-rostov.ru/program-hebrew-university/" class="program-card__readmore">
									подробнее
								</a>
								<ul class="program-card__list">
									<li>
										Прикладная информатика
									</li>
									<li>
										Реклама и связи с общественностью
									</li>
									<li>
										Экономика
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="program-card">
								<img src="<?php bloginfo('template_directory')?>/img/program3.png" alt="Изображение">
								<h3 class="program-card__title">
									Поу «гтэп»
								</h3>
								<a href="http://cdo-rostov.ru/program-gtep/" class="program-card__readmore">
									подробнее
								</a>
								<ul class="program-card__list">
									<li>
										Коммерция (по отраслям)
									</li>
									<li>
										Специальное дошкольное образование
									</li>
									<li>
										Операционная деятельность в логистике
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="program-card">
								<img src="<?php bloginfo('template_directory')?>/img/program4.png" alt="Изображение">
								<h3 class="program-card__title">
									Поу «ксу»
								</h3>
								<a href="http://cdo-rostov.ru/program-ksu/" class="program-card__readmore">
									подробнее
								</a>
								<ul class="program-card__list">
									<li>
										Экономика и бухгалтерский учет
									</li>
									<li>
										Организация обслуживания в общественном питании
									</li>
									<li>
										Гостиничный сервис
									</li>
									<li>
										Банковское дело
									</li>
									<li>
										Туризм
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="entrance" id="entrance">
		<div class="entrance-price">
			<h2 class="entrance-price__title">
				Стоимость обучения
			</h2>
			<p>
				Среднее Профессиональное Образование <br> (СПО) – от 25 000 руб./год
			</p>
			<p>
				 Высшее Образование <br> (ВО) – от 36 000 руб./год
			</p>
		</div>
		<div class="section-container">
			<div class="entrance-content">
				<div class="container pos-rel">
					<h2 class="entrance-content__title">
						Как происходит поступление?
					</h2>
					<p class="entrance-content__subtitle">
						Поступление на высшее образование проходит 2 раза в год, а перевод круглый год. 
					</p>
					<p class="entrance-content__subtitle">
						Поступление максимально упрощено,<br> а приемная комиссия работает круглый год!
					</p>
					<div class="entrance-form">
						<?php echo do_shortcode('[contact-form-7 id="197" title="Контактная форма 1" html_class="entrance-form__form entrance-form__home"]') ?>
					</div>
					<div class="entrance-stage">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="entrance-stage__card">
									<i class="far fa-check-circle"></i>
									<h3 class="entrance-stage__title">
										1. Выбор направления
									</h3>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="entrance-stage__card">
									<i class="far fa-newspaper"></i>
									<h3 class="entrance-stage__title">
										2. Сбор и подача документов
									</h3>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="entrance-stage__card">
									<i class="far fa-edit"></i>
									<h3 class="entrance-stage__title">
										3. Сдача вступительных испытаний
									</h3>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="entrance-stage__card entrance-stage__card_elem">
									<i class="fas fa-money-bill-alt"></i>
									<h3 class="entrance-stage__title">
										4. Оплата обучения
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="graduates" id="graduates">
		<div class="section-container">
			<div class="graduates-content">
				<div class="container">
					<h2 class="graduates-content__title">
						Наши выпускники
					</h2>
					<p class="graduates-content__subtitle">
						Мы работаем с 2010 года. <br> Более 3500 человек получили дипломы благодаря нам. <br>Присоединяйся!
					</p>
					<div class="graduates-gallery">
						<?php echo do_shortcode('[rl_gallery id="285"]') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part('footer') ?>