<?php
/**
 * Template Name: MSS Home
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'loading' ); ?>
<?php get_template_part( 'template-parts/content', 'navbar' ); ?>
<?php get_template_part( 'template-parts/content', 'slider' ); ?>
<?php get_template_part( 'template-parts/content', 'about' ); ?>
<?php get_template_part( 'template-parts/content', 'instagram' ); ?>
<?php if(cs_get_options()['mss_hire_is_home_page']): ?>
    <section class="section-padding">
        <div class="container">
        <?php get_template_part( 'template-parts/content', 'hire' ); ?>
        </div>
    </section>
<?php endif; ?>
<?php get_template_part( 'template-parts/content', 'footer' ); ?>
<?php get_footer(); ?>
