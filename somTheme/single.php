<?php get_header();?>

<div class="container">
    <h3><?php the_title();?></h3>
  <div>
    <?php if(has_post_thumbnail()):?>
      <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="this is blog image"   
      class = "img-fluid mb-3 img-thumbnail"
      >
    <?php else: endif;?>
    <?php get_template_part('includes/section','blog-content');?>
  </div>
</div>

<?php get_footer();?>