<?php

elgg_register_event_handler('init', 'system', 'n1_theme_init');

function n1_theme_init() {
	// Override Elgg logo item
	elgg_register_menu_item('topbar', array(
		'name' => 'elgg_logo',
		'text' => elgg_get_site_entity()->name,
		'href' => elgg_get_site_url(),
		'priority' => 0,
	));
	
	if(elgg_is_menu_item_registered('site', 'groups')){
		elgg_unregister_menu_item('site', 'groups');
		elgg_register_menu_item('topbar', array(
			'name' => 'groups',
			'text' => elgg_view_icon('groups') . elgg_view('n1_theme/topbar/groups'),
			'title' => elgg_echo('groups'),
			'href' => 'groups/all',
			'priority' => 500,
		));
	}
	
	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'n1_theme_topbar_menu');
	
	elgg_extend_view('js/elgg', 'n1_theme/js');
}

function n1_theme_topbar_menu($hook, $type, $returnvalue, $params){
	//var_dump($returnvalue);exit();
}
