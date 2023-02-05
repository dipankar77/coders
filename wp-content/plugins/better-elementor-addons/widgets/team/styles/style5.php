<div class="better-team style-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 better-valign">
                <div class="better-full-width">
                    <div class="mb-0">
                        <h6><?php echo $settings['better_team5_sub_title'];?></h6>
                        <h3><?php echo $settings['better_team5_title'];?></h3>
                    </div>
                    <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                        <span class="prev cursor-pointer">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        <span class="next cursor-pointer">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="team-container">
                    <?php foreach (  $settings['better_member_list'] as $item ) {?>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="<?php echo esc_url( $item['better_team2_image']['url'] ) ?>" alt="">
                            </div>
                            <div class="info">
                                <h5><?php echo $item['better_team2_title'];?></h5>
                                <span><?php echo $item['better_team2_desg'];?></span>
                                <div class="social">
                                    <?php if ($item['better_team2_social_link_1']['url']) { ?>
                                    <a href="<?php echo esc_url( $item['better_team2_social_link_1']['url'] ) ?>"><i class="<?php echo $item['better_team2_social_icon_1']['value'] ?>"></i></a>
                                    <?php }
                                    if ($item['better_team2_social_link_2']['url']) { ?>
                                    <a href="<?php echo esc_url( $item['better_team2_social_link_2']['url'] ) ?>"><i class="<?php echo $item['better_team2_social_icon_2']['value'] ?>"></i></a>
                                    <?php }
                                    if ($item['better_team2_social_link_3']['url']) { ?>
                                    <a href="<?php echo esc_url( $item['better_team2_social_link_3']['url'] ) ?>"><i class="<?php echo $item['better_team2_social_icon_3']['value'] ?>"></i></a>
                                    <?php }
                                    if ($item['better_team2_social_link_4']['url']) { ?>
                                    <a href="<?php echo esc_url( $item['better_team2_social_link_4']['url'] ) ?>"><i class="<?php echo $item['better_team2_social_icon_4']['value'] ?>"></i></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
            </div>
        </div>
    </div>
</div>