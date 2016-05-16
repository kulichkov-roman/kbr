<?php
/**
 * Общая конфигурация для всех сайтов и окружений
 */
\Your\Environment\EnvironmentManager::getInstance()->addConfig(
	new \Your\Environment\Configuration\CommonConfiguration(
		array(
			'interiorIBlockId' => 1,
			'exteriorIBlockId' => 2,
		)
	)
);

\Bitrix\Main\Loader::includeModule('tpic');
