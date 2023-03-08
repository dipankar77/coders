<div class="better-testimonial style-7 wow fadeInUp" data-wow-delay=".5s">
    <?php foreach ( $settings['testi_list'] as $index => $item ) : ?>
        <div class="item">
            <p><?php echo  $item['text']; ?></p>
            <div class="info">
                <div class="img">
                    <div class="img-box">
                        <img src="<?php echo esc_url ( $item['image']['url']); ?>" alt="">
                    </div>
                </div>
                <div class="cont">
                    <div class="author">
                        <h6 class="author-name custom-font"><?php echo  $item['title']; ?></h6>
                        <span class="author-details"><?php echo  $item['position']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>