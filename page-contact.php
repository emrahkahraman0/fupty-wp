<?php
/*Template Name: Contact Page*/
get_header(); ?>

<div id="contact_banner">

    <img src="<?php the_field('contact_bg') ?>" class="img-fluid" alt="">
    <div class="text"><?php the_title(); ?></div>

</div>
<!-- contact_banner# -->

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

<div id="our_contact">

    <div class="container">

        <div class="our_contact align-items row">

            <div class="our_contact_map col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6146976.806107894!2d8.223663855457065!3d41.2118863489328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2zxLB0YWx5YQ!5e0!3m2!1str!2str!4v1614606022389!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- our_contact_map -->
            <div class="our_contact_form col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <?php the_content(); ?>
            </div>
            <!-- our_contact_form -->

        </div>
        <!-- our_contact -->

    </div>
    <!-- container -->

</div>
<!-- our_contact# -->

<?php endwhile; else : ?>
    <p><?php esc_html_e('Aradığınız şey bizde yok kardeş!!!!'); ?></p>
<?php endif; ?>

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_footer(); ?>
