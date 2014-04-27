<?php 
/**
 * Plantilla que se usa para mostrar las páginas de Etiqueta Servicios
 *
 * @ Tema: constituir empresa
 * @ Cevillalba
 */
?>


		
			
	<?php get_header();?>
    
  


	
    <!--      Contenido central   -->
    
   
  
  <div class="grid_12" id="categoria" >
  <h1 style="text-align: center;"><?php echo single_tag_title( '', false );?></h1>
  <hr>
  
  
	
   <?php $posts=query_posts( $query_string . '&order=ASC'); ?> 

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<div class="grid_3" id="noticia"><?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size');
			$thumb_url_medium = wp_get_attachment_image_src($thumb_id,'medium');
			$thumb_url_full = wp_get_attachment_image_src($thumb_id,'full');
		?>

		<img src="<?php echo $thumb_url_medium[0]?>"  alt=""></div>
	 
      
       

      
		<h5 ><a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		</h5>
    <!--Falta arreglar esto-->
    
    <p><a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a></p>
    <div class="clear"></div>
    <hr>

    
    

	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<p>No hay posts</p>
	<?php endif; ?>

     
     
  
   
   </div>
   

 <?php get_template_part(aside) ?>
<?php get_footer( );?>
