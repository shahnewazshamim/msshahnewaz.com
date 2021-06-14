<?php
/**
 * The template part (page) for displaying portfolio page main content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<section class="section-padding">
    <div class="container">
        <?php echo do_shortcode( '[youtube-feed]' ); ?>
    </div>
</section>

<?php if(cs_get_options()['mss_hire_is_other_page']): ?>
    <section class="section-padding">
        <div class="container">
            <?php get_template_part( 'template-parts/content', 'hire' ); ?>
        </div>
    </section>
<?php endif; ?>