<div class="lg:flex mx-[1rem] lg:mx-[7rem] ">

<div class="w-[100%] md:w-[60vw] bg-slate-200">Loading </div>
<div class="w-[100%] md:w-[40vw]">

<h1 class="text-gray-600 font-bold text-[1.7rem] px-[1rem] ">Latest posts</h1>
<?php


// Showing latest post
// require_once('wp-load.php');

$latest_post = get_posts(array(
    'numberposts' => 1,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC'
));

$latest_post_id = !empty($latest_post) ? $latest_post[0]->ID : 0;
// setup_postdata( $latest_post_id[0] );
?>


<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5, 
    'post__not_in'=> array($latest_post_id) 
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="pt-[1rem] font-bold px-[1rem] flex py-2 border-dashed  border-b-2 border-gray-300 h-24 w-[100%]">
            <div class="img-fluid w-[40%] mr-2">
                <?php if ( has_post_thumbnail()) : ?>
                    <a class="" href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                    <div class=""><?php the_post_thumbnail('post-thumbnail',['class'=> 'h-[5rem]']); ?></div> 
                    </a>
                    <?php endif; ?>
                </div>
                <div class=" w-[60%]">
                    <h1 class="text-[1rem] text-orange-600 font-bold"><?php the_title(); ?></h1>
                <h3 class="text-[1rem] text-gray-600 font-bold"><?php the_title(); ?></h3>
        </div>
        </div>
        <?php
    }
} else {
    echo 'No posts found';
}
?>
</div>
</div>

    <div>
          All category details
          <div>

            <?php
              $postcats = get_categories();
              if ($postcats): foreach($postcats as $cat):?>
                  <div><?php echo $cat->name;?></div>
                <a href="<?php echo get_category_link($cat->term_id );?>"class = "badge bg-primary text-wrap" > 
                <div><?php echo 'All about ' . $cat->name . ' articles' ?> </div>
                  <?php 
                   $args = array(
                    'posts_per_page' => 5,
                    'category' => $cat->cat_ID,
                    );
                    $posts = get_posts($args);
                
                    // Loop through each post
                    foreach ($posts as $post) {
                        setup_postdata($post);
                    ?>
                        <?php if ( has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php the_title();?>
                                <?php the_post_thumbnail("medium"); ?>
                                <?php
                                    $firstname = get_the_author_firstname();
                                    $lastname = get_the_author_lastname();
                                    echo 'By ' . $firstname . ' ' . $lastname . ' And Team'
                                ?>
                                <br/>
                            </a>
                        <?php endif; ?>
                    <?php    
                    }
                  ?>
                </a>
            <?php endforeach; else: endif;?>
        </div>
      </div>

<?php
wp_reset_postdata();
?>

