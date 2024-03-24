<?php get_header();?>
<?php get_template_part('components/BlogPage/section','header');?>
<div class="bg-gray-100">
  <div class="lg:px[7rem] px-[1rem] text-[2rem]">
    <div class="ml-[10%] w-[90%]">
      catagory name - <?php echo single_cat_title();?>
    </div>

      <?php get_template_part('includes/section','archive');?>

  </div>
  <?php previous_posts_link();?>

    <?php next_posts_link();?>

  
</div>

<?php get_footer();?>