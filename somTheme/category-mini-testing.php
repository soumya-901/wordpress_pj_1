<?php get_header();?>

<div class="container">
    This is mini testing catagory custom design page
  <div>
    <?php get_template_part('includes/section','archive');?>
  </div>
  <?php previous_posts_link();?>
  <?php next_posts_link();?>
</div>

<?php get_footer();?>