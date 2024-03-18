<?php get_header();?>


    <?php get_template_part('components/BlogPage/section','header');?>

    <?php get_template_part('components/BlogPage/section','allPost');?>
  </div>
  <?php previous_posts_link();?>
  <?php next_posts_link();?>
  
</div>

<?php get_footer();?>