<?php
/**
 * Template Name: Template Mediakit
 */
?>

<?php $current_portal= wp_strip_all_tags( get_the_term_list( get_the_ID(), 'portal') );

$current_portal = strtolower($current_portal); 

?>

<?php get_template_part('templates/nav', $current_portal); ?>
<script>$('#myLightbox').lightbox(options)</script>

<!-- Current Portal -->
<?php $current= wp_strip_all_tags( get_the_term_list( get_the_ID(), 'portal') ); ?>


<?php //JUMBOTRON cover featured imag
if ( is_singular() && has_post_thumbnail( $post->ID )) :
   $thumb_id = get_post_meta($post->ID, '_thumbnail_id', true);
   $thumb_url = wp_get_attachment_url($thumb_id); ?>
<style type="text/css">
#cover_header { background: url("<?php echo $thumb_url ;?>") no-repeat center 0 fixed; background-size: cover; position: relative; z-index: 999; }
</style>
<?php endif;
?>


<body data-spy="scroll" data-target=".scrollspy">
<div class="main-content">



<main class="sections">



  <?php while(the_flexible_field("section")): ?>

 

<?php // Section with title //
    if(get_row_layout() == "intro-product"): // layout: Content ?>

    <?php
          //On affiche la deuxieme subfield - post object
          $post_object = get_sub_field("products"); 
           if( $post_object ): 
          $post = $post_object;
          setup_postdata( $post ); ?>

           <!--images  -->       
          <?php
              $current = strtolower($current);
              $currentback = strtolower($current);
              $currentback .= 'back';
              $image = get_field($current);  // echo $current; 
                       $size = 'full'; // (thumbnail, medium, large, full or custom size)?> 

    <section class="intro-product" id="<?php echo get_the_ID(); ?>">
      <article class="container" id="<?php echo $post->ID; ?>">
          <div class="col-md-12 our_solution_title" > 
            <h2 ><?php the_sub_field("h-product"); ?> </h2>
          </div>
            <?php the_sub_field("intro"); ?>
      </article>

         
        <article class="container">
          <div class="col-md-12" style="padding-top: 3rem; padding-bottom: 3rem;">
           <?php the_content(); ?>
          </div>
          <div class="row">     
              <div class="col-md-6" > <!-- Images -->
                 <!--  thumbnail SVG -->
                    <?php if( !empty($image) ): ?> 
                        <a  href="#<?php echo $image['url']; ?>" title="Example of PREMIUM HALF PAGE" title="Premium Placement Ad">
                          <span class="hover">
                          <img class="main_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </span>
                        </a>
                     <?php endif; ?>

               <!-- APERCU -->
               <?php if( !empty($image) ): ?>     
                <a  href="#PremiumFullPageAd">
                        <div class="lb-overlay " id="<?php echo $image['url']; ?>">
                          <img src="<?php echo $image['url']; ?>" alt="" />
                        </div>  
                   </a>
                 <?php endif; ?>
              </div><!-- // Images -->
              <div class="col-md-6 txt-product">
                  <?php the_field('guides'); // Guides taille, size, etc ?>
              </div>
          </div>
          </article>
        </section>
                         <?php endif; ?>

            <?php wp_reset_postdata(); ?>
          <!-- // LAYOUT intro-product-->




    <?php // Only Products //
    elseif(get_row_layout() == "products-only"): ?>

       <?php //display LAYOUT products-solo
           $post_object = get_sub_field("products-solo");  
              if( $post_object ): // override $post
                $post = $post_object;
                 setup_postdata( $post ); ?>

          <!--images  -->       
          <?php
              $current = strtolower($current);
              $currentback = strtolower($current);
              $currentback .= 'back';
              $image = get_field($current);  // echo $current; 
                       $size = 'full'; // (thumbnail, medium, large, full or custom size)?> 


         <section id="<?php echo get_the_ID(); ?>">
          <article class="container" id="<?php echo $post->ID; ?>">
           <div class="col-md-12 our_solution_title"  > 
            <h2 > <?php the_title(); ?> </h2>
          </div>
<?php the_content(); ?>
        <div class="row">

          
               <div class="col-md-6" > <!-- Images -->
                 <!--  thumbnail SVG -->
                    <?php if( !empty($image) ): ?> 
                        <a  href="#<?php echo $image['url']; ?>" title="Example of PREMIUM HALF PAGE" title="Premium Placement Ad">
                          <span class="hover">
                          <img class="main_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </span>
                        </a>
                     <?php endif; ?>

               <!-- APERCU -->
               <?php if( !empty($image) ): ?>   
                <a  href="#PremiumFullPageAd">
                        <div class="lb-overlay " id="<?php echo $image['url']; ?>">
                          <img src="<?php echo $image['url']; ?>" alt="" />
                        </div>  
                   </a>
                 <?php endif; ?>
              </div><!-- // Images -->
              <div class="col-md-6 txt-product">
                  <?php the_field('guides'); // Guides taille, size, etc ?>
              </div>
        </div>
  


               </article>
             </section>
             <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
           <?php endif; ?>



    
        <?php // Only Products with title chapo//
    elseif(get_row_layout() == "products-only_no-title"): ?>

       <?php //display LAYOUT products-only_no-title
           $post_object = get_sub_field("products-only_no-title");  
              if( $post_object ): // override $post
                $post = $post_object;
                 setup_postdata( $post ); ?>

          <!--images  -->       
          <?php
              $current = strtolower($current);
              $currentback = strtolower($current);
              $currentback .= 'back';
              $image = get_field($current);  // echo $current; 
                       $size = 'full'; // (thumbnail, medium, large, full or custom size)?> 
      

         <section id="<?php echo $post->ID; ?>" class="our_solution">
            <div  id="<?php the_sub_field("id-menu"); ?>" class="chapo">
           <h2 id=" <?php echo $post->ID;?>"> <?php the_title(); ?> </h2>      
        </div>
          <article class="container">
            <?php the_content(); ?>
        <div class="row">
          
               <div class="col-md-6" > <!-- Images -->
                 <!--  thumbnail SVG -->
                    <?php if( !empty($image) ): ?> 
                        <a  href="#<?php echo $image['url']; ?>" title="Example of PREMIUM HALF PAGE" title="Premium Placement Ad">
                          <span class="hover">
                          <img class="main_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </span>
                        </a>
                     <?php endif; ?>

               <!-- APERCU -->
               <?php if( !empty($image) ): ?> 
                <a  href="#PremiumFullPageAd">
                        <div class="lb-overlay " id="<?php echo $image['url']; ?>">
                          <img src="<?php echo $image['url']; ?>" alt="" />
                        </div>  
                   </a>
                 <?php endif; ?>
              </div><!-- // Images -->
              <div class="col-md-6 txt-product">
                  <?php the_field('guides'); // Guides taille, size, etc ?>
              </div>
        </div>
  


               </article>
             </section>
             <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
           <?php endif; ?>
      <!-- // Only Products avec title chapo// -->




      <?php // Product with text column  //
       elseif(get_row_layout() == "product_column"):  ?>

         <?php
                //display LAYOUT products-solo
         $post_object = get_sub_field("product-full"); ?>

         <?php if( $post_object ): 
                  // override $post
         $post = $post_object;
         setup_postdata( $post ); ?>
         <section  id="<?php echo $post->ID; ?>">
          <article class="container">
            <div class="col-md-12 our_solution_title" >
              <p ><?php the_sub_field('text-column'); ?><p>

            <!--images  -->       
            <?php
            $current = strtolower($current);
            $currentback = strtolower($current);
            $currentback .= 'back';

                     // echo $current; 
            $image = get_field($current);
                     $size = 'full'; // (thumbnail, medium, large, full or custom size)
                     if( !empty($image) ): ?> 
                        <a  href="#<?php echo $image['url']; ?>" title="Example of PREMIUM HALF PAGE" title="Premium Placement Ad">
                          <span class="hover">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </span>
                        </a>

                     <?php endif; ?>
               <?php if( !empty($image) ): ?>     
                <a  href="#PremiumFullPageAd">
                        <div class="lb-overlay" id="<?php echo $image['url']; ?>">
                          <img src="<?php echo $image['url']; ?>" alt="" />
                        </div>  
                </a>
                 <?php endif; ?>
            </div>


           <div class="col-md-12  txt-product" > 
                             <?php the_field('guides'); // Guides taille, size, etc ?>

                <?php the_content(); // Argumentaire des produits ?>
          </div>

  

               </article>
             </section>
             <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
           <?php endif; ?>







         

        <?php // Chapo Section  //
        elseif(get_row_layout() == "chapo-section"):  ?>
           
           <section class="chapo" id="<?php the_sub_field("id-menu"); ?>" 
            <div id="<?php echo $post->ID; ?>"> </div>
<?php if (  get_sub_field('titre_menu') == 'no'):   ?>
                  <h2 > <?php the_sub_field("h-chapo"); ?></h2>
<?php endif; ?>

<?php if (  get_sub_field('titre_menu') == 'yes'):   ?>
                  <h2> <?php the_sub_field("title-section"); ?></h2>
<?php endif; ?>




               </section>

               <article class="container" style="padding:25px 0;">
          
                <?php the_sub_field("txt-chapo"); ?>
                </article>
             <?php endif; ?>
           <?php endwhile; ?>

</main>


<?php $current= wp_strip_all_tags( get_the_term_list( get_the_ID(), 'portal') ); ?>

         <!-- RELATIONAL WORKS -->
         <!-- Fields post object READERSHIP-->
<section id="readership">
         <?php
         $post_object = get_field('readership');
         if( $post_object ): 
          // override $post
          $post = $post_object;
          setup_postdata( $post ); 
          // display only current readership
        
           ?>

          <h2><?php the_title(); ?></h2>
          <article class="container">
            <div><?php the_content(); ?></div>
          </article>




<?php wp_reset_query(); ?>   
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
</section>




</div>

      <!-- Advertising Contact WORKS -->
         <?php
      $post_object = get_field('advertising_contact');
      if( $post_object ): 
          // override $post
        $post = $post_object;
        setup_postdata( $post );  ?>
<section id="advertising_contact">
    <article class="container">
   

       <?php the_content(); ?>

      
  </article>
</section>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

    <script>
    $('#nav').affix({
    offset: {
        top: $('#nav').offset().top
    }
});

</script>
<?php get_footer(); ?>
