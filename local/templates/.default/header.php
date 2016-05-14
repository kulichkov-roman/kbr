<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html class="no-js" lang="<?=LANGUAGE_ID?>">
<head>
	<meta name="viewport" content="width=1200">
	<meta name="ktoprodvinul" content="f23be9b2b6271327">
	<meta name="cmsmagazine" content="38d2170328e981e4d60ee986faaa509f">
	<title><?$APPLICATION->ShowTitle()?></title>
	<?
	CJSCore::Init();

	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/fancybox/jquery.fancybox.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/fancybox/helpers/jquery.fancybox-buttons.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css');

	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-1.11.3.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.validate-1.14.0.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.maskedinput.1.4.0.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.pack.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/css/fancybox/helpers/jquery.fancybox-buttons.js');

	$APPLICATION->AddHeadString('
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	');

	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/script.js');
	?>
	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
	<![endif]-->
	<?$APPLICATION->ShowHead()?>
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
	<div class="wrapper">
		<header class="page-header">
			<div class="container">
				<div class="header-text">
					Особняк, который подчеркнет ваш статус
					<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
						Array(
							'AREA_FILE_SHOW' => 'file',
							'PATH' => '/local/include/site_templates/hd_header_text.php',
							'EDIT_TEMPLATE' => ''
						),
						false
					);?>
				</div>
				<div class="header-contacts">
					+7 (495) 540-51-00, +7 (495) 215-11- 44
					<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
						Array(
							'AREA_FILE_SHOW' => 'file',
							'PATH' => '/local/include/site_templates/hd_header_phone.php',
							'EDIT_TEMPLATE' => ''
						),
						false
					);?>
				</div>
				<div class="header-logo">
					<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
						Array(
							'AREA_FILE_SHOW' => 'file',
							'PATH' => '/local/include/site_templates/hd_header_logo.php',
							'EDIT_TEMPLATE' => ''
						),
						false
					);?>
					<img class="header-logo__img" src="<?=SITE_TEMPLATE_PATH?>/pictures/logo.png" alt="">
				</div>
			</div>
		</header>
		<section class="content">
			<section class="section section-promo">
				<div class="container">
					<div class="promo">
						<div class="promo__wrap">
							<div class="promo__inner">
								<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
									Array(
										'AREA_FILE_SHOW' => 'file',
										'PATH' => '/local/include/site_templates/hd_section_promo_text.php',
										'EDIT_TEMPLATE' => ''
									),
									false
								);?>
								<h1 class="section__header">Продётся лучший особняк посёлка</h1>
                                <span class="promo__text">
                                      + 46.6 соток земли
                                </span>
								<div class="promo__action">
									<a href="#call-request" class="btn btn_yellow btn_lg js__popUp">Записаться на просмотр</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- section about-->

			<section class="section section-advantages">
				<div class="container">
					<div class="advantages">
						<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
							Array(
								'AREA_FILE_SHOW' => 'file',
								'PATH' => '/local/include/site_templates/hd_section_advantages_header.php',
								'EDIT_TEMPLATE' => ''
							),
							false
						);?>
						<h2 class="section__header">Всего 20 минут и вы дома</h2>
						<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
							Array(
								'AREA_FILE_SHOW' => 'file',
								'PATH' => '/local/include/site_templates/hd_section_advantages_list.php',
								'EDIT_TEMPLATE' => ''
							),
							false
						);?>
						<ul class="advantages__list">
							<li class="advantages__item">
								<div class="advantages__wrap">
									<div class="advantages__inner">
										<?$APPLICATION->IncludeComponent(
											'bitrix:main.include',
											'',
											Array(
												'AREA_FILE_SHOW' => 'file',
												'PATH' => '/local/include/site_templates/hd_section_advantages_item_1.php',
												'EDIT_TEMPLATE' => ''
											),
											false
										);?>
										<div class="advantages__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/advantages/icon-advantages-1.png" alt="">
										</div>
										<div class="advantages__title">
											Экологически<br>
											чистый район
										</div>
										<div class="advantages__text">
											Самый экологически чистый район Московской области
										</div>
									</div>
								</div>
							</li>
							<li class="advantages__item">
								<div class="advantages__wrap">
									<div class="advantages__inner">
										<?$APPLICATION->IncludeComponent(
											'bitrix:main.include',
											'',
											Array(
												'AREA_FILE_SHOW' => 'file',
												'PATH' => '/local/include/site_templates/hd_section_advantages_item_2.php',
												'EDIT_TEMPLATE' => ''
											),
											false
										);?>
										<div class="advantages__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/advantages/icon-advantages-2.png" alt="">
										</div>
										<div class="advantages__title">
											Клубный<br>
											формат поселка
										</div>
										<div class="advantages__text">
											Это высокий социальный статус Ваших соседей и широкие
											возможности для активного и семейного отдыха
										</div>
									</div>
								</div>
							</li>
							<li class="advantages__item">
								<div class="advantages__wrap">
									<div class="advantages__inner">
										<?$APPLICATION->IncludeComponent(
											'bitrix:main.include',
											'',
											Array(
												'AREA_FILE_SHOW' => 'file',
												'PATH' => '/local/include/site_templates/hd_section_advantages_item_3.php',
												'EDIT_TEMPLATE' => ''
											),
											false
										);?>
										<div class="advantages__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/advantages/icon-advantages-3.png" alt="">
										</div>
										<div class="advantages__title">
											Легко<br>
											добраться
										</div>
										<div class="advantages__text">
											Всего 20 минут в пути на вашем автомобиле от Москвы
										</div>
									</div>
								</div>
							</li>
							<li class="advantages__item">
								<div class="advantages__wrap">
									<div class="advantages__inner">
										<?$APPLICATION->IncludeComponent(
											'bitrix:main.include',
											'',
											Array(
												'AREA_FILE_SHOW' => 'file',
												'PATH' => '/local/include/site_templates/hd_section_advantages_item_4.php',
												'EDIT_TEMPLATE' => ''
											),
											false
										);?>
										<div class="advantages__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/advantages/icon-advantages-4.png" alt="">
										</div>
										<div class="advantages__title">
											Развитая<br>
											инфраструктура
										</div>
										<div class="advantages__text">
											Детский сад, школа, больница, магазины. Все в 10 минутной доступности
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section> <!-- section-advantages -->
			<section class="section section-offer">
				<div class="container">
					<div class="offer">
						<h2 class="section__header">Лучшее предложение 2016 года</h2>
						<div class="offer-info">
							<div class="offer-info__left">
								<?$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									Array(
										'AREA_FILE_SHOW' => 'file',
										'PATH' => '/local/include/site_templates/hd_offer_info_left.php',
										'EDIT_TEMPLATE' => ''
									),
									false
								);?>
								<ul class="offer-info__list">
									<li class="offer-info__item">
										<div class="offer-info__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/offer/icon-offer-1.png" alt="">
										</div>
										<div class="offer-info__title">
											4 ванных комнаты
										</div>
									</li>
									<li class="offer-info__item">
										<div class="offer-info__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/offer/icon-offer-2.png" alt="">
										</div>
										<div class="offer-info__title">
											2 кухни
										</div>
									</li>
									<li class="offer-info__item">
										<div class="offer-info__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/offer/icon-offer-3.png" alt="">
										</div>
										<div class="offer-info__title">
											гараж на 4 машины
										</div>
									</li>
									<li class="offer-info__item">
										<div class="offer-info__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/offer/icon-offer-4.png" alt="">
										</div>
										<div class="offer-info__title">
											2 гостиные
										</div>
									</li>
									<li class="offer-info__item">
										<div class="offer-info__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/offer/icon-offer-5.png" alt="">
										</div>
										<div class="offer-info__title">
											5 спалень
										</div>
									</li>
									<li class="offer-info__item">
										<div class="offer-info__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/offer/icon-offer-6.png" alt="">
										</div>
										<div class="offer-info__title">
											спортзал
										</div>
									</li>
									<li class="offer-info__item">
										<div class="offer-info__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/offer/icon-offer-7.png" alt="">
										</div>
										<div class="offer-info__title">
											бассейн
										</div>
									</li>
									<li class="offer-info__item">
										<div class="offer-info__img-wrap">
											<img src="<?=SITE_TEMPLATE_PATH?>/pictures/offer/icon-offer-8.png" alt="">
										</div>
										<div class="offer-info__title">
											баня
										</div>
									</li>
								</ul>
							</div>
							<div class="offer-info__right">
								<?$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									Array(
										'AREA_FILE_SHOW' => 'file',
										'PATH' => '/local/include/site_templates/hd_offer_info_right.php',
										'EDIT_TEMPLATE' => ''
									),
									false
								);?>
								<div class="offer-info__text">
									<h3>
										Площадь 659,6 м2<br>
										Более 20 просторных комнат
									</h3>
									<table>
										<tr>
											<td>Год постройки:</td>
											<td>2011 г.</td>
										</tr>
										<tr>
											<td>Этажность:</td>
											<td>2 + подвал</td>
										</tr>
										<tr>
											<td>Уровней:</td>
											<td>3</td>
										</tr>
										<tr>
											<td>Фундамент:</td>
											<td>Монолит</td>
										</tr>
										<tr>
											<td>Стены:</td>
											<td>Бетонные блоки,<br> облицовочный кирпич</td>
										</tr>
										<tr>
											<td>Перекрытия:</td>
											<td>Железобетонные</td>
										</tr>
										<tr>
											<td>Кровля:</td>
											<td>Мягкая кровля</td>
										</tr>
										<tr>
											<td>Отделка:</td>
											<td>Под ключ</td>
										</tr>
										<tr>
											<td>Мебель:</td>
											<td>Полностью</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="offer__action">
							<a href="#call-request" class="btn btn_yellow btn_lg js__popUp">Записаться на просмотр</a>
						</div>
						<div class="offer-gallery">
							<?$APPLICATION->IncludeComponent(
								'bitrix:main.include',
								'',
								Array(
									'AREA_FILE_SHOW' => 'file',
									'PATH' => '/local/include/site_templates/hd_offer_gallery.php',
									'EDIT_TEMPLATE' => ''
								),
								false
							);?>
							<ul class="offer-gallery__list">
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-1.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-1.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-2.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-2.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-3.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-3.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-4.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-4.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-5.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-5.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-6.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-6.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-7.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-7.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-8.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-8.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-9.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-9.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-10.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-10.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-11.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-11.jpg" alt="" />
                                        </span>
									</a>
								</li>
								<li class="offer-gallery__item">
									<a href="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-12.jpg" class="offer-gallery__link fancybox" rel="gallery">
                                        <span class="offer-gallery__link-inner">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/pictures/gallery/photo-12.jpg" alt="" />
                                        </span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section> <!-- section-offer -->
			<section class="section section-about">
				<div class="container">
					<div class="about">
						<?$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							Array(
								'AREA_FILE_SHOW' => 'file',
								'PATH' => '/local/include/site_templates/hd_about_h2.php',
								'EDIT_TEMPLATE' => ''
							),
							false
						);?>
						<h2 class="section__header">Уютное место для семьи и друзей</h2>
						<div class="about-place">
							<?$APPLICATION->IncludeComponent(
								'bitrix:main.include',
								'',
								Array(
									'AREA_FILE_SHOW' => 'file',
									'PATH' => '/local/include/site_templates/hd_about_place_list.php',
									'EDIT_TEMPLATE' => ''
								),
								false
							);?>
							<ul class="about-place__list">
								<li class="about-place__item">
									<?$APPLICATION->IncludeComponent(
										'bitrix:main.include',
										'',
										Array(
											'AREA_FILE_SHOW' => 'file',
											'PATH' => '/local/include/site_templates/hd_about_place_item_1.php',
											'EDIT_TEMPLATE' => ''
										),
										false
									);?>
									<div class="about-place__img-wrap">
										<img src="<?=SITE_TEMPLATE_PATH?>/pictures/place/place-1.jpg" alt="" />
									</div>
									<div class="about-place__text">
										Бойлерная, помещение<br>
										свободного назначения,<br>
										постирочная, комната<br>
										хоз/назначения (кладовая), с/у.
									</div>
								</li>
								<li class="about-place__item">
									<?$APPLICATION->IncludeComponent(
										'bitrix:main.include',
										'',
										Array(
											'AREA_FILE_SHOW' => 'file',
											'PATH' => '/local/include/site_templates/hd_about_place_item_2.php',
											'EDIT_TEMPLATE' => ''
										),
										false
									);?>
									<div class="about-place__img-wrap">
										<img src="<?=SITE_TEMPLATE_PATH?>/pictures/place/place-2.jpg" alt="" />
									</div>
									<div class="about-place__text">
										Гараж, бассейн, просторная терраса с выходами на участок, холл, с/у, спальня с с/у, гостиная
										с выходом на террасу, спальня, гардеробная, прихожая, кухня-столовая, гардеробная, спортзал.
									</div>
								</li>
								<li class="about-place__item">
									<?$APPLICATION->IncludeComponent(
										'bitrix:main.include',
										'',
										Array(
											'AREA_FILE_SHOW' => 'file',
											'PATH' => '/local/include/site_templates/hd_about_place_item_3.php',
											'EDIT_TEMPLATE' => ''
										),
										false
									);?>
									<div class="about-place__img-wrap">
										<img src="<?=SITE_TEMPLATE_PATH?>/pictures/place/place-3.jpg" alt="" />
									</div>
									<div class="about-place__text">
										Спальня с с/у, спальня с ванной и гардеробом, с/у, библиотека, спальня.
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="section-request section-request_dark">
						<div class="call-request-form">
							<div class="call-request-form__wrap">
								<div class="call-request-form__inner">
									<div class="form-request">
										<?$APPLICATION->IncludeComponent(
											'bitrix:main.include',
											'',
											Array(
												'AREA_FILE_SHOW' => 'file',
												'PATH' => '/local/include/site_templates/hd_section_request_form_1.php',
												'EDIT_TEMPLATE' => ''
											),
											false
										);?>
										<div class="form__header">
											Приезжайте и лично оцените<br>
											ваш новый роскошный дом
										</div>
										<form action="/" class="form-call-request js__call-request">
											<ul class="form__list">
												<li class="form__item">
													<label for="formName" class="form__label">Ваше имя</label>
													<input type="text" class="form__input_text" id="formName" required>
												</li>
												<li class="form__item">
													<label for="formPhone" class="form__label">Телефон</label>
													<input type="tel" class="form__input_text phone-field" placeholder="+7 (___) ___-__-__" id="formPhone" required>
												</li>
												<li class="form__item form__item_btn">
													<input type="submit" class="btn btn_yellow form__submit" value="Записаться на просмотр">
												</li>
											</ul>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="about-landscape">
						<?$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							Array(
								'AREA_FILE_SHOW' => 'file',
								'PATH' => '/local/include/site_templates/hd_about_landscape_h2_img.php',
								'EDIT_TEMPLATE' => ''
							),
							false
						);?>
						<h2>Поселок с современной инфраструктурой</h2>
						<figure>
							<img src="<?=SITE_TEMPLATE_PATH?>/pictures/landscape_03.jpg" alt="">
							<figcaption>Ландшафт: лесной</figcaption>
						</figure>

						<div class="about-landscape__content">
							<div class="about-landscape__descr">
								<?$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									Array(
										'AREA_FILE_SHOW' => 'file',
										'PATH' => '/local/include/site_templates/hd_about_landscape_descr.php',
										'EDIT_TEMPLATE' => ''
									),
									false
								);?>
								<table>
									<tr>
										<td>
											Поселок расположен на территории крупного лесного массива. Рядом
											находится побережье Пироговского водохранилища с оборудованными
											пляжными зонами и местами для рыбной ловли. Прекрасная экология,
											близость к Москве, современные коммуникации.
										</td>
										<td>
											Площадь жилого комплекса «Княжий Бор» под постоянной охраной.
											Периметр поселка огражден, а на въезде оборудована контрольно-пропускная
											система.
										</td>
									</tr>
								</table>
							</div>
							<div class="about-landscape-text">
								<?$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									Array(
										'AREA_FILE_SHOW' => 'file',
										'PATH' => '/local/include/site_templates/hd_about_landscape_text.php',
										'EDIT_TEMPLATE' => ''
									),
									false
								);?>
								<ul>
									<li>
										Освещение, газоны
									</li>
									<li>
										Участки огорожены
									</li>
									<li>
										Внутрипоселковые дороги и тротуары
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- section-about -->
			<section class="section section-area">
				<div class="container">
					<div class="area">
						<?$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							Array(
								'AREA_FILE_SHOW' => 'file',
								'PATH' => '/local/include/site_templates/hd_section_area_h2.php',
								'EDIT_TEMPLATE' => ''
							),
							false
						);?>
						<h2 class="section__header">Просторный участок, который не хочется покидать</h2>
						<div class="area__wrap">
							<div class="area-gallery">
								<?$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									Array(
										'AREA_FILE_SHOW' => 'file',
										'PATH' => '/local/include/site_templates/hd_section_area_gallery_list.php',
										'EDIT_TEMPLATE' => ''
									),
									false
								);?>
								<ul class="area-gallery__list">
									<li class="area-gallery__item">
										<a href="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-1.jpg" class="area-gallery__link fancybox" rel="gallery-2">
                                            <span class="area-gallery__link-inner">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-1.jpg" alt="" />
                                            </span>
										</a>
									</li>
									<li class="area-gallery__item">
										<a href="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-2.jpg" class="area-gallery__link fancybox" rel="gallery-2">
                                            <span class="area-gallery__link-inner">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-2.jpg" alt="" />
                                            </span>
										</a>
									</li>
									<li class="area-gallery__item">
										<a href="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-3.jpg" class="area-gallery__link fancybox" rel="gallery-2">
                                            <span class="area-gallery__link-inner">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-3.jpg" alt="" />
                                            </span>
										</a>
									</li>
									<li class="area-gallery__item">
										<a href="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-4.jpg" class="area-gallery__link fancybox" rel="gallery-2">
                                            <span class="area-gallery__link-inner">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-4.jpg" alt="" />
                                            </span>
										</a>
									</li>
									<li class="area-gallery__item">
										<a href="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-5.jpg" class="area-gallery__link fancybox" rel="gallery-2">
                                            <span class="area-gallery__link-inner">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-5.jpg" alt="" />
                                            </span>
										</a>
									</li>
									<li class="area-gallery__item">
										<a href="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-6.jpg" class="area-gallery__link fancybox" rel="gallery-2">
                                            <span class="area-gallery__link-inner">
                                                <img src="<?=SITE_TEMPLATE_PATH?>/pictures/area/area-6.jpg" alt="" />
                                            </span>
										</a>
									</li>
								</ul>
							</div>
							<div class="area__text">
								<?$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									Array(
										'AREA_FILE_SHOW' => 'file',
										'PATH' => '/local/include/site_templates/hd_section_area_text_h3.php',
										'EDIT_TEMPLATE' => ''
									),
									false
								);?>
								<h3>
									Большой ухоженный лесной участок
								</h3>
								<?$APPLICATION->IncludeComponent(
									'bitrix:main.include',
									'',
									Array(
										'AREA_FILE_SHOW' => 'file',
										'PATH' => '/local/include/site_templates/hd_section_area_text_ul.php',
										'EDIT_TEMPLATE' => ''
									),
									false
								);?>
								<ul>
									<li>
										На участке отдельно стоящая баня- 65 кв.м. Комната отдыха, столовая, кухней
										и тренажерный зал с панорамными окнами
									</li>
									<li>Финская беседка с барбекью.</li>
									<li>Вымощены дорожки, установлено освещение.</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</section> <!-- section-area -->
			<section class="section section-infrastructure">
				<div class="container">
					<div class="infrastructure">
						<?$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							Array(
								'AREA_FILE_SHOW' => 'file',
								'PATH' => '/local/include/site_templates/hd_section_infrastructure_h2.php',
								'EDIT_TEMPLATE' => ''
							),
							false
						);?>
						<h2 class="section__header">
							В поселке предусмотрена вся инфраструктура<br>
							необходимая для постоянного проживания
						</h2>
						<?$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							Array(
								'AREA_FILE_SHOW' => 'file',
								'PATH' => '/local/include/site_templates/hd_section_infrastructure_list.php',
								'EDIT_TEMPLATE' => ''
							),
							false
						);?>
						<ul class="infrastructure__list">
							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-1.png" alt="">
								</div>
								<div class="infrastructure__title">
									Электричество<br>
									7,5 кВт
								</div>
							</li>

							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-2.png" alt="">
								</div>
								<div class="infrastructure__title">
									Газ
								</div>
							</li>

							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-3.png" alt="">
								</div>
								<div class="infrastructure__title">
									Ограждение и КПП,<br>
									круглосуточная<br>
									охрана
								</div>
							</li>

							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-4.png" alt="">
								</div>
								<div class="infrastructure__title">
									Благоустройство<br>
									территории поселка
								</div>
							</li>

							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-5.png" alt="">
								</div>
								<div class="infrastructure__title">
									Спортивные площадки<br>
									и места активного<br>
									отдыха
								</div>
							</li>

							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-6.png" alt="">
								</div>
								<div class="infrastructure__title">
									Гостевая парковка<br>
									на 18 машин
								</div>
							</li>

							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-7.png" alt="">
								</div>
								<div class="infrastructure__title">
									Освещение зон<br>
									отдыха и спорта
								</div>
							</li>
							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-8.png" alt="">
								</div>
								<div class="infrastructure__title">
									Высокоскоростной<br>
									проводной интернет
								</div>
							</li>
							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-9.png" alt="">
								</div>
								<div class="infrastructure__title">
									Дороги<br>
									и ливневые стоки
								</div>
							</li>
							<li class="infrastructure__item">
								<div class="infrastructure__img-wrap">
									<img src="<?=SITE_TEMPLATE_PATH?>/pictures/infrastructure/icon-inf-10.png" alt="">
								</div>
								<div class="infrastructure__title">
									Уборка территории<br>
									и вывоз мусора
								</div>
							</li>
						</ul>
					</div>
					<div class="section-request">
						<div class="call-request-form">
							<div class="call-request-form__wrap">
								<div class="call-request-form__inner">
									<?$APPLICATION->IncludeComponent(
										'bitrix:main.include',
										'',
										Array(
											'AREA_FILE_SHOW' => 'file',
											'PATH' => '/local/include/site_templates/hd_section_request_form_2.php',
											'EDIT_TEMPLATE' => ''
										),
										false
									);?>
									<div class="form__header">
										Оставьте заявку на просмотр особняка
									</div>
									<form action="/" class="form-call-request js__call-request">
										<ul class="form__list">
											<li class="form__item">
												<label for="formName2" class="form__label">Ваше имя</label>
												<input type="text" class="form__input_text" id="formName2" required>
											</li>
											<li class="form__item">
												<label for="formPhone2" class="form__label">Телефон</label>
												<input type="tel" class="form__input_text phone-field" placeholder="+7 (___) ___-__-__" id="formPhone2">
											</li>
											<li class="form__item form__item_btn">
												<input type="submit" class="btn btn_yellow form__submit" value="Перезвоните мне">
											</li>
										</ul>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- section-infrastructure -->
			<div class="section-map">
				<div class="section-map__inner" id="map_canvas"></div>
			</div>
		</section> <!-- content -->
	</div> <!-- wrapper -->
