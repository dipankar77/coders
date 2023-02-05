<div class="better-price style-3">
    <div class="item <?php if ( $settings['better_popular_plan'] == 'yes' ) {echo 'active';}; ?>">
        <div class="title">
            <h5><?php echo $settings['better_price_box_title'] ?></h5>
        </div>
        <div class="amount">
            <h2><span <?php if($settings['better_price_mode_style'] == '2') { echo 'class="float"'; }?>>$</span> <?php echo $settings['better_price_box_amount'] ?></h2>
            <h6><?php echo $settings['better_price_box_plan'] ?></h6>
        </div>
        <div class="cont <?php if($settings['better_price_mode_style'] == '2') { echo 'pricing-mode-2'; }?>">
            <?php echo wp_kses_post ( $settings['better_price2_box_features'] ) ?>
        </div>
        <div class="order">
            <?php if($settings['better_price_mode_style'] == '1') { ?>
                <a href="<?php echo esc_url($settings['better_price_box_button_link']['url']) ?>" class="better-btn-pricing"><?php echo $settings['better_price_box_button_text'] ?></a>
            <?php };
            if($settings['better_price_mode_style'] == '2') { ?>
                <a href="<?php echo esc_url($settings['better_price_box_button_link']['url']) ?>" class="better-btn-architec"><?php echo $settings['better_price_box_button_text'] ?></a>
            <?php }; ?>
        </div>
    </div>
</div>