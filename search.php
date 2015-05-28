<?php get_header(); ?>

   <div id="mainpics">
    <img class="featured" src="<?php bloginfo('template_directory');?>/images/blogf.jpg" alt="Beach Bike Rental">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
   <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
  
   <?php the_content('');  ?>
   <?php endwhile; endif; //end the loop ?>
   <small>search.php</small>
</div>

 <?php get_sidebar(); ?>
  
  <?php get_footer(); ?>
