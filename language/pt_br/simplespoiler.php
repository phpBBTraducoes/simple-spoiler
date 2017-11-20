<?php

/**
 * Simple Spoiler Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.2.0] (https://github.com/phpBBTraducoes)
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'SPOILER'			=> 'Spoiler',
	'SPOILER_HELPLINE'	=> 'Uso: [spoiler]texto[/spoiler] ou [spoiler=título]texto[/spoiler]',
	'SPOILER_SHOW'		=> 'Mostrar',
	'SPOILER_HIDE'		=> 'Esconder'
]);
