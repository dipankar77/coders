<div class="better-blog style-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="posts">
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
                    while($blog_post->have_posts()) : $blog_post->the_post(); ?>
                        <div class="item mb-80">
                            <div class="img">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-10">
                                        <a href="#0" class="date">
                                            <span class="num"><?php echo get_the_date(__('d')); ?></span>
                                            <span><?php echo get_the_date(__('F')); ?></span>
                                        </a>
                                        <div class="tags">
                                            <span><?php the_category(' - '); ?></span>
                                        </div>
                                        <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p>
                                            <?php $excerpt = get_the_excerpt();
                                            $excerpt = substr( $excerpt , 0,$settings['excerpt']); 
                                            echo $excerpt;echo esc_attr ($settings['excerpt_after'])?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="better-simple-btn mt-30">Read More</a>
                                    </div>
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
    </div>
</div>