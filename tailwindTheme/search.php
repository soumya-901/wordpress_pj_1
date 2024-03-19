<?php get_header();?>


<div >
  <div>
    <div>
      Search Results For ' <?php echo get_search_query();?> '
    </div>
    <?php get_template_part('includes/section','search-result');?>
    <?php previous_posts_link();?>
    <?php next_posts_link();?>
  </div>  
</div>

<?php get_footer();?>