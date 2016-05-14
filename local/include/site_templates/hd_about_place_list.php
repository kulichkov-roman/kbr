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
								</li>
							</ul>
