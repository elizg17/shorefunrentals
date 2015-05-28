<?php get_header(); ?>

  <!--Flex Slider-->
   <div class="mainpics">
    <img src="<?php bloginfo('template_directory');?>/images/beachbike3.jpg" width="900" height="350" alt="Beach Bike Rental">
        
    </div>
  <!--End Slider-->

  <!--Bottom sections start -->
	<div id="bottomsections">
    <section class="plinks">
    <img class="bimg" src="<?php bloginfo('template_directory');?>/images/bike.jpg" alt="Bike Rentals">
    <h2>Beach Bikes</h2>
  	<?php if ( have_posts() ) : while( have_posts() ) : the_post();  ?>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
    </section>
    
    <section class="plinks">
    <img class="bimg" src="<?php bloginfo('template_directory');?>/images/bchairs.jpg" alt="Beach Rentals">
    <h2>Beach Accessoris</h2>
  <?php rewind_posts(); // stop loop one ?>
<?php query_posts('showposts=4'); // give directions to loop two ?>
<ul>
<?php while (have_posts()) : the_post(); // start loop two ?>
<li><a href="index.php"><?php the_title(); ?></li></a>
<?php endwhile; // end loop two ?>
</ul>
    </section>
    
     <section class="plinks">
    <img class="bimg" src="<?php bloginfo('template_directory');?>/images/surf.jpg" alt="Water accessories">
    <h2>Water Accessoris</h2>
     <p>Muffin tart bear claw pastry cheesecake. Chocolate bar lemon.</p>
    </section>
    </div>
  <small>front-page.php</small>
    <!--End sections start -->

  
  <?php get_footer(); ?>
