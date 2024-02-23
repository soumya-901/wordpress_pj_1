<?php get_header();?>

<div class="container">
  <div>
    <div>
        Search Results For ' <?php echo get_search_query();?> '
    </div>
    <?php get_template_part('includes/section','archive');?>
  </div>
  <?php previous_posts_link();?>
  <?php next_posts_link();?>
  
</div>

<?php get_footer();?>