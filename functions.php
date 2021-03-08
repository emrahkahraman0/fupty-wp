<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//Post-Thumbnails
add_theme_support('post-thumbnails');

//Guteberg-Disable
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
    return false;
}

//Logo Ekleme
add_theme_support( 'custom-logo', array(
    'height'      => 27,
    'width'       => 116,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

//Admin-Bar Kaldırma
function remove_admin_bar() {
    show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

//Menu
function register_my_menu() {
    register_nav_menu('primary',__('Primary Menu'));
}
add_action('init', 'register_my_menu');

//PageNavi
function sayfalama($pages = '', $range = 3)
{
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    if(1 != $pages)
    {
        echo "<div class='wp-pagenavi'>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
        echo "</div>\n";
    }
}

?>