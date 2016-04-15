<?php 
/* Template Name: New tradeshow i-Novo 2016
Le template de page permettant d'afficher les salons.
Appel des custom fields des custom post afin de permettre un fonctionnement compartimenter et d'ainsi crée des pages "puzzle". De reutiliser des partie dans plusieurs page
*/ 
?>

<?php get_header(); ?>
<?php $etape = get_field('etape'); 
 get_template_part( 'nav', $etape ); ?>

  

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



<!--
/// PRESENTATION///
-->  
<?php  
  $args = array(
    'post_type' => 'presentation',
    'posts_per_page' => 1 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>    
<section id="presentation" style="background-color: #2e2e2e;">
  <div class="container">
      <div class="col-md-10 col-md-offset-1 wow animated fadeInRight">
        <div class="welcome-block">
          <h3 style="color: #fff;"><?php the_title(); ?></h3>
        <div class="col-md-3">
            
            <img src="http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/i-novo-awards-2016-edt.svg" style="height: 230px;
width: 100%;"></div> 
            <div class="col-md-9"> <p><?php the_content(); ?></p></div>
        </div>
      </div>
  </div>
</section>
<?php endwhile;?>
   
<?php wp_reset_query(); ?>      

 

<!--
/// Nominnes- Vote- Winners ///
-->  


<?php  
        $args = array(
      'post_type' => 'winner',
       'cat' => $tradeshowtaxo,
      'posts_per_page' => 1 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?> 


  <!--WINNERS-->
  <div id="winners" class="container">
      

  <?php

if(get_field('winners'))
  {
    echo '<p>' . get_field('winners') . '</p>';
  }

?>
     
  </div>



  <!--VOTE-->
  <section  id="vote" >
      <section style="background-color: #eee;">
        <div class="container">
                <div class=" text-center col-md-6 col-md-offset-3">
                   <h1 class=" wow fadeInDown animated"><?php the_title(); ?></h1>
                   <hr>
                   <p class="col-md-6" >
                      <a 
                      class="scrollTo btn btn-blue btn-effect submit-icon" 
                      style="background-color:#DB467D; width: 100%;" 
                      href="#design">Design</a>
                    </p>         
                <!--     <p class="col-md-4" >
                      <a 
                      class="scrollTo btn btn-blue btn-effect submit-icon" 
                      style="background-color: #84BC4F; width: 100%;" 
                      href="#eco">Eco</a>
                    </p> -->          
                    <p class="col-md-6" >
                      <a 
                      class="scrollTo btn btn-blue btn-effect submit-icon" 
                      style="background-color: #68AADE; width: 100%;" 
                      href="#tech">Tech</a>
                    </p>
                </div>
          </div>
      </section>

      <article id="design" class="container">
          <h2 class=" wow fadeInDown animated">DESIGN</h2>
          <?php the_field('vote_design_shortcode') ?> 
      </article>         
<!--       <article id="eco" class="container">
        <h2 class=" wow fadeInDown animated">ECO</h2>
        <?php the_field('vote_eco_shortcode') ?>
      </article> -->          
      <article id="tech" class="container">
        <h2 class=" wow fadeInDown animated">TECH</h2>
        <?php the_field('vote_tech_shortcode') ?> 
      </article> 

  </section>


  <!--NOMINEES-->
  <section id="nominees" class="container" >
      <div class=" sec-title text-center">
         <h2 class=" wow fadeInDown animated">Nominees</h2>
      </div>
      <?php 
          $pdf = get_field('pdf-nomee');
                  if( $pdf ) {
                  $url = wp_get_attachment_url( $pdf ); ?>

          <a style="display: block; width: 200px; margin: 0 auto;" class=" btn btn-blue btn-effect submit-icon" href="<?php echo $pdf; ?>" >Download the list </a>
            </br>
      <?php } ?>

    <!--champs nomées avec carte -->          
          <p style="text-align:center" class="wow animated bounceInRight">
            <?php the_content(); ?>
          </p>
  </section>


<?php endwhile;?>
<?php wp_reset_query(); ?>      

<!--
/// ABOUT ///
-->  
<section  id="about"  class="text-justify row" ></br></br>
<?php  
  $args = array(
    'post_type' => 'about',
    'posts_per_page' => 1 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>   

          <?php get_template_part( 'about' ); // cherche fichier about.php ?>

<?php endwhile;?>
<?php wp_reset_query(); ?>      

</section>     
    
<!--
/// HOW IT WORKS ///
-->  
 <?php  
          $args = array(
          'post_type' => 'how', 
          'posts_per_page' => 1 );

                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>   

     <?php get_template_part( 'howitworks' ); // cherche fichier howitworks.php ?>
 
<?php endwhile;?>
<?php wp_reset_query(); ?>      

<!-- portfolio section -->
<?php 
  $images = get_field('gallery');
  if( $images ): ?>
      <section id="portfolio">
        <div class="container">
          <div class="row">
              <h3 class="sec-title text-center"><?php the_title(); ?></h3>
            <ul class="project-wrapper wow animated fadeInUp">
                    <?php foreach( $images as $image ): ?>

              <li class="portfolio-item">
                <img src="<?php echo $image['url']; ?>" class="img-responsive" alt="">
                <figcaption class="mask">
                  <h3><?php echo $image['title']; ?></h3>
                  <p><?php echo $image['caption']; ?></p>
                </figcaption>                <ul class="external">
                  <li><a class="fancybox" title="" data-fancybox-group="works" href="<?php echo $image['url']; ?>"><i class="fa fa-search"></i></a></li>
                </ul>
              </li>
                      <?php endforeach; ?>

            </ul>
          </div>
        </div>
      </section>
  <?php endif; ?>  


<!--
/// DATES///
-->  
<section  id="dates" 
         class="parallax" 
         style="background-image: url('http://wordpress.virtual-expo.com/wp-content/themes/twentyfourteen-child/img/cover.jpg');" >
    <?php  
        $args = array(
      'post_type' => 'dates',
      'cat' => $tradeshowtaxo,
      'posts_per_page' => 1 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>


     <?php get_template_part( 'dates' ); // cherche fichier dates.php ?>

<?php endwhile;?>
<?php wp_reset_query(); ?>      

</section>

<!--
/// SUBMIT///
-->  
<?php  
        $args = array(
      'cat' => $tradeshowtaxo,
      'post_type' => 'submit',
      'posts_per_page' => 1 );


        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>   

             <?php get_template_part( 'submit' ); // cherche fichier dates.php ?>
 
<?php endwhile;?>
<?php wp_reset_query(); ?>      




<?php get_footer(); ?>

