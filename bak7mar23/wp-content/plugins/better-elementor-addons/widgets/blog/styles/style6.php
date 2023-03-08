<div class="better-blog style-6">
    <div class="container">
        <div class="row">
            <?php 
            if ( !empty($settings['cat']) && $settings['cat'] != 'all' ) {
                $blog_post = new WP_Query( array (
                    'post_type' => 'post',
                    'posts_per_page' => $settings['posts_number'],
                    'order' => $settings['order'],
                    'category_name' => $settings['cat']
                ));
            } else {
                $blog_post = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $settings['posts_number'],
                    'order' => $settings['order'],
                ));
            }
            while($blog_post->have_posts()) : $blog_post->the_post();
            ?>
            <div class="better-full-width">
                <div class="img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="sm-post">
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>  
                    <span class="date gr-text"><?php echo get_the_date(__('d')); ?> <?php echo get_the_date(__('M')); ?> <?php echo get_the_date(__('Y')); ?></span>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>