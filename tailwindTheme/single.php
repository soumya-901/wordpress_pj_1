<?php get_header();?>

<div class=" m-[1rem] md:mx[7%] lg:mx-[20%]">
    <h3 class="text-[2rem] md:text-[3rem] font-bold text-gray-800 py-[1rem]"><?php the_title();?></h3>
  <div>
    <?php if(has_post_thumbnail()):?>
      <img src="<?php the_post_thumbnail_url('post-thumbnail',['class'=> 'w-[100%] object-cover h-48 ']); ?>" alt="this is blog image"  
      class = "img-fluid mb-3 img-thumbnail"
      >
    <?php else: endif;?>
    <div class="my-[2rem] mx-[5%]">
    <?php get_template_part('includes/section','blog-content');?>
    </div>
  </div>
</div>

<?php get_footer();?>