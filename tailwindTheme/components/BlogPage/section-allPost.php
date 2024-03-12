
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
        <div class="pt-[4rem] bg-slate-500 font-bold xl:px-[7rem] px-[1rem]">
            <h3 class="text-[3rem]"><?php the_title(); ?></h3>
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
<!-- ================== -->
<div>
<div>
<p>BIZ & TECH</p>
<p>SLMs: The Next Research Concierges, Tutors, and Volunteers?</p>
<p>Small language models are nimble yet potent alternatives to large language models like ChatGPT. Let's explore how to effectively use SLMs in healthcare, education, and NGOs.</p>
<img src="" alt="">
</div>
<div>
    <p>Latest posts</p>
    <!-- one box----  -->
    <div>
        <div>
        <img src="https://th.bing.com/th/id/OIP.IhiqRWFamp-enjV2csKdzwHaE8?w=244&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        </div>
        <div>
            <p>TALENT</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, distinctio eum odio odit similique cupiditate beatae eligendi molestiae. Eligendi, ipsa.</p>
        </div>
    </div>
    <!-- ===========2============= -->
    <div>
        <div>
        <img src="" alt="">
        </div>
        <div>
            <p>TALENT</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, distinctio eum odio odit similique cupiditate beatae eligendi molestiae. Eligendi, ipsa.</p>
        </div>
    </div>
    <!-- ==========3=========== -->
    <div>
        <div>
        <img src="" alt="">
        </div>
        <div>
            <p>TALENT</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, distinctio eum odio odit similique cupiditate beatae eligendi molestiae. Eligendi, ipsa.</p>
        </div>
    </div>
    <!-- ============4=========== -->
    <div>
        <div>
        <img src="" alt="">
        </div>
        <div>
            <p>TALENT</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, distinctio eum odio odit similique cupiditate beatae eligendi molestiae. Eligendi, ipsa.</p>
        </div>
    </div>
    <!-- ========5==========  -->
    <div>
        <div>
        <img src="" alt="">
        </div>
        <div>
            <p>TALENT</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, distinctio eum odio odit similique cupiditate beatae eligendi molestiae. Eligendi, ipsa.</p>
        </div>
    </div>
</div>
</div>