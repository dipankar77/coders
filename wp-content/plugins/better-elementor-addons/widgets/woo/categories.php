<div class="better-woo-widgets">
    <div class="item">
        <div class="tit">
            <h4>Categories</h4>
        </div>
        <div class="ctg">
            <?php if ( class_exists( 'WooCommerce' ) ) { ?>
                <ul>
                    <?php

                    $orderby      = 'name';
                    $empty        = 0;

                    $args = array(
                        'orderby'    => $orderby,
                        'hide_empty' => $empty,
                    );

                    $product_categories = get_terms( 'product_cat', $args );

                    foreach( $product_categories as $cat )  { 
                        $woo_cat_slug = $cat->slug; //category slug ?>
                        <li><a href="<?php echo get_term_link( $woo_cat_slug, 'product_cat' ) ?>"><?php echo $cat->name ?></a>
                            <div class="dots"></div> <span>(<?php echo $cat->count ?>)</span>
                        </li>
                    <?php }
                    ?>
                </ul>
            <?php }; ?>
        </div>
    </div>
</div>