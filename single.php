<?php get_header(single); ?>

   <?php get_template_part(sidebar) ?>
   
  <div class="grid_9">
   <h1>Contenido del single </h1>
   <div class="grid_9">
     
    <h1><?php the_post();?>&nbsp;
    <?php the_title();?></h1>
    
     
      <p><?php the_content(); ?></p>
   </div></div>
  
   
         

  <!-- end .content -->
  
  <?php get_template_part(aside) ?>
  
  <?php get_footer(); ?>