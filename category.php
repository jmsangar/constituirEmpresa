<?php get_header();?>


	
    <!--      Contenido central   -->
    <style type="text/css">
    #noticia {
	margin: 0px;
	padding: 0px;
	float: left;
	left: 0px;
	top: 0px;
}
    </style>
     
  
  
  <div class="grid_13 alpha" id="categoria" >
  <p>contenido del category </p>
  
  
  
	
    

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<div class="grid_2" id="noticia"><?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size');
			$thumb_url_medium = wp_get_attachment_image_src($thumb_id,'medium');
			$thumb_url_full = wp_get_attachment_image_src($thumb_id,'full');
		?>

		<img src="<?php echo $thumb_url_full[0]?>"  alt="imagen grande"></div>
	 
      
       

      
		<h1 style="noticia float: left;"><a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		</h1>
    <!--Falta arreglar esto-->
    
    <p><a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a></p>
    

	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<p>No hay posts</p>
	<?php endif; ?>

     
     
  
   
   </div>
   

 <?php get_template_part(aside) ?>
<?php get_footer( );?>