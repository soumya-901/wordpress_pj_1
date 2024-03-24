<?php if(have_posts()):while(have_posts(  )):the_post( );?>

    <?php the_content();?>  
    
    <!-- get user details -->
    <?php
      $firstname = get_the_author_firstname();
      $lastname = get_the_author_lastname();
      $email = get_the_author_email();
    ?>

    <div class="text-[1.3rem] hover:text-orange-600 mt-[3rem]">
        Posted BY: <?php echo $firstname;?>  <?php echo $lastname;?>
    </div>
    <p class="text-[1.3rem] hover:text-orange-600">Date - <?php echo wp_date( 'F j, Y' );?> <?php echo wp_date( 'g:i a' );?></p>
    <div class="text-[1.3rem] hover:text-orange-600">
        Contact us - <?php echo $email;?>
    </div>
  </div>
    <div>
      <?php
        $posttags = get_the_tags();
        if ($posttags): foreach($posttags as $tag):?>
          <a href="<?php echo get_tag_link($tag->term_id );?>"class = "badge bg-primary text-wrap" > 
            <div><?php echo $tag->name;?></div>
          </a>
      <?php endforeach; else: endif;?>

      <div class="text-center text-[2rem] font-bold w-[100%] my-[3rem]">
          All category details
          <div class="text-[1rem] gap-2 my-8">
<div class="flex justify-between  flex-wrap">
            <?php
              $postcats = get_categories();
              if ($postcats): foreach($postcats as $cat):?>
                <a href="<?php echo get_category_link($cat->term_id );?>"class = "badge bg-primary text-wrap bg-black text-white px-[2rem] py-[1rem] rounded-md hover:rounded-full hover:text-grat-600 my-[2rem]" > 
                  <div><?php echo $cat->name;?></div>
                </a>
            <?php endforeach; else: endif;?>
        </div>
        </div>
      </div>

      

  

<?php endwhile; else: endif;?>