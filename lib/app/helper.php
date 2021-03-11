<?php

namespace App\Helper;

use WP_Query;
use DateTime;
use DateTimeZone;


function filter_html_text( $text ) {
	return wp_kses( $text, allowed_html_tags_for_text() );
}


function allowed_html_tags_for_text() {
	return array(
		'b'      => array(),
		'strong' => array(),
		'br'     => array(),
		'i'      => array(),
		'span'   => array(),
		'sup'    => array(),
		'sub'    => array(),
		'del'    => array(),
		'small'  => array(),
		'em'     => array(),
	);
}

function get_custom_menu_items( $theme_location ) {
	if ( ( $theme_location ) && ( $locations = get_nav_menu_locations() ) && isset( $locations[ $theme_location ] ) ) {

		$menu       = get_term( $locations[ $theme_location ], 'nav_menu' );
		$menu_items = wp_get_nav_menu_items( $menu->term_id );

		return $menu_items;
	}
}


function get_name_for_post( $post ) {
	$post_type = get_post_type( $post );
	$name      = '';

	switch ( $post_type ) {
		case 'post':
			$name = 'Blog';
			break;
		case 'webinar':
			$name = 'Webinar';
			break;
		case 'wideo':
			$name = 'Wideo';
			break;
		case 'podcast';
			$name = 'Podcast';
		break;
	}

	return $name;
}



function get_newest_posts( $post_type, $post_num ) {

	$args = array(
		'post_type'      => $post_type,
		'post_status'    => 'publish',
		'posts_per_page' => $post_num,
	);

	if ( $post_type == 'webinar' ) {
		$args['meta_key'] = 'data_rozpoczecia';
		$args['orderby']  = 'meta_value';
		$args['order']    = 'DESC';
	} else {
		$args['orderby'] = 'date';
		$args['order']   = 'DESC';
	}

	$query = new WP_Query( $args );

	return $query->posts;
}



function get_warsaw_date( $format = 'Y-m-d' ) {
	$time_zone     = get_warsaw_time_zone();
	$date          = new DateTime( 'now', $time_zone );
	$date_formated = $date->format( $format );
	return $date_formated;
}


function get_warsaw_time_zone() {
	$time_zone = new DateTimeZone( 'Europe/Warsaw' );
	return $time_zone;
}


/**
 * Formatuje date
 *
 * @param string $date
 * @param string $format
 * @return string
 */
function format_date( $date, $format ) {
	$date = new DateTime( $date );
	return $date->format( $format );
}


/**
 * Webinar jest aktywny jezeli:
 * - webinar się jeszcze nie odbył
 * - webinar juz sie odbył i jest link do wideo
 *
 * @param [type] $post
 * @return boolean
 */
function is_active_webinar( $post ) {

	$link = trim( get_field( 'link_do_webinaru', $post ) );

	if ( \App\Webinars\is_historical_webinar( $post ) ) {
		if ( empty( $link ) ) {
			return true;
		} else {
			return false;
		}
	}

	return true;
}


/**
 * Zwraca napis na przycisku
 *
 * @param [type] $post
 * @return string
 */
function get_entry_more_title( $post ) {
	$post_type = get_post_type( $post );
	$title     = '';

	switch ( $post_type ) {
		case 'webinar':
			if ( \App\Webinars\is_historical_webinar( $post ) ) {
				$title = filter_html_text( get_field( 'napis_webinar_archiwalny', 'options' ) );
			} else {
				$title = filter_html_text( get_field( 'napis_webinar', 'options' ) );
			}
			break;
		case 'wideo':
			$title = filter_html_text( get_field( 'napis_wideo', 'options' ) );
			break;
		case 'post':
			$title = filter_html_text( get_field( 'napis_wpis', 'options' ) );
			break;
		case 'podcast':
			$title = filter_html_text( get_field( 'napis_podcast', 'options' ) );
			break;
	}

	return $title;
}
