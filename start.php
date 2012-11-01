<?php

elgg_register_event_handler('init', 'system', 'cic_theme_init');

function cic_theme_init() {
	elgg_unregister_menu_item('topbar','elgg_logo');
	$item =  new ElggMenuItem('site_logo', elgg_get_site_entity()->name, elgg_get_site_url());
	elgg_register_menu_item('topbar', $item);
	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'cic_theme_topbar_menu');
	
	elgg_register_simplecache_view('cic_theme/landing');
	elgg_register_css('cic:landing_page', elgg_get_simplecache_url('css', 'cic_theme/landing'));
	
	elgg_extend_view('css/elgg', 'cic_theme/css');
	elgg_extend_view('js/elgg', 'cic_theme/js');
	elgg_extend_view('page/elements/title', 'cic_theme/header', 0);
	// custom index widgets
	foreach(array("custom_index", "edit_widgets", "index_2rbhh", "index_2rhhb", 
		      "index",  "index_2rbms", "index_2rmsb",
		      "index_1rsss", "index_2rbsm", "index_2rsmb") as $layout) {
		elgg_extend_view('page/layouts/'.$layout, 'cic_theme/landing', 0);
	}
	
	if (elgg_is_active_plugin('pages')) {
		// pages icon url override
		elgg_register_plugin_hook_handler('entity:icon:url', 'object', 'cic_theme_pages_icon_url_override');
	}
}

function cic_theme_topbar_menu($hook, $type, $returnvalue, $params){
	//var_dump($returnvalue);exit();
}

/**
 * Override the default entity icon for pages and pads
 *
 * @return string Relative URL
 */
function cic_theme_pages_icon_url_override($hook, $type, $returnvalue, $params) {
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
			return "mod/cic_theme/_graphics/icons/{$icon}_tiny.gif";
			break;
		case 'small':
			return "mod/cic_theme/_graphics/icons/{$icon}_small.gif";
			break;
		default:
			return "mod/cic_theme/_graphics/icons/{$icon}_lrg.gif";
			break;
	}
}
