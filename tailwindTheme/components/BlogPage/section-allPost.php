
<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // Display all posts
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div>
            <h3><?php the_title(); ?></h3>
            <div class="img-fluid">
                <?php if ( has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail("medium"); ?>
                    </a>
                <?php endif; ?>
            </div>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read more</a>
        </div>
        <?php
    }
} else {
    echo 'No posts found';
}

wp_reset_postdata();
?>