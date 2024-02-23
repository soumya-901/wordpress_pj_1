<?php get_header();?>

<div class="container">
  <div>
    catagory name - <?php echo single_cat_title();?>
    <?php get_template_part('includes/section','archive');?>
  </div>
  <?php previous_posts_link();?>
  <?php next_posts_link();?>
  
</div>

<?php get_footer();?>