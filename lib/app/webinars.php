<?php

namespace App\Webinars;


/**
 * Czy webinar już się odbył
 *
 * @param [type] $webinar
 * @return boolean
 */
function is_historical_webinar( $webinar)
{
    $data_rozpoczecia = get_field( 'data_rozpoczecia', $webinar);
    $curr_date = \App\Helper\get_warsaw_date('Y-m-d H:i:s');
    $is_historical = ( $curr_date > $data_rozpoczecia)? true: false;

    return $is_historical;
}


/**
 * Jezeli post jest webinarem, webinar się odbył i nie ma linku do wideo
 *
 * @param object $post
 * @return boolean
 */
function is_empty_webinar( $post)
{
    if( get_post_type( $post) !== 'webinar')
    {
        return false;
    }

    if( is_historical_webinar( $post))
    {
        $link = trim( get_field( 'link_do_webinaru', $post));
        if( empty( $link))
        {
            return true;
        }
    }

    return false;
}