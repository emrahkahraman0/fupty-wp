<?php get_header(); ?>

<div id="projects_detail_banner">

    <img src="<?php bloginfo('template_url'); ?>/img/services-detail-bg.jpg" class="img-fluid" alt="">
    <div class="text"><?php the_title(); ?></div>

</div>
<!-- projects_detail_banner# -->

<div id="projects_detail">

    <div class="container">

        <div class="projects_detail align-items row">

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="projects_detail_image col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
            </div>
            <!-- services_detail_image -->
            <div class="projects_detail_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_title(); ?></h6>
                <p><?php the_content('', ''); ?></p>
            </div>
            <!-- projects_detail_text -->

            <?php endwhile; endif; ?>

        </div>
        <!-- services_detail -->

    </div>
    <!-- container -->

</div>
<!-- projects_detail# -->

<div id="projects_bottom">

    <div class="container">

        <div class="title">popular projects</div>

        <div class="projects_bottom owl-carousel owl-theme">

            <?php if(have_posts() ) : ?>
                <?php $loop = new WP_Query ( array('post_type' => 'project', 'post__ın' => array() ) ); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="projects_bottom_item">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
                <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                <p><?php the_excerpt(); ?></p>
                <button><a href="<?php the_permalink(''); ?>">read more</a></button>
            </div>
            <!-- projects_bottom_item -->

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- services_bottom -->

    </div>
    <!-- container -->

</div>
<!-- services_bottom# -->

<?php get_footer(); ?>
