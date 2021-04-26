<?php
/*Template Name: About Page*/
get_header(); ?>

<div id="about_banner">

    <img src="<?php the_field('about_bg') ?>" class="img-fluid" alt="">
    <div class="text"><?php the_title(); ?></div>

</div>
<!-- about_banner# -->

<div id="our_about">

    <div class="container">

        <div class="our_about align-items row">

            <?php while ( have_posts() ) : the_post(); ?>

            <div class="our_about_image col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
            </div>
            <!-- our_about_image -->
            <div class="our_about_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_title(); ?></h6>
                <p><?php the_content(); ?></p>
            </div>
            <!-- our_about_text -->

            <?php endwhile;?>

        </div>
        <!-- our_about -->

    </div>
    <!-- container -->

</div>
<!-- our_about# -->

<div id="about_counters">

    <div class="container">

        <div class="title"><?php the_field('counter_heading'); ?></div>

        <?php if( have_rows('counter_item') ): ?>

        <div class="about_counters row">

        <?php while( have_rows('counter_item') ): the_row(); ?>

            <div class="about_counters_item col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="count"><?php echo get_sub_field('counter_count'); ?></div>
                <div class="name"><?php echo get_sub_field('counter_name'); ?></div>
            </div>
            <!-- about_counters_item -->

        <?php endwhile; ?>

        </div>
        <!-- about_counters -->

        <?php endif; ?>

    </div>
    <!-- container -->

</div>
<!-- about_counters# -->

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_footer(); ?>
