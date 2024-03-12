<?php if(have_posts()):while(have_posts(  )):the_post( );?>

    <?php the_content();?>  
    
    <!-- get user details -->
    <?php
      $firstname = get_the_author_firstname();
      $lastname = get_the_author_lastname();
      $email = get_the_author_email();
    ?>

    <div class="bg-green-400">
        Posted BY: <?php echo $firstname;?>  <?php echo $lastname;?>
    </div>
    <p>Date - <?php echo wp_date( 'F j, Y' );?> <?php echo wp_date( 'g:i a' );?></p>
    <div>
        Contact us - <?php echo $email;?>
    </div>

    <div>
      <?php
        $posttags = get_the_tags();
        if ($posttags): foreach($posttags as $tag):?>
          <a href="<?php echo get_tag_link($tag->term_id );?>"class = "badge bg-primary text-wrap" > 
            <div><?php echo $tag->name;?></div>
          </a>
      <?php endforeach; else: endif;?>

      <div>
          All category details
          <div>

            <?php
              $postcats = get_categories();
              if ($postcats): foreach($postcats as $cat):?>
                <a href="<?php echo get_category_link($cat->term_id );?>"class = "badge bg-primary text-wrap" > 
                  <div><?php echo $cat->name;?></div>
                </a>
            <?php endforeach; else: endif;?>
        </div>
      </div>

      

    </div>

<?php endwhile; else: endif;?>