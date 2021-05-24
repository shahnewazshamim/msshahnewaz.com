<?php
/**
 * Template Name: MSS Contact
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
<?php get_template_part( 'page-contents/main', 'contact' ); ?>
<?php if(cs_get_options()['mss_packages_is_contact_page']): ?>
    <?php get_template_part( 'template-parts/content', 'packages' ); ?>
<?php endif; ?>
<?php get_template_part( 'template-parts/content', 'footer' ); ?>
<?php get_footer(); ?>
