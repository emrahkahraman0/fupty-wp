<?php get_header();
$services_href = get_field('services_href');
$projects_href = get_field('projects_href');
$blog_href = get_field('blog_href');
?>

<div id="home_slider">

    <?php if( have_rows('slider_item') ): ?>

    <div class="home_slider owl-carousel owl-theme">

        <?php while( have_rows('slider_item') ): the_row();

            //vars
            $slider_image = get_sub_field('slider_image');

        ?>

        <div class="home_slider_item">
            <img src="<?php echo $slider_image; ?>" alt="">
        </div>
        <!-- home_slider_item -->

        <?php endwhile; ?>

    </div>
    <!-- home_slider_owl -->

    <?php endif; ?>

</div>
<!-- home_slider# -->

<div id="home_about">

    <div class="container">

        <div class="home_about align-items row">

            <div class="home_about_image col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <img src="<?php the_field('about_image') ?>" class="img-fluid" alt="">
            </div>
            <!-- home_about_image -->
            <div class="home_about_text col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h6><?php the_field('about_heading') ?></h6>
                <p><?php the_field('about_desc') ?></p>
                <button><a href="<?php the_field('about_href') ?>">our about</a></button>
            </div>
            <!-- home_about_text -->

        </div>
        <!-- home_about -->

    </div>
    <!-- container -->

</div>
<!-- home_about# -->

<div id="home_services">

    <div class="container">

        <div class="title">our services</div>

        <div class="home_services owl-carousel owl-theme">

            <?php if(have_posts() ) : ?>
                <?php $loop = new WP_Query ( array('post_type' => 'service', 'post__ın' => array() ) ); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="home_services_item">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
                <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                <p><?php the_excerpt(); ?></p>
                <button><a href="<?php the_permalink(''); ?>">read more</a></button>
            </div>
            <!-- home_services_item -->

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- home_services -->

        <div class="all_button">
            <?php if($services_href): ?>
                <button><a href="<?php echo $services_href['url']; ?>" target="<?php echo $services_href['target']; ?>">all services</a></button>
            <?php endif; ?>
        </div>
        <!-- all_button -->

    </div>
    <!-- container -->

</div>
<!-- home_services# -->

<div id="home_projects">

    <div class="container">

        <div class="title">our projects</div>

        <div class="home_projects owl-carousel owl-theme">

            <?php if(have_posts() ) : ?>
                <?php $loop = new WP_Query ( array('post_type' => 'project', 'post__ın' => array() ) ); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="home_projects_item">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                <?php endif; ?>
                <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                <p><?php the_excerpt(); ?></p>
                <button><a href="<?php the_permalink(''); ?>">read more</a></button>
            </div>
            <!-- home_projects_item -->

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- home_projects -->

        <div class="all_button">
            <?php if($projects_href): ?>
                <button><a href="<?php echo $projects_href['url']; ?>" target="<?php echo $projects_href['target']; ?>">all projects</a></button>
            <?php endif; ?>
        </div>
        <!-- all_button -->

    </div>
    <!-- container -->

</div>
<!-- home_projects# -->

<div id="home_blog">

    <div class="container">

        <div class="title">our blog</div>

        <div class="home_blog owl-carousel owl-theme">

            <?php query_posts('showposts=3'); ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="home_blog_item">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                <?php endif; ?>
                <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                <div class="date"><?php the_time("F j Y"); ?></div>
                <p><?php the_excerpt(); ?></p>
                <button><a href="<?php the_permalink(''); ?>">read more</a></button>
            </div>
            <!-- home_blog_item -->

            <?php endwhile;?>

        </div>
        <!-- home_blog -->

        <div class="all_button">
            <?php if($blog_href): ?>
                <button><a href="<?php echo $blog_href['url']; ?>" target="<?php echo $blog_href['target']; ?>">all blog</a></button>
            <?php endif; ?>
        </div>
        <!-- all_button -->

    </div>
    <!-- container -->

</div>
<!-- home_blog# -->

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_footer(); ?>
