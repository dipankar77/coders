<div class="better-slider style-2 slider">
    <div class="swiper-container parallax-slider">
        <div id="js-cta-slider" class="swiper-wrapper cta__slider">
            <?php foreach ( $settings['slider_list'] as $index => $item ) : ?>
            <!-- SLIDER ITEM -->
            <div class="cta__slider-item swiper-slide">
                <div class="better-bg-img better-valign" data-background="<?php echo esc_url ( $item['image']['url']); ?>" data-overlay-dark="<?php echo $settings['slider_mask'];?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-9 offset-md-1">
                                <div class="caption">
                                    <h1 data-splitting class="custom-font"><?php echo wp_kses_post ( $item['title'] ); ?></h1>
                                    <p><?php echo wp_kses_post ( $item['subtitle'] ); ?></p>
                                    <?php if(!empty($item['btn_link']['url'])): ?>
                                    <a href="<?php echo esc_url ( $item['btn_link']['url'] ) ; ?>" class="btn-dis custom-font mt-30">
                                        <span><?php echo esc_attr ( $item['btn_text'] ) ; ?></span>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- SLIDER ITEM -->
        </div>

        <!-- slider setting -->
        <div class="control-text custom-font">
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <span class="arrow prv">Prev</span>
            </div>
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <span class="arrow nxt">Next</span>
            </div>
        </div>

        <?php if($show_paging=='show') : ?>
        <div class="swiper-pagination custom-font"></div>
        <?php endif; ?>

        <div class="social-icon">
            <?php foreach ( $settings['social_links_list'] as $index => $item ) : ?>
            <a href="<?php echo esc_url ( $item['social_btn_link']['url'] ) ; ?>"><?php echo esc_attr ( $item['social_btn_title'] ) ; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>