<?php
/**
 *
 * Auto Ban extension for the phpBB Forum Software package
 *
 * @copyright (c) 2021, Kailey Snay, https://www.layer-3.org/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'AUTO_BAN_EXPIRE'			=> 'Auto Ban expire',
	'AUTO_BAN_EXPIRE_EXPLAIN'	=> 'The time (in minutes) that the automatic ban expires. Set this value to 0 to make bans permanent.',
	'AUTO_BAN_WARNINGS'			=> 'Auto Ban warnings',
	'AUTO_BAN_WARNINGS_EXPLAIN'	=> 'Number of warnings before a user will be automatically banned.',

	'AUTO_BAN_REASON'	=> 'User has reached the maximum number of warnings and has been automatically banned.',
]);
