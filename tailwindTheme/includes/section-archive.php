<div class=" bg-gray-100 w-[80%] ml-[10%] flex flex-wrap justify-between ">
<?php if(have_posts()):while(have_posts(  )):the_post( );?>
<div class=" w-[30%] bg-white my-[2rem]">
        <div class="img-fluid">
            
            <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                    
                    <?php the_post_thumbnail('post-thumbnail',['class'=> 'w-[100%] object-cover h-48 ']); ?>
                </a>
                <h3 class=" text-gray-700 text-[2rem] font-bold p-[1rem]"><?php the_title(); ?> </h3>
            <?php endif; ?>
        </div>
        <div class="text-[1rem] p-[1rem]">
            <?php the_excerpt() ;?>  
            
        </div>
</div>
<?php endwhile; else: endif;?>
</div>