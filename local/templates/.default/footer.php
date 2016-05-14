<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}
?>
		<footer class="page-footer">
			<div class="container">
				<div class="footer-copyright">
					2016 Клубный поселок “Княжий Бор”
					<?$APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						Array(
							'AREA_FILE_SHOW' => 'file',
							'PATH' => '/local/include/site_templates/ft_footer_copyright.php',
							'EDIT_TEMPLATE' => ''
						),
						false
					);?>
				</div>
				<div class="footer-developer">
					<?$APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'',
						Array(
							'AREA_FILE_SHOW' => 'file',
							'PATH' => '/local/include/site_templates/ft_footer_developer.php',
							'EDIT_TEMPLATE' => ''
						),
						false
					);?>
					<a href="http://yalstudio.ru" class="footer-developer__link" title="Создание сайтов - Студия ЯЛ">Создание сайтов - Студия ЯЛ</a>
				</div>
			</div>
		</footer>
		<div class="hidden">
			<div class="call-request-form" id="call-request">
				<div class="call-request-form__wrap">
					<div class="call-request-form__inner">
						<?$APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							Array(
								'AREA_FILE_SHOW' => 'file',
								'PATH' => '/local/include/site_templates/ft_call_request_form_3.php',
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
									<label for="formName3" class="form__label">Ваше имя</label>
									<input type="text" class="form__input_text" id="formName3" required>
								</li>
								<li class="form__item">
									<label for="formPhone3" class="form__label">Телефон</label>
									<input type="tel" class="form__input_text phone-field" placeholder="+7 (___) ___-__-__" id="formPhone3">
								</li>
								<li class="form__item form__item_btn">
									<input type="submit" class="btn btn_yellow form__submit" value="Перезвоните мне">
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="form-answer" id="form-answer">
				<div class="form-answer__wrap">
					<div class="form-answer__inner">
						<div class="form-answer__title">Спасибо за заявку</div>
						<div class="form-answer__text">
							В самое ближайшее время с вами свяжется наш<br>
							специалист и договорится с вами о просмотре.
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
