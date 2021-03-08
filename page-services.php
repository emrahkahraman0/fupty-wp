<?php
/*Template Name: Services Page*/
get_header(); ?>

<div id="services_banner">

    <img src="<?php the_field('services_bg') ?>" alt="">
    <div class="text"><?php the_title(); ?></div>

</div>
<!-- services_banner# -->

<?php get_template_part( 'templates/service', 'page' ); ?>

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_footer(); ?>
