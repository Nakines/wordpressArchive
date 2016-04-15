<?php
/*------------------------------------------------------------
SOMMAIRE


navigation par recherche = Copier / rechercher

A / FIELDS
	1. Chemin de fer (Page d'accueil)
	2. Fields des champs articles
	3. About	
	4. Fields of cover
	5. Fields of Highlight
	6. Fields of IAB
	7. Gallery Home Tradeshow
	8. Buyers type
	9. Copyright
	10. Old menu
	
B/ CUSTOM POST TYPE

C/ TAXONOMY

D/ PARAMETERS
	1. Label
	2. Visual Editor
	3. Search Engine Custom Post
	4. Allow SVG
	5. RSS


------------------------------------------------------------*/



// Add Your Menu Locations
function register_my_menus1() {
  register_nav_menus(
    array(  
    	'home' => __( 'home' ),
    )
  );
} 
add_action( 'init', 'register_my_menus1' ); 



// Add Your Menu Locations
function register_my_menus2() {
  register_nav_menus(
    array(  
    	'page' => __( 'page' )
    )
  );
} 
add_action( 'init', 'register_my_menus2' ); 


if( function_exists('acf_add_local_field_group') ):




/**
 * 1. Chemin de fer
 */

acf_add_local_field_group(array (
	'key' => 'group_561372e9b0d38',
	'title' => 'Chemin de fer',
	'fields' => array (
		array (
			'key' => 'field_56137415d25dd',
			'label' => 'edition',
			'name' => 'edition',
			'type' => 'text',
			'instructions' => 'Entrez le numero de l\'édition du nouveau e-magazine',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5613946fa050e',
			'label' => 'article n°1',
			'name' => 'article1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561398479592c',
			'label' => 'article n°2',
			'name' => 'article2',
			'type' => 'text',
			'instructions' => 'Id du deuxième article',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561398759592e',
			'label' => 'article n°3',
			'name' => 'article3',
			'type' => 'text',
			'instructions' => 'Id du troisième article',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139afaa37a7',
			'label' => 'News n°1',
			'name' => 'news1',
			'type' => 'number',
			'instructions' => 'Brève longue et totalement déroulée',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b1ca37a9',
			'label' => 'News n°2',
			'name' => 'news2',
			'type' => 'number',
			'instructions' => 'Brève fermée 1/2 largeur ',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b25a37aa',
			'label' => 'News n°3',
			'name' => 'news3',
			'type' => 'number',
			'instructions' => 'Brève fermée 1/2 largeur ',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b4919db7',
			'label' => 'News n°4',
			'name' => 'news4',
			'type' => 'number',
			'instructions' => 'Brève ouverte	sur 1/2 largeur',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b5019db8',
			'label' => 'News n°5',
			'name' => 'news5',
			'type' => 'number',
			'instructions' => 'Brève ouverte,	pleine largeur',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b6619dba',
			'label' => 'News n°6',
			'name' => 'news6',
			'type' => 'number',
			'instructions' => 'Brève fermée 1/2 largeur',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b6c19dbb',
			'label' => 'News n°7',
			'name' => 'news7',
			'type' => 'number',
			'instructions' => 'Brève fermée 1/2 largeur',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b7419dbc',
			'label' => 'News n°8',
			'name' => 'news8',
			'type' => 'number',
			'instructions' => 'Brève ouverte 1/2 largeur',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b7a19dbd',
			'label' => 'News n°9',
			'name' => 'news9',
			'type' => 'number',
			'instructions' => 'Brève ouverte pleine largeur',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56139b5719db9',
			'label' => 'Ours',
			'name' => 'ours',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_561bbc038a1c1',
					'label' => 'Ours',
					'name' => 'ours',
					'type' => 'user',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'role' => '',
					'allow_null' => 0,
					'multiple' => 1,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-home.php',
			),
		),
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'categories',
		11 => 'tags',
		12 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;


/**
 * 2. Fields des champs articles
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55c8a4c899353',
	'title' => 'Article',
	'fields' => array (
		array (
			'key' => 'field_55c8a4d9fefb6',
			'label' => 'quote',
			'name' => 'quote',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'article-long',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));


/**
 *  3. About
 */


	acf_add_local_field_group(array (
	'key' => 'group_561dfc7bc79c7',
	'title' => 'About',
	'fields' => array (
		array (
			'key' => 'field_561dfcbb0a230',
			'label' => 'Editorial Independance',
			'name' => 'editorial_independance',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561dfcc70a231',
			'label' => 'Editorial Independance Content',
			'name' => 'editorial_independance_content',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561dfd170a232',
			'label' => 'Staff',
			'name' => 'staff',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561dfd270a233',
			'label' => 'Staff Content',
			'name' => 'staff_content',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561e075525e9c',
			'label' => 'Staff Content2',
			'name' => 'staff_content2',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561dfd8a0a234',
			'label' => 'Contact us',
			'name' => 'contact_us',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561dfd920a235',
			'label' => 'Contact Us Content',
			'name' => 'contact_us_content',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561dfda50a236',
			'label' => 'Map',
			'name' => 'map',
			'type' => 'google_map',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '',
			'center_lng' => '',
			'zoom' => '',
			'height' => '',
		),
		array (
			'key' => 'field_561dfdaf0a237',
			'label' => 'Legal Information',
			'name' => 'legal_information',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561dfdf10a238',
			'label' => 'Legal Information Content',
			'name' => 'legal_information_content',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'about.php',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '2243',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));




/**
 * 4. Fields of cover
 */
acf_add_local_field_group(array (
	'key' => 'group_55b8dded01020',
	'title' => 'Couverture',
	'fields' => array (
		array (
			'key' => 'field_561f7a4147199',
			'label' => 'Logo',
			'name' => 'logo',
			'type' => 'image',
			'instructions' => 'Entrez ici le logo',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_562646c5e25f0',
			'label' => 'special-edition',
			'name' => 'special-edition',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_5620b48802e42',
			'label' => 'Edito-couv',
			'name' => 'edito-couv',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8de699ec1e',
			'label' => 'Baseline',
			'name' => 'baseline',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8dea29ec23',
			'label' => 'Date',
			'name' => 'date',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y',
			'return_format' => 'F j, Y',
			'first_day' => 1,
		),
		array (
			'key' => 'field_55b8de919ec22',
			'label' => 'Numero de l\'édition',
			'name' => 'issue',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8de799ec1f',
			'label' => 'titre 1',
			'name' => 'titre_1',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_55fbe36376c23',
			'label' => 'Id de l\'article n°1',
			'name' => 'id_article-1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8de819ec20',
			'label' => 'titre 2',
			'name' => 'titre_2',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_55fbe3ba0b16b',
			'label' => 'Id de l\'article n°2',
			'name' => 'id_article-2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8de889ec21',
			'label' => 'titre 3',
			'name' => 'titre_3',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_55fbe40adc3e1',
			'label' => 'Id de l\'article n°3',
			'name' => 'id_article-3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'cover',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));


acf_add_local_field_group(array (
	'key' => 'group_561fa36fbb771',
	'title' => 'Logo',
	'fields' => array (
		array (
			'key' => 'field_561fa374c8e8b',
			'label' => 'logo-couv',
			'name' => 'logo-couv',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'cover',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));


acf_add_local_field_group(array (
	'key' => 'group_561fb903d3bf7',
	'title' => 'Screenshot',
	'fields' => array (
		array (
			'key' => 'field_561fb91458a18',
			'label' => 'screenshot',
			'name' => 'screenshot',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumb_740x480',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'cover',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));


/**
 * 5. Fields of Highlight
 */


acf_add_local_field_group(array (
	'key' => 'group_55f18d5a13bee',
	'title' => 'highlight',
	'fields' => array (
		array (
			'key' => 'field_55f18d5ef5bc0',
			'label' => 'highlight-image1',
			'name' => 'highlight-image1',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumb_740x480',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_55f18de8ecbe7',
			'label' => 'Id de l\'article n°1',
			'name' => 'highlight-ancre1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55f18ebdc24e0',
			'label' => 'highlight-title1',
			'name' => 'highlight-title1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55f18d8381db4',
			'label' => 'highlight-image2',
			'name' => 'highlight-image2',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumb_740x480',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_55f18e16ecbe8',
			'label' => 'Id de l\'article n°2',
			'name' => 'highlight-ancre2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55f18ed9a7711',
			'label' => 'highlight-title2',
			'name' => 'highlight-title2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55f18d9081db6',
			'label' => 'highlight-image3',
			'name' => 'highlight-image3',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumb_740x480',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_55f18e33ecbea',
			'label' => 'Id de l\'article n°3',
			'name' => 'highlight-ancre3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55f18ef0a7712',
			'label' => 'highlight-title3',
			'name' => 'highlight-title3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'highlight',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));



/**
 * 6. Fields of IAB
 */
acf_add_local_field_group(array (
	'key' => 'group_55e475416496c',
	'title' => 'IAB',
	'fields' => array (
		
		array (
			'key' => 'field_55e475f20c7a8',
			'label' => 'compagnyId',
			'name' => 'compagnyid',
			'type' => 'text',
			'instructions' => 'exemple:
$numSociété	(ref. fiche)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55e55386bae46',
			'label' => 'element-link',
			'name' => 'element-link',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55e5555733a45',
			'label' => 'title-alt',
			'name' => 'title-alt',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55e56deee6c51',
			'label' => 'contentid',
			'name' => 'contentid',
			'type' => 'text',
			'instructions' => 'exemple:
me9-$société-$NomBannière_$section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'iab',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'revisions',
		7 => 'slug',
		8 => 'author',
		9 => 'format',
		10 => 'page_attributes',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));


endif;
/**
 * 7. Gallery Home Tradeshow
 */



if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5639ded300e11',
	'title' => 'Gallerie tradeshow',
	'fields' => array (
		array (
			'key' => 'field_5639df063c2b1',
			'label' => 'gallery',
			'name' => 'gallery',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'tradeshow-new.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;


/**
 * 8. Buyers type
 */if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5694e126e0058',
	'title' => 'buyers guide',
	'fields' => array (
		array (
			'key' => 'field_5694e13e8bd6f',
			'label' => 'Question',
			'name' => 'question',
			'type' => 'repeater',
			'instructions' => 'Repeater fields d\'une question',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Question',
			'sub_fields' => array (
				array (
					'key' => 'field_5698c9e4809a3',
					'label' => 'in',
					'name' => 'open',
					'type' => 'text',
					'instructions' => 'In = Open
',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'x',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5694e1658bd70',
					'label' => 'id-question',
					'name' => 'id-question',
					'type' => 'text',
					'instructions' => 'numero de la question',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 10,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5694e1808bd71',
					'label' => 'titre-question',
					'name' => 'titre-question',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5694e18c8bd72',
					'label' => 'text-question',
					'name' => 'text-question',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
		array (
			'key' => 'field_5698fac6bf924',
			'label' => 'Expert',
			'name' => 'expert',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'experts',
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'guide',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

/**
 * 9. Copyright
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_569deb06b7a1b',
	'title' => 'Copyright image',
	'fields' => array (
		array (
			'key' => 'field_569deb2f05516',
			'label' => 'Copyright',
			'name' => 'copyright',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'article-long',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;


/**
 * 10. Old Menu
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_569e088f8fb70',
	'title' => 'Menu Old Edition',
	'fields' => array (
		array (
			'key' => 'field_569e08c327f62',
			'label' => 'Menu',
			'name' => 'Menu',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'ts_mega_menu',
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-home.php',
			),
			array (
				'param' => 'page_type',
				'operator' => '!=',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;


/**
 * B/ CUSTOM POST TYPE
 */



add_action( 'init', 'create_post_type' );

function create_post_type() {


			register_post_type(   'guide',   
			array(     'label' => 'guide',     
				  'labels' => array(   
					  'name' => 'guides',       
					  'singular_name' => 'guide',       
					  'all_items' => 'guides',       
					  'add_new_item' => 'add an guide',       
					  'edit_item' => 'Edit guide',       
					  'new_item' => 'New guide',       
					  'view_item' => 'See this guide',       
					  'search_items' => 'Search an guide',       
					  'not_found' => 'No article found',       
					  'not_found_in_trash'=> 'No trash articl'
				  ),     
				  'public' => true,  

				  'exclude_from_search' => false,     
				  'capability_type' => 'post',
				  'show_in_menu'        => true,
				  'menu_position' => 2,
				  'show_in_nav_menus'   => true,
				  'taxonomies' => array('category', 'magazine', 'post_tag', 'section', 'univers'),
				  'supports' => array(       'title',       'editor',       'thumbnail', 'author', 'post-formats', 'page-attributes', 'revisions',  'trackbacks',  'trackbacks',      ),     'has_archive' => true   ) );	
	
			register_post_type(   'article-long',   
			array(     'label' => 'article',     
				  'labels' => array(   
					  'name' => 'Articles',       
					  'singular_name' => 'article',       
					  'all_items' => 'Articles',       
					  'add_new_item' => 'add an article',       
					  'edit_item' => 'Edit article',       
					  'new_item' => 'New article',       
					  'view_item' => 'See this article',       
					  'search_items' => 'Search an article',       
					  'not_found' => 'No article found',       
					  'not_found_in_trash'=> 'No trash articl'
				  ),     
				  'public' => true,  

				  'exclude_from_search' => false,     
				  'capability_type' => 'post',
				  'show_in_menu'        => true,
				  'menu_position' => 2,
				  'show_in_nav_menus'   => true,
				  'taxonomies' => array('category', 'magazine', 'post_tag', 'section', 'univers', 'state'),
				  'supports' => array(       'title',       'editor',       'thumbnail', 'author', 'post-formats', 'page-attributes', 'revisions',  'trackbacks',  'trackbacks',      ),     'has_archive' => true   ) );	
	
		
	register_post_type(   'cover',   
			array(     'label' => 'cover',     
				  'labels' => array(   
					  'name' => 'cover',       
					  'singular_name' => 'cover',       
					  'all_items' => 'covers',       
					  'add_new_item' => 'add an cover',       
					  'edit_item' => 'Edit cover',       
					  'new_item' => 'New cover',       
					  'view_item' => 'See cover',       
					  'search_items' => 'Search a cover',       
					  'not_found' => 'No cover found',       
					  'not_found_in_trash'=> 'No trash cover'
				  ),  
				  'menu_position' => 5,
				  'taxonomies' => array('magazine'),
				  'public' => true,
				  'exclude_from_search' => true,     
				  'capability_type' => 'post',    
				  'supports' => array(       'title',      'thumbnail'     ),     
				  'has_archive' => false   ) );		
	
	register_post_type(   'highlight',   
			array(     'label' => 'Highlights',     
				  'labels' => array(   
					  'name' => 'Highlights',       
					  'singular_name' => 'Highlights',       
					  'all_items' => 'Highlights',       
					  'add_new_item' => 'add an highlight',       
					  'edit_item' => 'Edit highlight',       
					  'new_item' => 'New highlight',       
					  'view_item' => 'See highlight',       
					  'search_items' => 'Search a highlight',       
					  'not_found' => 'No highlight found',       
					  'not_found_in_trash'=> 'No trash highlight'
				  ),  
				  'menu_position' => 5,
				  'taxonomies' => array( 'magazine'),
				  'public' => true,     
				  'exclude_from_search' => true,     
				  'capability_type' => 'post',    
				  'supports' => array(       'title',      'thumbnail'     ),     
				  'has_archive' => false   ) );		
	
	register_post_type(   'edito',   
			array(     'label' => 'edito',     
				  'labels' => array(   
					  'name' => 'edito',       
					  'singular_name' => 'edito',       
					  'all_items' => 'editos',       
					  'add_new_item' => 'add an edito',       
					  'edit_item' => 'Edit edito',       
					  'new_item' => 'New edito',       
					  'view_item' => 'See edito',       
					  'search_items' => 'Search a edito',       
					  'not_found' => 'No edito found',       
					  'not_found_in_trash'=> 'No trash edito'
				  ),     
				  'menu_position' => 2,
				  'public' => true, 
				  'exclude_from_search' => true,     
				  'capability_type' => 'post',    
				  'supports' => array(       'title',       'editor',       'thumbnail'     ),     'has_archive' => false   ) );	
	
	register_post_type(   'next-issue',   
			array(     'label' => 'Next-issue',     
				  'labels' => array(   
					  'name' => 'Next-issue',       
					  'singular_name' => 'Next-issue',       
					  'all_items' => 'next-issues',       
					  'add_new_item' => 'add an next-issue',       
					  'edit_item' => 'Edit next-issue',       
					  'new_item' => 'New next-issue',       
					  'view_item' => 'See next-issue',       
					  'search_items' => 'Search a next-issue',       
					  'not_found' => 'No next-issue found',       
					  'not_found_in_trash'=> 'No trash next-issue'
				  ),     
				  'menu_position' => 8,
				  'public' => true,     
				  'capability_type' => 'post',    
				  'supports' => array(       'title',  'thumbnail'     ),     'has_archive' => true   ) );	

	register_post_type(   'iab',   
			array(     'label' => 'IAB',     
				  'labels' => array(   
					  'name' => 'IAB',       
					  'singular_name' => 'IAB',       
					  'all_items' => 'IAB',       
					  'add_new_item' => 'IAB',       
					  'edit_item' => 'Edit post',       
					  'new_item' => 'New IAB',       
					  'view_item' => 'See IAB',       
					  'search_items' => 'Search an IAB',       
					  'not_found' => 'No IAB found',       
					  'not_found_in_trash'=> 'No trash IAB'
				  ),     
				  'taxonomies' => array( 'magazine', 'section'),
				  'menu_position' => 3,
				  'public' => true,     
				  'exclude_from_search' => true, 
				  'capability_type' => 'post',    
				  'supports' => array(       'title', 'thumbnail' ),     
				  'has_archive' => false   ) );	
	

		register_post_type(   'ours',   
			array(     'label' => 'Ours',     
				  'labels' => array(   
					  'name' => 'Ours',       
					  'singular_name' => 'Ours',       
					  'all_items' => 'Ours',       
					  'add_new_item' => 'Ours',       
					  'edit_item' => 'Edit post',       
					  'new_item' => 'New Ours',       
					  'view_item' => 'See Ours',       
					  'search_items' => 'Search an Ours',       
					  'not_found' => 'No Ours found',       
					  'not_found_in_trash'=> 'No trash Ours'
				  ),     
				  'taxonomies' => array('magazine'),
				  'menu_position' => 3,
				  'public' => true,     
				  'capability_type' => 'post',    
				  'supports' => array(       'title',       'editor',       'thumbnail'     ),     'has_archive' => true   ) );	
	

		register_post_type(   'authors',   
			array(     'label' => 'Authors',     
				  'labels' => array(   
					  'name' => 'Authors',       
					  'singular_name' => 'Authors',       
					  'all_items' => 'Authors',       
					  'add_new_item' => 'add an author',       
					  'edit_item' => 'Edit author',       
					  'new_item' => 'New author',       
					  'view_item' => 'See author',       
					  'search_items' => 'Search a author',       
					  'not_found' => 'No author found',       
					  'not_found_in_trash'=> 'No trash author'
				  ),  
				  'menu_position' => 5,
				  'taxonomies' => array( 'magazine'),
				  'public' => true,     
				  'exclude_from_search' => true,     
				  'capability_type' => 'post',    
				  'supports' => array(       'title',  'editor',  'author',     'thumbnail'     ),     
				  'has_archive' => false   ) );		
	

		register_post_type(   'experts',   
			array(     
				'label' => 'experts',     
				  'labels' => array(   
					  'name' => 'experts',       
					  'singular_name' => 'experts',       
					  'all_items' => 'experts',       
					  'add_new_item' => 'add an experts',       
					  'edit_item' => 'Edit experts',       
					  'new_item' => 'New expert',       
					  'view_item' => 'See expert',       
					  'search_items' => 'Search a expert',       
					  'not_found' => 'No expert found',       
					  'not_found_in_trash'=> 'No trash expert'
				  ),  
				  'menu_position' => 5,
				  'taxonomies' => array( 'magazine'),
				  'public' => true,     
				  'exclude_from_search' => true,     
				  'capability_type' => 'post',    
				  'supports' => array(       'title',  'editor',  'expert',     'thumbnail'     ),     
				  'has_archive' => false   ) );		

			



/**
 * C/ TAXONOMY
 */	
	

register_taxonomy(
  'expert',
  'experts',
  array(
    'label' => 'expert',
    'labels' => array(
    'name' => 'expert',
    'singular_name' => 'expert',
    'all_items' => 'Tous les experts',
    'edit_item' => 'Éditer le expert',
    'view_item' => 'Voir le expert',
    'update_item' => 'Mettre à jour le expert',
    'add_new_item' => 'Ajouter un expert',
    'new_item_name' => 'Nouveau expert',
    'search_items' => 'Rechercher parmi les experts',
    'popular_items' => 'experts les plus utilisés'
  ),
  'hierarchical' => true,
  'show_admin_column' => true,

  )
);	

register_taxonomy(
  'magazine',
  'edition',
  array(
    'label' => 'Edition',
    'labels' => array(
    'name' => 'Edition',
    'singular_name' => 'Edition',
    'all_items' => 'Tous les Editions',
    'edit_item' => 'Éditer le Edition',
    'view_item' => 'Voir le Edition',
    'update_item' => 'Mettre à jour le Edition',
    'add_new_item' => 'Ajouter un Edition',
    'new_item_name' => 'Nouveau Edition',
    'search_items' => 'Rechercher parmi les Editions',
    'popular_items' => 'Editions les plus utilisés'
  ),
  'hierarchical' => true,
  'show_admin_column' => true,

  )
);	
	
register_taxonomy(
  'univers',
  'univers',
  array(
    'label' => 'Theme',
    'labels' => array(
    'name' => 'Univers',
    'singular_name' => 'Theme',
    'all_items' => 'Tous les Theme',
    'edit_item' => 'Éditer le Theme',
    'view_item' => 'Voir le Theme',
    'update_item' => 'Mettre à jour ',
    'add_new_item' => 'Ajouter un Theme',
    'new_item_name' => 'Nouveau Theme',
    'search_items' => 'Rechercher parmi les Themed',
    'popular_items' => 'Themes les plus utilisés'
  ),
  'hierarchical' => true,
  	'public' => true

  )
);	
	
register_taxonomy(
  'section',
  'niveau',
  array(
    'label' => 'Section',
    'labels' => array(
    'name' => 'Section',
    'singular_name' => 'Section',
    'all_items' => 'Tous les Sections',
    'edit_item' => 'Éditer la Section',
    'view_item' => 'Voir la Section',
    'update_item' => 'Mettre à jour la Section',
    'add_new_item' => 'Consulter un intégrateur pour ajout de section',
    'new_item_name' => 'Nouvelle Section',
    'search_items' => 'Rechercher parmi les Sections',
    'popular_items' => 'Sections les plus utilisées'
  ),
  'hierarchical' => true,
  'exclude_from_search' => true, 
  'public' => true    

  )




);


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

	
register_taxonomy_for_object_type( 'univers', 'post' );
register_taxonomy_for_object_type( 'univers', 'article-long' );
	
register_taxonomy_for_object_type( 'section', 'article-long' );
register_taxonomy_for_object_type( 'section', 'post' );
register_taxonomy_for_object_type( 'section', 'iab' );
	
register_taxonomy_for_object_type( 'magazine', 'post' );
register_taxonomy_for_object_type( 'magazine', 'authors' );
register_taxonomy_for_object_type( 'expert', 'authors' );
register_taxonomy_for_object_type( 'magazine', 'cover' );
register_taxonomy_for_object_type( 'magazine', 'author' );
register_taxonomy_for_object_type( 'magazine', 'article-long' );
register_taxonomy_for_object_type( 'magazine', 'section' );
register_taxonomy_for_object_type( 'magazine', 'iab' );
register_taxonomy_for_object_type( 'magazine', 'ours' );
register_taxonomy_for_object_type( 'magazine', 'edito' );
register_taxonomy_for_object_type( 'magazine', 'highlight');

register_taxonomy_for_object_type( 'state', 'article-long' );
register_taxonomy_for_object_type( 'state', 'post' );
	
	
	
	


}


/*********************************
 *****  D/ PARAMETERS  **********
 ********************************/	



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



/**
 * 2. Visual Editor
 */	

add_filter( 'tiny_mce_before_init', 'myformatTinyMCE' );
function myformatTinyMCE( $in ) {

$in['wordpress_adv_hidden'] = FALSE;

return $in;
}


/**
 * 3. Search Engine Custom Post
 */	

function wpse_128636_redirect_post() {
  $queried_post_type = get_query_var('cover', "highlight", "edito", "ours", "iab" );
  if ( is_single() && 'sample_post_type' ==  $queried_post_type ) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}

/* SEARCH  WP and custom post*/
function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'article-long'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );


/**
 * 4. Allow SVG
 */	

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


add_action('admin_head', 'fix_svg_thumb_display');


/* Creation widget */
add_action( 'widgets_init', 'theme_slug_widgets_init' );

function theme_slug_widgets_init() {
    register_sidebar( array(
    	'before_widget' => '<p id="%1$s" class="widget %2$s">',
		'after_widget'  => '</p>',
        'name' => __( 'google-tag', 'theme-slug' ),
        'id' => 'google-tag',
        'before_title'  => '<h2 style="display: none;">',
		'after_title'   => '</h2>',
    ) );
}


add_action( 'widgets_init', 'theme_slug_widgets_init2' );

function theme_slug_widgets_init2() {
    register_sidebar( array(
    	'before_widget' => '<p id="%1$s" class="widget %2$s">',
		'after_widget'  => '</p>',
        'name' => __( 'subscribers', 'theme-slug' ),
        'id' => 'subscribers',
        'before_title'  => '<h2 style="display: none;">',
		'after_title'   => '</h2>',

    ) );
}




/**
 * 5. RSS
 */	

function ts_include_custom_posttypes_for_author( &$query )
{
    if ( $query->is_author ) :
        $query->set( 'post_type', array('post', 'article-long') );
    endif;

    remove_action( 'pre_get_posts', 'ts_include_custom_posttypes_for_author' ); // run once!
}
add_action( 'pre_get_posts', 'ts_include_custom_posttypes_for_author' );


// Add custom post types 
function mycustomfeed_cpt_feed( $query ) {
        if ( $query->is_feed() )
            $query->set( 'post_type', array( 'article-long' ) ); 
        return $query;
}
add_filter( 'pre_get_posts', 'mycustomfeed_cpt_feed' );






function featuredtoRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
}
return $content;
}
 
add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');




// on exécute la fonction avant initialisation de l'éditeur
add_filter( 'tiny_mce_before_init', 'juiz_custom_tinymce' );
 
// la fonction est déclarée si elle n'existe pas déjà
if ( !function_exists('juiz_custom_tinymce')) {
	function juiz_custom_tinymce( $tools ) {
		// on ajoute "styleselect" à une liste d'outils séparés par une virgule
		// on complète ici la seconde ligne d'outils (buttons2)
		$tools['theme_advanced_buttons2'] = 'styleselect,'.$tools['theme_advanced_buttons2'];
 
		// on ajoute des commandes en ligne ou en bloc (box) à notre sélecteur
		$tools['theme_advanced_styles'] = __('Bouton').'=button, '.__('Télécharger').'=download, '.__('Démonstration').'=demo, '.__('Boîte de boutons').'=buttons-box, '.__('Exergue').'=highlight';
 
		// on retourne notre liste d'outils complétée
		return $tools; 
	}
}

add_filter( 'mce_buttons_2', 'juiz_mce_buttons_2' );
 
if ( !function_exists('juiz_mce_buttons_2')) {
	function juiz_mce_buttons_2( $buttons ) {
		array_unshift( $buttons, 'styleselect' );
 
		return $buttons;
	}
}

// le hook que nous avons vu en tout début d'article…
add_filter( 'tiny_mce_before_init', 'juiz_mce_before_init' );
 
if ( !function_exists('juiz_mce_before_init')) {
	function juiz_mce_before_init( $styles ) {
		// on créé un tableau contenant nos styles
		$style_formats = array (
			// chaque style est un nouveau tableau
 
			// Style "Exergue box"
			array(
				'title' => __('Exergue Box'),
				'block' => 'div',
				'classes' => 'exergue',
				'wrapper' => true
			),
			array(
				'title' => __('Exergue-Left Box'),
				'block' => 'div',
				'classes' => 'exergue exergue-left',
				'wrapper' => true
			),
			array(
				'title' => __('Question'),
				'selector' => 'p',
				'classes' => 'question-interview',
				'wrapper' => true
			)
			,
			array(
				'title' => __('Response'),
				'selector' => 'p',
				'classes' => 'response-interview',
				'wrapper' => true
			)
		);
 
		// on remplace les styles existants par les nôtres
		$styles['style_formats'] = json_encode( $style_formats );
 
		return $styles;
	}
}
