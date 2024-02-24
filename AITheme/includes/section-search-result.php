<?php if(have_posts()):while(have_posts(  )):the_post( );?>

    <h3><?php the_title(); ?> </h3>
        <div class="img-fluid">
            
            <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail("medium"); ?>
                </a>
            <?php endif; ?>
        </div>
    <?php the_excerpt() ;?>  
    <a href="<?php the_permalink();?>">Read more</a>

<?php endwhile; else:?>
    <h4 class="container mt-4">
      Opps 😢 ! 
      It seems we are unable to find any results
    </h4>
    
  <?php endif;?>
   