

<?php $edition =   get_field('edition'); ?>




<!--highlight-->
			<?php  
				$args = array(
					'post_type' => 'highlight', 
					'magazine' =>  get_field('edition'),
					'posts_per_page' => 1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?> 


				
		   
								<?php endwhile;?> 
     	<?php wp_reset_query(); ?>
