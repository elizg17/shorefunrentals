 <!--Sidebar start -->
	<div id="sidebar">
	<?php if (is_page ()) :?>
	<h2><?php echo get_the_title($post->post_parent);
	?></h2>
	<ul>
   
   <?php 
   
   if ($post->post_parent) {
   
   wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '', ));
   
   } else {
   
      wp_list_pages(array('child_of' => $post->ID, 'title_li' => '', ));

}   


   ?>
   
   </ul>
   <?php endif; ?>
   
   
   
   <?php if(!(is_page() )) : ?>
    <h2><News</h2>
   <ul>
   
   <?php wp_list_categories( array('title_li' => ''));?>
    </ul>
   <?php endif; ?>
  
  
	</div>
    
      <!--Sidebar end -->