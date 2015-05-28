<?php get_header(); ?>

   <div id="mainpics">
    <img class="featured" src="<?php bloginfo('template_directory');?>/images/blogf.jpg" alt="Beach Bike Rental">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
  <article id="post-<?php the_ID();?>" class="post">kllllllllllllllllllllllllllllll
   <h2><?php the_title();?></h2>
  <small>Posted on <?php the_time ('F, j, Y');?>by <?php the author(); ?>in <?php the category (',');?></small>
  <?php echo get_the_post_thumbnail($post->ID,'large'); ?>

   <?php the_content('');  ?>
   <?php endwhile; endif; //end the loop ?>
   <small>single.php</small>
</div>

 <?php get_sidebar(); ?>
  
  <?php get_footer(); ?>
