<?php if(have_posts()):while(have_posts(  )):the_post( );?>

<div>
    <h3><?php the_title();?></h3>
    <?php the_content();?>  
</div>

<?php endwhile; else: endif;?>
   