<h1>Single posts</h1>
<p>powered by singlePhp</p>

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
