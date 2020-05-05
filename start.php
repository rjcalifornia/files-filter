<?php
 /***************************************************************
 * Social Filter Pro
 * Developed by SW Social Web
 * Visit us @ http://www.swsocialweb.com
 * Visit our Social Shop! http://www.swsocialweb.com/shop
 *A premium plugin free
 ****************************************************************/

elgg_register_event_handler('init', 'system', 'files_filter_init');

function files_filter_init() {

			//global $CONFIG;
		
		//Get the path
		//$actions = elgg_get_plugins_path() . 'filterpro/actions/file';
		
		//Register our new action
		//elgg_register_action('file/upload', "$actions/upload.php");
                elgg_register_action("file/upload", __DIR__ . "/actions/file/upload.php");
		
		//Extend the views
		//elgg_extend_view('page/layouts/content/elgg','page/layouts/content/header');
		//elgg_extend_view('forms/thewire/elgg','forms/thewire/add');
		//$thewire_js = elgg_get_simplecache_url('js', 'thewire');
		//elgg_register_js('elgg.thewire', $thewire_js);
}
