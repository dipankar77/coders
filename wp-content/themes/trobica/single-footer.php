<?php
/*
Single Footer
*/
get_header(); ?>
        
    <?php while (have_posts()) : the_post(); ?>
        
        <div class="trobica-custom-footer clearfix">
        	<?php the_content(); ?>
        </div>

    <?php endwhile; ?>
        
<?php  get_footer(); ?>