<div class="better-portfolio style-7">

    <?php if( $settings['filter_position'] == 'aboveheading' and $settings['portfolio6_categories_show'] == 'yes' ) : ?>
        <div class="filtering">
            <div class="filter">
                <span data-filter='*' class="active">All</span>
                <?php foreach ( $settings['portfolio_categories'] as $index => $item ) : ?>
                    <span data-filter='.<?php echo  $item['item_category_slug']; ?>'><?php echo  $item['item_category_title']; ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?> 
    
    <div class="row gallery">
        <?php if($settings['port_title_display'] == 'block') : ?>
            <div class="col-md-<?php echo $settings['better_portfolio4_columns'] ?> items mt-0">
                <div class="section-head mb-0">
                    <h3><?php echo  $settings['port_title']; ?></h3>
                    <?php if( $settings['filter_position'] == 'underheading' and $settings['portfolio6_categories_show'] == 'yes') : ?>
                        <div class="filtering">
                            <div class="filter">
                                <span data-filter='*' class="active">All</span>
                                <?php foreach ( $settings['portfolio_categories'] as $index => $item ) : ?>
                                    <span data-filter='.<?php echo  $item['item_category_slug']; ?>'><?php echo  $item['item_category_title']; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php foreach ( $settings['portfolio6_items'] as $index => $item ) : ?>
            <div class="col-md-<?php echo $settings['better_portfolio4_columns'] ?> items <?php echo  $item['portfolio6_item_category_slug_call']; ?>">
                <div class="item">
                    <div class="img">
                        <img src="<?php echo esc_url ( $item['portfolio6_item_image']['url']); ?>" alt="">
                    </div>
                    <div class="cont <?php if ( $settings['info_vis']  == 'yes' ) { echo 'vis'; } ?>">
                        <?php if ( $settings['info_vis']  == 'yes' ) { ?>
                            <h5><a href="<?php echo esc_url( $item['portfolio6_item_link']['url']); ?>"><?php echo  $item['portfolio6_item_title']; ?></a></h5>
                        <?php } ?>
                        <span><a href="<?php echo esc_url( $item['portfolio6_item_cat_link']['url']); ?>"><?php echo  $item['portfolio6_item_cat']; ?></a>, <a href="<?php echo esc_url( $item['portfolio6_item_cat_link2']['url']); ?>"><?php echo  $item['portfolio6_item_cat2']; ?></a></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
</div>