<?php

/**
 * Simple Spoiler Extension for phpBB.
 * Brazilian Portuguese translation by eunaumtenhoid [2017][ver 1.3.0] (https://github.com/phpBBTraducoes)
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
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
