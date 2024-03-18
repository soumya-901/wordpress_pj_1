<?php get_header();?>
<?php get_template_part('components/BlogPage/section','header');?>
<div class="bg-pink-400">
  <div>
    catagory name - <?php echo single_cat_title();?>
    <?php get_template_part('includes/section','archive');?>
  </div>
  <?php previous_posts_link();?>
  <?php next_posts_link();?>
  
</div>

<?php get_footer();?>