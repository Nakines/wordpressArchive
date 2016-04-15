
        register_post_type(   'dates',   
            array(     'label' => 'Dates',     
                  'labels' => array(   
                    'show_in_menu'        => TRUE,
                    'show_in_nav_menus'   => TRUE,    
                      'name' => 'Dates',       
                      'singular_name' => 'Important dates',       
                      'all_items' => 'Important dates',       
                      'add_new_item' => 'Ajouter',       
                      'edit_item' => 'Edit Important dates',       
                      'new_item' => 'New post will delete older',       
                      'view_item' => 'See the post',       
                      'search_items' => 'Search item',       
                      'not_found' => 'No item found',       
                      'not_found_in_trash'=> 'No trashes item'
                  ),     
                'taxonomies' => array('category'),
                'menu_icon' => 'dashicons-calendar-alt',   
                                                  'menu_position'      => 10,    
  
                  'public' => true,     
                  'capability_type' => 'post',    
                  'supports' => array(       'title',       'editor',       'thumbnail'     ),     'has_archive' => true   ) );