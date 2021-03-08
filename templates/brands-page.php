<div id="brands_logo">

    <div class="container">

        <div class="brands_logo owl-carousel owl-theme">

            <?php $query = new WP_Query('post_type=brands'); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="brands_logo_item">
                <img src="<?php the_field('brands_image'); ?>" class="img-fluid" alt="">
            </div>
            <!-- brands_item -->

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sory Whatsap Men' ); ?></p>
            <?php endif; ?>

        </div>
        <!-- brands_logo -->

    </div>
    <!-- container -->

</div>
<!-- brands_logo# -->