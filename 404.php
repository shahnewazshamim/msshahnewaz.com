<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'loading' ); ?>
<?php get_template_part( 'template-parts/content', 'navbar' ); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<?php get_template_part( 'page-contents/main', '404' ); ?>
<?php get_template_part( 'template-parts/content', 'footer' ); ?>
<?php get_footer(); ?>
