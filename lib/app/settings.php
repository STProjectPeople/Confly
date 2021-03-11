<?php

namespace App\Settings;

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Globalne',
		'menu_title'	=> 'Globalne',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Globalne - FAQ',
		'menu_title'	=> 'FAQ',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Globalne - Nagłówek',
		'menu_title'	=> 'Nagłówek',
		'parent_slug'	=> 'theme-general-settings',
	));	
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Globalne - Plany',
		'menu_title'	=> 'Plany',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Globalne - Porównanie planów',
		'menu_title'	=> 'Porównanie planów',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Globalne - Stopka',
		'menu_title'	=> 'Stopka',
		'parent_slug'	=> 'theme-general-settings',
	));	
}
