<h1>Page posts</h1>


<?php   
  while (have_posts()) {
    the_post();?>
    <h1>
     <?php the_title();  ?>
        
    </h1>
    <p> <?php the_content();  ?></p>
<?php    
  }
?>
