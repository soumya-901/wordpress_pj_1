<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header('secondary');?>



<div class="container">
    <h1 id="heading"><?php the_title();?></h1>
    <div class="container">
        <p class="h4">this is new template</p>
    </div>
  <div>
    <?php get_template_part('includes/section','content');?>
  </div>
</div>

<?php get_footer();?>

