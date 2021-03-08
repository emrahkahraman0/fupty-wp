<div id="our_teams">

    <div class="container">

        <div class="our_teams row">

            <?php $query = new WP_Query('post_type=team'); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="our_teams_item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
                <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                <p><?php the_excerpt(); ?></p>
                <button><a href="<?php the_permalink(''); ?>">read more</a></button>
            </div>
            <!-- our_teams_item -->

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sory Whatsap Men' ); ?></p>
            <?php endif; ?>

        </div>
        <!-- our_teams -->

    </div>
    <!-- container -->

</div>
<!-- our_teams# -->