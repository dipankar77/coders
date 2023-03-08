<div class="better-blog style-4">

    <?php $count = 0;
    while ($query->have_posts()): $query->the_post(); 
    $count++;?>

        <div class="<?php if  ($settings['blog_column'] == 'one') {echo "col-md-12"; } else if  ($settings['blog_column'] == 'two') {echo "col-md-6"; } if  ($settings['blog_column'] == 'three') {echo "col-md-4"; } if  ($settings['blog_column'] == 'four') {echo "col-md-3"; } ?>">
            <div class="item">
                <div class="img better-bg-img" data-background="<?php the_post_thumbnail_url(); ?>"></div>
                <div class="cont">

                    <?php if  ($settings['meta_show'] == 'yes') { ?>
                    <div class="info">
                        <div class="author">
                            <span><?php echo get_the_author_meta( 'nickname' ) ?></span>
                        </div>
                        <div class="date">
                            <span><?php echo get_the_date( 'j M Y' ); ?></span>
                        </div>
                        <div class="coments">
                            <span><?php echo get_comments_number(); ?> Coments</span>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="text">
                        <h4><?php the_title(); ?></h4>

                        <?php if  ($settings['show_excerpt'] == 'yes') { ?>
                        <p>
                            <?php $excerpt = get_the_excerpt();
                            $excerpt = substr( $excerpt , 0,$settings['excerpt']); 
                            echo $excerpt;echo esc_attr ($settings['excerpt_after'])?>
                        </p>
                        <?php } ?>

                    </div>
                    <?php if  ($settings['button_show'] == 'yes') { ?>
                    <div class="more">
                        <h6>
                            <a href="<?php the_permalink(); ?>"><?php echo esc_attr ($settings['button']); ?></a>
                        </h6>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php 
    endwhile; wp_reset_postdata();
    ?>

</div>