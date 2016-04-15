/**
 * 1. Label
 */	


//Change Posts labels in sidebar admin menu
  function custom_post_menu_label() {
     global $menu;
     global $submenu;
     $menu[5][0] = 'Brèves';
     $submenu['edit.php'][5][0] = 'Brèves';
     $submenu['edit.php'][10][0] = 'Add Brèves';         
  }

 //Change Posts labels in other admin area
  function custom_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Brèves';
    $labels->singular_name = 'Brève';
    $labels->add_new = 'Add Brève';
    $labels->add_new_item = 'Add Brèves';
    $labels->edit_item = 'Edit Brèves';
    $labels->new_item = 'Brèves';
    $labels->view_item = 'View Brèves';
    $labels->search_items = 'Search Brèves';
    $labels->not_found = 'No results on Brève';
    $labels->not_found_in_trash = 'No Brève in Trash';
    $labels->name_admin_bar = 'Add Brève';       

   }

 add_action( 'init', 'custom_post_object_label' );
 add_action( 'admin_menu', 'custom_post_menu_label' );

