<?php get_header(page); ?>

  <?php get_template_part(sidebar) ?>
  <div class="grid_9">
   
     
    <h1><?php the_post();?>
    <?php the_title();?></h1>
    
    
     
      <p><?php the_content(); ?></p>
      
      
      
      
    </div>
    
  <!-- end .content -->
  
  
  <?php get_template_part(aside) ?>
  
  <?php get_footer(); ?>
