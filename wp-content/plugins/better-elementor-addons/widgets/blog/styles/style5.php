<div class="better-blog style-5">
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
            <div class="col-lg-4">
                <div class="item md-mb50">
                    <div class="img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">

                        <div class="tag">
                            <a href="#0"><?php the_category(' - '); ?></a>
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <h6>By <?php the_author_posts_link(); ?> <span><?php echo get_the_date(__('d')); ?> <?php echo get_the_date(__('F')); ?></span></h6>
                        </div>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <a href="<?php the_permalink(); ?>" class="more">Read More</a>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>