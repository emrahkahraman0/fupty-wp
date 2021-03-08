<?php
/*Template Name: Teams Page*/
get_header(); ?>

<div id="teams_banner">

    <img src="<?php the_field('teams_bg') ?>" class="img-fluid" alt="">
    <div class="text"><?php the_title(); ?></div>

</div>
<!-- teams_banner# -->

<?php get_template_part( 'templates/team', 'page' ); ?>

<?php get_template_part( 'templates/brands', 'page' ); ?>

<?php get_footer(); ?>