<div class="bg-gray-100 px-[10%] flex flex-wrap">
<div class="w-[100%]">
<?php if(have_posts()):while(have_posts(  )):the_post( );?>
</div>
<div class=" bg-white my-[2rem] mx-[1rem] pb-[1rem] w-[100%] md:w-[40%] lg:w-[30%]">
    <div class="">
        
        <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('post-thumbnail',['class'=> 'w-[100%] object-cover h-48 ']); ?>
            </a>
            <h3 class="text-[1.5rem] font-bold p-[1rem]"><?php the_title(); ?> </h3>
            <?php endif; ?>
        </div>
            <div class="px-[1rem]">
    <?php the_excerpt() ;?>  
   
    </div>
            </div>
    <div class="bg-yellow-400 ">
<?php endwhile; else:?>
    <h4 class="container h-[60vh] m-auto text-center pt-[20vh] text-[2rem]">
      Opps 😢 ! 
      It seems we are unable to find any results
    </h4>
    
</div>
  <?php endif;?>
   </div>