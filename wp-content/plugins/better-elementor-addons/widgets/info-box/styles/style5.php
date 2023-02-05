<div class="better-info-box style-5">
    <div class="item">
        <div class="letr-bg"><?php echo $settings['letter']; ?></div>
        <?php if(  $settings['better_infobox_style6_type'] == '1') { ?>
            <span class="numb"><?php echo $settings['number']; ?></span>
        <?php };
        if(  $settings['better_infobox_style6_type'] == '2') { ?>
            <span class="icon <?php echo esc_attr ( $settings['better_infobox_pe7_icon'] ) ; ?>"></span>
        <?php }; ?>
        <h6><?php echo $settings['title']; ?></h6>
        <p><?php echo wp_kses_post( $settings['text']); ?></p>
    </div>
</div>