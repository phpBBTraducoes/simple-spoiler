<?php

/**
 * Simple Spoiler extension for phpBB.
 * Brazilian Portuguese translation by eunaumtenhoid [2020][ver 2.0.0] (https://github.com/phpBBTraducoes)
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
	'SPOILER_DEPTH_LIMIT' => 'Número máximo de spoilers por post',
	'SPOILER_DEPTH_LIMIT_EXPLAIN' => 'Número máximo de spoilers por post, sendo <samp>0</samp> igual a um valor ilimitado.'
]);
