<?php

elgg_register_event_handler('init', 'system', 'krankenstein_theme_init');

function krankenstein_theme_init() {
	elgg_unregister_menu_item('topbar','elgg_logo');
	/*$item =  new ElggMenuItem('site_logo', elgg_get_site_entity()->name, elgg_get_site_url());
	elgg_register_menu_item('topbar', $item);*/
	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'krankenstein_theme_topbar_menu');
	
	elgg_extend_view('css/elgg', 'krankenstein_theme/css');
	//elgg_extend_view('js/elgg', 'krankenstein_theme/js');
}

function krankenstein_theme_topbar_menu($hook, $type, $returnvalue, $params){
	$user = elgg_get_logged_in_user_entity();

	if (elgg_is_active_plugin('groups')) {

		$ia = elgg_set_ignore_access(TRUE);
		$num_invitations = elgg_get_entities_from_relationship(array(
			'relationship' => 'invited',
			'relationship_guid' => $user->guid,
			'inverse_relationship' => TRUE,
			'limit' => 0,
			'count' => TRUE,
		));
		elgg_set_ignore_access($ia);

		if ($num_invitations) {
			$num_invitations = elgg_view('output/url', array(
				'text' => "<span class=\"messages-new\">$num_invitations</span>",
				'href' => "groups/invitations/$user->username",
			));
		}

		$returnvalue[] = ElggMenuItem::factory(array(
			'name' => 'groups',
			'href' => "groups/member/$user->username",
			'text' => elgg_view_icon('groups') . $num_invitations,
			'title' => elgg_echo('groups'),
			'priority' => 500,
		));
	}

	if (elgg_is_admin_logged_in()) {
		$returnvalue[] = ElggMenuItem::factory(array(
			'name' => 'administration',
			'href' => "admin",
			'text' => elgg_view_icon('settings'),
			'title' => elgg_echo('admin'),
			'priority' => 100,
			'section' => 'alt',
		));
	}
	
	if (elgg_is_active_plugin('dashboard')) {
		$returnvalue[] = ElggMenuItem::factory(array(
			'name' => 'dashboard',
			'href' => "dashboard",
			'text' => elgg_view_icon('home'),
			'title' => elgg_echo('dashboard'),
			'priority' => 200,
			'section' => 'alt',
		));
	}

	$returnvalue[] = ElggMenuItem::factory(array(
		'name' => 'usersettings',
		'href' => "settings/user/{$user->username}",
		'text' => elgg_view_icon('settings-alt'),
		'title' => elgg_echo('settings'),
		'priority' => 500,
		'section' => 'alt',
	));

	$returnvalue[] = ElggMenuItem::factory(array(
		'name' => 'logout',
		'href' => "action/logout",
		'text' => elgg_echo('logout'),
		'title' => elgg_echo('logout'),
		'is_action' => TRUE,
		'priority' => 1000,
		'section' => 'alt',
	));
	return $returnvalue;
}