<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package paritet
 */

get_header();
while ( have_posts() ) : the_post();
    get_template_part( 'template-parts/content', 'category' );
endwhile; // End of the loop.
get_footer();