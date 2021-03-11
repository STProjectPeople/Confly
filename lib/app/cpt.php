<?php

namespace App\CPT;



function create_custom_post_types()
{
    create_posttype_webinary();
    create_posttype_podcasty();
    create_posttype_case_studies();
    create_posttype_wideo();
    create_posttype_pomoc();
    create_posttype_opinie();

}

add_action( 'init', __NAMESPACE__ . '\\create_custom_post_types' );


function create_posttype_webinary() 
{
    register_post_type( 'webinar',
        array(
          'labels' => array(
                        'name' => __( 'Webinary', 'sage' ),
                        'singular_name' => __( 'Webinar' ),
                        'add_new'       => 'Dodaj nowy',
                    ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'webinary'),
          'show_in_rest' => true,
          'supports' => array( 'excerpt', 'title', 'editor', 'thumbnail')
        )
    );
}


function create_posttype_podcasty() 
{
    register_post_type( 'podcast',
        array(
          'labels' => array(
                        'name' => __( 'Podcasty', 'sage' ),
                        'singular_name' => __( 'Podcast' ),
                        'add_new'       => 'Dodaj nowy',
                    ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'podcasty'),
          'show_in_rest' => true,
          'supports' => array( 'excerpt', 'title', 'editor', 'thumbnail')
        )
    );
}


function create_posttype_case_studies() 
{
    register_post_type( 'case_study',
        array(
          'labels' => array(
                        'name' => __( 'Case Studies' ),
                        'singular_name' => __( 'Case Study' ),
                        'add_new'       => 'Dodaj nowe'
                    ),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array('slug' => 'case-studies'),
          'show_in_rest' => true,
          'supports' => array( 'excerpt', 'title', 'editor', 'thumbnail')
        )
    );
}


function create_posttype_wideo() 
{
    register_post_type( 'wideo',
        array(
          'labels' => array(
                        'name' => __( 'Wideo', 'sage' ),
                        'singular_name' => __( 'Wideo' ),
                        'add_new'       => 'Dodaj nowe'
                    ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'wideo'),
          'show_in_rest' => true,
          'supports' => array(  'excerpt', 'title', 'editor', 'thumbnail')
        )
    );
}


function create_posttype_pomoc() 
{
    register_post_type( 'pomoc',
        array(
          'labels' => array(
                        'name' => __( 'Pomoc', 'sage' ),
                        'singular_name' => __( 'Pomoc' ),
                        'add_new'       => 'Dodaj nową'
                    ),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array('slug' => 'pomoc'),
          'show_in_rest' => true,
          'supports' => array( 'title', 'editor', 'thumbnail')
        )
    );
}


function create_posttype_opinie() 
{
    register_post_type( 'opinia',
        array(
          'labels' => array(
                        'name' => __( 'Opinie', 'sage' ),
                        'singular_name' => __( 'Opinia' ),
                        'add_new'       => 'Dodaj nową'
                    ),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array('slug' => 'opinie'),
          'show_in_rest' => false,
          'supports' => array( 'title', 'editor')
        )
    );
}
