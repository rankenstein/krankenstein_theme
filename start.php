<?php

elgg_register_event_handler('init', 'system', 'n1_theme_init');

function n1_theme_init() {
	elgg_unregister_menu_item('topbar','elgg_logo');
	$item =  new ElggMenuItem('site_logo', elgg_get_site_entity()->name, elgg_get_site_url());
	elgg_register_menu_item('topbar', $item);
	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'n1_theme_topbar_menu');
	
	elgg_register_plugin_hook_handler('index', 'system', 'n1_theme_front_page');
	
	elgg_register_simplecache_view('n1_theme/landing');
	elgg_register_css('n1:landing_page', elgg_get_simplecache_url('css', 'n1_theme/landing'));
	
	elgg_extend_view('css/elgg', 'n1_theme/css');
	elgg_extend_view('js/elgg', 'n1_theme/js');
	
	if (elgg_is_active_plugin('pages')) {
		// pages icon url override
		elgg_register_plugin_hook_handler('entity:icon:url', 'object', 'n1_theme_pages_icon_url_override');
	}
}

function n1_theme_topbar_menu($hook, $type, $returnvalue, $params){
	//var_dump($returnvalue);exit();
}

function n1_theme_front_page($hook, $type, $returnvalue, $params) {
	include(elgg_get_plugins_path() . 'n1_theme/index.php');
	return true;
}

/**
 * Override the default entity icon for pages and pads
 *
 * @return string Relative URL
 */
function n1_theme_pages_icon_url_override($hook, $type, $returnvalue, $params) {
	$entity = $params['entity'];
	if (elgg_instanceof($entity, 'object', 'page_top') ||
		elgg_instanceof($entity, 'object', 'page')) {
		$icon = 'pages';
	} elseif (elgg_instanceof($entity, 'object', 'etherpad') ||
			  elgg_instanceof($entity, 'object', 'subpad')) {
		$icon = 'pad';
	} else {
		return $returnvalue;
	}
	switch ($params['size']) {
		case 'topbar':
		case 'tiny':
			return "mod/n1_theme/_graphics/icons/{$icon}_tiny.gif";
			break;
		case 'small':
			return "mod/n1_theme/_graphics/icons/{$icon}_small.gif";
			break;
		default:
			return "mod/n1_theme/_graphics/icons/{$icon}_lrg.gif";
			break;
	}
}
