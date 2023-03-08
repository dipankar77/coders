<?php 

    if ($settings['paged_on']  != 'yes') {
        $architec_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    } else {
        $architec_paged = '';
    }
    if ( $settings['sort_cat']  == 'yes' ) {
        $query = new \WP_Query(array(
            'posts_per_page'   => $settings['blog_post'],
            'paged' => $architec_paged,
            'post_type' => 'post',
            'cat'=> $settings['blog_cat']
                
        )); 
    } else { 
        $query = new \WP_Query(array(
            'posts_per_page'   => $settings['blog_post'],
            'paged' => $architec_paged,
            'post_type' => 'post'
        ));     
        
    }
?>

<div class="better-blog style-9">
    <div class="row">

        <?php $count = 0;
        while ($query->have_posts()): $query->the_post(); 
        $count++;?>

            <div class="<?php if  ($settings['blog_column'] == 'one') {echo "col-md-12"; } else if  ($settings['blog_column'] == 'two') {echo "col-md-6"; } if  ($settings['blog_column'] == 'three') {echo "col-md-4"; } if  ($settings['blog_column'] == 'four') {echo "col-md-3"; } ?>">
                <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="cont">
                        <div>
                            <?php if  ($settings['meta_show'] == 'yes') { ?>
                                <div class="info">
                                    <a href="#0" class="date">
                                        <span><i><?php echo get_the_date(__('d')); ?></i> <?php echo get_the_date(__('F')); ?></span>
                                    </a>
                                    <span>/</span>
                                    <?php if  ($settings['cat_show'] == 'yes') { ?>
                                        <div class="tag">
                                            <span><?php the_category(' - '); ?></span>
                                        </div>
                                    <?php }; ?>
                                </div>
                            <?php }; ?>
                            <h5>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h5>
                            <?php if  ($settings['button_show'] == 'yes') { ?>
                                <div class="btn-more">
                                    <a href="<?php the_permalink(); ?>" class="simple-btn"><?php echo esc_attr ($settings['button']); ?></a>
                                </div>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php 
        endwhile; wp_reset_postdata();
        ?>

    </div>
</div>