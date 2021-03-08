<?php get_header(); ?>

<div id="blog_detail_banner">

    <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
    <?php endif; ?>
    <div class="text"><?php the_title(); ?></div>

</div>
<!-- blog_detail_banner# -->

<div id="our_blog">

    <div class="container">

        <div class="our_blog row">

            <div class="blog_single col-xl-9 col-lg-8 col-md-12 col-sm-12">

                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                <div class="single_article">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                    <?php endif; ?>
                    <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                    <h5><?php the_title(); ?></h5>
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
                    <p><?php the_content('', ''); ?></p>

                    <?php comments_template(); ?>

                </div>
                <!-- single_article -->

                <?php endwhile; endif; ?>

            </div>
            <!-- blog_single -->

            <?php get_sidebar(); ?>

        </div>
        <!-- our_blog -->

    </div>
    <!-- container -->

</div>
<!-- our_blog# -->


<?php get_footer(); ?>
