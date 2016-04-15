
register_taxonomy(
  'state',
  'state',
  array(
    'label' => 'State',
    'labels' => array(
    'name' => 'State',
    'singular_name' => 'State',
    'all_items' => 'Tous les States',
    'edit_item' => 'Éditer le State',
    'view_item' => 'Voir le State',
    'update_item' => 'Mettre à jour le State',
    'add_new_item' => 'Ajouter un State',
    'new_item_name' => 'Nouveau State',
    'search_items' => 'Rechercher parmi les States',
    'popular_items' => 'States les plus utilisés'
  ),
  'hierarchical' => true,
  'show_admin_column' => true,

  )
);	
register_taxonomy_for_object_type( 'state', 'article-long' );
register_taxonomy_for_object_type( 'state', 'post' );

	