<div class="better-team style-2 row">
    <div class="col-lg-12">
        <div class="team-container">
            <?php foreach (  $settings['better_member_list'] as $item ) {?>
                <div class="item wow fadeInUp" data-wow-delay=".3s">
                    <div class="img wow imago">
                        <img src="<?php echo esc_url( $item['better_team2_image']['url'] ) ?>" alt="">
                        <div class="social better-valign">
                            <div class="better-full-width">
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
                    <div class="info">
                        <h5 class="custom-font"><?php echo $item['better_team2_title'];?></h5>
                        <span><?php echo $item['better_team2_desg'];?></span>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
</div>
