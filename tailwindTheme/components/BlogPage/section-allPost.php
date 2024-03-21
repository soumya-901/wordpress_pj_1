

<div class="lg:flex mx-[1rem] lg:mx-[7rem] ">

<div class="w-[100%] md:w-[60vw] bg-slate-200">
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

// Check if the latest post exists
if ($latest_post) {
        $post = $latest_post[0];
        // Access post details
        $post_title = $post->post_title; // Post title
        $post_content = $post->post_content; // Post content        
        $post_author = get_the_author_meta('display_name', $post->post_author); // Post author
        $post_permalink = get_permalink($post->ID); // Post permalink
        $post_thumbnail = get_the_post_thumbnail($post->ID, 'thumbnail', ['class'=> 'object-cover h-[7rem] w-[100%] pb-[1rem]']); // Featured image
        
        // Output post details
        // echo '<div class="latest-post">';
        // Output post details
        echo '<h2 class="text-green-400"><p><a href="' . $post_permalink . '">' . $post_title . '</a></p></h2>';
        echo '<div >' . $post_content . '</div>';
        if ($post_thumbnail) {
            echo '<div class="post-thumbnail">' . $post_thumbnail . '</div>';
        }
    // Reset post data
} else {
    echo 'No posts found.';
}
?>
</div>
<div class="w-[100%] md:w-[40vw]">

<h1 class="text-gray-600 font-bold text-[1.7rem] px-[1rem] ">Latest posts</h1>

<?php
wp_reset_postdata();
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
        <div class="pt-[1rem] font-bold flex border-dashed  border-b-2 border-gray-300 h-[10rem] w-[100%] ml-2 ">
            <div class="img-fluid w-[40%] mr-2">
                <?php if ( has_post_thumbnail()) : ?>
                    <div class=""><a class="" href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>"></div>
                    <div class=""><?php the_post_thumbnail('post-thumbnail',['class'=> 'object-cover h-[7rem] pb-[1rem]']); ?></div> 
                    </a>
                    <?php endif; ?>
                </div>
                <div class=" w-[60%]">
                    <?php
                // Get categories of the post
                $categories = get_the_category();
                
                // Check if categories exist
                if ($categories) {
                    echo '<div class="categories">';
                    // Loop through each category
                    foreach ($categories as $category) {
                        echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                    }
                    echo '</div>';
                }
                ?>
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

    <div class="bg-gray-100 mt-[5vw] pt-[2vw]">
        <!-- <p class="bg-red-500">All category details</p> -->
          <div class="lg:px-[7rem]">

            <?php
              $postcats = get_categories();
              if ($postcats): foreach($postcats as $cat):?>
              <div class="">
                  <div class=" text-orange-500 px-[1rem] text-[1.5rem] font-bold"><?php echo $cat->name;?></div>

                   <div class=" md:flex md:flex-wrap">

                <a href="<?php echo get_category_link($cat->term_id );?>"class = "badge bg-primary text-wrap" > 
                  <?php 
                   $args = array(
                    'posts_per_page' => 3,
                    'category' => $cat->cat_ID,
                    );
                    $posts = get_posts($args);
                
                    // Loop through each post
                    foreach ($posts as $post) {
                        setup_postdata($post);
                    ?>
                     <div class="bg-white md:w-[45%] m-[1rem] lg:w-[30%]">
                         <!-- img  -->
                                <?php the_post_thumbnail('post-thumbnail',['class'=> 'w-[100%] object-cover h-48']); ?>

                                <?php if ( has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                                <div class="">
                                </div>
                            <div class="pl-[1rem] py-[1rem] text-[2rem] font-bold text-gray-600">
                                <?php the_title();?>
                            </div>
                              
                             <div class="text-gray-500 pl-[1rem] py-[2rem]">
                                <?php
                                    $firstname = get_the_author_firstname();
                                    $lastname = get_the_author_lastname();
                                    echo 'By ' . $firstname . ' ' . $lastname . ' And Team'
                                ?>
                                </div>
                             </div>
                             
                        <!-- -------  -->
                                <br/>
                                <?php endif; ?>
                            </a>
                           
                       
                    <?php    
                    }
                  ?>
                </a>
                </div>
                </div>
            <?php endforeach; else: endif;?>
        </div>
      </div>

<?php
wp_reset_postdata();
?>

