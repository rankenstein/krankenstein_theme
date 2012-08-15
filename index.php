<?php
/**
 * Elgg index page for web-based applications
 *
 * @package Elgg
 * @subpackage Core
 */

if (elgg_is_logged_in()) {
	forward('activity');
}

elgg_load_css('n1:landing_page');

$content = elgg_view('n1_theme/landing');
$content .= elgg_view_title(elgg_echo('content:latest'));
$content .= elgg_list_river();

$login_box = elgg_view('core/account/login_box');

$params = array(
		'content' => $content,
		'sidebar' => $login_box
);
$body = elgg_view_layout('one_sidebar', $params);
echo elgg_view_page(null, $body);
