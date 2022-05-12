<?php
get_header();
?>
    
  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
   <?php 
     if(have_posts()) :
      while(have_posts()) : the_post();
   ?>
      <div id="blog_area">
        <div class="post_thumb">
          <?php echo the_post_thumbnail('post-thumbnails'); ?>
        </div>
       <div class="post_details">
         <h1><a href="<?php the_permalink();?>"><?php  the_title();?></a></h1>
          <?php the_excerpt(); ?>
       </div>

      </div>
   <?php 
     endwhile;
    else:
      _e('No Post Found');
    endif;
   ?>



        </div>
        <div class="col-md-3">
           <h2>side bar</h2>
        </div>
      </div>
    </div>
  </section>




<?php
get_footer();
?>
    




<?php wp_footer();?>
</body>
</html>