<?php

namespace App\ACFExt;


function get_fields_table()
{
    global $wpdb;
    static $fields_table = array();

    if( empty($fields_table))
    {
        $sql = "SELECT post_excerpt, post_name, post_parent FROM wp_posts WHERE post_type='acf-field' and post_status='publish'";       
        $fields_table = $wpdb->get_results( $sql, OBJECT_K );
    }

    return $fields_table;
}


function get_field_id( $field_name)
{
    $fields_table = get_fields_table();    
    if( isset($fields_table[$field_name]))
    {
        $field_id = $fields_table[$field_name]->post_name;
        return $field_id;
    }
    
    return;
}


function format_target_attr( $target)
{
    $target=' '; 

    if( ! empty( $przycisk['target'])) 
    { 
        $target = ' target="' . $przycisk['target'] . '" ';
    }

    return $target;
}


function the_block_title( $block)
{
    if( is_admin() && isset( $block['title']))
    {
        echo '<h3>Blok: ' . $block['title'] . ' - brak danych</h3>';
    }
}
