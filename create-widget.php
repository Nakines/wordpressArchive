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



