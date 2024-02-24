<?php get_header();?>


<div class="container">
  <div class = "container d-flex flex-row bd-highlight justify-content-between"  >
    <div class = "col-sm-2" >
      <?php if(is_active_sidebar('page-sidebar')):?>
        <?php dynamic_sidebar('page-sidebar');?>
        <?php endif;?>
    </div>
    <div>
      <?php get_template_part('includes/section','content');?>
    </div>
  </div>
</div>

<?php get_footer();?>