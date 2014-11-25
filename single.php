<?php get_header(single); ?>

   <?php get_template_part(sidebar) ?>
   
  <div class="grid_9">
    
    
     
    <h1><?php the_post();?>&nbsp;
    <?php the_title();?></h1> <small>
                    Por <?php the_author(', '); ?> el <?php the_time('F jS, Y'); ?> en <?php the_category(', ') ?> | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
                </small>
    
     
      <p><?php the_content(); ?></p>
   
  <hr>
</div>
  
   
         

  <!-- end .content -->
  
  <?php get_template_part(aside) ?>
  
  <?php get_footer(); ?>