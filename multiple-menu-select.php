
<!--CUSTOM MENU-->


<?php
// FUNCTION.PHP Add Your Menu Locations
function register_my_menus4() {
  register_nav_menus(
    array(  
    	'winner' => __( 'winner' )
    )
  );
} 
add_action( 'init', 'register_my_menus4' ); ?>





<?php 
// HEADER PAGE 

// A) Choix du menu par un select acf sur la page 
$etape = get_field('etape'); 

// B) Va chercher le fichier avec le menu correspondant à l'étaoe selectionée
 get_template_part( 'nav', $etape ); ?>


<!--
nav-$etape.php
-->


<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
  <div id="nav">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="logo" src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/<?php the_field('portail');?>.svg" alt="<?php the_field('portail');?>" alt="" /></a>
        </div>


        <?php
        wp_nav_menu( array(
                'theme_location' => 'winner',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse collapse',
                'menu_class'        => 'nav navbar-nav navbar-right ',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      </div><!-- /.container-fluid -->
</div><!-- #nav -->
    

    
</header>