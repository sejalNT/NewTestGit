<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
/**
 * Template Name: Search Page
 */
?>


		<h2>Search Posts </h2>
		<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php get_search_form(); ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->
		
	

<?php
get_footer();
