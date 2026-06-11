<?php


function monk_post_types()
{
  register_post_type(
    'Counter',
    array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'counter'),
      'has_archive' => true,
      'public' => true,
        'labels' => array(
        'name' => 'Counter',
        'add_new_item' => 'Add New Counter',
        'edit_item' => 'Edit Counter',
        'all_items' => 'All Counters',
        'singular_name' => 'Counter'
      ),
      'menu_icon' => 'dashicons-calendar'

    )
  );


  register_post_type(
    'AI Hub',
    array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'ai-hub'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'AiHub',
        'add_new_item' => 'Add New AI Hub',
        'edit_item' => 'Edit AI Hub',
        'all_items' => 'All AI Hubs',
        'singular_name' => 'AI Hub'
      ),
      'menu_icon' => 'dashicons-awards'

    )
  );

  

}

add_action('init', 'monk_post_types');