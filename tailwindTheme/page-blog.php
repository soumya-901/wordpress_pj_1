<?php get_header();?>

<div class="">
  <div>
    <h4>All Categories</h4>
    <ul>
      <?php
      $categories = get_categories();
      foreach ($categories as $category) {
        echo '<li class = "w-fit py-0.5"><a class = "bg-sky-500" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
      }
      ?>
    </ul>
  </div>
    <?php get_template_part('components/BlogPage/section','allPost');?>
  </div>
  <?php previous_posts_link();?>
  <?php next_posts_link();?>
  
</div>

<?php get_footer();?>