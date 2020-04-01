<?php /*
Template Name: МЭИ
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
					<div class="training-list d-flex">
						<?php 
							$args = array(
								'post_type' => 'program',
								'posts_per_page' => 4,
							);
							$p = get_posts( $args );
							foreach ( $p as $post ) {
								setup_postdata( $post );
						?>
						<div class="training-list__item">
							<img src="<?php the_field('program_img'); ?>" alt="Изображение">
							<p class="training-list__name">
								<?php the_title(); ?>
							</p>
							<p>
								<?php the_field('program_num'); ?>
							</p>
						</div>
						<?php } wp_reset_postdata(); ?>
						<!-- <div class="training-list__item">
							<img src="<?php bloginfo('template_directory')?>/img/mei/training-list1.png" alt="Изображение">
							<p>
								Экономика <br> (38.03.01)
							</p>
						</div>
						<div class="training-list__item">
							<img src="<?php bloginfo('template_directory')?>/img/mei/training-list2.png" alt="Изображение">
							<p>
								Управление <br> персоналом <br> (38.03.03)
							</p>
						</div>
						<div class="training-list__item">
							<img src="<?php bloginfo('template_directory')?>/img/mei/training-list3.png" alt="Изображение">
							<p>
								Государственное <br> и муниципальное <br> управление <br> (38.03.04)
							</p>
						</div>
						<div class="training-list__item">
							<img src="<?php bloginfo('template_directory')?>/img/mei/training-list4.png" alt="Изображение">
							<p>
								Юриспруденция <br> (40.03.01)
							</p>
						</div> -->
					</div>
					<p class="license-text">
						(бессрочная лицензия №2423 от 05 октября 2016 года, государственная аккредитация №2321 от 01 ноября 2016 года)
					</p>
					<div class="training-info">
						<div class="entrance-form">
							<h3 class="entrance-form__title">
								Оставьте <br> заявку на обучение
							</h3>
							<form class="entrance-form__form" id="form">
								<label class="form-input">
									<input type="text" name="name" placeholder="Имя">
									<span class="error-input"></span>
								</label>
								<label class="form-input">
									<input type="text" name="phone" placeholder="Телефон">
									<span class="error-input"></span>
								</label>
								<label class="form-input">
									<input type="text" name="email" placeholder="@mail">
									<span class="error-input"></span>
								</label>
								<label class="form-input">
									<input type="text" name="text" placeholder="Населенный пункт">
									<span class="error-input"></span>
								</label>
								<button type="submit" class="entrance-form__btn">
									Отправить
								</button>
							</form>
						</div>
						<h4 class="training-info__title">
							Как поступить в НОЧУ ВО «МЭИ»
						</h4>
						<p class="training-info__subtitle">
							Для поступления нужно сделать три простых шага:
						</p>
						<ul class="training-info__text">
							<li class="training-info__item">
								<p class="training-info__list-title">
									1. Подать документы
								</p>
								<p class="training-info__elem">
									Заполнив заявку на сайте. Либо через приемную комиссию по адресу: г. Ростов-на-Дону, пер. Гвардейский 11/В <br> (часы работы с 9:00 до 18:00)
								</p>
								<p class="training-info__elem">
									Для поступления требуется заполнить ряд заявлений и предоставить следующие документы*:
								</p>
								<ul class="training-info__inside-list">
									<li>
										Паспорт (страницы с фотографией и регистрацией)
									</li>
									<li>
										Оригинал документа установленного образца о предыдущем образовании либо его копия, заверенная нотариально, <br> либо его копия с предъявлением оригинала для заверения копии приемной комиссией
									</li>
									<li>
										2 фотографии 3х4 (матовые, цветные или черно-белые)
									</li>
								</ul>
							</li>
							<li class="training-info__item">
								<p class="training-info__list-title">
									2. Пройти вступительные задания
								</p>
								<p class="training-info__elem">
									Специалист приемной комиссии свяжется с вами, для обсуждения <br> условий прохождения вступительных заданий (тестирование).
								</p>
								<p class="training-info__elem">
									*Абитуриентам, у которых в наличии актуальные результаты ЕГЭ по выбранному <br> направлению проходить вступительные задания не требуется.
								</p>
							</li>
							<li class="training-info__item">
								<p class="training-info__list-title">
									3. Заключить договор об обучении
								</p>
								<p class="training-info__elem">
									После успешного выполнения вступительных заданий и при наличии всех <br> необходимых документов и заполненных заявлений. Специалист приемной <br> комиссии подготовит для Вас договор об обучении. Далее необходимо <br> будет внести оплату и в установленную дату начать обучение.
								</p>
								<p class="training-info__list-title">
									Сведения об образовательной организации НОЧУ ВО «МЭИ»
								</p>
								<p class="training-info__elem">
									«Московский экономический институт» — негосударственное образовательное <br> частное учреждение высшего образования (НОЧУ ВО «МЭИ») создано в <br>соответствии с Гражданским кодексом РФ по решению учредителя, зарегистрировано <br> Московской Регистрационной палатой (Свидетельство № 4571-2 от 31 октября 1996 года).
								</p>
								<p class="training-info__elem">
									Учредители образовательной организации Сурат Игорь Львович, телефон: <a href="tel:84991768800">8 (499) 176 88 00</a>, e-mail: <a href="mailto:surat@list.ru">surat@list.ru</a>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="training-info__gallery-license training-info__gallery-license_mei">
					<?php echo do_shortcode('[supsystic-gallery id=3]') ?>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part('footer') ?>