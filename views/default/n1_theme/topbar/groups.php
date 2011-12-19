<?php

$content = elgg_list_entities_from_relationship_count(array(
	'type' => 'group',
	'relationship' => 'member',
	'relationship_guid' => elgg_get_logged_in_user_guid(),
	'list_type' => 'gallery',
	'inverse_relationship' => false,
	'full_view' => false,
));
if (!$content) {
	$content = elgg_echo('groups:none');
}

$content .= elgg_view('output/url', array(
	'text' => elgg_echo('groups:all'),
	'href' => 'groups/all',
));

echo "<div class='elgg-module elgg-module-popup hidden clearfix' id='topbar-groups'>$content</div>";
