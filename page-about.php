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

<div id="about_team">

    <div class="container">

        <div class="title">about team</div>

        <div class="about_team row">

            <div class="about_team_item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <img src="https://via.placeholder.com/350x300" class="img-fluid" alt="">
                <h6><a href="#">team name</a></h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet doloremque dolorum fugit iusto molestiae non suscipit tempore ut Aliquam aliquid amet doloremque dolorum.</p>
                <button><a href="#">read more</a></button>
            </div>
            <!-- about_team_item -->
            <div class="about_team_item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <img src="https://via.placeholder.com/350x300" class="img-fluid" alt="">
                <h6><a href="#">team name</a></h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet doloremque dolorum fugit iusto molestiae non suscipit tempore ut Aliquam aliquid amet doloremque dolorum.</p>
                <button><a href="#">read more</a></button>
            </div>
            <!-- about_team_item -->
            <div class="about_team_item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <img src="https://via.placeholder.com/350x300" class="img-fluid" alt="">
                <h6><a href="#">team name</a></h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet doloremque dolorum fugit iusto molestiae non suscipit tempore ut Aliquam aliquid amet doloremque dolorum.</p>
                <button><a href="#">read more</a></button>
            </div>
            <!-- about_team_item -->
            <div class="about_team_item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <img src="https://via.placeholder.com/350x300" class="img-fluid" alt="">
                <h6><a href="#">team name</a></h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet doloremque dolorum fugit iusto molestiae non suscipit tempore ut Aliquam aliquid amet doloremque dolorum.</p>
                <button><a href="#">read more</a></button>
            </div>
            <!-- about_team_item -->

        </div>
        <!-- about_team -->

    </div>
    <!-- container -->

</div>
<!-- about_team -->

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_footer(); ?>
