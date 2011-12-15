<?php

elgg_register_event_handler('init', 'system', 'n1_theme_init');

function n1_theme_init() {
	elgg_unregister_menu_item('topbar','elgg_logo');
	$item =  new ElggMenuItem('site_logo', elgg_get_site_entity()->name, elgg_get_site_url());
	elgg_register_menu_item('topbar', $item);
	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'n1_theme_topbar_menu');
}

function n1_theme_topbar_menu($hook, $type, $returnvalue, $params){
	//var_dump($returnvalue);exit();
}
