
<?php $tradeshowtaxo = get_field('tradeshow-taxo'); ?>

    <!-- IMAGE COVER -->
<?php  
  $args = array(
    'post_type' => 'candidature',     
      'cat' => $tradeshowtaxo,
    'posts_per_page' => 1 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
  
?> 

<section 
     class="headercovercandidature" 
     id="home" 
     style="background: url(<?php echo $src[0]; ?> )  no-repeat scroll 0% 0% / cover  transparent !important; height: 850px; ;
        background-attachment: fixed !important;">

  
    <div class="container text-center">
        <div class="row ">
          <img class=" wow animated fadeInDown" src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/i-novo-awards-2016.svg" alt="I-Novo Awards 2016" />
                
        </div>
        <div class="row wow animated fadeInUp "  style="margin-bottom: 46px; color: #fff;">
             <h1 style="color: #fff; font-size: 3rem;"><?php the_title();?></h1>
      <p><?php the_excerpt();?></p>
         </div>
    <div>
    <a href="<?php the_field('url-cta');?>" class="btn btn-blue btn-effect submit-icon wow animated fadeInUp" style=" background-color: <?php the_field('couleur', get_option('page_for_posts')); ?>;">
                  <?php the_field('cta-candidature');?> 
              </a>
    <p>
      <a href="<?php the_field('url-cta');?> " class="btn btn-effect wow animated fadeInUp" >
      </a> 
      <h1><?php the_field('portail');?></h1>
    </p>
    
    </div>
</div>
 </section>

<?php endwhile;?>


<?php wp_reset_query(); ?>      
