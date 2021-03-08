<div class="our_blog_sidebar col-xl-3 col-lg-4 col-md-12 col-sm-12">

    <div class="sidebar_article">
        <div class="search">
            <form action="<?php echo get_option('home'); ?>" method="get">
                <input type="text" name="s" id="s" placeholder="Search"">
            </form>
            <i class="fas fa-search"></i>
        </div>
        <!-- search -->
    </div>
    <!-- sidebar_article -->
    <div class="sidebar_article">
        <div class="categories">
            <h4>categories</h4>
            <ul>
                <?php wp_list_cats($args); ?>
            </ul>
        </div>
        <!-- categories -->
    </div>
    <!-- sidebar_article -->
    <div class="sidebar_article">
        <div class="latest-posts">
            <h4>latest posts</h4>
            <div class="latest-post">

                <?php query_posts('showposts=3'); ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="article-post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="article-flex">
                        <div class="article-author">By <a href="#"><?php the_author(); ?></a></div><span>|</span>
                        <div class="article-category"><a href="#"><?php the_category(', ') ?></a></div><span>|</span>
                        <div class="article-date"><?php the_time("F j Y"); ?></div>
                    </div>
                    <a href="#" class="read-more">
                        <i class="fas fa-chevron-right"></i>
                        <h2>Read the article</h2>
                    </a>
                </div>
                <!-- article-post -->
                <?php endwhile;?>

            </div>
            <!-- latest-post -->
        </div>
        <!-- latest-posts -->
    </div>
    <!-- sidebar_article -->

</div>
<!-- our_blog_sidebar -->