<div class="better-menu-list style-3">
    <div id="tabs">

        <div class="row">

            <div class="col-lg-3">
                <ul class="tab-icons">

                    <?php foreach ( $settings['menu_menu_list'] as $index => $item ) :?>
                    
                        <?php $tab_count = $index + 1; ?>
                        <li><a href="#tabs-<?php echo esc_attr($id_int . $tab_count) ?>"><span><?php echo $item['number'] ?></span> <?php echo  $item['title']; ?></a></li>

                    <?php endforeach; ?>

                </ul>

                <a href="<?php echo esc_url($setting['btn_url']['url']) ?>" class="better-btn-skew btn-color btn-bg mt-30">
                    <span><?php echo $settings['btn_text'] ?></span>
                    <i></i>
                </a>
            </div>

            <div class="col-lg-9">
                <div class="bord-box">
                    <?php foreach ( $settings['menu_menu_list'] as $index => $item ) : ?>
                    <?php $tab_count = $index + 1; ?>
                        <div class="tabs-cont" id="tabs-<?php echo esc_attr($id_int . $tab_count) ?>">
                            <?php if(!empty($item['title1'])) { ?>
                            <div class="list">
                                <div class="box">
                                    <div class="combo">
                                        <div class="img">
                                            <img src="<?php echo esc_url ( $item['image1']['url']); ?>" alt="">
                                        </div>
                                        <div class="text">
                                            <div class="flex">
                                                <h6><?php echo  $item['title1']; ?></h6>
                                                <div class="dot-line better-valign">
                                                    <div class="dots"></div>
                                                </div>
                                                <div class="price">
                                                    <h4><span>$</span> <?php echo  $item['price1']; ?></h4>
                                                </div>
                                            </div>
                                            <p><?php echo  $item['description1']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }; ?>
                            <?php if(!empty($item['title2'])) { ?>
                            <div class="list">
                                <div class="box">
                                    <div class="combo">
                                        <div class="img">
                                            <img src="<?php echo esc_url ( $item['image2']['url']); ?>" alt="">
                                        </div>
                                        <div class="text">
                                            <div class="flex">
                                                <h6><?php echo  $item['title2']; ?></h6>
                                                <div class="dot-line better-valign">
                                                    <div class="dots"></div>
                                                </div>
                                                <div class="price">
                                                    <h4><span>$</span> <?php echo  $item['price2']; ?></h4>
                                                </div>
                                            </div>
                                            <p><?php echo  $item['description2']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }; ?>
                            <?php if(!empty($item['title3'])) { ?>
                            <div class="list">
                                <div class="box">
                                    <div class="combo">
                                        <div class="img">
                                            <img src="<?php echo esc_url ( $item['image3']['url']); ?>" alt="">
                                        </div>
                                        <div class="text">
                                            <div class="flex">
                                                <h6><?php echo  $item['title3']; ?></h6>
                                                <div class="dot-line better-valign">
                                                    <div class="dots"></div>
                                                </div>
                                                <div class="price">
                                                    <h4><span>$</span> <?php echo  $item['price3']; ?></h4>
                                                </div>
                                            </div>
                                            <p><?php echo  $item['description3']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }; ?>
                            <?php if(!empty($item['title4'])) { ?>
                            <div class="list">
                                <div class="box">
                                    <div class="combo">
                                        <div class="img">
                                            <img src="<?php echo esc_url ( $item['image4']['url']); ?>" alt="">
                                        </div>
                                        <div class="text">
                                            <div class="flex">
                                                <h6><?php echo  $item['title4']; ?></h6>
                                                <div class="dot-line better-valign">
                                                    <div class="dots"></div>
                                                </div>
                                                <div class="price">
                                                    <h4><span>$</span> <?php echo  $item['price4']; ?></h4>
                                                </div>
                                            </div>
                                            <p><?php echo  $item['description4']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>