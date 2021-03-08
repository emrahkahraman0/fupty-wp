<?php get_header(); ?>

<div id="blog_banner">

    <img src="<?php bloginfo('template_url'); ?>/img/blog-bg.jpg" class="img-fluid" alt="">
    <div class="text">blog</div>

</div>
<!-- blog_banner# -->

<div id="our_blog">

    <div class="container">

        <div class="our_blog row">

            <div class="our_blog_posts col-xl-9 col-lg-8 col-md-12 col-sm-12">

                <?php while ( have_posts() ) : the_post(); ?>

                <div class="post_article">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                    <?php endif; ?>
                    <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                    <h5><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h5>
                    <div class="desc-flex">
                        <div class="icon">
                            <i class="far fa-user"></i>
                            <h6>by <a href="#"><?php the_author(); ?></a></h6>
                        </div>
                        <div class="icon">
                            <i class="far fa-clock"></i>
                            <h6><?php the_time("F j Y"); ?> </h6>
                        </div>
                        <div class="icon">
                            <i class="far fa-comment-alt"></i>
                            <h6><?php comments_number('Yorum Yok', '1 Yorum ', '% Yorum' );?></h6>
                        </div>
                    </div>
                    <!-- desc-flex -->
                    <p><?php the_excerpt(); ?></p>
                    <button><a href="<?php the_permalink(''); ?>">read more</a></button>
                </div>
                <!-- post_article -->

                <?php endwhile;?>

            </div>
            <!-- blog-post -->

            <?php get_sidebar(); ?>

        </div>
        <!-- blog-wrapper -->

        <ul class="page">
            <?php sayfalama(); ?>
        </ul>
        <!-- page -->

    </div>
    <!-- container -->

</div>
<!-- blog# -->

<?php get_footer(); ?>
